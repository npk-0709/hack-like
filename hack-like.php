<?php 
echo "ID Post Facebook Cần Tăng: "; 
$post_id=trim(fgets(STDIN));
#echo "Cookie: "; 
#$cookie=trim(fgets(STDIN)); 
$cookie='machineliker_session=a9484687c3e6b059d403062bac5a3985; _ga=GA1.2.104035633.1628425933; _gid=GA1.2.1820298089.1628781747; _gat_gtag_UA_177214317_1=1; __gads=ID=7650482bf8e54395-225e04cbc0ca002c:T=1628517115:RT=1628781746:S=ALNI_MZaTQXDVZ00KlQXw91R_mLFgzHhKg';
$s=0;$chay=10;
while($chay > 1){
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,"http://www.machine-liker.com/api/send-reactions/");
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36 Edg/92.0.902.67'); 
	curl_setopt($ch,CURLOPT_ENCODING,'');
	curl_setopt($ch,CURLOPT_COOKIE,$cookie);
	curl_setopt($ch,CURLOPT_HTTPHEADER,array("Host: www.machine-liker.com","Connection: keep-alive","Content-Length: 119","X-Requested-With: XMLHttpRequest","Content-Type: application/x-www-form-urlencoded; charset=UTF-8","Origin: http://www.machine-liker.com","Referer: http://www.machine-liker.com/auto-reactions/")); 
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE); 
	curl_setopt($ch,CURLOPT_TIMEOUT,60);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,60);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
	curl_setopt($ch,CURLOPT_POST,count(array("post_id"=>$post_id,"reactions"=>"1,2,16,4,3,7,8","limit"=>100)));
	curl_setopt($ch,CURLOPT_POSTFIELDS,array("post_id"=>$post_id,"reactions"=>"1,2,16,4,3,7,8","limit"=>100));
	curl_setopt($ch,CURLOPT_HTTPHEADER,array('Expect:')); 
	$data=json_decode(curl_exec($ch),true);
	curl_close($ch);
		if($data["status"]=="ok"){ 
			$s=$s+1; 
			$str=("[".$s."]"."Post ID:".$post_id." - ".$data["info"]["type"]." - ".$data["info"]["message"]." - ".$data["info"]["next"]." \n"); 
			$reaction=explode(' reactions', explode('sent - ',$str)[1])[0];
			$all=explode('&count=',$str)[1];
			echo("\033[1;91m[ $s ] \033[1;92m~Post ID: \033[1;93m$post_id \033[1;92m- Đã Nhận \033[1;93m$reaction \033[1;92mCảm xúc ~ Tổng Cảm Xúc Của Bài Viết : \033[1;93m$all \n");
			
			delay(610);
		}else{
			delay(610);
			} 
			
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
