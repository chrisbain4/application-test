<!DOCTYPE HTML>

<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  		
</head>
	
<body>

<?php
	
		function table($people){
		//table
		$html = "<table border='1'>";
		// header
		$html .= '<tr>';
		foreach($people[0] as $key=>$value){
            $html .= '<th>' . $key . '</th>';
        }
		$html .= '</tr>';

		//rows
		foreach( $people as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . $value2 . '</td>';
        }
		
        $html .= "<td><input type='submit' name='submit-btn' value='Details' /></td></tr>";
    }

    // return table

    $html .= '</table>';
    return $html;
}

	//people array
	$people = array(
	array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
	);
//output table
echo table($people);
?>

<script type="text/javascript">  

	$(document).ready(function()  
  
	{  
  
		//on button click output row first name last name and email
		$('input[name=submit-btn').click(function(event){  
  
		var $td= $(this).closest('tr').children('td');  
  
		var first= $td.eq(1).text();  
  
		var last= $td.eq(2).text();  
  
		var email= $td.eq(3).text();  
  
		alert('Name: '+first+' '+last+'\nEmail: '+email);  
    
		}  
  
		);  
  
	});  
  
</script>  

</body>
</html>
