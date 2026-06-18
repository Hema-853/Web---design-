Here is the fully cleaned up, streamlined, and optimized version of your HTML file.
### Key Improvements Made:
 * **Layout Fixes:** Resolved overlapping CSS classes (like service-card vs grid-item) and established a native, modern, responsive CSS Grid layout without artificial fixed pixel limits (removed width: 1300px !important).
 * **Bootstrap Integration:** Cleaned up the conflicting mix of native styles and Bootstrap row utilities so that responsive typography and block spacing scale beautifully on mobile.
 * **Modernized Typography & Accent Colors:** Synchronized all backgrounds (#faf6fb), shadows, and interaction transitions around your target purple identity (#813A96).
 * **Semantic Structure:** Wrapped messy duplicate footers, global blocks, and dangling layouts into cohesive, professional design blocks.
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Development | DBaaS</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #fff;
            color: #333;
            line-height: 1.7;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        /* HEADER */
        header {
            background: #fff;
            box-shadow: 0 2px 15px rgba(0,0,0,.08);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo img {
            height: 55px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: .3s;
        }

        .nav-links a:hover {
            color: #813A96;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0,0,0,.65), rgba(0,0,0,.65)), url('images/web-banner.jpg') center/cover;
            min-height: 75vh;
            display: flex;
            align-items: center;
        }

        .hero-content {
            color: #fff;
            max-width: 700px;
        }

        .hero-content h1 {
            font-size: 52px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 14px 35px;
            background: #813A96;
            color: #fff;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #6a2e7c;
            transform: translateY(-2px);
        }

        /* GENERAL SECTIONS */
        .section-padding {
            padding: 80px 0;
        }

        .tag {
            color: #813A96;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #222;
        }

        .section-text {
            font-size: 16px;
            color: #666;
            max-width: 900px;
            margin-bottom: 40px;
        }

        /* WHY CHOOSE US */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .outlined-box {
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 30px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
        }

        .outlined-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(129,58,150,0.1);
            border-color: rgba(129,58,150,0.3);
        }

        .outlined-box h5 {
            font-size: 18px;
            color: #813A96;
            margin-bottom: 10px;
            font-weight: 600;
        }

        /* SERVICES GRID */
        .mad-grid-section {
            background: #f8f9fa;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .service-card {
            background: #fff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0,0,0,.04);
            border: 1px solid #efefef;
            transition: .3s ease;
            text-align: left;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(129,58,150,0.12);
            border-color: rgba(129,58,150,0.2);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: #f4ebf8;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: #813A96;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 12px;
            color: #222;
        }

        .service-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        /* TECH STACK */
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .tech-card {
            border-top: 4px solid #813A96;
            background-color: #faf6fb;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02);
            transition: all 0.3s ease;
        }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(129, 58, 150, 0.15);
            background-color: #fff;
        }

        .tech-card h5 {
            color: #813A96;
            font-weight: 600;
            margin-bottom: 12px;
        }

        /* PROCESS STEPS */
        .process-container {
            max-width: 800px;
            margin: 40px auto 0;
        }

        .process-step {
            border: 1px solid #ddd;
            border-left: 5px solid #813A96;
            padding: 16px 20px;
            margin: 15px 0;
            background: #fff;
            font-size: 16px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.02);
            transition: all 0.3s ease;
        }

        .process-step:hover {
            background: #f1e6f6;
            transform: translateX(8px);
            border-color: #813A96;
        }

        /* FOOTER EXTENSION & RECAPTCHA */
        .footer {
            background: #190721;
            color: #fff;
            padding: 60px 0 30px;
        }

        .footer-links h4 {
            color: #fff;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 16px;
            text-transform: uppercase;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            color: #ccc;
            text-decoration: none;
            transition: 0.2s;
            font-size: 14px;
        }

        .footer-links ul li a:hover {
            color: #fff;
            padding-left: 5px;
        }

        .copyright-area {
            background: #0d0312;
            color: #888;
            padding: 20px 0;
            font-size: 13px;
        }

        /* MEDIA QUERIES */
        @media(max-width: 768px) {
            .hero-content h1 { font-size: 36px; }
            .section-title { font-size: 28px; }
            .nav-links { display: none; }
            .grid-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container navbar">
            <div class="logo">
                <img src="assets/img/dbaas_logo.webp" alt="DBaaS">
            </div>
            <nav class="nav-links">
                <a href="/">Home</a>
                <a href="about">About</a>
                <a href="services">Services</a>
                <a href="contact">Contact</a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="tag">Transform Ideas Into Seamless Experiences</span>
                <h1>Mobile Application Development</h1>
                <p>We design and develop secure, scalable, and high-performance mobile applications for startups, enterprises, and growing businesses across iOS and Android platforms.</p>
                <a href="#" class="btn">Get Started</a>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="section-title">Mobile App Development</h2>
            <p class="section-text">
                Our mobile app development services focus on creating customized solutions tailored to your business goals and audience needs. Using the latest technologies and frameworks, we ensure your app remains fast, secure, and future-ready across devices and platforms. From concept to launch, our team handles design, development, testing and support.
            </p>
            
            <h3 style="text-align: center; margin-top: 40px; font-weight: 700;">Why Choose Us?</h3>
            <div class="feature-grid">
                <div class="outlined-box">
                    <h5>Agile Methodologies</h5>
                    <p style="font-size:14px; color:#666;">Agile practices ensuring faster, reliable, and highly scalable incremental delivery.</p>
                </div>
                <div class="outlined-box">
                    <h5>End-to-End Services</h5>
                    <p style="font-size:14px; color:#666;">Handling everything effortlessly from design architectures down to app store deployments.</p>
                </div>
                <div class="outlined-box">
                    <h5>Performance & Security</h5>
                    <p style="font-size:14px; color:#666;">Apps custom built prioritized around optimal high speed systems & data encryption layers.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding mad-grid-section">
        <div class="container">
            <h2 class="section-title" style="text-align: center; color:#813A96;">Core Mobile App Development Services</h2>
            <div class="grid-container">
                <div class="service-card">
                    <div class="service-icon">⚡</div>
                    <h3>Native Development</h3>
                    <p>Optimized platform-specific builds engineered directly via native Swift, Xcode, Java, and modern Kotlin setups.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🌐</div>
                    <h3>Cross Platform Apps</h3>
                    <p>Harness robust single codebase frameworks featuring interactive deployments spanning Flutter, React Native, and Xamarin.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎨</div>
                    <h3>UI / UX Design</h3>
                    <p>Delightful design systems leveraging precise modern wireframing structures, prototypes, and immersive user journeys.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">☁️</div>
                    <h3>Custom Mobile Apps</h3>
                    <p>Cloud-native responsive infrastructure seamlessly integrated through secure customized REST/GraphQL API instances.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏢</div>
                    <h3>Enterprise Solutions</h3>
                    <p>Powerhouse architectures connecting secure internal ERP, microservices integrations, and operational workforce tools safely.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h3>Security & Compliance</h3>
                    <p>Engineered around rigorous structural compliance paradigms encompassing global GDPR, HIPAA frameworks and authentications.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div style="text-align: center; margin-bottom: 30px;">
                <h2 class="section-title">Technology Stack</h2>
                <div style="width: 60px; height: 3px; background: #813A96; margin: 0 auto;"></div>
            </div>
            
            <div class="tech-grid">
                <div class="tech-card">
                    <h5>Languages</h5>
                    <p style="font-size: 14px; color:#555;">Swift • Kotlin • Java • Flutter • React Native</p>
                </div>
                <div class="tech-card">
                    <h5>Backend</h5>
                    <p style="font-size: 14px; color:#555;">Node.js • .NET • Python • GraphQL • REST</p>
                </div>
                <div class="tech-card">
                    <h5>Databases</h5>
                    <p style="font-size: 14px; color:#555;">Firebase • MySQL • MongoDB • PostgreSQL</p>
                </div>
                <div class="tech-card">
                    <h5>Cloud / DevOps</h5>
                    <p style="font-size: 14px; color:#555;">AWS • Azure • GCP • Docker • Kubernetes</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background: #faf6fb;">
        <div class="container">
            <h2 class="section-title" style="text-align: center;">Our Development Process</h2>
            <div class="process-container">
                <div class="process-step">1️⃣ <strong>Discovery & Strategy</strong> – Requirement analysis & asset planning</div>
                <div class="process-step">2️⃣ <strong>Design & Prototyping</strong> – UX design systems & interactive flows</div>
                <div class="process-step">3️⃣ <strong>Agile Development</strong> – Clean iterative modular code sprints</div>
                <div class="process-step">4️⃣ <strong>Testing & QA</strong> – Automated performance validation & code analysis</div>
                <div class="process-step">5️⃣ <strong>Launch & Support</strong> – Continuous Deployment integration & active server maintenance</div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="grid-container" style="grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));">
                <div class="footer-links">
                    <h4>About DBaaS</h4>
                    <p style="font-size: 14px; color:#aaa; line-height: 1.6;">Digital Business as a Service. We deliver premium engineering ecosystems across enterprise software designs, security pipelines, and high availability systems.</p>
                </div>
                <div class="footer-links">
                    <h4>IT Services</h4>
                    <ul>
                        <li><a href="#">Managed IT Infrastructure</a></li>
                        <li><a href="#">Cloud Computation Environments</a></li>
                        <li><a href="#">AI Systems Engineering</a></li>
                        <li><a href="#">Governance & Compliance Assurance</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>App Ecosystems</h4>
                    <ul>
                        <li><a href="#">Web Layout Redesigns</a></li>
                        <li><a href="#">Mobile Software Builds</a></li>
                        <li><a href="#">Custom Software Deployments</a></li>
                        <li><a href="#">E-Commerce Environments</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contact Channels</h4>
                    <p style="font-size: 14px; color:#aaa;">International House, 36-38 Cornhill, London EC3V 3NG</p>
                    <p style="font-size: 14px; color:#aaa; margin-top: 10px;">Email: admin@dbaasltd.com</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright-area">
        <div class="container" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 15px;">
            <div>Copyright © 2026 DBaaS Limited. All Rights Reserved.</div>
            <div style="display:flex; gap: 15px; flex-wrap: wrap;">
                <a href="#" style="color:#888; text-decoration:none;">Privacy Policy</a>
                <a href="#" style="color:#888; text-decoration:none;">Terms & Conditions</a>
                <a href="#" style="color:#888; text-decoration:none;">GDPR Statement</a>
            </div>
        </div>
    </div>

</body>
</html>

```
