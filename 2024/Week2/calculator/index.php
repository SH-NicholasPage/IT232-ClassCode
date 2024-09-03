<?php
function calculate($number1, $number2, $operation)
{
    // Perform calculation based on the selected operation
    switch ($operation)
    {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        case '/':
            if ($number2 != 0)
            {
                return $number1 / $number2;
            }
            else
            {
                return 'Cannot divide by zero.';
            }
        case '**':
            return $number1 ** $number2;
        default:
            return 'Unknown operation.';
    }
}

$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Collect input data
    $number1 = isset($_POST['number1']) ? htmlentities($_POST['number1']) : '';
    $number2 = isset($_POST['number2']) ? htmlentities($_POST['number2']) : '';
    $operation = isset($_POST['operation']) ? htmlentities($_POST['operation']) : '';

    // Check if inputs are empty
    if (empty($number1) || empty($number2) || empty($operation))
    {
        $result = 'Please fill in all fields.';
    }
    else
    {
        // Check if inputs are numeric
        if (is_numeric($number1) && is_numeric($number2))
        {
            $number1 = floatval($number1);
            $number2 = floatval($number2);

            // Call the calculate function
            $result = calculate($number1, $number2, $operation);
        }
        else
        {
            $result = 'Invalid numbers provided.';
        }
    }
}
?>

<html lang="en">
<head>
    <title>Calculator</title>

    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
    <div id="calculator">
        <h1>Simple Calculator</h1>
        <form method="post">

            <div>
                <label for="number1" class="col-form-label">Number 1:</label>
                <input type="number" id="number1" class="form-control" step="any"
                       name="number1" required>
            </div>

            <div>
                <label for="number2" class="col-form-label">Number 2:</label>
                <input type="number" id="number2" class="form-control" step="any"
                       name="number2" required>
            </div>

            <div>
                <label for="operation" class="col-form-label">Operation:</label>
                <select id="operation" class="form-select"
                        name="operation" required>
                    <option value="+">Add</option>
                    <option value="-">Subtract</option>
                    <option value="*">Multiply</option>
                    <option value="/">Divide</option>
                    <option value="**">Exponentiate</option>
                </select>
            </div>

            <input type="submit" value="Calculate" class="btn btn-primary mt-3">
        </form>

        <?php if ($result !== ''): ?>
        <div class="result">Result: <?php echo htmlspecialchars($result); ?></div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


