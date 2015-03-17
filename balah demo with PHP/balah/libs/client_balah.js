/**
 * Client-Side
 * BALAH Object
 * ***************************
 *
 * @author 
 *
 */
var ClientBALAH = {
    //Target Element
    target: BALAH_TARGET,

    /**
     * Start Client-side Balah
     *
     * Start HashListener
     * Override onHashChanged
     * Converts Sysnchronous links to Asynchronous hashes
     * 
     * @return boolean True if is compatible and runing
     */
    init: function(){
        // Self must be ClientBALAH
        var self = ClientBALAH;

        // Star listening or Exit if not compatible
        if(!hashListener.init()){
            return false;
        }
        // the hash changed? Call Balah!
        hashListener.onHashChanged = self.call;

        // Change onClick event of all Balah links
        $('a[href*='+BALAH+']').click(function(){
            // Link Element
            var a = $(this);

            // HREF became an asynchronous Hash link
            var url = a.attr('href').replace(BALAH_REGEX, '#');
            a.attr('href', url);

            // Set target element
            self.target = a.attr('target') || BALAH_TARGET;
        });  
        return true;
    },

    /**
     * Ajax Call
     *
     * Get on the Location Hash as an action path
     * Load the async content inside the "TARGET" Element
     */
    call: function(){
        // Self must be ClientBALAH
        var self = ClientBALAH;

        // Get the path to load
        var path = hashListener.getHash().replace('#', '') || BALAH_HOME;
        // Call Ajax function
        jQuery(self.target).load(path, null, function(){
            // back to the Default Target
            self.target = BALAH_TARGET;
            
            // ... efects go here ...
        });
    }
}

// On document ready
$(function(){
    // Start BALAH!
    ClientBALAH.init();
});