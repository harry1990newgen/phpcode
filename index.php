<!DOCTYPE html>
<html>
<head>
    <title>Batch-20 DevOps Welcome</title>
    <style>
        body {
            text-align: center;
            margin-top: 80px;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            color: #333;
        }

        #name {
            font-size: 42px;
            font-weight: bold;
            color: #2c3e50;
            transition: 0.4s;
            cursor: pointer;
        }

        #name:hover {
            color: #e74c3c;
            transform: scale(1.15) rotate(2deg);
        }

        #welcome {
            font-size: 26px;
            margin-top: 20px;
            color: #ffffff;
            font-weight: bold;
            animation: fadeIn 2s ease-in-out;
        }

        button {
            margin-top: 25px;
            padding: 12px 25px;
            border: none;
            background-color: #2ecc71;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 8px;
            transition: 0.3s;
        }

        button:hover {
            background-color: #27ae60;
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        #time {
            margin-top: 15px;
            font-size: 18px;
            color: #2c3e50;
        }
    </style>
</head>
<body>

<?php
    $name = "Harry - Your Mentor";

    // Fetch from Azure App Settings (Environment Variable)
    $batchname = getenv('BATCH_NAME'); 

    echo "<div id='name'>$name</div>";
?>

<div id="welcome">
    🚀 Welcome <?php echo htmlspecialchars($batchname); ?> DevOps Engineers 🚀
</div>

<button onclick="changeColor()">Change Name Color</button>
<button onclick="changeWelcome()">Change Welcome Message</button>

<div id="time"></div>

<script>
function changeColor() {
    const colors = ["#9b59b6", "#f1c40f", "#1abc9c", "#e67e22", "#e84393"];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.getElementById("name").style.color = randomColor;
}

function changeWelcome() {
    const messages = [
        "🔥 Keep Learning DevOps!",
        "⚙️ Automate Everything!",
        "🚀 Deploy Faster, Safer!",
        "💡 Think Like an Engineer!",
        "🌐 Welcome Future Cloud Experts!"
    ];
    const randomMsg = messages[Math.floor(Math.random() * messages.length)];
    document.getElementById("welcome").innerText = randomMsg;
}

// Live Time Display
function updateTime() {
    const now = new Date();
    document.getElementById("time").innerText =
        "Current Time: " + now.toLocaleTimeString();
}
setInterval(updateTime, 1000);
</script>

</body>
</html>
