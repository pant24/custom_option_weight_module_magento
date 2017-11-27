<?php 

$installer = $this;

$installer->getConnection()
->addColumn($installer->getTable('catalog/product_option_type_value'), 'weight','Decimal');

$installer->endSetup();