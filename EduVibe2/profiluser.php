<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kenalan Yuk! - EduVibe</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #081f3a;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    /* Kartu Utama yang Simple */
    .card {
      background: rgba(255, 255, 255, 0.05);
      padding: 30px;
      border-radius: 20px;
      width: 90%;
      max-width: 350px;
    }

    /* Animasi Si Duvi */
    #duvi {
      font-size: 70px;
      display: block;
      margin-bottom: 15px;
      transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    input {
      width: 100%;
      padding: 12px;
      margin: 15px 0;
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.1);
      color: white;
      text-align: center;
      outline: none;
    }

    /* Grid Ekspresi yang Minimalis */
    .choices {
      display: flex;
      justify-content: space-around;
      margin: 20px 0;
    }

    .opt {
      cursor: pointer;
      font-size: 24px;
      padding: 10px;
      border-radius: 12px;
      transition: 0.2s;
    }

    .opt:hover { background: rgba(0, 195, 255, 0.2); }
    .opt.selected { background: #00c3ff; transform: scale(1.1); }

    .btn {
      background: #00c3ff;
      color: #081f3a;
      border: none;
      padding: 12px 25px;
      border-radius: 50px;
      font-weight: bold;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<div class="card">
  <span id="duvi">🐬</span>
  <h2 id="greet">Halo! Aku Duvi</h2>
  <p style="font-size: 14px; opacity: 0.8;">Isi nama & pilih mood Duvi hari ini:</p>

  <form action="materi.php" method="POST">
    <input type="text" name="nama" id="inputNama" placeholder="Ketik namamu..." required oninput="updateGreet()">
    
    <div class="choices">
      <span class="opt selected" onclick="changeDuvi(this, '🐬')">🐬</span>
      <span class="opt" onclick="changeDuvi(this, '😎')">😎</span>
      <span class="opt" onclick="changeDuvi(this, '🚀')">🚀</span>
      <span class="opt" onclick="changeDuvi(this, '✨')">✨</span>
    </div>

    <input type="hidden" name="mood" id="moodVal" value="🐬">
    <button class="btn">Gas Belajar! →</button>
  </form>
</div>

<script>
  // Update sapaan secara realtime saat mengetik
  function updateGreet() {
    const nama = document.getElementById('inputNama').value;
    document.getElementById('greet').innerText = nama ? 'Hai, ' + nama + '!' : 'Halo! Aku Duvi';
  }

  // Ganti ekspresi Duvi dengan animasi
  function changeDuvi(el, emoji) {
    // UI Feedback
    document.querySelectorAll('.opt').forEach(o => o.classList.remove('selected'));
    el.classList.add('selected');
    
    // Update Karakter Utama
    const duvi = document.getElementById('duvi');
    duvi.innerText = emoji;
    duvi.style.transform = 'scale(1.3) rotate(10deg)';
    setTimeout(() => { duvi.style.transform = 'scale(1) rotate(0deg)'; }, 200);

    // Simpan ke form
    document.getElementById('moodVal').value = emoji;
  }
</script>

</body>
</html>