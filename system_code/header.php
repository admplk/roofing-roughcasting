<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="description" content="A fully qualified tradesman for over 13 years, Grant Allan Roofing and Roughcasting offers a wide range of services. Free estimates and advice available." />        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.min.css" />        
        <?php
        if(isset($cssFiles)){
            foreach($cssFiles as $cssFile){
        ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $cssFile ?>" />
        <?php
            }
        }           
        ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>            
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <?php include_once("analyticstracking.php") ?>
    </head>
    <body>        
        <!--<div class="header-image">          
        </div>-->
        <div class="container">                      
          <div class="row">
              <div class="span4 offset1" style="padding-top: 10px;">                
                  <img src="/img/logo-transparent2.gif" alt="Grant Allan Roofing and Roughcasting" style="height:150px;" />                  
              </div>
              <div class="span6 pull-right" style="padding-top: 30px; font-size: 150%; color: #900000;">
                <div class="row">
                  <div class="span3">
                    <img src="/img/phone-icon.gif" alt="tel number" style="height: 50px" />
                    0131 319 2153
                  </div>
                  <div class="span3">
                    <img src="/img/mobile-icon.gif" alt="mobile number" style="height: 50px"/>
                    07841 640 097
                  </div>
                </div>
              </div>
          </div>          
          <div class="row">              
            <!--nav bar-->
            <ul class="nav nav-tabs span12" style="margin-top: -30px; font-size: 150%;">
              <li class="<?php if ($pageId == 3){?> active <?php }?> pull-right"><a href="/contact-us" style="padding-bottom: 10px;">Contact Us</a></li>
              <li class="<?php if ($pageId == 2){?> active <?php }?> pull-right"><a href="/services" style="padding-bottom: 10px;">Services</a></li>
              <li class="<?php if ($pageId == 1){?> active <?php }?> pull-right"><a href="/home"><i class="icon-home"></i></a></li>
            </ul>

            <!--alternate nav bar
            <div class="navbar span6 offset6" style="padding-bottom:0; margin-bottom:0; margin-top: -30px; font-size: 150%;">
              <div class="navbar-inner">        
                <ul class="nav">
                  <li class="active"><a href="/home"><i class="icon-home"></i></a></li>
                  <li class="divider"></li>                 
                  <li><a href="/services">Services</a></li>      
                  <li class="divider"></li>
                  <li><a href="/contact-us">Contact Us</a></li>            
                </ul>
              </div>
            </div>-->

          </div>