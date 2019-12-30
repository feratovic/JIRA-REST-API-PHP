<?php

define('JIRA_URL', 'https://visoldev.ddns.net:8888');
define('USERNAME', 'testuser');
define('PASSWORD', 'Test123');

function post_to($resource, $data) {
	$jdata = json_encode($data);
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_POST => 1,
		CURLOPT_URL => JIRA_URL . '/rest/api/latest/' . $resource,
		CURLOPT_USERPWD => USERNAME . ':' . PASSWORD,
		CURLOPT_POSTFIELDS => $jdata,
		CURLOPT_HTTPHEADER => array('Content-type: application/json'),
		CURLOPT_RETURNTRANSFER => true
	));
	$result = curl_exec($ch);
	curl_close($ch);
	return json_decode($result);
}

function create_issue($issue) {
	return post_to('issue', $issue);
}

$new_issue = array(
	'fields' => array(
		'project' => array('key' => 'TEST'),
		'summary' => 'Elmaz Feratovic',
        'description' => 'elmazferatovic16@gmail.com - 069-913-549',
        'priority' => array('name' => 'Medium'),
        'assignee' => array('name' => 'TestUser'),
        'duedate' => '2019-12-30',
		'issuetype' => array('name' => 'Task')
	)
);

$result = create_issue($new_issue);
if (property_exists($result, 'errors')) {
	echo "Greska:\n";
	var_dump($result);
} else {
	echo "Novi issue kreiran  : " . JIRA_URL ."/browse/{$result->key}\n";
}
?>