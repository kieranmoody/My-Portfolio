<!DOCTYPE html>
<html lang="en">
    <?php require("partials/head.php") ?>
    <body id="example-zoomlink">
        <?php require("partials/navigation.php") ?>
        <section class="bg-dark text-white text-center py-5 position-relative">
                <img src="images/title-background.jpg" class="position-absolute w-100 h-100 top-0 start-0 object-fit-cover opacity-50 title-image">

                <div class="container position-relative">
                    <h1 class="display-4 text-white title-animate">Coding Examples</h1>
                    <p class="lead text-white mb-5">Selected work and problem solving</p>
                    <a href="#examples" class="btn btn-outline-secondary btn-hover">Scroll Down 
                        <br>
                        <span class="icon-keyboard_arrow_down"></span>
                    </a>
                </div>
        </section>
        
        <main class="py-5" id="examples">
            <div class="container">
                <!--Highlight One-->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="card-title text-center" id="highlight-one-code">Highlight One - Netmatters Website Copy</h3>

                        <div class="code-stack zoomable-box my-4">
                            <img src="images/coding-examples/highlight-code-one-html.png" class="code-file file-back">
                            <img src="images/coding-examples/highlight-code-two-scss.png" class="code-file file-front">
                        </div>

                        <p class="card-text">
                            This project used HTML and SCSS. I discovered the services section behaved in two layout groups at different widths.
                            My solution was splitting them into separate grids so each could respond independently — a different solution from the original site, but functionally effective.
                        </p>
                    </div>
                </div>

                <!--Highlight Two-->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="card-title text-center" id="highlight-two-code">Highlight Two - Javascript Array Gallery</h3>

                        <div class="code-stack zoomable-box my-4">
                            <img src="images/coding-examples/highlight-two-gallery-positioning.png" class="code-file file-back">
                            <img src="images/coding-examples/highlight-code-two-page-transition.png" class="code-file file-front">
                        </div>

                        <p class="card-text">
                            This project uses; html, scss, and javascript. It was my first real project making use of javascript and jquery outside of using plugins, as well as my first time even touching apis. I think, even though I was learning as I was going, this project is the best indicator of my creativity. 
                            <br>
                            Design wise, I am particularly proud of the folder-like aesthetic on the gallery. It makes use of jAlert's zoom plugin to allow me to position the images in a compact way, stacked ontop of one another, and allowing the user to click on the stack to expand it onto their page. This solved the problem of how ugly the site would look if 1 email had, say, 9 or 10 images attached.
                        </p>
                    </div>
                </div>
                
                <!--Highlight Three-->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="card-title text-center" id="highlight-three-code">Highlight Three - Admin Panel</h3>

                        <div class="code-stack zoomable-box my-4">
                            <img src="images/coding-examples/highlight-two-gallery-positioning.png" class="code-file file-back">
                            <img src="images/coding-examples/highlight-code-two-page-transition.png" class="code-file file-front">
                        </div>

                        <p class="card-text">
                            This project uses; html, scss, and javascript. It was my first real project making use of javascript and jquery outside of using plugins, as well as my first time even touching apis. I think, even though I was learning as I was going, this project is the best indicator of my creativity. 
                            <br>
                            Design wise, I am particularly proud of the folder-like aesthetic on the gallery. It makes use of jAlert's zoom plugin to allow me to position the images in a compact way, stacked ontop of one another, and allowing the user to click on the stack to expand it onto their page. This solved the problem of how ugly the site would look if 1 email had, say, 9 or 10 images attached.
                        </p>
                    </div>
                </div>

            </div>
        </main>
        <?php require("partials/footer.php") ?>
        <?php require("partials/js.php") ?>
    </body>
</html>