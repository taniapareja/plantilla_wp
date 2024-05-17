<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="plantilla/admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="plantilla/admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>

        <?php
        include("include/menu.php")
        ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">FAQs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">FAQs</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center mt-4">
                                <h4>Formulario de contacto</h4>
                                <p class="text-muted mt-3 mb-4">Formulario de registro de cliente</p>

                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mt-0">Tiene alguna pregunta ?</h5>
                                <p class="text-muted font-13 mb-4">Envíenos sus preguntas por correo electrónico o puede enviarnos por facebook.
                                </p>
                                <form>
                                    <div class="form-group row">
                                        <div class="col-lg-6 mb-3 mb-lg-0">
                                            <input class="form-control" type="text" id="nombre" placeholder="Nombre">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="email" id="Correo"
                                                placeholder="Correo">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" id="subject2" placeholder="Sujeto">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                            placeholder="Tu mensaje"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block px-4">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>




                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php
        include("include/pie_pagina.php")
        ?>

    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="plantilla/admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/admin/vertical/assets/js/theme.js"></script>

</body>

</html>