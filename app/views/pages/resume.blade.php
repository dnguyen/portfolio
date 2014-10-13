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
                <a class="btn btn-success btn-block" href="https://www.dropbox.com/s/drbiuavmcbwl4sv/Dylan_Nguyen_Resume_2014-2.pdf?dl=0">
                    Download Resume
                </a>
            </div>

            <div class="col-md-7">
                <section class="box">
                    <h4>Education</h4>
                    <div class="clearfix">
                        <span class="bold pull-left">Pennsylvania State University</span>
                        <span class="pull-right">2011 - December 2015</span>
                    </div>
                    <p>Computer Science - Bachelor of Science (Overall GPA: 3.05)</p>
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
                                <li>Developed and designed a new health insurance dashboard web application using C#, MVC4, and MSSQL.</li>
                                <li>Created new user friendly UI components usings JavaScript and jQuery.</li>
                                <li>Converted a legacy web application to be responsive and mobile friendly.</li>
                                <li>Developed mainly in JavaScript, C#, ASP, HTML, and CSS.</li>
                            </ul>
                        </li>
                    </ul>
                </section>

                <section class="box">
                    <h4>Projects</h4>

                    <ul class="projects-list list-unstyled">
                        <li>
                            <span class="bold"><a href="http://test.qrmyorder.com">QRmyOrder</a></span>
                            <ul class="list-square">
                                <li>Currently working with 3 other people to create a web/mobile application that allows restaurant customers to place orders through their phone.</li>
                                <li>Restaurant employees are able to see incoming orders in real-time.</li>
                                <li>Originally started as a HackPSU project and lead to interest from multiple State College restaurants..</li>
                                <li>Developed with PHP (Laravel), NodeJS, JavaScript (Backbone, jQuery), and MySQL.</li>
                            </ul>
                        </li>

                        <li>
                            <span class="bold"><a href="http://yourkpop.com">YourKpop</a></span>
                            <ul class="list-square">
                                <li>A Single Page Application that uses the YouTube API to find Korean Pop music and allows users to easily find KPop.</li>
                                <li>Allows users to easily create and share playlists.</li>
                                <li>Developed a RESTful API with PHP and Laravel with a Backbone front end.</li>
                            </ul>
                        </li>

                        <li>
                            <span class="bold">SMS Client/Server</span>
                            <ul class="list-square">
                                <li>Developed a node-webkit and Android application that allows the user to recieve and send text messages from their computers.</li>
                                <li>Uses web sockets to send messages to and from the Android application.</li>
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