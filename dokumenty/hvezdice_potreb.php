<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hvězdice potřeb</title>
<link rel="canonical" href="https://www.sklenenyjednorozec.cz/hvezdice_potreb.html">

<link rel="stylesheet" href="../style.css">
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;700&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<style>
.hvezdice-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.hvezdice-container h2,
.hvezdice-container h3 {
    margin-top: 30px;
}

.hvezdice-container p,
.hvezdice-container ul,
.hvezdice-container ol {
    margin-bottom: 15px;
}

form.hvezdice-form {
    background-color: #ffe4f0;
    border: 1px solid #7b2b56;
    border-radius: 30px;
    padding: 20px;
    margin: 30px 0;
    box-sizing: border-box;
}

form.hvezdice-form label {
    display: block;
    margin-bottom: 10px;
}

form.hvezdice-form input[type=number] {
    width: 60px;
    margin-left: 10px;
}

form.hvezdice-form button {
    margin-top: 15px;
    padding: 8px 20px;
    border-radius: 30px;
    border: none;
    background-color: #7b2b56;
    color: white;
    cursor: pointer;
}

form.hvezdice-form button:hover {
    background-color: #ff1493;
}
</style>
</head>

<body>

<header class="navbar">
  <div class="logo">
    <a href="/"><img src="../logo.png" alt="Logo Skleněný Jednorožec"></a>
  </div>

  <ul class="menu">
    <li><a href="../index.html#domu">Domů</a></li>
    <li><a href="../index.html#mise">Mise</a></li>
    <li><a href="../index.html#sluzby">Služby</a></li>
    <li><a href="../index.html#bezpecnost">Bezpečnost</a></li>
    <li><a href="../index.html#tym">Tým</a></li>
    <li><a href="../index.html#clenstvi">Členství</a></li>
    <li><a href="../faq.html">FAQ</a></li>
  </ul>

  <a class="btn-desktop btn" href="/#kontakt">Kontakt</a>

  <div class="hamburger" onclick="document.querySelector('.menu').classList.toggle('active')">
    <span></span><span></span><span></span>
  </div>
</header>

<div class="hvezdice-container">

  <h2>Hvězdice hodnot</h2>

  <p>
    Vyplňte hodnoty (0–4) pro jednotlivé oblasti svého života a stáhněte si PDF
    s vizualizací, která vám může pomoci lépe se zorientovat ve vaší aktuální situaci.
  </p>

  <h3>Co je hvězdice hodnot?</h3>
  <p>
    Hvězdice hodnot (radarový graf) je <strong>reflexivní vizuální nástroj</strong>,
    který umožňuje nahlédnout na různé oblasti života v jednom přehledu.
    Každá osa grafu představuje jednu oblast, například emocionální pohodu,
    sociální kontakty, bydlení, zdraví, finance, volnočasové aktivity
    nebo práci či studium.
  </p>

  <h3>K čemu může sloužit?</h3>
  <ul>
    <li><strong>Sebereflexe:</strong> Pomáhá pojmenovat, jak se v jednotlivých oblastech života právě cítíte.</li>
    <li><strong>Orientace:</strong> Umožňuje vidět rozdíly mezi oblastmi a zamyslet se nad tím, které jsou pro vás v tuto chvíli důležité.</li>
    <li><strong>Vlastní porozumění:</strong> Výsledná vizualizace může sloužit jako podklad pro vaše vlastní přemýšlení nebo rozhovor, pokud se jej rozhodnete sdílet.</li>
  </ul>

  <p>
    Tento nástroj je <strong>určen výhradně pro vaši osobní potřebu</strong>.
    Je na vás, zda a s kým jeho výstup budete sdílet.
    Organizace jej nepoužívá ke sledování změn v čase ani k plánování podpory.
  </p>

  <h3>Jak nástroj používat?</h3>
  <ol>
    <li>Vyplňte hodnoty 0–4 pro každou oblast.</li>
    <li>Vygenerujte radarový graf.</li>
    <li>Stáhněte PDF pro vlastní použití.</li>
  </ol>

  <form class="hvezdice-form" id="valuesForm">
    <label>Emocionální pohoda: <input type="number" name="emo" min="0" max="4" value="2"></label>
    <label>Sociální kontakty: <input type="number" name="social" min="0" max="4" value="2"></label>
    <label>Bydlení: <input type="number" name="home" min="0" max="4" value="2"></label>
    <label>Zdraví: <input type="number" name="health" min="0" max="4" value="2"></label>
    <label>Finance: <input type="number" name="finance" min="0" max="4" value="2"></label>
    <label>Volnočasové aktivity: <input type="number" name="leisure" min="0" max="4" value="2"></label>
    <label>Práce / Studium: <input type="number" name="work" min="0" max="4" value="2"></label>

    <button type="button" onclick="generatePDF()">Stáhnout PDF</button>
  </form>

  <canvas id="radarChart" width="400" height="400" style="display:none;"></canvas>

</div>

<script>
async function generatePDF() {
    const { jsPDF } = window.jspdf;
    const form = document.getElementById('valuesForm');

    const data = [
        Number(form.emo.value),
        Number(form.social.value),
        Number(form.home.value),
        Number(form.health.value),
        Number(form.finance.value),
        Number(form.leisure.value),
        Number(form.work.value)
    ];

    const labels = [
        'Emocionální pohoda',
        'Sociální kontakty',
        'Bydlení',
        'Zdraví',
        'Finance',
        'Volnočasové aktivity',
        'Práce / Studium'
    ];

    const ctx = document.getElementById('radarChart').getContext('2d');

    const chart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                fill: true,
                backgroundColor: 'rgba(123,43,86,0.4)',
                borderColor: '#7b2b56',
                pointBackgroundColor: '#7b2b56'
            }]
        },
        options: {
            scales: {
                r: { min: 0, max: 4, ticks: { stepSize: 1 } }
            },
            plugins: { legend: { display: false } }
        }
    });

    await new Promise(r => setTimeout(r, 500));

    const pdf = new jsPDF();
    pdf.setFontSize(18);
    pdf.text('Hvězdice hodnot', 15, 15);
    pdf.addImage(chart.toBase64Image(), 'PNG', 15, 25, 180, 180);

    let y = 215;
    pdf.setFontSize(12);
    labels.forEach((label, i) => {
        pdf.text(`${label}: ${data[i]}`, 15, y);
        y += 7;
    });

    pdf.save('hvezdice_hodnot.pdf');
    chart.destroy();
}
</script>

</body>
</html>
