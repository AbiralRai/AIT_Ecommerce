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
<div class="container pt-3">


<!-- Search Links -->

<div class="clearfix mb-5">

    <nav class="navbar navbar-dark float-right">
        <form class="form-inline my-2 my-lg-0 m-auto ">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
        </form>
    </nav>
</div>
    <!-- Search Links END!!! -->
<!-- Jumbotron header -->
<header class="jumbotron ">

<div class="container"> 

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
        <!-- <div class="col col-md-3 col-xs-12 mt-2">
            
            <div class="char_item d-flex flex-row align-items-center justify-content-start">
                <div class="icon">
                    <i class="fa fa-truck fa-3x" aria-hidden="true"></i>
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
                    <i class="fa fa-comments fa-3x" aria-hidden="true"></i>
                </div>
                <div class="char_content">
                    <div class="char_title">Free Delivery</div>
                    <div class="char_subtitle">from $50</div>
                </div>
            </div>
        </div> -->
    </div>
</div>

</header>
<hr>
<div class="row mt-5">
    <div class="col">
        <h2>Categories</h2>
    </div>
</div>
<div class="row">
    <div class="card-deck mb-5 p-5">
    
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
    <footer class="page-footer font-small unique-color-dark mt-5">
    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
    </footer>
    <!-- Footer -->
    

<script>
    $(document).ready(function(){
        // $('nav').removeClass('scrolling-navbar');
        $('nav').removeClass('fixed-top scrolling-navbar');
        // alert()
    });

</script>