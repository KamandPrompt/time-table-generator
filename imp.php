<?php 
$time = array
  (
  "","8:00-9:00 AM","9:00-10:00 AM","10:00-11:00 AM","11:00-12:00 PM","1:00-2:00 PM","2:00-3:00 PM","3:00-4:00 PM","4:00-5:00 PM"
  );
 $days =array( "Monday","Tuesday","Wednesday","Thursday","Friday");
$ftime = array
  (
  array("<div class=A>IC110</div>","<div class=B>IC140</div>","<div class=C>IC150</div>","<div class=D>IC160</div>","","","",""),
  
  array(" ","<div class=L6>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L6>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L6>IC150P<br>IC160P<br>IC140<br>IC101P</div>"," "," "," ","<div class=\"hs_elec H\">HS106</div>"),
  
  array("<div class=B>IC140</div>","<div class=L7>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L7>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L7>IC150P<br>IC160P<br>IC140<br>IC101P</div>"," ","<div class=C>IC150</div>","<div class=D>IC160</div>","<div class=A>IC110</div>"),

  array(" ","<div class=L8>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L8>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L8>IC150P<br>IC160P<br>IC140<br>IC101P</div>"," ","","<div class=\"hs_elec H\">HS106</div>"," ") ,

  array("<div class=C>IC150</div>","<div class=L9>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L9>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L9>IC150P<br>IC160P<br>IC140<br>IC101P</div>"," ","<div class=D>IC160</div>","<div class=A>IC110</div>","<div class=B>IC140</div>"),
  );
 ?>

<html>
  <head>
  <meta charset="utf-8">
  <title>Timetable Generator</title>
  <script type="text/javascript" src=js/jquery.min.js></script>
  <link rel="stylesheet" type="text/css" href="design.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
    
         
         input{margin-right:300px;}
</style>

  </head>
  <body>
  
  
 <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">I<sup>st</sup> Year</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <!--<nav class="mdl-navigation mdl-layout-large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>-->
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Batch</span>
    <nav class="mdl-navigation">
    <a class="mdl-navigation__link" href="index.php">Home</a>
      <a class="mdl-navigation__link" href="imp.php">I<sup>st</sup> Year</a>
      <a class="mdl-navigation__link" href="fourth.php">II<sup>nd</sup>,III<sup>rd</sup>, IV<sup>th</sup> Year and M. Tech.</a>
      <a class="mdl-navigation__link" href="mscc2016.php">M. Sc.</a>
      
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
    
    <div class=jumbotron><br><br><h2><img src=logo_iit1.png class=small> B. Tech.</h2>
    I<sup>st</sup> Year
    </div>

<br>
<br><br>
  <?php
echo "<div class=tt><table><tr>";  
  for($i=0;$i<9;$i++)
    echo "<th>".$time[$i]."</th>";
   echo "</tr>";

  for($i=0;$i<5;$i++)
    { echo "<tr><th>".$days[$i]."</th>";
      for($j=0;$j<8;$j++){
        echo "<td>".$ftime[$i][$j]."</td>";
      }
    echo "</tr>";
      
      }echo "</table></div>";
?>
  
  <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet"></div>
  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  <b>Electives:</b><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="hselec">
  <input type="checkbox" id="hselec" class="mdl-checkbox__input hselec">
  <span class="mdl-checkbox__label">HS106</span>
</label>
</div>
  <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"></div>
</div>
<b><i>Note:</i></b><ol>
<li>Slots A3, B3, C3 and D3 are for 3 credit courses that can be used for core subjects.</li>
<li>Slots A4, B4, C4, D4, E4, F4, G4 and I4 are for 4 credit elective courses, (used for core if needed).</li>
<li>L1, L2, L3, L4, L5, L6, L7, L8, and L9 are the lab slots.</li>
</ol>
</div>
  </main>
</div>
<br><br>

  
  <script>

$(document).ready(function(){
  $('.hs_elec').hide();
});
$('.hselec').change(function(){
  if($(this).prop('checked'))
    $('.hs_elec').show()  // checked
else
    $('.hs_elec').hide();  // unchecked
});

</script>
  </body>
</html>



