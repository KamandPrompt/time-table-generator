
<?php 
$time = array
  (
  "","8:00-9:00 AM","9:00-10:00 AM","10:00-11:00 AM","11:00-12:00 PM","12:00-1:00PM","1:00-2:00 PM","2:00-3:00 PM","3:00-4:00 PM","4:00-5:00 PM","5:00-6:00 PM","6:00-7:00 PM"
  );
 $days =array( "Monday","Tuesday","Wednesday","Thursday","Friday");
$ftime = array
  (
  array("<div class=\"A3 A4\"></div>","<div class=\"B3 B4\"></div>","<div class=\"C3 C4\"></div>","<div class=\"D3 D4\"></div>","L","<div class=\"G3 G4\"></div>","<div class=\"H3 H4\"></div><div class=L1></div>","<div class=L1></div>","<div class=L1></div>","",""),
  
  array("<div class=\"E3 E4\"></div>","<div class=\"F3 F4\"></div>","<div class=\"G3 G4\"></div>","<div class=\"H3 H4\"></div>","U","<div class=A4></div>","<div class=L2></div><div class=C4></div>","<div class=L2></div>","<div class=L2></div>","",""),
  
  array("<div class=\"B3 B4\"></div>","<div class=\"C3 C4\"></div>","<div class=\"D3 D4\"></div>","<div class=\"A3 A4\"></div>","N","<div class=\"F3 F4\"></div>","<div class=L3></div><div class=G4></div>","<div class=L3></div><div class=E4></div>","<div class=L3></div><div class=H4></div>","",""),

  array("<div class=\"F3 F4\"></div>","<div class=\"E3 E4\"></div>","<div class=\"H3 H4\"></div>","<div class=\"G3 G4\"></div>","C","<div class=D4></div>","<div class=L4></div><div class=B4></div>","<div class=L4></div>","<div class=L4></div>","","") ,

  array("<div class=\"C3 C4\"></div>","<div class=\"D3 D4\"></div>","<div class=\"A3 A4\"></div>","<div class=\"B3 B4\"></div>","H","<div class=\"E3 E4\"></div>","<div class=F4></div>","<div class=L5></div>","<div class=L5></div>","","")
  );?>
<?php
$courses=array(
	array("IC240","E3"),
	array("IC241","F3"),
	array("IC260","G3"),
	array("IC250","H3"),
	//array("CE201","3"),
	array("IC130","B3"),
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
	array("HS263","H3"),
	array("HS255","D3"),
	array("HS502","E3"),
	array("HS352","G3"),
    array("HS205","D3"),
	array("HS350","G3"),
	array("HS343","H3"),
	array("HS403","G3"),
	array("HS471","E3"),
	array("HS472","F3"),
	array("HS481","F3"),
	array("HS582","A3"),
	array("HS602","B3"),
	array("HS620","C3"),
	array("HS391","H3"),
	//array("HS611","3"),
	//array("HS522","3"),
	//array("HS621","4"),
	//array("HS623","4"),
	
	

	array("EE311","A3"),
	array("EE304","C4"),
	array("EE305","H4"),

	array("ME206","A3"),
	array("ME303","B3"),
	array("ME308","C3"),
	array("ME305","A4"),
	
	array("CS201","B3"),
	array("CS310","C3"),
	array("CS303","E3"),
	array("CS305","G3"),
	array("CS304","H3"),
	array("CS699","F4"),
	array("CS601","D4"),
	array("CS609","A4"),
	array("CS208","A4"),
	array("CS308","L1"),
    array("CS310(LAB)","L2"),
    array("CS207(2.00-5.00)","L5"),
    array("CS201P","L5"),
	
	array("EE608","B4"),
	array("EE615","G3"),
	array("EE508","G3"),
	array("EE509","D3"),
	array("EE620","C3"),
	array("EE606","E3"),
	array("EE609","H3"),
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
	array("ME602","H3"),
	array("ME603","B3"),

	array("ME205(3.00-6.00)","L1"),	array("ME606","D3"),
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
	array("BY505","H3"),
	array("BY503","H3"),
	array("BY506","C3"),
	array("BY507","4"),
	array("BY508","C3"),
	//array("BY510","3"),
	//array("BY511","3"),
	//array("BY512","3"),
	//array("BY513","3"),
	array("PH502","G3"),
	array("PH506","D3"),
	array("PH511","G4"),
	array("PH512","H4"),
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
	
	array("","")
	);
	
  echo "List of courses<br><select id=clist>";
	for($i=0;$i<95;$i++)
	       echo "<option class=".$courses[$i][1]." value=".$courses[$i][0].">".$courses[$i][0]."</option>";
    echo "</select><br>";
?>

<html>
  <head>
  <meta charset="utf-8">
  
  <script type="text/javascript" src=js/jquery.min.js></script>
  <script type="text/javascript" src=content/js/bootstrap.min.js></script>
  <link rel="stylesheet" type="text/css" href="content/css/bootstrap.min.css">
  <script type="text/javascript" src=js/send.js></script>
  <link rel="stylesheet" type="text/css" href="design.css">
  <style type="text/css">#clist {font-size:20px;}

         option {padding:5px;text-align:center;}
         tr{font-size: 20px;}
         .jumbotron{background-color:#00F4F4;color:;text-align: center;font-family:monospace;background-image:radial-gradient(#00F4F4,#119191);}
         .small{width:15%;height:15%;}
         .tt{width:70%;height:70%;}
         </style>

  </head>
  <body>
  <div class=container>
  	<div class=jumbotron><h2><img src=logo_iit1.png class=small>IInd,IIIrd,IVth Year B.Tech and MTech(Mechanical/Energy)</h2></div>
  	<ul id=crss>
  	</ul>
  </div>
<script>

$('#clist').change(function(){
	var copt=$('#clist option:selected').val()
	var slot=$('#clist option:selected').attr('class');
	$('#crss').append("<li>"+copt+"</li><button>X</button>");
	$("."+slot).not("option").html(""+copt);
	//$('#clist option[value="'+copt+'"]').remove();
});
//$('.bcls').click(function(){
//var slot=$(this).attr('class');
//$("."+slot).not("option").html(" ");
//});
</script>
  </body>
</html>

<?php

 echo "<table id=tt><tr>";  
  for($i=0;$i<10;$i++)
    echo "<th>".$time[$i]."</th>";
   echo "</tr>";

  for($i=0;$i<5;$i++)
    { echo "<tr><th>".$days[$i]."</th>";
      for($j=0;$j<9;$j++){
        echo "<td>".$ftime[$i][$j]."</td>";
      }
    echo "</tr>";
      
      }echo "</table>";
?>
