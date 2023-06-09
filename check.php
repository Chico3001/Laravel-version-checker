<?php

/**
 * Laravel Requirement Checker
 *
 * This standalone script will check if your server meets the requirements for running the
 * Laravel web application framework.
 * 
 * Is an improvement from the script found on https://github.com/GastonHeim/Laravel-Requirement-Checker
 *
 * @author Javier Ortega
 * @version 0.0.1
 */

$latestLaravelVersion = '10.0';

$reqList = [
	'11.0' => [
		'name' => 'Laravel 11.0',
		'url' => 'https://laravel.com/docs/master/',
		'notes' => 'Releases until Q1 2024',
		'date_release' => '',
		'date_bugfixes' => '',
		'date_security_fixes' => '',
		'php_min' => '8.2.0',
		'php_max' => '',
		'required' => [
			'ctype' => true,
			'curl' => true,
			'dom' => true,
			'fileinfo' => true,
			'filter' => true,
			'hash' => true,
			'mbstring' => true,
			'openssl' => true,
			'pcre' => true,
			'pdo' => true,
			'session' => true,
			'tokenizer' => true,
			'xml' => true,
		],
	],
	'10.0' => [
		'name' => 'Laravel 10.0',
		'url' => 'https://laravel.com/docs/10.x/',
		'notes' => '',
		'date_release' => '2023/02/07',
		'date_bugfixes' => '2024/08/04',
		'date_security_fixes' => '2025/02/04',
		'php_min' => '8.1.0',
		'php_max' => '',
		'required' => [
			'ctype' => true,
			'curl' => true,
			'dom' => true,
			'fileinfo' => true,
			'filter' => true,
			'hash' => true,
			'mbstring' => true,
			'openssl' => true,
			'pcre' => true,
			'pdo' => true,
			'session' => true,
			'tokenizer' => true,
			'xml' => true,
		],
		// 'optional' => [
		// 	'bcmath' => true,
		// 	'json' => true,
		// ],
	],
	'9.0' => [
		'name' => 'Laravel 9.0',
		'url' => 'https://laravel.com/docs/9.0/',
		'notes' => '',
		'date_release' => '2022/02/08',
		'date_bugfixes' => '2023/08/08',
		'date_security_fixes' => '2024/02/06',
		'php_min' => '8.0.0',
		'php_max' => '8.1.0',
		'required' => [
			'ctype' => true,
			'curl' => true,
			'dom' => true,
			'fileinfo' => true,
			'filter' => true,
			'hash' => true,
			'mbstring' => true,
			'openssl' => true,
			'pcre' => true,
			'pdo' => true,
			'session' => true,
			'tokenizer' => true,
			'xml' => true,
		],
	],
	'8.0' => [
		'name' => 'Laravel 8.0',
		'url' => 'https://laravel.com/docs/8.x/',
		'notes' => '',
		'date_release' => '2020/09/08',
		'date_bugfixes' => '2022/07/26',
		'date_security_fixes' => '2023/01/24',
		'php_min' => '7.3.0',
		'php_max' => '8.1.0',
		'required' => [
			'bcmath' => true,
			'ctype' => true,
			'fileinfo' => true,
			'json' => true,
			'mbstring' => true,
			'openssl' => true,
			'pdo' => true,
			'tokenizer' => true,
			'xml' => true,
		],
	],
	'7.0' => [
		'name' => 'Laravel 7.0',
		'url' => 'https://laravel.com/docs/7.x/',
		'notes' => '',
		'date_release' => '2020/03/03',
		'date_bugfixes' => '2020/10/06',
		'date_security_fixes' => '2021/03/03',
		'php_min' => '7.2.0',
		'php_max' => '8.0.0',
		'required' => [
			'bcmath' => true,
			'ctype' => true,
			'fileinfo' => true,
			'json' => true,
			'mbstring' => true,
			'openssl' => true,
			'pdo' => true,
			'tokenizer' => true,
			'xml' => true,
		],
	],
	'6.0' => [
		'name' => 'Laravel 6.0 (LTS)',
		'url' => 'https://laravel.com/docs/6.x/',
		'notes' => '',
		'date_release' => '2019/09/03',
		'date_bugfixes' => '2022/01/25',
		'date_security_fixes' => '2022/09/06',
		'php_min' => '7.2.0',
		'php_max' => '8.0.0',
		'required' => [
			'bcmath' => true,
			'ctype' => true,
			'fileinfo' => true,
			'json' => true,
			'mbstring' => true,
			'openssl' => true,
			'pdo' => true,
			'tokenizer' => true,
			'xml' => true,
		],
	],
];

