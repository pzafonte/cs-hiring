<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML Basic 1.0//EN"
    "http://www.w3.org/TR/xhtml-basic/xhtml-basic10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- 
	This website is powered by TYPO3 - inspiring people to share!
	TYPO3 is a free open source Content Management Framework initially created by Kasper Skaarhoj and licensed under GNU/GPL.
	TYPO3 is copyright 1998-2008 of Kasper Skaarhoj. Extensions are copyright of their respective owners.
	Information and contribution at http://typo3.com/ and http://typo3.org/
-->

	<link rel="stylesheet" type="text/css"  href=''  />
<link rel="SHORTCUT ICON" href="http://www.stevens.edu/engineering/images/fileadmin/images/stevens2.ico" />
	<title>schedule checker</title>
	<meta name="generator" content="TYPO3 4.3 CMS" />
	<script type="text/javascript"  src='' ></script>

</head>
<body bgcolor="#000000">

<div id="site-body-container">
		<div id="site-body-content">
<link href="http://www.stevens.edu/compsci/fileadmin/compsci/new/styles/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/scripts/milonic_src.js"></script>
<script type="text/javascript" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/scripts/mmenudom.js"></script>


<script type="text/javascript">
function init_menu()
			{
				var min=1;
				var max=5;
				var dir = 'http://www.stevens.edu/compsci/fileadmin/compsci/images/rotating/';
				var nbimages =5;
				var name = dir + ((Math.round((Math.random()*99)) % nbimages) + 1) + '.jpg';
if(document.images['secimg'])
				document.images['secimg'].src= name;

				var url ="";
				url = location.href;
				url1 = location.href;

				var numchar = url1.length;

				// for news ID URL
				if(numchar > 43)
				{
					var news = url1.substring(38,42);

					if(news == "news")
						url1 = url1.substring(0,43);
				}

				// for seminars ID URL
				if(numchar > 47)
				{
					var seminars = url1.substring(38,46);

					if(seminars == "seminars")
						url1 = url1.substring(0,47);
				}

				var currentnode = url;

				if (!currentnode){
					currentnode = document.getElementById(url.substring(0, location.href.length - 1));
					url=url.substring(0, location.href.length - 1)
				}
				if (currentnode)
				{

					if(url1=="http://www.stevens.edu/compsci/about/index.php" || url1=="http://www.stevens.edu/compsci/about/index.html")
						url1="http://www.stevens.edu/compsci/about/";
					else if(url1=="http://www.stevens.edu/compsci/about/seminars/index.php" || url1=="http://www.stevens.edu/compsci/about/seminars/index.html" || url1==
							"http://www.stevens.edu/compsci/about/seminars/archive.php" || url1=="http://www.stevens.edu/compsci/about/seminars/listed_seminar.php"
							|| url1=="http://www.stevens.edu/compsci/about/seminars/single_seminar.html"
							|| url1=="http://www.stevens.edu/compsci/about/seminars/single_seminar.php" || url1=="http://www.stevens.edu/compsci/about/seminars/")
						url1="http://www.stevens.edu/compsci/about/seminars/";
					else if(url1=="http://www.stevens.edu/compsci/about/news/index.php" || url1=="http://www.stevens.edu/compsci/about/news/index.html" || url1==
							"http://www.stevens.edu/compsci/about/news/archive.php" || url1=="http://www.stevens.edu/compsci/about/news/single_news.html" || url1==
							"http://www.stevens.edu/compsci/about/news/single_news.php")
						url1="http://www.stevens.edu/compsci/about/news/";
if(document.images[url1])
					document.images[url1].src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg";

				}
			}

function roll(img_name, img_src, leftnav)
   			{
				if(leftnav!=url1)
				{
				    if(document[img_name])
  					document[img_name].src = img_src;
				}
   			}

function show_submenu(id)
			{
				var d = document.getElementById(id);
				var d1= document.getElementById(id+"c");

				if (d)
				{
					if ((d.style.display =='none'))
					{
						d1.style.display='none';
						d.style.display='block';
						document.images[id + '_img'].src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif";
						//document.getElementById("centertable").height="800";
					}
					else
					{
						d.style.display='none';
						d1.style.display='block';
						document.images[id + '_img'].src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif";
						//document.getElementById("centertable").height="500";
					}
				}

				for (var i = 1; i<=10; i++) {
					if (document.getElementById('leftmenu'+i) && (('leftmenu'+i) != id))
					{
						document.getElementById('leftmenu'+i).style.display='none';
						document.images['leftmenu'+ i + '_img'].src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif";
					}
				}
			}


