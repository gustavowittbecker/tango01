<!DOCTYPE html>

<html lang="es">
<Head> 
<TITLE>Taller Tango</TITLE>

<meta http-equiv="Content-Type" content="text/html" />
<meta charset="utf-8" />

<style>
	* {	font-family: Garamond, serif;
		color:dimgray;
		font-size:14px;
		margin:0;
		padding:0;
		box-sizing: border-box;
	}
	html {height:100%}
	body {height:100%} /*va a ser el contenedor principal*/


	/*Estilos para todo lo modal*/


	div.ventanaModalApagada { /*Esta ventana se abrira en una determinada posicion*/
		position:fixed;
		left:18%;
		top:18%;
		width:40%;
		height:60%;
		background-color:yellow; /*solo para ver como va quedando*/
		color:black;
		z-index:1;
		overflow:hidden;
		visibility: hidden; /*Para elementos que estan pero no se ven*/
	}
	
	div.ventanaModalPrendida {
		position:fixed;
		left:18%;
		top:18%;		
		width:40%;
		height:70%;	
		background-color:yellow;
		color:black;
		z-index:1;
		overflow:hidden;
		visibility: visible;
	}

	
	div.encabezadoModal { /*Para encabezar el contenido de la vent modal*/
		width:100%;
		height:10%;
		background-color:lightblue;
	}

	div.btCruz { /*Para cerrar las ventanas modales*/
		color:red;
		width:10%;
		height:100%;
		background-color: #BBBBBB;
		float:right; /*Flota a la derecha de su contenedor padre*/
		cursor:pointer;
		display: flex; /*Permite flexibilizar el contenido. En este caso la cruz*/
		justify-content: center; /*Permite centrar al medio en x el contenido*/
		align-items: center; /*Permite centrar al medio en y el contenido*/
	}


	div.contenidoModal { /*Aqui insertara el iframe con el video que corresponda */ 
		width:100%;
		height:90%;
		background-color: blue;
		border-style:solid;
		opacity:1;
		border-style:solid;
	}
	


	/*Estilos para el documento de base*/

	div.encabezado{display:flex;justify-content:center;width:100%;height:20%;background-image: url("./imagenes/fluido02.jpg");
		background-repeat: no-repeat;background-size: cover; background-position: center} /*Contenedor fijo ocupando el 20%*/



	div.contenedorGlobal {
				height:80%;
				border-style:solid;
				width:100%;
				overflow-y:scroll} /*Contenedor scroleable*/

	.accion {cursor:pointer;height:200px;display:flex;justify-content:center;background-Color:blue}

		h1 {font-size:6em;text-align: center;}
		h2 {font-size:4em;text-align: center;}
		h3 {font-size:2em;text-align: center;}
		h3 {font-size:1em;text-align: center;}
	
	
	
	img {	
	    max-width: 100%; /*Ancho libre permitiendo al navegador calcularla en base o otros paramentros 
		sin sobrepasar en ancho el tamaño de la caja*/
    	max-height: 100%;  
	}


	div.aparte{clear:both;height:150px;background-color:white}

	div.enlace{clear:both;height:40px;}
	div.enlace a {font-size:2em}
	div.contenedorPorTercio{width:33%;height:250px;/*border-style:solid;*/float:left;display:flex;align-items:center}
	div.contenedorPorMedio{float:left;width:50%;height:250px;display:flex;justify-content:center;/*background-color:blue;*/align-items:center}
	div.contenedorPorDosTercios{width:66%;height:250px;/*border-style:solid;*/float:left;display:flex;align-items:center}
	

	div.bloque{display:block}

	h2.enlace1{cursor:pointer}

	.fontTitulo {
		font-size: 72px
	}
	
	.fontGrande {
		font-size: 36px; 
	}

	.fontMedio { 
		font-size: 18px;
	}

	.fontChico{
		font-size: 12px;
	}



</style>

</Head>

