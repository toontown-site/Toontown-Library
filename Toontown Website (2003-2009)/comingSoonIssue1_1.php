


<html>
<head>
  <title>Toontown.com, </title>
  <script>
function submitForm(id) {
  document.forms[id].submit();
}

function imgOn(imageName) {
if (document.images) {
    document.images[imageName].src = eval(imageName + "_on.src");
  }
}

function imgOff(imageName) {
  if (document.images) {
    document.images[imageName].src = eval(imageName + "_off.src");
  }
}

</script>  <META HTTP-EQUIV="Pragma" CONTENT="no-cache"></head>


<HEAD> 
<!--START BREADCRUMB JAVASCRIPT--> 
<SCRIPT LANGUAGE="JavaScript"> 

<!--
var space = "&nbsp;";
var space2 = "&gt;";
var breadCrumb = "<font color=#ffffff face=arial,helvetica size=-2>" + space + space + space2 + space + space + "</font><a href='http://transfer.go.com/cgi/transfer.dll?srvc=dis&goto=http://disney.go.com/kids/&name=mchrome_kids'><font color='#ffffff' face='arial,helvetica' size='-2'>Kids Island</font></a><font color=#ffffff face=arial,helvetica size=-2>" + space + space + space2 + space + space + "</font><a href='http://disney.go.com/preview/toontown/special_offer/'><font color='#ffffff' face='arial,helvetica' size='-2'>Disney's Toontown Online</font></a>";
//-->

</SCRIPT> 
<!--END BREADCRUMB--> 
</HEAD> 




<table width="770" cellspacing="0" cellpadding="0" border="0" align="center"> 
        <tr><td> 
<!-- START CHROME --> 
<SCRIPT language="JavaScript" src="http://disney.go.com/globalmedia/chrome/blueMicroChromeWide.js"></SCRIPT> 
<!-- END CHROME --> 
        </td></tr> 
</table> 





<body bgcolor=#4477ff text=#000000 link=#4477ff vlink=#4455bb alink=#ff5555
    leftmargin=0 topmargin=0 marginwidth=0 marginheight=0  >
<font face="verdana, arial, helvetica, sans-serif" size="1">
<table width="718" align=center border=0 cellpadding="0" cellspacing=0 bgcolor=#ffffff>
<tr>

<td valign=top align=left><table width=718 height=151 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
  <tr><td valign=top align=right background="http://media.toontown.com/toontown/sv1.4.18/images/cloud_header_left.jpg">
  <font size=-2></font>
  
<script>

if (document.images) {
  button_postcard_on = new Image();
  button_postcard_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_postcard_on.gif";
  button_postcard_off = new Image();
  button_postcard_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_postcard.gif";
}
</script>
    <a href="http://disney.go.com/dcards/toontown/index.html"
    onMouseOver="imgOn('button_postcard')"
    onMouseOut="imgOff('button_postcard')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.18/images/button_postcard.gif" name="button_postcard"></a><br>
  </td>

<td colspan="4" align=right valign=top><a href="main.php">
<img border=0 width=597 height=151 src="http://media.toontown.com/toontown/sv1.4.18/images/cloud_header_right.jpg"></a></td>


</tr>
<tr>

<td valign=top align=left><table width=121 height=538 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
  <tr><td valign=top align=right background="http://media.toontown.com/toontown/sv1.4.18/images/cloud_leftBar.jpg">
  <font size=-2><br></font>
  
<script>

function DoAccount() {
  window.open("https://account.toontown.com/frame1.html","","height=480,width=640,resizable=no,scrollbars=yes,menubar=no");
}

function playClick() {
  var agt=navigator.userAgent.toLowerCase();
  var is_major = parseInt(navigator.appVersion);
  var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));
  var is_ie4up  = (is_ie && (is_major >= 4));

  if(is_ie4up) {
      navigate("play.php?source=toontownDotComPlayButton");
   } else {
    alert("Toontown does not currently support this web browser.  Please launch Toontown\nusing a recent version of Microsoft Internet Explorer (5 or newer).");
   }
}

