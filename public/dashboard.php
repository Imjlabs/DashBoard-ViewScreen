<?php
require '../src/bootstrap.php';
view('head', ['title' => 'Dashboard']);
view('layout_dashboard');

$items = db()->prepare('SELECT id, nom, active FROM widgets');
$items->execute();
$items = $items->fetchAll();
?>
<div class="header">
    <h3>
        <span>P</span>anneau de contrôle
    </h3>
</div>
<div class="wrapper">
    <?php
    foreach ($items as $value) {
        view('card', ['id' => $value['id'], "active" => $value['active'], 'nom' => $value['nom']]);
    }
    view('add_item');
    ?>
</div>