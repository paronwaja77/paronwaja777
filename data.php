<?php

// URL to scrape from
$url = 'http://157.230.43.220/data-hongkong-lotto/';

// Get the HTML content from the URL
$content = file_get_contents($url);

// Check if content is successfully fetched
if (!$content) {
    die("Gagal mengambil data dari $url");
}

// Initialize DOMDocument and load the content
$doc = new DOMDocument();
libxml_use_internal_errors(true);  // Disable warnings for malformed HTML
$doc->loadHTML($content);

// Initialize DOMXPath to query the document
$xpath = new DOMXPath($doc);

// Use XPath to select all tables in the HTML
$tables = $xpath->query('//table');

// Array of titles for each table (you can change these titles as needed)
$tableTitles = [
    "Data HK Lotto",
    "Data Hongkong Lotto 2025",
];

// Array of new headers for the <tr class="tabelth">
$newHeaders = [
    "SENIN", "SELASA", "RABU", "KAMIS", "JUMAT", "SABTU", "MINGGU"
];

// Check if any tables are found
if ($tables->length > 0) {
    // Loop through all tables and output each one with a title
    $titleIndex = 0;
    foreach ($tables as $table) {
        // Ensure $table is a valid DOMElement before using hasAttribute()
        if ($table instanceof DOMElement && $table->hasAttribute('id') && $table->getAttribute('id') == 'dtTable') {
            $table->removeAttribute('id');  // Remove the id
            $table->setAttribute('class', 'data');  // Set the new class attribute
        }
        
        // Output the <h2> title for this table
        $title = isset($tableTitles[$titleIndex]) ? $tableTitles[$titleIndex] : 'Tabel Tanpa Judul';
        echo "<h2 class='title-head'><a href='/'>$title</a></h2>";
        
        // Find the <tr class="header"> in the table and change it to <tr class="tabelth">
        $headerRow = $xpath->query('.//tr[@class="header"]', $table)->item(0);
        
        // If header row is found, update class and replace its <th> content
        if ($headerRow instanceof DOMElement) {
            $headerRow->setAttribute('class', 'tabelth'); // Change class
            
            // Get all <th> elements inside the header row
            $thElements = $xpath->query('.//th', $headerRow);
            $i = 0;
            foreach ($thElements as $th) {
                if (isset($newHeaders[$i])) {
                    $th->nodeValue = $newHeaders[$i];
                    $i++;
                }
            }
        }
        
        // Output the modified table
        echo $doc->saveHTML($table);
        echo "";  // Optionally add a break between tables
        
        // Increment the index for titles
        $titleIndex++;
    }
} else {
    // If no tables are found, output a message
    echo "No tables found.";
}
?>
