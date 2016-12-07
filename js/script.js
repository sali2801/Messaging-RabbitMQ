 function validateEmail(email) {
 var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        return false;
    }
}
 function validateMobileNum(mobileNum) {
  var reg = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
  return reg.test(mobileNum);
}

 function validatebirthdate(date) {
  var reg = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
  return reg.test(date);
}

function validateForm()
         {
             var firstname=document.forms["UserForm"]["field_first_name"].value;
             var birthdate=document.forms["UserForm"]["field_birthdate"].value;
             var email=document.forms["UserForm"]["mail"].value;
             var phone=document.forms["UserForm"]["field_mobile"].value;
			 var pass=document.forms["UserForm"]["pass"].value;
			 var pass2=document.forms["UserForm"]["passconfirm"].value;

             if (firstname==null || firstname=="")
			 
            {
			   document.getElementById('fn_validation').innerHTML="this is invalid name";
               return false;
			  
            }
			else
			{
			   document.getElementById('fn_validation').innerHTML="";
			}
			//
		    if (birthdate==null || birthdate=="" || !(validatebirthdate(birthdate)))
			{
			    document.getElementById('birth_validation').innerHTML="this is invalid date";
                return false;
			}
			else
			{
			   document.getElementById('birth_validation').innerHTML="";
			}
			//
			if (email==null || email=="" || !(validateEmail(email)))
			{
			    document.getElementById('email_validation').innerHTML="this is invalid email";
                return false;
			}
			else
			{
			   document.getElementById('email_validation').innerHTML="";
			}
			//
			if (phone==null || phone=="" || !(validateMobileNum(phone)))
			{
			    document.getElementById('phone_validation').innerHTML="this is invalid mobile number";
                return false;
			}
			else
			{
			   document.getElementById('phone_validation').innerHTML="";
			}
			//
			if (pass==null || pass=="" || pass.length < 6)
			{
			    document.getElementById('pass_validation').innerHTML="this is invalid password";
                return false;
			}
			else
			{
			   document.getElementById('pass_validation').innerHTML="";
			}
			//
			if (pass2==null || pass2=="" || pass2!= pass )
			{
			    document.getElementById('pass2_validation').innerHTML="this is invalid password";
                return false;
			}
			else
			{
			   document.getElementById('pass2_validation').innerHTML="";
			}
			
			
         }