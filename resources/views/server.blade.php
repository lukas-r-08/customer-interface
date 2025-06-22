<!DOCTYPE html>
<html>
<head>
    <title>Server Steuerung</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <server-control :server-id="defaultServerId"></server-control>
    </div>
</body>
</html>
