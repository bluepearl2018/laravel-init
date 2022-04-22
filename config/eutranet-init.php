<?php
return [
	'name' => 'Eutranet\'s Laravel Init',
	'description' => 'This package is the basis for all other packages. It contains all the instructions and resources to make all the other packages work.',
	'tables' =>
		[
			'install_statuses',
			'add_fields_to_users',
			'users',
			'permission_tables',
			'language_lines',
			'personal_access_tokens',
			'password_resets_table',
			'failed_jobs'
		],
];