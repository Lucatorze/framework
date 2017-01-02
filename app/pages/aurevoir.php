<?php
$name = $request->get('name', 'inconnu');
$sname = htmlspecialchars($name)
?>

<?php printf('Au revoir %s', $sname); ?>
