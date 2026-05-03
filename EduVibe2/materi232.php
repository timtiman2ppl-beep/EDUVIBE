<?php
$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : 'Guest';
$mood = isset($_POST['mood']) ? htmlspecialchars($_POST['mood']) : '🐬';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kursus Kilat HTML Dasar - EduVibe</title>
    <style>
        :root {
            --bg: #081f3a;
            --accent: #00c3ff;
            --card: rgba(255, 255, 255, 0.07);
        }
        body { font-family: 'Segoe UI', sans-serif; background: var(--bg); color: white; margin: 0; line-height: 1.7; }
        
        /* Navbar */
        nav { 
            display: flex; justify-content: space-between; align-items: center;
            padding: 15px 5%; background: rgba(0,0,0,0.5); position: sticky; top: 0; z-index: 999;
        }
        .profil-tag { background: var(--accent); color: #081f3a; padding: 8px 18px; border-radius: 25px; font-weight: bold; }

        .container { max-width: 850px; margin: 40px auto; padding: 20px; }

        /* Kartu Materi */
        .card { 
            background: var(--card); padding: 30px; border-radius: 25px; 
            margin-bottom: 30px; border: 1px solid rgba(255,255,255,0.1);
        }

        h1, h2, h3 { color: var(--accent); }
        code { background: #000; color: #ff79c6; padding: 2px 6px; border-radius: 5px; font-family: 'Consolas', monospace; }
        
        .divider { height: 2px; background: rgba(255,255,255,0.1); margin: 20px 0; }

        /* Tombol Navigasi Menu */
        .menu-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; margin-top: 40px; }
        
        /* Styling Link agar tidak merusak tampilan button */
        .menu-grid a { text-decoration: none; display: block; }

        .btn-menu {
            width: 100%; /* Agar button memenuhi lebar link */
            padding: 20px; border-radius: 15px; border: 2px solid var(--accent);
            background: transparent; color: var(--accent); font-weight: bold;
            cursor: pointer; transition: 0.3s; text-align: center; font-size: 16px;
        }
        .btn-menu:hover { background: var(--accent); color: #081f3a; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid rgba(255,255,255,0.2); padding: 10px; text-align: left; }
        th { background: rgba(0, 195, 255, 0.1); }
    </style>
</head>
<body>

<nav>
    <div style="font-size: 24px; font-weight: bold;">EduVibe</div>
    <div class="profil-tag"><?php echo $mood; ?> <?php echo $nama; ?></div>
</nav>

<div class="container">
    
    <div class="card">
        <h1>📚 Super Materi: Dasar HTML</h1>
        <p>Halo <b><?php echo $nama; ?></b>, di halaman ini kita akan membedah HTML secara mendalam. Baca perlahan ya!</p>
    </div>

    <div class="card">
        <h2>1. Struktur & Judul (Headings)</h2>
        <p>HTML menggunakan tag judul dari yang paling besar ke terkecil:</p>
        <code>&lt;h1&gt;Judul Utama&lt;/h1&gt;</code><br>
        <code>&lt;h2&gt;Sub Judul&lt;/h2&gt;</code><br>
        <p>Gunakan <code>&lt;h1&gt;</code> hanya sekali dalam satu halaman untuk SEO yang baik.</p>
    </div>

    <div class="card">
        <h2>2. Mempercantik Teks</h2>
        <p>Ingin menebalkan atau memiringkan tulisan? Gunakan tag ini:</p>
        <ul>
            <li><code>&lt;b&gt;</code> atau <code>&lt;strong&gt;</code> untuk <b>Teks Tebal</b></li>
            <li><code>&lt;i&gt;</code> atau <code>&lt;em&gt;</code> untuk <i>Teks Miring</i></li>
            <li><code>&lt;u&gt;</code> untuk <u>Teks Bergaris Bawah</u></li>
        </ul>
    </div>

    <div class="card">
        <h2>3. Membuat Daftar (Lists)</h2>
        <p>Ada dua jenis daftar di HTML:</p>
        <b>Unordered List (Poin bulat):</b>
        <code>&lt;ul&gt; &lt;li&gt;Isi&lt;/li&gt; &lt;/ul&gt;</code>
        <br><br>
        <b>Ordered List (Angka 1,2,3):</b>
        <code>&lt;ol&gt; &lt;li&gt;Isi&lt;/li&gt; &lt;/ol&gt;</code>
    </div>

    <div class="card">
        <h2>4. Link & Media</h2>
        <p>Website tidak seru tanpa link dan gambar:</p>
        <p><b>Link:</b> <code>&lt;a href="https://google.com"&gt;Klik Saya&lt;/a&gt;</code></p>
        <p><b>Gambar:</b> <code>&lt;img src="gambar.jpg" alt="Deskripsi" width="200"&gt;</code></p>
    </div>

    <div class="card">
        <h2>5. Membuat Tabel</h2>
        <p>Tabel digunakan untuk menyusun data secara rapi.</p>
        <table>
            <tr>
                <th>Tag</th>
                <th>Fungsi</th>
            </tr>
            <tr>
                <td><code>&lt;tr&gt;</code></td>
                <td>Membuat baris (Table Row)</td>
            </tr>
            <tr>
                <td><code>&lt;th&gt;</code></td>
                <td>Judul kolom (Table Header)</td>
            </tr>
            <tr>
                <td><code>&lt;td&gt;</code></td>
                <td>Isi data (Table Data)</td>
            </tr>
        </table>
    </div>

    <div class="divider"></div>

    <div style="text-align: center;">
        <h3>Ingin Memahaminya Lebih Labnjut?</h3>
        <p>Ayo Daftar ataupun Login sekarang!</p>
            </a>
        </div>
    </div>


<footer style="text-align: center; padding: 40px; opacity: 0.5;">
    &copy; 2026 EduVibe - Belajar HTML Jadi Mudah
</footer>

</body>
</html>