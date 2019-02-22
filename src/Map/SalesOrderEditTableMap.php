<?php

namespace Map;

use \SalesOrderEdit;
use \SalesOrderEditQuery;
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
 * This class defines the structure of the 'ordrhed' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesOrderEditTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesOrderEditTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ordrhed';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesOrderEdit';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesOrderEdit';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 89;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 89;

    /**
     * the column name for the sessionid field
     */
    const COL_SESSIONID = 'ordrhed.sessionid';

    /**
     * the column name for the recno field
     */
    const COL_RECNO = 'ordrhed.recno';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'ordrhed.date';

    /**
     * the column name for the time field
     */
    const COL_TIME = 'ordrhed.time';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'ordrhed.type';

    /**
     * the column name for the custid field
     */
    const COL_CUSTID = 'ordrhed.custid';

    /**
     * the column name for the shiptoid field
     */
    const COL_SHIPTOID = 'ordrhed.shiptoid';

    /**
     * the column name for the custname field
     */
    const COL_CUSTNAME = 'ordrhed.custname';

    /**
     * the column name for the orderno field
     */
    const COL_ORDERNO = 'ordrhed.orderno';

    /**
     * the column name for the custpo field
     */
    const COL_CUSTPO = 'ordrhed.custpo';

    /**
     * the column name for the custref field
     */
    const COL_CUSTREF = 'ordrhed.custref';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'ordrhed.status';

    /**
     * the column name for the orderdate field
     */
    const COL_ORDERDATE = 'ordrhed.orderdate';

    /**
     * the column name for the careof field
     */
    const COL_CAREOF = 'ordrhed.careof';

    /**
     * the column name for the quotdate field
     */
    const COL_QUOTDATE = 'ordrhed.quotdate';

    /**
     * the column name for the invdate field
     */
    const COL_INVDATE = 'ordrhed.invdate';

    /**
     * the column name for the shipdate field
     */
    const COL_SHIPDATE = 'ordrhed.shipdate';

    /**
     * the column name for the revdate field
     */
    const COL_REVDATE = 'ordrhed.revdate';

    /**
     * the column name for the expdate field
     */
    const COL_EXPDATE = 'ordrhed.expdate';

    /**
     * the column name for the hasdocuments field
     */
    const COL_HASDOCUMENTS = 'ordrhed.hasdocuments';

    /**
     * the column name for the hastracking field
     */
    const COL_HASTRACKING = 'ordrhed.hastracking';

    /**
     * the column name for the subtotal field
     */
    const COL_SUBTOTAL = 'ordrhed.subtotal';

    /**
     * the column name for the salestax field
     */
    const COL_SALESTAX = 'ordrhed.salestax';

    /**
     * the column name for the freight field
     */
    const COL_FREIGHT = 'ordrhed.freight';

    /**
     * the column name for the misccost field
     */
    const COL_MISCCOST = 'ordrhed.misccost';

    /**
     * the column name for the ordertotal field
     */
    const COL_ORDERTOTAL = 'ordrhed.ordertotal';

    /**
     * the column name for the hasnotes field
     */
    const COL_HASNOTES = 'ordrhed.hasnotes';

    /**
     * the column name for the editord field
     */
    const COL_EDITORD = 'ordrhed.editord';

    /**
     * the column name for the error field
     */
    const COL_ERROR = 'ordrhed.error';

    /**
     * the column name for the errormsg field
     */
    const COL_ERRORMSG = 'ordrhed.errormsg';

    /**
     * the column name for the sconame field
     */
    const COL_SCONAME = 'ordrhed.sconame';

    /**
     * the column name for the shipname field
     */
    const COL_SHIPNAME = 'ordrhed.shipname';

    /**
     * the column name for the shipaddress field
     */
    const COL_SHIPADDRESS = 'ordrhed.shipaddress';

    /**
     * the column name for the shipaddress2 field
     */
    const COL_SHIPADDRESS2 = 'ordrhed.shipaddress2';

    /**
     * the column name for the shipcity field
     */
    const COL_SHIPCITY = 'ordrhed.shipcity';

    /**
     * the column name for the shipstate field
     */
    const COL_SHIPSTATE = 'ordrhed.shipstate';

    /**
     * the column name for the shipzip field
     */
    const COL_SHIPZIP = 'ordrhed.shipzip';

    /**
     * the column name for the shipcountry field
     */
    const COL_SHIPCOUNTRY = 'ordrhed.shipcountry';

    /**
     * the column name for the contact field
     */
    const COL_CONTACT = 'ordrhed.contact';

    /**
     * the column name for the phintl field
     */
    const COL_PHINTL = 'ordrhed.phintl';

    /**
     * the column name for the phone field
     */
    const COL_PHONE = 'ordrhed.phone';

    /**
     * the column name for the extension field
     */
    const COL_EXTENSION = 'ordrhed.extension';

    /**
     * the column name for the faxnbr field
     */
    const COL_FAXNBR = 'ordrhed.faxnbr';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'ordrhed.email';

    /**
     * the column name for the releasenbr field
     */
    const COL_RELEASENBR = 'ordrhed.releasenbr';

    /**
     * the column name for the shipviacd field
     */
    const COL_SHIPVIACD = 'ordrhed.shipviacd';

    /**
     * the column name for the shipviadesc field
     */
    const COL_SHIPVIADESC = 'ordrhed.shipviadesc';

    /**
     * the column name for the pricecode field
     */
    const COL_PRICECODE = 'ordrhed.pricecode';

    /**
     * the column name for the pricecodedesc field
     */
    const COL_PRICECODEDESC = 'ordrhed.pricecodedesc';

    /**
     * the column name for the pricedisp field
     */
    const COL_PRICEDISP = 'ordrhed.pricedisp';

    /**
     * the column name for the taxcode field
     */
    const COL_TAXCODE = 'ordrhed.taxcode';

    /**
     * the column name for the taxcodedesc field
     */
    const COL_TAXCODEDESC = 'ordrhed.taxcodedesc';

    /**
     * the column name for the taxcodedisp field
     */
    const COL_TAXCODEDISP = 'ordrhed.taxcodedisp';

    /**
     * the column name for the termcode field
     */
    const COL_TERMCODE = 'ordrhed.termcode';

    /**
     * the column name for the termtype field
     */
    const COL_TERMTYPE = 'ordrhed.termtype';

    /**
     * the column name for the termcodedesc field
     */
    const COL_TERMCODEDESC = 'ordrhed.termcodedesc';

    /**
     * the column name for the rqstdate field
     */
    const COL_RQSTDATE = 'ordrhed.rqstdate';

    /**
     * the column name for the shipcom field
     */
    const COL_SHIPCOM = 'ordrhed.shipcom';

    /**
     * the column name for the sp1 field
     */
    const COL_SP1 = 'ordrhed.sp1';

    /**
     * the column name for the sp1name field
     */
    const COL_SP1NAME = 'ordrhed.sp1name';

    /**
     * the column name for the sp2 field
     */
    const COL_SP2 = 'ordrhed.sp2';

    /**
     * the column name for the sp2name field
     */
    const COL_SP2NAME = 'ordrhed.sp2name';

    /**
     * the column name for the sp2disp field
     */
    const COL_SP2DISP = 'ordrhed.sp2disp';

    /**
     * the column name for the sp3 field
     */
    const COL_SP3 = 'ordrhed.sp3';

    /**
     * the column name for the sp3name field
     */
    const COL_SP3NAME = 'ordrhed.sp3name';

    /**
     * the column name for the sp3disp field
     */
    const COL_SP3DISP = 'ordrhed.sp3disp';

    /**
     * the column name for the fob field
     */
    const COL_FOB = 'ordrhed.fob';

    /**
     * the column name for the deliverydesc field
     */
    const COL_DELIVERYDESC = 'ordrhed.deliverydesc';

    /**
     * the column name for the whse field
     */
    const COL_WHSE = 'ordrhed.whse';

    /**
     * the column name for the cardnumber field
     */
    const COL_CARDNUMBER = 'ordrhed.cardnumber';

    /**
     * the column name for the cardexpire field
     */
    const COL_CARDEXPIRE = 'ordrhed.cardexpire';

    /**
     * the column name for the cardcode field
     */
    const COL_CARDCODE = 'ordrhed.cardcode';

    /**
     * the column name for the cardapproval field
     */
    const COL_CARDAPPROVAL = 'ordrhed.cardapproval';

    /**
     * the column name for the totalcost field
     */
    const COL_TOTALCOST = 'ordrhed.totalcost';

    /**
     * the column name for the totaldiscount field
     */
    const COL_TOTALDISCOUNT = 'ordrhed.totaldiscount';

    /**
     * the column name for the paymenttype field
     */
    const COL_PAYMENTTYPE = 'ordrhed.paymenttype';

    /**
     * the column name for the srcdatefrom field
     */
    const COL_SRCDATEFROM = 'ordrhed.srcdatefrom';

    /**
     * the column name for the srcdatethru field
     */
    const COL_SRCDATETHRU = 'ordrhed.srcdatethru';

    /**
     * the column name for the billname field
     */
    const COL_BILLNAME = 'ordrhed.billname';

    /**
     * the column name for the billaddress field
     */
    const COL_BILLADDRESS = 'ordrhed.billaddress';

    /**
     * the column name for the billaddress2 field
     */
    const COL_BILLADDRESS2 = 'ordrhed.billaddress2';

    /**
     * the column name for the billaddress3 field
     */
    const COL_BILLADDRESS3 = 'ordrhed.billaddress3';

    /**
     * the column name for the billcountry field
     */
    const COL_BILLCOUNTRY = 'ordrhed.billcountry';

    /**
     * the column name for the billcity field
     */
    const COL_BILLCITY = 'ordrhed.billcity';

    /**
     * the column name for the billstate field
     */
    const COL_BILLSTATE = 'ordrhed.billstate';

    /**
     * the column name for the billzip field
     */
    const COL_BILLZIP = 'ordrhed.billzip';

    /**
     * the column name for the prntfmt field
     */
    const COL_PRNTFMT = 'ordrhed.prntfmt';

    /**
     * the column name for the prntfmtdisp field
     */
    const COL_PRNTFMTDISP = 'ordrhed.prntfmtdisp';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ordrhed.dummy';

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
        self::TYPE_PHPNAME       => array('Sessionid', 'Recno', 'Date', 'Time', 'Type', 'Custid', 'Shiptoid', 'Custname', 'Orderno', 'Custpo', 'Custref', 'Status', 'Orderdate', 'Careof', 'Quotdate', 'Invdate', 'Shipdate', 'Revdate', 'Expdate', 'Hasdocuments', 'Hastracking', 'Subtotal', 'Salestax', 'Freight', 'Misccost', 'Ordertotal', 'Hasnotes', 'Editord', 'Error', 'Errormsg', 'Sconame', 'Shipname', 'Shipaddress', 'Shipaddress2', 'Shipcity', 'Shipstate', 'Shipzip', 'Shipcountry', 'Contact', 'Phintl', 'Phone', 'Extension', 'Faxnbr', 'Email', 'Releasenbr', 'Shipviacd', 'Shipviadesc', 'Pricecode', 'Pricecodedesc', 'Pricedisp', 'Taxcode', 'Taxcodedesc', 'Taxcodedisp', 'Termcode', 'Termtype', 'Termcodedesc', 'Rqstdate', 'Shipcom', 'Sp1', 'Sp1name', 'Sp2', 'Sp2name', 'Sp2disp', 'Sp3', 'Sp3name', 'Sp3disp', 'Fob', 'Deliverydesc', 'Whse', 'Cardnumber', 'Cardexpire', 'Cardcode', 'Cardapproval', 'Totalcost', 'Totaldiscount', 'Paymenttype', 'Srcdatefrom', 'Srcdatethru', 'Billname', 'Billaddress', 'Billaddress2', 'Billaddress3', 'Billcountry', 'Billcity', 'Billstate', 'Billzip', 'Prntfmt', 'Prntfmtdisp', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('sessionid', 'recno', 'date', 'time', 'type', 'custid', 'shiptoid', 'custname', 'orderno', 'custpo', 'custref', 'status', 'orderdate', 'careof', 'quotdate', 'invdate', 'shipdate', 'revdate', 'expdate', 'hasdocuments', 'hastracking', 'subtotal', 'salestax', 'freight', 'misccost', 'ordertotal', 'hasnotes', 'editord', 'error', 'errormsg', 'sconame', 'shipname', 'shipaddress', 'shipaddress2', 'shipcity', 'shipstate', 'shipzip', 'shipcountry', 'contact', 'phintl', 'phone', 'extension', 'faxnbr', 'email', 'releasenbr', 'shipviacd', 'shipviadesc', 'pricecode', 'pricecodedesc', 'pricedisp', 'taxcode', 'taxcodedesc', 'taxcodedisp', 'termcode', 'termtype', 'termcodedesc', 'rqstdate', 'shipcom', 'sp1', 'sp1name', 'sp2', 'sp2name', 'sp2disp', 'sp3', 'sp3name', 'sp3disp', 'fob', 'deliverydesc', 'whse', 'cardnumber', 'cardexpire', 'cardcode', 'cardapproval', 'totalcost', 'totaldiscount', 'paymenttype', 'srcdatefrom', 'srcdatethru', 'billname', 'billaddress', 'billaddress2', 'billaddress3', 'billcountry', 'billcity', 'billstate', 'billzip', 'prntfmt', 'prntfmtdisp', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesOrderEditTableMap::COL_SESSIONID, SalesOrderEditTableMap::COL_RECNO, SalesOrderEditTableMap::COL_DATE, SalesOrderEditTableMap::COL_TIME, SalesOrderEditTableMap::COL_TYPE, SalesOrderEditTableMap::COL_CUSTID, SalesOrderEditTableMap::COL_SHIPTOID, SalesOrderEditTableMap::COL_CUSTNAME, SalesOrderEditTableMap::COL_ORDERNO, SalesOrderEditTableMap::COL_CUSTPO, SalesOrderEditTableMap::COL_CUSTREF, SalesOrderEditTableMap::COL_STATUS, SalesOrderEditTableMap::COL_ORDERDATE, SalesOrderEditTableMap::COL_CAREOF, SalesOrderEditTableMap::COL_QUOTDATE, SalesOrderEditTableMap::COL_INVDATE, SalesOrderEditTableMap::COL_SHIPDATE, SalesOrderEditTableMap::COL_REVDATE, SalesOrderEditTableMap::COL_EXPDATE, SalesOrderEditTableMap::COL_HASDOCUMENTS, SalesOrderEditTableMap::COL_HASTRACKING, SalesOrderEditTableMap::COL_SUBTOTAL, SalesOrderEditTableMap::COL_SALESTAX, SalesOrderEditTableMap::COL_FREIGHT, SalesOrderEditTableMap::COL_MISCCOST, SalesOrderEditTableMap::COL_ORDERTOTAL, SalesOrderEditTableMap::COL_HASNOTES, SalesOrderEditTableMap::COL_EDITORD, SalesOrderEditTableMap::COL_ERROR, SalesOrderEditTableMap::COL_ERRORMSG, SalesOrderEditTableMap::COL_SCONAME, SalesOrderEditTableMap::COL_SHIPNAME, SalesOrderEditTableMap::COL_SHIPADDRESS, SalesOrderEditTableMap::COL_SHIPADDRESS2, SalesOrderEditTableMap::COL_SHIPCITY, SalesOrderEditTableMap::COL_SHIPSTATE, SalesOrderEditTableMap::COL_SHIPZIP, SalesOrderEditTableMap::COL_SHIPCOUNTRY, SalesOrderEditTableMap::COL_CONTACT, SalesOrderEditTableMap::COL_PHINTL, SalesOrderEditTableMap::COL_PHONE, SalesOrderEditTableMap::COL_EXTENSION, SalesOrderEditTableMap::COL_FAXNBR, SalesOrderEditTableMap::COL_EMAIL, SalesOrderEditTableMap::COL_RELEASENBR, SalesOrderEditTableMap::COL_SHIPVIACD, SalesOrderEditTableMap::COL_SHIPVIADESC, SalesOrderEditTableMap::COL_PRICECODE, SalesOrderEditTableMap::COL_PRICECODEDESC, SalesOrderEditTableMap::COL_PRICEDISP, SalesOrderEditTableMap::COL_TAXCODE, SalesOrderEditTableMap::COL_TAXCODEDESC, SalesOrderEditTableMap::COL_TAXCODEDISP, SalesOrderEditTableMap::COL_TERMCODE, SalesOrderEditTableMap::COL_TERMTYPE, SalesOrderEditTableMap::COL_TERMCODEDESC, SalesOrderEditTableMap::COL_RQSTDATE, SalesOrderEditTableMap::COL_SHIPCOM, SalesOrderEditTableMap::COL_SP1, SalesOrderEditTableMap::COL_SP1NAME, SalesOrderEditTableMap::COL_SP2, SalesOrderEditTableMap::COL_SP2NAME, SalesOrderEditTableMap::COL_SP2DISP, SalesOrderEditTableMap::COL_SP3, SalesOrderEditTableMap::COL_SP3NAME, SalesOrderEditTableMap::COL_SP3DISP, SalesOrderEditTableMap::COL_FOB, SalesOrderEditTableMap::COL_DELIVERYDESC, SalesOrderEditTableMap::COL_WHSE, SalesOrderEditTableMap::COL_CARDNUMBER, SalesOrderEditTableMap::COL_CARDEXPIRE, SalesOrderEditTableMap::COL_CARDCODE, SalesOrderEditTableMap::COL_CARDAPPROVAL, SalesOrderEditTableMap::COL_TOTALCOST, SalesOrderEditTableMap::COL_TOTALDISCOUNT, SalesOrderEditTableMap::COL_PAYMENTTYPE, SalesOrderEditTableMap::COL_SRCDATEFROM, SalesOrderEditTableMap::COL_SRCDATETHRU, SalesOrderEditTableMap::COL_BILLNAME, SalesOrderEditTableMap::COL_BILLADDRESS, SalesOrderEditTableMap::COL_BILLADDRESS2, SalesOrderEditTableMap::COL_BILLADDRESS3, SalesOrderEditTableMap::COL_BILLCOUNTRY, SalesOrderEditTableMap::COL_BILLCITY, SalesOrderEditTableMap::COL_BILLSTATE, SalesOrderEditTableMap::COL_BILLZIP, SalesOrderEditTableMap::COL_PRNTFMT, SalesOrderEditTableMap::COL_PRNTFMTDISP, SalesOrderEditTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('sessionid', 'recno', 'date', 'time', 'type', 'custid', 'shiptoid', 'custname', 'orderno', 'custpo', 'custref', 'status', 'orderdate', 'careof', 'quotdate', 'invdate', 'shipdate', 'revdate', 'expdate', 'hasdocuments', 'hastracking', 'subtotal', 'salestax', 'freight', 'misccost', 'ordertotal', 'hasnotes', 'editord', 'error', 'errormsg', 'sconame', 'shipname', 'shipaddress', 'shipaddress2', 'shipcity', 'shipstate', 'shipzip', 'shipcountry', 'contact', 'phintl', 'phone', 'extension', 'faxnbr', 'email', 'releasenbr', 'shipviacd', 'shipviadesc', 'pricecode', 'pricecodedesc', 'pricedisp', 'taxcode', 'taxcodedesc', 'taxcodedisp', 'termcode', 'termtype', 'termcodedesc', 'rqstdate', 'shipcom', 'sp1', 'sp1name', 'sp2', 'sp2name', 'sp2disp', 'sp3', 'sp3name', 'sp3disp', 'fob', 'deliverydesc', 'whse', 'cardnumber', 'cardexpire', 'cardcode', 'cardapproval', 'totalcost', 'totaldiscount', 'paymenttype', 'srcdatefrom', 'srcdatethru', 'billname', 'billaddress', 'billaddress2', 'billaddress3', 'billcountry', 'billcity', 'billstate', 'billzip', 'prntfmt', 'prntfmtdisp', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Sessionid' => 0, 'Recno' => 1, 'Date' => 2, 'Time' => 3, 'Type' => 4, 'Custid' => 5, 'Shiptoid' => 6, 'Custname' => 7, 'Orderno' => 8, 'Custpo' => 9, 'Custref' => 10, 'Status' => 11, 'Orderdate' => 12, 'Careof' => 13, 'Quotdate' => 14, 'Invdate' => 15, 'Shipdate' => 16, 'Revdate' => 17, 'Expdate' => 18, 'Hasdocuments' => 19, 'Hastracking' => 20, 'Subtotal' => 21, 'Salestax' => 22, 'Freight' => 23, 'Misccost' => 24, 'Ordertotal' => 25, 'Hasnotes' => 26, 'Editord' => 27, 'Error' => 28, 'Errormsg' => 29, 'Sconame' => 30, 'Shipname' => 31, 'Shipaddress' => 32, 'Shipaddress2' => 33, 'Shipcity' => 34, 'Shipstate' => 35, 'Shipzip' => 36, 'Shipcountry' => 37, 'Contact' => 38, 'Phintl' => 39, 'Phone' => 40, 'Extension' => 41, 'Faxnbr' => 42, 'Email' => 43, 'Releasenbr' => 44, 'Shipviacd' => 45, 'Shipviadesc' => 46, 'Pricecode' => 47, 'Pricecodedesc' => 48, 'Pricedisp' => 49, 'Taxcode' => 50, 'Taxcodedesc' => 51, 'Taxcodedisp' => 52, 'Termcode' => 53, 'Termtype' => 54, 'Termcodedesc' => 55, 'Rqstdate' => 56, 'Shipcom' => 57, 'Sp1' => 58, 'Sp1name' => 59, 'Sp2' => 60, 'Sp2name' => 61, 'Sp2disp' => 62, 'Sp3' => 63, 'Sp3name' => 64, 'Sp3disp' => 65, 'Fob' => 66, 'Deliverydesc' => 67, 'Whse' => 68, 'Cardnumber' => 69, 'Cardexpire' => 70, 'Cardcode' => 71, 'Cardapproval' => 72, 'Totalcost' => 73, 'Totaldiscount' => 74, 'Paymenttype' => 75, 'Srcdatefrom' => 76, 'Srcdatethru' => 77, 'Billname' => 78, 'Billaddress' => 79, 'Billaddress2' => 80, 'Billaddress3' => 81, 'Billcountry' => 82, 'Billcity' => 83, 'Billstate' => 84, 'Billzip' => 85, 'Prntfmt' => 86, 'Prntfmtdisp' => 87, 'Dummy' => 88, ),
        self::TYPE_CAMELNAME     => array('sessionid' => 0, 'recno' => 1, 'date' => 2, 'time' => 3, 'type' => 4, 'custid' => 5, 'shiptoid' => 6, 'custname' => 7, 'orderno' => 8, 'custpo' => 9, 'custref' => 10, 'status' => 11, 'orderdate' => 12, 'careof' => 13, 'quotdate' => 14, 'invdate' => 15, 'shipdate' => 16, 'revdate' => 17, 'expdate' => 18, 'hasdocuments' => 19, 'hastracking' => 20, 'subtotal' => 21, 'salestax' => 22, 'freight' => 23, 'misccost' => 24, 'ordertotal' => 25, 'hasnotes' => 26, 'editord' => 27, 'error' => 28, 'errormsg' => 29, 'sconame' => 30, 'shipname' => 31, 'shipaddress' => 32, 'shipaddress2' => 33, 'shipcity' => 34, 'shipstate' => 35, 'shipzip' => 36, 'shipcountry' => 37, 'contact' => 38, 'phintl' => 39, 'phone' => 40, 'extension' => 41, 'faxnbr' => 42, 'email' => 43, 'releasenbr' => 44, 'shipviacd' => 45, 'shipviadesc' => 46, 'pricecode' => 47, 'pricecodedesc' => 48, 'pricedisp' => 49, 'taxcode' => 50, 'taxcodedesc' => 51, 'taxcodedisp' => 52, 'termcode' => 53, 'termtype' => 54, 'termcodedesc' => 55, 'rqstdate' => 56, 'shipcom' => 57, 'sp1' => 58, 'sp1name' => 59, 'sp2' => 60, 'sp2name' => 61, 'sp2disp' => 62, 'sp3' => 63, 'sp3name' => 64, 'sp3disp' => 65, 'fob' => 66, 'deliverydesc' => 67, 'whse' => 68, 'cardnumber' => 69, 'cardexpire' => 70, 'cardcode' => 71, 'cardapproval' => 72, 'totalcost' => 73, 'totaldiscount' => 74, 'paymenttype' => 75, 'srcdatefrom' => 76, 'srcdatethru' => 77, 'billname' => 78, 'billaddress' => 79, 'billaddress2' => 80, 'billaddress3' => 81, 'billcountry' => 82, 'billcity' => 83, 'billstate' => 84, 'billzip' => 85, 'prntfmt' => 86, 'prntfmtdisp' => 87, 'dummy' => 88, ),
        self::TYPE_COLNAME       => array(SalesOrderEditTableMap::COL_SESSIONID => 0, SalesOrderEditTableMap::COL_RECNO => 1, SalesOrderEditTableMap::COL_DATE => 2, SalesOrderEditTableMap::COL_TIME => 3, SalesOrderEditTableMap::COL_TYPE => 4, SalesOrderEditTableMap::COL_CUSTID => 5, SalesOrderEditTableMap::COL_SHIPTOID => 6, SalesOrderEditTableMap::COL_CUSTNAME => 7, SalesOrderEditTableMap::COL_ORDERNO => 8, SalesOrderEditTableMap::COL_CUSTPO => 9, SalesOrderEditTableMap::COL_CUSTREF => 10, SalesOrderEditTableMap::COL_STATUS => 11, SalesOrderEditTableMap::COL_ORDERDATE => 12, SalesOrderEditTableMap::COL_CAREOF => 13, SalesOrderEditTableMap::COL_QUOTDATE => 14, SalesOrderEditTableMap::COL_INVDATE => 15, SalesOrderEditTableMap::COL_SHIPDATE => 16, SalesOrderEditTableMap::COL_REVDATE => 17, SalesOrderEditTableMap::COL_EXPDATE => 18, SalesOrderEditTableMap::COL_HASDOCUMENTS => 19, SalesOrderEditTableMap::COL_HASTRACKING => 20, SalesOrderEditTableMap::COL_SUBTOTAL => 21, SalesOrderEditTableMap::COL_SALESTAX => 22, SalesOrderEditTableMap::COL_FREIGHT => 23, SalesOrderEditTableMap::COL_MISCCOST => 24, SalesOrderEditTableMap::COL_ORDERTOTAL => 25, SalesOrderEditTableMap::COL_HASNOTES => 26, SalesOrderEditTableMap::COL_EDITORD => 27, SalesOrderEditTableMap::COL_ERROR => 28, SalesOrderEditTableMap::COL_ERRORMSG => 29, SalesOrderEditTableMap::COL_SCONAME => 30, SalesOrderEditTableMap::COL_SHIPNAME => 31, SalesOrderEditTableMap::COL_SHIPADDRESS => 32, SalesOrderEditTableMap::COL_SHIPADDRESS2 => 33, SalesOrderEditTableMap::COL_SHIPCITY => 34, SalesOrderEditTableMap::COL_SHIPSTATE => 35, SalesOrderEditTableMap::COL_SHIPZIP => 36, SalesOrderEditTableMap::COL_SHIPCOUNTRY => 37, SalesOrderEditTableMap::COL_CONTACT => 38, SalesOrderEditTableMap::COL_PHINTL => 39, SalesOrderEditTableMap::COL_PHONE => 40, SalesOrderEditTableMap::COL_EXTENSION => 41, SalesOrderEditTableMap::COL_FAXNBR => 42, SalesOrderEditTableMap::COL_EMAIL => 43, SalesOrderEditTableMap::COL_RELEASENBR => 44, SalesOrderEditTableMap::COL_SHIPVIACD => 45, SalesOrderEditTableMap::COL_SHIPVIADESC => 46, SalesOrderEditTableMap::COL_PRICECODE => 47, SalesOrderEditTableMap::COL_PRICECODEDESC => 48, SalesOrderEditTableMap::COL_PRICEDISP => 49, SalesOrderEditTableMap::COL_TAXCODE => 50, SalesOrderEditTableMap::COL_TAXCODEDESC => 51, SalesOrderEditTableMap::COL_TAXCODEDISP => 52, SalesOrderEditTableMap::COL_TERMCODE => 53, SalesOrderEditTableMap::COL_TERMTYPE => 54, SalesOrderEditTableMap::COL_TERMCODEDESC => 55, SalesOrderEditTableMap::COL_RQSTDATE => 56, SalesOrderEditTableMap::COL_SHIPCOM => 57, SalesOrderEditTableMap::COL_SP1 => 58, SalesOrderEditTableMap::COL_SP1NAME => 59, SalesOrderEditTableMap::COL_SP2 => 60, SalesOrderEditTableMap::COL_SP2NAME => 61, SalesOrderEditTableMap::COL_SP2DISP => 62, SalesOrderEditTableMap::COL_SP3 => 63, SalesOrderEditTableMap::COL_SP3NAME => 64, SalesOrderEditTableMap::COL_SP3DISP => 65, SalesOrderEditTableMap::COL_FOB => 66, SalesOrderEditTableMap::COL_DELIVERYDESC => 67, SalesOrderEditTableMap::COL_WHSE => 68, SalesOrderEditTableMap::COL_CARDNUMBER => 69, SalesOrderEditTableMap::COL_CARDEXPIRE => 70, SalesOrderEditTableMap::COL_CARDCODE => 71, SalesOrderEditTableMap::COL_CARDAPPROVAL => 72, SalesOrderEditTableMap::COL_TOTALCOST => 73, SalesOrderEditTableMap::COL_TOTALDISCOUNT => 74, SalesOrderEditTableMap::COL_PAYMENTTYPE => 75, SalesOrderEditTableMap::COL_SRCDATEFROM => 76, SalesOrderEditTableMap::COL_SRCDATETHRU => 77, SalesOrderEditTableMap::COL_BILLNAME => 78, SalesOrderEditTableMap::COL_BILLADDRESS => 79, SalesOrderEditTableMap::COL_BILLADDRESS2 => 80, SalesOrderEditTableMap::COL_BILLADDRESS3 => 81, SalesOrderEditTableMap::COL_BILLCOUNTRY => 82, SalesOrderEditTableMap::COL_BILLCITY => 83, SalesOrderEditTableMap::COL_BILLSTATE => 84, SalesOrderEditTableMap::COL_BILLZIP => 85, SalesOrderEditTableMap::COL_PRNTFMT => 86, SalesOrderEditTableMap::COL_PRNTFMTDISP => 87, SalesOrderEditTableMap::COL_DUMMY => 88, ),
        self::TYPE_FIELDNAME     => array('sessionid' => 0, 'recno' => 1, 'date' => 2, 'time' => 3, 'type' => 4, 'custid' => 5, 'shiptoid' => 6, 'custname' => 7, 'orderno' => 8, 'custpo' => 9, 'custref' => 10, 'status' => 11, 'orderdate' => 12, 'careof' => 13, 'quotdate' => 14, 'invdate' => 15, 'shipdate' => 16, 'revdate' => 17, 'expdate' => 18, 'hasdocuments' => 19, 'hastracking' => 20, 'subtotal' => 21, 'salestax' => 22, 'freight' => 23, 'misccost' => 24, 'ordertotal' => 25, 'hasnotes' => 26, 'editord' => 27, 'error' => 28, 'errormsg' => 29, 'sconame' => 30, 'shipname' => 31, 'shipaddress' => 32, 'shipaddress2' => 33, 'shipcity' => 34, 'shipstate' => 35, 'shipzip' => 36, 'shipcountry' => 37, 'contact' => 38, 'phintl' => 39, 'phone' => 40, 'extension' => 41, 'faxnbr' => 42, 'email' => 43, 'releasenbr' => 44, 'shipviacd' => 45, 'shipviadesc' => 46, 'pricecode' => 47, 'pricecodedesc' => 48, 'pricedisp' => 49, 'taxcode' => 50, 'taxcodedesc' => 51, 'taxcodedisp' => 52, 'termcode' => 53, 'termtype' => 54, 'termcodedesc' => 55, 'rqstdate' => 56, 'shipcom' => 57, 'sp1' => 58, 'sp1name' => 59, 'sp2' => 60, 'sp2name' => 61, 'sp2disp' => 62, 'sp3' => 63, 'sp3name' => 64, 'sp3disp' => 65, 'fob' => 66, 'deliverydesc' => 67, 'whse' => 68, 'cardnumber' => 69, 'cardexpire' => 70, 'cardcode' => 71, 'cardapproval' => 72, 'totalcost' => 73, 'totaldiscount' => 74, 'paymenttype' => 75, 'srcdatefrom' => 76, 'srcdatethru' => 77, 'billname' => 78, 'billaddress' => 79, 'billaddress2' => 80, 'billaddress3' => 81, 'billcountry' => 82, 'billcity' => 83, 'billstate' => 84, 'billzip' => 85, 'prntfmt' => 86, 'prntfmtdisp' => 87, 'dummy' => 88, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
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
        $this->setName('ordrhed');
        $this->setPhpName('SalesOrderEdit');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesOrderEdit');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('sessionid', 'Sessionid', 'VARCHAR', true, 50, '');
        $this->addPrimaryKey('recno', 'Recno', 'INTEGER', true, null, 0);
        $this->addColumn('date', 'Date', 'INTEGER', false, 8, null);
        $this->addColumn('time', 'Time', 'INTEGER', false, 8, null);
        $this->addColumn('type', 'Type', 'VARCHAR', false, 1, '');
        $this->addColumn('custid', 'Custid', 'VARCHAR', false, 6, '');
        $this->addColumn('shiptoid', 'Shiptoid', 'VARCHAR', false, 6, '');
        $this->addColumn('custname', 'Custname', 'VARCHAR', false, 30, '');
        $this->addPrimaryKey('orderno', 'Orderno', 'VARCHAR', true, 20, '');
        $this->addColumn('custpo', 'Custpo', 'VARCHAR', false, 20, '');
        $this->addColumn('custref', 'Custref', 'VARCHAR', false, 20, '');
        $this->addColumn('status', 'Status', 'VARCHAR', false, 10, '');
        $this->addColumn('orderdate', 'Orderdate', 'VARCHAR', false, 10, '');
        $this->addColumn('careof', 'Careof', 'VARCHAR', false, 20, '');
        $this->addColumn('quotdate', 'Quotdate', 'VARCHAR', false, 10, '');
        $this->addColumn('invdate', 'Invdate', 'VARCHAR', false, 10, '');
        $this->addColumn('shipdate', 'Shipdate', 'VARCHAR', false, 10, '');
        $this->addColumn('revdate', 'Revdate', 'VARCHAR', false, 10, '');
        $this->addColumn('expdate', 'Expdate', 'VARCHAR', false, 10, '');
        $this->addColumn('hasdocuments', 'Hasdocuments', 'VARCHAR', false, 1, '');
        $this->addColumn('hastracking', 'Hastracking', 'VARCHAR', false, 1, '');
        $this->addColumn('subtotal', 'Subtotal', 'DECIMAL', false, 10, 0);
        $this->addColumn('salestax', 'Salestax', 'DECIMAL', false, 10, 0);
        $this->addColumn('freight', 'Freight', 'DECIMAL', false, 10, 0);
        $this->addColumn('misccost', 'Misccost', 'DECIMAL', false, 10, 0);
        $this->addColumn('ordertotal', 'Ordertotal', 'DECIMAL', false, 10, 0);
        $this->addColumn('hasnotes', 'Hasnotes', 'VARCHAR', false, 1, '');
        $this->addColumn('editord', 'Editord', 'VARCHAR', false, 1, '');
        $this->addColumn('error', 'Error', 'VARCHAR', false, 30, '');
        $this->addColumn('errormsg', 'Errormsg', 'VARCHAR', false, 100, '');
        $this->addColumn('sconame', 'Sconame', 'VARCHAR', false, 30, '');
        $this->addColumn('shipname', 'Shipname', 'VARCHAR', false, 30, '');
        $this->addColumn('shipaddress', 'Shipaddress', 'VARCHAR', false, 30, '');
        $this->addColumn('shipaddress2', 'Shipaddress2', 'VARCHAR', false, 30, '');
        $this->addColumn('shipcity', 'Shipcity', 'VARCHAR', false, 30, '');
        $this->addColumn('shipstate', 'Shipstate', 'VARCHAR', false, 30, '');
        $this->addColumn('shipzip', 'Shipzip', 'VARCHAR', false, 30, '');
        $this->addColumn('shipcountry', 'Shipcountry', 'VARCHAR', false, 30, '');
        $this->addColumn('contact', 'Contact', 'VARCHAR', false, 20, '');
        $this->addColumn('phintl', 'Phintl', 'VARCHAR', false, 1, '');
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 25, '');
        $this->addColumn('extension', 'Extension', 'VARCHAR', false, 7, '');
        $this->addColumn('faxnbr', 'Faxnbr', 'VARCHAR', false, 25, '');
        $this->addColumn('email', 'Email', 'VARCHAR', false, 50, '');
        $this->addColumn('releasenbr', 'Releasenbr', 'VARCHAR', false, 20, '');
        $this->addColumn('shipviacd', 'Shipviacd', 'VARCHAR', false, 4, '');
        $this->addColumn('shipviadesc', 'Shipviadesc', 'VARCHAR', false, 20, '');
        $this->addColumn('pricecode', 'Pricecode', 'VARCHAR', false, 4, '');
        $this->addColumn('pricecodedesc', 'Pricecodedesc', 'VARCHAR', false, 20, '');
        $this->addColumn('pricedisp', 'Pricedisp', 'VARCHAR', false, 1, '');
        $this->addColumn('taxcode', 'Taxcode', 'VARCHAR', false, 4, '');
        $this->addColumn('taxcodedesc', 'Taxcodedesc', 'VARCHAR', false, 20, '');
        $this->addColumn('taxcodedisp', 'Taxcodedisp', 'VARCHAR', false, 1, '');
        $this->addColumn('termcode', 'Termcode', 'VARCHAR', false, 4, '');
        $this->addColumn('termtype', 'Termtype', 'VARCHAR', false, 4, '');
        $this->addColumn('termcodedesc', 'Termcodedesc', 'VARCHAR', false, 20, '');
        $this->addColumn('rqstdate', 'Rqstdate', 'VARCHAR', false, 10, '');
        $this->addColumn('shipcom', 'Shipcom', 'CHAR', false, null, '');
        $this->addColumn('sp1', 'Sp1', 'CHAR', false, 6, '');
        $this->addColumn('sp1name', 'Sp1name', 'CHAR', false, 20, '');
        $this->addColumn('sp2', 'Sp2', 'CHAR', false, 6, '');
        $this->addColumn('sp2name', 'Sp2name', 'CHAR', false, 20, '');
        $this->addColumn('sp2disp', 'Sp2disp', 'CHAR', false, null, '');
        $this->addColumn('sp3', 'Sp3', 'CHAR', false, 6, '');
        $this->addColumn('sp3name', 'Sp3name', 'CHAR', false, 20, '');
        $this->addColumn('sp3disp', 'Sp3disp', 'CHAR', false, null, '');
        $this->addColumn('fob', 'Fob', 'CHAR', false, null, '');
        $this->addColumn('deliverydesc', 'Deliverydesc', 'CHAR', false, 20, '');
        $this->addColumn('whse', 'Whse', 'CHAR', false, 2, '');
        $this->addColumn('cardnumber', 'Cardnumber', 'VARCHAR', false, 20, '');
        $this->addColumn('cardexpire', 'Cardexpire', 'VARCHAR', false, 10, '');
        $this->addColumn('cardcode', 'Cardcode', 'VARCHAR', false, 4, '');
        $this->addColumn('cardapproval', 'Cardapproval', 'VARCHAR', false, 6, '');
        $this->addColumn('totalcost', 'Totalcost', 'VARCHAR', false, 20, '');
        $this->addColumn('totaldiscount', 'Totaldiscount', 'VARCHAR', false, 20, '');
        $this->addColumn('paymenttype', 'Paymenttype', 'VARCHAR', false, 4, '');
        $this->addColumn('srcdatefrom', 'Srcdatefrom', 'VARCHAR', false, 10, '');
        $this->addColumn('srcdatethru', 'Srcdatethru', 'VARCHAR', false, 10, '');
        $this->addColumn('billname', 'Billname', 'VARCHAR', false, 30, '');
        $this->addColumn('billaddress', 'Billaddress', 'VARCHAR', false, 30, '');
        $this->addColumn('billaddress2', 'Billaddress2', 'VARCHAR', false, 30, '');
        $this->addColumn('billaddress3', 'Billaddress3', 'VARCHAR', false, 30, '');
        $this->addColumn('billcountry', 'Billcountry', 'VARCHAR', false, 4, '');
        $this->addColumn('billcity', 'Billcity', 'VARCHAR', false, 16, '');
        $this->addColumn('billstate', 'Billstate', 'VARCHAR', false, 2, '');
        $this->addColumn('billzip', 'Billzip', 'VARCHAR', false, 10, '');
        $this->addColumn('prntfmt', 'Prntfmt', 'VARCHAR', false, 1, '');
        $this->addColumn('prntfmtdisp', 'Prntfmtdisp', 'VARCHAR', false, 1, '');
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
     * @param \SalesOrderEdit $obj A \SalesOrderEdit object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getSessionid() || is_scalar($obj->getSessionid()) || is_callable([$obj->getSessionid(), '__toString']) ? (string) $obj->getSessionid() : $obj->getSessionid()), (null === $obj->getRecno() || is_scalar($obj->getRecno()) || is_callable([$obj->getRecno(), '__toString']) ? (string) $obj->getRecno() : $obj->getRecno()), (null === $obj->getOrderno() || is_scalar($obj->getOrderno()) || is_callable([$obj->getOrderno(), '__toString']) ? (string) $obj->getOrderno() : $obj->getOrderno())]);
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
     * @param mixed $value A \SalesOrderEdit object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SalesOrderEdit) {
                $key = serialize([(null === $value->getSessionid() || is_scalar($value->getSessionid()) || is_callable([$value->getSessionid(), '__toString']) ? (string) $value->getSessionid() : $value->getSessionid()), (null === $value->getRecno() || is_scalar($value->getRecno()) || is_callable([$value->getRecno(), '__toString']) ? (string) $value->getRecno() : $value->getRecno()), (null === $value->getOrderno() || is_scalar($value->getOrderno()) || is_callable([$value->getOrderno(), '__toString']) ? (string) $value->getOrderno() : $value->getOrderno())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SalesOrderEdit object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 8 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)])]);
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
        $pks[] = (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 8 + $offset
                : self::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SalesOrderEditTableMap::CLASS_DEFAULT : SalesOrderEditTableMap::OM_CLASS;
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
     * @return array           (SalesOrderEdit object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesOrderEditTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesOrderEditTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesOrderEditTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesOrderEditTableMap::OM_CLASS;
            /** @var SalesOrderEdit $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesOrderEditTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesOrderEditTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesOrderEditTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesOrderEdit $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesOrderEditTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SESSIONID);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_RECNO);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_DATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TIME);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TYPE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CUSTID);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPTOID);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CUSTNAME);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_ORDERNO);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CUSTPO);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CUSTREF);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_STATUS);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_ORDERDATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CAREOF);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_QUOTDATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_INVDATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPDATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_REVDATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_EXPDATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_HASDOCUMENTS);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_HASTRACKING);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SUBTOTAL);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SALESTAX);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_FREIGHT);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_MISCCOST);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_ORDERTOTAL);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_HASNOTES);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_EDITORD);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_ERROR);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_ERRORMSG);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SCONAME);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPNAME);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPADDRESS);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPADDRESS2);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPCITY);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPSTATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPZIP);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPCOUNTRY);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CONTACT);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_PHINTL);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_PHONE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_EXTENSION);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_FAXNBR);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_EMAIL);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_RELEASENBR);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPVIACD);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPVIADESC);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_PRICECODE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_PRICECODEDESC);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_PRICEDISP);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TAXCODE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TAXCODEDESC);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TAXCODEDISP);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TERMCODE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TERMTYPE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TERMCODEDESC);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_RQSTDATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SHIPCOM);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SP1);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SP1NAME);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SP2);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SP2NAME);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SP2DISP);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SP3);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SP3NAME);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SP3DISP);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_FOB);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_DELIVERYDESC);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_WHSE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CARDNUMBER);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CARDEXPIRE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CARDCODE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_CARDAPPROVAL);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TOTALCOST);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_TOTALDISCOUNT);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_PAYMENTTYPE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SRCDATEFROM);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_SRCDATETHRU);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_BILLNAME);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_BILLADDRESS);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_BILLADDRESS2);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_BILLADDRESS3);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_BILLCOUNTRY);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_BILLCITY);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_BILLSTATE);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_BILLZIP);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_PRNTFMT);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_PRNTFMTDISP);
            $criteria->addSelectColumn(SalesOrderEditTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.sessionid');
            $criteria->addSelectColumn($alias . '.recno');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.time');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.custid');
            $criteria->addSelectColumn($alias . '.shiptoid');
            $criteria->addSelectColumn($alias . '.custname');
            $criteria->addSelectColumn($alias . '.orderno');
            $criteria->addSelectColumn($alias . '.custpo');
            $criteria->addSelectColumn($alias . '.custref');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.orderdate');
            $criteria->addSelectColumn($alias . '.careof');
            $criteria->addSelectColumn($alias . '.quotdate');
            $criteria->addSelectColumn($alias . '.invdate');
            $criteria->addSelectColumn($alias . '.shipdate');
            $criteria->addSelectColumn($alias . '.revdate');
            $criteria->addSelectColumn($alias . '.expdate');
            $criteria->addSelectColumn($alias . '.hasdocuments');
            $criteria->addSelectColumn($alias . '.hastracking');
            $criteria->addSelectColumn($alias . '.subtotal');
            $criteria->addSelectColumn($alias . '.salestax');
            $criteria->addSelectColumn($alias . '.freight');
            $criteria->addSelectColumn($alias . '.misccost');
            $criteria->addSelectColumn($alias . '.ordertotal');
            $criteria->addSelectColumn($alias . '.hasnotes');
            $criteria->addSelectColumn($alias . '.editord');
            $criteria->addSelectColumn($alias . '.error');
            $criteria->addSelectColumn($alias . '.errormsg');
            $criteria->addSelectColumn($alias . '.sconame');
            $criteria->addSelectColumn($alias . '.shipname');
            $criteria->addSelectColumn($alias . '.shipaddress');
            $criteria->addSelectColumn($alias . '.shipaddress2');
            $criteria->addSelectColumn($alias . '.shipcity');
            $criteria->addSelectColumn($alias . '.shipstate');
            $criteria->addSelectColumn($alias . '.shipzip');
            $criteria->addSelectColumn($alias . '.shipcountry');
            $criteria->addSelectColumn($alias . '.contact');
            $criteria->addSelectColumn($alias . '.phintl');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.extension');
            $criteria->addSelectColumn($alias . '.faxnbr');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.releasenbr');
            $criteria->addSelectColumn($alias . '.shipviacd');
            $criteria->addSelectColumn($alias . '.shipviadesc');
            $criteria->addSelectColumn($alias . '.pricecode');
            $criteria->addSelectColumn($alias . '.pricecodedesc');
            $criteria->addSelectColumn($alias . '.pricedisp');
            $criteria->addSelectColumn($alias . '.taxcode');
            $criteria->addSelectColumn($alias . '.taxcodedesc');
            $criteria->addSelectColumn($alias . '.taxcodedisp');
            $criteria->addSelectColumn($alias . '.termcode');
            $criteria->addSelectColumn($alias . '.termtype');
            $criteria->addSelectColumn($alias . '.termcodedesc');
            $criteria->addSelectColumn($alias . '.rqstdate');
            $criteria->addSelectColumn($alias . '.shipcom');
            $criteria->addSelectColumn($alias . '.sp1');
            $criteria->addSelectColumn($alias . '.sp1name');
            $criteria->addSelectColumn($alias . '.sp2');
            $criteria->addSelectColumn($alias . '.sp2name');
            $criteria->addSelectColumn($alias . '.sp2disp');
            $criteria->addSelectColumn($alias . '.sp3');
            $criteria->addSelectColumn($alias . '.sp3name');
            $criteria->addSelectColumn($alias . '.sp3disp');
            $criteria->addSelectColumn($alias . '.fob');
            $criteria->addSelectColumn($alias . '.deliverydesc');
            $criteria->addSelectColumn($alias . '.whse');
            $criteria->addSelectColumn($alias . '.cardnumber');
            $criteria->addSelectColumn($alias . '.cardexpire');
            $criteria->addSelectColumn($alias . '.cardcode');
            $criteria->addSelectColumn($alias . '.cardapproval');
            $criteria->addSelectColumn($alias . '.totalcost');
            $criteria->addSelectColumn($alias . '.totaldiscount');
            $criteria->addSelectColumn($alias . '.paymenttype');
            $criteria->addSelectColumn($alias . '.srcdatefrom');
            $criteria->addSelectColumn($alias . '.srcdatethru');
            $criteria->addSelectColumn($alias . '.billname');
            $criteria->addSelectColumn($alias . '.billaddress');
            $criteria->addSelectColumn($alias . '.billaddress2');
            $criteria->addSelectColumn($alias . '.billaddress3');
            $criteria->addSelectColumn($alias . '.billcountry');
            $criteria->addSelectColumn($alias . '.billcity');
            $criteria->addSelectColumn($alias . '.billstate');
            $criteria->addSelectColumn($alias . '.billzip');
            $criteria->addSelectColumn($alias . '.prntfmt');
            $criteria->addSelectColumn($alias . '.prntfmtdisp');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesOrderEditTableMap::DATABASE_NAME)->getTable(SalesOrderEditTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesOrderEditTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesOrderEditTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesOrderEditTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesOrderEdit or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesOrderEdit object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderEditTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesOrderEdit) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesOrderEditTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SalesOrderEditTableMap::COL_SESSIONID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderEditTableMap::COL_RECNO, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderEditTableMap::COL_ORDERNO, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = SalesOrderEditQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesOrderEditTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesOrderEditTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ordrhed table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesOrderEditQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesOrderEdit or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesOrderEdit object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderEditTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesOrderEdit object
        }


        // Set the correct dbName
        $query = SalesOrderEditQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesOrderEditTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesOrderEditTableMap::buildTableMap();
