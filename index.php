<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <style>
  body {
    font-family: 'Roboto Slab', sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
    background-image: url("https://www.kayak.co.in/news/wp-content/uploads/sites/76/2023/08/THEME_HOTEL_SIGN_FIVE_STARS_FACADE_BUILDING_GettyImages-1320779330-3.jpg");
}

.maincnt {
    margin: auto;
    width: 50%;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.frm {
    width: 80%;
    margin: auto;
}

h1, h2, h3 {
    text-align: center;
    color: #333;
}

.form-label {
    margin-top: 10px;
    color: #555;
    font-weight: bold;
}

input[type="radio"] {
    display: none;
}

label[for^="ambience"], label[for^="hygiene"], label[for^="hospitality"], label[for^="food"], label[for^="rating"]{

    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    background-color: #ddd;
    border-radius: 50%; /* Make the radio buttons round */
    cursor: pointer;
   
 
}

input[type="radio"]:checked + label {
    background-color: #007bff;
    color: #fff;
}

textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    resize: vertical;
}button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}


button:hover {
    background-color: #0056b3;
}


    </style>
    <title>Feedback</title>
</head>
<body >
    <div class="maincnt">
    <form class="frm" method="post" action="data.php">
    <h2>HOTEL Feedback FORM</h2>
    <h3 style="font-size: small;">Dear Guest, Thank you for staying with us. We hope you were happy with the quality of our services. We would be extremely grateful if you took a moment and reviewed our hotel on HolidayCheck.</h3>

    <label>Check-in Experience</label>
    <br>
    <input type="radio" id="ambience1" name="ambience" value="1">
    <label for="ambience1">1</label>

    <input type="radio" id="ambience2" name="ambience" value="2">
    <label for="ambience2">2</label>

    <input type="radio" id="ambience3" name="ambience" value="3">
    <label for="ambience3">3</label>

    <input type="radio" id="ambience4" name="ambience" value="4">
    <label for="ambience4">4</label>

    <input type="radio" id="ambience5" name="ambience" value="5">
    <label for="ambience5">5</label>
    <br>

    <label>Staff Service</label>
    <br>
    <input type="radio" id="hygiene1" name="hygiene" value="1">
    <label for="hygiene1">1</label>

    <input type="radio" id="hygiene2" name="hygiene" value="2">
    <label for="hygiene2">2</label>

    <input type="radio" id="hygiene3" name="hygiene" value="3">
    <label for="hygiene3">3</label>

    <input type="radio" id="hygiene4" name="hygiene" value="4">
    <label for="hygiene4">4</label>

    <input type="radio" id="hygiene5" name="hygiene" value="5">
    <label for="hygiene5">5</label>
    <br>

    <label>Housekeeping:</label>
    <br>
    <input type="radio" id="hospitality1" name="hospitality" value="1">
    <label for="hospitality1">1</label>

    <input type="radio" id="hospitality2" name="hospitality" value="2">
    <label for="hospitality2">2</label>

    <input type="radio" id="hospitality3" name="hospitality" value="3">
    <label for="hospitality3">3</label>

    <input type="radio" id="hospitality4" name="hospitality" value="4">
    <label for="hospitality4">4</label>

    <input type="radio" id="hospitality5" name="hospitality" value="5">
    <label for="hospitality5">5</label>
    <br>

    <label>Restaurant Food</label>
    <br>
    <input type="radio" id="food1" name="food" value="1">
    <label for="food1">1</label>

    <input type="radio" id="food2" name="food" value="2">
    <label for="food2">2</label>

    <input type="radio" id="food3" name="food" value="3">
    <label for="food3">3</label>

    <input type="radio" id="food4" name="food" value="4">
    <label for="food4">4</label>

    <input type="radio" id="food5" name="food" value="5">
    <label for="food5">5</label>
    <br>
    <label>Overall Hotel Rating</label>
    <br>
    <input type="radio" id="rating1" name="rating" value="1">
    <label for="rating1">1</label>

    <input type="radio" id="rating2" name="rating" value="2">
    <label for="rating2">2</label>

    <input type="radio" id="rating3" name="rating" value="3">
    <label for="rating3">3</label>

    <input type="radio" id="rating4" name="rating" value="4">
    <label for="rating4">4</label>

    <input type="radio" id="rating5" name="" value="5">
    <label for="rating5">5</label>
    <br>

    <label for="msg"> 
        <i class="fa-solid fa-comments" style="margin-right: 3px;"></i> 
        Any Additional Suggestions: 
    </label>
    <br>
    <textarea id="msg" name="msg" rows="3" cols="40" required></textarea>
    <br>
    <br>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>

    </div> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>