<?php
/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

/**
 * @category  Shopware
 * @package   Shopware\Tests
 * @copyright Copyright (c) 2012, shopware AG (http://www.shopware.de)
 */
class Shopware_Tests_Modules_Articles_getCategoryFiltersTest extends Enlight_Components_Test_Plugin_TestCase
{

    /**
     * Module instance
     *
     * @var sArticles
     */
    protected $module;

    /**
     * Test set up method
     */
    public function setUp()
    {
        parent::setUp();
        $this->module = Shopware()->Modules()->Articles();
    }

    protected $properties = array('optionName', 'optionValue', 'groupName', 'articleCount');

    protected $categories = array(
        array(
            'categoryId' => 14,
            'activeFilters' => array(),
            'result' => array(
                0 => array(
                    'id' => '7',
                    'optionID' => '7',
                    'optionName' => 'Trinktemperatur',
                    'optionPosition' => '0',
                    'valueID' => '35',
                    'optionValue' => 'Gekühlt',
                    'valuePosition' => '0',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '5',
                ),
                1 => array(
                    'id' => '7',
                    'optionID' => '7',
                    'optionName' => 'Trinktemperatur',
                    'optionPosition' => '0',
                    'valueID' => '36',
                    'optionValue' => 'Zimmertemperatur',
                    'valuePosition' => '1',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '4',
                ),
                2 => array(
                    'id' => '6',
                    'optionID' => '6',
                    'optionName' => 'Geschmack',
                    'optionPosition' => '1',
                    'valueID' => '33',
                    'optionValue' => 'mild',
                    'valuePosition' => '1',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '6',
                ),
                3 => array(
                    'id' => '6',
                    'optionID' => '6',
                    'optionName' => 'Geschmack',
                    'optionPosition' => '1',
                    'valueID' => '32',
                    'optionValue' => 'herb',
                    'valuePosition' => '0',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '3',
                ),
                4 => array(
                    'id' => '6',
                    'optionID' => '6',
                    'optionName' => 'Geschmack',
                    'optionPosition' => '1',
                    'valueID' => '34',
                    'optionValue' => 'fruchtig',
                    'valuePosition' => '2',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '1',
                ),
                5 => array(
                    'id' => '4',
                    'optionID' => '4',
                    'optionName' => 'Farbe',
                    'optionPosition' => '2',
                    'valueID' => '29',
                    'optionValue' => 'klar',
                    'valuePosition' => '1',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '3',
                ),
                6 => array(
                    'id' => '4',
                    'optionID' => '4',
                    'optionName' => 'Farbe',
                    'optionPosition' => '2',
                    'valueID' => '31',
                    'optionValue' => 'goldig',
                    'valuePosition' => '0',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '3',
                ),
                7 => array(
                    'id' => '4',
                    'optionID' => '4',
                    'optionName' => 'Farbe',
                    'optionPosition' => '2',
                    'valueID' => '28',
                    'optionValue' => 'rot',
                    'valuePosition' => '2',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '2',
                ),
                8 => array(
                    'id' => '4',
                    'optionID' => '4',
                    'optionName' => 'Farbe',
                    'optionPosition' => '2',
                    'valueID' => '41',
                    'optionValue' => 'schokobraun',
                    'valuePosition' => '3',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '1',
                ),
                9 => array(
                    'id' => '2',
                    'optionID' => '2',
                    'optionName' => 'Flaschengröße',
                    'optionPosition' => '3',
                    'valueID' => '24',
                    'optionValue' => '0,7 Liter',
                    'valuePosition' => '2',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '5',
                ),
                10 => array(
                    'id' => '2',
                    'optionID' => '2',
                    'optionName' => 'Flaschengröße',
                    'optionPosition' => '3',
                    'valueID' => '23',
                    'optionValue' => '0,5 Liter',
                    'valuePosition' => '1',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '4',
                ),
                11 => array(
                    'id' => '2',
                    'optionID' => '2',
                    'optionName' => 'Flaschengröße',
                    'optionPosition' => '3',
                    'valueID' => '22',
                    'optionValue' => '0,2 Liter',
                    'valuePosition' => '0',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '3',
                ),
                12 => array(
                    'id' => '2',
                    'optionID' => '2',
                    'optionName' => 'Flaschengröße',
                    'optionPosition' => '3',
                    'valueID' => '25',
                    'optionValue' => '1,0 Liter',
                    'valuePosition' => '3',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '3',
                ),
                13 => array(
                    'id' => '2',
                    'optionID' => '2',
                    'optionName' => 'Flaschengröße',
                    'optionPosition' => '3',
                    'valueID' => '26',
                    'optionValue' => '1,5 Liter',
                    'valuePosition' => '4',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '3',
                ),
                14 => array(
                    'id' => '2',
                    'optionID' => '2',
                    'optionName' => 'Flaschengröße',
                    'optionPosition' => '3',
                    'valueID' => '27',
                    'optionValue' => '5,0 Liter',
                    'valuePosition' => '5',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '1',
                ),
                15 => array(
                    'id' => '1',
                    'optionID' => '1',
                    'optionName' => 'Alkoholgehalt',
                    'optionPosition' => '4',
                    'valueID' => '40',
                    'optionValue' => '>30%',
                    'valuePosition' => '8',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '7',
                ),
                16 => array(
                    'id' => '1',
                    'optionID' => '1',
                    'optionName' => 'Alkoholgehalt',
                    'optionPosition' => '4',
                    'valueID' => '39',
                    'optionValue' => '< 20%',
                    'valuePosition' => '7',
                    'groupID' => '1',
                    'groupName' => 'Edelbrände',
                    'articleCount' => '3',
                ),
            )
        ),
        array(
            'categoryId' => 14,
            'activeFilters' => array ( 0 => '35' ),
            'result' => array ( 0 => array ( 'id' => '7', 'optionID' => '7', 'optionName' => 'Trinktemperatur', 'optionPosition' => '0', 'valueID' => '35', 'optionValue' => 'Gekühlt', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '5', ), 1 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '32', 'optionValue' => 'herb', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 2 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '33', 'optionValue' => 'mild', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 3 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '34', 'optionValue' => 'fruchtig', 'valuePosition' => '2', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 4 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '28', 'optionValue' => 'rot', 'valuePosition' => '2', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 5 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '29', 'optionValue' => 'klar', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 6 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '41', 'optionValue' => 'schokobraun', 'valuePosition' => '3', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 7 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '24', 'optionValue' => '0,7 Liter', 'valuePosition' => '2', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '5', ), 8 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '22', 'optionValue' => '0,2 Liter', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 9 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '25', 'optionValue' => '1,0 Liter', 'valuePosition' => '3', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 10 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '26', 'optionValue' => '1,5 Liter', 'valuePosition' => '4', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 11 => array ( 'id' => '1', 'optionID' => '1', 'optionName' => 'Alkoholgehalt', 'optionPosition' => '4', 'valueID' => '39', 'optionValue' => '< 20%', 'valuePosition' => '7', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 12 => array ( 'id' => '1', 'optionID' => '1', 'optionName' => 'Alkoholgehalt', 'optionPosition' => '4', 'valueID' => '40', 'optionValue' => '>30%', 'valuePosition' => '8', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), )
        ),
        array(
            'categoryId' => 14,
            'activeFilters' => array ( 0 => '35', 1 => '24', ),
            'result' => array ( 0 => array ( 'id' => '7', 'optionID' => '7', 'optionName' => 'Trinktemperatur', 'optionPosition' => '0', 'valueID' => '35', 'optionValue' => 'Gekühlt', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '5', ), 1 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '32', 'optionValue' => 'herb', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 2 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '33', 'optionValue' => 'mild', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 3 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '34', 'optionValue' => 'fruchtig', 'valuePosition' => '2', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 4 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '28', 'optionValue' => 'rot', 'valuePosition' => '2', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 5 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '29', 'optionValue' => 'klar', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 6 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '41', 'optionValue' => 'schokobraun', 'valuePosition' => '3', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 7 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '24', 'optionValue' => '0,7 Liter', 'valuePosition' => '2', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '5', ), 8 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '22', 'optionValue' => '0,2 Liter', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 9 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '25', 'optionValue' => '1,0 Liter', 'valuePosition' => '3', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 10 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '26', 'optionValue' => '1,5 Liter', 'valuePosition' => '4', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 11 => array ( 'id' => '1', 'optionID' => '1', 'optionName' => 'Alkoholgehalt', 'optionPosition' => '4', 'valueID' => '39', 'optionValue' => '< 20%', 'valuePosition' => '7', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 12 => array ( 'id' => '1', 'optionID' => '1', 'optionName' => 'Alkoholgehalt', 'optionPosition' => '4', 'valueID' => '40', 'optionValue' => '>30%', 'valuePosition' => '8', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), )
        ),
        array(
            'categoryId' => 21,
            'activeFilters' => array ( 0 => '33', ),
            'result' => array ( 0 => array ( 'id' => '7', 'optionID' => '7', 'optionName' => 'Trinktemperatur', 'optionPosition' => '0', 'valueID' => '36', 'optionValue' => 'Zimmertemperatur', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 1 => array ( 'id' => '7', 'optionID' => '7', 'optionName' => 'Trinktemperatur', 'optionPosition' => '0', 'valueID' => '35', 'optionValue' => 'Gekühlt', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 2 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '33', 'optionValue' => 'mild', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '6', ), 3 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '31', 'optionValue' => 'goldig', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 4 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '28', 'optionValue' => 'rot', 'valuePosition' => '2', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 5 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '41', 'optionValue' => 'schokobraun', 'valuePosition' => '3', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 6 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '23', 'optionValue' => '0,5 Liter', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 7 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '24', 'optionValue' => '0,7 Liter', 'valuePosition' => '2', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 8 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '26', 'optionValue' => '1,5 Liter', 'valuePosition' => '4', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), 9 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '22', 'optionValue' => '0,2 Liter', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 10 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '25', 'optionValue' => '1,0 Liter', 'valuePosition' => '3', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 11 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '27', 'optionValue' => '5,0 Liter', 'valuePosition' => '5', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 12 => array ( 'id' => '1', 'optionID' => '1', 'optionName' => 'Alkoholgehalt', 'optionPosition' => '4', 'valueID' => '40', 'optionValue' => '>30%', 'valuePosition' => '8', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 13 => array ( 'id' => '1', 'optionID' => '1', 'optionName' => 'Alkoholgehalt', 'optionPosition' => '4', 'valueID' => '39', 'optionValue' => '< 20%', 'valuePosition' => '7', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '2', ), )
        ),
        array(
            'categoryId' => 21,
            'activeFilters' => array ( 0 => '33', 1 => '23', ),
            'result' => array ( 0 => array ( 'id' => '7', 'optionID' => '7', 'optionName' => 'Trinktemperatur', 'optionPosition' => '0', 'valueID' => '36', 'optionValue' => 'Zimmertemperatur', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 1 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '33', 'optionValue' => 'mild', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 2 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '31', 'optionValue' => 'goldig', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 3 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '23', 'optionValue' => '0,5 Liter', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 4 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '26', 'optionValue' => '1,5 Liter', 'valuePosition' => '4', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 5 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '27', 'optionValue' => '5,0 Liter', 'valuePosition' => '5', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 6 => array ( 'id' => '1', 'optionID' => '1', 'optionName' => 'Alkoholgehalt', 'optionPosition' => '4', 'valueID' => '40', 'optionValue' => '>30%', 'valuePosition' => '8', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), )
        ),
        array(
            'categoryId' => 21,
            'activeFilters' => array ( 0 => '33', 1 => '23', 2 => '36', ),
            'result' => array ( 0 => array ( 'id' => '7', 'optionID' => '7', 'optionName' => 'Trinktemperatur', 'optionPosition' => '0', 'valueID' => '36', 'optionValue' => 'Zimmertemperatur', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 1 => array ( 'id' => '6', 'optionID' => '6', 'optionName' => 'Geschmack', 'optionPosition' => '1', 'valueID' => '33', 'optionValue' => 'mild', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 2 => array ( 'id' => '4', 'optionID' => '4', 'optionName' => 'Farbe', 'optionPosition' => '2', 'valueID' => '31', 'optionValue' => 'goldig', 'valuePosition' => '0', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '3', ), 3 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '23', 'optionValue' => '0,5 Liter', 'valuePosition' => '1', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), 4 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '26', 'optionValue' => '1,5 Liter', 'valuePosition' => '4', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 5 => array ( 'id' => '2', 'optionID' => '2', 'optionName' => 'Flaschengröße', 'optionPosition' => '3', 'valueID' => '27', 'optionValue' => '5,0 Liter', 'valuePosition' => '5', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '1', ), 6 => array ( 'id' => '1', 'optionID' => '1', 'optionName' => 'Alkoholgehalt', 'optionPosition' => '4', 'valueID' => '40', 'optionValue' => '>30%', 'valuePosition' => '8', 'groupID' => '1', 'groupName' => 'Edelbrände', 'articleCount' => '4', ), )
        ),
    );

    public function testCategoryFilters()
    {
        foreach($this->categories as $expected) {
            $result = $this->module->getCategoryFilters($expected['categoryId'], $expected['activeFilters']);
            $this->checkCategoryFilterResult($expected['result'], $result);
        }
    }

    protected function checkCategoryFilterResult($expected, $result)
    {
        $this->assertArrayCount(count($expected), $result);
        foreach($expected as $key => $currentExpected) {
            $currentResult = $result[$key];
            foreach($this->properties as $property) {
                $this->assertEquals($currentExpected[$property], $currentResult[$property]);
            }
        }
    }
}