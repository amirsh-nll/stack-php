# stack-php
stack in php

```php
<?php
$myBooks = new ReadingList();
$myBooks->push('item 1');
$myBooks->push('item 2');
echo $myBooks->pop();  // Output -> "item 2"
echo $myBooks->pop();  // Output -> "item 1"
$myBooks->push('item 3');
echo $myBooks->top();  // Output -> "item 3"
echo $myBooks->pop();  // Output -> "item 3" 
?>
```
