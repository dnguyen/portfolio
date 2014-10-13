@extends('layouts.default')
@section('content')
    <div class="hero-unit">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="title">Full Stack Web Developer</h1>
                    <p class="description">I am a web developer and currently a Computer Science major at Penn State University. I enjoy building everything from complex backend systems to interactive web apps.</p>
                    <a class="btn btn-default" href="/contact">Contact Me</a>
                </div>
            </div>
        </div>
    </div>
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