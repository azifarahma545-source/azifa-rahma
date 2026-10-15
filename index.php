<?php
require __DIR__ . '/data.php';

$siteName = 'KursusKu';
$tagline = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';
$year = date('Y');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteName) ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<header>
    <nav aria-label="Navigasi utama">
        <a href="index.php" class="brand">
            <i class="fa-solid fa-heart"></i>
            <strong><?= htmlspecialchars($siteName) ?></strong>
        </a>

        <a href="#hero">Beranda</a>
        <a href="#keunggulan">Keunggulan</a>
        <a href="#fasilitas">Fasilitas</a>
        <a href="#katalog">Katalog</a>
        <a href="#alur">Cara Daftar</a>
        <a href="#media">Media</a>
        <a href="#kontak">Kontak</a>
    </nav>
</header>

<main>

    <!-- BERANDA -->
    <section id="hero">
        <div class="hero-content">
            <p class="hero-badge">
                ✨ BELAJAR JADI LEBIH MENYENANGKAN
            </p>

            <h1>
                Mulai Perjalanan Belajarmu
                <span>Bersama KursusKu</span>
            </h1>

            <p class="hero-description">
                Tingkatkan kemampuan digitalmu melalui program
                pembelajaran yang praktis, menarik, dan mudah dipahami.
                Pilih kursus yang sesuai dengan minatmu dan mulai belajar
                bersama kami.
            </p>

            <div class="hero-buttons">
                <a href="#katalog" class="btn-main">
                    Lihat Katalog Kursus →
                </a>

                <a href="register.php" class="btn-outline">
                    Daftar Kursus
                </a>
            </div>

            <div class="hero-stats">
                <div>
                    <strong>6+</strong>
                    <small>Kursus Pilihan</small>
                </div>
                <div>
                    <strong>Praktis</strong>
                    <small>Materi Pembelajaran</small>
                </div>
                <div>
                    <strong>Fleksibel</strong>
                    <small>Metode Belajar</small>
                </div>
            </div>
        </div>

        <div class="hero-image">
            <img
                src="assets/images/hero-beranda.jpg"
                alt="Kegiatan belajar kursus komputer"
                onerror="this.style.display='none';"
            >

            <div class="image-caption">
                ✨ Kegiatan Kursus Komputer
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN -->
    <section id="keunggulan">
        <h2>Mengapa Memilih KursusKu?</h2>

        <div class="feature-list">
            <article>
                <i class="fa-solid fa-book-open"></i>
                <h3>Materi Terarah</h3>
                <p>Materi disusun bertahap dari dasar hingga praktik.</p>
            </article>

            <article>
                <i class="fa-solid fa-laptop-code"></i>
                <h3>Belajar dengan Proyek</h3>
                <p>Latihan membantu peserta memahami materi secara langsung.</p>
            </article>

            <article>
                <i class="fa-solid fa-users"></i>
                <h3>Pendampingan Praktik</h3>
                <p>Belajar melalui demonstrasi, latihan, dan evaluasi.</p>
            </article>
        </div>
    </section>

    <!-- FASILITAS -->
    <section id="fasilitas">
        <h2>Fasilitas Pembelajaran</h2>
        <p>Fasilitas yang mendukung kegiatan belajar peserta.</p>

        <ul>
            <?php if (isset($facilities) && is_array($facilities)): ?>
                <?php foreach ($facilities as $facility): ?>
                    <li><?= htmlspecialchars((string) $facility) ?></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Materi pembelajaran digital</li>
                <li>Latihan praktik komputer</li>
                <li>Pendampingan pembelajaran</li>
            <?php endif; ?>
        </ul>
    </section>

    <!-- KATALOG KURSUS -->
