<?php

require __DIR__ . '/data.php';
require __DIR__ . '/helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registration.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$courseCode = $_POST['course_code'] ?? '';
$participantType = $_POST['participant_type'] ?? '';
$learningMode = $_POST['learning_mode'] ?? '';
$packageCount = (int) ($_POST['package_count'] ?? 1);
$notes = trim($_POST['notes'] ?? '');

$interests = $_POST['interests'] ?? [];

if (!is_array($interests)) {
    $interests = [];
}

$allowedInterestKeys = array_keys($interestOptions);

$interests = array_values(
    array_intersect($interests, $allowedInterestKeys)
);

$errors = [];

if ($name === '') {
    $errors[] = 'Nama wajib diisi.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email tidak valid.';
}

$course = findCourse($courses, $courseCode);

if ($course === null) {
    $errors[] = 'Kursus tidak valid.';
}

if (!in_array($participantType, ['mahasiswa', 'guru', 'umum'], true)) {
    $errors[] = 'Jenis peserta tidak valid.';
}

if (!in_array($learningMode, ['offline', 'online', 'hybrid'], true)) {
    $errors[] = 'Metode belajar tidak valid.';
}

if ($packageCount < 1 || $packageCount > 3) {
    $errors[] = 'Jumlah paket harus 1 sampai 3.';
}
if (!empty($errors)) {
    echo '<h2>Terjadi kesalahan:</h2>';
    echo '<ul>';

    foreach ($errors as $error) {
        echo '<li>' . e($error) . '</li>';
    }

    echo '</ul>';

    echo '<p><a href="registration.php">Kembali ke formulir</a></p>';
    exit;
}
$discountPercent = getDiscountPercent($participantType);

$grossTotal = $course['fee'] * $packageCount;

$discountAmount = intdiv(
    $grossTotal * $discountPercent,
    100
);

$finalTotal = $grossTotal - $discountAmount;
$learningModeLabel = getLearningModeLabel($learningMode);
$interestLabels = [];

foreach ($interests as $interest) {
    $interestLabels[] = $interestOptions[$interest];
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hasil Pendaftaran - KursusKu</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >
</head>

<body>

<header class="site-header">

    <div class="container nav-wrap">

        <a href="index.php" class="brand">
            KursusKu
        </a>

        <div class="nav-links">
            <a href="index.php">Katalog</a>
            <a href="registration.php">Daftar Kursus</a>
        </div>

    </div>

</header>

<main class="container">

    <section class="page-intro">

        <p class="eyebrow">
            Pendaftaran Berhasil
        </p>

        <h1>
            Ringkasan Pendaftaran
        </h1>

    </section>

    <section class="form-card">

        <p>
            <strong>Nama:</strong>
            <?= e($name) ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?= e($email) ?>
        </p>

        <p>
            <strong>Kursus:</strong>
            <?= e($course['name']) ?>
        </p>

        <p>
            <strong>Jenis Peserta:</strong>
            <?= e($participantType) ?>
        </p>

       <p>
    <strong>Minat:</strong>

    <?php if ($interests === []): ?>

        Belum memilih minat.

    <?php else: ?>

        <?= e(implode(', ', $interestLabels)) ?>

    <?php endif; ?>

</p>

        <p>
            <strong>Metode Belajar:</strong>
            <?= e($learningModeLabel) ?>
        </p>

        <p>
            <strong>Jumlah Paket:</strong>
            <?= $packageCount ?> paket
        </p>

        <hr>

        <p>
            <strong>Subtotal:</strong>
            <?= formatRupiah($grossTotal) ?>
        </p>

        <p>
            <strong>Diskon:</strong>
            <?= $discountPercent ?>%
            (<?= formatRupiah($discountAmount) ?>)
        </p>

        <p>
            <strong>Total Bayar:</strong>
            <?= formatRupiah($finalTotal) ?>
        </p>

        <?php if ($notes !== ''): ?>

            <p>
                <strong>Catatan:</strong>
                <?= e($notes) ?>
            </p>

        <?php endif; ?>

        <p>
            <a href="registration.php">
                Kembali ke Form Pendaftaran
            </a>
        </p>

    </section>

</main>

</body>
</html>