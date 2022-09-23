# Array Helper

## Find
Find a value recursively inside an array.

```php
use EMS\Helpers\ArrayHelper\ArrayHelper;

ArrayHelper::find('example', ['example' => 'ok']); // returns array("ok")
ArrayHelper::find('example', [ 'child' => ['example' => 1]]); // returns array(1)
ArrayHelper::find('example', ['example' => null]); // returns array(null)
ArrayHelper::find('example', []); // returns array()

ArrayHelper::findString('example', ['example' => 'ok']); // returns 'ok'
ArrayHelper::findInteger('example', [ 'child' => ['example' => 1]]); // returns 1
ArrayHelper::findDateTime('example', [ 'example' => '19/02/1989' ]); // returns \DateTimeInterface
```
