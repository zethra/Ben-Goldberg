<html>
<head>
    <?php require 'includes.php'; ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Ben Goldberg</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a class="page-scroll" href="#about">About</a></li>
                <li><a class="page-scroll" href="#projects">Projects</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container main">
    <section id="about">
        <div class="container">
            <h1>About</h1>
            <hr/>
            <a href="me.php">
                <figure class="figure-effect">
                    <img src="assets/me-front.jpg"/>
                    <figcaption>
                        <h2>About <span>Me</span></h2>

                        <div>
                            <p>Who I am and what I do</p>
                        </div>
                    </figcaption>
                </figure>
            </a>
            <a href="daleks.php">
                <figure class="figure-effect">
                    <img src="assets/daleks-front.jpg"/>
                    <figcaption>
                        <h2>About <span>Daleks</span></h2>

                        <div>
                            <p>Team 3637, my FIRST FRC team</p>
                        </div>
                    </figcaption>
                </figure>
            </a>
            <a href="robostorm.php">
                <figure class="figure-effect">
                    <img src="assets/robostorm-front.jpg"/>
                    <figcaption>
                        <h2>About <span>Robostorm</span></h2>

                        <div>
                            <p>My 4H robotics club that I founded</p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </section>
    <section id="projects">
        <div class="container">
            <h1>Projects</h1>
            <hr/>
            <a href="nametags.php">
                <figure class="figure-effect">
<!--                    <img src="http://www.crvdmedia.com/crvd/wp-content/uploads/2012/07/url-1.jpeg"/>-->
                    <img src="assets/nametag-front.png">
                    <figcaption>
                        <h2>Name Tag <span>Auto Printing</span></h2>

                        <div>
                            <p>A web app used to order custom</p>

                            <p>3D printed name tags</p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </section>
</div>
</body>
</html>