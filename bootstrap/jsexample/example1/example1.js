function doubleIngredients(){
    var mult = document.getElementById("num").value;
    var eggs = 3 * mult;
    var sugar = 2 * mult;
    var cornMeal = 3 * mult;
    var wheat = 3 * mult;
    var kitchenOil = 1/2 * mult;
    var milk = 1 * mult;
    var yeast = 1 * mult;
    document.getElementById("CornMealRS").innerHTML = "<ul id ='corMealCake'><li id='eggs'> " + eggs + " eggs </li><li id='sugar'> " + sugar + " Teacup(s) of sugar</li><li> " 
    + cornMeal + " Teacup(s) of corn meal </li><li> " + wheat + " Table spoons of wheat </li><li> " 
    + kitchenOil + " Cup(s) kitchen oil</li><li> " + milk + " Cup(s) of milk </li><li> " + yeast + " Table spoon(s) of yeast</li>";
}