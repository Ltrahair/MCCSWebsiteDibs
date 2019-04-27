<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        
        body{margin:0;
        padding:0;
    font-family: Arial;
background:red;}
.underdasee{
    background:lightcoral;
    width:100%;
    height:100%;
    z-index:-1;
}
        ul{
            list-style: none;
        }
        .nav{
            background:red;
            width:100%;
            height:50px;
        
        }
        .first{
            color:silver;
            background:red;
            float:left;
            margin:0;
            height:50px;
        } 
        h1{
            margin: 0 0 0 10px;
            
            padding:0;
        }  
        
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
<nav class="nav">
   <ul class="navElems"> 
    <li class="first">
    <h1>stuffafdsa</h1>
     <ul class="secondary">
        <li><a href="">stuff1adfadsaffdsafdsas<a></li>
        <li><a>stuff2<a></li>
        </ul>    
   </li>
   <li class="first">
        <h1>stuff</h1>
         <ul class="secondary">
            <li><a>stuff1<a></li>
            <li><a>stuff2<a></li>
        </ul>    
       </li>
</ul>

</nav>
@show

<div class="underdasee">
    @yield('content')
</div>
</html>