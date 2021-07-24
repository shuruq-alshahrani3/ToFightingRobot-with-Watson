<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	
<style>
html, body, .page-container {
    height: 100%;
}

body {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 19px;
    font-weight: 300;
    color: white;
    line-height: 1.5;
}

a {
	font-size: 40px;
    text-align: center;
	color: #9F6;
    text-decoration: none;
    transition: all 0.3s ease;
}

a:hover {
	color: #3CF;
}

p {
    text-align: center;
    line-height: 1.7;
}

h2 {
	font-size: 30px;
    text-align: center;
    font-size: 1.8rem;
}

.highlight {
    color: #99FF66;
}

.page-container {
    display: flex;
    flex-direction: column;
    padding-left: 30px;
    padding-right: 30px;
}

.container-fluid {
    max-width: 1860px;
}

.btn {
    font-size: 1.3rem;
    padding: 13px 23px;
    border-radius: 0;
}

.btn-primary {
    background-color: white;
    border: none;
    color: #333;
}

.btn-primary:hover,
.btn-primary:focus {
    color: #5cac38;
    background-color: white;
}

/* Style the video: 100% width and height to cover the entire window */
#bg-video {
    position: fixed;
    left: 43%;
    top: 33%;
    bottom: 39px;
    right: 910px;
    min-width: 200%;
    min-height: 200%;
    transform: translateX(-50%) translateY(-50%);
    z-index: -200;
    background-image: url('../img/tm-astro-bg.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}


#tm-nav {
    z-index: 1000;
}

.navbar a {
    color: white;
}

.navbar-brand {
    font-size: 60.4rem;
}

.navbar {
    margin-top: 50px;
}

.navbar .navbar-nav .nav-item {
    margin-left: 15px;
    margin-right: 15px;
    top: -18px;
    left: 385px;
    width: 1033px;
}

.navbar .navbar-nav .nav-item:last-child {
    margin-right: 0;
}

.navbar .navbar-nav .nav-item .nav-link {
    font-size: 1.5rem;
    padding: 15px 65px;
    border-bottom: 1px solid white;
}

.nav-item {
    position: relative;
}

.circle {
    position: absolute;
    left: 40px;
    bottom: -10px;
    width: calc(100% - 80px);
    height: 20px; 
    background-color: white;
    border-radius: 50%;
}

.tm-border-bottom {
    border-bottom: 1px solid white;
    padding-bottom: 48px;
}

.tm-border-top {
    border-top: 1px solid white;
    padding-top: 48px;
    top: -21px;
    left: 74px;
    height: 719px;
    width: 1522px;
}

.navbar .navbar-nav .nav-item.selected .nav-link,
.navbar .navbar-nav .nav-item .nav-link:hover {
    color: #99FF66;
    border-bottom: 1px solid #99FF66;
    width: 1121px;
    margin-left: 190px;
}

.cd-slider-nav li.selected a+.circle,
.navbar .navbar-nav .nav-item .nav-link:hover+.circle {
    background-color: #99FF66;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-toggler {
    border: 1px solid rgba(255,255,255,1);
}

.navbar-toggler:focus {
    box-shadow: none;
}

.tm-link-white {
    color: white;
}

.tm-link-white:hover,
.tm-link-white:focus {
    color: #99FF66;
}

.cd-hero-slider {
    padding: 10px 0;
}

.cd-hero-slider li { 
    list-style: none;
}

.content-pad {
    padding: 40px 30px;
}

.page-width-1 {
    max-width: 810px;
}

.page-width-2 {
    max-width: 912px;
}

.page-left {
    margin-left: 100px;
}

.page-right {
    margin-right: 100px;
    margin-left: auto;
}

.tm-bg-dark {
    background-color: rgba(0,0,0,0.3);
}

.intro-left {
    margin-right: 20px;
    padding: 30px 40px;
    max-width: 505px;    
}

.intro-img-1 {
    margin-bottom: 20px;
}

.intro-circle-1 {
    left: -20px;
    top: -10px;
}

.intro-circle-2 {
    right: -20px;
    top: -10px;
    left: auto;
}

.intro-circle-3 {
    right: -20px;
    bottom: -10px;
    left: auto;
}

.intro-circle-4 {
    left: -20px;
    bottom: -10px;
}

