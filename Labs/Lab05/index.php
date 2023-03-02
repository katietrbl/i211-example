<?php
/**
 * Author: Katie Stinson
 * Date: 2/15/2023
 * File: index.php
 * Description: The HTML page displays population data.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Country, region, and world population</title>
    <link href="main.css" rel="stylesheet" type="text/css"/>
    <!-- link to JS file -->
    <link href="main.js" />
    <script src="main.js"></script>
    
</head>
<body>
<h2 style="text-align: center">Country, Region, and World Population</h2>
<h3 style="text-align: center">An AJAX Application for Looking up population figures by country/region names</h3>


<!-- create event handler on input tag for name so when a keystroke is detected, handlekeyup is executed (only accepts on parameter - event) -->
<div id="population-input">
    <!-- add event handler for detecting keystroke. (handlekeyup) invoke. ft accepts one parameter named event. dont rename!-->
    <strong>Enter country/region name (e.g. Zambia):</strong> <input id="name" onkeyup="handleKeyUp(event)">
    <!-- the span tag for displaying the message -->
    <span id="message" style="color: red; margin-left: 5px"></span>

    <div class="row">
        <div style="width: 400px">
            <span style="font-weight: bold;">Country/Region: </span>
            <!-- the span tag for displaying the country/region name -->
            <span id="country"></span>
        </div>
        <div>
            <span style="font-weight: bold;">Code: </span>
            <!-- the span tag for displaying the country/region code -->
            <span id="code"></span>
        </div>
    </div>
</div>

<div class='row header'>
    <div>Year</div>
    <div>Country/Region Population</div>
    <div>World Population</div>
</div>

<!-- use the following div block to display population figures -->
<div id="population-results"></div>
</body>
</html>