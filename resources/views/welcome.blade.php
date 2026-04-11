<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Himpunan Mahasiswa Informatika</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    scroll-behavior: smooth;
}

/* NAVBAR */
.navbar {
    display: flex;
    justify-content: space-between;
    padding: 20px 50px;
    position: fixed;
    width: 100%;
    top: 0;
    color: white;
    z-index: 1000;
    transition: 0.3s;
}

.navbar.scrolled {
    background: #001f3f; /* navy */
    backdrop-filter: blur(10px);
    border-bottom: 3px solid #FFD700; /* kuning */
}

.navbar ul {
    display: flex;
    list-style: none;
}

.navbar ul li {
    margin-left: 30px;
}

.navbar a {
    text-decoration: none;
    color: #FFD700; /* kuning */
    font-weight: 500;
}

.navbar h2 {
    color: #FFD700;
}

/* HERO */
.hero {
    height: 100vh;
    background: url('https://images.unsplash.com/photo-1518770660439-4636190af475') center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #FFD700;
    position: relative;
}

.hero::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0, 31, 63, 0.8); /* overlay navy */
}

.hero-content {
    position: relative;
    z-index: 1;
    animation: fadeUp 1.5s ease;
}

.hero h1 {
    font-size: 50px;
}

.hero p {
    margin: 15px 0;
    color: #ffffff;
}

.hero button {
    padding: 12px 30px;
    border: none;
    background: #FFD700;
    color: #001f3f;
    border-radius: 30px;
    cursor: pointer;
    transition: 0.3s;
}

.hero button:hover {
    background: #ffcc00;
}

/* SECTION */
section {
    padding: 100px 50px;
    text-align: center;
}

/* ABOUT */
.about {
    background: #f9f9f9;
}

/* PROGRAM */
.program-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.card {
    background: white;
    padding: 25px;
    width: 260px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: 0.3s;
    border-top: 5px solid #FFD700;
}

.card:hover {
    transform: translateY(-10px);
}

/* CONTACT */
.contact {
    background: linear-gradient(to right, #001f3f, #003366);
    color: #FFD700;
}

/* FOOTER */
footer {
    background: #001f3f;
    color: #FFD700;
    padding: 20px;
}

/* ANIMATION */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media(max-width: 768px) {
    .hero h1 {
        font-size: 30px;
    }

    .navbar {
        flex-direction: column;
    }
}
</style>
</head>

<body>

<div class="navbar" id="navbar">
    <h2>HMIT.UTS</h2>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#program">Program</a></li>
        <li><a href="#contact">Kontak</a></li>
    </ul>
</div>

<section class="hero" id="home">
    <div class="hero-content">
        <h1>Himpunan Mahasiswa Informatika</h1>
        <p>Membangun Generasi Teknologi yang Kreatif & Inovatif</p>
        <button onclick="scrollKe('program')">Jelajahi</button>
    </div>
</section>

<section class="about" id="about">
    <h2>Tentang Kami</h2>
    <p>Kami adalah organisasi mahasiswa informatika yang fokus pada pengembangan akademik, teknologi, dan kepemimpinan.</p>
    <p>Satu keluarga satu tujuan unutk informatika jaya.</p>
</section>

<section id="program">
    <h2>Program Unggulan</h2>
    <div class="program-container">
        <div class="card">
            <h3>Workshop Coding</h3>
            <p>Belajar dari dasar hingga advanced</p>
        </div>
        <div class="card">
            <h3>Seminar Nasional</h3>
            <p>Menghadirkan kelas PWTI</p>
        </div>
        <div class="card">
            <h3>Pengabdian</h3>
            <p>Meningkatkan teknologi untuk masyarakat</p>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <h2>Kontak Kami</h2>
    <p>Email: HMIT@email.com</p>
    <p>IG: HMIT.UTS</p>
    <p>Universitas Teknologi Sumbawa</p>
</section>

<footer>
    <p>© 2026 HMIT - All Rights Reserved</p>
</footer>

<script>
function scrollKe(id) {
    document.getElementById(id).scrollIntoView({ behavior: "smooth" });
}

window.addEventListener("scroll", function() {
    let navbar = document.getElementById("navbar");
    navbar.classList.toggle("scrolled", window.scrollY > 50);
});
</script>

</body>
</html>