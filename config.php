<?php
/**
 * Configuration File. Handles the initialization of the project 
 * along with checks for the directory structure.
 */
define( "DATA_DIR" , "data" );
define( "IMDB_CHECKINS_DIR" , DATA_DIR . "/" . "imdb-checkins" );

//Check if data folder exists and if not create it
if ( ! file_exists( DATA_DIR ) ) {
    mkdir( DATA_DIR , 0777 );
}

//Check if imdb checkins folder exists and if not create it
if ( ! file_exists( IMDB_CHECKINS_DIR ) ) {
    mkdir( IMDB_CHECKINS_DIR , 0777 );
}
?>