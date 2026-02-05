<?php $page = 'tym'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Skleněný jednorožec z.s. - Tým</title>
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
  .desktop-only { display:none !important; }
  .cta-desktop { display:none !important; }
  .hamburger { display:flex; }
  .menu.mobile-only { display:none; }
  .menu.mobile-only.active { display:flex; }
}

/* ---------------- TÝM ---------------- */
.tym { padding:4rem 2rem; max-width:1200px; margin:3rem auto; }
.tym h3 { margin-bottom:2rem; }
.tym h4 { margin-bottom:0rem; }
.tym h5 { margin-top:0rem; font-weight:400; }
.tym-grid { display:flex; gap:2rem; flex-wrap:wrap; justify-content:center; }
.tym-card { background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.05); width:280px; display:flex; flex-direction:column; align-items:center; text-align:center; }
.tym-card img { width:100%; height:auto; }
.tym-card-content { padding:1rem; }
.tym-card-buttons { display:flex; gap:10px; justify-content:center; margin-top:10px; }
.reserve-btn, .read-more { padding:8px 16px; border-radius:25px; font-weight:700; border:none; cursor:pointer; }
.reserve-btn { background:#84365e; color:#fff; }
.reserve-btn:hover { background:#e73370; }
.read-more {
  background: #fff;
  font-family: 'Cormorant', serif;
  color: #84365e;
  padding: 8px 16px;
  border-radius: 25px;
  font-weight: 700;
  border: 0px solid #84365e;
  cursor: pointer;
  transition: background 0.3s, color 0.3s;
font-size: 18px;
}

.read-more:hover {
  background: #84365e;
  color: #fff;
}

.read-more:hover { background:#bbb; }

/* ---------------- MODAL ---------------- */
.modal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); justify-content:center; align-items:center; padding:20px; z-index:1000; }
.modal-content { background:#fff; padding:2rem; border-radius:10px; max-width:800px; width:100%; max-height:90vh; overflow-y:auto; position:relative; }
.modal-close { position:absolute; top:10px; right:15px; font-size:1.5rem; font-weight:bold; cursor:pointer; }

/* dva sloupce pro kvalifikace */
.dva-sloupce { display:grid; grid-template-columns:1fr 1fr; gap:10px; list-style:disc inside; }

@media(max-width:768px){
  .tym-grid { flex-direction:column; align-items:center; }
  .dva-sloupce { grid-template-columns:1fr; }
}
  .tym {
    padding-top: 0rem;  /* snížíme vrchní padding sekce */
    padding-bottom: 0rem;
  }

  .tym h3 {
    margin-top: 0rem; /* nebo 0 pro úplné odstranění */
    margin-bottom: 1rem;
  }
}

/* ---------------- FOOTER ---------------- */
.footer { background:#fff; color:#000; padding:30px 20px; font-size:18px; font-family:'Cormorant', serif; }
.footer-container { display:flex; justify-content:space-between; align-items:flex-start; gap:40px; flex-wrap:wrap; }
.footer-left, .footer-center, .footer-right { display:flex; flex-direction:column; gap:10px; }
.footer-left.social-icons { flex-direction:row; }
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
    <li><a href="tym.php" class="<?= $page=='tym'?'active':'' ?>">Tým</a></li>
    <li><a href="clenstvi.php" class="<?= $page=='clenstvi'?'active':'' ?>">Členství</a></li>
    <li><a href="darujme.php" class="<?= $page=='darujme'?'active':'' ?>">Darujme</a></li>
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

<!-- TÝM -->
<section class="tym">
  <h3>Náš tým</h3>
  <div class="tym-grid">

    <!-- Eva -->
    <div class="tym-card">
      <img src="eva.webp" alt="Eva">
      <div class="tym-card-content">
        <h4>Eva</h4>
        <h5>Psychologie, psychiatrie, LGBTIQ+</h5>
        <div class="tym-card-buttons">
          <button class="read-more" data-modal="modal-eva">Profil</button>
          <a href="https://app.simplymeet.me/sklenenyjednorozec" target="_blank" class="reserve-btn">Rezervace</a>
        </div>
      </div>
    </div>

    <!-- Člen 2 -->
    <div class="tym-card">
      <img src="placeholder.webp" alt="Člen 2">
      <div class="tym-card-content">
        <h4>Člen 2</h4>
        <div class="tym-card-buttons">
          <button class="read-more" data-modal="modal-clen2">Profil</button>
          <a href="#" class="reserve-btn">Rezervace</a>
        </div>
      </div>
    </div>

    <!-- Člen 3 -->
    <div class="tym-card">
      <img src="placeholder.webp" alt="Člen 3">
      <div class="tym-card-content">
        <h4>Člen 3</h4>
        <div class="tym-card-buttons">
          <button class="read-more" data-modal="modal-clen3">Profil</button>
          <a href="#" class="reserve-btn">Rezervace</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Modal Eva -->
<div id="modal-eva" class="modal">
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <p>Od roku 2018 pracuje v sociálních službách. Má zkušenosti s prací v sociální rehabilitaci pro osoby s psychiatrickým onemocněním, na krizové lince a v domě s utajenou adresou pro přeživší domácího násilí, jeden čas působila jako peerka v CDZ, v současnosti pracuje jako podpora v bytě s vysokou mírou podpory pro osoby s psychiatrickými obtížemi. Specializuje se na témata psychických nesnází, psychiatrických onemocnění, identity, sexuality a vztahovosti a jejich různorodostí.</p>
    <h4>Kvalifikace</h4>
    <ul class="dva-sloupce">
      <li>Jednoletý výcvik Otevřeného dialogu</li>
      <li>Základní výcvik krizové intervence</li>
      <li>Výcvik v metodě Motivačních rozhovorů</li>
      <li>Základní peerovský kurz</li>
      <li>Kompletní kurz Sexualita a vztahy osob s postižením</li>
      <li>Kurz Základy sociální práce s LGBTIQ+ klientelou</li>
      <li>Kurz Komunikace s lidmi s psychotickým onemocněním</li>
      <li>Kurz Sociokulturní specifika romské komunity</li>
      <li>Kurz Genderově podmíněné násilí v romských komunitách</li>
      <li>Kurz Úvod do práce se skupinou zaměřenou na zotavení a silné stránky</li>
      <li>Kurz Strategie rozpoznání a předcházení traumatu v sociální práci</li>
    </ul>
  </div>
</div>

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
// Hamburger menu
const hamburger = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".menu.mobile-only");
hamburger.addEventListener("click", () => {
  mobileMenu.classList.toggle("active");
});

// Modal
document.querySelectorAll('.read-more').forEach(btn => {
  btn.addEventListener('click', () => {
    const modalId = btn.getAttribute('data-modal');
    document.getElementById(modalId).style.display = 'flex';
  });
});
document.querySelectorAll('.modal-close').forEach(span => {
  span.addEventListener('click', () => {
    span.parentElement.parentElement.style.display = 'none';
  });
});
window.addEventListener('click', e => {
  if (e.target.classList.contains('modal')) {
    e.target.style.display = 'none';
  }
});

// Footer dropdown
function toggleDropdown() {
  const dropdown = document.getElementById("mediaDropdown");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}
</script>

</body>
</html>
