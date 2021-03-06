<?php
session_start();

?> 
<!DOCTYPE html>
<html>
    <head>
        <title>GenZ Stock Picker - Play</title>
        
        <link type="text/css" rel="stylesheet" href="main.css">

    </head>
    <body>
        <div class = "container" id="container-top">
            <div class="logo-top">
                GenZ Stock Picker
            </div>
            <form style="border:none" class="search-top" action="search.php">
                <input id="in-search-top" type="text" name="stock" placeholder="Search stocks...">
                <button id="btn-search-top" type="submit">Go</button>
            </form>
            <div class="drop-top">
                <a class="drop-nav-link">=</a>
                <!--<div id="menu-drop-top" class="drop">
AAA
</div>-->
            </div>
            <div class="links-top">
                <ul>
                    <li><a id="user-nav-link" href="http://www.genzfinancial.com/gen2/landing/login.php">User</a></li>
                    <li><a id="stocks-nav-link" href="http://www.genzfinancial.com/gen2/stocks">Stocks</a></li>
                    <li><a id="info-nav-link" href="http://www.genzfinancial.com/contact">Info</a></li>
                    <li><a id="lb-nav-link" href="http://www.genzfinancial.com/leaderboard">Ranks</a></li>
                    <li><a id="play-nav-link" href="http://www.genzfinancial.com/gen2/logout_page.php">Play</a></li>
                </ul>
            </div>
        </div>
        <div class="container-body">
            <div class = "inside-part">
                <div class="loggedin-body">
                    <?php if($_SESSION["valid"] !== true): ?>
                    <div>
                        <p>You aren't logged in!</p>
                    </div>
                    <?php elseif ($_SESSION["valid"] == true): ?>
                    <div>
                        <p>Welcome <?php echo $_SESSION["userID"];?>!</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container-footer">
            <div id="left-list">
                <ul>
                    <li><a href="http://www.genzfinancialfinancial.com/user">User</a></li>
                    <li><a href="http://www.genzfinancialfinancial.com/stocks">Stocks</a></li>
                    <li><a href="http://www.genzfinancialfinancial.com/info">Info</a></li>
                </ul>
                <ul id=social-icons-footer>
                    <li><a href="NOTHING">
                        <img src= "https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/instagram_circle-48.png"/></a>
                    </li>
                    <li><a href="NOTHING">
                        <img src= "https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-48.png"/></a>
                    </li>
                    <li><a href="NOTHING">
                        <img src= "https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-48.png"/></a>
                    </li>
                </ul>
                <ul id="contact-footer">    
                    <li><a><p>Email: seanliew@genzfinancial.com</p></a></li>
                    <li><a><p>Phone: 647-455-2108</p></a></li>
                </ul>
            </div>
            <div id="final-footer">
                <p>Sean Liew, Derek Miller, Paul Santilli, Marie Macdonald, Jacob Salach | Bishop Allen 2016</p>
            </div>
        </div>
    </body>
</html>