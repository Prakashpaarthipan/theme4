<!DOCTYPE html>
<html lang="en">
<head>
 <!-- script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script> -->
  <meta charset='UTF-8'><meta name="robots" content="noindex">
  <title>Accounts - The Chennai Silks</title>
  <!-- <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <link rel="canonical" href="https://codepen.io/mavrK/pen/mPPWGN?limit=all&page=20&q=social" /> -->
  <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel='stylesheet' href='css/reset.min.css'>
  <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
  <link href="css/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="css/dashboardnew.css">

 <style type="text/css">
 		b{
 			font-weight: bold !important;
 		}
        .popover{
          top: 50px; left: -112px; display: block; width: 400px; margin-left: -70px;padding:0px;z-index: 999999;
        }
        .arrow{
          left:80% !important;
        }
       .img-responsive {
            width: 100%;
            display: block;
            height: auto;
            max-width: 70px;
            
           
        }
       .popover-content{
          padding: 5px !important;
        }
        @media (min-width: 1200px)
                .container {
                    width: 100%;
                }

        </style>
</head>
<body style="font-family: calibri;">


<div class="side-bar side-bara ">
    <div class="side-container top">
        <img src="img/logo.png" class="img-responsive">
    </div>
    <div class="side-container middle "  id="nav_side_bar" style="padding: 0px;" >

	<ul class="">
		<span class="rela-block side-buttona accounts" style="text-decoration: none; cursor: none; background-color: #fcdd10; color:black;  height: 30px;"></span>
		<li>
			<a class="rela-block side-button purchase" href="#subpurchase" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none !important;"></a>
			<ul class="collapse list-unstyled " id="subpurchase" >
				<li class="side-hover-eff" >  
					<a class="sub-men  " href="#subinvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="invoice" style="font-size: 12px;text-decoration: none !important;color: #424242"><i style="color: #2979FF;padding-right: 5px" class="fa fa-file-text"></i>Invoice Receiving</a><span class="side-button-mini" style="margin-left: 5px;"></span>
				</li>
				<ul class="list-unstyled collapse" id="subinvoice">
					<li class="side-hover-eff2" >
					 	<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link 1</a>
					 	<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
					 	<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link 2</a>
					 	<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
					 	<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link 3</a>
					 	<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
					 	<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link 4</a>
					 	<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
				</ul>
			
			 	<li class="side-hover-eff" > <a class="sub-men "  href="#subentry" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="returnentry" style="font-size: 12px;text-decoration: none !important;color: #424242"><i style="color: #2979FF;padding-right: 5px" class="fa fa-exchange"></i>Return Entry</a><span class="side-button-mini" style="margin-left: 5px;"></span></li>
				<ul class="list-unstyled collapse " id="subentry"  >
					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 1</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 2</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 3</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 4</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 5</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>

					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 6</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 7</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 8</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
					<li class="side-hover-eff2" >
						<a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 9</a> 
						<span class="side-button-mini2" style="margin-left: 10px;"></span>
					</li>
				</ul> 
			</ul>
		</li>
		<a class="rela-block side-button payment" href="#subpu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none"></a>
		<a class="rela-block side-button sales" style="text-decoration: none"></a>
        <a class="rela-block side-button assetexpense" style="text-decoration: none" ></a>
        <a class="rela-block side-button auditing" style="text-decoration: none" ></a>
        <a class="rela-block side-button approval" style="text-decoration: none" ></a>        
        <a class="rela-block side-button reports" style="text-decoration: none" ></a>
        <a class="rela-block side-button utility" style="text-decoration: none"></a>
        <a class="rela-block side-button purchase" style="text-decoration: none"></a>
        <a class="rela-block side-button payment" style="text-decoration: none" ></a>
        <a class="rela-block side-button sales" style="text-decoration: none" ></a>
        <a class="rela-block side-button assetexpense" style="text-decoration: none" ></a>
        <a class="rela-block side-button auditing" style="text-decoration: none" ></a>
        <a class="rela-block side-button utility" style="text-decoration: none" ></a>
        <a class="rela-block side-button purchase" style="text-decoration: none" ></a>
        <a class="rela-block side-button payment" style="text-decoration: none" ></a>
        <a class="rela-block side-button sales" style="text-decoration: none" ></a>
        <a class="rela-block side-button assetexpense" style="text-decoration: none"></a>
        <a class="rela-block side-button auditing" style="text-decoration: none"></a> 
        <a class="rela-block side-button assetexpense" style="text-decoration: none" ></a>
        <a class="rela-block side-button auditing" style="text-decoration: none" ></a>
        <a class="rela-block side-button utility" style="text-decoration: none" ></a>
        <a class="rela-block side-button purchase" style="text-decoration: none" ></a>
        <a class="rela-block side-button payment" style="text-decoration: none" ></a>
        <a class="rela-block side-button sales" style="text-decoration: none" ></a>
        <a class="rela-block side-button assetexpense" style="text-decoration: none"></a>
        <a class="rela-block side-button auditing" style="text-decoration: none"></a> 
	</ul>