<section id="katalog">
    <h2>Pilih Kursus Sesuai Minatmu</h2>
    <p>Temukan pilihan kursus berdasarkan biaya, tanggal mulai, dan ketersediaan kursi.</p>

    <div class="catalog-info">
        <div style="display:flex; align-items:center; gap:15px;">
            <div class="catalog-icon">📋</div>
            <div>
                <h3>6 Pilihan Kursus</h3>
                <p>Program pembelajaran KursusKu</p>
            </div>
        </div>

        <a href="register.php">Daftar Sekarang →</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Kursus</th>
                    <th>Biaya</th>
                    <th>Tanggal Mulai</th>
                    <th>Sisa Kursi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="course-code">WEB-01</td>
                    <td>Web Dasar</td>
                    <td class="course-price">Rp200.000</td>
                    <td>21-09-2026</td>
                    <td><span class="seat-count">18</span></td>
                    <td><span class="status status-available">● Tersedia</span></td>
                    <td><a href="register.php" class="btn-register">Daftar</a></td>
                </tr>

                <tr>
                    <td class="course-code">PHP-01</td>
                    <td>PHP Dasar</td>
                    <td class="course-price">Rp250.000</td>
                    <td>22-09-2026</td>
                    <td><span class="seat-count">12</span></td>
                    <td><span class="status status-available">● Tersedia</span></td>
                    <td><a href="register.php" class="btn-register">Daftar</a></td>
                </tr>

                <tr>
                    <td class="course-code">PHP-02</td>
                    <td>PHP Lanjutan</td>
                    <td class="course-price">Rp300.000</td>
                    <td>24-09-2026</td>
                    <td><span class="seat-count">1</span></td>
                    <td><span class="status status-available">● Tersedia</span></td>
                    <td><a href="register.php" class="btn-register">Daftar</a></td>
                </tr>

                <tr>
                    <td class="course-code">LAR-01</td>
                    <td>Laravel Fundamental</td>
                    <td class="course-price">Rp350.000</td>
                    <td>28-09-2026</td>
                    <td><span class="seat-count">0</span></td>
                    <td><span class="status status-full">● Penuh</span></td>
                    <td><span class="btn-disabled">Penuh</span></td>
                </tr>

                <tr>
                    <td class="course-code">DB-01</td>
                    <td>MySQL Dasar</td>
                    <td class="course-price">Rp275.000</td>
                    <td>01-10-2026</td>
                    <td><span class="seat-count">20</span></td>
                    <td><span class="status status-available">● Tersedia</span></td>
                    <td><a href="register.php" class="btn-register">Daftar</a></td>
                </tr>

                <tr>
                    <td class="course-code">UI-01</td>
                    <td>UI Web Dasar</td>
                    <td class="course-price">Rp225.000</td>
                    <td>03-10-2026</td>
                    <td><span class="seat-count">26</span></td>
                    <td><span class="status status-available">● Tersedia</span></td>
                    <td><a href="register.php" class="btn-register">Daftar</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <p class="catalog-note">
        * Informasi biaya, tanggal mulai, dan sisa kursi merupakan contoh data kursus.
    </p>
</section>

    <!-- CARA DAFTAR -->
    <section id="alur">
        <h2>Cara Mendaftar</h2>

        <ol>
            <li>Pilih kursus yang diminati.</li>
            <li>Klik tombol Daftar.</li>
            <li>Isi formulir pendaftaran.</li>
            <li>Periksa kembali data sebelum mengirim.</li>
        </ol>

        <a href="register.php" class="btn-main">
            Mulai Pendaftaran →
        </a>
    </section>

    <!-- MEDIA -->
    <section id="media">
        <h2>Kenali Program Kami</h2>

        <p>
            Lihat gambaran kegiatan pembelajaran dan kenali materi
            yang tersedia di KursusKu.
        </p>

        <div class="media-image">
            <img
                src="assets/images/hero-kursus.jpg"
                alt="Kegiatan peserta kursus komputer"
                width="300"
                onerror="this.style.display='none';"
            >
        </div>

        <h3>Video Singkat</h3>

        <video controls width="300">
            <source src="assets/video/intro-kursus.mp4" type="video/mp4">
            Browser kamu tidak mendukung pemutaran video.
        </video>

        <p>
            Pelajari juga
            <a href="https://www.php.net/"
               target="_blank"
               rel="noopener noreferrer">
                dokumentasi resmi PHP
            </a>.
        </p>
    </section>

    <!-- KONTAK -->
    <section id="kontak">
        <h2>Kontak</h2>
        <p>Email: kursusku@example.test</p>
        <p>Alamat: Laboratorium Komputer - data latihan</p>
    </section>

</main>

<footer>
    <small>
        &copy; <?= $year ?> <?= htmlspecialchars($siteName) ?>.
        Belajar dengan menyenangkan 💗
    </small>
</footer>

</body>
</html>