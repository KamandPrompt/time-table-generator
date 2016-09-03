


<html>
  <head>
  <meta charset="utf-8">
  <title>Timetable Generator</title>
  <script type="text/javascript" src=js/jquery.min.js></script>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css"> 
#background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('SouthCampus.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    opacity: 0.4;
    filter:alpha(opacity=40);
    display:none;
}

.head{
    width: 150px;
    height: 160px;
}
body {
    text-align: center;
    background: #FFF;
    padding-top: 12px;
    line-height: 2;
}
#ldng{position:fixed;top:45%;left:45%;background:transparent;}
.fb-like{position:absolute;top:100%;left:0%;}
.fb-share-button{position:absolute;top:100%;left:0%;}
.fb-comments{background-color:white;position:absolute;bottom:0px;right:30%;}
button{background-color:blue;color:white;}
.page-content{display: none;}
h4,h1{color:white;}
</style>
<!-- Wide card with share menu button -->
<style>
.demo-card-wide.mdl-card {
  width: 1000px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 470px;
  background: url('IIT_Mandi_Logo.jpg') center no-repeat;

	}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
.small{width:15%;height: 25%;}
</style>


  </head>
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
  
  <main class="mdl-layout__content" >
    <div class="page-content">
    	<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text">
    This is a Web Application built to create your Academic Timetable of the courses at IIT Mandi
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id=strt>
      Get Started
    </a>
  </div>
  <div class="mdl-card__menu">
    
      <a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftimetable-generator.herokuapp.com" id=shr1><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id=shr><i class="material-icons">share</i></button></a>
      
    
  </div>
</div><br>

 <br><br>
<h1><img src=cald.png class=small>Timetable Generator</h1>
 <h4>B. Tech.</h4>
<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id=fst>
  I<sup>st</sup>
</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id=snd>
  II<sup>nd</sup>
</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id=trd>
  III<sup>rd</sup>
</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id=frth>
  IV<sup>th</sup>
</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br><br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id=ms>
  M.Sc.
</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id=mtch>
  M.Tech.
</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <br><br><br><br><br>
    <div class="fb-like" data-href="https://timetable-generator.herokuapp.com/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    
<!--<div class="fb-share-button" data-href="https://timetable-generator.herokuapp.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Flearning%2Ftime%2Ftime-table-generator%2Findex.php&amp;src=sdkpreparse">Share</a></div>-->

   <!--<div class="fb-comments" data-href="https://timetable-generator.herokuapp.com/" data-numposts="5"></div>-->
    </div>
  </main>
  <div id="background"></div>

<img src=Preloader_5.gif id=ldng>
<!--<div class="mdl-spinner mdl-js-spinner is-active">
</div>-->
  <script>
$('#ms').click(function(){
  window.location.replace('mscc2016.php');
});
$('#fst').click(function(){
  window.location.replace('imp.php');
});
$('#snd').click(function(){
  window.location.replace('fourth.php');
});
$('#trd').click(function(){
  window.location.replace('fourth.php');
});
$('#frth').click(function(){
  window.location.replace('fourth.php');
});
$('#mtch').click(function(){
  window.location.replace('fourth.php');
});
$('#strt').click(function(){
  $('.mdl-card').slideUp('fast');
});
$(window).load(function(){
 //$('.mdl-spinner').fadeOut('slow');
 $('#ldng').fadeOut('slow');
 $('#background').fadeIn('slow');
 $('.page-content').fadeIn('slow');
 $("body").css('background-color','black');
 
 //setInterval(function(){
 //	var color='#'+(Math.round(Math.random()*16777216)).toString(16);
 //	var color2='#'+(Math.round(Math.random()*16777216)).toString(16);
//
 //	$('body').css('background-image','radial-gradient('+color+','+color2+')');
 //},1000);

});




</script>
  </body>
</html>



