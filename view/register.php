<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Registration Form</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Button to Open the Modal -->
    <button id="openModalBtn">Register</button>

    <!-- The Modal -->
    <div id="registrationModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="registrationForm">
                
            
    <img src="assets/img/bg.png" alt="University Logo" class="modal-logo">
    <!-- Additional content here -->

                <h2>Student Registration</h2>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number</label>
                <input type="tele" id="phone" name="phone" required>

                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required>

                <label for="year">Year of Study:</label>
                <select id="year" name="year" required>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                     <option value="5">5th Year</option>
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="assets/js/scripts.js"></script>
</body>
</html>
