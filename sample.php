<?php
	//$data = array('output'=>NULL);
if(isset($_POST['submit'])){
	$str=$_POST['textinput'];

	if (preg_match_all("/(\d{2}) ([a-z]{3}) (\d{2}) (\d{2}):(\d{2}) ([a-z]{2})/i",$str, $match)) 
	{
		$result= count($match[0]);
		$output = "";
		$flag=true;
		$breakflag=true;
		$breakin="";
		$breakout="";
		$name = "Marlo Rosales";
		
		for($i=0;$i<$result;$i++){
			if($i==0 and $flag==true){
				$in= explode(" ",$match[0][$i]);
				$indate=$in[0]." ".$in[1]." ".$in[2]."\t" . $name ;
				$intime="    ".$in[3]." ".$in[4]."&#09";
				$output.=$indate."&#09".$intime." ";
				$flag=false;
			}
	
			if($i==($result-1)){
				$in=explode(" ",$match[0][$i]);
				$output.="&#09"."&#09"."&#09"."   ".$in[3]." ".$in[4];
				//$output.="OUT:".$in[3]." ".$in[4];
					
			}
			
			if($i>0 and $i<($result-1)){
				$break="";
				if($breakflag==true){
					$in=explode(" ",$match[0][$i]);
					$break.=$in[3]." "." - ";
					$breakflag=false;
				}
				else{
					$in=explode(" ",$match[0][$i]);
					$break.=$in[3]."&#09";
					$breakflag=true;
				}
				$output.=$break;
			}

			
	
		}
		//echo $output;

		
    }
}

		// $data['output'] = $output;
		// echo json_encode($data);
		// exit;


?>