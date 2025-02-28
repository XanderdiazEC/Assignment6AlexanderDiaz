<?php
// Get values from POST or GET
$values = $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST : $_GET;

// Check if all values exist
if (!isset($values['a']) || !isset($values['b']) || !isset($values['c']) || !isset($values['d']) || !isset($values['e'])) {
    echo "Error: Five numerical values required. <a href='form.php'>Back</a>";
    exit;
}

// Call Python script
$command = "python3 data_management.py {$values['a']} {$values['b']} {$values['c']} {$values['d']} {$values['e']}";
$output = shell_exec($command);
$results = json_decode($output, true);

// Display results
echo "<h2>Results:</h2>";

if (isset($results['error']) && $results['error']) {
    echo $results['error'];
} else {
    echo "<p>Original Values: " . implode(", ", $results['original_values']) . "</p>";
    echo "<p>Negative Check: " . $results['negative_check'] . "</p>";
    echo "<p>Average: " . $results['average'] . "</p>";
    echo "<p>" . $results['average_check'] . "</p>";
    echo "<p>" . $results['parity_check'] . "</p>";
    echo "<p>Values > 10: " . implode(", ", $results['greater_than_ten']) . "</p>";
    echo "<p>Sorted List: " . implode(", ", $results['sorted_list']) . "</p>";
}

echo "<a href='form.php'>Back to form</a>";
?>