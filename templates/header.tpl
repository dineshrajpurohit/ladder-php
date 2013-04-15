<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ladder - {$title}</title>
        
        <!-- css files -->
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/main.css">
        <!-- Javascript files -->
        <script src="public/js/jquery-1.9.1.min.js"></script>
        <script src="pubic/js/bootstrap.min.js"></script>
        
        
    </head>
    <body>
        <header class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a href="" id="logo" >Ping Pong Challenge</a>
                    <nav>
                        <ul class="nav pull-right">
                            <li><a href="/ladder/index" >Home</a></li>
                            {if isset($logged_in)}
                                 <li><a href="/ladder/login" >Login</a></li>
                                 <li><a href="/ladder/register" >Register</a></li>
                             {else}
                                 <li><a href="/ladder/logout" >logout</a></li>
                             {/if}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                    <li><a href="/ladder/index">Home</a></li>
                    <li><a href="/ladder/rules">Rules</a></li>
                    <li><a href="/ladder/rankings">Rankings</a></li>  
                    <li><a href="/ladder/tournaments">Tournament</a></li>  
                </ul> 
                    </div>
                </div>
                               
            </div>
        </header><br/><br/>
        <div class="container">
       
        
