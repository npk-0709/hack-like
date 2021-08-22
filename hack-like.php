<?php 
$post_id=array(
    1=>""
    #,2=>""
	#,3=>""
);
$cookie=array(
    1=>""
    #,2=>""
	#,3=>""
);
$limit=150;
$s=0;
while(true){
    $i=1;
    while($i<=count($post_id)){
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://www.machine-liker.com/api/send-reactions/");
        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36 Edg/92.0.902.67'); 
        curl_setopt($ch,CURLOPT_ENCODING,'');
        curl_setopt($ch,CURLOPT_COOKIE,$cookie[$i]);
        curl_setopt($ch,CURLOPT_HTTPHEADER,array("Host: www.machine-liker.com","Connection: keep-alive","Content-Length: 119","X-Requested-With: XMLHttpRequest","Content-Type: application/x-www-form-urlencoded; charset=UTF-8","Origin: http://www.machine-liker.com","Referer: http://www.machine-liker.com/auto-reactions/")); 
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE); 
        curl_setopt($ch,CURLOPT_TIMEOUT,60);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,60);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
        curl_setopt($ch,CURLOPT_POST,count(array("post_id"=>$post_id[$i],"reactions"=>"1,2,16,4,3","limit"=>$limit)));
        curl_setopt($ch,CURLOPT_POSTFIELDS,array("post_id"=>$post_id[$i],"reactions"=>"1,2,16,4,3","limit"=>$limit));
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Expect:')); 
        $data=json_decode(curl_exec($ch),true);
        curl_close($ch);
            if($data["status"]=="ok"){ 
                $s++;
                $str=("[".$s."]"."Post ID:".$post_id[$i]." - ".$data["info"]["type"]." - ".$data["info"]["message"]." - ".$data["info"]["next"]." \n"); 
                $reaction=explode(' reactions', explode('sent - ',$str)[1])[0];
                $all=explode('&count=',$str)[1];
                echo "\033[1;91m[ $s ] \033[1;92m~Post ID: \033[1;93m".$post_id[$i]." \033[1;92m- Đã Nhận \033[1;93m$reaction \033[1;92mCảm xúc ~ Tổng Cảm Xúc Của Bài Viết : \033[1;93m$all \n";
            }else{} 
        $i++;
    }
    delay(650);
}


function delay($time){
    for ($x=$time;$x--;$x ) {
        echo "                                \r";
        usleep( 100000 );
        echo "\033[1;31m   └(・ˇ_ˇ・)~>                $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   └(・ˇ_ˇ・) ~>               $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   └(・ˇ_ˇ・)  ~>              $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   └(・ˇ_ˇ・)   ~>             $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   └(・ˇ_ˇ・)    ~>            $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;35m   └(・ˇ_ˇ・)     ~>           $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;36m   └(・ˇ_ˇ・)      ~>          $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   └(・ˇ_ˇ・)       ~>         $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   └(・ˇ_ˇ・)        ~>        $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   └(・ˇ_ˇ・)         ~>       $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;34m   └(・ˇ_ˇ・)          ~>      $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;35m   └(・ˇ_ˇ・)           ~>     $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   └(・ˇ_ˇ・)            ~>    $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   └(・ˇ_ˇ・)             ~>   $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   └(・ˇ_ˇ・)              ~>  $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;33m   └(・ˇ_ˇ・)               ~> $x GIÂY \r";
        usleep( 50000 );
		echo "\033[1;32m   └(・ˇ_ˇ・)                ~>$x GIÂY \r";
	}
}
?>
