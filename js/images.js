//Says that javascript is active and gives my webpage a js-enabled class, so I can make css changes accordingly
document.documentElement.classList.remove('no-js');
document.documentElement.classList.add("js-enabled");

//Mouse Pan Zoomable

let isDragging = false;
let startX, startY, startScrollLeft, startScrollTop;
let activeContainer = null;

document.addEventListener("mousedown", function(e) {

    const container = e.target.closest(".ja_body");
    if (!container) return;

    isDragging = true;
    activeContainer = container;

    startX = e.clientX;
    startY = e.clientY;
    startScrollLeft = container.scrollLeft;
    startScrollTop = container.scrollTop;

    container.style.cursor = "grabbing";
    e.preventDefault();
});

document.addEventListener("mousemove", function(e) {
    if (!isDragging || !activeContainer) return;

    const dx = e.clientX - startX;
    const dy = e.clientY - startY;

    activeContainer.scrollLeft = startScrollLeft - dx;
    activeContainer.scrollTop  = startScrollTop - dy;
});

document.addEventListener("mouseup", function() {
    if (!activeContainer) return;

    isDragging = false;
    activeContainer.style.cursor = "grab";
    activeContainer = null;
});


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

//Save for next page load
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

document.addEventListener("DOMContentLoaded", function () {
    //Select all navbar togglers and their target menus
    const navTogglers = document.querySelectorAll('.navbar-toggler');

    navTogglers.forEach(toggler => {
        const targetSelector = toggler.getAttribute('data-bs-target');
        const menu = document.querySelector(targetSelector);
        const bsCollapse = new bootstrap.Collapse(menu, { toggle: false });

        //Hide toggler when menu opens
        menu.addEventListener('show.bs.collapse', () => {
            toggler.style.display = 'none';
        });

        //Show toggler when menu closes
        menu.addEventListener('hide.bs.collapse', () => {
            toggler.style.display = '';
        });

        //Close menu if clicking outside
        document.addEventListener('click', function (e) {
            if (!menu.contains(e.target) && !toggler.contains(e.target)) {
                bsCollapse.hide();
            }
        });
    });
});

//Sticky Header - html slight rework needed 


//Image/div zooming

$(function () {
    $('.zoomable').on('click', function () {
        $.jAlert({
            type: 'html',
            size: 'xl', //largest built-in modal
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
            <div class="zoom-viewport; style="display:flex; justify-content:center; align-items:center; padding: 10px; max-height: 85vh; overflow: hidden;">
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

let formDirty = false;
const form = document.getElementById("foot-buttons");
const emailInput = document.getElementById("email-address");

    //If the user has interacted with the form, do they really want to refresh?
document.addEventListener("DOMContentLoaded", () => {
    
    //If the user has content in the form, do they really want to refresh?
    window.addEventListener("beforeunload", (event) => {
        if (!formDirty) return;
        event.preventDefault();
    });

    //The user has typed something = dirty form
    form.addEventListener("input", () => {
    const hasData = [...form.elements].some(el =>
        el.tagName === "INPUT" || el.tagName === "TEXTAREA" ? el.value.trim() !== "" : false
    );
    formDirty = hasData;
});

});

    //Verifying the email
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

function markInvalid(input, message) {
    const errorBox = input.nextElementSibling;

    input.classList.add("input-invalid");
    input.classList.remove("input-valid");

    if (errorBox) {
        errorBox.textContent = message;
        errorBox.classList.add("show");
    }
}

function markValid(input) {
    const errorBox = input.nextElementSibling;

    input.classList.remove("input-invalid");
    input.classList.add("input-valid");

    if (errorBox) {
        errorBox.textContent = "";
        errorBox.classList.remove("show");
    }
}



function validateForm() {
    let valid = true;
    let emailInvalid = false;
    let missingFields = false;

    const firstnameInput = document.getElementById("first-name");
    const lastnameInput = document.getElementById("last-name");
    const emailInput = document.getElementById("email-address");
    const messageInput = document.getElementById("message");

    //FIRST NAME
    if (firstnameInput.value.trim() === "") {
        markInvalid(firstnameInput, "First name is required");
        valid = false;
        missingFields = true;
    } else {
        markValid(firstnameInput);
    }

    //LAST NAME
    if (lastnameInput.value.trim() === "") {
        markInvalid(lastnameInput, "Last name is required");
        valid = false;
        missingFields = true;
    } else {
        markValid(lastnameInput);
    }

    //EMAIL
    if (emailInput.value.trim() === "") {
        markInvalid(emailInput, "Email is required");
        valid = false;
        missingFields = true;
    }
    else if (!emailRegex.test(emailInput.value.trim())) {
        markInvalid(emailInput, "Enter a valid email address");
        valid = false;
        emailInvalid = true;
    } else {
        markValid(emailInput);
    }

    //MESSAGE
    if (messageInput.value.trim() === "") {
        markInvalid(messageInput, "Message cannot be empty");
        valid = false;
        missingFields = true;
    } else {
        markValid(messageInput);
    }

    //RESULT LOGIC
    if (!valid) {

        if (emailInvalid) {
            showFormStatus("Your email address format is invalid.", false);
        } else if (missingFields) {
            showFormStatus("Please fill in all required fields.", false);
        }

        return false;
    }

    showFormStatus("Form Completed Successfully!", true);
    form.reset();
    formDirty = false;
    return false;
}


function showFormStatus(message, success = false) {
    const formStatus = document.getElementById("form-status");

    formStatus.textContent = message;

    //remove old state
    formStatus.classList.remove("show", "alert-success", "alert-danger");

    //restart animation
    void formStatus.offsetHeight;

    formStatus.classList.add("show");

    if (success) {
        formStatus.classList.add("alert-success");
    } else {
        formStatus.classList.add("alert-danger");
    }

    clearTimeout(formStatus._timeout);
    formStatus._timeout = setTimeout(() => {
        formStatus.classList.remove("show");
    }, 3500);
}


