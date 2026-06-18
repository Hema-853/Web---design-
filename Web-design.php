<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mobile App Development | DBaaS</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#fff;
    color:#333;
    line-height:1.7;
}

/* HEADER */

header{
    background:#fff;
    box-shadow:0 2px 15px rgba(0,0,0,.08);
    position:sticky;
    top:0;
    z-index:999;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 0;
}

.logo img{
    height:55px;
}

.nav-links{
    display:flex;
    gap:30px;
}

.nav-links a{
    color:#333;
    font-weight:500;
    transition:.3s;
}

.nav-links a:hover{
    color:#813A96;
}

/* HERO */

.hero{
    background:linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.65)),
    url('images/web-banner.jpg') center/cover;
    min-height:85vh;
    display:flex;
    align-items:center;
}

.hero-content{
    color:#fff;
    max-width:700px;
}

.hero-content h1{
    font-size:60px;
    font-weight:800;
    line-height:1.2;
    margin-bottom:20px;
}

.hero-content p{
    font-size:18px;
    margin-bottom:30px;
}

.btn{
    display:inline-block;
    padding:15px 35px;
    background:#813A96;
    color:#fff;
    border-radius:50px;
    font-weight:600;
}

/* ABOUT */

.section{
    padding:90px 0;
}

.tag{
    color:#813A96;
    font-weight:700;
    text-transform:uppercase;
}

.section-title{
    font-size:48px;
    font-weight:800;
    margin:15px 0 30px;
}

.section-text{
    font-size:18px;
    color:#666;
}

/* SERVICES */

.services{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
    margin-top:50px;
}

.service-card{
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.3s;
}

.service-card:hover{
    transform:translateY(-10px);
}

.service-icon{
    width:80px;
    height:80px;
    background:#f4ebf8;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:30px;
    color:#813A96;
    margin-bottom:20px;
}

.service-card h3{
    margin-bottom:15px;
}

/* STATS */

.stats{
    background:#813A96;
    color:#fff;
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:30px;
    text-align:center;
}

.stat h2{
    font-size:50px;
}

.stat p{
    font-size:18px;
}

/* CTA */

.cta{
    background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),
    url('images/team.jpg') center/cover;
    padding:120px 0;
    text-align:center;
    color:#fff;
}

.cta h2{
    font-size:52px;
    margin-bottom:20px;
}

.cta p{
    max-width:700px;
    margin:auto;
    margin-bottom:30px;
}

/* FOOTER */

footer{
    background:#111;
    color:#fff;
    text-align:center;
    padding:25px;
}

@media(max-width:768px){

.hero-content h1{
    font-size:40px;
}

.section-title{
    font-size:34px;
}

.nav-links{
    display:none;
}

}

</style>
</head>
<body>

<header>
<div class="container navbar">

<div class="logo">
<img src="assets/img/dbaas_logo.webp" alt="DBaaS">
</div>

<div class="nav-links">
<a href="/">Home</a>
<a href="about">About</a>
<a href="services">Services</a>
<a href="contact">Contact</a>
</div>

</div>
</header>

<section class="hero">
<div class="container">

<div class="hero-content">

<span class="tag">Transform Ideas Into Seamless Experiences</span>

<h1>Mobile Application Development</h1>

<p>
We design and develop secure, scalable, and high-performance mobile applications
for startups, enterprises, and growing businesses across iOS and Android platforms.
</p>

<a href="#" class="btn">Get Started</a>

</div>

</div>
</section>

<section class="section">
<div class="container">


<h2 class="section-title">
Mobile App Development
</h2>

<p class="section-text">
Our mobile app development services focus on creating customized solutions tailored to your business goals and audience needs. Using the latest technologies and frameworks, we ensure your app remains fast, secure, and future-ready across devices and platforms.

Beyond just development, we partner with you to optimize app performance, user retention, and scalability. Our experts continuously monitor analytics, update features, and integrate user feedback to keep your app relevant and competitive.

