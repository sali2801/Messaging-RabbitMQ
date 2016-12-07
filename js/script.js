function validateUser()
{
    var firstname=document.forms["user-register-form"]["field_first_name"].value;
    if (firstname.length==0)
    {
        document.getElementById("firstnamevalidation").class="form-required_show"
        return false;
    }
    else
    {
        alert("Valid Input");
		    return true;

    }

}