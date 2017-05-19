<?php

class FlattenArrayCest
{
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    }

    // tests
    public function flattArrayTest(UnitTester $I)
    {
        $multipleArray = [ 1, [ 2 ], [[3],[[4]]]];
        $flattener = new ratacibernetica\FlattenArray($multipleArray);
	$flattenedArray = $flattener->flattened;

        $I->assertEquals( $flattenedArray, [1,2,3,4]);
    }

}
