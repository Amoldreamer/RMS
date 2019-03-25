@extends('layouts/master')
@section('dashboard')
<style>
    ul li{
        list-style:none;
        margin-top:10px;
        margin-left:10px;
        
    }
    ul li a{
        text-decoration:none;
        color:white;
        background-color:brown;
        padding:10px;
        display:block;
        width:500px;
        border-radius: 8px;
    }
</style>
    <h3 style="color:white">Hi <?php session_start(); echo $_SESSION['username']; ?></h3>
<ul>
    <li><a href="home">Home</a></li>
    <li><a href="aboutus">About Us</a></li>
    <li><a href="add_restaurant">Add Restaurant</a></li>
    <li><a href="#">Restaurant Report</a></li>
    <li><a href="#">Restaurant Linking</a></li>
    <li><a href="#">My Account</a></li>
    <li><a href="#">Change Password</a></li>
    <li><a href="logout">Logout</a></li>
</ul>
@endsection