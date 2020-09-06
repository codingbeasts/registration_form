<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
    <div class="wrapper">
        <div class="navigation-menu">
            <div class="logo">
                <img src="" alt="">
                <i class="material-icons close-btn">close</i>
            </div>
            <ul class="navbar">
                <li class="nav-btn active-nav-menu"><i class="material-icons">home</i></li>
                <li class="nav-btn"><i class="material-icons">chat</i></li>
                <li class="nav-btn"><i class="material-icons">settings</i></li>
                <li class="nav-btn"><i class="material-icons">calendar_today</i></li>
                <li class="nav-btn"><i class="material-icons">credit_card</i></li>
                <li class="nav-btn"><i class="material-icons">person</i></li>
            </ul>
            <div class="exit">
                <i class="material-icons">exit_to_app</i>
            </div>
        </div>
        <div class="main-section">
            <div class="main-section-nav">
                <ul>
                    <li><i class="material-icons open-btn">menu</i></li>
                    <li>dashboard</li>
                    <li class="search-bar"><input type="text" placeholder="search"><i class="material-icons">search</i></li>
                    <li><i class="material-icons profile-open">perm_identity</i></li>
                </ul>
            </div>
            <div class="first-section">
                <div class="box">
                    <div class="box-1">
                        <span>customers</span>
                        <span>:</span>
                    </div>
                    <div class="box-2">
                        <span>12.3k</span>
                        <i class="material-icons i-b1">people_alt</i>
                    </div>
                </div>
                <div class="box">
                    <div class="box-1">
                        <span>website views</span>
                        <span>:</span>
                    </div>
                    <div class="box-2">
                        <span>21.6k</span>
                        <i class="material-icons i-b2">visibility</i>
                    </div>
                </div>
                <div class="box">
                    <div class="box-1">
                        <span>orders</span>
                        <span>:</span>
                    </div>
                    <div class="box-2">
                        <span>34.4k</span>
                        <i class="material-icons i-b3">shopping_cart</i>
                    </div>
                </div>
                <div class="box">
                    <div class="box-1">
                        <span>growth</span>
                        <span>:</span>
                    </div>
                    <div class="box-2">
                        <span>15.6%</span>
                        <!-- <img class="i-b4" src="../images/icons/growth.png" alt="growth"> -->
                        <span class="i-b4"></span>
                    </div>
                </div>
                <div class="device-box">
                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Laudantium sapiente porro at corrupti est asperiores suscipit 
                    similique ipsa quibusdam voluptate rem distinctio molestias 
                    dolores veniam, laboriosam numquam eaque placeat consectetur. -->
                </div>
            </div>
            <div class="second-section">
                <div class="sec-box graph-box"></div>
                <div class="sec-box revenue-box"></div>
                <div class="location-box"></div>
            </div>
        </div>
        <div class="admin-profile">
            <div class="profile-nav">
                <ul>
                    <li><i class="material-icons profile-close">close</i></li>
                    <li><i class="material-icons">notifications_active</i></li>
                </ul>
            </div>
            <div class="profile-info">
                <img src="../images/icons/hacker.png" alt="profile-pic">
                <span>byte cyberlabs</span>
                <span>founder</span>
                <input type="button" class="profile-btn" value="upgrade plan">
                <ul>
                    <li>
                        <span>236k</span>
                        <span>total subscribers</span>
                    </li>
                    <li>
                        <span>128k</span>
                        <span>live subscribers</span>
                    </li>
                </ul>
            </div>
            <div class="messages">
                <ul>
                    <li>messages</li>
                    <li class="view-btn">view all</li>
                </ul>
                <ul class="msg-list">
                    <li>
                        <img src="../images/profile-msg/DrNavedRizvi.jpg" alt="">
                        <div>
                            <p>dr naved rizvi</p>
                            <span>researcher</span>
                        </div>
                    </li>
                    <li>
                        <img src="../images/profile-msg/NeelakshN.jpg" alt="">
                        <div>
                            <p>neelaksh</p>
                            <span>ceo, neel education</span>
                        </div>
                    </li>
                    <li>
                        <img src="../images/profile-msg/sanjeevmultani.jpg" alt="">
                        <div>
                            <p>sanjeev multani</p>
                            <span>analyst lucideus tecnologies</span>
                        </div>
                    </li>
                    <li>
                        <img src="../images/profile-msg/sriramvetrivel.jpg" alt="">
                        <div>
                            <p>sri ram vetrivel</p>
                            <span>researcher | python developer</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="../js/menu.js"></script>
</body>
</html>