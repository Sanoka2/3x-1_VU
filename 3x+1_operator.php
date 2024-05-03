<?php

// CollatzCalculator.php
require '3x+1_FunctionCollector.php';

class CollatzCalculator {
    private $startNumber;
    private $endNumber;
    private $currentNumber;
    private $maxValue;
    private $iterationsCount;
    private $calculations;

    public function __construct($start, $end) {
		$start = $_GET['startNumber'];
		$end = $_GET['endNumber'];
        $this->startNumber = $start;
        $this->endNumber = $end;
        $this->currentNumber = $start;
        $this->maxValue = $start;
        $this->iterationsCount = 0;
        $this->calculations = [];
    }

    public function run() {
        echo "Calculations:<br>";
        while ($this->currentNumber > $this->endNumber) {
            $this->currentNumber = Calculations($this->currentNumber);
            echo "$this->currentNumber ";
            if ($this->currentNumber >= $this->maxValue) {
                $this->maxValue = $this->currentNumber;
            }
            $this->iterationsCount++;
        }
        echo "<br> Max number: $this->maxValue";
        echo "<br> Iterations count: $this->iterationsCount";
    }

    private function calculate($number) {
        return Calculations($number);
    }
}

// index.php
$startNumber = isset($_GET['startNumber']) ? intval($_GET['startNumber']) : 1;
$endNumber = isset($_GET['endNumber']) ? intval($_GET['endNumber']) : 100;

$collatzCalculator = new CollatzCalculator($startNumber, $endNumber);
$collatzCalculator->run();

?>
