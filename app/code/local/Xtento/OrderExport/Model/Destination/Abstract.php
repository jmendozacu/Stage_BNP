<?php

/**
 * Product:       Xtento_OrderExport (1.2.4)
 * ID:            Local Deploy
 * Packaged:      2013-06-27T16:18:21+02:00
 * Last Modified: 2012-11-18T21:15:23+01:00
 * File:          app/code/local/Xtento/OrderExport/Model/Destination/Abstract.php
 * Copyright:     Copyright (c) 2013 XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

abstract class Xtento_OrderExport_Model_Destination_Abstract extends Mage_Core_Model_Abstract implements Xtento_OrderExport_Model_Destination_Interface
{
    protected $_connection;
}