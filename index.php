<?php

// Create an array of student information
$students = [
    [
        'name' => 'John',
        'age' => 20,
        'favorite_subjects' => ['Math', 'Science']
    ],
    [
        'name' => 'Alice',
        'age' => 18,
        'favorite_subjects' => ['History', 'English']
    ],
    [
        'name' => 'Bob',
        'age' => 19,
        'favorite_subjects' => ['Art', 'Music']
    ]
];

// Function to calculate the average age of students
function calculateAverageAge($students) {
    $totalAge = 0;
    foreach ($students as $student) {
        $totalAge += $student['age'];
    }
    return $totalAge / count($students);
}

// Function to find and return the student with the most favorite subjects
function findStudentWithMostSubjects($students) {
    $mostSubjects = 0;
    $studentWithMostSubjects = null;

    foreach ($students as $student) {
        $numSubjects = count($student['favorite_subjects']);
        if ($numSubjects > $mostSubjects) {
            $mostSubjects = $numSubjects;
            $studentWithMostSubjects = $student;
        }
    }

    return $studentWithMostSubjects;
}

// Calculate the average age
$averageAge = calculateAverageAge($students);
echo "Average Age: $averageAge\n";

// Find and display the student with the most favorite subjects
$studentWithMostSubjects = findStudentWithMostSubjects($students);
echo "Student with Most Favorite Subjects: \n";
echo "Name: " . $studentWithMostSubjects['name'] . "\n";
echo "Age: " . $studentWithMostSubjects['age'] . "\n";
echo "Favorite Subjects: " . implode(', ', $studentWithMostSubjects['favorite_subjects']) . "\n";

// Encode the student information array into JSON format
$jsonData = json_encode($students);

// Print JSON
echo "\nJSON Data:\n";
echo $jsonData . "\n";

// Decode the JSON data back into a PHP array
$decodedData = json_decode($jsonData, true);

// Loop through the decoded array and display the information of each student
echo "\nDecoded Student Information:\n";
foreach ($decodedData as $student) {
    echo "Name: " . $student['name'] . "\n";
    echo "Age: " . $student['age'] . "\n";
    echo "Favorite Subjects: " . implode(', ', $student['favorite_subjects']) . "\n";
    echo "\n";
}
?>
