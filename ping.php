<?php

// if($_POST['ip']) {
// 	$host = $_POST['ip'];
// 	$port = $_POST['port'];

// 	ping($host,$port);
// }

function ping($host,$timeout=1) {
	if($fp = fsockopen($host,$timeout)){   
		echo "connected to: ".$host."<br>"; 
	} else {
		echo "server is not responding"; 
	} 
}



$servers = array(
		"176.57.188.11:27017",
		"78.31.67.4:25015",
		"88.198.45.185:27045",
		// "85.14.232.128:27015",
		// "176.57.188.11:27018",
		// "95.172.92.240:27015",
		// "82.149.235.188:27015",
		// "82.149.234.148:27015",
		// "194.24.173.114:27300",
		// "82.149.235.96:27015",
		// "83.141.26.129:27015",
		// "85.14.228.17:27015",
		// "83.141.26.62:27015",
		// "193.192.59.153:28065",
		// "193.192.59.153:28085",
		// "193.192.59.153:28075",
		// "193.192.59.153:28095",
		// "93.186.199.40:27115",
		// "62.75.236.47:27120",
		// "62.75.236.47:27099",
		// "176.9.107.110:27080",
		// "176.9.107.110:27090",
		// "82.149.235.188:27015",
		// "82.149.234.148:27015",
		// "194.24.173.114:27300",
		// "82.149.235.96:27015",
		// "83.141.26.129:27015",
		// "85.14.228.17:27015",
		// "83.141.26.62:27015",
		// "193.192.59.153:28065",
		// "193.192.59.153:28085",
		// "193.192.59.153:28075",
		// "193.192.59.153:28095",
		// "93.186.199.40:27115",
		// "62.75.236.47:27120",
		// "62.75.236.47:27099",
		// "176.9.107.110:27080",
		// "176.9.107.110:27090",
		// "83.141.29.20:27015",
		// "85.14.227.26:27015",
		// "82.149.235.116:27015",
		// "84.46.33.192:27015",
		// "78.46.106.151:28015",
		// "78.46.106.151:28030",
		// "78.46.106.151:28045",
		// "195.3.217.144:27300",
		// "144.76.31.202:27015",
		// "176.9.72.115:27016",
		// "85.114.156.48:27015",
		// "195.122.134.77:27035",
		// "81.30.148.30:27415",
		// "85.25.95.193:27045",
		// "94.250.193.69:27015",
		// "81.169.155.226:27016",
		// "81.169.155.226:27015",
		// "80.87.112.180:27030",
		// "94.249.132.42:27015",
		// "88.198.218.5:27015",
		// "85.114.156.165:27015",
		// "37.157.251.38:27015",
		// "88.198.58.150:27015",
		// "93.186.198.104:28315",
		// "93.186.199.72:29715",
		// "93.186.199.72:29718",
		// "62.75.236.139:27015",
		// "93.186.199.72:30615",
		// "94.249.140.43:27015",
		// "85.114.153.157:27015",
		// "37.114.109.85:27015",
		// "84.201.16.113:27045",
);

foreach($servers as $item) {
	ping($item);
}


?>