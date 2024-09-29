<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Recognition System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            font-size: 28px;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .panel-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-bottom: 20px;
        }

        .panel {
            width: 15%;
            padding: 10px;
            background-color: white;
            border: 1px solid #ccc;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 12px;
        }

        .frame-container {
            width: 90%;
            background-color: #fff;
            border: 2px solid #333;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .camera-name-container {
            display: flex;
            justify-content: space-between;
            height: 400px;
        }

        .left-panel, .right-panel {
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .left-panel {
            width: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            background-color: #eaeaea;
        }

        .right-panel {
            width: 30%;
            overflow-y: auto;
            padding: 15px;
        }

        .summary-container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .summary-title {
            font-size: 24px;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <!-- Title -->
    <div class="header">
        FACE RECOGNITION SYSTEM
    </div>

    <!-- Main Container -->
    <div class="main-container">
        
        <!-- 3 Panels (Student, Admin, Attendance List) -->
        <div class="panel-container">
            <div class="panel">Student Panel</div>
            <div class="panel">Admin Panel</div>
            <div class="panel">Attendance List Panel</div>
        </div>

        <!-- Frame Container (Face Recognition and Name List Section) -->
        <div class="frame-container">
            <div class="camera-name-container">
                <!-- Left Panel (Face Recognition Camera) -->
                <div class="left-panel">
                    <p>Face Recognition Camera</p>
                </div>

                <!-- Right Panel (List of Names) -->
                <div class="right-panel">
                    <p>List of Names will appear here</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Attendance Summary (Separate Container) -->
    <div class="summary-container">
        <div class="summary-title">Attendance Summary</div>
        <p>Summary details go here...</p>
    </div>

</body>
</html>
