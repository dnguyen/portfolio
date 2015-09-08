@extends('layouts.default')
@section('content')
    <div class="hero-unit">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="title">Software Engineer</h1>
                    <p class="description">Computer Science major at Penn State University. I enjoy building everything from complex backend systems to interactive web applications.</p>
                    <a class="btn btn-default" href="{{{ URL::to('/contact') }}}">Contact Me</a>
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
                <div class="col-md-6">
                    <div class="project">
                        <h4>yourkpop v2.0</h4>
                        <p>Currently working on upgrading the entire API and front end. The API is being moved to Node and front end is being rebuilt in React. New features such as a real time popularity tracker is also being worked on.</p>
                        <a class="btn btn-success" href="{{{ URL::to('/projects') }}}">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project">
                        <h4>DJ Set Data Indexer/Analysis</h4>
                        <p>Automated data indexer for DJ sets. The plan is to use the data to auto generate playlists based on playlists put together by professional DJs.<br/><br/></p>
                        <a class="btn btn-success" href="{{{ URL::to('/projects') }}}">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop