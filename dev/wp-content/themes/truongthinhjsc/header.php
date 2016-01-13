<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
      <script type="text/javascript">jQuery.noConflict();</script>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="Autoseller" />
      <meta name="generator" content="Joomla! - Open Source Content Management" />
      <title><?php wp_title() ?></title>
      <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-responsive.css" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.css" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/vehiclemanager.css" type="text/css" />
      <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/idangerous-swiper.css" type="text/css" />
      <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-noconflict.js" type="text/javascript"></script>
      <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-migrate.min.js" type="text/javascript"></script>
      <script src="<?php bloginfo( 'template_url' ); ?>/js/tabs-state.js" type="text/javascript"></script>
      <script src="<?php bloginfo( 'template_url' ); ?>/js/caption.js" type="text/javascript"></script>
      <script src="<?php bloginfo( 'template_url' ); ?>/js/custom.js" type="text/javascript"></script>
      <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="<?php bloginfo( 'template_url' ); ?>/js/idangerous-swiper.js" type="text/javascript"></script>
      <script type="text/javascript">
         jQuery(window).on('load',  function() {
         				new JCaption('img.caption');
         			});
           
      </script>
      <script type="text/javascript"></script>
      <!--[if IE 7]> 
      <link type="text/css" rel="stylesheet" href="/vehiclemanager16/templates/autoseller/css/style_ie7.css" />
      <![endif]-->
      <!--[if IE 8]> 
      <link type="text/css" rel="stylesheet" href="/vehiclemanager16/templates/autoseller/css/style_ie8.css" />
      <![endif]-->
      <!--[if IE 9]> 
      <link type="text/css" rel="stylesheet" href="/vehiclemanager16/templates/autoseller/css/style_ie9.css" />
      <![endif]-->
   </head>
   <style type="text/css">
      body {
      font-family:Open Sans, sans-serif;
      background-color:#fff; 
      background-image: url('/vehiclemanager16/templates/autoseller/images/');
      }
      a {
      color:#92999E;
      text-decoration:none;
      font-family:Open Sans, sans-serif;
      }
      a:hover {
      color:red;
      text-decoration:none;
      }
      .top_menu .navbar li a {
      color:#92999E;
      text-decoration:none;
      font-family:Open Sans, sans-serif;
      }
      .top_menu .navbar li a:hover {
      color:#000000;
      text-decoration:none;
      } 
      .main_menu .navbar li a {
      color:#92999E;
      text-decoration:none;
      font-family:Open Sans, sans-serif;
      }
      .main_menu .navbar li a:hover {
      color:#000000;
      text-decoration:none;
      }
      .footer_menu .navbar li a {
      color:#fff;
      text-decoration:none;
      font-family:Open Sans, sans-serif;
      }
      .footer_menu .navbar li a:hover {
      color:red;
      text-decoration:none;
      }
      h1 {font-family:Open Sans, sans-serif;}
      h2 {font-family:Open Sans, sans-serif;}
      h3 {font-family:Open Sans, sans-serif;}
      h4 {font-family:Open Sans, sans-serif;}
      h5 {font-family:Open Sans, sans-serif;}
      h6 {font-family:Open Sans, sans-serif;}
   </style>
   <body>
      <div class="header">
         <div class="top_header">
            <div id="wrapper" class="container">
               <div class="row-fluid">
                  <div class="span8">
                     <div class="maps">
                        <div class="moduletable">
                           <div class="custom"  >
                              <p><i class="fa fa-map-marker"></i>4538 MARINE DR, Burnaby,</p>
                           </div>
                        </div>
                     </div>
                     <div class="number">
                        <div class="moduletable">
                           <div class="custom"  >
                              <p><i class="fa fa-mobile fa-lg"></i>4538-777-777</p>
                           </div>
                        </div>
                     </div>
                     <div class="masege">
                        <div class="moduletable">
                           <div class="custom"  >
                              <p><i class="fa fa-envelope-o fa-lg"></i>4538 MARINE DR, Burnaby,</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="span4">
                     <div id="Search" class="span12">
                        <div class="moduletable">
                           <div class="search">
                              <form action="/vehiclemanager16/index.php" method="post" class="form-inline">
                                 <label for="mod-search-searchword" class="element-invisible">Search...</label> <input name="searchword" id="mod-search-searchword" maxlength="20"  class="inputbox search-query" type="text" size="20" value="Search..."  onblur="if (this.value=='') this.value='Search...';" onfocus="if (this.value=='Search...') this.value='';" /> <button class="button btn btn-primary" onclick="this.form.searchword.focus();"><i class='fa fa-search'></i></button>		<input type="hidden" name="task" value="search" />
                                 <input type="hidden" name="option" value="com_search" />
                                 <input type="hidden" name="Itemid" value="101" />
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_bottom">
            <div id="header" class="container">
               <div  class="row-fluid">
               </div>
               <div class="row-fluid">
                  <div class="span3">
                     <div id="logo">
                        <a href="<?php bloginfo('wpurl')?>">
                        <img src="<?php bloginfo( 'template_url' ); ?>/images/logo-1.png" alt="Truong Thinh JSC" />
                        </a>
                     </div>
                  </div>
                  <div class="main_menu">
                     <div class="navbar">
                        <div class="container">
                           <a class="btn btn-navbar" data-toggle="collapse" data-target=".main-collapse">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </a>
                           <div class="main-collapse nav-collapse collapse">
                           	<?php wp_nav_menu( array( 'menu' => 'menu-top', 'container' => 'false', 'menu_class' => 'nav menu', 'menu_id' => 'icemegamenu' ) ); ?> 
                              <!--<div class="moduletable_menu">
                                 <ul class="nav menu">
                                    <li class="item-101 current active"><a href="/vehiclemanager16/" >Home</a></li>
                                    <li class="item-156 deeper parent">
                                       <a href="/vehiclemanager16/" >VehicleManager</a>
                                       <ul class="nav-child unstyled small">
                                          <li class="item-157"><a href="/vehiclemanager16/index.php/component/vehiclemanager/157/all_categories?Itemid=157" >All Categories</a></li>
                                          <li class="item-158"><a href="/vehiclemanager16/index.php/component/vehiclemanager/158/all_vehicle?Itemid=158" >All Vehicles</a></li>
                                          <li class="item-161"><a href="/vehiclemanager16/index.php/component/vehiclemanager/161/show_search_vehicle?Itemid=161" >Search Vehicles</a></li>
                                          <li class="item-162 deeper parent">
                                             <a href="/vehiclemanager16/" >Single Category</a>
                                             <ul class="nav-child unstyled small">
                                                <li class="item-168"><a href="/vehiclemanager16/index.php/component/vehiclemanager/168/alone_category/46/Smart?Itemid=168" >Gallery</a></li>
                                                <li class="item-169"><a href="/vehiclemanager16/index.php/component/vehiclemanager/169/alone_category/46/Smart?Itemid=169" >List</a></li>
                                             </ul>
                                          </li>
                                          <li class="item-164"><a href="/vehiclemanager16/index.php/component/vehiclemanager/164/view_vehicle?Itemid=164" >View Vehicle</a></li>
                                       </ul>
                                    </li>
                                    <li class="item-102 deeper parent">
                                       <a href="javascript: void(0);" >Elements</a>
                                       <ul class="nav-child unstyled small">
                                          <li class="item-103"><a href="/vehiclemanager16/index.php/2013-05-13-09-46-32/buttons" >Buttons</a></li>
                                          <li class="item-104"><a href="/vehiclemanager16/index.php/2013-05-13-09-46-32/notifications" >Notifications</a></li>
                                          <li class="item-105"><a href="/vehiclemanager16/index.php/2013-05-13-09-46-32/icons" > Icons </a></li>
                                          <li class="item-106"><a href="/vehiclemanager16/index.php/2013-05-13-09-46-32/progress-bare" >Progress bare</a></li>
                                          <li class="item-107"><a href="/vehiclemanager16/index.php/2013-05-13-09-46-32/labels-and-badges" > Labels and badges</a></li>
                                          <li class="item-108"><a href="/vehiclemanager16/index.php/2013-05-13-09-46-32/tooltips" >Tooltips</a></li>
                                          <li class="item-109"><a href="/vehiclemanager16/index.php/2013-05-13-09-46-32/tabs-and-accordion" >Tabs and accordion</a></li>
                                       </ul>
                                    </li>
                                    <li class="item-110 deeper parent">
                                       <a href="javascript: void(0);" >Feature pages</a>
                                       <ul class="nav-child unstyled small">
                                          <li class="item-111"><a href="/vehiclemanager16/index.php/2013-05-13-12-50-59/template-settings" >Template Settings</a></li>
                                          <li class="item-112"><a href="/vehiclemanager16/index.php/2013-05-13-12-50-59/quickstart-package" >QuickStart Package</a></li>
                                          <li class="item-113"><a href="/vehiclemanager16/index.php/2013-05-13-12-50-59/responsive-layout" >Responsive Layout</a></li>
                                          <li class="item-114"><a href="/vehiclemanager16/index.php/utjj" >404 Page</a></li>
                                          <li class="item-115"><a href="/vehiclemanager16/index.php/2013-05-13-12-50-59/typography" >Typography</a></li>
                                          <li class="item-116"><a href="http://ordasvit.com/vehiclemanager16/?tp=1" >Module Positions</a></li>
                                       </ul>
                                    </li>
                                    <li class="item-117 deeper parent">
                                       <a href="javascript: void(0);" >Joomla content</a>
                                       <ul class="nav-child unstyled small">
                                          <li class="item-118 deeper parent">
                                             <a href="javascript: void(0);" >User</a>
                                             <ul class="nav-child unstyled small">
                                                <li class="item-121"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-10-30/2013-05-16-10-14-18" >Login Form</a></li>
                                                <li class="item-122"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-10-30/2013-05-16-10-15-35" >Registration Form</a></li>
                                                <li class="item-123"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-10-30/2013-05-16-10-16-10" >Username Reminder Request</a></li>
                                                <li class="item-124"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-10-30/2013-05-16-10-16-36" >Password reset</a></li>
                                             </ul>
                                          </li>
                                          <li class="item-119 deeper parent">
                                             <a href="javascript: void(0);" >Content</a>
                                             <ul class="nav-child unstyled small">
                                                <li class="item-125"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-06/2013-05-16-10-21-36" >Archived articles</a></li>
                                                <li class="item-126"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-06/2013-05-16-10-23-54" > List All Categories</a></li>
                                                <li class="item-127"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-06/2013-05-16-10-24-32" >Category blog</a></li>
                                                <li class="item-128"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-06/2013-05-16-10-25-00" >Category list</a></li>
                                                <li class="item-129"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-06/2013-05-16-10-25-44" >Single Article</a></li>
                                                <li class="item-134"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-06/featured-articles" >Featured Articles</a></li>
                                             </ul>
                                          </li>
                                          <li class="item-120 deeper parent">
                                             <a href="javascript: void(0);" >Contacts</a>
                                             <ul class="nav-child unstyled small">
                                                <li class="item-130"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-30/2013-05-16-10-26-12" >List Contacts in a Category</a></li>
                                                <li class="item-131"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-30/2013-05-16-10-26-47" >List All Contact Categories</a></li>
                                                <li class="item-132"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-30/2013-05-16-10-27-18" >Featured Contacts</a></li>
                                                <li class="item-133"><a href="/vehiclemanager16/index.php/2013-05-16-10-09-40/2013-05-16-10-12-30/2013-05-16-10-28-32" >Single Contact</a></li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="item-170"><a href="/vehiclemanager16/index.php/contact-us-111" >Contact Us </a></li>
                                 </ul>
                              </div>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--id header-->
         </div>
      </div>
      <!--class header-->
      <div class="container" id="wrapper">