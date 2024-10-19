<?php

function newline()
{
    echo "<br>";
}


class Employee
{

    private $name;
    private $salary;

    public function __construct($name, $salary)
    {

        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

class Manager extends Employee
{
    private $department;
    public function __construct($name, $salary, $department)
    {
        parent::__construct($name, $salary);
        $this->department = $department;
    }


    public function getDepartment()
    {
        return $this->department;
    }



    public function displayManager()
    {
        echo "Manager: " . $this->getName() . " || Salary: " . $this->getSalary();
        newline();
        echo "Department: " . $this->getDepartment();
    }
}

class Programmer extends Employee
{
    private $programmingLanguage;

    public function __construct($name, $salary, $programmingLanguage)
    {
        parent::__construct($name, $salary);
        $this->programmingLanguage = $programmingLanguage;
    }

    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    public function displayLanguage()
    {

        echo "Name: " . $this->getName() . " || Salary: " . $this->getSalary() . " || Language: " . $this->getProgrammingLanguage();
    }
}




$manager = new Manager("Boiser", 120000, "SALES");
$manager->displayManager();
$programmer = new Programmer("Lesther", 10000, "PHP");
newline();
$programmer->displayLanguage();
