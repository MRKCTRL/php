<?php

  define('APPPATH' , dirname(__file__) . '/../.');

  require ('config.php');
      require ('functions.php');
        require('data/file-functions.php');
          require 'data/fileDataProvider.class.php';
            require('data/data.class.php');
            require('data/mysqldataprovider.class.php');


            // Data::initialize(new fileDataProvider(CONFIG['dataFile']));
            Data::initialize(new mySqlDataProvider(CONFIG['db']));
// 5-51
