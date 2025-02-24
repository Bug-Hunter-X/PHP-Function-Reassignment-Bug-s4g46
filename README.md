# PHP Function Reassignment Bug

This repository demonstrates a common but easily overlooked bug in PHP: the reassignment of functions to other data types.  This can lead to unexpected runtime errors if the function is later called after reassignment. The solution shows how to prevent this issue by using appropriate coding practices.

## Bug
The `bug.php` file shows how a function can be unintentionally reassigned to a string. Calling the function after this reassignment results in a fatal error.

## Solution
The `bugSolution.php` demonstrates how to avoid this bug by implementing safeguards that ensure functions cannot be reassigned.