
<?php
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted = true;

    $name = htmlspecialchars(trim($_POST["name"] ?? ""), ENT_QUOTES, "UTF-8");
    $email = htmlspecialchars(trim($_POST["email"] ?? ""), ENT_QUOTES, "UTF-8");
    $phone = htmlspecialchars(trim($_POST["phone"] ?? ""), ENT_QUOTES, "UTF-8");
    $dob = htmlspecialchars(trim($_POST["dob"] ?? ""), ENT_QUOTES, "UTF-8");
    $gender = htmlspecialchars(trim($_POST["gender"] ?? ""), ENT_QUOTES, "UTF-8");
    $course = htmlspecialchars(trim($_POST["course"] ?? ""), ENT_QUOTES, "UTF-8");
    $address = htmlspecialchars(trim($_POST["address"] ?? ""), ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

<div class="container">

    <h1>🎓 Student Registration</h1>

    <p class="subtitle">
        Begin your journey towards a brighter future!
        Fill in your details below.
    </p>

    <form method="POST" action="">

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name"
               placeholder="Enter your full name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email"
               placeholder="Enter your email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone"
               placeholder="Enter your phone number"
               pattern="[0-9]{10}" maxlength="10" required>

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="">Select your gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Other">Other</option>
        </select>

        <label for="course">Choose Course</label>
        <select id="course" name="course" required>
            <option value="">Select your course</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Information Science">Information Science</option>
            <option value="Electronics">Electronics</option>
            <option value="Mechanical">Mechanical</option>
            <option value="Civil">Civil</option>
            <option value="Other">Other</option>
        </select>

        <label for="address">Address</label>
        <textarea id="address" name="address"
                  placeholder="Enter your address" required></textarea>

        <button type="submit">Submit Registration ✨</button>

    </form>

    <?php if ($submitted): ?>

        <div class="result">
            <h2>Registration Successful! 🎉</h2>

            <p><strong>Full Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
            <p><strong>Gender:</strong> <?php echo $gender; ?></p>
            <p><strong>Course:</strong> <?php echo $course; ?></p>
            <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>
        </div>

    <?php endif; ?>

</div>

<script src="script.js"></script>

</body>
</html>