.tm-intro-btn {
    margin-top: 25px;
}

.tm-footer {
    padding-top: 25px;
    padding-bottom: 25px;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

/* Gallery page */
.gallery-container {
    max-width: 1300px;
}

/*Button slider*/

.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background:  #9F6;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 10;
}



.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #04AA6D;
  cursor: pointer;


}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #04AA6D;
  cursor: pointer;
}

.slick-dots {
    bottom: -80px;
}

.gallery-slider figure {
	position: relative;
	float: left;
    overflow: hidden;
    margin: 0;
    max-width: 240px;
    margin-left: 10px;
    margin-right: 10px;
	height: auto;
	background: #3085a3;
	text-align: center;
	cursor: pointer;
}

.gallery-slider figure img {
	position: relative;
	display: block;
	min-height: 100%;
	max-width: 100%;
}

.gallery-slider figure figcaption {
	padding: 1em;
	color: #fff;
	text-transform: uppercase;
	font-size: 1.25em;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.gallery-slider figure figcaption::before,
.gallery-slider figure figcaption::after {
	pointer-events: none;
}

.gallery-slider figure figcaption,
.gallery-slider figure figcaption > a {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.gallery-slider figure figcaption > a {
	z-index: 1000;
	text-indent: 200%;
	white-space: nowrap;
	font-size: 0;
	opacity: 0;
}

.gallery-slider figure h2 {
	word-spacing: -0.15em;
  font-weight: 300;
  font-size: 28px;
}

.gallery-slider figure h2 span {
	font-weight: 800;
}

.gallery-slider figure h2,
.gallery-slider figure p {
	margin: 0;
}

.gallery-slider figure p {
	letter-spacing: 1px;
	font-size: 68.5%;
}

.gallery-section {
  background-color: #99ccff;
}

.gallery-section .title {
  padding-right: 13px;
  margin-bottom: 80px;
}




.gallery-slider .slick-dots li.slick-active, 
.gallery-slider .slick-dots li:hover {
    background-color: #3CCDFF;
}

.gallery-slider .slick-dots li {
    background-color: #ffffff;
    width: 20px;
    height: 20px;
    border-radius: 100%;
    margin: 0 10px;
    transition: all 0.3s ease;
}



@media (min-width: 992px)
{
    .navbar-expand-lg .navbar-collapse {
        justify-content: flex-end;
    }
}

@media (max-width: 1200px) {
    .navbar .navbar-nav .nav-item .nav-link {
        padding: 15px 45px;
    }
}

@media (max-width: 1024px) {
    .navbar .navbar-nav .nav-item .nav-link {
        font-size: 1.2rem;
    }
}

@media (max-width: 992px) {
    .navbar {
        margin-top: 0;
    }

    .navbar {
        position: relative;
    }
    
    .navbar-collapse {
        position: absolute;
        top: 63px;
        right: 0;
        background: rgb(54 75 96);
        border-radius: 5px;
    }

    .navbar .navbar-nav .nav-item {
        margin-bottom: 20px;
    }

    .page-left,
    .page-right {
        margin-left: auto;
        margin-right: auto;
    }

    .cd-hero-slider {
        padding: 10px 0;
    }
}

@media (max-width: 834px) {
    .intro-left {
        width: 65%;
    }

    .intro-right {
        width: 35%;
    }
}

@media (max-width: 767px) {
    .tm-contact-left {
        padding-right: 15px;
        margin-bottom: 50px;
    }

    .tm-footer-right {
        text-align: left;
        margin-top: 10px;
    }
}

@media (max-width: 600px) {
    .intro-left,
    .intro-right {
        width: 100%;
    }

    .intro-left {
        margin-right: 0;
        margin-bottom: 20px;
        max-width: none;
    }

    .intro-right {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .intro-container {
        flex-direction: column;
    }

    .intro-img-1 {
        margin-right: 4%;
        margin-bottom: 0;
        width: 48%
    }

    .intro-img-2 {
        width: 48%;
    }
}
</style>
	</head>

<body>
<center>
<br><br>
<a href="directione.php"><b> Select Directions </b></a>
<br><br>

<video/gfp-astro-timelapse id="bg-video">
                <source src="video/gfp-astro-timelapse.mp4" type="video/mp4" />
				</video>
            
<form method="post" action ="config.php">

				<div class="page-container" role="slider">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="cd-slider-nav">
                                <nav class="navbar navbar-expand-lg" id="Nav1">
                                    <h1>Control To Robot ARM</h1>
                                    <div class="collapse navbar-collapse" id="navbar-supported-content">
                                        <ul class="navbar-nav mb-2 mb-lg-0">
										
										
										<div class="input-group tm-mb-30">
                                          <div class="page-width-1 page-left">
                                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                                            <div class="intro-left tm-bg-dark">
											<div class="intro- right">
										Motor1  <input type="range" name="motor1" id="motor1" min="0" max="180" value="0"  />
	   
	   <p style="color: #66FF33; font-family: 'Dubai Light';">Value: <span id="Span1"></p>
                                                <script>
                                                    var w = document.getElementById("motor1");
                                                    var m = document.getElementById("Span1");
                                                    m.innerHTML = w.value;

                                                    w.oninput = function () {
                                                        m.innerHTML = this.value;
                                                    }
                                                </script>
												
												
												 Motor2  <input type="range" name="motor2"  id="motor2" min="0" max="180" value="0"  />
	   <p style="color: #66FF33; font-family: 'Dubai Light';">Value: <span id="Span2"></p>
                                                <script>
                                                    var t = document.getElementById("motor2");
                                                    var o = document.getElementById("Span2");
                                                    o.innerHTML = t.value;

                                                    t.oninput = function () {
                                                        o.innerHTML = this.value;
                                                    }
                                                </script>
	   Motor3  <input type="range" name="motor3" id="motor3" min="0" max="180" value="0"  />
	   <p style="color: #66FF33; font-family: 'Dubai Light';">Value: <span id="Span3"></p>
                                                <script>
                                                    var h = document.getElementById("motor3");
                                                    var r = document.getElementById("Span3");
                                                    r.innerHTML = h.value;

                                                    h.oninput = function () {
                                                        r.innerHTML = this.value;
                                                    }
                                                </script>
												</div>
												</div>
												
												
												<div class="intro-left">
                                                <div class="intro-left tm-bg-dark">
											
											
	   Motor4  <input type="range" name="motor4" id="motor4" min="0" max="180" value="0"  />
	   <p style="color: #66FF33; font-family: 'Dubai Light';">Value: <span id="Span4"></p>
                                                <script>
                                                    var f = document.getElementById("motor4");
                                                    var u = document.getElementById("Span4");
                                                    u.innerHTML = f.value;

                                                    f.oninput = function () {
                                                        u.innerHTML = this.value;
                                                    }
                                                </script>
												 Motor5  <input type="range" name="motor5" id="motor5" min="0" max="180" value="0" />
	   <p style="color: #66FF33; font-family: 'Dubai Light';">Value: <span id="Span5"></p>
                                                <script>
                                                    var v = document.getElementById("motor5");
                                                    var i = document.getElementById("Span5");
                                                    i.innerHTML = v.value;

                                                    v.oninput = function () {
                                                        i.innerHTML = this.value;
                                                    }
                                                </script>
	   Motor6  <input type="range" id="motor6" name="motor6" min="0" max="180" value="0"  />
	   <p style="color: #66FF33; font-family: 'Dubai Light';">Value: <span id="Span6"></p>
                                                <script>
                                                    var n = document.getElementById("motor6");
                                                    var a = document.getElementById("Span6");
                                                    a.innerHTML = n.value;

                                                    n.oninput = function () {
                                                        a.innerHTML = this.value;
                                                    }
                                                </script>
												</div>
												     
												</div>
											
												</div>
												
												
											
                                            <div class="form-group mt-4">
	   <input type="submit" name="submit" class="btn btn-primary tm-intro-btn tm-page-link" value="Save"/>
	   
	   <button type="button" class="btn btn-primary tm-intro-btn tm-page-link" id="demo" onclick='document.getElementById("demo").innerHTML = "Done"'>Start</button>

	  
	   </div>
										</div>
										</div>
										
										</div>
												</div>
												</div>
										 </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
	   
      
             
</form>
</center>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "aa771dca-6111-4c14-86c9-834606307c9d", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "d35297e2-c727-4fb7-903b-ae645cab4580", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>


</body>

</html>