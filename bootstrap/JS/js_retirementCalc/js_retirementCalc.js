function retire(){
    var age = document.getElementById("age").value;
    var workedPeriod = document.getElementById("workedPeriod").value;
    var male = document.getElementById("M").checked;
    var female = document.getElementById("F").checked;
    
    if(female == true){
        if (age >= 57 && workedPeriod >= 30) {
            document.getElementById("after").innerHTML = "You can retire";
        } else {
            document.getElementById("after").innerHTML = "You can not retire";
        }
    } else if(male == true){
        if (age >= 60 && workedPeriod >= 35) {
            document.getElementById("after").innerHTML = " You can retire";
        } else {
            document.getElementById("after").innerHTML = "You can not retire";
        }
    } else {
        document.getElementById("after").innerHTML = "Select a gender";
    }
}