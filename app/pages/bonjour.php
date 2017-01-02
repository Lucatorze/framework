<?php
$name = $request->get('name', 'inconnu');
$sname = htmlspecialchars($name);
?>

<?php printf('Bonjour %s', $sname); ?>
<br><a href="aurevoir?name=<?php echo $sname ?>">Quitter</a>