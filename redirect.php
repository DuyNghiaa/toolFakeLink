<!-- import in code snippets on your web ! -->
<!-- php snippets -->


<?php
// Get the real URL from the query string
$realUrl = isset($_GET['url']) ? $_GET['url'] : '';

// Validate the URL
if (filter_var($realUrl, FILTER_VALIDATE_URL)) {
    // Redirect to the real URL
    header("Location: " . $realUrl);
    exit;
} else {
    echo "Invalid URL!";
}
