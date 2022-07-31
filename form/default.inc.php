<style type="text/css">

* {
	margin: 0;
	padding: 0;
	border: 0;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display:block;
}
*,
::after,
::before {
  box-sizing: inherit;
}

ul {
   padding-left: 0;
   margin: auto;
 }
 body {
  overflow-x: hidden;
 }
 .container-fluid {
  box-sizing: border-box;
 }
/*================================

  				UNIVERSAL CSS

=================================*/
/*================================
        	Background
=================================*/
/**Colors:
Yellow/gold: #f18a21
Red: #e32727
Aqual/Teal: #0096a9
light-grey: #f1f1f2
black: #000000
white: #ffffff
Rainbow:


Faded yellow/gold: #fdf3e7
Faded red: #fae9e9
faded aqua/teal: #d4eaeb
Rainbow BG: background-image: linear-gradient(#e32727, #f18a21, #0096a9);
Faded Rainbow BG: background-image: linear-gradient(#ffd2d3, #ffe7d0, #cfeaee);

/*================================
        	Background
=================================*/
/**Rainbow Gradient**/
.rainbow-horizontal {
  background-image: linear-gradient(to right, #e32727, #f18a21, #0096a9);
}
.faded-rainbow {
  background-image: linear-gradient(to right, #ffd2d3, #ffe7d0, #cfeaee);
}
/**Flower/Plant background at bottom of screen **/
main {
    background-image: url(../images/coae-background.png);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: bottom;
    padding-bottom: 350px;
}
.main-top-space {
  padding-top: 50px;
}
@media (max-width: 767px) {
  main {
    background-image: url(../images/coae-background-mobile.png);
    background-size: 260px;
    padding-bottom: 300px;
  }
  .main-top-space {
    padding-top: 20px;
  }
}


/*================================
   Text: Font Styling & Color
=================================*/

/**fonts**/
a, p, h1, h2, h3, h4, h5, span, button {
	font-family: effra, sans-serif;
	font-weight: 400;
	font-style: normal;
	color: black;
}
a {
	 font-size: 20px;
	 font-weight: 400;
	 transition: .6s ease-in-out;
	 text-decoration: none;
 }
a:hover {
	 color: #0096a9;
	 transition: .6s ease-in-out;
    cursor: pointer;
}
a.hvr-gold:hover {
    color: #f18a21;
}
a.hvr-red:hover {
    color: #e32727;
}
p {
	 font-size: 20px;
	 font-weight: 300;
 }
h1 {
	 font-size: 60px;
	 font-weight: 900;
	 letter-spacing: 1.5px;
	 text-transform: uppercase;
	 padding-bottom: 20px;
}
h2 {
	 font-size: 56px;
	 font-weight: 400;
	 font-weight: 900;
	 letter-spacing: 1.5px;
	 text-transform: uppercase;
}
h3 {
	 font-size: 44px;
	 font-weight: 400;
	 font-weight: 900;
	 letter-spacing: 1.5px;
	 text-transform: uppercase;
}
h4 {
	 font-size: 32px;
	 font-weight: 400;
	 font-weight: 900;
	 letter-spacing: 1.5px;
	 text-transform: uppercase;
}
h5 {
	 font-size: 24px;
	 font-weight: 400;
	 font-weight: 900;
	 letter-spacing: 1.5px;
	 text-transform: uppercase;
}

/*color text**/
/**Use color class for text to be that color**/
.gold {
	color: #f18a21;
}
.teal {
	color: #0096a9;
}
.red {
	color: #e32727
}
.black {
	color: #000000;
}
.white {
	color: #ffffff;
}
.faded-teal {
  color: #d4eaeb;
}
.faded-gold {
  color: #fdf3e7;
}
.faded-red {
  color: #fae9e9;
}
/*================================
        	 	Buttons
=================================*/
/**Use no class for regular styled button (gold).
Use color class for different color buttons in "<button></button>"" tag or in "<a></a>" tag **/

button {
	background-color: #f18a21;
	color: white;
	border-radius: 2px;
	padding: 12px;
	min-width: 175px;
	font-size: 16px;
	font-weight: 600;
	letter-spacing: 2px;
	transition: .6s ease-in-out;
}
button:hover {
	background-color: #000000;
	color: white;
	transition: .6s ease-in-out;
}
button a {
	color: white;
	border-radius: 2px;
	padding: 12px;
	min-width: 175px;
	font-size: 16px;
	font-weight: 600;
	letter-spacing: 2px;
	transition: .6s ease-in-out;
  text-transform: uppercase;
}
button a:hover {
	color: white;
	transition: .6s ease-in-out;
}

.gold-button {
	background-color: #f18a21;
	transition: .6s ease-in-out;
}
.teal-button {
	background-color: #0096a9;
	transition: .6s ease-in-out;
}
.red-button {
	background-color: #e32727;
	transition: .6s ease-in-out;
}



/*================================
        Arrows
=================================*/

.arrow {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  position: relative;
  bottom: 2px;
}

.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}

/*================================
        Header
=================================*/
.nav-logo {
	padding: 20px;
}

@media (min-width: 767px) and (max-width: 1300px)  {
	.header-right {
		position: absolute;
		right: 90px;
		top: 20px;
	}
	.menu__btn {
		top: 30px !important;
		right: 30px !important;
	}
}
/*==========MOBILE NAV============*/

#menu__toggle {
  opacity: 0;
}

