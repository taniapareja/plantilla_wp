
            
            <?php
               get_header();
             
            ?>

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">With Indicators</h4>
                                    <p class="card-subtitle mb-4">You can also add the indicators to the carousel, alongside the controls, too.</p>

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="<?php bloginfo('template_url')?>/img/ropa de baño 1.jpeg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="<?php bloginfo('template_url')?>/img/ropa de baño 1.jpeg"alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="<?php bloginfo('template_url')?>/img/ropa de baño 1.jpeg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                    </div> <!-- container-fluid -->
                       
                </div>
                <!-- End Page-content -->
               <?php
                   get_footer();
             
               ?>

               

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="<?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
        <script src="<?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/js/waves.js"></script>
        <script src="<?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="<?php bloginfo('template_url')?>/plantilla/Admin/vertical/assets/js/theme.js"></script>

    </body>

</html>