<?php

function showHead($activeTab, $menuItem, $pageTitle){
  showHead3($activeTab, $menuItem, "", $pageTitle);
}
function showHead2($level, $activeTab, $menuItem, $pageTitle){
  showHead3($activeTab, $menuItem, $level, $pageTitle);
}
function showHead3($activeTab, $menuItem, $level, $pageTitle){
     //include so youcan do logging of page usage, footer.php logs
     require("/users/wildlfctr/phpincludes/activityLogging.php");

     echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
      echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";
      echo "\n<head>";
      echo "\n <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
       echo "\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />";
      echo "\n<meta name=\"Keywords\" content=\"bird strike, wildlife strike,airport,safety,wildlife,bird,strike,bird strikes,wildlife strikes,birdstrike,birds,birdstrikes,wildlifestrike,airports,collision,airplane,jet,risk,incident,wildlife management,mitigation\" />";
      echo "\n<meta name=\"Description\" content=\"$pageTitle\" />";
      echo "\n<title>$pageTitle</title>";
      echo "<link href=\"${level}affiliate_shared.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">";
      echo "<link href=\"${level}affiliate.css\" rel='stylesheet' type='text/css' media='screen'>";
       echo "<link href='${level}WildlifeAffiliate.css' rel='stylesheet' type='text/css' media='screen'>";

      // Start css3menu.com HEAD section 
      echo "<link rel=\"stylesheet\" href=\"${level}css3menu/style.css\" type=\"text/css\" />";
?>
   <style>._css3m{display:none}</style>
<!-- End css3menu.com HEAD section -->
<style>
/*without these styles, the selectAirport.php page has super tiny font*/

p, td{
     font-size: 100%;
     vertical-align:top;
}
th {
     background-color: #34599D;
     color: #FFFFFF;
     font-size: 100%;
}

</style>

<?php


      echo "\n<meta name=\"google-site-verification\" content=\"LSgExMKD10PHzRTAknu2rdA4tH96yt4eFnP6kzM0gyE\"/>"; 

      //Prevent robots from indexing the admin page
      if($menuItem == 7){ 
        echo " <meta name=\"robots\" content=\"noindex\"/>";
      }

      //Add a 16x16 favicon.ico file to the URL, will make this bookmarked
      //page stand out
      echo "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\"/>";

 
  //this will style the list of items in the autocomplete airport list on selectAirport.php
 if(($activeTab==5)&&($menuItem==2)){
   echo "<style>";
   echo "li, ul li { list-style-type:none; list-style: none; text-align:left;  }";
   echo "</style>";
}

      echo "\n</head>";
      //<!--- Google Custom Search Engine  first option, result on a page hosted by Google -->

      if (($activeTab ==1 ) && ($menuItem == 1)) {
        echo "<script language=\"JavaScript\" src=\"slideShow.js\"></script>";
        echo "<body onLoad=\"void(0);runSlideShow();\">";
      }
      else{
        echo "<body>";
      }
      
?>
<!-- shows eagle in background -->
<div id="header_extender">
</div>

<div id="nonFooter">

  <div id="affilliate-erau-banner">
    <div id="logo-homelink">
      <a href="http://www.erau.edu/index.html">
      <img src="<?php echo $level;?>images/erauPrescott.png" alt="ERAU Logo"></a>
    </div>
  </div>


<!--GOOGLE SEARCH FORM-->
<div id="erau_search_container">
   <form  id="erausearch" action="<?php echo $level;?>searchResults.html">
    <input type="hidden" name="cx" value="006395093544527955812:qhb9ux4hpqi" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="hidden" name="cof" value="FORID:11" />
   <span class="search_input_container"><input type="text" name="q" size="21" class="search_input" /></span>
   <span class="submit_button_container"><input type="submit" name="sa" value="SEARCH" class="submit" /></span>
   </form>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=erausearch&lang=en"></script>
</div>


<!-- Begin Affililate Header -->
<div id="affilliate_header" style="overflow: hidden; padding: 0; margin: 0">
    <div id="site-name">
        <img src="<?php echo $level;?>images/newCenterLogo4.png" alt="Center for Wildlife and Aviation" border="0">
    </div>
</div><!-- End Header -->

<div id="header_extender3">


<ul id="css3menu1" class="topmenu">
  <li class="topfirst">
<?php
  echo "<a href=\"${level}index.html\" style=\"width:42px;height:10px;line-height:10px;\" ";
   if ($activeTab ==1) { print "class=\"active\""; } 
?>  >
   <span>HOME</span></a>
   <ul>
     <li>
       <?php echo "<a href=\"${level}Overview.html\" > ";?>
       OVERVIEW</a>
     </li>
     <li>
       <?php echo "<a href=\"${level}WildlifeManagement.html\" > ";?>
       WILDLIFE MANAGEMENT</a>
     </li>
     <li>
      <?php echo "<a href=\"${level}CurrentSystems.html\" > ";?>
       CURRENT SYSTEMS</a>
     </li>
     <li>
	<?php echo "<a href=\"${level}BirdIdentification.html\" > ";?>
        BIRD IDENTIFICATION</a>
     </li>
     <li>
       <?php echo "<a href=\"${level}Resources.html\" > "; ?>
       RESOURCES</a>
     </li>
   </ul>
</li>


 <li class="topmenu">
<?php
      echo "<a href=\"${level}biologists.html\" style=\"width:95px;height:10px;line-height:10px;\" ";
   if ($activeTab ==2) { print "class=\"active\""; }
?>  >
   <span>BIOLOGISTS</span></a>
   <ul>
     <li>
     <?php echo "<a href=\"${level}biologists.html\"> ";?>
       QUALIFIED WILDLIFE BIOLOGISTS</a>
     </li>
     <li>
       <?php echo "<a href=\"${level}rpf.html\"> ";?>
       WILDLIFE HAZARD ASSESSMENT</a>
     </li>
     <li>
       <?php echo "<a href=\"${level}airportsummary.html\" > ";?>
       AIRPORT STRIKE SUMMARY REPORTS</a>
     </li>
  </ul>
</li>

 <li class="topmenu">
<?php
      echo "<a href=\"${level}Training.html\" style=\"width:80px;height:10px;line-height:10px;\" ";
   if ($activeTab ==3) { print "class=\"active\""; }
?>  >
   <span>TRAINING</span></a></li>


 <li class="topmenu">
<?php
      echo "<a href=\"${level}faaGuidelines.html\"  style=\"width:110px;height:10px;line-height:10px;\" ";

   if ($activeTab ==4) { print "class=\"active\""; }
?>  >
   <span>REGULATIONS</span></a></li>


 <li class="topmenu">
<?php
      echo "<a href=\"${level}strikeInformation.html\" style=\"width:175px;height:10px;line-height:10px;\" ";
   if ($activeTab ==5) { print "class=\"active\""; }
?>  >
   <span>STRIKE INFORMATION</span></a></li>

 <li class="topmenu">
<?php
      echo "<a href=\"${level}recentNews.html\" style=\"width:70px;height:10px;line-height:10px;\" ";
   if ($activeTab ==6) { print "class=\"active\""; }
?>  >
   <span>MEDIA</span></a>
   <ul>
     <li>
       <?php echo "<a href=\"${level}Pictures.html\"> ";?>
       PICTURES</a>
     </li>
     <li>
      <?php echo "<a href=\"${level}Videos.html\" > ";?>
       VIDEOS</a>
     </li>
     <li>
      <?php echo "<a href=\"${level}IndustryAnnouncements.html\" > ";?>
       INDUSTRY ANNOUNCEMENT</a>
     </li>

  </ul>
</li>

 <li class="topmenu">
<?php
      echo "<a href=\"${level}flightOps.html\" style=\"width:95px;height:10px;line-height:10px;\" ";
   if ($activeTab ==9) { print "class=\"active\""; }
?>  >
   <span>FLIGHT OPS</span></a></li>

 <li class="topmenu">
<?php
      echo "<a href=\"${level}Newsletters.html\" style=\"width:115px;height:10px;line-height:10px;\" ";

   if ($activeTab ==8) { print "class=\"active\""; }
?>  >
   <span>NEWSLETTERS</span></a></li>

</ul>
<p class="_css3m"><a href="http://css3menu.com/">CSS Drop Down Menu Free Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->

 <?php 
if (($activeTab==1)||($activeTab==2)||($activeTab==6)){
?>
  <center>
  <table width="100%" class="topLinks">
  <tr><td align="center">
<?php
} 

   if($activeTab==1){

   echo "<a href=\"${level}index.php\" ";
   if ($menuItem ==1) { print "class=\"active\""; }
   echo ">ABOUT US</a>&nbsp;&nbsp; | &nbsp;&nbsp; ";

   echo "<a href=\"${level}Overview.php\" "; 
   if ($menuItem ==2) { print "class=\"active\""; }
   echo ">OVERVIEW</a>&nbsp;&nbsp; | &nbsp;&nbsp;";
 
   echo "<a href=\"${level}WildlifeManagement.php\" ";
   if ($menuItem ==3) { print "class=\"active\""; }
   echo ">WILDLIFE MANAGEMENT</a>&nbsp;&nbsp; | &nbsp;&nbsp;";

   echo "<a href=\"${level}CurrentSystems.php\" ";
   if ($menuItem ==4) { print "class=\"active\""; }
   echo ">CURRENT SYSTEMS</a>&nbsp;&nbsp; | &nbsp;&nbsp;";

   echo"<a href=\"${level}BirdIdentification.php\" ";
   if ($menuItem ==5) { print "class=\"active\""; } 
   echo ">BIRD ID</a>&nbsp;&nbsp; | &nbsp;&nbsp;";

   echo "<a href=\"${level}Resources.php\" ";
   if ($menuItem ==9) { print "class=\"active\""; }
   echo "> RESOURCES</a>";
 }
 else if($activeTab==2){
   echo "<a href=\"${level}biologists.php\" ";
   if ($menuItem ==18) { print "class=\"active\""; }
   echo ">QUALIFIED BIOLOGISTS</a>&nbsp;&nbsp; | &nbsp;&nbsp;";

    echo "<a href=\"${level}rpf.php\" ";
    if ($menuItem ==19) { print "class=\"active\""; }
    echo ">WILDLIFE HAZARD ASSESSMENT</a>&nbsp;&nbsp; | &nbsp;&nbsp;";

    echo "<a href=\"${level}airportsummary.php\" ";
    if ($menuItem ==28) { print "class=\"active\""; }
    echo ">AIRPORT STRIKE SUMMARY REPORTS</a>";
 }
 else if($activeTab==6){
   echo "<a href=\"${level}Pictures.php\" ";
   if ($menuItem ==8) { print "class=\"active\""; }
   echo ">PICTURES</a>&nbsp;&nbsp; | &nbsp;&nbsp;";

   echo "<a href=\"${level}Videos.php\" ";
   if ($menuItem ==28) { print "class=\"active\""; }
   echo ">VIDEOS</a>&nbsp;&nbsp; | &nbsp;&nbsp;";

   echo "<a href=\"${level}recentNews.php\" ";
   if ($menuItem ==7) { print "class=\"active\""; }
   echo ">RECENT NEWS ARTICLES</a>&nbsp;&nbsp; | &nbsp;&nbsp;";

   echo "<a href=\"${level}pastNews.php\" ";
   if ($menuItem ==10) { print "class=\"active\""; }
   echo ">PAST NEWS ARTICLES</a>&nbsp;&nbsp; | &nbsp;&nbsp;"; 

   echo "<a href=\"${level}IndustryAnnouncements.php\" ";
   if ($menuItem ==27) { print "class=\"active\""; }
   echo ">INDUSTRY ANNOUNCEMENT</a>"; 

 }
 else{
   echo "&nbsp;";
 }

if (($activeTab==1)||($activeTab==2)||($activeTab==6)){
?>
</td></tr></table>
</center>
<?php }
?>

</div>

<div id="affiliate_content">

<?php
}
?>

