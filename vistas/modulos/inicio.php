    <div class="slideshow-container">

        <div class="mySlides ">
            <div class="numbertext">1 / 3</div>
            <img src="vistas/img/plantilla/buds.jpg" style="width:100%">
        </div>

        <div class="mySlides ">
            <div class="numbertext">2 / 3</div>
            <img src="vistas/img/plantilla/tele.jpg" style="width:100%">
        </div>

        <div class="mySlides ">
            <div class="numbertext">3 / 3</div>
            <img src="vistas/img/plantilla/mi-10t.png" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <main class="section">

        <?php
        echo '<div>';
        include "categorias.php";
        include "mas-vendidos.php";
        echo '</div>';
        ?>
    </main>

    <script>

    </script>