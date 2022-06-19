
// side bar menus
const menuIconButton = document.querySelector("[data-menu-icon-btn]");
const sidebar = document.querySelector("[data-sidebar]");
menuIconButton.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});

// login form
function show_hide_password(target) {
  var input = document.getElementById("password-input");
  if (input.getAttribute("type") == "password") {
    target.classList.add("view");
    input.setAttribute("type", "text");
  } else {
    target.classList.remove("view");
    input.setAttribute("type", "password");
  }
  return false;
}
// $(document).ready(function() {
//     if (window.location.hash) { 
//         //bind to scroll function
//         $(document).scroll( function() {
//             var hash = window.location.hash
//             var hashName = hash.substring(1, hash.length);
//             var element;

//             //if element has this id then scroll to it
//             if ($(hash).length != 0) {
//                 element = $(hash);
//             }
//             //catch cases of links that use anchor name
//             else if ($('a[name="' + hashName + '"]').length != 0)
//             {
//                 //just use the first one in case there are multiples
//                 element = $('a[name="' + hashName + '"]:first');
//             }

//             //if we have a target then go to it
//             if (element != undefined) {
//                 window.scrollTo(0, element.position().top);
//             }
//             //unbind the scroll event
//             $(document).unbind("scroll");
//         });
//     }

// });


function myFunction() {
  document.getElementById("form").reset();
}
function openForm() {
  var x = document.getElementById("openForm");
  if (x.style.display === "none") {
     x.style.display = "block";
   document.getElementById('openForm').style.display='block ';
  }
}

function closeForm() {
  var x = document.getElementById("openForm");
  if (x.style.display === "none") {
     x.style.display = "block";
   document.getElementById('openForm').style.display='none';
  }else {
   x.style.display = "none ";
   } 
}

// function changeTxt() {
//     var txt = document.getElementById("changetxt");
//     if (txt.innerHTML === "Search") {
//       txt.innerHTML = "Rrefresh";
//     } else {
//       txt.innerHTML = "Search";
//     }
// }

  function openDeleteForm() {
    var x = document.getElementById("openDeleteForm");
    if (x.style.display === "none") {
       x.style.display = "block";
     document.getElementById('openDeleteForm').style.display='block ';
    }
}
  
  function closeDeleteForm() {
    var x = document.getElementById("openDeleteForm");
    if (x.style.display === "none") {
       x.style.display = "block";
     document.getElementById('openDeleteForm').style.display='none';
    }else {
     x.style.display = "none ";
     } 
}


$(".faculty").click(function() {
  $('html,body').animate({
      scrollTop: $("#faculty").offset().top},
      'slow');
});

$(".registrar").click(function() {
  $('html,body').animate({
      scrollTop: $("#registrar").offset().top},
      'slow');
});

$(".casher").click(function() {
  $('html,body').animate({
      scrollTop: $("#casher").offset().top},
      'slow');
});

$(".osds").click(function() {
  $('html,body').animate({
      scrollTop: $("#osds").offset().top},
      'slow');
});

$(".clinic").click(function() {
  $('html,body').animate({
      scrollTop: $("#clinic").offset().top},
      'slow');
});

$(".library").click(function() {
  $('html,body').animate({
      scrollTop: $("#library").offset().top},
      'slow');
});


$(".gym").click(function() {
  $('html,body').animate({
      scrollTop: $("#gym").offset().top},
      'slow');
});


$(".all").click(function() {
  $('html,body').animate({
      scrollTop: $("#all").offset().top},
      'slow');
});




var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

var submitTimer = new Collate(3000);