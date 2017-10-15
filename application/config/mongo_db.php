<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$config['mongo_db']['active'] = 'default';
$config['mongo_db']['default']['no_auth'] = FALSE;
$config['mongo_db']['default']['hostname'] = 'ds061777.mlab.com:61777';
$config['mongo_db']['default']['port'] = '27017';
$config['mongo_db']['default']['username'] = 'pro';
$config['mongo_db']['default']['password'] = '123456';
$config['mongo_db']['default']['database'] = 'pro';
$config['mongo_db']['default']['db_debug'] = TRUE;
$config['mongo_db']['default']['return_as'] = 'array';
$config['mongo_db']['default']['write_concerns'] = (int)1;
$config['mongo_db']['default']['journal'] = TRUE;
$config['mongo_db']['default']['read_preference'] = NULL;
$config['mongo_db']['default']['read_preference_tags'] = NULL;
$config['mongo_db']['default']['no_auth'] = FALSE;
$config['mongo_db']['test']['hostname'] = 'localhost';
$config['mongo_db']['test']['port'] = '27017';
$config['mongo_db']['test']['username'] = '';
$config['mongo_db']['test']['password'] = '';
$config['mongo_db']['test']['database'] = '';
$config['mongo_db']['test']['db_debug'] = TRUE;
$config['mongo_db']['test']['return_as'] = 'array';
$config['mongo_db']['test']['write_concerns'] = (int)1;
$config['mongo_db']['test']['journal'] = TRUE;
$config['mongo_db']['test']['read_preference'] = NULL;
$config['mongo_db']['test']['read_preference_tags'] = NULL;