<body>

	<div class="encabezado">
		<div >
			<span class="fontGrande">Tango</span>
			<span class="fontMedio">en Buenos Aires</span>
		</div>
	</div>


	<div class="contenedorGlobal">
		
		<div class="aparte"></div>

		<hr />		
		<h2 id="bailarEnSerio"></h2>		
		<hr />
		<div class="aparte"></div>
		

		<div class="bloque">
			<div class="contenedorPorTercio">
				<div id="imgDominarCuerpo">
					<img  src="./imagenes/unico01.png">
				</div>
			</div>

			<div class="contenedorPorTercio" >
				<img id="idPrendeDominarCuerpo" class="accion" src="./imagenes/iconoVideo.png" />
			</div>

			<div class="contenedorPorTercio" >
				<h2 id="textoDominarCuerpo"></h2>
			</div>
		</div>

		<div class="aparte"></div>
		<div class="aparte"></div>
		
	
		<div class="bloque">
			<div class="contenedorPorTercio" >
				<div id="imgPararteBien" class="accion" >
					<img src="./imagenes/parejaTango1.jpeg">
				</div>
			</div>

			<div class="contenedorPorTercio" >
				<img id="idPrendePararteBien" src="./imagenes/iconoVideo.png" />
			</div>

			<div class="contenedorPorTercio" >
				<h2 id="textoPararteBien"></h2>
			</div>
		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>


		<div class="bloque">
			<div class="contenedorPorTercio" >
				<div id="imgAbrazo" class="accion" >
					<img src="./imagenes/abrazo01.png">
				</div>
			</div>

			<div class="contenedorPorTercio" >
				<img id="idPrendeAbrazo" src="./imagenes/iconoVideo.png" />
			</div>

			<div class="contenedorPorTercio" >
				<h2 id="textoAbrazo"></h2>
			</div>
		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>




		<div class="bloque">
			<div class="contenedorPorTercio" >
				<div id="imgMemoria" class="accion" >
					<img src="./imagenes/tangoMemoria01.jpeg">
				</div>
			</div>

			<div class="contenedorPorTercio" >
				<img id="idPrendeTangoMemoria" src="./imagenes/iconoVideo.png" />
			</div>


			<div class="contenedorPorTercio" >
				<h2 id="textoMemorizar"></h2>
			</div>
		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>



		<div class="bloque">
			<div class="contenedorPorTercio" >
				<div id="imgGancho" class="accion" >
					<img src="./imagenes/tangoGancho02.jpeg">
				</div>
			</div>

			<div class="contenedorPorTercio" >
				<img id="idPrendeTangoGanchos" src="./imagenes/iconoVideo.png" />
			</div>


			<div class="contenedorPorTercio" >
				<h2 id="textoGanchos"></h2>
			</div>
		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>



		<div class="bloque">
			<div class="contenedorPorTercio" >
				<div id="imgAft" class="accion" >
					<img src="./imagenes/tangofuego01.jpeg">
				</div>
			</div>

			<div class="contenedorPorTercio" >
				<img id="idPrendeTangoAft" src="./imagenes/iconoVideo.png" />
			</div>


			<div class="contenedorPorTercio" >
				<h2 id="textoAft"></h2>
			</div>
		</div>


		<div class="aparte"></div>
		<div class="aparte"></div>


		<div class="bloque">
			<div class="contenedorPorTercio" >
				<div id="imgSali" class="accion" >
					<img src="./imagenes/unico02.png">
				</div>
			</div>

			<div class="contenedorPorTercio" >
				<img id="idPrendeTangoSali" src="./imagenes/iconoVideo.png" />
			</div>


			<div class="contenedorPorTercio" >
				<h2 id="textoSali"></h2>
			</div>
		</div>






		<div class="aparte"></div>
		<div class="aparte"></div>



		
		<div class="bloque">
			<div class="contenedorPorTercio" >
				<div id="imgSali" class="accion" >
					<img src="" />
				</div>
			</div>

			<div class="contenedorPorTercio" >
				<img id="idPrendeTangoSali" src="./imagenes/tangoDrawing.jpeg" />
			</div>


			<div class="contenedorPorTercio" >
				<h2 id="textoAprenderTango"></h2>
			</div>
		</div>
		


		<div class="aparte"></div>
		<div class="aparte"></div>



<!--Datos Wittbecker -->


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



<!--ventana modal -->

<div id="ventanaModal" class="ventanaModalApagada">   <!--ventana modal 1-->
	<div id="encabezadoModal" class="encabezadoModal" >
		Videos
		<div id="btCruz" class="btCruz">X</div>
	</div>
	<div id="peli" class="contenidoModal">
		<!--<div id="peli" class="videos"></div>-->
	</div>

</div> <!--cierra ventana Modal-->





</body>






<script>



/*Acciones al pulsar los links a videos*/


document.getElementById("idPrendeDominarCuerpo").addEventListener("click", function() {
	//alert("Prender video");
	document.getElementById("ventanaModal").className="ventanaModalPrendida";
	document.getElementById("peli").innerHTML = "<iframe width='100%' height='100%' src='./videos/gusMirta01.m4v'>";	
});



document.getElementById("idPrendePararteBien").addEventListener("click", function() {
	//alert("Prender video);
	document.getElementById("ventanaModal").className="ventanaModalPrendida";
	document.getElementById("peli").innerHTML = "<iframe width='100%' height='100%' src='./videos/tangoGiroCombinado01.mp4'>";	
});


document.getElementById("idPrendeAbrazo").addEventListener("click", function() {
	//alert("Prender video");
	document.getElementById("ventanaModal").className="ventanaModalPrendida";
	document.getElementById("peli").innerHTML = "<iframe width='100%' height='100%' src='./videos/tangoMexico.mp4'>";	
});

document.getElementById("idPrendeTangoMemoria").addEventListener("click", function() {
	//alert("Prender video");
	document.getElementById("ventanaModal").className="ventanaModalPrendida";
	document.getElementById("peli").innerHTML = "<iframe width='100%' height='100%' src='./videos/GanchoPos8Adelante.m4v'>";	
});


document.getElementById("idPrendeTangoGanchos").addEventListener("click", function() {
	alert("Prender video");
	document.getElementById("ventanaModal").className="ventanaModalPrendida";
	document.getElementById("peli").innerHTML = "<iframe width='100%' height='100%' src=''>";	
});