From concept to launch, our team handles design, development, testing and support—ensuring smooth functionality and a polished user experience.
</p>
<section class="mad-why-section py-5 text-center">
  <p class="mad-section-title mb-5 text-center" style="font-size:30px">Why Choose Us?</p>
  <div class="d-flex flex-wrap justify-content-center gap-4">
 
    <div class="mad-feature-box p-4 shadow-sm outlined-box">
      <h5>Agile Methodologies</h5>
      <p>Agile practices ensuring faster and flexible delivery.</p>
    </div>
    <div class="mad-feature-box p-4 shadow-sm outlined-box">
      <h5>End-to-End Services</h5>
      <p>From ideation to deployment and maintenance.</p>
    </div>
    <div class="mad-feature-box p-4 shadow-sm outlined-box shift-left">
      <h5>Performance & Security</h5>
      <p>Apps built for security, scalability and performance.</p>
    </div>
  </div>
</section>

<style>
/* Subtle outline for all boxes */
.outlined-box {
  border: 1px solid #ddd; /* light gray outline */
  border-radius: 8px;
  transition: transform 0.3s ease;
}

/* Optional: small hover effect */
.outlined-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0,0,0,0.1);
}


	
</style>
	
<style>
	@media (max-width: 767px) {
  .services-section img {
    margin-right: 60px; /* moves image slightly to the left */
      /* keeps image responsive */
  }
	
}
	</style>

<section class="mad-grid-section py-5">
  <h2 class="text-center mb-5 fw-bold" style="color:#813A96;">Core Mobile App Development Services</h2>

  <center><div class="grid-container">
<div class="service-card">
<div class="service-icon">⚡</div>
<h3>Native app development</h3>
<p>iOS: Swift & Xcode Android: Java & Kotlin Optimised for platform-specific<br> performance</p>
</div>
<div class="service-card">
<div class="service-icon">⚡</div>
<h3>Cross Platform Apps</h3>
<p>Flutter, React Native and Xamarin applications using a single codebase.</p>
</div>

<div class="service-card">
<div class="service-icon">🎨</div>
<h3>UI / UX Design</h3>
<p>Wireframes, prototypes, usability testing and intuitive user experiences.</p>
</div>

<div class="service-card">
<div class="service-icon">☁️</div>
<h3>Custom Mobile Apps</h3>
<p>Cloud-native applications with API integrations and scalable architecture.</p>
</div>

<div class="service-card">
<div class="service-icon">🏢</div>
<h3>Enterprise Solutions</h3>
<p>ERP, CRM and workforce applications built with enterprise-grade security.</p>
</div>

<div class="service-card">
<div class="service-icon">🔒</div>
<h3>Security & Compliance</h3>
<p>GDPR, HIPAA compliance, encryption and secure authentication systems.</p>
</div>

</div>

</div>
</section>

<style>
	
.grid-item {
  background: #fff;
  border-radius: 20px;
  padding: 25px;
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
  border: 1px solid rgba(129,58,150,0.3);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start; /* ✅ keep text aligned from top */
  min-height: 240px; /* ✅ ensures all cards have equal height */
}

	.grid-item .icon {
  font-size: 40px;
  color: #813A96;
  margin-bottom: 15px;
}
.grid-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
  border-color: rgba(129,58,150,0.6); /* slightly darker on hover */
}

	.mad-grid-section {
  background: #f8f8f8;
}
	
	.grid-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 25px;
  padding: 0 60px; /* adds left and right space */
}


.grid-item {
  background: #fff;
  border-radius: 20px;
  padding: 25px;
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: transform 0.3s, box-shadow 0.3s;
}
	
	.grid-container .grid-item:nth-child(n+5) {
  /* Make them span 1fr each and start centered */
  align-items: center;
}


.grid-item::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: rgba(129,58,150,0.05);
  transform: rotate(45deg);
  transition: all 0.5s;
	
}

