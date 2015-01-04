<?php include("header.php"); ?>
<h4>Ensemble des pièces</h4>

<div class="center" >
	<object type='application/x-3dxmlplugin' id='3DXMLPluginId' width="600" height="400">
		<param name='DocumentFile' value='files/ASSEMBLAGE/assemblage.3dxml'>
	</object>
</div>
<p>
	Ici vous pouvez télécharger l’ensemble de nos pièces séparément, dans son fichier d’origine, au format neutre et en format léger (3dXML).

<?php
	function myscandir($f) {
		return array_diff(scandir($f), array('..', '.'));
	}

	$pieces = myscandir("files");
	foreach ($pieces as $piece) {
		$files = myscandir("files/".$piece);

		echo '<br />- '.$piece.' : ';
		$first = true;

		foreach ($files as $file) {
			if($first) $first = false; else echo ', ';
			echo '<a href="files/'.$piece.'/'.$file.'" >'.(explode('.', $file)[1]).'</a>';
		}
	}
?>
</p>
<?php include("footer.php"); ?>
