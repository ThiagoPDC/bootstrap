function graduated(){
    var first = document.getElementById("first").value;
    var second = document.getElementById("second").value;
    var third = document.getElementById("third").value;
    var fourth = document.getElementById("fourth").value;
    var frequency = document.getElementById("frequency").value;

    if (first > 10 || first < 0){
        document.getElementById("pass").innerHTML = "Insert valid grades";
    } else if (second > 10 || second < 0){
        document.getElementById("pass").innerHTML = "Insert valid grades";
    } else if (third > 10 || third < 0){
        document.getElementById("pass").innerHTML = "Insert valid grades";
    } else if (fourth > 10 || fourth < 0){
        document.getElementById("pass").innerHTML = "Insert valid grades";
    } else if (frequency > 100 || frequency < 0){
        document.getElementById("pass").innerHTML = "Insert a valid frequency";
    } else {
        var average = (first + second + third + fourth) / 4;

        if(average >= 6 && frequency >= 75){
            document.getElementById("pass").innerHTML = "You've graduated!! Congratulations!!";
        } else if(media < 6 && frequency >= 75){
            document.getElementById("pass").innerHTML = "Failed by insuficient grades";
        } else if(frequency < 75){
            document.getElementById("pass").innerHTML = "Failed by insuficient frequency";
        } else if(average > 10 && frequency >= 75){
            document.getElementById("pass").innerHTML = "You are on the board";
        } else {
            document.getElementById("apos").innerHTML = "Insira as notas";
        }
    }
}