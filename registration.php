<?php

require __DIR__ . '/data.php';
require __DIR__ . '/helpers.php';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Daftar Kursus - KursusKu</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>

<body>

<header class="site-header">

    <div class="container nav-wrap">

        <a
            href="index.php"
            class="brand"
        >
            KursusKu
        </a>

        <div class="nav-links">

            <a href="index.php">
                Katalog
            </a>

            <a href="registration.php">
                Daftar Kursus
            </a>

        </div>

    </div>

</header>


<main class="container">

    <section class="page-intro">

        <p class="eyebrow">
            Pendaftaran
        </p>

        <h1>
            Daftar Kursus
        </h1>

        <p>
            Silakan isi data berikut untuk mendaftar kursus.
        </p>

    </section>


    <section class="form-card">

        <form
            action="process.php"
            method="POST"
            class="registration-form"
            novalidate
        >

            <input
                type="hidden"
                name="source"
                value="week-06"
            >


            <div class="form-grid">

                <div class="form-group">

                    <label for="name">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Masukkan nama lengkap"
                        minlength="3"
                        maxlength="100"
                        autocomplete="name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="contoh@email.com"
                        autocomplete="email"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="phone">
                        Nomor HP
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="08xxxxxxxxxx"
                        autocomplete="tel"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="study_program">
                        Program Studi
                    </label>

                    <input
                        type="text"
                        id="study_program"
                        name="study_program"
                        placeholder="Contoh: PTIK"
                        required
                    >

                </div>

            </div>


            <div class="form-group">

                <label for="course">
                    Pilih Kursus
                </label>

                <select
    id="course_code"
    name="course_code"
    required
>

    <option value="">
        -- Pilih Kursus --
    </option>

    <?php foreach ($courses as $course): ?>

        <option value="<?= e($course['code']) ?>">
            <?= e($course['name']) ?>
            - <?= formatRupiah($course['fee']) ?>
        </option>

    <?php endforeach; ?>

</select>

            </div>


           <fieldset class="form-group">

    <legend>
        Jenis Peserta
    </legend>

    <label class="choice">

        <input
            type="radio"
            name="participant_type"
            value="mahasiswa"
            required
        >

        Mahasiswa

    </label>

    <label class="choice">

        <input
            type="radio"
            name="participant_type"
            value="guru"
        >

        Guru

    </label>

    <label class="choice">

        <input
            type="radio"
            name="participant_type"
            value="umum"
        >

        Umum

    </label>

</fieldset>
<fieldset class="form-group">

    <legend>
        Minat Belajar
    </legend>

    <?php foreach ($interestOptions as $value => $label): ?>

        <label class="choice">

            <input
                type="checkbox"
                name="interests[]"
                value="<?= e($value) ?>"
            >

            <?= e($label) ?>

        </label>

    <?php endforeach; ?>

</fieldset>
<div class="form-group">

    <label for="learning_mode">
        Metode Belajar
    </label>

    <select
        id="learning_mode"
        name="learning_mode"
        required
    >

        <option value="">
            -- Pilih Metode --
        </option>

        <option value="offline">
            Tatap Muka
        </option>

        <option value="online">
            Online
        </option>

        <option value="hybrid">
            Hybrid
        </option>

    </select>

</div>


<div class="form-group">

    <label for="package_count">
        Jumlah Paket
    </label>

    <select
        id="package_count"
        name="package_count"
        required
    >

        <?php for ($i = 1; $i <= 3; $i++): ?>

            <option value="<?= $i ?>">
                <?= $i ?> paket
            </option>

        <?php endfor; ?>

    </select>

</div>

            <div class="form-group">

                <label for="notes">
    Catatan
</label>

<textarea
    id="notes"
    name="notes"
    rows="5"
    maxlength="300"
                    placeholder="Tuliskan catatan jika ada..."
                ></textarea>

            </div>


            <button
                type="submit"
                class="btn-primary"
            >
                Kirim Pendaftaran
            </button>

        </form>

    </section>

</main>

</body>

</html>