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
            School Navigator
        </p>

        <div class="container text-left">
            <a class="github" href="http://github.com/HCRHS-Code-Club/school-navigator"></a>
        </div>
    </header>
    <section id="tags">
        <p class="text-left h3">Technologies used</p>

        <div class="container text-left">
            <a class="java"></a>
            <a class="tomcat"></a>
            <a class="html5"></a>
            <a class="javascript"></a>
            <a class="ajax"></a>
            <a class="xml"></a>
        </div>
    </section>
    <section id="time">
        <p class="text-left h4">Project worked on <span>Summer 2015</span></p>

        <p class="text-left h4">At age <span>17</span></p>

        <p class="text-left h4">Project worked on for about <span>2-6 hours a day for about 4 weeks</span></p>
    </section>
    <div class="row">
        <div class="col-md-7">
            <section id="description">

                <p class="h3 text-left">
                    Description
                </p>

                <p class="text-left">
                    An application that generates directions between two rooms in my high school.
                </p>

                <hr/>
            </section>
            <section id="why">
                <p class="h3 text-left">
                    Why I Built It
                </p>

                <p class="text-left">
                    The reason for this app is to help people who don't know their way around the school, like incoming
                    freshman, or parents at back-to-school night. With this app, the user enters the room number where
                    they are and the room number they want to get to, and directions are generated.
                </p>
                <hr/>
            </section>
            <section id="tech">
                <p class="h3 text-left">
                    Technical Details
                </p>

                <p class="text-left">
                    This app is made up of two pieces, a Web Server and a Map Server. The Web Server and Map Server
                    interact via a Sockets connection. The Web Server serves web pages to the client browser and submits
                    directions queries to the Map Server. Then it displays the Map Server's response back to the client.
                    The Map Server has a Listener Thread running that waits for a Socket client to connect to it, then
                    once a client has connected, it spawns a new Client Handler thread to handle that client. The
                    Listener Thread then returns to listening for client connection requests. The Client Handler Thread
                    is assigned to an available Map Thread. It reads the directions request from the client and passes
                    it to an available Map Thread via shared memory. The Map Thread uses Dijkstra's algorithm and the
                    Map Data it has to find the shortest path between the two rooms provided. Then it generates written
                    directions in English and sends them back to the Client Handler Thread via shared memory. The
                    Handler Thread then send the English directions back to the Socket client, at which point the Client
                    Handler is terminated.
                </p>

                <p class="text-left">
                    The Map Data is read into memory when the process is started. There is a maximum number of ten
                    concurrent Map Threads. Each Map Thread makes its own copy of the Map Data in order to execute
                    Dijkstra's algorithm. So there is a balance needed between number of concurrent Map Threads and the
                    amount of memory consumed. The more concurrent threads running, the more CPU resources the
                    application is capable of using.
                </p>

                <p class="text-left">
                    The Map Data represents all the hallways and rooms in the school. It is stored in XML format and is
                    read into memory to populate Hallway, Intersection, and Room objects.
                </p>
                <hr/>
            </section>
            <section id="learned">
                <p class="h3 text-left">
                    What I Learned
                </p>
                <ul class="text-left">
                    <li><p>XML data format / XML parsing</p></li>
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
                    Shortly after joining my high school's Code Club, fall of 2014, we went through a process of coming
                    up with projects we might want to work on as a club. One idea that was thrown out was the idea of
                    making an app to give freshmen directions around the school. I was excited to start on this project
                    and we began some initial conceptualization and planning. But then robotics season started and many
                    of the people in the group were then too busy to work on this project. After robotics season ended,
                    the other people in my group were no longer interested in working on the School Navigator app at
                    that time, so I decided to work on it independently.
                </p>

                <p class="text-left">
                    The first piece of the application I decided to work on was path-finding. After doing some research,
                    I found Dijkstra's shortest path algorithm and figured out how to use it to generate directions.
                    After consulting a fellow code club member, I decided the best first implementation of the
                    application would be as a web app. We also considered making an Android and/or IOS app, but decided
                    on a web app as it would available to the most users.
                </p>
            </section>
        </div>
    </div>
</div>
<?php require 'jsIncludes.php'; ?>
</body>
</html>