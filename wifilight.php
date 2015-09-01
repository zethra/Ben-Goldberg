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
            WiFi Light Switch
        </p>

        <div class="container text-left">
            <a class="github" href="http://github.com/zethra/Wifi-Light-Switch"></a>
        </div>
    </header>
    <div class="row">
        <div class="col-md-7">
            <section id="tags">
                <p class="text-left h3">Technologies Used</p>

                <div class="container text-left">
                    <a class="arduino"></a>
                </div>
            </section>
            <section id="time">
                <p class="text-left h4">Project worked on <span>Summer 2015</span></p>

                <p class="text-left h4">At age <span>17</span></p>

                <p class="text-left h4">Took about <span>1 day</span> to build.
                </p>
            </section>
            <section id="description">

                <p class="h3 text-left">
                    Description
                </p>

                <p class="text-left">
                    A microcontroller that controls a lamp.
                </p>

                <hr/>
            </section>
            <section id="why">
                <p class="h3 text-left">
                    Why I Built It
                </p>

                <p class="text-left">
                    I built this project as my personal project for the 2015 4H fair. I had been researching ways to
                    network a microcontroller and was excited to build a project involving that. At the time I was
                    already very busy with other projects so I decided to build something quite simple as a sort of
                    proof of concept.
                </p>
                <hr/>
            </section>
            <section id="tech">
                <p class="h3 text-left">
                    Technical Details
                </p>

                <p class="text-left">
                    For this project I used Adafruit's HUZZAH microcontroller which is a breakout of the ESP8266
                    chip. I connected the HUZZAH to a relay which it could use to switch the lamp on and off.  I also
                    connected it to a micro USB break out so I can power it with a phone charger.  The I programmed the
                    microcontroller in C++ to act as a server that would serve a web page with two buttons, an ON button
                    and an OFF button.  Clicking the ON button causes the browser to navigate to the /on page of the
                    web site, which would cause the HUZZAH microcontroller to turn the relay and therefore the lamp on
                    .  Clicking the OFF button causes the browser to navigate to the /off page of the web site,
                    which would cause the HUZZAH microcontroller to turn the relay and therefore the lamp off.
                </p>
                <hr/>
            </section>
            <section id="learned">
                <p class="h3 text-left">
                    What I Learned
                </p>
                <ul class="text-left">
                    <li><p>I learned how to make an HUZZAH microcontroller act as a web server</p></li>
                </ul>
                <hr/>
            </section>
            <section id="story">
                <p class="h3 text-left">
                    The Project's Story
                </p>

                <p class="text-left">
                    For a few months prior I had been looking into various ways to network a microcontroller.  When
                    Adafruit released the HUZZAH, a WiFi capable microcontroller for $10, I knew I had to get one.
                    It arrived on a day my friend Feo was over, so he and I worked on the project together.
                    I had the rest of the hardware laying around and I was able to write the code in a about 30
                    minutes.  The documentation on Adafruit's site was pretty good so writing it didn't take too
                    long.
                </p>
            </section>
        </div>
        <div class="col-md-5">
            <a class="fancybox" href="assets/wifilight-pic1.jpg">
                <img src="assets/wifilight-pic1.jpg" class="img-responsive inline-block sideImage"
                     alt="The microcontroller connected to the relay and USB breakout"/>
            </a>
            <a class="fancybox" href="assets/wifilight-pic2.png">
                <img src="assets/wifilight-pic2.png" class="img-responsive inline-block sideImage"
                     alt="A diagram of how the WiFi Light Switch works"/>
            </a>
            <a class="fancybox" href="assets/wifilight-pic3.jpg">
                <img src="assets/wifilight-pic3.jpg" class="img-responsive inline-block sideImage"
                     alt="My WiFi Light Switch at the 4H fair"/>
            </a>
        </div>
    </div>
</div>
<?php require 'jsIncludes.php'; ?>
</body>
</html>