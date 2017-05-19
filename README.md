# php-flatten-array
Flatten an array.

### Install

`composer require ratacibernetica/php-flatten-array`

1. Expected input:  
```php
[ 1, [ 2 ], [[3],[[4]]]];
```

2. Expected output:
```php
[1,2,3,4]
```
### Example Usage:
```php
	$multipleArray = [ 1, [ 2 ], [[3],[[4]]]];
        $flattener = new ratacibernetica\FlattenArray($multipleArray);
        $flattenedArray = $flattener->flattened;

        // equals $flattenedArray, [1,2,3,4]);

        $otherFlat = $flattener->flattenArray( [1, [2], [3], [[4],[5]]] );
        // equals( $otherFlat, [1,2,3,4,5]);
```

### Run tests

Tests are located in the `tests` folder, and can be run with [codeception](https://codeception.com), like so:

```bash
$ codecept run unit
```
