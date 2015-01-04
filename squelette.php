<?php include("header.php"); ?>

<h4>SQUELETTE</h4>
<p>
	Voici le squelette quoi nous avons créé afin de concevoir notre système :<br />
	(Téléchargeable <a href="" >ICI</a>).<br />
	<img src="img/1.png" class="full-width" />
	Nous avons donc utilisé un squelette de positionnement mais aussi de forme, comme on peu très bien le voir avec les 2 esquisses rouge au centre, mais aussi l’esquisse verte.<br />
</p>

<h6>Pourquoi un squelette de forme ?</h6>
<p>
	Nous avons tout simplement choisie de réaliser un squelette de forme, tout simplement car il est plus simple par la suite de construire le carter !<br />
	En effet si on reprend notre travail dans l’ordre chronologique, le squelette a été la première chose que nous avons faite. Nous ne voulions simplement un squelette uniquement composé de points et de plans (nous le verrons pourquoi plus bas).<br />
	A ce moment on s’est vite rendu compte que le carter allait être la pièce la plus longue à faire et la plus difficile à faire. Ainsi il nous fallait absolument avoir à la modifier par la suite, il était donc important, de se rendre compte de l’encombrement de toutes les pièces pour éviter les interférences par la suite. Ainsi grâce a un squelette de forme, comme le nôtre on peut très clairement se rendre compte de l’encombrement du stator (et donc du rotor puisque celui-ci vient au milieu).<br />
</p>

<h6>Explication du squelette</h6>
<p>
	<img src="img/2.png" class="full-width" />
	Ainsi on pourra facilement crée et positionner toutes nos pièces à partir de ce squelette.<br />
</p>

<h6>Spécificités de notre squelette</h6>
<p>
	<img src="img/3.png" style="width:30%;" class="align-right" />
	L’esquisse au centre est celle du disque excentré de la ponceuse, permettant à la plaque de ponçage de décrire de petit cercle entrainant ainsi les vibrations.<br />
	L’axe est celui de l’arbre moteur.<br />
	Dans cette esquisse nous avons placé un point, qui est le centre de l’excentration.<br />
	Ainsi nous avons ajouté un paramètre angle est excentration, qui correspondent l’angle moteur et à la longueur de l’excentration qui sera ainsi réglable.<br />
	Et donc il sera tout à fait possible de faire changer l’angle pour voir la plaque de ponçage bouger. Nous avons ajouté le paramètre longueur d’excentration car sur la ponceuse réelle, cette longueur était de 0.5mm, ainsi nous l’avons mis a 2 mm pour mieux voir les déformations.<br />
</p>
<span class="clear" ></span>
<p>
	<img src="img/4.png" style="width:30%;" class="align-right" />
	Grace à notre squelette nous allons être capables de modéliser des composants déformés.<br />
	En effet pendant l’utilisation de la ponceuse, la partie haute reste immobile, pendant que la partie basse décrit de petits cercles. Ainsi la pièce faisant la jonction entre les 2 se déforme.<br />
	Du coup en cotant notre pièce par rapport au squelette, la déformation de celui-ci entrainera la déformation de la pièce.<br />
	Et il sera possible de voir la pièce se déformer au fur et à mesure que le moteur tourne en faisant varier le paramètre d’angle !<br />
	(Voir <a href="">ici</a> pour plus d’explication sur les supports plaque de ponçage).<br />
</p>
<span class="clear" ></span>
<p>
	<img src="img/4.png" style="width:30%;" class="align-right" />
	Voici un exemple d’un squelette uniquement composé de points et de plan :<br />
	Ainsi on se rend facilement compte de l’importance de mettre des esquisses dans le squelette, en effet cela permet de savoir où l’on se trouve et ne pas juste avoir une quantité de plan impressionnante auxquels on ne voit pas à quoi cela correspond ! (comme c’est le cas en bas de cette image).<br />
	Ainsi pour ce squelette qui correspond à un squelette d’un robot (voir photo ci-dessous).<br />
	On aurait préféré avoir les esquisses des plaques des différents étages, ce qui aurait donné un peu plus de lisibilité.
</p>

<?php include("footer.php"); ?>
