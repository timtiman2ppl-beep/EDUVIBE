
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Game HTML EduVibe</title>

<style>
body {
  margin: 0;
  font-family: "Segoe UI", Arial;
  background: linear-gradient(180deg,#c8e7ff,#eef6ff);
}

/* CONTAINER */
.container {
  max-width: 600px;
  margin: 100px auto;
  padding: 20px;
}

/* CARD */
.card {
  background: white;
  padding: 25px;
  border-radius: 25px;
  box-shadow: 0 16px 40px rgba(0,0,0,.12);
  text-align: center;
}

h1 {
  color: #043d7a;
}

/* SOAL */
#game-question {
  color: #043d7a;
  font-weight: bold;
  margin-bottom: 15px;
}

/* BUTTON */
button {
  width: 100%;
  padding: 14px;
  margin-top: 10px;
  border-radius: 15px;
  border: none;
  cursor: pointer;
  background: #e6eef7;
  color: #043d7a; /* 🔥 biar tulisan kelihatan */
  font-weight: 600;
  transition: 0.2s;
}

button:hover {
  background: #4d9fe3;
  color: white;
}

/* STATUS */
.status {
  margin-top: 15px;
  padding: 12px;
  border-radius: 12px;
  background: #e7f4ff;
  color: #084b8c;
}
</style>
</head>

<body>

<div class="container">
  <div class="card">
    <h1>🐬 Game HTML EduVibe</h1>

    <p id="game-question">Klik tombol mulai untuk bermain</p>

    <div id="game-answers"></div>

    <button id="start-game">Mulai Game</button>

    <div class="status" id="game-status">
      Skor: 0 | Level: 0
    </div>
  </div>
</div>

<script>
// ================= DATA GAME =================
const gameData = [
  {
    q: "Tag untuk membuat judul besar?",
    options: ["<p>", "<h1>", "<div>", "<span>"],
    answer: 1
  },
  {
    q: "Tag untuk membuat paragraf?",
    options: ["<para>", "<text>", "<p>", "<h2>"],
    answer: 2
  },
  {
    q: "Tag untuk membuat link?",
    options: ["<a>", "<link>", "<href>", "<url>"],
    answer: 0
  },
  {
    q: "Atribut untuk tujuan link?",
    options: ["src", "href", "alt", "link"],
    answer: 1
  },
  {
    q: "Tag untuk menampilkan gambar?",
    options: ["<img>", "<image>", "<pic>", "<src>"],
    answer: 0
  },
  {
    q: "Tag untuk list berurutan?",
    options: ["<ul>", "<ol>", "<li>", "<list>"],
    answer: 1
  }
];

// ================= VAR =================
let gameScore = 0;
let gameLevel = 0;

// ================= ELEMENT =================
const question = document.getElementById("game-question");
const answers = document.getElementById("game-answers");
const status = document.getElementById("game-status");
const startBtn = document.getElementById("start-game");

// ================= FUNCTION =================
function renderGame() {
  const item = gameData[gameLevel];
  answers.innerHTML = "";

  // jika selesai
  if (!item) {
    question.innerHTML = "🎉 Kamu sudah jago HTML!";
    status.innerHTML = "Skor akhir: " + gameScore;
    startBtn.innerHTML = "Main Lagi";
    return;
  }

  // tampilkan soal
  question.innerHTML = item.q;

  // tampilkan pilihan
  item.options.forEach((opt, i) => {
    const btn = document.createElement("button");

    btn.textContent = opt; // 🔥 FIX UTAMA (biar ga kosong)

    btn.onclick = () => {
      if (i === item.answer) {
        gameScore += 10;
        btn.style.background = "lightgreen";
      } else {
        btn.style.background = "salmon";
      }

      // disable semua tombol
      Array.from(answers.children).forEach(b => b.disabled = true);

      // lanjut soal
      setTimeout(() => {
        gameLevel++;
        renderGame();
        status.innerHTML = "Skor: " + gameScore + " | Level: " + gameLevel;
      }, 800);
    };

    answers.appendChild(btn);
  });

  // update status
  status.innerHTML = "Skor: " + gameScore + " | Level: " + gameLevel;
}

// ================= START =================
startBtn.onclick = () => {
  gameScore = 0;
  gameLevel = 0;
  renderGame();
};
</script>

</body>
</html>