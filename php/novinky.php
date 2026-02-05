<?php $page = 'novinky'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Skleněný jednorožec z.s. - Novinky</title>
<meta name="description" content="Nejnovější články, příběhy a informace z našeho spolku Skleněný Jednorožec.">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" rel="stylesheet">

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

/* NAVBAR */
.navbar { display:flex; align-items:center; justify-content:space-between; padding:15px 20px; background:#fff; position:sticky; top:0; z-index:1000; }
.logo img { height:50px; }
.menu { list-style:none; display:flex; gap:40px; margin:0; padding:0; align-items:center; }
.menu a { font-weight:400; color:#000; transition:color 0.2s; }
.menu a.active,.menu a:hover { color:#e73370; }
.btn { background:#84365e; color:#fff !important; padding:10px 22px; border-radius:30px; font-weight:700; text-decoration:none; white-space:nowrap; }
.btn:hover { background:#e73370; }
.hamburger { display:none; flex-direction:column; gap:6px; background:none; border:none; cursor:pointer; }
.hamburger span { width:28px; height:3px; background:#000; }
.desktop-only { display:block; }
.mobile-only { display:none; }
@media (max-width:768px){
  .hamburger { display:flex; }
  .menu { position:fixed; top:70px; left:0; width:100%; background:#fff; display:none; flex-direction:column; gap:20px; padding:20px 0; text-align:center; z-index:999; }
  .menu.active { display:flex; }
  .desktop-only { display:none; }
  .mobile-only { display:block; }
}

/* NOVINKY KARUSEL */
.novinky-carousel { background:white; padding:4rem 2rem; border-radius:10px; margin:3rem auto; max-width:1200px; box-shadow:0 4px 20px rgba(0,0,0,0.05); position:relative; overflow:hidden; }
.carousel-wrapper { display:flex; transition: transform 0.5s ease-in-out; width:100%; }
.carousel-slide { display:flex; flex:0 0 100%; gap:2rem; align-items:flex-start; background:#fafafa; padding:2rem; border-radius:10px; box-shadow:0 3px 10px rgba(0,0,0,0.06); box-sizing:border-box; }
.carousel-slide img { width:300px; height:300px; object-fit:cover; border-radius:10px; flex-shrink:0; }
.carousel-text { flex:1; }
.carousel-text h3 { margin-bottom:1rem; font-size:1.6rem; }
.carousel-text p { margin-bottom:0.5rem; line-height:1.5; font-size:1.1rem; color:#333; }
.carousel-btn { position:absolute; top:50%; transform:translateY(-50%); background:none; color:#84365e; border:none; width:45px; height:45px; font-size:2rem; border-radius:50%; cursor:pointer; z-index:10; transition:background 0.3s; }
.carousel-btn:hover { background:#e73370; color:#fff; }
.carousel-btn.prev { left:10px; }
.carousel-btn.next { right:10px; }
@media (max-width:900px){
  .carousel-slide { flex-direction:column; align-items:center; }
  .carousel-slide img { width:100%; height:auto; }
  .carousel-text { text-align:center; }
}
@media (max-width:768px){
  .carousel-btn { width:40px; height:40px; font-size:1.5rem; }
}

/* FOOTER */
.footer { background:white; color:black; padding:30px 20px; font-size:18px; }
.footer-container { display:flex; justify-content:space-between; align-items:flex-start; gap:40px; }
.footer-left, .footer-center, .footer-right { display:flex; align-items:center; gap:10px; }
.footer-center { flex-direction:column; text-align:center; }
.footer-right { flex-direction:column; text-align:right; }
.social-icons { display:flex; gap:12px; }
.social-icons img { width:32px; height:32px; }
.dropdown-btn { background:none; border:none; color:black; font-size:18px; font-family:'Cormorant', serif; cursor:pointer; padding:0; }
.dropdown-content { display:none; margin-top:10px; }
.dropdown-content a { display:block; color:black; text-decoration:none; margin-bottom:6px; opacity:0.8; }
.dropdown-content a:hover { color:#84365e; text-decoration:none; }
.footer-bottom { margin-top:30px; text-align:center; opacity:0.8; }
@media (max-width:768px){
  .footer-container { flex-direction:column; gap:24px; text-align:center; }
  .footer-left, .footer-center, .footer-right { width:100%; }
  .social-icons { justify-content:center; }
  .dropdown-content { text-align:center; }
}


/*sumary*/

  details {
    margin: 1em 0;
  }

  summary {
    list-style: none; /* schová defaultní šipku */
    cursor: pointer;
    font-weight: 600;
    color: #84365e;
    display: inline-flex;
    align-items: center;
    gap: 0.4em;
  }

  summary::-webkit-details-marker {
    display: none; /* schová defaultní šipku v Safari/Chrome */
  }

  summary::after {
    content: "▾";
    font-size: 0.9em;
    transition: transform 0.2s ease;
  }

  details[open] summary::after {
    transform: rotate(180deg);
  }

  summary:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="logo"><a href="/"><img src="logo.png" alt="Logo Skleněný jednorožec"></a></div>
  <ul class="menu">
    <li><a href="/index.php">Mise</a></li>
    <li><a href="/sluzby.php">Služby</a></li>
    <li><a href="/bezpecnost.php">Bezpečnost</a></li>
   
    <li><a href="/clenstvi.php">Členství</a></li>
    
    <li><a href="/novinky.php" class="active">Novinky</a></li>
    <li><a href="/faq.php">FAQ</a></li>
    <li class="mobile-only"><a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn">Napište nám</a></li>
  </ul>
  <a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn desktop-only">Napište nám</a>
  <button class="hamburger" aria-label="Otevřít menu"><span></span><span></span><span></span></button>
</nav>

<!-- NOVINKY KARUSEL -->
<section class="novinky-carousel">
  <button class="carousel-btn prev" aria-label="Předchozí novinka">‹</button>

  <div class="carousel-wrapper">

 <div class="carousel-slide">
      <img src="obrazky/setkani.webp" alt="První otevřené setkání">
      <div class="carousel-text">
        <h3>A věci se začaly dít</h3>
        <p>
  Tak takhle to vypadalo na otevřeném setkání. Děkujeme všem, kterx dorazilx.
  Bylo to milé, laskavé, objevné a inspirativní; pojmenovalx jsme si, co chybí,
  na co se dále zaměřit, nad čím přemýšlet a co všechno lze podniknout.
</p>

<details>
  <summary><strong>A co dál?</strong></summary>

<ul>
  <li>síťovat, síťovat a zase síťovat</li>
  <li>přesně si naformulovat obsah „peerství“</li>
  <li>vytvořit podrobnější metodiky práce</li>
  <li>rozjet pilotní službu</li>
  <li>připravovat se na zápis do rejstříku</li>
</ul>

<p>
  Držte palce, další novinky brzo 🤞
</p>

      </div>
    </div>

    <div class="carousel-slide">
      <img src="obrazky/setkani1.webp" alt="Pozvánka na otevřené setkání">
      <div class="carousel-text">
        <h3>Pozvánka na první otevřené setkání</h3>
        <p>
          První otevřená schůzka proběhne
          <strong>12. ledna od 20:00 v salonku pražské Čítárny Unijazz</strong>.
          Přijďte diskutovat o cílech a plánech naší organizace.
        </p>
      </div>
    </div>

    <div class="carousel-slide">
      <img src="obrazky/vanoce.webp" alt="Vánoční přání">
      <div class="carousel-text">
        <h3>Stačí jen být</h3>
        <p>
          Svátky nejsou pro všechny jen časem klidu a radosti.
          Je v pořádku být jen sám sebou. Bez výkonu a očekávání.
        </p>
      </div>
    </div>

    <div class="carousel-slide">
      <img src="obrazky/silvestr.webp" alt="Novoroční přání">
      <div class="carousel-text">
        <h3>✨ Poslední den v roce.</h3>
        <p>Děkujeme všem, kdo nás zatím sledují, čtou a přemýšlí s námi.</p>
        <p>Od nového roku vstupujeme do další fáze a začínáme dávat projektu konkrétní podobu.</p>
        <p>Do roku 2026 přejeme méně tlaku, víc laskavosti a prostoru být lidmi.</p>
      </div>
    </div>

  </div>

  <button class="carousel-btn next" aria-label="Další novinka">›</button>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-left social-icons">
      <a href="#"><img src="mastodon.png" alt="Mastodon"></a>
      <a href="#"><img src="instagram.png" alt="Instagram"></a>
    </div>
    <div class="footer-center"><strong>Naše parťáctvo</strong></div>
    <div class="footer-right">
      <button class="dropdown-btn" onclick="toggleDropdown()">Jednorožec v médiích ▾</button>
      <div id="mediaDropdown" class="dropdown-content">
        <a href="#">Rozhovor</a>
        <a href="#">Článek</a>
        <a href="#">Reportáž</a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">🦄 Skleněný jednorožec z.s. | Co je moje, je naše. 🦄</div>
</footer>

<script>
// Hamburger menu
document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelector(".hamburger");
  const menu = document.querySelector(".menu");
  hamburger.addEventListener("click", () => { menu.classList.toggle("active"); });
});

// Carousel
const wrapper = document.querySelector('.carousel-wrapper');
const slides = document.querySelectorAll('.carousel-slide');
const prevBtn = document.querySelector('.carousel-btn.prev');
const nextBtn = document.querySelector('.carousel-btn.next');
let currentIndex = 0;
function showSlide(index){ wrapper.style.transform = `translateX(-${index*100}%)`; }
nextBtn.addEventListener('click',()=>{ currentIndex = (currentIndex+1)%slides.length; showSlide(currentIndex); });
prevBtn.addEventListener('click',()=>{ currentIndex = (currentIndex-1+slides.length)%slides.length; showSlide(currentIndex); });
showSlide(0);

// Footer dropdown
function toggleDropdown(){
  const dropdown = document.getElementById("mediaDropdown");
  dropdown.style.display = dropdown.style.display==='block'?'none':'block';
}
</script>

</body>
</html>
