<?php

class Modifier_firsty extends Modifier {

	var $meta = array(
			'name' => 'Firsty',
			'description' => 'A Statamic modifier to get the first word of a string',
			'version' => '1.0',
			'author' => 'Jeremy Sexton',
			'author_url' => 'http://jeremysexton.net',
			'author_twitter' => '@jeremysexton',
			'kudos' => 'Big ups to codaddict at Stack Overflow for helping out a php toddler in need',
			'kudos_url' => 'http://stackoverflow.com/a/2476811',
	);

    public function index($value, $parameters=array()) {
        
        $arr = explode(' ',trim($value));
        
        return $arr[0];  
        
    }
}
