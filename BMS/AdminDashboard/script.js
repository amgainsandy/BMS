const  sideMenu = document.querySelector('aside');
const menuBtn = document.querySelector('#menu_bar');
const closeBtn = document.querySelector('#close_btn');


const themeToggler = document.querySelector('.theme-toggler');



menuBtn.addEventListener('click',()=>{
       sideMenu.style.display = "block"
})
closeBtn.addEventListener('click',()=>{
    sideMenu.style.display = "none"
})

themeToggler.addEventListener('click',()=>{
     document.body.classList.toggle('dark-theme-variables')
     themeToggler.querySelector('span:nth-child(1').classList.toggle('active')
     themeToggler.querySelector('span:nth-child(2').classList.toggle('active')
})
// document.addEventListener("DOMContentLoaded", function() {
//     const categoryDropdown = document.querySelector(".category-dropdown");
//     const categorySubmenu = document.querySelector(".category-submenu");

//     // Function to toggle submenu visibility
//     function toggleSubmenu() {
//         categorySubmenu.classList.toggle("show");
//     }

//     // Event listener for clicking on the "Category" link
//     categoryDropdown.addEventListener("click", function(event) {
//         event.preventDefault(); // Prevent default link behavior
//         toggleSubmenu(); // Toggle submenu visibility
//     });

//     // Close submenu when clicking outside of it
//     document.addEventListener("click", function(event) {
//         if (!categoryDropdown.contains(event.target)) {
//             categorySubmenu.classList.remove("show");
//         }
//     });
// });


//dropdown
var drop_btn = document.querySelector('#drop_menu');
var drop_item = document.querySelector('#sub_menu');

drop_btn.addEventListener('click', function(){
    alert('clicked')
})