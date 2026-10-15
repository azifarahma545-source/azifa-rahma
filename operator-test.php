<?php
$fee = 350000;

$result = ($fee === 350000);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Operator Test</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(
                135deg,
                #fce4ec,
                #f8bbd0,
                #f48fb1
            );
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
            color: #762443;
        }

        .container {
            width: 100%;
            max-width: 650px;
            padding: 38px;
            background: rgba(255, 240, 246, 0.7);
            border: 1px solid #ed9fbd;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(150, 40, 85, 0.15);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 32px;
            color: #a51e58;
            margin-bottom: 12px;
        }

        .header p {
            color: #a34c70;
            font-size: 15px;
            line-height: 1.7;
        }

        .card {
            background: rgba(248, 187, 208, 0.45);
            border: 1px solid #efb0c8;
            border-radius: 14px;
            padding: 22px;
            margin-bottom: 20px;
        }

        .label {
            font-size: 14px;
            color: #984363;
            margin-bottom: 10px;
        }

        .code {
            background: #f7d5e2;
            color: #85264c;
            border-radius: 9px;
            padding: 15px;
            font-family: monospace;
            font-size: 16px;
            overflow-wrap: anywhere;
        }

        .result-title {
            font-size: 17px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .result-value {
            display: block;
            background: #d94f83;
            color: #fff0f6;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-family: monospace;
            font-size: 19px;
            font-weight: bold;
        }

        .status {
            margin-top: 20px;
            padding: 16px;
            border-radius: 10px;
            background: #f3c0d4;
            color: #81244b;
            text-align: center;
            line-height: 1.7;
        }

        .footer {
            text-align: center;
            color: #a34c70;
            font-size: 13px;
            margin-top: 25px;
        }

        @media (max-width: 480px) {
            .container {
                padding: 24px 18px;
            }

            .header h1 {
                font-size: 27px;
            }
        }
    </style>
</head>

<body>
    <main class="container">

        <header class="header">
            <h1>Operator Test</h1>
            <p>
                Pengujian operator perbandingan identik
                dalam PHP
            </p>
        </header>

        <section class="card">
            <div class="label">Nilai variabel $fee</div>
            <div class="code">
                $fee = <?php echo $fee; ?>;
            </div>

            <br>

            <div class="label">Ekspresi yang diuji</div>
            <div class="code">
                $fee === 350000
            </div>
        </section>

        <section class="card">
            <div class="result-title">Hasil Pengujian</div>

            <div class="result-value">
                <?php var_dump($result); ?>
            </div>

            <div class="status">
                <?php
                if ($result) {
                    echo "Nilai dan tipe data sama.";
                } else {
                    echo "Nilai atau tipe data berbeda.";
                }
                ?>
            </div>
        </section>

        <footer class="footer">
            Operator Test | Kursusku Prototype
        </footer>

    </main>
</body>
</html>