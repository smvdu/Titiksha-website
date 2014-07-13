$.fn.removeClassRegex = function(regex) {
    return $(this).removeClass(function(index, classes) {
        return classes.split(/\s+/).filter(function(c) {
            return regex.test(c);
        }).join(' ');
    });
};
    
var teamCss, parallaxOptions = {
    mouseport: $('section#home'),
    yparallax: false,
    xorigin: 0.5,
    yorigin: 0.5,
    decay: 0,
    frameDuration: 1000,
    freezeClass: 'freeze'
};

$(document).ready(function() {
    
    if($(window).width() >= 768) {
        $('section').css('height', $(window).height());
    }
    $('#portfolio').css('min-height',0).css('height', $(window).height() - $('#navbar').height());    
    $('#city-parallax div').parallax(parallaxOptions);

    function isCanvasSupported(){
        var elem = document.createElement('canvas');
        return !!(elem.getContext && elem.getContext('2d'));
    }    
    var canvasSupported = isCanvasSupported();

    var target, currentSection, prevSection, runAnimated = true, animateSpeed = 600;
    var switchSection = function(hash, load, self, offset, speed) {
        if($('body.animating').length) {
            return false;
        }
        target = (load === true) ? $('#' + hash.substr(2)) : ((self === true) ? $('#' + hash) : $(hash));
        $('body').addClass('animating');
        if(target.length) {
            if(target.hasClass('box-overlay')) {
                target.removeClass('isout').addClass('isin').fadeIn('fast');
                target.find('.in').removeClass('isout').addClass('isin');
                target.find('.close').on('click', function(event) {
                    event.preventDefault();
                    $('nav a.active').removeClass('active').siblings('[href="#' + prevSection + '"]').addClass('active').trigger('click');
                    runAnimated = false;
                    target.removeClass('isin').addClass('isout').fadeOut('fast');
                    $(this).unbind('click');
                    $('body').removeClass('animating');
                    document.location.hash = '/' + prevSection;
                    runAnimated = true;
                });
            } else {
                if(target.attr('data-menusnap-offset')) {
                    offset = target.offset().top + parseInt(target.attr('data-menusnap-offset'));
                }
                $('html,body').stop().animate({
                    scrollTop: offset ? offset : target.offset().top
                }, runAnimated ? animateSpeed : 1, function() {
                    setTimeout(function() {
                        $('body').removeClass('animating');
                        if($(window).width() <= 1024) {
                            target.find('.mhint:not(.visible)').addClass('visible').fadeIn(200, function() {
                                setTimeout(function() {
                                    target.find('.mhint').fadeOut(200);
                                }, 2000);
                            });
                        }
                        target.find('.in').removeClass('isout').addClass('isin');
                    }, 10);
                });
                switch(target.attr('id')) {
                    case 'home':
                        $('#home-slider > ul').cycle('resume');
                        break;
                    default:
                        $('#home-slider > ul').cycle('pause');
                        break;
                }
                currentSection = target.attr('id');
            }
            $('nav a.active').removeClass('active');
            $('nav a[href="#' + target.attr('id') + '"]').addClass('active');
            $('title').text((target.attr('data-title') ? (target.attr('data-title') + ' — ') : '') + base_title);
            document.location.hash = '/' + target.attr('id');
            runAnimated = true;
            animateSpeed = 600;
            prevSection = (typeof(currentSection) != "undefined") ? currentSection : 'home';
        }
    };
    
    var nextProjectItem, prevProjectItem;
    var showProject = function(el) {
        $('html,body').css('overflow','hidden');
        prevProjectItem = el.parents('li').prev('li').length ? el.parents('li').prev('li') : $('#portfolio ul li:last-child');
        nextProjectItem = el.parents('li').next('li').length ? el.parents('li').next('li') : $('#portfolio ul li:first-child');
        $('#projects').find('.in').addClass('isin');
        $('#projects .inner').load("public/projects/" + el.attr('data-project') + "/content.html", null, function() {
            setTimeout(function() {
                $('#projects .in').each(function() {
                    if ($(this).visible(true)) {
                        $(this).addClass('isin');
                    }
                });
            }, 200);
        });
        if(!$('#projects.isin').length) {
            $('#projects').addClass('isin').fadeIn('fast');
        }
        $('#projects').find('.close').bind('click', function(e) {
            $('body').removeClass('animating');
            runAnimated = false;
            currentSection = 'portfolio';
            $('nav a.active').removeClass('active');
            $('nav a[href="#portfolio"]').addClass('active').trigger('click');
            $('#projects').removeClass('isin').fadeOut('fast');
            $('html,body').css('overflow','auto');
            document.location.hash = '/portfolio';
            return false;
        });
        $('#projects').find('.next:not(.processed)').addClass('processed').on('click', function(event) {
            event.preventDefault();
            nextProjectItem.find('a[data-project]').trigger('click');
            return false;
        });
        $('#projects').find('.prev:not(.processed)').addClass('processed').on('click', function(event) {
            event.preventDefault();
            prevProjectItem.find('a[data-project]').trigger('click');
            return false;
        });
        $('title').text((el.attr('data-title') ? (el.attr('data-title') + ' - ') : '') + base_title);
        document.location.hash = '/' + el.attr('data-project');
    };
    
    var runExplore = function(dir) {
        switch(dir) {
            case 'down':
                setTimeout(function() {
                    $('#elevator img').animate({
                        top: $('#elevator').height()
                    }, 6000, 'easeOutSine');
                    $('#elevator .line').animate({
                        height: $('#elevator').height()
                    }, 6000, 'easeOutSine');
                }, 700);
                break;
            case 'up':
                $('#story-intro .in').removeClass('isin').addClass('isout');
                setTimeout(function() {
                    $('#elevator img').animate({
                        top: '-150px'
                    }, 6000, 'easeOutSine');
                    $('#elevator .line').animate({
                        height: 0
                    }, 6000, 'easeOutSine');
                }, 700);
                break;
        }
    };
    
    var addInClasses = function(params) {
        params = $.extend({}, params);
        $('.in:not(.box-overlay)').each(function(i, el) {
            if ($(el).visible(true)) {
                if(typeof(params.delay) != "undefined" && $(el).parents(params.delay.parent).length) {
                    setTimeout(function() {
                        $(el).removeClass('isout').addClass('isin');
                    }, params.delay.timeout);
                } else {
                    $(el).removeClass('isout').addClass('isin');
                }
            } else if($(el).parents('.box-overlay').length == 0) {
                $(el).removeClass('isin').addClass('isout');
            }
        });
    };
    
    var screenFlash = function(time) {
        $('.screen-flash').css({'opacity':1, 'display':'block'}).animate({'opacity':0}, time, 'easeOutSine', function() {
            $(this).hide();
        });
    }
    
    var finishStory = function() {
        $.storyboard([
            function(dfr) {
                $('#s6').fadeIn(1500);
                dfr.resolve();
            }, 1000, function(dfr) {
                screenFlash(1000);
                $('#s6 .earth.full').css('opacity',0);
                $('#s6 .earth:not(.full)').css('opacity',1);
                dfr.resolve();
            }, 500, function(dfr) {
                $('#earth').addClass('shake');
                dfr.resolve();
            }, 2000, function(dfr) {
                screenFlash(1500);
                $('#s6 .earth.left').animate({'margin-left':'-=50%'}, 8000);
                $('#s6 .earth.top').animate({'margin-top':'-=50%'}, 8000);
                $('#s6 .earth.right').animate({'margin-right':'-=50%'}, 8000);
                $('#s6 .earth.bottom').animate({'margin-bottom':'-=50%'}, 8000);
                dfr.resolve();
            }, 4000, function(dfr) {
                $('#story').fadeOut(2000).removeClass('isin').addClass('isout');
                screenFlash(3000);
                switchSection('#about');
                dfr.resolve();
            }
        ]);
    };
    
    var launchStory = function() {
        var delay = 500, ogiBlink, andrzejFlash, thunderBlink, konradsShake;
        story = $('#story');
        $.storyboard([
            
            // Scene 1 (#s1)
            
            function(dfr) {
                $('#s1 .kuba, #s1 .konrad').css({'bottom':0});
                $('#s1 .andrzej .avatar, #s1 .andrzej .cable').css({'margin':'0 0 -125px -200px'});
                $('#s1 .hide').css({'opacity':0});
                $('#s1 .cable').css({'height':$('#s1 .cable').height()-15});
                dfr.resolve();
            }, 500,
            function(dfr) {
                $('#s1 .machine').delay(1500).animate({'opacity':1},1500);
                $('#s1 .top-secret').delay(1500).animate({'opacity':1},1500);
                $('#s1 .desk').css({'left':'200%'}).animate({'opacity':1,'left':'50%'},2000,'easeInOutSine');
                $('#s1 .screen, #s1 .control').css({'left':'200%'}).animate({'opacity':1,'left':'50%'},2500,'easeInOutSine');
                dfr.resolve();
            }, 3000,
            function(dfr) {
                $('#s1 .kuba').animate({'bottom':'440px'},1000);
                $('#s1 .konrad').delay(750).animate({'bottom':'440px'},1000);
                dfr.resolve();
            }, 3000,
            function(dfr) {
                $('#s1 .kuba .msg').css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(1000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                $('#s1 .konrad .msg').delay(2000).css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(1000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                dfr.resolve();
            }, 4000,
            function(dfr) {
                $('#s1 .andrzej .avatar').animate({'margin':0},1000,'easeInOutSine');
                $('#s1 .andrzej .cable').animate({'margin':0},1000,'easeInOutSine');
                $('#s1 .cable').delay(1000).animate({'height':$('#s1 .cable').height()+15},1000);
                dfr.resolve();
            }, 3000,
            function(dfr) {
                $('#s1 .blink').addClass('active');
                $('#s1 .smoke').css({'margin-bottom':'-100px'}).delay(1000).animate({'opacity':1,'margin-bottom':0},1000);
                dfr.resolve();
            }, 3000,
            function(dfr) {
                $('#s1').animate({'margin-left':'-100%','opacity':0}, 1500, 'easeInOutSine');
                dfr.resolve();
            }, 1500,
            
            // Scene 2 (#s2)
            
            function(dfr) {
                $('#s2').show();
                $('#s2 .ogi img').css({'margin-top':'300px'});
                $('#s2 .machine').css({'top':'-200%'});
                $('#s2 .guys img').css({'margin-bottom':'-300px'});
                $('#s2 .parts img').css({'margin-bottom':'150%'});
                $('#s2 .hide').css({'opacity':0});
                var textIdx = 0;
                $('#s2 .danger').text(warnings[textIdx++]);
                setInterval(function() {
                    $('#s2 .danger').text(warnings[textIdx++]);
                    textIdx = (textIdx == warnings.length) ? 0 : textIdx;
                }, 2000);
                dfr.resolve();
            }, 1000,
            function(dfr) {
                delay = 500;
                $('#s2 .window, #s2 .door').animate({'opacity':1},2000);
                $('#s2 .desk').css({'left':'200%','opacity':1}).animate({'left':'50%'},2500,'easeInOutSine');
                $('#s2 .guys img').delay(1500).each(function() {
                    $(this).delay(delay).animate({'margin-bottom':0},1000,'easeInOutSine');
                    delay+=500;
                });
                dfr.resolve();
            }, 5000,
            function(dfr) {
                $('#s2 .ogi img').animate({'margin-top':0},1000,'easeInOutSine');
                $('#s2 .machine').css({'opacity':1}).animate({'top':'50%'},4000,'easeInOutSine');
                $('#s2 .floor').delay(4000).animate({'opacity':1},1000);
                dfr.resolve();
            }, 4000,
            function(dfr) {
                $('#s2').addClass('animating');
                ogiBlink = setInterval(function() {
                    $('#s2 .ogi img').css({'opacity':Math.min(1,Math.random(0.9,1.0)+0.7)});
                }, 10);
                dfr.resolve();
            }, 2000,
            function(dfr) {
                $('#s2 .harmony').addClass('more');
                $('#s2 .parts .r1').animate({'margin-bottom':0},1000,'linear',function() {
                    $('#s2 .harmony').removeClass('more');
                    $(this).animate({'margin-left':0},{
                        step: function(now,fx) {
                            $(this).css({'-webkit-transform':'rotate('+now+'deg)','-moz-transform':'rotate('+now+'deg)','transform':'rotate('+now+'deg)'}); 
                        },
                        duration : 1000
                    });
                });
                dfr.resolve();
            }, 4000,
            function(dfr) {
                $('#s2 .harmony').addClass('more');
                $('#s2 .parts .r2').animate({'margin-bottom':0},1000,'linear',function() {
                    $('#s2 .harmony').removeClass('more');
                    $(this).animate({'margin-left':0},{
                        step: function(now,fx) {
                            $(this).css({'-webkit-transform':'rotate('+now+'deg)','-moz-transform':'rotate('+now+'deg)','transform':'rotate('+now+'deg)'}); 
                        },
                        duration : 1000
                    });
                });
                dfr.resolve();
            }, 4000,
            function(dfr) {
                $('#s2 .harmony').addClass('more');
                $('#s2 .parts .r3').animate({'margin-bottom':0},1000,'linear',function() {
                    $('#s2 .harmony').removeClass('more');
                    $(this).animate({'margin-left':0},{
                        step: function(now,fx) {
                            $(this).css({'-webkit-transform':'rotate('+now+'deg)','-moz-transform':'rotate('+now+'deg)','transform':'rotate('+now+'deg)'}); 
                        },
                        duration : 1000
                    });
                });
                dfr.resolve();
            }, 4000,
            function(dfr) {
                $('#s2 .harmony').addClass('more');
                $('#s2 .parts .r4').animate({'margin-bottom':'92px'},1000,'linear',function() {
                    $('#s2 .harmony').removeClass('more');
                    $(this).animate({'margin-left':0,'bottom':'-30px'},{
                        step: function(now,fx) {
                            $(this).css({'-webkit-transform':'rotate('+now+'deg)','-moz-transform':'rotate('+now+'deg)','transform':'rotate('+now+'deg)'}); 
                        },
                        duration : 1000
                    });
                });
                dfr.resolve();
            }, 1000,
            function(dfr) {
                $('#s2').removeClass('animating');
                clearInterval(ogiBlink);
                $('#s2 .ogi img').css({'opacity':1});
                dfr.resolve();
            }, 2000, 
            function(dfr) {
                $('#s2 .msgs').css('opacity',1);
                $('#s2 .msg.konrad').css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(2000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                $('#s2 .msg.andrzej').delay(2000).css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(2000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                $('#s2 .msg.kuba').delay(4000).css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(2000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                dfr.resolve();
            }, 6000,
            function(dfr) {
                $('#s2 .cart').addClass('animating').css({'opacity':1,'margin-left':'-100%'}).animate({'margin-left':'-80px'}, 4500, function() {
                    $(this).removeClass('animating').addClass('smash');
                    setTimeout(function() {
                        $('#s2 .r1, #s2 .r3').addClass('smashed');
                    }, 200);
                });
                dfr.resolve();
            }, 6000,
            function(dfr) {
                $('#s2 .cart').addClass('unsmash').addClass('animating').animate({'margin-left':'110px'}, 1000, function() {
                    $(this).removeClass('animating unsmash smash').addClass('smash');
                    setTimeout(function() {
                        $('#s2 .r2, #s2 .r4').addClass('smashed');
                    }, 200);
                });
                dfr.resolve();
            }, 1500,
            function(dfr) {
                $('#s2 .cart').addClass('unsmash').removeClass('smash');
                dfr.resolve();
            }, 1000,
            function(dfr) {
                $('#s2 .cart').addClass('animating').animate({'margin-left':'100%'}, 2500, function() {
                    $(this).fadeOut('fast');
                });
                dfr.resolve();
            }, 2500, 
            function(dfr) {
                $('#s2').animate({'margin-left':'-100%','opacity':0}, 1500, 'easeInOutSine');
                dfr.resolve();
            }, 1500,
            
            // Scene 3 (#s3)
            
            function(dfr) {
                $('#s3').show();
                $('#s3 .hide').css({'opacity':0});
                dfr.resolve();
            }, 1500, 
            function(dfr) {
                $('#s3 .machine').delay(1000).animate({'opacity':1},1500);
                $('#s3 .top-secret').delay(1000).animate({'opacity':1},1500);
                $('#s3 .desk').css({'left':'200%'}).animate({'opacity':1,'left':'50%'},2000,'easeInOutSine');
                $('#s3 .screen, #s3 .control').css({'left':'200%'}).animate({'opacity':1,'left':'50%'},2000,'easeInOutSine');
                setTimeout(function() {
                    $('#s3 .ashtray, #s3 .cup, #s3 .vodka').addClass('shaking');
                    konradsShake = setInterval(function() {
                        $('#s3 .ashtray, #s3 .cup, #s3 .vodka').addClass('shaking');
                        setTimeout(function() {
                            $('#s3 .shaking').removeClass('shaking');
                        }, 200);
                    }, 400);
                    setTimeout(function() {
                        $('#s3 .shaking').removeClass('shaking');
                    }, 200);
                }, 1250);
                dfr.resolve();
            }, 2500,
            function(dfr) {
                $('#s3 .konrad .msg.first').delay(1000).css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(2000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                $('#s3 .kuba .msg').delay(3000).css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(2000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                $('#s3 .ogi.msg').delay(5000).css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(2000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                $('#s3 .piotrek .msg').delay(7000).css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(2000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                $('#s3 .konrad .msg.last').delay(10000).css({'margin-top':'30px'}).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(2000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine');
                dfr.resolve();
            }, 12000, 
            function(dfr) {
                $('#s3').animate({'margin-left':'-100%','opacity':0}, 1500, 'easeInOutSine');
                dfr.resolve();
            }, 1500,

            // Scene 4 (#s4)
            
            function(dfr) {
                $('#s4').fadeIn(1000);
                $('#s4 .hide').css({'opacity':0});
                $('#s4 .thunder').hide();
                $('#s4 .andrzej .hand').css({'margin-top':'50px'});
                $('#s4 .robot-area').css({'height':0,'margin-top':'334px'}).hide();
                dfr.resolve();
            }, 3000,
            function(dfr) {
                $('#s4 .window').animate({'opacity':1},2000);
                $('#s4 .machine').delay(1000).animate({'opacity':1},1500);
                $('#s4 .robot-area').animate({'opacity':1},1000);
                dfr.resolve();
            }, 3000,
            function(dfr) {
                var tm, tmin;
                $('#s4').addClass('animating');
                $('#s4 .robot-area').animate({'height':'594px','margin-top':'-260px'},20000,'linear').show();
                $('#s4 .rightbox .laser').css('border-spacing',18).animate({'border-spacing':0}, {
                    step: function(now,fx) {
                        $(this).css({'-webkit-transform':'rotate('+now+'deg)','-moz-transform':'rotate('+now+'deg)','transform':'rotate('+now+'deg)'}); 
                    }, duration:20000
                });
                $('#s4 .rightbox .spark-laser').css('border-spacing',63).animate({'width':'200px','top':'-330px','left':'305px','border-spacing':48}, {
                    step: function(now,fx) {
                        $(this).css({'-webkit-transform':'rotate('+now+'deg)','-moz-transform':'rotate('+now+'deg)','transform':'rotate('+now+'deg)'}); 
                    }, duration:20000, complete:function() {
                        $('#s4').removeClass('animating');
                        clearInterval(andrzejFlash);
                        $('#s4 .big-robot').addClass('its-alive');
                    }
                });
                andrzejFlash = setInterval(function() {
                    if($('#s4 .andrzej .blink.active').length) { return; }
                    clearTimeout(tm);
                    clearTimeout(tmin);
                    tm = setTimeout(function() {
                        $('#s4 .andrzej .hand').stop().animate({'margin-top':0},500,function() {
                            $('#s4 .andrzej .blink').addClass('active');
                            tmin = setTimeout(function() {
                                $('#s4 .andrzej .blink').removeClass('active');
                                $('#s4 .andrzej .hand').animate({'margin-top':'50px'},500);
                            }, (Math.random()+2000)*2);
                        });
                    }, (Math.random()+1000)*2);
                }, 2500);
                dfr.resolve();
            }, 23000,
            function(dfr) {
                $('#s4 .window').fadeOut(1000);
                $('#s4 .machine').animate({'margin-left':'-100%','opacity':0},2000,'easeOutSine');
                dfr.resolve();
            }, 2000,
            function(dfr) {
                $('#s4 .robot-area').animate({'margin':'-300px 0 0 -225px','height':'670px'},3000,'easeOutSine');
                dfr.resolve();
            }, 3000,
            function(dfr) {
                screenFlash(200);
                $('#s4 .big-robot').addClass('hands-up shake');
                $('#s4 .thunder').show();
                dfr.resolve();
            }, 3000,
            function(dfr) {
                thunderBlink = setInterval(function() {
                    $('#s4 .thunder, #s4 .ball').each(function() {
                        $(this).css({'opacity':Math.min(1,Math.random(0.9,1.0)+0.2)});
                    });
                }, 10);
                dfr.resolve();
            }, 3000,
            function(dfr) {
                screenFlash(200);
                $('#s4 .ball .a').animate({'margin':'-32px 0 0 -32px','border-width':'32px'},1000,'easeOutSine');
                dfr.resolve();
            }, 3000,
            function(dfr) {
                screenFlash(200);
                $('#s4 .ball .b').animate({'margin':'-47px 0 0 -47px','border-width':'47px'},1000,'easeOutSine');
                dfr.resolve();
            }, 3000,
            function(dfr) {
                screenFlash(200);
                $('#s4 .ball .c').animate({'margin':'-67px 0 0 -67px','border-width':'67px'},1000,'easeOutSine');
                dfr.resolve();
            }, 3000,
            function(dfr) {
                screenFlash(1500);
                clearInterval(thunderBlink);
                $('#s4').hide();
                dfr.resolve();
            }, 1000,

            function(dfr) {
                $('#s5 .hide').css({'opacity':0});
                $('#s5 .robot-side').addClass('swing').animate({'left':'65%'},5000,'linear');
                $('#s5').fadeIn(1000);
                dfr.resolve();
            }, 5000,
            function(dfr) {
                var cityMoveSpeed = 20000;
                $('#s5 .city').animate({'left':'-'+(parseInt($('#s5 .city').width())-parseInt($(window).width()))+'px'}, {
                    step : function(now, fx) {
                        if(parseInt($('#s5 .zus').offset().left) < parseInt($(window).width())*0.55) {
                            $('#s5 .city, #s5 .skytower, #s5 .katedra').stop(true);
                            $('#s5 .robot-side').removeClass('swing').find('.msg').css({'margin-top':'30px'}).delay(500).animate({'opacity':1,'margin-top':0},300,'easeInOutSine').delay(1000).animate({'opacity':0,'margin-top':'-100px'},300,'easeInOutSine',function(){
                                $('#s5 .robot-side').addClass('swing');
                                $('#s5 .city').animate({'left':'+='+(parseInt($(window).width())*0.2)+'px'},3000,function(){
                                    $('#s5 .robot-side').removeClass('swing');
                                    setTimeout(function() {
                                        $('#s5 .robot-side .arm.l').css('border-spacing',0).animate({'border-spacing':8}, {
                                            step: function(now,fx) {
                                                $(this).css({'-webkit-transform':'rotate('+now+'deg)','-moz-transform':'rotate('+now+'deg)','transform':'rotate('+now+'deg)'}); 
                                            }, duration:1500,
                                            complete: function() {
                                                $('#s5').addClass('animating');
                                                setTimeout(function() {
                                                    $('#s5 .zus .explode').show().css('opacity',0);
                                                    screenFlash(200);
                                                    $('#s5').removeClass('animating');
                                                    var explodeBlink = setInterval(function() {
                                                        $('#s5 .zus .explode').css({'opacity':Math.min(1,Math.random(0.9,1.0)+0.7)});
                                                    }, 10);
                                                    setTimeout(function(){
                                                        clearInterval(explodeBlink);
                                                        $('#s5 .zus .explode').hide();
                                                        $('#s5 .zus .ruins').css('opacity',1);
                                                        $('#s5 .zus .good').hide();
                                                        $('#s5 .zus .smoke').css({'margin-bottom':'-100px'}).animate({'opacity':1,'margin-bottom':0},1000);
                                                        setTimeout(function() {
                                                            $('#s5 .city').animate({'left':'-'+(parseInt($('#s5 .city').width())-parseInt($(window).width()))+'px'}, cityMoveSpeed, 'linear');
                                                            $('#s5 .robot-side').addClass('swing').animate({'left':'120%'}, 3000, 'linear');
                                                            $('#s5 .skytower').animate({'left':'-10%'}, cityMoveSpeed, 'linear');
                                                            $('#s5 .katedra').animate({'left':'-20%'}, cityMoveSpeed, 'linear');
                                                            setTimeout(function() {
                                                                $('#s5').fadeOut(1000, function() {
                                                                  finishStory();
                                                                });
                                                            }, 2000);
                                                        }, 2000);
                                                    }, 2000);
                                                }, 2000);
                                            }
                                        });
                                        $('#s5 .robot-side .arm.r').css('border-spacing',0).animate({'border-spacing':20}, {
                                            step: function(now,fx) {
                                                $(this).css({'-webkit-transform':'rotate(-'+now+'deg)','-moz-transform':'rotate(-'+now+'deg)','transform':'rotate(-'+now+'deg)'}); 
                                            }, duration:1500
                                        });
                                    }, 1000);
                                });
                                $('#s5 .skytower').animate({'left':'+=2%'},5000);
                                $('#s5 .katedra').animate({'left':'+=4%'},5000);
                            });
                        }
                    },
                    duration : cityMoveSpeed,
                    easing : 'linear'
                });
                $('#s5 .skytower').animate({'left':'10%'}, cityMoveSpeed, 'linear');
                $('#s5 .katedra').animate({'left':'20%'}, cityMoveSpeed, 'linear');
            }
            
        ]);
    };
    
    // HOME SLIDER
    var started = false, next_slide, current_slide, _continueDrawing = true;
    $('#home-slider > ul').cycle({
        speed : 750,
        timeout : 4000,
        pager : '#home-pager',
        containerResize : false,
        after: function(){
            next_slide = $(this);
            if(started){
                if($(window).width() >= 768) {
                    homepageWheelDraw('wheel-stroke-1');
                }
                if(next_slide.hasClass('ltr')) {
                    next_slide.find('img').animate({ 'right' : '50%', 'opacity' : 1 }, 750, 'easeOutSine');
                    next_slide.find('h2').animate({ 'left' : '50%', 'opacity' : 1 }, 750, 'easeOutSine');
                } else {
                    next_slide.find('img').animate({ 'left' : '50%', 'opacity' : 1 }, 750, 'easeOutSine');
                    next_slide.find('h2').animate({ 'right' : '50%', 'opacity' : 1 }, 750, 'easeOutSine');
                }
                _continueDrawing = true;
            }
        },
        before: function(currSlide, nextSlide){
            next_slide = $(nextSlide);
            current_slide = $(currSlide);
            if(started){
                if(next_slide.hasClass('ltr')) {
                    next_slide.find('img').css({ 'right' : '100%', 'opacity' : 0 });
                    next_slide.find('h2').css({ 'left' : '100%', 'opacity' : 0 });
                } else {
                    next_slide.find('img').css({ 'left' : '100%', 'opacity' : 0 });
                    next_slide.find('h2').css({ 'right' : '100%', 'opacity' : 0 });
                }
                if(current_slide.hasClass('ltr')) {
                    current_slide.find('img').animate({ 'right' : '-100%', 'opacity' : 0 }, 1200);
                    current_slide.find('h2').animate({ 'left' : '-100%', 'opacity' : 0 }, 1200);
                } else {
                    current_slide.find('img').animate({ 'left' : '-100%', 'opacity' : 0 }, 1200);
                    current_slide.find('h2').animate({ 'right' : '-100%', 'opacity' : 0 }, 1200);
                }
            }
        }
    }).cycle('pause').swipe({
        swipeLeft : function() {
            $('#home-slider > ul').cycle('next');
        },
        swipeRight : function() {
            $('#home-slider > ul').cycle('prev');
        },
        threshold : 100
    });
    started = true;
    
    // PROJECTS SLIDER
    var pr_next_slide, pr_current_slide, cycle_ready = false;
    $('#projects-list > ul').cycle({
        speed : 750,
        timeout : 0,
        pager : '#projects-list .pager',
        fx: 'fade',
        containerResize: false,
        slideResize: false,
        fit: 1,
        prev: $('#prev-project'),
        next: $('#next-project'),
        after: function(){
            pr_next_slide = $(this);
            if(cycle_ready) {
                pr_next_slide.find('.info').animate({'margin-left':'0'},750);
            } else {
                pr_next_slide.find('.info').css({'margin-left':'0'});
            }
        },
        before: function(currSlide, nextSlide){
            pr_next_slide = $(nextSlide);
            pr_current_slide = $(currSlide);
            if(cycle_ready) {
                if(pr_next_slide.index() > pr_current_slide.index()) {
                    pr_next_slide.find('.info').css({'margin-left':'125%'});
                    pr_current_slide.find('.info').animate({'margin-left':'-100%'},750);
                } else {
                    pr_next_slide.find('.info').css({'margin-left':'-125%'});
                    pr_current_slide.find('.info').animate({'margin-left':'100%'},750);
                }
            }
        }
    }).cycle('pause').parents('#portfolio').swipe({
        swipeLeft : function() {
            $('#projects-list > ul').cycle('next');
        },
        swipeRight : function() {
            $('#projects-list > ul').cycle('prev');
        },
        threshold : 100
    });
    cycle_ready = true;
        
    (function() {
        var lastTime = 0;
        var vendors = ['ms', 'moz', 'webkit', 'o'];
        for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
            window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
            window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
                                       || window[vendors[x]+'CancelRequestAnimationFrame'];
        }

        if (!window.requestAnimationFrame)
            window.requestAnimationFrame = function(callback, element) {
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                var id = window.setTimeout(function() { callback(currTime + timeToCall); },
                  timeToCall);
                lastTime = currTime + timeToCall;
                return id;
            };

        if (!window.cancelAnimationFrame)
            window.cancelAnimationFrame = function(id) {
                clearTimeout(id);
            };
    }());
    
    // HOMEPAGE SPACE CANVAS
    if(canvasSupported) {
        var wheelCanvas, wheelCtx, x, y, startAngle, currAngle, endAngle, radius, borderWidth, slideAngles, size;
        var animateCircle = function(current,wheelCanvas,wheelCtx) {
            wheelCtx.clearRect(0, 0, wheelCanvas.width, wheelCanvas.height);
            wheelCtx.beginPath();
            wheelCtx.arc(x, y, radius, startAngle - 2*Math.PI, current - 2*Math.PI, false);
            wheelCtx.stroke();
            currAngle += 0.04*Math.PI;
            if (currAngle < endAngle) {
                requestAnimationFrame(function () {
                    animateCircle(currAngle,wheelCanvas,wheelCtx);
                });
            } else if(_continueDrawing !== false) {
                _continueDrawing = false;
                homepageWheelDraw('wheel-stroke-2');
            }
        };
        
        function homepageWheelDraw(id) {
            size = ($(window).width() < 768) ? 'xs' : (($(window).width() <= 1024) ? 'sm' : 'md');
            slideAngles = $.parseJSON(next_slide.attr('data-angles'));
            startAngle = parseFloat(parseFloat(slideAngles[id][size].sa) * Math.PI);
            currAngle = parseFloat(parseFloat(slideAngles[id][size].ca) * Math.PI);
            endAngle = parseFloat(parseFloat(slideAngles[id][size].ea) * Math.PI);
            borderWidth = parseInt(slideAngles[id][size].bw);
            wheelCanvas = document.getElementById(id);
            wheelCtx = wheelCanvas.getContext('2d');
            x = Math.round(wheelCanvas.width / 2);
            y = Math.round(wheelCanvas.height / 2);
            radius = Math.round(wheelCanvas.width / 2) - borderWidth;
            wheelCtx.lineWidth = borderWidth;
            try {
                wheelCtx.setLineDash([borderWidth,borderWidth+2]);
            } catch(err) {
                console.log('Browser does not support setLineDash()');
            }
            wheelCtx.strokeStyle = '#ffffff';
            animateCircle(currAngle,wheelCanvas,wheelCtx);
        };
    };
    
    var scrollTimeout;
    var scrollEvents = function() {
        skip = false;
        dock_class = '';
        $('section[data-menusnap="true"]').each(function() {
            context = $(this);
            if($('#navbar').hasClass('sticky') && (parseInt($(this).offset().top) == parseInt($(window).scrollTop()))) {
                $('#navbar').addClass('dock');
                skip = true;
            }
            var snapOffset = parseInt($(this).attr('data-menusnap-offset'));
            if(parseInt($(window).scrollTop()) >= (parseInt($(this).offset().top) + (isNaN(snapOffset) ? 0 : snapOffset))) {
                dock_class = 'docked-' + context.attr('id');
            }
        });
        if(dock_class.length) {
            $('#navbar').removeClassRegex(/^docked-/);
            $('#navbar').addClass(dock_class);
        } else {
            $('#navbar').removeClassRegex(/^docked-/);
        }
        if(skip == false) {
            if(parseInt($(window).scrollTop()) > $('#navbar').data('baseOffset')) {
                $('#navbar').addClass('sticky').removeClass('dock');
            } else {
                $('#navbar').removeClass('sticky').removeClass('dock');
            }
        }
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(function() {
            if(parseInt($(window).scrollTop()) < ($('section#home').height() / 2)) {
                $('#home-slider > ul').cycle('resume');
            }
            if(currentSection == 'story-intro' && ($(window).width() > 1024)) {
                if(prevSection == '') {
                    $('#elevator img').css('top', $('#elevator').height());
                    $('#elevator .line').css('height', $('#elevator').height());
                    addInClasses({ delay : { parent: '#story-wheel', timeout: 100 } });
                } else {
                    addInClasses({ delay : { parent: '#story-wheel', timeout: 4000 } });
                }
            } else if(currentSection == 'home') {
                setTimeout(function() {
                    $('#elevator img').css('top', '-150px');
                    $('#elevator .line').css('height', 0);
                }, animateSpeed);
                addInClasses();
            } else {
                addInClasses();
            }
        }, 10);
    };
    
    // SITE BINDINGS
    var skip = true, context, dock_class, wheelDiff;
    $(window).on('resize', function() {
        _continueDrawing = true;
        
        $('section').css('height', $(window).height());
        if($(window).width() > 600) {
            $('#service-list > ul').removeAttr('style');
        }
        if($(window).width() >= 768) {
            $('#explore').css('height', 2 * $(window).height());
            $('#elevator').css('height', 1.5 * $(window).height() + 50);
            $('#city-parallax div').parallax(parallaxOptions);
            wheelDiff = ($(window).width() > 1024) ? 36 : 18;
            $('#wheel-stroke-1, #wheel-stroke-2').css({
                'marginLeft' : '-' + Math.round(($('#home-slider .wheel.back').width() + wheelDiff) / 2) + 'px',
                'marginTop' : '-' + Math.round(($('#home-slider .wheel.back').height() + wheelDiff) / 2) + 'px'
            }).attr('width', $('#home-slider .wheel.back').width() + wheelDiff).attr('height', $('#home-slider .wheel.back').height() + wheelDiff);
            homepageWheelDraw('wheel-stroke-1');
        }
        
        var val_el,val_parent,val_type;
        $('[data-valign="true"]').each(function() {
            val_el = $(this); val_parent = $(this).parents('section');
            val_type = (typeof val_el.attr('data-valign-type') != "undefined") ? val_el.attr('data-valign-type') : 'margin';
            val_el.css(val_type + '-top', Math.round((parseInt(val_parent.height())-parseInt(val_el.height()))/2));
        });
        
        var aboutCarousel = $('#about .jcarousel'), brandsCarousel = $('#brands .jcarousel');    
        if($(window).width() <= 1024) {
            $('#about ul li').each(function() {
                $(this).children('div').removeAttr('style');
            });
            if($(window).width() <= 767) {
                aboutCarousel.on('jcarousel:create', function () {
                    aboutCarousel.jcarousel('items').css('width', aboutCarousel.innerWidth() + 'px');
                }).on('jcarousel:reload', function () {
                    if($(this).attr('data-jcarousel') != 'true') { return false; }
                    aboutCarousel.jcarousel('items').css('width', aboutCarousel.innerWidth() + 'px');
                }).on('jcarousel:destroy', function () {
                    aboutCarousel.find('ul, li').removeAttr('style');
                }).jcarousel({
                    wrap: 'circular'
                }).swipe({
                    swipeLeft : function() { aboutCarousel.jcarouselControl({ target: '+=1' }); },
                    swipeRight : function() { aboutCarousel.jcarouselControl({ target: '-=1' }); },
                    threshold : 50
                });
                if($(window).width() <= 479) {
                    brandsCarousel.on('jcarousel:create', function () {
                        brandsCarousel.jcarousel('items').css('width', brandsCarousel.innerWidth() + 'px');
                    }).on('jcarousel:reload', function () {
                        if($(this).attr('data-jcarousel') != 'true') { return false; }
                        brandsCarousel.jcarousel('items').css('width', aboutCarousel.innerWidth() + 'px');
                    }).on('jcarousel:destroy', function () {
                        brandsCarousel.find('ul, li').removeAttr('style');
                    }).jcarousel({
                        wrap: 'circular'
                    }).swipe({
                        swipeLeft : function() { brandsCarousel.jcarouselControl({ target: '+=1' }); },
                        swipeRight : function() { brandsCarousel.jcarouselControl({ target: '-=1' }); },
                        threshold : 50
                    });
                } else if(brandsCarousel.attr('data-jcarousel') == 'true') {
                    brandsCarousel.jcarousel('destroy');
                }
            } else {
                aboutCarousel.on('jcarousel:create', function () {
                    aboutCarousel.jcarousel('items').css('width', (aboutCarousel.innerWidth() / 2) + 'px');
                }).on('jcarousel:reload', function () {
                    if($(this).attr('data-jcarousel') != 'true') { return false; }
                    aboutCarousel.jcarousel('items').css('width', (aboutCarousel.innerWidth() / 2) + 'px');
                }).on('jcarousel:destroy', function () {
                    aboutCarousel.find('ul, li').removeAttr('style');
                }).jcarousel({
                    wrap: 'circular'
                }).swipe({
                    swipeLeft : function() { aboutCarousel.jcarouselControl({ target: '+=2' }); },
                    swipeRight : function() { aboutCarousel.jcarouselControl({ target: '-=2' }); },
                    threshold : 50
                });
            }
        } else {
            $('#about ul li').each(function() {
                $(this).children('div').css('height', $(this).width());
            });
            if(aboutCarousel.attr('data-jcarousel') == 'true') {
                aboutCarousel.jcarousel('destroy');
            }
            if(brandsCarousel.attr('data-jcarousel') == 'true') {
                brandsCarousel.jcarousel('destroy');
            }
            $('.mhint').hide();
        }
        if(window.location.hash && $('#'+window.location.hash.substr(2)).length) {
            $('html,body').scrollTop($('#'+window.location.hash.substr(2)).offset().top);
        }
        addInClasses();
    }).on('scroll', function() {
        scrollEvents();
    }).on('load', function() {
        teamCss = {
            height : $('#team').height(),
            paddingTop : parseInt($('#team ul li').css('padding-top')),
            paddingBottom : parseInt($('#team ul li').css('padding-bottom'))
        }
        $('.in:not(.box-overlay)').each(function(i, el) {
            if($(this).parents('.box-overlay').length) { return; }
            if ($(el).visible(true)) {
                $(el).addClass('isin');
            }
        });
        $(window).trigger('resize');
        if(window.location.hash) {
            if(window.location.hash.substr(2) == 'story') {
                $('#launch-story').trigger('click');
            } else {
                if($('a[data-project="' + window.location.hash.substr(2) + '"]').length) {
                    showProject($('a[data-project="' + window.location.hash.substr(2) + '"]'));
                } else {
                    switchSection(window.location.hash, true);
                    prevSection = '';
                }
            }
        } else {
            $('#home-slider > ul').cycle('resume');
        }
        $('#navbar').data('baseOffset', parseInt($('#navbar').offset().top));
        setTimeout(function() {
            $('#loading').fadeOut(400);
//            $('#launch-story').trigger('click');
        }, 500);
        
    });
    
    // NAVIGATION TOGGLE
    $('#navbar .toggle').on('click', function(event) {
        event.preventDefault();
        if($(window).width() <= 1024) {
            $('#nav').slideToggle(200).toggleClass('toggled');
        }
        return false;
    });
    
    // SERVICES CONTROLS
    var curr,next,prev,currSlideIdx=0,nextSlideIdx=1;
    $(document).on('click', '#service-list .pager li a:not(.active)', function(event) {
        event.preventDefault();
        nextSlideIdx = $(this).parents('li').index();
        $('#service-list>ul:nth-child('+(currSlideIdx+1)+')>li:first-child').animate({'top':'-'+$(window).height()+'px'},1000,'easeInBack',function(){$(this).parents('ul').removeClass('active');});
        $('#service-list>ul:nth-child('+(currSlideIdx+1)+')>li:last-child').animate({'top':$(window).height()},1000,'easeInBack',function(){$(this).parents('ul').removeClass('active');});
        $('#service-list>ul:nth-child('+(nextSlideIdx+1)+')>li:first-child').css({'top':$(window).height()}).delay(750).animate({'top':0},1000,'easeOutBack',function(){$(this).parents('ul').addClass('active');});
        $('#service-list>ul:nth-child('+(nextSlideIdx+1)+')>li:last-child').css({'top':'-'+$(window).height()+'px'}).delay(750).animate({'top':0},1000,'easeOutBack',function(){$(this).parents('ul').addClass('active');});
        currSlideIdx = $(this).parents('li').index();
        $('#service-list .pager li a.active').removeClass();
        $(this).addClass('active');
    }).on('click', '#service-list .arr.right', function(event) {
        event.preventDefault();
        curr = $('#service-list .pager li a.active');
        if(curr.parents('li').next('li').length) {
            next = curr.parents('li').next('li');
        } else {
            next = curr.parents('ul').find('li:first-child');
        }
        next.addClass('active').find('a').trigger('click');
        curr.removeClass('active');
    }).on('click', '#service-list .arr.left', function(event) {
        event.preventDefault();
        curr = $('#service-list .pager li a.active');
        if(curr.parents('li').next('li').length) {
            prev = curr.parents('li').next('li');
        } else {
            prev = curr.parents('ul').find('li:first-child');
        }
        prev.addClass('active').find('a').trigger('click');
        curr.removeClass('active');
    }).on('click', '#portfolio a[data-project]', function(e) {
        e.preventDefault();
        showProject($(this));
        return false;
    }).on('click', '#projects-list .notebook .trigger', function(e) {
        e.preventDefault();
        pr_next_slide.find('a[data-project]').trigger('click');
    }).on('click', 'html,body', function(event) {
        if($(event.target).parents('#nav').length == 0) {
            $('#nav.toggled').slideUp(200).removeClass('toggled');
        }
    }).on('click', '.hash', function(e) {
        e.preventDefault();
        if($(this).hasClass('go-explore') && ($(window).width() > 1024)) {
            animateSpeed = 6000;
            runExplore('down');
        }
        switchSection($(this).attr('href'));
        if(($(this).parents('#nav').length > 0) && ($(window).width() <= 1024)) {
            $('#nav').slideUp(200).removeClass('toggled');
        }
        return false;
    }).on('click', '#launch-story', function(e) {
        e.preventDefault();
        target = $('#story');
        $('title').text((target.attr('data-title') ? (target.attr('data-title') + ' — ') : '') + base_title);
        $('#home-slider > ul').cycle('pause');
        $('#loading').fadeIn(400, function() {
            $.ajax({
                type: "GET",
                url: "story.php",
                cache: false,
                success: function(html) {
                    var imgCount = $(html).find('img').length;
                    var imgLoaded = 0;
                    target.html(html).find('img').load(function() {
                        ++imgLoaded;
                        $('#loading .percentage').text(Math.round((imgLoaded/imgCount)*100)+'%');
                        if (imgLoaded >= imgCount) {
                            $('#loading .percentage').text('100%');
                            setTimeout(function() {
                                target.addClass('isin').fadeIn('fast', function() {
                                    $('#loading').fadeOut('fast');
                                });
                                launchStory();
                            }, 1000);
                        }
                    });
                }
            });
        });
    });
    
    $('html,body').swipe({
        swipeUp : function() { $(document).triggerHandler('next_section'); },
        swipeDown : function() { $(document).triggerHandler('prev_section'); },
        threshold : 100
    });
    
    $('#service-list > ul').swipe({
        swipeLeft : function() {
            if($(window).width() <= 600) {
                var curr = $(this);
                if(Math.abs(parseInt(curr.css('margin-left'))) == parseInt($(window).width())) {
                    curr.siblings('ul').css('margin-left','100%').animate({'margin-left':'-=100%'}, 500, function() {
                        curr.css('margin-left','100%');
                    });
                }
                curr.animate({'margin-left':'-=100%'}, 500);
            } else {
                $('#service-list .arr.left').trigger('click');
            }
        },
        swipeRight : function() {
            if($(window).width() <= 600) {
                var curr = $(this);
                if(parseInt(curr.css('margin-left')) == 0) {
                    curr.siblings('ul').css('margin-left','-200%').animate({'margin-left':'+=100%'}, 500, function() {
                        curr.css('margin-left','-200%')
                    });
                }
                curr.animate({'margin-left':'+=100%'}, 500);
            } else {
                $('#service-list .arr.right').trigger('click');
            }
        },
        threshold : 100
    });
    
    // GLOBALS
    $('a[rel="external"]').attr('target', '_blank');
    
    // CONTACT SECTION
    $("#contact-form").on('submit', function() {
        $(this).find('div.error').remove();
    });
    $("#contact form input, #contact form textarea").on('keyup keydown keypress blur', function() {
        if($(this).valid()) {
            $(this).parent().next('div.error').remove();
        }
    });
    $("#contact form").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: $("input[name=lang][value=pl]").length ? "Podaj imię i nazwisko." : "Fill-in your full name."
            },
            email: {
                required: $("input[name=lang][value=pl]").length ? "Podaj swój email." : "Fill-in your email.",
                email: $("input[name=lang][value=pl]").length ? "Podany email jest błędny." : "Enter valid email."
            },
            message: {
                required: $("input[name=lang][value=pl]").length ? "Wpisz treść wiadomości." : "Write a message."
            }
        },
        errorPlacement: function(error, element) {
            element.parents('.item').next('div.error').remove();
            element.parents('.item').after('<div class="error"><i title="' + error.html() + '"></i><span>' + error.html() + '</span></div>');
        },
        submitHandler: function(form) {
            $(form).animate({
                opacity:0.5
            }, 500);
            $.ajax({
                type: "POST",
                url: "contact.php",
                data: $(form).serialize(),
                beforeSend: function() {
                    $(form).find('div.error').remove();
                    $(form).find('input[type="text"], input[type="email"], textarea').val('');
                    $('#contact .return-message').slideUp('fast').remove();
                },
                success: function(response) {
                    $(form).prepend('<div class="return-message">' + response + '</div>');
                    $(form).animate({
                        opacity:1
                    }, 500);
                }
            });
            return false;
        }
    });
    
    var toSection, scrolling;
    $(document).on('mousewheel next_section prev_section', function(event) {
        if (!$('html').data('flag')) {
            $('html').data('timeout', window.setTimeout(function() {
                $('html').data('flag', false);
                    if(event.type == 'next_section') {
                        event.deltaY = -1;
                    } else if(event.type == 'prev_section') {
                        event.deltaY = 1;
                    }
                    if($('.box-overlay:visible').length == 0) {
                        toSection = '';
                        currentSection = ((typeof(currentSection) != "undefined") && (currentSection != "")) ? currentSection : 'home';
                        if($('section#' + currentSection).length) {
                            if(parseInt(event.deltaY) <= -1) {
                                event.deltaY = -1;
                                if($('section#' + currentSection).attr('data-next')) {
                                    toSection = $('section#' + currentSection).attr('data-next');
                                } else {
                                    toSection = $('section#' + currentSection).next('section').attr('id');
                                }
                            } else if(parseInt(event.deltaY) >= 1) {
                                event.deltaY = 1;
                                if($('section#' + currentSection).attr('data-previous')) {
                                    toSection = $('section#' + currentSection).attr('data-previous');
                                } else {
                                    toSection = $('section#' + currentSection).prev('section').attr('id');
                                }
                            }
                            if(typeof(toSection) != "undefined") {
                                if((parseInt(event.deltaY) == -1) && (toSection == 'story-intro') && ($(window).width() > 1024)) {
                                    animateSpeed = 6000;
                                    runExplore('down');
                                }
                                switchSection('#' + toSection);
                            }
                        }
                    } else {
                        addInClasses();
                    }
                    $('html').data('flag', false);
            }, 10));
            $('html').data('flag', true);
        }
    });
    
});
