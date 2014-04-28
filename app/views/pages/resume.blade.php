@extends('layouts.default')
@section('content')
    <div class="content container">
        <div class="resume row">
            <div class="profile col-md-3 col-md-offset-1">
                <h4>Dylan Nguyen</h4>
                <p>State College, PA</p>
                <ul class="list-unstyled">
                    <li><a href="mailto:dylannguyen6@gmail.com">dylannguyen6<span style="display:none">dylannguyen6</span>@gmail.com</a></li>
                    <li><a href="http://github.com/dnguyen">github.com/dnguyen</a></li>
                </ul>
                <hr>
                <h4>Skills</h4>
                <ul class="list-unstyled">
                    <li>
                        <h5>Languages</h5>
                        <ul>
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>HTML5/CSS3</li>
                            <li>Java</li>
                            <li>C#</li>
                            <li>C++</li>
                            <li>C</li>
                        </ul>
                    </li>
                    <li>
                        <h5>Frameworks and Libraries</h5>
                        <ul>
                            <li>Laravel 4</li>
                            <li>Backbone</li>
                            <li>jQuery</li>
                        </ul>
                    </li>
                    <li>
                        <h5>Other</h5>
                        <ul>
                            <li>UNIX, Git</li>
                            <li>NodeJS</li>
                            <li>MySQL, Redis</li>
                            <li>SASS</li>
                        </ul>
                    </li>
                </ul>
                <a class="btn btn-success btn-block" href="https://www.dropbox.com/s/7hq18h4ijbwvcsb/Dylan_Nguyen_Resume_2014.pdf">
                    Download Resume
                </a>
            </div>

            <div class="col-md-7">
                <section class="box">
                    <h4>Education</h4>
                    <div class="clearfix">
                        <span class="bold pull-left">Pennsylvania State University</span>
                        <span class="pull-right">2011 - Expected 2015</span>
                    </div>
                    <p>Computer Science - Bachelor of Science (Overall GPA: 3.0)</p>
                </section>

                <section class="box">
                    <h4>Work Experience</h4>

                    <ul class="list-unstyled">
                        <li>
                            <div class="clearfix">
                                <span class="bold pull-left">VIIAD - Web Developer Intern</span>
                                <span class="pull-right">June 2013 - Present</span>
                            </div>
                            <ul class="list-square">
                                <li>Developed new features and fixed bugs for several clients’ web applications.</li>
                                <li>Converted a legacy application to be responsive and usable on mobile devices.</li>
                                <li>Used mainly JavaScript, ASP, and SQL.</li>
                            </ul>
                        </li>
                    </ul>
                </section>

                <section class="box">
                    <h4>Projects</h4>

                    <ul class="projects-list list-unstyled">

                        <li>
                            <span class="bold"><a href="http://yourkpop.com">yourkpop</a></span>
                            <ul class="list-square">
                                <li>A Single Page Application that scrapes YouTube for Korean Pop music and allows users to create, save and listen to playlists.</li>
                                <li>Implemented a RESTful API using PHP and Laravel with a Backbone front end.</li>
                            </ul>
                        </li>

                        <li>
                            <span class="bold">Desktop SMS</span>
                            <ul class="list-square">
                                <li>A Node-Webkit application that can receive and send text messages through a user’s Android phone.</li>
                                <li>Developed an Android application that sends text messaging data to the client through Web Sockets</li>
                            </ul>
                        </li>

                        <li>
                            <span class="bold">Turf</span>
                            <ul class="list-square">
                                <li>PhoneGap Android application that creates location based chat rooms.</li>
                                <li>Developed an API using NodeJS, Express, MySQL, and Redis.</li>
                                <li>Built a Socket.io chat server that manages real-time chat rooms and messaging.</li>
                            </ul>
                        </li>

                    </ul>
                </section>
            </div>
        </div>
    </div>
@stop