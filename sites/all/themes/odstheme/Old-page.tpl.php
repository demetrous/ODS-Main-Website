 <?php render ($page['content']); ?>
 
 
 <div class="region region-nonwrapped-bodycontent">
    <div id="block-block-37" class="block block-block">

    
  <div class="content-nonwrapped_bodycontent">
    <!-- Google Tag Manager for analytics -->
<!--DK <noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-N3KMGF"
height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N3KMGF');</script> DK-->
<!-- End Google Tag Manager -->
  </div>
</div>
  </div>
    
<a name="top"></a>
<div id="skiplink"><a href="http://www.unlv.edu/hr#skip" tabindex="1">Skip to content »</a></div>

<div id="container">

<div id="mobilenav-wrap"><div id="menu-icon"><a tabindex="3">Menu</a></div>

<div id="mobile-logo">
<a href="http://www.unlv.edu/" onclick="trackCategoryEvent(&#39;Header&#39;,&#39;Mobile Logo&#39;,this.href,this); return false;" title="UNLV" tabindex="2"><img width="130" height="40" border="0" src="./Human Resources _ University of Nevada, Las Vegas_files/unlv-logo.png" alt="UNLV"></a>
</div> <!-- end mobile-logo -->


<div id="mobilenav">

          <div class="region region-content-header">
    <div id="block-block-1" class="block block-block">

    
  <div class="content-content_header">
    <div id="banner">
		<div id="logo"><a class="global_header_link" href="http://www.unlv.edu/" title="UNLV Home Page"><img alt="U N L V" src="/sites/all/themes/odstheme/images/unlv-logo(1).png" style="height:40px; width:130px"></a></div>

		<div id="name"><a href="<?php print $front_page; ?>" title="ODS Home Page">University of Nevada, Las Vegas
				<br>
				<span>Office of Decision Support</span></a>
		</div>

<div id="searchlinks">
<!--DK A-Z Index | Directories
<a class="global_header_link" href="http://www.unlv.edu/directories/a-z" title="A-Z Index">A-Z Index</a> | <a class="global_header_link" href="http://www.unlv.edu/directories" title="Directories">Directories</a> 
 DK-->

 
 
<span class="ql">
	 <?php if (!$logged_in): ?>
     <?php print l("Login","user/login",array('query' => drupal_get_destination())); ?><!-- | 
     <a class="quicklinks" href="/user/register" id="quicklinks_icon">Register</a>-->
	 <?php endif; ?>
	 
	 <?php if ($logged_in): ?>
	 <a class="quicklinks" href="/user" id="quicklinks_icon">Hello <?php print $user->name; ?></a> | 
     <?php print l("Logout","user/logout",array('query' => drupal_get_destination())); ?>
	 <?php endif; ?>
	 
	 
</span>

</div>
<!-- end searchlinks -->

<div id="toplinks">
<ul>
	<li><a class="libraries" href="https://www.library.unlv.edu/">Libraries</a></li>
	<li><a class="maps" href="http://www.unlv.edu/maps">Maps &amp; Parking</a></li>
	<li><a class="bookstore" href="http://unlv.bncollege.com/">Bookstore</a></li>
	<li><a class="unlvmail" href="http://oit.unlv.edu/unlvmail">UNLVMail</a></li>
	<li><a class="rebelmail" href="http://rebelmail.unlv.edu/">Rebel Mail</a></li>
	<li><a class="rebelcard" href="http://rebelcard.unlv.edu/">Rebel Card</a></li>
	<li><a class="webcampus" href="http://webcampus.unlv.edu/">Web Campus</a></li>
	<li><a class="myunlv" href="https://my.unlv.nevada.edu/">MyUNLV</a></li>
</ul>

<div class="clear"></div>

<div id="close">
<a id="ql-close" class="pointer" title="close"><img src="<?php print $directory;?>/images/morelinks-closebox.png" border="0" width="25" height="25" alt="close"></a>
</div>
<!--end #close-->

</div>
<!--end #toplinks-->

<div id="search">
<!--TEMPORARY. MOVE TO THE TEMPLATE.PHP-->
<?php
  $block = module_invoke('search', 'block_view', 'search');
  print render($block); 
?>

</div>
<!-- end search --></div>
<!-- banner end -->  </div>
</div>
  </div>
    

	
<div id="mainnav" style="display:none;">


<div id="audience">
  <ul id="audience-menu" class="links"><li class="menu-411 first"><a href="http://www.unlv.edu/futurestudents" title="Future Students">Future Students</a></li>
<li class="menu-412"><a href="http://www.unlv.edu/currentstudents" title="Current Students">Current Students</a></li>
<li class="menu-413"><a href="http://www.unlv.edu/alumni" title="Alumni">Alumni</a></li>
<li class="menu-414"><a href="http://www.unlv.edu/facultystaff" title="Faculty/Staff">Faculty/Staff</a></li>
<li class="menu-415"><a href="http://www.unlv.edu/donors" title="Donors">Donors</a></li>
<li class="menu-416 last"><a href="http://www.unlv.edu/community" title="Community">Community</a></li>
</ul></div> <!-- end audience -->


<!-- ************* HIDDEN (DK)************* -->
<div id="topical">
  <ul id="topical-menu"><li class="menu-401 first"><a href="http://www.unlv.edu/about" title="About UNLV">About UNLV</a></li>
