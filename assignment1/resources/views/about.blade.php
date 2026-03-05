@extends("layout")

@section("content")
<style>
    #container{
        display:grid;
        grid-template-columns: 3fr 1fr;
        gap: 20px;
    }
    #containerChild{
        padding:1rem;
    }
</style>
<div id="container">
    <div id="containerChild">
        <h2>About</h2>
        <p>This laravel app is utilised for users to be able to manage products by modifying, inserting and deleting entries.</p>
        <p>The project is a CRUD web app using Blade views with a create and controller classes.</p>
    </div>
    <div id="containerChild">
        <p>Contact IT Support</p>
        <p>
            <img src="{{ asset('images/phone.png') }}" alt="phone image" width="10px">
            +1 (123) 456 7890
        </p>
        <p>
              
        </p>
    </div>
</div>
@endsection