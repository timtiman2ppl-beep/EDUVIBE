<?php
$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : 'Teman';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kuis HTML - EduVibe</title>
    <style>
        :root {
            --bg: #081f3a;
            --accent: #00c3ff;
            --card: rgba(255, 255, 255, 0.07);
            --correct: #2ecc71;
            --wrong: #e74c3c;
        }
        body { font-family: 'Segoe UI', sans-serif; background: var(--bg); color: white; margin: 0; line-height: 1.7; }
        nav { padding: 15px 5%; background: rgba(0,0,0,0.5); display: flex; justify-content: space-between; }
        .container { max-width: 700px; margin: 40px auto; padding: 20px; }
        .card { background: var(--card); padding: 30px; border-radius: 25px; margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.1); }
        
        /* Skor Floating */
        .score-box { 
            position: sticky; top: 80px; background: var(--accent); color: #081f3a; 
            padding: 10px; border-radius: 10px; text-align: center; font-weight: bold;
            margin-bottom: 20px; z-index: 10;
        }

        .question { font-size: 1.2rem; font-weight: bold; margin-bottom: 20px; color: var(--accent); }
        .option {
            display: block; width: 100%; padding: 15px; margin: 10px 0;
            background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.2);
            border-radius: 12px; color: white; text-align: left; cursor: pointer; transition: 0.3s;
        }
        .option:hover:not([disabled]) { background: rgba(255,255,255,0.15); border-color: var(--accent); }
        
        .correct { background: var(--correct) !important; border-color: var(--correct); }
        .wrong { background: var(--wrong) !important; border-color: var(--wrong); }
        
        .btn-back {
            display: inline-block; margin-top: 20px; padding: 12px 25px;
            background: rgba(255,255,255,0.1); color: white; text-decoration: none;
            border-radius: 10px; transition: 0.3s;
        }
    </style>
</head>
<body>

<nav>
    <div style="font-size: 24px; font-weight: bold;">EduVibe Kuis</div>
    <div>Siswa: <?php echo $nama; ?></div>
</nav>

<div class="container">
    <div class="score-box">
        Nilai Kamu: <span id="current-score">0</span> / 100
    </div>

    <div id="quiz-container">
        <div class="card">
            <div class="question">1. Tag untuk membuat baris baru pada tabel adalah...</div>
            <button class="option" onclick="checkAnswer(this, true, 50)"><code>&lt;tr&gt;</code></button>
            <button class="option" onclick="checkAnswer(this, false, 50)"><code>&lt;td&gt;</code></button>
            <button class="option" onclick="checkAnswer(this, false, 50)"><code>&lt;br&gt;</code></button>
        </div>

        <div class="card">
            <div class="question">2. Atribut untuk menentukan sumber gambar pada tag <img> adalah...</div>
            <button class="option" onclick="checkAnswer(this, false, 50)">href</button>
            <button class="option" onclick="checkAnswer(this, true, 50)">src</button>
            <button class="option" onclick="checkAnswer(this, false, 50)">link</button>
        </div>
    </div>

    <div style="text-align: center;">
        <a href="materi.php" class="btn-back">⬅ Kembali ke Materi</a>
    </div>
</div>

<script>
    let totalNilai = 0;

    function checkAnswer(element, isCorrect, poinPerSoal) {
        const parent = element.parentElement;
        const options = parent.querySelectorAll('.option');

        // Matikan tombol agar tidak bisa klik berkali-kali di soal yang sama
        options.forEach(opt => opt.disabled = true);

        if (isCorrect) {
            element.classList.add('correct');
            totalNilai += poinPerSoal; // Tambah nilai
        } else {
            element.classList.add('wrong');
            // Cari jawaban yang benar untuk memberi tahu user
            options.forEach(opt => {
                if(opt.innerText.includes('tr') || opt.innerText === 'src') {
                    // (Opsional) highlight jawaban benar jika salah
                }
            });
        }

        // Update tampilan nilai
        document.getElementById('current-score').innerText = totalNilai;

        // Jika nilai 100, kasih alert selamat
        if(totalNilai === 100) {
            setTimeout(() => alert("Luar biasa! Nilai kamu sempurna! 🎉"), 500);
        }
    }
</script>

</body>
</html>