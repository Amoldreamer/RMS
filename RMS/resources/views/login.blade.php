@extends('layouts/master')
@section('login')
<style>
    #loginbox{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        color:white;
    }
    #loginbox input[type=text]{
        display:block;
        border-radius:4px;
        border:blue;
        padding:5px;
    }
    #loginbox input[type=password]{
        display:block;
        border-radius:4px;
        border:blue;
        padding:5px;
    }
    #loginbox input[type=submit]{
        display:block;
        border-radius:4px;
        border:blue;
        padding:5px;
        color:white;
        background-color:rgb(178,70,26);
    }
    #loginbox input[type=submit]:hover{
        cursor:pointer;
        background-color:rgb(255,78,6);
    }
</style>
<div id='loginbox'>
    @if(isset($message))
        {{$message}}
    @endif
    <form method="POST" action="login">
        {{csrf_field()}}
        Username: 
        <input type="text" name="username" value="<?php echo isset($_POST['username'])? $_POST['username']: '' ?>" /><br>
        Password: 
        <input type="password" name="password" /><br>
        <input type="submit" name="submit" value="submit" />
    </form>
</div>
@endsection