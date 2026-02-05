<?php
// Očekává proměnnou $page před include
?>

<nav class="navbar">

  <!-- Logo -->
  <div class="logo">
    <a href="index.php">
      <img src="logo.png" alt="Skleněný jednorožec">
    </a>
  </div>

  <!-- Menu -->
  <ul class="menu">
    <li><a href="index.php"       class="<?= $page === 'mise' ? 'active' : '' ?>">Mise</a></li>
    <li><a href="sluzby.php"      class="<?= $page === 'sluzby' ? 'active' : '' ?>">Služby</a></li>
    <li><a href="bezpecnost.php"  class="<?= $page === 'bezpecnost' ? 'active' : '' ?>">Bezpečnost</a></li>
    
    <li><a href="clenstvi.php"    class="<?= $page === 'clenstvi' ? 'active' : '' ?>">Členství</a></li>
    
    <li><a href="novinky.php"     class="<?= $page === 'novinky' ? 'active' : '' ?>">Novinky</a></li>
    <li><a href="faq.php"         class="<?= $page === 'faq' ? 'active' : '' ?>">FAQ</a></li>

   <!-- Desktop CTA -->
<a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn desktop-only">Napište nám</a>

<!-- Mobilní CTA -->
<li class="mobile-only">
  <a href="mailto:ahoj@sklenenyjednorozec.cz" class="btn">Napište nám</a>
</li>


  <!-- Hamburger -->
<button class="hamburger" type="button" aria-label="Menu">
  <span></span><span></span><span></span>
</button>

  
</nav>

<!-- Hamburger menu JS -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelector(".hamburger");
  const menu = document.querySelector(".menu");

  if (!hamburger || !menu) return;

  hamburger.addEventListener("click", () => {
    menu.classList.toggle("active");
  });
});
</script>
