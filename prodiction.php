<?php
include_once 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Api-docs.com</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/prettify.js"></script>
<script type="text/javascript" src="js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/collapsible.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>




</head>


<script type="text/javascript">


$(document).ready(function(){
	$(".scrolle").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 1000,'swing');
     });



	var width = $('.container').width();
				$('.footer').css( "width", width);   
				$('.footerhider').css( "width", width); 

	if ($(window).height() > $('.page-container').height() )
	{
		$('.page-container').css( "height", $(window).height()-$('.navbar').height()); 
	}

	$('.panel-collapse').on('shown.bs.collapse', function () {
	  //$(document).css( "hei ght", $(document).height()); 
	  //alert($('#question1').height())
	  $('.page-container').css( "height", $(document).height()-$('.navbar').height()); 
	})
	$('.panel-collapse').on('hide.bs.collapse', function () {
	  //$(document).css( "height", $(document).height()); 
	  if ($(window).height() > $(document).height()-$(this).parent().height())
	  {
	  	//
	  	$('.page-container').css( "height", $(window).height()-$('.navbar').height()); 
	  }
	  else 
	  {
	  	$('.page-container').css( "height", $(document).height()-$(this).parent().parent().height()); 
	  }
	})
	//$('.container').css( "height", 100); 

	$('.navigation a').click(function(event) {
		event.preventDefault();
		//window.location = this.href;
		if (this.href.substring(this.href.length-1,this.href.length) == "#")
		{
			//$(this).parent()
			//$('#list-team-single-container').children(':visible');
			var child = $(this).parents("ul.navigation").children('ul#' + $(this).parent()[0].id);
			//$('span:last').addClass("up");//
			$(this).find("span:last").toggleClass('down').toggleClass('up');
			
			//alert($(this).children().length)
			//$("span:last-child").addClass("up");
			if (child.is(':visible'))
			{
				child.hide("slow");
				var hallo = $(this).parent()[0].id;
				$.ajax({url:"session2.php", 
						  data: {name: hallo},
						  type:'post',
						  cache: false,
						  success: function(data){  
						  }
					 });
			}
			else 
			{
				child.show("slow");
				var hallo = $(this).parent()[0].id;
				$.ajax({url:"session1.php", 
						  data: {name: hallo},
						  type:'post',
						  cache: false,
						  success: function(data){  
						  }
					 });
			}
		}
		else 
		{
			window.location = this.href;
		}
      //alert( "Handler for .click() called." );
      //$(this).parent().addClass("active");
	 // alert($(this).hasClass( "name" ).toString());
	 //if (this.href == "#")
	 //{
		//var child = $(this).parents("ul.navigation").children('ul #' + $(this).parents()[0].id);
		//child.show("slow");
	//	alert("r");
	 //}
	   
		 // if(this.href.trim() != window.location)
		  //{
			//window.location = this.href;
			//alert("tt");
		 // }
		  //else 
		  //{

		  //}
    });



	var coun = 0;
    $('.navigation a').each(function(index) {
		
        if(this.href == window.location.href.substring(0,this.href.length))
        {
			coun = coun + 1;
		 if (!$(this).hasClass('menu'))
		{
		
          //this.href = "#";
          $(this).parent().addClass("active");
		  //$(this).parent().show("slow");
		 // $(this).parents().show("slow");
		  //var child = $(this).parents("ul.navigation").children('ul#' + $(this).parent()[0].id);
		  //var child = $(this).parents("ul.navigation").children('ul#' + $(this).parents()[0].id);
			//alert($(this).parents('ul.navigation').children('li#'+ $(this).parent().parent()[0].id).length);
			
			
		//$(this).parents('ul.navigation').children('li#'+ $(this).parent().parent()[0].id).find("span:last").toggleClass('down').toggleClass('up');
		
		if ($(this).parent().parent().parent().prop('tagName') == "UL")
		{
			
			$('li#'+ $(this).parent().parent()[0].id).find("span:last").toggleClass('down').toggleClass('up');
			
			$.ajax({url:"session1.php", 
							  data: {name: $(this).parent().parent()[0].id},
							  type:'post',
							  cache: false,
							  success: function(data){  
							  }
						 });
				
			//alert($(this).parent().parent()[0].id);
			  var child = $(this).parent().parent().show();
		}
			//$(this).parent()//.show("slow");
		  //alert($(this).parents("ul.navigation").children('ul').length);
		  //alert($(this).parent()[0].id)
		  
		 // child.show("slow");
		  //var child = $(this).parent();
		  //alert($(this).parents("ul.navigation").children('li#' + $(this).parent()[0].id));//.toggleClass('down').toggleClass('up');
		 
		 
		  //child.show("slow");
		  
		  
		  //var str = $(this).parent().text();
		  //$('#span.sb-caret').css('border-bottom', 'solid 1px red');
		  
		  //$(this).append(" ^");
		
          //alert($(this).parents()[0].id);
		  
          //$(this).parents("ul.navigation").children("ul").each(function(key, value) {
            //$(this).parents().children("ul")[key].show("slow");
           // alert(value);

          //});

          //$(this).parents('ul')
          //alert($(this).parent());
          //alert(index);
           } 
        }
    });
	if (coun == 0 )
	{
		$('ul#introduction').find('li:first').addClass("active");
		$('li#introduction').find("span:last").toggleClass('down').toggleClass('up');
		$('ul#introduction').show();
		$.ajax({url:"session1.php", 
						  data: {name: "introduction"},
						  type:'post',
						  cache: false,
						  success: function(data){  
						  }
					 });
	}
	
	$.each( ["introduction","api"], function( key, value ) {
	  
	  $('ul#' + value).show();
	  
	  if ($('li#' + value).find("span:last").hasClass('up'))
	  {
	   $('li#' + value).find("span:last").toggleClass('down').toggleClass('up');
	  }
	});
});

