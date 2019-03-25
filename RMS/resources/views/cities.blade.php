<?php
    $state=$_GET['state'];
    $c1=array('Little Rock','Fayetteville','Fort Smith', 'Hot Springs','Jonesboro');
    $c2=array('Los Angels','San Fransisco','San Diego','Sacramento','San Jose');
    $c3=array('Orlando','Miami','Jacksonville','Tampa','Naples');
    $c4=array('Baltimore','Frederick','Annapolis','Bethesda','Rockville');
    $c5=array('Charlotte','Raleigh','Greensboro','Wilmington','Asheville');
    $c6=array('Houston','Dallas','Austin','San Antonio','El Paso');
    $c7=array('Seatle','Vancouver','Spokane','Tacoma','Bellevue');

    if($state=='Arkansas')
    {
        foreach($c1 as $c)
            echo "<option>$c</option>";
    }
    else if($state=='California')
    {
        foreach($c2 as $c)
            echo "<option>$c</option>";
    }
    else if($state=='Florida')
    {
        foreach($c3 as $c)
            echo "<option>$c</option>";
    }
    else if($state=='Maryland')
    {
        foreach($c4 as $c)
            echo "<option>$c</option>";
    }
    else if($state=='North Carolina')
    {
        foreach($c5 as $c)
            echo "<option>$c</option>";
    }
    else if($state=='Texas')
    {
        foreach($c6 as $c)
            echo "<option>$c</option>";
    }
    else if($state=='Washington')
    {
        foreach($c7 as $c)
            echo "<option>$c</option>";
    }
    else
        echo "<option>First Select State</option>";