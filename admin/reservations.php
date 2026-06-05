<?php
require('../dbconnect/dbconn.php');

$sql = "SELECT * FROM reservations ORDER BY created_at ASC";
$result = mysqli_query($connectionstatus, $sql) or die("Query Failed: " . mysqli_error($connectionstatus));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table { 
            border-collapse: collapse; 
            width: 100%; 
            margin-top: 20px; 
        }
        th, td { 
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; 
        }
        th { 
            background-color: #333; 
            color: white; 
        }
        .logout {
            background-color: #f44336; 
            color: white; 
            padding: 10px 20px; 
            border: none; 
            cursor: pointer;
            border-radius: 5px;
            float: right;
            margin: 10px;
        }
        .logout:hover {
            background-color: #d32f2f;
        }
        .delete-btn {
            background-color: transparent;
            color: white;
            padding: 5px 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #d7d7d791;
        }
    </style>
</head>
<body>
    <!-- Logout Button -->
    <form action="logout.php" method="post" style="text-align:right;">
        <button type="submit" class="logout">Logout</button>
    </form>

    <h2>Reservations List</h2>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Meals</th>
                <th>Persons</th>
                <th>Reservation Date</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['phone']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['food']) ?></td>
                    <td><?= $row['persons'] ?></td>
                    <td><?= date("F j, Y", strtotime($row['reservation_date'])) ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td>
                        <form action="delete_reservation.php" method="post" onsubmit="return confirm('Are you sure you want to delete this reservation?');">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit" class="delete-btn"> 
                                <img src="images/trash.png" alt="png" width="30" height="30">
                            </button>

                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No reservations found.</p>
    <?php endif; ?>
</body>
</html>