$(window).resize(function(){
	var width = $('.container').width();
	$('.footer').attr('style','width:' + width + 'px;');
	$('.footerhider').attr('style','width:' + width + 'px;');
});



</script>
	


<body class="boxed sidebar-wide">

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="images/logo.png" alt="Api-Docs.com"></a>
				<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
					<span class="sr-only">Toggle navbar</span>
					<i class="icon-grid3"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">
					<span class="sr-only">Toggle navigation</span>
					<i class="icon-paragraph-justify2"></i>
				</button>
			</div>

			
		</div>
	</div>
	<!-- /navbar -->	
<!-- Page container -->
  <div class="page-container container">


    <!-- Sidebar -->
    <div class="sidebar collapse">
      <div class="sidebar-content">

       <!-- User dropdown -->
        <div class="user-menu dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="user-info">
              <h1><b><?php echo $lang['PAGE_TITLE']; ?></b><h1>
            </div>
          </a>
           
          
          
        </div>
        <!-- /user dropdown -->


         <!-- Main navigation -->
        <ul class="navigation">
          <li id="introduction"><a href="#" class="menu"><span><?php echo $lang['MENU_HOME']; ?></span> <span class="up"></span><i class="icon-screen2"></i></a></li>
          
            <ul id="introduction">
              <li><a href="index.php"><?php echo $lang['MENU_INTRODUCTION']; ?></a></li>
              <li><a href="bugreport.php"><?php echo $lang['MENU_BUG_REPORT']; ?></a></li>
              <li><a href="faq.php"><?php echo $lang['MENU_FAQ']; ?></a></li>
            </ul>

           <li id="download"><a href="#" class="menu"><span><?php echo $lang['MENU_DOWNLOAD_INSTALL']; ?> </span> <span class="up"></span><i class="icon-screen2"></i></a></li>
          
            <ul id="download">
              <li><a href="download.php"><?php echo $lang['MENU_STABLE_VERSION']; ?></a></li>
              <li><a href="downloadnighty.php"><?php echo $lang['MENU_NIGHTY_VERSION']; ?></a></li>
            </ul>

          <li id="api"><a href="#" class="menu"><span><?php echo $lang['MENU_API_REFERENCE']; ?></span><span class="up"></span> <i class="icon-wand2"></i></a></li>
            <ul id="api">
              <li><a href="prodiction.php"><?php echo $lang['PAGE_TITLE']; ?></a></li>
              <li><a href="info.php"><?php echo $lang['MENU_INFO']; ?></a></li>
              <li><a href="spell.php"><?php echo $lang['MENU_SPELL']; ?></a></li>
            </ul>

          <li id="tutorial"><a href="#" class="menu"><span><?php echo $lang['MENU_TUTORIAL']; ?></span><span class="up"></span> <i class="icon-wand2"></i></a></li>
            <ul id="tutorial">
              <li><a href="page5.php"><?php echo $lang['MENU_GETTING_STARTED']; ?></a></li>

              <li><a href="videos.php"><?php echo $lang['MENU_VIDEOS']; ?></a></li>
            </ul>
        </ul>
        <!-- /main navigation -->
        
      </div>
    </div>
    <!-- /sidebar -->

		<!-- Page content -->
	 	<div class="page-content">


	 		<!-- Breadcrumbs line -->
			<div class="breadcrumb-line breadcrumb-top">
				<ul class="breadcrumb">
					<li><a href="index.php"><?php echo $lang['MENU_API_REFERENCE']; ?></a></li>
					<li class="active"><?php echo $lang['PAGE_TITLE']; ?></li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
          <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target="#on-top"><i class="icon-menu2"></i></a>
        </div>
        
        <ul class="breadcrumb-buttons collapse" id="on-top">
          <li class="language dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/english.png" alt=""> <span>English</span> <b class="caret"></b></a>
            <ul class="dropdown-menu dropdown-menu-right icons-right">
              
              <li class="active"><a href="#"><img src="images/flags/english.png" alt=""> English</a></li>
              <li class="disabled"><a href="#"><img src="images/flags/german.png" alt=""> German</a></li>
              <li class="disabled"><a href="#"><img src="images/flags/dutch.png" alt=""> Dutch</a></li>
              <li class="disabled"><a href="#"><img src="images/flags/china.png" alt=""> Chinese</a></li>
            </ul>
          </li>

        </ul>			</div>
			<!-- /breadcrumbs line -->

			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3><i class="icon-bubbles"></i><?php echo $lang['PAGE_TITLE']; ?> </h3>
				</div>

				
			</div>
			<!-- /page header -->



	       
			This static class contains methods to give prediction of a unit based on spell information. This is main class for version 0.9(nighty) or higher. You get fully control over prediction library.
			<br><br>
			<!-- Bordered table -->
			            <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Class Prodiction</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th >Methods</th>
				                            <th style="width:200px;" class="text-center">Return type</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetPrediction">GetPrediction(unit, range, speed, delay, width, source)</a></td>
				                            <td class="text-center">Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetTimePrediction">GetPredictionTime(unit, time)</a></td>
				                            <td class="text-center">Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetLineAOEPrediction">GetLineAOEPrediction(unit, range, speed, delay, width, source, targetType)</a><span style='float:right;' class="label label-info">New 1.1</span></td>
				                            <td class="text-center">Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetMinCountLineAOEPrediction">GetMinCountLineAOEPrediction(count, range, speed, delay, width, source, targetType)</a><span style='float:right;' class="label label-danger">Donators 1.1</span></td>
				                            <td class="text-center">Boolean, Vector, Objects, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetCircularAOEPrediction">GetCircularAOEPrediction(unit, range, speed, delay, width, source, targetType)</a><span style='float:right;' class="label label-info">New 1.1</span></td>
				                            <td class="text-center">Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetMinCountCircularAOEPrediction">GetMinCountCircularAOEPrediction(count, range, speed, delay, width, source, targetType)</a><span style='float:right;' class="label label-danger">Donators 1.1</span></td>
				                            <td class="text-center">Boolean, Vector, Objects, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                         <tr>
				                            <td ><a class="scrolle" href="#GetConeAOEPrediction">GetConeAOEPrediction(unit, range, speed, delay, width, source, targetType)</a><span style='float:right;' class="label label-info">New 1.1</span></td>
				                            <td class="text-center">Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetMinCountConeAOEPrediction">GetMinCountConeAOEPrediction(count, range, speed, delay, angle, source, targetType)</a><span style='float:right;' class="label label-danger">Donators 1.1</span></td>
				                            <td class="text-center">Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                         <tr>
				                            <td ><a class="redd scrolle" href="">GetPredictedHealth(unit, range, speed, delay, width, source)</a><span style='float:right;' class="label label-info">New 1.1</span></td>
				                            <td class="text-center">Integer</td>
				                        </tr>
				                        <tr>
				                            <td ><a class="redd scrolle" href="">GetPredictedHealthTime(unit, time)</a><span style='float:right;' class="label label-info">New 1.1</span></td>
				                            <td class="text-center">Integer</td>
				                        </tr>

				                        
				                       	<tr>
				                            <td ><a class="scrolle" href="#IsDashing">IsDashing(unit, range, speed, delay, width, source)</a></td>
				                            <td class="text-center">Boolean, Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#IsImmobile">IsImmobile(unit, range, speed, delay, width, source)</a></td>
				                            <td class="text-center">Boolean, Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#IsAttacking">IsAttacking(unit, range, speed, delay, width, source)</a><span style='float:right;' class="label label-danger">Donators 1.1</span></td>
				                            <td class="text-center">Boolean, Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#IsToSlow">IsToSlow(unit, range, speed, delay, width, source)</a></td>
				                            <td class="text-center">Boolean, Vector, <a href="info.php"><?php echo $lang['MENU_INFO']; ?> </a></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#callbackDash">AddCallbackDash(range, speed, delay, width, source, callback)</a></td>
				                            <td class="text-center"></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#callbackImmobile">AddCallbackImmobile(range, speed, delay, width, source, callback)</a></td>
				                            <td class="text-center"></td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#IsDonator">IsDonator()</a></td>
				                            <td class="text-center">Bool</td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#IsBanned">IsBanned()</a></td>
				                            <td class="text-center">Bool</td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetUserStatus">GetUserStatus()</a></td>
				                            <td class="text-center">Integer</td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetVersion">GetVersion()</a></td>
				                            <td class="text-center">String</td>
				                        </tr>
				                        <tr>
				                            <td ><a class="scrolle" href="#GetLatestVersion">GetLatestVersion()</a><span style='float:right;' class="label label-info">New 1.1</span></td>
				                            <td class="text-center">String</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <!-- /bordered table -->

				        <div class="page-header">
				<div class="page-title">
					<h3><i class="icon-bubbles"></i>Detailed Documentation </h3>
				</div>

				
			</div>
			<hr id='GetPrediction'>
			<h6>GetPrediction(unit, range, speed, delay, width, source)</h6>
			
			Get Predicted location based on spell information.
			<br><br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>

				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.GetPrediction(unit, range, speed, delay, width, source)
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end   

  local pos, info = Prodiction.GetPrediction(ts.target, 1100, 2000, 0.25, 80)
  if pos then 
    CastSpell(_Q, pos.x, pos.z)
  end
