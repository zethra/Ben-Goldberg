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
            Scouting App
        </p>

        <div class="container text-left">
            <a class="githubCustom" href="http://github.com/FRC-3637-Daleks/ScoutingAppServer.git">View the Scouting App
                v1 on GitHub</a>
            <a class="githubCustom" href="http://github.com/FRC-3637-Daleks/ScoutingApp.git">View the Scouting App v2 on
                GitHub</a>
        </div>
    </header>
    <section id="tags">
        <p class="text-left h3">Technologies used</p>

        <div class="container text-left">
            <a class="java"></a>
            <a class="spring"></a>
            <a class="tomcat"></a>
            <a class="html5"></a>
            <a class="javascript"></a>
            <a class="mysql"></a>
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

                </p>

                <hr/>
            </section>
            <section id="why">
                <p class="h3 text-left">
                    Why I Built It
                </p>

                <p class="text-left">
                    When FRC teams are competing, there is a need to "scout" out the strengths and weaknesses of the
                    other teams' robots and use that information to help our robot drivers determine their game play
                    strategy for each match. In addition, during the later part of a tournament, the leading teams form
                    alliances with teams that have complementary capabilities. Analysis of the other teams also helps in
                    this process. Our team had no automated way to do this data collection and analysis, so I decided to
                    take on solving this problem.
                </p>
                <hr/>
            </section>
            <section id="tech">
                <p class="h3 text-left">
                    Technical Details
                </p>

                <p class="h4 text-left">
                    I had to work within these constraints on how I built the Scouting App:
                </p>

                <ul class="text-left">
                    <li><p>No Wi-Fi communication is allowed at FRC matches, since this could interfere with the remote
                            control to robot communication.</p></li>
                    <li><p>Internet access is highly unreliable in many of the schools, without Wi-Fi or reliable cell
                            service, therefore we did not use cloud storage as a way to share the scouting data between
                            the spectator stands and the pit.</p></li>
                    <li><p>We could not rely on having access to A/C power in the stands, where the data entry terminals
                            would be used.</p></li>
                    <li><p>We did not have budget to buy a lot of new laptops. The old IBM Netbooks were donated.</p>
                    </li>
                </ul>

                <p class="h4 text-left">
                    Version 1 Details
                </p>

                <p class="h4 text-left">
                    Physical Architecture
                </p>

                <p class="text-left">
                    There is one Netbook that acts as the Scout Master which hosts the application. We have six other
                    Netbooks that act as data entry terminals. They are connected together via Ethernet cables and a
                    switch. The Netbooks are all powered by a robot battery.
                    There is the Pit Master computer in the Pit which is displays relevant information to the drive crew
                    before each match. The Scout Master would output its scouting data onto a USB drive which would then
                    be brought to the Pit and then loaded on the Pit Master.
                </p>

                <p class="h4 text-left">
                    Operating System
                </p>

                <p class="text-left">
                    When we got the Netbooks, they were running Windows XP. They were pretty slow, so we decided to run
                    Linux Mint on them.
                </p>

                <p class="h4 text-left">
                    Software Architecture
                </p>

                <p class="text-left">
                    Tomcat is a web application server which hosts the scouting application code I wrote. Spring is a
                    middleware layer that contains many capabilities, two of which I used in this application. It allows
                    me to write and read Java objects to and from the SQL database. It also provides a Model View
                    Controller, allowing me to easily present the user with data and process alterations they made.
                </p>

                <p class="h4 text-left">
                    Application Design
                </p>

                <p class="text-left">
                    In an FRC match, six robots play at one time. Each of the six Netbook client users will be
                    responsible for reporting on the game performance of one of the six robots. The way for each user to
                    select the robot to report on is through using the Tournament Schedule screen. The screen presented
                    to the user lists all the matches in the rows, and all the robots per match in six columns. The user
                    clicks on their assigned column in order to begin data collection for their robot. This action opens
                    the Match Data Entry screen. The user is presented with a form where they input data about the
                    robot's performance in the match. After submitting the information, the Tournament Schedule screen
                    is presented again.
                </p>

                <hr/>
            </section>
            <section id="learned">
                <p class="h3 text-left">
                    What I Learned
                </p>
                <ul class="text-left">
                    <li><p>I learned how to use Spring</p></li>
                    <li><p>I learned how to design and create database tables in MySQL</p></li>
                </ul>
            </section>
            <section id="story">
                <hr/>
                <p class="h3 text-left">
                    The Project's Story
                </p>

                <p class="text-left">
                    I led this initiative on my own, resulting in our team having its first automated scouting
                    application for collecting and analyzing team performance.
                </p>

                <ul class="text-left">
                    <li><p>I worked with teammates on initial software design decisions</p></li>
                    <li><p>I worked with teammates to decide what data to collect and analyze, based on the game rules
                            and scoring</p></li>
                    <li><p>I helped three teammates prototype the web GUI who were learning HTML</p></li>
                    <li><p>I designed and coded the entire application</p></li>
                    <li><p>Twenty of my teammates were trained on how to use the application</p></li>
                    <li><p>Some of my teammates made the power supply for the Netbooks that used a robot battery</p>
                    </li>
                    <li><p>One of my teammates configured all the Netbooks with the Linux Mint operating system and
                            Tomcat</p></li>
                    <li><p>I designed the operation used during the tournaments. The scouts manager organized work
                            shifts for when the team members were assigned to watch the matches. Six team members at a
                            time would watch the six robots in each game match and record robot performance into the
                            application. The information would be stored in a centralized database server they were
                            networked into. After several matches were complete, the database contents was copied onto a
                            flashdrive and delivered to the "pit" where the robot and drive team were. The data was then
                            loaded into the Pit computer where pre-match analysis reports could be viewed</p></li>
                </ul>
            </section>
        </div>
        <div class="col-md-5">
            <a class="fancybox" href="assets/scouting-pic1.jpg">
                <img src="assets/scouting-pic1.jpg" class="img-responsive inline-block sideImage"
                    alt="A netbook running the scouting app at completion"/>
            </a>
            <a class="fancybox" href="assets/scouting-pic2.jpg">
                <img src="assets/scouting-pic2.jpg" class="img-responsive inline-block sideImage"
                     alt="The power supply the team built to power the net books and the switch off of a robot
                     battery"/>
            </a>
            <a class="fancybox" href="assets/scouting-pic3.jpg">
                <img src="assets/scouting-pic3.jpg" class="img-responsive inline-block sideImage"
                     alt="Our team scouting at completion"/>
            </a>
        </div>
    </div>
</div>
</body>
<?php require 'jsIncludes.php'; ?>
</html>