function MM_swapImgRestore() { //v3.0

}

function MM_preloadImages() { //v3.0
	
}

function MM_findObj(n, d) { //v4.0

}

function MM_swapImage() { //v3.0
  
}

//-->
</script>

<script type="text/javascript">
	url=window.location;
	//alert(url); Needed for print version
</script>

<!--this is for gifts pop up-->

	<script type="text/javascript" src="http://www.stevens.edu/cal/home_script/scripts/jquery-1.3.2.min.js"></script>
 	<script type="text/javascript" src="http://www.stevens.edu/ses/cgi-bin/common/faculty/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
 	<script type="text/javascript" src="http://www.stevens.edu/ses/cgi-bin/common/faculty/fancybox/jquery.fancybox-1.3.2.js"></script>
 	<link rel="stylesheet" type="text/css" href="http://www.stevens.edu/ses/cgi-bin/common/faculty/fancybox/jquery.fancybox-1.3.2.css" media="screen" />
  	<link rel="stylesheet" href="http://www.stevens.edu/ses/cgi-bin/common/faculty/fancybox/style.css" />
 	<script type="text/javascript">
 		$(document).ready(function() {
 			/*
 			*   Examples - images
 			*/



 			$("#various3").fancybox({
				'titleshow'         : true,
				'titlePosition'		: 'outside',
 				'width'				: '75%',
 				'height'			: '300%',
 				'autoScale'			: false,
 				'transitionIn'		: 'none',
 				'transitionOut'		: 'none',
 				'type'				: 'iframe'
 			});

		});

		</script>

 <!--end of gifts pop up-->
 
 <!--for information request-->
    	<script type="text/javascript">
 		$(document).ready(function() {

 			$("#info_request").fancybox({
				'titleshow'         : true,
				'titlePosition'		: 'outside',
 				'width'				: '40%',
 				'height'			: '90%',
 				'autoScale'			: false,
 				'transitionIn'		: 'none',
 				'transitionOut'		: 'none',
 				'type'				: 'iframe'
 			});
			
		});
	</script>
     <!--end information request-->
     
       <!--for information request footer-->
    	<script type="text/javascript">
 		$(document).ready(function() {

 			$("#info_request_foot").fancybox({
				'titleshow'         : true,
				'titlePosition'		: 'outside',
 				'width'				: '40%',
 				'height'			: '90%',
 				'autoScale'			: false,
 				'transitionIn'		: 'none',
 				'transitionOut'		: 'none',
 				'type'				: 'iframe'
 			});
			
		});
	</script>
     <!--end information request-->
 
 <!-- hovercard -->
  <link href="http://www.stevens.edu/ses/cgi-bin/common/hovercard/stylesheets/tipsy.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="http://www.stevens.edu/ses/cgi-bin/common/hovercard/stylesheets/tipsy.hovercard.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="http://www.stevens.edu/ses/cgi-bin/common/hovercard/javascripts/jquery.tipsy.js" type="text/javascript"></script>
  <script src="http://www.stevens.edu/ses/cgi-bin/common/hovercard/javascripts/jquery.tipsy.hovercard.js" type="text/javascript"></script>
<!-- hovercard -->



<!--MAIN CONTAINER-->
<table align="center" bgcolor="#000000" border="0" cellspacing="0" cellpadding="0" width="1024">
 
<!--MILONIC WATERMARK-->
<div style="display: none;visibility:hidden;"><a href="http://www.milonic.com" />JavaScript Menu Courtesy of Milonic.com</a></div>

