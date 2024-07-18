<?php
// searchbar.php
var_dump($_GET);
require_once('database.php');
require_once('DAO.php');

$dao = new DAO($conn);

// Check if the search query is set
if (!array_key_exists('query', $_GET) || empty($_GET['query'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Search query is required']);
    exit;
}
// Get the search query from the request
$searchQuery = $_GET['query'];

// Perform the search query
$results = $dao->searchAllTables($searchQuery);

// Return the search results in JSON format
header('Content-Type: application/json');
echo json_encode($results);
?>