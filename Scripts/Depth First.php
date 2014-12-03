<?php

ini_set('xdebug.var_display_max_depth', '4');

class Node {

	public $value;
	public $left;
	public $right;

}

$rootNode = createNodes();
depthFirst($rootNode);
// breadthFirst($rootNode);
// var_dump($rootNode);

function breadthFirst($rootNode) {

	$queue[] = $rootNode;

	while (count($queue) > 0) {
		$node = array_shift($queue);
		if (!in_array($node->left, $discovered) && $node->left != null) {
			$queue[] = $node->left;
		}
		if (!in_array($node->right, $discovered) && $node->right != null) {
			$queue[] = $node->right;
		}
		
	}

}


function depthFirst($rootNode) {

	$stack[] = $rootNode;
	$i = 0;

	$pre = [];
	$in = [];
	$post = [];
	while(count($stack) > 0) {

		$pre[] = $node->value;
		if ($node->left != null) {
		  array_push($stack, $node->left);
		}

		if ($node->right != null) {
		  array_push($stack, $node->right);
		}
		
		echo $i++.': '.$node->value.'<br />';
	}

}

function createNodes() {

	$rootNode = new Node();
	$rootNode->value = 25;
	srand(100);
	for ($i=0;$i<50;$i++) {
		$value = $i;
		makeNode($rootNode, $value);
	}

	return $rootNode;
}

function makeNode(Node $node, $value) {

	if ($node == null) {
		return;
	}

	if ($value < $node->value) {

		if ($node->left == null) {
			$newNode = new Node();
			$newNode->value = $value;
			$node->left = $newNode;
		} else {
			return makeNode($node->left, $value);
		}
	} else if ($value >= $value) {

		if ($node->right == null) {
			$newNode = new Node();
			$newNode->value = $value;
			$node->right = $newNode;
		} else {
			makeNode($node->right, $value);
		}
	}

}