<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        
     
.underdasee{
    background:lightcoral;
    width:100%;
    height:100%;
    z-index:-1;
}
        body{height:100%; width:100%; margin:0; top:-20px;}
        ul{
            list-style: none;
        }
        ul{
            top:0;
            background:red;
            width:100%;
            height:54px;
            margin:0;
        
        }
        .navElems{
            padding-left:0;
        }

        .first a{
            color:silver;
            font-family:Arial;
            background:red;
            float:left;
            margin:0;
            font-size:20px;
            padding-left:10px;
            padding-right:10px;
            padding-top:15px;
            padding-bottom:15px;
            text-decoration: none;
        } 
        .first {
            
            color:silver;
            background:red;
            float:left;
            margin:0;
            transition background-color 0.1s;
        }
        h1{
            margin: 0 0 0 10px;
            
            padding:0;
        }  
        a{text-decoration: none; color:black;}
        a:active{color:black; text-decoration: none; background:darkred;}
      .first a:hover{color:black;             
        transition: background-color 0.1s;
        text-decoration: none; background:darkred;}

        .final{float:right;}
        .final a{background:white;
                border:black solid 2px;
                border-radius: 10px;
                margin:2px;
                top:20px;
                right:40px;
                position:relative;
                padding:10px;
                font-style:none;}
        .secondary{overflow-y:hidden;
            margin-top:20px;
                    height:0;
                    transition:height 0.2s;
                    padding-left:20px;
                    padding-right:20px;
                    position:relative;
                    background:salmon;
        }
        .first:hover .secondary{height:100px;}
        .first:hover{
            background:darkred;
        }     
    </style>
</head>
@section('navbar')
   <ul class="navElems"> 

         <li class="first"><a href="/home">Home</a></li>
         <li class="first"><a href="/student">Student Pages</a></li>
         <li class="first"><a href="/challenge">Current Challenges</a></li>
   
       <li class="final">
            <a href="login">Login</a>
           </li>
</ul>

@show

<div class="underdasee">
    @yield('content')
</div>
</html>