$strOk = ' <i style="color: green" class="fa fa-check"></i>';
$strFail = ' <i style="color: red" class="fa fa-times"></i>';
$strUnknown = ' <i class="fa fa-question"></i>';
$reqList[$latestLaravelVersion]['name'] .= ' - Latest';

$laravelVersion = (isset($_GET['v'])) ? ((array_key_exists((string)$_GET['v'], $reqList)) ? (string)$_GET['v'] : $latestLaravelVersion) : $latestLaravelVersion;
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Server Requirements &dash; Laravel PHP Framework</title>
	<link href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

		body {
			margin: 0;
			font-size: 16px;
			font-family: 'Lato', sans-serif;
			text-align: center;
			color: #999;
		}

		.wrapper {
			width: 800px;
			margin: 20px auto;
		}

		.logo {
			display: block;
			text-decoration: none;
			margin-bottom: 20px;
		}

		.logo img {
			margin-right: 1.25em;
		}

		p {
			margin: 0 0 5px;
		}

		p small {
			font-size: 13px;
			display: block;
			margin-bottom: 1em;
		}

		p.obs {
			margin-top: 20px;
			padding: 15px;
			margin-bottom: 20px;
			border: 1px solid transparent;
			border-radius: 4px;
			color: #31708f;
			background-color: #d9edf7;
			border-color: #bce8f1;
		}

		.icon-ok {
			color: #27ae60;
		}

		.icon-remove {
			color: #c0392b;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<a href="https://laravel.com" title="Laravel PHP Framework" class="logo">
			<img class="mark" src="https://laravel.com/img/logomark.min.svg" alt="Laravel"><img class="type" src="https://laravel.com/img/logotype.min.svg" alt="Laravel">
		</a>

		<form action="?" method="get">
			<select name="v" onchange="this.form.submit()">
				<?php
				foreach ($reqList as $key => $version) {
					if ($key == $laravelVersion) {
						echo '<option value="' . $key . '"selected>' . $version['name'] . '</option>';
					} else {
						echo '<option value="' . $key . '">' . $version['name'] . '</option>';
					}
				}
				?>
			</select>
		</form>

		<h2>Evaluating for <a href="<?php echo $reqList[$laravelVersion]['url'] ?>">Laravel version <?php echo $laravelVersion ?></a> </h2>
		<p>Release date: <?php echo $reqList[$laravelVersion]['date_release'] ?></p>
		<p>Bugfixes Until: <?php echo $reqList[$laravelVersion]['date_bugfixes'] ?></p>
		<p>Security Fixes Until: <?php echo $reqList[$laravelVersion]['date_security_fixes'] ?></p>
		<?php
		if (isset($reqList[$laravelVersion]['notes'])) {
			echo '<p>' . $reqList[$laravelVersion]['notes'] . '</p>';
		}
		?>

		<h2>Server Requirements.</h2>
		<p>Current PHP version: <?php echo PHP_VERSION; ?></p>
		<p>
			<?PHP
			if (version_compare(PHP_VERSION, $reqList[$laravelVersion]['php_min']) >= 0) {
				echo 'PHP >= ' . $reqList[$laravelVersion]['php_min'] . $strOk;
			} else {
				echo 'PHP >= ' . $reqList[$laravelVersion]['php_min'] . $strFail;
			}
			if (!empty($reqList[$laravelVersion]['php_max'])) {
				if (version_compare($reqList[$laravelVersion]['php_max'], PHP_VERSION) > 0) {
					echo ' PHP < ' . $reqList[$laravelVersion]['php_max'] . $strOk;
				} else {
					echo ' PHP < ' . $reqList[$laravelVersion]['php_max'] . $strFail;
				}
			}
			?>
		</p>

		<?php
		if (isset($reqList[$laravelVersion]['required'])) {
			echo '<h3>Required Extensions</h3>';
			foreach ($reqList[$laravelVersion]['required'] as $key => $value) {
				echo '<p>' . $key . ' ' . ((extension_loaded($key)) ? $strOk : $strFail) . '</p>';
			}
		}
		?>
		<?php
		if (isset($reqList[$laravelVersion]['optional'])) {
			echo '<h3>Optional Extensions</h3>';
			foreach ($reqList[$laravelVersion]['optional'] as $key => $value) {
				echo '<p>' . $key . ' ' . ((extension_loaded($key)) ? $strOk : $strFail) . '</p>';
			}
		}
		?>
	</div>
</body>

</html>