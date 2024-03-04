<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="Profile.css">
    <script src="Java.js" defer></script>

</head>

<body>
    <div class="header">
        <nav>
            <h2 class="logo">Profile</h2>
            <ul>
                <li class="home">Home</li>
                <li class="#">About</li>
                <li class="message"><span class="icon">&#9993;</span></li>
            </ul>
        </nav>

        <div class="content">
            <h4>Hi my name is</h4>
            <h1>James Albert B. David</h1>
            <h3 id="section">BSIT - <span>MI222</span></h3>
            <h3>Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology<br>
                Senior High School in <span>Rizal Technological Univercity</span> at Boni in Mandaluyong</h6>
        </div>
    </div>

    <!--About Section Start-->
    <section class="about">
        <div class="main">
            <img src="images\about.jpg">
            <div class="about-text">
                <h2>About me</h2>
                <h5>Dream & <span>Inspiration</span></h5>
                <p>As a first-year student at APC pursuing a degree in Information Technology, I am a tall individual
                    who finds joy in activities like riding bicycles and engaging in video games such as Point Blank,
                    Mobile Legend, Cabal, and more. My preference for simplicity extends to various aspects of my life.
                    Apart from my academic pursuits, I take pleasure in cooking, with binagoongan being my favorite
                    dish. My ultimate aspiration is to evolve into a full-time web developer, driven by a passion for
                    the intricacies of web development.</p>
            </div>
        </div>
    </section>

    <!--Favorite section -->
    <div class="Favorite">
        <div class="title">
            <h2>My Hobbies & Favorites</h2>
        </div>

        <div class="box">
            <div class="card">
                <img src="images\card1.jpg">
                <h5>Long Rides</h5>
                <div class="first">
                    <p>Riding a <span>bike & motorbike</span> provides a sense of freedom and an opportunity to
                        disconnect from daily stressors. It also strengthens the muscles, increases stamina, and
                        contributes to weight management.</p>
                    <p style="text-align: center"><a class="button" href="#">learn more</a></p>
                </div>
            </div>

            <div class="card">
                <img src="images\card2.jpg">
                <h5>Manga & Anime</h5>
                <div class="first">
                    <p><span>Manga and Anim</span> often explore intricate and imaginative storylines, filled with
                        compelling characters, intricate plots, and unexpected twists. </p>
                    <p style="text-align: center; margin-top: 80px"><a class="button" href="#">learn more</a></p>
                </div>
            </div>

            <div class="card">
                <img src="images\card3.jpg">
                <h5>Dogs</h5>
                <div class="first">
                    <p>Meet my lovely dog named <span>Thor</span> is the most adorable and lazy companion I have ever
                        encountered. He has a charming laziness about him that never fails to bring a smile to my face.
                    </p>
                    <p style="text-align: center; margin-top: 50px"><a class="button" href="#">learn more</a></p>
                </div>
            </div>
        </div>
    </div>



    <div class="footer">
        <h2 style="font-size: 35px; margin-bottom: 10px">Contact Information</h2>
        <ul>
            <li>Email: <a href="#">jbdavid@student.apc.edu.com.ph</a></li>
            <li>Website: <a href="#" target="_blank">www.yourwebsite.com</a></li>
            <li>GitHub: <a href="#" target="_blank">github.com/yourusername</a></li>
        </ul>
    </div>


</body>

</html>