<?php

namespace Map;

use \Quote;
use \QuoteQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'quothed' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class QuoteTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.QuoteTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'quothed';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Quote';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Quote';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 66;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 66;

    /**
     * the column name for the sessionid field
     */
    const COL_SESSIONID = 'quothed.sessionid';

    /**
     * the column name for the recno field
     */
    const COL_RECNO = 'quothed.recno';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'quothed.date';

    /**
     * the column name for the time field
     */
    const COL_TIME = 'quothed.time';

    /**
     * the column name for the quotnbr field
     */
    const COL_QUOTNBR = 'quothed.quotnbr';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'quothed.status';

    /**
     * the column name for the custid field
     */
    const COL_CUSTID = 'quothed.custid';

    /**
     * the column name for the billname field
     */
    const COL_BILLNAME = 'quothed.billname';

    /**
     * the column name for the billaddress field
     */
    const COL_BILLADDRESS = 'quothed.billaddress';

    /**
     * the column name for the billaddress2 field
     */
    const COL_BILLADDRESS2 = 'quothed.billaddress2';

    /**
     * the column name for the billaddress3 field
     */
    const COL_BILLADDRESS3 = 'quothed.billaddress3';

    /**
     * the column name for the billcountry field
     */
    const COL_BILLCOUNTRY = 'quothed.billcountry';

    /**
     * the column name for the billcity field
     */
    const COL_BILLCITY = 'quothed.billcity';

    /**
     * the column name for the billstate field
     */
    const COL_BILLSTATE = 'quothed.billstate';

    /**
     * the column name for the billzip field
     */
    const COL_BILLZIP = 'quothed.billzip';

    /**
     * the column name for the shiptoid field
     */
    const COL_SHIPTOID = 'quothed.shiptoid';

    /**
     * the column name for the shipname field
     */
    const COL_SHIPNAME = 'quothed.shipname';

    /**
     * the column name for the shipaddress field
     */
    const COL_SHIPADDRESS = 'quothed.shipaddress';

    /**
     * the column name for the shipaddress2 field
     */
    const COL_SHIPADDRESS2 = 'quothed.shipaddress2';

    /**
     * the column name for the shipaddress3 field
     */
    const COL_SHIPADDRESS3 = 'quothed.shipaddress3';

    /**
     * the column name for the shipcountry field
     */
    const COL_SHIPCOUNTRY = 'quothed.shipcountry';

    /**
     * the column name for the shipcity field
     */
    const COL_SHIPCITY = 'quothed.shipcity';

    /**
     * the column name for the shipstate field
     */
    const COL_SHIPSTATE = 'quothed.shipstate';

    /**
     * the column name for the shipzip field
     */
    const COL_SHIPZIP = 'quothed.shipzip';

    /**
     * the column name for the contact field
     */
    const COL_CONTACT = 'quothed.contact';

    /**
     * the column name for the phone field
     */
    const COL_PHONE = 'quothed.phone';

    /**
     * the column name for the faxnbr field
     */
    const COL_FAXNBR = 'quothed.faxnbr';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'quothed.email';

    /**
     * the column name for the careof field
     */
    const COL_CAREOF = 'quothed.careof';

    /**
     * the column name for the quotdate field
     */
    const COL_QUOTDATE = 'quothed.quotdate';

    /**
     * the column name for the revdate field
     */
    const COL_REVDATE = 'quothed.revdate';

    /**
     * the column name for the expdate field
     */
    const COL_EXPDATE = 'quothed.expdate';

    /**
     * the column name for the pricecode field
     */
    const COL_PRICECODE = 'quothed.pricecode';

    /**
     * the column name for the pricecodedesc field
     */
    const COL_PRICECODEDESC = 'quothed.pricecodedesc';

    /**
     * the column name for the taxcode field
     */
    const COL_TAXCODE = 'quothed.taxcode';

    /**
     * the column name for the taxcodedesc field
     */
    const COL_TAXCODEDESC = 'quothed.taxcodedesc';

    /**
     * the column name for the termcode field
     */
    const COL_TERMCODE = 'quothed.termcode';

    /**
     * the column name for the termcodedesc field
     */
    const COL_TERMCODEDESC = 'quothed.termcodedesc';

    /**
     * the column name for the shipviacd field
     */
    const COL_SHIPVIACD = 'quothed.shipviacd';

    /**
     * the column name for the shipviadesc field
     */
    const COL_SHIPVIADESC = 'quothed.shipviadesc';

    /**
     * the column name for the sp1 field
     */
    const COL_SP1 = 'quothed.sp1';

    /**
     * the column name for the sp1pct field
     */
    const COL_SP1PCT = 'quothed.sp1pct';

    /**
     * the column name for the sp1name field
     */
    const COL_SP1NAME = 'quothed.sp1name';

    /**
     * the column name for the sp2 field
     */
    const COL_SP2 = 'quothed.sp2';

    /**
     * the column name for the sp2pct field
     */
    const COL_SP2PCT = 'quothed.sp2pct';

    /**
     * the column name for the sp2name field
     */
    const COL_SP2NAME = 'quothed.sp2name';

    /**
     * the column name for the sp3 field
     */
    const COL_SP3 = 'quothed.sp3';

    /**
     * the column name for the sp3pct field
     */
    const COL_SP3PCT = 'quothed.sp3pct';

    /**
     * the column name for the sp3name field
     */
    const COL_SP3NAME = 'quothed.sp3name';

    /**
     * the column name for the fob field
     */
    const COL_FOB = 'quothed.fob';

    /**
     * the column name for the deliverydesc field
     */
    const COL_DELIVERYDESC = 'quothed.deliverydesc';

    /**
     * the column name for the whse field
     */
    const COL_WHSE = 'quothed.whse';

    /**
     * the column name for the custpo field
     */
    const COL_CUSTPO = 'quothed.custpo';

    /**
     * the column name for the custref field
     */
    const COL_CUSTREF = 'quothed.custref';

    /**
     * the column name for the hasnotes field
     */
    const COL_HASNOTES = 'quothed.hasnotes';

    /**
     * the column name for the error field
     */
    const COL_ERROR = 'quothed.error';

    /**
     * the column name for the errormsg field
     */
    const COL_ERRORMSG = 'quothed.errormsg';

    /**
     * the column name for the subtotal field
     */
    const COL_SUBTOTAL = 'quothed.subtotal';

    /**
     * the column name for the salestax field
     */
    const COL_SALESTAX = 'quothed.salestax';

    /**
     * the column name for the freight field
     */
    const COL_FREIGHT = 'quothed.freight';

    /**
     * the column name for the misccost field
     */
    const COL_MISCCOST = 'quothed.misccost';

    /**
     * the column name for the ordertotal field
     */
    const COL_ORDERTOTAL = 'quothed.ordertotal';

    /**
     * the column name for the cost_total field
     */
    const COL_COST_TOTAL = 'quothed.cost_total';

    /**
     * the column name for the margin_amt field
     */
    const COL_MARGIN_AMT = 'quothed.margin_amt';

    /**
     * the column name for the margin_pct field
     */
    const COL_MARGIN_PCT = 'quothed.margin_pct';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'quothed.dummy';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Sessionid', 'Recno', 'Date', 'Time', 'Quotnbr', 'Status', 'Custid', 'Billname', 'Billaddress', 'Billaddress2', 'Billaddress3', 'Billcountry', 'Billcity', 'Billstate', 'Billzip', 'Shiptoid', 'Shipname', 'Shipaddress', 'Shipaddress2', 'Shipaddress3', 'Shipcountry', 'Shipcity', 'Shipstate', 'Shipzip', 'Contact', 'Phone', 'Faxnbr', 'Email', 'Careof', 'Quotdate', 'Revdate', 'Expdate', 'Pricecode', 'Pricecodedesc', 'Taxcode', 'Taxcodedesc', 'Termcode', 'Termcodedesc', 'Shipviacd', 'Shipviadesc', 'Sp1', 'Sp1pct', 'Sp1name', 'Sp2', 'Sp2pct', 'Sp2name', 'Sp3', 'Sp3pct', 'Sp3name', 'Fob', 'Deliverydesc', 'Whse', 'Custpo', 'Custref', 'Hasnotes', 'Error', 'Errormsg', 'Subtotal', 'Salestax', 'Freight', 'Misccost', 'Ordertotal', 'CostTotal', 'MarginAmt', 'MarginPct', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('sessionid', 'recno', 'date', 'time', 'quotnbr', 'status', 'custid', 'billname', 'billaddress', 'billaddress2', 'billaddress3', 'billcountry', 'billcity', 'billstate', 'billzip', 'shiptoid', 'shipname', 'shipaddress', 'shipaddress2', 'shipaddress3', 'shipcountry', 'shipcity', 'shipstate', 'shipzip', 'contact', 'phone', 'faxnbr', 'email', 'careof', 'quotdate', 'revdate', 'expdate', 'pricecode', 'pricecodedesc', 'taxcode', 'taxcodedesc', 'termcode', 'termcodedesc', 'shipviacd', 'shipviadesc', 'sp1', 'sp1pct', 'sp1name', 'sp2', 'sp2pct', 'sp2name', 'sp3', 'sp3pct', 'sp3name', 'fob', 'deliverydesc', 'whse', 'custpo', 'custref', 'hasnotes', 'error', 'errormsg', 'subtotal', 'salestax', 'freight', 'misccost', 'ordertotal', 'costTotal', 'marginAmt', 'marginPct', 'dummy', ),
        self::TYPE_COLNAME       => array(QuoteTableMap::COL_SESSIONID, QuoteTableMap::COL_RECNO, QuoteTableMap::COL_DATE, QuoteTableMap::COL_TIME, QuoteTableMap::COL_QUOTNBR, QuoteTableMap::COL_STATUS, QuoteTableMap::COL_CUSTID, QuoteTableMap::COL_BILLNAME, QuoteTableMap::COL_BILLADDRESS, QuoteTableMap::COL_BILLADDRESS2, QuoteTableMap::COL_BILLADDRESS3, QuoteTableMap::COL_BILLCOUNTRY, QuoteTableMap::COL_BILLCITY, QuoteTableMap::COL_BILLSTATE, QuoteTableMap::COL_BILLZIP, QuoteTableMap::COL_SHIPTOID, QuoteTableMap::COL_SHIPNAME, QuoteTableMap::COL_SHIPADDRESS, QuoteTableMap::COL_SHIPADDRESS2, QuoteTableMap::COL_SHIPADDRESS3, QuoteTableMap::COL_SHIPCOUNTRY, QuoteTableMap::COL_SHIPCITY, QuoteTableMap::COL_SHIPSTATE, QuoteTableMap::COL_SHIPZIP, QuoteTableMap::COL_CONTACT, QuoteTableMap::COL_PHONE, QuoteTableMap::COL_FAXNBR, QuoteTableMap::COL_EMAIL, QuoteTableMap::COL_CAREOF, QuoteTableMap::COL_QUOTDATE, QuoteTableMap::COL_REVDATE, QuoteTableMap::COL_EXPDATE, QuoteTableMap::COL_PRICECODE, QuoteTableMap::COL_PRICECODEDESC, QuoteTableMap::COL_TAXCODE, QuoteTableMap::COL_TAXCODEDESC, QuoteTableMap::COL_TERMCODE, QuoteTableMap::COL_TERMCODEDESC, QuoteTableMap::COL_SHIPVIACD, QuoteTableMap::COL_SHIPVIADESC, QuoteTableMap::COL_SP1, QuoteTableMap::COL_SP1PCT, QuoteTableMap::COL_SP1NAME, QuoteTableMap::COL_SP2, QuoteTableMap::COL_SP2PCT, QuoteTableMap::COL_SP2NAME, QuoteTableMap::COL_SP3, QuoteTableMap::COL_SP3PCT, QuoteTableMap::COL_SP3NAME, QuoteTableMap::COL_FOB, QuoteTableMap::COL_DELIVERYDESC, QuoteTableMap::COL_WHSE, QuoteTableMap::COL_CUSTPO, QuoteTableMap::COL_CUSTREF, QuoteTableMap::COL_HASNOTES, QuoteTableMap::COL_ERROR, QuoteTableMap::COL_ERRORMSG, QuoteTableMap::COL_SUBTOTAL, QuoteTableMap::COL_SALESTAX, QuoteTableMap::COL_FREIGHT, QuoteTableMap::COL_MISCCOST, QuoteTableMap::COL_ORDERTOTAL, QuoteTableMap::COL_COST_TOTAL, QuoteTableMap::COL_MARGIN_AMT, QuoteTableMap::COL_MARGIN_PCT, QuoteTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('sessionid', 'recno', 'date', 'time', 'quotnbr', 'status', 'custid', 'billname', 'billaddress', 'billaddress2', 'billaddress3', 'billcountry', 'billcity', 'billstate', 'billzip', 'shiptoid', 'shipname', 'shipaddress', 'shipaddress2', 'shipaddress3', 'shipcountry', 'shipcity', 'shipstate', 'shipzip', 'contact', 'phone', 'faxnbr', 'email', 'careof', 'quotdate', 'revdate', 'expdate', 'pricecode', 'pricecodedesc', 'taxcode', 'taxcodedesc', 'termcode', 'termcodedesc', 'shipviacd', 'shipviadesc', 'sp1', 'sp1pct', 'sp1name', 'sp2', 'sp2pct', 'sp2name', 'sp3', 'sp3pct', 'sp3name', 'fob', 'deliverydesc', 'whse', 'custpo', 'custref', 'hasnotes', 'error', 'errormsg', 'subtotal', 'salestax', 'freight', 'misccost', 'ordertotal', 'cost_total', 'margin_amt', 'margin_pct', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Sessionid' => 0, 'Recno' => 1, 'Date' => 2, 'Time' => 3, 'Quotnbr' => 4, 'Status' => 5, 'Custid' => 6, 'Billname' => 7, 'Billaddress' => 8, 'Billaddress2' => 9, 'Billaddress3' => 10, 'Billcountry' => 11, 'Billcity' => 12, 'Billstate' => 13, 'Billzip' => 14, 'Shiptoid' => 15, 'Shipname' => 16, 'Shipaddress' => 17, 'Shipaddress2' => 18, 'Shipaddress3' => 19, 'Shipcountry' => 20, 'Shipcity' => 21, 'Shipstate' => 22, 'Shipzip' => 23, 'Contact' => 24, 'Phone' => 25, 'Faxnbr' => 26, 'Email' => 27, 'Careof' => 28, 'Quotdate' => 29, 'Revdate' => 30, 'Expdate' => 31, 'Pricecode' => 32, 'Pricecodedesc' => 33, 'Taxcode' => 34, 'Taxcodedesc' => 35, 'Termcode' => 36, 'Termcodedesc' => 37, 'Shipviacd' => 38, 'Shipviadesc' => 39, 'Sp1' => 40, 'Sp1pct' => 41, 'Sp1name' => 42, 'Sp2' => 43, 'Sp2pct' => 44, 'Sp2name' => 45, 'Sp3' => 46, 'Sp3pct' => 47, 'Sp3name' => 48, 'Fob' => 49, 'Deliverydesc' => 50, 'Whse' => 51, 'Custpo' => 52, 'Custref' => 53, 'Hasnotes' => 54, 'Error' => 55, 'Errormsg' => 56, 'Subtotal' => 57, 'Salestax' => 58, 'Freight' => 59, 'Misccost' => 60, 'Ordertotal' => 61, 'CostTotal' => 62, 'MarginAmt' => 63, 'MarginPct' => 64, 'Dummy' => 65, ),
        self::TYPE_CAMELNAME     => array('sessionid' => 0, 'recno' => 1, 'date' => 2, 'time' => 3, 'quotnbr' => 4, 'status' => 5, 'custid' => 6, 'billname' => 7, 'billaddress' => 8, 'billaddress2' => 9, 'billaddress3' => 10, 'billcountry' => 11, 'billcity' => 12, 'billstate' => 13, 'billzip' => 14, 'shiptoid' => 15, 'shipname' => 16, 'shipaddress' => 17, 'shipaddress2' => 18, 'shipaddress3' => 19, 'shipcountry' => 20, 'shipcity' => 21, 'shipstate' => 22, 'shipzip' => 23, 'contact' => 24, 'phone' => 25, 'faxnbr' => 26, 'email' => 27, 'careof' => 28, 'quotdate' => 29, 'revdate' => 30, 'expdate' => 31, 'pricecode' => 32, 'pricecodedesc' => 33, 'taxcode' => 34, 'taxcodedesc' => 35, 'termcode' => 36, 'termcodedesc' => 37, 'shipviacd' => 38, 'shipviadesc' => 39, 'sp1' => 40, 'sp1pct' => 41, 'sp1name' => 42, 'sp2' => 43, 'sp2pct' => 44, 'sp2name' => 45, 'sp3' => 46, 'sp3pct' => 47, 'sp3name' => 48, 'fob' => 49, 'deliverydesc' => 50, 'whse' => 51, 'custpo' => 52, 'custref' => 53, 'hasnotes' => 54, 'error' => 55, 'errormsg' => 56, 'subtotal' => 57, 'salestax' => 58, 'freight' => 59, 'misccost' => 60, 'ordertotal' => 61, 'costTotal' => 62, 'marginAmt' => 63, 'marginPct' => 64, 'dummy' => 65, ),
        self::TYPE_COLNAME       => array(QuoteTableMap::COL_SESSIONID => 0, QuoteTableMap::COL_RECNO => 1, QuoteTableMap::COL_DATE => 2, QuoteTableMap::COL_TIME => 3, QuoteTableMap::COL_QUOTNBR => 4, QuoteTableMap::COL_STATUS => 5, QuoteTableMap::COL_CUSTID => 6, QuoteTableMap::COL_BILLNAME => 7, QuoteTableMap::COL_BILLADDRESS => 8, QuoteTableMap::COL_BILLADDRESS2 => 9, QuoteTableMap::COL_BILLADDRESS3 => 10, QuoteTableMap::COL_BILLCOUNTRY => 11, QuoteTableMap::COL_BILLCITY => 12, QuoteTableMap::COL_BILLSTATE => 13, QuoteTableMap::COL_BILLZIP => 14, QuoteTableMap::COL_SHIPTOID => 15, QuoteTableMap::COL_SHIPNAME => 16, QuoteTableMap::COL_SHIPADDRESS => 17, QuoteTableMap::COL_SHIPADDRESS2 => 18, QuoteTableMap::COL_SHIPADDRESS3 => 19, QuoteTableMap::COL_SHIPCOUNTRY => 20, QuoteTableMap::COL_SHIPCITY => 21, QuoteTableMap::COL_SHIPSTATE => 22, QuoteTableMap::COL_SHIPZIP => 23, QuoteTableMap::COL_CONTACT => 24, QuoteTableMap::COL_PHONE => 25, QuoteTableMap::COL_FAXNBR => 26, QuoteTableMap::COL_EMAIL => 27, QuoteTableMap::COL_CAREOF => 28, QuoteTableMap::COL_QUOTDATE => 29, QuoteTableMap::COL_REVDATE => 30, QuoteTableMap::COL_EXPDATE => 31, QuoteTableMap::COL_PRICECODE => 32, QuoteTableMap::COL_PRICECODEDESC => 33, QuoteTableMap::COL_TAXCODE => 34, QuoteTableMap::COL_TAXCODEDESC => 35, QuoteTableMap::COL_TERMCODE => 36, QuoteTableMap::COL_TERMCODEDESC => 37, QuoteTableMap::COL_SHIPVIACD => 38, QuoteTableMap::COL_SHIPVIADESC => 39, QuoteTableMap::COL_SP1 => 40, QuoteTableMap::COL_SP1PCT => 41, QuoteTableMap::COL_SP1NAME => 42, QuoteTableMap::COL_SP2 => 43, QuoteTableMap::COL_SP2PCT => 44, QuoteTableMap::COL_SP2NAME => 45, QuoteTableMap::COL_SP3 => 46, QuoteTableMap::COL_SP3PCT => 47, QuoteTableMap::COL_SP3NAME => 48, QuoteTableMap::COL_FOB => 49, QuoteTableMap::COL_DELIVERYDESC => 50, QuoteTableMap::COL_WHSE => 51, QuoteTableMap::COL_CUSTPO => 52, QuoteTableMap::COL_CUSTREF => 53, QuoteTableMap::COL_HASNOTES => 54, QuoteTableMap::COL_ERROR => 55, QuoteTableMap::COL_ERRORMSG => 56, QuoteTableMap::COL_SUBTOTAL => 57, QuoteTableMap::COL_SALESTAX => 58, QuoteTableMap::COL_FREIGHT => 59, QuoteTableMap::COL_MISCCOST => 60, QuoteTableMap::COL_ORDERTOTAL => 61, QuoteTableMap::COL_COST_TOTAL => 62, QuoteTableMap::COL_MARGIN_AMT => 63, QuoteTableMap::COL_MARGIN_PCT => 64, QuoteTableMap::COL_DUMMY => 65, ),
        self::TYPE_FIELDNAME     => array('sessionid' => 0, 'recno' => 1, 'date' => 2, 'time' => 3, 'quotnbr' => 4, 'status' => 5, 'custid' => 6, 'billname' => 7, 'billaddress' => 8, 'billaddress2' => 9, 'billaddress3' => 10, 'billcountry' => 11, 'billcity' => 12, 'billstate' => 13, 'billzip' => 14, 'shiptoid' => 15, 'shipname' => 16, 'shipaddress' => 17, 'shipaddress2' => 18, 'shipaddress3' => 19, 'shipcountry' => 20, 'shipcity' => 21, 'shipstate' => 22, 'shipzip' => 23, 'contact' => 24, 'phone' => 25, 'faxnbr' => 26, 'email' => 27, 'careof' => 28, 'quotdate' => 29, 'revdate' => 30, 'expdate' => 31, 'pricecode' => 32, 'pricecodedesc' => 33, 'taxcode' => 34, 'taxcodedesc' => 35, 'termcode' => 36, 'termcodedesc' => 37, 'shipviacd' => 38, 'shipviadesc' => 39, 'sp1' => 40, 'sp1pct' => 41, 'sp1name' => 42, 'sp2' => 43, 'sp2pct' => 44, 'sp2name' => 45, 'sp3' => 46, 'sp3pct' => 47, 'sp3name' => 48, 'fob' => 49, 'deliverydesc' => 50, 'whse' => 51, 'custpo' => 52, 'custref' => 53, 'hasnotes' => 54, 'error' => 55, 'errormsg' => 56, 'subtotal' => 57, 'salestax' => 58, 'freight' => 59, 'misccost' => 60, 'ordertotal' => 61, 'cost_total' => 62, 'margin_amt' => 63, 'margin_pct' => 64, 'dummy' => 65, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('quothed');
        $this->setPhpName('Quote');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Quote');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('sessionid', 'Sessionid', 'VARCHAR', true, 50, null);
        $this->addPrimaryKey('recno', 'Recno', 'INTEGER', true, null, null);
        $this->addColumn('date', 'Date', 'INTEGER', false, 8, null);
        $this->addColumn('time', 'Time', 'INTEGER', false, 8, null);
        $this->addColumn('quotnbr', 'Quotnbr', 'VARCHAR', false, 20, '');
        $this->addColumn('status', 'Status', 'VARCHAR', false, 1, '');
        $this->addColumn('custid', 'Custid', 'VARCHAR', false, 6, '');
        $this->addColumn('billname', 'Billname', 'VARCHAR', false, 30, '');
        $this->addColumn('billaddress', 'Billaddress', 'VARCHAR', false, 30, '');
        $this->addColumn('billaddress2', 'Billaddress2', 'VARCHAR', false, 30, '');
        $this->addColumn('billaddress3', 'Billaddress3', 'VARCHAR', false, 30, '');
        $this->addColumn('billcountry', 'Billcountry', 'VARCHAR', false, 4, '');
        $this->addColumn('billcity', 'Billcity', 'VARCHAR', false, 16, '');
        $this->addColumn('billstate', 'Billstate', 'VARCHAR', false, 2, '');
        $this->addColumn('billzip', 'Billzip', 'VARCHAR', false, 10, '');
        $this->addColumn('shiptoid', 'Shiptoid', 'VARCHAR', false, 6, '');
        $this->addColumn('shipname', 'Shipname', 'VARCHAR', false, 30, '');
        $this->addColumn('shipaddress', 'Shipaddress', 'VARCHAR', false, 30, '');
        $this->addColumn('shipaddress2', 'Shipaddress2', 'VARCHAR', false, 30, '');
        $this->addColumn('shipaddress3', 'Shipaddress3', 'VARCHAR', false, 30, '');
        $this->addColumn('shipcountry', 'Shipcountry', 'VARCHAR', false, 4, '');
        $this->addColumn('shipcity', 'Shipcity', 'VARCHAR', false, 16, '');
        $this->addColumn('shipstate', 'Shipstate', 'VARCHAR', false, 2, '');
        $this->addColumn('shipzip', 'Shipzip', 'VARCHAR', false, 10, '');
        $this->addColumn('contact', 'Contact', 'VARCHAR', false, 20, '');
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 12, '');
        $this->addColumn('faxnbr', 'Faxnbr', 'VARCHAR', false, 12, '');
        $this->addColumn('email', 'Email', 'VARCHAR', false, 50, '');
        $this->addColumn('careof', 'Careof', 'VARCHAR', false, 20, '');
        $this->addColumn('quotdate', 'Quotdate', 'VARCHAR', false, 10, '');
        $this->addColumn('revdate', 'Revdate', 'VARCHAR', false, 10, '');
        $this->addColumn('expdate', 'Expdate', 'VARCHAR', false, 10, '');
        $this->addColumn('pricecode', 'Pricecode', 'VARCHAR', false, 4, '');
        $this->addColumn('pricecodedesc', 'Pricecodedesc', 'VARCHAR', false, 20, '');
        $this->addColumn('taxcode', 'Taxcode', 'VARCHAR', false, 6, '');
        $this->addColumn('taxcodedesc', 'Taxcodedesc', 'VARCHAR', false, 20, '');
        $this->addColumn('termcode', 'Termcode', 'VARCHAR', false, 4, '');
        $this->addColumn('termcodedesc', 'Termcodedesc', 'VARCHAR', false, 20, '');
        $this->addColumn('shipviacd', 'Shipviacd', 'VARCHAR', false, 4, '');
        $this->addColumn('shipviadesc', 'Shipviadesc', 'VARCHAR', false, 20, '');
        $this->addColumn('sp1', 'Sp1', 'VARCHAR', false, 6, '');
        $this->addColumn('sp1pct', 'Sp1pct', 'VARCHAR', false, 10, '');
        $this->addColumn('sp1name', 'Sp1name', 'VARCHAR', false, 20, '');
        $this->addColumn('sp2', 'Sp2', 'VARCHAR', false, 6, '');
        $this->addColumn('sp2pct', 'Sp2pct', 'VARCHAR', false, 10, '');
        $this->addColumn('sp2name', 'Sp2name', 'VARCHAR', false, 20, '');
        $this->addColumn('sp3', 'Sp3', 'VARCHAR', false, 6, '');
        $this->addColumn('sp3pct', 'Sp3pct', 'VARCHAR', false, 10, '');
        $this->addColumn('sp3name', 'Sp3name', 'VARCHAR', false, 20, '');
        $this->addColumn('fob', 'Fob', 'VARCHAR', false, 4, '');
        $this->addColumn('deliverydesc', 'Deliverydesc', 'VARCHAR', false, 20, '');
        $this->addColumn('whse', 'Whse', 'VARCHAR', false, 2, '');
        $this->addColumn('custpo', 'Custpo', 'VARCHAR', false, 20, '');
        $this->addColumn('custref', 'Custref', 'VARCHAR', false, 20, '');
        $this->addColumn('hasnotes', 'Hasnotes', 'VARCHAR', false, 1, '');
        $this->addColumn('error', 'Error', 'VARCHAR', false, 1, '');
        $this->addColumn('errormsg', 'Errormsg', 'VARCHAR', false, 50, '');
        $this->addColumn('subtotal', 'Subtotal', 'DECIMAL', false, 10, 0);
        $this->addColumn('salestax', 'Salestax', 'DECIMAL', false, 10, 0);
        $this->addColumn('freight', 'Freight', 'DECIMAL', false, 10, 0);
        $this->addColumn('misccost', 'Misccost', 'DECIMAL', false, 10, 0);
        $this->addColumn('ordertotal', 'Ordertotal', 'DECIMAL', false, 10, 0);
        $this->addColumn('cost_total', 'CostTotal', 'DECIMAL', false, 10, 0);
        $this->addColumn('margin_amt', 'MarginAmt', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('margin_pct', 'MarginPct', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('dummy', 'Dummy', 'VARCHAR', false, 1, 'x');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \Quote $obj A \Quote object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getSessionid() || is_scalar($obj->getSessionid()) || is_callable([$obj->getSessionid(), '__toString']) ? (string) $obj->getSessionid() : $obj->getSessionid()), (null === $obj->getRecno() || is_scalar($obj->getRecno()) || is_callable([$obj->getRecno(), '__toString']) ? (string) $obj->getRecno() : $obj->getRecno())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \Quote object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \Quote) {
                $key = serialize([(null === $value->getSessionid() || is_scalar($value->getSessionid()) || is_callable([$value->getSessionid(), '__toString']) ? (string) $value->getSessionid() : $value->getSessionid()), (null === $value->getRecno() || is_scalar($value->getRecno()) || is_callable([$value->getRecno(), '__toString']) ? (string) $value->getRecno() : $value->getRecno())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \Quote object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)])]);
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
            $pks = [];

        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? QuoteTableMap::CLASS_DEFAULT : QuoteTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Quote object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = QuoteTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = QuoteTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + QuoteTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QuoteTableMap::OM_CLASS;
            /** @var Quote $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            QuoteTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = QuoteTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = QuoteTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Quote $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QuoteTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(QuoteTableMap::COL_SESSIONID);
            $criteria->addSelectColumn(QuoteTableMap::COL_RECNO);
            $criteria->addSelectColumn(QuoteTableMap::COL_DATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_TIME);
            $criteria->addSelectColumn(QuoteTableMap::COL_QUOTNBR);
            $criteria->addSelectColumn(QuoteTableMap::COL_STATUS);
            $criteria->addSelectColumn(QuoteTableMap::COL_CUSTID);
            $criteria->addSelectColumn(QuoteTableMap::COL_BILLNAME);
            $criteria->addSelectColumn(QuoteTableMap::COL_BILLADDRESS);
            $criteria->addSelectColumn(QuoteTableMap::COL_BILLADDRESS2);
            $criteria->addSelectColumn(QuoteTableMap::COL_BILLADDRESS3);
            $criteria->addSelectColumn(QuoteTableMap::COL_BILLCOUNTRY);
            $criteria->addSelectColumn(QuoteTableMap::COL_BILLCITY);
            $criteria->addSelectColumn(QuoteTableMap::COL_BILLSTATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_BILLZIP);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPTOID);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPNAME);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPADDRESS);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPADDRESS2);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPADDRESS3);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPCOUNTRY);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPCITY);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPSTATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPZIP);
            $criteria->addSelectColumn(QuoteTableMap::COL_CONTACT);
            $criteria->addSelectColumn(QuoteTableMap::COL_PHONE);
            $criteria->addSelectColumn(QuoteTableMap::COL_FAXNBR);
            $criteria->addSelectColumn(QuoteTableMap::COL_EMAIL);
            $criteria->addSelectColumn(QuoteTableMap::COL_CAREOF);
            $criteria->addSelectColumn(QuoteTableMap::COL_QUOTDATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_REVDATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_EXPDATE);
            $criteria->addSelectColumn(QuoteTableMap::COL_PRICECODE);
            $criteria->addSelectColumn(QuoteTableMap::COL_PRICECODEDESC);
            $criteria->addSelectColumn(QuoteTableMap::COL_TAXCODE);
            $criteria->addSelectColumn(QuoteTableMap::COL_TAXCODEDESC);
            $criteria->addSelectColumn(QuoteTableMap::COL_TERMCODE);
            $criteria->addSelectColumn(QuoteTableMap::COL_TERMCODEDESC);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPVIACD);
            $criteria->addSelectColumn(QuoteTableMap::COL_SHIPVIADESC);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP1);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP1PCT);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP1NAME);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP2);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP2PCT);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP2NAME);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP3);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP3PCT);
            $criteria->addSelectColumn(QuoteTableMap::COL_SP3NAME);
            $criteria->addSelectColumn(QuoteTableMap::COL_FOB);
            $criteria->addSelectColumn(QuoteTableMap::COL_DELIVERYDESC);
            $criteria->addSelectColumn(QuoteTableMap::COL_WHSE);
            $criteria->addSelectColumn(QuoteTableMap::COL_CUSTPO);
            $criteria->addSelectColumn(QuoteTableMap::COL_CUSTREF);
            $criteria->addSelectColumn(QuoteTableMap::COL_HASNOTES);
            $criteria->addSelectColumn(QuoteTableMap::COL_ERROR);
            $criteria->addSelectColumn(QuoteTableMap::COL_ERRORMSG);
            $criteria->addSelectColumn(QuoteTableMap::COL_SUBTOTAL);
            $criteria->addSelectColumn(QuoteTableMap::COL_SALESTAX);
            $criteria->addSelectColumn(QuoteTableMap::COL_FREIGHT);
            $criteria->addSelectColumn(QuoteTableMap::COL_MISCCOST);
            $criteria->addSelectColumn(QuoteTableMap::COL_ORDERTOTAL);
            $criteria->addSelectColumn(QuoteTableMap::COL_COST_TOTAL);
            $criteria->addSelectColumn(QuoteTableMap::COL_MARGIN_AMT);
            $criteria->addSelectColumn(QuoteTableMap::COL_MARGIN_PCT);
            $criteria->addSelectColumn(QuoteTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.sessionid');
            $criteria->addSelectColumn($alias . '.recno');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.time');
            $criteria->addSelectColumn($alias . '.quotnbr');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.custid');
            $criteria->addSelectColumn($alias . '.billname');
            $criteria->addSelectColumn($alias . '.billaddress');
            $criteria->addSelectColumn($alias . '.billaddress2');
            $criteria->addSelectColumn($alias . '.billaddress3');
            $criteria->addSelectColumn($alias . '.billcountry');
            $criteria->addSelectColumn($alias . '.billcity');
            $criteria->addSelectColumn($alias . '.billstate');
            $criteria->addSelectColumn($alias . '.billzip');
            $criteria->addSelectColumn($alias . '.shiptoid');
            $criteria->addSelectColumn($alias . '.shipname');
            $criteria->addSelectColumn($alias . '.shipaddress');
            $criteria->addSelectColumn($alias . '.shipaddress2');
            $criteria->addSelectColumn($alias . '.shipaddress3');
            $criteria->addSelectColumn($alias . '.shipcountry');
            $criteria->addSelectColumn($alias . '.shipcity');
            $criteria->addSelectColumn($alias . '.shipstate');
            $criteria->addSelectColumn($alias . '.shipzip');
            $criteria->addSelectColumn($alias . '.contact');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.faxnbr');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.careof');
            $criteria->addSelectColumn($alias . '.quotdate');
            $criteria->addSelectColumn($alias . '.revdate');
            $criteria->addSelectColumn($alias . '.expdate');
            $criteria->addSelectColumn($alias . '.pricecode');
            $criteria->addSelectColumn($alias . '.pricecodedesc');
            $criteria->addSelectColumn($alias . '.taxcode');
            $criteria->addSelectColumn($alias . '.taxcodedesc');
            $criteria->addSelectColumn($alias . '.termcode');
            $criteria->addSelectColumn($alias . '.termcodedesc');
            $criteria->addSelectColumn($alias . '.shipviacd');
            $criteria->addSelectColumn($alias . '.shipviadesc');
            $criteria->addSelectColumn($alias . '.sp1');
            $criteria->addSelectColumn($alias . '.sp1pct');
            $criteria->addSelectColumn($alias . '.sp1name');
            $criteria->addSelectColumn($alias . '.sp2');
            $criteria->addSelectColumn($alias . '.sp2pct');
            $criteria->addSelectColumn($alias . '.sp2name');
            $criteria->addSelectColumn($alias . '.sp3');
            $criteria->addSelectColumn($alias . '.sp3pct');
            $criteria->addSelectColumn($alias . '.sp3name');
            $criteria->addSelectColumn($alias . '.fob');
            $criteria->addSelectColumn($alias . '.deliverydesc');
            $criteria->addSelectColumn($alias . '.whse');
            $criteria->addSelectColumn($alias . '.custpo');
            $criteria->addSelectColumn($alias . '.custref');
            $criteria->addSelectColumn($alias . '.hasnotes');
            $criteria->addSelectColumn($alias . '.error');
            $criteria->addSelectColumn($alias . '.errormsg');
            $criteria->addSelectColumn($alias . '.subtotal');
            $criteria->addSelectColumn($alias . '.salestax');
            $criteria->addSelectColumn($alias . '.freight');
            $criteria->addSelectColumn($alias . '.misccost');
            $criteria->addSelectColumn($alias . '.ordertotal');
            $criteria->addSelectColumn($alias . '.cost_total');
            $criteria->addSelectColumn($alias . '.margin_amt');
            $criteria->addSelectColumn($alias . '.margin_pct');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(QuoteTableMap::DATABASE_NAME)->getTable(QuoteTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(QuoteTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(QuoteTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new QuoteTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Quote or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Quote object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Quote) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QuoteTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(QuoteTableMap::COL_SESSIONID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(QuoteTableMap::COL_RECNO, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = QuoteQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            QuoteTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                QuoteTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the quothed table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return QuoteQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Quote or Criteria object.
     *
     * @param mixed               $criteria Criteria or Quote object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Quote object
        }


        // Set the correct dbName
        $query = QuoteQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // QuoteTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
QuoteTableMap::buildTableMap();
