<?php

#connect to the databse server using hte following variables:
#database hostname = localhsot
#database username = root
#database password = root
#database name = test_sql_injection
mysql_connect('localhost', 'root', 'root') or die("Could not connect to server." . mysql_error());
mysql_select_db('test_sql_injection');

#initialize all variables
$data = $where = '';

#set the original query
$query = 'SELECT id, name FROM categories WHERE 1=1';
$_REQUEST['id'] = "72623 AND WAITFOR 3;";
#check if user input is not empty
if (!empty($_REQUEST['id'])) {
	$query .= ' AND id = ' . $_REQUEST['id'];
}
if (!empty($_REQUEST['name'])) {
	$query .= ' AND name="' . $_REQUEST['name'] . '"';
}

#executing query into DB server
$result = mysql_query($query);

#if no result found, just prepare an error message
if (!empty($result)) {
	#do iteration on query result
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		$data .= $row[0] . '=>' . $row[1] . PHP_EOL;
	}
} else {
	$data = 'No results found.' . mysql_error();
}

#print the data
echo $data;