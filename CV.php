<!-- Title        : index.php -->
<!-- Author       : Ceryl Lake -->
<!-- Date Created : 26/09/2025 -->
<!-- Purpose      : CV part of my website, displaying achievements and progress. -->

<!DOCTYPE html>

<html>
    <title>Ceryl Lake - CV & Website</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Preconnects -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Both of these help with getting the Roboto font. -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css"> <!-- External: W3 basic layout template -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"> <!-- External: Body Text and smaller headings -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- External: Icons for headers and bullets -->
    <link rel="stylesheet" href="node_modules/augmented-ui/augmented-ui.min.css"> <!-- Local: CSS library for custom container panels -->
    <link rel="stylesheet" href="style.css"> <!-- Local: My stylesheet for custom elements -->

    <header>
        <!-- Nav bar/menu -->
        <div class="navbar-glow w3-top w3-bar w3-black">
            <a href="/index.php"        class="w3-bar-item w3-button" target='_parent'>Home</a>
            <a href="/CV.php"           class="w3-bar-item w3-button" target='_parent'>CV</a>
            <a href="/projects.php"     class="w3-bar-item w3-button" target='_parent'>Projects</a>
            <a href="/graphicdesign.php"class="w3-bar-item w3-button" target='_parent'>Graphic Design</a>
            <a href="/contact.php"      class="w3-bar-item w3-button" target='_parent'>Contact</a>
        </div>
    </header>

    <body>
    
        <!-- Page Container -->
        <main class="w3-content" style="max-width:1400px; margin-top:7vh;">

            <!-- Grid -->
            <div class="snoozygrid1 w3-padding"> <!-- Two columns, second one twice as big as the first. -->

                <!-- Left Column -->
                <div>
                    <div class="snoozy-panel w3-display-container" data-augmented-ui="tl-clip tr-clip br-clip bl-clip both">
                        <div class="w3-display-container">

                            <!-- Profile image -->
                            <img src="https://i.postimg.cc/ZKdMLssT/20260713-184953(1).jpg"
                            style="width:100%"
                            alt="Ceryl Petrichor Lake">

                            <div class="glitch-text upwards-name-gradient w3-display-bottomleft w3-container w3-text-black">
                                <h2>Ceryl Petrichor Lake</h2>
                            </div>
                        </div>
                                        
                    <!-- Blurb and bullet info -->
                        <div class="w3-container">
                            
                            <p>
                            A creative mind with a diverse skillset, currently retraining for a new career in web development. Diligent and resourceful, a team player who is attentive to project needs. Technically-minded problem solver and avid multitasker. <br> <br>
                            <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-cyan"></i>
                            Junior Web Designer
                            </p>

                            <p>
                            <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-cyan"></i>
                            Newcastle, UK
                            </p>

                            <p>
                            <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-cyan"></i>
                            ceryllake@gmail.com
                            </p>

                            <p>
                            <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-cyan"></i>
                            07969 836 276
                            </p>

                            <hr>
                        
                        <!-- Skills Section-->
                            <p class="w3-large">
                                <b>
                                    <i class="fa fa-asterisk fa-fw w3-text-cyan"></i>
                                    Skills
                                </b>
                            </p>

                            <ul>
                                <li>
                                    <b class = "w3-text-cyan">Language Flexibility</b><br>
                                    <i>Previous experience in C++, C, Java, JavaScript, HTML, CSS, PHP, SQL, MySQL.</i><br>
                                </li>
                                <li>
                                    <b class = "w3-text-cyan">Technically Minded</b><br>
                                    <i>Able to adapt to new frameworks and technologies with enthusiasm.</i><br>
                                </li>
                                <li>
                                    <b class = "w3-text-cyan">Graphic Design</b><br>
                                    <i>Proficient in Adobe PhotoShop and other Creative Suite programs, with over a decade of experience.</i><br>
                                </li>
                                <li>
                                    <b class = "w3-text-cyan">Other Skills</b><br>
                                    <i>Experience in video and audio editing (Sony Vegas, CapCut, Audacity) technical support, and physical networking/configuration.</i><br>
                                </li>
                            </ul>

                            <hr>

                            <!-- Courses Section -->
                            <p class="w3-large">
                                <b>
                                    <i class="fa fa-asterisk fa-fw w3-text-cyan"></i>
                                    Courses
                                </b>
                            </p>
                            
                            <b class = "w3-text-cyan">Laravel Bootcamp</b><br>
                            <i>Building an example social media website to familiarise with the Laravel development environment.</i><br><br>

                            <b class = "w3-text-cyan">CompTIA A+ / Cybrary</b><br>
                            <i>Basic computer literacy course for software and hardware applications.</i><br>

                            <br>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div>

                    <!-- Work Experience -->
                    <section>
                        <div data-augmented-ui=" tl-2-clip-x tr-2-clip-x br-clip bl-clip both" class="snoozy-panel-extend"> <!-- Open a new instance of the Snoozy augmented-ui CSS with a funky border on -->
                        
                            <!-- Scanline effect -->
                            <div class="scanlines">
                                <div class="jpg"></div>
                            </div>

                            <h2 class="w3-padding-16 w3-center">
                                <i class="fa fa-suitcase fa-fw w3-xxlarge w3-text-cyan"></i>
                                Experience
                            </h2>

                            <div class="w3-container">
                                <h5 class="w3-opacity">
                                <b>Site Supervisor / EscapeSpace Ltd</b>
                                </h5>

                                <h6 class="w3-text-cyan">
                                <i class="fa fa-calendar fa-fw w3-margin-centre"></i>
                                Oct 2018 -
                                <span class="w3-tag w3-cyan w3-round">Current</span>
                                &emsp;
                                <i class="fa fa-location-arrow fa-fw w3-margin-centre"></i>
                                City Centre, Newcastle
                                </h6>
                                <ul>
                                    <li>Responsible for the upkeep and updating of several websites owned by the company hosted on Squarespace and Wordpress, utilising custom CSS and HTML.</li>
                                    <li>Integration of booking system, customer management suite, and payment portal via web sockets and APIs.</li>
                                    <li>Installation and management of local network, including staff access and separate guest network.</li>
                                </ul>
                            </div>

                            <div class="w3-container">
                                <h5 class="w3-opacity">
                                    <b>Venue Manager / Can You Escape?</b>
                                </h5>

                                <h6 class="w3-text-cyan">
                                    <i class="fa fa-calendar fa-fw w3-margin-centre"></i>
                                    Mar 2023 - Jan 2024
                                    &emsp;
                                    <i class="fa fa-location-arrow fa-fw w3-margin-centre"></i>
                                    Micklegate, York
                                </h6>

                                <p><i>(Hybrid role undertaken alongside the above role at EscapeSpace.)</i></p>
                                <ul>
                                    <li>Redesign of website to utilise updated branding, colours, and fonts. Maintaining integrations for booking system and payment portal.</li>
                                    <li>Renovation of site including installation of local internet network, wired networked CCTV system.</li>
                                </ul>
                            </div>

                            <div class="w3-container">
                                <h5 class="w3-opacity">
                                    <b>Claims & Disputes Operative / Convergys</b>
                                </h5>

                                <h6 class="w3-text-cyan">
                                    <i class="fa fa-calendar fa-fw w3-margin-centre"></i>
                                    Oct 2016 - Oct 2018
                                    &emsp;
                                    <i class="fa fa-location-arrow fa-fw w3-margin-centre"></i>
                                    Longbenton, Newcastle
                                </h6>
                                    <ul>
                                        <li>Multi-layered IT Support for a well-known online payment platform.</li>
                                        <li>Level 1 and 2 technical support, claims handling, fraud investigation, and team training. Data protection was a top priority.</li>
                                    </ul>
                                <br>
                            </div>
                        </div>
                    </section>
                    <br>

                    <!-- Education -->
                    <section>
                        <div data-augmented-ui=" tl-2-clip-x tr-2-clip-x br-clip bl-clip both" class="snoozy-panel-extend"> 

                            <!-- Scanline effect -->
                            <div class="scanlines">
                                <div class="jpg"></div>
                            </div>

                            <h2 class="w3-padding-16 w3-center">
                                <i class="fa fa-certificate fa-fw w3-xxlarge w3-text-cyan"></i>
                                Education
                            </h2>

                            <div class="w3-container">
                                <h5 class="w3-opacity">
                                    <b>Undergraduate Degree</b>
                                </h5>
                                <h6 class="w3-text-cyan">
                                    <i class="fa fa-calendar fa-fw w3-margin-centre"></i>
                                    Sep 2013 - Jun 2016
                                    &emsp;
                                    <i class="fa fa-location-arrow fa-fw w3-margin-centre"></i>
                                    Northumbria University, Newcastle
                                </h6>
                                <p>
                                    <b>Bachelors of Science (Hons) Computer Games Programming - 2.1</b><br>
                                    <i>Computer science with a focus on adapting programming practise and applications specifically with games in mind.</i>
                                </p>
                                <hr>
                            </div>

                            <div class="w3-container">
                                <h5 class="w3-opacity">
                                    <b>A-Levels and Equivalent</b>
                                </h5>
                                <h6 class="w3-text-cyan">
                                    <i class="fa fa-calendar fa-fw w3-margin-centre"></i>
                                    Sep 2011 - Jun 2013
                                    &emsp;
                                    <i class="fa fa-location-arrow fa-fw w3-margin-centre"></i>
                                    John Leggott College, Scunthorpe
                                </h6>
                                <p>
                                    <b>BTEC ICT (Extended Diploma) - Grade DDM</b> <i>(Equivalent of A at A Level)</i><br>
                                    <b>BTEC ICT - Grade D*</b><i> (Equivalent of A* at A Level)</i><br>
                                    <b>A Level Mathematics - Grade E</b><br>
                                    <b>AS Level Physics - Grade D</b>
                                </p>
                            </div>
                        </div>
                    </section>

                    <div class="snoozygrid2 w3-padding"> 

                        <!-- Left snoozygrid2 -->
                        <div>
                            <div data-augmented-ui="tl-round tr-round r-clip-y br-round bl-round l-clip-y both" class="snoozy-panel-extend">
                                <div class="w3-display-container">
                                    <img src="Images/transcode.gif"
                                    style="width:100%; height:stretch;"
                                    alt="Trans-coding~">
                                </div>
                            </div>
                        </div>

                        <!-- Right snoozygrid2 -->
                        <div>
                            <div class="snoozy-panel" data-augmented-ui="tl-clip tr-clip br-clip bl-clip both" style="width:100%;">
                                <div class="w3-display-container">
                                    <!-- Interests Section -->
                                    <p class="w3-large w3-center">
                                        <b>
                                            <i class="fa fa-asterisk fa-fw w3-text-cyan"></i>
                                            Interests
                                        </b>
                                    </p>
                                
                                    <ul>
                                        <li>Digital Art & Graphic Design</li>
                                        <li>Tabletop Role-Playing Games</li>
                                        <li>Live Action Roleplay Events</li>
                                        <li>Costume & Prop Construction</li>
                                        <li>Arduinos, LEDs, & Microelectronics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end snoozygrid2 -->
                </div> <!-- End Main Grid -->
            </div>
        </main>

        <!-- Footer -->
        <footer class="w3-container w3-cyan w3-center w3-margin-top">
            <p>Site created September 2026</p>
        </footer>
    </body>
</html>