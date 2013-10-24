<?php
    ini_set(' session.save_path','/tmp'); 
    session_name('adminLogin');
    // Starting the session

    session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Titiksha | QueryBOX </title>
        <meta name="description" content="Titiksha | Annual tech-fest of Shri Mata Vaishno Devi University">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="../../js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="msg-Box" style="display:none;">
            <div class="msg-close">X</div>
            <div class="msg-content"></div>
        </div>
        <div class="md-overlay"></div><!-- the overlay element -->
      <? if(!isset($_SESSION["username"])){
       ?>
        
       <div class="loginWrapper" >
            <div class="loginBox">
                <h1>Titiksha Admin Login</h1>
                <form name="login_form" id="login_form" method="post"  autocomplete="off">
                <table>
                    <tr>
                        <td>
                            <label for="username">Username: </label>
                            <input name="username" type="text" size="30" maxlength="35" autocomplete="off"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password: </label>
                            <input name="password" type="password" size="30" maxlength="35" autocomplete="off"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="login"><input class="button" type="submit" value="Login"></div>
                            <div class="reset">Reset the fields</div>
                        </td>

                    </tr>
                </table>
                </form>
                <div class="msg"></div>
            </div>
        </div>
        <?php 
            }else{
        ?>

        <div class="dashboard" >
            <div class="header">
                <div id="header-title">Titiksha Admin Portal</div>
                <div id="logout">Logout</div>
            </div>
            <div class="queryBox">
                <form name="query_Box" id="query_Box" method="post"  autocomplete="off">
                    <table width="100%">
                        <tr>
                            <td style="width:65%;">
                                <div class="query_content">
                                    <label for="query">SQL Query: </label>
                                    <input name="query" id="query" type="text" size="55" maxlength="500" autocomplete="off" value="select * from registered_users"/>
                                </div>
                            </td>
                            <td style="width:20%;">
                                <div class="query_submit">
                                    <input class="button" type="submit" value="Submit">
                                </div>
                            </td>
                            <td style="width:15%;">
                                <div class="query_reset">
                                   <div id="reset-query">Reset the query</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>  
            <div class="loading-bar" style="display:none;">
                <div id="loading">Loading</div>
            </div>
            <div class="queryResult" style="display:none;">
                <div id="result-head">
                    <div id="head-content"></div>
                    <div id="print"><input type="button" value="Print" onclick="printPage('result-content');"></input></div>
                </div>
                <div id="result-content">
                    <table id="mytable"></table>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <script src="../../js/vendor/jquery-1.9.1.min.js"></script>
        <script src="../../js/plugins.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/main.js"></script>
    
       
    </body>
</html>
