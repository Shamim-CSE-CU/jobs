<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Crystal Report</title>
    <style>
        /* Define your CSS styles for the report here */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Crystal Report</h1>

    <table>
        <thead>
            <tr>
                <th>Field 1</th>
                <th>Field 2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row['Field 1'] }}</td>
                    <td>{{ $row['Field 2'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
