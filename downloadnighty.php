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
	
	$.each( ["api","introduction","download"], function( key, value ) {
	  
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
					<li><a href="index.php"><?php echo $lang['MENU_HOME']; ?></a></li>
					<li class="active"><?php echo $lang['MENU_DOWNLOAD_INSTALL']; ?></li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
          <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target="#on-top"><i class="icon-menu2"></i></a>
        </div>
        
        <ul class="breadcrumb-buttons collapse" id="on-top">
          <li class="language dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/english.png" alt=""> <span>English</span> <b class="caret"></b></a>
            <ul class="dropdown-menu dropdown-menu-right icons-right">
              
              <li class="active"><a href="downloadnighty.php?lang=en"><img src="images/flags/english.png" alt=""> English</a></li>
              <li class="active"><a href="downloadnighty.php?lang=pt"><img src="images/flags/portuguese.png" alt=""> Portuguese</a></li>
			  			  
			  <li class="disabled"><a href="downloadnighty.php?lang=ko"><img src="images/flags/korean.png" alt=""> Korean</a></li>
			  <li class="disabled"><a href="downloadnighty.php?lang=cn"><img src="images/flags/china.png" alt=""> Chinese</a></li>
			  <li class="disabled"><a href="#"><img src="images/flags/german.png" alt=""> German</a></li>
              <li class="disabled"><a href="#"><img src="images/flags/dutch.png" alt=""> Dutch</a></li>
            </ul>
          </li>

        </ul>			</div>
			<!-- /breadcrumbs line -->

			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3><i class="icon-lightning"></i><?php echo $lang['DOWNLOADN_DOWNLOAD']; ?> </h3>
				</div>

				
			</div>
			
			<h6><i class="icon-stats-up"></i><?php echo $lang['DOWNLOADN_UPCOMMING_UPDATES'] ?></h6>
				<div class="panel-group block2">
				<div class="panel panel-default" style="border: 1px solid rgb(100, 149, 237);">
                  <div class="panel-heading" style="background-color: rgb(135, 206, 250);">
                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#question1" class="collapsed"><?php echo $lang['DOWNLOAD_VERSION']; ?> 1.4 Nighty </a></h6>
                  </div>
                  <div id="question1" class="panel-collapse collapse" style="height: 0px;">
						<div class="panel-group" id="accordion-color" style="max-width: 675px;float: left;width: 100%;">
						  <div class="tabbable">
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#iconified-tab1" data-toggle="tab"><i class="icon-code"></i> <?php echo $lang['DOWNLOADN_FEATURES']; ?></a></li>
							  <li><a href="#iconified-tab2" data-toggle="tab"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_TO_DO']; ?></a></li>
							</ul>
							<div class="tab-content with-padding">
							  <div class="tab-pane fade in active" id="iconified-tab1">
								<ul>
								  <li><?php echo $lang['DOWNLOADN_U_LINE_1']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_U_LINE_2']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_U_LINE_3']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_U_LINE_4']; ?></li>
								</ul>
							  </div>

							  <div class="tab-pane fade" id="iconified-tab2">
							  <?php echo $lang['DOWNLOADN_U_TO_DO']; ?>
							  </div>
							</div>
						  </div>
						</div>
						<div class="" style="padding: 16px 0px 19px 11px;float:right;width: 170px;margin: 19px 13px 0px 0px;border-left: 1px solid rgb(223, 223, 223);">
							<a href="bugreport.php" style="height: 34px;float: right;width: 100%;" type="button" class="btn btn-info"><i class="icon-wink"></i> <?php echo $lang['DOWNLOADN_U_SUGESTION']; ?></a>
					</div>
					 <div class="" style="padding-left: 10px!important;margin-bottom: 0x;float:left;width: 100%;margin-top: 9px;padding-right: 10pxpadding-top: 12px;">
                  </div>
                   	<br>
                  </div>
				  
                </div>
				</div>
				<br><br>
				<h6><i class="icon-stats-up"></i> <?php echo $lang['DOWNLOADN_CURRENT_VERSION']; ?></h6>
				<div class="panel-group block2">
				<div class="panel panel-default" style="border: 1px solid rgb(26, 178, 50);">
                  <div class="panel-heading"  style="background-color: rgb(206, 235, 206);">
                    <h6 class="panel-title panel-trigger active"><a data-toggle="collapse" href="#currentv" class="collapsed"><?php echo $lang['DOWNLOADN_VERSION']; ?> 1.4</a></h6>
                  </div>
                  <div id="currentv" class="panel-collapse collapse in" style="height: auto;">
							<div class="panel-group" id="accordion-color" style="max-width: 675px;float: left;width: 100%;margin-botton:9px">
						  <div class="tabbable">
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#iconified-tab1-c" data-toggle="tab"><i class="icon-code"></i> <?php echo $lang['DOWNLOADN_CHANGELOG']; ?></a></li>
							  <li><a href="#iconified-tab2-c" data-toggle="tab"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_KNOWN_ISSUES']; ?></a></li>
							</ul>
							<div class="tab-content with-padding">
							  <div class="tab-pane fade in active" id="iconified-tab1-c">
								  <ul>
									<li><?php echo $lang['DOWNLOADN_C_LINE_1']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_C_LINE_1']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_C_LINE_1']; ?></li>
									</ul>
							  </div>
							  <div class="tab-pane fade" id="iconified-tab2-c">
							  	 	
							  </div>
							</div>
						  </div>
						</div>


					<div class="" style="padding: 16px 0px 19px 11px;float:right;width: 170px;margin: 19px 13px 0px 0px;border-left: 1px solid rgb(223, 223, 223);">
								<a target="_blank"  href="https://bitbucket.org/Klokje/public-klokjes-bol-scripts/raw/ec830facccefb3b52212dba5696c08697c3c2854/Test/Prodiction/Prodiction.lua" style="height: 45px;float: right;width: 100%;margin-bottom: 3px;" type="button" class="btn btn-success"><i class="icon-file-download"></i> <?php echo $lang['DOWNLOADN_DOWNLOAD']; ?></a>

						</div>
						<div class="" style="padding-left: 10px!important;margin-bottom: 12px;float:left;width: 100%;margin-top: 9px;padding-right: 10px;border-top: 1px solid rgb(221, 221, 221);padding-top: 12px;">
                    <div style="text-align: center;padding: 10px;background-color: rgb(244, 248, 250);margin-bottom: 10px;">
						<div><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_C_RELEASE_DATE']; ?> </div>
					</div>
					<p class="alert alert-success fade in text-center">
                        <?php echo $lang['DOWNLOADN_QUESTIONS1']; ?><a href="bugreport.php"> <?php echo $lang['DOWNLOADN_QUESTIONS2']; ?> </a> <?php echo $lang['DOWNLOADN_QUESTIONS3']; ?>
					</p>
					
					

					</div>
                  </div>
				  
                </div>
				</div>
				<br><br>
				<h6><i class="icon-stats-up"></i> <?php echo $lang['DOWNLOADN_OLD_VERSIONS']; ?></h6>
				<div class="panel-group block2">
				<div class="panel panel-default" style="border: 1px solid rgb(178, 26, 26);">
                  <div class="panel-heading"  style="background-color: rgb(236, 200, 200);">
                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#old11" class="collapsed"><?php echo $lang['DOWNLOADN_VERSION']; ?> 1.3</a></h6>
                  </div>
                  <div id="old11" class="panel-collapse collapse" style="height: 0px;">
													<div class="panel-group" id="accordion-color" style="max-width: 675px;float: left;width: 100%;margin-botton:9px">
						  <div class="tabbable">
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#iconified-tab1-c11" data-toggle="tab"><i class="icon-code"></i> <?php echo $lang['DOWNLOADN_CHANGELOG']; ?></a></li>
							  <li><a href="#iconified-tab2-c11" data-toggle="tab"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_KNOWN_ISSUES']; ?></a></li>
							</ul>
							<div class="tab-content with-padding">
							  <div class="tab-pane fade in active" id="iconified-tab1-c11">
								  <ul>
									<li><?php echo $lang['DOWNLOADN_O_LINE1_1.3']; ?></li>
									   <li><?php echo $lang['DOWNLOADN_O_LINE2_1.3']; ?></li>
									</ul>
							  </div>
							  <div class="tab-pane fade" id="iconified-tab2-c11">
							  	 	
							  </div>
							</div>
						  </div>
						</div>


					<div class="" style="padding: 16px 0px 19px 11px;float:right;width: 170px;margin: 19px 13px 0px 0px;border-left: 1px solid rgb(223, 223, 223);">
								<a target="_blank"  href="https://bitbucket.org/Klokje/public-klokjes-bol-scripts/raw/60afb173f12273e68b1cb09003c105eb22d870e6/Test/Prodiction/Prodiction.lua" style="height: 45px;float: right;width: 100%;margin-bottom: 3px;" type="button" class="btn btn-success"><i class="icon-file-download"></i> <?php echo $lang['DOWNLOADN_DOWNLOAD']; ?></a>

						</div>
						<div class="" style="padding-left: 10px!important;margin-bottom: 12px;float:left;width: 100%;margin-top: 9px;padding-right: 10px;border-top: 1px solid rgb(221, 221, 221);padding-top: 12px;">
                    <div style="text-align: center;padding: 10px;background-color: rgb(244, 248, 250);margin-bottom: 10px;">
						<div><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_RELEASE_1.3']; ?> </div>
					</div>
					<p class="alert alert-success fade in text-center">
                        <?php echo $lang['DOWNLOADN_QUESTIONS1']; ?><a href="bugreport.php"> <?php echo $lang['DOWNLOADN_QUESTIONS2']; ?> </a> <?php echo $lang['DOWNLOADN_QUESTIONS3']; ?>
					</p>
					
					

					</div>
                  </div>
				  
                </div>
				</div>
				<br>
				<div class="panel-group block2">
				<div class="panel panel-default" style="border: 1px solid rgb(178, 26, 26);">
                  <div class="panel-heading"  style="background-color: rgb(236, 200, 200);">
                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#old11" class="collapsed"><?php echo $lang['DOWNLOADN_VERSION']; ?> 1.2</a></h6>
                  </div>
                  <div id="old11" class="panel-collapse collapse" style="height: 0px;">
													<div class="panel-group" id="accordion-color" style="max-width: 675px;float: left;width: 100%;margin-botton:9px">
						  <div class="tabbable">
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#iconified-tab1-c11" data-toggle="tab"><i class="icon-code"></i> <?php echo $lang['DOWNLOADN_CHANGELOG']; ?></a></li>
							  <li><a href="#iconified-tab2-c11" data-toggle="tab"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_KNOWN_ISSUES']; ?></a></li>
							</ul>
							<div class="tab-content with-padding">
							  <div class="tab-pane fade in active" id="iconified-tab1-c11">
								  <ul>
									 <li><?php echo $lang['DOWNLOADN_O_LINE1_1.2']; ?></li>
									  <li><?php echo $lang['DOWNLOADN_O_LINE2_1.2']; ?></li>
									  <li><?php echo $lang['DOWNLOADN_O_LINE3_1.2']; ?></li>
									  <li><?php echo $lang['DOWNLOADN_O_LINE4_1.2']; ?></li>
									  <li><?php echo $lang['DOWNLOADN_O_LINE5_1.2']; ?></li>
									</ul>
							  </div>
							  <div class="tab-pane fade" id="iconified-tab2-c11">
							  	 	
							  </div>
							</div>
						  </div>
						</div>


					<div class="" style="padding: 16px 0px 19px 11px;float:right;width: 170px;margin: 19px 13px 0px 0px;border-left: 1px solid rgb(223, 223, 223);">
								<a target="_blank"  href="https://bitbucket.org/Klokje/public-klokjes-bol-scripts/raw/aef4be4e92a5b1ba70154752c49e4978e7178dd4/Test/Prodiction/Prodiction.lua" style="height: 45px;float: right;width: 100%;margin-bottom: 3px;" type="button" class="btn btn-success"><i class="icon-file-download"></i> <?php echo $lang['DOWNLOADN_DOWNLOAD']; ?></a>

						</div>
						<div class="" style="padding-left: 10px!important;margin-bottom: 12px;float:left;width: 100%;margin-top: 9px;padding-right: 10px;border-top: 1px solid rgb(221, 221, 221);padding-top: 12px;">
                    <div style="text-align: center;padding: 10px;background-color: rgb(244, 248, 250);margin-bottom: 10px;">
						<div><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_RELEASE_1.2']; ?> </div>
					</div>
					<p class="alert alert-success fade in text-center">
                        <?php echo $lang['DOWNLOADN_QUESTIONS1']; ?><a href="bugreport.php"> <?php echo $lang['DOWNLOADN_QUESTIONS2']; ?> </a> <?php echo $lang['DOWNLOADN_QUESTIONS3']; ?>
					</p>
					
					

					</div>
                  </div>
				  
                </div>
				</div>
				<br>
				<div class="panel-group block2">
				<div class="panel panel-default" style="border: 1px solid rgb(178, 26, 26);">
                  <div class="panel-heading"  style="background-color: rgb(236, 200, 200);">
                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#old11" class="collapsed"><?php echo $lang['DOWNLOADN_VERSION']; ?> 1.1a</a></h6>
                  </div>
                  <div id="old11" class="panel-collapse collapse" style="height: 0px;">
												<div class="panel-group" id="accordion-color" style="max-width: 675px;float: left;width: 100%;">
						  <div class="tabbable">
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#iconified-tab1-c41" data-toggle="tab"><i class="icon-code"></i> <?php echo $lang['DOWNLOADN_CHANGELOG']; ?></a></li>
							  <li><a href="#iconified-tab2-c41" data-toggle="tab"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_KNOWN_ISSUES']; ?></a></li>
							</ul>
							<div class="tab-content with-padding">
							  <div class="tab-pane fade in active" id="iconified-tab1-c41">
								<?php echo $lang['DOWNLOAD_O_LINE1_1.1a']; ?>
								 <ul>
								  <li><?php echo $lang['DOWNLOAD_O_LINE2_1.1a']; ?></li>
								  <li><?php echo $lang['DOWNLOAD_O_LINE3_1.1a']; ?></li>
								  <li><?php echo $lang['DOWNLOAD_O_LINE4_1.1a']; ?></li>
								</ul>
							  </div>
							  <div class="tab-pane fade" id="iconified-tab2-c41">
							   <?php echo $lang['DOWNLOADN_O_NO_ISSUES']; ?>
							  </div>
							</div>
						  </div>
						</div>


					<div class="" style="padding: 16px 0px 19px 11px;float:right;width: 170px;margin: 19px 13px 0px 0px;border-left: 1px solid rgb(223, 223, 223);">
							<a target="_blank" href="https://bitbucket.org/Klokje/public-klokjes-bol-scripts/raw/b3d142897814a97973071c0a26aab5bb63d6d014/Test/Prodiction/Prodiction.lua" style="height: 45px;float: right;width: 100%;margin-bottom: 3px;" type="button" class="btn btn-success"><i class="icon-file-download"></i> <?php echo $lang['DOWNLOADN_DOWNLOAD']; ?></a>
							<br><a href="bugreport.php" style="height: 34px;float: right;width: 100%;" type="button" class="btn btn-danger"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_REPORT_BUG']; ?></a>
					</div>


                    <div class="" style="padding-left: 10px!important;margin-bottom: 12px;float:left;width: 100%;margin-top: 9px;padding-right: 10px;border-top: 1px solid rgb(221, 221, 221);padding-top: 12px;">
                    <div style="text-align: center;padding: 10px;background-color: rgb(244, 248, 250);margin-bottom: 10px;">
						<div><i class="icon-notification"></i> <?php echo $lang['DOWNLOAD_RELEASE_1.1a']; ?> </div>
					</div>
					<p class="alert alert-success fade in text-center">
                        <?php echo $lang['DOWNLOADN_QUESTIONS1']; ?><a href="bugreport.php"> <?php echo $lang['DOWNLOADN_QUESTIONS2']; ?> </a> <?php echo $lang['DOWNLOADN_QUESTIONS3']; ?>
					</p>
					
					

					</div>
                  </div>
				  
                </div>
				</div>
				<br>
				<div class="panel-group block2">
				<div class="panel panel-default" style="border: 1px solid rgb(178, 26, 26);">
                  <div class="panel-heading"  style="background-color: rgb(236, 200, 200);">
                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#old11" class="collapsed"><?php echo $lang['DOWNLOADN_VERSION']; ?> 1.1</a></h6>
                  </div>
                  <div id="old11" class="panel-collapse collapse" style="height: 0px;">
												<div class="panel-group" id="accordion-color" style="max-width: 675px;float: left;width: 100%;">
						  <div class="tabbable">
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#iconified-tab1-c41" data-toggle="tab"><i class="icon-code"></i> <?php echo $lang['DOWNLOADN_CHANGELOG']; ?></a></li>
							  <li><a href="#iconified-tab2-c41" data-toggle="tab"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_KNOWN_ISSUES']; ?></a></li>
							</ul>
							<div class="tab-content with-padding">
							  <div class="tab-pane fade in active" id="iconified-tab1-c41">
								<ul>
								  <li><?php echo $lang['DOWNLOADN_O_LINE1_1.1']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE2_1.1']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE3_1.1']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE4_1.1']; ?></li>
								</ul>
							  </div>
							  <div class="tab-pane fade" id="iconified-tab2-c41">
							   <?php echo $lang['DOWNLOADN_O_NO_ISSUES']; ?>
							  </div>
							</div>
						  </div>
						</div>


					<div class="" style="padding: 16px 0px 19px 11px;float:right;width: 170px;margin: 19px 13px 0px 0px;border-left: 1px solid rgb(223, 223, 223);">
							<a target="_blank" href="https://bitbucket.org/Klokje/public-klokjes-bol-scripts/raw/1467bf108b116274f8763693b00b7d977faf7735/Test/Prodiction/Prodiction.lua" style="height: 45px;float: right;width: 100%;margin-bottom: 3px;" type="button" class="btn btn-success"><i class="icon-file-download"></i> <?php echo $lang['DOWNLOADN_DOWNLOAD']; ?></a>
							<br><a href="bugreport.php" style="height: 34px;float: right;width: 100%;" type="button" class="btn btn-danger"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_REPORT_BUG']; ?></a>
					</div>


                    <div class="" style="padding-left: 10px!important;margin-bottom: 12px;float:left;width: 100%;margin-top: 9px;padding-right: 10px;border-top: 1px solid rgb(221, 221, 221);padding-top: 12px;">
                    <div style="text-align: center;padding: 10px;background-color: rgb(244, 248, 250);margin-bottom: 10px;">
						<div><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_RELEASE_1.1']; ?> </div>
					</div>
					<p class="alert alert-success fade in text-center">
                        <?php echo $lang['DOWNLOADN_QUESTIONS1']; ?><a href="bugreport.php"> <?php echo $lang['DOWNLOADN_QUESTIONS2']; ?> </a> <?php echo $lang['DOWNLOADN_QUESTIONS3']; ?>
					</p>
					
					

					</div>
                  </div>
				  
                </div>
				</div>
				<br>

				<div class="panel-group block2">
				<div class="panel panel-default" style="border: 1px solid rgb(178, 26, 26);">
                  <div class="panel-heading"  style="background-color: rgb(236, 200, 200);">
                    <h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#old1" class="collapsed"><?php echo $lang['DOWNLOADN_VERSION']; ?> 1.0 Nighty</a></h6>
                  </div>
                  <div id="old1" class="panel-collapse collapse" style="height: 0px;">
													<div class="panel-group" id="accordion-color" style="max-width: 675px;float: left;width: 100%;">
						  <div class="tabbable">
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#iconified-tab1-c" data-toggle="tab"><i class="icon-code"></i> <?php echo $lang['DOWNLOADN_CHANGELOG']; ?></a></li>
							  <li><a href="#iconified-tab2-c" data-toggle="tab"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_KNOWN_ISSUES']; ?></a></li>
							</ul>
							<div class="tab-content with-padding">
							  <div class="tab-pane fade in active" id="iconified-tab1-c">
								<ul>
								  <li><?php echo $lang['DOWNLOADN_O_LINE1_1.0']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE2_1.0']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE3_1.0']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE4_1.0']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE5_1.0']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE6_1.0']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE7_1.0']; ?></li>
								  <li><?php echo $lang['DOWNLOADN_O_LINE8_1.0']; ?></li>
								</ul>
							  </div>
							  <div class="tab-pane fade" id="iconified-tab2-c">
							   <?php echo $lang['DOWNLOADN_O_NO_ISSUES']; ?>
							  </div>
							</div>
						  </div>
						</div>


					<div class="" style="padding: 16px 0px 19px 11px;float:right;width: 170px;margin: 19px 13px 0px 0px;border-left: 1px solid rgb(223, 223, 223);">
							<a target="_blank" href="https://bitbucket.org/Klokje/public-klokjes-bol-scripts/raw/7f8427d943e993667acd4a51a39cf9aa2b71f222/Test/Prodiction/Prodiction.lua" style="height: 45px;float: right;width: 100%;margin-bottom: 3px;" type="button" class="btn btn-success"><i class="icon-file-download"></i> <?php echo $lang['DOWNLOADN_DOWNLOAD']; ?></a>
							<br><a href="bugreport.php" style="height: 34px;float: right;width: 100%;" type="button" class="btn btn-danger"><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_REPORT_BUG']; ?></a>
					</div>


                    <div class="" style="padding-left: 10px!important;margin-bottom: 12px;float:left;width: 100%;margin-top: 9px;padding-right: 10px;border-top: 1px solid rgb(221, 221, 221);padding-top: 12px;">
                    <div style="text-align: center;padding: 10px;background-color: rgb(244, 248, 250);margin-bottom: 10px;">
						<div><i class="icon-notification"></i> <?php echo $lang['DOWNLOADN_RELEASE_1.0']; ?></div>
					</div>
					<p class="alert alert-success fade in text-center">
                        <?php echo $lang['DOWNLOADN_QUESTIONS1']; ?><a href="bugreport.php"> <?php echo $lang['DOWNLOADN_QUESTIONS2']; ?> </a> <?php echo $lang['DOWNLOADN_QUESTIONS3']; ?>
					</p>
					
					

					</div>
                  </div>
				  
                </div>
				</div>
				<br>
				
				<br>

		



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