#menu__toggle:checked ~ .menu__btn > span {
  transform: rotate(45deg);
}
#menu__toggle:checked ~ .menu__btn > span::before {
  top: 0;
  transform: rotate(0);
}
#menu__toggle:checked ~ .menu__btn > span::after {
  top: 0;
  transform: rotate(90deg);
}
#menu__toggle:checked ~ .menu__box {
  visibility: visible;
  right: 0;
}

.menu__btn {
  display: flex;
  align-items: center;
  position: fixed;
  z-index: 1001;
  top: 20px;
  right: 20px;
  width: 40px;
  height: 30px;
  cursor: pointer;
}

.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
  display: block;
  position: absolute;
  width: 100%;
  height: 3px;
  background-color: #3A3532;
  transition-duration: .25s;
}
.menu__btn > span::before {
  content: '';
  top: -10px;
}
.menu__btn > span::after {
  content: '';
  top: 10px;
}

.menu__box {
  display: block;
  position: fixed;
  visibility: hidden;
  z-index: 1000;
  top: 0;
  right: -100%;
  width: 300px;
  height: 100%;
  margin: 0;
  padding: 80px 0;
  list-style: none;
  background-image: linear-gradient(#ffd2d3, #ffe7d0, #cfeaee);
  box-shadow: 1px 0px 6px rgba(0, 0, 0, .2);
  transition-duration: .25s;
}

.menu__item {
  display: block;
  padding: 12px 24px;
	letter-spacing: 2px;
  color: black;
  font-weight: 600;
  text-decoration: none;
  transition-duration: .25s;
}

.menu__item:hover {
  background-color: white;
  color: black;
}

.dropdownlist:hover {
  background-color: #ffffff;
	color: white;
	transition: .25s ease-in-out;
}

ul li ul.dropdown{
    width: 300px; /* Set width of the dropdown */
    display: none;
    position: absolute;
    z-index: 999;
		height: 100%;
		transition: .25s ease-in-out;
}

ul.dropdown{
   display: block;
    background-image: linear-gradient(#ffe7d0, #cfeaee, #ffd2d3);
		transition: .25s ease-in-out;
}
ul li ul.dropdown li{
    display: block;
    width: 300px;
}

ul li ul.dropdown li a {
	font-size: 20px;
	font-weight: 400;
	letter-spacing: 1px;
}

.hamburger-menu {
  height: 0px;
}
.dropdown3, .dropdown4 {
  display: none;
}

@media (max-width: 1300px) {
  main {
    top: 0 !important;
  }
}
/*==========-DESKTOP-MENU============*/
.desktopnav {
	display: none;
}

@media (min-width: 1300px) {
	.desktopnav {
		display: contents;
	}
	.mobilenav {
		display: none;
	}

	header {
    display: flex;
    height: 125px;
    background: #f1f1f2;
		padding-top: 5px;
		width: 100%;
		justify-content: space-evenly;
}
.dt-menu__item {
  display: block;
  padding: 12px 20px;
	letter-spacing: 2px;
  color: black;
  font-weight: 500;
  text-decoration: none;
  transition-duration: .25s;
}

	ul.desktopnav-list {
    display: inline-flex;
    list-style-type: none;
    justify-content: space-between;
    width: 100%;
	}

	ul li ul.dt-dropdown {
    width: 100%;
    display: none;
    position: absolute;
    z-index: 999;
    height: 100px;
    top: 125px;
		justify-content: space-around;
    align-content: center;
    text-align: center;
	}

	.dt-dropdown{
	    background-image: linear-gradient(to left, #ffe7d0, #cfeaee, #ffd2d3);
			transition: .25s ease-in-out;
			width: 100%;
			right: 0;
	}

	.dt-dropdown ul li {
    width: auto;
	}
	.dt-dropdownlist:hover {
	  background-color: #f1f1f2;
		color: #0096a9;
		transition: .2s ease-in-out;
	}
	.dt-menu__item:hover {
	  background-color: #f1f1f2;
	  color: #0096a9;
		transition-timing-function: .1s;
	}
	.dt-menu__item:active {
		background-color: #f1f1f2;
		color: #0096a9;
	}
	.desktopnav-container {
    max-width: 900px;
    padding: 30px;
	}

	.dt-dropdown div {
		display: inline-flex;
		text-decoration: none;
		list-style-type: none;
		justify-content: space-around;
		width: 100%;
		height: 100%;
    align-items: center;
	}
	.dt-dropdown div li .dt-menu__item {
    font-weight: 500;
    letter-spacing: 1px;
	}
	.dt-dropdown div li .dt-menu__item:hover {
		background-color: transparent;
	}

	#dropdown1 {
		display: none;
	}

	#dropdown2 {
		display: none;
	}
}
/*==========-header right============*/
.header-right {
	display: inline-flex;
	width: 200px;
	align-items: center;
	padding-bottom: 20px;
	justify-content: space-between;
}
.nav-call {
    padding: 12px 0;
    min-width: 125px;
    width: 125px;
}
svg#Layer_2 {
  width: 32px;
  padding: 7px;
}
@media (max-width: 775px) {
	.header-right {
		display: none;
	}
}

