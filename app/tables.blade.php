<!DOCTYPE html>
<html>
<head>
    <title>Database Tables</title>
</head>
<body>
    <h1>Database Tables</h1>
    <ul>
        @foreach ($tables as $table)
            <li>{{ array_values((array)$table)[0] }}</li>
        @endforeach
    </ul>
</body>
</html>