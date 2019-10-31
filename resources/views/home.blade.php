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
        <header>
            <div class='space rellax'>
                <div class="scanlines">
                    <div class="main-title-wrapper">
                        <div class="rellax" data-rellax-speed="5">
                            <div class="main-title">
                                <h1 id="main-title-text" class="main-title-text"></h1>
                                <span class="typing-cursor">|</span>
                            </div>
                            <span id="sub-title-text"></span>
                        </div>
                    </div>
                </div>
                <div class="version">
                    Version 0.1
                </div>
                <div class="spaceship rellax" data-rellax-speed="5">
                    <img src="/img/spaceship.png">
                </div>
            </div>
            <div class=dividers-wrapper>
                <div class="dividers">
                    <div class="divider divider-1 "></div>
                    <div class="divider divider-2 "></div>
                    <div class="divider divider-3 "></div>
                </div>
            </div>
        </header>
        <main class="main">
            <section id="about-me" class="container">
                <div class="row">
                    <div class="col sm-12 pt-3 pb-3 intro">
                        <span class="capital">W</span>elcome to my portfolio. My name is Wouter Dolk, I am a fourth year (graduate) software engineering student at Rotterdam University.
                        My interests lie in building software, building websites and editing videos. I also have a passion for videogames, especially arcade style games.<br/>
                        <br/>
                        In the past three and a half years of my study I have learned to work with languages such as Python, C# and Java.
                        During the last two semesters of my third year I have followed the minor Security Labs. During this minor I have learned to work with OS Kali Linux and tools such a Metasploit.
                        It also made me more aware of security risks to keep in mind when writing software.<br/>
                        <br/>
                        At the moment I am following the minor Data Sience. During this minor I am working with R and Rstudio and will experiment with topics such as
                        machine learning. For my graduation, I am still actively looking for a fitting intership where I can construct me thesis and conclude my scholarship.
                    </div>
                </div>
            </section>
            
            <section id="skills" class="container">
                <div class="row justify-content-start text-center">
                    <div class="col-12 pb-1">
                        <h2>Skills, languages and frameworks</h2>
                    </div>
                    <div class="col-12 text-centered pb-2">
                        <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                            <button class="btn btn-secondary active" data-skill-button="all">
                                <input type="radio" name="skills" id="all" autocomplete="off"  checked> All
                            </button>
                            <button class="btn btn-secondary" data-skill-button="language">
                                <input type="radio" name="skills" id="language" autocomplete="off" > Language
                            </button>
                            <button class="btn btn-secondary" data-skill-button="framework">
                                <input type="radio" name="skills" id="framework" autocomplete="off"> Framework
                            </button>
                            <button class="btn btn-secondary" data-skill-button="other">
                                <input type="radio" name="skills" id="other" autocomplete="off"> Other
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-md-3 col-xl-2" data-skill="language">
                                <div class="card skill python">
                                    <i class="fab fa-python skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Python
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="language">
                                <div class="card skill javascript">
                                    <i class="fab fa-js skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Javascript
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="language">
                                <div class="card skill c-sharp">
                                    <i class="fab fa-windows skill-icon"></i>
                                    <div class="card-body skill-text">
                                        C#
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="language">
                                <div class="card skill java">
                                    <i class="fab fa-java skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Java
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="language">
                                <div class="card skill php">
                                    <i class="fab fa-php skill-icon"></i>
                                    <div class="card-body skill-text">
                                        PHP
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="language">
                                <div class="card skill sql">
                                    <i class="fas fa-database skill-icon"></i>
                                    <div class="card-body skill-text">
                                        SQL
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="language">
                                <div class="card skill html">
                                    <i class="fab fa-html5 skill-icon"></i>
                                    <div class="card-body skill-text">
                                        HTML5
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="language">
                                <div class="card skill css">
                                    <i class="fab fa-css3-alt skill-icon"></i>
                                    <div class="card-body skill-text">
                                        CSS3
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="framework">
                                <div class="card skill laravel">
                                    <i class="fab fa-laravel skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Laravel
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="framework">
                                <div class="card skill ruby">
                                    <i class="far fa-gem skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Ruby on Rails
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="framework">
                                <div class="card skill vue">
                                    <i class="fab fa-vuejs skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Vue
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="framework">
                                <div class="card skill react">
                                    <i class="fab fa-react skill-icon"></i>
                                    <div class="card-body skill-text">
                                        React
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="other">
                                <div class="card skill wordpress">
                                    <i class="fab fa-wordpress skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Wordpress
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="other">
                                <div class="card skill bitbucket">
                                    <i class="fab fa-bitbucket skill-icon"></i>
                                    <div class="card-body skill-text">
                                        Bitbucket
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2" data-skill="other">
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
                <div class="row justify-content-start text-center">
                    <div class="col-12 pb-1">
                        <h2>Projects</h2>
                    </div>
                    <div class="col-12 text-centered pb-2">
                        <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                            <button class="btn btn-secondary active" data-project-button="all">
                                <input type="radio" name="projects" id="all" autocomplete="off"  checked> All
                            </button>
                            <button class="btn btn-secondary" data-project-button="school">
                                <input type="radio" name="projects" id="school" autocomplete="off" > School
                            </button>
                            <button class="btn btn-secondary" data-project-button="personal">
                                <input type="radio" name="projects" id="personal" autocomplete="off"> Personal
                            </button>
                        </div>
                    </div>
                    
                    <a href="https://www.bugbot.net/" target="_blank" class="col-12 col-md-6 col-lg-4 py-3 no-link-decoration" data-project="school">
                        <div class="card portfolio-item h-100">
                            <div class="portfolio-item-image bugbot img-fluid"></div>
                            <div class="card-body portfolio-item-body bugbot">
                                <div class="text-left">
                                    <span class="badge badge-dark">School</span><br/>
                                    <span class="badge badge-secondary">Python</span>
                                    <span class="badge badge-secondary">VueJS</span>
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
                    </a>
                    <a href="https://github.com/OlafvdGraaf/chainBlock/tree/NewConcept" target="_blank" class="col-12 col-md-6 col-lg-4 py-3 no-link-decoration" data-project="school">
                        <div class="card portfolio-item h-100">
                            <div class="portfolio-item-image chainblock img-fluid"></div>
                            <div class="card-body portfolio-item-body chainblock">
                                <div class="text-left">
                                <span class="badge badge-dark">School</span><br/>
                                    <span class="badge badge-secondary">Dotnet</span>
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
                    </a>
                    <a href="https://github.com/woutar/WeeGames" target="_blank" class="col-12 col-md-6 col-lg-4 py-3 no-link-decoration" data-project="school">
                        <div class="card portfolio-item h-100">
                            <div class="portfolio-item-image weegames img-fluid"></div>
                            <div class="card-body portfolio-item-body weegames">
                                <div class="text-left">
                                <span class="badge badge-dark">School</span><br/>
                                    <span class="badge badge-secondary">Dotnet</span>
                                    <span class="badge badge-secondary">React</span>
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
                    </a>
                    <a href="https://marlieslageweg.nl" target="_blank" class="col-12 col-md-6 col-lg-4 py-3 no-link-decoration" data-project="personal">
                        <div class="card portfolio-item h-100">
                            <div class="portfolio-item-image marlieslageweg img-fluid"></div>
                            <div class="card-body portfolio-item-body marlieslageweg">
                                <div class="text-left">
                                    <span class="badge badge-dark">Personal</span><br/>
                                    <span class="badge badge-secondary">PHP</span>
                                    <span class="badge badge-secondary">Laravel</span>
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
                    </a>
                </div>
            </section>
            
            <section id="contact" class="container">
                <div class="row contact-me">
                    <div class="col-12 text-center">
                        <h2>Get in touch!</h2>
                        <div>
                            Add me on LinkedIn, Follow me on Github or send me an email
                        </div>
                    </div>
                    <div class="col-12 contact-buttons">
                        <div class="row justify-content-center">
                            <div class="col-10 pt-2 pb-2 contact-button">
                                <i class="fab fa-linkedin icon"></i> <a class="" href="https://www.linkedin.com/in/wouter-dolk-b89ab8153/" target="_blank">Add me on LinkedIn</a>
                            </div>
                            <div class="col-10 pt-2 pb-2 contact-button">
                                <i class="fab fa-github icon"></i> <a class="" href="https://github.com/woutar" target="_blank">School Github</a><span class="spacer">|</span><a class="" href="https://github.com/TheDolk" target="_blank">Personal Github</a>
                            </div>
                            <div class="col-10 pt-2 pb-2 contact-button">
                                <i class="fas fa-envelope icon"></i> <a class="" href="mailto:wouterdolk@live.nl">Send me an email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <a class="footer-item" href="https://www.linkedin.com/in/wouter-dolk-b89ab8153/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a class="footer-item" href="mailto:wouterdolk@live.nl"><i class="fas fa-envelope"></i></a>
        </footer>

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>