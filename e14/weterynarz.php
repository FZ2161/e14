<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="weterynarz.css">
    <title>Document</title>
</head>
<body>

<?php
$user = "root";
$pass="";
$host = "localhost";
$db="weterynarz";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    echo "err: " . mysqli_connect_error();
}

?>

    <div id="baner">
        <h1>GABINET WETERYNARYJNY</h1>
    </div>
<div id="container">
    <div id="lewy">
        <h2>PSY</h2>
        <?php
        $sql = "SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj = 'pies'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "id: " . $row["id"];
            }
        } else {
            echo "no results";
        }
        ?>
        <h2>KOTY</h2>
        + skrypt 2
    </div>
    <div id="srodkowy">
        <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
        + skrypt 3
    </div>
    <div id="prawy">
        <h2>WETERYNARZ</h2>
        <a href="logo.jpg"><img src="logo-mini.jpg"></a>
        <p>Krzysztof Nowakowski, lekarz weterynarii</p>
        <h2>GODZINY PRZYJĘĆ</h2>
        <table>
            <tr>
                <td>Poniedziałek</td>
                <td>15.00 - 19.00</td>
            </tr>
            <tr>
                <td>Wtorek</td>
                <td>15.00 - 19.00</td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>