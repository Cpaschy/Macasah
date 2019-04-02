<!DOCTYPE html>
    <div class="container-fluid">
    <?php include("header.php"); ?>

	<section>
        <?php include("menu.php"); ?>
	</section>
    <div class="col-sm-12">
    <div id="corps">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slider/1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Bienvenue sur le site de l'hotel Résidence MACASAH</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider/2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider/3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider/4.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script>
            $('.carousel').carousel({
                interval: 3000
            })
        </script>
    </div>
    </div>

    <!-- Le pied de page -->

    <?php include("footer.php"); ?>
</div>
