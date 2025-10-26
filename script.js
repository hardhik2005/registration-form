$(document).ready(function(){
  // Validation on submit
  $("#regForm").on("submit", function(e){
    let name = $("input[name='name']").val().trim();
    let email = $("input[name='email']").val().trim();
    let phone = $("input[name='phone']").val().trim();
    let dob = $("input[name='dob']").val();
    let gender = $("select[name='gender']").val();
    let course = $("select[name='course']").val();
    let address = $("input[name='address']").val().trim();

    if(name.length < 3){ alert("Name must be at least 3 characters long"); e.preventDefault(); return; }
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!emailPattern.test(email)){ alert("Enter a valid email"); e.preventDefault(); return; }
    if(!/^[0-9]{10}$/.test(phone)){ alert("Enter a valid 10-digit phone number"); e.preventDefault(); return; }
    if(dob === ""){ alert("Please select your DOB"); e.preventDefault(); return; }
    if(!gender){ alert("Please select your Gender"); e.preventDefault(); return; }
    if(!course){ alert("Please select a Course"); e.preventDefault(); return; }
    if(address.length < 5){ alert("Address must be at least 5 characters"); e.preventDefault(); return; }
  });

  // Floating label fix for select
  $("select").on("change", function(){
    if($(this).val() !== ""){
      $(this).siblings("label").addClass("active");
    } else {
      $(this).siblings("label").removeClass("active");
    }
  });
});
