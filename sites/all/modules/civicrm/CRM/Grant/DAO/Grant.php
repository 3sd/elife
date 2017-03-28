<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Grant/Grant.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:5b5a9e7de7ef9bec79b0aa543804422c)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Grant_DAO_Grant constructor.
 */
class CRM_Grant_DAO_Grant extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_grant';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique Grant id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Contact ID of contact record given grant belongs to.
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * Date on which grant application was received by donor.
   *
   * @var date
   */
  public $application_received_date;
  /**
   * Date on which grant decision was made.
   *
   * @var date
   */
  public $decision_date;
  /**
   * Date on which grant money transfer was made.
   *
   * @var date
   */
  public $money_transfer_date;
  /**
   * Date on which grant report is due.
   *
   * @var date
   */
  public $grant_due_date;
  /**
   * Yes/No field stating whether grant report was received by donor.
   *
   * @var boolean
   */
  public $grant_report_received;
  /**
   * Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.
   *
   * @var int unsigned
   */
  public $grant_type_id;
  /**
   * Requested grant amount, in default currency.
   *
   * @var float
   */
  public $amount_total;
  /**
   * Requested grant amount, in original currency (optional).
   *
   * @var float
   */
  public $amount_requested;
  /**
   * Granted amount, in default currency.
   *
   * @var float
   */
  public $amount_granted;
  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;
  /**
   * Grant rationale.
   *
   * @var text
   */
  public $rationale;
  /**
   * Id of Grant status.
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * FK to Financial Type.
   *
   * @var int unsigned
   */
  public $financial_type_id;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_grant';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'financial_type_id', 'civicrm_financial_type', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'grant_id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant ID') ,
          'description' => 'Unique Grant id',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_grant.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
        ) ,
        'grant_contact_id' => array(
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID') ,
          'description' => 'Contact ID of contact record given grant belongs to.',
          'required' => true,
          'export' => true,
          'where' => 'civicrm_grant.contact_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => array(
            'type' => 'EntityRef',
          ) ,
        ) ,
        'application_received_date' => array(
          'name' => 'application_received_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Application received date') ,
          'description' => 'Date on which grant application was received by donor.',
          'export' => true,
          'where' => 'civicrm_grant.application_received_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
        ) ,
        'decision_date' => array(
          'name' => 'decision_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Decision date') ,
          'description' => 'Date on which grant decision was made.',
          'import' => true,
          'where' => 'civicrm_grant.decision_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'grant_money_transfer_date' => array(
          'name' => 'money_transfer_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Grant Money transfer date') ,
          'description' => 'Date on which grant money transfer was made.',
          'import' => true,
          'where' => 'civicrm_grant.money_transfer_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'grant_due_date' => array(
          'name' => 'grant_due_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Grant Due Date') ,
          'description' => 'Date on which grant report is due.',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'grant_report_received' => array(
          'name' => 'grant_report_received',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Grant report received') ,
          'description' => 'Yes/No field stating whether grant report was received by donor.',
          'import' => true,
          'where' => 'civicrm_grant.grant_report_received',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'grant_type_id' => array(
          'name' => 'grant_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant Type') ,
          'description' => 'Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.',
          'required' => true,
          'export' => true,
          'where' => 'civicrm_grant.grant_type_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'grant_type',
            'optionEditPath' => 'civicrm/admin/options/grant_type',
          )
        ) ,
        'amount_total' => array(
          'name' => 'amount_total',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Total Amount') ,
          'description' => 'Requested grant amount, in default currency.',
          'required' => true,
          'precision' => array(
            20,
            2
          ) ,
          'import' => true,
          'where' => 'civicrm_grant.amount_total',
          'headerPattern' => '',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => true,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'amount_requested' => array(
          'name' => 'amount_requested',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Amount Requested') ,
          'description' => 'Requested grant amount, in original currency (optional).',
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'amount_granted' => array(
          'name' => 'amount_granted',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Amount granted') ,
          'description' => 'Granted amount, in default currency.',
          'precision' => array(
            20,
            2
          ) ,
          'import' => true,
          'where' => 'civicrm_grant.amount_granted',
          'headerPattern' => '',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => true,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'currency' => array(
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Grant Currency') ,
          'description' => '3 character string, value from config setting or input via user.',
          'required' => true,
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
          )
        ) ,
        'rationale' => array(
          'name' => 'rationale',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Grant Rationale') ,
          'description' => 'Grant rationale.',
          'rows' => 4,
          'cols' => 60,
          'import' => true,
          'where' => 'civicrm_grant.rationale',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'grant_status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant Status') ,
          'description' => 'Id of Grant status.',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_grant.status_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => false,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'grant_status',
            'optionEditPath' => 'civicrm/admin/options/grant_status',
          )
        ) ,
        'financial_type_id' => array(
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type') ,
          'description' => 'FK to Financial Type.',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => array(
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'grant', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'grant', $prefix, array());
    return $r;
  }
}
