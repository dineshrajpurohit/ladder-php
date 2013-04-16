<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ladder - {$title}</title>

        <!-- css files -->
        <link rel="stylesheet" type="text/css" href="{$public_path}/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{$public_path}/css/main.css">
        <!-- Javascript files -->
        <script src="{$public_path}/js/jquery-1.9.1.min.js"></script>
        <script src="{$public_path}/bootstrap.min.js"></script>


    </head>
    <body>
        <header class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a href="" id="logo" >{$ladder_header}</a>
                    <nav>
                        <ul class="nav pull-right">
                            {if !isset($logged_in)}
                                <li><a href="/ladder/index" >Home</a></li>
                                <li><a href="/ladder/login" >Login</a></li>
                                <li><a href="/ladder/register" >Register</a></li>
                            {else}
                                <li><a href="/ladder/player/profile" >Home</a></li>
                                <li><a href="/ladder/player/logout" >logout</a></li>
                            {/if}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <!-- There is a better way to do this -->
                            {if isset($logged_in)}
                                <li><a href="/ladder/player/profile">Home</a></li>
                                <li><a href="/ladder/player/rules">Rules</a></li>
                                <li><a href="/ladder/player/rankings">Rankings</a></li>  
                                <li><a href="/ladder/player/tournaments">Tournament</a></li> 
                            {else}
                                <li><a href="/ladder/index">Home</a></li>
                                <li><a href="/ladder/rules">Rules</a></li>
                                <li><a href="/ladder/rankings">Rankings</a></li>  
                                <li><a href="/ladder/tournaments">Tournament</a></li> 
                            {/if}

                        </ul> 
                    </div>
                </div>

            </div>
        </header><br/><br/>
        <div class="container">


