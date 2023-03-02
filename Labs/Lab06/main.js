/* Author: Katie Stinson
 * Date: 2-23-23
 * Name: main.js
 * Description: this javascript file sends ajax request and handles server's responses.
 */

//create a XMLHttpRequest object
const xmlHttp = new XMLHttpRequest();

//handle keyup event fired in the radius and height text boxes
window.onload = function () {
    document.getElementById('width').addEventListener('keyup', calculate);
    document.getElementById('length').addEventListener('keyup', calculate);
    document.getElementById('height').addEventListener('keyup', calculate);
}

//gets called when a keyup event gets fired to handle client-side programming tasks.
function calculate() {

    let width = document.getElementById('width').value;
    let length = document.getElementById('length').value;
    let height = document.getElementById('height').value;

    //create GET method
    xmlHttp.open('GET', 'pyramid_do.php?width='+ width + '&length=' + length + '&height=' + height, true);
    xmlHttp.onload = function () {
        let resultJSON = xmlHttp.responseText;
        if (width > 0 && length > 0 && height > 0) {
            display(resultJSON);
        } else {
            document.getElementById('base').innerHTML = "";
            document.getElementById('volume').innerHTML = "";
            document.getElementById('lateral').innerHTML = "";
            document.getElementById('surface').innerHTML = "";
        }

    }
//create AJAX request
    xmlHttp.send (null);
}

//parse + display each value
function display(results) {
   let parseJSON = JSON.parse(results);
    document.getElementById('base').innerHTML = parseJSON["Base"];
    document.getElementById('volume').innerHTML = parseJSON["Volume"];
    document.getElementById('lateral').innerHTML = parseJSON["Lateral"];
    document.getElementById('surface').innerHTML = parseJSON["Surface"];
}
