<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
                <div class="navbar-header">
                        <!-- Button for smallest screens -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="/">
                            <img id="headerImg" src="img/logo-1-resized.png" alt="Grant Allan Roofing & Roughcasting">
                        </a>
                </div>
                <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav pull-right">
                                <li <?php if ($pageId == 1){?>class="active"<?php }?>><a href="/">Home</a></li>
                                <li <?php if ($pageId == 2){?>class="active"<?php }?>><a href="/roofing">Roofing</a></li>                                    
                                <li <?php if ($pageId == 3){?>class="active"<?php }?>><a href="/roughcasting">Roughcasting / Harling</a></li>
                                <li <?php if ($pageId == 4){?>class="active"<?php }?> ><a href="/contact-us">Contact Us</a></li>
                        </ul>
                </div><!--/.nav-collapse -->
        </div>
</div> 
<!-- /.navbar -->