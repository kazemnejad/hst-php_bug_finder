<?
	include 'simple_html_dom.php';
	$html = file_get_html('ServiceLogin.htm');
	$request;
	foreach($html->find('form') as $element)
	{
		echo $element->action . ' : ' . $element->method . '<br>' ; 
		foreach($element->find('input') as $in){
			if ($in->type !="hidden"){
				echo $in->name . '  -  ';
				echo $in->type . '  :  ' .$in->value . '<br>';
			}
		}
	}
?>