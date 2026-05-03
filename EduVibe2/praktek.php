<?php
$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : 'Teman';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Live Praktek HTML - EduVibe</title>
    <style>
        :root {
            --bg: #081f3a;
            --accent: #00c3ff;
            --card: rgba(255, 255, 255, 0.07);
        }
        body { font-family: 'Segoe UI', sans-serif; background: var(--bg); color: white; margin: 0; overflow: hidden; }
        
        /* Navbar */
        nav { 
            display: flex; justify-content: space-between; align-items: center;
            padding: 10px 5%; background: rgba(0,0,0,0.8); height: 60px;
        }

        /* Layout Utama */
        .editor-container {
            display: flex;
            height: calc(100vh - 80px);
            padding: 10px;
            gap: 10px;
        }

        /* Panel Kiri & Kanan */
        .panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: var(--card);
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.1);
            overflow: hidden;
        }

        .panel-header {
            background: rgba(255,255,255,0.1);
            padding: 10px 20px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        textarea {
            flex: 1;
            background: #1e1e1e;
            color: #dcdcdc;
            padding: 20px;
            border: none;
            font-family: 'Consolas', monospace;
            font-size: 16px;
            resize: none;
            outline: none;
        }

        iframe {
            flex: 1;
            background: white; /* Hasil preview biasanya putih agar jelas */
            border: none;
        }

        /* Tombol Materi */
        .tabs {
            display: flex;
            gap: 5px;
            padding: 10px 5%;
            background: #05162a;
        }

        .tab-btn {
            background: rgba(255,255,255,0.1);
            border: none;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .tab-btn:hover { background: var(--accent); color: #081f3a; }

        .btn-back {
            background: var(--accent);
            color: #081f3a;
            text-decoration: none;
            padding: 5px 15px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>
<body>

<nav>
    <div style="font-size: 20px; font-weight: bold;">💻 EduVibe Live Editor</div>
    <a href="materi.php" class="btn-back">⬅ Keluar</a>
</nav>

<div class="tabs">
    <small style="margin-right: 10px; align-self: center;">Pilih Template:</small>
    <button class="tab-btn" onclick="loadTemplate('heading')">Judul (H1-H6)</button>
    <button class="tab-btn" onclick="loadTemplate('teks')">Format Teks</button>
    <button class="tab-btn" onclick="loadTemplate('list')">Daftar (List)</button>
    <button class="tab-btn" onclick="loadTemplate('tabel')">Tabel</button>
</div>

<div class="editor-container">
    <div class="panel">
        <div class="panel-header">
            <span>📝 Editor HTML</span>
            <small style="color: var(--accent);">Ketik di bawah sini</small>
        </div>
        <textarea id="html-code" spellcheck="false" oninput="updatePreview()"></textarea>
    </div>

    <div class="panel">
        <div class="panel-header">
            <span>👁️ Hasil Preview</span>
        </div>
        <iframe id="preview-window"></iframe>
    </div>
</div>

<script>
    const templates = {
        heading: "<h1>Halo <?php echo $nama; ?>!</h1>\n<h2>Ini Sub-judul</h2>\n<p>Cobalah ganti teks ini.</p>",
        teks: "<p>Ini teks <b>Tebal</b></p>\n<p>Ini teks <i>Miring</i></p>\n<p>Ini teks <u>Bergaris Bawah</u></p>",
        list: "<h3>Daftar Belanja:</h3>\n<ul>\n  <li>Beli Kopi</li>\n  <li>Beli Gula</li>\n</ul>",
        tabel: "<table border='1'>\n  <tr>\n    <th>No</th>\n    <th>Nama</th>\n  </tr>\n  <tr>\n    <td>1</td>\n    <td><?php echo $nama; ?></td>\n  </tr>\n</table>"
    };

    function loadTemplate(type) {
        document.getElementById('html-code').value = templates[type];
        updatePreview();
    }

    function updatePreview() {
        const code = document.getElementById('html-code').value;
        const preview = document.getElementById('preview-window').contentWindow.document;
        preview.open();
        preview.write(code);
        preview.close();
    }

    // Load template pertama kali
    window.onload = () => loadTemplate('heading');
</script>

</body>
</html>