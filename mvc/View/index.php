
<?php 

require_once'../controller/PostController.php';
require_once '../controller/OfficerController.php';
require_once '../controller/ActivityController.php';
require_once '../controller/AppointmentController.php';
require_once '../controller/VisitorController.php';

// Create instances of the controllers
$postController = new PostController();
$officerController = new OfficerController();
$activityController = new ActivityController();
$appointmentController = new AppointmentController();
$visitorController = new VisitorController();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Sidebar with Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

  </style>
</head>

<body class="d-flex">

  <!-- Sidebar -->
  <div class="bg-light border-end" style="width: 20%; height: 100vh;">
  <div class="d-flex flex-column p-3 h-100">
    <h4 class="text-center text-secondary mb-4">Menu</h4>
    <ul class="nav flex-column nav-pills">
      <li class="nav-item">

        <a href="index.php?action=post" class="nav-link " aria-current="page">Post</a>
      </li>
      <li class="nav-item">
        <a href="index.php?action=officer" class="nav-link">Officer</a>
      </li>
      <li class="nav-item">
        <a href="index.php?action=activity" class="nav-link">Activity</a>
      </li>
      <li class="nav-item">
        <a href="index.php?action=appointments" class="nav-link">Appointments</a>
      </li>
      <li class="nav-item">
        <a href="index.php?action=visitor" class="nav-link">Visitor</a>
      </li>
    </ul>
  </div>
</div>


  <!-- Main Content -->
  <div class="flex-grow-1"   >

  <?php
  if(!isset($_GET['action']))
  {
    $postController->listPosts();

  }
    $action = isset($_GET['action']) ? $_GET['action'] : 'post';
    echo "<script>console.log('Action: $action');</script>"; // Debugging output
    switch ($action) {
      case 'post':
        // echo "Post page "; // Load the posts page
        $postController->listPosts();
        // include '../Officer/activity.php'; // Load another page dynamically
        break;
      case 'officer':
        // echo "officer "; // Load the posts page
        $officerController->ListOfficers();
        break;

        case 'activity':
          // echo "activity "; // Load the posts page
          $activityController->listActivities();
          // include '../posts/officer.php'; // Load another page dynamically
          break;

          case 'appointments':
            // echo "appointment "; // Load the posts page
            $appointmentController->listAppointments(); 
            // include '../posts/officer.php'; // Load another page dynamically
            break;

              case 'visitor':
                // echo "visitor "; // Load the posts page
                $visitorController->listVisitors(); 
                // include '../posts/officer.php'; // Load another page dynamically
                break;
      default:
    }
    ?>

       
<!-- $activityController->listActivities();

$appointmentController->listAppointments();

$visitorController->listVisitors(); -->
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./index.js"> </script>
  <script>
  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function (e) {
      const url = this.href; // Get the link URL

      // Remove 'active' class and reset background for all links
      document.querySelectorAll('.nav-link').forEach(nav => {
        nav.classList.remove('active');
        nav.style.backgroundColor = ''; // Reset background color
      });

      // Add 'active' class and change background color for the clicked link
      this.classList.add('active');

      // Show an alert with the clicked link text
      // alert(`You clicked on: ${this.textContent.trim()}`);

      // Optionally, navigate to the new URL (uncomment the line below if desired)
      // window.location.href = url;
    });
  });
</script>

</body>

</html>