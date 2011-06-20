<?php

$tag = 'h1';
$attributes = array("class" => "author_moshe", "event" => "onblur");
$content = "Isn't this a lot simpler?";
echo tag($tag, $attributes, $content);
function tag($tag, $attributes, $content) {
         try{
		exception_tester($tag, $attributes, $content);
         
        $output = '<' . $tag;
        //print_r($attributes);

        foreach($attributes as $key => $value) {
		
                        $output .= ' ' . $key . '="' . $value . '"';
        }
      
        $output .= '>' . $content . '</' . $tag . '>';

        return $output;
}
catch(Exception $e){
print_r($e);
}}
function exception_tester($tag, $attributes,$content) {

       if(!is_array($attributes)) {
               throw new Exception("attributes must be an array");
        }
}

?>

