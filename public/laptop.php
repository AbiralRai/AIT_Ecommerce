<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
   <style>

.navbar {
    background-color: rgba(41, 128, 185, .7);
}
</style>
   

<div class="container mt-3 pt-1">
    
<!-- Search Links -->

<div class="clearfix pt-5">

    <nav class="navbar navbar-dark float-right">
        <form class="form-inline my-2 my-lg-0 m-auto ">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
        </form>
    </nav>
</div>
    <!-- Search Links END!!! -->

<div class="row mt-5">
    <div class="col">
        <h2>Categories</h2>
    </div>
</div>
<div class="row">
    <div class="card-deck mb-5 p-2">
    
    <!--Panel-->
    <div class="card ">
    <!-- Card image -->
    <div class="view view-cascade overlay">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top" alt="sample photo">
    <a href="laptop.php">
        <div class="mask rgba-white-slight"></div>
    </a>
    </div>
    <!-- Card image End-->
    <div class="card-body">
    <h5 class="card-title">Laptops</h5>
    <p class="card-text">This panel has supporting text below as a natural lead-in to additional content.</p>
            <a href="laptop.php">
            <button type="button" class="btn myBlueBG "> More </button>
            
            </a>
    </div>
    </div>
    <!--/.Panel-->

    <!--Panel-->
    <div class="card ">
    <!-- Card image -->
    <div class="view view-cascade overlay">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top" alt="sample photo">
    <a>
        <div class="mask rgba-white-slight"></div>
    </a>
    </div>
    <!-- Card image -->
    <div class="card-body">
    <h5 class="card-title">Monitors</h5>
    <p class="card-text">This panel has supporting text below as a natural lead-in to additional content.</p>
            <a href="monitor.php">
            <button type="button" class="btn myBlueBG ">More </button>
            
            </a>
    </div>
    </div>
    <!--/.Panel-->

    <!--Panel-->
    <div class="card ">
    <!-- Card image -->
    <div class="view view-cascade overlay">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top" alt="sample photo">
    <a>
        <div class="mask rgba-white-slight"></div>
    </a>
    </div>
    <!-- Card image -->
    <div class="card-body">
    <h5 class="card-title">Computer Accessories</h5>
    <p class="card-text">This panel has supporting text below as a natural lead-in to additional content.</p>
            <a href="accessory.php">
            <button type="button" class="btn myBlueBG cart">More </button>
            
            </a>
    </div>
    </div>
    <!--/.Panel-->
</div>
</div>

</div>


    <!--Section: Main info-->
    <section class="mt-5 wow fadeIn">

        <!-- Main Grid row-->
    <div class="row wow fadeIn">

        <!-- Side Category column -->
        <div class="col-lg-2 col-md-12 mb-4">
        <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>
        </div>  
        <!-- Side Category column END!!!-->

        <!-- Nested Grid row container -->
        <div class="col-lg-10 mb-4">

            <!-- 1st Grid row -->
            <div class="row wow fadeIn">
                
            <?php

            get_products();

            ?>
            </div>
            <!-- 1st Grid row END!!! -->



        </div>
        <!-- Nested Grid row container END!!! -->

    <!-- Grid column container END!!! -->
    </div>
        <!--Grid row-->

    </section>
    <!--Section: Main info-->

    <!--Pagination-->
    <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-bluegrey">

        <!--Arrow left-->
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
            </a>
        </li>

        <li class="page-item active">
            <a class="page-link" href="#">1
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
            </a>
        </li>
        </ul>
    </nav>
    <!--Pagination-->   



<!-- /Modal Contact !!! -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?php include(TEMPLATE_FRONT . DS . "contact.php") ?>
</div>
<!-- /Modal Contact !!! -->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?php include(TEMPLATE_FRONT . DS . "account.php") ?>
</div>
<!--/Modal: Login / Register Form !!!-->

          
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
</footer>
<!-- Footer -->
<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
   <style>

.navbar {
    background-color: rgba(41, 128, 185, .7);
}
</style>
   

<div class="container mt-3 pt-1">
    
<!-- Search Links -->

<div class="clearfix pt-5">

    <nav class="navbar navbar-dark float-right">
        <form class="form-inline my-2 my-lg-0 m-auto ">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
        </form>
    </nav>
</div>
    <!-- Search Links END!!! -->

<div class="row mt-5">
    <div class="col">
        <h2>Categories</h2>
    </div>
</div>
<div class="row">
    <div class="card-deck mb-5 p-2">
    
    <!--Panel-->
    <div class="card ">
    <!-- Card image -->
    <div class="view view-cascade overlay">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top" alt="sample photo">
    <a href="laptop.php">
        <div class="mask rgba-white-slight"></div>
    </a>
    </div>
    <!-- Card image End-->
    <div class="card-body">
    <h5 class="card-title">Laptops</h5>
    <p class="card-text">This panel has supporting text below as a natural lead-in to additional content.</p>
            <a href="laptop.php">
            <button type="button" class="btn myBlueBG "> More </button>
            
            </a>
    </div>
    </div>
    <!--/.Panel-->

    <!--Panel-->
    <div class="card ">
    <!-- Card image -->
    <div class="view view-cascade overlay">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top" alt="sample photo">
    <a>
        <div class="mask rgba-white-slight"></div>
    </a>
    </div>
    <!-- Card image -->
    <div class="card-body">
    <h5 class="card-title">Monitors</h5>
    <p class="card-text">This panel has supporting text below as a natural lead-in to additional content.</p>
            <a href="monitor.php">
            <button type="button" class="btn myBlueBG ">More </button>
            
            </a>
    </div>
    </div>
    <!--/.Panel-->

    <!--Panel-->
    <div class="card ">
    <!-- Card image -->
    <div class="view view-cascade overlay">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top" alt="sample photo">
    <a>
        <div class="mask rgba-white-slight"></div>
    </a>
    </div>
    <!-- Card image -->
    <div class="card-body">
    <h5 class="card-title">Computer Accessories</h5>
    <p class="card-text">This panel has supporting text below as a natural lead-in to additional content.</p>
            <a href="accessory.php">
            <button type="button" class="btn myBlueBG cart">More </button>
            
            </a>
    </div>
    </div>
    <!--/.Panel-->
</div>
</div>

</div>


    <!--Section: Main info-->
    <section class="mt-5 wow fadeIn">

        <!-- Main Grid row-->
    <div class="row wow fadeIn">

        <!-- Side Category column -->
        <div class="col-lg-2 col-md-12 mb-4">
        <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>
        </div>  
        <!-- Side Category column END!!!-->

        <!-- Nested Grid row container -->
        <div class="col-lg-10 mb-4">

            <!-- 1st Grid row -->
            <div class="row wow fadeIn">
                
            <?php

            get_products();

            ?>
            </div>
            <!-- 1st Grid row END!!! -->



        </div>
        <!-- Nested Grid row container END!!! -->

    <!-- Grid column container END!!! -->
    </div>
        <!--Grid row-->

    </section>
    <!--Section: Main info-->

    <!--Pagination-->
    <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-bluegrey">

        <!--Arrow left-->
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
            </a>
        </li>

        <li class="page-item active">
            <a class="page-link" href="#">1
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>

        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
            </a>
        </li>
        </ul>
    </nav>
    <!--Pagination-->   



<!-- /Modal Contact !!! -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?php include(TEMPLATE_FRONT . DS . "contact.php") ?>
</div>
<!-- /Modal Contact !!! -->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?php include(TEMPLATE_FRONT . DS . "account.php") ?>
</div>
<!--/Modal: Login / Register Form !!!-->

          
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
</footer>
<!-- Footer -->
