<?php
session_start();
require_once "dbCreate.php";
if(isset($_SERVER['PHP_SELF'])){
	$_SESSION["filename"] = $_SERVER['PHP_SELF'];
}
include 'htmlheader.php';
include 'htmlmenu.php';
?>

<body>
	<section id="change" class="change">
        <div>
            <h1 id="mainTitle" >MagicTravel</h1>
            <img src="bodyImage.jpg" alt="" width="1200" height="750">
        </div>
    </section>

	<section id="someText" class="someText">
    <div class="tablicaWhy">
        <h2 class="commentTitle">Witamy na naszej stronie i zapraszamy do skorzystania z naszych usług!</h2>
            <p class="notes">
            Jesteśmy firmą organizującą wyjazdy zagraniczne, które zapewniają niezapomniane przygody i wrażenia
             z podróży. Nasz doświadczony i kreatywny zespół dba o każdy szczegół, oferując różnorodne wycieczki
              dla osób indywidualnych, rodzin i grup zorganizowanych, zapewniając bogaty program zwiedzania, atrakcyjne 
              noclegi i opiekę przewodnika. 
              <br>Twój wyjazd jest w dobrych rękach!
            <br><br>
            </p>
    </div>
    </section>

	<section id="whyWe" class="whyWe">
		<div  class="tablicaWhy" style="padding-top:16px">
			<h2 class="commentTitle">Co zawiera usługa wyjazdów MagicTravel?</h2>
				<div class="tablicaWhyWe">
					<ul>
						<p class="titleLi">Nasza oferta:</p>
						<br><li>Kilka indywidualnych spotkań, aby dokładnie zaplanować podróż.</li>
						<br><li>Zorganizowanie transportu między lotniskiem a zakwaterowaniem, jeśli to konieczne.</li>
						<br><li>Ilustrowany PDF z opisem planu podróży i unikalnych atrakcji turystycznych.</li>
						<br><li>Rezerwacja biletów na atrakcje turystyczne i wydarzenia, takie jak koncerty, wystawy lub wycieczki po muzeach.</li>
						<br><li>Ubezpieczenie podróżne z rozszerzonymi świadczeniami, takimi jak ubezpieczenie odpowiedzialności cywilnej za szkody osobowe i materialne, ubezpieczenie bagażu oraz opóźnienia lotu.</li>
						<br><li>Telefoniczny kontakt z organizatorem dla uczestników przed wyjazdem.</li>
						<br><li>Opieka lokalnych przewodników i ekspertów w dziedzinie kultury i regionu.</li>
						<br><li>Rekomendacje dotyczące miejsc, które warto odwiedzić i doświadczeń, których nie można przegapić w danym kraju.</li>
						<a class="wpisanieButton" href="wpisanie.php">Wpisać się!</a>
					</ul>
				</div>
		</div>
    </section>

    <section id="ourPlan" class="ourPlan">
		<div class="container2" style="padding-top:16px">
			<h2 class="commentTitle">Opinie naszych klientów</h2>
				<div class="veiw-box">
					<div id="testimonials">

						<div class="user space">
							<p>Szkoła ta przerosła moje oczekiwania. Wspaniała kadra, która pomogła mi w osiągnięciu mojego celu.
								Zajęcia są dobrze zorganizowane i nauczyciele są kompetentni.
							</p>
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
							<h3>Anna Kaczmarek</h3>
                            </div>
						</div>

						<div class="user">
							<p>Bardzo zadowolony z kursu. 
								Uczą się tutaj najnowszych technologii, co daje mi przewagę na rynku pracy.
								Szkoła zapewnia bardzo ciekawe projekty. Jestem zadowolona!
							</p>
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
							<h3>Jan Kowalski</h3>
                            </div>
						</div>

						<div class="user space">
							<p>Polecam tę szkołę każdemu, kto chce zdobyć solidne umiejętności w programowaniu. 
								Szkoła skupia się na praktycznych umiejętnościach, co bardzo mi odpowiada. Polecam.
							</p>
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
							<h3>Marta Górska</h3>
                            </div>
						</div>

						<div class="user">
							<p>Zakochałem się w programowaniu dzięki tej szkole. Zawsze będę wdzięczny za to doświadczenie.
								Bardzo miła atmosfera na zajęciach, co pozwala na swobodną naukę.
							</p>
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
							<h3>Michał Nowak</h3>
                            </div>
						</div>
						
						<div class="user space">
							<p>Cieszy mnie, że trafiłem na tę szkołę. Bardzo dobrze przygotowali mnie do rynku pracy.
								Lekcje są prowadzone w sposób przystępny, co ułatwia zrozumienie trudnych koncepcji.
							</p>
							
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
                                <h3>Piotr Wójcik</h3>
                            </div>
						</div>
						
						<div class="user">
							<p>Nie wyobrażam sobie, aby uczyć się programowania gdziekolwiek indziej. Wspaniałe doświadczenie edukacyjne.
								Czysty kod i bardzo dobra organizacja zajęć.
								Nauczyciele są świetni!
							</p>
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
							<h3>Ola Krawczyk</h3>
                            </div>
                            
						</div>
						
						<div class="user space">
							<p>
								Jestem zaskoczony, jak wiele nauczyłem się w krótkim czasie. W pełni polecam tę szkołę.
								Zajęcia są wymagające, ale nauczyciele zawsze służą pomocą.
							</p>
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
							<h3>Marek Woźniak</h3>
                            </div>

						</div>

						<div class="user">
							<p>Podobało mi się podejście nauczycieli do edukacji. Zawsze byli chętni do pomocy i wyjaśnienia.
								Jestem zadowolony z indywidualnego podejścia nauczycieli do uczniów.
							</p>
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
							<h3>Krzysztof Sikorski</h3>
                            </div>

						</div>
						
						<div class="user space">
							<p>Świetna szkoła, świetni ludzie. Polecam każdemu, kto chce zdobyć wiedzę w programowaniu.
								Nauczyłem się tutaj wiele i czuję się pewniej w programowaniu.
							</p>
                            <div class="testimonial-image">
							    <img src="user1.jpg" alt="">
							<h3>Tomasz Żukowski</h3>
                            </div>
                            
						</div>
						
					</div>
					
					<div class="controls">
						<span id="control1"></span>
						<span id="control2" class="actives"></span>
						<span id="control3"></span>
					</div>
					
				</div>
			<script>
				var testimonials = document.getElementById('testimonials');
				var control1 = document.getElementById('control1');
				var control2 = document.getElementById('control2');
				var control3 = document.getElementById('control3');
				
				control1.onclick=function(){
					testimonials.style.transform = "translateX(1170px)";
					control1.classList.add("actives");
					control2.classList.remove("actives");
					control3.classList.remove("actives");
				}
				
				control2.onclick=function(){
					testimonials.style.transform = "translateX(0px)";
					control1.classList.remove("actives");
					control2.classList.add("actives");
					control3.classList.remove("actives");
				}
				
				control3.onclick=function(){
					testimonials.style.transform = "translateX(-1170px)";
					control1.classList.remove("actives");
					control2.classList.remove("actives");
					control3.classList.add("actives");
				}
			</script>
		</div>
	</section>
</body>
</html>

<?php
include 'footer.php';
?>