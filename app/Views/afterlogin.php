<!DOCTYPE html>
<?php
$session=session();
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    
    <link href="/Proiect2/css/styles.css" rel="stylesheet" />
    
    <style>
        header.masthead {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        header.masthead video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                  <?php 
    
    
    if(!empty($session->get('user_name')))
    { ?>
    <a class="navbar-brand" href="index.html">Cristina</a>   <?php } else {?>
      <a class="navbar-brand" href="index.html">User</a>   
       <?php } ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('/');?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('/about');?>">About</a></li>
                        <?php 
    
    
    if(!empty($session->get('user_name')))
    { ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('/upload');?>"> Upload a Post</a></li>
                        <?php } else {?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('/posts');?>"> Posts</a></li>
                        <?php } ?>
                         <?php 
                        
                        if(!empty($session->get('user_name'))){ ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('/logout');?>">Logout</a></li>
                        <?php }else{ ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url('/contact');?>">Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Page Header-->
    <header class="masthead">
        <video autoplay loop muted playsinline>
            <source src="/Proiect2/multimedia/apa.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                      <h1><?php
 if(!empty($session->get('user_name'))){ 
echo 'Welcome !';
 echo '<br>';}

?>
                      
 </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                            <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 24, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html"><h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2></a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 18, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Science has not yet mastered prophecy</h2>
                            <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on August 24, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Failure is not an option</h2>
                            <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on July 8, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
           
            <div class="container px-4 px-lg-5" >
                
					 <div style="display: flex; justify-content: center;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5424.31441104068!2d27.567126603026217!3d47.174358566532206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20%E2%80%9EAlexandru%20Ioan%20Cuza%E2%80%9D%20din%20Ia%C8%99i!5e0!3m2!1sro!2sro!4v1677825565085!5m2!1sro!2sro"  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                         </div>
					
				
				
                <div class="row gx-4 gx-lg-5 justify-content-center" style="margin-top:50px;">
                    
                    <div class="col-md-10 col-lg-8 col-xl-7">
                      <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="https://www.twitter.com/">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/ ">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i  class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/">
                                 <span class="fa-stack fa-lg">
    <i class="fas fa-circle fa-stack-2x"></i>
    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
</span>

                                </a>
                            </li>
                           
                            
    
                        </ul>
                            <div  class="fb-like" data-href="http://www.uaic.ro" data-width="100" data-layout="button_count" data-action="like" data-size="large" data-share="true" data-colorscheme="dark"></div>

<br/><br/>
           
                    </div>
                </div>
            </div>
            
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="YOUR_NONCE_VALUE"></script>

</html>
