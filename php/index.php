<?php $page = 'index'; ?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Skleněný jednorožec z.s. - Peer podpora zdarma a nízkoprahově</title>
<meta name="description" content="Skleněný Jednorožec z.s. nabízí bezplatnou peer podporu lidem v náročných životních situacích. Poskytujeme bezpečný prostor pro sdílení zkušeností, vzájemné porozumění a komunitní podporu bez hodnocení či diagnóz.">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" rel="stylesheet">

<!-- CSS -->
<style>
/* RESET & GLOBAL */
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Cormorant', serif; color: #000; background: #f9f9f9; line-height: 1.6; font-size: 18px; }
a { text-decoration: none; color: inherit; }
p, li { font-size: 1.1rem; margin-bottom: 0.5em; }
main { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }
h1, h2, h3, h4 { font-weight: 700; margin: 0.5em 0; text-align: center; }
h1 { font-size: 3rem; }
h2 { font-size: 2.3rem; }
h3 { font-size: 2rem; }
h4 { font-size: 1.7rem; }
@media (max-width: 768px) {
  h1 { font-size: 2rem; }
  h2 { font-size: 1.6rem; }
  h3 { font-size: 1.5rem; }
  h4 { font-size: 1.3rem; }
}

/* NAVBAR */
.navbar { display: flex; align-items: center; justify-content: space-between; padding: 15px 20px; background: #fff; position: sticky; top: 0; z-index: 1000; }
.logo img { height: 50px; }
.menu { list-style: none; display: flex; gap: 40px; margin: 0; padding: 0; align-items: center; }
.menu a { font-weight: 400; color: #000; transition: color 0.2s; }
.menu a.active, .menu a:hover { color: #e73370; }
.btn { background: #84365e; color: #fff !important; padding: 10px 22px; border-radius: 30px; font-weight: 700; text-decoration: none; white-space: nowrap; }
.btn:hover { background: #e73370; }
.hamburger { display: none; flex-direction: column; gap: 6px; background: none; border: none; cursor: pointer; }
.hamburger span { width: 28px; height: 3px; background: #000; }
.desktop-only { display: block; }
.mobile-only { display: none; }
@media (max-width: 768px) {
  .hamburger { display: flex; }
  .menu { position: fixed; top: 70px; left: 0; width: 100%; background: #fff; display: none; flex-direction: column; gap: 20px; padding: 20px 0; text-align: center; z-index: 999; }
  .menu.active { display: flex; }
  .desktop-only { display: none; }
  .mobile-only { display: block; }
}

.hero {
  position: relative;
  width: 100%;
  height: auto;
}

.hero img {
  width: 100%;
  height: auto; /* zachová celý obrázek */
  display: block;
}

.hero-text {
  position: absolute;
  bottom: 50%; /* text je u spodní části obrázku */
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  color: white;
  text-shadow: 0 4px 15px rgba(0,0,0,0.6);
  padding: 0 1rem;
  max-width: 90%;
}

.hero-text h1 {
  font-size: 3rem;
  line-height: 1.1;
}

.hero-text h2 {
  font-size: 2.3rem;
  line-height: 1.2;
}

@media (max-width: 768px) {
  .hero-text {
    bottom: 2%;
    padding: 1rem;
  }
  .hero-text h1 { font-size: 1.8rem; }
  .hero-text h2 { font-size: 1.2rem; }
}

/* SECTIONS */
section { background: white; padding: 4rem 2rem; border-radius: 10px; margin: 3rem auto; max-width: 1200px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
section h3 { margin-bottom: 1rem; }

/* FEATURES */
.features { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
.features .box { flex: 1 1 250px; max-width: 300px; background: #fafafa; padding: 2rem; border-radius: 10px; text-align: center; box-shadow: 0 3px 10px rgba(0,0,0,0.06); }
.icon { width: 50px; margin-bottom: 1rem; }

/* -------------------------------------------------- */
/*  NEWSLETTER                                       */
/* -------------------------------------------------- */
.newsletter {
  background: #84365e;
  padding: 4rem 2rem;
  border-radius: 10px;
  text-align: center;
  color: white;
  max-width: 1200px;
  margin: 3rem auto;
  background-blend-mode: overlay;
}

.newsletter img {
  max-width: 250px;
  display: block;
  margin: 0 auto 2rem auto;
  border-radius: 10px;
}

/* FOOTER */
.footer { background: white; color: black; padding: 30px 20px; font-size: 18px; }
.footer-container { display: flex; justify-content: space-between; align-items: flex-start; gap: 40px; }
.footer-left, .footer-center, .footer-right { display: flex; align-items: center; gap: 10px; }
.footer-center { flex-direction: column; text-align: center; }
.footer-right { flex-direction: column; text-align: right; }
.social-icons { display: flex; gap: 12px; }
.social-icons img { width: 32px; height: 32px; }
.dropdown-btn { background: none; border: none; color: black; font-size: 18px; font-family: 'Cormorant', serif; cursor: pointer; padding: 0; }
.dropdown-content { display: none; margin-top: 10px; }
.dropdown-content a { display: block; color: black; text-decoration: none; margin-bottom: 6px; opacity: 0.8; }
.dropdown-content a:hover { color: #84365e; text-decoration: none; }
.footer-bottom { margin-top: 30px; text-align: center; opacity: 0.8; }
@media (max-width: 768px) {
  .footer-container { flex-direction: column; gap: 24px; text-align: center; }
  .footer-left, .footer-center, .footer-right { width: 100%; }
  .social-icons { justify-content: center; }
  .dropdown-content { text-align: center; }
}

.double-column {
  display: grid;
  grid-template-columns: 1fr 1fr; /* dva sloupce na desktopu */
  gap: 10px 40px; /* svislý a vodorovný odstup mezi položkami */
  list-style: disc inside;
  margin-top: 10px;
}

@media (max-width: 768px) {
  .double-column { grid-template-columns: 1fr; } /* jeden sloupec na mobilu */
}

/* HVĚZDA*/
.donate-star {
    position: fixed;
    right: 20px;
    top: 85%;
    transform: translateY(-50%);
    width: 140px;
    height: 140px;
    z-index: 9999;
}

.donate-svg {
    width: 100%;
    height: 100%;
}

.donate-text {
    font-size: 11px;
    font-weight: 700;
    fill: #000;
    pointer-events: none;
}





</style>
</head>
<a href="/darovat.php" class="donate-star">
<svg viewBox="0 0 100 100" class="donate-svg">

    <!-- HVĚZDA -->
    <polygon
        points="50,4 61,36 96,36 68,57 80,94 50,73 20,94 32,57 4,36 39,36"
        fill="#ffcc00"
    />

    <!-- TEXT V BEZPEČNÉ ZÓNĚ -->
    <g transform="translate(50 52)">
        <text text-anchor="middle" class="donate-text">
            <tspan x="0" dy="-2">Chci</tspan>
            <tspan x="0" dy="14">darovat</tspan>
        </text>
    </g>

</svg>
</a>



<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="logo"><a href="/"><img src="logo.png" alt="Logo Skleněný jednorožec"></a></div>
  <ul class="menu">
    <li><a href="/index.php" class="active">Mise</a></li>
    <li><a href="/sluzby.php">Služby</a></li>
    <li><a href="/bezpecnost.php">Bezpečnost</a></li>
    
    <li><a href="/clenstvi.php">Členství</a></li>
    
    <li><a href="/novinky.php">Novinky</a></li>
    <li><a href="/faq.php">FAQ</a></li>
    <li class="mobile-only"><a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn">Napište nám</a></li>
  </ul>
  <a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn desktop-only">Napište nám</a>
  <button class="hamburger" aria-label="Otevřít menu"><span></span><span></span><span></span></button>
</nav>

<!-- HERO -->
<header class="hero">
  <img src="banner.webp" alt="Titulní obrázek organizace Skleněný jednorožec" loading="lazy">
  <div class="hero-text">
    <h1>SKLENĚNÝ JEDNOROŽEC</h1>
    <h2>Tvoříme kruh sdílení, bezpečí a podpory.</h2>
  </div>
</header>

<!-- FEATURES -->
<section class="features">
  <div class="box">
    <img src="heart.webp" class="icon" alt="Ikona srdce">
    <h4>10 dní v měsíci</h4>
    <p>Schůzku si můžete domluvit kdykoliv budete mít čas a chuť, po domluvě klidně i o víkendu.</p>
  </div>
  <div class="box">
    <img src="heart.webp" class="icon" alt="Ikona srdce">
    <h4>14 krajů</h4>
    <p>Nejste z velkého města nebo máte obtíže s mobilitou? Není problém, stačí vám internet, uvidíme se online!</p>
  </div>
  <div class="box">
    <img src="heart.webp" class="icon" alt="Ikona srdce">
    <h4>0 Kč</h4>
    <p>V první řadě nám jde o to, aby se podpora dostala těm nejznevýhodněnějším. Schůzky jsou zcela zdarma.</p>
  </div>
</section>

<!-- MISE -->
<section class="mise" id="mise">
  <h3>Peer služba zdarma a nízkoprahově</h3>
  <p>Skleněný jednorožec je nezisková peer iniciativa, která poskytuje podporu lidem procházejícím náročnými životními situacemi. Nepovažujeme psychické či sociální obtíže za „poruchu“ nebo individuální selhání, ale za přirozenou reakci na složité okolnosti, systémové tlaky či společenskou diskriminaci. Naším cílem je nabídnout bezpečný prostor pro sdílení zkušeností, vzájemné porozumění a komunitní podporu - bez hodnocení, diagnóz nebo předpisů, jak „mít vše v pořádku“.</p>

  <p>Rozhodně se nemusíte bát, že jsou vaše obtíže „divné“. Nemusíte se bát že jste „moc“ nebo naopak „příliš málo“. Můžete přijít s velehorou trápení nebo i s nějakým tím „menším“. Protože jen vy jste odbornictvem na svůj život a pokud vám pocit radí, že podporu potřebujete, důvěřujte mu. U nás ve Skleněném jednorožci věříme, že péče v případě vážných obtíží je stejně důležitá jako prevence. Není třeba se obávat, nebudeme vaše témata hodnotit a srovnávat, pokud říkáte, že vás trápí, my vám 100% věříme.</p>

  <h4>Kdo je to peer nebo peerka?</h4>
  <p>Peer nebo peerka je člověk, který si sám v životě prošel náročnou situací - například psychickými obtížemi, stresem, vyhořením, těžkým obdobím doma, ve škole nebo v práci, menšinovou zkušeností. Díky tomu ví, jaké to je, a dokáže druhým lépe porozumět. Peer není lékařka ani terapeut. Je to někdo „z lidu“, kdo má vlastní zkušenost, umí naslouchat, mluví jednoduše a bez odborných výrazů.</p>
  <p>Peer nebo peerka vám nepředepisují, co máte dělat. Místo toho vás podpoří, vyslechnou a pomůžou najít vaše vlastní cesty a řešení. Jejich role je být vám po boku. Lidsky, otevřeně a bez posuzování.</p>

  <h4>Opravdu to funguje?</h4>
  <p>Peer podpora má dlouhodobě prokazatelné výsledky. Výzkumy ukazují, že lidé zapojení do peer služeb častěji zažívají pocit sounáležitosti, větší míru naděje, lepší zvládání stresu a menší míru izolace. Peer podpora také posiluje sebeúčinnost; víru, že člověk dokáže ovlivnit svůj život a dělat kroky, které mu prospívají. Zároveň se kolem peer služeb často přirozeně tvoří komunity, ve kterých lidé nejen že získávají větší jistotu sami v sobě, ale mohou také společně ovlivňovat reálné podmínky a systémy, ve kterých žijí. Studie potvrzují, že vztah založený na sdílené zkušenosti a rovnosti může být pro mnoho lidí přístupnější a méně stigmatizující než tradiční formy pomoci. Díky tomu peer programy nejen že doplňují odbornou péči, ale v některých oblastech také zvyšují její efektivitu a dostupnost.</p>

  <h4>Komu je služba určena</h4>
  <p>Naše peer podpora je otevřená všem osobám, které hledají pochopení, sdílení zkušeností a podporu při zvládání životních nároků.</p>
  <p>Obzvláštní zkušenost a citlivost nabízíme <strong>zatím</strong> v těchto oblastech:</p>
  <ul>
    <li><strong>Psychiatrická témata</strong>: zkušenosti s psychickými obtížemi, hospitalizací nebo kontaktem se zdravotním systémem</li>
    <li><strong>Psychologická témata</strong>: úzkosti, traumata (včetně zkušenosti se sexualizovaným násilím a dlouhodobých následků traumatu), životní krize, vztah k sobě a okolí</li>
    <li><strong>LGBTQ+ témata</strong>: menšinový stres, coming-out, queerfobie, genderová identita a vztahy</li>
  </ul>

  <h4>Naše hodnoty</h4>
  <ul class="double-column">
    <li>Empatie a respekt k osobní zkušenosti</li>
    <li>LGBTQ+ afirmativní přístup</li>
    <li>Antidiskriminační a antiopresivní hodnoty</li>
    <li>Respekt k neurodiverzitě a různým formám duševního prožívání</li>
    <li>Partnerství a horizontální vztahy</li>
    <li>Podpora autonomie a sebeurčení</li>
    <li>Trauma informovaný přístup</li>
    <li>Nahlížení komunitních a systémových problémů</li>
  </ul>
</section>

 <!-- NEWSLETTER -->
<section class="newsletter" id="newsletter">
  <div class="newsletter-container">
    <img src="newsletter.webp" alt="Newsletter" class="newsletter-image">
    <div class="newsletter-text">
      <h3>Přihlaste se k odběru novinek</h3>
      <p>Získejte aktuální informace o naší činnosti, akcích a novinkách přímo do vaší e-mailové schránky.</p>
      <p>Pokud čekáte a stále nic, podívejte se, jestli se mail nezatoulal do ohrádky na spam.</p>
    </div>
    <form action="https://sklenenyjednorozec.ecomailapp.cz/public/subscribe/2/2bb287d15897fe2f9d89c882af9a3a8b" 
          method="post" 
          target="_blank" 
          class="newsletter-form">
      <label for="newsletter-email" class="visually-hidden">Váš e-mail</label>
      <input type="email" id="newsletter-email" name="email" placeholder="Váš e-mail" required>
      <button type="submit">Přihlásit se</button>
    </form>
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

// Footer dropdown
function toggleDropdown() {
  const dropdown = document.getElementById("mediaDropdown");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}
</script>

</body>
</html>
