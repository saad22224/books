let myimg = document.querySelectorAll(".mainbook img");
let mypopp= document.querySelector("#popapupload");
let btnClose= document.querySelector("#close");
let notific = document.querySelector("#notific");
let bellIcon = document.querySelector("#bell-icon");
let notificperson = document.querySelector("#notific-person");
let personicon = document.querySelector("#person-icon");
bellIcon.addEventListener("click", function() {
    if (notific.classList.contains("d-flex")) {
        notific.classList.replace("d-flex", "d-none");
    } else {
        notific.classList.replace("d-none", "d-flex");
    }
});

personicon.addEventListener("click", function() {
    if (notificperson.classList.contains("d-flex")) {
        notificperson.classList.replace("d-flex", "d-none");
    } else {
        notificperson.classList.replace("d-none", "d-flex");
    }
});

for (let i = 0; i < myimg.length; i++) {
    myimg[i].addEventListener("click" , function(){
        mypopp.classList.replace("d-none" ,"d-flex")
    })
    
}

btnClose.addEventListener("click",function(){
    mypopp.classList.replace("d-flex" ,"d-none")
})

function changeFontSize(step) {
    let input = document.getElementById("fontSize");
    let size = parseInt(input.value) + step;
    if (size >= 8 && size <= 72) {
        input.value = size;
    }
}