/*================================
        Footer
=================================*/

.footer-01 {
  width: 100%;
  margin: auto;
  position: absolute;
  height: 0;
}
.footer-01 img {
  width: 200px;
  position: relative;
  top: -160px;
  display: flex;
  justify-content: center;
  margin: auto;
  text-align: center;
}
.footer-02 {
  background: #f1f1f2;
  width: 100%;
  display: block;
}
.footer-nav {
  margin: auto;
  padding: 50px 0 30px;
  display: flex;
}
.social-nav {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  column-gap: 10px;
}
.social-nav a img {
  width: 40px;
  height: auto;
  max-height: 44px;
  padding: 10px;
}
.social-nav a img:hover {
  opacity: .7;
}
img.youtube {
  width: 48px !important;
}
.footer-contact {
  text-align: center;
  padding: 50px 0 75px;
}
.made-by {
  text-align: center;
  padding: 0 0 50px;
}
.made-by p i {
  font-size: 15px;
}
@media (max-width: 1300px) {
  .social-nav {
    padding-top: 50px;
  }
}
/**FORM PAGES **/
.about-intro-container {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url(../images/about-bg.png);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  min-height: 500px;
}
.page-breadcrumb {
  position: absolute;
  left: 15px;
  top: 15px;
  font-weight: 400;
  color: #ffffffa8;
  letter-spacing: 1.5px;
}
.about-intro {
  text-align: center;
  max-width: 600px;
}
.about-intro img {
  padding: 15px;
}
.about-intro h5 {
  font-weight: 400;
  padding: 15px;
  letter-spacing: 2px;

}
.about-intro p {
  font-weight: 400;
  letter-spacing: 1px;
  font-style: italic;
}



</style>

	<head>

		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">

		<title>Council on Aging of Elkhart County - Thank you!</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- CSS -->
		<link rel="stylesheet" href="../css/styles.css" />


		<!-- Adobe Font Link (Effra)-->
		<link rel="stylesheet" href="https://use.typekit.net/izo5blw.css">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="../images/favicon.png" />

	</head>

