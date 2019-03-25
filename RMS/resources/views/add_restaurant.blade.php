@extends('layouts/master')
@section('add_restaurant')
    <style>
        *{
            margin:0;
            padding:0;
        }
        section{
            margin-left:20px;
            padding-bottom:20px;
        }
        h1{
            color:white;
        }
        input{
            display:block;
            height:20px;
            width:300px;
            border-radius:8px;
            border:3px;
            padding:3px;
            margin-top:10px;
        }
        select{
            display:block;
            height:20px;
            width:300px;
            border-radius:8px;
            border:3px;
            padding:3px;
            margin-top:10px;
        }
        input[type="file"]{
            border-radius:8px;
        }
        textarea{
            display:block;
            height:50px;
            width:300px;
            border-radius:8px;
            border:3px;
            padding:3px;
            margin-top:10px;
        }
    </style>
    <script>
        function fetchCities(str)
{
    var req=new XMLHttpRequest();
    req.open('get','cities?state='+str,true);
    req.send();
    req.onreadystatechange=function(){
        if(req.readyState == 4 && req.status==200)
        {
            document.getElementById('cities').innerHTML=req.responseText;
        }
    };
}
    </script>
    <section>
        <h1>ADD RESTAURANT</h1>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p style="color:white">{{$error}}</p>
            @endforeach
        @endif
        <form method="POST" action="restaurant" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" name="name" placeholder="Restaurant Name" />
            
            <input type="text" name="kind" placeholder="Restaurant Type" />
            
            <input type="email" name="email" placeholder="Restaurant Email" />
            
            <textarea name="family" placeholder="Restaurant Family"></textarea>
            
            <textarea name="cuisine" placeholder="Cuisine"></textarea>
            
            <textarea name="about" placeholder="About Restaurant"></textarea>
            
            <input type="number" name="phone" placeholder="Restaurant Phone" />
            
                    <select onChange="fetchCities(this.value)" name="state">
                    <option>Select State</option>
                    <option>Arkansas</option>
                    <option>California</option>
                    <option>Florida</option>
                    <option>Maryland</option>
                    <option>North Carolina</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            
                <select id="cities" name="city">
                    <option>First Select State</option>
                </select>
            
            <input type="text" name="address" placeholder="Restaurant Address" />
            
            <input type="file" name="image" placeholder="Image" />

            <input type="submit" name="submit" value="submit" />
        </form>
    </section>
@endsection