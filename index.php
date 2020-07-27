<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/css/dataTables.bootstrap4.min.css">
    <!-- datepicker CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.5.0-web/css/all.min.css">
    <!-- Sweetalert CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js">
    <!-- Chosen CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap-4/css/chosen.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- jQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Payment Agent</title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <div class="container">
                <!-- logo dan judul aplikasi -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top title-icon" alt="Logo">
                    <span class="title">For-U</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- menu aplikasi -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link mr-1 menu" id="home" href="javascript:void(0);">
                                <i class="fas fa-home title-icon"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-1 menu" id="customer" href="javascript:void(0);">
                                <i class="fas fa-user title-icon"></i> Customer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-1 menu" id="pulsa" href="javascript:void(0);">
                                <i class="fas fa-tablet-alt title-icon"></i> Pulsa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-1 menu" id="sales" href="javascript:void(0);">
                                <i class="fas fa-shopping-cart title-icon"></i> Sales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-1 menu" id="report" href="javascript:void(0);">
                                <i class="fas fa-file-alt title-icon"></i> Report
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <main role="main" class="container mt-5">
            <!-- menampilkan isi halaman -->
            <div class="content"></div>
        </main>

        <!-- footer -->
        <div class="container">
            <footer class="pt-4 my-md-4 pt-md-3 border-top">
                <div class="row">
                    <div class="col-12 col-md center">
                        &copy; 2020 - <a class="text-info" href="">afdolsing</a>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Include JavaScript -->
        <!-- Bootstrap JS -->
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- Fontawesome Plugin JS -->
        <script type="text/javascript" src="assets/plugins/fontawesome-free-5.5.0-web/js/all.min.js"></script>
        <!-- DataTables Plugin JS -->
        <script type="text/javascript" src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.bootstrap4.min.js"></script>
        <!-- datepicker Plugin JS -->
        <script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
        <!-- SweetAlert Plugin JS -->
        <script type="text/javascript" src="assets/plugins/sweetalert/js/sweetalert.min.js"></script>
        <!-- Chosen Plugin JS -->
        <script type="text/javascript" src="assets/plugins/chosen-bootstrap-4/js/chosen.jquery.js"></script>
        
        <script type="text/javascript">
        $(document).ready(function() {
            // halaman yang diload default pertama kali saat aplikasi dijalankan
            $('.content').load('modules/home/view.php');

            // fungsi untuk pemanggilan halaman tanpa reload/refresh
            $('.menu').click(function(){
                // membuat variabel untuk menampung nama id dari class 'menu' yang diklik
                var menu = $(this).attr('id');
                // jika id = beranda, maka load halaman view beranda
                if (menu=="home") {
                    $('.content').load('modules/home/view.php');                       
                } 
                // jika id = pelanggan, maka load halaman view pelanggan
                else if (menu=="customer") {
                    $('.content').load('modules/customer/view.php');                        
                }
                // jika id = pulsa, maka load halaman view pulsa 
                else if (menu=="pulsa") {
                    $('.content').load('modules/pulsa/view.php');                       
                } 
                // jika id = penjualan, maka load halaman view penjualan
                else if (menu=="sales") {
                    $('.content').load('modules/sales/view.php');                     
                } 
                // jika id = laporan, maka load halaman view laporan
                else if (menu=="report") {
                    $('.content').load('modules/report/view.php');                     
                }
            }); 
        } );

        // ========================================== Validasi Form ===========================================
        // Validasi karakter yang boleh diinpukan pada form
        function getkey(e) {
            if (window.event)
                return window.event.keyCode;
            else if (e)
                return e.which;
            else
                return null;
        }

        function goodchars(e, goods, field) {
            var key, keychar;
            key = getkey(e);
            if (key == null) return true;

            keychar = String.fromCharCode(key);
            keychar = keychar.toLowerCase();
            goods   = goods.toLowerCase();

            // check goodkeys
            if (goods.indexOf(keychar) != -1)
                return true;
            // control keys
            if ( key==null || key==0 || key==8 || key==9 || key==27 )
                return true;
              
            if (key == 13) {
                var i;
                for (i = 0; i < field.form.elements.length; i++)
                    if (field == field.form.elements[i])
                        break;
                        i = (i + 1) % field.form.elements.length;
                        field.form.elements[i].focus();
                    return false;
                };
            // else return false
            return false;
        }
        // ====================================================================================================
        </script>

</body>

</html>