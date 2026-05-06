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
                        <p>
                        I am determined and enjoy learning and challenging myself. Through a Movement to Work placement
                        with the Department for Work and Pensions, I gained valuable real workplace experience.
                        </p>
                    </div>

                    <div class="col-md-6 text-center">
                        <img id="personal-profile" src="images/graduation-picture.jpg" class="img-thumbnail rounded shadow" alt="My graduation picture">
                    </div>
                </div>

                <div class="row align-items-center mb-5" id="treehouse-desc">
                    <div class="col-md-6">
                        <h3>Treehouse</h3>
                        <p>
                        Treehouse is an online learning platform covering HTML, C#, iOS development,
                        data analysis and more. Users earn points to track learning progress.
                        </p>
                        <p><strong>Total Score: 2472</strong></p>
                        <a href="https://teamtreehouse.com/profiles/kieranmoody2" class="btn btn-primary btn-hover" target="_blank">
                        View Profile
                        </a>
                    </div>

                    <div class="col-md-6 text-center">
                        <img src="images/treehouse-score.png" class="img-fluid rounded shadow">
                    </div>
                </div>

                <div class="mb-5 text-center">
                    <h3>Introduction to the Scion Coalition Scheme</h3>
                    <p>
                        The Scion Coalition Scheme is an intensive training programme run by Netmatters
                        to prepare candidates for web development careers. Under senior developers,
                        training typically lasts 6–9 months and covers a wide technical skill set.
                    </p>
                </div>

                

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3>About Netmatters</h3>
                        <ul>
                            <li>Established 2008</li>
                            <li>Technology company</li>
                            <li>Training award winners</li>
                            <li>Digital marketing & software development</li>
                        </ul>
                    </div>

                    <div class="col-md-6 text-center">
                        <a href="https://www.netmatters.co.uk/" target="_blank">
                            <img src="images/netmatters-logo.jpg" class="img-fluid rounded shadow btn-hover">
                        </a>
                    </div>
                </div>

            </div>
        </main>
        <?php require("partials/footer.php") ?>
        <?php require("partials/js.php") ?>
    </body>
</html>