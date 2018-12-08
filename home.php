
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Home - The Chennai Silks</title>
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
<!-- <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/> -->
<link rel="stylesheet" type="text/css" href="css/index.css">




        <!-- CSS code from Bootply.com editor -->
     
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
   <!--      <body style="background-image: linear-gradient(-90deg, #f194d4, #bed9ec);"> -->
    <body>
        <style type="text/css">
        .popover{
          top: 50px; left: -112px; display: block; width: 400px; margin-left: -70px;padding:0px;z-index: 999;
        }
        .arrow{
          left:80% !important;
        }
       .img-responsive {
            /*width: 100%;*/
            display: block;
            height: auto;
            max-width: 70px;
            vertical-align: middle !important;
            padding:5px;
            
           
        }
       .popover-content{
          padding: 5px !important;
        }
        @media (min-width: 1200px)
                .container {
                    width: 100%;
                }

        </style>
    
          <div class="wrapper" style="z-index:1000"><div class="bub">
            
                <ul class="bg-bubbles">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>

                </ul> 
              </div>
              </div>
          <!-- sticky -->
          <!-- Fixed navbar background-color: #BDBDBD  -->
    <nav class="navbar navbar-default navbar-fixed-top"  style="background-color: /*#50a3a2*/ #403f93;border:none;">
      <div class="container" style="margin: 0px;padding: 0px;width: 100%">
        <div class="navbar-header">
         
        </div>
         <ul class="nav navbar-nav pull-left" style="background-color: white;padding-bottom: 8px">

              <img src="img/logo.png" class="img-responsive">
         
                      
          </ul>
        
        <ul class="nav navbar-nav pull-right">
              <li><a href="" id="open-popover-link"  data-toggle="popover" class="tool" ><i class="fa fa-user fa-2x" style="color:white;"></i></a></li>
            <li><a href="javascript:void(0)" class="mb-control" data-box="#mb-signout"><i class="fa fa-sign-out fa-2x" style="color:white;"></i></a></li>
                      
          </ul>
         </div>

    </nav>
          <!-- sticky end -->
        
 <div class="container dynamicTile" style="margin-top: 10%;">
  <div class="row ">
    <div class="col-sm-2 col-xs-4">
      <div id="tile12" class="tile">        
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          
       <div class="carousel-inner">
            
            <div class="item active" onclick="">
              <a href="accounts.php" target="_blank" "Accounts" style="display: block;height: 100%">
              <label class="badge badge-info" >12 - ACCOUNTS</label> 
              <h3 class="tilecaption" style="position: sticky !important; margin-top: 1px !important"><span class="tilecaption"><i class="fa fa-inr fa-3x"></i></span></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">ACCOUNTS</span>
            </a>
            </div>
         
           <!-- <a href="audit.php" target="_blank" "Accounts"> -->
            <div class="item">
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >15 - ACCOUNTS</label> 
               <h3 class="tilecaption" style="position: sticky !important; margin-top: 1px !important"><i class="fa fa-bullseye fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">AUDIT</span>
            </a>

            </div>       
          
      
            <div class="item">
              <a href="approval_desk/home.php" target="_blank" "Approval" style="display: block;height: 100%">
              <label class="badge badge-info" >3 - ACCOUNTS</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-check fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">APPROVAL</span>
            </a>
            </div>
          
      
       
            <div class="item">
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >15 - ACCOUNTS</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-line-chart fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">REPORTS</span>
            </a>
            </div>
            <div class="item">
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >1 - ACCOUNTS</label> 
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
              <a href="accounts.php" target="_blank" "Audit" style="height: 185px">
             <label class="badge badge-info" >5 - PAYROLL</label> 
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
                <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 185px">
                <label class="badge badge-info" >30 - PURCHASE</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-shopping-bag fa-3x" ></i></h3><br>
              <span style="padding-top: 12px;display:table;margin:0px auto;font-weight: bold;color: white">PURCHASE</span>
            </a>
            </div>
             <div class="item">
               <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 185px;background-color: #455A64">
                <label class="badge badge-info" >21 - PURCHASE</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="  fa fa-files-o fa-3x" ></i></h3><br>
              <span style="padding-top: 15px;display:table;margin:0px auto;font-weight: bold;color: white">INVOICE</span>
            </a>
            </div>
             <div class="item">
               <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 185px;background-color: #651FFF">
                <label class="badge badge-info" >9 - PURCHASE</label> 
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
               <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 185px">
              <label class="badge badge-info" >20 - HR</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class=" fa fa-user fa-4x"></i></h3><br>
              <span style="margin-top: 5px; display:table;margin:0px auto;font-weight: bold;color: white">HR</span>
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
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >156 - SALES</label> 
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
            <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >2 - OPEARTION</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-tachometer fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">OPEARTION</span>
            </a>
            </div>
            <div class="item">
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >19 - OPEARTION</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-tachometer fa-3x"></i></h3><br>
              <span style="padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">OPEARTION</span>
            </a>
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
            
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >3 - BRANCH</label> 
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
               <a href="approval_desk/home.php" target="_blank" "Approval" style="display: block;height: 100%">
              <label class="badge badge-info" >3 - APPROVAL</label> 
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
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >7 - CRM</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-phone-square fa-3x"></i></h3><br>
              <span style=" padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">CRM</span>
            </a>
            </div>
            <div class="item">
              
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >8 - CRM</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-phone-square fa-3x"></i></h3><br>
              <span style=" padding-top: 10px; display:table;margin:0px auto;font-weight: bold;color: white">SMS</span>
            </a>
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
               <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >4 - SCM</label> 
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
               <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >22 - ADMIN</label> 
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
               <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >5 - UTILITY</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-wrench fa-3x"></i></h3><br>
              <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">UTILITY</span>
            </a>
            </div>
            <div class="item">
                <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
                <label class="badge badge-info" >6 - UTILITY</label> 
                 <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-wrench fa-3x"></i></h3><br>
                <span style="padding-top: 5%; display:table;margin:0px auto;font-weight: bold;color: white">UTILITY</span>
              </a>
            </div>
          </div>
        </div>
         
      </div>
  </div>
    
 
