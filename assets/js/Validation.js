function validateForm(){
    var name = document.getElementById("Fname").value;
    // var email = document.getElementById("Femail").value;
    var num = document.getElementById("Fnum").value;
    var pass = document.getElementById("Fpass").value;
    var conpass = document.getElementById("Fcpass").value;
    clearErrors();

    if ((name.length < 3) || (name.length > 20)){
        document.getElementById('Name').innerHTML ="*User Name Content atleast 3 to 19 character *";
        return false
    }

    if (!isNaN(name)){
        document.getElementById('Name').innerHTML ="*Only Characters allowed*";
        return false
    }
   

    if (isNaN(num)){
        document.getElementById('Mobile-Number').innerHTML ="*Letters Not allowed*";
        return false
    }

    if (num.length != 10){
        document.getElementById('Mobile-Number').innerHTML ="*Mobile number must be 10 digit*";
        return false
    }


    if ((pass.length < 5) || (pass.length > 20)){
        document.getElementById('Password').innerHTML ="*Password Content atleast 5 to 19 Characters*";
        return false
    }

    // if (conpass ==""){
    //     document.getElementById('ConfirmPassword').innerHTML ="*Please Enter ConfirmPassword*";
    //     return false
    // }
    
    if (pass != conpass){
        document.getElementById('ConfirmPassword').innerHTML ="*Password is Not Equal*";
        return false
    }

}
function clearErrors(){
    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
}