<?php
$page = 'faq';
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ – Skleněný Jednorožec | Peer podpora zdarma</title>
<meta name="description" content="Často kladené otázky o peer službě Skleněný Jednorožec z.s. Zjistěte, komu je určena, co můžete očekávat, jak funguje podpora a jak se objednat. Peer služba zdarma a bez hodnocení.">
<link rel="canonical" href="https://www.sklenenyjednorozec.cz/faq.php">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" rel="stylesheet">

<!-- CSS -->
<style>
/* RESET & GLOBAL */
* { margin:0; padding:0; box-sizing:border-box; }
body { font-family:'Cormorant', serif; color:#000; background:#f9f9f9; line-height:1.6; font-size:18px; }
a { text-decoration:none; color:inherit; }
p,li { font-size:1.1rem; margin-bottom:0.5em; }
main { max-width:1200px; margin:0 auto; padding:0 1.5rem; }
h1,h2,h3,h4 { font-weight:700; margin:0.5em 0; text-align:center; }
h1{font-size:3rem;} h2{font-size:2.3rem;} h3{font-size:2rem;} h4{font-size:1.7rem;}
@media (max-width:768px){
  h1{font-size:2rem;} h2{font-size:1.6rem;} h3{font-size:1.5rem;} h4{font-size:1.3rem;}
}

/* ------------------------------ */
/*  NAVBAR                        */
/* ------------------------------ */
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px 20px;
  background: #fff;
  position: sticky;
  top: 0;
  z-index: 1000;
}

.navbar .logo img {
  height: 50px;
}

.menu {
  list-style: none;
  display: flex;
  gap: 40px;
  margin: 0;
  padding: 0;
  align-items: center;
}

.menu a {
  font-weight: 400;
  color: #000;
}

.menu a.active,
.menu a:hover {
  color: #e73370;
}

/* CTA button */
.btn {
  background: #84365e;
  color: #ffffff !important;
  padding: 10px 22px;
  border-radius: 30px;
  font-weight: 700;
  text-decoration: none;
  white-space: nowrap;
  display: inline-block;
}

.btn:hover {
  background: #e73370;
}

/* Hamburger */
.hamburger {
  display: none;
  flex-direction: column;
  gap: 5px;
  background: none;
  border: none;
  cursor: pointer;
}

.hamburger span {
  width: 28px;
  height: 3px;
  background: #000;
}

/* Mobilní tlačítko */
.mobile-only {
  display: none;
}

/* ------------------------------ */
/*  MOBILE NAVBAR                 */
/* ------------------------------ */
@media (max-width: 768px) {
  .hamburger {
    display: flex;
  }

  .menu {
    position: fixed;
    top: 70px;
    left: 0;
    width: 100%;
    flex-direction: column;
    background: #fff;
    display: none;
    gap: 20px;
    padding: 20px 0;
    z-index: 999;
  }

  .menu.active {
    display: flex;
  }

  .menu li.mobile-only {
    display: block;
    text-align: center;
  }

  .desktop-only {
    display: none;
  }
}

/* ------------------------------ */
/*  FAQ SECTION                   */
/* ------------------------------ */
#faq {
  max-width: 900px;
  margin: 3rem auto;
  padding: 0 1rem;
}

.faq-item {
  margin: 1.5rem 0;
}

.faq-question {
  background: none;
  border: none;
  font-size: 1.2rem;
  font-weight: bold;
  cursor: pointer;
  width: 100%;
  text-align: left;
  padding: 0.5rem 1rem;
  transition: color 0.2s;
  font-family: 'Cormorant', serif;
}

.faq-question:hover {
  color: #e73370;
}

.faq-answer {
  display: none;
  margin-top: 0.5rem;
  background: #fafafa;
  padding: 1rem;
  border-radius: 8px;
  border-left: 4px solid #ec6d97;
  font-size: 1rem;
  line-height: 1.7;
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
  align-items: flex-start;
  flex-wrap: wrap;
  gap: 20px;
}

