<!DOCTYPE html>
<html>
<head>
    <title>Harry - Your Mentor</title>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        #name {
            font-size: 40px;
            font-weight: bold;
            color: #3498db;
            transition: 0.3s;
            cursor: pointer;
        }
        #name:hover {
            color: #e74c3c;
            transform: scale(1.1);
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #2ecc71;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<?php
    $name = "Harry - Your Mentor";
    echo "<div id='name'>$name</div>";
?>

<button onclick="changeColor()">Change Color</button>

<script>
function changeColor() {
    const colors = ["#9b59b6", "#f1c40f", "#1abc9c", "#e67e22", "#e84393"];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.getElementById("name").style.color = randomColor;
}
</script>

</body>
</html>
