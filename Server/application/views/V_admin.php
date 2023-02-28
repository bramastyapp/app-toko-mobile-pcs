<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 15px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <table>
        <tr>
            <td>Email</td>
            <td>Nama</td>
            
        </tr>
        <?php 
            foreach($admin as $row){
                echo
                "
                <tr>
                    <td>".$row->email."</td>
                    <td>".$row->nama."</td>
                    
                </tr>
                ";
            }
        ?>
    </table>
</body>
</html>