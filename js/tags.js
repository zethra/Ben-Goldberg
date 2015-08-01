$(function() {
    $('.github').addClass('btn btn-default')
        .attr('target', '_blank')
        .text(' View Project on GitHub')
        .prepend(
        $('<img>')
            .attr('src', 'assets/github-logo.png')
            .addClass('icon ')

    );

    $('.java').addClass('btn btn-default tag')
        .attr('href', 'http://www.oracle.com/java/index.html')
        .attr('target', '_blank')
        .text(' Java')
        .prepend(
        $('<img>')
            .attr('src', 'assets/java-logo.png')
            .addClass('icon ')

    );

    $('.spring').addClass('btn btn-default tag')
        .attr('href', 'http://spring.io/')
        .attr('target', '_blank')
        .text(' Spring')
        .prepend(
        $('<img>')
            .attr('src', 'assets/spring-logo.png')
            .addClass('icon ')

    );

    $('.openscad').addClass('btn btn-default tag')
        .attr('href', 'http://www.openscad.org/')
        .attr('target', '_blank')
        .text(' OpenSCAD')
        .prepend(
        $('<img>')
            .attr('src', 'assets/OpenSCAD-logo.png')
            .addClass('icon ')

    );

    $('.slic3r').addClass('btn btn-default tag')
        .attr('href', 'http://slic3r.org/')
        .attr('target', '_blank')
        .text(' Slic3r')
        .prepend(
        $('<img>')
            .attr('src', 'assets/Slic3r-logo.png')
            .addClass('icon ')

    );

    $('.octoprint').addClass('btn btn-default tag')
        .attr('href', 'http://octoprint.org/')
        .attr('target', '_blank')
        .text(' OctoPrint')
        .prepend(
        $('<img>')
            .attr('src', 'assets/octoprint-logo.png')
            .addClass('icon ')

    );

    $('.tomcat').addClass('btn btn-default tag')
        .attr('href', 'http://tomcat.apache.org/')
        .attr('target', '_blank')
        .text(' Tomcat')
        .prepend(
        $('<img>')
            .attr('src', 'assets/tomcat-logot.png')
            .addClass('icon ')

    );
});