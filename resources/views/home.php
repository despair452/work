<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ever</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #afbfff;

        }
        
        h1{
            margin-top: 5rem;
            font-size: 120px;
        }
        
        button{
            background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
        }

        .button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
    background-color: white; 
  color: black; 
  border: 2px solid #f44336;
  margin-bottom: 10%;
}

.button2:hover {
    background-color: #f44336;
  color: white;
  
}

.buttonjoin{
    color: green;
    size: 20px;
}

    </style>
</head>
<body>
    
    <center style="background-color:#91a7ff; display: grid; justify-content: center; margin-top: 5rem; margin-left: 10%;margin-right: 10%; border-radius: 25px;"><h1>Event</h1>
        <button class="button button1"onclick="location.href='/everja'" >Users</button><button class="button button2"onclick="location.href='/login'">admin</button>
    </center>
</body>
</html>