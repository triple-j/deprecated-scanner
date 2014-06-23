<?php
/*********************************
 * @Author  WebSlide Studio
 * @Site    http://www.webslide.hu 
 * @Date    2012-11-05
 * @Version 1.0.0
 *  
 * Open source project
 ********************************/
 
 
 
 
/**
 * Define the directory.
 * This script will check all php file in this folder
 * and this folder's subfolders.
 * 	 
 * This script won't check itself!
 * 	 
 * 	 	 
 * Value example: 	 	 
 * define('DIRPATH','../');
 * define('DIRPATH','../project');
 * define('DIRPATH','/home/user/test.com/');
 * define('DIRPATH','test/');	 	 	 	 
 */
	 
define('DIRPATH','../');





/**
 * Deprecated functions.
 * Function => Error string 
 */
 
$deprecated_functions = array
(

	/* Deprecated features in PHP 5.3.x */
	'session_register' => 'Session_register is deprecated! [PHP 5.3.x]',
	'session_unregister' => 'Session_unregister is deprecated! [PHP 5.3.x]',
	'session_is_registered' => 'Session_is_registered is deprecated! [PHP 5.3.x]',
	'call_user_method' => 'Call_user_method() is deprecated! Use call_user_func() instead [PHP 5.3.x]',
	'call_user_method_array' => 'Call_user_method_array() is deprecated! Use call_user_func_array() instead [PHP 5.3.x]',
	'define_syslog_variables' => 'Define_syslog_variables() is deprecated! [PHP 5.3.x]',
	'dl' => 'dl() is deprecated! [PHP 5.3.x]',
	'ereg' => 'Ereg() is deprecated! Use preg_match() instead [PHP 5.3.x]',
	'ereg_replace' => 'Ereg_replace() is deprecated! Use preg_replace() instead [PHP 5.3.x]',
	'eregi' => 'Eregi() is deprecated! Use preg_match() with the \'i\' modifier instead [PHP 5.3.x]',
	'eregi_replace' => 'Eregi_replace() is deprecated! Use preg_replace() with the \'i\' modifier instead [PHP 5.3.x]',
	'set_magic_quotes_runtime' => 'Set_magic_quotes_runtime() is deprecated! [PHP 5.3.x]',
	'magic_quotes_runtime' => 'Magic_quotes_runtime is deprecated! [PHP 5.3.x]',
	'set_socket_blocking' => 'Set_socket_blocking() is deprecated! Use stream_set_blocking() instead [PHP 5.3.x]',
	'split' => 'Split() is deprecated! Use preg_split() instead [PHP 5.3.x]',
	'spliti' => 'Spliti() is deprecated! Use preg_split() with the \'i\' modifier instead [PHP 5.3.x]',
	'sql_regcase' => 'Sql_regcase() is deprecated! [PHP 5.3.x]',
	'mysql_db_query' => 'Mysql_db_query() is deprecated! Use mysql_select_db() and mysql_query() instead [PHP 5.3.x]', 
	'mysql_escape_string' => 'Mysql_escape_string() is deprecated! Use mysql_real_escape_string() instead [PHP 5.3.x]',

	/* Deprecated features in PHP 5.4.x */
	'mcrypt_generic_end' => 'Mcrypt_generic_end() is deprecated! [PHP 5.4.x]',
	'mysql_list_dbs' => 'Mysql_list_dbs() is deprecated! This function is deprecated! Please use PDO or MySQLi [PHP 5.4.x]',

	/* Deprecated features in PHP 5.5.x */
	'mysql_affected_rows' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_client_encoding' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_close' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_connect' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_create_db' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_data_seek' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',                                                        
	'mysql_db_name' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_db_query' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_drop_db' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_errno' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_error' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_escape_string' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_fetch_array' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_fetch_assoc' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_fetch_field' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_fetch_lengths' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_fetch_object' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_fetch_row' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_field_flags' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_field_len' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_field_name' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_field_seek' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_field_table' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_field_type' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_free_result' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_get_client_info' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_get_host_info' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_get_proto_info' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_get_server_info' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_info' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_insert_id' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_list_dbs' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_list_fields' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_list_processes' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_list_tables' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_num_fields' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_num_rows' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_pconnect' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_ping' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_query' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_real_escape_string' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_result' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_select_db' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_set_charset' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_stat' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_tablename' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_thread_id' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'mysql_unbuffered_query' => 'Mysql_* is deprecated! Please use PDO or MySQLi [PHP 5.5.x]',
	'IntlDateFormatter::setTimeZoneID' => 'IntlDateFormatter::setTimeZoneID() is deprecated! Use IntlDateFormatter::setTimeZone() instead [PHP 5.5.x]',
	'datefmt_set_timezone_id' => 'datefmt_set_timezone_id() is deprecated! Use datefmt_set_timezone() instead [PHP 5.5.x]',
	'mcrypt_cbc' => 'mcrypt_cbc() is deprecated! Use mcrypt_generic() or mdecrypt_generic() instead [PHP 5.5.x]',
	'mcrypt_cfb' => 'mcrypt_cfb() is deprecated! Use mcrypt_generic() or mdecrypt_generic() instead [PHP 5.5.x]',
	'mcrypt_ecb' => 'mcrypt_ecb() is deprecated! Use mcrypt_generic() or mdecrypt_generic() instead [PHP 5.5.x]',
	'mcrypt_ofb' => 'mcrypt_ofb() is deprecated! Use mcrypt_generic() or mdecrypt_generic() instead [PHP 5.5.x]',
			
);
