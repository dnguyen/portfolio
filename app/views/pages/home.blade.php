@extends('layouts.default')
@section('content')
    <div class="hero-unit">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="title">I'm Dylan</h1>
                    <p class="description">I work with PHP, JavaScript, HTML, and CSS to build scalable and modern web applications.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="about-me">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>About Me</h3>
                    <p>I am Dylan Nguyen, and I am a self-taught full stack web developer. I am currently a junior studying Computer Science at Penn State University. I chose to focus on web development because I love what the internet stands for and what it is capable of. The internet still has a lot of potential and I want to be a part of the innovation that it brings to all industries.</p>
                    <p>I not only enjoy coding, but also working with and implementing usable interfaces and designs. I have experience with both frontend and backend development. Many of my projects are single page applications that utilizes JavaScript with Backbone and jQuery. My preferred languages for building backend applications are PHP and JavaScript with NodeJS. I have developed and designed multiple applications that are scalable and flexible; these projects include RESTful APIs, Content Management Systems, and applications that can handle real-time data. I hope that my skills will lead me to Silicon Valley where I will able to help build innovative web applications that affects a large amount of people.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="current-projects">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Current Projects</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project">
                        <h4>yourkpop</h4>
                        <p>yourkpop providers users a place to keep track of and listen to Korean Pop music. Users can create their own playlists and libraries from thousands of different songs and artists.</p>
                        <a class="btn btn-success" href="/projects">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <h4>QRMyOrder</h4>
                        <p>QRMyOrder is a service and web application that we plan on selling to restaurant owners. It will allow the restaurant's customers to place orders through their smartphone.</p>
                        <a class="btn btn-success" href="/projects">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <h4>Desktop SMS</h4>
                        <p>DesktopSMS is an Android and desktop application that allows the user to connect to their phone through the network to send and recieve text messages.</p>
                        <a class="btn btn-success" href="/projects">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop