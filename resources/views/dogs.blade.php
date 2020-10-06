<html> 
    <body>

        <h1> {{$num}} dogs! </h1>

        

            @if($num<$max){
                @for($i=0;$i<$num;$i++)
                    <img src="https://post.medicalnewstoday.com/wp-content/uploads/sites/3/2020/02/322868_1100-1100x628.jpg">
                @endfor
            @else 
                <h2> That's a lot of dogs! <h2>
            @endif
        




    </body>





</html>