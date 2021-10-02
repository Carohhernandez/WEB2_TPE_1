<?php require 'header.php' ?>

<section id="showcaseExplore" class="d-flex justify-content-center align-items-center">
    <div id="header" class="container text-white text-center">
    </div>
</section>

<section>
<div class="container mt-2">
    <h3 class="separator text-center my-5 my-md-3">EXPLORE</h3>
    <div class="row">
        <div class="col-md-6 p-md-3">
            <form action="<?php echo path;?>search.php" method="GET" class="d-flex">
                <select name="destination" id="destination" class="w-75">
                    <option disabled selected>BY DESTINATION</option>
                    <option value="argentina">Argentina</option>
                    <option value="brasil">Brasil</option>
                    <option value="colombia">Colombia</option>
                    <option value="japan">Japan</option>
                    <option value="mexico">Mexico</option>
                </select>
                <button class="btn btn-secondary text-light w-25 ml-1" type="submit" value="Submit">GO</button>
            </form>
        </div>
        <div class="col-md-6 p-md-3" id="search">
            <form class="d-flex" name="search" action="<?php echo path;?>search.php" method="GET">
                <input type="text" name="search_input" placeholder="Search the site..." class="w-100">
                <button class="btn btn-secondary text-light w-25"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div> 
</section>

<section>
    <div class="container text-center">
            <div class="row justify-content-center align-items-center px-5 text-center">
                <div class="col-12 col-lg-4 my-2 imgExplore">
                <a href="<?php echo path;?>country.php?country=Mexico"><img src="images/Islas-del-Rosario-Colombia-Agenda-Iin.jpg" alt="" class="img-fluid w-100 h-100"></a>
                    <div class="bottom-left"><h3>MEXICO</h3></div>
                </div>
                <div class="col-12 col-lg-4 my-2 imgExplore">
                <a href="<?php echo path;?>country.php?country=Argentina"><img src="images/Islas-del-Rosario-Colombia-Agenda-Iin.jpg" alt="" class="img-fluid w-100 h-100"></a>
                    <div class="bottom-left"><h3>ARGENTINA</h3></div>
                </div>
                <div class="col-12 col-lg-4 my-2 imgExplore">
                <a href="<?php echo path;?>country.php?country=Colombia"><img src="images/Cartagena_Reiseuhu_unsplash.jpg" alt="" class="img-fluid w-100 h-100"></a>
                    <div class="bottom-left"><h3>COLOMBIA</h3></div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-3 px-5 text-center">
                <div class="col-12 col-lg-6 my-2 imgExplore">
                <a href="<?php echo path;?>country.php?country=Brasil"><img src="images/channey-wWjDH4m2emE-unsplash.jpg" alt="" class="img-fluid w-100 h-100"></a>
                    <div class="bottom-left"><h3>BRASIL</h3></div>
                </div>
                <div class="col-12 col-lg-6 my-2 imgExplore">
                <a href="<?php echo path;?>country.php?country=Japan"><img src="images/arol-vinolas-OEgC5_q9MaE-unsplash.jpg" alt="" class="img-fluid w-100 h-100"></a>
                    <div class="bottom-left"><h3>JAPAN</h3></div>
                </div>
            </div>

    </div><!--cierro container-->
</section>

<section>
    <div class="container px-0 mt-5">
        <h3 class="separator text-center">Our latest articles</h3>
    </div>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-md-4 px-2 py-3 py-md-0">
                <img src="images/61613129_149847819478657_4036699960058792296_n.jpg" alt="" class="img-fluid d-none d-md-inline mb-2 guideImg">
                <div class="text-left"><i class="fa fa-map-marker" aria-hidden="true"></i><p class="d-inline-flex ml-2">Japan </p></div>
                <h3 class="title text-left pr-2">GUIDE TO VISIT TEMPLES IN TOKYO</h3>
            </div>
            <div class="col-md-4 px-2 py-3 py-md-0">
                <img src="images/kulli-kittus-ymGDEiGl6lA-unsplash.jpg" alt="" class="img-fluid d-none d-md-inline mb-2 guideImg">
                <div class="text-left"><i class="fa fa-map-marker" aria-hidden="true"></i><p class="d-inline-flex ml-2">Argentina </p></div>
                <h3 class="title text-left pr-2">BEST OUTDOOR ADVENTURES IN SALTA</h3>
            </div>
            <div class="col-md-4 px-2 py-3 py-md-0">
                <img src="images/anna-sullivan-6OsfUWYMGtk-unsplash.jpg" alt="" class="img-fluid d-none d-md-inline mb-2 guideImg">
                <div class="text-left"><i class="fa fa-map-marker" aria-hidden="true"></i><p class="d-inline-flex ml-2">Mexico </p></div>
                <h3 class="title text-left pr-2">TULUM, BALANCE HISTORY AND RELAX</h3>
            </div>
        </div>
    </div>
</section>

<?php require 'footer.php' ?>