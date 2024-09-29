<?php
include '../../includes/conn.php';
include '../../includes/session.php'; // Include session check

// Fetch attendance data from the database
$sql = "SELECT name, course_year_level, subject, status FROM attendance_summary"; // Adjust table name as needed
$result = $conn->query($sql);
?>


    <!-- Attendance Summary Table -->
    <div class="attendance-table-container">
        <h3>Attendance Summary</h3>
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
                <?php
                if ($result->num_rows > 0) {
                    // Output data for each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row['name']) . "</td>
                                <td>" . htmlspecialchars($row['course_year_level']) . "</td>
                                <td>" . htmlspecialchars($row['subject']) . "</td>
                                <td>" . htmlspecialchars($row['status']) . "</td>
                                <td><a href='edit_attendance.php?id=" . $row['id'] . "'>Edit</a></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<?php
$conn->close(); // Close the database connection
?>
