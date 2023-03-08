let nav = document.querySelector("#navbar");
window.addEventListener("scroll", () => {
    let scroll = window.pageYOffset;
    console.log(scroll);
    if (scroll > 200) {
        nav.classList.remove("bg-transparant");
        nav.classList.add("bg-nav");
        nav.classList.add("shadow-sm");
    } else {
        nav.classList.add("bg-transparant");
        nav.classList.remove("bg-nav");
        nav.classList.remove("shadow-sm");
    }
});
