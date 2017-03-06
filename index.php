<?php 

/** 
 * Projectname
 * - CIMS | Comfortable Intelligent Management System
 * 
 * Namespace (Main): Xims
**/

namespace CIMS;

// Use Class Autoloader
use \Autoloader;

function preview( $object )
{
    echo "<pre>";
    print_r( $object );
    echo "</pre><br><br>";
}

class Routing {

    private $rootDirectory;
    private $directoryTree;

    function __construct( $dir = "" )
    {
        $directoryTree = [];
        $this->rootDirectory = __DIR__;
    }

    public function registerDirectoryTree( $directoryTree )
    {
        
    }
    
    private function pathToArray(  )
    {

    }

}


$system = new Routing( __DIR__ );



$system->registerRoute( "A/B/C/D/E/F/" );