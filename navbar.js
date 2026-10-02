// Title        : navbar.js
// Author       : Ceryl Lake
// Date Created : 25/09/2025
// Purpose      : Navigation bar that is referenced by all other pages.

// Links to home, projects,cv, graphic design, contact

document.getElementById("navbarContent").innerHTML = navbar;

const navbar = `
        <div class="navbar-glow w3-top w3-bar w3-black">
            <a href="#home" class="w3-bar-item w3-button">Home</a>
            <a href="#CV" class="w3-bar-item w3-button">CV</a>
            <a href="#Projects" class="w3-bar-item w3-button">Projects</a>
            <a href=""class="w3-bar-item w3-button">Graphic Design</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact</a>
        </div>`;

document.querySelector("body").insertAdjacentHTML("afterbegin", header);

//add the active class to the anchor tag with the href === path
document.querySelector(`[href='${path}']`).classList.add('active');