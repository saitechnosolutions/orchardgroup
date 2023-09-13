<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Orchard and Groups</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/navbar.css">
    
    <link rel="stylesheet" href="css/resp-custom.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/icon/Favicon (1).png">
    <link rel="icon" type="image/png" href="images/icon/Favicon (1).png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/icon/Favicon (1).png" sizes="16x16">
    <script src="https://kit.fontawesome.com/3af54b62af.js" crossorigin="anonymous"></script>
    <!-- aos animation-->
    <!--<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!--social icon animation link-->
     <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <!--Start Preloader -->
    <!-- <div class="preloader"></div> -->
    <!--End Preloader -->
    <!--Start header area-->
    <header class="header-area">
        <!--Start header upper-->
        <div class="header-upper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <div class="flex-box-three">
                                <div class="header-upper-left clearfix">
                                    <div class="state-box">
                                        <div class="state-select-box float-left">
                                            <select class="sel_menu area_select" id="area_select">
                                                <option class="option" value="1">Singapore</option>
                                                <option class="option" value="2">India</option>
                                                <option class="option" value="3">Sri Lanka</option>
                                            </select>                                            
                                            <div class="icon-holder">
                                                <span class="flaticon-globe" style="margin-left:5px;"></span>
                                            </div>
                                        </div>
                                        <div class="state-content float-right">
                                            <!--Start single state-->
                                            <div class="state" id="value1">
                                                <ul class="clearfix" id="clearfix">        
                                                    <li id="lists1">
                                                        <div class="icon-box">
                                                            <span class="flaticon-technology"></span>
                                                        </div>
                                                        <div class="text-box" id="textbox1">
                                                           <a href="tel:+94 117924911"><p id="phone2">+94 117924911</p></a>
                                                        </div>
                                                    </li>
                                                    <li id="email-list">
                                                        <div class="icon-box">
                                                            <span class="flaticon-note"></span>
                                                        </div>
                                                        <div class="text-box"id="textbox1">
                                                          <a href="mailto:support@orchardandgroup.com" target="_blank"><p id="email1">support@orchardandgroup.com</p></a>  
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--End single state-->
                                        </div>
                                    </div>
                                </div>
                                <div class="header-upper-right clearfix">
                                    <p>Stay Connected:</p>
                                    <ul class="sociallinks-style-one">
                                        <li><a href="https://www.facebook.com/Orchard-and-Group-Networks-109079938560241/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <!--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                        <!--<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
                                        <li><a href="https://www.linkedin.com/company/orchard-group-networks-private-limited/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End header upper-->
        
        <!--<button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>-->
</div>
        
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="index.php" class="<?php if($page == 'home') { ?>current<?php } ?>">Home</a>
          <a href="about.php" class="<?php if($page == 'about') { ?>current<?php } ?>">About us</a>
          <a href="companies.php" class="<?php if($page == 'companies') { ?>current<?php } ?>">Companies</a>
          <a href="contact.php" class="<?php if($page == 'contact') { ?>current<?php } ?>">Contact Us</a>
        </div>
        <div class="header-lower1" style="display:none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-lawer-content clearfix">
                            <div class="col-lg-6 header-headings1">
                                
                                <div class="header-lower-left">
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="images/icon/LOGO.png" class="logo_img" alt="Awesome Logo">
                                        </a>
                                    </div>
                                </div>
                                <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="openNav()">&#9776;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="header-lower header-lower2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-lawer-content clearfix">
                            <div class="col-lg-6">
                                <div class="header-lower-left">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="images/icon/LOGO.png" class="logo_img" alt="Awesome Logo">
                                    </a>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6 ">
                                 <div class="header-lower-right clearfix">
                                <nav class="main-menu clearfix">
                                     
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="<?php if($page == 'home') { ?>current<?php } ?>"><a href="index.php">Home</a></li>
                                            <li class="<?php if($page == 'about'){?>current<?php } ?>"><a href="about.php">About Us</a></li>
                                            <li class="<?php if($page == 'companies') { ?>current<?php } ?>"><a href="companies.php">companies</a></li>
                                            <li class="<?php if($page == 'contact'){ ?>current<?php } ?>"><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                
                            </div>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--    <a href="tel-8378329832" class="btn btn-primary call-btn btn-whatsapp-pulse" title="phone">-->
    <!--<i class="fa fa-phone" aria-hidden="true"></i>-->
    <!--</a>-->
    <!--<div class="social-links">-->
    <!--    <ul>-->
    <!--        <li><a href="#" style="--media-padding: 5px 11px;--media-bg:#298b94;" class="btn btn-default whatsapp-btn" target="blank_"><i class="fa fa-whatsapp"></i></li></a>-->
    <!--    </ul>-->
    <!--</div>-->
    <!--<a href="https://api.whatsapp.com/send?phone=919585457892"  title="wattsapp" class="btn btn-default whatsapp-btn btn-whatsapp-pulse" target="blank_">-->
    <!--    <i class="fa fa-whatsapp" aria-hidden="true"></i>-->
    <!--</a>-->
        <!---Start sticky header-->
        <div class="sticky-header sticky-header2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 header-headings1">
                        <div class="left-colum pull-left">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/icon/LOGO.png" class="logo_img" alt="Awesome Logo">
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="right-colum pull-right">
                            <nav class="main-menu clearfix">
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="<?php if($page == 'home') { ?>current<?php } ?>" ><a href="index.php">Home</a></li>
                                        <li class="<?php if($page == 'about'){?>current<?php } ?>"><a href="about.php">About Us</a></li>
                                        <li class="<?php if($page == 'companies') { ?>current<?php } ?>"><a href="companies.php">Companies</a>
                                        <li class="<?php if($page == 'contact'){ ?>current<?php } ?>"><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---End sticky header-->
    </header>
    <!--End header area-->
    