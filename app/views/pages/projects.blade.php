@extends('layouts.default')
@section('content')
    <div class="content container">
        <div class="project row">
            <div class="thumb col-md-5">
                <a href="http://yourkpop.com"><img src="assets/images/yourkpop_preview.png"></a>
            </div>
            <div class="description col-md-7">
                <h3>yourkpop</h3>
                <p>yourkpop providers users a place to keep track of and listen to Korean Pop music. Users can create their own playlists and libraries from thousands of different songs and artists.</p>
                <p>yourkpop is a single page application built using Backbone, MarionetteJS. I decided to use a single page application because I wanted to have the music player be persistent across all pages; this allows users to listen to their playlists while browsing the website. The RESTful API was built with PHP, Laravel 4, and MySQL. I also utilized YouTube's API to scrape offical Korean Pop music agencys' channels to build the library of music. </p>
                <a href="http://yourkpop.com" class="btn btn-success">Go to yourkpop</a>
                <a href="https://github.com/dnguyen/gosu.io" class="btn btn-primary">Front-end Source</a>
                <a href="https://github.com/dnguyen/gosu.io-api" class="btn btn-primary">API Source</a>
            </div>
        </div>
        <div class="project row">
            <div class="thumb col-md-5">
                <img src="assets/images/qrmyorder_preview.png">
            </div>
            <div class="description col-md-7">
                <h3>QRmyOrder</h3>
                <p>QRmyOrder is a service and web application that we plan on selling to restaurant owners. It will allow the restaurant's customers to place orders through their smartphone. An employee will then scan the customer's orders using a QR code; the order is then dispatched to all employees.</p>
                <p>QRmyOrder is currently a being developed with 3 other people. It originally started as an idea developed at a hackathon (HackPSU), but eventually lead to actual interest from multiple restaurants. I am currently leading the development of the backend software and architecture. We are using Laravel 4 for a RESTful API that all clients use. We needed the restaurants employees to be able to see orders in real-time, so I developed a NodeJS socket.io server to handle dispatching orders in real-time.</p>
                <a href="http://test.qrmyorder.com" class="btn btn-success">View prototype</a>
            </div>
        </div>
        <div class="project row">
            <div class="thumb col-md-5">
                <img src="http://dummyimage.com/500x300/eeeeee/000000">
            </div>
            <div class="description col-md-7">
                <h3>Turf</h3>
                <p>Turf is an Android application that allows users to create location-based chat rooms. Using geolocation, a user can create a chat room at their current location for anyone who is within a specified radius.</p>
                <p>The mobile application for Turf was built using PhoneGap, Backbone, and MarionetteJS. The backend uses NodeJS and Express for a RESTful API, and socket.io for handling real-time chat messages and rooms.</p>
                <a href="https://github.com/dnguyen/turfapp" class="btn btn-primary">App Source</a>
                <a href="https://github.com/dnguyen/turf-server" class="btn btn-primary">Backend Source</a>
            </div>
        </div>
    </div>
@stop