<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $description; ?>" />
        <title><?php echo $title; ?></title>
        
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/font-awesome.min.css">        
        <link rel="stylesheet" href="/css/bootstrap-theme-alt.css" media="screen" >
	<link rel="stylesheet" href="/css/main.css">

        <?php
        if(isset($cssFiles)){
            foreach($cssFiles as $cssFile){
        ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $cssFile ?>" />
        <?php
            }
        }           
        ?>                
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="/js/html5shiv.js"></script>
	<script src="/js/respond.min.js"></script>
	<![endif]-->
        
        <?php include_once("analyticstracking.php") ?>
    </head>