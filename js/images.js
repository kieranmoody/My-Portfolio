//Says that javascript is active and gives my webpage a js-enabled class, so I can make css changes accordingly
document.documentElement.classList.remove('no-js');
document.documentElement.classList.add("js-enabled");


/* Tags for my animated title - unfinished

let oldTag = localStorage.getItem("currentTag");
let newTag;

const path = window.location.pathname;

if (path.endsWith("index.html")) {
    newTag = "main";
} else if (path.endsWith("about.html")) {
    newTag = "about";
} else if (path.endsWith("examples.html")) {
    newTag = "examples";
} else if (path.endsWith("portfolio.html")) {
    newTag = "portfolio";
} else if (path.endsWith("scs-scheme.html")) {
    newTag = "scs-scheme";
}

// Save for next page load
if (newTag) {
    localStorage.setItem("currentTag", newTag);
}

console.log("Old tag:", oldTag);
console.log("New tag:", newTag);
*/

//Animated title basic
new TypeIt(".title-animate", {
    speed: 75,
    loop: false,
}).go();



//hamburger gets clicked
var $hamburger = $(".hamburger");
var $pulldown = $(".pull-out-menu");
var $title = $(".website-head");
var $fullPage = $(".header-positioning");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    //when hamburger clicked
    if ($pulldown.css("display") === "none") {
    $pulldown.css("display", "block");
    $title.css("display", "none");
    $fullPage.css("display", "block");
  } else {
    $pulldown.css("display", "none");
    $title.css("display", "block");
    $fullPage.css("display", "grid");
  }
  });


//Sticky Header - html slight rework needed 


//Image/div zooming

$(function () {
    $('.zoomable').on('click', function () {
        $.jAlert({
            type: 'html',
            size: 'xl', // largest built-in modal
            content: `
                <img 
                    src="${this.src}" 
                    style="
                        max-width: 100%;
                        max-height: 85vh;
                        width: auto;
                        height: auto;
                        display: block;
                        margin: 0 auto;
                    "
                >
            `,
            closeOnClick: true,
            showClose: false,
        });
    });

    $('.zoomable-box').on('click', function () {
        $.jAlert({
            type: 'html',
            content: `
            <div style="display:flex; justify-content:center; align-items:center; padding: 10px; max-height: 85vh; overflow: auto;">
                ${$(this).clone().prop('outerHTML')}
            </div>
        `,
            size: 'lg',
            closeOnClick: true,
            showClose: false,
        });
    });

    $('.zoom-box a, .zoom-box button').on('click', function (e) {
    e.stopPropagation();
});
});




//Carousel
$(document).ready(function () {
    $('.your-class').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        //Makes the carousel responsive to different widths
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 2000, 
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });
});

//contact form verification

    //If the user has interacted with the form, do they really want to refresh?
let formInteraction = false;
const form = document.getElementById("foot-buttons");

form.querySelectorAll("input, textarea").forEach(field => {
    field.addEventListener("input", () => {
        formInteraction = true;
    });
});

window.addEventListener("beforeunload", (event) => {
    if (!formInteraction) return;

    event.preventDefault();
});


    //Verifying the email
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

function validateForm() {
    const firstnameInput = document.getElementById("first-name");
    const lastnameInput = document.getElementById("last-name");
    const emailInput = document.getElementById("email-address");
    const messageInput = document.getElementById("message");

    const firstName = firstnameInput.value.trim();
    const lastName = lastnameInput.value.trim();
    const email = emailInput.value.trim();
    const message = messageInput.value.trim();

    //Checks to see if all the necessary forms are filled
    if (firstName === "" || lastName === "" || email=== "" || message === "" ) {
        alert("Please make sure you have filled all the required fields.")
        return false; // stop submit, do NOT clear form
    }

    // Check email against regex
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        emailInput.focus();
        return false; // stop submit, do NOT clear form
    }

    // If valid, clear the form (would be where the message is sent off)
    document.getElementById("foot-buttons").reset();
    formInteraction = false;
    return false; // prevent page refresh
}



