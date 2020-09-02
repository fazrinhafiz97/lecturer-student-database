<html>
<head>
  <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
<title>Modify</title>
</head>
<body>
<form action="adddata_score.php" method="post">
<h1>Add data</h1>
    <p>Please enter the data.</p>
    <hr>

    <label for="id"><b>Student ID</b></label>
    <input type="text" placeholder="AI180000" name="id" id="id" required>

    <label for="name"><b>Course ID</b></label>
    <input type="text" placeholder="BIW23000" name="name" id="name" required>
    
    <label for="number"><b>Quiz1_Score</b></label>
    <input type="text" placeholder="" name="number" id="number" required>
    
    <label for="number"><b>Quiz2_Score</b></label>
    <input type="text" placeholder="" name="number" id="number" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="" name="email" id="email" required>
    
    <hr>

    <button type="submit" class="addbtn">Add</button>
    </form>
</body>    
</html>