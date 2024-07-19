  <script>

  function ValidateCandidateForm()
{
    var name     =CandidateForm.Cname;
    var email    =CandidateForm.Cemail;
    var phone    =CandidateForm.Cphone;
    var address  =CandidateForm.Caddress;
    var description=CandidateForm.Cdescription;

    if (name.value == "")
    {
        window.alert("Please Enter Candidate Name.");
        name.focus();
        return false;
    }
    
   if (!/^[a-zA-Z]*$/g.test(name.value)) {
        alert("Invalid characters");
        name.focus();
        return false;
    }


    if (!validateCaseSensitiveEmail(email.value))
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }



    if (phone.value == "")
    {
        window.alert("Please Enter Candidate Phone Number.");
        phone.focus();
        return false;
    }

    if (phone.value.length != 13)
    {
        window.alert(" Phone number must be 13 digit.");
        phone.focus();
        return false;
    }

    if (address.length== 0)
    {
        window.alert("Please provide Candidate Address");
        comment.focus();
        return false;
    }

    if (destination.length== 0)
    {
        window.alert("Please provide Candidate Description");
        comment.focus();
        return false;
    }
  
    return true;
}

function validateCaseSensitiveEmail(email) 
{ 
 var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
 if (reg.test(email)){
 return true; 
}
 else{
 return false;
 } 
} 

</script>