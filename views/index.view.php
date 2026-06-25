<!DOCTYPE html>
<html id="html" lang="en">
    <?php require("partials/head.php") ?>
    <body>
        <?php require("partials/navigation.php") ?>
        <section class="bg-dark text-white text-center py-5 position-relative main-page title">

                <div class="container position-relative">
                    <h1 class="display-4 text-white title-animate">My Name is Kieran Moody</h1>
                    <p class="lead text-white mb-5">I am a Web Developer</p>
                    <a href="#index" class="btn btn-outline-secondary btn-hover">
                        Scroll Down 
                        <br>
                        <span class="icon-keyboard_arrow_down"></span>
                    </a>
                </div>
        </section>
        <main class="main-page">
            <div class="container py-5" id="index"> <!--Controls the spacing between the header and the -->
                <section class="mb-5">
                    <h3 class="text-center">Projects</h3>
                    <div class="row g-4 mt-4 projects-carousel">
                        <!-- Highlight Portfolio -->
                        <div class="col-md-6 col-lg-4 home-card carousel-disabled">
                            <div class="card h-100 shadow-sm">
                                <div class="image-holder">
                                    <img src="images/highlight-portfolio.png" class="card-img-top" alt="An image of my portfolio">
                                    <h4>Kieran's Portfolio</h4>
                                    <div class="tech-stack">
                                        <p>HTML</p>
                                        <p>PHP</p>
                                        <p>CSS</p>
                                        <p>JavaScript</p>
                                    </div>
                                    <div class="tech-stack">
                                        <p>SASS</p>
                                        <p>jQuery</p>
                                        <p>Bootstrap</p>
                                        <p>Slick</p>
                                        <p>jAlert</P>
                                    </div>
                                    
                                </div>
                                <div class="card-body d-flex flex-column projects-mainpage">
                                    <p class="card-text">
                                        My portfolio contains both my projects, my general qualifications, and methods of contacting me. For consistencies sake I have used bootstrap to design the layout of all pages, and I used plugins and positioning css to make it easy to get the information you need.
                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a href="https://kieran-moody.netmatters-scs.co.uk/" target="_blank" class="btn btn-primary btn-hover">
                                            View Here
                                        </a>
                                        <a href="https://github.com/kieranmoody/My-Portfolio" target="_blank" class="btn btn-secondary btn-hover">
                                            Github
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Highlight 1 -->
                        <div class="col-md-6 col-lg-4 home-card carousel-disabled">
                            <div class="card h-100 shadow-sm">
                                <div class="image-holder">
                                    <img src="images/highlight-one-netmatters.png" class="card-img-top" alt="An image of my copy of the netmatters website">
                                    <h4>Fake Netmatters Site</h4>
                                    <div class="tech-stack">
                                        <p>HTML</p>
                                        <p>PHP</p>
                                        <p>CSS</p>
                                        <p>JavaScript</p>
                                    </div>
                                    <div class="tech-stack">
                                        <p>SASS</p>
                                        <p>jQuery</p>
                                        <p>Slick</p>
                                    </div>
                                    
                                </div>
                                
                                <div class="card-body d-flex flex-column projects-mainpage">

                                    <p class="card-text">
                                        This is an image that shows the Netmatters website that I made, which is a copy of a version I was given. It is the first large-scale project I have completed and thus contains mistakes and flawed methodology. However I find it acts as a good indicator of my ability to learn and grow from my own mistakes.
                                    </p>

                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a href="https://netmatters.kieran-moody.netmatters-scs.co.uk" target="_blank" class="btn btn-primary btn-hover">
                                            View Here
                                        </a>
                                        <a href="https://github.com/kieranmoody/Netmatters-Website-Copy" target="_blank" class="btn btn-secondary btn-hover"> 
                                            Github
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Highlight 2 -->
                        <div class="col-md-6 col-lg-4 home-card carousel-disabled">
                            <div class="card h-100 shadow-sm">
                                <div class="image-holder">
                                    <img src="images/highlight-two-javaarray.png" class="card-img-top" alt="An image of my random image generator">
                                    <h4>Image Gallery</h4>
                                    <div class="tech-stack">
                                        <p>HTML</p>
                                        <p>CSS</p>
                                        <p>JavaScript</p>
                                    </div>
                                    <div class="tech-stack">
                                        <p>SASS</p>
                                        <p>jQuery</p>
                                        <p>jAlert</p>
                                    </div>
                                    
                                </div>
                                
                                <div class="card-body d-flex flex-column projects-mainpage">

                                    <p class="card-text">
                                        This is an image that a random image generator that allows the user to generate images, attach them to an email, and then view the collection in a "gallery". This is the first project in which I worked on javascript to a large extent, without much aid from plugins. When compared to my previous works, it acts as a good indicator of both progress and creativity.
                                    </p>

                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a href="http://js-array.kieran-moody.netmatters-scs.co.uk/" target="_blank" class="btn btn-primary btn-hover">
                                            View Here
                                        </a>
                                        <a href="https://github.com/kieranmoody/Javascript-Array-Assessment" target="_blank" class="btn btn-secondary btn-hover"> 
                                            Github
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Highlight 3 -->
                        <div class="col-md-6 col-lg-4 home-card carousel-disabled">
                            <div class="card h-100 shadow-sm">

                                <div class="image-holder">
                                    <img src="images/highlight-three-admin-panel.png" class="card-img-top" alt="An image of the front page of an admin panel, made with laravel">
                                    <h4>Admin Panel</h4>
                                    <div class="tech-stack">
                                        <p>HTML</p>
                                        <p>PHP</p>
                                        <p>CSS</p>
                                        <p>JavaScript</p>
                                    </div>
                                    <div class="tech-stack">
                                        <p>Laravel</p>
                                        <p>SASS</p>
                                        <p>Bootstrap</p>
                                    </div>
                                    
                                </div>
                                
                                <div class="card-body d-flex flex-column projects-mainpage">
                                    <p class="card-text">
                                        This is an admin panel which is capable of CRUD. It also uses validation methods during the creation and updating parts of the functionality. It makes use of laravel/ui for login functionality, with a seeded user given as admin@admin.com, password being password. It is my first attempt at working with laravel and specifically laravel herd, and consequently also my first attempt at managing a large quantity of files, and in uploading a laravel herd project to a cpanel server.
                                    </p>
                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a href="https://laravel.kieran-moody.netmatters-scs.co.uk/" target="_blank" class="btn btn-primary btn-hover">
                                            View Here
                                        </a>
                                        <a href="https://github.com/kieranmoody/laravel_admin_panel" target="_blank" class="btn btn-secondary btn-hover">
                                            Github
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Highlight 4 -->
                        <div class="col-md-6 col-lg-4 home-card carousel-disabled">
                            <div class="card h-100 shadow-sm">

                                <div class="image-holder">
                                    <img src="images/highlight-four-golden-chocolates.png" class="card-img-top" alt="An image of the front page of the Golden Chocolates site, made with wordpress">
                                    <h4>Golden Chocolates</h4>
                                    <div class="tech-stack">
                                        <p>HTML</p>
                                        <p>PHP</p>
                                        <p>CSS</p>
                                        <p>JavaScript</p>
                                    </div>
                                    <div class="tech-stack">
                                        <p>Wordpress</p>
                                    </div>
                                    
                                </div>
                                
                                <div class="card-body d-flex flex-column projects-mainpage">
                                    <p class="card-text">
                                        This is a site for a fictional company made with wordpress. It contains a for purpose theme, including a series of projects related pages. The pages are all designed with the Elementor plugin with a focus on making the design responsive where possible, it has a contact form via the Forminator plugin, and has SEO configuration using the Rank Math plugin. It has a focus on accessibility and performance, paying attention to the website's lighthouse score on all pages in mobile and desktop form.
                                    </p>
                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a href="https://laravel.kieran-moody.netmatters-scs.co.uk/" target="_blank" class="btn btn-primary btn-hover">
                                            View Here
                                        </a>
                                        <a href="https://github.com/kieranmoody/small-business-wordpress" target="_blank" class="btn btn-secondary btn-hover">
                                            Github
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Under Construction -->
                        <div class="col-md-6 col-lg-4 home-card carousel-disabled construction">
                            <div class="card h-100 shadow-sm">
                                <div class="image-holder">
                                    <img src="images/under-construction-temp-two.webp" class="card-img-top" alt="Under construction, no highlight to see">
                                    <h4>Under Construction</h4>
                                    <div class="tech-stack">
                                        <p>Languages Used</p>
                                    </div>
                                    <div class="tech-stack">
                                        <p>Tools Used</p>
                                    </div>
                                    
                                </div>
                                
                                <div class="card-body d-flex flex-column projects-mainpage">
                                    <p class="card-text">
                                        No available highlights yet, coming soon!
                                    </p>
                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a class="btn btn-primary disabled btn-hover">
                                            View Here
                                        </a>
                                        <a class="btn btn-secondary disabled btn-hover">
                                            Github
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <div id="site-foot"> <!--Positioning of the call-to-action-->
                    <div id="call-to-action"> <!--The Text portion of the call-->
                        <div>
                            <h5>
                                Get in Touch
                            </h5>
                        </div>
                        <div>
                            <p id="reference-form">Feel free to contact me using the in-site method below! Alternatively - </p>
                            <p>Reach out via my phone number and email address below. I look forward to hearing from you!</p>
                        </div>
                        <div id="my-details">
                            <p>07969 852266</p>
                            <a href="mailto:kieranmoody127@gmail.com">kieranmoody127@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form class="row g-3" id="foot-buttons" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#foot-buttons" onsubmit="return validateForm()" novalidate>
                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <input type="text" class="form-control <?php echo $firstNameClass; ?>" id="first-name" name="first-name" placeholder="*First Name" value="<?php echo htmlspecialchars($firstName); ?>">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="text" class="form-control <?php echo $lastNameClass; ?>" id="last-name" name="last-name" placeholder="*Last Name" value="<?php echo htmlspecialchars($lastName); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control <?php echo $emailClass; ?>" id="email-address" name="email-address" placeholder="*Email Address" value="<?php echo htmlspecialchars($email); ?>">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control <?php echo $subjectClass; ?>" id="subject" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars($subject); ?>">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control <?php echo $messageClass; ?>" id="message" name="message" rows="5" placeholder="*Message"><?php echo htmlspecialchars($message); ?></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 btn-hover" type="submit">Submit</button>
                            </div>
                            <div class="col-12 alert" id="form-status" role="alert">
                                <strong>Form Completed Successfully!</strong>
                            </div>
                            <?php
                                if ($formSuccess) {
                                    $firstName = "";
                                    $lastName = "";
                                    $email = "";
                                    $subject = "";
                                    $message = "";
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php if ($formSuccess): ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const form = document.getElementById("foot-buttons");

                    if (form) {
                        form.scrollIntoView({ behavior: "instant", block: "start" });
                    }

                    showFormStatus("Form submitted successfully!", true);

                    //Changes url so refresh doesn't repeat the success message
                    if (window.history.replaceState) {
                        const url = new URL(window.location);
                        url.searchParams.delete('success');
                        window.history.replaceState({}, document.title, url.pathname + "#foot-buttons");
                    }
                });
            </script>
        <?php endif; ?>

        <?php require("partials/footer.php") ?>
        <?php require("partials/js.php") ?>
    </body>
</html>