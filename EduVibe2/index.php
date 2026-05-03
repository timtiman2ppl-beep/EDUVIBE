<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduVibe - Belajar HTML Seru</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #06132a;
      --accent: #00c3ff;
      --text: #f5fbff;
      --card: rgba(255, 255, 255, 0.08);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: "Inter", sans-serif;
      background: radial-gradient(circle at top, #0b3c67 0%, #06132a 100%);
      color: var(--text);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      scroll-behavior: smooth;
    }

    /* Navigasi Simpel */
    header {
      padding: 20px 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .brand { font-size: 1.5rem; font-weight: 700; color: var(--accent); letter-spacing: 1px; }

    nav a {
      color: var(--text);
      text-decoration: none;
      margin-left: 20px;
      font-size: 0.9rem;
      transition: 0.3s;
    }

    .btn-outline {
      border: 1px solid var(--accent);
      padding: 8px 18px;
      border-radius: 20px;
    }

    /* Hero Section */
    .hero {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 50px 20px;
    }

    .duvi-icon {
      font-size: 80px;
      margin-bottom: 10px;
      animation: float 3s ease-in-out infinite;
      cursor: default;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    .hero h1 { font-size: clamp(2rem, 5vw, 3.5rem); margin-bottom: 15px; }
    .hero p { max-width: 550px; opacity: 0.8; margin-bottom: 35px; line-height: 1.6; }

    /* Box Ayo Mulai */
    .start-box {
      background: var(--card);
      padding: 35px;
      border-radius: 25px;
      border: 1px solid rgba(255,255,255,0.1);
      box-shadow: 0 15px 35px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 380px;
    }

    .btn-main {
      background: var(--accent);
      color: #06132a;
      padding: 14px;
      border-radius: 15px;
      text-decoration: none;
      font-weight: 700;
      display: block;
      transition: 0.3s;
      margin-top: 20px;
    }

    .btn-main:hover { 
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 195, 255, 0.3);
    }

    /* About */
    .about { padding: 80px 5%; text-align: center; background: rgba(0,0,0,0.1); }

    footer { padding: 30px; text-align: center; opacity: 0.5; font-size: 0.8rem; }
  </style>
</head>
<body>

  <header>
    <div class="brand">EduVibe</div>
    <nav>
      <a href="#about">Tentang Kami</a>
      <a href="login.php">Login</a>
      <a href="register.php" class="btn-outline">Daftar</a>
    </nav>
  </header>

  <main class="hero">
    <div class="duvi-icon">🐬</div>
    <h1>Halo, Sahabat Edu!</h1>
    <p>Siap menyelam ke dunia HTML? Belajar buat website jadi lebih santai, seru, dan interaktif bareng Duvi!</p>

    <div class="start-box">
      <h3 style="color: var(--accent);">Mulai Sekarang?</h3>
      <p style="font-size: 0.85rem; margin-top: 10px;">Klik tombol di bawah untuk berkenalan dengan Duvi.</p>
      <a href="profiluser.php" class="btn-main">Ayo Mulai Belajar!</a>
    </div>
  </main>

  <section id="about" class="about">
    <h2>Tentang EduVibe</h2>
    <p style="max-width: 700px; margin: 20px auto; opacity: 0.8;">
      Kami percaya belajar coding tidak harus pusing. EduVibe dirancang khusus untuk pemula yang ingin menguasai HTML dengan cara yang menyenangkan dan visual yang memanjakan mata.
    </p>
  </section>

  <footer>
    &copy; 2026 EduVibe HTML - Menyelam dalam Kreativitas.
  </footer>

</body>
</html>