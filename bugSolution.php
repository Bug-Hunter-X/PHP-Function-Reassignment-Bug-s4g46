function myFunc() {
  //Some code here
}

myFunc(); // Calling the function

//Prevent reassignment using a class:
class MyClass {
  public function myFunc() {
    //Some code here
  }
}

$myClass = new MyClass();
$myClass->myFunc(); //Calling the method via an object

// Alternatively, use function name checks before calling functions
if (is_callable('myFunc')){
  myFunc();
} else {
  //Handle the error appropriately
}
