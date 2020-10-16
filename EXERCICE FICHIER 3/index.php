<?php
include 'inc/init.inc.php'; // appel du fichier init.inc.php

// debut des affichages :
include 'inc/header.inc.php'; // appel du haut de site
include 'inc/nav.inc.php'; // appel de la nav
?>
			<div class="container">
				<?php echo $contenu; ?>
			</div>
		</section>

<?php include 'inc/footer.inc.php'; ?>