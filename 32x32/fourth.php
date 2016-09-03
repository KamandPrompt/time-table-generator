
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
  array("<div class=\"A3 A4\"></div>","<div class=\"B3 B4\"></div>","<div class=\"C3 C4\"></div>","<div class=\"D3 D4\"></div>","L","<div class=\"G3 G4\"></div>","<div class=\"I3 I4\"></div><div class=L1></div>","<div class=L1></div>","<div class=L1></div>","",""),
  
  array("<div class=\"E3 E4\"></div>","<div class=\"F3 F4\"></div>","<div class=\"G3 G4\"></div>","<div class=\"I3 I4\"></div>","U","<div class=A4></div>","<div class=L2></div><div class=C4></div>","<div class=L2></div>","<div class=L2></div>","",""),
  
  array("<div class=\"B3 B4\"></div>","<div class=\"C3 C4\"></div>","<div class=\"D3 D4\"></div>","<div class=\"A3 A4\"></div>","N","<div class=\"F3 F4\"></div>","<div class=L3></div><div class=G4></div>","<div class=L3></div><div class=E4></div>","<div class=L3></div><div class=I4></div>","",""),

  array("<div class=\"F3 F4\"></div>","<div class=\"E3 E4\"></div>","<div class=\"I3 I4\"></div>","<div class=\"G3 G4\"></div>","C","<div class=D4></div>","<div class=L4></div><div class=B4></div>","<div class=L4></div>","<div class=L4></div>","","") ,

  array("<div class=\"C3 C4\"></div>","<div class=\"D3 D4\"></div>","<div class=\"A3 A4\"></div>","<div class=\"B3 B4\"></div>","H","<div class=\"E3 E4\"></div>","<div class=F4></div><div class=L5></div>","<div class=L5></div>","<div class=L5></div>","","")
  );?>
<?php
$r1="A1-NKN";
$r2="A1-3";
$r3="A1-1a";
$r4="A1-2a";
$r5="A1-1b";
$r6="A1-2b";
$r7="A5-1";
$r8="A5-2";
$r9="A5-3";
$r10="A5-4";
$r11="A5-5";
$r12="SC-NKN";
$r13="SC-1";
$r14="A5 PC Lab";
$r15="SC Chemistry Lab";
$r16="SC Physics Lab";
$r17="Electrical Lab";
$r18="N/A";
$courses=array(
	array("Select Your Courses..","0","Room"),
	array("IC240","E3",$r2),
	array("IC241","B3",$r2),
	array("IC260","G3",$r1),
	array("IC250","I3",$r1),
	array("CE201","A3",$r6),
	array("IC130","F3",$r1),
	array("IC136","C3",$r2),
	array("IC221","D3",$r1),
	array("IC250(TUE)","L2",$r14),
	array("IC130P(TUE)","L2",$r15),
	array("IC222P(TUE)","L2",$r16),
	array("IC250(WED)","L3",$r14),
	array("IC130P(WED)","L3",$r15),
	array("IC222P(WED)","L3",$r16),
	array("IC250(THU)","L4",$r14),
	array("IC130P(THU)","L4",$r15),
	array("IC222P(THU)","L4",$r16),
	array("HS105","F3",$r6),
	array("HS263","I3",$r8),
	array("HS255","D3",$r10),
	array("HS502","E3",$r5),
	array("HS352","G3",$r7),
    array("HS205","D3",$r7),
	array("HS350","G3",$r8),
	array("HS343","I3",$r10),
	array("HS403","G3",$r10),
	array("HS471","E3",$r6),
	array("HS472","F3",$r11),
	array("HS481","F3",$r10),
	array("HS582","A3",$r11),
	array("HS602","B3",$r4),
	array("HS620","C3",$r11),
	array("HS391","I3",$r13),
	//array("HS611","3"),
	//array("HS522","3"),
	//array("HS621","4"),
	//array("HS623","4"),
	array("EE311","A3",$r7),
	array("EE304","C4",$r3),
	array("EE305","I4",$r3),
	array("ME206","A3",$r3),
	array("ME303","B3",$r3),
	array("ME308","C3",$r4),
	array("ME305","A4",$r8),
	array("CS201","B3",$r12),
	array("CS310","C3",$r12),
	array("CS303","E3",$r9),
	array("CS305","G3",$r2),
	array("CS304","I3",$r12),
	array("CS699","F4",$r2),
	array("CS601","D4",$r12),
	array("CS609","A4",$r5),
	array("CS208","A4",$r2),
	array("CS308","L1",$r14),
    array("CS310(LAB)","L2",$r14),
    array("CS207(2.00-5.00)","L5",$r14),
    array("CS201P","L5",$r14),
	array("EE608","B4",$r7),
	array("EE615","G3",$r12),
	array("EE508","G3",$r3),
	array("EE509","D3",$r5),
	array("EE620","C3",$r6),
	array("EE606","E3",$r4),
	array("EE609","I3",$r7),
	array("EE512","E4",$r1),
	array("EE518","D3",$r6),
	array("EE312","L1",$r17),
	array("EE304","L2",$r17),
	//array("EE520","3"),
	//array("EE513","3"),
	array("ME351","G3",$r4),
	array("ME356","D4",$r4),
	array("ME509","E3",$r8),
	array("ME601","C3",$r12),
	array("ME602","I3",$r4),
	array("ME603","B3",$r6),
	array("ME205(3.00-6.00)","L1",$r14),
	array("ME606","D3",$r13),
	array("ME638","D3",$r18),
	array("ME205(3.00-6.00)","L1",$r14),
	array("ME311P","L3",$r18),
	array("ME205(4.00-7.00)","L5",$r14),
	array("ME310P","L5",$r18),
	//array("ME616","3"),
	//array("ME632","3"),
	array("EN501","E3",$r7),
	array("EN502","F3",$r4),
	array("EN503","C3",$r18),
	//array("EN604","3"),
	//array("EN511","3"),
	//array("EN508","3"),
	array("MA465","D3",$r3),
	array("MA605","G3",$r5),
	array("BY505","I3",$r11),
	array("BY503","I3",$r5),
	array("BY506","C3",$r13),
	//array("BY507","4"),
	array("BY508","C3",$r10),
	//array("BY510","3"),
	//array("BY511","3"),
	//array("BY512","3"),
	//array("BY513","3"),
	array("PH502","G3",$r6),
	array("PH506","D3",$r9),
	array("PH511","G4",$r11),
	array("PH512","I4",$r6),
	array("PH513","F3",$r3),
	array("PH601","E3",$r13),
	array("PH613","F3",$r13),
	//array("PH514","3"),
	//array("PH611","4"),
	//array("PH701","4"),
	//array("CY514","3"),
	//array("CY522","3"),
	array("CE501","D3",$r11),
	array("CE601","A3",$r10),
	
	);
	
  
