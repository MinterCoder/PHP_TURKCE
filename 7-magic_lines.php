<?php
namespace App\Models;
class User {
    public function __construct()
    {
        echo "User sınıfı içerisinde namespace ismi :  " . __NAMESPACE__ . "<br>"; // User sınıfı içerisinde namespace ismi : App\Models
    }
}
$user = new User();

class Car {
    public function __construct()
    {
        echo "Full path : " . Car::class . "<br>"; // Full path : App\Models\Car
    }
}
$car = new Car();

echo "SATIR NUMARASI : " . __LINE__ . "<br>"; // SATIR NUMARASI : 2
echo "Dosya ismi ve full path : " . __FILE__ . "<br>"; // // Dosya ismi ve full path : /opt/lampp/htdocs/PHP_TURKCE/7-magic_lines.php
echo "Klasör İsmi : " . __DIR__ . "<br>"; // Klasör İsmi : /opt/lampp/htdocs/PHP_TURKCE
function MyPhp(){
    echo "Fonksiyon ismi : " . __FUNCTION__ . "<br>";
}
MyPhp();

class Employee {
    function getEmployeeName(){
        echo "Class ismi ve fonksiyon ismini birlikte yazalım : ". __CLASS__ . " " . __FUNCTION__ . "<br>"; // Class ismi ve fonksiyon ismini birlikte yazalım : Employee getEmployeeName
    }

}
$employee = new Employee();
$employee->getEmployeeName();

class Calisan {
    function getCalisanName(){
        echo "__METHOD__ ciktisi : " . __METHOD__ . "<br>"; // __METHOD__ ciktisi : Calisan::getCalisanName
    }
}
$calisan = new Calisan();
$calisan->getCalisanName();

trait Yazdirilabilir {
    public function yazdir($mesaj) {
        echo $mesaj . " trait name : " . __TRAIT__ . "<br>"; // mesaj trait name : Yazdirilabilir
    }
}

class Yazici {
    use Yazdirilabilir;
}

$yazici = new Yazici();
$yazici->yazdir("mesaj");



?>