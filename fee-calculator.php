php
<?php
// Data kursus
$courseName = "Laravel Fundamental";
$feePerParticipant = 2500000;
$participantCount = 3;
$discountPercent = 10;
$adminFee = 50000;

// Menghitung biaya kursus
$subtotal = $feePerParticipant * $participantCount;
$discount = $subtotal * $discountPercent / 100;
$total = $subtotal - $discount + $adminFee;

// Format rupiah
function rupiah($amount) {
    return "Rp " . number_format($amount, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator Biaya Kursus</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 35px;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #9d174d;
            background:
                radial-gradient(
                    circle at 90% 10%,
                    #ff80bd 0%,
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #fff0f7,
                    #ffc1df,
                    #ff80bd
                );
            background-attachment: fixed;
        }

        .container {
            max-width: 850px;
            margin: 0 auto;
        }

        .judul {
            text-align: center;
            color: #be185d;
            font-size: 34px;
            font-weight: 800;
            margin-bottom: 10px;
            text-shadow: 2px 3px 5px #f9a8d4;
        }

        .subjudul {
            text-align: center;
            color: #9d174d;
            margin-bottom: 30px;
            font-size: 15px;
        }

        .card {
            max-width: 600px;
            margin: 0 auto;
            padding: 25px;
            background: linear-gradient(
                145deg,
                #ffe4f1,
                #ffc4e0
            );
            border: 2px solid #f472b6;
            border-radius: 22px;
            box-shadow: 0 12px 30px
                rgba(190, 24, 93, 0.20);
        }

        .label-kursus {
            display: inline-block;
            padding: 8px 15px;
            margin-bottom: 18px;
            border-radius: 20px;
            background: #f9a8d4;
            color: #831843;
            font-size: 13px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            overflow: hidden;
            border: 1px solid #f472b6;
            border-radius: 12px;
        }

        td {
            padding: 15px 12px;
            font-size: 15px;
            border-bottom: 1px solid #f9a8d4;
            color: #9d174d;
            background: rgba(255, 240, 247, 0.65);
        }

        td:first-child {
            width: 48%;
            font-weight: 600;
            border-right: 1px solid #f9a8d4;
        }

        tr:first-child td {
            background: #f9a8d4;
            color: #831843;
            font-weight: bold;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #fbcfe8;
            transition: 0.3s;
        }

        .total td {
            background: linear-gradient(
                135deg,
                #f9a8d4,
                #f472b6
            );
            color: #831843;
            font-size: 18px;
            font-weight: 800;
        }

        .catatan {
            margin-top: 22px;
            padding: 15px;
            text-align: center;
            background: #fbcfe8;
            color: #9d174d;
            border-radius: 12px;
            font-size: 13px;
            border: 1px solid #f9a8d4;
        }

        .hiasan {
            text-align: center;
            font-size: 25px;
            margin-top: 20px;
        }

        footer {
            text-align: center;
            margin-top: 25px;
            font-size: 12px;
            color: #9d174d;
        }

        @media (max-width: 600px) {
            body {
                padding: 18px 12px;
            }

            .judul {
                font-size: 27px;
            }

            .card {
                padding: 15px;
            }

            td {
                padding: 12px 8px;
                font-size: 13px;
                overflow-wrap: anywhere;
            }

            .total td {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <h1 class="judul">
            💗 Kalkulator Biaya Kursus
        </h1>

        <p class="subjudul">
            Hitung biaya kursus dengan mudah dan praktis ✨
        </p>

        <div class="card">

            <div class="label-kursus">
                ✨ RINCIAN BIAYA KURSUS
            </div>

            <table>
                <tr>
                    <td>Nama kursus</td>
                    <td><?= htmlspecialchars($courseName) ?></td>
                </tr>

                <tr>
                    <td>Biaya per peserta</td>
                    <td><?= rupiah($feePerParticipant) ?></td>
                </tr>

                <tr>
                    <td>Jumlah peserta</td>
                    <td><?= $participantCount ?> orang</td>
                </tr>

                <tr>
                    <td>Subtotal</td>
                    <td><?= rupiah($subtotal) ?></td>
                </tr>

                <tr>
                    <td>Diskon <?= $discountPercent ?>%</td>
                    <td><?= rupiah($discount) ?></td>
                </tr>

                <tr>
                    <td>Biaya admin</td>
                    <td><?= rupiah($adminFee) ?></td>
                </tr>

                <tr class="total">
                    <td>Total akhir 💕</td>
                    <td><?= rupiah($total) ?></td>
                </tr>
            </table>

            <div class="catatan">
                🌸 Terima kasih telah menggunakan
                Kalkulator Biaya Kursus 🌸
            </div>

            <div class="hiasan">
                🎀 💗 ✨ 💗 🎀
            </div>

        </div>

        <footer>
            &copy; <?= date("Y") ?> Kursusku Prototype
        </footer>

    </div>

</body>
</html>
