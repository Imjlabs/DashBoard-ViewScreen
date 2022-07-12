<?php
if (isset($_GET['id'])) {
    require_once '../src/bootstrap.php';

    $id = $_GET['id'];
    if (isset($_POST['check-' . $id])) {
        $up = 1;
    } else {
        $up = 0;
    }
    try {
        $sql = "UPDATE widgets SET active = $up WHERE id = $id";
        $update_active = db()->prepare($sql);
        $update_active->execute();
        header('location: dashboard.php');
    } catch (\Throwable $th) {
?>
        <script>
            alert('Impossible de modifier cette information');
        </script>
<?php
        header('location: dashboard.php');
        throw $th;
    }
} else {
    header('location: dashboard.php');
}
?>