<!-- ---------- --> 
<!-- Top Header -->
<!-- ---------- --> 
<tr><td width="100%" valign="top">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000"> 
   		<td width="1" bgcolor="333333" align="left" class="noheight"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" title="Stevens Computer Science" alt="Stevens Computer Science" /></td>
		<td width="144" valign="bottom" align="left" class="noheight">
        	<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/stevensLogoTop.jpg" border="0" alt="" /></td>
		<td width="460" valign="bottom" align="left" class="noheight"> 
        	<a href="http://www.stevens.edu/ses/"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/engineeringBanner.jpg" width="460" border="0" title="Engineering &amp; Science" alt="Engineering &amp; Science" /></a></td>
             
		<!--SEARCH BAR/BUTTON-->
		<td id="search" valign="bottom">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/pplFinderBg.jpg"><tr>
                	<td>&nbsp;<a href="http://www.stevens.edu/mystevens" class="pplfinder">MyStevens</a>&nbsp;</td>
                    <td>&nbsp;&nbsp;<a href="http://www.stevens.edu/compsci/people/people-finder.html" class="pplfinder">People&nbsp;Finder</a>&nbsp;</td>
                    <td>&nbsp;&nbsp;<a id="various3" href="https://secure.entango.com/donate/E8WCknqSPEc" title="Make a gift" class="pplfinder">Make&nbsp;a&nbsp;Gift</a>&nbsp;&nbsp;&nbsp;</td>
				<form name="gsearch" action="http://stevens.edu/compsci/search/" id="cse-search-box">
                	<td align="right" valign="middle">		 
						<input name="q" id="fdse_Terms" maxlength="50" alt="search" class="searchbox" type="text" size="20" value="Site search here..." onclick="this.style.backgroundColor='BLACK';if(this.value=='Site search here...') this.value='';" />
              			
                        <input type="hidden" name="cx" value="014514028864937595251:zlcccmebk38" />
			  			<input type="hidden" name="cof" value="FORID:11" /></td>
                        
                     <td align="right" class="noheight">
                        <a href="#" onclick="document.gsearch.submit();" title="Submit Search" onmouseover="roll('search', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/goButton_over.png')" onmouseout="roll('search', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/goButton.png')">
                        <img name="search" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/goButton.png" border="0" alt="" /></a>
                     </td>
                </form>
          	</tr></table>
         </td>
   		<td width="1" bgcolor="333333" class="noheight"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" title="Stevens Computer Science" alt="Stevens Computer Science" /></td>
                        
    	</table>
</td></tr>
 

<!-- --------- -->   
<!---CS BANNER--->
<!-- --------- --> 
<tr>
	<td align="center" width="100%" class="noheight"><table background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/main_banner.jpg" border="0" cellspacing="0" cellpadding="0">
  	<tr>
    	<td><a href="http://www.stevens.edu" target="_blank">
        	<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/stevensLogo.jpg" border="0" alt="Stevens Institute of Technology" title="Stevens Institute of Technology" /></a></td>
    	<td><a href="http://www.stevens.edu/compsci/" target="_top" alt="Stevens Computer Science Homepage" title="Stevens Computer Science Homepage">
            <img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/computer-scienceBannerLeft.jpg" alt="Stevens Computer Science Homepage" title="Stevens Computer Science Homepage" border="0" /></a></td>
    	<td>
        	<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/computer-scienceBannerRight.jpg" alt="Stevens Computer Science Homepage" title="Stevens Computer Science Homepage" /></td>
   
  </tr>
  </table></td>
</tr>


     <!-- ---------------------------- -->
     <!-- ----- Top Navigation----------->
     <!-- ---------------------------- -->
<tr><td align="left" width="100%"><table width="100%" bgcolor="#000000" border="0" cellspacing="0" cellpadding="0">
    	<td bgcolor="#333333" class="noheight"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="40" alt="" /></td>
    	<td width="100%" align="left">
			<script type="text/javascript" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/scripts/menu_data.js"></script>
        </td>
        <td bgcolor="#333333" class="noheight"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" alt="" /></td>
	</table></td>
</tr>

    <!-- ---------------------------- -->
    <!----------- Body Table -------- -->
    <!-- ---------------------------- -->
