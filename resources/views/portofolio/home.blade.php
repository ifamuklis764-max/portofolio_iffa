
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Dewi Latifatul Adkha</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700;800&family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --rose: #e8b8b7;
            --brown: #4b211c;
            --brown-dark: #351713;
            --cream: #fff6cf;
            --paper: #fffdf3;
            --ink: #3c211c;
            --muted: #725c53;
            --grid: rgba(88, 65, 53, .13);
            --gold: #bd9a45;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
            background: var(--rose);
        }

        header {
            width: min(1080px, 90%);
            margin: auto;
            padding: 18px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: var(--brown);
            font-family: 'Nunito Sans', sans-serif;
            font-size: 20px;
            font-weight: 900;
        }

        .logo span {
            color: var(--gold);
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: var(--brown);
            font-size: 10px;
            font-weight: 800;
            text-decoration: none;
            text-transform: uppercase;
        }

        nav a:hover {
            color: #a64c3c;
        }

        .cover {
            width: min(1080px, 90%);
            margin: 8px auto 24px;
            padding: 35px 7%;
            background-color: var(--brown);
            background-image:
                linear-gradient(rgba(255, 247, 215, .16) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 247, 215, .16) 1px, transparent 1px);
            background-size: 25px 25px;
        }

        .cover-card {
            width: min(790px, 100%);
            min-height: 270px;
            margin: auto;
            padding: 27px 30px;
            display: grid;
            grid-template-columns: 1.25fr .75fr;
            align-items: center;
            gap: 28px;
            position: relative;
            background: var(--cream);
            border: 1px solid #d1c393;
            box-shadow: 0 8px 0 rgba(31, 14, 11, .26);
            transform: rotate(-1deg);
        }

        .cover-card::before {
            content: "";
            width: 42px;
            height: 38px;
            position: absolute;
            top: -25px;
            left: 50%;
            border: 5px solid #aeb1aa;
            border-bottom-width: 8px;
            border-radius: 9px 9px 5px 5px;
            box-shadow: inset 0 0 0 2px #e6e5dd, 1px 3px 4px rgba(0, 0, 0, .35);
            transform: translateX(-50%);
        }

        .cover-copy {
            position: relative;
        }

        .cover-copy::before {
            content: "✦";
            position: absolute;
            top: -13px;
            left: -15px;
            color: var(--gold);
            font-size: 24px;
        }

        .cover-copy > span {
            color: var(--brown);
            font-size: 9px;
            font-weight: 900;
            letter-spacing: .14em;
        }

        .cover h1 {
            margin: 9px 0 2px;
            color: var(--brown);
            font-family: Georgia, 'Times New Roman', serif;
            font-size: clamp(34px, 5.2vw, 59px);
            font-weight: 500;
            line-height: .92;
            letter-spacing: -.055em;
            text-transform: uppercase;
        }

        .name-script {
            color: var(--brown);
            font-family: Georgia, 'Times New Roman', serif;
            font-size: clamp(25px, 4vw, 43px);
            font-style: italic;
            line-height: 1;
        }

        .cover-role {
            margin-top: 12px;
            color: var(--muted);
            font-size: 9px;
            font-weight: 800;
            letter-spacing: .12em;
        }

        .cover-stars {
            position: absolute;
            right: 11px;
            bottom: 23px;
            color: var(--gold);
            font-size: 22px;
        }

        .cover-photo {
            min-height: 202px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            color: var(--cream);
            background:
                radial-gradient(circle at 50% 35%, rgba(255, 255, 255, .2), transparent 34%),
                linear-gradient(145deg, #83926c, #45563d);
            border: 6px solid #fffdf0;
            box-shadow: 0 0 0 1px #b3a67a;
        }

        .cover-photo img {
            width: 100%;
            height: 100%;
            position: absolute;
            inset: 0;
            object-fit: cover;
            object-position: center 30%;
        }

        .cover-photo i {
            margin-top: 18px;
            font-size: 100px;
            opacity: .86;
        }

        .cover-photo span {
            position: absolute;
            right: 5px;
            bottom: 3px;
            left: 5px;
            padding: 4px;
            color: var(--brown-dark);
            background: rgba(255, 246, 207, .9);
            font-size: 8px;
            font-weight: 800;
            text-align: center;
        }

        .cover-barcode {
            height: 15px;
            margin-top: 8px;
            background: repeating-linear-gradient(90deg, var(--brown) 0 2px, transparent 2px 4px, var(--brown) 4px 5px, transparent 5px 8px);
        }

        .why-work,
        .profile-section,
        .project-section {
            width: min(1080px, 90%);
            margin: 0 auto 24px;
            background-color: var(--paper);
            background-image:
                linear-gradient(var(--grid) 1px, transparent 1px),
                linear-gradient(90deg, var(--grid) 1px, transparent 1px);
            background-size: 22px 22px;
        }

        .why-work {
            padding: 34px 30px 38px;
        }

        .section-intro {
            margin-bottom: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 25px;
        }

        .section-intro h2,
        .section-title {
            color: var(--brown);
            font-family: Georgia, 'Times New Roman', serif;
            font-size: clamp(28px, 4vw, 43px);
            font-weight: 500;
            line-height: .98;
            text-transform: uppercase;
        }

        .section-intro p {
            color: var(--brown);
            font-family: Georgia, 'Times New Roman', serif;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.4;
            text-transform: uppercase;
        }

        .reason-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
        }

        .reason-card {
            min-height: 116px;
            padding: 21px 13px 13px;
            position: relative;
            background: #fff2bb;
            box-shadow: 0 4px 8px rgba(70, 42, 30, .12);
            transform: rotate(-2deg);
        }

        .reason-card:nth-child(even) {
            background: #fff7d6;
            transform: rotate(2deg);
        }

        .reason-card::before {
            content: "";
            width: 56px;
            height: 13px;
            position: absolute;
            top: -6px;
            left: 50%;
            background: rgba(75, 33, 28, .9);
            transform: translateX(-50%) rotate(-3deg);
        }

        .reason-card h3 {
            margin-bottom: 5px;
            color: var(--brown);
            font-family: Georgia, 'Times New Roman', serif;
            font-size: 14px;
            font-style: italic;
        }

        .reason-card p {
            color: #634c42;
            font-size: 10px;
            line-height: 1.55;
        }

        .profile-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: transparent;
        }

        .about-copy {
            min-height: 300px;
            padding: 30px;
            color: var(--cream);
            background: var(--brown);
            position: relative;
            overflow: hidden;
        }

        .about-copy::after {
            content: "✦";
            position: absolute;
            right: 18px;
            bottom: 15px;
            color: var(--gold);
            font-size: 40px;
        }

        .about-copy .section-title {
            margin-bottom: 18px;
            color: var(--cream);
            font-style: italic;
            text-transform: none;
        }

        .about-copy p {
            max-width: 420px;
            margin-bottom: 12px;
            color: #f3e7d4;
            font-size: 11px;
            line-height: 1.75;
        }

        .profile-details {
            padding: 28px;
            background-color: var(--cream);
            background-image:
                linear-gradient(rgba(88, 65, 53, .12) 1px, transparent 1px),
                linear-gradient(90deg, rgba(88, 65, 53, .12) 1px, transparent 1px);
            background-size: 22px 22px;
        }

        .profile-details h3 {
            margin-bottom: 15px;
            color: var(--brown);
            font-family: Georgia, 'Times New Roman', serif;
            font-size: 21px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .detail-row {
            padding: 8px 0;
            display: grid;
            grid-template-columns: 100px 1fr;
            gap: 12px;
            border-top: 1px solid rgba(75, 33, 28, .24);
            font-size: 10px;
            line-height: 1.5;
        }

        .detail-row strong {
            color: var(--brown);
            text-transform: uppercase;
        }

        .detail-row span {
            color: #654f44;
        }

        .project-section {
            padding: 32px;
            display: grid;
            grid-template-columns: minmax(190px, .72fr) minmax(0, 1.5fr);
            gap: 26px;
            scroll-margin-top: 20px;
        }

        .project-intro .section-title {
            margin-bottom: 16px;
        }

        .project-intro p {
            margin-bottom: 12px;
            color: #604b43;
            font-size: 11px;
            line-height: 1.7;
        }

        .project-intro a {
            color: var(--brown);
            font-size: 10px;
            font-weight: 900;
            text-decoration: underline;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .card {
            min-width: 0;
            padding: 8px;
            background: #fffdf7;
            border: 1px solid #d3c9b0;
            box-shadow: 0 5px 10px rgba(70, 42, 30, .12);
            scroll-margin-top: 20px;
        }

        .project-preview {
            height: 150px;
            padding: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #e5dfb1;
            background-image:
                linear-gradient(rgba(75, 33, 28, .11) 1px, transparent 1px),
                linear-gradient(90deg, rgba(75, 33, 28, .11) 1px, transparent 1px);
            background-size: 16px 16px;
        }

        .project-preview-image {
            height: auto;
            aspect-ratio: 2.15 / 1;
            padding: 0;
            background: #e8e8e8;
        }

        .project-preview-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
        }

        .preview-window {
            width: 76%;
            height: 100%;
            padding: 7px;
            overflow: hidden;
            background: #fffdf4;
            border: 3px solid white;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(53, 23, 19, .2);
        }

        .preview-top {
            height: 9px;
            margin-bottom: 8px;
            display: flex;
            gap: 3px;
            border-bottom: 1px solid #c4b998;
        }

        .preview-top i {
            width: 4px;
            height: 4px;
            display: block;
            background: var(--brown);
            border-radius: 50%;
        }

        .preview-layout {
            height: calc(100% - 17px);
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 4px;
        }

        .preview-layout span {
            display: block;
            background: #e3dcc2;
        }

        .preview-layout span:last-child {
            background:
                linear-gradient(90deg, #a58c50 0 25%, transparent 25%),
                repeating-linear-gradient(0deg, #e8e3d2 0 8px, #fffdf4 8px 13px);
        }

        .card:nth-child(2) .preview-layout span:last-child {
            background:
                linear-gradient(0deg, transparent 0 70%, #d0c59d 70%),
                repeating-linear-gradient(90deg, #e8e3d2 0 12px, #fffdf4 12px 17px);
        }

        .card:nth-child(3) .preview-layout span:last-child {
            background:
                linear-gradient(90deg, #a45b48 0 18%, transparent 18%),
                repeating-linear-gradient(0deg, #e8e3d2 0 8px, #fffdf4 8px 13px);
        }

        .card-content {
            padding: 10px 4px 5px;
        }

        .card-content > i {
            color: var(--gold);
            font-size: 15px;
        }

        .card h3 {
            margin: 4px 0;
            color: var(--brown);
            font-family: Georgia, 'Times New Roman', serif;
            font-size: 13px;
        }

        .card p {
            min-height: 62px;
            color: #68594e;
            font-size: 9px;
            line-height: 1.55;
        }

        .card h4 {
            margin: 8px 0 5px;
            color: var(--brown);
            font-size: 8px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
        }

        .tech-list span {
            padding: 3px 5px;
            color: var(--brown);
            background: #f1e8c9;
            font-size: 8px;
            font-weight: 700;
        }

        .contact {
            width: min(1080px, 90%);
            margin: 0 auto 25px;
            padding: 22px 26px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            color: var(--cream);
            background: var(--brown);
        }

        .contact h2 {
            font-family: Georgia, 'Times New Roman', serif;
            font-size: clamp(20px, 3vw, 28px);
            font-weight: 500;
        }

        .contact p {
            margin-top: 5px;
            color: #f0dfc8;
            font-size: 10px;
            line-height: 1.6;
        }

        .btn {
            padding: 9px 13px;
            flex-shrink: 0;
            color: var(--brown);
            background: var(--cream);
            border: 1px solid var(--cream);
            font-size: 9px;
            font-weight: 900;
            text-decoration: none;
        }

        .btn:hover {
            color: var(--brown-dark);
            background: white;
        }

        footer {
            padding: 14px;
            color: var(--brown);
            font-size: 9px;
            font-weight: 700;
            text-align: center;
        }

        @media (max-width: 820px) {
            .project-section {
                grid-template-columns: 1fr;
            }

            .project-intro {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 18px;
            }
        }

        @media (max-width: 620px) {
            header {
                flex-direction: column;
                gap: 10px;
            }

            nav {
                justify-content: center;
                flex-wrap: wrap;
                gap: 8px 13px;
            }

            .cover {
                width: 92%;
                padding: 29px 16px;
            }

            .cover-card {
                min-height: 0;
                padding: 22px 16px;
                grid-template-columns: 1fr .8fr;
                gap: 12px;
            }

            .cover h1 {
                font-size: clamp(26px, 7vw, 39px);
            }

            .name-script {
                font-size: clamp(20px, 5.5vw, 30px);
            }

            .cover-photo {
                min-height: 150px;
            }

            .cover-photo i {
                font-size: 74px;
            }

            .cover-role {
                font-size: 7px;
            }

            .why-work {
                padding: 25px 18px 29px;
            }

            .section-intro {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .reason-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 15px 11px;
            }

            .profile-section {
                grid-template-columns: 1fr;
            }

            .about-copy {
                min-height: 0;
                padding: 25px 22px;
            }

            .profile-details {
                padding: 23px 20px;
            }

            .project-section {
                padding: 24px 17px;
            }

            .project-intro {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .cards {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .project-preview {
                height: 170px;
            }

            .project-preview-image {
                height: auto;
                aspect-ratio: 2.15 / 1;
            }

            .preview-window {
                width: 57%;
            }

            .card p {
                min-height: 0;
            }

            .contact {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">Iffa<span>.</span></div>

    <nav>
        <a href="#home">Beranda</a>
        <a href="#about">Profil</a>
        <a href="#skills">Keahlian</a>
        <a href="#education">Pendidikan</a>
        <a href="#projects">Proyek</a>
        <a href="#contact">Kontak</a>
    </nav>
</header>

<main>
    <section class="cover" id="home" aria-label="Portofolio Dewi Latifatul Adkha">
        <div class="cover-card">
            <div class="cover-copy">
                <span>PORTOFOLIO · {{ date('Y') }}</span>
                <h1>Portofolio<br>Kreatif</h1>
                <p class="name-script">Dewi Latifatul Adkha</p>
                <p class="cover-role">PELAJAR RPL · PENGEMBANG WEB</p>
                <span class="cover-stars" aria-hidden="true">✦</span>
            </div>
            <div>
                <div class="cover-photo">
                    <img src="{{ asset('images/foto-profil-iffa.png') }}" alt="Foto profil Iffa">
                </div>
                <div class="cover-barcode" aria-hidden="true"></div>
            </div>
        </div>
    </section>

    <section class="why-work" id="skills">
        <div class="section-intro">
            <h2>Bidang yang<br>saya minati</h2>
            <p>MINAT SAYA: TEKNOLOGI + DESAIN + PENGEMBANGAN APLIKASI</p>
        </div>
        <div class="reason-grid">
            <article class="reason-card">
                <h3>Pengembangan web</h3>
                <p>Membangun aplikasi web dengan HTML, CSS, PHP, dan Laravel.</p>
            </article>
            <article class="reason-card">
                <h3>Basis data</h3>
                <p>Menyusun dan mengelola data aplikasi menggunakan MySQL.</p>
            </article>
            <article class="reason-card">
                <h3>UI dan desain</h3>
                <p>Mengeksplorasi tampilan aplikasi dan membuat desain di Canva.</p>
            </article>
            <article class="reason-card">
                <h3>Terus belajar</h3>
                <p>Mencoba hal baru lalu menerapkannya melalui proyek.</p>
            </article>
        </div>
    </section>

    <section class="profile-section" id="about">
        <div class="about-copy">
            <h2 class="section-title">Halo, saya<br>Iffa</h2>
            <p>
                Saya pelajar Rekayasa Perangkat Lunak yang tertarik pada
                teknologi, desain, dan pengembangan aplikasi.
            </p>
            <p>
                Saya senang mempelajari hal baru, mengembangkan kemampuan,
                serta membuat proyek sebagai penerapan ilmu yang dipelajari.
            </p>
        </div>
        <div class="profile-details">
            <h3>Profil</h3>
            <div class="detail-row" id="education">
                <strong>Pendidikan</strong>
                <span>SMK PGRI 2 Ponorogo · Rekayasa Perangkat Lunak</span>
            </div>
            <div class="detail-row">
                <strong>Riwayat sekolah</strong>
                <span>SMPN 1 Badegan · SDN 1 Badegan</span>
            </div>
            <div class="detail-row">
                <strong>Fokus</strong>
                <span>Pengembangan situs web dan aplikasi</span>
            </div>
            <div class="detail-row">
                <strong>Teknologi</strong>
                <span>HTML, CSS, PHP, Laravel, JavaScript, MySQL</span>
            </div>
        </div>
    </section>

    <section class="project-section" id="projects">
        <div class="project-intro">
            <div>
                <h2 class="section-title">Proyek<br>Pilihan</h2>
                <p>
                    Beberapa aplikasi yang pernah saya kembangkan selama
                    belajar Rekayasa Perangkat Lunak.
                </p>
                <a href="#contact">Lihat detail proyek ↓</a>
            </div>
        </div>
        <div class="cards">
            <article class="card" id="peminjaman-laptop-lab">
                <div class="project-preview project-preview-image">
                    <img src="{{ asset('images/peminjaman-laptop-lab.png') }}" alt="Tampilan dashboard Peminjaman Laptop Lab">
                </div>
                <div class="card-content">
                    <i class="bi bi-laptop" aria-hidden="true"></i>
                    <h3>Peminjaman Laptop Lab</h3>
                    <p>
                        Aplikasi untuk membantu mengelola proses peminjaman laptop di laboratorium.
                    </p>
                    <h4>Teknologi</h4>
                    <div class="tech-list">
                        <span>Laravel</span><span>PHP</span><span>MySQL</span><span>HTML</span><span>CSS</span>
                    </div>
                </div>
            </article>
            <article class="card" id="inventaris-toko-kecil">
                <div class="project-preview project-preview-image">
                    <img src="{{ asset('images/inventaris-toko-kecil.png') }}" alt="Tampilan dashboard Inventaris Toko Kecil">
                </div>
                <div class="card-content">
                    <i class="bi bi-box-seam" aria-hidden="true"></i>
                    <h3>Inventaris Toko Kecil</h3>
                    <p>
                        Aplikasi untuk mengelola produk, kategori, stok masuk dan keluar, serta memantau penjualan toko.
                    </p>
                    <h4>Teknologi</h4>
                    <div class="tech-list">
                        <span>PHP</span><span>Laravel</span><span>MySQL</span><span>HTML</span><span>CSS</span>
                    </div>
                </div>
            </article>
            <article class="card" id="login-hak-akses">
                <div class="project-preview project-preview-image">
                    <img src="{{ asset('images/login-hak-akses.png') }}" alt="Tampilan login LoginKu dengan akses akun">
                </div>
                <div class="card-content">
                    <i class="bi bi-shield-lock" aria-hidden="true"></i>
                    <h3>Login Hak Akses</h3>
                    <p>
                        Aplikasi login dengan hak akses admin, owner, dan
                        petugas untuk membatasi halaman sesuai peran.
                    </p>
                    <h4>Teknologi</h4>
                    <div class="tech-list">
                        <span>PHP Native</span><span>MySQL</span><span>HTML</span><span>CSS</span>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="contact" id="contact">
        <div>
            <h2>Mari berkarya bersama.</h2>
            <p>
                Saya terbuka untuk belajar dan mengembangkan proyek menarik.
                Lihat karya yang sudah saya buat.
            </p>
        </div>
        <a href="#projects" class="btn">Lihat proyek</a>
    </section>
</main>

<footer>© {{ date('Y') }} Dewi Latifatul Adkha · PORTOFOLIO</footer>

</body>
</html>
