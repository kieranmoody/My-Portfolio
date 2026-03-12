<!DOCTYPE html>
<html lang="en">
    <?php require("partials/head.php") ?>
    <body>
        <?php require("partials/navigation.php") ?>
        <section class="bg-dark text-white text-center py-5 position-relative">
                <img src="images/title-background.jpg" class="position-absolute w-100 h-100 top-0 start-0 object-fit-cover opacity-50 title-image">

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
        <main>
            <div class="container py-5" id="index"> <!--Controls the spacing between the header and the -->
                <section class="mb-5">
                    <h3 class="text-center mb-4">Highlights</h3>
                    <div class="row g-4">
                        <!-- Highlight 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">

                                <img src="images/highlight-one-netmatters.png" class="card-img-top" alt="An image of my copy of the netmatters website">
                                <div class="card-body d-flex flex-column">

                                    <p class="card-text">
                                        This is an image that shows the Netmatters website that I made, which is a copy of a version I was given. It is the first large-scale project I have completed and thus contains mistakes and flawed methodology. However I find it acts as a good indicator of my ability to learn and grow from my own mistakes.
                                    </p>

                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a href="https://netmatters.kieran-moody.netmatters-scs.co.uk" target="_blank" class="btn btn-primary btn-hover">
                                            View Here
                                        </a>
                                        <a href="examples.php#highlight-one-code" class="btn btn-secondary btn-hover"> 
                                            Read More
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Highlight 2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">

                                <img src="images/highlight-two-javaarray.png" class="card-img-top" alt="An image of my copy of the netmatters website">
                                <div class="card-body d-flex flex-column">

                                    <p class="card-text">
                                        This is an image that a random image generator that allows the user to generate images, attach them to an email, and then view the collection in a "gallery". This is the first project in which I worked on javascript to a large extent, without much aid from plugins. When compared to my previous works, it acts as a good indicator of both progress and creativity.
                                    </p>

                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a href="http://js-array.kieran-moody.netmatters-scs.co.uk/" target="_blank" class="btn btn-primary btn-hover">
                                            View Here
                                        </a>
                                        <a href="examples.php#highlight-two-code" class="btn btn-secondary btn-hover"> 
                                            Read More
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Highlight 3 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <img src="images/under-construction-temp-two.webp" class="card-img-top" alt="Under construction, no highlight to see">
                                <div class="card-body d-flex flex-column">
                                    <p class="card-text">
                                        No available highlights yet, coming soon!
                                    </p>
                                    <div class="mt-auto d-flex gap-2 highlight-buttons">
                                        <a class="btn btn-primary disabled btn-hover">
                                            View Here
                                        </a>
                                        <a class="btn btn-secondary disabled btn-hover">
                                            Read More
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <div class="card my-5 shadow-sm">
                    <img src="images/treehouse-score.png" class="card-img-top">
                    <div class="card-body text-center">
                        <p>I regularly use Treehouse to improve my skills and have amassed a score of 2,472.</p>
                        <a href="scs-scheme.php#treehouse-desc" class="btn btn-secondary btn-hover">Learn More</a>
                    </div>
                </div>

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
                    <form class="row g-3" id="foot-buttons" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#foot-buttons" onsubmit="return validateForm()" novalidate>
                        <div class="col-md-6">
                            <input type="text" class="form-control <?php echo $firstNameClass; ?>" id="first-name" name="first-name" placeholder="*First Name" value="<?php echo htmlspecialchars($firstName); ?>">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control <?php echo $lastNameClass; ?>" id="last-name" name="last-name" placeholder="*Last Name" value="<?php echo htmlspecialchars($lastName); ?>">
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
        </main>

        <?php if ($formSuccess): ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const form = document.getElementById("foot-buttons");
                    if (form) {
                        form.scrollIntoView({ behavior: "instant", block: "start" });
                    }
                    showFormStatus("Form submitted successfully!", true);
                });
            </script>
        <?php endif; ?>

        <?php require("partials/footer.php") ?>
        <?php require("partials/js.php") ?>
    </body>
</html>