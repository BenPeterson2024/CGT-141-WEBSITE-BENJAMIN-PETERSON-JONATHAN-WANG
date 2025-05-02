<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);
    $feature = htmlspecialchars($_POST['favorite-feature']);
    $recommend = isset($_POST['recommend']) ? htmlspecialchars($_POST['recommend']) : 'Not specified';
} else {
    // If accessed directly without POST
    echo "<p>No form data submitted.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Received</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #1e1e1e;
      color: #f0f0f0;
      padding: 40px;
    }
    .response-box {
      background-color: #2b2b2b;
      border-left: 6px solid #00aaff;
      padding: 20px;
      max-width: 600px;
      margin: auto;
    }
    h2 {
      color: #00aaff;
    }
  </style>
</head>
<body>
  <div class="response-box">
    <h2>Thank you, <?php echo $name; ?>!</h2>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Feedback:</strong> <?php echo nl2br($feedback); ?></p>
    <p><strong>Favorite Feature:</strong> <?php echo $feature; ?></p>
    <p><strong>Would Recommend:</strong> <?php echo $recommend; ?></p>
  </div>
</body>
</html>