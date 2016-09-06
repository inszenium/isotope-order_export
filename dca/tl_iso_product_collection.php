<?php

/**
 * IsotopeOrderExport
 *
 * @copyright  centerscreen gmbh 2016 <https://www.center-screen.de>
 * @author     Kirsten Roschanski <git@kirsten-roschanski.de>
 * @package    IsotopeOrderExport
 * @license    LGPL 
 * @link       https://github.com/center-screen/isotope-order_export
 * @filesource
 */

/**
 * Table tl_iso_product_collection
 */

$GLOBALS['TL_DCA']['tl_iso_product_collection']['list']['global_operations']['export_orders'] = array
(
  'label'         => &$GLOBALS['TL_LANG']['tl_iso_product_collection']['export_orders'],
  'href'          => 'key=export_orders',
  'class'         => 'header_iso_export_csv isotope-export',
  'attributes'    => 'onclick="Backend.getScrollOffset();"'
);

$GLOBALS['TL_DCA']['tl_iso_product_collection']['list']['global_operations']['export'] = array
(
  'label'         => &$GLOBALS['TL_LANG']['tl_iso_product_collection']['export'],
  'href'          => '',
  'class'         => 'header_isotope-export',
  'attributes'    => 'onclick="Backend.getScrollOffset();" style="display:none"',
);

$GLOBALS['TL_DCA']['tl_iso_product_collection']['list']['global_operations']['export_items'] = array
(
  'label'         => &$GLOBALS['TL_LANG']['tl_iso_product_collection']['export_items'],
  'href'          => 'key=export_items',
  'class'         => 'header_iso_export_csv isotope-export',
  'attributes'    => 'onclick="Backend.getScrollOffset();"'
);

$GLOBALS['TL_DCA']['tl_iso_product_collection']['list']['global_operations']['export_bank'] = array
(
  'label'         => &$GLOBALS['TL_LANG']['tl_iso_product_collection']['export_bank'],
  'href'          => 'key=export_bank',
  'class'         => 'header_iso_export_csv isotope-export',
  'attributes'    => 'onclick="Backend.getScrollOffset();"'
);