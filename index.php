<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 70px; /* Add padding to body to account for fixed navbar */
        }

        .login-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background-color: #9097c4;
            padding: 10px;
            transition: height 0.3s; /* Add transition effect for smooth expansion */
            overflow: hidden;
        }

        .login-form {
            background-color: #ffffff;
            padding: 20px;
            padding-top: 2px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            color: #7571f9;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #7571f9;
            border-color: #7571f9;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #6662e7;
            border-color: #6662e7;
        }

        .content {
            padding: 20px;
            margin-top: 70px; /* Add margin to content to account for fixed navbar and login form */
        }

        h1 {
            color: #7571f9;
        }

        p {
            color: #666666;
        }
    </style>
</head>
<body>

                <!-- LANDING PAGE              -->

    <div class="login-container" id="login-container" onclick="toggleLoginForm()">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-form" id="login-form">
                        <h2>LOGIN</h2>
                        <hr>
                        <br>
                        <br>
                        <div class="form-group">
                            <a href="employee/dashboard.php" class="btn btn-primary btn-lg">Log-in As Employee</a>
                        </div>
                        <div class="form-group">
                            <a href="admin/dashboard.php" class="btn btn-primary btn-lg">Log-In As Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container content">
        <h1>Employee Management System</h1>
        <p><strong>Project Documentation</strong></p>
        <!-- Add the rest of your content here -->
        <h2>System Overview</h2>
        <p>
            The system is designed to provide a comprehensive leave management and employee profile management system for a company. It consists of two main components: the Admin Dashboard and the Employee Dashboard. The Admin Dashboard is used by administrators to manage employees, leave requests, and system settings. The Employee Dashboard is used by employees to apply for leave, view their leave status, and manage their profiles.
        </p>

        <h2>Features</h2>

        <h3>Admin Dashboard</h3>
        <ol>
            <li><strong>Manage Employees</strong>
                <ul>
                    <li>Add new employees</li>
                    <li>Edit employee details</li>
                    <li>View list of employees</li>
                </ul>
            </li>
            <br>
            <li><strong>Manage Admins</strong>
                <ul>
                    <li>Add new admins</li>
                    <li>Edit admin details</li>
                    <li>View list of admins</li>
                </ul>
            </li>
            <br>
            <li><strong>Manage Employee Leaves</strong>
                <ul>
                    <li>View leave requests</li>
                    <li>Approve or reject leave requests</li>
                    <li>View leave history</li>
                </ul>
            </li>
            <br>
            <li><strong>Manage System Settings</strong>
                <ul>
                    <li>Edit system configurations</li>
                    <li>Manage holidays and leave types</li>
                </ul>
            </li>
        </ol>

        <h3>Employee Dashboard</h3>
        <ol>
            <li><strong>Apply for Leave</strong>
                <ul>
                    <li>Submit leave requests</li>
                    <li>Select leave type and duration</li>
                </ul>
                <br>
            </li>
            <li><strong>View Leave Status</strong>
                <ul>
                    <li>Check the status of leave requests</li>
                    
                </ul>
                <br>
            </li>
            <li><strong>Edit Profile</strong>
                <ul>
                    <li>Update personal information</li>
                    <li>Change password</li>
                </ul>
                <br>
            </li>
            <li><strong>View Employees</strong>
                <ul>
                    <li>View list of employees</li>
                    <li>Access basic employee information</li>
                </ul>
            </li>
        </ol>

        <h2>System Architecture</h2>
        <p>
            The system is built using a web-based architecture, with the frontend developed using HTML, CSS, and JavaScript. The backend is powered by PHP, which interacts with a MySQL database to store and retrieve data. The system follows a client-server architecture, where the client (browser) interacts with the server (web server running PHP) to access and manipulate data.
        </p>

        <h2>Database Schema</h2>
        <p>
            The database consists of several tables to store information about employees, admins, leave requests, and system settings. The main tables include:
        </p>
        <ul>
            <li><code>employees</code>: Stores information about employees, including their name, contact details, and employment status.</li>
            <br>
            <li><code>admins</code>: Stores information about administrators, including their name, contact details, and admin privileges.</li>
            <br>
            <li><code>leave_requests</code>: Stores information about leave requests, including the employee ID, leave type, start and end dates, and status (approved/rejected).</li>
            <br>
            <li><code>leave_types</code>: Stores information about different types of leave available, such as annual leave, sick leave, etc.</li>
            <br>
            <li><code>system_settings</code>: Stores system configurations, such as holidays and leave entitlements.</li>
        </ul>

        <h2>Security Measures</h2>
        <p>
            The system implements several security measures to protect data and ensure system integrity:
        </p>
        <ul>
            <li>Authentication: Users are required to log in using their credentials (username/password) to access the system.</li>
            <li>Authorization: Different user roles (admin/employee) have different levels of access to system features.</li>
            <li>Data Encryption: Sensitive data, such as passwords, are encrypted before being stored in the database.</li>
            <li>SQL Injection Prevention: Prepared statements are used to prevent SQL injection attacks when interacting with the database.</li>
        </ul>

        <h2>Limitations</h2>
        
        <ul>
            <li>Integration with a calendar system to manage leave requests and view employee availability.</li>
            <li>Email notifications for leave request approvals/rejections and other important updates.</li>
            <li>Reporting and analytics features to track employee leave patterns and trends.</li>
        </ul>
    </div>
    <script>
        function toggleLoginForm() {
            var loginForm = document.getElementById("login-form");
            var loginContainer = document.getElementById("login-container");
            if (loginForm.style.height === "300px") {
                loginForm.style.height = "50px";
                loginContainer.style.height = "50px";
            } else {
                loginForm.style.height = "300px";
                loginContainer.style.height = "300px";
            }
        }
    </script>
</body>
</html>
