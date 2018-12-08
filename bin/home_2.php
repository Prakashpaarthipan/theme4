
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Bootply snippet - Bootstrap Sharepoint Metro style dynamic Tiles</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Bootstrap Sharepoint Metro style dynamic Tiles example." />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" type="text/css" rel="stylesheet" media="all">






        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            /* CSS used here will be applied after bootstrap.css */
.dynamicTile .col-sm-2.col-xs-4{
    padding:5px;
}

.dynamicTile .col-sm-4.col-xs-8{
    padding:5px;
}

#tile1{
    background: rgb(0,172,238);
}

#tile2{
    background: rgb(243,243,243);
}

#tile3{
    background: rgb(71,193,228);
}

#tile4{
    background-image: url('http://handsontek.net/demoimages/tiles/facebook.png');
    background-size: cover;
}

#tile5{
    background: rgb(175,26,63);
}

#tile6{
    background: rgb(62,157,215);
}

#tile7{
    background: white;
}

#tile8{
    background: rgb(209,70,37);
}

#tile9{
    background: rgb(0,142,0);
}

#tile10{
    background: rgb(0,93,233);
}

.tilecaption{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%); 
    margin:0!important;
    text-align: center;
    color:white;
    font-family: Segoe UI;
    font-weight: lighter;
}
        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body style="background-image: linear-gradient(-90deg, #f194d4, #bed9ec);">
        
        <div class="container dynamicTile">
<div class="row ">
    <div class="col-sm-2 col-xs-4">
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/twitter1.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/twitter2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
      </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile2" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/hot.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/hot2.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/hot3.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile3" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/weather2.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/weather.png" class="img-responsive">
            </div>
            </div>
         </div>
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile4" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/facebook3.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/facebook2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
    <div class="col-sm-2 col-xs-4">
    <div id="tile5" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/neews.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/neews2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile6" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/skype.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/skype2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-8">
    <div id="tile7" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/gallery.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery2.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery3.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile8" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/music.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/music2.png" class="img-responsive">
            </div>
            </div>
         </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile9" class="tile">
       
          <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/calendar.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/calendar2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-4 col-xs-8">
    <div id="tile10" class="tile">
       
           <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <h3 class="tilecaption"><i class="fa fa-child fa-4x"></i></h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Customize your tiles</h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Text, Icons, Images</h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Combine them and create your metro style</h3>
            </div>
          
          </div>
        </div>
         
    </div>
  </div>
  
</div>



<div class="row ">
    <div class="col-sm-2 col-xs-4">
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/twitter1.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/twitter2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
      </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile2" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/hot.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/hot2.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/hot3.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile3" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/weather2.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/weather.png" class="img-responsive">
            </div>
            </div>
         </div>
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile4" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/facebook3.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/facebook2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
    <div class="col-sm-2 col-xs-4">
    <div id="tile5" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/neews.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/neews2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile6" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/skype.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/skype2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-8">
    <div id="tile7" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/gallery.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery2.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery3.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile8" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/music.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/music2.png" class="img-responsive">
            </div>
            </div>
         </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile9" class="tile">
       
          <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/calendar.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/calendar2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-4 col-xs-8">
    <div id="tile10" class="tile">
       
           <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <h3 class="tilecaption"><i class="fa fa-child fa-4x"></i></h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Customize your tiles</h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Text, Icons, Images</h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Combine them and create your metro style</h3>
            </div>
          
          </div>
        </div>
         
    </div>
  </div>
  
</div>




<div class="row ">
    <div class="col-sm-2 col-xs-4">
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/twitter1.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/twitter2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
      </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile2" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/hot.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/hot2.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/hot3.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile3" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/weather2.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/weather.png" class="img-responsive">
            </div>
            </div>
         </div>
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile4" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/facebook3.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/facebook2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
    <div class="col-sm-2 col-xs-4">
    <div id="tile5" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/neews.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/neews2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile6" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/skype.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/skype2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-8">
    <div id="tile7" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/gallery.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery2.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery3.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile8" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://handsontek.net/demoimages/tiles/music.png" class="img-responsive">
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/music2.png" class="img-responsive">
            </div>
            </div>
         </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile9" class="tile">
       
          <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://handsontek.net/demoimages/tiles/calendar.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/calendar2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-4 col-xs-8">
    <div id="tile10" class="tile">
       
           <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <h3 class="tilecaption"><i class="fa fa-child fa-4x"></i></h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Customize your tiles</h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Text, Icons, Images</h3>
            </div>
            <div class="item">
              <h3 class="tilecaption">Combine them and create your metro style</h3>
            </div>
          
          </div>
        </div>
         
    </div>
  </div>
  
</div>

</div>


            <div id="push"></div>
        
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type='text/javascript' src="//code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

        <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>






        
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            $( document ).ready(function() {
    $(".tile").height($("#tile1").width());
    $(".carousel").height($("#tile1").width());
     $(".item").height($("#tile1").width());
     
    $(window).resize(function() {
    if(this.resizeTO) clearTimeout(this.resizeTO);
  this.resizeTO = setTimeout(function() {
    $(this).trigger('resizeEnd');
  }, 10);
    });
    
    $(window).bind('resizeEnd', function() {
      $(".tile").height($("#tile1").width());
        $(".carousel").height($("#tile1").width());
        $(".item").height($("#tile1").width());
    });

});
        
        });
        
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
        
        
    </body>
</html>