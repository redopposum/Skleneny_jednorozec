<?php $page = 'clenstvi'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skleněný jednorožec z.s. - Členství</title>
  <meta name="description" content="Staňte se součástí spolku Skleněný jednorožec z.s. a zapojte se do peer komunity.">

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

    /* ---------------- ČLENSTVÍ ---------------- */
    #clenstvi { padding:4rem 2rem; max-width:1200px; margin:3rem auto; background:#fff; border-radius:10px; box-shadow:0 4px 20px rgba(0,0,0,0.05); }
    .clenstvi-container { display:grid; gap:1rem; }

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

<!-- ČLENSTVÍ -->
<section id="clenstvi">
  <div class="clenstvi-container">
    <h2>Staňte se součástí změny</h2>
    <p>Rozhodly jsme se otevřít členství ve spolku všem lidem, kteří naše služby využívají, využívali nebo s nimi sympatizují. Věříme, že podpora nekončí u individuálního setkání – skutečná síla peer přístupu je v komunitě, která má možnost spolurozhodovat, tvořit a ovlivňovat své vlastní podmínky.</p>
    <p>Členství bude přístupné <strong>dvakrát ročně na valné hromadě</strong>, kde mohou lidé vstoupit do spolku jako plnohodnotné členstvo. Členské příspěvky budou <strong>solidární</strong>, od 0 Kč až po částku, kterou si každý může dovolit. Chceme, aby nikdo nebyl vyloučen kvůli financím.</p>
    <p>Jako členstvo spolku se budete moci aktivně účastnit jeho řízení – například hlasováním na valné hromadě nebo přinášením témat, která považujete za důležitá. Současně se můžete zapojit i do celé řady společných aktivit: od systémových podnětů a kulatých stolů přes pracovní skupiny až po občanský aktivismus či happeningy. Společné aktivity jsou pak otevřené i pro nečlenstvo, bez povinnosti podílet se na chodu spolku. Všichni jste vítáni.</p>
    <p>Věříme, že podpora má několik vrstev. Tou první je individuální opora v těžkých momentech. Další vrstvou je <strong>socializace a nalezení bezpečné komunity</strong>, kde člověk může růst, nacházet spojenectvo a sdílet zkušenosti. A tou třetí – často nejdůležitější – je možnost <strong>měnit podmínky, ve kterých trávíme své životy</strong>. Nejen zvládat následky, ale společně pomáhat měnit systém tak, aby snižoval zdroje ohrožení a stresu.</p>
    <p>Otevřené členství je pro nás cestou, jak proměnit podporu v něco hlubšího: v prostor, kde lidé mohou spolurozhodovat, vytvářet nové projekty, bránit své potřeby a společně ovlivňovat svět kolem sebe. Ať už přijdete s drobným nápadem nebo velkou vizí, máte dveře otevřené.</p>
    <p><strong>Členství je samozřejmě plně dobrovolné. Je jen na vás, nakolik a jestli vůbec se budete podílet na těchto našich aktivitách. Využití našich online služeb jím není nikterak podmíněno.</strong></p>
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
