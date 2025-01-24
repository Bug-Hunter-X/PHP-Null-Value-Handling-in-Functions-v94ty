```php
function my_function($a, $b) {
  if ($a === null || $b === null) {
    // Handle null values gracefully, perhaps by throwing an exception,
    // returning a default value, or logging an error.
    return 0; // Return default value for demonstration
  }

  // ... some code ...

  return $result;
}

$result = my_function(null, 5);
var_dump($result); // Output: int(0)

$result = my_function(10, null);
var_dump($result); // Output: int(0)

$result = my_function(null, null);
var_dump($result); // Output: int(0)
```