<tr>
	<td align="center" width="100%">
    <table width="100% " border="0" cellspacing="0" cellpadding="0" align="center"><tr>

    <!-- ---------------------------- -->
    <!-- ----- Left Gray Border ----- -->
    <!-- ---------------------------- -->
   	<td width="1" bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" alt="Stevens CS" /></td>

     <!-- ---------------------------- -->
     <!-- --- Left Collumn Beginning -- -->
     <!-- ---------------------------- -->
    <td valign="top" width="23%" bgcolor="#cccccc"><table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr><td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                	<tr height="40"><td align="right"><table width="100%" border="0" cellspacing="4" cellpadding="4" bgcolor="#175b63">
  						<tr>
                        	<td width="87%" align="right" class="leftnavheader">CS&nbsp;SEARCH</td>
    						<td width="13%" align="center"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/pagetitle_bullet.jpg" alt="" /></td>
  						</tr>
                     </table></td></tr>
           </table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr><td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"></td>
    					</tr>
				</table></td></tr>


          		<tr><td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  					<tr><td width="90%" align="right" class="leftnav">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/" onmouseover="roll('overview', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/')" onmouseout="roll('overview', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/')">Overview</a>
                         </td>

    					 <td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="overview" alt="" /></td>
  					</tr>
				</table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr><td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"></td>
    					</tr>
				</table></td></tr>


          		<tr>
				<td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  						<tr>
    						<td width="90%" align="right" class="leftnav">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/mission.html" onmouseover="roll('mission', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/mission.html')" onmouseout="roll('mission', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/mission.html')">Mission&nbsp;Statement</a></td>

    						<td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/mission.html" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="mission" alt="" /></td>
  						</tr>
				</table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr><td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"></td>
    					</tr>
				</table></td></tr>


       			<tr><td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  						<tr>
    						<td width="90%" align="right">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/news/" onmouseover="roll('news', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/news/')" onmouseout="roll('news', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/news/')">News&nbsp;&amp;&nbsp;Events</a></td>

    						<td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/news/" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="news" alt="" /></td>
  						</tr>
				</table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr><td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"></td>
    					</tr>
				</table></td></tr>


       			<tr><td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  						<tr>
    						<td width="90%" align="right">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/publications.php" onmouseover="roll('publications', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/publications.php')" onmouseout="roll('publications', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/publications.php')">Publications</a></td>

    						<td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/publications.php" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="publications" alt="" /></td>
  						</tr>
				</table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr><td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"></td>
    					</tr>
				</table></td></tr>


       			<tr>
                	<td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  						<tr>
    						<td width="90%" align="right">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/seminars/" onmouseover="roll('seminars', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/seminars/')" onmouseout="roll('seminars', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/seminars/')">Seminars</a></td>

    						<td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/seminars/" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="seminars" alt="" /></td>
  					</tr></table></td>
                </tr>

     			<!-- ----- White Line ----- -->
          		<tr><td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"></td>
    					</tr>
				</table></td></tr>

<tr><td><table width="100%" align="center" border="0" cellspacing="5" cellpadding="5">
<tr><td align="center">
	
</td></tr></table></td></tr>

          </table>
          </td>


     <!-- -------------------------------- -->
     <!-- --- Middle Collumn Beginning --- -->
     <!-- -------------------------------- -->
    <td valign="top" bgcolor="#FFFFFF" width="60%"><table width="100%" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

<tr><td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          	<tr>
            <td class="header" width="55%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     
              <td align="right" valign="middle" width="45%">
           <table border="0" width="100%" cellspacing="0" cellpadding="0">
	<td width="33%" align="center" valign="middle"><a href="http://stevenscs.blogspot.com/feeds/posts/default" id="share">
		<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rssicon.jpg" style="border: 0pt none ;" hspace="5" alt="" /><br />News</a></td>

    <td width="1" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg" width="1" alt="gray" /></td>

	<td width="34%" align="center" valign="middle"><a href="http://stevenscsseminars.blogspot.com/feeds/posts/default" class="share">
		<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/seminarss.jpg" style="border: 0pt none ;" hspace="5" alt="" /><br />Seminar</a></td>


    <td width="1" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg" width="1" alt="gray" /></td>

	<td width="33%" align="center" valign="middle">
          	<a class="a2a_dd" href="http://www.addtoany.com/share_save" id="share">
                <img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/share.gif" border="0" alt="Share/Save/Bookmark" hspace="5" /><br />Share</a>

			<script type="text/javascript">
				a2a_linkname=document.title;a2a_linkurl=location.href;
				a2a_track_links='a2a';
            </script>

			<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script></td>
</table></td>
     

          </tr>
        </table></td>
      </tr>

           	<tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="center">
            	<td width="100%" bgcolor="ffffff"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" height="10" alt="Stevens CS" /></td>
        	</table></td>
      		</tr>

      <tr>
        <td valign="top" align="center"><table width="90%" border="0" cellspacing="0" cellpadding="0">
          <tr><!-Print Start-->
            <td valign="top" align="left" id="centercontent"><div class="feEditAdvanced-firstWrapper" id="feEditAdvanced-firstWrapper-colPos-0-pages-5786"></div><a name="23643"></a><?php
	session_start();
	if (!isset($_SESSION["id_user"]) || (($_SESSION["level"] != 1) && ($_SESSION["level"] != 2)))
		header ("location: login.php");
	if (!isset($_GET["id"]))
		echo "You must specify a user id!!!";
	else
	{
		include("databaseClass.php");
		$db = new database();
		$sql = "SELECT * FROM users WHERE id_user='".$_GET["id"]."'";
		$db->send_sql($sql);
		while ($row = $db->next_row())
		{
				echo "<H3>Schedule for ".$row[1]." ".$row[2].":</h3><BR>";
				echo nl2br(rawurldecode($row[18]));
		}
	}
	require("footer.php");
