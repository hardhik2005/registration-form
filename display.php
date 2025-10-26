<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);

    echo "
    <html>
    <head>
      <style>
        body {
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          background: linear-gradient(135deg, #667eea, #764ba2);
        }
        .card {
          background: #fff;
          padding: 30px 25px;
          border-radius: 15px;
          width: 400px;
          text-align: center;
          box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }
        h2 { color: #764ba2; margin-bottom: 20px; }
        p { color: #333; font-size: 16px; margin: 8px 0; }
      </style>
    </head>
    <body>
      <div class='card'>
        <h2>Registration Successful!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>DOB:</strong> $dob</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>Course:</strong> $course</p>
        <p><strong>Address:</strong> $address</p>
      </div>
      <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
      <script>
        $(document).ready(function(){
          $('.card').hide().fadeIn(1000);
        });
      </script>
    </body>
    </html>
    ";
}
?>