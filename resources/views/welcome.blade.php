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
                    <li class="nav-item"><a class="nav-link js-scroll active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="#symptoms">Gejala</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="#prevention">Pencegahan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="#faq">Pengertian</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="#handwash">Cuci Tangan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="#blog">Data Penyebaran</a></li>
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

    <!-- About Section Start -->
    <section id="about" class="about-area section-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-info">
                        <h6 class="small-title">Tentang COVID-19</h6>
                        <h2>CORONAVIRUS (COVID-19)</h2>
                        <p>
                            <strong>
                            COVID-19 adalah penyakit menular yang disebabkan oleh coronavirus yang paling baru ditemukan. Virus dan penyakit baru ini tidak dikenal sebelum merebaknya wabah di Wuhan, China, pada Desember 2019. COVID-19 kini menjadi pandemi yang melanda banyak negara secara global.
                            </strong>
                        </p>
                        <p>
                        Coronavirus adalah keluarga besar virus yang dapat menyebabkan penyakit pada hewan atau manusia. Pada manusia, beberapa virus corona diketahui menyebabkan infeksi saluran pernapasan mulai dari flu biasa hingga penyakit yang lebih parah seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS). Coronavirus yang paling baru ditemukan menyebabkan penyakit coronavirus COVID-19.
                        </p>
                        <p>
                        Gejala COVID-19 yang paling umum adalah demam, batuk kering, dan kelelahan. Gejala lain yang kurang umum dan dapat mempengaruhi beberapa pasien termasuk sakit dan nyeri, hidung tersumbat, sakit kepala, konjungtivitis, sakit tenggorokan, diare, kehilangan rasa atau bau atau ruam pada kulit atau perubahan warna jari tangan atau kaki. Gejala-gejala ini biasanya ringan dan dimulai secara bertahap. Beberapa orang terinfeksi tetapi hanya memiliki gejala yang sangat ringan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="assets/img/about.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Symptoms Section Start -->
    <section id="symptoms" class="symptoms-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h6 class="small-title">APA SAJA GEJALA-GEJALA DARI COVID-19?</h6>
                    <h2>GEJALA-GEJALA COVID-19</h2>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-12 symptoms-item">
                    <div class="single-symptoms">
                        <div class="symptoms-icon">
                            <img src="assets/img/symptoms/symptoms-1.svg" alt="image" />
                        </div>
                        <div class="symptoms-details">
                            <h3>Batuk Kering</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 symptoms-item">
                    <div class="single-symptoms">
                        <div class="symptoms-icon">
                            <img src="assets/img/symptoms/symptoms-3.svg" alt="image" />
                        </div>
                        <div class="symptoms-details">
                            <h3>Demam Tinggi</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 symptoms-item">
                    <div class="single-symptoms">
                        <div class="symptoms-icon">
                            <img src="assets/img/symptoms/symptoms-5.svg" alt="image" />
                        </div>
                        <div class="symptoms-details">
                            <h3>Sesak Nafas</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 symptoms-item">
                    <div class="single-symptoms">
                        <div class="symptoms-icon">
                            <img src="assets/img/symptoms/symptoms-2.svg" alt="image" />
                        </div>
                        <div class="symptoms-details">
                            <h3>Sakit Kepala</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 symptoms-item">
                    <div class="single-symptoms">
                        <div class="symptoms-icon">
                            <img src="assets/img/symptoms/symptoms-4.svg" alt="image" />
                        </div>
                        <div class="symptoms-details">
                            <h3>Kelelahan</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 symptoms-item">
                    <div class="single-symptoms">
                        <div class="symptoms-icon">
                            <img src="assets/img/symptoms/symptoms-6.svg" alt="image" />
                        </div>
                        <div class="symptoms-details">
                            <h3>Nyeri Otot</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="day-by-day-symptoms-notes">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-lg-8 col-md-10 col-sm-12">
                                <p>
                                    <span class="day-by-day-symptoms-notes-title">Hari demi hari Gejala Coronavirus :</span> Gejala mulai ringan. Pasien mungkin mengalami demam, batuk kering, atau kadang-kadang sesak napas. Beberapa mungkin juga merasakan kelelahan dan nyeri otot. Sebagian kecil mungkin pernah mengalami diare atau mual satu atau dua hari sebelumnya.
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-10 col-sm-12">
                                <div class="symptoms-notes-btn">
                                    <a href="#faq" class="button js-scroll"><i class="fas fa-info" aria-hidden="true"></i> Gejala Virus Corona Setiap Hari</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Symptoms Section End -->

    <!-- Prevention Section Start -->
    <section id="prevention" class="prevention-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h6 class="small-title">BAGAIMANA CARA MENCEGAH VIRUS COVID-19?</h6>
                    <h2>PROTOKOL KESEHATAN</h2>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-prevention">
                        <div class="prevention-icon">
                            <img src="assets/img/prevention/prevention-1.png" alt="image" />
                        </div>
                        <div class="prevention-text">
                            <h3>Tutup Mulut Saat Batuk</h3>
                            <p>Ketika batuk gunakan penutup mulut seperti tisu ataupun sapu tangan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-prevention">
                        <div class="prevention-icon">
                            <img src="assets/img/prevention/prevention-5.png" alt="image" />
                        </div>
                        <div class="prevention-text">
                            <h3>Jangan Sentuh Muka Anda</h3>
                            <p>Menghindari tidak menyentuh mata, hidung, dan mulut dengan tangan yang belum dicuci.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-prevention">
                        <div class="prevention-icon">
                            <img src="assets/img/prevention/prevention-2.png" alt="image" />
                        </div>
                        <div class="prevention-text">
                            <h3>Menggunakan Masker Jika Berpergian</h3>
                            <p>Selalu gunakan masker saat berpergian keluar rumah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-prevention">
                        <div class="prevention-icon">
                            <img src="assets/img/prevention/prevention-3.png" alt="image" />
                        </div>
                        <div class="prevention-text">
                            <h3>Lakukan Physical Distancing</h3>
                            <p>Menjaga jarak sosial minimal 1-2 meter dari orang lain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-prevention">
                        <div class="prevention-icon">
                            <img src="assets/img/prevention/prevention-4.png" alt="image" />
                        </div>
                        <div class="prevention-text">
                            <h3>Biasakan Mencuci Tangan</h3>
                            <p>Sering-seringlah mencuci tangan setidaknya selama 20 detik dengan sabun dan air.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-prevention">
                        <div class="prevention-icon">
                            <img src="assets/img/prevention/prevention-6.png" alt="image" />
                        </div>
                        <div class="prevention-text">
                            <h3>Tidak Keluar Rumah</h3>
                            <p>Hindari keluar rumah jika tidak ada hal yang penting atau mendesak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="handwash-prevention-notes">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-lg-8 col-md-10 col-sm-12">
                                <p>
                                    <span class="handwash-prevention-notes-title">Mencuci tangan yang baik: Panduan langkah demi langkah:</span> NHS mengatakan bahwa mencuci tangan adalah bagian penting untuk mencegah penyebaran virus seperti virus corona. Dr Adele McCormick dari University of Westminster mendemonstrasikan bagaimana melakukan ini dengan benar - yang seharusnya memakan waktu sekitar 20 detik.
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-10 col-sm-12">
                                <div class="prevention-notes-btn">
                                    <a href="#handwash" class="button js-scroll">Cara Mencuci Tangan <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Prevention Section End -->

    <!-- Faq & Symptoms Section Start -->
    <section id="faq" class="faq-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h2>Gejala & Pengertian COVID-19</h2>
                </div>
                <div class="col-lg-6 col-md-12 faq-item">
                    <div class="accordion">
                        <div class="item active">
                            <div class="title">
                                <h6><span>01.</span> Apa itu virus corona baru?</h6>
                            </div>
                            <div class="accordion-info active">
                                <p>
                                Coronavirus adalah keluarga besar virus yang dapat menyebabkan penyakit pada hewan atau manusia. Pada manusia, beberapa virus corona diketahui menyebabkan infeksi saluran pernapasan mulai dari flu biasa hingga penyakit yang lebih parah seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS). Coronavirus yang paling baru ditemukan menyebabkan penyakit coronavirus COVID-19.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6><span>02.</span> Apa saja gejala COVID-19?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                Gejala COVID-19 yang paling umum adalah demam, batuk kering, dan kelelahan. Gejala lain yang kurang umum dan dapat mempengaruhi beberapa pasien termasuk sakit dan nyeri, hidung tersumbat, sakit kepala, konjungtivitis, sakit tenggorokan, diare, kehilangan rasa atau bau atau ruam pada kulit atau perubahan warna jari tangan atau kaki. Gejala-gejala ini biasanya ringan dan dimulai secara bertahap. Beberapa orang terinfeksi tetapi hanya memiliki gejala yang sangat ringan.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6><span>03.</span> Bagaimana cara mencuci buah dan sayuran?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                Buah-buahan dan sayuran adalah komponen penting dari diet sehat. Cucilah dengan cara yang sama seperti yang harus Anda lakukan dalam keadaan apa pun: sebelum memegangnya, cuci tangan Anda dengan sabun dan air. Kemudian, cuci bersih buah dan sayuran dengan air bersih, terutama jika Anda memakannya mentah-mentah.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6><span>04.</span> Bisakah anak-anak atau remaja tertular COVID-19?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>Penelitian menunjukkan bahwa anak-anak dan remaja memiliki kemungkinan yang sama untuk terinfeksi seperti kelompok usia lainnya dan dapat menyebarkan penyakit.</p>
                                <br />
                                <p>Bukti hingga saat ini menunjukkan bahwa anak-anak dan dewasa muda cenderung tidak terkena penyakit parah, tetapi kasus yang parah masih dapat terjadi pada kelompok usia ini.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6><span>05.</span> Bagaimana COVID-19 menyebar?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                Orang dapat tertular COVID-19 dari orang lain yang memiliki virus. Penyakit ini menyebar terutama dari orang ke orang melalui tetesan kecil dari hidung atau mulut, yang dikeluarkan ketika seseorang dengan COVID-19 batuk, bersin, atau berbicara. Tetesan ini relatif berat, tidak melakukan perjalanan jauh dan cepat tenggelam ke tanah. Orang dapat tertular COVID-19 jika mereka menghirup tetesan ini dari orang yang terinfeksi virus. Inilah mengapa penting untuk menjaga jarak setidaknya 1 meter) dari orang lain.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6><span>06.</span> Bagaimana cara berbelanja dengan aman?</h6>
                            </div>
                            <div class="accordion-info">
                                <p>
                                Saat berbelanja bahan makanan, jaga jarak setidaknya 1 meter dari orang lain dan hindari menyentuh mata, mulut, dan hidung Anda. Jika memungkinkan, bersihkan pegangan troli atau keranjang belanjaan sebelum berbelanja. Sesampai di rumah, cuci tangan Anda sampai bersih dan juga setelah memegang dan menyimpan produk yang Anda beli.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="day-by-day-symptoms">
                        <h2>Gejala Virus Corona Hari Ke Hari</h2>
                        <p>
                            <strong>Hari 1:</strong> Gejala mulai ringan. Pasien mungkin mengalami demam, batuk kering, atau kadang-kadang sesak napas. Beberapa mungkin juga merasakan kelelahan dan nyeri otot. Sebagian kecil mungkin pernah mengalami diare atau mual satu atau dua hari sebelumnya.
                        </p>
                        <p><strong>Hari 3:</strong> Ini adalah waktu yang dibutuhkan, rata-rata, sebelum pasien dirawat di rumah sakit setelah gejalanya dimulai.</p>
                        <p><strong>Hari 5:</strong> Dalam kasus yang parah, gejala bisa mulai memburuk. Pasien mungkin mengalami kesulitan bernapas, terutama jika mereka lebih tua atau memiliki kondisi kesehatan yang sudah ada sebelumnya.</p>
                        <p><strong>Hari 7:</strong> Ini adalah waktu yang dibutuhkan, rata-rata, bagi pasien untuk dirawat di rumah sakit setelah gejalanya dimulai.</p>
                        <p>
                            <strong>Hari 8:</strong> Pada titik ini, pasien dengan kasus yang parah kemungkinan besar akan mengalami sesak napas, pneumonia, atau sindrom gangguan pernapasan akut, penyakit yang mungkin memerlukan intubasi. ARDS sering berakibat fatal.
                        </p>
                        <p>
                            <strong>Hari 10:</strong> Jika pasien memiliki gejala yang memburuk, ini adalah waktu dalam perkembangan penyakit ketika mereka kemungkinan akan dirawat di ICU. Pasien-pasien ini mungkin mengalami lebih banyak sakit perut dan kehilangan nafsu makan dibandingkan pasien dengan kasus yang lebih ringan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq & Symptoms Section End -->

    <!-- Hand Wash Section Start -->
    <section id="handwash" class="handwash-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h6 class="small-title">IKUTI STEP NYA DAN CUCI TANGANMU</h6>
                    <h2>STEP BY STEP CARA MENCUCI TANGAN</h2>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="handwash-box">
                        <div class="handwash-icon">
                            <img src="assets/img/hand-icon/hand-1.png" alt="hand-icon" />
                        </div>
                        <div class="handwash-title">
                            <h6>Gunakan Sabun</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="handwash-box">
                        <div class="handwash-icon">
                            <img src="assets/img/hand-icon/hand-2.png" alt="hand-icon" />
                        </div>
                        <div class="handwash-title">
                            <h6>Gosok Telapak Tangan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="handwash-box">
                        <div class="handwash-icon">
                            <img src="assets/img/hand-icon/hand-3.png" alt="hand-icon" />
                        </div>
                        <div class="handwash-title">
                            <h6>Gosok Belakang Tangan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="handwash-box">
                        <div class="handwash-icon">
                            <img src="assets/img/hand-icon/hand-4.png" alt="hand-icon" />
                        </div>
                        <div class="handwash-title">
                            <h6>Gosok Sela-sela Jari</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="handwash-box">
                        <div class="handwash-icon">
                            <img src="assets/img/hand-icon/hand-5.png" alt="hand-icon" />
                        </div>
                        <div class="handwash-title">
                            <h6>Gosok Pergelangan Tangan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-mb-5 col-sm-4 col-lg-2">
                    <div class="handwash-box">
                        <div class="handwash-icon">
                            <img src="assets/img/hand-icon/hand-6.png" alt="hand-icon" />
                        </div>
                        <div class="handwash-title">
                            <h6>Bersihkan Dengan Air</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hand Wash Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-12 section-title">
                    <h6 class="small-title">BERITA TERBARU COVID-19</h6>
                    <h2>DATA PENYEBARAN COVID-19</h2>
                </div>
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12">
                            <div class="day-by-day-symptoms">
                                <div class="text-center mb-2">
                                    <h4>Data Penyebaran Virus Corona Di Indonesia Berdasarkan Provinsi</h4>
                                </div>
                                <div class="active-cyan-4 mt-3 mb-3">
                                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="search-prov">
                                </div>
                                <div class="table-wrapper">
                                    <table class="table table-bordered mt-1">
                                        <thead> 
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Positif</th>
                                                <th>Sembuh</th>
                                                <th>Meninggal</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-data">

                                        </tbody>
                                    </table>
                                </div>
                                <p>*Source : <i><a href="https://kawalcorona.com/api/">Kawalcorona.com</a></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12">
                            <div class="day-by-day-symptoms">
                                <div class="text-center mb-2">
                                    <h4>Data Penyebaran Virus Corona Di Berbagai Negara</h4>
                                </div>
                                <div class="active-cyan-4 mt-3 mb-3">
                                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="search-world">
                                </div>
                                <div class="table-wrapper">
                                    <table class="table table-bordered mt-1">
                                        <thead> 
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Positif</th>
                                                <th>Sembuh</th>
                                                <th>Meninggal</th>
                                                <th>Update Terakhir</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-id">

                                        </tbody>
                                    </table>
                                </div>
                                <p>*Source : <i><a href="https://kawalcorona.com/api/">Kawalcorona.com</a></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="day-by-day-symptoms">
                                <div class="text-center mb-2">
                                    <h4>Data Penyebaran Virus Corona Di Indonesia</h4>
                                </div>
                                <div class="active-cyan-4 mt-3 mb-3">
                                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="search-indo">
                                </div>
                                <div class="table-wrapper">
                                    <table class="table table-bordered mt-1">
                                        <thead> 
                                            <tr>
                                                <th>No</th>
                                                <th>Negara</th>
                                                <th>Positif</th>
                                                <th>Sembuh</th>
                                                <th>Meninggal</th>
                                                <th>Tanggal Update</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-datas">

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
    <!-- Blog Section End -->

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