.grid-item:hover::before {
  top: 0;
  left: 0;
}

.grid-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.grid-item .icon {
  font-size: 40px;
  color: #813A96;
  margin-bottom: 15px;
}

.grid-item h5 {
  font-weight: 600;
  margin-bottom: 10px;
  color: #813A96;
}

.grid-item p {
  color: #555;
  font-size: 14px;
}

	/* Mobile view: 1 card per row */
@media (max-width: 576px) {
  .grid-container {
    grid-template-columns: 1fr;
  }
}
	
	.grid-container {
    width: 1300px !important;
		    padding: 0 0px!important;

}
	</style>
	
<section class="container my-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold" style="font-size: 32px;">Technology Stack</h2>
    <div class="mx-auto mt-2" style="width: 80px; height: 3px; background-color: #813A96;"></div>
  </div>

  <div class="row g-4 justify-content-center">
    <div class="col-md-5 col-lg-4">
      <div class="p-4 shadow-sm rounded-3 text-center h-100 tech-card">
        <h5 class="fw-semibold mb-3 text-purple"><i class="bi bi-code-slash me-2"></i>Languages & Frameworks</h5>
        <p class="mb-0 text-muted">Swift • Kotlin • Java • Flutter • React Native • Xamarin</p>
      </div>
    </div>

    <div class="col-md-5 col-lg-4">
      <div class="p-4 shadow-sm rounded-3 text-center h-100 tech-card">
        <h5 class="fw-semibold mb-3 text-purple"><i class="bi bi-hdd-network me-2"></i>Backend</h5>
        <p class="mb-0 text-muted">Node.js • .NET • Python • GraphQL • REST APIs</p>
      </div>
    </div>

    <div class="col-md-5 col-lg-4">
      <div class="p-4 shadow-sm rounded-3 text-center h-100 tech-card">
        <h5 class="fw-semibold mb-3 text-purple"><i class="bi bi-database me-2"></i>Databases</h5>
        <p class="mb-0 text-muted">Firebase • MySQL • MongoDB • PostgreSQL</p>
      </div>
    </div>

    <div class="col-md-5 col-lg-4">
      <div class="p-4 shadow-sm rounded-3 text-center h-100 tech-card">
        <h5 class="fw-semibold mb-3 text-purple"><i class="bi bi-cloud-arrow-up me-2"></i>Cloud</h5>
        <p class="mb-0 text-muted">AWS • Azure • Google Cloud</p>
      </div>
    </div>

    <div class="col-md-5 col-lg-4">
      <div class="p-4 shadow-sm rounded-3 text-center h-100 tech-card">
        <h5 class="fw-semibold mb-3 text-purple"><i class="bi bi-tools me-2"></i>Tools</h5>
        <p class="mb-0 text-muted">Git • Docker • Kubernetes • Jenkins</p>
      </div>
    </div>
  </div>
</section>

<!-- Add these styles -->
<style>
.text-purple {
  color: #813A96;
}
.tech-card {
  border-top: 4px solid #813A96;
  background-color: #faf6fb;
  transition: all 0.3s ease;
}
.tech-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 15px rgba(129, 58, 150, 0.2);
  background-color: #fff;
}
</style>

<!-- Bootstrap Icons (add if not already linked) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<section class="container my-5">
<h3 class="section-title text-center">Our Development Process</h3>
<div class=process-step>1️⃣ <strong>Discovery & Strategy</strong> – Requirement analysis & KPIs</div>
<div class=process-step>2️⃣ <strong>Design & Prototyping</strong> – Wireframes & UX flow</div>
<div class=process-step>3️⃣ <strong>Agile Development</strong> – Iterative coding & integration</div>
<div class=process-step>4️⃣ <strong>Testing & QA</strong> – Performance & security validation</div>
<div class=process-step>5️⃣ <strong>Launch & Support</strong> – Deployment & ongoing maintenance</div>
</section>
	
