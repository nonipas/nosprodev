<?php 

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$user_ip = getUserIpAddr();

?>
<!Doctype html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="n-protect">
            <a id="n-link" href="#">Advert click</a>
        </div>


<script>
        $(document).ready(function()
    {   
        
        var count = 0;
        $("#n-protect").on("click", function()
        {       
             val = val*1+1;               
                // $("#n-protect").hide();                        
        });
        if (val > 1){
            $("#n-protect").hide(); 
        }
    });
</script>

    </body>
</html>