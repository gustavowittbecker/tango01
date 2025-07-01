<!DOCTYPE html>

<html lang="es">
<Head> 
<TITLE>Taller y clases de Tango</TITLE>

<meta http-equiv="Content-Type" content="text/html" />
<meta charset="utf-8" /> 

<style>
	* {font-family: Garamond, serif;color:dimgray;font-size:16px;
		margin:0;padding:0;box-sizing: border-box;}
	html {height:100%;}
	body {height:100%} /*va a ser el contenedor principal*/

	div.encabezado{width:100%;height:20%;background-image: url("./imagenes/fluido02.jpg");
		background-repeat: no-repeat;background-size: cover; background-position: center} /*Contenedor fijo*/

	div.videos{display:flex;justify-content:center;width:100%;height:25%;opacity:1;/*background-color:yellow;*/padding:10px}

	div.contenedorGlobal {height:55%;width:100%;padding: 20px;overflow:scroll} /*Contenedor scroleable*/

	div.accion {cursor:pointer;height:200px;display:flex;justify-content:center;background-Color:blue}

	h1 {font-size:6em;text-align: center;}
	h2 {font-size:3em;text-align: center;}
	h3 {font-size:2em;text-align: left;}

	
	.fontGrande{font-size:22px} /*Para aplicar a un span por ejemplo*/
	
	img {	
	    max-width: 100%; /*Ancho libre permitiendo al navegador calcularla en base o otros paramentros 
		sin sobrepasar en ancho el tamaño de la caja*/
    	max-height: 100%;  
	}


	div.aparte{clear:both;height:100px;background-color:white}

	div.enlace{clear:both;height:40px;}
	div.enlace a {font-size:2em}
	div.contenedorPorTercio{width:33%;height:250px;/*border-style:solid;*/float:left;display:flex;align-items:center}
	div.contenedorPorMedio{float:left;width:50%;height:250px;display:flex;justify-content:center;/*background-color:blue;*/align-items:center}
	div.contenedorPorDosTercios{width:66%;height:250px;/*border-style:solid;*/float:left;display:flex;align-items:center}
	

	div.bloque{display:block}

	h2.enlace1{cursor:pointer}

	div.modal {
	}

</style>

</Head>

<body>

	<div class="encabezado"><h1> Tango </h1>
	</div>
	<div id="peli" class="videos">
	</div>

	<div class="contenedorGlobal">

		<div class="aparte"></div>

		<hr />		
		<h2 id="bailarEnSerio"></h2>		
		<hr />
		<div class="aparte"></div>
		

		<div class="bloque">
			<div class="contenedorPorTercio" style="">
				<div id="imgDominarCuerpo" class="accion" style="">
					<img src="./imagenes/unico01.png">
				</div>
			</div>

			<div class="contenedorPorTercio" style="">
			</div>

			<div class="contenedorPorTercio" style="">
				<h2 id="textoDominarCuerpo"></h2>
			</div>
		</div>

		<div class="aparte"></div>
		<div class="aparte"></div>
		
	
		<div class="bloque">
			<div class="contenedorPorTercio" style="">
				<div id="imgPararteBien" class="accion" style="">
					<img src="./imagenes/parejaTango1.jpeg">
				</div>
			</div>

			<div class="contenedorPorTercio" style="">
			</div>

			<div class="contenedorPorTercio" style="">
				<h2 id="textoPararteBien"></h2>
			</div>
		</div>

		<div class="aparte"></div>
		<div class="aparte"></div>


		<div class="bloque">
			<div class="contenedorPorTercio" style="">
				<div id="imgAbrazo" class="accion" style="">
					<img src="./imagenes/abrazo01.png">
				</div>
			</div>

			<div class="contenedorPorTercio" style="">
			</div>

			<div class="contenedorPorTercio" style="">
				<h2 id="textoAbrazo"></h2>
			</div>
		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>




		<div class="bloque">
			<div class="contenedorPorTercio" style="">
				<div id="imgMemoria" class="accion" style="">
					<img src="./imagenes/tangoMemoria01.jpeg">
				</div>
			</div>

			<div class="contenedorPorTercio" style="">
			</div>


			<div class="contenedorPorTercio" style="">
				<h2 id="textoMemorizar"></h2>
			</div>
		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>



		<div class="bloque">
			<div class="contenedorPorTercio" style="">
				<div id="imgGancho" class="accion" style="">
					<img src="./imagenes/tangoGancho02.jpeg">
				</div>
			</div>

			<div class="contenedorPorTercio" style="">
			</div>


			<div class="contenedorPorTercio" style="">
				<h2 id="textoGanchos"></h2>
			</div>
		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>





















		<hr/>

		<div style="display:flex;background-color:white;color:black">
			<div class="contenedorPorTercio" >
				<div class="contenedorPorTercio" >
					<img src="./imagenes/wahtsapp01.png" />
				</div>
				<div class="contenedorPorDosTercios" >
					&nbsp;<span class="fontGrande">15 65069142 (Gustavo)</span>
				</div>
			</div>
			
			<div class="contenedorPorTercio" >
				<div class="contenedorPorTercio" >
					<img src="./imagenes/gmail01.png" />
				</div>
				<div class="contenedorPorDosTercios">
					&nbsp;<span class="fontGrande">gwittbeckertango@gmail.com</span>
				</div>
			</div>

		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>


		
	</div> <!--Cierra contenedorGlobal-->

</body>






<script>

const es_bailarEnSerio = "Aprendé <span class='fontGrande'>a bailar en serio</span>";
const en_bailarEnSerio = "Learn to <span class='fontGrande'> dance seriously </span>";

