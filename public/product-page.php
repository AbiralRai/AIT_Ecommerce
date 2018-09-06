<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<style>

.navbar {
    background-color: rgba(41, 128, 185, .7);
}
</style>

      <!--Main layout-->
    <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

<?php

$query = query(" SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while ($row = fetch_array($query)) :

?>
            <!--Grid column-->
        <div class="col-md-6 mb-4">
            
            <img style="height:620px" src="../public/img/<?php echo $row['product_image'] ?>" class="img-fluid" alt="">
        </div>
        <!-- /Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

        <div class="card hoverable ">
            <div class="card-header light-blue white-text">
                    <!-- <span class="mr-1"> -->
                        <!-- <del>$200</del> -->
                        <!-- </span> -->
                        <h5 class="card-subtitle lead my-1"><?php echo "$" . $row['price'] ?></h5>
                    
                    <h3 class="card-title" text-bold><strong><?php echo $row['product_name'] ?></strong></h3>
            </div>
            <div class="card-body">  
                
                <h4 class="card-title">Description</h4>
                
                <p class="card-text lead"><?php echo $row['product_description'] ?></p>
                
                <form class="d-flex justify-content-left">
                    <!-- Default input -->
                    <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
                    <button class="btn btn-primary btn-md my-0 disabled cart" type="submit">Add to cart
                        <i class="fa fa-shopping-cart ml-1"></i>
                    </button>
                    
                </form>
            </div>
            <!--Content-->
        </div>
            
        </div>
        <!--Grid column-->
    </div>
</div>
<!--Grid row-->


            <div class="container">

                <div class="row wow fadeIn">
                    
                    <div class="col mt-2">
                        
                        <div class="card hoverable m-auto w-75 ">
                            <div class="card-body">  
                                
                                <h4 class="card-title">Specifications</h4>
                                
                                <p class="card-text lead "><?php echo $row['product_specs'] ?></p>
                            </div>
                            <!--Content-->
                        </div>
                    </div>
                    
                </div>
                <?php endwhile; ?>
            </div>

    </div>
     </main>
    <!--Main layout-->

    


                        
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
                        <footer class="page-footer font-small unique-color-dark mt-2">
                        <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
                        </footer>
                        <!-- Footer -->