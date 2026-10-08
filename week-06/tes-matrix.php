<?php
$siteName = 'KursusKu';
$year = date('Y');

$testMatrix = [
    [
        'no' => 1,
        'scenario' => 'Mahasiswa, Web Dasar, 1 paket',
        'expected' => 'Total Rp240.000',
    ],
    [
        'no' => 2,
        'scenario' => 'Guru, PHP Dasar, 1 paket',
        'expected' => 'Total Rp340.000',
    ],
    [
        'no' => 3,
        'scenario' => 'Umum, Laravel Dasar, 1 paket',
        'expected' => 'Total Rp500.000',
    ],
    [
        'no' => 4,
        'scenario' => 'Mahasiswa, Web Dasar, 2 paket',
        'expected' => 'Total Rp480.000',
    ],
    [
        'no' => 5,
        'scenario' => 'Nama kosong',
        'expected' => 'Muncul pesan nama wajib diisi',
    ],
    [
        'no' => 6,
        'scenario' => 'Email bukan format email',
        'expected' => 'Muncul pesan email tidak valid',
    ],
    [
        'no' => 7,
        'scenario' => 'Tidak memilih minat',
        'expected' => 'Tidak ada warning; tampil "Belum memilih minat"',
    ],
    [
        'no' => 8,
        'scenario' => 'Pilih 3 minat',
        'expected' => 'Ketiga pilihan tampil pada ringkasan',
    ],
    [
        'no' => 9,
        'scenario' => 'Metode offline',
        'expected' => 'Label "Tatap Muka"',
    ],
    [
        'no' => 10,
        'scenario' => 'Metode hybrid',
        'expected' => 'Label "Hybrid"',
    ],
    [
        'no' => 11,
        'scenario' => 'Buka process.php langsung dengan GET',
        'expected' => 'Kembali/redirect ke register.php',
    ],
    [
        'no' => 12,
        'scenario' => 'Tambah satu fasilitas di array',
        'expected' => 'Item baru tampil otomatis melalui loop',
    ],
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Matrix - <?= htmlspecialchars($siteName) ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --pink: #d85c8a;
            --pink-dark: #b94370;
            --pink-light: #ffe4ed;
            --pink-soft: #fff0f5;
            --text: #3d2932;
            --muted: #806a73;
            --border: #efd5df;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            background: linear-gradient(135deg, #fff0f5, #fff8fa);
            line-height: 1.6;
        }

        .container {
            width: min(1100px, 92%);
            margin: auto;
        }

        /* HEADER */
        .site-header {
            background: linear-gradient(
                90deg,
                #ffe4ed,
                #fff0f5
            );
            border-bottom: 1px solid var(--border);
            box-shadow: 0 4px 15px rgba(216, 92, 138, .10);
        }

        .nav-wrap {
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            text-decoration: none;
            color: var(--pink-dark);
            font-weight: 800;
            font-size: 20px;
        }

        .brand i {
            color: var(--pink);
            margin-right: 7px;
        }

        .nav-links {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--pink-dark);
            padding: 8px 12px;
            border-radius: 10px;
            font-weight: 600;
            transition: .3s;
        }

        .nav-links a:hover {
            background: white;
            color: var(--pink);
        }

        /* MAIN */
        main {
            padding: 40px 0 60px;
        }

        .page-header {
            margin-bottom: 25px;
        }

        .eyebrow {
            display: inline-block;
            color: var(--pink-dark);
            background: var(--pink-light);
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .page-header h1 {
            margin: 0;
            color: var(--text);
            font-size: 32px;
        }

        .page-header h1 i {
            color: var(--pink);
            margin-right: 8px;
        }

        .page-header p {
            color: var(--muted);
            margin-top: 8px;
        }

        /* CARD */
        .matrix-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(216, 92, 138, .13);
        }

        .matrix-card-header {
            padding: 18px 22px;
            background: var(--pink-light);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .matrix-card-header i {
            color: var(--pink-dark);
            font-size: 20px;
        }

        .matrix-card-header strong {
            color: var(--pink-dark);
        }

        /* TABLE */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            border-bottom: 1px solid var(--border);
            text-align: left;
        }

        th {
            background: #fff0f5;
            color: #7d3953;
            font-weight: 700;
        }

        th:first-child,
        td:first-child {
            text-align: center;
            width: 70px;
        }

        tr:hover td {
            background: #fff9fb;
        }

        /* STATUS */
        .status-select {
            padding: 8px 10px;
            border: 1px solid #e2b8c8;
            border-radius: 9px;
            background: white;
            color: var(--text);
            cursor: pointer;
        }

        .status-select:focus {
            outline: none;
            border-color: var(--pink);
            box-shadow: 0 0 0 3px rgba(216, 92, 138, .12);
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 20px;
            color: var(--muted);
            border-top: 1px solid var(--border);
            background: #fff0f5;
        }

        /* MOBILE */
        @media (max-width: 700px) {

            .nav-wrap {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px 0;
            }

            .nav-links {
                width: 100%;
            }

            .page-header h1 {
                font-size: 26px;
            }

            th,
            td {
                padding: 12px;
                font-size: 14px;
            }

            table {
                min-width: 800px;
            }
        }
    </style>
</head>

<body>

<header class="site-header">
    <div class="container nav-wrap">

        <a href="index.php" class="brand">
            <i class="fa-solid fa-heart"></i>
            <?= htmlspecialchars($siteName) ?>
        </a>

        <nav class="nav-links">

            <a href="index.php">
                <i class="fa-solid fa-house"></i>
                Beranda
            </a>

            <a href="register.php">
                <i class="fa-solid fa-user-plus"></i>
                Pendaftaran
            </a>

            <a href="catalog.php">
                <i class="fa-solid fa-book"></i>
                Katalog
            </a>

            <a href="test-matrix.php">
                <i class="fa-solid fa-list-check"></i>
                Test Matrix
            </a>

        </nav>

    </div>
</header>


<main>

    <div class="container">

        <section class="page-header">

            <span class="eyebrow">
                <i class="fa-solid fa-flask"></i>
                Pengujian Sistem
            </span>

            <h1>
                <i class="fa-solid fa-clipboard-check"></i>
                Test Matrix Wajib
            </h1>

            <p>
                Jangan menyatakan proyek selesai hanya karena satu contoh berhasil.
                Jalankan skenario berikut dan catat hasil aktual.
            </p>

        </section>


        <section class="matrix-card">

            <div class="matrix-card-header">

                <i class="fa-solid fa-table-list"></i>

                <strong>
                    Skenario Pengujian KursusKu
                </strong>

            </div>


            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Skenario</th>
                            <th>Hasil yang Diharapkan</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($testMatrix as $test): ?>

                            <tr>

                                <td>
                                    <?= $test['no'] ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($test['scenario']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($test['expected']) ?>
                                </td>

                                <td>

                                    <select class="status-select">
                                        <option value="">Pilih</option>
                                        <option value="pass">
                                            PASS
                                        </option>
                                        <option value="fail">
                                            FAIL
                                        </option>
                                    </select>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </section>

    </div>

</main>


<footer>
    <small>
        <i class="fa-solid fa-heart icon-pink"></i>
        &copy; <?= $year ?> <?= htmlspecialchars($siteName) ?>
    </small>
</footer>

</body>
</html>