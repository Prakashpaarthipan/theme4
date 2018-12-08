
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Bootply snippet - Bootstrap Sharepoint Metro style dynamic Tiles</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Bootstrap Sharepoint Metro style dynamic Tiles example." />
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

<link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/>





        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
         @import url(http://allfont.net/allfont.css?fonts=agency-fb);
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
    background: rgb(0,151,167);
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
#tile11{
    background: rgb(121,85,72);
}
#tile12{
    background: rgb(13,71,161);
}
#tile13{
    background: rgb(255,193,7);
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
.badge{
  margin-top: 5px;
  margin-left: 5px;
  border-radius: 50px;
  /*border:1px solid white;*/
  background-color: #FFA726;
  /*background-color: transparent;*/
  font-size: 20px;
  color: black;
  z-index: 9999;
  bottom:0;
 font-family: 'BebasNeue' !important;

}
a{
  text-decoration: none !important;
}

        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
        <body style="background-image: linear-gradient(-90deg, #f194d4, #bed9ec);">
        
 <div class="container dynamicTile" style="margin-top: 10%">
  <div class="row ">
    <div class="col-sm-2 col-xs-4">
      <div id="tile12" class="tile">        
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          
       <div class="carousel-inner">
            
            <div class="item active" onclick="">
              <a href="accounts.php" target="_blank" "Accounts" style="display: block;height: 100%">
              <label class="badge badge-info" >12</label> 
              <h3 class="tilecaption" style="position: sticky !important; margin-top: 1px !important"><span class="tilecaption"><i class="fa fa-inr fa-3x"></i></span></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">ACCOUNTS</span>
            </a>
            </div>
         
           <!-- <a href="audit.php" target="_blank" "Accounts"> -->
            <div class="item">
              <a href="audit.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >15</label> 
               <h3 class="tilecaption" style="position: sticky !important; margin-top: 1px !important"><i class="fa fa-bullseye fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">AUDIT</span>
            </a>

            </div>       
          
      
            <div class="item">
              <a href="approval.php" target="_blank" "Approval" style="display: block;height: 100%">
              <label class="badge badge-info" >3</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-check fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">APPROVAL</span>
            </a>
            </div>
          
      
       
            <div class="item">
              <a href="reports.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >15</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-line-chart fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">REPORTS</span>
            </a>
            </div>
            <div class="item">
              <a href="utility.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >0</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-wrench fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">UTILITY</span>
            </a>
            </div>
      
        </div>
        
        </div>         
      </div>
  </div>
  <div class="col-sm-4 col-xs-8">
    <div id="tile7" class="tile" >
       
        <div class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            
            <div class="item active">
              <a href="payroll.php" target="_blank" "Audit" style="height: 185px">
             <label class="badge badge-info" >5</label> 
               <h3 class="tilecaption" style="position: sticky !important"><i class="  fa fa-money fa-3x"></i></h3><br>
              <span style=" padding-top: 10px;display:table;margin:0px auto;font-weight: bold;color: white">PAYROLL</span>
            </a>
            </div>
           <!--  <div class="item">
              <img src="img/payroll.jpg" class="img-responsive">
            </div> -->
           <!--  <div class="item">
              <img src="img/payroll2.jpg" class="img-responsive">
            </div>
            <div class="item">
              <img src="img/payroll3.jpg" class="img-responsive">
            </div> -->
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-6 col-xs-12" style="padding: 5px">
    <div id="tile9" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <!-- <img src="http://handsontek.net/demoimages/tiles/weather2.png" height="185px" class="img-responsive"> -->
                <a href="purchase.php" target="_blank" "Audit" style="display: block;height: 185px">
                <label class="badge badge-info" >30</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-shopping-bag fa-3x" ></i></h3><br>
              <span style="padding-top: 12px;display:table;margin:0px auto;font-weight: bold;color: white">PURCHASE</span>
            </a>
            </div>
             <div class="item">
               <a href="purchase.php" target="_blank" "Audit" style="display: block;height: 185px;background-color: #455A64">
                <label class="badge badge-info" >21</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-files-o fa-3x" ></i></h3><br>
              <span style="padding-top: 15px;display:table;margin:0px auto;font-weight: bold;color: white">INVOICE</span>
            </a>
            </div>
             <div class="item">
               <a href="purchase.php" target="_blank" "Audit" style="display: block;height: 185px;background-color: #651FFF">
                <label class="badge badge-info" >9</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-pencil-square-o fa-3x" ></i></h3><br>
              <span style="padding-top: 15px;display:table;margin:0px auto;font-weight: bold;color: white">RETURN-ENTRY</span>
            </a>
            </div>
           
            </div>
         </div>
    </div>
  </div>

</div>
<!-- 1st Row -->

