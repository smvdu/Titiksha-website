
// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console) {
    arguments.callee = arguments.callee.caller;
    var newarr = [].slice.call(arguments);
    (typeof console.log === 'object' ? log.apply.call(console.log, console, newarr) : console.log.apply(console, newarr));
  }
};

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,clear,count,debug,dir,dirxml,error,exception,firebug,group,groupCollapsed,groupEnd,info,log,memoryProfile,memoryProfileEnd,profile,profileEnd,table,time,timeEnd,timeStamp,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());


// place any jQuery/helper plugins in here, instead of separate, slower script files.

/* ==========================================================
 * bootstrap-alerts.js v1.4.0
 * http://twitter.github.com/bootstrap/javascript.html#alerts
 * ==========================================================
 * Copyright 2011 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */


!function( $ ){

  "use strict"

  /* CSS TRANSITION SUPPORT (https://gist.github.com/373874)
   * ======================================================= */

   var transitionEnd

   $(document).ready(function () {

     $.support.transition = (function () {
       var thisBody = document.body || document.documentElement
         , thisStyle = thisBody.style
         , support = thisStyle.transition !== undefined || thisStyle.WebkitTransition !== undefined || thisStyle.MozTransition !== undefined || thisStyle.MsTransition !== undefined || thisStyle.OTransition !== undefined
       return support
     })()

     // set CSS transition event type
     if ( $.support.transition ) {
       transitionEnd = "TransitionEnd"
       if ( $.browser.webkit ) {
        transitionEnd = "webkitTransitionEnd"
       } else if ( $.browser.mozilla ) {
        transitionEnd = "transitionend"
       } else if ( $.browser.opera ) {
        transitionEnd = "oTransitionEnd"
       }
     }

   })

 /* ALERT CLASS DEFINITION
  * ====================== */

  var Alert = function ( content, options ) {
    if (options == 'close') return this.close.call(content)
    this.settings = $.extend({}, $.fn.alert.defaults, options)
    this.$element = $(content)
      .delegate(this.settings.selector, 'click', this.close)
  }

  Alert.prototype = {

    close: function (e) {
      var $element = $(this)
        , className = 'alert-message'

      $element = $element.hasClass(className) ? $element : $element.parent()

      e && e.preventDefault()
      $element.removeClass('in')

      function removeElement () {
        $element.remove()
      }

      $.support.transition && $element.hasClass('fade') ?
        $element.bind(transitionEnd, removeElement) :
        removeElement()
    }

  }


 /* ALERT PLUGIN DEFINITION
  * ======================= */

  $.fn.alert = function ( options ) {

    if ( options === true ) {
      return this.data('alert')
    }

    return this.each(function () {
      var $this = $(this)
        , data

      if ( typeof options == 'string' ) {

        data = $this.data('alert')

        if (typeof data == 'object') {
          return data[options].call( $this )
        }

      }

      $(this).data('alert', new Alert( this, options ))

    })
  }

  $.fn.alert.defaults = {
    selector: '.close'
  }

  $(document).ready(function () {
    new Alert($('body'), {
      selector: '.alert-message[data-alert] .close'
    })
  })

}( window.jQuery || window.ender );




/**************************************************************/
/**************************************************************/
/* http://keith-wood.name/countdown.html
   Countdown for jQuery v1.5.11.
   Written by Keith Wood (kbwood{at}iinet.com.au) January 2008.
   Dual licensed under the GPL (http://dev.jquery.com/browser/trunk/jquery/GPL-LICENSE.txt) and 
   MIT (http://dev.jquery.com/browser/trunk/jquery/MIT-LICENSE.txt) licenses. 
   Please attribute the author if you use it. */

/* Display a countdown timer.
   Attach it with options like:
   $('div selector').countdown(
       {until: new Date(2009, 1 - 1, 1, 0, 0, 0), onExpiry: happyNewYear}); */

eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(k($){k 1W(){b.2E=[];b.2E[\'\']={17:[\'5F\',\'5D\',\'5C\',\'5z\',\'5y\',\'5x\',\'5t\'],5r:[\'5q\',\'5p\',\'5o\',\'5n\',\'5m\',\'5l\',\'5k\'],1T:[\'y\',\'m\',\'w\',\'d\'],1f:q,1G:\':\',3x:R};b.1F={P:q,3t:q,1m:q,1j:q,J:\'5O\',V:\'\',1d:R,B:0,1E:\'\',1Q:\'\',1P:\'\',3r:R,1Y:q,1M:q,1L:1};$.1K(b.1F,b.2E[\'\']);b.1J=[];k 2J(3p){a 2m=(3p||G K().F());j(2m-2a>=18){$.A.2I();2a=2m}1I(2J)}a 1I=1q.1I||1q.48||1q.47||1q.44||1q.42||q;a 2a=0;j(!1I){3X(k(){$.A.2I()},3W)}1n{2a=1q.3V||G K().F();1I(2J)}}a 11=\'A\';a Y=0;a O=1;a W=2;a D=3;a H=4;a M=5;a S=6;$.1K(1W.3l,{1O:\'3T\',1r:[],3S:k(p){b.2F(b.1F,p);2G(b.1F,p||{})},2H:k(2d,C,15,13,2U,2i,2j,2k){j(1H C==\'3R\'&&C.3Q==K){2k=C.2o();2j=C.2p();2i=C.2s();2U=C.2t();13=C.Z();15=C.1k();C=C.1l()}a d=G K();d.3P(C);d.3k(1);d.3N(15||0);d.3k(13||1);d.3L(2U||0);d.3I((2i||0)-(14.3H(2d)<30?2d*1x:2d));d.3F(2j||0);d.3E(2k||0);u d},3g:k(z){u z[0]*5u+z[1]*5s+z[2]*3f+z[3]*3e+z[4]*3d+z[5]*1x+z[6]},4c:k(e,T){j(!T){u $.A.1F}a 8=$.1c(e,11);u(T==\'4b\'?8.p:8.p[T])},38:k(e,p){a $e=$(e);j($e.37(b.1O)){u}$e.3U(b.1O);a 8={p:$.1K({},p),c:[0,0,0,0,0,0,0]};$.1c(e,11,8);b.36(e)},2q:k(e){j(!b.2r(e)){b.1r.35(e)}},2r:k(e){u($.3G(e,b.1r)>-1)},2f:k(e){b.1r=$.49(b.1r,k(N){u(N==e?q:N)})},2I:k(){16(a i=b.1r.21-1;i>=0;i--){b.1N(b.1r[i])}},1N:k(e,8){a $e=$(e);8=8||$.1c(e,11);j(!8){u}$e.1p(b.31(8));$e[(b.r(8,\'3x\')?\'3O\':\'3M\')+\'3K\'](\'43\');a 1M=b.r(8,\'1M\');j(1M){a z=8.U!=\'2X\'?8.c:b.2b(8,8.1e,b.r(8,\'B\'),G K());a 1L=b.r(8,\'1L\');j(1L==1||b.3g(z)%1L==0){1M.1V(e,[z])}}a 3i=8.U!=\'1X\'&&(8.I?8.1A.F()<8.I.F():8.1A.F()>=8.1b.F());j(3i&&!8.2P){8.2P=2Q;j(b.2r(e)||b.r(8,\'3r\')){b.2f(e);a 1Y=b.r(8,\'1Y\');j(1Y){1Y.1V(e,[])}a 1P=b.r(8,\'1P\');j(1P){a V=b.r(8,\'V\');8.p.V=1P;b.1N(e,8);8.p.V=V}a 1Q=b.r(8,\'1Q\');j(1Q){1q.4m=1Q}}8.2P=R}1n j(8.U==\'1X\'){b.2f(e)}$.1c(e,11,8)},36:k(e,p,N){p=p||{};j(1H p==\'2S\'){a T=p;p={};p[T]=N}a 8=$.1c(e,11);j(8){b.2F(8.p,p);2G(8.p,p);b.2W(e,8);$.1c(e,11,8);a l=G K();j((8.I&&8.I<l)||(8.1b&&8.1b>l)){b.2q(e)}b.1N(e,8)}},2F:k(2V,p){a 2T=R;16(a n 2v p){j(n!=\'1f\'&&n.L(/[2Y]2Z/)){2T=2Q;19}}j(2T){16(a n 2v 2V){j(n.L(/[2Y]2Z[0-9]/)){2V[n]=q}}}},2W:k(e,8){a l;a 1j=b.r(8,\'1j\');a 1g=0;a 27=q;16(a i=0;i<b.1J.21;i++){j(b.1J[i][0]==1j){27=b.1J[i][1];19}}j(27!=q){1g=(1j?27:0);l=G K()}1n{a 2C=(1j?1j.1V(e,[]):q);l=G K();1g=(2C?l.F()-2C.F():0);b.1J.35([1j,1g])}a 1m=b.r(8,\'1m\');1m=(1m==q?-l.3Z():1m);8.I=b.r(8,\'3t\');j(8.I!=q){8.I=b.2H(1m,b.25(8.I,q));j(8.I&&1g){8.I.2g(8.I.2o()+1g)}}8.1b=b.2H(1m,b.25(b.r(8,\'P\'),l));j(1g){8.1b.2g(8.1b.2o()+1g)}8.1e=b.33(8)},5c:k(e){a $e=$(e);j(!$e.37(b.1O)){u}b.2f(e);$e.5d(b.1O).5f();$.5g(e,11)},5h:k(e){b.U(e,\'1X\')},5A:k(e){b.U(e,\'2X\')},5M:k(e){b.U(e,q)},U:k(e,2e){a 8=$.1c(e,11);j(8){j(8.U==\'1X\'&&!2e){8.c=8.34;a 1o=(8.I?\'-\':\'+\');8[8.I?\'I\':\'1b\']=b.25(1o+8.c[0]+\'y\'+1o+8.c[1]+\'o\'+1o+8.c[2]+\'w\'+1o+8.c[3]+\'d\'+1o+8.c[4]+\'h\'+1o+8.c[5]+\'m\'+1o+8.c[6]+\'s\');b.2q(e)}8.U=2e;8.34=(2e==\'1X\'?8.c:q);$.1c(e,11,8);b.1N(e,8)}},41:k(e){a 8=$.1c(e,11);u(!8?q:(!8.U?8.c:b.2b(8,8.1e,b.r(8,\'B\'),G K())))},r:k(8,T){u(8.p[T]!=q?8.p[T]:$.A.1F[T])},25:k(1w,39){a 3a=k(1v){a Q=G K();Q.3b(Q.F()+1v*18);u Q};a 3c=k(1v){1v=1v.5e();a Q=G K();a C=Q.1l();a 15=Q.1k();a 13=Q.Z();a 2N=Q.2t();a 2M=Q.2s();a 2L=Q.2p();a 2K=/([+-]?[0-9]+)\\s*(s|m|h|d|w|o|y)?/g;a X=2K.3h(1v);5N(X){3D(X[2]||\'s\'){1z\'s\':2L+=1y(X[1],10);19;1z\'m\':2M+=1y(X[1],10);19;1z\'h\':2N+=1y(X[1],10);19;1z\'d\':13+=1y(X[1],10);19;1z\'w\':13+=1y(X[1],10)*7;19;1z\'o\':15+=1y(X[1],10);13=14.28(13,$.A.1B(C,15));19;1z\'y\':C+=1y(X[1],10);13=14.28(13,$.A.1B(C,15));19}X=2K.3h(1v)}u G K(C,15,13,2N,2M,2L,0)};a Q=(1w==q?39:(1H 1w==\'2S\'?3c(1w):(1H 1w==\'3J\'?3a(1w):1w)));j(Q)Q.2g(0);u Q},1B:k(C,15){u 32-G K(C,15,32).Z()},2y:k(3j){u 3j},31:k(8){a B=b.r(8,\'B\');8.c=(8.U?8.c:b.2b(8,8.1e,B,G K()));a 2x=R;a 2w=0;a 1Z=B;a t=$.1K({},8.1e);16(a f=Y;f<=S;f++){2x|=(8.1e[f]==\'?\'&&8.c[f]>0);t[f]=(8.1e[f]==\'?\'&&!2x?q:8.1e[f]);2w+=(t[f]?1:0);1Z-=(8.c[f]>0?1:0)}a 1s=[R,R,R,R,R,R,R];16(a f=S;f>=Y;f--){j(8.1e[f]){j(8.c[f]){1s[f]=2Q}1n{1s[f]=1Z>0;1Z--}}}a 1d=b.r(8,\'1d\');a V=b.r(8,\'V\');a 17=(1d?b.r(8,\'1T\'):b.r(8,\'17\'));a 1f=b.r(8,\'1f\')||b.2y;a 1G=b.r(8,\'1G\');a 1E=b.r(8,\'1E\')||\'\';a 1R=k(f){a 1C=$.A.r(8,\'1T\'+1f(8.c[f]));u(t[f]?8.c[f]+(1C?1C[f]:17[f])+\' \':\'\')};a 1h=k(f){a 1C=$.A.r(8,\'17\'+1f(8.c[f]));u((!B&&t[f])||(B&&1s[f])?\'<1a 1U="3Y"><1a 1U="3m">\'+8.c[f]+\'</1a><40/>\'+(1C?1C[f]:17[f])+\'</1a>\':\'\')};u(V?b.3n(8,t,V,1d,B,1s):((1d?\'<1a 1U="2n 3m\'+(8.U?\' 3o\':\'\')+\'">\'+1R(Y)+1R(O)+1R(W)+1R(D)+(t[H]?b.E(8.c[H],2):\'\')+(t[M]?(t[H]?1G:\'\')+b.E(8.c[M],2):\'\')+(t[S]?(t[H]||t[M]?1G:\'\')+b.E(8.c[S],2):\'\'):\'<1a 1U="2n 45\'+(B||2w)+(8.U?\' 3o\':\'\')+\'">\'+1h(Y)+1h(O)+1h(W)+1h(D)+1h(H)+1h(M)+1h(S))+\'</1a>\'+(1E?\'<1a 1U="2n 46">\'+1E+\'</1a>\':\'\')))},3n:k(8,t,V,1d,B,1s){a 17=b.r(8,(1d?\'1T\':\'17\'));a 1f=b.r(8,\'1f\')||b.2y;a 1i=k(2R){u($.A.r(8,(1d?\'1T\':\'17\')+1f(8.c[2R]))||17)[2R]};a x=k(N,3q){u 14.2h(N/3q)%10};a 3s={4d:b.r(8,\'1E\'),4e:b.r(8,\'1G\'),4f:1i(Y),4g:8.c[Y],4h:b.E(8.c[Y],2),4i:b.E(8.c[Y],3),4j:x(8.c[Y],1),4k:x(8.c[Y],10),4l:x(8.c[Y],1u),4n:x(8.c[Y],18),4o:1i(O),4p:8.c[O],4q:b.E(8.c[O],2),4r:b.E(8.c[O],3),4s:x(8.c[O],1),4t:x(8.c[O],10),4u:x(8.c[O],1u),4v:x(8.c[O],18),4w:1i(W),4x:8.c[W],4y:b.E(8.c[W],2),4z:b.E(8.c[W],3),4A:x(8.c[W],1),4B:x(8.c[W],10),4C:x(8.c[W],1u),4D:x(8.c[W],18),4E:1i(D),4F:8.c[D],4G:b.E(8.c[D],2),4H:b.E(8.c[D],3),4I:x(8.c[D],1),4J:x(8.c[D],10),4K:x(8.c[D],1u),4L:x(8.c[D],18),4M:1i(H),4N:8.c[H],4O:b.E(8.c[H],2),4P:b.E(8.c[H],3),4Q:x(8.c[H],1),4R:x(8.c[H],10),4S:x(8.c[H],1u),4T:x(8.c[H],18),4U:1i(M),4V:8.c[M],4W:b.E(8.c[M],2),4X:b.E(8.c[M],3),4Y:x(8.c[M],1),4Z:x(8.c[M],10),50:x(8.c[M],1u),51:x(8.c[M],18),52:1i(S),53:8.c[S],54:b.E(8.c[S],2),55:b.E(8.c[S],3),56:x(8.c[S],1),57:x(8.c[S],10),58:x(8.c[S],1u),59:x(8.c[S],18)};a 1p=V;16(a i=Y;i<=S;i++){a f=\'5a\'.5b(i);a 20=G 3u(\'\\\\{\'+f+\'<\\\\}(.*)\\\\{\'+f+\'>\\\\}\',\'g\');1p=1p.3v(20,((!B&&t[i])||(B&&1s[i])?\'$1\':\'\'))}$.3w(3s,k(n,v){a 20=G 3u(\'\\\\{\'+n+\'\\\\}\',\'g\');1p=1p.3v(20,v)});u 1p},E:k(N,2z){N=\'\'+N;j(N.21>=2z){u N}N=\'5i\'+N;u N.5j(N.21-2z)},33:k(8){a J=b.r(8,\'J\');a t=[];t[Y]=(J.L(\'y\')?\'?\':(J.L(\'Y\')?\'!\':q));t[O]=(J.L(\'o\')?\'?\':(J.L(\'O\')?\'!\':q));t[W]=(J.L(\'w\')?\'?\':(J.L(\'W\')?\'!\':q));t[D]=(J.L(\'d\')?\'?\':(J.L(\'D\')?\'!\':q));t[H]=(J.L(\'h\')?\'?\':(J.L(\'H\')?\'!\':q));t[M]=(J.L(\'m\')?\'?\':(J.L(\'M\')?\'!\':q));t[S]=(J.L(\'s\')?\'?\':(J.L(\'S\')?\'!\':q));u t},2b:k(8,t,B,l){8.1A=l;8.1A.2g(0);a P=G K(8.1A.F());j(8.I){j(l.F()<8.I.F()){8.1A=l=P}1n{l=8.I}}1n{P.3b(8.1b.F());j(l.F()>8.1b.F()){8.1A=l=P}}a z=[0,0,0,0,0,0,0];j(t[Y]||t[O]){a 29=$.A.1B(l.1l(),l.1k());a 2u=$.A.1B(P.1l(),P.1k());a 2l=(P.Z()==l.Z()||(P.Z()>=14.28(29,2u)&&l.Z()>=14.28(29,2u)));a 2O=k(2c){u(2c.2t()*1x+2c.2s())*1x+2c.2p()};a 2D=14.1S(0,(P.1l()-l.1l())*12+P.1k()-l.1k()+((P.Z()<l.Z()&&!2l)||(2l&&2O(P)<2O(l))?-1:0));z[Y]=(t[Y]?14.2h(2D/12):0);z[O]=(t[O]?2D-z[Y]*12:0);l=G K(l.F());a 3y=(l.Z()==29);a 23=$.A.1B(l.1l()+z[Y],l.1k()+z[O]);j(l.Z()>23){l.3z(23)}l.5v(l.1l()+z[Y]);l.5w(l.1k()+z[O]);j(3y){l.3z(23)}}a 1t=14.2h((P.F()-l.F())/18);a 1D=k(f,2A){z[f]=(t[f]?14.2h(1t/2A):0);1t-=z[f]*2A};1D(W,3f);1D(D,3e);1D(H,3d);1D(M,1x);1D(S,1);j(1t>0&&!8.I){a 3A=[1,12,4.5B,7,24,1x,1x];a 22=S;a 1S=1;16(a f=S;f>=Y;f--){j(t[f]){j(z[22]>=1S){z[22]=0;1t=1}j(1t>0){z[f]++;1t=0;22=f;1S=1}}1S*=3A[f]}}j(B){16(a f=Y;f<=S;f++){j(B&&z[f]){B--}1n j(!B){z[f]=0}}}u z}});k 2G(e,26){$.1K(e,26);16(a T 2v 26){j(26[T]==q){e[T]=q}}u e}$.5E.A=k(p){a 2B=5G.3l.5H.5I(5J,1);j(p==\'5K\'||p==\'5L\'){u $.A[\'3B\'+p+\'1W\'].1V($.A,[b[0]].3C(2B))}u b.3w(k(){j(1H p==\'2S\'){$.A[\'3B\'+p+\'1W\'].1V($.A,[b].3C(2B))}1n{$.A.38(b,p)}})};$.A=G 1W()})(4a);',62,361,'||||||||inst||var|this|_periods||target|period||||if|function|now||||options|null|_get||show|return|||digit||periods|countdown|significant|year||_minDigits|getTime|new||_since|format|Date|match||value||until|time|false||name|_hold|layout||matches||getDate||PROP_NAME||day|Math|month|for|labels|1000|break|span|_until|data|compact|_show|whichLabels|serverOffset|showFull|labelFor|serverSync|getMonth|getFullYear|timezone|else|sign|html|window|_timerTargets|showSignificant|diff|100|offset|setting|60|parseInt|case|_now|_getDaysInMonth|labelsNum|extractPeriod|description|_defaults|timeSeparator|typeof|requestAnimationFrame|_serverSyncs|extend|tickInterval|onTick|_updateCountdown|markerClassName|expiryText|expiryUrl|showCompact|max|compactLabels|class|apply|Countdown|pause|onExpiry|sigCount|re|length|lastShown|lastDay||_determineTime|props|serverEntry|min|lastNow|animationStartTime|_calculatePeriods|date|tz|hold|_removeTarget|setMilliseconds|floor|mins|secs|ms|sameDay|drawStart|countdown_row|getMilliseconds|getSeconds|_addTarget|_hasTarget|getMinutes|getHours|lastUntil|in|showCount|shownNonZero|_normalLabels|len|numSecs|otherArgs|serverResult|months|regional|_resetExtraLabels|extendRemove|UTCDate|_updateTargets|timerCallBack|pattern|second|minute|hour|getSecs|_expiring|true|index|string|changingLabels|hours|base|_adjustSettings|lap|Ll|abels||_generateHTML||_determineShow|_savePeriods|push|_changeCountdown|hasClass|_attachCountdown|defaultTime|offsetNumeric|setTime|offsetString|3600|86400|604800|periodsToSeconds|exec|expired|num|setUTCDate|prototype|countdown_amount|_buildLayout|countdown_holding|timestamp|position|alwaysExpire|subs|since|RegExp|replace|each|isRTL|wasLastDay|setDate|multiplier|_|concat|switch|setUTCMilliseconds|setUTCSeconds|inArray|abs|setUTCMinutes|number|Class|setUTCHours|remove|setUTCMonth|add|setUTCFullYear|constructor|object|setDefaults|hasCountdown|addClass|mozAnimationStartTime|980|setInterval|countdown_section|getTimezoneOffset|br|_getTimesCountdown|msRequestAnimationFrame|countdown_rtl|oRequestAnimationFrame|countdown_show|countdown_descr|mozRequestAnimationFrame|webkitRequestAnimationFrame|map|jQuery|all|_settingsCountdown|desc|sep|yl|yn|ynn|ynnn|y1|y10|y100|location|y1000|ol|on|onn|onnn|o1|o10|o100|o1000|wl|wn|wnn|wnnn|w1|w10|w100|w1000|dl|dn|dnn|dnnn|d1|d10|d100|d1000|hl|hn|hnn|hnnn|h1|h10|h100|h1000|ml|mn|mnn|mnnn|m1|m10|m100|m1000|sl|sn|snn|snnn|s1|s10|s100|s1000|yowdhms|charAt|_destroyCountdown|removeClass|toLowerCase|empty|removeData|_pauseCountdown|0000000000|substr|Second|Minute|Hour|Day|Week|Month|Year|labels1|2629800|Seconds|31557600|setFullYear|setMonth|Minutes|Hours|Days|_lapCountdown|3482|Weeks|Months|fn|Years|Array|slice|call|arguments|getTimes|settings|_resumeCountdown|while|dHMS'.split('|'),0,{}))



/*!
 * jQuery Lifestream Plug-in
 * @version 0.3.0
 * Show a stream of your online activity
 *
 * Copyright 2011, Christian Vuerings - http://denbuzze.com
 */
 eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}(';(c($){"6V 8l";$.K.I=c(5){A 2E.4C(c(){h 5w=$(2E),1F=V.14({32:"I",38:28,3b:10,G:[]},5),e={U:1F.G.N,1i:[]},3f=V.14(4L,{},1F),4N=c(4P){$.6y(e.1i,4P);e.1i.6h(c(a,b){A(b.O-a.O)});h 1i=e.1i,N=(1i.N<1F.3b)?1i.N:1F.3b,i=0,6,2Z=$(\'<2Z 5y="\'+1F.32+\'"/>\');R(;i<N;i++){6=1i[i];E(6.S){$(\'<5I 5y="\'+1F.32+\'-\'+6.5.2s+\'">\').e("1d",6.5.2s).e("B",6.B||"#").e("2m",6.O).5J(6.S).5K(2Z)}}5w.S(2Z);E($.4E(1F.38)){1F.38()}},3m=c(){h i=0,j=1F.G.N;6Y 3f.G;R(;i<j;i++){h 5=1F.G[i];E($.K.I.P[5.2s]&&$.4E($.K.I.P[5.2s])&&5.L){5.70=3f;$.K.I.P[5.2s](5,4N)}}};E(!V.Q){V.74("J://11.77.M/11/4m.78/7g/4m.Q.7B.36",3m)}1q{3m()}})};$.K.I.1h=c(y){A("J://y.7J.M/5D/2H/7W?q=4I&8a="+"8g://8h.1y/8i&2n=1c").1t("4I",42(y))};$.K.I.P=$.K.I.P||{};E(!2r.3e){2r.3e=c(o){E(o!==2r(o)){8j W 8k(\'2r.3e 8m 1L 8o-21\');}h 3w=[],p;R(p 27 o){E(2r.8z.3i.8A(o,p)){3w.12(p)}}A 3w}}}(V));(c($){$.K.I.P.1K=c(5,F){h 8=$.14({},{2b:\'<a H="J://1K.1y/${1k}/${1d}/8B/${2y}/">8I</a> 1N <a H="J://1K.1y/${1k}/${1d}/">${1k}/${1d}</a>\',40:\'8K a 2v 2K 1N <a H="J://1K.1y/${1k}/${1d}/">${1k}/${1d}</a>\',53:\'8L a 2v 2K 1N <a H="J://1K.1y/${1k}/${1d}/">${1k}/${1d}</a>\',4A:\'1u a 2v 2K 1N <a H="J://1K.1y/${1k}/${1d}/">${1k}/${1d}</a>\',4y:\'1u a W 8M 1N <a H="J://1K.1y/${1k}/${1d}/">${1k}/${1d}</a>\',4l:\'8Q <a H="J://1K.1y/${1k}/${1d}/">${1k}/${1d}</a>\'},5.8),57=["2b","40","53","4A","4y","4l"],4O=c(D){E($.8R(D.2u,57)!==-1){E(D.1r){E(D.2u==="2b"){A $.Q(8.2b,{1k:D.1r.1k,1d:D.1r.1d,2y:D.2y})}1q{A $.Q(8[D.2u],{1k:D.1r.1k,1d:D.1r.1d})}}}},3Q=c(f){h x=[],i=0;E(f.y&&f.y.U&&f.y.U>0){$.4C(f.y.17.1c,c(){x.12({O:W 16(2E.1V.5e.1t(/-/g,\'/\')),5:5,S:4O(2E.1V)})})}A x};$.11({B:$.K.I.1h(\'1l 1V.2u,\'+\'1V.2y, 1V.5e,\'+\'1V.1r.1d, 1V.1r.1k \'+\'1j 1c 1m B = "26://1x.1K.1y/1.0/1P/\'+5.L+\'/1V/"\'),18:\'Y\',19:c(e){F(3Q(e))}});A{\'8\':8}}})(V);(c($){$.K.I.P.5z=c(5,F){h 8=$.14({},{1u:\'1u 8J <a H="${2w}" C="${C}">\'+\'${2w}</a>\'},5.8);$.11({B:$.K.I.1h(\'1l e.2w, e.1u, \'+\'e.C 1j 1c 1m B="\'+\'J://5z.M/u/\'+5.L+\'.1c"\'),18:"Y",19:c(f){h x=[],i=0,j;E(f.y&&f.y.U&&f.y.17.1c){G=f.y.17.1c;j=G.N;R(;i<j;i++){h 6=G[i].e;x.12({O:W 16(6.1u*1J),5:5,S:$.Q(8.1u,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.8E=c(5,F){h 8=$.14({},{13:\'13 <a H="${2z}">${C}</a>\'},5.8),4F=c(f){h x=[],G,i=0,j,6,k,l;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1O.1Y){G=f.y.17.1O.1Y;j=G.N;R(;i<j;i++){6=G[i];E(!6.2z){k=0;l=6.1a.N;R(;k<l;k++){E(6.1a[k].8w===\'8v\'){6.2z=6.1a[k].H}}}E(6.2z){E(6.C.2a){6.C=6.C.2a}x.12({O:W 16(6.3B),5:5,S:$.Q(8.13,6)})}}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m B="J://\'+5.L+\'.8n.M/P/1T/2B"\'),18:"Y",19:c(e){F(4F(e))}});A{"8":8}}})(V);(c($){$.K.I.P.3P=c(5,F){h 8=$.14({},{1Q:\'1Q a 1D <a H="${1a}">${C[0]}</a>\'},5.8),3U=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1b.1o.6){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.1Q,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="J://1p.3P.M/1b/L/\'+5.L+\'"\'),18:"Y",19:c(e){F(3U(e))}});A{"8":8}}})(V);(c($){$.K.I.P.4i=c(5,F){h 8=$.14({},{1A:\'1A <a H="${u}">${d}</a>\'},5.8);$.11({B:"J://P.4i.M/2D/1c/"+5.L,18:"Y",19:c(e){h x=[],i=0,j;E(e&&e.N&&e.N>0){j=e.N;R(;i<j;i++){h 6=e[i];x.12({O:W 16(6.8d),5:5,S:$.Q(8.1A,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.4q=c(5,F){h 8=$.14({},{13:\'13 <a H="${1a}">${C}</a>\'},5.8);$.11({B:$.K.I.1h(\'1l C,1a,1v 1j 1b 1m \'+\'B="J://8c.4q.M/1b.1n?q=8b%3A\'+42(5.L)+\'&1g=89\'+\'" | 86(83="C")\'),18:\'Y\',19:c(1W){h x=[],1i,6,i=0,j;E(1W.y&&1W.y.U>0){1i=1W.y.17.6;j=1i.N;R(;i<j;i++){6=1i[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.13,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.3r=c(5,F){h 8=$.14({},{4M:\'1H 1L <a H="${B}" C="${C}">${C}</a>\',3r:\'82 <a H="${B}" C="${C}">${C}</a>\',4Z:\'7X <a H="${B}" C="${C}">${C}</a>\'},5.8);$.11({B:"J://54.3r.M/2.0/L.7V?2q="+5.L+"&1g=7T",18:"Y",19:c(e){h x=[],i=0,j;E(e&&e.3C){j=e.3C.N;R(;i<j;i++){h 6=e.3C[i];h k=6.3E.N;R(l=0;l<k;l++){h 2m;E(6.3E[l]===\'4Z\'||6.5o===28){2m=6.7S}1q{2m=6.5o}x.12({O:W 16(2m*1J),5:5,S:$.Q(8[6.3E[l]],6)})}}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.5q=c(5,F){h 8=$.14({},{13:\'13 a 7N <a H="${B}">${C}</a>\'},5.8);$.11({B:"J://1x.5q.M/7M/"+5.L+"/3F",18:"Y",19:c(e){h x=[],i=0,j;E(e&&e.3G){j=e.3F.N;R(;i<j;i++){h 6=e.3F[i];x.12({O:W 16(6.2e),5:5,S:$.Q(8.13,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.7L=c(5,F){h 8=$.14({},{3J:\'Z 1L 7H <a H="${1a}">${C}</a>\'},5.8),3L=c(f){h x=[],G,i=0,j;E(f.y&&f.y.U&&f.y.U>0){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){h 6=G[i];E($.3M(6.C)){x.12({O:W 16(6["1v"]),5:5,S:$.Q(8.3J,6)})}}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m B="\'+\'1p.7G.M/P/7E.35?2j=\'+5.L+\'&2n=7C"\'),18:\'Y\',19:c(e){F(3L(e))}});A{"8":8}}})(V);(c($){$.K.I.P.3S=c(5,F){h 8=$.14({},{13:\'13 a 2i <a H="${1a}">${C}</a>\'},5.8);$.11({B:"J://1x.3S.M/54/P/7x.7u?2j="+5.L+"&7t=3W-7s&2n=1c",18:"Y",Y:\'7r\',19:c(e){h x=[],i=0,j;E(e&&e.1i&&e.1i.N>0){j=e.1i.N;R(;i<j;i++){h 6=e.1i[i];x.12({O:W 16(6.3B),5:5,S:$.Q(8.13,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.3Z=c(5,F){h 8=$.14({},{1A:\'1A <a H="${B}">${B}</a>\'},5.8);$.11({B:"J://1x.3Z.M/7p/G/",e:{2n:"Y",2q:5.L},18:"Y",19:c(e){h x=[],i=0,j;E(e&&e.N&&e.N>0){j=e.N;R(;i<j;i++){h 6=e[i];x.12({O:W 16(6.2e.1t(/-/g,\'/\')),5:5,S:$.Q(8.1A,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.41=c(5,F){h 8=$.14({},{3a:\'3a a 43 <a H="${1a}">${C}</a>\'},5.8);h 44=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1b.1o.6){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.3a,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="J://1p.41.7n/46/\'+5.L+\'.1b"\'),18:"Y",19:c(e){F(44(e))}});A{"8":8}}})(V);(c($){$.K.I.P.47=c(5,F){h 8=$.14({},{13:\'13 a ${48} \'+\'<a H="${7k}">${C}</a>\'},5.8);$.11({B:"J://47.M/1x/2D/1P/1T?2q="+5.L,18:"Y",19:c(e){h x=[],i=0,j;E(e&&e.1W.N&&e.1W.N>0){j=e.1W.N;R(;i<j;i++){h 6=e.1W[i];x.12({O:W 16(6.2e.1t(\' \',\'T\')),5:5,S:$.Q(8.13,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.4a=c(5,F){h 8=$.14({},{4b:\'7h 27 @ <a H="${1a}">${C}</a>\'},5.8),4d=c(f){h x=[],i=0,j;E(f.y&&f.y.U&&f.y.U>0){j=f.y.U;R(;i<j;i++){h 6=f.y.17.6[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.4b,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1b 1m B=\'+\'"26://P.4a.M/2g/\'+5.L+\'.1b"\'),18:\'Y\',19:c(e){F(4d(e))}});A{"8":8}}})(V);(c($){$.K.I.P.4f=c(5,F){h 8=$.14({},{1A:\'1A <a H="${2w}">${C}</a>\'},5.8);$.11({B:"26://4f.M/1x/7d/2H/7c/"+5.L+".36?7a=?",18:"1c",19:c(e){e=e.79;h x=[],i=0,j;E(e&&e.N&&e.N>0){j=e.N;R(;i<j;i++){h 6=e[i];x.12({O:W 16(6.O*1J),5:5,S:$.Q(8.1A,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.1M=c(5,F){h 8=$.14({},{3d:\'<a H="${D.B}" C="{{E C}}${C} \'+\'20 ${4n} {{/E}}">3d</a> 2L <a H="J://1M.M/\'+\'${1f}/76/${3g}">${3g}</a> 1N \'+\'<a H="J://1M.M/${1f}">${1f}</a>\',4r:\'<a H="${D.1e.B}" C="\'+\'${D.1e.72 || ""}">${D.1e.1d}</a>\',1H:\'1H 1L <a H="${D.B}">${1w}</a> 1L \'+\'<a H="J://1M.M/${1f}">${1f}</a>\',4v:\'${D.1e.1G} <a H="${D.B}">\'+\'2v 2K #${D.1e.6W}</a> 1L \'+\'<a H="J://1M.M/${1f}">${1f}</a>\',1u:\'1u ${D.1e.2O || D.1e.21}\'+\' <a H="${D.B}">${D.1e.3j || \'+\'D.1e.2P}</a> R \'+\'<a H="J://1M.M/${1f}">${1f}</a>\',4B:\'1u ${D.1e.21} \'+\'<a H="${D.B}">${C}</a>\',3l:\'3l ${D.1e.2O} ${D.1e.3j} \'+\'1N <a H="J://1M.M/${D.1r.1k}/\'+\'${D.1r.1d}">${D.1r.1k}/\'+\'${D.1r.1d}</a>\'},5.8);h 1U=c(D){A D.1e.1f||(D.1r?D.1r.1k+"/"+D.1r.1d:28)||D.B.1X("/")[3]+"/"+D.B.1X("/")[4]},4H=c(D){h 1f,C,1w;E(D.1g==="6S"){C=D.1e&&D.1e.2R&&D.1e.2R.1c&&D.1e.2R.1c[2];1f=1U(D);A $.Q(8.3d,{D:D,C:C,4n:C?D.1e.2R.1c[3]:"",3g:D.1e.3j.1X(\'/\')[2],1f:1U(D)})}1q E(D.1g==="6P"){A $.Q(8.4r,{D:D})}1q E(D.1g==="6M"){1w=\'2b \'+D.B.1X(\'2b/\')[1].1X(\'#\')[0].3q(0,7);1f=1U(D);A $.Q(8.1H,{1w:1w,1f:1f,D:D})}1q E(D.1g==="6I"){1w=\'6H \'+D.B.1X(\'6G/\')[1].1X(\'#\')[0];1f=1U(D);A $.Q(8.1H,{1w:1w,1f:1f,D:D})}1q E(D.1g==="6F"){1f=1U(D);A $.Q(8.4v,{1f:1f,D:D})}1q E(D.1g==="4S"&&(D.1e.2O==="4T"||D.1e.2O==="6D"||D.1e.21==="4T")){1f=1U(D);A $.Q(8.1u,{1f:1f,D:D})}1q E(D.1g==="4S"){C=(D.1e.2P?((D.1e.2P==="28")?D.1e.1d:D.1e.2P):1U(D));A $.Q(8.4B,{C:C,D:D})}1q E(D.1g==="6C"){A $.Q(8.3l,{D:D})}},4W=c(f){h x=[],i=0,j;E(f.y&&f.y.U&&f.y.U>0){j=f.y.U;R(;i<j;i++){h D=f.y.17.1c[i].1c;x.12({O:W 16(D.2e),5:5,S:4H(D),B:\'26://1M.M/\'+5.L})}}A x};$.11({B:$.K.I.1h(\'1l 1c.1r.1k,\'+\'1c.1r.1d, 1c.1e, 1c.1g,\'+\'1c.B, 1c.2e 1j 1c 1m B="J://1M.M/\'+5.L+\'.1c"\'),18:\'Y\',19:c(e){F(4W(e))}});A{"8":8}}})(V);(c($){$.K.I.P.6B=c(5,F){h 8=$.14({},{13:\'<a H="${4Y.B}">${4Y.6w}</a> 6v 13 a W 1Y <a H="${B}" \'+\'C="${2j}">${C}</a> <!--6u--> ${21.52.3t} 52, ${21.6o.3t} +1s, ${21.6l.3t} 6g\'},5.8),58=c(f){h x=[],i=0,j,6;E(f&&f.1i){j=f.1i.N;R(;i<j;i++){6=f.1i[i];x.12({O:W 16(6.3B),5:5,S:$.Q(8.13,6)})}}A x};$.11({B:"26://1p.6b.M/6a/5D/69/"+5.L+"/68/2H",e:{5d:5.5d},18:\'Y\',19:c(e){E(e.2W){F([]);E(3x&&3x.2W){3x.2W(\'64 60 5Y+ 5W.\',e.2W)}A}1q{F(58(e))}}});A{"8":8}}})(V);(c($){$.K.I.P.5V=c(5,F){h 8=$.14({},{3y:\'3z <a H="{{E 1a.H}}${1a.H}\'+\'{{1q}}${5U.1a.H}{{/E}}">${C.2a}</a>\'},5.8),2X=c(f){h x=[],G,i=0,j;E(f.y&&f.y.U&&f.y.U>0){G=f.y.17.1O.1Y;j=G.N;R(;i<j;i++){h 6=G[i];x.12({B:\'J://1p.2Y.M/3D/3z\'+5.L,O:W 16(5r(6["5T-5t-5P"],10)),5:5,S:$.Q(8.3y,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m B="\'+\'1p.2Y.M/3D/2H/5O/L%2F\'+5.L+\'%5N%5M.2Y%5L"\'),18:\'Y\',19:c(e){F(2X(e))}});A{"8":8}}})(V);(c($){$.K.I.P.29=c(5,F){E(!5.1g||5.1g!=="2g"||5.1g!=="1C"){5.1g="1C"}h 8=$.14({},{1C:\'1C <a H="J://29.M/6/${5B}">${C}</a> 20 <a H="J://29.M/1S/${1S}">${1S}</a>\',2g:\'5H 2L <a H="J://29.M/6/${5B}">${C}</a> 20 <a H="J://29.M/1S/${1S}">${1S}</a>\'},5.8);$.11({B:"J://29.M/5F/"+5.1g+"/"+5.L+"/1c/1/e.36",18:"1c",19:c(e){h x=[],i=0,j=-1;R(h k 27 e){E(e.3i(k)){j++}}E(e&&j>0){R(;i<j;i++){h 6=e[i];x.12({O:W 16((5.1g==="2g"?6.7j:6.5G)*1J),5:5,S:$.Q((5.1g==="2g"?8.2g:8.1C),6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.3H=c(5,F){h 8=$.14({},{1C:\'1C <a H="${1a}">${C}</a>\'},5.8),5C=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1b.1o.6){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.1C,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m B=\'+\'"J://1p.3H.M/3y/1b/\'+5.L+\'"\'),18:\'Y\',19:c(e){F(5C(e))}});A{"8":8}}})(V);(c($){$.K.I.P.31=c(5,F){h 8=$.14({},{30:\'${1G} <a H="${1a}">${1w}</a> 1L (${2k})\'},5.8);h 5x=c(f){h x=[],G,i,j,k,l,m=0,n,6,C,2p,1G,1w,2k,5u=["5Q","5R X","5S"];E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1b){n=f.y.17.1b.N;2p=[\'5s 5n\',\'5k 5n\',\'5k 5j\',\'5X\',\'1H 1L\',\'5i 1Y R\',\'5s 5j\',\'5Z\'];l=2p.N;R(;m<n;m++){2k=5u[m];G=f.y.17.1b[m].1o.6;i=0;j=G.N;R(;i<j;i++){6=G[i];C=6.C.1t(5.L+\' \',\'\');k=0;R(;k<l;k++){E(C.5h(2p[k])>-1){1G=2p[k];61}}1w=C.1X(1G);x.12({O:W 16(6.1v),5:5,S:$.Q(8.30,{1G:1G.62(),1a:6.1a,1w:1w[1],2k:2k})})}}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="J://63.31.M/L/1O.1b/\'+5.L+\'" 5g \'+\'B="J://65.31.M/L/1O.1b/\'+5.L+\'" 5g \'+\'B="J://66.31.M/L/1O.1b/\'+5.L+\'"\'),18:"Y",19:c(e){F(5x(e))}});A{"8":8}}})(V);(c($){$.K.I.P.67=c(5,F){h 8=$.14({},{1C:\'1C <a H="${B}">${1d}</a> 20 \'+\'<a H="${1S.B}">${1S.1d}</a>\'},5.8),5c=c(f){h x=[],G,i=0,j;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.2V&&f.y.17.2V.5a){G=f.y.17.2V.5a;j=G.N;R(;i<j;i++){h 6=G[i],59=6.6c?W 16():6.O.6d;x.12({O:W 16(5r((59*1J),10)),5:5,S:$.Q(8.1C,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m B=\'+\'"J://6e.6f.M/2.0/L/\'+5.L+\'/2V.1n"\'),18:\'Y\',19:c(e){F(5c(e))}});A{"8":8}}})(V);(c($){$.K.I.P.2U=c(5,F){h 8=$.14({},{1z:\'6i <a H="J://1p.2U.M/6j/1z/${1z.6k}"\'+\' C="${1z.C} 20 ${1z.56}">\'+\'${1z.C} 20 ${1z.56}</a> 2L 6m 6n\'},5.8),55=c(f){h x=[],i="";E(f.2T){R(i 27 f.2T){E(f.2T.3i(i)){h 1z=f.2T[i];x.12({O:W 16(1z.6p*1J),5:5,S:$.Q(8.1z,{1z:1z}),B:\'J://1p.2U.M/46/\'+5.L})}}}A x};$.11({B:\'J://1p.2U.M/6q.35?6r=6s&6t=\'+5.L,18:\'Y\',19:c(e){F(55(e))}});A{"8":8}}})(V);(c($){$.K.I.P.51=c(5,F){h 8=$.14({},{13:\'13 <a H="${1a}">${C}</a>\'},5.8);h 50=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1b.1o.6){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.13,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="J://51.M/L/\'+5.L+\'/1b"\'),18:"Y",19:c(e){F(50(e))}});A{"8":8}}})(V);(c($){$.K.I.P.3s=c(5,F){h 8=$.14({},{1Q:\'1Q <a H="${B}">${C}</a>\'},5.8);$.11({B:"J://3s.M/1x/2D/L.1c?2q="+5.L+"&6x=1",18:"Y",19:c(e){h x=[],i=0,j,1I;1I=e.6z.1P[0].6A;E(1I&&1I.N&&1I.N>0){j=1I.N;R(;i<j;i++){h 6=1I[i];x.12({O:W 16((6.O)*1J),5:5,S:$.Q(8.1Q,{B:\'J://3s.M\'+6.B,C:6.2S||6.2j})})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.4V=c(5,F){h 8=$.14({},{1A:\'1A <a H="${1a}">${C}</a>\'},5.8);h 4U=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0){G=f.y.17.6E.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.O),5:5,S:$.Q(8.1A,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="J://P.4V.27/1b/u:\'+5.L+\'"\'),18:"Y",19:c(e){F(4U(e))}});A{"8":8}}})(V);(c($){$.K.I.P.4R=c(5,F){h 8=$.14({},{13:\'13 <a H="${1a}">${C}</a>\'},5.8);h 4Q=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1b.1o.6){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.13,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="J://\'+5.L+\'.4R.M/1b.1n"\'),18:"Y",19:c(e){F(4Q(e))}});A{"8":8}}})(V);(c($){$.K.I.P.1Z=c(5,F){h 8=$.14({},{1H:\'<a H="J://1p.1Z.M/r/${6.e.2l}\'+\'/6J/${6.e.6K.3q(3)}/u/\'+\'${6.e.1d.3q(3)}?6L=3">1H \'+\'(${22})</a> 27 <a H="J://1p.1Z.M/r/\'+\'${6.e.2l}">${6.e.2l}</a>\',1u:\'<a H="J://1p.1Z.M${6.e.6N}">\'+\'1u W 6O (${22})</a> 27 \'+\'<a H="J://1p.1Z.M/r/${6.e.2l}">\'+\'${6.e.2l}</a>\'},5.8);h 4K=c(6){h 22=6.e.6Q-6.e.6R,3o={6:6,22:(22>0)?"+"+22:22};E(6.4G==="6T"){A $.Q(8.1H,3o)}1q E(6.4G==="6U"){A $.Q(8.1u,3o)}},2Q=c(O){A W 16(O*1J)};$.11({B:"J://1p.1Z.M/L/"+5.L+".1c",18:"Y",Y:"Y",19:c(e){h x=[],i=0,j;E(e&&e.e&&e.e.2N&&e.e.2N.N>0){j=e.e.2N.N;R(;i<j;i++){h 6=e.e.2N[i];x.12({O:2Q(6.e.6X),5:5,S:4K(6),B:\'J://1Z.M/L/\'+5.L})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.1b=c(5,F){h 8=$.14({},{13:\'13 <a H="${1a}">${C}</a>\'},5.8),2X=c(f){h x=[],G,i=0,j;E(f.y&&f.y.U&&f.y.U>0){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){h 6=G[i];x.12({B:\'J://1p.2Y.M/3D/3z\'+5.L,O:W 16(6.1v),5:5,S:$.Q(8.13,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m B="\'+5.L+\'"\'),18:\'Y\',19:c(e){F(2X(e))}});A{"8":8}}})(V);(c($){$.K.I.P.4w=c(5,F){h 8=$.14({},{1Q:\'1Q a 6Z <a H="${1a}">${C}</a>\'},5.8);h 4u=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.1Q,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="J://1p.4w.71/1b/L/\'+5.L+\'"\'),18:"Y",19:c(e){F(4u(e))}});A{"8":8}}})(V);(c($){$.K.I.P.4t=c(5,F){h 8=$.14({},{13:\'13 a 73 <a H="${1a}">${C}</a>\'},5.8);h 4s=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1b.1o.6){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.13,6)})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="J://4t.M/1b/1P/\'+5.L+\'"\'),18:"Y",19:c(e){F(4s(e))}})}})(V);(c($){$.K.I.P.2M=c(5,F){h 8=$.14({},{30:\'<a H="${1a}">${1B}</a> - ${C}\'},5.8);h 4k=c(6){h 1B="",C="",1a="",4j="J://2M.M/1P/"+5.L,3c="J://2M.M/7b/";E(6.2h==="4g"){1B="7e "+6.1G+" 7f \'"+6.1R+"\' 4g";C=6.4c;1a=4j+"?7i=8T"}1q E(6.2h==="4M"){1B="1H 1L";C=6.1R;1a=3c+6.49}1q E(6.2h==="7l"||6.2h==="7m"||6.2h==="45"){1B=(6.2h===\'45\'?6.1G:6.1G+\' \'+6.48);C=6.4c||6.1R||"";1a=3c+6.49}A{1a:1a,C:C,1B:1B}},2Q=c(O){A W 16(O*1J)};$.11({B:"J://1x.2M.M/1.1/1P/"+5.L+"/7o?"+"Y",18:"Y",Y:\'Y\',19:c(e){h x=[],i=0,j;E(e&&e.3G&&e.3G>0&&e.39){j=e.39.N;R(;i<j;i++){h 6=e.39[i];x.12({O:2Q(6.7q),5:5,S:$.Q(8.30,4k(6))})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.3Y=c(5,F){h 8=$.14({},{13:\'13 a ${1g} <a H="${B}">${C}</a>\'},5.8),3X=c(Z){3V(Z.1g){1E\'2i\':h 1I=Z[\'2i-B\'];A $(\'<7v 7w="75" 7y="75"/>\').7z({7A:1I[1I.N-1].2a,C:2o(Z),3R:2o(Z)}).7D(\'<3O/>\').7F().S();1E\'1D\':h 2t=Z[\'1D-33\'];h 1D=2t[2t.N-1].2a;E(1D.7I(/<\\s*7K/)){A 28}A 1D;1E\'2J\':A Z[\'2J-33\']+\' \'+$(\'<3O/>\').1B(2o(Z)).S();2B:A 28}},2d=c(Z,5v){A $(Z[5v]).7O(\':7P(:7Q):7R\').1B()},5p=c(Z){h C;3V(Z.1g){1E\'2I\':A Z[\'2I-C\']||2d(Z,\'2I-7U\');1E\'1a\':C=Z[\'1a-1B\']||2d(Z,\'1a-1R\');E(C===\'\'){C=Z[\'1a-B\']}A C;1E\'1D\':A 2d(Z,\'1D-2S\');1E\'2J\':A 2d(Z,\'2J-2S\');1E\'2i\':A 2d(Z,\'2i-2S\');1E\'5b\':A\'"\'+Z[\'5b-1B\'].1t(/<.+?>/g,\' \').3M()+\'"\';1E\'3v\':C=Z[\'3v-C\'];E(!C){C=Z[\'3v\'].3u;E(7Y(C)!==\'7Z\'){C=3u[0].80+\' \'+3u[0].2a+\' ....\'}}A C;1E\'81\':A Z[\'43\'];2B:A Z.1g}},2o=c(Z){h C=5p(Z)||\'\';A C.1t(/<.+?>/4X," ")},3p=c(5,Z){A{O:W 16(Z.O),5:5,S:$.Q(8.13,{1g:Z.1g.1t(\'2I\',\'84 1Y\'),B:Z.B,85:3X(Z),C:2o(Z)})}},4D=c(f){h x=[],i=0,j,Z;E(f.y&&f.y.U&&f.y.U>0){E($.87(f.y.17.1T.Z)){j=f.y.17.1T.Z.N;R(;i<j;i++){Z=f.y.17.1T.Z[i];x.12(3p(5,Z))}}1q E($.88(f.y.17.1T.Z)){x.12(3p(5,f.y.17.1T.Z))}}A x};$.11({B:$.K.I.1h(\'1l *\'+\' 1j 3Y.1T 1m 2q="\'+5.L+\'"\'),18:\'Y\',19:c(e){F(4D(e))}});A{"8":8}}})(V);(c($){$.K.I.P.2c=c(5,F){h 8=$.14({},{13:\'{{S 2G}}\'},5.8),4z=c(2G){h 1a=c(t){A t.1t(/[a-z]+:\\/\\/[a-4x-9-3h]+\\.[a-4x-9-3h:~%&\\?\\/.=]+[^:\\.,\\)\\s*$]/8e,c(m){A\'<a H="\'+m+\'">\'+((m.N>25)?m.8f(0,24)+\'...\':m)+\'</a>\'})},1N=c(t){A t.1t(/(^|[^\\w]+)\\@([a-4h-4e-3T]{1,15})/g,c(m,2C,2f){A 2C+\'<a H="J://2c.M/\'+2f+\'">@\'+2f+\'</a>\'})},3K=c(t){A t.1t(/(^|[^\\w\'"]+)\\#([a-4h-4e-3T]+)/g,c(m,2C,2f){A 2C+\'<a H="J://3I.2c.M/3I?q=%23\'+2f+\'">#\'+2f+\'</a>\'})};A 3K(1N(1a(2G)))},5A=c(f){h x=[],i=0,j,D;E(f&&f.N>0){j=f.N;R(;i<j;i++){D=f[i];x.12({O:W 16(D.2e),5:5,S:$.Q(8.13,{2G:4z(D.1B),8p:\'J://2c.M/#!/\'+5.L+"/D/"+D.8q}),B:\'J://2c.M/#!/\'+5.L})}}A x};$.11({B:"26://1x.2c.M/1/8r/8s.1c",e:{8t:5.L,8u:1},18:\'Y\',19:c(e){F(5A(e))}});A{"8":8}}})(V);(c($){$.K.I.P.5l=c(5,F){h 8=$.14({},{13:\'13 <a H="${B}" C="${1R}">${C}</a>\'},5.8),5f=c(f){h x=[],i=0,j,6;E(f){j=f.N;R(;i<j;i++){6=f[i];x.12({O:W 16(6.8x.1t(\' \',\'T\')),5:5,S:$.Q(8.13,{B:6.B,1R:6.1R.1t(/"/g,"\'").1t(/<.+?>/4X,""),C:6.C})})}}A x};$.11({B:"J://5l.M/1x/2D/"+5.L+"/2t.1c",18:"Y",8y:4L,19:c(e){F(5f(e))}});A{"8":8}}})(V);(c($){$.K.I.P.3k=c(5,F){h 2A=5.2A||\'3W\',8=$.14({},{4J:\'8C 2L <a H="${B}">${C}</a>\'},5.8);$.11({B:"J://"+2A+".3k.1y/w/1x.35?1G=y&8D="+5.L+"&G=2x&8F=8G&2n=1c",18:"Y",19:c(e){h x=[],i=0,j;E(e&&e.y.2x){j=e.y.2x.N;R(;i<j;i++){h 6=e.y.2x[i];6.B=\'J://\'+2A+\'.3k.1y/8H/\'+6.C.1t(\' \',\'3h\');x.12({O:W 16(6.5t),5:5,S:$.Q(8.4J,6)})}}F(x)}});A{"8":8}}})(V);(c($){$.K.I.P.4o=c(5,F){h 8=$.14({},{13:\'13 <a H="${1a}">${C}</a>\'},5.8);h 3N=c(f){h x=[],G,i=0,j,6;E(f.y&&f.y.U&&f.y.U>0&&f.y.17.1b.1o.6){G=f.y.17.1b.1o.6;j=G.N;R(;i<j;i++){6=G[i];x.12({O:W 16(6.1v),5:5,S:$.Q(8.13,6)})}}A x};h B="";E(5.L){B=(5.L.5h(\'J://\')===0?5.L+\'/1O\':\'J://\'+5.L+\'.4o.M/1O\');$.11({B:$.K.I.1h(\'1l * 1j 1n 1m \'+\'B="\'+B+\'"\'),18:"Y",19:c(e){F(3N(e))}})}A{"8":8}}})(V);(c($){$.K.I.P.5m=c(5,F){h 8=$.14({},{3n:\'3n <a H="${1D.33.2B}" \'+\'C="${1D.1R}">${1D.C}</a>\'},5.8),4p=c(f){h x=[],i=0,j,6;E(f.e&&f.e.1i){j=f.e.1i.N;R(;i<j;i++){6=f.e.1i[i];x.12({O:W 16(6.1u),5:5,S:$.Q(8.3n,6)})}}A x};$.11({B:"J://8N.5m.M/P/1x/1P/"+5.L+"/8O?v=2&3R=8P",18:\'Y\',19:c(e){F(4p(e))}});A{"8":8}}})(V);(c($){$.K.I.P.34=c(5,F){h 8=$.14({},{37:\'37 <a H="${2j}">${C}</a> 20 ${8S}\'},5.8),5E=c(f){h x=[],G,i=0,j;E(f.y&&f.y.U&&f.y.U>0){G=f.y.17.1O.1Y;j=G.N;R(;i<j;i++){h 6=G[i];x.12({O:W 16(6.5i),5:5,B:\'J://34.M/1P/\'+5.L,S:$.Q(8.37,6),})}}A x};$.11({B:$.K.I.1h(\'1l * 1j 1n 1m B=\'+\'"26://1x.34.1y/1P/\'+5.L+\'/1i"\'),18:\'Y\',19:c(e){F(5E(e))}});A{"8":8}}})(V);',62,552,'|||||config|item||template||||function||data|input||var||||||||||||||||output|query||return|url|title|status|if|callback|list|href|lifestream|http|fn|user|com|length|date|feeds|tmpl|for|html||count|jQuery|new||jsonp|post||ajax|push|posted|extend||Date|results|dataType|success|link|rss|json|name|payload|repo|type|createYqlUrl|items|from|owner|select|where|xml|channel|www|else|repository||replace|created|pubDate|what|api|org|book|bookmarked|text|loved|video|case|settings|action|commented|images|1000|bitbucket|on|github|at|feed|users|uploaded|description|artist|posts|returnRepo|events|resp|split|entry|reddit|by|object|score||||https|in|null|hypem|content|commit|twitter|getFirstElementOfBody|created_at|m2|history|timeline_type|photo|id|os|subreddit|time|format|getTitle|actions|username|Object|service|videos|event|pull|short_url|usercontribs|node|origLink|language|default|m1|v2|this||tweet|public|regular|audio|request|to|stackoverflow|children|ref_type|object_name|convertDate|shas|caption|books|librarything|lovedtracks|error|parseReader|google|ul|global|iusethis|classname|player|zotero|php|js|flagged|feedloaded|user_timelines|answered|limit|question_link|pushed|keys|itemsettings|branchname|_|hasOwnProperty|ref|wikipedia|deleted|load|favorited|pass|createTumblrOutput|substring|digg|picplz|totalItems|line|conversation|ret|console|starred|shared||published|stories|reader|activity|shots|total|instapaper|search|wall_post|hash|parseFBPage|trim|parseWordpress|div|dailymotion|parseBitbucket|alt|flickr|9_|parseDailymotion|switch|en|getImage|tumblr|foomark|pullrequest_fulfilled|formspring|encodeURIComponent|question|parseFormspring|askoranswered|profile|forrst|post_type|post_id|foursquare|checkedin|detail|parseFoursquare|Z0|gimmebar|badge|zA|delicious|stackoverflow_link|parseStackoverflowItem|fork|jquery|author|wordpress|parseYoutube|deviantart|gist|parseSnipplr|snipplr|parseSlideshare|pullrequest|slideshare|z0|create|linkify|pullrequest_created|createdglobal|each|parseTumblr|isFunction|parseBlogger|kind|parseGithubStatus|__QUERY__|contribution|parseRedditItem|true|comment|finished|parseBitbucketStatus|inputdata|parsePosterous|posterous|CreateEvent|tag|parsePinboard|pinboard|parseGithub|gi|actor|submission|parseMlkshk|mlkshk|replies|pullrequest_rejected|services|parseLibraryThing|author_fl|supported_events|parseGooglePlus|itemDate|track|quote|parseLastfm|key|created_on|parseVimeo|or|indexOf|updated|loving|stopped|vimeo|youtube|using|promote_date|getTitleForPostType|dribbble|parseInt|started|timestamp|oss|bodyAttribute|outputElement|parseIusethis|class|bitly|parseTwitter|mediaid|parseInstapaper|v1|parseZotero|playlist|dateloved|listened|li|append|appendTo|2Fbroadcast|2Fcom|2Fstate|atom|msec|iPhone|OS|Windows|crawl|source|googlereader|stream|Downloaded|Google|registered|loading|break|toLowerCase|iphone|Error|osx|win|lastfm|activities|people|plus|googleapis|nowplaying|uts|ws|audioscrobbler|Reshares|sort|added|work|book_id|resharers|my|library|plusoners|entry_stamp|api_getdata|booksort|entry_REV|userid|With|has|displayName|include_pics|merge|value|pics|googleplus|DeleteEvent|branch|RDF|PullRequestEvent|issues|issue|IssueCommentEvent|comments|link_id|context|CommitCommentEvent|permalink|thread|GistEvent|ups|downs|PushEvent|t1|t3|use|number|created_utc|delete|presentation|_settings|net|desc|snippet|getScript||tree|microsoft|templates|records|jsonp_callback|questions|assets|v0|was|the|beta1|checked|tab|dateplayed|post_url|revision|accepted|me|timeline|urls|creation_date|jsoncallback|us|lang|gne|img|width|photos_public|height|attr|src|min|rss20|wrap|page|parent|facebook|wall|match|yahooapis|script|facebook_page|players|shot|filter|not|empty|first|date_created|javascript|body|getActivity|yql|submitted|typeof|string|label|answer|dugg|field|blog|image|unique|isArray|isPlainObject|deviation|env|gallery|backend|dt|ig|substr|store|datatables|alltableswithkeys|throw|TypeError|strict|called|blogspot|non|complete_url|id_str|statuses|user_timeline|screen_name|include_rts|alternate|rel|upload_date|crossDomain|prototype|call|changeset|contributed|ucuser|blogger|ucdir|older|wiki|committed|URL|fulfilled|rejected|project|gdata|favorites|jsonc|forked|inArray|creatorSummary|reputation'.split('|'),0,{}))