if (document.images) {
  button_about_on = new Image();
  button_about_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_about_on.gif";
  button_about_off = new Image();
  button_about_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_about.gif";

  button_screenshots_on = new Image();
  button_screenshots_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_screenshots_on.gif";
  button_screenshots_off = new Image();
  button_screenshots_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_screenshots.gif";

  button_faq_on = new Image();
  button_faq_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_faq_on.gif";
  button_faq_off = new Image();
  button_faq_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_faq.gif";

  button_news_on = new Image();
  button_news_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_news_on.gif";
  button_news_off = new Image();
  button_news_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_news.gif";

  button_comingsoon_on = new Image();
  button_comingsoon_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_comingsoon_on.gif";
  button_comingsoon_off = new Image();
  button_comingsoon_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_comingsoon.gif";

  button_backstage_on = new Image();
  button_backstage_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_backstage_on.gif";
  button_backstage_off = new Image();
  button_backstage_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_backstage.gif";

  button_reportbug_on = new Image();
  button_reportbug_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_reportbug_on.gif";
  button_reportbug_off = new Image();
  button_reportbug_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_reportbug.gif";

  button_account_on = new Image();
  button_account_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_account_on.gif";
  button_account_off = new Image();
  button_account_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_account.gif";


  play_on = new Image();
  play_on.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_play_on.gif";
  play_off = new Image();
  play_off.src = "http://media.toontown.com/toontown/sv1.4.18/images/button_play.gif";
}
</script>
    <a href="about.php"
    onMouseOver="imgOn('button_about')"
    onMouseOut="imgOff('button_about')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.18/images/button_about.gif" name="button_about"></a><br>
  <a href="comingSoon.php"
    onMouseOver="imgOn('button_comingsoon')"
    onMouseOut="imgOff('button_comingsoon')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.18/images/button_comingsoon.gif" name="button_comingsoon"></a><br>
  <a href="backStage.php"
    onMouseOver="imgOn('button_backstage')"
    onMouseOut="imgOff('button_backstage')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.18/images/button_backstage.gif" name="button_backstage"></a><br>
  <a href="news.php"
    onMouseOver="imgOn('button_news')"
    onMouseOut="imgOff('button_news')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.18/images/button_news.gif" name="button_news"></a><br>
  <img border=0 src="http://media.toontown.com/toontown/sv1.4.18/images/button_account.gif" name="button_account"
    onMouseOver="imgOn('button_account')"
    onMouseOut="imgOff('button_account')"
    onClick="DoAccount()"><br>
  <a href="faq.php"
    onMouseOver="imgOn('button_faq')"
    onMouseOut="imgOff('button_faq')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.18/images/button_faq.gif" name="button_faq"></a><br>
  <a href="problem.php"
    onMouseOver="imgOn('button_reportbug')"
    onMouseOut="imgOff('button_reportbug')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.18/images/button_reportbug.gif" name="button_reportbug"></a><br>
  <table border=0 cellspacing=0><tr><td height=5></td></tr></table>
  <img border=0 onClick="playClick()" onMouseOver="imgOn('play')" onMouseOut="imgOff('play')"
        src="http://media.toontown.com/toontown/sv1.4.18/images/button_play.gif" name="play"><br>
  </td></tr>
  <tr><td valign=top><img width=121 height=57 src="http://media.toontown.com/toontown/sv1.4.18/images/vrstudio_logo.gif"></td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="http://media.toontown.com/toontown/sv1.4.18/images/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="http://media.toontown.com/toontown/sv1.4.18/images/cloud_headerTrim2.jpg"><br>


<table border="0" cellspacing="0" cellpadding="0" width=434 align="center">
<tr>
<td>


