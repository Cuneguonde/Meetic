<?php
class simpleClass {
    public $var='a default value';
    public function displayVar() {
        echo simpleClass::class;
        echo $this->var; 
    }
}
class ExtendClass extends SimpleClass {
    function displayVar()
    {
        echo "Extending Class\n";
        parent::displayVar();
    }
}
    $obj = new simpleClass();
echo $obj->var;
$extended = new ExtendClass();
$extended->displayVar();
?>

