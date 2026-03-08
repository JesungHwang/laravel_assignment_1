@extends("layout")

@section("content")
<style>
        td, th {
            padding: 5px;
        }

        table, td, th {
            border: 1px solid white;
        }

        table {
            border-collapse: collapse;
        }
</style>
<h2>Search Products</h2>
<form method="GET"action="/search">
    <label>Search</label>
    <input type="text" name="search">

    <label for="">Low</label>
    <input type="number" step="0.01" name="low">

    <label for="">High</label>
    <input type="number" step="0.01" name ="high">
    
    <input type="submit" value="Search">
</form>
<br>
@if(!empty($results))
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
    @foreach($results as $product)
    <tbody>
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->prodName }}</td>
            <td>{{ $product->prodDesc }}</td>
            <td>{{ $product->prodCode }}</td>
            <td>{{ $product->prodCost }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
@endif
@endsection