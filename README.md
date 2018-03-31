# VanGestelJasper\Collection

Convenience object with `get`, `set`, `setMultiple`, `unset` and `has` methods.

## Usage
```php
$collection = new \VanGestelJasper\Collection\Collection;

$collection->setMultiple([
  'keyOne' => 'valueOne',
  'keyTwo' => 'valueTwo',
]);

$collection->set('keyThree', 'valueThree');
$collection->has('keyThree'); // true
$collection->has('keyFour'); // false

$collection->unset('keyThree');
$collection->has('keyThree'); // false

$collection->get('keyOne') // valueOne

```