/**
 * Timeago is a jQuery plugin that makes it easy to support automatically
 * updating fuzzy timestamps (e.g. "4 minutes ago" or "about 1 day ago").
 *
 * @name timeago
 * @version 0.10.0
 * @requires jQuery v1.2.3+
 * @author Ryan McGeary
 * @license MIT License - http://www.opensource.org/licenses/mit-license.php
 *
 * For usage and examples, visit:
 * http://timeago.yarp.com/
 *
 * Copyright (c) 2008-2011, Ryan McGeary (ryanonjavascript -[at]- mcgeary [*dot*] org)
 */


eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(4($){$.8=4(o){e(o 1I L){5 g(o)}1h e(1D o==="U"){5 g($.8.E(o))}1h{5 g($.8.h(o))}};3 $t=$.8;$.1w($.8,{w:{I:1G,1g:1o,1f:{1d:1c,1a:1c,18:"1J",15:"1t 1u",k:"1x 1B a z",z:"r a z",c:"%d c",H:"r 1p H",b:"r %d b",J:"a J",7:"%d 7",M:"r a M",N:"%d N",O:"r a O",p:"%d p",R:[]}},g:4(x){3 $l=m.w.1f;3 F=$l.1d;3 P=$l.18;e(m.w.1g){e(x<0){F=$l.1a;P=$l.15}}3 k=j.1L(x)/1y;3 c=k/K;3 b=c/K;3 7=b/13;3 p=7/12;4 6(A,B){3 U=$.1n(A)?A(B,x):A;3 11=($l.R&&$l.R[B])||B;5 U.f(/%d/i,11)}3 10=k<19&&6($l.k,j.V(k))||k<X&&6($l.z,1)||c<19&&6($l.c,j.V(c))||c<X&&6($l.H,1)||b<13&&6($l.b,j.V(b))||b<1A&&6($l.J,1)||7<Y&&6($l.7,j.S(7))||7<K&&6($l.M,1)||7<12&&6($l.N,j.S(7/Y))||p<2&&6($l.O,1)||6($l.p,j.S(p));5 $.Q([F,10,P].1H(" "))},E:4(y){3 s=$.Q(y);s=s.f(/\\.\\d\\d\\d+/,"");s=s.f(/-/,"/").f(/-/,"/");s=s.f(/T/," ").f(/Z/," 1m");s=s.f(/([\\+\\-]\\d\\d)\\:?(\\d\\d)/," $1$2");5 14 L(s)},h:4(C){3 16=$(C).1q(0).1r.1s()==="17";3 y=16?$(C).G("h"):$(C).G("W");5 $t.E(y)}});$.1v.8=4(){3 v=m;v.1b(D);3 $s=$t.w;e($s.I>0){1z(4(){v.1b(D)},$s.I)}5 v};4 D(){3 n=1e(m);e(!1C(n.h)){$(m).q(g(n.h))}5 m}4 1e(9){9=$(9);e(!9.n("8")){9.n("8",{h:$t.h(9)});3 q=$.Q(9.q());e(q.1F>0){9.G("W",q)}}5 9.n("8")}4 g(u){5 $t.g(1i(u))}4 1i(u){5(14 L().1j()-u.1j())}1k.1l("1K");1k.1l("17")}(1E));',62,110,'|||var|function|return|substitute|days|timeago|element||hours|minutes||if|replace|inWords|datetime||Math|seconds||this|data|timestamp|years|text|about|||date|self|settings|distanceMillis|iso8601|minute|stringOrFunction|number|elem|refresh|parse|prefix|attr|hour|refreshMillis|day|60|Date|month|months|year|suffix|trim|numbers|floor||string|round|title|90|30||words|value|365|24|new|suffixFromNow|isTime|time|suffixAgo|45|prefixFromNow|each|null|prefixAgo|prepareData|strings|allowFuture|else|distance|getTime|document|createElement|UTC|isFunction|false|an|get|tagName|toLowerCase|from|now|fn|extend|less|1000|setInterval|48|than|isNaN|typeof|jQuery|length|60000|join|instanceof|ago|abbr|abs'.split('|'),0,{}))


