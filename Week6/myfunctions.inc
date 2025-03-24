<?php
// Function to print the header with a title
function html_header($pageTitle)
{
    echo "<html><head><title>$pageTitle</title></head>";
    echo "<body>";
}

// Function to print the header text in <h1> tags
function html_h1($text)
{
    echo "<h1>$text</h1>";
}

// Function to close the body and html tags
function html_footer()
{
    echo "</body>";
    echo "</html>";
}

function calculatetax($salary, $rate = 40, $tax_allowance = 0)
{
    $taxable_salary = max($salary - $tax_allowance, 0);
    $tax = ($taxable_salary * ($rate / 100));
    return $tax;
}


	


// New function to display text inside <h2> tags
function html_h2($text)
{
    echo "<h2>$text</h2>";
}
?>
