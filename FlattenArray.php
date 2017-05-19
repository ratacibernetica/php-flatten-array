<?php
namespace ratacibernetica;

class FlattenArray {

    protected $array;

    public function __construct($someArray){
	$this->array = $someArray;
    }    

    public function __get($name){
	switch($name){
		case "flattened":
			return $this->flattenArray($this->array);
		break;
		
		default:
			return null;
		break;
	}
    }


    public function flattenArray($unFlattenedArray=null ) {
            if(!$unFlattenedArray){
		$unFlattenedArray=$this->array;
	    }
            return array_reduce($unFlattenedArray, function( $carry, $item2){
                    if(!is_array($item2)){
                        $carry[]= $item2;
                    }
                    else{
                        $carry = array_merge($carry, $this->flattenArray($item2));
                    }
                    return $carry;
                },[]);
        }
}