/* Social icons */
.social-icons {
  display: flex;
  gap: 12px;
  align-items: center;
}

.social-icons img {
  width: 32px;
  height: 32px;
  object-fit: contain;
}

/* Footer center */
.footer-center {
  text-align: center;
  flex: 1;
}

.footer-right {
  text-align: right;
}

.dropdown-btn {
  background: none;
  border: none;
  font-size: 18px;
  cursor: pointer;
  font-family: 'Cormorant', serif;
  font-weight: 700;
}

.dropdown-content {
  display: none;
  margin-top: 8px;
  text-align: right;
}

.dropdown-content a {
  display: block;
  color: #000;
  text-decoration: none;
  font-size: 16px;
  padding: 3px 0;
}

.dropdown-content a:hover {
  color: #84365e;
}

.footer-bottom {
  text-align: center;
  margin-top: 30px;
  opacity: 0.8;
  font-size: 0.9rem;
}

/* Responsive footer */
@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .footer-right {
    text-align: center;
  }

  .dropdown-content {
    text-align: center;
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
   
    <li><a href="/clenstvi.php" class="<?= $page==='clenstvi'?'active':'' ?>">Členství</a></li>
    
    <li><a href="/novinky.php" class="<?= $page==='novinky'?'active':'' ?>">Novinky</a></li>
    <li><a href="/faq.php" class="active">FAQ</a></li>

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

<!-- MAIN FAQ -->
<main>
<section id="faq">
  <h1>Často kladené otázky</h1>

  <div class="faq-item">
    <button class="faq-question">Co je Skleněný Jednorožec?</button>
    <div class="faq-answer">
      Jsme nezisková peer služba. Nabízíme podporu lidem, kteří procházejí psychicky nebo životně náročným obdobím – ať už jde o dlouhodobou bolest, ztrátu, úzkosti, vyhoření, rozchod, identitu, trauma nebo cokoliv, co vás tíží.<br><br>
      Věříme, že vaše zkušenost má hodnotu a že péče nemusí být odborně „opatřená razítkem“, aby byla smysluplná.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Kdo může přijít na peer podporu?</button>
    <div class="faq-answer">
      Někdy lidé váhají, protože si myslí, že jejich trápení „není dost vážné“ – u nás nic takového neexistuje. <br><br>
      Můžete přijít s čímkoliv, co v sobě nosíte: malé i velké věci mají stejnou hodnotu. Důležité je jen to, jak se cítíte vy sami.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Je služba opravdu zdarma?</button>
    <div class="faq-answer">
      Ano. Služba je vždy zdarma. Je financována z darů, grantů a podpory komunity. Peníze nejsou překážkou, aby se člověk dostal k bezpečnému prostoru a podpoře.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Jak setkání probíhá?</button>
    <div class="faq-answer">
      Setkání je přátelský, lidský rozhovor. Peer pracovník není terapeut ani autorita – je to člověk, který má vlastní zkušenost s náročným obdobím a umí nabídnout porozumění, respekt, klid a citlivost.<br><br>
      Vy určujete tempo i témata. My doprovázíme.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Potřebuji diagnózu nebo doporučení?</button>
    <div class="faq-answer">
      Nepotřebujete vůbec nic. Nepožadujeme diagnózy, potvrzení ani posudky. Věříme, že vaše zkušenost sama o sobě je dostatečná a důležitá.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Jak vás můžu kontaktovat?</button>
    <div class="faq-answer">
      Kontaktní  tlačítko najdete na liště menu – můžete nám napsat e-mail nebo si rovnou zarezervovat setkání. Reagujeme rychle a domluvíme s vámi termín, který vám bude vyhovovat.
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

<!-- SCRIPTS -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  // FAQ toggle
  document.querySelectorAll(".faq-question").forEach(q => {
    q.addEventListener("click", () => {
      const a = q.nextElementSibling;
      a.style.display = a.style.display === "block" ? "none" : "block";
    });
  });

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
  dropdown.style.display =
    dropdown.style.display === "block" ? "none" : "block";
}
</script>

</body>
</html>
