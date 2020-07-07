#tp{
	background:-webkit-linear-gradient(left,lightgrey,silver,darkgray,gray,dimgrey,slategray,black);
	background:-webkit-linear-gradient(left,lightgrey,silver,darkgray,gray,dimgrey,slategray,black);
}



	/*------------------------------ HEADER ------------------------------*/
#header {
	background:-webkit-linear-gradient(left,black,black);
	background:linear-gradient(left,black,black);
	height: 170px;
	padding: 6px 0 0;
}
#header > div {
	width: 940px;
	margin: 0 auto;
	padding: 0 10px;
	text-align: right;
}
/** Logo **/
#logo {
float: left;
 padding: 0 20px 20px 0;

}
/** Navigation **/
#navigation {
	display: inline-block;
	line-height:220px;
	list-style: none;
	margin: 0;
	padding: 0;
*width: 345px; /** Needed for IE7 **/
}
#navigation li {
	float: left;
	margin: 0 8px;
}
#navigation li:first-child {
	margin-left: 0;
}
#navigation li a {
	color: #fff;
	font-family: "Oswald";
	font-size: 28px;
    
	text-decoration: none;
	text-transform: uppercase;
}
#navigation li a:hover, #navigation li.selected a {
	color: white;

}
/* slideshow of images*/
body {
font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;
max-height:450px;
max-width:1335px;
padding: 6px 0 0;

}
/* Slideshow container */
.slideshow-container-fluid {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 0px;
  width: 0px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("gallery/multi.gif");

    /* Full height */
    height: 20px; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.container {
  position: relative; 
  max-width: 800px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.mySlides fade.content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}
/*boxes*/
.bgo {
    /* The image used */
    background-image: url("gallery/chem.gif");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}




em {
    color: #232027;
}

.wrapper {
    width: 80%;
    margin: 30px auto;
}

div.gallery {
    margin-top: 30px;
}

div.gallery ul {
    list-style-type: none;
    margin-left: 35px;
}

/* animation */
div.gallery ul li, div.gallery li img {
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}
div.gallery ul li, div.gallery li div {
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}

div.gallery ul li {
    position: relative;
    float: left;
    width: 230px;
    height: 230px;
    margin: 5px;
    padding: 5px;
    z-index: 0;
}

/* Make sure z-index is higher on hover */
/* Ensure that hover image overlapped the others */
div.gallery ul li:hover {
    z-index: 5;
}

/* Image is position nicely under li */
div.gallery ul li img {
    position: absolute;
    left: 0;
    top: 0;
    border: 1px solid #dddddd;
    padding: 5px;
    width: 230px;
    height: 230px;
    background: #f0f0f0;
}

div.gallery ul li img:hover {
    width: 400px;
    height: 400px;
    margin-top: -130px;
    margin-left: -130px;
    top: 65%;
    left: 65%;
}

p.attribution {
    font-family: 'Consolas';
    color: #000;
    clear: both;
    text-align: center;
    line-height: 25px;
    padding-top: 30px;
}

p.attribution a {
    color: #4c8d7c;
}

/* Responsive hack */
@media only screen and (min-width: 499px) and (max-width: 1212px) {
    .wrapper {
        width: 500px;
    }
}

@media only screen and (max-width: 498px) {
    .wrapper {
        width: 300px;
    }

    div.gallery ul {
        list-style-type: none;
        margin: 0;
    }
}
/** Main **/
#main {
  width: 448px;
}
  #contents #about, #contents #contact {
  min-height: 900px;
  width: 900px;
  padding: 20px 30px 0;
}
/** Contact **/

#contact form label {
  color: white;
  display: block;
  font-size: 14px;
  line-height: 24px;
}
#contact form input {
  color: #626161;
  font-size: 13px;
  height: 27px;
  line-height: 27px;
  width: 440px;
  border: 3px solid #af8112;
  margin: 0 0 12px;
}
#contact form input.btn1 {
  color: #966a01;
  cursor: pointer;
  font-family: "Oswald";
  height: 34px;
  line-height: 34px;
  width: 109px;
  border: 0;
  padding: 0 0 2px;
  text-transform: uppercase;
}
#contact textarea {
  color: #626161;
  font-size: 14px;
  height: 158px;
  line-height: 24px;
  width: 440px;
  border: 3px solid #af8112;
  margin: 0 0 12px;
  overflow: auto;
  resize: none;
}

