<?php
/*
 * get ?query_variable from url after /
 * and check if the substring of hte first 7 characters is 'http://'
 * if so, redirect using the full string	
**/
$qvURL = $_GET["url"];
if(substr( $qvURL, 0, 7 ) === "http://"){
	//redirect to URL
	header( 'Location: ' . $qvURL ) ;
} else {
	//CARRY_ON: render some html
}
/*
	
*/
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>funWithCanvas</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      #funWithCanvas{
	position:absolute;
	width:100%;height:100%;
	background:gray;
}
#theCan{
	position:absolute;
	width:100%;height:100%;
}
h6{
	font-family: Verdana,Geneva,sans-serif; 
	font-size:8px;line-height:1;
	text-transform:uppercase;
	color:rgba(255,255,255,0.777);
	position:absolute;display:block;
	top:50%;margin:-4px 0 0 0;
	width:100%;text-align:center;
}
blockquote{
	position:absolute;display:block;
	width:67%;min-width:277px;max-width:777px;
	right:3%;bottom:3%;
	font-family: Impact, Charcoal, sans-serif;
	font-weight:100;color:rgba(0,0,0,0.77);
	font-size:334%;text-align:right;

	
	opacity:0.34;
	
	-webkit-transition: all 7s cubic-bezier(.11,.77,.86,.34); 
	   -moz-transition: all 7s cubic-bezier(.11,.77,.86,.34); 
		 -o-transition: all 7s cubic-bezier(.11,.77,.86,.34); 
			transition: all 7s cubic-bezier(.11,.77,.86,.34);
}
blockquote:hover{
	cursor: progress;
	
	opacity:1.0;
}
#logo{
	width:77px;height:auto;
}

@media only screen and (max-width: 734px) {
	blockquote{
		font-size: 211%;
		opacity:0.86;
	}
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div id="funWithCanvas">
	
	<canvas id="theCan" width="420" height="211"></canvas>
	<h6>Data Visualization of Math.random();</h6>
	<h11>Data Visualization of Math.random();</h11>
	<blockquote>Forgive Everyone
	</blockquote>
</div>
  
    <script data-src="/library/js/index.js">
	    
	    //initialize drawing area, width, height
var c=document.getElementById("theCan");
var container=document.getElementById("funWithCanvas");
c.width=container.clientWidth;
c.height=container.clientHeight;
var ctx=c.getContext("2d");

//fill canvas context with gradient; which starts at x=0;y=0 (TOP LEFT) and ends at x=100%;y=100% (BOTTOM RIGHT)
var grd=ctx.createLinearGradient(0,0,c.width,c.height);
grd.addColorStop(0,"#8EE4EE");
grd.addColorStop(1,"#001E34");

ctx.fillStyle=grd;
ctx.fillRect(0,0,c.width,c.height);


function drawRandomPoint(){
		//fillStyle white with random alpha channel
   	ctx.fillStyle = "rgba(255,255,255,"+Math.random()+")";

		//set random x & y coord within canvas, and draw 1x1 dot at it
   	var randoX=Math.random()*c.width;
		var randoY=Math.random()*c.height;
		ctx.fillRect(randoX,randoY,1,1);
}

//draw random point every so often (in milliseconds)
var myTimer=setInterval(drawRandomPoint,0.034);//ms




//draw center point in today's date hex- EH
ctx.fillStyle = "#041317";
ctx.fillRect(c.width/2,c.height/2,1,1);

    </script>

</body>
</html>
