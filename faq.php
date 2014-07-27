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
	
	$.each( ["download","introduction"], function( key, value ) {
	  
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
					<li class="active"><?php echo $lang['MENU_FAQ']; ?></li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
          <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target="#on-top"><i class="icon-menu2"></i></a>
        </div>
        
        <ul class="breadcrumb-buttons collapse" id="on-top">
          <li class="language dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/english.png" alt=""> <span>English</span> <b class="caret"></b></a>
            <ul class="dropdown-menu dropdown-menu-right icons-right">
              
              <li class="active"><a href="faq.php?lang=en"><img src="images/flags/english.png" alt=""> English</a></li>
              <li class="active"><a href="faq.php?lang=pt"><img src="images/flags/portuguese.png" alt=""> Portuguese</a></li>
			  			  
			  <li class="disabled"><a href="faq.php?lang=ko"><img src="images/flags/korean.png" alt=""> Korean</a></li>
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
					<h3><i class="icon-lightning"></i><?php echo $lang['MENU_FAQ']; ?> </h3>
				</div>

				
			</div>
				<div class="callout callout-danger fade in">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<h5><?php echo $lang['FAQ_ERROR']; ?></h5>
				<p>This page get update soon. </p>
			</div>
			<!-- Question toggles group -->
	        <div class="row">
		        <div class="col-md-6">
			        <div class="panel-group block">
			        	<div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question1"><?php echo $lang['FAQ_QUESTION_1']; ?></a>
								</h6>
							</div>
							<div id="question1" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo $lang['FAQ_ANSWER_1']; ?>
								</div>
							</div>
						</div>
						</div><br>
					</div>
		        </div>

		        <div class="col-md-6">
			        <div class="panel-group block">
			        	<div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h6 class="panel-title panel-trigger">
									<a data-toggle="collapse" href="#question8"><?php echo $lang['FAQ_QUESTION_2']; ?></a>
								</h6>
							</div>
							<div id="question8" class="panel-collapse collapse">
								<div class="panel-body">
									<?php echo $lang['FAQ_ANSWER_2']; ?>
								</div>
							</div>
						</div>
						</div><br>
					</div>
		        </div>
			</div>
			<!-- /question toggles group -->


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