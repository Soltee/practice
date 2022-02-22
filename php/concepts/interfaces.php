<?php
/** Classes */

// 1. intefaces Class 
echo "<b>intefaces <br/></b>";
echo "Can be independent but can extend many other intefaces. <br/>";
echo "Must have function definations only. <br/>";
echo "Can only be implemented by abstract or concrete classes. <br/>";
echo "It be implemented by classes to be used. (implements) <br/>";
echo "Generic . (implements) <br/>";

// interface A {}

// interface B {}

echo "interfaces only provide the definations of methods that must be implemented by the concrete class using implements {interface} <br/>";
echo "Force other to have only that methods or functions strictly. If want new, or more methods, they must create their own interface or another class. <br/>";
echo "Eg. packages. <br />";

// interface C extends A,B 
// {
// 	public function getAge();

// 	public function getName();
// }

//Cannot instantiate interfaces
// $c = new C(); //Return Error

// Must contain interfaces methods 
// class Animal implements C
// {

// 	public function getAge()
// 	{
// 		return "Age <br/>";
// 	}

// 	public function getName()
// 	{
// 		return "Name <br/>";
// 	}
// }

// $animal  = new Animal();

echo "<br />2nd Example<br/>";
interface A {
	public function getA();
}

interface B {
	public function getB();
}
class Animal{}

class Dog extends Animal implements A, B
{
	public function getA()
	{

		return "A. <br/>";

	}

	public function getB()
	{

		return "B. <br/>";

	}

}

$dog = new Dog();









