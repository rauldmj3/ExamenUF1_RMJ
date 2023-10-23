<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table>
        <tr>
            <th>Nickname</th>
            <th>Email</th>
        </tr>
        <?php
            // EXERCICI 5
            $users=getAllUsers();
            
            foreach ($users as $id => $value) {
                if($value["email"]=="rauldmj2134@gmail.com") break;
                else echo "<tr>
                    <td>".$value["nickname"]."</td>
                    <td>".$value["email"]."</td>
                </tr>";
            }

        ?>
    </table>
</body>
</html>