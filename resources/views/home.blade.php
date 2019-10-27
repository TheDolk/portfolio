<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wouter Dolk - Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Montserrat|Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/392c5d1f85.js" crossorigin="anonymous"></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="space">
            <div class="main-title-wrapper">
                <div>
                    <div class="main-title">
                        <h1 id="main-title-text" class="main-title-text"></h1>
                        <span class="typing-cursor">|</span>
                    </div>
                    <span id="sub-title-text"></span>
                </div>
            </div>
        </header>
        <div class="dividers">
            <div class="divider divider-1"></div>
            <div class="divider divider-2"></div>
            <div class="divider divider-3"></div>
        </div>
        <main>
            <section id="about-me" class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-12 text-center">
                        <h2>About me</h2>
                    </div>
                    <div class="col sm-12 pt-3 pb-3">
                        <span class="capital">W</span>elcome to my portfolio. My name is Wouter Dolk, I am a fourth year (graduate) software engineering student at Rotterdam University.
                        My interests lie in building software, websites and creating + editing videos. I also have a passion for videogames, especially arcade style games.<br/>
                        <br/>
                        In the past three and a half years of my study I have learned to work with languages such as Python, C# and Java.
                        During the last two semesters of my third year I have followed the Minor Security Labs. During this Minor I have learned to work with OS Kali Linux and tools such a metasploit.
                        It also made me more aware of security risks to keep in mind when writing software.<br/>
                        <br/>
                        At the moment I am following the minor Data Sience. During this minor I am working with R and Rstudio and will experiment with topics such as
                        machine learning. 
                    </div>
                </div>
            </section>
            
            <section id="skills" class="container">
                <div class="row mt-5 mb-5 justify-content-start text-center">
                    <div class="col-12">
                        <h2>Skills, languages and frameworks</h2>
                    </div>
                    <div class="col-12">
                        <div class="row mt-2 mb-2">
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill python">
                                    <i class="fab fa-python skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Python
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill javascript">
                                    <i class="fab fa-js skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Javascript
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill c-sharp">
                                    <i class="fab fa-windows skill-icon"></i>
                                    <div class="card-body skill-text">
                                        C#
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill java">
                                    <i class="fab fa-java skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Java
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill php">
                                    <i class="fab fa-php skill-icon"></i>
                                    <div class="card-body skill-text">
                                        PHP
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill sql">
                                    <i class="fas fa-database skill-icon"></i>
                                    <div class="card-body skill-text">
                                        SQL
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill html">
                                    <i class="fab fa-html5 skill-icon"></i>
                                    <div class="card-body skill-text">
                                        HTML5
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill css">
                                    <i class="fab fa-css3-alt skill-icon"></i>
                                    <div class="card-body skill-text">
                                        CSS3
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill laravel">
                                    <i class="fab fa-laravel skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Laravel
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill ruby">
                                    <i class="far fa-gem skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Ruby on Rails
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill vue">
                                    <i class="fab fa-vuejs skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Vue
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill react">
                                    <i class="fab fa-react skill-icon"></i>
                                    <div class="card-body skill-text">
                                        React
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill wordpress">
                                    <i class="fab fa-wordpress skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Wordpress
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill bitbucket">
                                    <i class="fab fa-bitbucket skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Bitbucket
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="card skill git">
                                    <i class="fab fa-github skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Git
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
            </section>

            <section id="potfolio" class="container">
                <div class="row mt-5 mb-5 justify-content-start text-center">
                    <div class="col-12 pb-3 mb-0">
                        <h2>Projects</h2>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card portfolio-item">
                            <div class="portfolio-item-image bugbot img-fluid"></div>
                            <div class="card-body portfolio-item-body bugbot">
                                <div class="text-left">
                                    <span class="badge badge-dark">School</span>
                                </div>
                                <div class="portfolio-item-title">
                                    BugBot
                                </div>
                                <div class="portfolio-item-text">
                                    BugBot is a hardware based (remote) reconnaissance tool. It is used for scanning vulnerabilites 
                                    on internal networks. The BugBot works by plugging it into a network via an ethernet cable.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card portfolio-item">
                            <div class="portfolio-item-image chainblock img-fluid"></div>
                            <div class="card-body portfolio-item-body chainblock">
                                <div class="text-left">
                                    <span class="badge badge-dark">School</span>
                                </div>
                                <div class="portfolio-item-title">
                                    ChainBlock
                                </div>
                                <div class="portfolio-item-text">
                                    ChainBlock is a prototype of a blockchain made from scratch.
                                    The blockchain was made for the supplychain of the diamond industry and used to validate the origin of the diamonds.
                                    As an attempt to reduce blood diamonds in the supplychain.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card portfolio-item">
                            <div class="portfolio-item-image weegames img-fluid"></div>
                            <div class="card-body portfolio-item-body weegames">
                                <div class="text-left">
                                    <span class="badge badge-dark">School</span>
                                </div>
                                <div class="portfolio-item-title">
                                    WeeGames
                                </div>
                                <div class="portfolio-item-text">
                                    WeeGames is a webshop for videogames. WeeGames offers functionality such as personal whishlists for customers and 
                                    statistics about product sales for administrators.
                                    It was build using Entity framework and React.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card portfolio-item">
                            <div class="portfolio-item-image marlieslageweg img-fluid"></div>
                            <div class="card-body portfolio-item-body marlieslageweg">
                                <div class="text-left">
                                    <span class="badge badge-dark">Personal</span>
                                </div>
                                <div class="portfolio-item-title">
                                    Marlies Lageweg
                                </div>
                                <div class="portfolio-item-text">
                                    Marlieslageweg.nl is website build for a regression therapist's practice.
                                    It was build using the Laravel MVC framework and foundation for it's css framework.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <a class="footer-item" href="https://www.linkedin.com/in/wouter-dolk-b89ab8153/"><i class="fab fa-linkedin"></i></a>
            <a class="footer-item" href="mailto:0934955@hr.nl"><i class="fas fa-envelope"></i></a>
        </footer>

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>