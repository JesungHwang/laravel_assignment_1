<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blade Templates Demo</title>
    <style>
        td, th {
            padding: 5px;
        }

        table, td, th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>

    <h1>Blade Template Demo</h1>
    <h2>Products</h2>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Description</th>
                <th>Code</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignment_1 as $product)
                <tr>
                    <td>{{ $product["prodName"] }}</td>
                    <td>{{ $product["prodDesc"] }}</td>
                    <td>{{ $product["prodCode"] }}</td>
                    <td>{{ $product["prodCost"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br /> <br />

    <h2>Products</h2>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Description</th>
                <th>Code</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < count($assignment_1); $i++)
                <tr>
                    <td>{{ $assignment_1[$i]["prodName"] }}</td>
                    <td>{{ $assignment_1[$i]["prodDesc"] }}</td>
                    <td>{{ $assignment_1[$i]["prodCode"] }}</td>
                    <td>{{ $assignment_1[$i]["prodCost"] }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

    @if ($status == "success")
        <p style="color:green;">Success message!</p>
    @elseif ($status == "error")
        <p style="color:red">Error message</p>
    @else 
        <p style="color:blue">Unkown status</p>
    @endif

    <p>Value: {{ $value }}</p>
    <p>Value: <?php echo $value ?></p>
    
    <p>Shared Value: {{ $sharedvalue }}</p>

    <p>Maybe set: {{ $maybe ?? 'default value for maybe!' }}</p>

</body>
</html>
