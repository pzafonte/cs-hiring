<?PHP //header("location:index.html");
?>

<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!-- 
	This website is powered by TYPO3 - inspiring people to share!
	TYPO3 is a free open source Content Management Framework initially created by Kasper Skaarhoj and licensed under GNU/GPL.
	TYPO3 is copyright 1998-2008 of Kasper Skaarhoj. Extensions are copyright of their respective owners.
	Information and contribution at http://typo3.com/ and http://typo3.org/
-->

	<link rel="stylesheet" type="text/css"  href=''  />
<link REL="SHORTCUT ICON" HREF="http://www.stevens.edu/engineering/images/fileadmin/images/stevens2.ico">
	<title>Teaching Faculty Application Form</title>
	<meta name="generator" content="TYPO3 4.3 CMS" />
	<script type="text/javascript"  src='' ></script>

</head>
<body bgcolor="#000000" >

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

					document.images[url1].src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg";

				}
			}

function roll(img_name, img_src, leftnav)
   			{
				if(leftnav!=url1)
  					document[img_name].src = img_src;
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
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
			init_menu();
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

//-->
</script>

<script>
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


<!--MAIN CONTAINER-->
<table align="center" bgcolor="#000000" border="0" cellspacing="0" cellpadding="0" width="1024">
 
<!--MILONIC WATERMARK-->
<div style="display: none;visibility:hidden;"><a href=http://www.milonic.com/>JavaScript Menu Courtesy of Milonic.com</a></div>

<!-- ---------- --> 
<!-- Top Header -->
<!-- ---------- --> 
<tr><td width="100%">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000"> 
   		<td width="1" bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" title="Stevens Computer Science" alt="Stevens Computer Science" /></td>
		<td width="144" valign="bottom">
        	<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/stevensLogoTop.jpg" border="0" /></td>
		<td width="507" valign="bottom">
        	<a href="http://www.stevens.edu/ses/"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/engineeringBanner.jpg" border="0" title="Engineering & Science" alt="Engineering & Science" /></a></td>
             
		<!--SEARCH BAR/BUTTON-->
		<td id="search" valign="bottom">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/pplFinderBg.jpg"><tr>
                	<td>&nbsp;<a href="http://www.stevens.edu/compsci/people/people-finder.html" class="pplfinder">People&nbsp;Finder</a>&nbsp;</td>
                    <td>&nbsp;<a id='various3' href="https://secure.entango.com/donate/E8WCknqSPEc" title="Make a gift" class="pplfinder">Make&nbsp;a&nbsp;Gift</a>&nbsp;&nbsp;&nbsp;</td>
				<form name="gsearch" action="http://stevens.edu/compsci/search/" id="cse-search-box" >
                	<td align="right" valign="middle">		 
						<input name="q"  id="fdse_Terms" maxlength="50" alt="search" class="searchbox" type="text" size="20" value="Site search here..."  
                		onclick="this.style.backgroundColor='BLACK';if(this.value=='Site search here...') this.value='';" />
              			
                        <input type="hidden" name="cx" value="014514028864937595251:zlcccmebk38" />
			  			<input type="hidden" name="cof" value="FORID:11" /></td>
                        
                     <td align="right">
                        <a href="#" onClick="document.gsearch.submit();" title="Submit Search" 
                            onmouseover="roll('search', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/goButton_over.png')" onMouseOut="roll('search', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/goButton.png')">
                        <img name="search" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/goButton.png" border="0" /></a>
                     </td>
                </form>
          	</tr></table>
         </td>
   		<td width="1" bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" title="Stevens Computer Science" alt="Stevens Computer Science" /></td>
                        
    	</table>
</td></tr>
 

<!-- --------- -->   
<!---CS BANNER--->
<!-- --------- --> 
<tr>
	<td align="center" width="100%"><table background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/main_banner.jpg" border="0" cellspacing="0" cellpadding="0">
  	<tr>
    	<td><a href="http://www.stevens.edu" target="_blank"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/stevensLogo.jpg" border="0" /></a></td>
    	<td width="100%" valign="bottom" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/computerScienceBanner.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	<a href="http://www.stevens.edu/compsci/" target="_top" class="csbanner" title="Stevens Computer Science Homepage" alt="Stevens Computer Science Homepage">COMPUTER SCIENCE</a></td>
   
  </tr>
  </table></td>
</tr>


     <!-- ---------------------------- -->
     <!-- ----- Top Navigation----------->
     <!-- ---------------------------- -->
<tr><td align="left" width="100%"><table width="100%" bgcolor="#000000" border="0" cellspacing="0" cellpadding="0">
    	<td bgcolor="#333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="40"></td>
    	<td width="100%" align="left">
			<script type="text/javascript" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/scripts/menu_data.js"></script>
        </td>
        <td bgcolor="#333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1"></td>
	</table></td>
</tr>

    <!-- ---------------------------- -->
    <!----------- Body Table -------- -->
    <!-- ---------------------------- -->
<tr>
	<td align="center" width="100%">
    <table width="100% "border="0" cellspacing="0" cellpadding="0" align="center"><tr>

    <!-- ---------------------------- -->
    <!-- ----- Left Gray Border ----- -->
    <!-- ---------------------------- -->
   	<td width="1" bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" alt="Stevens CS"></td>

     <!-- ---------------------------- -->
     <!-- --- Left Collumn Beginning -- -->
     <!-- ---------------------------- -->
    <td valign="top" width="23%" bgcolor="#cccccc"><table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr><td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                	<tr height="40"><td align="right"><table width="100%" border="0" cellspacing="4" cellpadding="4" bgcolor="#175b63">
  						<tr>
                        	<td width="87%" align="right" class="leftnavheader">CS&nbsp;SEARCH</td>
    						<td width="13%" align="center"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/pagetitle_bullet.jpg"></td>
  						</tr>
                     </table></td></tr>
           </table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr>
                	<td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="1" alt="space"></td>
    				</tr></table></td>
                </tr>


          		<tr><td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  					<tr><td width="90%" align="right" class="leftnav">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/" onmouseover="roll('overview', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/')" onMouseOut="roll('overview', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/')">Overview</a>
                         </td>

    					 <td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="overview" /></td>
  					</tr>
				</table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr>
                	<td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="1" alt="space"></td>
    				</tr></table></td>
                </tr>


          		<tr>
				<td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  						<tr>
    						<td width="90%" align="right" class="leftnav">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/mission.html" onmouseover="roll('mission', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/mission.html')" onMouseOut="roll('mission', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/mission.html')">Mission&nbsp;Statement</a></td>

    						<td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/mission.html" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="mission" /></td>
  						</tr>
				</table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr>
                	<td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="1" alt="space"></td>
    				</tr></table></td>
                </tr>


       			<tr><td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  						<tr>
    						<td width="90%" align="right">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/news/"  onmouseover="roll('news', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/news/')" onMouseOut="roll('news', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/news/')">News&nbsp;&amp;&nbsp;Events</a></td>

    						<td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/news/" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="news" /></td>
  						</tr>
				</table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr>
                	<td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="1" alt="space"></td>
    				</tr></table></td>
                </tr>


       			<tr><td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  						<tr>
    						<td width="90%" align="right">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/publications.php"  onmouseover="roll('publications', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/publications.php')" onMouseOut="roll('publications', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/publications.php')">Publications</a></td>

    						<td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/publications.php" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="publications" /></td>
  						</tr>
				</table></td></tr>


     			<!-- ----- White Line ----- -->
          		<tr>
                	<td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="1" alt="space"></td>
    				</tr></table></td>
                </tr>


       			<tr>
                	<td bgcolor="#cccccc"><table width="100%" border="0" cellspacing="5" cellpadding="5" bgcolor="#cccccc" id="leftnav">
  						<tr>
    						<td width="90%" align="right">
                            <a style="text-decoration:none; FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #336666; FONT-FAMILY: 'Trebuchet MS', Arial, Helvetica, sans-serif" href="http://www.stevens.edu/compsci/about/seminars/"  onmouseover="roll('seminars', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray_bullet.jpg', 'http://www.stevens.edu/compsci/about/seminars/')" onMouseOut="roll('seminars', 'http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg', 'http://www.stevens.edu/compsci/about/seminars/')">Seminars</a></td>

    						<td width="10%" align="center"><img id="http://www.stevens.edu/compsci/about/seminars/" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/graybox.jpg" border="0" name="seminars" /></td>
  					</tr></table></td>
                </tr>

     			<!-- ----- White Line ----- -->
          		<tr>
                	<td bgcolor="#ebebeb"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  						<tr><td align="right" width="1" height="1"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="1" alt="space"></td>
    				</tr></table></td>
                </tr>

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
     <!-- ------------------------- -->
     <!-- --- Share Icons START ------>
     <!-- ------------------------- -->
              <td align="right" valign="middle" width="45%">
           <table border="0" width="100%" cellspacing="0" cellpadding="0">
	<td width="33%" align="center" valign="middle"><a href="http://stevenscs.blogspot.com/feeds/posts/default" id="share">
		<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rssicon.jpg" style="border: 0pt none ;" hspace="5" /><br />News</a></td>

    <td width="1" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg" width="1" alt="gray"></td>

	<td width="34%" align="center" valign="middle"><a href="http://stevenscsseminars.blogspot.com/feeds/posts/default" class="share">
		<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/seminarss.jpg" style="border: 0pt none ;" hspace="5" /><br />Seminar</a></td>


    <td width="1" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg" width="1" alt="gray"></td>

	<td width="33%" align="center" valign="middle">
          	<a class="a2a_dd" href="http://www.addtoany.com/share_save" id="share">
                <img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/share.gif"
		border="0" alt="Share/Save/Bookmark" hspace="5" /><br />Share</a>

			<script type="text/javascript">
				a2a_linkname=document.title;a2a_linkurl=location.href;
				a2a_track_links='a2a';
            </script>

			<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script></td>
</table></td>
     <!-- ----------------------- -->
     <!-- --- Share Icons END ------>
     <!-- ----------------------- -->

          </tr>
        </table></td>
      </tr>

           	<tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="center">
            	<td width="100%" bgcolor="ffffff"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" height="10" alt="Stevens CS"></td>
        	</table></td>
      		</tr>

      <tr>
        <td valign="top" align="center"><table width="90%" border="0" cellspacing="0" cellpadding="0">
          <tr><!-Print Start-->
            <td valign="top" align="left" id="centercontent"><div class="feEditAdvanced-firstWrapper" id="feEditAdvanced-firstWrapper-colPos-0-pages-5785"></div><a name="25918"></a><table  width='100%'  border=0 cellpadding=0 cellspacing=0 ><tr><td bgcolor='#ffffff'><img src='http://www.stevens.edu/physics/fileadmin/physics/images/spacer.gif' height=14></td></tr><tr><td valign=center align=left ><font style='font-family:Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 18px; color:#006666; font-weight:bold' >CS Faculty Position Application </font></td></tr><tr><td bgcolor='#006666'><img src='http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif' height=1></td></tr></table><a name="23642"></a><?php 
$_SESSION["verify"] = "wroshyr";
?>
<SCRIPT LANGUAGE="JavaScript">
	function passCheck()
	{
		var ret = true;
		if (document.form1.pass.value == "")
		{
			 ret = confirm("Warning: You are strongly advised to create a password when creating your profi
le\nIf you do not enter a password, you will not be able to edit your profile after it has been submitted\nPlease confi
rm that you do NOT want a password.");
		}
		if (document.form1.pass.value != document.form1.pass2.value)
		{
			alert("Sorry, the password you entered does not match the password\nyou created for your profil
e, please try again.");
			form1.pass2.value = "";
			form1.pass2.focus();
			ret = false;
		}
		return ret;
	}
		
	function emailCheck()
	{
		if (document.form1.email.value == "")
		{
			alert("You must enter an email address\nso we have a way of contacting you.");
			return false;
		}
		// REG EXP WILL GO HERE
		return true;
	}

	function fileCheck()
	{
		var cv = document.form1.cv.value;
		var ts = document.form1.ts.value;
		var rs = document.form1.rs.value;
		if ((cv == "") || (cv.substr(cv.length - 4) != ".pdf"))
		{
			alert ("You must provide a CV in pdf format.");
			return false;
		}
		if ((ts == "") || (kc.substr(ts.length - 4) != ".pdf"))
		{
			alert ("You must provide a Teaching Statement in pdf format.");
			return false;
		}
		return true;
	}	

	function checkForm()
	{
		if (document.form1.name.value == "")
		{
			alert("You must enter a first name.");
			return false;
		}
		if (document.form1.surname.value == "")
		{
			alert("You must enter a surname.");
			return false;
		}
		if (!emailCheck())
			return false;
		if (document.form1.tel.value == "")
		{
			alert("You must enter a telephone number.");
			return false;
		}
                if (!fileCheck())
                        return false;
		if (!passCheck())
			return false;
		return true;
	}		
			
</SCRIPT>
<p>
Please fill in the form below to submit your application for a computer science faculty position:
</p>
<p>
        <b>Note:</b> Providing a password will allow you to subsequently edit your application, by logging back into the application site using the email and password you provided when you initially registered and submitted your applicati
on.
</P>
<form action="register.php" method="POST" name="form1" enctype="multipart/form-data">
<p>
<TABLE width=600>
<TR>
	<TD>
		First Name:
	</TD>
	<TD>
		<input type="text" name="name" size="30" maxlength="30">
	</TD>
</TR>
<TR>
	<TD>
		Last Name:
	</TD>
	<TD>
		<input type="text" name="surname" size="30" maxlength="30">
	</TD>
</TR>
<TR>
	<TD>
		Telephone:
 	</TD>
	<TD>
		<input type="text" name="tel" size="30" maxlength="15">
		<input type="hidden" name="type" value="T" />
	</TD>
</TR>
<!--
<tr>
<td>
        Research Area(s): <br/>&nbsp;<br/>&nbsp;
</td>
<td>
<input type="checkbox" name="ml" value=1>Machine Learning<br/>
<input type="checkbox" name="ss" value=1>Secure Systems</BR> <!-- And Cryptography<br/>
<input type="checkbox" name="vg" value=1>Computer Vision & Graphics<br/>
<input type="checkbox" name="ese" value=1>Experimental Software Engineering<br/>
<input type="checkbox" name="net" value=1>Networking<br/>
<input type="checkbox" name="oth" value=1>Other
</td>
</tr>
-->
        <tr><td>&nbsp;</td></tr>
<TR>
	<TD>
		Email:
	</TD>
	<TD>
		<input type="text" name="email" size="30" maxlength="50">
	</TD>
</TR>
<TR>
	<TD>
		Password:
	</TD>
	<TD>
		<input type="password" name="pass" size="30" maxlength="20">
	</TD>
</TR>
<TR>
	<TD>
		Verify Password:
	</TD>
	<TD>
		<input type="password" name="pass2" size="30" maxlength="20" onblur="passCheck()">
	</TD>
</TR>
        <tr><td>&nbsp;</td></tr>
<TR>
	<TD>
        Curriculum Vitae:
	</TD>
	<TD>
		<input type="file" name="cv">
	</TD>
        <td>  (PDF only) </td>
</TR>
<TR>
	<TD>
        Teaching Statement:
	</TD>
	<TD>
		<input type="file" name="ts">
	</TD>
        <td>  (PDF only) </td>
</TR>
</table>
</p>
<p>
Postal Address:<BR/>
<textarea name="address" cols=60 rows=6></textarea><BR/>
<br/>
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
<!-- 
Gender: <BR/>
<input type="radio" name="gender" value="F">Female<BR/>
<input type="radio" name="gender" value="M">Male<BR/>
<BR/><BR/>
Racial/Ethnic Heritage: (Check only one) Stevens Institute of Technology is required under CFR 41 of the Department of 
Labor to give all applicants the opportunity to self-identify. This information will not in no way affect your applicat
ion for employment.<BR/>
<input type="radio" name="eth" value='W'><B>White (Not of Hispanic origin)</B> - All persons having origins in any of t
he original people of Europe, North Africa or the Middle East<BR/>
<input type="radio" name="eth" value='B'><B>Black (Not of Hispanic origin)</B> - All persons having origins in any of t
he Black racial groups of Africa<BR/>
<input type="radio" name="eth" value='H'><B>Hispanic</B> - All persons of Mexican, Puerto Rican, Cuban, Central or Sout
h American or other Spanish culture or origin, regardless of race.<BR/>
<input type="radio" name="eth" value='A'><B>Asian or Pacific Islander</B> - All persons having origins in any of the or
iginal peoples of the Far East, Southeast Asia, the Indian Subcontinent or the Pacific Islands. This area includes, for
 example, China, India, Japan, Korea, the Philippine Islands and Samoa<BR/>
<input type="radio" name="eth" value='I'><B>American Indian or Alaskan Native</B> - All persons having origins in any o
f the original peoples of North America and who maintain cultural indentification through tribal affiliation or communi
ty recognition.<BR/>
<BR/>
<br/>
Stevens Institute of Technology is an Equal Opportunity Employer committed to the policies and principles of Non-Discri
mination and Affirmative Action (AA).  To implement these policies and to respond to federal affirmative action recordk
eeping and reporting requirements, it is important that the following information be gathered from all applicants.  Pro
viding this information is optional.  Failure to submit data will not in any way affect your application for employment
.  The information provided will remain confidential and be used primarily for government reporting purposes.
-->
<br/>
<input type="submit" name="submit" value="Submit Application" onclick="return checkForm()">
</p>
</form>
<p>
Have you already applied?  You can review your application by <A HREF="login.php">logging back in.</A></p>
</td><!-Print END-->
          </tr>

           	<tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="center">
            	<td width="100%" bgcolor="ffffff"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" height="30" alt="Stevens CS"></td>
        	</table></td>
      		</tr>
        </table></td></tr>

        <tr>
        		<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          	<tr>
            <td class="header" width="55%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

     <!-- ------------------------- -->
     <!-- --- Share Icons START ------>
     <!-- ------------------------- -->
              <td align="right" valign="middle" width="45%">
           <table border="0" width="100%" cellspacing="0" cellpadding="0">
	<td width="33%" align="center" valign="middle"><a href="http://stevenscs.blogspot.com/feeds/posts/default" id="share">
		<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rssicon.jpg" style="border: 0pt none ;" hspace="5" /><br />News</a></td>

    <td width="1" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg" width="1" alt="gray"></td>

	<td width="34%" align="center" valign="middle"><a href="http://stevenscsseminars.blogspot.com/feeds/posts/default" class="share">
		<img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/seminarss.jpg" style="border: 0pt none ;" hspace="5" /><br />Seminar</a></td>

    <td width="1" background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/gray.jpg" width="1" alt="gray"></td>

	<td width="33%" align="center" valign="middle">
          	<a class="a2a_dd" href="http://www.addtoany.com/share_save" id="share">
                <img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/share.gif"
		border="0" alt="Share/Save/Bookmark" hspace="5" /><br />Share</a>

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

    <!-- ---------------------------- -->
     <!-- ----- Gray Line ------------- -->
     <!-- ---------------------------- -->
    <td width="1" bgcolor="#999999"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" alt="gray"></td>


     <!-- ---------------------------- -->
     <!-- Beginning Right Column table -->
     <!-- ---------------------------- -->
    <td width="17%" valign="top" bgcolor="#ffffff"><table border="0" cellspacing="0" cellpadding="0" width="100%">

       <tr>
        <td bgcolor="#000000" width="100%" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center"><img id="secimg" src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" /></td></tr></table>
          </td>
      </tr>


      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr> <td background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine1.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine1.jpg" border="0"></td></tr>
        </table></td>
      </tr>




      <tr height="75">
        <td bgcolor="#333333"><table width="100%" align="center" border="0" cellspacing="10" cellpadding="10">
  			<tr><td class="menu" align="left"><div class="feEditAdvanced-firstWrapper" id="feEditAdvanced-firstWrapper-colPos-1-pages-5785"></div><a name="24150"></a><a name="23864"></a><p><a href="http://www.stevens.edu/sit/admissions/apply/index.cfm" title="Opens external link in new window" target="_self" class="external-link-new-window" >Undergraduate Application</a></p>
<p><a href="https://apply.embark.com/grad/stevens/14/" target="_self" >Graduate Application</a></p>
<p><a href="http://www.stevens.edu/iss/" target="_self" >International Students</a></p></td></tr>
        </table></td>
      </tr>



      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr> <td background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine2.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine2.jpg" border="0"></td></tr>
        </table></td>
      </tr>


      <tr height="50">
        <td bgcolor="#666666"><table width="100%" align="center" border="0" cellspacing="10" cellpadding="10">
  			<tr><td class="rightBox1" align="left"><div class="feEditAdvanced-firstWrapper" id="feEditAdvanced-firstWrapper-colPos-2-pages-5785"></div><a name="24151"></a><a name="23888"></a><p><img src="/compsci/fileadmin/compsci/new/images/light_blueBox.jpg" width="11" height="11" alt="" />&nbsp;<a href="http://www.stevens.edu/provost/policies/" title="Opens external link in new window" target="popup" class="external-link-new-window" >Institute Policies</a></p>
<p><img src="/compsci/fileadmin/compsci/new/images/light_blueBox.jpg" width="11" height="11" alt="" />&nbsp;<a href="http://www.stevens.edu/ses/academics/assessment/" title="Opens external link in new window" target="popup" class="external-link-new-window" >Assessment</a></p>
<p><img src="/compsci/fileadmin/compsci/new/images/light_blueBox.jpg" alt="" />&nbsp;<a href="http://www.stevens.edu/compsci/contact/" target="_self" >Visit Stevens</a></p><a name="23892"></a><script type="text/javascript" language="JavaScript">
<!--
function popWindow(wName){
	features = 'width=400,height=200,toolbar=no,location=no,directories=no,menubar=no,scrollbars=no,copyhistory=no,resizable=no';
	pop = window.open('',wName,features);
	if(pop.focus){ pop.focus(); }
	return true;
}
-->
</script>

<script language="JavaScript">
      function showhide(id)
	  {
		 if(document.layers)           //NN4+
			{
					document.layers[id].display = "inline";
			}
			else if(document.getElementById)         //gecko(NN6) + IE 5+
			{
				var obj = document.getElementById(id);
											if(obj.style.display == "none")
								obj.style.display = "inline";
											else
								   obj.style.display = "none";
					}
			else if(document.all)   // IE 4
			{
								if(document.all[id].style.display == "none")
					document.all[id].style.display = "inline";
								else
					document.all[id].style.display = "nono";
			}
	}
</script>

<p><img src="http://soesrv04.soe.stevens-tech.edu/fileadmin/compsci/new/images/light_blueBox.jpg" />&nbsp;<a href="#" onclick=showhide("emailfrnd");>E-mail to a friend</a></p>
<div id=emailfrnd style="display:none;">


<form name="emailfrndf" action="http://www.stevens.edu/ses/thanks.php" method="post" target="Details" onSubmit="return popWindow(this.target)">
  <table border="0" cellspacing="0" cellpadding="1" background="http://www.stevens.edu/engineering/images/fileadmin/images/sub_liteBlue.jpg">
            <tr><td bgcolor="#cccccc" align=right width="100%">
            	<a href="#" onclick=showhide("emailfrnd");>Close <img src="http://www.stevens.edu/engineering/images/fileadmin/images/close.gif" border=0></a></td></tr>
    		
            <tr><td width="100%" align="left" valign="top">
        		<table width="100%" border="0" cellspacing="5" cellpadding="0" bgcolor="#cccccc">
          			<tr align="left" valign="top">
                    	<td align="right" valign="middle">To:</td>
						<td><input type="text" name="rname" size="10"></td></tr>
  	    
        		<tr align="left" valign="top">
           		   	<td align="right" valign="middle">Email:</td>
		   	  	 	<td><input type="text" name="rmail" size="10"></td></tr>
		
        		<tr align="left" valign="top">
           		 	<td>&nbsp;</td>
		     		<td>&nbsp;</td></tr>
                
				<tr align="left" valign="top">
            	  	<td align="right" valign="middle">From:</td>
            		<td><input type="text" name="sname" size="10"></td></tr>
		
        		<tr align="left" valign="top">
  			  		<td aalign="right" valign="middle"t>Email:</td>
              		<td><input type="text" name="smail" size="10"></td></tr>

				<tr align="left" valign="top">
					<td align=right width="100%">Note:</td>
					<td><textarea name="msg" cols="13" rows="5"></textarea></td></tr>

				<tr>
            		<td colspan=2 width=100% align=center>
                		<input type="hidden" name="level" value="G">
                        <input type="submit" name="Submit" value="Send Email"></td></tr>
				</table>
			</td></tr></table>
</form></td></tr>
        </table></td>
      </tr>


      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr><td background="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine3.jpg"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/rightboxLine3.jpg" border="0"></td></tr>
        </table></td>
      </tr>





      <tr>
        <td bgcolor="#ffffff"><table align="left" border="0" cellspacing="10" cellpadding="10" width=100%>

	<tr>
      <td align="left" id="centercontent" valign="top">

       <div class="feEditAdvanced-firstWrapper" id="feEditAdvanced-firstWrapper-colPos-3-pages-5785"></div><a name="24152"></a><a name="23873"></a><table width=100% border=0 cellpadding=0 cellspacing=0>
						<tr><td valign=center align=left class=hright><b><font size=2 color=#990033>Contacts&nbsp;&nbsp;</font></b></td></tr>
						<tr><td bgcolor='#990033'><img src='http://www.stevens.edu/engineering/images/fileadmin/images/spacer.gif' height=5></td></tr></table><p><strong><a href='http://www.stevens.edu/compsci/people/faculty_profile.php?faculty_id=822'> Daniel Duchamp</a><br /></strong>Research Professor & Department Director<br> Lieb<br> Room 313<br />Phone: 201.216.5390<br />Fax: 201.216.8249<br /><a href='mailto:djd@cs.stevens.edu' class='mail' >djd@cs.stevens.edu</a></p><a name="23871"></a><p><strong> Dawn Garcia<br /></strong>Administrative Assistant
<br> Lieb<br> Room 317<br />Phone: 201.216.5578<br />Fax: 201.216.8249<br /><a href='mailto:dgarcia@cs.stevens.edu' class='mail' >dgarcia@cs.stevens.edu</a></p><p><strong> Sherry Dorso<br /></strong>Assistant to the Director <br> Lieb<br />Phone: 201.216.5328<br />Fax: 201.216.8249<br /><a href='mailto:sdorso@stevens.edu' class='mail' >sdorso@stevens.edu</a></p>

      </td>
    </tr>


        </table></td>
      </tr>


    </table></td>
        
    <!-- ---------------------------- -->
    <!-- ---- Right Gray Border ----- -->
    <!-- ---------------------------- -->
    <td width="1" bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" alt="Stevens CS"></td>
    </tr>
         
</table></td>
     
   
     <!-- ---------------------------- -->
     <!-- ----- Bottom gray Line --------->
     <!-- ---------------------------- -->
           	<tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="center">
            	<td bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1" height="5" alt="Stevens CS"></td>
            	<td width="100%" bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" height="5" alt="Stevens CS"></td>
                <td bgcolor="333333"><img src="http://www.stevens.edu/compsci/fileadmin/compsci/new/images/template/spacer.gif" width="1"  height="5"  alt="Stevens CS"></td>
        	</table></td>
      		</tr>


<!-- ---------------- -->
<!-- FOOTER/COPYRIGHT -->
<!-- ---------------- -->
<tr><td width="100%">
	<table border="0" cellspacing="0" cellpadding="0" width="1024">
		<td width="900" align="right">
        	<a class="footn" href="http://www.stevens.edu/provost/policies/">Institute&nbsp;Policies&nbsp;&&nbsp;Guidelines</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="footn" href="http://www.stevens.edu">Stevens&nbsp;Main&nbsp;Site</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="footn" href="http://www.stevens.edu/provost">Office&nbsp;of&nbsp;the&nbsp;Provost</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	<a class="footn" href="http://www.stevens.edu/ses">School&nbsp;of&nbsp;Engineering&nbsp;&&nbsp;Science</a>&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
        <div class="copyright"><br />&copy;
		<script language="JavaScript" type="text/javascript">
			document.write(+(new Date()).getFullYear());
		</script> Stevens Institute of Technology. All rights reserved.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		</td>
        
        <td width="141"></td>  
	</table>
</td></tr>
</table>
<!--MAIN END-->

<script>
// For gray box
var u=location.href;
var u1=u.substring(0, u.length - 1);

if(u=="http://www.stevens.edu/compsci/about/" || u=="http://www.stevens.edu/compsci/about/index.html" || u1=="http://www.stevens.edu/compsci/about/index.php" || u1=="http://www.stevens.edu/compsci/" || u1=="http://www.stevens.edu/compsci/about/index.php" || u1=="http://www.stevens.edu/compsci/about/index.html")
	{
		document.getElementById(u).style.display="inline";
	}
</script>


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


</body>
</html>
