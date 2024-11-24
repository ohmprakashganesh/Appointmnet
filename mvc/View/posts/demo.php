<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar with Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .sidebar {
      background-color: #f8f9fa; /* Light gray background */
      height: 100vh;
      position: fixed;
      width: 20%; /* 1/5 of the screen */
      overflow-y: auto;
      padding-top: 20px;
    }
    .content {
      margin-left: 20%; /* Push the content to the right of the sidebar */
      width: 80%; /* Remaining 4/5 of the screen */
      height: 100vh;
      background-image: url('https://via.placeholder.com/1600x900'); /* Placeholder image */
      background-size: cover;
      background-position: center;
    }
    .nav-link {
      font-size: 18px;
      color: #333;
    }
    .nav-link:hover {
      background-color: #e9ecef;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column">
    <a  class="nav-link">Settings</a>
    <a  class="nav-link">Profile</a>
    <a  class="nav-link">Contacts</a>
    <a  class="nav-link">Gallery</a>
    <a class="nav-link">Details</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <?php  echo "<h1> hello </h1>"; ?>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
 
  </script>
</body>
</html>
