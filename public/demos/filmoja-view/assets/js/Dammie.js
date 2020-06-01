// $(document).ready(function(){
//     $(window).scroll(function () {   
       
//      if($(window).scrollTop() > 100) {
//         $('#sidebar').css('position','fixed');
//         $('#sidebar').css('top','0'); 
//      }
    
//      else if ($(window).scrollTop() <= 100) {
//         $('#sidebar').css('position','');
//         $('#sidebar').css('top','');
//      }  
//         if ($('#sidebar').offset().top + $("#sidebar").height() > $("#footer").offset().top) {
//             $('#sidebar').css('top',-($("#sidebar").offset().top + $("#sidebar").height() - $("#footer").offset().top));
//         }
//     });
//     });

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
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


 /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {
    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
 /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction4() {
  document.getElementById("myDropdown4").classList.toggle("show4");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn4')) {
    var dropdowns = document.getElementsByClassName("dropdown-content4");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show4')) {
        openDropdown.classList.remove('show4');
      }
    }
  }
}

    // dropdown on click
    jQuery(document).ready(function (e) {
        function t(t) {
            e(t).bind("click", function (t) {
                t.preventDefault();
                e(this).parent().fadeOut()
            })
        }
        e(".dropdown-toggle").click(function () {
            var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
            e(".button-dropdown .dropdown-menu").hide();
            e(".button-dropdown .dropdown-toggle").removeClass("active");
            if (t) {
                e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
            }
        });
        e(document).bind("click", function (t) {
            var n = e(t.target);
            if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
        });
        e(document).bind("click", function (t) {
            var n = e(t.target);
            if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
        })
    });
