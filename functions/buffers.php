<?php

ob_start();

phpinfo(INFO_GENERAL);
$i = ob_get_contents();

ob_end_clean();

?>

<div id="my">
	<?= $i ?>
</div>