<body>
  <!-- =========== HEADER =========== -->
  <header>

    <!--brand logo-->
    <div class="nav-logo">
      <img src="../images/coae-mainlogo.png" class="" alt="COA Elkhart Logo" title="COA Elkhart Logo" width="150" />
    </div>

    <!--mobile nav-->
    <nav class="mobilenav">
      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>

        <ul class="menu__box">
          <li><a class="menu__item" href="../index.html">HOME</a></li>
          <li class="dropdownlist"><a class="menu__item" id="menu-title-1" onclick="myFunction3()">SERVICES <i
                class="arrow down"></i></a>
            <ul class="dropdown" id="dropdown3">
              <li>
                <a class="menu__item" href="../services/transportation.html">Transportation</a>
              </li>
              <li>
                <a class="menu__item" href="#target">In Home Care</a>
              </li>
              <li>
                <a class="menu__item" href="#target">Life Enrichment</a>
              </li>
              <li>
                <a class="menu__item" href="#target">Apply for Services</a>
              </li>
            </ul>
          </li>
          <li class="dropdownlist"><a class="menu__item" id="menu-title-2" onclick="myFunction4()">GET INVOLVED <i
                class="arrow down"></i></a>
            <ul class="dropdown" id="dropdown4">
              <li>
                <a class="menu__item" href="#target">Donate</a>
              </li>
              <li>
                <a class="menu__item" href="../get-involved/volunteer.html">Volunteer</a>
              </li>
              <li>
                <a class="menu__item" href="#target">Sponsorship</a>
              </li>
              <li>
                <a class="menu__item" href="#target">Join the Team</a>
              </li>
              <li>
                <a class="menu__item" href="#target">Employee Portal</a>
              </li>
            </ul>
          </li>
          <li><a class="menu__item" href="../contact.html">CONTACT</a></li>
          <li><a class="menu__item" href="../about.html">ABOUT</a></li>
          <li><a class="menu__item" href="#target">BLOG</a></li>
        </ul>
      </div>
    </nav>

    <!--desktop nav-->
    <nav class="desktopnav">
      <div class="desktopnav-container animatedParent animateOnce">
        <ul class="desktopnav-list animated delay fadeIn slow">
          <li><a class="dt-menu__item" href="../index.html">HOME</a></li>
          <li class="dt-dropdownlist"><a class="dt-menu__item" id="menu-title-3" onclick="myFunction()">SERVICES <i
                class="arrow down"></i></a>
            <ul class="dt-dropdown" id="dropdown1">
              <div>
                <li>
                  <a class="dt-menu__item" href="../services/transportation.html">Transportation</a>
                </li>
                <li>
                  <a class="dt-menu__item" href="#target">In Home Care</a>
                </li>
                <li>
                  <a class="dt-menu__item" href="#target">Life Enrichment</a>
                </li>
                <li>
                  <a class="dt-menu__item" href="#target">Apply for Services</a>
                </li>
              </div>
            </ul>
          </li>
          <li class="dt-dropdownlist"><a class="dt-menu__item" id="menu-title-4" onclick="myFunction2()">GET INVOLVED
              <i class="arrow down"></i></a>
            <ul class="dt-dropdown" id="dropdown2">
              <div>
                <li>
                  <a class="dt-menu__item" href="#target">Donate</a>
                </li>
                <li>
                  <a class="dt-menu__item" href="../get-involved/volunteer.html">Volunteer</a>
                </li>
                <li>
                  <a class="dt-menu__item" href="#target">Sponsorship</a>
                </li>
                <li>
                  <a class="dt-menu__item" href="#target">Join the Team</a>
                </li>
                <li>
                  <a class="dt-menu__item" href="#target">Employee Portal</a>
                </li>
              </div>
            </ul>
          </li>
          <li><a class="dt-menu__item" href="../contact.html">CONTACT</a></li>
          <li><a class="dt-menu__item" href="../about.html">ABOUT</a></li>
          <li><a class="dt-menu__item" href="#target">BLOG</a></li>
        </ul>
      </div>
    </nav>

    <!--header right-->
    <div class="header-right">
      <div>
        	<a href="tel:2072428814">
						<?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.28 31.11"><g id="Layer_1-2"><path d="M28.24,25.02c-.06-.26-.56-.68-1.5-1.25-.25-.18-.61-.42-1.08-.73-.47-.31-.89-.59-1.27-.85-.38-.26-.74-.51-1.07-.75-.05-.05-.22-.18-.49-.41-.28-.23-.51-.4-.71-.52-.19-.12-.39-.18-.59-.2-.28-.02-.65,.14-1.1,.51-.46,.36-.88,.77-1.27,1.21-.39,.44-.8,.84-1.23,1.21-.43,.37-.77,.54-1.02,.52-.13-.01-.28-.06-.47-.15-.18-.09-.32-.16-.42-.22-.09-.06-.25-.17-.48-.34-.23-.17-.35-.26-.38-.28-1.83-1.23-3.37-2.6-4.63-4.09-1.26-1.5-2.33-3.25-3.23-5.27-.01-.03-.08-.17-.21-.42-.13-.25-.21-.43-.25-.53-.04-.1-.09-.25-.14-.45-.05-.2-.07-.36-.06-.48,.02-.25,.25-.56,.69-.92,.43-.36,.9-.69,1.4-1,.5-.31,.97-.66,1.41-1.04,.44-.39,.67-.72,.69-1,.02-.2-.01-.4-.1-.61-.08-.21-.21-.47-.39-.79-.18-.31-.28-.5-.32-.56-.18-.37-.36-.76-.55-1.18-.19-.42-.4-.89-.62-1.4-.22-.51-.4-.91-.53-1.19-.41-1.02-.73-1.59-.98-1.7-.09-.05-.24-.08-.44-.1-.38-.03-.88,0-1.5,.08-.62,.09-1.12,.19-1.48,.32-.73,.23-1.55,1.03-2.46,2.38C.62,4.04,.14,5.32,.03,6.61,0,6.99,0,7.36,0,7.72c.02,.36,.07,.77,.16,1.23,.09,.46,.16,.8,.22,1.03,.06,.22,.17,.63,.33,1.21,.16,.58,.26,.93,.29,1.07,.37,1.42,.85,2.7,1.43,3.84,.95,1.89,2.3,3.88,4.05,5.96,1.75,2.08,3.47,3.76,5.18,5.02,1.02,.77,2.2,1.46,3.53,2.07,.12,.05,.46,.21,1,.47,.54,.26,.92,.44,1.13,.53,.21,.1,.54,.23,.97,.39,.44,.17,.83,.29,1.19,.37,.35,.08,.72,.14,1.1,.17,1.29,.11,2.63-.13,4.01-.73,1.49-.66,2.41-1.33,2.76-2.01,.19-.34,.37-.81,.57-1.4,.19-.6,.31-1.09,.34-1.47,.02-.2,0-.35-.03-.45h0Z"/></g></svg>
					</a>
      </div>
      <div>
        <button class="teal-button nav-call"><a href="#target">DONATE</a></button>
      </div>
    </div>

