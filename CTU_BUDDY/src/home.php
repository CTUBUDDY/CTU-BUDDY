<!DOCTYPE html>
<html lang="en">
<script>
    document.querySelector("button").addEventListener("click", function(e) {
        e.preventDefault(); // Prevents form submission to keep it within JS handling
        const username = document.querySelector("#username").value;
        const password = document.querySelector("#password").value;
        const message = document.querySelector("#message");

        // Check if both username and password are entered
        if (username && password) {
            window.location.href = "home.html"; // Redirect to home.html
        } else {
            message.textContent = "Please enter both username and password.";
        }
    });
</script>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/index.css" />
    <link rel="stylesheet" href="assets/Icons/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="shortcut icon" href="/CTU_BUDDY/src/assets/images/HomePageAssets/ctu buddy.png" type="image/x-icon">
    <title>CTU Buddy</title>
</head>

<body>
    <header>
        <nav>
            <h2>CTU Buddy</h2>
            <ul>
                
                <li><a href="discussions.html">Discussions</a></li>
                <li><a href="timetable.html">Timetable</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="share_resources.html">Share Resources</a></li>
            </ul>
            <h3><i class="fa-regular fa-user"></i>Login/Register</h2>
        </nav>

        <div class="hero-section">
            <h1>Welcome to CTU Buddy</h1>
            <p>
                Welcome CTU Buddy, where your academic journey begins! Access all the
                resources, tools, and support you need to excel in your studies and
                make the most of your university experience.
            </p>
            <div class="buttons-hero-section">
                <button class="button-color-red"><a href="/CTU_BUDDY/src/contact.html">Contact US</a></button>
                <button class="button-color-white"><a href="/CTU_BUDDY/src/about.html">About US</a></button>
            </div>
        </div>
    </header>

    <section class="popular-topics">
        <h3>Popular Topics, Which are most Favourite by Students</h3>
        <ul>
            <li class="popular-topics-bussiness"><i class="fa-regular fa-building"></i>Bussiness</li>
            <li class="popular-topics-management"><i class="fa-solid fa-clipboard"></i>Management</li>
            <li class="popular-topics-programming"><i class="fa-solid fa-code"></i>Programming</li>
            <li class="popular-topics-audio-and-video"><i class="fa-solid fa-music"></i>Audio and Video</li>
            <li class="popular-topics-finance"><i class="fa-solid fa-coins"></i>Finance</li>
            <li class="popular-topics-design"><i class="fa-solid fa-palette"></i>Design</li>
        </ul>
    </section>

    <section class="popular-courses">
        <h2>Popular Courses</h2>
        <p class="intro-p">
            Discover our most popular courses and unlock your potential at CTU
            Training solutions.
        </p>
        <div class="courses">
            <div class="course-card">
                <div class="course-image"
                    style="background-image: url(assets/images/HomePageAssets/Programming\ Foundation.jpg);">
                </div>
                <h4>Programming Foundation</h4>
                <p>Kickstart your coding journey with our beginner-friendly Programming Foundation Course.</p>
                
            </div>
            <div class="course-card">
                <div class="course-image"
                    style="background-image: url(assets/images/HomePageAssets/Project\ Managment.jpg);">
                </div>
                <h4>Project Management</h4>
                <p>Master the art of project management and lead successful projects with confidence.</p>
                
            </div>
            <div class="course-card">
                <div class="course-image"
                    style="background-image: url(assets/images/HomePageAssets/Cyber\ Sercurity.png);">
                </div>
                <h4>Cyber Sercurity</h4>
                <p>Protect your digital world
                    by learning and mastering
                    the essentials of cybersecurity.</p>
                
            </div>
            <div class="course-card">
                <div class="course-image"
                    style="background-image: url(assets/images/HomePageAssets/IT\ Tech\ Support.jpg);">
                </div>
                <h4>IT Technical Support</h4>
                <p>Gain the skills to troubleshoot and solve tech issues with our comprehensive Tech Support course.</p>
                
            </div>
        </div>

    </section>

    <section class="lecturers">
        <h3>Our Lecturers</h3>
        <div class="lecturer-names">
            <div class="lecturer-card"
                style="background-image: url(assets/images/HomePageAssets/Lauren\ Solomons.jpg);">
                <div class="lecturer-info">
                    <h4>Lauren Solomons</h4>
                    <p>Programming Foundation</p>
                </div>

            </div>
            <div class="lecturer-card"
                style="background-image: url(assets/images/HomePageAssets/Sherneill\ Goliath.jpg);">
                <div class="lecturer-info">
                    <h4>Sherneil Goliath</h4>
                    <p>Project Management</p>
                </div>
            </div>
            <div class="lecturer-card"
                style="background-image: url(assets/images/HomePageAssets/Ross\ solomons.jpg);">
                <div class="lecturer-info">
                    <h4>Ross Solomons</h4>
                    <p>Civil Engineering</p>
                </div>
            </div>
            <div class="lecturer-card"
                style="background-image: url(assets/images/HomePageAssets/Luvuyo\ Vumani.jpg);">
                <div class="lecturer-info">
                    <h4>Luvuyo Vumani</h4>
                    <p>Art and Design</p>
                </div>
            </div>
        </div>


        <button class="button-color-red"><a href="/CTU_BUDDY/src/contact.html">Get in Touch</a></button>
    </section>

    <footer>
        <div class="website-name-type">
            <h3>CTU Buddy</h3>

        </div>
        <div class="website-info">
            <div class="about-us">
                <h3>About Us</h3>
                <p>CTU Buddy is your go-to platform for all things campus-related. From managing your timetable to sharing resources and engaging in discussions, we’re here to make your student life easier and more connected. Join us in creating a collaborative and supportive learning environment!</p>
            </div>
            <div class="more-information">
                <h3>More Information</h3>
                <ul>
                    <li>More Search</li>
                    <li>Testimonials</li>
                    <li>Feedback</li>
                </ul>
            </div>
            <div class="useful-links">
                <h3>Useful Links</h3>
                <ul>
                    <li>Terms of Use</li>
                    <li>Privacy Policy</li>
                    <li>FAQs</li>
                </ul>
            </div>
            <div class="contact-us">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fa-solid fa-envelope"></i> hello@gmail.com</li>
                    <li><i class="fa-solid fa-phone"></i> 085 840 2727</li>
                    <li><i class="fa-solid fa-location-dot"></i> 17 Hello Street</li>
                </ul>
            </div>
        </div>
        <small>Collavrative Coders&copy; 2024 All rights reserved </small> 
    </footer>
</body>

</html>