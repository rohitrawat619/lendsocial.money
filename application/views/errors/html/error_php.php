<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Error</title>
</head>
<body>
    <h1>An error occurred</h1>
    <p><?= isset($message) ? $message : 'An unknown error occurred.'; ?></p>
</body>
</html>
