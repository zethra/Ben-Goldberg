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
<div class="container-fluid main">
    <header>
        <p class="page-header-custom">
            Ben Goldberg
        </p>

        <div id="header-text" class="container text-left">
            <p>
                Welcome to my web site. The purpose of this site is for you to learn about me. As I apply to colleges, I
                will use this site as a forum for describing the key influences that have made me who I am, as well as
                to
                highlight the many independent and team projects I have completed, and which illustrate my initiative
                and
                technical abilities.
            </p>

            <p>The "About" section that follows summarizes the things that make me tick.</p>
            <ul>
                <li><p>"About Me" is obvious; I talk about who I am.</p></li>
                <li>
                    <p>"About Daleks" is about my high school FIRST Robotics Team, which has had a very strong influence
                        in
                        my
                        process of discovering what I love to do.
                    </p>
                </li>
                <li><p>"About Robostorm" is about the 4-H robotics club that I started as a 7th grader, and which has
                        had a
                        multi-faceted influence in shaping who I am.
                    </p>
                </li>
            </ul>
            <p>
                Finally, the "Projects" section provides a summary of fifteen different projects of which I am very
                proud. Most are programming and robotics/electronics projects. For each one, I describe the problem
                being
                solved, the technologies used and what I taught myself, and finally how it works and my process of
                making
                it. The last two projects are the odd ones: a business I ran after freshman year, and my
                4-H-award-winning
                photographs.
            </p>
        </div>
    </header>
    <section id="about" class="section-alt">
        <div class="container">
            <p class="section-header">About</p>
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
    <section id="projects" class="section">
        <div class="container">
            <p class="section-header">Projects</p>
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
            <a href="qbert.php">
                <figure class="figure-effect">
                    <img src="assets/qbert-front.jpg">
                    <figcaption>
                        <h2>Qbert <span>The Robot</span></h2>

                        <div>
                            <p>A robot with many control methods</p>
                        </div>
                    </figcaption>
                </figure>
            </a>
            <a href="nametags.php">
                <figure class="figure-effect">
                    <img src="http://www.crvdmedia.com/crvd/wp-content/uploads/2012/07/url-1.jpeg"/>
                    <!--                    <img src="assets/nametag-front.png">-->
                    <figcaption>
                        <h2>This is <span>A Placeholder</span></h2>

                        <div>
                            <p>This is a placeholder</p>
                        </div>
                    </figcaption>
                </figure>
            </a>
        </div>
    </section>
</div>
</body>
</html>