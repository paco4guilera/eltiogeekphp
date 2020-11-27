    <div>
        <div class="container-all">
            <input type="radio" id="1" name="image-slide" hidden />
            <input type="radio" id="2" name="image-slide" hidden />
            <input type="radio" id="3" name="image-slide" hidden />

            <div class="slide">
                <div class="item-slide">
                    <img src="vistas/img/plantilla/buds.jpg" />
                </div>

                <div class="item-slide">
                    <img src="vistas/img/plantilla/mi-10t.png" />
                </div>

                <div class="item-slide">
                    <img src="vistas/img/plantilla/tele.jpg" />
                </div>
            </div>

            <div class="pagination">
                <label class="pagination-item" for="1">
                    <img src="vistas/img/plantilla/buds.jpg" />
                </label>

                <label class="pagination-item" for="2">
                    <img src="vistas/img/plantilla/mi-10t.png" />
                </label>

                <label class="pagination-item" for="3">
                    <img src="vistas/img/plantilla/tele.jpg" />
                </label>
            </div>
        </div>
    </div>
    <main class="section">

        <?php
        echo '<div>';
        include "categorias.php";
        include "mas-vendidos.php";
        echo '</div>';
        ?>
    </main>