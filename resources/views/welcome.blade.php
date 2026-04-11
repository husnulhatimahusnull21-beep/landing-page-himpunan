<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HMIT.UTS</title>

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
    color: white;
    z-index: 1000;
    transition: 0.3s;
}

.navbar.scrolled {
    background: #001f3f;
    border-bottom: 3px solid #FFD700;
}

.navbar a {
    color: #FFD700;
    text-decoration: none;
    margin-left: 20px;
}

/* HERO */
.hero {
    height: 100vh;
    background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c') center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #FFD700;
    text-align: center;
    position: relative;
}

.hero::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,31,63,0.8);
}

.hero-content {
    position: relative;
    z-index: 1;
}

.hero button {
    margin-top: 20px;
    padding: 10px 25px;
    background: #FFD700;
    border: none;
    border-radius: 20px;
    cursor: pointer;
}

/* SECTION */
section {
    padding: 80px 20px;
    text-align: center;
}

/* CARD */
.program-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.card {
    background: white;
    padding: 20px;
    width: 250px;
    border-radius: 10px;
    border-top: 5px solid #FFD700;
}

/* CONTACT */
.contact {
    background: #001f3f;
    color: #FFD700;
}

.contact form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin: 20px 0;
}

.contact input,
.contact textarea {
    width: 250px;
    padding: 10px;
    border-radius: 5px;
    border: none;
}

.contact button {
    padding: 10px 20px;
    background: #FFD700;
    border: none;
    cursor: pointer;
}

/* FOOTER */
footer {
    background: #001f3f;
    color: #FFD700;
    padding: 10px;
}

/* RESPONSIVE */
@media(max-width: 768px){
    .program-container {
        flex-direction: column;
        align-items: center;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar" id="navbar">
    <h2>HMIT.UTS</h2>
    <div>
        <a href="#home">Home</a>
        <a href="#about">Tentang</a>
        <a href="#program">Program</a>
        <a href="#contact">Kontak</a>
    </div>
</div>

<!-- HERO -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1>Himpunan Mahasiswa Informatika</h1>
        <p>Membangun Generasi Teknologi yang kreatif dan inovatif</p>
        <button onclick="scrollKe('program')">Jelajahi</button>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <h2>Tentang Kami</h2>
    <p>Organisasi mahasiswa informatika yang fokus pada pengembangan akademik, teknologi, dan kepemimpinan.</p>
    <p>Satu keluarga satu tujuan untuk informatika jaya.</p>
</section>

<!-- PROGRAM -->
<section id="program">
    <h2>Program HMIT</h2>
    <div class="program-container">
        <div class="card">
            <h3>Workshop coding</h3>
            <p>Belajar dari dasar hingga advance</p>
        </div>
        <div class="card">
            <h3>Seminar</h3>
            <p>Menghadirkan kelas PWTI</p>
        </div>
        <div class="card">
            <h3>Pengabdian</h3>
            <p>Mengembangkan teknologi untuk masyarakat</p>
        </div>
    </div>
</section>

<!-- CONTACT (USER INPUT) -->
<section class="contact" id="contact">
    <h2>Kontak Kami</h2>
    
    <form onsubmit="kirimPesan(event)">
        <input type="text" id="nama" placeholder="Nama" required>
        <input type="email" id="email" placeholder="Email" required>
        <textarea id="pesan" placeholder="Pesan" required></textarea>
        <button type="submit">Kirim</button>
    </form>

    <p>Email: hmit.uts@email.com</p>
    <p>Instagram:HMIT.UTS</p>
    <p>Universitas Teknologi Sumbawa</p>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 HMIT.UTS</p>
</footer>

<script>
function scrollKe(id){
    document.getElementById(id).scrollIntoView({behavior:"smooth"});
}

window.addEventListener("scroll", function(){
    document.getElementById("navbar")
    .classList.toggle("scrolled", window.scrollY > 50);
});

function kirimPesan(e){
    e.preventDefault();

    let nama = document.getElementById("nama").value;

    alert("Pesan berhasil dikirim, terima kasih " + nama + " 🙌");

    document.querySelector("form").reset();
}
</script>

</body>
</html>