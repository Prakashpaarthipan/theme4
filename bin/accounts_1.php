<!DOCTYPE html>
<html lang="en">
<head>
 <!-- script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script> -->
  <meta charset='UTF-8'><meta name="robots" content="noindex">
  <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <link rel="canonical" href="https://codepen.io/mavrK/pen/mPPWGN?limit=all&page=20&q=social" />
  <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel='stylesheet' href='css/reset.min.css'>
  <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
  <link href="css/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
  
<style class="cp-pen-styles">
@import url("https://fonts.googleapis.com/css?family=Raleway:300,400,600");
* {
  -webkit-transition: 0.33s ease;
  transition: 0.60s ease;
}
body {
  background-color: #9ab;
}
.side-bar {
  z-index: 99999;
  position: fixed;
  width: 70px;
  top: 0;
  bottom: 0;
  left: 0;
  background-color: #fff;
  box-shadow: 4px 0px 25px -1px rgba(0,0,0,0.5);
  font-family: "Raleway";
  font-weight: 600;
  font-size: 18px;
  line-height: 24px;
  letter-spacing: 2px;
  text-transform: uppercase;
  -webkit-transition: 0.33s ease;
  transition: 0.60s ease;
  padding: 0;

}
.side-bar:hover {
  width: 250px;
}
.side-bar:hover .side-button::before {
  left: 6%;
  -webkit-transition: 0.33s ease, left 0.25s 0.15s ease;
  transition: 0.33s ease, left 0.25s 0.15s ease;
}
.side-bar:hover .hover-svg {
  height: 80px;
  width: 100px;
}
.side-container {
  position: absolute;
  width: 100%;
  
}

.side-container.top1 {
  height: 15%;
  top: 1.5%;
}
.side-container.middle1 {
  /*margin-top: 10px;*/
  padding-top: 10px;
  height: 70%;
  top: 400px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.hover-svg {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  height: 80px;
  width: 80px;
  fill: none;
  stroke: rgba(0,0,0,0.5);
  stroke-width: 2;
  cursor: pointer;
  -webkit-transition: 0s ease, height 0.33s ease, width 0.33s ease;
  transition: 0s ease, height 0.33s ease, width 0.33s ease;
}
.hover-svg:hover {
  stroke: #000;

}

.side-button.purchase::before {
  content: "Purchase";
}
.side-button.purchase:after {
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Facebook-128.png") no-repeat center;*/

    /*position:relative;*/
    content: "\f156";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
        margin-right: -7px;
}
.side-button.payment::before {
  content: "Payment";
}
.side-button.payment:after {
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Twitter-07-128.png") no-repeat center;*/
  content: "\f0d6"; /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242;
        margin-right: -7px;

}
.side-button.sales::before {
  content: "Sales";
}
.side-button.sales:after {
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Instagram-128.png") no-repeat center;*/

  content: "\f07a";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
        margin-right: -7px;
}
.side-button.assetexpense::before {
  content: "Asset Expense";
}
.side-button.assetexpense:after {
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_SoundCloud-128.png") no-repeat center;*/
  content: "\f09d";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
        margin-right: -7px;
}
.side-button.auditing::before {
  content: "Auditing";
}
.side-button.auditing:after {
  content: "\f192";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
        margin-right: -7px;
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_LinkedIn-128.png") no-repeat center;*/
}
.side-button.approval::before {
  content: "Approval";
}
.side-button.approval:after {
  content: "\f00c";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
        margin-right: -7px;
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Pinterest-23-128.png") no-repeat center;*/
}
.side-button.reports::before {
  content: "Reports";
}
.side-button.reports:after {
  content: "\f1b3";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
        margin-right: -7px;
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Pinterest-23-128.png") no-repeat center;*/
}
.side-button.utility::before {
  content: "Utility";
}
.side-button.utility:after {
  content: "\f19c";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
        margin-right: -7px;
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Pinterest-23-128.png") no-repeat center;*/
}
.plus-button {
  position: absolute;
  bottom: 30px;
  right: 30px;
  z-index: 100;
  height: 75px;
  width: 75px;
  border-radius: 100%;
  background-color: #e91e63;
  box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.58);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: scale(0.92);
          transform: scale(0.92);
}
.plus-button::before {
  content: "+";
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  color: #fff;
  font-size: 28px;
  font-weight: 600;
}
.plus-button:hover {
  -webkit-transform: scale(1);
          transform: scale(1);
  box-shadow: 3px 3px 12px 2px rgba(0,0,0,0.5);
}
.plus-button:active {
  -webkit-transform: scale(0.96);
          transform: scale(0.96);
  box-shadow: 2px 3px 11px 1px rgba(0,0,0,0.53);
}
.plus-button.open {
  -webkit-transform: rotate(45deg) scale(0.92);
          transform: rotate(45deg) scale(0.92);
  background-color: #333;
  box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.58);
}
.plus-button.open:hover {
  -webkit-transform: scale(1) rotate(45deg);
          transform: scale(1) rotate(45deg);
  box-shadow: 3px 3px 12px 2px rgba(0,0,0,0.5);
}
.plus-button.open:active {
  -webkit-transform: scale(0.96) rotate(45deg);
          transform: scale(0.96) rotate(45deg);
  box-shadow: 2px 3px 11px 1px rgba(0,0,0,0.53);
}
.social-button {
  position: absolute;
  bottom: 43px;
  right: 41px;
  height: 50px;
  width: 50px;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
  background-size: 153% !important;
  border-radius: 100%;
  box-shadow: 2px 2px 7px 0px rgba(0,0,0,0.4);
  cursor: pointer;
  z-index: 99;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.social-button:hover {
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: 0.35s cubic-bezier(0.3, 0.2, 0, 2.5);
  transition: 0.35s cubic-bezier(0.3, 0.2, 0, 2.5);
}
.social-button.twitter-button {
  background: url("https://cdn4.iconfinder.com/data/icons/social-icon-4/842/twitter-256.png") no-repeat center;
}
.social-button.twitter-button.active {
  bottom: 110px;
  right: 21px;
}
.social-button.facebook-button {
  background: url("https://cdn4.iconfinder.com/data/icons/social-icon-4/842/facebook-256.png") no-repeat center;
}
.social-button.facebook-button.active {
  bottom: 105px;
  right: 73px;
}
.social-button.pinterest-button {
  background: url("https://cdn4.iconfinder.com/data/icons/social-icon-4/842/pinterest-256.png") no-repeat center;
}
.social-button.pinterest-button.active {
  bottom: 67px;
  right: 109px;
}
.social-button.insta-button {
  background: url("https://cdn4.iconfinder.com/data/icons/social-icon-4/842/instagram-256.png") no-repeat center;
}
.social-button.insta-button.active {
  bottom: 15px;
  right: 105px;
}

.img-responsive {
    width: 100%;
    display: block;
    height: auto;
    max-width: 80px;
    text-align: center;
    padding: 5px;
}


#nav_side_bar::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
}

