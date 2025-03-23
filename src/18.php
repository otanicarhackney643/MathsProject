<?php
// Define constants
$projectId = "MathsProject";
$rootPath = "/path/to/your/project/root";

// Get the current directory and extract its name as the project name
$currentDirName = explode("/", basename($_SERVER['PHP_SELF']));

// Initialize the path variables for different PHP versions
if (phpversion() >= "5.4") {
    $projectRootPath = $rootPath . DIRECTORY_SEPARATOR;
} else {
    $projectRootPath = '';
}

// Construct the file paths based on the project root and current directory
$filePaths[] = "$projectRootPath{$currentDirName[0]}";
if (isset($_SERVER['PHP_SELF'])) {
    $filePaths[] = "$projectRootPath{$_SERVER['PHP_SELF']}";
} else {
    $filePaths[] = "/";
}

// Get the current page name and extract its path
$currentPagePath = $_SERVER['REQUEST_URI'];

// Append a unique file extension to the project's root directory if it doesn't exist already
if (!file_exists($projectRootPath)) {
    $projectRootPath = $rootPath;
}
$filePaths[] = "$projectRootPath{$currentDirName[0]}.$pageExtension";
$filePaths[] = $projectRootPath."$currentPagePath";

// Set the PHP configuration variables
ini_set('session.use_trans_sid', 1);
ini_set('session.cookie_lifetime', 604800); // session cookie lifetime in seconds
ini_set('session.cookie_secure', true);      // secure session cookies

// Output the paths
print_r($filePaths);
?>