<style>
.process-step {
  border: 1px solid #ddd; /* Mild border */
  border-left: 4px solid #813A96; /* Purple accent line */
  padding: 12px 20px;
  margin: 12px 0;
  background: #f9f9f9;
  font-size: 16px;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.process-step:hover {
  background: #f1e6f6;
  transform: translateX(5px);
  border-color: #cba8d8; /* Light purple border on hover */
}
	</style>

	
<section class="dops-why text-center">
  <h4>Why Partner With Us?</h4>
  <p style="text-align:center">We combine expertise, speed, and scalability to power your business growth.</p>
  
  <div class="dops-why__grid d-flex justify-content-center gap-4 flex-wrap">
    <div class="dops-why__card" style="flex: 1 1 30%; max-width: 30%; min-width: 250px;">
      <div class="dops-why__icon">👨‍💻</div>
      <h3 class="dops-why__card-title">Expert Developers</h3>
      <p class="dops-why__card-text">Dedicated developers & solution architects with proven expertise.</p>
    </div>
    
    <div class="dops-why__card" style="flex: 1 1 30%; max-width: 30%; min-width: 250px;">
      <div class="dops-why__icon">⚡</div>
      <h3 class="dops-why__card-title">Faster Turnaround</h3>
      <p class="dops-why__card-text">Agile practices ensure rapid delivery without compromising quality.</p>
    </div>
    
    <div class="dops-why__card" style="flex: 1 1 30%; max-width: 30%; min-width: 250px;">
      <div class="dops-why__icon">🔒</div>
      <h3 class="dops-why__card-title">Security & Scalability</h3>
      <p class="dops-why__card-text">Secure, future-ready solutions that scale with your business.</p>
    </div>
  </div>
</section>
<section class="faq py-5">
<div class=container>
<div class="row align-items-center">
<div class="col-lg-6 mb-4 mb-lg-0">
<p class="mb-4 fw-bold" style=font-size:28px>Frequently Asked Questions</p>
<div class=accordion id=faqAccordion>
<div class=accordion-item>
<h2 class=accordion-header id=headingOne>
<button class=accordion-button type=button data-bs-toggle=collapse data-bs-target=#collapseOne aria-expanded=true aria-controls=collapseOne>
How long does it take to develop a mobile app?
</button>
</h2>
<div id=collapseOne class="accordion-collapse collapse show" aria-labelledby=headingOne data-bs-parent=#faqAccordion>
<div class=accordion-body>
The timeline depends on the complexity, features and platform. A simple app may take 8–12 weeks, while enterprise-level apps may take 4–6 months.
</div>
</div>
</div>
<div class=accordion-item>
<h2 class=accordion-header id=headingTwo>
<button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target=#collapseTwo aria-expanded=false aria-controls=collapseTwo>
Which is better: native or cross-platform app development?
</button>
</h2>
<div id=collapseTwo class="accordion-collapse collapse" aria-labelledby=headingTwo data-bs-parent=#faqAccordion>
<div class=accordion-body>
Native apps offer the best performance and device-specific features. Cross-platform apps are cost-efficient and allow faster deployment across multiple platforms. The choice depends on your business goals, budget and scalability needs.
</div>
</div>
</div>
<div class=accordion-item>
<h2 class=accordion-header id=headingThree>
<button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target=#collapseThree aria-expanded=false aria-controls=collapseThree>
Do you provide post-launch support and maintenance?
</button>
</h2>
<div id=collapseThree class="accordion-collapse collapse" aria-labelledby=headingThree data-bs-parent=#faqAccordion>
<div class=accordion-body>
Yes. We offer continuous updates, bug fixes, OS compatibility upgrades and 24/7 support to ensure your app stays reliable and secure.
</div>
</div>
</div>
<div class=accordion-item>
<h2 class=accordion-header id=headingFour>
<button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target=#collapseFour aria-expanded=false aria-controls=collapseFour>
Can you integrate third-party APIs into mobile apps?
</button>
</h2>
<div id=collapseFour class="accordion-collapse collapse" aria-labelledby=headingFour data-bs-parent=#faqAccordion>
<div class=accordion-body>
Absolutely. We specialise in API development and integration for payment gateways, CRMs, ERPs, social media platforms and cloud-based solutions.
</div>
</div>
</div>
<div class=accordion-item>
<h2 class=accordion-header id=headingFive>
<button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target=#collapseFive aria-expanded=false aria-controls=collapseFive>
How do you ensure app security?
</button>
</h2>
<div id=collapseFive class="accordion-collapse collapse" aria-labelledby=headingFive data-bs-parent=#faqAccordion>
<div class=accordion-body>
We follow best practices in encryption, secure authentication and compliance standards (GDPR, HIPAA, PCI-DSS) to safeguard user data.
</div>
</div>
</div>
<div class=accordion-item>
<h2 class=accordion-header id=headingSix>
<button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target=#collapseSix aria-expanded=false aria-controls=collapseSix>
Do you help with app store deployment?
</button>
</h2>
<div id=collapseSix class="accordion-collapse collapse" aria-labelledby=headingSix data-bs-parent=#faqAccordion>
<div class=accordion-body>
Our Mobile App Development Services ensure your business stays ahead in a mobile-first world.
</div>
</div>
</div>
</div>
</div>

	<div class="col-lg-6 text-center">
  <img src="./assets/img/faq/mobile-app-development.png" 
       alt="FAQ Image" 
       class="img-fluid rounded" 
       height="250" 
       style="box-shadow: none; filter: none; background: none;">
</div>

</div>
</div>
</div>
</section>
	 <div class="partner-section ">
        <div class="container">
			<div class="section-title"><br>
                <h3>Technologies We Use</h3>
                <div class="bar"></div>
            </div>
            <div class="partner-slider owl-carousel owl-theme">
				    <div class="partner-item">
                    <a href="bi">
                        <img src="assets/img/partner/logo/android.webp" alt="web & mobile app development service mistix net">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/ios.webp" alt="web app development company">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/ionic.webp" alt="web app development company">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/flutter.webp" alt="web application development services">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/react-native.webp" alt="web application development services">
                    </a>
                </div>            
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/appcelerator-and-phone-gap.webp" alt="web app development company">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/native-script.webp" alt="web app development company">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/xamarin.webp" alt="custom web design services">
                    </a>
            </div>
				 <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/felgo.webp" alt="web app development services">
                    </a>
                </div>
				 <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partner/logo/sencha.webp" alt="web and mobile app development">
                    </a>
                </div>
        </div>
    </div>





<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="assets/css/style.mindbc2.css" rel="stylesheet">
<style id='side-menu-lite-inline-css' type='text/css'>
#side-menu-1 {z-index:9999999;}#side-menu-1 .sm-icon, #side-menu-1 .sm-label {height:40px;line-height:40px;}#side-menu-1 .sm-icon {width:40px;font-size:18px;}#side-menu-1 .sm-label {font-size:14px;font-style:normal;font-weight:normal;}#side-menu-1.-right .sm-item {right: calc(-100% + 40px);}#side-menu-1.-left .sm-item {left: calc(-100% + 40px);}#side-menu-1 .sm-item a {border-color: #rgba(0,0,0,0.75);border-style: solid;}#side-menu-1.-left .sm-item a {border-width: 0 0 0 0;}#side-menu-1.-right .sm-item a {border-width: 0 0 0 0;}#side-menu-1 .sm-item {margin: 5px 0;}#side-menu-1 .sm-item:first-child {margin-top: 0;}#side-menu-1 .sm-item:last-child {margin-bottom: 0;}
#side-menu-1.-left .sm-item a{
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.35) !important;
}
#side-menu-1 .sm-icon{
    background-color: #2a0933;
    border-radius:10px;
}
#side-menu-1 .sm-label{
    font-weight: 600;
}
.side-menu .sm-list .sm-item:hover a .sm-label {
    color: #fff;
}
.side-menu .sm-list .sm-item a .sm-icon:before{opacity:1;}
.side-menu .sm-list .sm-item a {
    background:#2a0933;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}
.side-menu .sm-list .sm-item.phone a {
    background:#2a2498;
}
.side-menu .sm-list .sm-item.whatsapp a {
    background:#30c165;
}
.side-menu .sm-list .sm-item.mail a {
    background:#3c8ed5;
}
.side-menu .sm-list .sm-item.assist a {
    background:#2a0933;
}

#side-menu-1 .phone .sm-icon{
    background-color: #2a2498;
}
#side-menu-1 .whatsapp .sm-icon{
    background-color: #30c165;
}
#side-menu-1 .mail .sm-icon{
    background-color: #3c8ed5;
}
#side-menu-1 .assist .sm-icon{
    background-color: #2a0933;
}
	
