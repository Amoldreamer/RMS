@extends('layouts/master')



@section('images')
<?php
   $i=0;
?>
@foreach($counts as $count)

{{-- printing image with image name --}}
<div style="padding-left:50px;">
         <a href="restaurant/<?php if($i< count($data)) print_r($data[$i]->id); ?>"><figure style="float:left;color:white">
        <img src="{{URL::to('/')}}/Images/{{$count}}.jpg" style="width:200px;height:200px;margin:0 20px;border:2px" />
        <figcaption style="text-decoration: none;margin:0 20px">
            <?php
                 if($i< count($data)){
                echo $data[$i]->restaurantName;
                $id = $data[$i]->id;
                 }
                $i++;
            ?>
            <?php
            if(!isset($_SESSION)) {
                session_start();
            }
            if(isset($_SESSION['username'])){
            ?>
        {{-- edit function --}}
        <form action="restaurant/<?php echo $id; ?>/edit" style="float:right;">
            {{csrf_field()}}
        <input type='submit' name='edit' value='Edit' />
        </form>
        {{-- delete function --}}
        <form action="restaurant/<?php echo $id; ?>" method="post" style="float:right;">
            {{csrf_field()}}
            {{method_field('DELETE')}}
        <input type="hidden" name="fName" value="<?php echo $count.'.jpg'; ?>" />
        <input type='submit' name='Delete' value='Delete' />
        </form> 
        <?php
            }
        ?>
       </figcaption>

        </figure></a>

</div>

@endforeach

@endsection