end
</pre>         
	                        </div><hr id='GetTimePrediction'>
	                        <h6>GetTimePrediction(unit, time)</h6>
	                        Return pos of the 'unit' after certain 'time'.
			<br><br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >time</td>
				                            <td >Integer</td>
				                            <td >The time between unit and predicted position. time in seconds.</td>
				                        </tr>
				                         
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.GetTimePrediction(unit, time)
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end
  local pos, info = Prodiction.GetPrediction(ts.target, 0.2)
  if pos then
    CastSpell(_Q, pos.x, pos.z)
  end
end
</pre>         
	                        </div><hr id ='GetLineAOEPrediction'>
	                        <h6>GetLineAOEPrediction(unit, range, speed, delay, width, source, targetType)</h6>
	                        Will hit as much targets as possible with focus on the 'unit'.
			<br><br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want to focus and hit as many people.</td>
				                        </tr>
				                        <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                         
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.GetLineAOEPrediction(unit, range, speed, delay, width, source)
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end   

  local pos, info = Prodiction.GetLineAOEPrediction(ts.target, 1100, 2000, 0.25, 80)
  if pos and info.hitchance ~= 0 then 
    CastSpell(_Q, pos.x, pos.z)
  end
end
</pre>         				
							</div><hr id ='GetMinCountLineAOEPrediction'>
	                        <h6>GetMinCountLineAOEPrediction(count, range, speed, delay, width, source, targetType)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script GetMinCountLineAOEPrediction(count, range, speed, delay, width, source, targetType)

