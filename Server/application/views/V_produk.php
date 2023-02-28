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
    <title>Produk</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>Harga</td>
            <td>Stok</td>
        </tr>
        <?php 
            foreach($produk as $row){
                echo
                "
                <tr>
                    <td>".$row->nama."</td>
                    <td>".$row->harga."</td>
                    <td>".$row->stok."</td>
                </tr>
                ";
            }
        ?>
    </table>
</body>
</html>