<html>
<head>
  <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
<title>Modify</title>
</head>
<body>
<form action="adddata_lecturer.php" method="post">
<h1>Add data</h1>
    <p>Please enter the data.</p>
    <hr>

    <label for="id"><b>ID</b></label>
    <input type="text" placeholder="AI123456/LI123456/ABC12345" name="id" id="id" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Full Name" name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" id="email" required>
    
        <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="0123456789/061234567" name="phone" id="phone" required>
    
    <hr>


    <button type="submit" class="addbtn">Add</button>
    </form>

    
</body>    
</html>