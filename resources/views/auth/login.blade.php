@extends('layout.base')

@section('content')
<section class="col-12 col-md-6 offset-md-3 my-5 p-5 bg-white shadow-sm">
    <div class="d-flex flex-column">
        <h3 class="fw-bold py-4 mx-auto">Login</h3>
        <form method="post" action="login" class="needs-validation">
            @csrf
            <x-forms.input 
                type="text"
                name="email" 
                label="Email" 
                inputSize="col-10">
            </x-forms.input>
            <x-forms.input 
                type="password"
                name="password" 
                label="Password" 
                inputSize="col-10">
            </x-forms.input>

            <div class="d-flex p-4">
                <button type="submit" class="btn btn-success mx-auto">Login</button>
            </div>
        </form>        
    </div>    
</section>
@endsection