</header>


  <!-- =========== MAIN =========== -->
<main id="main">

    <div class="about-intro-container">
      <p class="page-breadcrumb">/ CONTACT / ERROR</p>
      <div class="about-intro">
        <img src="../images/coae-abrv-white.png" alt="COA white short logo" title="COA white short logo" width="200"/>
        <h5 class="faded-teal">Oops! Looks like something went wrong with your submission.</h5>
        <p class="white">Please try again.</p>
      
      </div>
    </div>

</main>

  <!-- =========== FOOTER =========== -->
  <footer>
    <section class="footer-01">
      <img src="../images/coae-logo-black.png" alt="COA Elkhart Black Logo" title="COA Elkhart Black Logo">
    </section>

    <section class="footer-02">
      <nav class="desktopnav footernav">
        <div class="desktopnav-container footer-nav">
          <ul class="desktopnav-list">
            <li><a class="dt-menu__item" href="../index.html">HOME</a></li>
            <li><a class="dt-menu__item" href="#target">APPLY</a></li>
            <li><a class="dt-menu__item" href="../contact.html">CONTACT</a></li>
            <li><a class="dt-menu__item" href="#target">CAREERS</a></li>
            <li><a class="dt-menu__item" href="../get-involved/volunteer.html">VOLUNTEER</a></li>
            <li><a class="dt-menu__item" href="#target">DONATE</a></li>
          </ul>
        </div>
      </nav>
      <div class="social-nav">
        <a class="hvr-bob" href="#target"><img src="../images/insta-icon.svg" alt="Instagram Icon"
            title="Instagram Icon"></a>
        <a class="hvr-bob" href="#target"><img src="../images/linkdin-icon.svg" alt="Linkdin Icon"
            title="Linkdin Icon"></a>
        <a class="hvr-bob" href="#target"><img src="../images/fbook-icon.svg" alt="Facebook Icon"
            title="Facebook Icon"></a>
      </div>
      <div class="footer-contact">
        <p><b>info@elkhartcoa.org</b></p>
        <br>
        <p>131 West Tyler St., Suite 1A<br>Elkhart, IN 46516</p>
      </div>
      <div class="made-by">
        <p><i>WEBSITE CREATED BY GATOR INTERACTIVE</i></p>
      </div>
    </section>

</footer>




		<!-- JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/css3-animate-it.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
</body>


