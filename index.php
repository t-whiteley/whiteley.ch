<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomas W.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/75a33f95eb.js" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,900&display=swap" rel="stylesheet">

    <link rel="icon" href="pics/favicon.png">
    <link rel="stylesheet" href="index.css">

</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container">
            <a class="px-3" href="#"><img class="logo" src="pics/logo.png" alt="tw_logo"></a>
            <span type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <ul class="navbar-nav">
                    <li class="nav-item px-3"><a class="nav-link" href="mailto:tomas.whiteley2004@gmail.com">CONTACT</a></li>
                </ul>
            </span>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3"><a class="nav-link active" aria-current="page" href="#">ABOUT</a></li>
                    <li class="nav-item px-3"><a class="nav-link" href="#projects">PROJECTS</a></li>
                    <li class="nav-item px-3"><a class="nav-link" href="#blog">BLOG</a></li>
                    <li class="nav-item px-3"><a class="nav-link" href="/dashboard/dashboard.php">ADMIN</a></li>

                </ul>
            </div>
        </div>
    </nav>
    


    <div class="bg-gradient-1"></div>
    <div class="bg-gradient-2"></div>
    <div class="bg-gradient-3"></div>


    <div class="container"">
        



        <!-- ABOUT ME -->

        <div id="about">
            <div class="box glowing-div glowing-white mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-auto">
                        <img src="pics/pp.jpg" class="pp mx-3 my-3" alt="">
                    </div>
                    <div class="col-sm pt-2 pe-5 about-col">
                        <h3 class="my-2 width-100 name">Tomas Whiteley</h3>
                        <hr class="text-white mb-2 mt-0">

                        <p class="mb-0">
                            <span class="badge badge-blue me-1">COLLABORATIVE</span>
                            <span class="badge badge-yellow me-1">QUANTITATIVE</span>
                            <span class="badge badge-pink me-1">ANALYTICAL</span>
                        </p>
                        
                        
                        <p class="text-white fw-lighter mb-3 mt-2">
                            <span class="badge badge-white ms-0 me-1"><i class="fa-brands fa-python me-1"></i>Python</span>
                            <span class="badge badge-white ms-0 me-1"><i class="fa-solid fa-file me-1"></i></i>C++</span>
                            <span class="badge badge-white ms-0 me-1"><i class="fa-brands fa-php me-1"></i>PHP</span>
                            <span class="badge badge-white ms-0 me-1"><i class="fa-solid fa-database me-1"></i></i>SQL</span>
                            <span class="badge badge-white ms-0 me-1"><i class="fa-solid fa-globe me-1"></i></i>HTML CSS</span>
                            <span class="badge badge-white ms-0 me-1"><i class="fa-brands fa-linux me-1"></i></i>Linux</span>
                        </p>
                        

                        <p class="text-white fw-lighter mb-2"><strong>Engineer</strong>, <strong>developer</strong> and <strong>tech-enthusiast</strong>.</p>
                        <p class="text-white fw-lighter mb-3"><strong>Financially</strong> literate and business experienced professional.</p>
                    </div>
                </div>

            </div>
        </div>

        
        
        <hr class="text-white mt-0 mb-0">
        
        
        <!-- PROJECTS -->
        
        
        <div id="projects" class="mb-5 mt-3">
            <br>
            <h5 class="mb-4 fw-light text-white">Projects</h5>
            <div class="row">

                <div class="col-6">  
                    <div class="box box2 glowing-div px-2 py-2">
                        <div class="row">
                            <div class="col-auto">
                                <button class="button-resp icon icon2" id="toggle-comp">
                                    <i class="fa-solid fa-laptop"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <h5 class="text-white pt-1 mb-0">Software & Computer</h5>
                                <p class="text-white pt-0 mb-0">Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-6">  
                    <div class="box box1 glowing-div glowing-orange px-2 py-2">
                        <div class="row">
                            <div class="col-auto">
                                <button class="button-resp icon icon1" id="toggle-eng">
                                    <i class="fa-solid fa-rocket"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <h5 class="text-white pt-1 mb-0">Mechanical Engineering</h5>
                                <p class="text-white pt-0 mb-0">Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div id="comp-proj" style="display: block;">

                <div class="box glowing-div mt-4">
                    <div class="row">
                        <div class="col-sm-auto">
                            <img src="pics/projects/market.png" class="project mx-2 my-2" alt=""  style="object-position: 10% 50%;">
                        </div>
                        <div class="col-sm pt-3 pe-5 about-col">
                            <h5 class="name">Stock analysis with calculus</h5>
                            <hr class="text-white mt-2 mb-2">

                            <p class="mt-0 mb-2">
                                <span class="badge badge-green me-1">PYTHON</span>
                                <span class="badge badge-blue me-1">CALCULUS</span>
                                <span class="badge badge-yellow me-1">APIs</span>
                            </p>

                            <p class="text-white">Using Yahoo Finance API, predict share price of a stock using past performance to model nth-degree taylor series, A matplotlib and tkinter GUI.</p>
                        </div>
                    </div>
                </div>
                <div class="box glowing-div mt-4">
                    <div class="row">
                        <div class="col-sm-auto">
                            <img src="pics/projects/blockchain.png" class="project mx-2 my-2" alt="">
                        </div>
                        <div class="col-sm pt-3 pe-5 about-col">
                            <h5 class="name">Virutal blockchain</h5>
                            <hr class="text-white mt-2 mb-2">

                            <p class="mt-0 mb-2">
                                <span class="badge badge-green me-1">PYTHON</span>
                                <span class="badge badge-red me-1">CYBERSECURITY</span>
                            </p>
                            <p class="text-white">python backend using OOP blockchain module, hashing and tkinter GUI, use of sockets to limit to the LAN network.</p>
                        </div>
                    </div>
                </div>
                <div class="box glowing-div mt-4">
                    <div class="row">
                        <div class="col-sm-auto">
                            <img src="pics/projects/recruitment tool.png" class="project mx-2 my-2" alt="" style="object-position: 80% 50%;">
                        </div>
                        <div class="col-sm pt-3 pe-5 about-col">
                            <h5 class="name">Recruitment tool software</h5>
                            <hr class="text-white mt-2 mb-2">

                            <p class="mt-0 mb-2">
                                <span class="badge badge-blue me-1">PHP</span>
                                <span class="badge badge-pink me-1">MySQL</span>
                                <span class="badge badge-red me-1">HTML/CSS</span>
                            </p>
                            
                            <p class="text-white">Built a UI for job applicants and one for recruiters, the applicant submits info and PDF files over a MySQL DB that is displayed to the recruiter</p>
                        </div>
                    </div>
                </div>
                <div class="box glowing-div mt-4">
                    <div class="row">
                        <div class="col-sm-auto">
                            <img src="pics/projects/webdev.png" class="project mx-2 my-2" alt=""  style="object-position: 50% 0%;">
                        </div>
                        <div class="col-sm pt-3 pe-5 about-col">
                            <h5 class="name">Freelance web development</h5>
                            <hr class="text-white mt-2 mb-2">

                            <p class="mt-0 mb-2">
                                <span class="badge badge-red me-1">HTML/CSS</span>
                                <span class="badge badge-blue me-1">PHP</span>
                                <span class="badge badge-yellow me-1">JS</span>
                            </p>
                            
                            <p class="text-white">Used frontend programming to implement sales strategies for businesses, agencies and freelancers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="eng-proj" style="display: none;">
                <div class="box glowing-div mt-4">
                    <div class="row">
                        <div class="col-sm-auto">
                            <img src="pics/projects/pipeclimber.png" class="project mx-2 my-2" alt=""  style="object-position: 10% 50%;">
                        </div>
                        <div class="col-sm pt-3 pe-5 about col">
                            <h5 class="name">2023 IMechE Competition</h5>
                            <hr class="text-white mt-2 mb-2">

                            <p class="mt-0 mb-2">
                                <span class="badge badge-yellow me-1">Fusion360</span>
                                <span class="badge badge-green me-1">Excel</span>
                            </p>
                            
                            <p class="text-white">internal pipe climber cleaner robot - electronics, propulsion, mechanics, CAD design</p>
                        </div>
                    </div>
                </div>
                <div class="box glowing-div mt-4">
                    <div class="row">
                        <div class="col-sm-auto">
                            <img src="pics/projects/mechathon.jpeg" class="project mx-2 my-2" alt=""  style="object-position: 10% 50%;">
                        </div>
                        <div class="col-sm pt-3 pe-5 col-about">
                            <h5 class="name">2023 Autodesk Mechathon</h5>
                            <hr class="text-white mt-2 mb-2">

                            <p class="mt-0 mb-2">
                                <span class="badge badge-yellow me-1">Fusion360</span>
                                <span class="badge badge-green me-1">Excel</span>

                            </p>
                            
                            <p class="text-white">hydraulic arm to carry heavied loads, construction via machining and additive manufacturing</p>
                        </div>
                    </div>
                </div>
            
            
            </div>

            <script>
                // JavaScript code to handle the button click event
                document.getElementById("toggle-comp").addEventListener("click", function() {
                    var elem_comp = document.getElementById("comp-proj");
                    var elem_eng = document.getElementById("eng-proj");

                    if (elem_comp.style.display === "none") {
                        elem_comp.style.display = "block";
                        elem_eng.style.display = "none";
                    }
                });
                
                document.getElementById("toggle-eng").addEventListener("click", function() {
                var elem_comp = document.getElementById("comp-proj");
                var elem_eng = document.getElementById("eng-proj");

                    if (elem_eng.style.display === "none") {
                        elem_eng.style.display = "block";
                        elem_comp.style.display = "none";
                    }
                });

            </script>




    



        </div>

        
        
        
        <!-- BLOG -->
        <hr class="text-white mt-0 mb-0">


        <div id="blog" class="mb-5 mt-3">
            <br>
            <h5 class="mb-4 fw-light text-white">Blog</h5>
            <div class="box">
            <?php
                    include("blog.php");
            ?>
            </div>
        </div>







        
        
        
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>