<div class="row">
  <div class="col-sm-4 col-xs-8">
    <div id="tile10" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">             
               <a href="hr.php" target="_blank" "Audit" style="display: block;height: 185px">
              <label class="badge badge-info" >20</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class=" fa fa-user fa-4x"></i></h3><br>
              <span style="margin-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">HR</span>
            </a>
            </div>
            <!-- <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery2.png" class="img-responsive">
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery3.png" class="img-responsive">
            </div> -->
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile9" class="tile" style="background-color: #FF9800">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <a href="sales.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >156</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-shopping-cart fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">SALES</span>
            </a>
            </div>
            
            </div>
         </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile11" class="tile">
       
          <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
            <a href="operation.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >2</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-tachometer fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">OPEARTION</span>
            </a>
            </div>
            <div class="item">
              <label class="badge badge-info" >2</label> 
              <h3 class="tilecaption">Customize your tiles</h3>
            </div>
            <div class="item">
              <label class="badge badge-info" >2</label> 
              <h3 class="tilecaption">Text, Icons, Images</h3>
            </div>
            <div class="item">
              <label class="badge badge-info" >2</label> 
              <h3 class="tilecaption">Combine them and create your metro style</h3>
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-4 col-xs-8">
    <div id="tile8" class="tile">
       
           <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
            
              <a href="branch.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >3</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-university fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">BRANCH</span>
            </a>
            </div>
            
          
          </div>
        </div>
         
    </div>
  </div>
  
</div>
<!-- 2nd Row -->
<!-- <div class="row ">
   <div class="col-sm-6 col-xs-12" style="padding: 5px">
    <div id="tile8" class="tile">       
        <div class="carousel slide" data-ride="carousel">
         
          <div class="carousel-inner">
            <div class="item active">
              <a href="crm.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >7</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-phone-square fa-4x"></i></h3><br>
              <span style=" display:table;margin:0px auto;font-weight: bold;color: white">CRM</span>
            </a>
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery2.png" class="img-responsive">
            </div>
            </div>
         </div>
    </div>
  </div>
   <div class="col-sm-2 col-xs-4">
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
          
          <div class="carousel-inner">
            <div class="item active">
               <a href="scm.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >4</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-graduation-cap fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">SCM</span>
            </a>
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/twitter2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
      </div>
  </div>
  <div class="col-sm-2 col-xs-4">
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
         
          <div class="carousel-inner">
            <div class="item active">
               <a href="admin.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >22</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-users fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">ADMIN</span>
            </a>
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/twitter2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
      </div>
  </div>
  <div class="col-sm-2 col-xs-4">
      <div id="tile9" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
        
          <div class="carousel-inner">
            <div class="item active">
               <a href="utility.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >0</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-wrench fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">UTILITY</span>
            </a>
            </div>
            <div class="item">
               <img src="http://handsontek.net/demoimages/tiles/twitter2.png" class="img-responsive">
            </div>
          </div>
        </div>
         
      </div>
  </div>
    
 
</div> -->
<div class="row ">
  <div class="col-sm-2 col-xs-4">
    <div id="tile7" class="tile" style="background-color: #673AB7">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <a href="approval.php" target="_blank" "Approval" style="display: block;height: 100%">
              <label class="badge badge-info" >3</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-check fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">APPROVAL</span>
            </a>
            </div>
            
            </div>
         </div>
         
    </div>
  </div>
   <div class="col-sm-4 col-xs-8" >
    <div id="tile8" class="tile" style="background-color: #ff1744">       
        <div class="carousel slide" data-ride="carousel">
         
          <div class="carousel-inner">
            <div class="item active">
              <a href="crm.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >7</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-phone-square fa-3x"></i></h3><br>
              <span style=" padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">CRM</span>
            </a>
            </div>
            <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/gallery2.png" class="img-responsive">
            </div>
            </div>
         </div>
    </div>
  </div>
   <div class="col-sm-2 col-xs-4">
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
          
          <div class="carousel-inner">
            <div class="item active">
               <a href="scm.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >4</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-graduation-cap fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">SCM</span>
            </a>
            </div>
            
          </div>
        </div>
         
      </div>
  </div>
  <div class="col-sm-2 col-xs-4">
      <div id="tile12" class="tile">
        
         <div class="carousel slide" data-ride="carousel">
         
          <div class="carousel-inner">
            <div class="item active">
               <a href="admin.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >22</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-users fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">ADMIN</span>
            </a>
            </div>
            
          </div>
        </div>
         
      </div>
  </div>
  <div class="col-sm-2 col-xs-4">
      <div id="tile9" class="tile" style="background-color: #F4511E" >
        
         <div class="carousel slide" data-ride="carousel">
        
          <div class="carousel-inner">
            <div class="item active">
               <a href="utility.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >0</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-wrench fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">UTILITY</span>
            </a>
            </div>
            <div class="item">
                <div class="item">
              <img src="http://handsontek.net/demoimages/tiles/music2.png" class="img-responsive">
            </div>
            </div>
          </div>
        </div>
         
      </div>
  </div>
    
 
</div>
<!-- 3rd Row -->








</div>


<div id="push"></div>
        
      
    <script type='text/javascript' src="js/jquery-3.3.1.min.js"></script>
    <script type='text/javascript' src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
        
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