.footer-logo {
    display: flex;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    justify-content: center;
    flex-wrap: wrap;
    gap: 24px; 
    padding: 10px;
    align-items: center; 
}

.footer-logo iframe {
    border: none;
    height: 100px;
    width: 72px;
}

.footer-logo img {
    max-height: 50px; 
    width: auto; 
    margin: 0; 
}

#gimg{
    max-height: 80px; 
    width: 190px; 
    margin: 0; 
}

#g1img{
    max-height: 80px; 
    width: 100px; 
    margin: 0;

}
	
#g2img{
    max-height: 70px; 
    width: 60px; 
    margin: 0;

}
	
	#ggimg{
    max-height: 80px; 
    width: 80px; 
    margin: 0;
		
	}
/* Default small icon left bottom */
.grecaptcha-badge { 
    position: fixed !important;  /* relative -> fixed */
	/*top:4300px !important;**/
    left: 0 !important; 
    right: auto !important;
    bottom: 100px !important;    /* adjust height above footer */
    z-index: 9999 !important;
    width: 70px !important; 
    transform: scale(0.7);        /* reduce inner size */
    transform-origin: 0 0; 
    transition: all 0.3s ease-in-out; 
    border-radius: 0px 15px 15px !important;
}

/* On hover – expand to full box */
.grecaptcha-badge:hover { 
    width: 256px !important;      /* full width of recaptcha badge */
    height: 60px !important;
    overflow: visible !important; 
}

