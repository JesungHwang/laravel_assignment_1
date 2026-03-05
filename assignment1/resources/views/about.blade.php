@extends("layout")

@section("content")
<style>
    #container{
        display:grid;
        grid-template-columns: 3fr 1fr;
        gap: 20px;
    }
</style>
<div id="container">
    <div>
        <h2>About</h2>
        <p>This laravel app is utilised for users to be able to manage products by inserting, modifying and deleting entries.</p>
        <p>The project is a CRUD web app using Blade views with a create and controller classes.</p>
    </div>
    <div>
        <h2>Contact IT Support</h2>
        <p>
            <img src="{{ asset('images/phone.png') }}" alt="phone image" width="10px">
            Office: +1 (123) 456 7890
        </p>
        <p>
            <img src="{{ asset('images/phone.png') }}" alt="phone image" width="10px">
            Admin: +1 (123) 456 7890
        </p>
    </div>
</div>
@endsection