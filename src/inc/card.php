<?php
$checked = $active ? "checked" : "";
if (isset($_POST['title-' . $id])) {
    $newTitle = htmlspecialchars($_POST['title-' . $id]);
}
?>

<div class="item-card">
    <div class="top">
        <div class="name">
            <h4>Item <?= $id ?: '-' ?></h4>
        </div>
        <div class="subtitle">Boite de gestion</div>
    </div>
    <form method="post" class="middle">
        <div class="title">Titre de l'element <?= $id ?: '-' ?></div>
        <input type="text" name="title-<?= $id ?>" value="<?= $nom ?>" id="" />
    </form>
    <div class=" bottom">
        <div class="display">Afficher l'élement <?= $id ?: '-' ?></div>
        <form method="POST" action="update_card.php?id=<?= $id ?>" class='toggle-switch'>
            <label class="switch">
                <input <?= $checked ?> name="check-<?= $id ?>" type='checkbox' onclick="this.form.submit()">
                <div class="color"></div>
                <span class='slider'></span>
            </label>
        </form>
    </div>
</div>