.footer .footer-top h4
 { font-weight:700; font-size:18px;
}
</style>
 <!-- side menu -->
<!-- Start Footer Area -->
<section class="footer center ptb-50" >
	
    <div class="footer-top">
        <div class="container" >
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-info">
						
                        <a href="/" class="logo me-auto"><img  src="assets/img/logo.webp" alt="DBaaS" class="img-footer-logo"><marquee style="color: #fff;">Digital Business as a Service</marquee></a>
                    </div>
                    <div class="footer-info">
                        <h4>Follow Us</h4>
                        <div class="social-btns d-flex justify-content-center justify-content-lg-start">
                            <a class="btn facebook" href="https://www.facebook.com/dbaasltd.uk" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a class="btn twitter-x text-dark" href="https://twitter.com/dbaasltduk" target="_blank"><i class="bi bi-twitter-x text-dark"></i></a>
                            <a class="btn instagram" href="https://www.instagram.com/dbaasltduk/" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                            <a class="btn linkedin" href="https://www.linkedin.com/company/dbaasltd-uk" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a class="btn youtube" href="https://www.youtube.com/@dbaasltduk/videos" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            <a href="https://player.vimeo.com/video/645980633?title=0&byline=0&portrait=0" class="btn vimeo glightbox btn-watch-video animate__animated animate__fadeInUp scrollto"><i class="fa-brands fa-vimeo-v"></i></a>
                            <a class="btn map" href="https://goo.gl/maps/B6QjsASKbexwWqEL6" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                    </div>
                     <div class="footer-info">
                    </div>
                                          
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-links">
                    <a href="consulting-services"><h4>IT Services</h4></a>
                    <ul>
                        <li><a href="consulting-services">Consulting Services</a></li>
                        <li><a href="it-managed-services">IT Managed Services</a></li>
                        <li><a href="it-governance-services">IT Governance Services</a></li>
                        <li><a href="it-support-services">IT Support Services</a></li>
                        <li><a href="qa-testing-services">QA Testing Services</a></li>
                        <li><a href="cloud-computing">Cloud Computing</a></li>
					
                        <li><a href="artificial-intelligence">AI and Data Analytics Engineering</a></li>
						 <li><a href="Software-services">Software Licensing Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-links">
                    <a href="web-design-and-revamp-development"><h4>Web & App Services</h4></a>
                    <ul>
                        <li><a href="https://dbaasltd.com/web-design-and-revamp">Web Design &amp; Revamp Development</a></li>
                        <li><a href="mobile-app-development">Mobile App Development</a></li>
                        <li><a href="digital-marketing" >Digital Marketing</a></li>
                        <li><a href="ecommerce-web-development" >eCommerce</a></li>
                        <li><a href="ui-and-ux-design">UI &amp; UX Design</a></li>
                        <li><a href="branding-and-infographic">Branding & Infographics</a></li>
                        <li><a href="custom-software-development" >Custom Software Development</a></li>
                        <!--<li><i class="bx bx-chevron-right"></i><a href="../testsite/blog/" target="_blank">Blog</a></li>-->
                    </ul>
                </div>
     <div class="col-lg-3 col-md-6 col-sm-6 footer-info">
                    <h4>Contact</h4>
                    <ul class="footer-address-list">
							<li><span><img src="assets/img/icons/location.webp" alt="location"></span>
					<p><span>International House,<br>36-38 Cornhill, City <br>of London<br> EC3V 3NG </span></p>
							</li>
							<li><span><img src="assets/img/icons/calling.webp" alt="call"></span>
					<p><span><a href="tel:+44 7480080202">+441902927741, <br>+447480 080202</a></span></p>
							</li>
							<li><span><img src="assets/img/icons/whatsapp.webp" alt="Whats app"></span>
								<p><span><a href="https://wa.me/+447480080202/?text=I'd like to chat with you" title="whatsapp" target="_blank">+44 7480 080202</a></span></p>
							</li>
							<li><span><img src="assets/img/icons/skype.png" alt="call"></span>
								<p><span><a href="tel:+44 033 3303 4012">UK: 033 3303 4012</a></span></p>
							</li>
							<li><span><img src="assets/img/icons/mail.webp" alt="Mail" style="margin-right: 10px;"></span>
								<p><span><a href="mailto:admin@dbaasltd.com">admin@dbaasltd.com</a></span></p>
							</li>
						</ul>
                </div>          
            </div>  
   <div class="footer-logo">

        <img src="assets/img/css-logo.webp" alt="branding agency" class="img-footer-logo1">
               
	   <img src="assets/img/G-clouds.png" alt="branding agency" id="gimg" class="img-footer-logo1">
      
			
        
    
        <img src="assets/img/employerlogotransparent.webp" alt="branding agency" class="img-footer-logo1" id="ggimg">
	   
        <a href="https://www.gov.uk/government/publications/disability-confident-employers-that-have-signed-up" target="_blank">
        <img src="assets/img/dc_badge1.png" alt="branding agency" class="img-footer-logo1" id="g1img">
	   </a>
			 <iframe src="https://registry.blockmarktech.com/certificates/0c389c10-a013-45d2-a650-3d9576029161/widget/?tooltip_position=bottom_right&theme=transparent&hover=t"></iframe>
			<a href="https://certcheck.ukas.com/certification/987e22c2-0371-5b9b-b3b9-f7073f789b94" target="_blank">
			<img src="assets/img/security.jpg" alt="branding agency" class="img-footer-logo2" id="g2img">
			</a>
			<a href="https://certcheck.ukas.com/certification/6e7122ff-24e5-5b37-b7e0-52d94ba87b94" target="_blank">
			<img src="./assets/img/14001_Environmental.webp" alt="ISO 27001" class="img-footer-logo2" id="g2img">
				</a>
			<a href="https://certcheck.ukas.com/certification/f5b014c2-e66a-5d9c-8024-017908687e07" target="_blank">
			<img src="./assets/img/9001-quality.webp" alt="ISO 27001" class ="img-footer-logo2" id="g2img">													</a>									  
																											  
			
		
    </div>
