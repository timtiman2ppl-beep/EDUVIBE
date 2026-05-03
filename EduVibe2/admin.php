<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin EduVibe</title>
  <style>
    body {
      font-family: "Inter", system-ui, sans-serif;
      background: linear-gradient(180deg, #081f3a 0%, #0f4b74 55%, #b1d8ff 100%);
      margin: 0;
      color: #ffffff;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px;
    }
    .admin-card {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.14);
      border-radius: 28px;
      padding: 32px;
      max-width: 520px;
      width: 100%;
      box-shadow: 0 24px 50px rgba(0, 0, 0, 0.25);
    }
    h1 {
      margin-bottom: 16px;
      font-size: 2rem;
    }
    p {
      line-height: 1.8;
      color: rgba(255,255,255,0.88);
      margin-bottom: 24px;
    }
    .btn {
      display: inline-block;
      background: #00c3ff;
      color: #04344a;
      border: none;
      border-radius: 999px;
      padding: 14px 26px;
      text-decoration: none;
      font-weight: 700;
    }
  </style>
</head>
<body>
  <div class="admin-card">
    <h1>Halaman Admin EduVibe</h1>
    <p>Ini adalah halaman admin sederhana. Gunakan tombol di bawah untuk kembali ke halaman utama.</p>
    <a class="btn" href="index.php">Kembali ke Beranda</a>
  </div>
</body>
</html>