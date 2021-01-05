<!--     <div>
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
    </div> -->
<!-- 
        /*=============================================
        Slider javascript                             
        =============================================*/  
    -->
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