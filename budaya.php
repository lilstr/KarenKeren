<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Dusun Karen - Desa Wisata Budaya</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <!-- Navigation -->
<header class="navbar">
    <div class="container">
        <div class="logo">
            <!-- Logo gambar di samping judul -->
            <img src="assets/images/logo.png" alt="Logo Dusun Karen" class="logo-image">
            <div class="logo-text">
                <h1>Dusun Karen</h1>
                <p>Desa Surojoyo Kecamatan Candimulyo</p>
            </div>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php" class="active"><i class="fas fa-home"></i> Beranda</a></li>
                <li><a href="profil.php"><i class="fas fa-info-circle"></i> Profil</a></li>
                <li><a href="galeri.php"><i class="fas fa-images"></i> Galeri</a></li>
                <li><a href="umkm.php"><i class="fas fa-store"></i> UMKM</a></li>
                <li><a href="budaya.php"><i class="fas fa-monument"></i> Budaya</a></li>
                <li><a href="kontak.php"><i class="fas fa-envelope"></i> Kontak</a></li>
            </ul>
        </nav>
        <div class="mobile-menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</header>

    <!-- Culture Hero Section -->
    <section class="page-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/sec-hero.jpg');">
        <div class="container">
            <h1 class="animate__animated animate__fadeInDown">Budaya Dusun Karen</h1>
            <p class="animate__animated animate__fadeInUp animate__delay-1s">Melestarikan warisan leluhur untuk generasi mendatang</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        <!-- Culture Introduction -->
        <section class="culture-intro animate__animated animate__fadeIn">
            <div class="section-header">
                <h2><i class="fas fa-archway"></i> Keberagaman Budaya</h2>
                <div class="section-divider"></div>
            </div>
            <p>Mayoritas penduduk Dusun Karen menganut agama Islam dan menjalankan aktivitas keagamaan dengan cukup aktif, baik dalam kegiatan harian maupun keagamaan bersama seperti pengajian, peringatan hari besar Islam, serta pendidikan keagamaan bagi anak-anak. Meskipun begitu, terdapat satu keluarga pendatang yang menganut agama Kristen dan tinggal secara kontrak di dusun ini. Masyarakat Dusun Karen tetap menjaga sikap saling menghormati dan menjunjung tinggi nilai-nilai toleransi antarumat beragama, sehingga suasana kehidupan sosial berjalan dengan harmonis dan damai.</p>
        </section>

        <!-- Culture Categories -->
        <section class="culture-categories animate__animated animate__fadeIn">
            <div class="category-tabs">
                <button class="tab-btn active" data-category="all">Semua</button>
                <button class="tab-btn" data-category="upacara">Adat Istiadat</button>
                <button class="tab-btn" data-category="tarian">Tarian</button>
                <button class="tab-btn" data-category="kerajinan">Kerajinan</button>
                <button class="tab-btn" data-category="kuliner">Kuliner</button>
            </div>
        </section>

        <!-- Culture Grid (statis) -->
        <div class="culture-grid">
            <div class="culture-card animate__animated animate__fadeIn" data-category="upacara">
                <div class="culture-image">
                    <img src="assets/images/budaya1.jpg" alt="Pengajian Yasinan">
                    <div class="culture-category">Upacara Adat</div>
                </div>
                <div class="culture-content">
                    <h3>Pengajian Yasinan</h3>
                    <p>Pengajian rutin setiap malam tertentu</p>
                </div>
            </div>
            <div class="culture-card animate__animated animate__fadeIn" data-category="upacara">
                <div class="culture-image">
                    <img src="assets/images/budaya2.jpg" alt="Nariahan dan Mujahadah">
                    <div class="culture-category">Tarian</div>
                </div>
                <div class="culture-content">
                    <h3>Nariahan dan Mujahadah</h3>
                    <p>Nariahan dan mujahadah rutin untuk ibu ibu warga Dusun Karen</p>
                </div>
            </div>
            <div class="culture-card animate__animated animate__fadeIn" data-category="kesenian">
                <div class="culture-image">
                    <img src="assets/images/budaya3.jpg" alt="Kobro Dangdut">
                    <div class="culture-category">Kesenian</div>
                </div>
                <div class="culture-content">
                    <h3>Kobro Dangdut</h3>
                    <p>Pagelaran kesenian brodut RT.03 Dusun Karen</p>
                </div>
            </div>
                        <div class="culture-card animate__animated animate__fadeIn" data-category="kesenian">
                <div class="culture-image">
                    <img src="assets/images/budaya4.jpg" alt="Warokan">
                    <div class="culture-category">Kesenian</div>
                </div>
                <div class="culture-content">
                    <h3>Warokan</h3>
                    <p>Pagelaran kesenian Warokan RT.01 Dusun Karen</p>
                </div>
            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Tentang Dusun Karen</h4>
                    <p>Dusun Karen adalah desa wisata yang kaya akan budaya dan keindahan alam. Kami mempertahankan tradisi sambil berkembang bersama zaman.</p>
                </div>
                <div class="footer-col">
                    <h4>Link Cepat</h4>
                    <ul>
                        <li><a href="profil.php">Profil Desa</a></li>
                        <li><a href="berita.php">Berita Terkini</a></li>
                        <li><a href="galeri.php">Galeri Foto</a></li>
                        <li><a href="kontak.php">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Kontak</h4>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> Dusun Karen, Desa Surojoyo, Kecamatan Candimulyo, Kabupaten Magelang, Jawa Tengah</li>
                        <li><i class="fas fa-phone"></i> +62 821-4521-9022</li>
                        <li><i class="fas fa-envelope"></i> desasurojoyo.magelangkab.go.id</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Sosial Media</h4>
                    <div class="social-links">
                        <a href="https://www.instagram.com/forji.4g?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; LS 2025 Dusun Karen. KKN UPN Veteran Yogyakarta.</p>
                <p> All Rights Reserved.</p>
            </div>
        </div>
    </footer>


    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            document.querySelector('.main-nav ul').classList.toggle('show');
        });

        // Culture Category Filter
        const tabBtns = document.querySelectorAll('.tab-btn');
        const cultureCards = document.querySelectorAll('.culture-card');
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Update active tab
                tabBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Filter culture cards
                const category = this.dataset.category;
                cultureCards.forEach(card => {
                    if(category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>