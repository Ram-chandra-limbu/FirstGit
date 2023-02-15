<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="sita.css">
    </head>
<body>



<h2 class="ram">My First JavaScript</h2>
<div class= "Lilly">
<button type="button"
onclick="document.getElementById('lilly').innerHTML = Date()">
display .</button>
</div>

<div class= "don">
<button type= "button" 
onclick = "document.getElementById('Ramchandra'). innerHTML = Date()">
dispaly .</button>
</div>

<div class= "fr">
<P id= "Ramchandra"></P>
<p id="lilly"; Ramchandra></p>
</div>


<h2>What Can JavaScript Do?</h2>

<p>JavaScript can change HTML attribute values.</p>

<p>In this case JavaScript changes the value of the src (source) attribute of an image.</p>

<button onclick="document.getElementById('myImage').src='https://vidcdn.123rf.com/preview_480/kbuntu/kbuntu1312/kbuntu131200153.mp4'">Turn on the light</button>

<img id="myImage" src="pic_bulboff.gif" style="width:100px">

<button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Turn off the light</button>


</body>
</html> 
