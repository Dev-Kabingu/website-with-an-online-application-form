// const admission = document.getElementById("admission");
// admission.addEventListener('click', function(){
//     window.location.href = "admission-form.html";
// });

const buttonsAdmin = document.querySelectorAll(".button-admin");
buttonsAdmin.forEach(button => {
    button.addEventListener('click', function(){
        window.location.href = "admission-form.php";
    })

});

const readMoreBtn = document.getElementById("btn--3");
readMoreBtn.addEventListener("click", function(){
    window.location.href = "about.php";
});

const aboutBtn = document.getElementById("about-btn");
aboutBtn.addEventListener("click", function(){
    window.location.href = "about.php";
});