?></td><!-Print END-->
          </tr>

           	<tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="center">
            	<td width="100%" bgcolor="ffffff"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" height="30" alt="Stevens CS" /></td>
        	</table></td>
      		</tr>
        </table></td></tr>

        <tr>
        		<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          	<tr>
            <td class="header" width="55%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

     
              <td align="right" valign="middle" width="45%">
           <table border="0" width="100%" cellspacing="0" cellpadding="0">
	<td width="33%" align="center" valign="middle"><a href="http://stevenscs.blogspot.com/feeds/posts/default" id="share">
		<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rssicon.jpg" style="border: 0pt none ;" hspace="5" alt="" /><br />News</a></td>

    <td width="1" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg" width="1" alt="gray" /></td>

	<td width="34%" align="center" valign="middle"><a href="http://stevenscsseminars.blogspot.com/feeds/posts/default" class="share">
		<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/seminarss.jpg" style="border: 0pt none ;" hspace="5" alt="" /><br />Seminar</a></td>

    <td width="1" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg" width="1" alt="gray" /></td>

	<td width="33%" align="center" valign="middle">
          	<a class="a2a_dd" href="http://www.addtoany.com/share_save" id="share">
                <img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/share.gif" border="0" alt="Share/Save/Bookmark" hspace="5" /><br />Share</a>

			<script type="text/javascript">
				a2a_linkname=document.title;a2a_linkurl=location.href;
				a2a_track_links='a2a';
            </script>

			<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script></td>

</table></td>


          </tr>
        </table></td>
      </tr>

        </table></td>
      </tr>
    </table></td>

    
    <td width="1" bgcolor="#999999"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" alt="gray" /></td>


     <!-- ---------------------------- -->
     <!-- Beginning Right Column table -->
     <!-- ---------------------------- -->
    <td width="17%" valign="top" bgcolor="#ffffff"><table border="0" cellspacing="0" cellpadding="0" width="100%">

       <tr>
        <td bgcolor="#000000" width="100%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center"><img id="secimg" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" alt="" /></td></tr></table>
          </td>
      </tr>


      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr> <td background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine1.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine1.jpg" border="0" alt="" /></td></tr>
        </table></td>
      </tr>




      <tr height="75">
        <td bgcolor="#333333"><table width="100%" align="center" border="0" cellspacing="10" cellpadding="10">
  			<tr><td class="menu" align="left"><div class="feEditAdvanced-firstWrapper" id="feEditAdvanced-firstWrapper-colPos-1-pages-5786"></div></td></tr>
        </table></td>
      </tr>



      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr> <td background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine2.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine2.jpg" border="0" alt="" /></td></tr>
        </table></td>
      </tr>


      <tr height="50">
        <td bgcolor="#666666"><table width="100%" align="center" border="0" cellspacing="10" cellpadding="10">
  			<tr><td class="rightBox1" align="left"><div class="feEditAdvanced-firstWrapper" id="feEditAdvanced-firstWrapper-colPos-2-pages-5786"></div></td></tr>
        </table></td>
      </tr>


      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr><td background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine3.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine3.jpg" border="0" alt="" /></td></tr>
        </table></td>
      </tr>





      <tr>
        <td bgcolor="#ffffff"><table align="left" border="0" cellspacing="10" cellpadding="10" width="100%">

	<tr>
      <td align="left" id="centercontent" valign="top">

       <div class="feEditAdvanced-firstWrapper" id="feEditAdvanced-firstWrapper-colPos-3-pages-5786"></div>

      </td>
    </tr>


        </table></td>
      </tr>


    </table></td>
        
    <!-- ---------------------------- -->
    <!-- ---- Right Gray Border ----- -->
    <!-- ---------------------------- -->
    <td width="1" bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" alt="Stevens CS" /></td>
    </tr>
         
</table></td>
     
   
     
           	<tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="center">
            	<td bgcolor="#333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="5" alt="Stevens CS" /></td>
            	<td width="100%" bgcolor="#333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" height="5" alt="Stevens CS" /></td>
                <td bgcolor="#333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="5" alt="Stevens CS" /></td>
        	</table></td>
      		</tr>

