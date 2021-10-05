<section id="showcase" class="d-flex justify-content-center align-items-center">
    <div id="header" class="container text-white text-center">
        <h3 class="display-5 mb-0">Voyage Blog</h3>
        <h1 class="display-1 text-light">Travel & Vacation</h1>
        <p class="lead text-light">Shared experiences to improve your journey</p>
    </div>
</section>
<section>
    <div class="container px-0 mt-5">
        <h3 class="separator text-center">Check our posts</h3>
        <div class="row align-items-center content mt-5">
            <div class="col-md-6 order-2 order-md-1">
                <a href="<?php echo path;?>single.php?id=<?php echo $posts[0]['id']?>"><img src="<?php echo path;?>images/<?php echo $posts[0]['thumb']?>" class="img-fluid"></a>
            </div> 
            <div class="col-md-6 order-1 order-md-2">
                <div class="row text-center text-md-left justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><p class="d-inline-flex ml-2">Colombia </p>
                        <h3 class="title"><a href="<?php echo path;?>single.php?id=<?php echo $posts[0]['id']?>"><?php echo $posts[0]['title']?></a></h3>
                        <p class="lead"><?php echo $posts[0]['subtitle']?></p>
                        <a href="<?php echo path;?>single.php?id=<?php echo $posts[0]['id']?>">Explore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center content">
            <div class="col-md-6 text-center text-md-right">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 my-5 my-md-0">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><p class="d-inline-flex ml-2">Colombia </p>
                        <h3 class="title"><a href="<?php echo path;?>single.php?id=<?php echo $posts[1]['id']?>"><?php echo $posts[1]['title']?></a></h3>
                        <p class="lead"><?php echo $posts[1]['subtitle']?></p>
                        <a href="<?php echo path;?>single.php?id=<?php echo $posts[1]['id']?>">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="<?php echo path;?>single.php?id=<?php echo $posts[1]['id']?>"><img src="<?php echo path;?>images/<?php echo $posts[1]['thumb']?>" class="img-fluid"></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container px-0 mt-5">
        <h3 class="separator text-center">Top travel guides</h3>
    </div>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-md-4 px-2 py-3 py-md-0">
                <img src="images/61613129_149847819478657_4036699960058792296_n.jpg" alt="" class="img-fluid d-none d-md-inline mb-2 guideImg">
                <div class="text-left"><i class="fa fa-map-marker" aria-hidden="true"></i><p class="d-inline-flex ml-2">Japan </p></div>
                <h3 class="title text-left pr-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
            </div>
            <div class="col-md-4 px-2 py-3 py-md-0">
                <img src="images/Islas-del-Rosario-Colombia-Agenda-Iin.jpg" alt="" class="img-fluid d-none d-md-inline mb-2 guideImg">
                <div class="text-left"><i class="fa fa-map-marker" aria-hidden="true"></i><p class="d-inline-flex ml-2">Argentina </p></div>
                <h3 class="title text-left pr-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
            </div>
            <div class="col-md-4 px-2 py-3 py-md-0">
                <img src="images/Colombia_Diego_Guzman_unsplash.jpg" alt="" class="img-fluid d-none d-md-inline mb-2 guideImg">
                <div class="text-left"><i class="fa fa-map-marker" aria-hidden="true"></i><p class="d-inline-flex ml-2">Mexico </p></div>
                <h3 class="title text-left pr-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
            </div>
        </div>
    </div>
</section>

<section>
    <div id="exploreContainer" class="container my-5 d-flex align-content-center">
        <div class="row p-5 align-content-center" >
            <div class="col-md-6 p-4 text-light">
                <a href="#" class="text-light"><h4 class="display-5 py-3">EXPLORE</h4></a>
                <h4 class="display-5 py-3">Visit our travel content</h4>
                <p class="lead" style="line-height: 2.5rem;">Sed ut perspiciatis unde omnis iste natus error  sit  voluptatem. Accusantium doloremque  laudantium, totam rem aperiam,  eaque ipsa quae ab illo inventore veritati</p>
            </div>
        </div>
    </div>
</section>