require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end   
 
  local count, pos, info = Prodiction.GetMinCountLineAOEPrediction(2, 1100, 2000, 0.25, 80)
  if count and pos then 
    CastSpell(_Q, pos.x, pos.z)
  end
</pre>         				
							</div><hr id ='GetCircularAOEPrediction'>
	                        <h6>GetCircularAOEPrediction(unit, range, speed, delay, width, source, targetType)</h6>
				                        Will hit as much targets as possible with focus on the 'unit'.
			<br><br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want to focus and hit as many people.</td>
				                        </tr>
				                        <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                         
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script GetCircularAOEPrediction(unit, range, speed, delay, width, source, targetType)

require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end   
 
  local pos, info = Prodiction.GetCircularAOEPrediction(ts.target, 1100, 2000, 0.25, 80)
  if pos then 
    CastSpell(_Q, pos.x, pos.z)
  end
</pre>    
							</div><hr id ='GetMinCountCircularAOEPrediction'>
	                        <h6>GetMinCountCircularAOEPrediction(count, range, speed, delay, width, source, targetType)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script GetMinCountCircularAOEPrediction(count, range, speed, delay, width, source, targetType)

require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end   
 
  local count, pos, info = Prodiction.GetMinCountCircularAOEPrediction(2, 1100, 2000, 0.25, 80)
  if count and pos then 
    CastSpell(_Q, pos.x, pos.z)
  end
