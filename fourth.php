
<?php 
//I4=H4
//I3=H3
$time = array
  (
  "","8:00-9:00 AM","9:00-10:00 AM","10:00-11:00 AM","11:00-12:00 PM","12:00-1:00PM","1:00-2:00 PM","2:00-3:00 PM","3:00-4:00 PM","4:00-5:00 PM","5:00-6:00 PM","6:00-7:00 PM"
  );
 $days =array( "Monday","Tuesday","Wednesday","Thursday","Friday");
$ftime = array
  (
  array("<div class=\"A3 A4 co\"></div>","<div class=\"B3 B4 co\"></div>","<div class=\"co C3 C4\"></div>","<div class=\"co D3 D4\"></div>","L","<div class=\"co G3 G4\"></div>","<div class=\"co I3 I4\"></div><div class=\"L1 co\"></div>","<div class=\"L1 co\"></div>","<div class=\"L1 co\"></div>","",""),
  
  array("<div class=\"E3 E4 co\"></div>","<div class=\"F3 F4 co\"></div>","<div class=\"G3 G4 co\"></div>","<div class=\"co I3 I4\"></div>","U","<div class=\"A4 co\"></div>","<div class=\"L2 co\"></div><div class=\"C4 co\"></div>","<div class=\"L2 co\"></div>","<div class=\"L2 co\"></div>","",""),
  
  array("<div class=\"B3 B4 co\"></div>","<div class=\"C3 C4 co\"></div>","<div class=\"D3 D4 co\"></div>","<div class=\"A3 A4 co\"></div>","N","<div class=\"F3 F4 co\"></div>","<div class=\"L3 co\"></div><div class=\"G4 co\"></div>","<div class=\"L3 co\"></div><div class=\"E4 co\"></div>","<div class=\"L3 co\"></div><div class=\"I4 co\"></div>","",""),

  array("<div class=\"F3 F4 co\"></div>","<div class=\"E3 E4 co\"></div>","<div class=\"I3 I4 co\"></div>","<div class=\"G3 G4 co\"></div>","C","<div class=\"D4 co\"></div>","<div class=\"L4 co\"></div><div class=\"B4 co\"></div>","<div class=\"L4 co\"></div>","<div class=\"L4 co\"></div>","","") ,

  array("<div class=\"C3 C4 co\"></div>","<div class=\"D3 D4 co\"></div>","<div class=\"A3 A4 co\"></div>","<div class=\"B3 B4 co\"></div>","H","<div class=\"E3 E4 co\"></div>","<div class=\"F4 co\"></div><div class=\"L5 co\"></div>","<div class=\"L5 co\"></div>","<div class=\"L5 co\"></div>","","")
  );?>
