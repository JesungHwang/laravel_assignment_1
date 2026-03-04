<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
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

    <h1>Products Application</h1>

    <h2>Products Table</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Code</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->prodName }}</td>
                    <td>{{ $product->prodDesc }}</td>
                    <td>{{ $product->prodCode }}</td>
                    <td>{{ $product->prodCost }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br /> <br />

    <h2>Create New Product</h2>
    <form action="/assignment_1/insert" method="post">
        @csrf 
        <label for="prodName">Product Name: </label>
        <input type="varchar" name="prodName" /> <br /> <br />
        <label for="prodDesc">Product Description: </label>
        <input type="text" name="prodDesc" /> <br /> <br />
        <label for="prodCode">Product Code: </label>
        <input type="int" name="prodCode" /> <br /> <br />
        <label for="prodCost">Cost: </label>
        <input type="decimal" name="prodCost" /> <br /> <br />
        <input type="submit" />
    </form>
    
</body>
</html>