</pre>         				
							</div><hr id ='GetConeAOEPrediction'>
	                        <h6>GetConeAOEPrediction(unit, range, speed, delay, width, source, targetType)</h6>
				                        Will hit as much targets as possible with focus on the 'unit'.
			<br><br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want to focus and hit as many people.</td>
				                        </tr>
				                        <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                         
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script GetConeAOEPrediction(unit, range, speed, delay, width, source, targetType)

require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end   
 
  local pos, info = Prodiction.GetConeAOEPrediction(ts.target, 1100, 2000, 0.25, 80)
  if pos then 
    CastSpell(_Q, pos.x, pos.z)
  end
</pre>
							</div><hr id ='GetMinCountConeAOEPrediction'>
	                        <h6>GetMinCountConeAOEPrediction(count, range, speed, delay, angle, source, targetType)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script GetMinCountConeAOEPrediction(count, range, speed, delay, angle, source, targetType)

require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end   
 
  local count, pos, info = Prodiction.GetMinCountConeAOEPrediction(2, 1100, 2000, 0.25, 80)
  if count and pos then 
    CastSpell(_Q, pos.x, pos.z)
  end
	                        </div><hr id ='IsDashing'>
	                        <h6>IsDashing(unit, range, speed, delay, width, source)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td >Bool</td>
				                            <td >return true if target is dashing.</td>
				                        </tr>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.IsDashing(unit, range, speed, delay, width, source)
 
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end
    
  local dashing,pos, info = Prodiction.IsDashing(ts.target, 2000, 0.25, 80)
  if dashing and pos then
  	CastSpell(_Q, pos.x, pos.z)
  end