?>
	
<html>
  <head>
  <meta charset="utf-8">
  <title>Timetable Generator</title>
  <script type="text/javascript" src=js/jquery.min.js></script>
  <script type="text/javascript" src=content/js/bootstrap.min.js></script>
  <link rel="stylesheet" type="text/css" href="content/css/bootstrap.min.css">
  <script type="text/javascript" src=js/send.js></script>
  <link rel="stylesheet" type="text/css" href="design.css">
  <style type="text/css">
  		 .tt{width:90%;}
         </style>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>

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
  	echo "<div><!--<div id=headl>List of courses</div>--><select id=clist>";
	for($i=0;$i<97;$i++)
	       echo "<option class=".$courses[$i][1]." value=".$courses[$i][0]." data=".$courses[$i][2]." >".$courses[$i][0]."</option>";
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
   <div class=jumbotron><br><h2><img src=logo_iit1.png class=small>B.Tech. and M.Tech.</h2><h3>
  	II<sup>nd</sup>,III<sup>rd</sup>, IV<sup>th</sup> Year and M.Tech.
  </h3></div> 		
  <div class=container>
<<<<<<< HEAD
  	<div class=jumbotron><h2><img src=logo_iit1.png class=small>IInd,IIIrd,IVth Year B.Tech and MTech(Mechanical/Energy)</h2></div>
  	<ul id=crss>
  	</ul>
  	<h2>Notes</h2><br>
  	<ul type="square">
  		<li>All the courses of the course list have not been mentioned in the Time-Table Generator. This is because of unavailability of slots for those course in the time-table. For some specific courses, whose slots have been assigned and are not available in the time-table, they can contact the developers or the admin to add the course.</li>
  		<li>
  	</ul>
=======

  	<div id=crss>
  	</div>
  	<?php

 echo "<div class=tt><table class=\"table-responsive table-hover\"><tr>";  
  for($i=0;$i<10;$i++)
    echo "<th>".$time[$i]."</th>";
   echo "</tr>";

  for($i=0;$i<5;$i++)
    { echo "<tr><th>".$days[$i]."</th>";
      for($j=0;$j<9;$j++){
        echo "<td>".$ftime[$i][$j]."</td>";
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
>>>>>>> 69738e02dfcbee441624c15c9b46232af7e2d254
  </div>
    </div>
  </main>
</div>
  <br>




<script>

$('#clist').change(function(){
	var copt=$('#clist option:selected').val()
	var slot=$('#clist option:selected').attr('class');
	//var venue=$('#clist option:selected').attr('data');
	if(copt!= "Select") 
		{
			$('#crss').append("<span class=\"mdl-chip mdl-chip--deletable\" > <span class=\"mdl-chip__text\">"+copt+"</span><button type=\"button\" class=\"mdl-chip__action \" data="+slot+" contained="+copt+"><i class=\"material-icons\">cancel</i></button></span>");
	//var x=$("."+slot).not("option").text();
	//if(text!="") alert(text+'clash Happened');
	$("."+slot).not("option").html(""+copt);

  var snackbarContainer = document.querySelector('#demo-toast-example');
  var showToastButton = document.querySelector('#clist');
	'use strict';
    var copt=$('#clist option:selected').val()
    var data = {message: 'Added Course '+copt};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
    $('#clist').val("Select");
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
  var showToastButton = document.querySelector('#clist');
	'use strict';
    $(this).parent().remove();
    var data = {message: 'Removed Course '+copt};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);

<<<<<<< HEAD
  for($i=0;$i<5;$i++)
    { echo "<tr><th>".$days[$i]."</th>";
      for($j=0;$j<9;$j++){
        echo "<td>".$ftime[$i][$j]."</td>";
      }
    echo "</tr>";
      
      }echo "</table>";
?>
=======
});
</script>


<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>
</body>
</html>
>>>>>>> 69738e02dfcbee441624c15c9b46232af7e2d254
