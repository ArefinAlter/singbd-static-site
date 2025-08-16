<?php
echo "<h1>Domain Test</h1>";
echo "<p><strong>Current Domain:</strong> " . $_SERVER['HTTP_HOST'] . "</p>";
echo "<p><strong>Document Root:</strong> " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p><strong>Script Path:</strong> " . $_SERVER['SCRIPT_NAME'] . "</p>";
echo "<p><strong>Request URI:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";
echo "<p><strong>Server Name:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<hr>";
echo "<p>If you can see this file, the domain is working correctly.</p>";
?>
