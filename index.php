<!DOCTYPE html>
<html>
<head>
	<title>Broumar - Logistika</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body style="font-family: Arial, sans-serif">
	<div id="menu">
		<a href="#sluzby">
			<span class="menuItem">Naše služby</span>
		</a>
		<a href="#pribeh">
			<span class="menuItem">Náš příběh</span>
		</a>
		<a href="#kontakt">
			<span class="menuItem">Kontakt</span>
		</a>
		<a href="#poptavka">
			<span class="menuItem">Poptávka</span>
		</a>
	</div>
	<header>
		<img src="images/logo.png" alt="Logo Broumar" class="logo">
		<img src="images/logo-emirates.png" alt="Logo Broumar" class="logo">
	</header>
	<main id="main">
		<section id="slides">
			<div class="mySlides" id="photo4">
				<h2>Export a import zboží po celém světě</h2>
			</div>
			<div class="mySlides" id="photo1">
				<h2>Přepravíme cokoliv</h2>
			</div>
			<div class="mySlides" id="photo2">
				<h2>Zařizujeme všechny typy přeprav</h2>
			</div>
			<div class="mySlides" id="photo3">
				<h2>Spolehlivost je samozřejmostí</h2>
			</div>
			<div class="mySlides" id="photo5">
				<h2>Poskytujeme ALL RISK pojištění</h2>
			</div>
			<div class="overlay">
			</div>
        </section>
        <section id="textContent">
			<h2 id="sluzby">Naše služby</h2>
            <div class="sluzby">
				<div class="sluzby-item" onclick="showSluzby(0)">
					<div id="truck"></div>
					<p>Silniční<br />přeprava</p>
				</div>
				<div class="sluzby-item" onclick="showSluzby(1)">
					<div id="train"></div>
					<p>Železniční<br />přeprava</p>
				</div>
				<div class="sluzby-item" onclick="showSluzby(2)">
					<div id="boat"></div>
					<p>Námořní<br />přeprava</p>
				</div>
				<div class="sluzby-item" onclick="showSluzby(3)">
					<div id="plane"></div>
					<p>Letecká<br />přeprava</p>
				</div>
				<div class="sluzby-item" onclick="showSluzby(4)">
					<div id="custom-clearance"></div>
					<p>Celní<br />služby</p>
				</div>
			</div>

			<div class="sluzby-text-container">
				<h3>Silniční přeprava</h3>
				<ul>
					<li>sběrné zásilky (LTL = Less than Truck Load)</li>
					<li>celovozové zásilky (FTL = Full Truck Load)</li>
					<li>nadrozměrné náklady</li>
					<li>nebezpečné zboží</li>
					<li>zboží vyžadující regulovanou teplotu s využitím chladících nebo termo vozů (FRIGO)</li>
					<li>nadrozměrné zásilky</li>
				</ul>
				
				<p>Kromě samotného transportu zařídíme potřebná povolení, celní řízení a all risk pojištění (v
				případě, že bude vyžadováno).</p>
			</div>

			<div class="sluzby-text-container">
				<h3>Železniční přeprava</h3>
				<ul>
					<li>kusové zásilky (LCL = Less than Container Load)</li>
					<li>celokontejnerové náklady (FCL = Full Container Load) – import/export z/do evropských přístavů</li>
					<li>nebezpečné zboží</li>
				</ul>

				<p>Železniční přepravu kontejnerů můžeme kombinovat se silniční dopravou. Doručíme kamkoliv
				bude náš zákazník potřebovat.
				Kromě samotného transportu zařídíme potřebná povolení, celní řízení a all risk pojištění (v
				případě, že bude vyžadováno).</p>
			</div>

			<div class="sluzby-text-container">
				<h3>Námořní přeprava</h3>
				<ul>
					<li>jednotlivé kusy zboží (LCL = Less than Container Load)</li>
					<li>celokontejnery (FCL = Full Container Load)</li>
					<li>přepravy v teplotním režimu (reefer kontejnery)</li>
					<li>nadrozměrné náklady</li>
					<li>nebezpečné zboží</li>
					<li>nápoje pomocí flexitanku (možnost nakládky až 24 000 litrů)</li>
					<li>doprava zboží loděmi typu Ro/Ro</li>
					<li>Break Bulk (konvenční lodění)</li>
					<li>nadrozměrné zásilky</li>
				</ul>

				<p>Pokud je nutné zásilku přepravit na velké vzdálenosti, bývá námořní přeprava nejlevnější
				variantou. Nicméně se vyplatí i na kratší trasy například do Velké Británie, Irska, Španělska nebo
				všech zemí Skandinávie takzvaná shortsea.
				V Česku využíváme 8 překládkových terminálů a 3 terminály pro sběrné zásilky. Ty se nacházejí v
				Praze, Brně a Ostravě. K dopravě zboží do evropských přístavů fungují pravidelné spoje vlak
				v kombinaci s lodí nebo kamion v kombinaci s lodí.
				Zajišťujeme dopravu nákladu port/door, door/port a door to door. Používáme k tomu
				námořního společně s železničním nebo silničním uzlem. Kromě samotného transportu se
				postaráme také o potřebná povolení, celní řízení a na základě případného požadavku, zásilky
				připojistíme nad rámec povinností krytí ze strany rejdaře.</p>
			</div>

			<div class="sluzby-text-container">
				<h3>Letecká přeprava</h3>
				<ul>
					<li>exportní a importní přepravy po celém světě</li>
					<li>přeprava standardních zásilek</li>
					<li>přepravy v teplotním režimu</li>
					<li>nadrozměrné náklady</li>
					<li>cenné, nebezpečné, choulostivé zásilky (licenční zboží)</li>
					<li>charterové lety</li>
					<li>komplexní přeprava leteckých zásilek door to door</li>
					<li>nadrozměrné zásilky</li>
				</ul>

				<p>Letecká doprava je nejlepším řešením, pokud potřebujete zásilku přepravit co nejrychleji. K
				přepravě využíváme charterové i pravidelné spoje s odlety i několikrát týdně. Kromě samotného
				transportu, zařídíme potřebná povolení, celní řízení a all risk pojištění (v případě, že bude
				vyžadováno).</p>
			</div>

			<div class="sluzby-text-container">
				<h3>Celní služby</h3>
				<ul>
					<li>vyclíváme na největších kontejnerových terminálech v ČR a dalších místech v ČR</li>
					<li>umíme veškeré celní režimy</li>
					<li>celní odbavování osobních věcí při stěhování osob z a mimo EU</li>
					<li>vystavování a ukončování T2L, T2LF</li>
					<li>vystavení tranzitních dokladů</li>
					<li>neutralizace dokladů</li>
					<li>zajištění a ručení za celní dluh</li>
					<li>zprostředkování platby cla za zákazníka</li>
					<li>využití zjednodušených postupů v celním řízení (volný oběh, schválený</li>
					<li>příjemce/odesilatel/vývozce, centralizované celní řízení)</li>
					<li>závazné informace o sazebním zařazení zboží do společného celního sazebníku EU (TARIC) </li>
					<li>získání registračního a identifikačního čísla hospodářského subjektu (číslo EORI)</li>
					<li>ATA karnet</li>
					<li>poradenství v oblasti celní problematiky</li>
				</ul>
			</div>

			<div id="services-list">
				<ul>
					<li class="heart"><p>Zabezpečujeme všechny typy logistických služeb. Export a import zboží s využitím námořní, letecké, silniční, železniční přepravy a jejich kombinace.</p></li>

					<li class="heart"><p>Dle typu Vaší zásilky určíme, zda je pro Vás cenově nebo rychlostně efektivnější kontejnerová přeprava (FCL), či zda-li se jedná o kusovou přepravu (LCL).</p></li>

					<li class="heart"><p>Zajištujeme také přepravu pro zásilky, které podléhají teplotnímu režimu.</p></li>

					<li class="heart"><p>Naše nabídka služeb obsahuje ALL RISK pojištění, které kryje škody nad rámec rejdaře.</p></li>

					<li class="heart"><p>Můžeme zprostředkovat cross trade (třísměrný) obchod. Zásilku přepravíme od
						dodavatele přímo k Vašemu zákazníkovi, což Vám umožní ušetřit náklady na dopravu a
						celní řízení. Samozřejmostí je zajištění výměny obchodních dokumentů.</p></li>

					<li class="heart"><p>Přepravu Vašeho zboží připravíme přímo Vám na míru, optimální cestou, za optimální cenu a zajistíme také spediční služby všeho druhu.</p></li>
				</ul>
			</div>

            <h2 id="pribeh">Náš příběh</h2>
            <p>Jak už to tak bývá, název Broumar vznikl již před několika lety… Zpočátku byl vyslovován spíše ve
				smyslu odreagování se od každodenní pracovní rutiny a přemítání ve smyslu „udělali bychom to
				jinak“. Postupem času, kdy člověk získával pracovní zkušenosti, jak z korporátních společností, tak i
				menších firem, se začal utvářet soubor myšlenek a cílů, jak bychom si představovali vézt firmu, a
				především jak se chovat ke svým zákazníkům. To byl jeden z důvodů proč Broumar vznikl.
			</p>

			<p>
				Všimli jsme si, že v tomto oboru pokulhává vztah k zákazníkům. A to je jeden z cílů, na které se
				chceme zaměřit a odlišit se od ostatních. Zároveň v tomto oboru pracujeme více jak dvacet let, díky
				tomu si dovolujeme tvrdit, že máme nezanedbatelné zkušenosti a také pevnou základnu agentských
				servisů po celém světě. Stále se rozvíjíme a zlepšujeme naše vztahy s partnery a také s našimi
				zákazníky. Hlavním cílem je dlouhodobá spolupráce a spokojenost všech stran.
			</p>
			<p>
				Logistika je naše vášeň a budeme rádi, když si naše přepravní služby vyzkoušíte a ověříte jejich
				kvalitu. Budeme rádi, když se stanete součástí Broumaří rodiny. 😊
			</p>
			
			<p>
				Team Broumar
			</p>
        
            <h2 id="kontakt">Kontakt</h2>
            <p>
				<b>Broumar s.r.o.</b></br>
				Lublaňská 667/42<br>
				
				120 00 Praha 2</br>
				Czech republic</br></br>
				
				<b>Jiří Klíčman</b></br>
				<b>Chief executive officer</b></br>
				<div class="phone-email">
					Phone:  
					<div>
						+420723010507</br>
						+971508735915
					</div>
				</div>
				<div class="phone-email">
					Email:  
					<div>
						<a href="mailto:info@broumar.eu">info@broumar.eu</a></br>
						<a href="mailto:sales@broumar.eu">sales@broumar.eu</a>
					</div>
				</div>
			</p>
        
            <h2 id="poptavka">Poptávka</h2>
			<div id="formWrapper">
				<form method="post">
					<label for="name">Jméno:</label><br>
					<input type="text" id="name" name="name" placeholder="Jan Novák"><br><br>

					<label for="email">E-mail:</label><br>
					<input type="email" id="email" name="email" placeholder="jan.novak@email.cz"><br><br>

					<label for="phone">Telefon:</label><br>
					<input type="tel" id="phone" name="phone" placeholder="+420 777 123 456"><br><br>

					<label for="message">Vaše zpráva:</label><br>
					<textarea id="message" name="message" required rows="4" cols="50" placeholder="Zadejte vaši zprávu..."></textarea>
					<br><br>

					<input id="sendBtn" type="submit" name="submit" value="Odeslat">
				</form>
			</div>
        </section>
    </main>
	<footer>
		<a href="https://www.flaticon.com/free-icons/transport" title="transport icons">Transport icons created by Ctrlastudio - Flaticon</a>
		<a href="https://www.flaticon.com/free-icons/plane" title="plane icons">Plane icons created by Freepik - Flaticon</a>
		<a href="https://www.flaticon.com/free-icons/ship" title="ship icons">Ship icons created by Freepik - Flaticon</a>
		<a href="https://www.flaticon.com/free-icons/train" title="train icons">Train icons created by Pixel perfect - Flaticon</a>
		<a href="https://www.flaticon.com/free-icons/customs" title="customs icons">Customs icons created by Smashicons - Flaticon</a>
	</footer>

	<div id="confirmationModal">
		<h2>Vaše zpráva byla odeslána. Děkujeme.</h2>

		<button onclick="showModal(false)">Zavřít</button>
	</div>

    <script>
		let slideIndex = 0;
		showSlides();

		function showSluzby(index) {
			let sluzbyItems = document.getElementsByClassName("sluzby-item");
			let sluzby = document.getElementsByClassName("sluzby-text-container");

			const clickedOnActiveItem = sluzbyItems[index].classList.contains('active');

			if (clickedOnActiveItem) {
				sluzby[index].style.display = 'none';
				sluzbyItems[index].classList.remove('active');
			} else {
				for (i = 0; i < sluzby.length; i++) {
					sluzby[i].style.display = 'none';
					sluzbyItems[i].classList.remove('active');
				}

				sluzby[index].style.display = 'block';
				sluzbyItems[index].classList.add('active');
			}
		}

		function showSlides() {
			let i;
			let slides = document.getElementsByClassName("mySlides");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.opacity = 0;
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}
			slides[slideIndex-1].style.opacity = 1;
			setTimeout(showSlides, 5000);
		}

		function showModal(show) {
			let modal = document.getElementById('confirmationModal');
			modal.style.display = show ? 'flex' : 'none'
		}
	</script>
</body>

<?php 

if(isset($_POST['submit'])){
    $to = "info@broumar.eu";
	// $to = "martin.doubek@nangu.tv";
    $from = isSet($_POST['email']) ? isSet($_POST['email']) : 'info@broumar.eu';
    $name = $_POST['name'];
    $subject = "Broumar: nový vzkaz";
    $subject2 = "Broumar: Kopie Vaší zprávy";
    $message = $name . " zanechal následující zprávu:" . "\n\n" . $_POST['message'] . "\n\n" . $_POST['email'] . "\n\n" . $_POST['phone'];
    $message2 = "Zde je kopie Vaší zprávy " . $name . "\n\n" . $_POST['message'];

	$headerFields = array(
		"MIME-Version: 1.0",
		"Content-Type: text/html;charset=utf-8"
	);

	if (mail ($to, $subject, $message, implode("\r\n", $headerFields))) {
		echo "<script type=\"text/javascript\">";
		echo "showModal(true)";
		echo "</script>";
	}
}
?>
