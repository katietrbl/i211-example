/* Author: Katie Stinson
 * Date: 2/15/23
 * Name: main.js
 * Description: this is the javascript file for handling client-side scripting.
 */

/******************************************************************************
 * Handle key press event.
 * This function makes asynchronous HTTP request using the XMLHttpRequest object.
 * It passes a name to population.php for processing.
 *****************************************************************************/


//handlekeyup function takes what user types and sees if there is an error or not with the name typed
function handleKeyUp(e) {
    //retrieve user input from the text box
    let name = trim(document.getElementById('name').value);
    if(name == "") {
        error("");
        return;
    }

    //add your code here to process ajax requests and handle server's responses
let xhr = new XMLHttpRequest();
    //asyn ajax req
    //true = asyn , false = sync.
    xhr.open("GET", "population.php?name=" + name, true);
    xhr.onload = function (){
    let result = xhr.responseText;
    let resultJSON = JSON.parse(result);

    //if stmt thhat clears any errors so the screen is not a mess
        if(resultJSON['error']){
            clear();
            error(resultJSON.error)
        } else {
            clear();
            display(resultJSON);
        }
    };
    xhr.send(null);
}
console.log(name)
/*
 * This function accepts a JSON object containing population information
 * and display it in an HTML table. This function get invoked by the handlekeyup function
 * when the country/region name is found in the database.
 * 
 */
function display(population) {
    //add your code here to retrieve data from an JSON object and then display them
let nameObj;
    nameObj = document.getElementById('name').value;
    //key is representation of each key we iterate through object.
    let rows = "";
    //key would be the index of each country (year)
    for(let key in population) {
        if (key == "metadata") {
            continue;
        }
        var countryPopulation = population[key][nameObj];
        var worldPopulation = population[key]["World"];
//create HTML to display data
        rows += `
        <div class="row"> 
         <div> ${key} </div>
         
         <div>${numberWithCommas(countryPopulation)}</div>
         
         <div>${numberWithCommas(worldPopulation)}</div>
         
         </div>
        `

    }
    //actually display the innerHTML
    document.getElementById("population-results").innerHTML = rows;

}

/*
 * This function clears the population. The function is invoked by the handlekeyup function if
 * the country name a user has entered is not found in the database.
 */
//clear fct
function clear() {
    //add your code here to clear the population data //clear all html
    document.getElementById("population-results").innerHTML = "";
    document.getElementById("message").innerHTML = "";

}

//This function displays an error message in the div block with the id of "message".
function error(message) {

    //add your code here to display an error message.
    document.getElementById("message").innerHTML = message;
}

/*
* A home-made trim function that removes leading and
 * trailing whitespace characters from a string
 */
function trim(str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}

/*
* A home-made function that displays a number with commas as thousands separators
 */

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}