<?php require './Layout/header.php' ?>

<h1>Titolo</h1>


<div class="row row-cols-2">

    <?php
    foreach($movies as $movie) {
        // var_dump($movie);
        ?>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="<?= $movie->poster ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="movie-title"><?= $movie->title ?></h5>
                    <h6 class="movie-director text-info "><?= $movie->director->getFullName() ?></h6>
                    <ul class="movie-genres">
                        <?php 
                        foreach($movie->genres as $genre) {
                            echo "<li>$genre</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

    


</div>

<?php require './Layout/footer.php' ?>