<?php 
$time = array
  (
  "","8:00-9:00 AM","9:00-10:00 AM","10:00-11:00 AM","11:00-12:00 PM","1:00-2:00 PM","2:00-3:00 PM","3:00-4:00","4:00-5:00"
  );
 $days =array( "Monday","Tuesday","Wednesday","Thursday","Friday");
$ftime = array
  (
  array("<div class=A>IC110</div>","<div class=B>IC140</div>","<div class=C>IC150</div>","<div class=D>IC160</div>","","","",""),
  
  array(" ","<div class=L6>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L6>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L6>IC150P<br>IC160P<br>IC140<br>IC101P</div>"," "," "," ","<div class=\"hs_1 H\">HS106</div>"),
  
  array("<div class=B>IC140</div>","<div class=L7>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L7>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L7>IC150P<br>IC160P<br>IC140<br>IC101P</div>"," ","<div class=C>IC150</div>","<div class=D>IC160</div>","<div class=A>IC110</div>"),

  array(" ","<div class=L8>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L8>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L8>IC150P<br>IC160P<br>IC140<br>IC101P</div>"," ","","<div class=\"hs_1 H\">HS106</div>"," ") ,

  array("<div class=C>IC150</div>","<div class=L9>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L9>IC150P<br>IC160P<br>IC140<br>IC101P</div>","<div class=L9>IC150P<br>IC160P<br>IC140<br>IC101P</div>"," ","<div class=D>IC160</div>","<div class=A>IC110</div>","<div class=B>IC140</div>"),
  );
 echo "<table><tr>";  
  for($i=0;$i<9;$i++)
    echo "<th>".$time[$i]."</th>";
   echo "</tr>";

  for($i=0;$i<5;$i++)
    { echo "<tr><th>".$days[$i]."</th>";
      for($j=0;$j<8;$j++){
        echo "<td>".$ftime[$i][$j]."</td>";
      }
    echo "</tr>";
      
      }echo "</table>";?>

<html>
  <head>
  <meta charset="utf-8">
  
  <script type="text/javascript" src=js/jquery.min.js></script>
  <link rel="stylesheet" type="text/css" href="design.css">
  </head>
  <body>
  <label><strong>Electives</strong> </label>: <input type=checkbox id='hs1' class=hs1>HS106 <br>
  <label><strong>Year</strong><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
  <a href=imp.php><input type= radio name='year' id=i>I'st Year</a>
  <a href=second.php><input type= radio name='year' id=ii>II'nd Year</a>
  <a href=third.php><input type= radio name='year' id=iii>III'rd Year</a>
  <a><input type= radio name='year' id=iv checked=checked>IV'th Year</a><br>
  <label><strong>Branch</strong><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
  <input type= radio name='branch' id=cse>CSE
  <input type= radio name='branch' id=me >ME
  <input type= radio name='branch' id=ee>EE
  <input type= radio name='branch' id=ce >CE
<script>

$(document).ready(function(){
  $('.hs_1').hide();
});
$('.hs1').change(function(){
  if($(this).prop('checked'))
    $('.hs_1').show()  // checked
else
    $('.hs_1').hide();  // unchecked
});

</script>
  </body>
</html>



