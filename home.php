<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<?php include("header.html")
?>
<body>
    <div class="home">
        <div class="name2">
            <p>Welcome to TechPro Hub - Where your Tech journey Begins!</p>
        </div>

        <div class="imagea">
            <marquee direction="right">
                <img class="a" src="img1.jpg" alt="Tech Image" height="400px" width="1000px" /> 
            </marquee>
        </div>
    </div>   

    <div class="hero">
        <div class="hero-content">
            <p>Join thousands of learners in acquiring the skills to excel in the tech industry.</p>
            <div class="cta-buttons">
                <a href="register.php" class="btn primary">Start Learning Now</a>
                <a href="courses.php" class="btn secondary">Browse Courses</a>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="feature">
            <span class="icon">💻</span>
            <h3>Expert-Led Courses</h3>
            <p>Learn from industry experts with years of experience.</p>
        </div>
        <div class="feature">
            <span class="icon">🔥</span>
            <h3>Hands-On Projects</h3>
            <p>Apply your knowledge with real-world projects.</p>
        </div>
        <div class="feature">
            <span class="icon">🚀</span>
            <h3>Career Support</h3>
            <p>Get help with resume building, interview preparation, and job placement.</p>
        </div>
        <div class="feature">
            <span class="icon">🌐</span>
            <h3>Global Community</h3>
            <p>Connect with learners and professionals from around the world.</p>
        </div>
    </div>

</body>
<?php include("footer.html")
?>
</html>