@extends('layouts.form.master')

@section('content')
    <div class="col-lg-6">
        <p>U beschikt niet over de rol om op deze pagine te komen. U zal eerst moeten inloggen met een ander account wat wel deze rol heeft
        Klik op de knop om opnieuw in te loggen</p>
        <form action="/errorRole" method='POST'>
            {{ csrf_field() }}
            <div class='form-group'>
                <button type="submit" name='button' class="btn btn-primary">Opnieuw inloggen</button>
            </div>
        </form>
    </div>

@endsection


