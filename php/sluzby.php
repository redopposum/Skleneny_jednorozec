<?php $page = 'sluzby'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Skleněný jednorožec z.s. – Služby</title>

<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" rel="stylesheet">

<style>

/* RESET */
* { margin:0; padding:0; box-sizing:border-box; }

body {
  font-family:'Cormorant', serif;
  background:#f9f9f9;
  color:#000;
  font-size:18px;
  line-height:1.6;
}

h1,h2,h3,h4 {
  text-align:center;
  font-weight:700;
  margin:0.5em 0;
}

h2 { font-size:2.3rem; }
h3 { font-size:2rem; }
h4 { font-size:1.4rem; }

p, li { font-size:1.1rem; }

a { text-decoration:none; color:inherit; }

/* NAVBAR */
.navbar {
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:15px 20px;
  background:#fff;
  position:sticky;
  top:0;
  z-index:1000;
}

.logo img { height:50px; }

.menu {
  list-style:none;
  display:flex;
  gap:40px;
  align-items:center;
}

.menu a {
  font-weight:400;
}

.menu a.active,
.menu a:hover {
  color:#e73370;
}

.btn {
  background:#84365e;
  color:#fff !important;
  padding:10px 22px;
  border-radius:30px;
  font-weight:700;
  white-space:nowrap;
}

.btn:hover { background:#e73370; }

.hamburger {
  display:none;
  flex-direction:column;
  gap:6px;
  background:none;
  border:none;
  cursor:pointer;
}

.hamburger span {
  width:28px;
  height:3px;
  background:#000;
}

.desktop-only { display:block; }
.mobile-only { display:none; }

@media (max-width:768px) {
  .hamburger { display:flex; }

  .menu {
    position:fixed;
    top:70px;
    left:0;
    width:100%;
    background:#fff;
    display:none;
    flex-direction:column;
    gap:20px;
    padding:20px 0;
    text-align:center;
  }

  .menu.active { display:flex; }

  .desktop-only { display:none; }
  .mobile-only { display:block; }

  h2 { font-size:1.6rem; }
  h3 { font-size:1.5rem; }
}

/* SECTION */
section {
  background:#fff;
  padding:4rem 2rem;
  border-radius:10px;
  margin:3rem auto;
  max-width:1200px;
  box-shadow:0 4px 20px rgba(0,0,0,0.05);
}

/* SLUŽBY */
.three-columns {
  display:flex;
  gap:2rem;
  flex-wrap:wrap;
  justify-content:center;
  margin-top:2rem;
}

.column {
  background:#fafafa;
  padding:2rem;
  border-radius:10px;
  flex:1;
  min-width:250px;
  max-width:350px;
  text-align:center;
  box-shadow:0 3px 10px rgba(0,0,0,0.06);
}

.steps {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  gap:2rem;
  margin-top:2rem;
}

.step {
  background:#fafafa;
  padding:2rem;
  border-radius:10px;
  text-align:center;
  box-shadow:0 3px 10px rgba(0,0,0,0.06);
}

.icon {
  width:50px;
  margin-bottom:1rem;
}

/* FOOTER */
.footer {
  background:#fff;
  padding:30px 20px;
}

.footer-container {
  display:flex;
  justify-content:space-between;
align-items: center;
  gap:40px;
}

.social-icons {
  display:flex;
  gap:12px;
}

.partnertvi {
  margin-top: 30px;
  text-align: center;
}

.partnertvi h4 {
  margin-bottom: 15px;
  font-size: 1.4rem;
}

.partnertvi-loga {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 25px;
}

.partnertvi-loga img {
  max-height: 50px;
  opacity: 0.85;
}

.social-icons img { width:32px; }

.dropdown-btn {
  background:none;
  border:none;
  font-family:Cormorant, serif;
  font-size:18px;
  cursor:pointer;
font-weight:700;
}

.dropdown-content {
  display:none;
  margin-top:10px;
}

.footer-bottom {
  margin-top:30px;
  text-align:center;
  opacity:0.8;
}

@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    gap: 0px; /* menší než původních 16–24px */
    text-align: center;
  }

  .footer-left,
  .footer-center,
  .footer-right {
    width: 100%;
    margin: 0; /* reset margin */
  }

  /* Sociální ikony */
  .social-icons {
    justify-content: center;
    margin-bottom: 0; /* odstraní spodní mezeru */
  }

  /* Nadpis „Naše parťáctvo“ */
  .footer-center strong {
    display: block;
    margin: 0;      /* odstraní horní i spodní mezery */
    padding: 0;
    line-height: 1.2;
font-weight: 700;
  }

  /* Partneři */
  .partners-logos {
    margin: 0;
    padding: 0;
  }

.dropdown-btn {
  margin-top:20px;
}

  /* Dropdown */
  .dropdown-content {
    text-align: center;
  }
}




</style>
</head>

<body>

