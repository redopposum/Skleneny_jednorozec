<footer class="footer">
  <div class="footer-container">

    <!-- LEVÁ ČÁST – sociální sítě -->
    <div class="footer-left social-icons">
      <a href="https://witter.cz/@sklenenyjednorozec" target="_blank" rel="noopener noreferrer">
        <img src="mastodon.png" alt="Mastodon">
      </a>
      <a href="https://www.instagram.com/sklenenyjednorozec" target="_blank" rel="noopener noreferrer">
        <img src="instagram.png" alt="Instagram">
      </a>
    </div>

    <!-- STŘED – partneři -->
    <div class="footer-center">
      <strong>Naše parťáctvo</strong>
      <div class="partners-logos">
        <!-- loga partnerů -->
      </div>
    </div>

    <!-- PRAVÁ ČÁST – média -->
    <div class="footer-right">
      <button class="dropdown-btn" onclick="toggleDropdown()">
        Jednorožec v médiích ▾
      </button>

      <div id="mediaDropdown" class="dropdown-content">
        <!-- jednotlivé mediální výstupy -->
        <a href="" target="_blank">Rozhovor</a>
        <a href="" target="_blank">Článek</a>
        <a href="" target="_blank">Reportáž</a>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    🦄 Skleněný jednorožec z.s. | Co je moje, je naše. Sdílení je láska 🦄
  </div>
</footer>

<script>
function toggleDropdown() {
  const dropdown = document.getElementById("mediaDropdown");
  dropdown.style.display =
    dropdown.style.display === "block" ? "none" : "block";
}
</script>
