// const links = document.querySelectorAll('.link-');
// let old = 0;
// links[0].classList.add('active');
// for (let index = 0; index < links.length; index++) {
//     links[index].addEventListener('click', function () {
//         links[index].classList.add('active');
//         links[old].classList.remove('active');
//         old = index;
//     })
// };
const header = document.querySelector(".header-.container-");
document.addEventListener("scroll", () => {
    var scroll_pos = window.scrollY;
    if (scroll_pos > 250) {
        header.style.backgroundColor = "black";
    } else {
        header.style.backgroundColor = "transparent";
    }
});