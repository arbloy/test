<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<Title>ESS discripancy</title>
<script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#inputform").submit(function(){				$.post($(this).attr('action'),$(this).serialize(),$("#input").val(),function(data){
					console.log(data);
					$("#output").val(data.output);
				
				}
				,"json");
			});
		});
	</script>
</head>
<body>
<?php
	include_once 'sample.php';
?>

	<div id="wrapper">
	<div id ="content">
	
	<table>
			<tr>
			<td>
			<form method="POST" action="date1.php" id="inputform">
				<textarea rows=5 cols=100 id = "input" name="textinput" tabindex=1/ onfocus = "(this.value == 'Enter MEM logs') && (this.value = '')" onblur(this.value == '' ) && (this.value = 'Enter Your Name')"></textarea>
			</td></tr>
			<tr><td>
				<input type="submit" value="Generate" name="submit" >
			</form>
			</td></tr>
			<tr>
			<td>
			<textarea rows=5 cols=100 id = "output" tabindex=2/><?php if(isset($_POST['textinput'])){echo $output;}?></textarea>
			</td>
			</tr>
	</table>
	</div>
	
	<iframe width="1200" height="600" scrolling = "NO" headers=false range = "A2:I20" src="https://docs.google.com/a/suiterx.com/spreadsheets/d/1j5e4WoISdWklQ0XpWLNeJsG56f6bgA5-ml7Bi8MaK-c/edit?usp=sharing&amp;single=true&amp;widget=true&amp;headers=false" ></iframe>
	</div>

</body>
</html>