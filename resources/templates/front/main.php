<!--Main layout-->
<div class="container">

<!-- Search Links -->

<div class="clearfix">

    <nav class="navbar navbar-dark float-right">
        <form class="form-inline my-2 my-lg-0 m-auto ">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
        </form>
    </nav>
</div>
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

</div>
<!--/Main layout!!!-->