/* ============================================================
 * bootstrap-dropdown.js v1.4.0
 * http://twitter.github.com/bootstrap/javascript.html#dropdown
 * ============================================================
 * Copyright 2011 Twitter, Inc.
 *
 * ============================================================ */


!function( $ ){

  "use strict"

  /* DROPDOWN PLUGIN DEFINITION
   * ========================== */

  $.fn.dropdown = function ( selector ) {
    return this.each(function () {
      $(this).delegate(selector || d, 'click', function (e) {
        var li = $(this).parent('li')
          , isActive = li.hasClass('open')

        clearMenus()
        !isActive && li.toggleClass('open')
        return false
      })
    })
  }

  /* APPLY TO STANDARD DROPDOWN ELEMENTS
   * =================================== */

  var d = 'a.menu, .dropdown-toggle'

  function clearMenus() {
    $(d).parent('li').removeClass('open')
  }

  $(function () {
    $('html').bind("click", clearMenus)
    $('body').dropdown( '[data-dropdown] a.menu, [data-dropdown] .dropdown-toggle' )
  })

}( window.jQuery || window.ender );




/* =============================================================
 * bootstrap-scrollspy.js v1.4.0
 * http://twitter.github.com/bootstrap/javascript.html#scrollspy
 * =============================================================
 * Copyright 2011 Twitter, Inc.
 *
 * ============================================================== */


