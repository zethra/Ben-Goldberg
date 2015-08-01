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
            Name Tag Auto Printing
        </p>

        <div class="container text-left">
            <a class="github" href="http://github.com/Robostorm/Nametag-Auto-Printing/tree/WebApp"></a>
        </div>
    </header>
    <section id="tags">
        <p class="text-left h3">Technologies used</p>

        <div class="container text-left">
            <a class="java"></a>
            <a class="spring"></a>
            <a class="openscad"></a>
            <a class="slic3r"></a>
            <a class="octoprint"></a>
            <a class="tomcat"></a>
        </div>
    </section>
    <section id="time">
        <p class="text-left h4">Project worked on <span>Summer 2015</span></p>

        <p class="text-left h4">At age <span>17</span></p>
    </section>
    <div class="row">
        <div class="col-md-7">
            <section id="description">

                <p class="h3 text-left">
                    Description
                </p>

                <p class="text-left">
                    The Nametag Auto-printing App is a web-based application through which a user

                    can order a customized 3-D printed nametag. The user can enter their name, see a preview image of

                    what the nametag will look like, and submit their order. The application back end will then assign
                    the

                    nametag order to one of the 3-D printers on the network and will generate a CAD file and send it to
                    the

                    printer. It also has a management interface to alter the nametag queue and the printer configuration

                    among other things.
                </p>

                <hr/>
            </section>
            <section id="learned">
                <p class="h3 text-left">
                    What I Learned
                </p>
                <ul class="text-left">
                    <li><p>I expanded my knowledge of the Spring framework and Java Beans</p></li>
                    <li><p>I learned how to execute background processes in web apps</p></li>
                    <li>
                        <p>I learned that you could execute OpenSCAD files with variables to programmatically generate
                            CAD files</p>
                    </li>
                    <li><p>I learned how to use the Octoprint API</p></li>
                </ul>
            </section>
            <section id="story">
                <hr/>
                <p class="h3 text-left">
                    The Project's Story
                </p>

                <p class="text-left">
                    My 4-H Robotics Club exhibit this summer includes a set of 3-D printers, with which we will
                    custom-3D-

                    print nametags for fair-goers. An application is needed for placing orders and for automating the

                    printing process.
                </p>

                <p class="text-left">
                    I worked on this project together with my friend Tim Hollabaugh. In the first iteration of the
                    project,

                    Tim made a JavaFX desktop application that could take a name as an input, display a preview image,
                    and

                    then render and slice the nametag. Then I came onto the project and wrote Java code to multi-thread

                    the application and allow it to upload the nametags to a printer. At this point we realized that for
                    the

                    application to perform the functions we needed, we would need to be able to handle multiple printers

                    and be able to queue nametags. Part of the way through developing these functions, I realized that a

                    web app would better suit our needs than a desktop application. So I re-implemented the code as a

                    web app based on the Spring framework.
                </p>
            </section>
        </div>
        <div class="col-md-5">
            <img src="assets/nametag-pic1.jpg" class="img-responsive inline-block sideImage"/>
            <img src="assets/nametag-pic2.jpg" class="img-responsive inline-block sideImage"/>
        </div>
    </div>
</div>
</body>
</html>