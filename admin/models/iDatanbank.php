<?php

interface iDatenbank
{
	function insert($db);
	function delete($db, $id);
	function update($db, $id);
	function select($db, $id);
	function selectAll($db);
}
?>