!function ( $ ) {

  "use strict"

  var $window = $(window)

  function ScrollSpy( topbar, selector ) {
    var processScroll = $.proxy(this.processScroll, this)
    this.$topbar = $(topbar)
    this.selector = selector || 'li > a'
    this.refresh()
    this.$topbar.delegate(this.selector, 'click', processScroll)
    $window.scroll(processScroll)
    this.processScroll()
  }

  ScrollSpy.prototype = {

      refresh: function () {
        this.targets = this.$topbar.find(this.selector).map(function () {
          var href = $(this).attr('href')
          return /^#\w/.test(href) && $(href).length ? href : null
        })

        this.offsets = $.map(this.targets, function (id) {
          return $(id).offset().top
        })
      }

    , processScroll: function () {
        var scrollTop = $window.scrollTop() + 10
          , offsets = this.offsets
          , targets = this.targets
          , activeTarget = this.activeTarget
          , i

        for (i = offsets.length; i--;) {
          activeTarget != targets[i]
            && scrollTop >= offsets[i]
            && (!offsets[i + 1] || scrollTop <= offsets[i + 1])
            && this.activateButton( targets[i] )
        }
      }

    , activateButton: function (target) {
        this.activeTarget = target

        this.$topbar
          .find(this.selector).parent('.active')
          .removeClass('active')

        this.$topbar
          .find(this.selector + '[href="' + target + '"]')
          .parent('li')
          .addClass('active')
      }

  }

  /* SCROLLSPY PLUGIN DEFINITION
   * =========================== */

  $.fn.scrollSpy = function( options ) {
    var scrollspy = this.data('scrollspy')

    if (!scrollspy) {
      return this.each(function () {
        $(this).data('scrollspy', new ScrollSpy( this, options ))
      })
    }

    if ( options === true ) {
      return scrollspy
    }

    if ( typeof options == 'string' ) {
      scrollspy[options]()
    }

    return this
  }

  $(document).ready(function () {
    $('body').scrollSpy('[data-scrollspy] li > a')
  })

}( window.jQuery || window.ender );