<nav class="navbar">
  <div class="logo">
    <a href="index.php"><img src="logo.png" alt="Skleněný jednorožec"></a>
  </div>

  <ul class="menu">
    <li><a href="index.php">Mise</a></li>
    <li><a href="sluzby.php" class="active">Služby</a></li>
    <li><a href="bezpecnost.php">Bezpečnost</a></li>
    
    <li><a href="clenstvi.php">Členství</a></li>
    
    <li><a href="novinky.php">Novinky</a></li>
    <li><a href="faq.php">FAQ</a></li>

    <li class="mobile-only">
      <a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn">Napište nám</a>
    </li>
  </ul>

  <a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn desktop-only">Napište nám</a>

  <button class="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const h = document.querySelector(".hamburger");
  const m = document.querySelector(".menu");
  h.addEventListener("click", () => m.classList.toggle("active"));
});
</script>

<section class="sluzby">
<h2>Zaměřujeme se na lidi a jejich příběhy</h2>

<p>
Zde si můžete prohlédnout, pro koho je naše služba určena, jaké služby nabízíme,
dokumenty, se kterými pracujeme, a jak by mohla vypadat spolupráce. Protože
<strong>zatím</strong> nejsme registrovaná sociální služba, nabízíme pouze krátkodobý
pilotní program do 3 sezení. Po jeho ukončení vám můžeme předat seznam dalších
služeb. Peer nebo peerka by měl/a být vybírán/a tak, abyste se navzájem neznali –
zachováváme tím bezpečí a etický rámec.
</p>

<div class="three-columns">
  <div class="column">
    <h4>Pro koho</h4>
    <ul>
      <li>Lidem procházejícím náročnými životními, psychickými nebo sociálními situacemi</li>
      <li>Každému, kdo hledá bezpečný prostor pro sdílení, porozumění a vzájemnou podporu</li>
      <li>Dospělým osobám od 18 let (mladší se souhlasem zákonného zástupce)</li>
    </ul>
  </div>

  <div class="column">
    <h4>Aktivity</h4>
    <ul>
      <li>Individuální setkání online</li>
      <li>Skupinová setkání</li>
      <li>Účast na vzdělávacích a osvětových aktivitách</li>
      <li>Spolupráce s organizacemi, kolektivy, komunitami</li>
      <li>Otevřené členství ve spolku pro uživatele a sympatizanty</li>
    </ul>
  </div>

  <div class="column">
    <h4>Dokumenty ke stažení</h4>
    <ul>
      <li><a href="https://www.sklenenyjednorozec.cz/dokumenty/pravidla.pdf" download>Pravidla poskytování služby</a></li>
      <li><a href="https://www.sklenenyjednorozec.cz/dokumenty/kodex.pdf" download>Etický kodex</a></li>
      <li><a href="https://www.sklenenyjednorozec.cz/dokumenty/citlivy_jazyk.pdf" download>Citlivý jazyk – proč ho používáme?</a></li>
      <li><a href="https://www.sklenenyjednorozec.cz/dokumenty/gdpr.pdf" download>Informace o zpracování osobních údajů (GDPR)</a></li>
      <li><a href="https://www.sklenenyjednorozec.cz/dokumenty/krizovy_plan.pdf" download>Krizový plán</a></li>
      <li><a href="https://www.sklenenyjednorozec.cz/dokumenty/hvezdice_potreb.php">🌟Hvězdice hodnot🌟</a></li>
    </ul>
  </div>
</div>

<h3>Jednoduše, bezpečně, bez stresu</h3>

<div class="steps">
  <div class="step">
    <img src="heart.webp" class="icon">
    <h4>Rezervace</h4>
    <p>Vyberete si termín přes jednoduchý formulář.</p>
  </div>

  <div class="step">
    <img src="heart.webp" class="icon">
    <h4>Link</h4>
    <p>10 min před sezením vám pošleme bezpečný anonymní odkaz na videohovor.</p>
  </div>

  <div class="step">
    <img src="heart.webp" class="icon">
    <h4>Sezení</h4>
    <p>Sezení je bez nahrávání, bez registrace a bez sdílení dat.</p>
  </div>

  <div class="step">
    <img src="heart.webp" class="icon">
    <h4>Ukončení</h4>
    <p>Peer nebo peerka ukončí sezení a deaktivuje link.</p>
  </div>
</div>
</section>

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

    <div>
      <button class="dropdown-btn" onclick="toggleDropdown()">Jednorožec v médiích ▾</button>
      <div id="mediaDropdown" class="dropdown-content">
        <a href="#">Rozhovor</a>
        <a href="#">Článek</a>
        <a href="#">Reportáž</a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    🦄 Skleněný jednorožec z.s. | Co je moje, je naše. 🦄
  </div>
</footer>

<script>
function toggleDropdown() {
  const d = document.getElementById("mediaDropdown");
  d.style.display = d.style.display === "block" ? "none" : "block";
}
</script>

</body>
</html>
