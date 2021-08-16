<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Covid 19 - Data dan Informasi Tentang CORONAVIRUS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Covid 19 - Data dan Informasi Tentang CORONAVIRUS" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- Site All Style Sheet Css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/fontawesome.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome.css" rel="stylesheet" />
    <link href="assets/css/all.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/odometer.min.css" rel="stylesheet" />
    <!-- Site Main Style Sheet Css -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Site Main Responsive Style Sheet Css -->
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script>
        window.onload = function() {

        var dataPoints = [];
        var dataPoints1 = [];
        var dataPoints2 = [];

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light1",
            title: {
                text: "Positif"
            },
            axisY: {
                title: "Orang",
                titleFontSize: 24,
                includeZero: true
            },
            data: [{
                type: "column",
                yValueFormatString: "#,### Orang",
                dataPoints: dataPoints
            }]
        });

        var chart1 = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            theme: "light1",
            title: {
                text: "Sembuh"
            },
            axisY: {
                title: "Orang",
                titleFontSize: 24,
                includeZero: true
            },
            data: [{
                type: "column",
                yValueFormatString: "#,### Orang",
                dataPoints: dataPoints1
            }]
        });

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            theme: "light1",
            title: {
                text: "Meninggal"
            },
            axisY: {
                title: "Orang",
                titleFontSize: 24,
                includeZero: true
            },
            data: [{
                type: "column",
                yValueFormatString: "#,### Orang",
                dataPoints: dataPoints2
            }]
        });

        function addData(data) {
            for (var i = 0; i < data.length; i++) {
                dataPoints.push({
                    x: new Date(data[i].Date),
                    y: data[i].Confirmed
                });
            }
            chart.render();
        }

        function addData1(data) {
            for (var i = 0; i < data.length; i++) {
                dataPoints1.push({
                    x: new Date(data[i].Date),
                    y: data[i].Recovered
                });
            }
            chart1.render();
        }

        function addData2(data) {
            for (var i = 0; i < data.length; i++) {
                dataPoints2.push({
                    x: new Date(data[i].Date),
                    y: data[i].Deaths
                });
            }
            chart2.render();
        }

        $.getJSON("https://api.covid19api.com/total/country/indonesia", addData);
        $.getJSON("https://api.covid19api.com/total/country/indonesia", addData1);
        $.getJSON("https://api.covid19api.com/total/country/indonesia", addData2);

        }
    </script>
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="index.html">
                <img src="assets/img/logo.png" class="img-fluid" alt="logo" />
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll active" href="/#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="grafik">Grafik</a></li>
                </ul>
                <ul class="navbar-nav-tracker-btn">
                    <li class="nav-item"><a class="nav-link live-tracker-btn" href="/live-tracker">Live Tracker</a></li>
                    <li class="pulse"></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home Section Start -->
    <header id="home" class="home-area hero-equal-height section-padding overflow-hidden d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="text-left home-content z-index position-relative">
                        <h5>Covid-19</h5>
                        <h1>Corona Virus - Stay Home Stay Safe</h1>
                        <p>COVID-19 adalah penyakit menular yang disebabkan oleh coronavirus yang paling baru ditemukan. Virus dan penyakit baru ini tidak diketahui sebelum merebaknya wabah di Wuhan, China, pada Desember 2019.</p>

                        <a href="#prevention" class="button js-scroll active-btn">Cara Pencegahan</a>
                        <a href="https://www.youtube.com/watch?v=elWIPbDfLA0" class="iq-video popup-video mfp-iframe button home-btn-2">Tentang COVID-19</a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="text-center z-index position-relative home-image">
                        <img src="assets/img/home-front.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Home Section End -->

    <!-- Counter Section Start -->
    <section class="counter-area">
        <div class="container">
            <div class="counter-inner-box">
                <div class="text-center mb-3">
                    <h4>Data penyebaran covid di Indonesia</h4>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                        <div class="single-counter-box">
                            <h3 class="odometer" id="data-positif">00</h3>
                            <p>Positif</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                        <div class="single-counter-box">
                            <h3 class="odometer" id="data-sembuh">00</h3>
                            <p>Sembuh</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                        <div class="single-counter-box">
                            <h3 class="odometer" id="data-meninggal">00</h3>
                            <p>Meninggal</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-item">
                        <div class="single-counter-box">
                            <h3 class="odometer" id="data-dirawat">00</h3>
                            <p>Dirawat</p>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="counter-update-box">
                            <div id="update-data"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Chart Section Start -->
    <section id="diagram" class="handwash-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h2>Diagram Perkembangan Kasus Covid-19 Di Indonesia</h2>
                </div>
                <div class="col-12">
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
                <div class="col-12">
                    <br>
                    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                </div>
                <div class="col-12">
                    <br>
                    <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                    <br><div id="update-datas"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chart Section End -->

    <!-- Symptoms Section Start -->
    <section id="symptoms" class="symptoms-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h6 class="small-title">RUMAH SAKIT RUJUKAN COVID-19</h6>
                    <h2>DAFTAR RUMAH SAKIT RUJUKAN COVID-19 DI TIAP DAERAH</h2>
                </div>
            </div>
            <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12">
                            <div class="day-by-day-symptoms">
                                <div class="active-cyan-4 mt-3 mb-3">
                                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="search-rs">
                                </div>
                                <div class="table-wrapper">
                                    <table class="table table-bordered mt-1">
                                        <thead> 
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Rumah Sakit</th>
                                                <th>Alamat</th>
                                                <th>Provinsi</th>
                                                <th>No HP</th>
                                            </tr>
                                        </thead>
                                        <tbody id="rumah-sakit">

                                        </tbody>
                                    </table>
                                </div>
                                <p>*Source : <i><a href="https://kawalcorona.com/api/">Kawalcorona.com</a></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Symptoms Section End -->

    <!-- Footer Section Start -->
    <footer class="footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mr-auto footer-link">
                        <div class="footer-logo-box">
                            <a href="#" class="footer-logo-link">
                                <img src="assets/img/logo.png" class="img-fluid" alt="logo" />
                            </a>
                            <p>Website ini dapat membantu anda untuk mendapatkan data tentang covid-19 secara realtime.</p>
                            <div class="footer-social-icon">
                                <a href="#" class="icon"> <i class="fas fa-facebook"></i> </a>
                                <a href="#" class="icon"> <i class="fas fa-twitter"></i> </a>
                                <a href="#" class="icon"> <i class="fas fa-youtube"></i> </a>
                                <a href="#" class="icon"> <i class="fas fa-instagram"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-link">
                        <h5>Quick Link</h5>
                        <ul class="list-menu">
                            <li><a href="#">Gejala</a></li>
                            <li><a href="#">Pencegahan</a></li>
                            <li><a href="#">Protokol Kesehatan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-link">
                        
                    </div>
                    <div class="col-lg-3 col-md-6 footer-link footer-subscribe">
                        <h5>Newsletter Subscription</h5>
                        <form>
                            <input type="Email" name="email" placeholder="Type Your Email" />
                            <a href="#" class="subscribe-btn"><span>Subscribe</span></a>
                        </form>
                        <div class="footer-mobile-number footer-link">
                            <h5>Kontak Darurat Covid-19</h5>
                            <a href="tel:119">119</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright &copy; 2021 - All Right Reserved.</p>
                        <p>Designed by <a href="https://www.templatemonster.com/vendors/cute/">Cute.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape">
            <div class="footer-shape-1">
                <img src="assets/img/covid-shape-1.png" alt="image" />
            </div>
            <div class="footer-shape-2">
                <img src="assets/img/covid-shape-1.png" alt="image" />
            </div>
            <div class="footer-shape-3">
                <img src="assets/img/covid-shape-1.png" alt="image" />
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top back-to-top-pulse"><i class="fa fa-caret-up"></i></a>

    <!-- Jquery Js-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap Js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Site All Plugin Js-->
    <script src="assets/js/plugins.js"></script>
    <!-- Site Main Js-->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        semuaData();
        dataProvinsi();
        dataDunia();
        dataUpdate();
        dataUpdates();
        dataUpdatess();
        rsUpdate();

        setInterval(function(){
            semuaData();
        }, 2000);

        function semuaData() {
            $.ajax({
                url : 'https://coronavirus-19-api.herokuapp.com/countries',
                success : function(data) {
                    try{
                        var json = data;
                        var html = [];

                        if(json.length > 0){
                            var i;
                            for(i = 0; i < json.length; i++){
                                var dataNegara = json[i];
                                var namaNegara = dataNegara.country;

                                if(namaNegara === 'Indonesia'){
                                    var positif = dataNegara.cases;
                                    var sembuh = dataNegara.recovered;
                                    var meninggal = dataNegara.deaths;
                                    var dirawat = dataNegara.active;

                                    $('#data-positif').html(positif);
                                    $('#data-sembuh').html(sembuh);
                                    $('#data-meninggal').html(meninggal);
                                    $('#data-dirawat').html(dirawat);
                                }
                            }
                        }
                    }catch{
                        alert('Error');
                    }
                }
            });
        }

        function dataUpdate(){
            $.ajax({
                url : 'curl2.php',
                type : 'GET',
                success : function(data) {
                    try{
                        
                        $('#update-data').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }

        function rsUpdate(){
            $.ajax({
                url : 'curl4.php',
                type : 'GET',
                success : function(data) {
                    try{
                        
                        $('#rumah-sakit').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }

        function dataUpdatess(){
            $.ajax({
                url : 'curl2.php',
                type : 'GET',
                success : function(data) {
                    try{
                        
                        $('#update-datas').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }
        
        function dataUpdates(){
            $.ajax({
                url : 'curl3.php',
                type : 'GET',
                success : function(data) {
                    try{
                        
                        $('#table-datas').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }

        function dataProvinsi(){
            $.ajax({
                url : 'curl1.php',
                type : 'GET',
                success : function(data) {
                    try{
                        
                        $('#table-data').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }

        function dataDunia(){
            $.ajax({
                url : 'world.php',
                type : 'GET',
                success : function(data) {
                    try{
                        
                        $('#table-id').html(data);

                    }catch{
                        alert('Error');
                    }
                }
            });
        }

        $(document).ready(function(){
            $("#search-prov").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table-data tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        $(document).ready(function(){
            $("#search-rs").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#rumah-sakit tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        $(document).ready(function(){
            $("#search-indo").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table-datas tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        $(document).ready(function(){
            $("#search-world").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table-id tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        
    });
</script>