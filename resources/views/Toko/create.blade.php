@extends('layout.app')

@section('content')
    <h1>create</h1>

    <form action="" method="POST">
        @csrf

        <div class="input-group">
            <label for="site"></label>
            <input type="text" name="site" id="site" required>
        </div>

        <div class="input-group">
            <label for="site"></label>
            <input type="text" name="site" id="site" required>
        </div>

        <div class="input-group">
            <label for="site"></label>
            <input type="text" name="site" id="site" required>
        </div>
        
        <div class="input-group">
            <label for="site"></label>
            <input type="text" name="site" id="site" required>
        </div>

        <div class="input-group">
            <label for="site"></label>
            <input type="text" name="site" id="site" required>
        </div>
    </form>
@endsection