end
</pre>         
	                        </div><hr id='IsImmobile'>

	                         <h6>IsImmobile(unit, range, speed, delay, width, source)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td >Bool</td>
				                            <td >return true if target is Immobile.</td>
				                        </tr>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.IsImmobile(unit, range, speed, delay, width, source)
 
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end
    
  local immobile,pos, info = Prodiction.IsImmobile(ts.target, 2000, 0.25, 80)
  if immobile and pos then
  	CastSpell(_Q, pos.x, pos.z)
  end
end
</pre>         
	                        </div><hr id='IsAttacking'>

	                        <h6>IsAttacking(unit, range, speed, delay, width, source)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td >Bool</td>
				                            <td >return true if target is Attacking.</td>
				                        </tr>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.IsAttacking(unit, range, speed, delay, width, source)
 
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end
    
  local attacking,pos, info = Prodiction.IsAttacking(ts.target, 2000, 0.25, 80)
  if attacking and pos then
  	CastSpell(_Q, pos.x, pos.z)
  end
end
</pre>         
	                        </div><hr id='IsToSlow'>
	                        <h6>IsToSlow(unit, range, speed, delay, width, source)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        <tr>
				                            <td >unit</td>
				                            <td >obj_AI_Hero or obj_AI_Minion</td>
				                            <td >The unit you want predict their movement.</td>
				                        </tr>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td >Bool</td>
				                            <td >return true if target is to slow to dodge your skillshot.</td>
				                        </tr>
				                        <tr>
				                            <td >Vector</td>
				                            <td >return predicted position.</td>
				                        </tr>
				                        <tr>
				                            <td ><?php echo $lang['MENU_INFO']; ?></td>
				                            <td >return a info instance based on the prediction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.IsToSlow(unit, range, speed, delay, width, source)
 
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")
end
 
function OnTick()
  if not ts.target then return end
    
  local toSlow,pos, info = Prodiction.IsToSlow(ts.target, 2000, 0.25, 80)
  if toSlow and pos then
  	CastSpell(_Q, pos.x, pos.z)
  end
