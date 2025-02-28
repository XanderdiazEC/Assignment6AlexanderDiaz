<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Input Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Number Input Form</h1>
    <form action="process.php" method="post">
        <div class="form-group">
            <label for="a">Number a:</label>
            <input type="number" id="a" name="a" step="any" required>
        </div>
        <div class="form-group">
            <label for="b">Number b:</label>
            <input type="number" id="b" name="b" step="any" required>
        </div>
        <div class="form-group">
            <label for="c">Number c:</label>
            <input type="number" id="c" name="c" step="any" required>
        </div>
        <div class="form-group">
            <label for="d">Number d:</label>
            <input type="number" id="d" name="d" step="any" required>
        </div>
        <div class="form-group">
            <label for="e">Number e:</label>
            <input type="number" id="e" name="e" step="any" required>
        </div>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>