<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="logo.png" alt="Logo" height="60"></a>
                <h1 class="logo-text">Dhruv Patel</h1>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT ME</a></li>
                    <li><a href="#">SKILLS</a></li>
                    <li><a href="#">PROJECT</a></li>
                    <li><a href="#">CONTACT</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h2>Hello, I'm Dhruv</h2>
                <p>I'm Professional Web Designer &</p>
                <span>Wordpress Developer</span>
                <p>It is a long established fact that a reader will be distracted by the <br>readable content of a page when looking at its layout.</p>
                <a href="#" class="button">View My Work</a>
            </div>
            <div class="hero-image">
                <img src="hero.png" alt="hero">
            </div>
        </div>
    </section>
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-content">
                    <h2>ABOUT ME</h2>
                <div class="profile-image-container">
                    <img src="dhruv.png" alt="Dhruv Patel" class="profile-image">
                </div>
                <div class="bio-text">
                    <h3>DHRUV PATEL</h3>
                    <p>Hi, I'm Dhruv Patel, a web developer with a keen eye for design and a passion for 
                            creating engaging user experiences. I specialize in front-end development, 
                            bringing ideas to life through clean and efficient code. My interests include coding, 
                            hiking, and exploring new technologies.</p>
                        <P>Let's build something amazing together!</P>
                </div>
            </div>
        </div>
    </section>
    <section id="skills" class="skills-section">
        <div class="container">
            <h2>My Skills</h2>
            <div class="skills-grid">
                <div class="skill-box">
                    <h3>HTML5</h3>
                    <p>Semantic markup & accessibility</p>
                </div>
                <div class="skill-box">
                    <h3>CSS3</h3>
                    <p>Responsive design & animations</p>
                </div>
                <div class="skill-box">
                    <h3>JavaScript</h3>
                    <p>Interactive web applications</p>
                </div>
                <div class="skill-box">
                    <h3>React</h3>
                    <p>Component-based UI development</p>
                </div>
                <div class="skill-box">
                    <h3>MYsql</h3>
                    <p>Data base connection</p>
                </div>
                <div class="skill-box">
                    <h3>UI/UX Design</h3>
                    <p>User-centric design principles</p>
                </div>
                <div class="skill-box">
                    <h3>Word Press</h3>
                    <p>Create easy to design</p>
                </div>
                <div class="skill-box">
                    <h3>Python</h3>
                    <p>Unique design this language</p>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>

<script>
  // Add a glow animation on hover using JavaScript
  const skillBoxes = document.querySelectorAll('.skill-box');

  skillBoxes.forEach(box => {
    box.addEventListener('mouseenter', () => {
      box.style.boxShadow = '0 0 15px #e94219ff';
    });

    box.addEventListener('mouseleave', () => {
      box.style.boxShadow = '';
    });
  });
</script>
