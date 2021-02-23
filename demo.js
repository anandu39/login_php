$(function () {//togle the contents of the page without reloading.
    // Hide all elements which id starts with text.
    $("[id^=text]").hide();
    
    $(".para2m").click(function () {
        // Look for the element with id equals text + 
        // the clicked element data-rel value.
        $("#text" + $(this).data("rel")).toggle();
         $("#demo" + $(this).data("rel")).toggle();
    });
});

 $(function () { /*for validations. checks the confirm password and password field same or not
 checks fields are empty or not. checks the format of email.*/ 
      $("#btnsubmit").click(function () {
        var name=$("#name1").val();
        var password=$("#txtpswrd").val();
        var email=$("#email1").val();
        var confirmpassword=$("#ctxtpswrd").val();
        if(confirmpassword!=password){

          if(name==""){
            alert("Name Field cannot be empty.");
            return false;
          }

          if(email==""){
            alert("Email Field cannot be empty.");
            return false;
          }
          else{
        	var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        	if(reg.test(email)){
        		if(password==""){
        			alert("Password Field cannot be empty.");
        			return false;
        		}
        	}
        	else{
        		alert("Enter a valid Email address.")
          		return false;
          	}
        }
          if(confirmpassword==""){
            alert("Confirm password Field cannot be empty.");
            return false;
          }
          if(password==""){
            alert("Password Field cannot be empty.");
            return false;
          }
          else{ 
          alert("Password do not match.");
          return false;
          }   
      }
    else{

        if(name==""){
            alert("Name Field cannot be empty.");
            return false;
          }
      
        if(email==""){
        	alert("Email Field cannot be empty.");
            return false;
        }
        else{
        	var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        	if(reg.test(email)){
        		if(password==""){
        			alert("Password Field cannot be empty.");
        			return false;
        		}
        	}
        	else{
        		alert("Enter a valid Email address.")
          		return false;
          	}
        }
        if(password==""){
         	alert("Password Field cannot be empty.");
            return false;
        }    
        return true;
        if(confirmpassword==""){
            alert("Confirm password Field cannot be empty.");
            return false;
        }
  }
  });
});

$(function () {
	$("#btnsubmit1").click(function () {

		var lpassword=$("#txtpswrd1").val();
        var lemail=$("#email2").val();
        if(lemail==""){
        	alert("Email Field cannot be empty");
        	return false;
        }
        else{
        	var reg1 = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        	if(reg1.test(lemail)){
        		if(lpassword==""){
        			alert("Password Field cannot be empty.");
        			return false;
        		}
        	}
        	else{
        		alert("Enter a valid Email.")
        		return false;
        	}

        }
        if(password=""){
        	alert("Password Field cannot be empty.");
        	return false;
        }

	});
});

function myfunc() { // toggle show and hide password.
  var x = document.getElementById("txtpswrd1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myfunc1() {
  var z = document.getElementById("txtpswrd");
  var y = document.getElementById("ctxtpswrd");
  if (z.type === "password"||y.type=="password") {
    z.type = "text";
    y.type = "text";
  } else {
    z.type = "password";
    y.type = "password";
  }
}