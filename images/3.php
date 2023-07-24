<?php
echo phpinfo();
exit;


/************ ENCAPSULATION *******/
//Encapsulation is a protection mechanism for the data members and methods present inside the class. In the encapsulation technique, we are restricting the data members from access to outside world end-user.
//=============================



class class1 {
    private $name;
private $no;

}

class class2 {
private function one() {
    $str = "hi welcome";
return $str;

    }
}

$obj = new class2();
//echo $obj->one(); // Error since one is a private fun


//=============================================
/*
class class1{
    function __construct(){
        $this->no = 5;
    }
}

$obj1=new class1();
echo $obj1->no;

*/
//=============================================
/*

class class1{
    public $no;
    function __construct(){
        $this->no = 5;
    }

}

$obj1=new class1();
echo $obj1->no;



*/

//=============================================
/*

class class1{
    protected $no;
    function __construct(){
        $this->no = 5;
    }
     function displayNum() {

    }
}

$obj1=new class1();
echo $obj1->no; // Error


*/



//======== PRotected =====================================
/*

class class1{
    protected $no;
    function __construct(){
        $this->no = 5;
    }
     function displayNum() {
echo $this->no;
    }
}

$obj1=new class1();

$obj1->displayNum();


*/

//======== Iheritance =====================================
/*

class class1{
    protected $no;
    function __construct(){
        $this->no = 5;
    }
}
class class2 extends class1() {

     function displayNum() {
        echo $this->no;
    }
}

$obj2=new class2();

$obj2->displayNum();


*/

/// INHERITANCE WITH PRIVATE VAR
/*

class class1{
    private $no;
    function __construct(){
        $this->no = 5;
    }
}
class class2 extends class1() {

     function displayNum() {
        echo $this->no; // Error since no is a private variable
    }
}

$obj2=new class2();

$obj2->displayNum();


*/
/////////////////////////
/*

class class1{
    private $no;
    function __construct(){
        $this->no = 5;
    }
    function displayNum() {
        echo $this->no; //  private variable can be accessed inside this class
    }
}
class class2 extends class1() {

}

$obj2=new class2();

$obj2->displayNum(); // DisplayNum is a public function which is extended by class2. So it can be accessible out side the class


*/

////////// Change the function to protected

/*

class class1{
    private $no;
    function __construct(){
        $this->no = 5;
    }
    protected function displayNum() {
        echo $this->no; //  private variable can be accessed inside this class
    }
}
class class2 extends class1() {

}

$obj2=new class2();

$obj2->displayNum(); // this will throw error since protected fun cannot be accessed by class2 obj

*/

/////////////////////////////

/*
class class1{
    private $no;
    function __construct(){
        $this->no = 5;
    }
    protected function displayNum() {
        echo $this->no; //  private variable can be accessed inside this class
    }
}
class class2 extends class1{
    function displayParentNum() {
        $this->displayNum();
    }
}

$obj2=new class2();

$obj2->displayParentNum(); // this will throw error since protected fun cannot be accessed by class2 obj
*/
//////////////////////////////

/*

class class1{
    private $no;
    function __construct(){
        $this->no = 5;
    }
     protected function displayNum() {
        echo $this->no; //  private variable can be accessed inside this class
    }
}
class class2 extends class1{
     function displayNum() { // parent's public function cannot be changed to private or protected.
       //  $this->displayNum(); // Error - recursive loop

        parent::displayNum();
    }
}

$obj2=new class2();

$obj2->displayNum(); // this will throw error since protected fun cannot be accessed by class2 obj
*/



//*** Static members **/
/*
class class1 {
    static public $no = 10;

}

$obj = new class1();

echo $obj->no; // Static var can nnot instantiated by obj
*/
/*********************/



class class1 {
    static public $no = 10;
    public $num = 20;

    public static function fun() {
       // echo $this->num; // This is worng. inside static function we cannot access normal variable with $this.

        echo self::$no;
    }

}
class1::fun();