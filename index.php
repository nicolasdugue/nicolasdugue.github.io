	
<?php 	
include "header.php" ;?>
<div id="page">
	<div id="content">
		<?php
			if (isset($_GET['research'])) {
				include("research.php");
			}
			else if (isset($_GET['publi'])) {
                                include("publications.php");
                        }

			else if (isset($_GET['teaching'])) {
				include("teaching.php");
			}
			else if (isset($_GET['misc'])) {
				include("misc.php");
			}
			else if (isset($_GET['dev'])) {
                                include("dev.php");
                        }
			else if (isset($_GET['network'])) {
				include("network.php");
			}
			else if (isset($_GET['infra_prod'])) {
                                include("infraProd.php");
                        }
			else if (isset($_GET['poo'])) {
                                include("poo.php");
                        }
			else if (isset($_GET['mac'])) {
                                include("MAC.php");
                        }
			else {
		?>
		<div class="post">
			<h2 class="title">Nicolas Dugué - McF LIUM</h2>
			<div style="clear: both;">&nbsp;</div>
			<div class="entry">
				<img src="images/portrait.jpg" width="30%"/>

				<p style="float : right">
				<b>mail :</b>  nicolas.dugue@univ-lemans.fr <br />

								<b>Coordonnées postales</b><br />

Laboratoire d'Informatique de l'Université du Maine (LIUM - EA 4023)<br />
IC2, Institut d'Informatique Claude Chappe<br />
Avenue Olivier Messiaen</p>
				<p style="clear : both">Je suis docteur de l'université d'Orléans (Laboratoire d'Informatique Fondamentale d'Orleans - LIFO) depuis juin 2015, et après un post-doc au LORIA au sein de l'équipe SYNALP, je suis maintenant Maître de conférences au LIUM de l'université du Maine.

				</p>
			</div>
		</div>

		<div class="post">
			<h2 class="title">Poste à pourvoir : Post-doc : Polysemic embeddings</h2>
			<div style="clear: both;">&nbsp;</div>
			<div class="entry">
				<a href="doc/Post_doc_Polysemy.pdf">La fiche de poste détaillée</a><br />
				<b>Laboratoire d’accueil :</b> LIUM, équipe LST, https://lium.univ-lemans.fr/lium/lst/<br />
				<b>Partenaire industriel :</b> SNCF Innovation Recherche<br />
				<b>Site :</b> Le Mans<br />
				<b>Encadrement :</b> Nicolas Dugué (LIUM)<br />
				<b>Co-encadrement :</b> Nathalie Camelin (LIUM), Luce Lefeuvre (SNCF)<br />
				<b>Durée :</b> Contrat post-doctoral d’un an, début en septembre si possible<br />
			
			</div>
		</div>

		<div class="post">
			<h2 class="title">Mes axes de recherche</h2>
			<div style="clear: both;">&nbsp;</div>
			<div class="entry">
				<b>TAL/Fouille de texte</b>
				<p>
					<ul>
						<li> La fouille de corpus textuels ;
						<li> Les word embeddings.
					</ul>
				</p>	
				<b>Réseaux complexes</b>
				<p>
				<ul> 
						<li>L'analyse des réseaux sociaux : influence, diffusion de l'information, détection de communautés ;</li>
						<li>Les réseaux complexes et ce qui les caractérise : structure de communautés, propriété petit-monde, loi sans-échelle ;</li>
						<li>L'interprétation des clusters/communautés et leur qualité : labelling, roles communautaires, saillance ;
					
					</ul>
				</p>
			
			</div>
		</div>
		<?php }
		?>
		
	</div>
	<!-- end #content -->
	<?php include "sidebar_footpage.php" ;?>
<!-- end #footer -->
</body>
</html>
