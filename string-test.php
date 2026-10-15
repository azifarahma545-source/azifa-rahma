```php
<?php
$teks = " Laravel Fundamental ";
$hasilTrim = trim($teks);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Test - Kursusku</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #9d174d;
            background: linear-gradient(
                135deg,
                #ffe4f1,
                #ffc1df,
                #ff8fc7,
                #ffb6d9
            );
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
                #ffb6d9,
                #ffe4f1,
                #ffacd2
            );
            border-bottom: 2px solid #ff80b8;
            box-shadow: 0 5px 18px #d6338425;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            color: #d81b70;
        }

        .sapaan {
            color: #a41355;
            font-weight: 600;
        }

        nav {
            padding: 15px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            background: #ffc1df;
            border-bottom: 1px solid #ff91bf;
        }

        nav a {
            text-decoration: none;
            color: #b51d60;
            padding: 11px 18px;
            border-radius: 25px;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            background: #ec4899;
            color: white;
            transform: translateY(-2px);
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .judul {
            text-align: center;
            font-size: 36px;
            color: #c21865;
            margin-bottom: 12px;
            text-shadow: 2px 3px 5px #f9a8d4;
        }

        .deskripsi {
            text-align: center;
            margin-bottom: 30px;
            color: #9d174d;
            line-height: 1.7;
        }

        .card {
            padding: 28px;
            border: 2px solid #f472b6;
            border-radius: 24px;
            background: linear-gradient(
                145deg,
                #ffc9e1,
                #ffafd3,
                #ffcae2
            );
            box-shadow: 0 12px 30px #be185d30;
        }

        .card-title {
            display: inline-block;
            padding: 13px 22px;
            margin-bottom: 25px;
            border-radius: 15px;
            color: white;
            background: linear-gradient(
                135deg,
                #fb7185,
                #ec4899,
                #db2777
            );
            font-size: 18px;
            font-weight: 800;
            box-shadow: 0 5px 12px #be185d30;
        }

        .hasil-box {
            margin-bottom: 25px;
        }

        .label {
            display: inline-block;
            padding: 12px 18px;
            margin-bottom: 12px;
            border-radius: 25px;
            background: linear-gradient(
                135deg,
                #ffb6d9,
                #ff8fc7
            );
            color: #9d174d;
            font-weight: 800;
        }

        .output {
            padding: 20px;
            border: 2px dashed #f472b6;
            border-radius: 15px;
            background: linear-gradient(
                135deg,
                #ffd6e9,
                #ffb6d9
            );
            color: #be185d;
            font-family: Consolas, monospace;
            font-size: 17px;
            overflow-wrap: anywhere;
        }

        .kesimpulan {
            padding: 20px;
            margin-top: 15px;
            border: 1px solid #f472b6;
            border-radius: 16px;
            background: linear-gradient(
                135deg,
                #ffb6d9,
                #ff8fc7
            );
            text-align: center;
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
            border-top: 2px solid #ff80b8;
        }

        @media (max-width: 600px) {
            header {
                padding: 18px;
            }

            .judul {
                font-size: 27px;
            }

            .card {
                padding: 18px;
            }

            .output {
                font-size: 14px;
                padding: 15px;
            }

            nav a {
                padding: 9px 12px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">💗 Kursusku</div>
        <div class="sapaan">Halo, selamat belajar! ♡</div>
    </header>

    <nav>
        <a href="index.php">⌂ Beranda</a>
        <a href="index.php">♡ Kursus</a>
        <a href="register.php">✎ Pendaftaran</a>
        <a href="index.php">▤ Ringkasan</a>
    </nav>

    <main>
        <h1 class="judul">
            💗 Pengujian Fungsi trim() 💗
        </h1>

        <p class="deskripsi">
            Halaman ini digunakan untuk menguji fungsi trim()
            pada bahasa pemrograman PHP. ✨
        </p>

        <section class="card">

            <div class="card-title">
                🎀 Hasil Pengujian
            </div>

            <div class="hasil-box">
                <div class="label">
                    ☁️ Sebelum trim():
                </div>

                <div class="output">[<?= htmlspecialchars($teks) ?>]</div>
            </div>

            <div class="hasil-box">
                <div class="label">
                    🌸 Sesudah trim():
                </div>

                <div class="output">[<?= htmlspecialchars($hasilTrim) ?>]</div>
            </div>

            <div class="kesimpulan">
                <strong>✨ Kesimpulan ✨</strong><br>
                Fungsi trim() menghapus spasi di awal dan akhir
                teks tanpa mengubah spasi di antara kata.
            </div>

            <div class="hiasan">
                🎀 💕 🌸 ✨ 💗
            </div>

        </section>
    </main>

    <footer>
        &copy; <?= date("Y") ?> Kursusku Prototype
        💗 Belajar hari ini, berhasil esok hari!
    </footer>

</body>
</html>
```