end
</pre>         
	                        </div><hr id='callbackDash'>
	                         <h6>AddCallbackDash(range, speed, delay, width, source, callback)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        <tr>
				                            <td >callback</td>
				                            <td >Function</td>
				                            <td >This function get called when a unit dashed. (Only work on Heroes.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.AddCallbackDash(range, speed, delay, width, source, callback)
 
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")

  Prodiction.AddCallbackDash(1200, 2000, 0.25, 80, myHero, OnPredictionDash)
end

function OnPredictionDash(unit, pos, info)
  if unit and pos then
    CastSpell(_Q, pos.x, pos.z)
  end
end 
</pre>         
	                        </div><hr id='callbackImmobile'>
	                        <h6>AddCallbackImmobile(range, speed, delay, width, source, callback)</h6>
			<br>
			<div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Parameters</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:200px;">Name</th>
				                            <th style="width:200px;">Type</th>
				                            <th>Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                         <tr>
				                            <td >range</td>
				                            <td >Integer</td>
				                            <td >The max range between predicted pos and source. range in units. If nil value then range is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >speed</td>
				                            <td >integer</td>
				                            <td >the speed of the spell. speed in unit per second. If nil value the speed is math.huge.</td>
				                        </tr>
				                          <tr>
				                            <td >delay</td>
				                            <td >integer</td>
				                            <td >the delay of the spell. delay in second. If nil value then delay is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >width</td>
				                            <td >integer</td>
				                            <td >The width of the spell. width in units. If nil value then width is 0.</td>
				                        </tr>
				                          <tr>
				                            <td >source</td>
				                            <td >Vector</td>
				                            <td >The start position of the spell. If nil value then source is myHero.</td>
				                        </tr>
				                        <tr>
				                            <td >callback</td>
				                            <td >Function</td>
				                            <td >This function get called when a unit dashed. (Only work on Heroes.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <br>

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.AddCallbackImmobile(range, speed, delay, width, source, callback)
--After Immobile
 
require 'Prodiction'
 
ts = TargetSelector(TARGET_LOW_HP, 2000, DAMAGE_MAGIC, true)
 
function OnLoad()
  print("Loaded Test Script")

  Prodiction.AddCallbackImmobile(1200, 2000, 0.25, 80, myHero, OnPredictionImmobile)
end

function OnPredictionImmobile(unit, pos, info)
  if unit and pos and info.type == P_IMMOBILE_FINISH then
    CastSpell(_Q, pos.x, pos.z)
  end
end 
</pre>         
	                        </div><hr id='IsDonator'><h6>IsDonator()</h6>
			<br>
			
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td >Boolean</td>
				                            <td >return true if user is a donator.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.IsDonator()
 
require 'Prodiction'
 

 
function OnLoad()
  print("Loaded Test Script")
  if Prodiction.IsDonator() then
  	print("Thanks for the donation to Klokje!")
  end
end
</pre>         
	                        </div><hr id='IsBanned'>
	                        <h6>IsBanned()</h6>
			<br>
			
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td >Boolean</td>
				                            <td >return true if user is a banned.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.IsBanned()
 
require 'Prodiction'

function OnLoad()
  print("Loaded Test Script")
  if Prodiction.IsBanned() then
  	print("Fack you :D")
  end
end
</pre>         
	                        </div><hr id='GetUserStatus'>
	                         <h6>GetUserStatus()</h6>
			<br>
			
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td >Integer</td>
				                            <td >_G.P_BANNED = -1,
												_G.P_LOADING = 0,
												_G.P_FREEUSER = 1,
												_G.P_DONATOR = 2</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.IsBanned()
 
require 'Prodiction'
 
function OnLoad()
  print("Loaded Test Script")
  if Prodiction.GetUserStatus() == _G.P_DONATOR then
  	print("Welcome")
  end
end
</pre>         
	                        </div><hr id = 'GetVersion'>

	                        <h6>GetVersion()</h6>
			<br>
			
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td>String</td>
				                            <td>returns current version of prodiction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.GetVersion()
 
require 'Prodiction'
 
function OnLoad()
  print("Loaded Test Script")
  if Prodiction.GetVersion() == "1.1" then
  	print("You can use this api")
  end
end
</pre>         
	                        </div><hr id ='GetLatestVersion'>
 <h6>GetLatestVersion()</h6>
			<br>
			returns the latest version of prodiction. <br><br>
				        <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Return</h6></div>
			                <div class="table-responsive">
				                <table class="table table-bordered ">

				                    <thead>
				                        <tr>
				                            <th style="width:400px;">Type</th>
				                            <th >Description</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<tr>
				                            <td>String</td>
				                            <td>returns the latest version of prodiction.</td>
				                        </tr>
				                    </tbody>
				                </table>
			                </div>
				        </div>
				       

				         <div class="block">
	                            <span class="subtitle">Example:</span>
<pre class="prettyprint linenums">
--Test script Prodiction.GetLatestVersion()
 
require 'Prodiction'
 
function OnLoad()
  print("Loaded Test Script")
  if Prodiction.GetVersion() == Prodiction.GetLatestVersion() then
  	print("You got the latest version of Prodiction")
  end
end
</pre>         
	                        </div><hr>
				        <!-- /bordered table -->
	        <!-- Footer -->

		

	</div>


	       <div class="footer clearfix">
  <div class="pull-left">&copy; 2014. api-docs.com, All Rights Reserved.</div>
  <div class="pull-right">Designed and coded by <a href="http://botoflegends.com/forum/user/3944-klokje/" target="_blank">Klokje</a> and <a href="http://botoflegends.com/forum/user/16981-farissi/" target="_blank">Farissi</a>.</div>
</div>

	        <!-- /footer -->


		
		<!-- /page content -->

	</div>
	<!-- /content -->

</body>
</html>