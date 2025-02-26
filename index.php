<?php
include 'config.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="geo.region" content="ID" />
    <meta name="geo.country" content="ID" />
    <meta name="language" content="id-ID" />
    <meta name="tgn.nation" content="Indonesia" />
    <meta property="og:type" content="object" />
    <meta property="og:title" content="Data HK Lotto - Data Hongkong Lotto - Result HK Lotto" />
    <meta property="og:description" content="<?php echo $site_description; ?>" />
    <meta property="og:url" content="<?php echo $base_url; ?>" />
    <meta property="og:site_name" content="<?php echo $site_description; ?>" />  
    <link rel="stylesheet" type="text/css" href="css/styles.css" />  
    <link rel="icon" href="img/favicon.png" sizes="32x32" />
    <link rel="icon" href="img/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/favicon.png" />
    <link rel="canonical" href="<?php echo $base_url; ?>" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic|Oswald:400,700" media="screen">
    <!-- Google meta Tag -->
    <meta name="google-site-verification" content="Sa2Bp22NqVKYj3QmI527cUBlQInU_Buk9dsKJp_dz_k" />
    <!-- End Google meta Tag -->
    <script>
        function toggleTheme() {
            const body = document.body;
            const themeToggle = document.getElementById('themeToggle');
            if (body.classList.contains('dark-mode')) {
                body.classList.remove('dark-mode');
                localStorage.setItem('theme', 'light');
                themeToggle.classList.remove('dark');
            } else {
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
                themeToggle.classList.add('dark');
            }
        }
        
        window.onload = function() {
            if (localStorage.getItem('theme') === 'dark') {
                document.body.classList.add('dark-mode');
                document.getElementById('themeToggle').classList.add('dark');
            }
        };
    </script>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="<?php echo $base_url; ?>"><img src="img/logo.png" alt="GitHub Clone Logo" height="90" class="logo"></a>
        </div>
        <div class="nav-container">
        <button class="nav-btn left">&#10094;</button> 
        <div class="nav">
            <a href="<?php echo $base_url; ?>" title="Data HK Lotto">Data HK Lotto</a>
            <a href="http://188.166.184.249/" title="Data SDY Lotto">Data SDY Lotto</a>

            <button id="themeToggle" class="toggle-btn" onclick="toggleTheme()">
                <span class="toggle-icon"></span>
            </button>
            </div>
            <button class="nav-btn right">&#10095;</button> 
            </div>
    </header>
    
    <?php include 'ads.php'; ?> 

    <main>
        <section class="content">
            <h1><a href="<?php echo $base_url; ?>">Data HK Lotto - Data Hongkong Lotto - Result HK Lotto</a></h1>
<p><a href="<?php echo $base_url; ?>">Data HK Lotto</a> adalah result keluaran togel Hongkong lotto yang di susun menjadi sebuah tabel data hongkong lotto, dimana data yang di tampilkan di situs ini di ambil langsung dari situs resmi hongkonglotto. Data Hongkong Lotto ini selalu update secara real-time setiap hari, kurang lebih jadwal result data hk lotto akan keluar pada pukul 23:00 WIB sama persis dengan result hongkongpools. </p>

<?php include 'data.php'; ?> 

<p>Network:</p>
<ul>
<li><a href="http://178.128.112.199/" target="_blank">Paito Sdy Lotto</a></li>
<li><a href="http://157.245.58.219/" target="_blank" >Paito Hk Lotto</a></li>
<li><a href="http://188.166.184.249/" target="_blank" >Data Sdy Lotto</a></li>
<li><a href="http://128.199.143.53/" target="_blank" >Data Hk Lotto</a></li>
<li><a href="http://paitosdy.me/" target="_blank" >Paito Sdy</a></li>
<li><a href="http://paitosingapore.net/" target="_blank" >Paito Sgp</a></li>
<li><a href="http://paitohongkong.me/" target="_blank" >Paito HK</a></li>
</ul>

</section>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Data HK Lotto. All rights reserved.</p>
        </div>
    </footer>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    let links = document.querySelectorAll("a[href]");
    let base_url = "<?php echo rtrim($base_url, '/'); ?>";

    links.forEach(link => {
        let link_href = link.href;

        if (!link_href.startsWith(base_url) || link_href.includes("logout")) {
            link.setAttribute("target", "_blank");
            link.setAttribute("rel", "noopener noreferrer");
        }
    });
});
</script>
</body>
</html>