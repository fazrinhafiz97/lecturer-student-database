<html>
<head>
  <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
<title>Modify</title>
</head>
<body>
<form action="adddata_course.php" method="post">
<h1>Add data</h1>
    <p>Please enter the data.</p>
    <hr>

    <label for="id"><b>Course ID</b></label>
    <input type="text" placeholder="AI123456/LI123456/ABC12345" name="id" id="id" required>

    <label for="name"><b>Course Name</b></label>
    <input type="text" placeholder="Full Name" name="name" id="name" required>
    
    <hr>


    <button type="submit" class="addbtn">Add</button>
    </form>
</body>    
</html>