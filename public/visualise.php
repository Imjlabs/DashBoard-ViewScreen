<?php
require_once '../src/bootstrap.php';
view('head', ['title' => 'Visualisation 1']);
$items = db()->prepare('SELECT id, nom, active FROM widgets');
$items->execute();
$items = $items->fetchAll();

?>

<script>
    setInterval(refresh, 200);
    function refresh() {
        $('.visu').load('visualise.php');
    }
</script>

<div class="visu">
    <div class="wrapper_visu">
        <?php
        if ($items[0]['active']) {
        ?>
            <div class="top">
                <div class="element1">
                    <?= $items[0]['nom'] ?>
                </div>
            </div>
        <?php
        }
        ?>
        <?php
        if ($items[1]['active']) {
        ?>
            <div class="middle">
                <div class="element3">
                    <?= $items[1]['nom'] ?>
                </div>
            </div>
        <?php
        }
        ?>
        <?php
        if ($items[2]['active']) {
        ?>
            <div class="bottom">
                <div class="element2">
                    <span> <?= $items[2]['nom'] ?></span>
            </div>
        <?php
        }
        ?>
    </div>
</div>

