<?php $page = 'bezpecnost'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skleněný jednorožec z.s. - Bezpečnost</title>
  <meta name="description" content="Ochrana soukromí a bezpečí při používání služeb Skleněného jednorožce z.s.">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" rel="stylesheet">

  <style>
    /* ---------------- RESET & GLOBAL ---------------- */
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Cormorant', serif; color:#000; background:#f9f9f9; line-height:1.6; font-size:18px; }
    a { text-decoration:none; color:inherit; }
    ul { list-style:none; }
    h1,h2,h3,h4 { font-weight:700; margin:0.5em 0; text-align:center; }
    h1{font-size:3rem;} h2{font-size:2.3rem;} h3{font-size:2rem;} h4{font-size:1.7rem;}
    p,li{font-size:1.1rem; margin-bottom:0.5em;}
    .btn { background: #84365e; color: #fff !important; padding: 10px 22px; border-radius: 30px; font-weight: 700; text-decoration: none; white-space: nowrap; }
.btn:hover { background: #e73370; }

    /* ---------------- NAVBAR ---------------- */
    .navbar { display:flex; align-items:center; justify-content:space-between; padding:15px 20px; background:#fff; position:sticky; top:0; z-index:1000; }
    .logo img { height:50px; }

    .menu.desktop-only { display:flex; gap:40px; justify-content:center; flex:1; }
    .menu.desktop-only li { list-style:none; }
    .menu.desktop-only a { font-weight:400; transition:color .2s; }
    .menu.desktop-only a.active, .menu.desktop-only a:hover { color:#e73370; }

    .cta-desktop { margin-left:auto; }

    .menu.mobile-only { display:none; flex-direction:column; gap:20px; background:#fff; padding:20px 0; position:fixed; top:70px; left:0; width:100%; text-align:center; z-index:999; }
    .menu.mobile-only.active { display:flex; }

    .hamburger { display:none; flex-direction:column; gap:6px; background:none; border:none; cursor:pointer; }
    .hamburger span { width:28px; height:3px; background:#000; }

    @media(max-width:768px){
      .desktop-only { display:none !important; } /* skryjeme desktop menu */
      .cta-desktop { display:none !important; } /* skryjeme desktop CTA */
      .hamburger { display:flex; }
      .menu.mobile-only { display:none; }
      .menu.mobile-only.active { display:flex; }
    }

    /* ---------------- BEZPEČNOST ---------------- */
    .bezpecnost { padding:4rem 2rem; max-width:1200px; margin:3rem auto; background:#fff; border-radius:10px; box-shadow:0 4px 20px rgba(0,0,0,0.05); }
    .bezpecnost-container { display:grid; gap:1rem; }
    .bezpecnost-note { margin-top:1rem; font-weight:700; }

    /* ---------------- FOOTER ---------------- */
    .footer { background:#fff; color:#000; padding:30px 20px; font-size:18px; font-family:'Cormorant', serif; }
    .footer-container { display:flex; justify-content:space-between; align-items:flex-start; gap:40px; flex-wrap:wrap; }
    .footer-left, .footer-center, .footer-right { display:flex; flex-direction:column; gap:10px; }
    .footer-left.social-icons { flex-direction:row; } /* ikony vedle sebe */
    .social-icons img { width:32px; height:32px; }
    .dropdown-btn { background:none; border:none; cursor:pointer; font-weight:700; font-family:'Cormorant', serif; font-size:18px; }
    .dropdown-content { display:none; flex-direction:column; margin-top:5px; }
    .dropdown-content a { color:#000; font-size:16px; margin-bottom:5px; opacity:0.8; }
    .dropdown-content a:hover { color:#e73370; }
    .footer-bottom { text-align:center; margin-top:20px; opacity:0.8; }

    @media(max-width:768px){
      .footer-container { flex-direction:column; text-align:center; gap:15px; }
      .footer-left, .footer-center, .footer-right { width:100%; justify-content:center; }
      .dropdown-content { text-align:center; }
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="logo"><a href="index.php"><img src="logo.png" alt="Skleněný jednorožec"></a></div>

  <!-- Desktop menu -->
  <ul class="menu desktop-only">
    <li><a href="index.php" class="<?= $page=='mise'?'active':'' ?>">Mise</a></li>
    <li><a href="sluzby.php" class="<?= $page=='sluzby'?'active':'' ?>">Služby</a></li>
    <li><a href="bezpecnost.php" class="<?= $page=='bezpecnost'?'active':'' ?>">Bezpečnost</a></li>
    
    <li><a href="clenstvi.php" class="<?= $page=='clenstvi'?'active':'' ?>">Členství</a></li>
    
    <li><a href="novinky.php" class="<?= $page=='novinky'?'active':'' ?>">Novinky</a></li>
    <li><a href="faq.php" class="<?= $page=='faq'?'active':'' ?>">FAQ</a></li>
  </ul>
  <a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn cta-desktop">Napište nám</a>

  <!-- Hamburger -->
  <button class="hamburger" aria-label="Otevřít menu">
    <span></span><span></span><span></span>
  </button>

  <!-- Mobile menu -->
  <ul class="menu mobile-only">
    <li><a href="index.php" class="<?= $page=='mise'?'active':'' ?>">Mise</a></li>
    <li><a href="sluzby.php" class="<?= $page=='sluzby'?'active':'' ?>">Služby</a></li>
    <li><a href="bezpecnost.php" class="<?= $page=='bezpecnost'?'active':'' ?>">Bezpečnost</a></li>
    <li><a href="tym.php" class="<?= $page=='tym'?'active':'' ?>">Tým</a></li>
    <li><a href="clenstvi.php" class="<?= $page=='clenstvi'?'active':'' ?>">Členství</a></li>
    <li><a href="darujme.php" class="<?= $page=='darujme'?'active':'' ?>">Darujme</a></li>
    <li><a href="novinky.php" class="<?= $page=='novinky'?'active':'' ?>">Novinky</a></li>
    <li><a href="faq.php" class="<?= $page=='faq'?'active':'' ?>">FAQ</a></li>
    <li><a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn">Napište nám</a></li>
  </ul>
</nav>

<!-- BEZPEČNOST -->
<section class="bezpecnost" id="bezpecnost">
  <div class="bezpecnost-container">
    <h2>Technická řešení pro vaši bezpečnost</h2>

    <p>
      Ochrana soukromí a bezpečí je pro nás zásadní hodnotou. Při poskytování
      našich služeb využíváme pouze ověřené technologické nástroje a postupy,
      které kladou důraz na anonymitu, šifrování a minimalizaci uchovávaných dat.
    </p>

    <p>
      Komunikace probíhá prostřednictvím zabezpečených kanálů a používáme řešení,
      která nevyžadují sdílení citlivých osobních údajů nad rámec toho, co je
      nezbytně nutné. Technické prostředky průběžně vyhodnocujeme a přizpůsobujeme
      aktuálním bezpečnostním standardům.
    </p>

    <p>
      Veškerá interní dokumentace a provozní data jsou uchovávána v omezeném
      rozsahu a výhradně pro účely zajištění kvality služby, jejího zlepšování a
      zákonných povinností. Data jsou anonymizována a uchovávána pouze po
      nezbytně dlouhou dobu.
    </p>

    <p class="bezpecnost-note">
      Uvědomujeme si, že významnou roli v ochraně soukromí hraje i samotný uživatel či uživatelka.
      Doporučujeme používat silná a jedinečná hesla, zabezpečené e-mailové služby
      a dbát na soukromí prostředí, ve kterém komunikace probíhá.
      <strong>Na vašem soukromí nám skutečně záleží.</strong>
    </p>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-left social-icons">
      <a href="https://witter.cz/@sklenenyjednorozec" target="_blank" rel="noopener noreferrer"><img src="mastodon.png" alt="Mastodon"></a>
      <a href="https://www.instagram.com/sklenenyjednorozec" target="_blank" rel="noopener noreferrer"><img src="instagram.png" alt="Instagram"></a>
    </div>
    <div class="footer-center">
      <strong>Naše parťáctvo</strong>
      <div class="partners-logos"></div>
    </div>
    <div class="footer-right">
      <button class="dropdown-btn" onclick="toggleDropdown()">Jednorožec v médiích ▾</button>
      <div id="mediaDropdown" class="dropdown-content">
        <a href="" target="_blank">Rozhovor</a>
        <a href="" target="_blank">Článek</a>
        <a href="" target="_blank">Reportáž</a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">🦄 Skleněný jednorožec z.s. | Co je moje, je naše. 🦄</div>
</footer>

<script>
  // Hamburger toggle
  const hamburger = document.querySelector(".hamburger");
  const mobileMenu = document.querySelector(".menu.mobile-only");
  hamburger.addEventListener("click", () => {
    mobileMenu.classList.toggle("active");
  });

  // Footer dropdown
  function toggleDropdown() {
    const dropdown = document.getElementById("mediaDropdown");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  }
</script>

</body>
</html>
