<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include('includes/head.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<main class="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/shutterstock_1092598535-2048x682.jpg" class="d-block w-100" alt="image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/shutterstock_1092598535-2048x682.jpg" class="d-block w-100" alt="image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/shutterstock_1092598535-2048x682.jpg" class="d-block w-100" alt="image 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <section class="list_item mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="assets/images/home_inteco_interior_design_portfolio_2-300x276.jpg"
                             class="card-img-top"
                             alt="item 1">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="assets/images/home_inteco_interior_design_portfolio_2-300x276.jpg"
                             class="card-img-top"
                             alt="item 1">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="assets/images/home_inteco_interior_design_portfolio_2-300x276.jpg"
                             class="card-img-top"
                             alt="item 1">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('includes/footer.php'); ?>
</body>
</html>