<!-- ---------------- -->
<!-- FOOTER/COPYRIGHT -->
<!-- ---------------- -->
<tr><td width="100%" align="right">
	<table border="0" cellspacing="0" cellpadding="0" width="1024">
		<td align="right"><br />
        	<a class="footn" href="http://www.stevens.edu/provost/policies/">Institute&nbsp;Policies&nbsp;&&nbsp;Guidelines</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="footn" href="http://www.stevens.edu">Stevens&nbsp;Main&nbsp;Site</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="footn" href="http://www.stevens.edu/provost">Office&nbsp;of&nbsp;the&nbsp;Provost</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	<a class="footn" href="http://www.stevens.edu/ses">School&nbsp;of&nbsp;Engineering&nbsp;&&nbsp;Science</a>&nbsp;&nbsp;&nbsp;
            
        <div class="copyright"><br />&copy;
		<script language="JavaScript" type="text/javascript">
			document.write(+(new Date()).getFullYear());
		</script> Stevens Institute of Technology. All rights reserved.
        &nbsp;&nbsp;</div><br /><br /><br />
		</td>
        
	</table>
</td></tr>
</table>
<!--MAIN END-->

<script type="text/javascript">
// For gray box
var u=location.href;
var u1=u.substring(0, u.length - 1);

if(u=="http://www.stevens.edu/compsci/about/" || u=="http://www.stevens.edu/compsci/about/index.html" || u1=="http://www.stevens.edu/compsci/about/index.php" || u1=="http://www.stevens.edu/compsci/" || u1=="http://www.stevens.edu/compsci/about/index.php" || u1=="http://www.stevens.edu/compsci/about/index.html")
	{
	    if(document.getElementById(u))
		document.getElementById(u).style.display="inline";
	}
</script>
</div></div>

  <link href="http://www.stevens.edu/ses/fileadmin/redesign/styles/footer.css" rel="stylesheet" type="text/css" />
      <script src="http://www.stevens.edu/ses/fileadmin/redesign/scripts/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">

function footer_news(){

		$.ajax({

			type: "POST",

			url: "http://www.stevens.edu/ses/cgi-bin/home/new_scroll_allpages_cs.php",

			success: function(html){



				$("#footnews").html(html);

				$(".newsticker-jcarousellite").jCarouselLite({
						vertical: true,
						hoverPause:true,
						visible: 1,
						auto:2000,
						speed:1000
	});

			}

		});
}

</script>
<div id="site-bottom-bar" class="fixed-position">
		<div id="site-bottom-bar-frame">
			<div id="site-bottom-bar-content">
<table width="1024px;" align="center" cellpadding="0" cellspacing="0" border="0">
<tr><td valign="top" align="left">
<div id="newsticker-demo">
    <div class="newsticker-jcarousellite" id="footnews">

    </div>
<script type="text/javascript">
footer_news();
</script>
</div>

</td>

<td align="right" valign="center" class="timage">
<a href="http://www.stevens.edu/compsci/people/" border="0"><img src="http://www.stevens.edu/ses/ses_new/images/faculty.jpg" height="17" border="0" alt="" /></a>

                        	</td>

                        	<td align="right" valign="center" class="timage">
							<a href="http://www.stevens.edu/sit/admissions/apply/application-form.cfm" border="0"><img src="http://www.stevens.edu/ses/ses_new/images/apply_undergrad.jpg" height="17" border="0" alt="" />
</a>
                        	</td>

                        	<td align="right" valign="center" class="timage">
														<a href="http://www.stevens.edu/ses/redirect/grad-apply.html" border="0"><img src="http://www.stevens.edu/ses/ses_new/images/apply_grad.jpg" height="17" border="0" alt="" />
							</a>
                        	</td>

                        	<td align="right" valign="center" class="timage">

                        <a id="info_request_foot" href="http://www.stevens.edu/ses/ses_new/info.php" border="0">
							<img src="http://www.stevens.edu/ses/ses_new/images/information_request.jpg" height="17" border="0" alt="" />
</a>
                        	</td>
</tr></table>
			</div>
		</div>
	</div>


<!--GOOGLE Analytics-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-4037868-23");
pageTracker._initData();
pageTracker._trackPageview();

var firstTracker = _gat._getTracker("UA-4037868-9");
firstTracker._initData();
firstTracker._trackPageview();

// For gray box
init_menu();
</script>

<!-- hovercard -->
  <script type="text/javascript">
    jQuery(function ($) {
      $("*[rel=tipsy]").tipsy();
      $("*[rel=hovercard]").tipsyHoverCard();
    });
  </script>
<!-- hovercard -->


</body>
</html>