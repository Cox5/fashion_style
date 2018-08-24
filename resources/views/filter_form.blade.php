<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>
</head>

<style>

@keyframes ukrug {
    0% {
        transform: rotate(0deg);
        
    }
    100% {
        transform: rotate(360deg);

    }
}

@keyframes animColor {
  0% {
  background: #A3F050;
  background: hsl(89, 85%, 63%);  }
  10% {
  background: #53F050;
  background: hsl(119, 85%, 63%);  }
  20% {
  background: #50F09D;
  background: hsl(149, 85%, 63%);  }
  30% {
  background: #50F0EE;
  background: hsl(179, 85%, 63%);  }
  40% {
  background: #50A3F0;
  background: hsl(209, 85%, 63%);  }
  50% {
  background: #5053F0;
  background: hsl(239, 85%, 63%);  }
  60% {
  background: #9D50F0;
  background: hsl(269, 85%, 63%);  }
  70% {
  background: #EE50F0;
  background: hsl(299, 85%, 63%);  }
  80% {
  background: #F050A3;
  background: hsl(329, 85%, 63%);  }
  90% {
  background: #F05053;
  background: hsl(359, 85%, 63%);  }
  95% {
  background: #F09D50;
  background: hsl(29, 85%, 63%);  }
  100% {
  background: #A3F050;
  background: hsl(89, 85%, 63%);  }
}



* {
    background-color: papayawhip;
}

h2 {
    line-height: 40px;
    text-align: center;
    text-transform: uppercase;
}

.form
{
    background: hsl(89, 85%, 63%);
    border-radius: 10px;
    padding: 30px;
    margin: 0 50px;
    animation: animColor 50s linear infinite;
    /* display: flex; */
    justify-content:center;
    align-items: center;
    
}

.form input {
    margin: 0 10px;
}

.imgdiv {
    margin-top: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}

img {
    animation: ukrug 2s infinite;
}
</style>
<body>
    <h2>Filter products</h2>
        <form action="{{ route('product.filter') }}" method="GET" class="form">  
            {{ csrf_field() }}
            Size:<br>
            <input type="checkbox" name="size[]" value="XS">XS<br>
            <input type="checkbox" name="size[]" value="S" >S<br>
            <input type="checkbox" name="size[]" value="M" >M<br>
            <input type="checkbox" name="size[]" value="L" >L<br>
            <input type="checkbox" name="size[]" value="XL" >XL<br>
          <hr>  
            Color:<br>
            <input type="checkbox" name="color[]" value="Blue">Blue<br>
            <input type="checkbox" name="color[]" value="Red" >Red<br>
            <input type="checkbox" name="color[]" value="Grey" >Grey<br>
            <input type="checkbox" name="color[]" value="Brown" >Brown<br>
            
            <input type="submit" value="Submit">
          

        </form>
</body>
<div class="imgdiv">
    <img src="{{ URL::asset('img/vega-logo.png')}}">
</div>

</html>