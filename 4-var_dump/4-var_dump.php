<pre>
<?php
    $x = 15;
    var_dump($x); // Output : int(15)
    $x = 12.53;
    var_dump($x); // Output : float(12.5299999999999993605115378159098327159881591796875)
    $x = true;
    var_dump($x); // Output : bool(true)
    $x = "Minter Coder";
    var_dump($x); // Output : string(12) "Minter Coder"
    $x = array("Minter Coder", 12.53, false);
    var_dump($x);
    /*
        Output :
        array(3) {
        [0]=>
        string(12) "Minter Coder"
        [1]=>
        float(12.5299999999999993605115378159098327159881591796875)
        [2]=>
        bool(false)
        }

    */

    class Employee {
        private $firstName;
        private $lastName;
        public function __construct($firstName, $lastName)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

    }
    $e = new Employee("Minter Coder", 12.53);
    var_dump($e);
    /*
        Output:
        object(Employee)#1 (2) {
      ["firstName":"Employee":private]=>
      string(12) "Minter Coder"
      ["lastName":"Employee":private]=>
      float(12.5299999999999993605115378159098327159881591796875)
    }


    */

var_dump(get_defined_vars());
?>
</pre>
