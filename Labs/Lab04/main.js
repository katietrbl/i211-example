//katie stinson
//2-9-23
//java script functions to make drop down application




//orig


/* Handle window onload event. It creates a selection list of seven continents.
*/
window.onload = function () {
    // load continents from an external json file
    let continents = JSON.parse(loadJSON("continents.json"));

    //create the drop down list for the continents
    let _html_select = "<option selected='selected' disabled='disabled'>Select a Continent </option>";
    for (let continent in continents) {
        _html_select += "<option value='" + continent + "'>" + continents[continent] + "</option>";
    }
    document.getElementById("continents").innerHTML = _html_select;

//pull json file
    function loadJSON(file) {
        var xmlHttp;

        //create an XMLHttpRequest object
        if (window.XMLHttpRequest) {
            xmlHttp = new XMLHttpRequest();
        }
        else {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        //define an asynchronous request
        xmlHttp.open("GET", file, false);
        xmlHttp.send();

        return xmlHttp.responseText;
    }
    //load countries data from an external json file.

    let countries = JSON.parse(loadJSON("countries.json"));
//join fct
//let countriesJoin = countries.join(" and ");
    //handle change event of the drop down list and call the display method.


    //var.onchange() = () => {}

    document.getElementById('continents').onchange = function () {
        //if new continent is chosen, should display different choice.
        if (continents == continents) {
            //document.getElementById("country").display;
            display(countries);
        }
    }
    //register onchange handler so when a dif option is selected, display method gets called.


    //on change


    /* This function takes a json object of countries and a continent as the parameters.
    *  It filters the json document with a continent then appends a row to
    *  the div block for each country.
    */
    function display(countries, continent) {
        let row;
        for (let i = 0; i < countries.length; i++) {


            let name = countries[i].name;
            let native = countries[i].native;
            let phone = countries[i].phone;
            let continent = countries[i].continent;
            let captial = countries[i].capital;
            let currency = countries[i].currency;
            let languages = countries[i].languages;

            //cString += "<li>" + countries[i] + "</li>"
            /*
             <div>Name</div>
                <div>Capital</div>
                <div>Currency</div>
                <div>Language</div>
                <div>Area Code</div>
             */


            row = "<ul>";
            row += "<li class='name'>" + name + "</li>";
            row += "<li class='capital'>" + capital + "</li>";
            row += "<li class='currency'>" + currenct + "</li>";
            row += "<li class='language'>" + language + "</li>";
            row += "<li class='area code'>" + area_code + "</li>";
            row += "</ul>";


            document.getElementById('countries').innerHTML += row;
            console.log();
        }
    }
}

//cant get my lab to run, but i tried everything. i have been working on this all day and cant
//resolve the issues, and the console doesnt show any issues. not sure what else to do.



