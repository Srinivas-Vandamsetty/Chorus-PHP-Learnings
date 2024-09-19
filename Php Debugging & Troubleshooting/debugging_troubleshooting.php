<?php

// Example of using var_dump and print_r for debugging.
function debugData($data) {
    echo "Debugging with var_dump and print_r:<br>";
    var_dump($data);
    echo "<br>";
    print_r($data);
    echo "<br><br>";
}

$data = ['name' => 'Alice', 'age' => 25, 'email' => 'alice@example.com'];
debugData($data);


// Additional debugging checkpoints
// 1. Check API responses by printing or logging them after making API calls.
// 2. Use XDebug or a similar tool to step through the code to catch logical errors or exceptions.
// 3. Check network errors or timeouts by inspecting API or database call latency.
// 4. Use tools like Postman to verify your API and database endpoints are functioning correctly.

?>
