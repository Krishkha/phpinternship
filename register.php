<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="custom.js"></script>
</head>

<body>
    <b id="response"></b>
    <h2>Student Registration Form</h2>
    <form action="register_post.php" method="POST" id="student_register">
        <label>Student Name</label>
        <input type="text" id="student_name" class="forminputs" name="student_name" required />
        <br /><br />

        <label>Enrollment No</label>
        <input type="number" name="enrollment_no" id="enrollment_no" class="forminputs" required />
        <br /><br />

        <label>Mobile No</label>
        <input type="number" name="mobile_no" class="forminputs" id="mobile_no" required />
        <br /><br />

        <label>Email</label>
        <input type="email" name="student_email" class="forminputs" id="student_email" required />
        <br /><br />

        <label>Password</label>
        <input type="password" name="student_password" id="student_password" class="forminputs" required />
        <br /><br />

        <input type="submit" value="Submit" />
        <?php
        if (isset($_GET['message']) && !empty($_GET['message'])) {
            echo $_GET['message'];
        }
        ?>
    </form>
    <!-- <script>
        function getStudentName() {
            var student_name = document.getElementById('student_name').value;
            alert(student_name);
        }   
    </script> -->
</body>

</html>