<li class="menu-402"><a href="http://www.unlv.edu/academics" title="Academics">Academics</a></li>
<li class="menu-403"><a href="http://www.unlv.edu/admissions" title="Admissions">Admissions</a></li>
<li class="menu-404"><a href="http://www.unlv.edu/about/athletics" title="Athletics">Athletics</a></li>
<li class="menu-405"><a href="http://www.unlv.edu/about/employment" title="Employment">Employment</a></li>
<li class="menu-406"><a href="https://www.library.unlv.edu/" title="Libraries">Libraries</a></li>
<li class="menu-407"><a href="http://www.unlv.edu/maps" title="Maps &amp; Parking">Maps &amp; Parking</a></li>
<li class="menu-408 last"><a href="http://www.unlv.edu/research" title="Research">Research</a></li>
</ul></div> <!-- end topical -->  
<!-- ************* HIDDEN (DK)************* -->


</div>  
<!-- end of mainnav -->

<?php print render($page['header']); ?>

</div><!--end #mobilenav-->

</div><!--end #mobilenav-wrap-->


<div id="heading">

	<?php print $messages; ?>
		

    
    <!--end #title-->

     <div id="crumbtrail">		
		<?php
			if ($breadcrumb && $breadcrumb != '<div class="breadcrumb"></div>'):
				  print '<a href="http://www.unlv.edu/">UNLV Home</a> » ' . $breadcrumb;
			else:
				  print '<div class="breadcrumb"><a href="http://www.unlv.edu/">UNLV Home</a> » ODS Home</div>'; 
			endif;
		?>
		
		
	</div>    <!-- end #crumbtrail -->
	
</div>
<!-- end #heading -->     


<div id="content">

<div id="leftNav">
		<div class="region region-left-navigation">
			<div id="block-menu-block-1" class="block block-menu-block">				
				<div class="content-left_navigation">
					<div class="menu-block-wrapper menu-block-1 menu-name-menu-human-resources parent-mlid-0 menu-level-1">
						<ul class="menu">
							<li class="first last expanded active-trail menu-mlid-7082">
								<a href="/hr" title="Human Resources" class="active-trail">Human Resources Home</a>
								<ul class="menu"><li class="first leaf active-trail active menu-mlid-7083"><a href="/hr/about" title="About" class="active-trail active">About</a></li>
									<li class="leaf menu-mlid-7084"><a href="/hr/alpha-index" title="A-Z Index">A-Z Index</a></li>
									<li class="collapsed menu-mlid-7085"><a href="/hr/benefits" title="Benefits">Benefits</a></li>
									<li class="leaf menu-mlid-7086"><a href="/hr/employee-info" title="Employee Information">Employee Self-Service</a></li>
									<li class="collapsed menu-mlid-7087"><a href="/hr/staff-development" title="Staff Development">Staff Development</a></li>
									<li class="leaf menu-mlid-7088"><a href="/hr/policies" title="Workplace Policies">Workplace Policies</a></li>
									<li class="leaf menu-mlid-7089"><a href="/hr/leaving" title="Leaving the University">Leaving the University</a></li>
									<li class="leaf menu-mlid-7090"><a href="/hr/employment" title="Employment">Employment</a></li>
									<li class="collapsed menu-mlid-7091"><a href="/hr/forms" title="Forms">Forms</a></li>
									<li class="leaf menu-mlid-7092"><a href="/hr/search" title="Search Committee/Recruitment Resources">Search Committee</a></li>
									<li class="collapsed menu-mlid-7093"><a href="/hr/toolkits" title="Toolkits">Toolkits</a></li>
									<li class="last leaf menu-mlid-7094"><a href="/hr/contact" title="Contact">Contact</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>	  
	</div>
	
		<?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>			
		<?php print render($page['content']); ?>
        <?php print $feed_icons; ?>


<div class="clear"></div>

</div>
<!--end #content -->


<div id="footer">
</div>
<!--end #footer -->

<div id="bigfoot">
          <div class="region region-bigfoot">
    <!-- Big Foot -->
<div id="columncontainer">

<div class="column" id="bigfoot-featured-sites">
<p>About Us:</p>

<ul>
    <li><a href="/Staff">Staff</a></li>
	<li><a href="/OurMission">Our Mission</a></li>
	<li><a href="/Presentations">Presentations</a></li>
	<!--
	<li><a href="https://ir.unlv.edu/IAP/aboutus/Content/ProfessionalPresentations.aspx">Professional</a></li>
	<li><a href="https://ir.unlv.edu/IAP/aboutus/Content/CampusPresentations.aspx">Campus</a></li>	-->
</ul>
</div>


<div class="column middlecolumn" id="bigfoot-follow-us">
<p>Contact Us:</p>

<ul>
	<li>Phone: 702-895-3771</li>
	<li>Fax: 702-895-4934</li>
	<li class="email-footer-link">Email: <a href="mailto:iap@unlv.edu">iap@unlv.edu</a></li>	
</ul>
</div>



<div class="lastcolumn" id="bigfoot-contact-us">
<p>Address:</p>

<ul>
	<li>Office of Decision Support, UNLV</li>
    <li>PO Box 451022, 4505 S Maryland Pkwy</li>
	<li>Las Vegas, NV 89154</li>
	
	<!--<li> Weather Include 

<div id="theWeather">
<span><a href="/visit/beyondcampus/weather" title="Weather">Paradise 76&deg;</a></span>
<img src='www.unlv.edu/sites/all/modules/simple_weather_yahoo/weather-icons/tick/cloudy2.png' alt='cloudy' /></div>
</li>-->
</ul>
</div>


</div>
<!--end #columncontainer-->

<div id="bfbottom">
<span class="bottomleft">Produced by <!--<a href="http://www.unlv.edu/web">-->Office of Decision Support</a> | © <?php echo date("Y"); ?> University of Nevada, Las Vegas</span> <span class="bottomright" style="display:none;"><a href="http://www.unlv.edu/web/feedback">Website Feedback</a></span></div>
<!--end #bfbottom-->  </div>
</div>
<!--end #bigfoot-->

</div>
<!-- end of #container -->

<!--<script type="text/javascript" src="./js/flexslider.js"></script>-->