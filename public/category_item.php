<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
   <style>

.navbar {
    background-color: rgba(41, 128, 185, .7);
}
.icon {
    margin-right: 24px;
}

.char_item {
    
      width: 100%;
    height: 100px;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    border: solid 1px #e8e8e8;
    padding-left: 36px;
}
</style>
   

<div class="container mt-3 pt-1">
    
<div class="container mt-5"> 

    <div class="row mb-4">
        <div class="col col-md-3 col-xs-12 mt-2">
            
            <div class="char_item d-flex flex-row align-items-center justify-content-start">
                <div class="icon">
                    <i class="fa fa-cc-visa fa-4x " aria-hidden="true"></i>
                </div>
                <div class="char_content">
                    <div class="char_title">Free Delivery</div>
                    <div class="char_subtitle">from $50</div>
                </div>
            </div>
        </div>
        <div class="col col-md-3 col-xs-12 mt-2">
            
            <div class="char_item d-flex flex-row align-items-center justify-content-start">
                <div class="icon">
                    <i class="fa fa-cc-paypal fa-4x" aria-hidden="true"></i>
                </div>
                <div class="char_content">
                    <div class="char_title">Free Delivery</div>
                    <div class="char_subtitle">from $50</div>
                </div>
            </div>
        </div>
        <div class="col col-md-3 col-xs-12 mt-2">
            
            <div class="char_item d-flex flex-row align-items-center justify-content-start mr-1">
                <div class="icon">
                    <i class="fa fa-truck fa-4x" aria-hidden="true"></i>
                </div>
                <div class="char_content">
                    <div class="char_title">Free Delivery</div>
                    <div class="char_subtitle">from $50</div>
                </div>
            </div>
        </div>
        <div class="col col-md-3 col-xs-12 mt-2">
            
            <div class="char_item d-flex flex-row align-items-center justify-content-start">
                <div class="icon">
                    <i class="fa fa-comments fa-4x" aria-hidden="true"></i>
                </div>
                <div class="char_content">
                    <div class="char_title">Free Delivery</div>
                    <div class="char_subtitle">from $50</div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>
<hr>

<!-- Search Links -->
<?php echo $_GET['name']?>
<?php include(TEMPLATE_FRONT . DS . "search.php") ?>
<!-- Search Links END!!! -->


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
            get_categories_item();
            ?>


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
</div>


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