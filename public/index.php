<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
   
                        
                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                        <?php include(TEMPLATE_FRONT . DS . "carousel.php") ?>
                        </div>
                        <!--/.Carousel Wrapper !!!-->
                        
                        
                        <!--Main layout-->
                        <main>
                        <?php include(TEMPLATE_FRONT . DS . "main.php") ?>
                        </main>
                        <!--/Main layout !!!-->
                        
                        
                        
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
                        
                        
                        
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js">
    </script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>