<?php

namespace Sunnysideup\SalesforcePartner\Model;

use DataObject;
use ReadonlyField;
use TextField;

/**
 * this can be linked to pages / other objects using many_many relationships
 * so that you can send default record values to Salesforce
 */
class SalesforceDefaultContactField extends DataObject
{
    /**
     * contact fields that should be created by default...
     * @var array
     */
    private static $defaults_records = [];

    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Default Contact Field';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Default Contact Fields';

    /**
     * @var array
     */

    /**
     * ### @@@@ START REPLACEMENT @@@@ ###
     * OLD: private static $db (case sensitive)
     * NEW:
    private static $db (COMPLEX)
     * EXP: Check that is class indeed extends DataObject and that it is not a data-extension!
     * ### @@@@ STOP REPLACEMENT @@@@ ###
     */
    private static $table_name = 'SalesforceDefaultContactField';

    /**
     * ### @@@@ START REPLACEMENT @@@@ ###
     * WHY: upgrade to SS4
     * OLD: private static $db = (case sensitive)
     * NEW: private static $db = (COMPLEX)
     * EXP: Make sure to add a private static $table_name!
     * ### @@@@ STOP REPLACEMENT @@@@ ###
     */
    private static $db = [
        'Key' => 'Varchar',
        'Value' => 'Varchar',
    ];

    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @var array
     */
    private static $summary_fields = [
        'Key' => 'Field Name',
        'Value' => 'Field Value',
    ];

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Key . ' = ' . $this->BetterValueHumanReadable();
    }

    public function requireDefaultRecords()
    {
        foreach ($this->Config()->get('default_records') as $key => $value) {
            $filter = [
                'Key' => $key,
            ];

            $obj = self::get()->filter($filter)->first();
            if (! $obj) {
                $obj = self::create($filter);
                $obj->Value = $value;
                $obj->write();
            }
        }
    }

    /**
     * @return mixed
     */
    public function BetterValue()
    {
        if (strtolower($this->Value) === 'true') {
            return 'true';
        } elseif (strtolower($this->Value) === 'false') {
            return 'false';
        } elseif (is_numeric($this->Value)) {
            return floatval($this->Value);
        }

        return trim($this->Value);
    }

    /**
     * @return mixed
     */
    public function BetterValueHumanReadable()
    {
        return $this->BetterValue();
    }

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            'Root.Main',
            [
                TextField::create(
                    'Value',
                    'Value'
                )->setDescription('For a boolean value, simply enter TRUE or FALSE'),
                ReadonlyField::create(
                    'BetterValueHumanReadableNice',
                    'Calculated Value',
                    $this->BetterValueHumanReadable()
                ),
                ReadonlyField::create(
                    'FieldType',
                    'Field Type',
                    gettype($this->BetterValue())
                ),
            ]
        );

        return $fields;
    }
}
