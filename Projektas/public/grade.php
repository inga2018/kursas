<?php
  include('../app/views/header.php');
?>
<style type="text/css">
	form li:not(.browser-default) ul {
	list-style-type: square;
	margin-left: 20px;
  }
</style>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../app/css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Jūsų rezultatas</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 teisingai</div> <br>";
            echo "
            <form>
            <h5>Atsakymai: <br></h5>
            <ol>
            	<li>Kuris metalas nepriklauso lengvųjų metalų grupei?
					<ul>	Magnis (priklauso, nes jo tankis 1739km/m <4500kg/m );</ul>
					<ul>	Aliuminis (priklauso, nes jo tankis 2699kg/m <4500kg/m );</ul>
					<ul>	Manganas (nepriklauso, nes jo tankis 7300kg/m >4500kg/m );</ul>
					<ul>	Berilis (priklauso, nes jo tankis 1848kg/m <4500kg/m ).</ul>
				</li> <br>
				<li>Kurio iš šių metalų gardelė yra iš kubinio centruoto tūrio(KCT)?
					<ul>Chromas	(taip); </ul>
					<ul>Varis (ne, nes jo gardelė kubinė centruoto paviršiaus);</ul>
					<ul>Cinkas (ne, nes jo gardelė heksagoninė tanki); </ul>
					<ul>Nikelis	(ne, nes jo gardelė kubinė centruoto paviršiaus);</ul>
				</li> <br>
				<li>Linijiniai defektai vadinami:
					<ul>Modifikacijomis (ne, nes tai skirtingai išsidėsčiusių atomų formos);</ul>
					<ul>Dislokacijomis (taip);</ul>
					<ul>Alotropijomisn(ne, nes tai elemento polimorfizmas);</ul>
					<ul>Fragmentais	(ne, nes tai ribos tarp atskirų kristalo dalių);</ul>
				</li> <br>
				<li>Kokio tipo taškinis defektas susidaro, kai lieka neužimta atamo vieta gardelėje?
					<ul>Priemaišiniai atomai (ne, nes tai į gardelę patekę kitų elementų atomai);</ul></ul></ul>
					<ul>Įsiterpę atomai (ne, nes šis tipas būna kai atomas iš savo vietos išeina ir patenka į tarpmazgį);</ul></ul>
					<ul>Frenkelio efektas (ne, nes tai vakansijos ir įsiterpusio atomo pora);</ul>
					<ul>Takumas (taip);</ul>
				</li> <br>
				<li>Kaip paaiškinama metalų mechaninė savybė tąsumas?
					<ul>Medžiagos, veikiamos išorinių jėgų geba priešintis deformavimuisi (ne, nes tai stiprumas);</ul>
					<ul>Medžiagos geba atstatyti pradinius matmenis ir formą, kai pašalinama apkrova (ne, nes tai tamprumas);</ul>
					<ul>Medžiagos geba priešintis dinaminei t.y. staigiai didėjančiai apkrovai (taip);</ul>
					<ul>Metalas geba keisti formą nesuyrant tuomet, kai veikia apkrova, ir šią formą išsaugoti, kai ji pašalinama (ne, nes tai plastiškumas);</ul>
				</li> 
			</ol>
			</form> 
			<br>
			<br>
			<br>
			"
        ?>
	
	</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-68528-29");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>

<?php
 include('../app/views/footer.php');
?>