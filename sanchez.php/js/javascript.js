const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")

navToggle.addEventListener("click" , () => {
    navMenu.classList.toggle("nav-menu_visible");

if (navMenu.classList.contains ("nav-menu_visible")) {
    navToggle.setAttribute("aria-label", "Cerrar menú");
} else {
    navToggle.setAttribute("aral-label", "Abrir menú");
}
});

function validarFormulario() {
    const nombre = document.getElementById('nombre').value;
    const correo = document.getElementById('apellido').value;

if (nombre.trim() === '') {
      document.getElementById('nombre').style.borderColor = 'red';
    } else {
      document.getElementById('nombre').style.borderColor = 'initial';
    }
    const correoValido = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
    if (!correoValido.test(correo)) {
      document.getElementById('apellido').style.borderColor = 'red';
    } else {
      document.getElementById('apellido').style.borderColor = 'initial';
    }
}
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  
function myFunction1() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 
