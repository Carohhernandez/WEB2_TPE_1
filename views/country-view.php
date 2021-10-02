<?php require 'header.php' ?>

<section id="showcaseCountry" class="d-flex justify-content-center align-items-center">
    <div id="header" class="container text-white text-center">
    </div>
</section>

<section>
    <div class="container mt-2">
        <h3 class="separator text-center my-5">Destination <span><?php echo strtoupper($countryName)?></span></h3>
        <div class="row align-items-center content">
            <div class="col-md-6 text-center text-md-left">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 my-5 my-md-0">
                    <h4 class="mb-5 font-weight-bold">Know before you go</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae risus eu odio laoreet feugiat et eu purus. In hac habitasse platea dictumst.</p>
                    <p>Duis tempus sapien sed congue tempor. Pellentesque non risus nec sem ultrices feugiat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
               <img src="<?php echo path;?>images/<?php echo $posts[1]['thumb']?>" class="img-fluid">
            </div>
        </div>
    </div> 
</section>

<section>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6 p-md-3">

        </div>
        <div class="col-md-6 p-md-3">
            
        </div>
    </div> 
</section>

<section>
    <div class="container text-center mt-5">
        <div id="carouselPosts" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselPosts" data-slide-to="0" class="active"></li>
            <li data-target="#carouselPosts" data-slide-to="1"></li>
            <li data-target="#carouselPosts" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100 guideImg" src="images/61613129_149847819478657_4036699960058792296_n.jpg" alt="Japan guide">
            </div>
            <div class="carousel-item">
            <img class="d-block guideImg" src="images/kulli-kittus-ymGDEiGl6lA-unsplash.jpg" alt="Outdoor in Argentina">
            </div>
            <div class="carousel-item">
            <img class="d-block guideImg" src="images/anna-sullivan-6OsfUWYMGtk-unsplash.jpg" alt="Tulum guide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselPosts" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPosts" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    </div>
</section>

<?php require 'footer.php' ?>