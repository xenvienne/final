<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgled.css" type="text/css" />
    <link rel="icon" type="image/png" href="travel.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script>
        function openLoginPopup() {
            window.open('login.html', 'LoginWindow', 'width=400,height=300');
        }

        function toggleParagraphs() {
            var paragraph1 = document.getElementById('paragraph1');
            var paragraph2 = document.getElementById('paragraph2');

            if (paragraph2.style.display === 'none' || paragraph2.style.display === '') {
                paragraph2.style.display = 'block';
            } else {
                paragraph2.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <header>
    <nav>
            <div class="login-button">
                <a href="login.php" class="button77" onclick="openLoginPopup()">Log in</a>
            
            </div>
            <div class="boksovi">
                <div class="box">
					<img src="onama.jpg" alt="Image 1">
					<h2>O NAMA</h2>
					<p>Naš tim iskusnih stručnjaka za putovanja posvećen je tome da vaše snove pretvori u stvarnost.</p>
                    <a href="onama.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box tall-box">
					<img src="destinacije.jpg" alt="Image 1">
					<h2>DESTINACIJE</h2>
					<p>Naše pažljivo odabrane destinacije protežu se od prekrasnih pejzaža 
						švicarskih Alpa do kulturnog blaga Kjota, osiguravajući da vaša puotovanja
						 budu jedinstvena.</p>
                    <a href="destinacije.php" class="button">SAZNAJTE VIŠE</a>
                </div>
                <div class="box">
					<img src="booking.jpg" alt="Image 1">
					<h2>BOOKING</h2>
					<p>Naša online platforma prilagođena korisnicima i posvećeni tim za podršku su tu da vam pomognu da s lakoćom osigurate vašu sljedeću avanturu.</p>
                    <a href="booking.php" class="button">REZEVIŠI</a>
                
                
                
                </div>
            </div>
            
                
            
        </nav>

        <h1>O NAMA</h1>

        <p id="paragraph1" class="paragraph1">Dobrodošli u našu turističku agenciju, gdje se strast prema putovanjima susreće s posvećenošću pružanju nezaboravnih iskustava. Sa dugogodišnjim iskustvom u turističkoj industriji, ponosno ističemo da smo vaša idealna destinacija za istraživanje svijeta. Naš tim stručnjaka posvećen je stvaranju personaliziranih putovanja koja odražavaju jedinstvene interese i želje svakog putnika. Bilo da sanjarite o egzotičnim destinacijama, kulturološkim doživljajima ili pustolovinama u prirodi, nudimo širok spektar putovanja prilagođenih svakom ukusu. S našim pažljivo odabranim partnerima i resursima, osiguravamo vrhunsku kvalitetu usluge i udobnost tijekom cijelog putovanja. Vjerujemo u stvaranje nezaboravnih trenutaka i uspomena koje će trajati cijeli život. Zahvaljujemo vam na povjerenju i radujemo se što ćemo vam omogućiti putovanje iz snova.
        </p>

        <button class="button55" onclick="toggleParagraphs()">Pročitaj više</button>

        <p id="paragraph2" style="display: none;" class="paragraph2">Naša turistička agencija predstavlja spoj stručnosti, entuzijazma i ljubavi prema istraživanju svijeta. S posvećenim timom putničkih savjetnika, svako putovanje postaje jedinstvena priča ispričana s pažnjom prema detaljima. Uvjereni smo da svatko zaslužuje iskustvo koje će probuditi čula, proširiti horizonte i pružiti neizmjerne radosti. Naša filozofija je jednostavna - stavljamo putnike na prvo mjesto. Bilo da je riječ o individualnim avanturama, obiteljskim odmorima ili poslovnim putovanjima, pružamo savršeno ukrojene programe kako biste maksimalno uživali u svakom trenutku. Ponosno se oslanjamo na našu stručnost, integritet i posvećenost zadovoljstvu naših klijenata. Svi smo zaljubljenici u putovanja, i to ljubavlju dijelimo s vama, potičući vas da otkrijete svijet na način koji odražava vaše jedinstvene želje i interese. Neka naša agencija bude vaš vodič kroz nevjerojatna putovanja koja će obogatiti vaš život i ostati urezana u sjećanju zauvijek.
        </p>

        </div>
        <br>
        <div class="container22">
        <div class="counterr-wrapper">
            <div class="counterr">
                <h1 class="count" data-target="1254">0</h1>
                <p>Sedmični posjetitelji</p>
            </div>
            <div class="counterr">
                <h1 class="count" data-target="12168">0</h1>
                <p>Zadovoljni korisnici</p>
            </div>
            <div class="counterr">
                <h1 class="count" data-target="100">0</h1>
                <p>Osvojene nagrade</p>
            </div>
        </div>
        </div>


        <script src="main.js"></script>
        <br><br><br>
        <div class="video">
        <video width="800" height="395" controls>
    <source src="videoo.mp4" type="video/mp4">
        </div>
         <div class="naslov">
            <h2>ZAŠTO IZABRATI NAS?</h2>
            <br>
            <br>
            <br>
            <div class="bxs">
                
                
                <div class="box-image">
                    
                    <img src="lug.png" alt="Image 8">
                    <p>PRISTUPAČNE CIJENE</p><br>
                </div>
                <div class="box-image">
                    <img src="world1.png" alt="Image 9">
                    <p>ŠIROK IZBOR DESTINACIJA</p>
                </div>
                <div class="box-image">
                    <img src="up (2).png" alt="Image 10">
                    <p>VISOKO KVALIFIKOVANA USLUGA</p>
                </div>
            </div>
            
             
    </header>

    <br>
    <br>

    <footer>
        <br>
        <div class="contact">
            <h2>KONTAKTIRAJTE NAS</h2>
            <div class="container-all">
            <div class = "container-kompanija">
                <h3>KOMPANIJA<h3>
                    <p><a href="onama.php"> O nama</a></p>
                    <p>Galerija</p>
                </div>
                <div class = "container-pomoc">
                <h3>POTRAŽITE POMOĆ<h3>
                    <p>FAQ</p>
                    <p><a href="kontakt.php">Kontakt</a></p>
                    <p>Opšta pravila</p>
                </div>
                <div class = "container-info">
                <h3>INFORMACIJE<h3>
                    <p>Vijesti</p>
            </div>
        </div>
        <div class="ftr">
        <div class="ftr-image">
                    <img src="loc.png" alt="Image 11">
                    <p>Turalibegova 43, Tuzla 75000</p>
                </div>
                <div class="ftr-image">
                    <img src="phone.png" alt="Image 12">
                    <p>+387 35 294-046</p>
                </div>
                <div class="ftr-image">
                    <img src="email.png" alt="Image 13">
                    <p>panorama.travels@info.gmail</p>
                </div>
            
            </div>
            </div>
            
        </div>
    </footer>
</body>
</html>
