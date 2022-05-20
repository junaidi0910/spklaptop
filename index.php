<!DOCTYPE html>
<html lang="en">
    <?php require "layout/head.php";?>

    <body>
        <div class="p-3 mb-2 bg-info text-dark" id="app">
            <?php require "layout/sidebar.php";?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3 class="text-dark">Dashboard</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>SPK Pembelian Laptop Menggunakan 
                                        Metode SAW (Simple Additive Weighting) Berbasis Web</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                        Sistem Pendukung Keputusan (SPK) atau Decision Support Systems (DSS) merupakan 
                                        salah satu bagian dari sistem informasi berbasis komputer yang dipakai untuk mendukung pengambilan 
                                        keputusan dalam suatu organisasi atau perusahaan. Konsep dasar metode SAW adalah mencari
                                         penjumlahan terbobot dari rating kinerja pada setiap alternatif dari semua atribut 
                                         (Fishburn, 1967) [3]. Skor total untuk alternatif diperoleh dengan menjumlahkan seluruh 
                                         hasil perkalian antara rating (yang dapat dibandingkan lintas atribut) dan bobot tiap atribut.
                                          Rating tiap atribut haruslah bebas dimensi dalam arti telah melewati proses normalisasi 
                                          matriks sebelumnya. (bundet, 2020)
                                        </p>
                                        <hr>
                                        <p class="card-text">
                                            Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut
                                            :
                                        </p>
                                        <ol type="1">
                                            <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan
                                                keputusan, yaitu Ci</i>
                                            <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria (X).
                                            </li>
                                            <li>Membuat matriks keputusan berdasarkan kriteria(Ci), kemudian melakukan
                                                normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis
                                                atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh
                                                matriks ternormalisasi R.</li>
                                            <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari
                                                perkalian matriks ternormalisasi R dengan vektor bobot sehingga
                                                diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik
                                                (Ai)sebagai solusi</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php require "layout/footer.php";?>
            </div>
        </div>
        <?php require "layout/js.php";?>
    </body>

</html>