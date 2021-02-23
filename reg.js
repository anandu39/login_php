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