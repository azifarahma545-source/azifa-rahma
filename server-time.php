php
<?php
date_default_timezone_set('Asia/Jakarta');

$serverTime = date('H:i:s');
$serverDate = date('d F Y');
$phpDateTime = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu Server | KursusKu</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: Arial, sans-serif;
            color: white;
            background: linear-gradient(135deg, #ffb6d5, #ed76aa, #d94f91, #ffb4d2);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 18px;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 850px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .logo {
            font-size: 48px;
            margin-bottom: 8px;
            text-shadow: 0 0 20px rgba(255,255,255,.5);
        }

        h1 {
            font-size: clamp(32px, 5vw, 48px);
            font-weight: 800;
            margin-bottom: 12px;
            text-shadow: 0 3px 15px rgba(146,35,88,.2);
        }

        .subtitle {
            font-size: 18px;
            color: #fff4f9;
            margin-bottom: 32px;
        }

        .card {
            padding: 32px;
            border-radius: 30px;
            background: rgba(255,255,255,.17);
            border: 1px solid rgba(255,255,255,.65);
            box-shadow: 0 20px 55px rgba(135,35,80,.2);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .status {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 24px;
            margin-bottom: 24px;
            background: #168c55;
            border: 1px solid #8af0b7;
            border-radius: 30px;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .status-dot {
            width: 11px;
            height: 11px;
            background: #6affad;
            border-radius: 50%;
            box-shadow: 0 0 10px #6affad;
        }

        .divider {
            height: 1px;
            background: rgba(255,255,255,.35);
            margin-bottom: 24px;
        }

        .label {
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 18px;
        }

        .clock {
            font-size: clamp(48px, 10vw, 90px);
            font-weight: 800;
            letter-spacing: 2px;
            line-height: 1.1;
            text-shadow: 0 5px 25px rgba(156,35,91,.18);
            font-variant-numeric: tabular-nums;
        }

        .date {
            font-size: 20px;
            margin-top: 18px;
            margin-bottom: 35px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .info-box {
            display: flex;
            align-items: center;
            gap: 16px;
            text-align: left;
            padding: 24px 20px;
            border-radius: 22px;
            background: rgba(255,255,255,.15);
            border: 1px solid rgba(255,255,255,.45);
            min-width: 0;
        }

        .info-icon {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #fff0f7;
            color: #df5794;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        .info-title {
            color: #ffeaf4;
            font-size: 14px;
            margin-bottom: 9px;
        }

        .info-value {
            font-size: 16px;
            font-weight: bold;
            overflow-wrap: anywhere;
        }

        .footer {
            margin-top: 24px;
            font-size: 12px;
            color: rgba(255,255,255,.8);
        }

        @media (max-width: 600px) {
            .card {
                padding: 24px 16px;
                border-radius: 24px;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .info-box {
                padding: 18px;
            }

            .subtitle {
                font-size: 16px;
            }

            .date {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>
    <main class="container">
        <div class="logo">💗</div>

        <h1>KursusKu</h1>
        <p class="subtitle">Informasi waktu dan status server</p>

        <section class="card">
            <div class="status">
                <span class="status-dot"></span>
                SERVER AKTIF
            </div>

            <div class="divider"></div>

            <p class="label">WAKTU SERVER SAAT INI</p>

            <div class="clock" id="clock">
                <?= htmlspecialchars($serverTime) ?>
            </div>

            <p class="date">
                <?= htmlspecialchars($serverDate) ?>
            </p>

            <div class="info-grid">
                <div class="info-box">
                    <div class="info-icon">◷</div>
                    <div>
                        <p class="info-title">Zona Waktu</p>
                        <p class="info-value">WIB (UTC+7)</p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon">▦</div>
                    <div>
                        <p class="info-title">Tanggal &amp; Waktu PHP</p>
                        <p class="info-value" id="php-time">
                            <?= htmlspecialchars($phpDateTime) ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <p class="footer">
            KursusKu &copy; <?= date('Y') ?> — Server Time Information
        </p>
    </main>

    <script>
        // Jam pada layar diperbarui setiap detik.
        const clock = document.getElementById('clock');
        const phpTime = document.getElementById('php-time');

        let currentTime = <?= json_encode($serverTime) ?>;
        let currentDate = <?= json_encode(date('Y-m-d')) ?>;

        function updateClock() {
            const now = new Date();

            // Menampilkan waktu WIB pada jam utama.
            const options = {
                timeZone: 'Asia/Jakarta',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            };

            clock.textContent = new Intl.DateTimeFormat(
                'en-GB', options
            ).format(now);

            // Waktu PHP di kotak bawah tetap merupakan waktu
            // saat halaman dimuat dari server.
        }

        updateClock();
        setInterval(updateClock, 1000);
    </script>
</body>
</html>