<!-- START CENTER CONTENT -->
<table width="434" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<font face="arial" color="red" size="2">
<b>TOONTOWN NEWSFLASH:<br>
<font size="1">Issue 1, February 20, 2003</font></b><br><br>
</font>
</td><td align="right" valign="top">
<font face="arial" color="red" size="2"><strong>1</strong></font>
<font face="arial" color="red" size="2"><strong> of </strong></font>
<a href="comingSoonIssue1_2.php"><font face="arial" color="red" size="2"><strong>2</strong></font></a>&nbsp;
</td></tr>
<tr><td align="center" colspan="2"><img src="images/TTCS1_Title.jpg" width="418" height="31" alt="" border="0"></td></tr>
<tr>
<td colspan="2"><font face="arial,verdana" size="2" color="#000066">
<br>
<font color="red"><b>Special Report from Toon Headquarters:</b></font><br><br>
The battle on the streets of Toontown is about to become more
intense and exciting than ever! Special intelligence reports from
<img src="images/TTCS1_Graphic.jpg" width="206" height="156" alt="" border="0" align="right" hspace="5" vspace="5">
Toontown HQ are warning of coordinated attacks that are expected
to arrive soon. Reports have confirmed that the streets of
Toontown will be raided by swarms of high-level COGs.
Legal Eagles, Corporate Raiders, Big Cheeses and
others are leaving their comfortable office buildings to
join the street battles. Why these attacks occur is unknown at this time, but they are expected
to last from several minutes to several hours.  
<br><br>
All Toons are needed to stop these random attacks!  Toon HQ has
authorized double experience points for all gags used during these
invasions. That's right, every pie thrown or anvil dropped will count
for two!        
<br><br>
Keep your eyes on the sky and prepare to help - the COG invasions
are coming!!!


</font>
</td>
</tr>
<tr>
<td colspan="2">
<br>
<table border="0" align="right">
<tr>
<td><a href="comingSoonIssue1_2.php"><img src="images/TTBut_Next.jpg" width="80" height="29" alt="" border="0"></a></td>
</tr>
</table>
</td>
</tr>
</table>
<!-- END CENTER CONTENT -->

              </td>
            </tr>
          </table>
<p/>
<div align="CENTER">
<table border=0 cellpadding=0 cellspacing=0>
    <tr>
      <td>
        <div align="center"><font face="verdana, arial, helvetica, sans-serif" size="1">
          <div align="CENTER" style="margin-top:3px; font-size:10pt;">
            <a href="http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi?template=toontown/toonhelp.tpl" target=_blank>
            Contact Us</a>
&nbsp;&nbsp;|&nbsp;&nbsp; 
            <a href="http://disney.go.com/legal/privacy_policy.html" target="_top">
            <b>Privacy Policy</b></a>
&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="http://disney.go.com/legal/internet_safety.html">Internet
            Safety</a>
</div>
            <div align="CENTER" style="margin-top:5px; font-size:8pt;">Use
            of this site signifies your agreement to the 
            <a href="http://disney.go.com/legal/conditions_of_use.html">terms
            of use</a>.</div>
            <div align="CENTER" style="margin-top:3px; font-size:8pt;">
            <a href="\memberAgreement.php">Member Agreement</a>&nbsp|&nbsp
            <a href="http://disney.go.com/guestservices/netiquette.html">House Rules</a>
</div>
            <div align="CENTER" style="margin-top:3px; font-size:8pt;">&copy;
            Disney. All rights reserved.</div>
          </font></div>
      </td>
    </tr>
  </table>
  <p/>
<!-- Copyright 2002, Walt Disney Imagineering, all rights reserved. -->
</div>
</td>
<td valign=top align=left><img border=0 width=47 height=438 src="http://media.toontown.com/toontown/sv1.4.18/images/cloud_rightTrim2.jpg"></td>
<td valign=top align=left><img border=0 width=74 height=438 src="http://media.toontown.com/toontown/sv1.4.18/images/cloud_rightBar.jpg"></td>

</tr>

</table>
</font>
</body>
  <head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    </head></html>