<!--         <div class="rela-block side-button purchase"  onclick="openSubmenu()">       

        </div>
        <div id="inv" style="display: none;">
        	<div class="sub-menu side-button-mini invoice" id="invoice"  >
        		test
        	</div>
        	<div class="sub-menu side-button-mini returnentry"  id="returnentry" >
        		test2
        	</div>
    	</div> -->	
        
<!--         <div class="rela-block side-button payment"></div>
        <div class="rela-block side-button sales"></div>
        <div class="rela-block side-button assetexpense"></div>
        <div class="rela-block side-button auditing"></div>
        <div class="rela-block side-button approval"></div>        
        <div class="rela-block side-button reports"></div>
        <div class="rela-block side-button utility"></div>
        <div class="rela-block side-button purchase"></div>
        <div class="rela-block side-button payment"></div>
        <div class="rela-block side-button sales"></div>
        <div class="rela-block side-button assetexpense"></div>
        <div class="rela-block side-button auditing"></div>
        <div class="rela-block side-button utility"></div>
        <div class="rela-block side-button purchase"></div>
        <div class="rela-block side-button payment"></div>
        <div class="rela-block side-button sales"></div>
        <div class="rela-block side-button assetexpense"></div>
        <div class="rela-block side-button auditing"></div> -->
       
        <div class="force-overflow"></div>
    </div>
</div>
    <!-- Fixed navbar background-color: #BDBDBD--> 
    <!-- <nav class="navbar navbar-default navbar-fixed-top"  style="background-color: #403f93">
      <div class="container">
        <div class="navbar-header">
          
        </div>
      
        
      </div>
      <style type="text/css">
      
      </style>
        <ul class="nav  navbar-right pull-right ">
            <li><a href=""><i class="fa fa-sign-out fa-2x" style="color:white;padding-right: 10px"></i></a></li>
                      
          </ul>
    </nav> -->
     <nav class="navbar navbar-default navbar-fixed-top"  style="background-color: /*#50a3a2*/ #403f93;border:none;">
      <div class="container" style="margin: 0px;padding: 0px;width: 100%">
        <div class="navbar-header">
         
        </div>
         <ul class="nav navbar-nav pull-left">
              <img src="logo.png" class="img-responsive">
         
                      
          </ul>
        
        <ul class="nav navbar-nav pull-right">
              <li><a href="" id="open-popover-link"  data-toggle="popover" class="tool" data-original-title=""><i class="fa fa-user fa-2x" style="color:white;padding: 1px"></i></a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-2x" style="color:white;"></i></a></li>
                      
          </ul>
         </div>

    </nav>
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

	<!-- <div class="content" style="width: 97%; padding-right: 80px ;position: relative;left:70px;padding-left: 20px;" id="main_div" > -->
    <div class="content" style="width: 100%;padding-right: 80px;position: relative;padding-left: 90px;padding-top: 70px; background-color: #FFF;" id="main_div" > 
    	<div style="height: 100%; background-color: white;padding-bottom: 10px;text-transform: uppercase;">
    		<span style="color:black;font-weight: bold;font-size: 14px;font-family: calibri"> <a href="home.php"><i class="fa fa-home" style="color:black"></i></a> >> Accounts</span>
    	</div>
		<h1>STICKY SOCIAL BAR</h1>
		<h2>WITH CSS3 TRANSITIONS & TRANSFORMS</h2>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est <laborum class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</laborum></h3>
		<br>
		<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est <laborum class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</laborum></h2>
		<br>
		<h1>STICKY SOCIAL BAR</h1>
		<h2>WITH CSS3 TRANSITIONS & TRANSFORMS</h2>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est <laborum class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</laborum></h3>
		<br>
		<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est <laborum class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</laborum></h2>
		<br>
		<h1>STICKY SOCIAL BAR</h1>
		<h2>WITH CSS3 TRANSITIONS & TRANSFORMS</h2>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est <laborum class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</laborum></h3>
		<br>
		<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est <laborum class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</laborum></h2>
</div>

<!-- <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script> -->
<script type='text/javascript' src="js/jquery-3.3.1.min.js"></script>
<script type='text/javascript' src="js/jquery-ui.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<script type="text/javascript">

	// function openSubmenu()
	// {
	// 	$("#inv").toggle();		

	// }
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
	$("#subpurchase").mouseleave(function(){
		$(this).removeClass("in");
		$(this).addClass("out");

	});
	$("#main_div").mouseenter(function(){
		$("#subpurchase").removeClass("in");
		$("#subpurchase").addClass("out");

	});
  $(document).ready(function(){
    
    // Social plus button function
    $('.plus-button').click(function(){
        $(this).toggleClass('open');
        $('.social-button').toggleClass('active');
    });
    
});
  $(document).ready(function () {
          if (!$.browser.webkit) {
              $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
          }
      });
//# sourceURL=pen.js
</script>
</body></html>