</div>
  </div>
</section>
<!-- End Footer Area -->


<!-- Start Copy Right Area -->
<div class="copyright-area">
    <div class="container-fluid">
        <div class="copyright-area-content">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-12 footer-info">
                    <p>
                        Copyright © 2025. DBaaS Limited, All Right Reserved.
                    </p>
                </div>

                <div class="col-lg-8 col-md-12 footer-links" >
                    <ul>
						<li><a href="gdpr-policy">GDPR Policy</a></li>
                       <li>  <a href="carbonreductionplan">Carbon Reduction Plan</a></li>
                        <li>  <a href="modern-slavery">Modern-Slavery Statement </a></li>
                        <li>  <a href="ethicalstatement">Ethical Statement</a></li>
                        <li>  <a href="sustainability">Sustainability Statement</a></li>
                        <li>  <a href="diversity-inclusion">Diversity and Inclusion Statement</a></li>
                        <li>  <a href="company-profile">Profile</a></li>
                        <li>  <a href="contact-us">Contact Us</a></li>
                        <li>
                            <a href="terms">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="acceptable-user-policy">Acceptable User Policy </a>
                        </li>
                        <li>
                            <a href="security-policy">Security Policy </a>
                        </li>
                        <li>
                            <a href="privacy-policy">Privacy Policy </a>
                        </li>
						
						  <li>
                            <a href="accreditations">Accreditations </a>
                        </li>
						
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->
<!-- Start Go Top Section -->
<div class="go-top">
    <i class="bi bi-chevron-up"></i>
    <i class="bi bi-chevron-up"></i>
