<?php
session_start();
require('../app/app.php');

ensureUserIsAuth();


 echo __file__;
 // view('admin/index', getTerms());
 view('admin/index', Data::getTerms());
