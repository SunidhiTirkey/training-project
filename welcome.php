<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="logout.php" class="menu-btn">Logout</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Sunidhi Tirkey</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#contact">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/mywork.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Sunidhi and I'm a <span class="typing-2"></span></div>
                    <p>I am a first year Computer Science student at Chandigarh University pursuing my bachlors degree.</p>
                    <p>I'm an enthusiast learner and is always keen to know about everything whether it is realted to my course or something that doesn't have a slightest connection to it.</p>
                    <a href="sunidhi.php">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-camera"></i>
                        <div class="text">Photography</div>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>Coding languages that I have learnt since my school days till today's date are C, C++, Python, Java, HTML, CSS, JavaScript and MySql. </p>
                    <p>Call it my passion, love or hobby but sketching is someting I really enjoy doing. I find realistic art more catchy than any other form.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                       <a href="sunidhi.php"><img src="images/mywork.jpg"   alt="Sunidhi"></a>
                        <div class="text">Sunidhi Tirkey</div>
                        <p>UID:-20BCS5010.</p>
                        <p>Best in Programming and Database Management System.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <a href="Sandeep_CV\CV.html"><img src="images/sandeep.jpeg" alt="Sandeep"></a>
                        <div class="text">Sandeep Kumar</div>
                        <p>UID:-20BCS4885.</p>
                        <p>Best in Programming as well as in Photography.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <a href="https://yuvraaajsingh.github.io/Personal-Portfolio-Page/HTML%20-%20Personal%20Site/index.html"><img src="images/profile-1.jpg" alt="Yuvraj"></a>
                        <div class="text">Yuvraj Singh</div>
                        <p>UID:-20BCS4978.</p>
                        <p>Best in Programming and in Web-Designing.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <a href="Adarsh_CV/Adarsh_Gupta .pdf"><img src="images/profile-4.jpg" alt="Adarsh"></a>
                        <div class="text">Adarsh Gupta</div>
                        <p>UID:-20BCS4884.</p>
                        <p>Best in Database Management System and Photography </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>If you want to know more about me, my skills or anything related to me then below is my contact details or you can follow me on social media for the latest updates.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Sunidhi Tirkey</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Jharkhand , India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">sunidhi.tirkey2000@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="mailto:sunidhi.tirkey2000@gmail.com">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <span>Created By <a href="https://www.instagram.com/sunnyx_tan/">Sunidhi Tirkey</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>