<?php
$courses=array(
	array("Select Your Courses..","0"),
	array("IC240","E3"),
	array("IC241","B3"),
	array("IC260","G3"),
	array("IC250","I3"),
	array("CE201","A3"),
	array("IC130","F3"),
	array("IC136","C3"),
	array("IC221","D3"),
	array("IC250(TUE)","L2"),
	array("IC130P(TUE)","L2"),
	array("IC222P(TUE)","L2"),
	array("IC250(WED)","L3"),
	array("IC130P(WED)","L3"),
	array("IC222P(WED)","L3"),
	array("IC250(THU)","L4"),
	array("IC130P(THU)","L4"),
	array("IC222P(THU)","L4"),
	array("HS105","F3"),
	array("HS263","I3"),
	array("HS255","D3"),
	array("HS502","E3"),
	array("HS352","G3"),
    array("HS205","D3"),
	array("HS350","G3"),
	array("HS343","I3"),
	array("HS403","G3"),
	array("HS471","E3"),
	array("HS472","F3"),
	array("HS481","F3"),
	array("HS582","A3"),
	array("HS602","B3"),
	array("HS620","C3"),
	array("HS391","I3"),
	//array("HS611","3"),
	//array("HS522","3"),
	//array("HS621","4"),
	//array("HS623","4"),
	array("EE311","A3"),
	array("EE304","C4"),
	array("EE305","I4"),
	array("ME206","A3"),
	array("ME303","B3"),
	array("ME308","C3"),
	array("ME305","A4"),
	array("CS201","B3"),
	array("CS310","C3"),
	array("CS303","E3"),
	array("CS305","G3"),
	array("CS304","I3"),
	array("CS699","F4"),
	array("CS601","D4"),
	array("CS609","A4"),
	array("CS208","A4"),
	array("CS308","L1"),
    array("CS310(LAB)","L2"),
    array("CS207","L5"),
    array("CS201P","L5"),
	array("EE608","B4"),
	array("EE615","G3"),
	array("EE508","G3"),
	array("EE509","D3"),
	array("EE620","C3"),
	array("EE606","E3"),
	array("EE609","I3"),
	array("EE512","E4"),
	array("EE518","D3"),
	array("EE312","L1"),
	array("EE304","L2"),
	//array("EE520","3"),
	//array("EE513","3"),
	array("ME351","G3"),
	array("ME356","D4"),
	array("ME509","E3"),
	array("ME601","C3"),
	array("ME602","I3"),
	array("ME603","B3"),
	array("ME205(3.00-6.00)","L1"),
	array("ME606","D3"),
	array("ME638","D3"),
	array("ME205(3.00-6.00)","L1"),
	array("ME311P","L3"),
	array("ME205(4.00-7.00)","L5"),
	array("ME310P","L5"),
	//array("ME616","3"),
	//array("ME632","3"),
	array("EN501","E3"),
	array("EN502","F3"),
	array("EN503","C3"),
	//array("EN604","3"),
	//array("EN511","3"),
	//array("EN508","3"),
	array("MA465","D3"),
	array("MA605","G3"),
	array("BY505","I3"),
	array("BY503","I3"),
	array("BY506","C3"),
	//array("BY507","4"),
	array("BY508","C3"),
	//array("BY510","3"),
	//array("BY511","3"),
	//array("BY512","3"),
	//array("BY513","3"),
	array("PH502","G3"),
	array("PH506","D3"),
	array("PH511","G4"),
	array("PH512","I4"),
	array("PH513","F3"),
	array("PH601","E3"),
	array("PH613","F3"),
	//array("PH514","3"),
	//array("PH611","4"),
	//array("PH701","4"),
	//array("CY514","3"),
	//array("CY522","3"),
	array("CE501","D3"),
	array("CE601","A3"),
	
	);
	
  
?>
	
<html>
  <head>
  <meta charset="utf-8">
  <title>Timetable Generator</title>
  <script type="text/javascript" src=js/jquery.min.js></script>
  <script type="text/javascript" src=content/js/bootstrap.min.js></script>
  <link rel="stylesheet" type="text/css" href="content/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script type="text/javascript" src=js/send.js></script>
  <!--<script src="tipuedrop/tipuedrop_content.js"></script>
<link href="tipuedrop/tipuedrop.css" rel="stylesheet">
<script src="tipuedrop/tipuedrop.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="src/jquery-customselect.js"></script>
<link href="src/jquery-customselect.css" rel="stylesheet">

  <script type="text/javascript" src=jquery-ui.min.js></script>
  <link rel="stylesheet" type="text/css" href="design1.css">
  <style type="text/css">
  		 .tt{width:90%;}

         nav{color: black;}
         </style>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
<script type="text/javascript">
	$(function() {
        $("#demo").customselect();
      });
</script>
  </head>
  <body>

   <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">IInd,IIIrd,IVth Year B.Tech and MTech(Mechanical/Energy)</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout-large-screen-only">
        <!--<a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>-->
        <?php
  	echo "<div><!--<div id=headl>List of courses</div>--><select id=demo class=custom-select name=standard>";
	for($i=0;$i<96;$i++)
	       echo "<option class=".$courses[$i][1]." value=".$courses[$i][0].">".$courses[$i][0]."</option>";
    echo "</select><br></div>";
  	?>

      </nav>
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
    
   <!--<form name="search" action="search.php">
