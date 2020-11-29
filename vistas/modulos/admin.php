    <?php
    if ($_SESSION["rol"] != "admin") {
        echo '<script>
        window.location="salir";
        </script>';
    }
    ?>
    <h1>Hola mundo</h1>