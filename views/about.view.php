<!DOCTYPE html>
<html lang="en">
    <?php require("partials/head.php") ?>
    <body>
        <?php require("partials/navigation.php") ?>
        <section class="bg-dark text-white text-center py-5 position-relative">
                <img src="images/title-background.jpg" class="position-absolute w-100 h-100 top-0 start-0 object-fit-cover opacity-50 title-image">

                <div class="container position-relative">
                    <h1 class="display-4 text-white title-animate">More About Me</h1>
                    <p class="lead text-white mb-5">My background and experience</p>
                    <a href="#about" class="btn btn-outline-secondary btn-hover">Scroll Down 
                        <br>
                        <span class="icon-keyboard_arrow_down"></span>
                    </a>
                </div>
        </section>

        <main class="py-5" id="about">
            <div class="container">

                <div class="row align-items-center mb-5">
                    <div class="col-md-6">
                        <p>
                        I have a degree in Politics, Philosophy, and Economics and a Masters in Politics from the University of Essex (2019–2024).
                        I have also completed courses in administration, bookkeeping and accounting.
                        </p>
                    </div>

                    <div class="col-md-6 text-center">
                        <img id="personal-profile" src="images/graduation-picture.jpg" class="img-thumbnail rounded shadow" alt="My graduation picture">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p>
                        I am determined and enjoy learning and challenging myself. Through a Movement to Work placement
                        with the Department for Work and Pensions, I gained valuable real workplace experience.
                        </p>
                    </div>
                </div>

            </div>
        </main>
        <?php require("partials/footer.php") ?>
        <?php require("partials/js.php") ?>
    </body>
</html>