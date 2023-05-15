function fees(){
    var capital = document.getElementById("cap").value;
    var rate = document.getElementById("rate").value;
    var time = document.getElementById("time").value;

    var timeYear = time/12;
    var rateFinal = 1 + (rate/100);
    // M = C (1 + i)t 
    var amount = capital * (Math.pow(rateFinal,timeYear));
    // J = M – C
    var income = amount - capital;

    var amountFinal = amount.toFixed(2);
    var incomeFinal = income.toFixed(2);
    
    document.getElementById("fees").innerHTML = "amount: " + amountFinal + "<br>income: " + incomeFinal;
}