<input type="text" id="tipue_drop_input" name="q" autocomplete="off" required>
</form>
<div id="tipue_drop_content"></div>
<input type="text" id=srch>
   --><br><br><br><br>
   
  <div class=container>

  	<div id=crss>
  	</div>
  	<?php

 echo "<div class=tt><table class=\"mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp\"><tr>";  
  for($i=0;$i<10;$i++)
    echo "<th class=\"mdl-data-table__cell--non-numeric\">".$time[$i]."</th>";
   echo "</tr>";

  for($i=0;$i<5;$i++)
    { echo "<tr><th class=\"mdl-data-table__cell--non-numeric\">".$days[$i]."</th>";
      for($j=0;$j<9;$j++){
        echo "<td class=\"mdl-data-table__cell--non-numeric\">".$ftime[$i][$j]."</td>";
      }
    echo "</tr>";
      
      }echo "</table></div>";
?>
<br><br>

<br><br>
<b><i>Note:</i></b><ol>
<li>Slots A3, B3, C3 and D3 are for 3 credit courses that can be used for core subjects.</li>
<li>Slots A4, B4, C4, D4, E4, F4, G4 and I4 are for 4 credit elective courses, (used for core if needed).</li>
<li>L1, L2, L3, L4, L5, L6, L7, L8, and L9 are the lab slots.</li>
<li>CS303 Software Engineering will be conducted from 2pm to 5 pm on Thursday in A5-3 (Conference room).</li>
<li>CS207 has 1 hour of lecture and will be conducted in slot D4 (Thursday)</li> 
<li>The classes for I Semester- M.Tech. (Mechanical /Energy) 2016 Batch will be held in North Campus Room B22-1 (Hostel Building).
</li>
<li>The classes for EN504/HS540 will be conducted in SC-1</li>
<li>The Classes for M.Tech. in Biotechnology 2016 Batch will be held in G1-104.</li>
<li>IC250 Class is only on Monday</li>
<li>CS207 Theory class is on thursday 1-2 PM</li>
  </ol>
  </div>
    </div>
  </main>
</div>
  <br>




<script>

$(document).ready(function(){
	//$('.co').droppable(//{drop:function(){
	//$(this).html(contents+' ');	
	//}});

	$('.co').draggable({start:function(){
		contents=$(this).text();
		
	}
	,containment:'table'

});
});
//$(document).ready(function() {
  //   $('#tipue_drop_input').tipuedrop();
//});



$('#demo').change(function(){
	var copt=$('#demo option:selected').val()
	var slot=$('#demo option:selected').attr('class');
	var snackbarContainer = document.querySelector('#demo-toast-example');
  	var showToastButton = document.querySelector('#clist');
	if(copt!= "Select") 
		{
			$('#crss').append("<span class=\"mdl-chip mdl-chip--deletable\" > <span class=\"mdl-chip__text\">"+copt+"</span><button type=\"button\" class=\"mdl-chip__action \" data="+slot+" contained="+copt+"><i class=\"material-icons\">cancel</i></button></span>");
	var x=$("."+slot).not("option").html();
	if(x!="") snackbarContainer.MaterialSnackbar.showSnackbar({message:'Clash Happened between '+x+' and '+copt+' '});
	$("."+slot).not("option").html(""+copt);

	'use strict';
    var copt=$('#demo option:selected').val()
    var data = {message: 'Added Course '+copt};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
    $('#demo').val("Select");
}
	//$('#clist option[value="'+copt+'"]').remove();
});
//$('.bcls').click(function(){
//var slot=$(this).attr('class');
//$("."+slot).not("option").html(" ");
//});

$( document ).on( "click", "button", function() {
    // jQuery 1.7+
  var slot=$(this).attr('data');
  var copt=$(this).attr('contained');
$("."+slot).not("option").html("");
//$("span[data="+slot+"]"]).html(" ");

  var snackbarContainer = document.querySelector('#demo-toast-example');
  var showToastButton = document.querySelector('#demo');
	'use strict';
    $(this).parent().remove();
    var data = {message: 'Removed Course '+copt};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);

});
</script>


<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>
</body>
</html>