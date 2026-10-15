<?php
$quota = 30;
$registered = 18;

$isFull = ($registered >= $quota);
$hasSeat = ($registered < $quota);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic Test</title>

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
            padding: 25px;
            color: #702442;
        }

        .container {
            width: 100%;
            max-width: 650px;
            background: rgba(255, 240, 246, 0.65);
            border: 1px solid #f3a6c2;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 12px 35px rgba(173, 52, 102, 0.15);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 34px;
            color: #a51e58;
            margin-bottom: 12px;
        }

        .header p {
            color: #ad4770;
            font-size: 16px;
            line-height: 1.6;
        }

        .result {
            background: rgba(248, 187, 208, 0.45);
            border: 1px solid #f2a3c0;
            border-radius: 14px;
            padding: 22px;
            margin-bottom: 18px;
        }

        .result-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }

        .result-row:last-child {
            margin-bottom: 0;
        }

        .label {
            font-size: 17px;
            font-weight: bold;
        }

        .value {
            background: #e75489;
            color: #fff0f6;
            padding: 10px 15px;
            border-radius: 9px;
            font-family: monospace;
            font-size: 15px;
            font-weight: bold;
        }

        .status {
            text-align: center;
            padding: 16px;
            border-radius: 12px;
            background: #f6c4d7;
            color: #85264c;
            font-weight: bold;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 13px;
            color: #a34c70;
        }

        @media (max-width: 480px) {
            .container {
                padding: 24px 18px;
            }

            .header h1 {
                font-size: 27px;
            }

            .result-row {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <main class="container">

        <header class="header">
            <h1>Logic Test</h1>
            <p>
                Hasil dari kode pada file logic-test.php
            </p>
        </header>

        <section class="result">
            <div class="result-row">
                <span class="label">Status Kuota</span>
                <span class="value">
                    <?php var_dump($isFull); ?>
                </span>
            </div>

            <div class="result-row">
                <span class="label">Ketersediaan Kursi</span>
                <span class="value">
                    <?php var_dump($hasSeat); ?>
                </span>
            </div>
        </section>

        <div class="status">
            <?php
            if ($hasSeat) {
                echo "Kursi masih tersedia.";
            } else {
                echo "Kuota sudah penuh.";
            }
            ?>
        </div>

        <footer class="footer">
            Logic Test &bull; Kursusku Prototype
        </footer>

    </main>
</body>
</html>