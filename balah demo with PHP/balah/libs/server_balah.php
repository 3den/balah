<?php
/**
 * BALAH Class
 * @author Marcelo EDEN Siqueira 
 * @copyright (c) 2007-2009 3DEN Open Software
 * @version 1.0
 * @license GPL 
 */
class ServerBALAH{
    var $_uri;
    var $_balah;

    /**
     * Constructor
     *
     * @param string, name of the BALAH Attr passed by GET
     */
    function ServerBALAH($balah){
        // Name of the BALAH flag
        $this->_balah = $balah;
        // URL of the current page
        $this->_uri = $_SERVER['REQUEST_URI'];
    }

    /**
     * Build Link
     *
     * @param string path to content
     * @return string href
     */
    function build_link($path){
        // URI without BALAH flag
        $regex = '/(\&|\?)?'.$this->_balah.'(.*)/i';
        $uri_base = preg_replace($regex, '', $this->_uri);

        // Build HREF
        $href = $uri_base
            . (ereg('\?', $uri_base)? '&': '?')
            . $this->_balah .'='. $path;

        // Return HREF
        return $href;
    }

    /**
     * Include Page Sncronosly
     *
     * @param string $home default page to include
     */
    function include_httpage($home='blank.html'){
        // httpage Action
        if (isset($_GET[$this->_balah])) {
            // Sync Link, get page by GET
            $path = $_GET[$this->_balah];
        }

        // Default Action
        if (!is_file($path)) {
            // Default page
            $path = $home;
        }

        // Set the JS Constant BALAH_HOME
        echo '<script type="text/javascript">
            var BALAH_HOME = "'.$home.'"
        </script>';

        // Include httpage Content
        @include ($path);
    }

    /**
     * Define JS pseudoConstants
     * "const" keyword is not a standard
     *
     * @param string default target, DOM Element
     */
    function js_header($target){
        echo '<script  type="text/javascript" >
            var BALAH_REGEX = /(.*?)'.$this->_balah.'\=/;
            var BALAH_TARGET = "'.$target.'";
            var BALAH = "'.$this->_balah.'";
        </script>';
    }
}
?>
