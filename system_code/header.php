<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
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
    </head>
    <body>
        <div class="container">
            <div class="navbar navbar-inverse">            
                <div class="navbar-inner">
                    <div style="font-size:150%; color:whitesmoke; font-style:italic; padding: 10px;">
                        <img src="/img/logo-transparent.gif" alt="Grant Allan Roofing and Roughcasting" style="height:100px;float:left;" />
                        <div style="float:left;margin-left:40px;padding-top:15px;">
                            <p>Grant Allan Roofing and Roughcasting</p>
                            <p>tel: 0131 319 2153 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mob: 07841640097</p>
                        </div>
                    </div>                    
                <!--<div class="container-fluid">                
                  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>              
                  <div class="nav-collapse collapse">
                    <ul class="nav">
                      <li <?php if ($pageId == 1){?> class="active" <?php } ?>><a href="/admin"><i class="icon-home icon-white"></i></a></li>
                      <li <?php if ($pageId == 2){?> class="active" <?php } ?>><a href="/admin/manage-fixtures">Manage Fixtures</a></li>
                      <li <?php if ($pageId == 3){?> class="active" <?php } ?>><a href="/admin/manage-teams">Manage Teams</a></li>
                      <li <?php if ($pageId == 4){?> class="active" <?php } ?>><a href="/admin/manage-players">Manage Players</a></li>
                      <li <?php if ($pageId == 5){?> class="active" <?php } ?>><a href="/admin/calendar">Calendar</a></li>
                      <li <?php if ($pageId == 6){?> class="active" <?php } ?>><a href="/admin/website-releases">Version History</a></li>
                    </ul>                
                  </div>--><!--/.nav-collapse -->
                </div>
            </div>        