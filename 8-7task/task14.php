php
Copy
<?php
class DateDifferenceCalculator {
    public function calculateDateDifference($date1, $date2) {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);

        $years = $interval->y;
        $months = $interval->m;
        $days = $interval->d;

        return "Difference: $years years, $months months, $days days";
    }
}

// Create an instance of DateDifferenceCalculator
$calculator = new DateDifferenceCalculator();

// Sample dates
$date1 = '1981-11-03';
$date2 = '2013-09-04';

// Calculate the difference between dates
$difference = $calculator->calculateDateDifference($date1, $date2);

echo $difference;
?>