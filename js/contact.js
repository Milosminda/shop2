
$(document).ready(function() {
 
 // Contact

$(".back-to-bottom").click(function () {
  $("html, body").animate({scrollTop: $(document).height()}, 1000)
});

// Detailed
var box = document.getElementById("curBox");
var pictures = document.getElementsByClassName("thumb");

for (var i = 0; i < pictures.length; i++) {
  pictures[i].addEventListener("click", changePic);
}
function changePic() {
  var pic = this.getAttribute("src");
  box.setAttribute("src", pic);
}
// Detailed END

function wrongAns() {

  var errorInput = document.getElementsByClassName("errorInput");
  var errorBtn = document.getElementsByClassName("errorBtn");

  if (errorInput === "text") {
    return;
  } else if (errorInput != "text") {
    for (var i = 0; i < errorInput.length; i++) {
      errorInput[i].style.border = "1px solid red";
    }
  }
}

// Map

$(document).ready(function() {
  $('.see-map').click(function(event) {
    $(this).fadeOut(600);
  });
});

// Kontakt forma
    $('#contact-form').validate({
        submitHandler: function (form) {

            // Uzimanje podataka iz forme
            var data = $(form).serialize();

            // Uzimanje vrednosti iz action atributa
            var action = $(form).prop('action');

            // Onemogućavanje svih polja
            $('input, textarea, button').prop('disabled', true);
            // Promena natpisa na dugmetu
            $(form).find('button').text('Slanje u toku...');

            // Slanje podataka iz forme putem AJAX metode
            $.post(
                action,
                data,
                function (response) {
                    console.log(response);
                    if (response == 1) {
                        // Sakrij i ukloni formu
                        $(form).slideUp(function () {
                            $(this).remove();
                        });
                        // Prikaži da je poruka uspešno poslata
                        $('.alert-success').slideDown();
                    } else if ( response != '') {
                        // Ako poruka nije prosleđena - pokazaće se greška
                        alert(response);
                    } else {
                        alert('Serverska validacija nije prošla');
                    }
                }
            );
        }
    });

   

});