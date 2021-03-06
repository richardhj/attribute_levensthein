<?php

/**
 * This file is part of MetaModels/attribute_levensthein.
 *
 * (c) 2012-2016 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage AttributeLevensthein
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_levensthein/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_levensthein'] = array
(
    'config' => array
    (
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary',
                'language,metamodel,attribute,item' => 'unique',
            )
        )
    ),
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => 'int(10) unsigned NOT NULL auto_increment'
        ),
        'metamodel' => array
        (
            'sql'                     => 'int(10) unsigned NOT NULL default \'0\''
        ),
        'attribute' => array
        (
            'sql'                     => 'int(10) unsigned NOT NULL default \'0\''
        ),
        'item' => array
        (
            'sql'                     => 'int(10) unsigned NOT NULL default \'0\''
        ),
        'language' => array
        (
            'sql'                     => 'varchar(5) NOT NULL default \'\''
        ),
        'checksum' => array
        (
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
    )
);
