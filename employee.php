<?php
class Employee {
    private $name;
    private $designation;
    private $salary;
    private static $companyName;

    public function setName($name) {
        $this->name = $name;
    }
	public function setDesignation($designation) {
        $this->designation = $designation;
    }
	public function setSalary($salary) {
        $this->salary = $salary;
    }
	public function getName() {
        return $this->name;
    }
	public function getDesignation() {
        return $this->designation;
    }
	public function getSalary() {
        return $this->salary;
    }
	public static function setCompanyName($name) {
        self::$companyName = $name;
    }
	public static function getCompanyName() {
        return self::$companyName;
    }
}

$employee1 = new Employee();
$employee1->setName("John");
$employee1->setDesignation("Manager");
$employee1->setSalary(5000);

$employee2 = new Employee();
$employee2->setName("Sarah");
$employee2->setDesignation("Developer");
$employee2->setSalary(4000);

Employee::setCompanyName("ABC Company");

echo "Employee 1 Details:<br>";
echo "Name: " . $employee1->getName() . "<br>";
echo "Designation: " . $employee1->getDesignation() . "<br>";
echo "Salary: $" . $employee1->getSalary() . "<br>";
echo "Company: " . Employee::getCompanyName() . "<br><br>";

echo "Employee 2 Details:<br>";
echo "Name: " . $employee2->getName() . "<br>";
echo "Designation: " . $employee2->getDesignation() . "<br>";
echo "Salary: $" . $employee2->getSalary() . "<br>";
echo "Company: " . Employee::getCompanyName() . "<br>";
?>