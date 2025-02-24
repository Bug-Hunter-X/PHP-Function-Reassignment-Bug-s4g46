function myFunc() {
  //Some code here
}

myFunc(); // Calling the function without any issues

//Later in the code:
myFunc = 'some string'; // Reassigning the function to a string

myFunc(); // This will cause a PHP error because myFunc is no longer a function