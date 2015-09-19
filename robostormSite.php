<!DOCTYPE HTML>
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
            <a class="navbar-brand page-scroll" href="index.php">Ben Goldberg</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            </ul>
        </div>
    </div>
</nav>

<div class="container main">
    <header>
        <p class="section-header">
            Robostorm Club Web Site
        </p>
    </header>
    <section id="tags">
        <p class="text-left h3">Technologies used</p>

        <div class="container text-left">
            <a class="html5"></a>
            <a class="javascript"></a>
        </div>
    </section>
    <section id="time">
        <p class="text-left h4">Project worked on <span>Spring 2013</span></p>

        <p class="text-left h4">At age <span>15</span></p>
    </section>
    <div class="row">
        <div class="col-md-7">
            <section id="description">
                <p class="h3 text-left">
                    Description
                </p>

                <p class="text-left">
                    This is a web site  I built for the 4H club I founded Robostorm (<a href="robostorm.php">Read
                        more about Robostorm here</a>).  This is the first real web site I made.
                </p>

                <p class="text-left"><a href="robostormsite/index.php" target="_blank">View the website here</a></p>

                <hr/>
            </section>
            <section id="learned">
                <p class="h3 text-left">
                    What I Learned
                </p>
                <ul class="text-left">
                    <li><p>I learned a lot about HTML and Web development</p></li>
                    <li><p>I learned how some basic Apache configuration</p></li>
                </ul>
            </section>
            <section id="story">
                <hr/>
                <p class="h3 text-left">
                    The Project's Story
                </p>

                <p class="text-left">
                    This website was my club's third site.  The first one was a made through a Comcast's personal
                    website service, and the second was made through webs.com.  During the second semester of the
                    freshman year of high school I was taking an HTML class and decided to make a new, better,
                    website form scratch for our club as the final project for the class.
                </p>

                <p class="text-left">
                    This was the first real website I ever made so I was difficult to put together.  Getting the
                    layout to look right was quite tricky.  I also had to find a way to restrict access to certain
                    parts of the site which was hard to find the right way to go about.  Eventually I settled on
                    using Apache's built in security to put a directory of content behind a password.
                </p>
            </section>
        </div>
        <div class="col-md-5">
            <a class="fancybox" href="assets/robostormSite-pic1.png">
                <img src="assets/robostormSite-pic1.png" class="img-responsive inline-block sideImage"/>
            </a>
        </div>
    </div>
</div>
<?php require 'jsIncludes.php'; ?>
</body>
</html>