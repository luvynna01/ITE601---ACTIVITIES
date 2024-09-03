<?php

class payroll {
	private string $firstname = "John";
 	private string $lastname = "Volta";

	private float $tax = 50;
	private float $salary = 500;

	public function computeNet(): float {
	$sub = $this->salary - $this->tax;
	
	}

	public function	getEmployeeName(): string {
		return $this->lastname. ", " . $this->firstname;
	}
	
	public function	displayNet(): string {
		return number_format($this->computeNet(),2);
	}
	// public function displayNet(): string {
	// return number_format ($this->computeNet(),2);

	// ｝
}

	$payroll =  new payroll();
	echo "Employee Name:". $payroll->getEmployeeName(); "‹br/›"; 
	echo "Final Net". $payroll->displayNet();

?>