<?php

//crear clase

class miClase
{
	// Propiedades
	
	public $mipropiedad='Esto es variable.';
		
	//Métodos
	
	public function miMetodo()
	{
			echo "Hola Mundo";
                        echo "<hr/>";
		return NULL;
		}
	}

$miObjeto = new miClase();
$miObjeto -> miMetodo();
echo "<br/>";
echo $miObjeto->mipropiedad;
echo "<br/>";
echo "<hr/>";
echo "<hr/>";
$miObjeto->mipropiedad = "Otra cosa";
echo $miObjeto->mipropiedad;
echo "<br/>";
echo "<hr/>";
echo "<hr/>";

$miObjeto2 = new miClase();
echo  $miObjeto2->mipropiedad;
echo "<hr/>";
echo "<hr/>";

class A
  {
		function foo()
		{
		if (isset($this)) {
							echo '$this is defined (';
							echo get_class($this);
							echo ")\n";
			} else {
		echo "\$this is not defined.\n";
}
}
}

$objeto1 = new A;
$objeto1 -> foo();

echo "<hr/>";
echo "<hr/>";

class SimpleClass
{
	// invalid member declarations:
// 	public $var1 = 'hello '.'world';
// 	public $var2 = <<<EOD
// hello world
// EOD;
// 	public $var3 = 1+2;
// 	public $var4 = self::myStaticMethod();
// 	public $var5 = $myVar;
	// valid member declarations:
	
	//Esto no se puede hacer aquí
// 	define('myconstant','mivalor'); 
	public $pi=3.1418;
//	public $var6 = myConstant;
// 	public $var7 = self::pi;
	public $var8 = array(true, false);
	function displayVar2()
	{
		echo "Original class\n";
		
	}	
}

$objeto2= new SimpleClass();
echo $objeto2 -> pi;
echo "<br/>";
// echo $objeto2 -> var7;
echo "1<hr/>";
class ExtendClass extends SimpleClass //el 1ero hereda todo del 2o
{
	// Redefine the parent method
	function displayVar()
	{
		echo "Extending class\n";
		parent::displayVar2();
	}
}
$extended = new ExtendClass();
echo "2<hr/>";
$extended -> displayVar();
echo "<hr/>";
$extended -> displayVar2();
echo "<hr/>";echo "<hr/>";echo "<hr/>";

class MyDestructableClass {
	function __construct() {
		print "In constructor\n";
		$this->name = "MyDestructableClassss";
	}
	function __destruct() {
		print "Destroying " . $this->name . "\n";
	}
}
$obj = new MyDestructableClass();

echo "<hr/>";echo "<hr/>";echo "<hr/>";

class MyClass
{
	public $public = 'Public';
	protected $protected = 'Protected';
	private $private = 'Private';
	function printHello()
	{
		echo $this->public;
		echo $this->protected;
		echo $this->private;
	}
}

$obj= new MyClass();
// echo $obj->private;
$obj->printHello();

        
?>


