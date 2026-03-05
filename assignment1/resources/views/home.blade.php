@extends("layout")

@section("content")
<div id="content">
    <h2>Home</h2>
    <p>Welcome to the home page.</p>
    <p>This app has 4 pages:</p>
    <table>
        <ul>
            <li><strong>Home</strong> page, you are here.</li>
            <li><strong>Manage</strong> page, where you can add, remove or modify existing products.</li>
            <li><strong>Search</strong> page, which contains 3 inputs to search based on the product name, and within the lowest and highest price range.</li>
            <li><strong>About</strong> page, which contains information for IT support and general context of this project.</li>
        </ul>
    </table>
</div>
@endsection

