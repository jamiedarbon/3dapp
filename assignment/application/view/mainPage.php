<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coca-Cola Great Britain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="https://www.x3dom.org/download/x3dom.css"></link>
    <link rel="stylesheet" type="text/css" href="css/x3dom.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/customCoke.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>
<body>
<div class="header">
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar_coca_cola">
        <div class="container">
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <button id="homeButton" type= ="button" class="btn btn-outline-dark btn-responsive">
                            <a style="color: white; text-decoration: none;">Home</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button id="aboutButton" type= ="button" class="btn btn-outline-dark btn-responsive">
                            <a style="color: white; text-decoration: none;">About</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button id="modelButton" type=="button" class="btn btn-outline-dark btn-responsive">
                        <a style="color: white; text-decoration: none;">Models</a>
                        </button>
                    </li>
                    <div class="w3-dropdown-hover" style="float:right;">
                        <button class="w3-button">Contact</button>
                        <div class="w3-dropdown-content w3-bar-block w3-border">
                            <p>Tel: 020 8237 3000</p>
                            <p>Email: asktheboard@coca-cola.com</p>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
        <!-- Progress bar which changes completion depending on where the user's position on the screen is (called from scrollBar.js) -->
        <div class="progress-bar" id="myBar">
    </div> 
</div> 
    <!-- index.html contents -->
    <div id="homeGallery">
        <div class="row">
            <div class="col-sm-12">
                <div id="main_3d_image">
                    <!-- Carousel gallery -->
                <div class="mySlides fade">
                        <img src="../assignment/assets/images/renders/cokeRender.png" class="carousel">
                    </div>

                    <div class="mySlides fade">
                        <img src="../assignment/assets/images/renders/spriteRender.png" class="carousel">
                    </div>

                    <div class="mySlides fade">
                        <img src="../assignment/assets/images/renders/pepperRender.png" class="carousel">
                    </div>

                    <div class="mySlides fade">
                        <img src="../assignment/assets/images/renders/fantaRender.png" class="carousel">
                    </div>
                    <!-- Main text filled in from a php call, pulling data from pageData.db -->
                    <div id="main_text" class="col-xs-12 col-sm-4">
                        <h2><?php echo $data[0]['title'] ?></h2>
                        <h3><?php echo $data[0]['subTitle'] ?></h3>
                        <p><?php echo $data[0]['moduleDescription'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="col-sm-12">
        <div id="home" class="container main_contents">
            <div id="journeyText" class="col-sm-6">
                  <h1 style="text-align:center;">Begin your journey...</h1>  
            </div>
            <br>
            <!-- Coke, Sprite and Dr Pepper cards -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <!-- Fancybox implementation -->
                        <a href="assets/images/renders/cokeRender.png" data-fancybox data-caption="Coca Cola Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/galleryImages/coca_cola.jpg" alt="Coca Cola">
                        </a>
                        <!-- card data is pulled from the database -->
                        <div class="card-body">
                            <h2><?php echo $data[1]['title'] ?></h2>
                            <h3><?php echo $data[1]['subTitle'] ?></h3>
                            <p><?php echo $data[1]['moduleDescription'] ?></p>
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <a href="assets/images/renders/spriteRender.png" data-fancybox data-caption="Sprite Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/galleryImages/sprite.jpg" alt="Sprite">
                        </a>
                        <div class="card-body">
                            <h2><?php echo $data[2]['title'] ?></h2>
                            <h3><?php echo $data[2]['subTitle'] ?></h3>
                            <p><?php echo $data[2]['moduleDescription'] ?></p>
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <a href="assets/images/renders/pepperRender.png" data-fancybox data-caption="Dr Pepper Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/galleryImages/dr_pepper.jpg" alt="Dr Pepper">
                        </a>
                        <div class="card-body">
                            <h2><?php echo $data[3]['title'] ?></h2>
                            <h3><?php echo $data[3]['subTitle'] ?></h3>
                            <p><?php echo $data[3]['moduleDescription'] ?></p>
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- About and product image links -->
            <div id="row">
                <div class="col-sm-12">
                    <div id="aboutImage">
                        <img id="aboutLink" src="assets/images/About.png" style="width:100%; height:auto;">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="row">
                <div class="col-sm-12">
                    <div id="productImage">
                        <img id="productLink" src="assets/images/Products.png" style="width:100%; height:auto;">
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!-- model page contents -->
        <div id="model" class="container main_contents" style="display: none;">
            <div class="row">
                <div class="col-sm-10">
                    <div class="card text-left">
                        <div class="card-header">
                            <!-- Model controls -->
                            <ul class="nav nav-pills card-header-pills">
                                <!-- Changing the model loaded into the x3d module to only use a single module -->
                                <button id="cokeButton" type="button" class="btn btn-success btn-responsive" onclick="document.getElementById('3dModel').setAttribute('url','assets/models/Can.x3d');">
                                    <a style="color: white; text-decoration: none;">Coke</a>
                                </button>
                                <button id="spriteButton" type="button" class="btn btn-success btn-responsive" onclick="document.getElementById('3dModel').setAttribute('url','assets/models/sprite.x3d');">
                                    <a style="color: white; text-decoration: none;">Sprite</a>
                                </button>
                                <button id="pepperButton" type="button" class="btn btn-success btn-responsive" onclick="document.getElementById('3dModel').setAttribute('url','assets/models/dr_pepper.x3d');">
                                    <a style="color: white; text-decoration: none;">Dr Pepper</a>
                                </button>
                                <button id="pepperButton" type="button" class="btn btn-success btn-responsive" onclick="document.getElementById('3dModel').setAttribute('url','assets/models/Fanta.x3d');">
                                    <a style="color: white; text-decoration: none;">Fanta</a>
                                </button>
                            </ul>
                        </div>
                        <!-- X3D Container -->
                        <div class="card-body">
                            <div class="model3D">
                                <x3d id="wire">
                                    <scene id="Coke3DModel">
                                    </scene>
                                </x3d>
                            </div>
                            <div id="coke" style="display:none;">
                                <h2><?php echo $data[4]['title'] ?></h2>
                                <p><?php echo $data[4]['subTitle'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-left">
                        <div class="card-header">
                            <h5>Model Controls</h5>
                        </div>
                        <div class="card-body">

                        <h2><?php echo $data[6]['title'] ?></h2>
                            <div class="camera-btns">
                                <p><?php echo $data[6]['subTitle'] ?></p>
                                  <div class="dropdown">
                                  <button class="dropbtn">Dropdown</button>
                                  <div class="dropdown-content">
                                      <a href="#" onclick="document.getElementById('front').setAttribute('set_bind','true');">Front</a>
                                      <a href="#" onclick="document.getElementById('back').setAttribute('set_bind','true');">Back</a>
                                      <a href="#" onclick="document.getElementById('left').setAttribute('set_bind','true');">Left</a>
                                      <a href="#" onclick="document.getElementById('right').setAttribute('set_bind','true');">Right</a>
                                      <a href="#" onclick="document.getElementById('top').setAttribute('set_bind','true');">Top</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2><?php echo $data[8]['title'] ?></h2>
                            <div class="camera-btns">
                                <p><?php echo $data[8]['subTitle'] ?></p>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary btn-responsive camera-font" onClick="poly()">Poly</a>
                                    <a href="#" class="btn btn-secondary btn-responsive camera-font" onClick="wireFrame()">Wire</a>
                                    <a href="#" class="btn btn-success btn-responsive camera-font" onClick="vertex()">Vertex</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls for camera, rendering and animation -->
        <div id="interactionElements" style="display: none;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                            <h4>Camera</h4>
                        </div>
                        <div class="card-body" style="margin:auto;">
                            <h5><?php echo $data[5]['title'] ?></h5>
                            <p><?php echo $data[5]['subTitle'] ?></p><br>
                            <div class="gallery" id="gallery_coke">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Description cards for coke, sprite and dr pepper -->
        <div id="descriptions">
            <div id="cokeDescription">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <a href="#">
                            </a>
                            <div class="card-body">
                                <h2><?php echo $data[9]['title'] ?></h2>
                                <p><?php echo $data[9]['subTitle'] ?></p>
                                <a href="https://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="spriteDescription">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <a href="#">
                            </a>
                            <div class="card-body">
                                <h2><?php echo $data[10]['title'] ?></h2>
                                <p><?php echo $data[10]['subTitle'] ?></p>
                                <a href="https://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pepperDescription">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <a href="#">
                            </a>
                            <div class="card-body">
                                <h2><?php echo $data[11]['title'] ?></h2>
                                <p><?php echo $data[11]['subTitle'] ?></p>
                                <a href="https://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About section -->
        <div id="about">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Who are Coca-Cola?</h1>
                    <p>The Coca-Cola company was founded in 1892, in Atlanta, Georgia, and for nearly 150 years, we've made it our mission to bring joy to the world with our refreshing carbonated beverages.</p>
                    <video width="80%" controls style="display:block; margin:auto;">
                        <source src="assets/videos/Coca-Cola.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <nav class="navbar navbar-expand-sm navbar_coca_cola">
        <div class="container">
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline"></span>&copy 2023 Mobile Web 3D Applications </span></p>
                <h6><a href="statement_and_references.html">Statement of originality</a></h6>
            </div>
            <div class="navbar-text float-right social">
                <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size: 20px; color: white;"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x" style="font-size: 20px; color: white;"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x" style="font-size: 20px; color: white;"></i></a>
                <a href="#"><i class="fab fa-github-square fa-2x" style="font-size: 20px; color: white;"></i></a>
            </div>
        </div>
    </nav>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- miscellaneous .js imports -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/showhide.js"></script>
    <script type="text/javascript" src="js/showSlides.js"></script>
    <script type="text/javascript" src="js/scrollBar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/fec946029a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="js/gallery_generator.js"></script>
    <script type="text/javascript" src="js/x3dom.js"></script>
    <script type="text/javascript" src="js/modelInteraction.js"></script>
    <script src="js/getJsonData.js"></script>
    
    <!-- counter variable used for the carousel gallery -->
    <script>
          let slideIndex = 0;
    </script>
</body>
</html>