```php
function my_function($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null inputs
  }

  // ... some code ...

  return $result;
}

$result = my_function(null, 5);
var_dump($result); // Output: NULL

$result = my_function(10, null);
var_dump($result); // Output: NULL

$result = my_function(null, null);
var_dump($result); // Output: NULL
```