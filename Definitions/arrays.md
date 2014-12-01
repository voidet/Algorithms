#Arrays

##Linked Lists
Linked lists are lists that have use pointers in order to reference their next neighbour. This is useful for performance reasons on insertions and deletions. Unlike vector arrays, inserting or deleting an item from a linked list does not require shifting subsequent items up/down the list to accommodate changes and to get indices to be corrected.

Linked lists are excellent for inserting and deleting (constant time), however poor for updating, reading, random access (n time) as they have to linearly traverse the list.

##Doubly Linked Lists
Are above but with the option to traverse beginning from the end of the list

## Stacks
Stacks are LIFO lists. You put something on top of a list, at the first index, and you can only get something off the top or from the first index. Stacks are used when the size of the array is not known and accessing items are items that are only most recently added.

## Queues
Queues are FIFO lists. In that new items get added to the end of the list and items are only accessed from the front of the array. Queues are useful when the array size is not known and when you want to access the oldest "waiting" items first.

##Heaps
Heaps are lists in that adding an item to the list is organised by an internal ordering mechanism. Heaps are used when the size is not known and the items need to be ordered in a means of how they compare to each other

##Priority Queues
Priority queues are lists that accept items mapped with an arbitrary 
"priority" value. The list is ordered based on this priority value and can vary based on the strategy implemented in the comparison/sorting function.

##Vectors
Vectors are a flat list of items of the same type

#Maps

##Linked Hash Maps
A linked hash map is a map that maintains two indexes, one for its own key and another the index the item was added to the "array" under. This allows a guarantee when iterating through the array that order can be maintained

##Tree Maps
Tree maps are maps that guarantee order based on the "natural" sorting mechanism defined in its compareTo() method. Which may be alphabetical or whatever is user defined.

##Hash Maps
Are dictionaries or maps that do not guarantee the order or safety around iterating on items in the "array".