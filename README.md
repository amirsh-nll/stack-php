# stack-php
stack in php
<br />
## installation
```
composer require amirshnll/stack-php
```
<br />
### information
**About stack : ([wikipedia](https://en.wikipedia.org/wiki/Stack_(mathematics)))**
In mathematics a stack or 2-sheaf is, roughly speaking, a sheaf that takes values in categories rather than sets. Stacks are used to formalise some of the main constructions of descent theory, and to construct fine moduli stacks when fine moduli spaces do not exist.
Descent theory is concerned with generalisations of situations where isomorphic, compatible geometrical objects (such as vector bundles on topological spaces) can be "glued together" within a restriction of the topological basis. In a more general set-up the restrictions are replaced with pullbacks; fibred categories then make a good framework to discuss the possibility of such gluing. The intuitive meaning of a stack is that it is a fibred category such that "all possible gluings work". The specification of gluings requires a definition of coverings with regard to which the gluings can be considered. It turns out that the general language for describing these coverings is that of a Grothendieck topology. Thus a stack is formally given as a fibred category over another base category, where the base has a Grothendieck topology and where the fibred category satisfies a few axioms that ensure existence and uniqueness of certain gluings with respect to the Grothendieck topology.

....


**this Repository Based : php programming language**


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
