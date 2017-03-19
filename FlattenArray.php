<?php
namespace ratacibernetica;

class FlattenArray {
    
    public static function flattenArray( $unFlattened ) {
            return array_reduce($unFlattened, function($item,$item2){
                    if(!is_array($item2)){
                        $item[]= $item2;
                    }
                    else{
                        $item = array_merge($item, self::flattenArray($item2));
                    }
                    return $item;
                },[]);
        }
        
   
}
