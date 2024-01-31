function validate() {
    var name = document.reg_form.name;
    var email = document.reg_form.email;
    var date = document.reg_form.date;
    var gender = document.reg_form.gender;
    var Number = document.reg_form.Number;
    var place = document.reg_form.place;
    var Password = document.reg_form.Password;
    var ConPassword = document.reg_form.ConPassword;

    if (name.value.length <= 0) {
        alert("Name is required");
        name.focus();
        return false;
    }
    if (email.value.length <= 0) {
        alert("Email is required");
        email.focus();
        return false;
    }
    if (date.value.length <= 0) {
        alert("Birthdate is required");
        date.focus();
        return false;
    }
    if (gender.value.length <= 0) {
        alert("Gender is required");
        gender.focus();
        return false;
    }
    if (Number.value.length <= 10) {
        alert("Mobile Number is required");
        Number.focus();
        return false;
    }
    if (place <= 0) {
        alert("City is required");
        place.focus();
        return false;
    }
    if (Password.value.length <= 0 &&Password.value.length <= 7 ) {
        alert("Mobile Number is required");
        Number.focus();
        return false;
    }
    if (ConPassword.value.length <= 0) {
        alert("Password Not Same!!");
        ConPassword.focus();
        return false;
    }
    return false;
}

