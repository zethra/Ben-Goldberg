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
            Q-Bert
        </p>

        <div class="container text-left">
            <a class="githubCustom" href="http://github.com/zethra/Q-Bert-WebIOPi-Remote"> View Q-Bert WebIOPi Remote on
                GitHub</a>
            <a class="githubCustom" href="http://github.com/zethra/Q-Bert-Minecraft-Remote"> View Q-Bert Minecraft
                Remote on GitHub</a>
        </div>
    </header>
    <div class="row">
        <div class="col-md-7">
            <section id="tags">
                <p class="text-left h3">Technologies used in WebIOPi Remote</p>

                <div class="container text-left">
                    <a class="html5"></a>
                    <a class="javascript"></a>
                    <a class="webiopi"></a>
                </div>

                <p class="text-left h3">Technologies used in Minecraft Remote</p>

                <div class="container text-left">
                    <a class="python"></a>
                </div>
            </section>
            <section id="time">
                <p class="text-left h4">Project worked on <span>Summer 2014</span></p>

                <p class="text-left h4">At age <span>16</span></p>

                <p class="text-left h4">About <span>1 day to build</span> the vehicle, about
                    <span>1 month to program</span>.
                </p>
            </section>
            <section id="description">

                <p class="h3 text-left">
                    Description
                </p>

                <p class="text-left">
                    Q-Bert the Robot is a vehicle that can be controlled with a Minecraft game and from a web page.
                </p>

                <hr/>
            </section>
            <section id="why">
                <p class="h3 text-left">
                    Why I Built It
                </p>

                <p class="text-left">
                    I built this vehicle from a kit, but then I wanted to get creative with ways of controlling it.
                </p>
                <hr/>
            </section>
            <section id="tech">
                <p class="h3 text-left">
                    Technical Details
                </p>

                <p class="h4 text-left">
                    On the Raspberry Pi on Q-Bert
                </p>

                <p class="text-left">
                    There is Python script interprets messages from a different Raspberry Pi that is running Minecraft.
                    It them moved based on the messages it receives.
                </p>

                <p class="text-left">
                    The WebIOPi program is a web server that allows the motors to be controlled via javascript. A client
                    that has the web page open can press html buttons on the page that cause the robot to move.
                </p>

                <p class="h4 text-left">
                    The Minecraft Control Method
                </p>

                <p class="text-left">
                    On a separate Raspberry Pi computer, a small version of the Minecraft game is installed. Another
                    Python Script is also installed on this Pi that uses an available Minecraft API to detect the
                    movement of the player in the game. This Python Script communicates with the Python Script on Q-Bert
                    through a Sockets connection to tell buert how to move.
                </p>

                <p class="h4 text-left">
                    The Web Page Control Method
                </p>

                <p class="text-left">
                    Any device with a web browser on the same network as Q-Bert can control it by loading the web page
                    Q-Bert is hosting. When the controls on the web page are pressed, messages are sent back to the
                    WebIOPi program on Q-Bert that instruct it how to move.
                </p>
                <hr/>
            </section>
            <section id="learned">
                <p class="h3 text-left">
                    What I Learned
                </p>
                <ul class="text-left">
                    <li><p>XML data format</p></li>
                    <li><p>Dijkstra's shortest path algorithm</p></li>
                    <li><p>Better understanding of Java servlets</p></li>
                    <li><p>Multithreading</p></li>
                </ul>
                <hr/>
            </section>
            <section id="story">
                <p class="h3 text-left">
                    The Project's Story
                </p>

                <p class="text-left">

                </p>
            </section>
        </div>
        <div class="col-md-5">
            <a class="fancybox" href="assets/qbert-pic1.jpg">
                <img src="assets/qbert-pic1.jpg" class="img-responsive inline-block sideImage"
                     alt="Q-Bert the robot"/>
            </a>
            <a class="fancybox" href="assets/qbert-pic2.png">
                <img src="assets/qbert-pic2.png" class="img-responsive inline-block sideImage"
                     alt="The Python script get data from Minecraft via its API"/>
            </a>
            <a class="fancybox" href="assets/qbert-pic3.jpg">
                <img src="assets/qbert-pic3.jpg" class="img-responsive inline-block sideImage"
                     alt="Q-Bert and the Raspberry Pi the controls it running Minecraft"/>
            </a>
            <a class="fancybox" href="assets/qbert-pic4.png">
                <img src="assets/qbert-pic4.png" class="img-responsive inline-block sideImage"
                     alt="Both a Python script that communicates with the Pi running Minecraft
                     and the WebIOPi program the runs the web control control the motors to make Q-bert move"/>
            </a>
            <a class="fancybox" href="assets/qbert-pic5.jpg">
                <img src="assets/qbert-pic5.jpg" class="img-responsive inline-block sideImage"
                     alt="Q-Bert and a phone with the controller web page open"/>
            </a>
            <a class="fancybox" href="assets/qbert-pic6.png">
                <img src="assets/qbert-pic6.png" class="img-responsive inline-block sideImage"
                     alt="The controls are on a web page in the web browser of the internet connected device
                     that is controlling Q-Bert"/>
            </a>
        </div>
    </div>
</div>
<?php require 'jsIncludes.php'; ?>
</body>
</html>