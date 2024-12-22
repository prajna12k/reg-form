<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School ID Registration</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

  <div class="container">
    <h1>School ID Registration</h1>
    
    <form id="registrationForm" action="submit.php" method="POST">
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" required />
      </div>
      
      <div class="form-group">
        <label for="studentId">Student ID</label>
        <input type="text" id="studentId" name="studentId" required />
      </div>
      
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required />
      </div>
      
      <div class="form-group">
        <label for="grade">Grade</label>
        <select id="grade" name="grade" required>
          <option value="1">Grade 1</option>
          <option value="2">Grade 2</option>
          <option value="3">Grade 3</option>
          <option value="4">Grade 4</option>
          <option value="5">Grade 5</option>
        </select>
      </div>

      <div class="form-group">
        <label for="parentName">Parent Name</label>
        <input type="text" id="parentName" name="parentName" required />
      </div>
      
      <button type="submit" id="submitBtn">Submit</button>
    </form>
    
    <div id="responseMessage" style="display:none;"></div>
  </div>

  <script src="script.js"></script>

</body>
</html>