</div>
<!-- 3rd Row -->








</div>


<div id="push"></div>
<div class="sticky-container">
    <ul class="sticky">
      
      

      
      <li>
      <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-inr fa-stack-1x" style="color:black"></i></span>&nbsp Accounts  
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-money fa-stack-1x" style="color:black"></i></span>&nbsp Payroll
        <!-- <img width="32" height="32" title="" alt="" src="img/tw1.png" /> -->
      
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-shopping-cart fa-stack-1x" style="color:black"></i></span>&nbsp  Purchase 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-user-circle fa-stack-1x" style="color:black"></i></span> &nbsp HR 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-shopping-bag fa-stack-1x" style=" color:black"></i></span>&nbsp Sales 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-tachometer fa-stack-1x" style="color:black"></i></span>&nbsp Operation  
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-university fa-stack-1x" style="color:black"></i></span>&nbsp Branch 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-phone-square fa-stack-1x" style="color:black"></i></span>&nbsp Crm  
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-graduation-cap fa-stack-1x" style="color:black"></i></span>&nbsp SCM  
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-black-tie fa-stack-1x" style="color:black"></i></span>&nbsp Admin 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa" >  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-wrench fa-stack-1x" style="color:black"></i></span>&nbsp Utility 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-check fa-stack-1x" style="color:black"></i></span>&nbsp Approval  
      </li>
      
    </ul>
  </div>
        
      
    <script type='text/javascript' src="js/jquery-3.3.1.min.js"></script>
    <script type='text/javascript' src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
        
    <!-- JavaScript jQuery code from Bootply.com editor  -->

    <script type='text/javascript'>
       $(document).ready(function(){
        // $('a[data-toggle=tooltip]').tooltip();
        // $('a[data-toggle=tooltip]').tooltip({ boundary: 'window' });
         // $('a[data-toggle=tooltip]').tooltip({title: "ltest yte astytye aytyatyge yatystyaetaytsy", html: true, placement: "left"}); 
    });

       $('#open-popover-link').popover({
        placement : 'bottom',
    trigger : 'hover',
        html : true,
        //content : '<div class="my-popover">'+
         //         '<a href="#" class="pull-left"><img src="avatar.jpg" class="media-object img-rounded" alt="Sample Image" width="150" height="100" style="text-align:center"></a>'+
         //         '<div class="media-body"><h4 class="media-heading">Jhon Carter</h4><p>Excellent Bootstrap popover! I really love it.</p></div>'+
          //        '</div>'
          content: '<div class="my-popover">'+
                    '<table style="width:100%"><tr><td style="margin:0;padding:0;width:70px !important"><a href="#"><img src="img/avatar.jpg" class="media-object img-rounded" alt="Sample Image" width="70" height="70" style="text-align:center"></a>'+'</td>'+'<td style="width:auto !important;vertical-align:middle !important"><div style="padding-left:5px;text-transform:uppercase;font-size:12px;text-align:left !important"><span><b>14442 - ARUN RAMA BALAN G</b></span><br><span>Info Tech</span><br><span>TECH LEAD</span></div></td></table>'

    });
      

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