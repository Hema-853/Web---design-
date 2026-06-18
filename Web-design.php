<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Design & Development</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{
background:#f7f7f7;
color:#222;
}

a{
text-decoration:none;
}

.container{
width:90%;
margin:auto;
}

/* Header */

header{
background:#fff;
padding:20px 0;
box-shadow:0 2px 10px rgba(0,0,0,.08);
position:sticky;
top:0;
z-index:999;
}

.nav{
display:flex;
justify-content:space-between;
align-items:center;
}

.logo img{
height:50px;
}

.menu-btn{
width:55px;
height:55px;
border:1px solid #ddd;
display:flex;
justify-content:center;
align-items:center;
font-size:30px;
cursor:pointer;
}

/* Hero */

.hero{
padding:30px 0;
}

.hero-box{
position:relative;
overflow:hidden;
}

.hero-box img{
width:100%;
height:350px;
object-fit:cover;
filter:brightness(60%);
}

.hero-text{
position:absolute;
top:30px;
left:25px;
color:#fff;
font-size:18px;
font-weight:500;
width:60%;
line-height:1.7;
}

.arrow{
position:absolute;
left:25px;
bottom:60px;
width:70px;
height:70px;
background:#7d2ba6;
border-radius:50%;
display:flex;
justify-content:center;
align-items:center;
color:#fff;
font-size:30px;
}

.slide{
position:absolute;
right:30px;
bottom:40px;
width:80px;
height:80px;
border:4px solid #fff;
border-radius:50%;
display:flex;
justify-content:center;
align-items:center;
color:#fff;
font-size:35px;
font-weight:bold;
}

/* Section */

.tag{
margin-top:30px;
color:#7d2ba6;
font-size:18px;
font-weight:700;
}

.heading{
font-size:45px;
font-weight:800;
line-height:1.2;
margin:20px 0;
color:#000;
}

.content{
font-size:19px;
line-height:1.9;
color:#333;
margin-bottom:25px;
}

/* Features */

.feature{
margin:50px 0;
}

.icon{
width:110px;
height:110px;
border:5px solid #7d2ba6;
border-radius:50%;
display:flex;
justify-content:center;
align-items:center;
margin-bottom:20px;
}

.icon img{
width:55px;
}

.feature h3{
font-size:22px;
font-weight:700;
margin-bottom:15px;
}

.feature p{
font-size:18px;
color:#777;
line-height:1.8;
}

/* Banner */

.banner{
margin-top:50px;
position:relative;
}

.banner img{
width:100%;
height:500px;
object-fit:cover;
filter:brightness(40%);
}

.overlay{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
width:90%;
text-align:center;
color:#fff;
}

.overlay h2{
font-size:55px;
font-weight:800;
margin-bottom:20px;
}

.overlay p{
font-size:20px;
line-height:1.8;
}

.top-btn{
position:fixed;
right:10px;
bottom:10px;
width:55px;
height:55px;
background:#7d2ba6;
color:#fff;
font-size:28px;
display:flex;
justify-content:center;
align-items:center;
text-decoration:none;
}

</style>

</head>
<body>

<header>
<div class="container nav">

<div class="logo">
<img src="images/logo.png">
</div>

<div class="menu-btn">
☰
</div>

</div>
</header>

<section class="hero">

<div class="container">

<div class="hero-box">

<img src="images/web-banner.jpg">

<div class="hero-text">
Construct user-friendly websites tailored to your target segment.
</div>

<div class="arrow">
➜
</div>

<div class="slide">
01
</div>

</div>

<div class="tag">
Professional Web Design & Development Services
</div>

<h1 class="heading">
Websites<br>
Designed to<br>
Generate Results
</h1>

<p class="content">
DBaaS Web Design And Development Services construct stunning,
functional websites tailored to your business. Our digital service
will blend art and technology to deliver exceptional user experiences,
drive traffic and promote your online presence.
</p>

<p class="content">
DBaaS's focus on SEO and performance ensures your firm's website
stands out in a crowded digital landscape. We provide the full
spectrum of IT services and consulting for various industries.
</p>

<div class="feature">

<div class="icon">
<img src="images/support.png">
</div>

<h3>Scalable Websites for Growing Businesses</h3>

<p>
Offer updates and ongoing support for your website to boost your
business value.
</p>

</div>

<div class="feature">

<div class="icon">
<img src="images/seo.png">
</div>

<h3>SEO-Optimized Website Development</h3>

<p>
Enhance internet visibility and preserve user engagement with our
optimized web pages.
</p>

</div>

</div>

</section>

<section class="banner">

<img src="images/team.jpg">

<div class="overlay">

<h2>
Our Web Development Services
</h2>

<p>
Design A Digital Empire With DBaaS's Web Design &
Development Service. Construct a potential digital presence
with professional and modern web solutions.
</p>

</div>

</section>

<a href="#" class="top-btn">
↑
</a>

</body>
</html>