document.getElementById("idPrendeTangoAft").addEventListener("click", function() {
	alert("Prender video");
	document.getElementById("ventanaModal").className="ventanaModalPrendida";
	document.getElementById("peli").innerHTML = "<iframe width='100%' height='100%' src=''>";	
});

document.getElementById("idPrendeTangoSali").addEventListener("click", function() {
	alert("Prender video");
	document.getElementById("ventanaModal").className="ventanaModalPrendida";
	document.getElementById("peli").innerHTML = "<iframe width='100%' height='100%' src=''>";	
});









document.getElementById("btCruz").addEventListener("click", function() {
	document.getElementById("ventanaModal").className="ventanaModalApagada";
});



/*Traducción*/

const es_bailarEnSerio = "<span class='fontGrande'>Aprendé</span><span class='fontMedio'>a bailar en serio</span>";
const en_bailarEnSerio = "<span class='fontGrande'>Learn to</span><span class='fontMedio'> dance seriously </span>";

const es_dominarCuerpo = "<span class='fontGrande'>Aprendé</span> <span class='fontMedio'>a dominar tu cuerpo, <br/>"+
							"a escuchar la música, <br /> "+
							"a seguirla  <br />"+
							"y sobre todo <br />"+
							"a hacer sentir bien a tu pareja. </span>";
const en_dominarCuerpo = "<span class='fontGrande'>Learn to</span><span class='fontMedio'> master your body, <br />"+ 
						 "listen to the music, <br />"+
						  "follow it, <br />"+ 
						  "and above all, <br />"+
						  "to make your partner feel good. </span>";

const es_pararteBien = "<span class='fontGrande'>Learn to</span><span class='fontMedio'>a pararte bien, <br/>"+
							"a caminar y a desplazarte correctamente,<br/>"+
							"a pivotear en giro con tus metatarsos y cadera,<br/>"+
							"a disociar el movimiento de tu torso.<br/>"+
							"Todo te ayudara a flexibilizar tu cuerpo.</span>";
const en_pararteBien = "<span class='fontGrande'>Learn to</span><span class='fontMedio'> stand up straight, <br />"+
							"walk and move correctly, <br/>"+
							"pivot in a turn with your metatarsals and hip<br/>"+
							"dissociate the movement of your torso.<br/>"+
							"Every thing will help you to make your body more flexible </span>";

const es_abrazo = "<span class='fontGrande'>Learn to</span><span class='fontMedio'>a marcar un abrazo firme, <br />"+
				"y ala vez flexible</span>";
const en_abrazo = "<span class='fontGrande'>Learn to</span><span class='fontMedio'>give a firm embrace<br />"+
			"and flexible at the same time</span>";


const es_memorizar = "<span class='fontGrande'>Learn to</span><span class='fontMedio'>a no memorizar figuras, <br/>"+
			"sino simplemente usarlas.</span>";
const en_memorizar = "<span class='fontGrande'>Learn to</span> <span class='fontMedio'>no memorize figures, <br/>"+
			"but simply to use them without thinking.</span>";

const es_ganchos = "<span class='fontGrande'>Learn to</span> <span class='fontMedio'>a usar ganchos y sacadas, <br/>"+
			"pero solo en los momentos adecuados.</span>";
const en_ganchos = "<span class='fontGrande'>Learn to</span><span class='fontMedio'>use ganchos and sacadas, <br/>"+
			"but only at the right times</span>";

const es_aft= "<span class='fontGrande'>Learn to</span><span class='fontMedio'>a asociar el movimiento a las ideas de <br />"+
				"agua, aire, tierra y fuego. </span>";
const en_aft= "<span class='fontGrande'>Learn to</span><span class='fontMedio'>associate movement with the ideas of <br/>"+
				"water, air, earth, and fire.</span>";

			

const es_sali = "<span class='fontGrande'>Salí a bailar</span> <span class='fontMedio'>"+
					"pensando que tu baile <br/>"+	
					"no es ni mejor ni peor que el de los demás. <br />"+
					"Es diferente, especial y tal vez único.</span>";
const en_sali = "<span class='fontGrande'>Go away dancing</span><span class='fontMedio'> <br />"+
					"with the understanding that your dance <br/>"+
					"is neither better nor worse than anyone else's. <br/>"+
					"It's different, special, and perhaps unique."+
					"</span>";



const es_aprenderTango = "<span class='fontGrande'>Aprender a bailar tango en serio</span>"+
							"<span class='fontMedio'>"+
							"es un camino de ida sin regreso</span>";
const en_aprenderTango = "<span class='fontGrande'>Learn to dance Tango seriusly</span><span class='fontMedio'>"+
							"is a one-way street with no return.</span>";




							

let lenguaje = window.navigator.languages; //Es un array
	

/*document.getElementById("demo").innerHTML = lenguaje[0]; */

//alert(lenguaje[0]);


//<h2> Asignacion de textos condicional al idioma del navegador


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
	document.getElementById("textoAft").innerHTML = en_aft;
	document.getElementById("textoSali").innerHTML = en_sali;
	document.getElementById("textoAprenderTango").innerHTML = en_aprenderTango;
}






</script>
</html>
