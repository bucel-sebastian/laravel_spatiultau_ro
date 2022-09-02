console.log("merge");

let menuBtn = document.getElementById("menu-burger");
menuBtn.addEventListener("click", e=>{
    console.log("menu btn apasat");
    if(menuBtn.classList.contains("menu-closed")){
        menuBtn.classList.remove("menu-closed");
        menuBtn.classList.add("menu-opened");
    }
    else{
        menuBtn.classList.add("menu-closed");
        menuBtn.classList.remove("menu-opened");
    }
})

