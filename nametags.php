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
            <a class="github" href="http://github.com/Robostorm/Nametag-Auto-Printing/"></a>
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
            <a class="html5"></a>
            <a class="ajax"></a>
            <a class="javascript"></a>
            <a class="xml"></a>
        </div>
    </section>
    <section id="time">
        <p class="text-left h4">Project worked on <span>Summer 2015</span></p>

        <p class="text-left h4">At age <span>17</span></p>

        <p class="text-left h4">Project worked on for about <span>2-4 hours a day for about 6 weeks</span></p>
    </section>
    <div class="row">
        <div class="col-md-7">
            <section id="description">

                <p class="h3 text-left">
                    Description
                </p>

                <p class="text-left">
                    The Name Tag Auto Printing app is a web-based application through which a user can order a
                    customized 3-D printed name tag. The user can enter their name, see a preview image of what the name
                    tag will look like, and submit their order. The application back end will then send the name tag
                    order to one of the 3-D printers on the network. The app also has a management interface to alter
                    the name tag queue and the printer configuration among other things.
                </p>

                <hr/>
            </section>
            <section id="why">
                <p class="h3 text-left">
                    Why I Built It
                </p>

                <p class="text-left">
                    My 4-H Robotics Club's exhibit this summer included a set of 3-D printers, which we used to
                    custom-3D-print name tags for fair-goers. An application was needed for placing orders and for
                    automating the printing process.
                </p>
                <hr/>
            </section>
            <section id="tech">
                <p class="h3 text-left">
                    Technical Details
                </p>

                <p class="h4 text-left">
                    Name tag order entry steps
                </p>

                <ul class="text-left">
                    <li><p>On the Ordering Page enter the name to be printed on the name tag</p></li>
                    <li><p>A preview image is created and displayed</p></li>
                    <li><p>Approve/submit the name tag order</p></li>
                    <li><p>The order is added to the Order Queue</p></li>
                </ul>

                <p class="h4 text-left">
                    Name tag order processing steps
                </p>

                <ul class="text-left">
                    <li><p>The Print Server checks every several seconds to see if there is a printer available (Active
                            and Not printing)</p></li>
                    <li><p>The Print Server waits until there is a printer is available and there is a waiting name tag
                            order</p></li>
                    <li><p>Assign the Order to the printer</p></li>
                    <li><p>Generate STL file</p></li>
                    <li><p>Slice the STL file, making a Gcode file</p></li>
                    <li><p>Upload Gcode file to the printer and set Printer state to "Printing"</p></li>
                </ul>

                <p class="h4 text-left">
                    When printer is finished
                </p>

                <ul class="text-left">
                    <li><p>Web Server receives message from printer when printing is done and the operator pushes the
                            Button</p></li>
                    <li><p>Order is removed from the Queue</p></li>
                    <li><p>Printer state is set to "Not printing"</p></li>
                </ul>

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
                <hr/>
            </section>
            <section id="story">
                <p class="h3 text-left">
                    The Project's Story
                </p>

                <p class="text-left">
                    I worked on this project together with my friend Tim Hollabaugh. In the first iteration of the
                    project, Tim made a JavaFX desktop application that could take a name as an input, display a preview
                    image, and then render and slice the name tag. Then I came onto the project and wrote Java code to
                    multi-thread the application and allow it to upload the name tags to a printer. At this point we
                    realized that for the application to perform the functions we needed, we would need to be able to
                    handle multiple printers and be able to queue name tags. Part of the way through developing these
                    functions, I realized that a web app would better suit our needs than a desktop application. So I
                    re-implemented the code as a web app based on the Spring framework.
                </p>
            </section>
        </div>
        <div class="col-md-5">
            <a class="fancybox" href="assets/nametag-pic1.jpg">
                <img src="assets/nametag-pic1.jpg" class="img-responsive inline-block sideImage"
                     alt="The Name Tag App home screen"/>
            </a>
            <a class="fancybox" href="assets/nametag-pic2.png">
                <img src="assets/nametag-pic2.png" class="img-responsive inline-block sideImage"
                     alt="The printer management page"/>
            </a>
            <a class="fancybox" href="assets/nametag-pic3.jpg">
                <img src="assets/nametag-pic3.jpg" class="img-responsive inline-block sideImage"
                     alt="Name Tag process flow chart"/>
            </a>
        </div>
    </div>
</div>
<?php require 'jsIncludes.php'; ?>
</body>
</html>