<?php 

require_once 'TreeNode.php';

class SameTree {
	function checkSameTree($p, $q) {
		if ($p == null && $q == null) return true;
		if ($p == null || $q == null) return false;
		if ($p->value != $q->value) return false;
		return $this->checkSameTree($p->left, $q->left) && $this->checkSameTree($p->right, $q->right);
	}
}

$solution = new SameTree();
$p = new TreeNode(1);
$p->left = new TreeNode(2);
$p->right = new TreeNode(3);
$q = new TreeNode(1);
$q->left = new TreeNode(2);
$q->right = new TreeNode(3);

print($solution->checkSameTree($p, $q));