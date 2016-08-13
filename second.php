<?php 
$time = array
  (
  "","8:00-9:00 AM","9:00-10:00 AM","10:00-11:00 AM","11:00-12:00 PM","12:00-1:00PM","1:00-2:00 PM","2:00-3:00 PM","3:00-4:00 PM","4:00-5:00 PM","5:00-6:00 PM","6:00-7:00 PM"
  );
 $days =array( "Monday","Tuesday","Wednesday","Thursday","Friday");
$ftime = array
  (
  array("<div class=\"csc A\">CS208</div>","<div class=B>IC130</div>","<div class=C>IC136</div>","<div class=D>IC221</div>","L","<div class=G>IC260</div><div class=\"hs_2 G\">HS352</div>","<div class=H>IC250</div><div class=\"H hs_4\">HS391</div>","<div class=\"mec L1 hs_5\">ME205</div>","<div class=\"mec L1 hs_5\">ME205</div>","<div class=\"mec L1 hs_5\">ME205</div>",""),
  
  array("<div class=E>IC240</div><div class=\"E hs_1\">HS301</div>","<div class=F>IC241</div><div class=\"F hs_3\">HS344</div>","<div class=G>IC260</div><div class=\"hs_2 G\">HS352</div>","<div class=\"H hs_4\">HS391</div>","U","<div class=\"csc A\">CS208</div>","<div class=L2>IC122P<br>IC130P<br>IC250</div>","<div class=L2>IC122P<br>IC130P<br>IC250</div>","<div class=L2>IC122P<br>IC130P<br>IC250</div>","",""),
  
  array("<div class=B>IC130</div>","<div class=C>IC136</div>","<div class=D>IC221</div>","<div class=\"csc A\">CS208</div>","N","<div class=F>IC241</div><div class=\"F hs_3\">HS344</div>","<div class=L3>IC122P<br>IC130P<br>IC250</div>","<div class=L3>IC122P<br>IC130P<br>IC250</div>","<div class=L3>IC122P<br>IC130P<br>IC250</div>","",""),

  array("<div class=F>IC241</div><div class=\"F hs_3\">HS344</div>","<div class=E>IC240</div><div class=\"E hs_1\">HS301</div>","<div class=\"H hs_4\">HS391</div>","<div class=G>IC260</div><div class=\"hs_2 G\">HS352</div>","C","<div class=\"csc L5\">CS207(Class)</div>","<div class=L4>IC122P<br>IC130P<br>IC250</div>","<div class=L4>IC122P<br>IC130P<br>IC250</div>","<div class=L4>IC122P<br>IC130P<br>IC250</div>","","") ,

  array("<div class=C>IC136</div>","<div class=D>IC221</div>","<div class=\"csc A\">CS208</div>","<div class=B>IC130</div>","H","<div class=E>IC240</div><div class=\"E hs_1\">HS301</div>","<div class=\"csc L5\">CS207</div>","<div class=\"csc L5\">CS207</div>","<div class=\"mec L5 hs_5\">ME205</div><div class=\"csc L5\">CS207</div>","<div class=\"mec L5 hs_5\">ME205</div>","<div class=\"mec L5 hs_5\">ME205</div>")
  );
 echo "<table><tr>";  
  for($i=0;$i<12;$i++)
    echo "<th>".$time[$i]."</th>";
   echo "</tr>";

  for($i=0;$i<5;$i++)
    { echo "<tr><th>".$days[$i]."</th>";
      for($j=0;$j<11;$j++){
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
  <label><strong>Electives</strong> </label>: <br>
  <input type=checkbox id='hs1'>HS301 <br>
  <input type=checkbox id='hs2'>HS352 <br>
  <input type=checkbox id='hs3'>HS344 <br>
  <input type=checkbox id='hs4'>HS391 <br>
  <input type=checkbox id='hs5'>ME205 <br>
  <label><strong>Year</strong><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
  <a href=imp.php><input type= radio name='year' id=i>I'st Year</a>
  <a><input type= radio name='year' id=ii checked=checked>II'nd Year</a>
  <a href=third.php><input type= radio name='year' id=iii>III'rd Year</a>
  <a href=fourth.php><input type= radio name='year' id=iv >IV'th Year</a><br>
  <label><strong>Branch</strong><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<br>
  <input type= radio name='branch' value=cse>CSE<br>
  <input type= radio name='branch' value=me >ME<br>
  <input type= radio name='branch' value=ee>EE<br>
  <input type= radio name='branch' value=ce >CE<br>
<script>

$(document).ready(function(){
  $('.hs_1').hide();
  $('.hs_2').hide();
  $('.hs_3').hide();
  $('.hs_4').hide();
  $('.hs_5').hide();
  $('.csc').hide();
  $('.eec').hide();
  $('.mec').hide();
  $('.cec').hide();

});
$('#hs1').change(function(){
  if($(this).prop('checked'))
    $('.hs_1').show() ; // checked
else
    $('.hs_1').hide();  // unchecked
});
$('#hs2').change(function(){
  if($(this).prop('checked'))
    $('.hs_2').show() ; // checked
else
    $('.hs_2').hide();  // unchecked
});
$('#hs3').change(function(){
  if($(this).prop('checked'))
    $('.hs_3').show() ; // checked
else
    $('.hs_3').hide();  // unchecked
});
$('#hs4').change(function(){
  if($(this).prop('checked'))
    $('.hs_4').show() ; // checked
else
    $('.hs_4').hide();  // unchecked
});
$('#hs5').change(function(){
  if($(this).prop('checked'))
    $('.hs_5').show() ; // checked
else
    $('.hs_5').hide();  // unchecked
});

$('input[name=branch]').change(function(){
   value=""+$('input[name=branch]:checked').val();
   if(value=="cse") {
    $('.csc').show();
    $('.eec').hide();
  $('.mec').hide();
  $('.cec').hide();
   }
   if(value=="ce") {
    $('.cec').show();
    $('.eec').hide();
  $('.mec').hide();
  $('.csc').hide();
   }
   if(value=="me") {
    $('.mec').show();
    $('.eec').hide();
  $('.csc').hide();
  $('.cec').hide();
   }
   if(value=="ee") {
    $('.eec').show();
    $('.csc').hide();
  $('.mec').hide();
  $('.cec').hide();
   }

      // unchecked

});

</script>
  </body>
</html>



