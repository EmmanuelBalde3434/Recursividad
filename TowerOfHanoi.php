<?php
class TowerOfHanoi {
    private $totalDisks;

    public function __construct($totalDisks) {
        $this->totalDisks = $totalDisks;
    }

    public function solve() {
        $this->moveTower($this->totalDisks, 1, 3, 2);
    }

    private function moveTower($numDisks, $start, $end, $temp) {
        if ($numDisks == 1) {
            $this->moveOneDisk($start, $end);
        } else {
            $this->moveTower($numDisks - 1, $start, $temp, $end);
            $this->moveOneDisk($start, $end);
            $this->moveTower($numDisks - 1, $temp, $end, $start);
        }
    }

    private function moveOneDisk($start, $end) {
        echo "<p style='text-align:center;'>Move one disk from " . $start . " to " . $end . "</p>\n";
    }
}
?>

