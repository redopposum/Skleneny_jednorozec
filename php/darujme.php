<?php
$page = 'darujme';
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Skleněný jednorožec z.s. - Darujme</title>
<meta name="description" content="Podpořte peer služby Skleněného jednorožce z.s. a umožněte dostupnou podporu zdarma.">
<link rel="canonical" href="https://www.sklenenyjednorozec.cz/">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" rel="stylesheet">

<!-- CSS -->
<style>
/* ------------------------------ */
/*  BASE STYLING                  */
/* ------------------------------ */
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
  font-family: 'Cormorant', serif;
  font-size: 18px;
  line-height: 1.6;
  background: #f9f9f9;
  color: #000;
}
a { text-decoration: none; color: inherit; }
ul { list-style: none; }

/* ------------------------------ */
/*  NAVBAR                        */
/* ------------------------------ */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 20px;
  background: #fff;
  position: sticky;
  top: 0;
  z-index: 1000;
}
.navbar .logo img { height: 50px; }

.menu { display: flex; gap: 40px; align-items: center; }
.menu a { font-weight: 400; color: #000; transition: color .2s; }
.menu a.active, .menu a:hover { color: #e73370; }

/* CTA tlačítka */
.btn {
  background: #84365e;
  color: #fff !important;
  padding: 10px 22px;
  border-radius: 30px;
  font-weight: 700;
  white-space: nowrap;
}
.btn:hover { background: #e73370; }

/* Hamburger */
.hamburger {
  display: none;
  flex-direction: column;
  gap: 6px;
  background: none;
  border: none;
  cursor: pointer;
}
.hamburger span { width: 28px; height: 3px; background: #000; }

/* Mobilní CTA */
.mobile-only { display: none; }

/* ------------------------------ */
/*  MOBILE NAVBAR                 */
/* ------------------------------ */
@media (max-width: 768px) {
  .hamburger { display: flex; }
  .menu {
    position: fixed;
    top: 70px;
    left: 0;
    width: 100%;
    background: #fff;
    display: none;
    flex-direction: column;
    z-index: 999;
    gap: 20px;
    padding: 20px 0;
  }
  .menu.active { display: flex; }
  .desktop-only { display: none; }
  .mobile-only { display: block; }
}

/* ------------------------------ */
/*  DARUJME SECTION               */
/* ------------------------------ */
.darujme { padding: 4rem 2rem; max-width: 1200px; margin: 3rem auto; }
.darujme-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
}
.darujme-text { font-size: 1.1rem; line-height: 1.6; }
.darujme-text h2 { font-size: 2rem; margin-bottom: 1rem; }
.darujme-text ul { margin: 1rem 0 1rem 1.2rem; }
.darujme-widget iframe { border: none; border-radius: 10px; }

/* MOBILE */
@media (max-width: 900px) {
  .darujme-container { grid-template-columns: 1fr; }
}

/* ------------------------------ */
/*  FOOTER                        */
/* ------------------------------ */
.footer {
  background: #fff;
  color: #000;
  padding: 30px 20px;
  font-size: 18px;
}
.footer-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
}
.footer-left, .footer-center, .footer-right { display: flex; align-items: center; gap: 10px; }
.footer-center { flex-direction: column; text-align: center; }
.footer-right { flex-direction: column; text-align: right; }

/* Sociální ikony */
.social-icons { display: flex; gap: 12px; }
.social-icons img { width: 32px; height: 32px; object-fit: contain; }

/* Dropdown */
.dropdown-btn {
  background: none;
  border: none;
  cursor: pointer;
  font-size: 16px;
  font-family: 'Cormorant', serif;
  font-weight: 700;
}
.dropdown-content {
  display: none;
  margin-top: 5px;
  flex-direction: column;
}
.dropdown-content a {
  display: block;
  text-decoration: none;
  color: #000;
  font-size: 16px;
  margin-bottom: 5px;
}
.dropdown-content a:hover { color: #e73370; }

/* Footer bottom */
.footer-bottom { text-align: center; margin-top: 20px; opacity: 0.8; font-size: 16px; }

/* MOBILE */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    text-align: center;
    gap: 15px;
  }
  .footer-left, .footer-center, .footer-right {
    width: 100%;
    justify-content: center;
  }
}
</style>

<!-- Google Tag -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NKFFQ6HFS5"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-NKFFQ6HFS5');
</script>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" aria-label="Hlavní navigace">
  <div class="logo">
    <a href="/"><img src="logo.png" alt="Logo Skleněný jednorožec"></a>
  </div>

  <ul class="menu">
    <li><a href="/index.php" class="<?= $page==='mise'?'active':'' ?>">Mise</a></li>
    <li><a href="/sluzby.php" class="<?= $page==='sluzby'?'active':'' ?>">Služby</a></li>
    <li><a href="/bezpecnost.php" class="<?= $page==='bezpecnost'?'active':'' ?>">Bezpečnost</a></li>
    <li><a href="/tym.php" class="<?= $page==='tym'?'active':'' ?>">Tým</a></li>
    <li><a href="/clenstvi.php" class="<?= $page==='clenstvi'?'active':'' ?>">Členství</a></li>
    <li><a href="/darujme.php" class="active">Darujme</a></li>
    <li><a href="/novinky.php" class="<?= $page==='novinky'?'active':'' ?>">Novinky</a></li>
    <li><a href="/faq.php" class="<?= $page==='faq'?'active':'' ?>">FAQ</a></li>

    <!-- Mobilní CTA -->
    <li class="mobile-only">
      <a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn">Napište nám</a>
    </li>
  </ul>

  <!-- Desktop CTA -->
  <a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn desktop-only">Napište nám</a>

  <!-- Hamburger -->
  <button class="hamburger" aria-label="Otevřít menu" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>
</nav>

<!-- DARUJME SECTION -->
<main>
  <section class="darujme" id="darujme">
    <div class="darujme-container">
      <div class="darujme-text">
        <h2>161 × 2...3...4... sezení 🦄</h2>
        <p>Chceme, aby naše peer služby byly <strong>zdarma dostupné pro všechny</strong>, kdo je potřebují...</p>
        <p>Proto jsme vymyslely jednoduchou výzvu: <strong>daruj, kolik můžeš</strong>...</p>
        <ul>
          <li>udržet služby <strong>zdarma</strong>,</li>
          <li>postupně <strong>najmout další peerstvo</strong> s různorodými zkušenostmi,</li>
          <li>rozšířit projekt a <strong>pomoci více lidem</strong>,</li>
          <li>poskytnout peerstvu <strong>důstojnou mzdu</strong>.</li>
        </ul>
        <p><strong>Podpořte peer sezení a staňte se součástí naší komunity! 🦄</strong></p>
      </div>
      <div class="darujme-widget">
        <iframe src="TVŮJ-DARUJME-URL" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </section>
</main>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">

    <div class="footer-left social-icons">
      <a href="https://witter.cz/@sklenenyjednorozec" target="_blank" rel="noopener noreferrer">
        <img src="mastodon.png" alt="Mastodon">
      </a>
      <a href="https://www.instagram.com/sklenenyjednorozec" target="_blank" rel="noopener noreferrer">
        <img src="instagram.png" alt="Instagram">
      </a>
    </div>

    <div class="footer-center">
      <strong>Naše parťáctvo</strong>
      <div class="partners-logos">
        <!-- loga partnerů -->
      </div>
    </div>

    <div class="footer-right">
      <button class="dropdown-btn" onclick="toggleDropdown()">
        Jednorožec v médiích ▾
      </button>

      <div id="mediaDropdown" class="dropdown-content">
        <a href="" target="_blank">Rozhovor</a>
        <a href="" target="_blank">Článek</a>
        <a href="" target="_blank">Reportáž</a>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    🦄 Skleněný jednorožec z.s. | Co je moje, je naše. 🦄
  </div>
</footer>

<!-- SCRIPTY -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  // Hamburger menu
  const hamburger = document.querySelector(".hamburger");
  const menu = document.querySelector(".menu");
  hamburger.addEventListener("click", () => {
    menu.classList.toggle("active");
  });
});

// Footer dropdown
function toggleDropdown() {
  const dropdown = document.getElementById("mediaDropdown");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}
</script>

</body>
</html>
