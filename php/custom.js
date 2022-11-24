function submit_query() {
  jQuery(".errorField").html("");
  var name = jQuery("#name").val();
  var email = jQuery("#email").val();

  var message = jQuery("#message").val();
  var is_error = "no";

  // alert("hello");
  if (name == "") {
    jQuery("#name_er").html("Please enter xghname");
    is_error = "yes";
  }
  if (email == "") {
    jQuery("#email_er").html("Please enter Email");
    is_error = "yes";
  }

  if (message == "") {
    jQuery("#message_er").html("Please enter message");
    is_error = "yes";
  }
//   console.log(is_error);
  if (is_error == "no") {
    console.log(is_error);
    jQuery.ajax({
      type: "post",
      url: "php/submit_query.php",
      data:
        "name=" +
        name +
        "&email=" +
        email +
        "&message=" +
        message,
     
      success: function (result) {
        result = result.trim();
        if (result == "invalidEmail") {
          jQuery("#email_er").html("Email id is not in correct");
        }
    
        if (result == "insert") {
          jQuery(".submit-query").html("Thank you for registeration");
          alert("Registration");
    
          document.getElementById("query_form").reset();
          console.log("i am doing better every day");
          window.location='payment.html';
        }
      },
    });
  }
}
