<?php

ini_set('xdebug.var_display_max_depth', '4');

class Node {

	public $value;
	public $left;
	public $right;

}

$rootNode = createNodes();
breadthFirst($rootNode);

function breadthFirst(Node $rootNode) {

	$stack[] = $rootNode;
	$i = 0;
	while (count($stack) > 0) {

		$node = array_shift($stack);
		if ($node->left != null) {
			$stack[] = $node->left;
		}

		if ($node->right != null) {
			$stack[] = $node->right;
		}
		var_dump($node);
		if ($i == 3) {
			exit;
		}
	}

	// var_dump($rootNode);

}


function createNodes() {

	$rootNode = new Node();
	$rootNode->value = 25;
	srand(100);
	for ($i=0;$i<50;$i++) {
		if ($i == 25) {
			continue;
		}
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