</div>

<section>




<div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>

 <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfVI8ArAAAAAFRfaRR_uWpMYRLmY1ksaNUPDqoq"></script>
	<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LfVI8ArAAAAAFRfaRR_uWpMYRLmY1ksaNUPDqoq', {action: 'LOGIN'});
    });
  }
<!-- Start of HubSpot Embed Code -->
<!--<script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/147364849.js"></script> -->
<!-- End of HubSpot Embed Code -->
	
	<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/147364849.js"></script>
<!-- End of HubSpot Embed Code -->
<script src=assets/js/jquery.min.js></script>
<script src=assets/js/popper.min.js></script>
<script src=assets/js/bootstrap.min.js></script>
<script src=assets/js/jquery.meanmenu.js></script>
<script src=assets/js/owl.carousel.js></script>
<script src=assets/js/jquery.nice-select.min.js></script>
<script src=assets/js/wow.min.js></script>
<script src=assets/js/main.js></script>
<script src=assets/vendor/bootstrap/js/bootstrap.bundle.min.js></script>
<script src=assets/vendor/glightbox/js/glightbox.min.js></script>
<script src=assets/vendor/swiper/swiper-bundle.min.js></script>
<script src=assets/vendor/main.js></script>
<script type=text/javascript src=assets/js/cookies.js></script>
<script type=text/javascript src=assets/js/window1.js></script>
<footer>
© 2025 DBaaS. All Rights Reserved.
</footer>

</body>
</html>
