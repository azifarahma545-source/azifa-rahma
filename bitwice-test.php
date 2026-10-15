
<?php
// Menentukan hak akses
$READ = 1;
$WRITE = 2;
$DELETE = 4;

// Menggabungkan izin READ dan WRITE
$permission = $READ | $WRITE;

// Memeriksa setiap hak akses
$canRead = ($permission & $READ) == $READ;
$canWrite = ($permission & $WRITE) == $WRITE;
$canDelete = ($permission & $DELETE) == $DELETE;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bitwise Test - Kursusku</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #831843;
            background: linear-gradient(
                135deg,
                #ffe4f1,
                #ffc1df,
                #ff91c5,
                #ffb6d9
            );
            background-attachment: fixed;
        }

        header {
            padding: 22px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            background: linear-gradient(
                90deg,
                #ffadd2,
                #ffd6e9,
                #ffacd2
            );
            border-bottom: 2px solid #f472b6;
            box-shadow: 0 5px 18px #be185d25;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            color: #be185d;
        }

        .sapaan {
            font-weight: 600;
            color: #9d174d;
        }

        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            padding: 15px;
            background: #ffc1df;
            border-bottom: 1px solid #f9a8d4;
        }

        nav a {
            text-decoration: none;
            color: #9d174d;
            font-weight: bold;
            padding: 10px 17px;
            border-radius: 25px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #ffffff;
            background: #db2777;
            transform: translateY(-2px);
        }

        main {
            width: 100%;
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .judul {
            text-align: center;
            font-size: 35px;
            color: #be185d;
            margin-bottom: 12px;
            text-shadow: 2px 3px 5px #f9a8d4;
        }

        .deskripsi {
            text-align: center;
            line-height: 1.7;
            margin-bottom: 28px;
            color: #9d174d;
        }

        .card {
            padding: 28px;
            border: 2px solid #f472b6;
            border-radius: 24px;
            background: linear-gradient(
                145deg,
                #ffc9e1,
                #ffafd3,
                #ffd6e9
            );
            box-shadow: 0 12px 30px #be185d30;
        }

        .card-title {
            display: inline-block;
            padding: 12px 20px;
            margin-bottom: 22px;
            border-radius: 15px;
            color: #ffffff;
            background: linear-gradient(
                135deg,
                #f472b6,
                #db2777
            );
            font-size: 18px;
            font-weight: 800;
            box-shadow: 0 5px 12px #be185d25;
        }

        .item {
            margin-bottom: 16px;
            padding: 18px;
            border-radius: 15px;
            border: 1px solid #f9a8d4;
            background: linear-gradient(
                135deg,
                #ffd6e9,
                #ffb6d9
            );
            transition: 0.3s;
        }

        .item:hover {
            transform: translateY(-2px);
            border-color: #ec4899;
            box-shadow: 0 5px 12px #be185d20;
        }

        .label {
            margin-bottom: 9px;
            font-weight: 800;
            color: #9d174d;
        }

        .angka {
            font-family: Consolas, monospace;
            font-size: 20px;
            font-weight: bold;
            color: #be185d;
        }

        .status {
            display: inline-block;
            margin-top: 10px;
            padding: 7px 15px;
            border-radius: 20px;
            background: #f9a8d4;
            color: #831843;
            font-weight: bold;
        }

        .status-tidak {
            background: #fbcfe8;
            color: #9d174d;
            border: 1px solid #f472b6;
        }

        .kesimpulan {
            margin-top: 22px;
            padding: 20px;
            border-radius: 16px;
            border: 1px solid #f472b6;
            background: linear-gradient(
                135deg,
                #ffb6d9,
                #ff91c5
            );
            line-height: 1.8;
            color: #831843;
        }

        .hiasan {
            margin-top: 22px;
            text-align: center;
            font-size: 25px;
        }

        footer {
            margin-top: 40px;
            padding: 22px;
            text-align: center;
            color: #9d174d;
            background: linear-gradient(
                90deg,
                #ffacd2,
                #ffd6e9,
                #ffacd2
            );
            border-top: 2px solid #f472b6;
        }

        @media (max-width: 600px) {
            header {
                padding: 18px;
            }

            .judul {
                font-size: 27px;
            }

            .card {
                padding: 17px;
            }

            .angka {
                font-size: 17px;
            }

            nav a {
                padding: 8px 12px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">💗 Kursusku</div>
        <div class="sapaan">Belajar dengan menyenangkan ✨</div>
    </header>

    <nav>
        <a href="index.php">⌂ Beranda</a>
        <a href="index.php">♡ Kursus</a>
        <a href="register.php">✎ Pendaftaran</a>
        <a href="history.php">▤ Riwayat</a>
    </nav>

    <main>

        <h1 class="judul">
            💗 Pengujian Bitwise 💗
        </h1>

        <p class="deskripsi">
            Pengujian hak akses menggunakan operator bitwise
            pada bahasa pemrograman PHP.
        </p>

        <section class="card">

            <div class="card-title">
                🎀 Hasil Pengujian Hak Akses
            </div>

            <div class="item">
                <div class="label">🔎 Izin READ</div>
                <div class="angka"><?= $READ ?></div>
                <span class="status">
                    <?= $canRead ? '✓ Aktif' : 'Tidak Aktif' ?>
                </span>
            </div>

            <div class="item">
                <div class="label">✏️ Izin WRITE</div>
                <div class="angka"><?= $WRITE ?></div>
                <span class="status">
                    <?= $canWrite ? '✓ Aktif' : 'Tidak Aktif' ?>
                </span>
            </div>

            <div class="item">
                <div class="label">🗑️ Izin DELETE</div>
                <div class="angka"><?= $DELETE ?></div>
                <span class="status status-tidak">
                    <?= $canDelete ? '✓ Aktif' : '✕ Tidak Aktif' ?>
                </span>
            </div>

            <div class="item">
                <div class="label">🔢 Nilai $permission</div>
                <div class="angka"><?= $permission ?></div>
                <p style="margin-top: 8px;">
                    READ | WRITE = 1 | 2 = 3
                </p>
            </div>

            <div class="item">
                <div class="label">💗 Nilai $canDelete</div>
                <div class="angka">
                    <?= $canDelete ? 'true' : 'false' ?>
                </div>
            </div>

            <div class="kesimpulan">
                <strong>✨ Kesimpulan Pengujian</strong><br>
                Operator bitwise OR (|) menggabungkan izin
                READ dan WRITE sehingga nilai $permission
                adalah 3. Karena izin DELETE tidak digabungkan,
                maka nilai $canDelete adalah false.
                <br><br>
                <strong>Jawaban soal nomor 11: C</strong>
            </div>

            <div class="hiasan">
                🎀 💕 🌸 ✨ 💗
            </div>

        </section>
    </main>

    <footer>
        &copy; <?= date('Y') ?> Kursusku Prototype
        💗 Belajar hari ini, berkembang setiap hari!
    </footer>

</body>
</html>