const es_dominarCuerpo = "Aprendé <span class='fontGrande'>a dominar tu cuerpo, <br/>"+
							"a escuchar la música, <br /> "+
							"a seguirla  <br />"+
							"y sobre todo <br />"+
							"a hacer sentir bien a tu pareja. </span>";
const en_dominarCuerpo = "Learn to <span class='fontGrande'> master your body, <br />"+ 
						 "listen to the music, <br />"+
						  "follow it, <br />"+ 
						  "and above all, <br />"+
						  "to make your partner feel good. </span>";

const es_pararteBien = "Aprendé <span class='fontGrande'>a pararte bien, <br/>"+
							"a caminar y a desplazarte correctamente,<br/>"+
							"a pivotear en giro con tus metatarsos y cadera,<br/>"+
							"a disociar el movimiento de tu torso.<br/>"+
							"Todo te ayudara a flexibilizar tu cuerpo.</span>";
const en_pararteBien = "Learn to  <span class='fontGrande'> stand up straight, <br />"+
							"walk and move correctly, <br/>"+
							"pivot in a turn with your metatarsals and hip<br/>"+
							"dissociate the movement of your torso.<br/>"+
							"Every thing will help you to make your body more flexible </span>";

const es_abrazo = "Aprendé <span class='fontGrande'>a marcar un abrazo firme, <br />"+
				"y ala vez flexible</span>";
const en_abrazo = "Learn to <span class='fontGrande'>give a firm embrace<br />"+
			"and flexible at the same time</span>";


const es_memorizar = "Aprendé <span class='fontGrande'>a no memorizar figuras, <br/>"+
			"sino simplemente usarlas.</span>";
const en_memorizar = "Learn not to <span class='fontGrande'>memorize figures, <br/>"+
			"but simply to use them without thinking.</span>";

const es_ganchos = "Aprendé <span class='fontGrande'>a usar ganchos y sacadas, <br/>"+
			"pero solo en los momentos adecuados.</span>";
const en_ganchos = "Learn to <span class='fontGrande'>use ganchos and sacadas, <br/>"+
			"but only at the right times</span>";

const es_aft= "Aprendé <span class='fontGrande'>a asociar el movimiento a las ideas de <br />"+
				"agua, aire, tierra y fuego. </span>";
const en_aft= "Learn to <span class='fontGrande'>associate movement with the ideas of <br/>"+
				"water, air, earth, and fire.</span>";

			

const es_sali = "Sali a bailar <span class='fontGrande'>"+
					"pensando que tu baile <br/>"+	
					"no es ni mejor ni peor que el de los demás. <br />"+
					"Es diferente, especial y tal vez único.</span>";
const en_sali = "Go away dancing <span class='fontGrande'> <br />"+
					"with the understanding that your dance <br/>"+
					"is neither better nor worse than anyone else's. <br/>"+
					"It's different, special, and perhaps unique."+
					"</span>";



const es_aprenderTango = "Aprender a bailar tango en serio <br />"+
							"<span class='fontGrande'>"+
							"es un camino de ida sin regreso</span>";
const en_aprenderTango = "Learn to dance Tango seriusly <br /><span class='fontGrande'>"+
							"is a one-way street with no return.</span>";





/*

const es_ = "Aprendé <span class='fontGrande'>"+
			"</span>";
const en_ = "Learn not to <span class='fontGrande'>"+
			"</span>";
*/

							

let lenguaje = window.navigator.languages; //Es un array
	

/*document.getElementById("demo").innerHTML = lenguaje[0]; */

//alert(lenguaje[0]);

if (lenguaje[0]=="es-ES") {
	//alert("español");
	document.getElementById("bailarEnSerio").innerHTML = es_bailarEnSerio;
	document.getElementById("textoDominarCuerpo").innerHTML = es_dominarCuerpo;
	document.getElementById("textoPararteBien").innerHTML = es_pararteBien;
	document.getElementById("textoAbrazo").innerHTML = es_abrazo;
	document.getElementById("textoMemorizar").innerHTML = es_memorizar;
	document.getElementById("textoGanchos").innerHTML = es_ganchos;
	document.getElementById("textoAft").innerHTML = es_aft;
	document.getElementById("textoSali").innerHTML = es_sali;
	document.getElementById("textoAprenderTango").innerHTML = es_aprenderTango;
}
else if (lenguaje[0]=="en") {
	//alert("ingles");
	document.getElementById("bailarEnSerio").innerHTML = en_bailarEnSerio;
	document.getElementById("textoDominarCuerpo").innerHTML = en_dominarCuerpo;
	document.getElementById("textoPararteBien").innerHTML = en_pararteBien;
	document.getElementById("textoAbrazo").innerHTML = en_abrazo;
	document.getElementById("textoMemorizar").innerHTML = en_memorizar;
	document.getElementById("textoGanchos").innerHTML = en_ganchos;
	//document.getElementById("textoAft").innerHTML = en_aft;
	//document.getElementById("textoSali").innerHTML = en_sali;
	//document.getElementById("textoAprenderTango").innerHTML = en_aprenderTango;
}


document.getElementById("imgDominarCuerpo").addEventListener("click", function() {
	document.getElementById("peli").innerHTML = "<iframe src='https://www.youtube.com/embed/278iWcOadL8?si=hDBB68yQuD_EnMd8' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";	
});

document.getElementById("imgPararteBien").addEventListener("click", function() {
	document.getElementById("peli").innerHTML = "<iframe src='https://www.youtube.com/embed/D3MhYo_maZk?si=5Y4e5Fc6ntNcmZy_' title='YouTube video player' frameborder='0' ; autoplay; encrypted-media; web-share; referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";	
});
document.getElementById("imgAbrazo").addEventListener("click", function() {
	document.getElementById("peli").innerHTML = "";	
});

</script>
</html>
