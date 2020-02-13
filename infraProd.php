<center><h2 class="title">Infrastructure de production</h2></center>
<div class="post">
</div>

<div class="post">
<center><b>Responsable d'une partie du module : CM + TP<br />
M2 MIAGE option Systèmes d'information répartis<br />
2014 </b></center>
</div> 
			<div class="post">
					<h2 class="title">MongoDB/ElasticSearch/Kibana</h2>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
					<p>
						Le premier cours (téléchargement <a href='infra_prod/MongoDb_ElasticSearch.pdf' target='_blank'>ICI</a>)a pour but d'introduire un TP sur la gestion de tweets et l'analyse de leur polarité avec une architecture constituée de : 
						<ul>
							<li> <strong>MongoDB</strong> : Base de données NOSQL pour la gestion des données
							<li><strong>ElasticSearch</strong> : Moteur de recherche et d'indexation basé sur Apache Lucene pour la fouille des données
							<li><strong>Kibana</strong> : interface de création de dashboard destiné à présenter les résultats obtenus via des requêtes ElasticSearch
						</ul>
						Lors du TP (téléchargement <a href='infra_prod/TP5-Analysedetweets.pdf' target='_blank'>ICI</a>), les étudiants commencent d'abord par installer tout les composants nécessaires au TP sur un container <strong>Docker</strong> -système de virtualisation.<br />
						Les étudiants se familiarisent avec l'insertion, la modification et le langage de requêtes de MongoDB à travers une collection de tweets issu de la base de données <a href='http://help.sentiment140.com/for-students' target='_blank'>Sentiment 140</a> (fichiers <a href='infra_prod/data/20000pos.csv' target='_blank'>20000pos.csv</a>, <a href='infra_prod/data/30000neg.csv' target='_blank'>30000neg.csv</a> et <a href='infra_prod/data/fieldFile' target='_blank'>fieldFile</a>).
						Les données sont répliquées dans ElasticSerach automatiquement grâce à la River ElasticSearch pour MongoDB que les étudiants installent. MongoDB est également lancée en mode réplication pour garantir la réplication dans ElasticSearch.
						<br />Ils travaillent ensuite à rechercher des informations dans les tweets à travers l'outil ElasticSearch et présentent ces résultats via la création d'un Dashboard Kibana, interface web full Html/Javascript.

					</p>
				</div>
			</div>
				<div class="post">
					<h2 class="title">MongoDB/ElasticSearch/Kibana</h2>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
					<p>
						Le second cours (téléchargement <a href='infra_prod/MapReduce_BigData.pdf' target='_blank'>ICI</a>) est centré sur les mêmes technologies. Cependant, il est axé sur l'utilisation de MapReduce avec MongoDB. Des notions sur les Big Data et un algorithme simplifié de recommandation (amis communs) sont notamment présentés via MapReduce.
						<ul>
							<li> <strong>MongoDB</strong> : Base de données NOSQL pour la gestion des données
							<li><strong>ElasticSearch</strong> : Moteur de recherche et d'indexation basé sur Apache Lucene pour la fouille des données
							<li><strong>Kibana</strong> : interface de création de dashboard destiné à présenter les résultats obtenus via des requêtes ElasticSearch
						</ul>
						Pour le TP (téléchargement <a href='infra_prod/TP7-Analysedetweets2.pdf' target='_blank'>ICI</a>), une image Docker contenant toutes les installations nécessaires ainsi que les données est mise à la disposition des étudiants : <a href='https://registry.hub.docker.com/u/nicolasdugue/infraprod2/' target='_blank'>https://registry.hub.docker.com/u/nicolasdugue/infraprod2/</a>
						Les étudiants peuvent poursuivre l'élaboration des requêtes ElasticSearch et du Dashboard Kibana. En parallèle, ils débutent l'utilisation de MapReduce via le shell MongoDB. Des fonctionnalités plus avancées de MongoDB et d'ElasticSearch (Analyzer, Mapping) sont également mises en avant pour réaliser une analyse naïve de la polarité des tweets.
<br /><br />Une correction des requêtes MongoDB est proposée en téléchargement ici : <a href='infra_prod/IDP-TP7-Correction-291114-1811-92.pdf' target='_blank'>CORRECTION</a>
					</p>
				</div>
			</div>
				<div class="post">
					<h2 class="title">Mapreduce/Spark</h2>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
					<p>
						Le dernier cours (téléchargement <a href='infra_prod/Spark_graphes.pdf' target='_blank'>ICI</a>) est centré sur l'utilisation du Shell Spark Scala pour requêter en MapReduce des structures de type graphe. Quelques algorithmes comme la détection de composantes connexes et le Pagerank sont présentés
						<ul>
							<li> <strong>Spark</strong> : MapReduce distribué ou In-memory - Shell Scala ou Python
						</ul>
						Durant le TP (téléchargement <a href='infra_prod/TP8-Spark.pdf' target='_blank'>ICI</a>), les étudiants se familiarisent d'abord avec l'implémentation de MapReduce proposé par Spark qui est plus riche que celle de MongoDB. Pour cela, ils manipulent la base de données de tweets utilisée aux précédents TPs. Par la suite, les algorithmes présentés en cours sont implémentés en Mapreduce : recommandation (amis communs), pagerank, composantes connexes.
<br /><br />Une correction des algorithmes Spark est en téléchargement ici : <a href='infra_prod/IDP-TP8-Correction-291114-1227-90.pdf' target='_blank'>CORRECTION</a> ainsi que les jeux de données utilisés pour Spark : <a href='infra_prod/data/graphes_spark.zip' target='_blank'>DATASET</a>
					</p>
				</div>
			</div>
