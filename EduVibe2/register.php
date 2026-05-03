<?php
session_start(); // Memulai ingatan browser

if (isset($_POST['daftar'])) {
    // Mengambil data dari form
    $user = htmlspecialchars($_POST['username']);
    $mood = $_POST['mood'];

    // Langsung simpan ke Session (tanpa ke database)
    $_SESSION['login'] = true;
    $_SESSION['username'] = $user;
    $_SESSION['mood'] = $mood;

    // Perintah pindah halaman ke materi.php
    header("Location: materi.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar EduVibe</title>
    <style>
        body { font-family: sans-serif; background: #06132a; color: white; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .box { background: rgba(255,255,255,0.08); padding: 30px; border-radius: 20px; width: 350px; text-align: center; border: 1px solid rgba(255,255,255,0.1); }
        input { width: 100%; padding: 12px; margin: 10px 0; border-radius: 10px; border: none; background: rgba(255,255,255,0.1); color: white; }
        .choices { display: flex; justify-content: space-around; margin: 15px 0; }
        .opt { cursor: pointer; font-size: 24px; padding: 10px; border-radius: 12px; transition: 0.2s; border: 2px solid transparent; }
        .opt:hover { background: rgba(0, 195, 255, 0.2); }
        .selected { background: rgba(0, 195, 255, 0.3); border-color: #00c3ff; }
        button { background: #00c3ff; color: #06132a; border: none; padding: 12px; width: 100%; border-radius: 10px; font-weight: bold; cursor: pointer; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Daftar Akun</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password (Bebas)" required>
            
            <p style="font-size: 14px; margin-top: 10px;">Pilih Icon Profilmu:</p>
            <div class="choices">
                <span class="opt selected" onclick="pilihIcon(this, '🐬')">🐬</span>
                <span class="opt" onclick="pilihIcon(this, '😎')">😎</span>
                <span class="opt" onclick="pilihIcon(this, '🚀')">🚀</span>
                <span class="opt" onclick="pilihIcon(this, '✨')">✨</span>
            </div>
            
            <input type="hidden" name="mood" id="moodVal" value="🐬">
            <button type="submit" name="daftar">Daftar Sekarang</button>
        </form>
    </div>

    <script>
        function pilihIcon(el, emoji) {
            document.querySelectorAll('.opt').forEach(o => o.classList.remove('selected'));
            el.classList.add('selected');
            document.getElementById('moodVal').value = emoji;
        }
    </script>
</body>
</html>