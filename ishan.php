<!-- <!DOCTYPE html>
<html>
<body> -->

<!-- <?php
// class Car {
//     public $color;
//     public $model;
//     public function __construct($color, $model) {
//     $this->color = $color;
//     $this->model = $model;
// }
// public function kura() {
//     return "My car is a " . $this->color . " " . $this->model . "!";
// }
// }

// $myCar = new Car("black", "Merchide");
// echo $myCar -> kura();
// echo "<br>";
// $myCar = new Car("red", "Rolls royace");
// echo $myCar -> kura();
// ?>

// </body>
// </html> -->



// <?php
// class Sojo{
// public $ram;
// public $sita;

// public function __construct($ram, $sita) {
//     $this->ram = $ram;
//     $this ->sita = $sita;
// }
//     public function relation() {
//         return " Hey i am ram " . $this->ram ." " ." and I am sita " . $this->sita . "!";  
//     }
// }
// $mysojo = new Sojo("Handsome","Prety");
// echo $mysojo -> relation();
// echo "<br>";
// $mysojo = new Sojo("irrited person ", "frustated person"); 
// echo $mysojo -> relation();
//?> 

<!-- 
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
//   foreach (filter_list() as $id =>$filter) {
//     echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
//   }
//   ?>
</table>

</body>
</html> -->



<DOCTYPE html>
<HTML>
    <HAED>
        <style>
            table th, tb {
                border: 1px solid red;
                border-collapse: collapse;
            }
            th, td{
                padding: 10px;
            }
        </STYLE>

     </HAED>
    <BODY>
        <table>
            <tr>
                <td> filter name</td>
                <td>Filter ID</td>
            </tr>
            <?php
            foreach(filter_list() as $id=>$filter){
            echo '<tr><td>'. $filter . '</td> <td>' . filter_id($filter) .'</tr></td>';

            }
            ?>
        </table>

    </BODY>
</HTML>

