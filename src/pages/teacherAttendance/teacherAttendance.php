<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Recognition System</title>
    <link rel="stylesheet" href="../../assets/css/styles.css"> <!-- Link to your CSS file -->
    <?php include '../../includes/links.php'?>
</head>
<body>

    <!-- Main Content Container -->
    <div class="content-container">
        <!-- Title -->
        <div class="header">
            FACE RECOGNITION SYSTEM
        </div>

        <!-- Three Panel Options -->
        <div class="container">
            <a href="#" class="panel">Student</a>
            <a href="#" class="panel">Admin</a>
            <a href="#" class="panel">Attendance List</a>
        </div>

        <!-- Face Recognition and Name List Section -->
        <div class="main-container">
            <!-- Left Panel (Face Recognition) -->
            <div class="left-panel">
                <p>Face Recognition Camera</p>
            </div>

            <!-- Right Panel (List of Names) -->
            <div class="right-panel">
                <p>List of Names will appear here</p>
            </div>
        </div>
    </div>

    <!-- Attendance Summary Table -->
    <div class="attendance-table-container">
    <div class="attendance-table-container">
        <h3>Attendance Summary (display only)</h3>
        <table class="attendance-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Course and Year Level</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>BSCS-IV</td>
                    <td>Web Development</td>
                    <td>Present</td>
                    <td><a href="#">Edit</a></td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>BSIT-II</td>
                    <td>Database Systems</td>
                    <td>Absent</td>
                    <td><a href="#">Edit</a></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>


    </div>

</body>
</html>
