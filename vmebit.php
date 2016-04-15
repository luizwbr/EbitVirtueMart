<?php
/**
 * $Id: webservicevmteste.php 1.0.0 2012-07-26 05:39:14 Luiz Weber $
 * @package	    Joomla! 
 * @subpackage	VM E-bit
 * @version     1.0.0
 * @description VM E-bit
 * @copyright	  Copyright © 2012 - Webgenium System All rights reserved.
 * @license		  GNU General Public License v2.0
 * @author		  Luiz Weber
 * @author mail	suporte@webgenium.com.br
 * @website		  http://webgenium.com.br
 *
 *
 * The events triggered in Joomla!
 * -------------------------------
 * onAfterInitialise()
 * onAfterRoute()
 * onAfterDispatch()
 * onAfterRender()
 *
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


/**
 * Example System Plugin
 *
 * @package	    Joomla! 
 * @subpackage	VM E-bit
 * @since       1.5
 */
class plgSystemVmebit extends JPlugin {
    /**
     * Constructor
     *
     * For php4 compatability we must not use the __constructor as a constructor for plugins
     * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
     * This causes problems with cross-referencing necessary for the observer design pattern.
     *
     * @access        protected
     * @param   object  $subject The object to observe
     */
    function plgSystemVmebit( &$subject, $config ) {
       parent::__construct( $subject, $config );

       // Do some extra initialisation in this constructor if required
    }

    // página pedidos
    function plgVmOnShowOrderFEPayment($virtuemart_order_id, $virtuemart_paymentmethod_id, &$payment_name) {
        $app =& JFactory::getApplication();
        if($app->getName() != 'site') {
            return true;
        }

        $mode = $this->params->get('mode');
        if ($mode != '1') {
            $view = JRequest::getVar('view');
            if ($view == 'orders') {
                echo $this->params->get('code');
            }
        }
    }

    // página checkout
    function plgVmConfirmedOrder($cart, $order) {
        $app =& JFactory::getApplication();
        if($app->getName() != 'site') {
            return true;
        }
        $mode = $this->params->get('mode');
        if ($mode != '2') {
            echo $this->params->get('code');
        }

    }
   
   /**
     * Do something onAfterInitialise 
     *
	   * @access	
	   * @param	
     */
    function onAfterInitialise()
    {
      // Your custom code here
    }

   /**
     * Do something onAfterRoute 
     *
	   * @access	
	   * @param	
     */
    function onAfterRoute()
    {
      // Your custom code here        
    }

   /**
     * Do something onAfterDispatch 
     *
	   * @access	
	   * @param	
     */
    function onAfterDispatch()
    {
      // Your custom code here    
    }

   /**
     * Do something onAfterRender 
     *
	   * @access	
	   * @param	
     */
    function onAfterRender()
    {
      // Your custom code here    
    }
    
} // END PLUGIN  Webservicevmteste

?>