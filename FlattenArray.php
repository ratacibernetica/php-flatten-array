<?php
namespace ratacibernetica;

class FlattenArray {
    
    public static function flattenArray( array $unFlattened ) {
            return array_reduce($unFlattened, function( $carry, $item2){
                    if(!is_array($item2)){
                        $carry[]= $item2;
                    }
                    else{
                        $carry = array_merge($carry, self::flattenArray($item2));
                    }
                    return $carry;
                },[]);
        }
        
   
}