#nav_side_bar::-webkit-scrollbar
{
  width: 5px;
  background-color: #F5F5F5;
}

#nav_side_bar::-webkit-scrollbar-thumb
{
  background-color: #000000;
  border: 1px solid #555555;
}
#nav_side_bar:hover {
  overflow-y: scroll !important;

}

.side-container .top {
	position: fixed;
  height: 30px;
  top: 2%;
  overflow: hidden;
  
}
.side-container.middle {
	position: absolute;
  height: 100%;
  padding-top: 5px;
  margin-top: 60px;

}
.rela-block {
  display: block;
  position: relative;
  overflow: hidden;

}
.side-button {

  height: 60px;
  margin: 5px 0;
  background-color: #e4e9e9;
  cursor: pointer;
}
.side-button:hover {
  background-color: #c4c9c9;
}
.side-button::before {
  position: absolute;
  top: 50%;
  left: -250px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: 0.33s ease;
  transition: 0.33s ease;
}
.side-button::after {
  content: "";
  position: absolute;
  height: 40px;
  width: 40px;
  top: 50%;
  right: 20px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  background-size: cover !important;
  -webkit-transition: 0.33s ease;
  transition: 0.33s ease;
}
.side-bar:hover .side-container.middle:hover {
  


}
 .side-button-mini.invoice::before {
  content: "Invoice";
}
.side-button-mini.invoice:after {
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Facebook-128.png") no-repeat center;*/

    /*position:relative;*/
    content: "\f15b";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:1em;
    text-align: center;    
    position:relative;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
}
 .side-button-mini.returnentry::before {
  content: "Returnentry";
}
.side-button-mini.returnentry:after {
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Facebook-128.png") no-repeat center;*/

    /*position:relative;*/
    content: "\f1b3";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:1em;
    text-align: center;    
    position:relative;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#424242; 
}
 .sub-men{  position: relative;  overflow: hidden;  left: 30px;  width: 100% !important;}
 .sub-men2{    position: relative;  overflow: hidden;  left: 50px;  width: 100% !important;}
 .side-button-mini2 {  height: 70px;  margin: 6px 0;  background-color: #B3E5FC;  cursor: pointer;}
 .side-button-mini {  height: 90px;  margin: 6px 0;  background-color: #ECEFF1;  cursor: pointer;}
/*.side-button-mini:hover {
  background-color: #B0BEC5;
}*/
.side-hover-eff:hover{	background-color: #c4c9c9;	cursor: pointer;}
.side-hover-eff2:hover{	background-color: #B3E5FC;	cursor: pointer;}
 .side-button-mini::before {  position: absolute;  top: 50%;  left: -400px;  -webkit-transform: translateY(-50%); transform: translateY(-50%); -webkit-transition: 0.33s ease;
  transition: 0.33s ease;}
.side-button-mini::after {  content: "";  position: absolute;  height: 40px;  width: 40px;  top: 50%;  right: 20px;  -webkit-transform: translateY(-50%); transform: translateY(-50%);  background-size: cover !important;  -webkit-transition: 0.33s ease;  transition: 0.33s ease;}
.side-button-mini2::before {  position: absolute;  top: 50%;  left: -400px;  -webkit-transform: translateY(-50%); transform: translateY(-50%); -webkit-transition: 0.33s ease;
  transition: 0.33s ease;}
.side-button-mini2::after {  content: "";  position: absolute;  height: 40px;  width: 40px;  top: 50%;  right: 20px;  -webkit-transform: translateY(-50%); transform: translateY(-50%);  background-size: cover !important;  -webkit-transition: 0.33s ease;  transition: 0.33s ease;}
	.sticky-container{
		/*background-color: #333;*/
		padding: 0px;
		margin: 0px;
		position: fixed;
		right: -155px;
		top:200px;
		width: 200px;
		z-index: 9999 !important;


	}

	.sticky li{

		list-style-type: none;
		background-color:#1A237E;
		color: #efefef;
		height: 43px;
		padding: 0px;
		margin: 0px 0px 1px 0px;
		-webkit-transition:all 0.25s ease-in-out;
		-moz-transition:all 0.25s ease-in-out;
		-o-transition:all 0.25s ease-in-out;
		transition:all 0.25s ease-in-out;
		cursor: pointer;
		/*filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); */
                filter: #FFC107; 
                /*-webkit-filter: grayscale(100%); */

	}

	.sticky li:hover{
		margin-left: -130px;
		/*-webkit-transform: translateX(-115px);
		-moz-transform: translateX(-115px);
		-o-transform: translateX(-115px);
		-ms-transform: translateX(-115px);
		transform:translateX(-115px);*/
		/*background-color: #8e44ad;*/
		/*filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");*/
                -webkit-filter: grayscale(0%);
	}

	.sticky li img{
		float: left;
		margin: 5px 5px;
		margin-right: 10px;

	}

	.sticky li {

		padding: 0px;
		margin: 0px;
		text-transform: uppercase;
		line-height: 43px;
		 font-family: "Raleway";
		 font-weight: bold;
		  /*font-weight: 80;*/
  /*font-size: 18px;*/
  /*line-height: 24px;*/
  letter-spacing: 1px;

	}
	.icon-background1{
					/*color: #78909C;*/
					/*color: #212121;*/
					/*color: #FFC107*/
					color: #fcdd10;
					/*font-family: "Raleway";*/
					
				}
				a{
					color:inherit;

				}
        

</style>
</head>
<body>


<div class="side-bar ">
    <div class="side-container top">
            <img src="logo.png" class="img-responsive" >
    </div>
    <div class="side-container middle "  id="nav_side_bar" style="padding: 0px;" >
	<ul class="">
		<li>
		<a class="rela-block side-button purchase" href="#subpurchase" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none !important;"></a>
		<ul class="collapse list-unstyled " id="subpurchase" >
			<li class="side-hover-eff" >  
				<a class="sub-men  " href="#subinvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="invoice" style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #2979FF;padding-right: 5px" class="fa fa-file-text"></i>Invoice Receiving</a> 
				<span class="side-button-mini" style="margin-left: 50px;"></span>
				
			</li>
			<ul class="list-unstyled collapse " id="subinvoice"  >
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  "  style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link1</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  "  style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link2</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  " hr style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link3</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  "  style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link4</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  " style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link5</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 </ul> 
		
		 <li class="side-hover-eff" > <a class="sub-men "  href="#subentry" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="returnentry" style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #2979FF;padding-right: 5px" class="fa fa-exchange"></i>Return Entry</a>
		 <span  class="side-button-mini" style="margin-left: 50px;"></span>  </li>
		 <ul class="list-unstyled collapse " id="subentry"  >
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  "  style="font-size: 14px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link1</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  "  style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link2</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  " hr style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link3</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  "  style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link4</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 	<li class="side-hover-eff2" >
				 		<a class="sub-men2  " style="font-size: 14px;text-decoration: none !important;color: #424242"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link5</a> 
				<span class="side-button-mini2" style="margin-left: 50px;"></span>
				 	</li>
				 </ul> 
		</ul>
		</li>
		<a class="rela-block side-button payment" href="#subpu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none"></a>
		<!-- <li class="rela-block side-button payment"></li> -->
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
    <nav class="navbar navbar-default navbar-fixed-top"  style="background-color: #403f93">
      <div class="container">
       <!--  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div> -->
        <!-- <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div> -->
        <!--/.nav-collapse -->
        
      </div>
      <style type="text/css">
        .nav > li > a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
        .nav > li > a:hover {
    background-color: #263238;

}
      </style>
        <ul class="nav  navbar-right pull-right ">
            <li><a href=""><i class="fa fa-sign-out fa-2x" style="color:white;padding-right: 10px"></i></a></li>
                      
          </ul>
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