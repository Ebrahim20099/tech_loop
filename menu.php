<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
    <script src="menu.js"></script>
    <link rel="stylesheet" href="swiper-bundle.min.css">
</head>
      <body style="height: 2000px;">
	
      <div class="topnav" id="myTopnav">
      <a href="">
        <img src="images/tec.png" alt="" class="tec">
        </a>
        <a href="#home" class="active">Home</a>
        <a href="#news" class="neaa">News</a>
        <a href="menucont/contact.php" class="coaa">Contact</a>
        <div class="dropdown">
          <button class="dropbtn">Training
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#" class="yosili">Software Testing</a>
            <a href="#" class="yosli">Software Development</a>
          </div>
        </div>
        <a href="#about" class="abaa">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>







	
    <div class="slider">
		<!-- fade css -->
		<div class="myslide fade" style="display: none;">
			<div class="txt">
				<h1>Software Testing</h1>
				<p>Web Devoloper<br>join To our website</p>
        <button class="button2">Read more</button>
			</div>
			<img src="images/img1.png" style="width: 100%; height: 100%;" class="imsil">
		</div>
		
		<div class="myslide fade" style="display: none;">
			<div class="txt">
				<h1>Full Stack Web </h1>
				<p>Web Devoloper<br>join To our website</p>
        <button class="button2">Read more</button>
			</div>
			<img src="images/img2.png" style="width: 100%; height: 100%;" class="imsil">
		</div>
		
		<div class="myslide fade" style="display: block;">
			<div class="txt">
				<h1>Performance Testing</h1>
				<p>Web Devoloper<br>join To our website</p>
        <button class="button2">Read more</button>
			</div>
			<img src="images/img3.png" style="width: 100%; height: 100%;" class="imsil">
		</div>
		
		<div class="myslide fade" style="display: none;">
			<div class="txt">
				<h1>Flutter Diploma</h1>
				<p>Web Devoloper<br>join To our website</p>
        <button class="button2">Read more</button>
			</div>
			<img src="images/img4.png" style="width: 100%; height: 100%;" class="imsil">
		</div>
		
		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">❮</a>
  		<a class="next" onclick="plusSlides(1)">❯</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot active" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
		</div>
		<!-- /onclick js -->
	</div>






	






	  <div class="wrapper">
      <div class="container">
        <i class="fas fa-utensils"></i>
        <span class="num" data-val="400">000</span>
        <span class="text">Visitors</span>
      </div>
      <div class="container">
        <i class="fas fa-smile-beam"></i>
        <span class="num" data-val="340">000</span>
        <span class="text">Students</span>
      </div>
	  <div class="container">
        <i class="fas fa-smile-beam"></i>
        <span class="num" data-val="100">000</span>
        <span class="text">Lectures</span>
      </div>
	  
      <div class="container">
        <i class="fas fa-star"></i>
        <span class="num" data-val="280">000</span>
        <span class="text">Instructors</span>
      </div>
    </div>
    <!-- Script -->
    <script>
		let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;
valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
	</script>

<h1 class="toson"">TECH LOOP your quality partner</h1>
<h2 style="text-align: left" class="vc">WHO ARE WE ?</h2>
<div class="stm_s">
	<div class="stm_s"></div>
</div>
<p style="font-size: 18px;line-height: 32px;text-align: left" font-size: 18px;
    line-height: 32px;
    text-align: left; class="vc_c">TECH LOOP is an independent software testing service provider. That can fulfill the majority of the test deliveries, that can be carried out onshore / offshore and deliver the cost saving that only a dedicated test center can provide.</p>
<img src="images/home-img.jpg" alt="" class="discr">




<p class="ourl">Our Courses</p>

                  

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile1.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Software Testing</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">Read More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile2.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Full Stack</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">Read More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile3.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Performance Testing</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">Read More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile4.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Flutter Diploma</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">Read More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile5.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Business Process</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">Read More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile6.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">TECH LOOP</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile7.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">TECH LOOP</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile8.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">TECH LOOP</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile9.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">TECH LOOP</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        

    <!-- Swiper JS -->
      <!--Uncomment this line-->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="js/script.js"></script>

 





	
<script>
  const myslide = document.querySelectorAll('.myslide'),
	  dot = document.querySelectorAll('.dot');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 3000);
function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 3000);
}

function slidefun(n) {
	
	let i;
	for(i = 0;i<myslide.length;i++){
		myslide[i].style.display = "none";
	}
	for(i = 0;i<dot.length;i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > myslide.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = myslide.length;
	   }
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}






var className = "inverted";
var scrollTrigger = 60;

window.onscroll = function() {
  // We add pageYOffset for compatibility with IE.
  if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
    document.getElementsByTagName("header")[0].classList.add(className);
  } else {
    document.getElementsByTagName("header")[0].classList.remove(className);
  }
};
</script>



<div class="foooter">
<a href="" class="link-logo"> 
  <img src="images/tec.png" alt="" class="tecff">
</a>
<p class="pff">151 St, Building 4, Floor 12,
Next to Elhorya Square. Maadi</p>
<p class="ppff">
MObile
</p>
<p class="ptff">+201272221501</p>
<p class="gmf">Gmail</p>
<p class="pgff">contact@techloop.academy</p>
<p class="sitem">Site map</p>
<p class="difff">TECH LOOP for Software Testing Services</p>
<div class="fflist">
    <a href="#" class="hitem">HOME</a>
			<a href="#" class="citem">courses</a>
            <a href="#" class="aitem">About us</a>
            <a href="#" class="ccitem">Contact us</a>
            </div>
</div>

<body/>
</html>