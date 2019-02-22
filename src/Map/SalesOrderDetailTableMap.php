<?php

namespace Map;

use \SalesOrderDetail;
use \SalesOrderDetailQuery;
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
 * This class defines the structure of the 'ordrdet' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SalesOrderDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.SalesOrderDetailTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ordrdet';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\SalesOrderDetail';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'SalesOrderDetail';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 60;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 60;

    /**
     * the column name for the sessionid field
     */
    const COL_SESSIONID = 'ordrdet.sessionid';

    /**
     * the column name for the recno field
     */
    const COL_RECNO = 'ordrdet.recno';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'ordrdet.date';

    /**
     * the column name for the time field
     */
    const COL_TIME = 'ordrdet.time';

    /**
     * the column name for the type field
     */
    const COL_TYPE = 'ordrdet.type';

    /**
     * the column name for the orderno field
     */
    const COL_ORDERNO = 'ordrdet.orderno';

    /**
     * the column name for the linenbr field
     */
    const COL_LINENBR = 'ordrdet.linenbr';

    /**
     * the column name for the sublinenbr field
     */
    const COL_SUBLINENBR = 'ordrdet.sublinenbr';

    /**
     * the column name for the itemid field
     */
    const COL_ITEMID = 'ordrdet.itemid';

    /**
     * the column name for the custid field
     */
    const COL_CUSTID = 'ordrdet.custid';

    /**
     * the column name for the custitemid field
     */
    const COL_CUSTITEMID = 'ordrdet.custitemid';

    /**
     * the column name for the desc1 field
     */
    const COL_DESC1 = 'ordrdet.desc1';

    /**
     * the column name for the desc2 field
     */
    const COL_DESC2 = 'ordrdet.desc2';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'ordrdet.price';

    /**
     * the column name for the totalprice field
     */
    const COL_TOTALPRICE = 'ordrdet.totalprice';

    /**
     * the column name for the qty field
     */
    const COL_QTY = 'ordrdet.qty';

    /**
     * the column name for the qtyshipped field
     */
    const COL_QTYSHIPPED = 'ordrdet.qtyshipped';

    /**
     * the column name for the qtybackord field
     */
    const COL_QTYBACKORD = 'ordrdet.qtybackord';

    /**
     * the column name for the rshipdate field
     */
    const COL_RSHIPDATE = 'ordrdet.rshipdate';

    /**
     * the column name for the hasdocuments field
     */
    const COL_HASDOCUMENTS = 'ordrdet.hasdocuments';

    /**
     * the column name for the qtyavail field
     */
    const COL_QTYAVAIL = 'ordrdet.qtyavail';

    /**
     * the column name for the hasnotes field
     */
    const COL_HASNOTES = 'ordrdet.hasnotes';

    /**
     * the column name for the cost field
     */
    const COL_COST = 'ordrdet.cost';

    /**
     * the column name for the whse field
     */
    const COL_WHSE = 'ordrdet.whse';

    /**
     * the column name for the uom field
     */
    const COL_UOM = 'ordrdet.uom';

    /**
     * the column name for the spcord field
     */
    const COL_SPCORD = 'ordrdet.spcord';

    /**
     * the column name for the kititemflag field
     */
    const COL_KITITEMFLAG = 'ordrdet.kititemflag';

    /**
     * the column name for the promocode field
     */
    const COL_PROMOCODE = 'ordrdet.promocode';

    /**
     * the column name for the taxcode field
     */
    const COL_TAXCODE = 'ordrdet.taxcode';

    /**
     * the column name for the taxcodeperc field
     */
    const COL_TAXCODEPERC = 'ordrdet.taxcodeperc';

    /**
     * the column name for the discpct field
     */
    const COL_DISCPCT = 'ordrdet.discpct';

    /**
     * the column name for the listprice field
     */
    const COL_LISTPRICE = 'ordrdet.listprice';

    /**
     * the column name for the uomconv field
     */
    const COL_UOMCONV = 'ordrdet.uomconv';

    /**
     * the column name for the vendorid field
     */
    const COL_VENDORID = 'ordrdet.vendorid';

    /**
     * the column name for the vendoritemid field
     */
    const COL_VENDORITEMID = 'ordrdet.vendoritemid';

    /**
     * the column name for the mfgid field
     */
    const COL_MFGID = 'ordrdet.mfgid';

    /**
     * the column name for the mfgitemid field
     */
    const COL_MFGITEMID = 'ordrdet.mfgitemid';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'ordrdet.status';

    /**
     * the column name for the lostreason field
     */
    const COL_LOSTREASON = 'ordrdet.lostreason';

    /**
     * the column name for the lostdate field
     */
    const COL_LOSTDATE = 'ordrdet.lostdate';

    /**
     * the column name for the notes field
     */
    const COL_NOTES = 'ordrdet.notes';

    /**
     * the column name for the leaddays field
     */
    const COL_LEADDAYS = 'ordrdet.leaddays';

    /**
     * the column name for the ordrtotalcost field
     */
    const COL_ORDRTOTALCOST = 'ordrdet.ordrtotalcost';

    /**
     * the column name for the costuom field
     */
    const COL_COSTUOM = 'ordrdet.costuom';

    /**
     * the column name for the stancost field
     */
    const COL_STANCOST = 'ordrdet.stancost';

    /**
     * the column name for the quotind field
     */
    const COL_QUOTIND = 'ordrdet.quotind';

    /**
     * the column name for the quotqty field
     */
    const COL_QUOTQTY = 'ordrdet.quotqty';

    /**
     * the column name for the quotprice field
     */
    const COL_QUOTPRICE = 'ordrdet.quotprice';

    /**
     * the column name for the quotcost field
     */
    const COL_QUOTCOST = 'ordrdet.quotcost';

    /**
     * the column name for the quotmkupmarg field
     */
    const COL_QUOTMKUPMARG = 'ordrdet.quotmkupmarg';

    /**
     * the column name for the quotdiscpct field
     */
    const COL_QUOTDISCPCT = 'ordrdet.quotdiscpct';

    /**
     * the column name for the errormsg field
     */
    const COL_ERRORMSG = 'ordrdet.errormsg';

    /**
     * the column name for the minprice field
     */
    const COL_MINPRICE = 'ordrdet.minprice';

    /**
     * the column name for the ponbr field
     */
    const COL_PONBR = 'ordrdet.ponbr';

    /**
     * the column name for the poref field
     */
    const COL_POREF = 'ordrdet.poref';

    /**
     * the column name for the nsitemgroup field
     */
    const COL_NSITEMGROUP = 'ordrdet.nsitemgroup';

    /**
     * the column name for the shipfromid field
     */
    const COL_SHIPFROMID = 'ordrdet.shipfromid';

    /**
     * the column name for the itemtype field
     */
    const COL_ITEMTYPE = 'ordrdet.itemtype';

    /**
     * the column name for the canbackorder field
     */
    const COL_CANBACKORDER = 'ordrdet.canbackorder';

    /**
     * the column name for the dummy field
     */
    const COL_DUMMY = 'ordrdet.dummy';

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
        self::TYPE_PHPNAME       => array('Sessionid', 'Recno', 'Date', 'Time', 'Type', 'Orderno', 'Linenbr', 'Sublinenbr', 'Itemid', 'Custid', 'Custitemid', 'Desc1', 'Desc2', 'Price', 'Totalprice', 'Qty', 'Qtyshipped', 'Qtybackord', 'Rshipdate', 'Hasdocuments', 'Qtyavail', 'Hasnotes', 'Cost', 'Whse', 'Uom', 'Spcord', 'Kititemflag', 'Promocode', 'Taxcode', 'Taxcodeperc', 'Discpct', 'Listprice', 'Uomconv', 'Vendorid', 'Vendoritemid', 'Mfgid', 'Mfgitemid', 'Status', 'Lostreason', 'Lostdate', 'Notes', 'Leaddays', 'Ordrtotalcost', 'Costuom', 'Stancost', 'Quotind', 'Quotqty', 'Quotprice', 'Quotcost', 'Quotmkupmarg', 'Quotdiscpct', 'Errormsg', 'Minprice', 'Ponbr', 'Poref', 'Nsitemgroup', 'Shipfromid', 'Itemtype', 'Canbackorder', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('sessionid', 'recno', 'date', 'time', 'type', 'orderno', 'linenbr', 'sublinenbr', 'itemid', 'custid', 'custitemid', 'desc1', 'desc2', 'price', 'totalprice', 'qty', 'qtyshipped', 'qtybackord', 'rshipdate', 'hasdocuments', 'qtyavail', 'hasnotes', 'cost', 'whse', 'uom', 'spcord', 'kititemflag', 'promocode', 'taxcode', 'taxcodeperc', 'discpct', 'listprice', 'uomconv', 'vendorid', 'vendoritemid', 'mfgid', 'mfgitemid', 'status', 'lostreason', 'lostdate', 'notes', 'leaddays', 'ordrtotalcost', 'costuom', 'stancost', 'quotind', 'quotqty', 'quotprice', 'quotcost', 'quotmkupmarg', 'quotdiscpct', 'errormsg', 'minprice', 'ponbr', 'poref', 'nsitemgroup', 'shipfromid', 'itemtype', 'canbackorder', 'dummy', ),
        self::TYPE_COLNAME       => array(SalesOrderDetailTableMap::COL_SESSIONID, SalesOrderDetailTableMap::COL_RECNO, SalesOrderDetailTableMap::COL_DATE, SalesOrderDetailTableMap::COL_TIME, SalesOrderDetailTableMap::COL_TYPE, SalesOrderDetailTableMap::COL_ORDERNO, SalesOrderDetailTableMap::COL_LINENBR, SalesOrderDetailTableMap::COL_SUBLINENBR, SalesOrderDetailTableMap::COL_ITEMID, SalesOrderDetailTableMap::COL_CUSTID, SalesOrderDetailTableMap::COL_CUSTITEMID, SalesOrderDetailTableMap::COL_DESC1, SalesOrderDetailTableMap::COL_DESC2, SalesOrderDetailTableMap::COL_PRICE, SalesOrderDetailTableMap::COL_TOTALPRICE, SalesOrderDetailTableMap::COL_QTY, SalesOrderDetailTableMap::COL_QTYSHIPPED, SalesOrderDetailTableMap::COL_QTYBACKORD, SalesOrderDetailTableMap::COL_RSHIPDATE, SalesOrderDetailTableMap::COL_HASDOCUMENTS, SalesOrderDetailTableMap::COL_QTYAVAIL, SalesOrderDetailTableMap::COL_HASNOTES, SalesOrderDetailTableMap::COL_COST, SalesOrderDetailTableMap::COL_WHSE, SalesOrderDetailTableMap::COL_UOM, SalesOrderDetailTableMap::COL_SPCORD, SalesOrderDetailTableMap::COL_KITITEMFLAG, SalesOrderDetailTableMap::COL_PROMOCODE, SalesOrderDetailTableMap::COL_TAXCODE, SalesOrderDetailTableMap::COL_TAXCODEPERC, SalesOrderDetailTableMap::COL_DISCPCT, SalesOrderDetailTableMap::COL_LISTPRICE, SalesOrderDetailTableMap::COL_UOMCONV, SalesOrderDetailTableMap::COL_VENDORID, SalesOrderDetailTableMap::COL_VENDORITEMID, SalesOrderDetailTableMap::COL_MFGID, SalesOrderDetailTableMap::COL_MFGITEMID, SalesOrderDetailTableMap::COL_STATUS, SalesOrderDetailTableMap::COL_LOSTREASON, SalesOrderDetailTableMap::COL_LOSTDATE, SalesOrderDetailTableMap::COL_NOTES, SalesOrderDetailTableMap::COL_LEADDAYS, SalesOrderDetailTableMap::COL_ORDRTOTALCOST, SalesOrderDetailTableMap::COL_COSTUOM, SalesOrderDetailTableMap::COL_STANCOST, SalesOrderDetailTableMap::COL_QUOTIND, SalesOrderDetailTableMap::COL_QUOTQTY, SalesOrderDetailTableMap::COL_QUOTPRICE, SalesOrderDetailTableMap::COL_QUOTCOST, SalesOrderDetailTableMap::COL_QUOTMKUPMARG, SalesOrderDetailTableMap::COL_QUOTDISCPCT, SalesOrderDetailTableMap::COL_ERRORMSG, SalesOrderDetailTableMap::COL_MINPRICE, SalesOrderDetailTableMap::COL_PONBR, SalesOrderDetailTableMap::COL_POREF, SalesOrderDetailTableMap::COL_NSITEMGROUP, SalesOrderDetailTableMap::COL_SHIPFROMID, SalesOrderDetailTableMap::COL_ITEMTYPE, SalesOrderDetailTableMap::COL_CANBACKORDER, SalesOrderDetailTableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('sessionid', 'recno', 'date', 'time', 'type', 'orderno', 'linenbr', 'sublinenbr', 'itemid', 'custid', 'custitemid', 'desc1', 'desc2', 'price', 'totalprice', 'qty', 'qtyshipped', 'qtybackord', 'rshipdate', 'hasdocuments', 'qtyavail', 'hasnotes', 'cost', 'whse', 'uom', 'spcord', 'kititemflag', 'promocode', 'taxcode', 'taxcodeperc', 'discpct', 'listprice', 'uomconv', 'vendorid', 'vendoritemid', 'mfgid', 'mfgitemid', 'status', 'lostreason', 'lostdate', 'notes', 'leaddays', 'ordrtotalcost', 'costuom', 'stancost', 'quotind', 'quotqty', 'quotprice', 'quotcost', 'quotmkupmarg', 'quotdiscpct', 'errormsg', 'minprice', 'ponbr', 'poref', 'nsitemgroup', 'shipfromid', 'itemtype', 'canbackorder', 'dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Sessionid' => 0, 'Recno' => 1, 'Date' => 2, 'Time' => 3, 'Type' => 4, 'Orderno' => 5, 'Linenbr' => 6, 'Sublinenbr' => 7, 'Itemid' => 8, 'Custid' => 9, 'Custitemid' => 10, 'Desc1' => 11, 'Desc2' => 12, 'Price' => 13, 'Totalprice' => 14, 'Qty' => 15, 'Qtyshipped' => 16, 'Qtybackord' => 17, 'Rshipdate' => 18, 'Hasdocuments' => 19, 'Qtyavail' => 20, 'Hasnotes' => 21, 'Cost' => 22, 'Whse' => 23, 'Uom' => 24, 'Spcord' => 25, 'Kititemflag' => 26, 'Promocode' => 27, 'Taxcode' => 28, 'Taxcodeperc' => 29, 'Discpct' => 30, 'Listprice' => 31, 'Uomconv' => 32, 'Vendorid' => 33, 'Vendoritemid' => 34, 'Mfgid' => 35, 'Mfgitemid' => 36, 'Status' => 37, 'Lostreason' => 38, 'Lostdate' => 39, 'Notes' => 40, 'Leaddays' => 41, 'Ordrtotalcost' => 42, 'Costuom' => 43, 'Stancost' => 44, 'Quotind' => 45, 'Quotqty' => 46, 'Quotprice' => 47, 'Quotcost' => 48, 'Quotmkupmarg' => 49, 'Quotdiscpct' => 50, 'Errormsg' => 51, 'Minprice' => 52, 'Ponbr' => 53, 'Poref' => 54, 'Nsitemgroup' => 55, 'Shipfromid' => 56, 'Itemtype' => 57, 'Canbackorder' => 58, 'Dummy' => 59, ),
        self::TYPE_CAMELNAME     => array('sessionid' => 0, 'recno' => 1, 'date' => 2, 'time' => 3, 'type' => 4, 'orderno' => 5, 'linenbr' => 6, 'sublinenbr' => 7, 'itemid' => 8, 'custid' => 9, 'custitemid' => 10, 'desc1' => 11, 'desc2' => 12, 'price' => 13, 'totalprice' => 14, 'qty' => 15, 'qtyshipped' => 16, 'qtybackord' => 17, 'rshipdate' => 18, 'hasdocuments' => 19, 'qtyavail' => 20, 'hasnotes' => 21, 'cost' => 22, 'whse' => 23, 'uom' => 24, 'spcord' => 25, 'kititemflag' => 26, 'promocode' => 27, 'taxcode' => 28, 'taxcodeperc' => 29, 'discpct' => 30, 'listprice' => 31, 'uomconv' => 32, 'vendorid' => 33, 'vendoritemid' => 34, 'mfgid' => 35, 'mfgitemid' => 36, 'status' => 37, 'lostreason' => 38, 'lostdate' => 39, 'notes' => 40, 'leaddays' => 41, 'ordrtotalcost' => 42, 'costuom' => 43, 'stancost' => 44, 'quotind' => 45, 'quotqty' => 46, 'quotprice' => 47, 'quotcost' => 48, 'quotmkupmarg' => 49, 'quotdiscpct' => 50, 'errormsg' => 51, 'minprice' => 52, 'ponbr' => 53, 'poref' => 54, 'nsitemgroup' => 55, 'shipfromid' => 56, 'itemtype' => 57, 'canbackorder' => 58, 'dummy' => 59, ),
        self::TYPE_COLNAME       => array(SalesOrderDetailTableMap::COL_SESSIONID => 0, SalesOrderDetailTableMap::COL_RECNO => 1, SalesOrderDetailTableMap::COL_DATE => 2, SalesOrderDetailTableMap::COL_TIME => 3, SalesOrderDetailTableMap::COL_TYPE => 4, SalesOrderDetailTableMap::COL_ORDERNO => 5, SalesOrderDetailTableMap::COL_LINENBR => 6, SalesOrderDetailTableMap::COL_SUBLINENBR => 7, SalesOrderDetailTableMap::COL_ITEMID => 8, SalesOrderDetailTableMap::COL_CUSTID => 9, SalesOrderDetailTableMap::COL_CUSTITEMID => 10, SalesOrderDetailTableMap::COL_DESC1 => 11, SalesOrderDetailTableMap::COL_DESC2 => 12, SalesOrderDetailTableMap::COL_PRICE => 13, SalesOrderDetailTableMap::COL_TOTALPRICE => 14, SalesOrderDetailTableMap::COL_QTY => 15, SalesOrderDetailTableMap::COL_QTYSHIPPED => 16, SalesOrderDetailTableMap::COL_QTYBACKORD => 17, SalesOrderDetailTableMap::COL_RSHIPDATE => 18, SalesOrderDetailTableMap::COL_HASDOCUMENTS => 19, SalesOrderDetailTableMap::COL_QTYAVAIL => 20, SalesOrderDetailTableMap::COL_HASNOTES => 21, SalesOrderDetailTableMap::COL_COST => 22, SalesOrderDetailTableMap::COL_WHSE => 23, SalesOrderDetailTableMap::COL_UOM => 24, SalesOrderDetailTableMap::COL_SPCORD => 25, SalesOrderDetailTableMap::COL_KITITEMFLAG => 26, SalesOrderDetailTableMap::COL_PROMOCODE => 27, SalesOrderDetailTableMap::COL_TAXCODE => 28, SalesOrderDetailTableMap::COL_TAXCODEPERC => 29, SalesOrderDetailTableMap::COL_DISCPCT => 30, SalesOrderDetailTableMap::COL_LISTPRICE => 31, SalesOrderDetailTableMap::COL_UOMCONV => 32, SalesOrderDetailTableMap::COL_VENDORID => 33, SalesOrderDetailTableMap::COL_VENDORITEMID => 34, SalesOrderDetailTableMap::COL_MFGID => 35, SalesOrderDetailTableMap::COL_MFGITEMID => 36, SalesOrderDetailTableMap::COL_STATUS => 37, SalesOrderDetailTableMap::COL_LOSTREASON => 38, SalesOrderDetailTableMap::COL_LOSTDATE => 39, SalesOrderDetailTableMap::COL_NOTES => 40, SalesOrderDetailTableMap::COL_LEADDAYS => 41, SalesOrderDetailTableMap::COL_ORDRTOTALCOST => 42, SalesOrderDetailTableMap::COL_COSTUOM => 43, SalesOrderDetailTableMap::COL_STANCOST => 44, SalesOrderDetailTableMap::COL_QUOTIND => 45, SalesOrderDetailTableMap::COL_QUOTQTY => 46, SalesOrderDetailTableMap::COL_QUOTPRICE => 47, SalesOrderDetailTableMap::COL_QUOTCOST => 48, SalesOrderDetailTableMap::COL_QUOTMKUPMARG => 49, SalesOrderDetailTableMap::COL_QUOTDISCPCT => 50, SalesOrderDetailTableMap::COL_ERRORMSG => 51, SalesOrderDetailTableMap::COL_MINPRICE => 52, SalesOrderDetailTableMap::COL_PONBR => 53, SalesOrderDetailTableMap::COL_POREF => 54, SalesOrderDetailTableMap::COL_NSITEMGROUP => 55, SalesOrderDetailTableMap::COL_SHIPFROMID => 56, SalesOrderDetailTableMap::COL_ITEMTYPE => 57, SalesOrderDetailTableMap::COL_CANBACKORDER => 58, SalesOrderDetailTableMap::COL_DUMMY => 59, ),
        self::TYPE_FIELDNAME     => array('sessionid' => 0, 'recno' => 1, 'date' => 2, 'time' => 3, 'type' => 4, 'orderno' => 5, 'linenbr' => 6, 'sublinenbr' => 7, 'itemid' => 8, 'custid' => 9, 'custitemid' => 10, 'desc1' => 11, 'desc2' => 12, 'price' => 13, 'totalprice' => 14, 'qty' => 15, 'qtyshipped' => 16, 'qtybackord' => 17, 'rshipdate' => 18, 'hasdocuments' => 19, 'qtyavail' => 20, 'hasnotes' => 21, 'cost' => 22, 'whse' => 23, 'uom' => 24, 'spcord' => 25, 'kititemflag' => 26, 'promocode' => 27, 'taxcode' => 28, 'taxcodeperc' => 29, 'discpct' => 30, 'listprice' => 31, 'uomconv' => 32, 'vendorid' => 33, 'vendoritemid' => 34, 'mfgid' => 35, 'mfgitemid' => 36, 'status' => 37, 'lostreason' => 38, 'lostdate' => 39, 'notes' => 40, 'leaddays' => 41, 'ordrtotalcost' => 42, 'costuom' => 43, 'stancost' => 44, 'quotind' => 45, 'quotqty' => 46, 'quotprice' => 47, 'quotcost' => 48, 'quotmkupmarg' => 49, 'quotdiscpct' => 50, 'errormsg' => 51, 'minprice' => 52, 'ponbr' => 53, 'poref' => 54, 'nsitemgroup' => 55, 'shipfromid' => 56, 'itemtype' => 57, 'canbackorder' => 58, 'dummy' => 59, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, )
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
        $this->setName('ordrdet');
        $this->setPhpName('SalesOrderDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\SalesOrderDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('sessionid', 'Sessionid', 'VARCHAR', true, 50, '');
        $this->addPrimaryKey('recno', 'Recno', 'INTEGER', true, null, 0);
        $this->addColumn('date', 'Date', 'INTEGER', false, 8, null);
        $this->addColumn('time', 'Time', 'INTEGER', false, 8, null);
        $this->addColumn('type', 'Type', 'VARCHAR', false, 1, 'O');
        $this->addPrimaryKey('orderno', 'Orderno', 'VARCHAR', true, 30, '');
        $this->addColumn('linenbr', 'Linenbr', 'VARCHAR', false, 5, '0');
        $this->addColumn('sublinenbr', 'Sublinenbr', 'VARCHAR', false, 5, '0');
        $this->addColumn('itemid', 'Itemid', 'VARCHAR', false, 30, '');
        $this->addColumn('custid', 'Custid', 'VARCHAR', false, 6, '');
        $this->addColumn('custitemid', 'Custitemid', 'VARCHAR', false, 30, '');
        $this->addColumn('desc1', 'Desc1', 'VARCHAR', false, 35, '');
        $this->addColumn('desc2', 'Desc2', 'VARCHAR', false, 35, '');
        $this->addColumn('price', 'Price', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('totalprice', 'Totalprice', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('qty', 'Qty', 'VARCHAR', false, 20, '0');
        $this->addColumn('qtyshipped', 'Qtyshipped', 'VARCHAR', false, 20, '0');
        $this->addColumn('qtybackord', 'Qtybackord', 'VARCHAR', false, 20, '0');
        $this->addColumn('rshipdate', 'Rshipdate', 'VARCHAR', false, 10, '');
        $this->addColumn('hasdocuments', 'Hasdocuments', 'VARCHAR', false, 1, 'N');
        $this->addColumn('qtyavail', 'Qtyavail', 'VARCHAR', false, 20, '0');
        $this->addColumn('hasnotes', 'Hasnotes', 'VARCHAR', false, 1, 'N');
        $this->addColumn('cost', 'Cost', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('whse', 'Whse', 'VARCHAR', false, 2, '');
        $this->addColumn('uom', 'Uom', 'VARCHAR', false, 4, '');
        $this->addColumn('spcord', 'Spcord', 'VARCHAR', false, 1, '');
        $this->addColumn('kititemflag', 'Kititemflag', 'VARCHAR', false, 1, '');
        $this->addColumn('promocode', 'Promocode', 'VARCHAR', false, 6, '');
        $this->addColumn('taxcode', 'Taxcode', 'VARCHAR', false, 6, '');
        $this->addColumn('taxcodeperc', 'Taxcodeperc', 'VARCHAR', false, 20, '');
        $this->addColumn('discpct', 'Discpct', 'VARCHAR', false, 20, '');
        $this->addColumn('listprice', 'Listprice', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('uomconv', 'Uomconv', 'VARCHAR', false, 20, '');
        $this->addColumn('vendorid', 'Vendorid', 'VARCHAR', false, 6, '');
        $this->addColumn('vendoritemid', 'Vendoritemid', 'VARCHAR', false, 30, '');
        $this->addColumn('mfgid', 'Mfgid', 'VARCHAR', false, 6, '');
        $this->addColumn('mfgitemid', 'Mfgitemid', 'VARCHAR', false, 30, '');
        $this->addColumn('status', 'Status', 'VARCHAR', false, 1, '');
        $this->addColumn('lostreason', 'Lostreason', 'VARCHAR', false, 4, '');
        $this->addColumn('lostdate', 'Lostdate', 'VARCHAR', false, 10, '');
        $this->addColumn('notes', 'Notes', 'VARCHAR', false, 1, '');
        $this->addColumn('leaddays', 'Leaddays', 'INTEGER', false, 4, null);
        $this->addColumn('ordrtotalcost', 'Ordrtotalcost', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('costuom', 'Costuom', 'VARCHAR', false, 4, '');
        $this->addColumn('stancost', 'Stancost', 'VARCHAR', false, 20, '');
        $this->addColumn('quotind', 'Quotind', 'VARCHAR', false, 1, '');
        $this->addColumn('quotqty', 'Quotqty', 'INTEGER', false, 9, 0);
        $this->addColumn('quotprice', 'Quotprice', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('quotcost', 'Quotcost', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('quotmkupmarg', 'Quotmkupmarg', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('quotdiscpct', 'Quotdiscpct', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('errormsg', 'Errormsg', 'VARCHAR', false, 50, '');
        $this->addColumn('minprice', 'Minprice', 'VARCHAR', false, 20, '0.00');
        $this->addColumn('ponbr', 'Ponbr', 'VARCHAR', false, 8, '');
        $this->addColumn('poref', 'Poref', 'VARCHAR', false, 15, '');
        $this->addColumn('nsitemgroup', 'Nsitemgroup', 'VARCHAR', false, 4, '');
        $this->addColumn('shipfromid', 'Shipfromid', 'VARCHAR', false, 6, '');
        $this->addColumn('itemtype', 'Itemtype', 'VARCHAR', false, 1, '');
        $this->addColumn('canbackorder', 'Canbackorder', 'VARCHAR', false, 1, '');
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
     * @param \SalesOrderDetail $obj A \SalesOrderDetail object.
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
     * @param mixed $value A \SalesOrderDetail object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \SalesOrderDetail) {
                $key = serialize([(null === $value->getSessionid() || is_scalar($value->getSessionid()) || is_callable([$value->getSessionid(), '__toString']) ? (string) $value->getSessionid() : $value->getSessionid()), (null === $value->getRecno() || is_scalar($value->getRecno()) || is_callable([$value->getRecno(), '__toString']) ? (string) $value->getRecno() : $value->getRecno()), (null === $value->getOrderno() || is_scalar($value->getOrderno()) || is_callable([$value->getOrderno(), '__toString']) ? (string) $value->getOrderno() : $value->getOrderno())]);

            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1]), (null === $value[2] || is_scalar($value[2]) || is_callable([$value[2], '__toString']) ? (string) $value[2] : $value[2])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \SalesOrderDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Sessionid', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Recno', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 5 + $offset : static::translateFieldName('Orderno', TableMap::TYPE_PHPNAME, $indexType)])]);
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
                ? 5 + $offset
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
        return $withPrefix ? SalesOrderDetailTableMap::CLASS_DEFAULT : SalesOrderDetailTableMap::OM_CLASS;
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
     * @return array           (SalesOrderDetail object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SalesOrderDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SalesOrderDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SalesOrderDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesOrderDetailTableMap::OM_CLASS;
            /** @var SalesOrderDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SalesOrderDetailTableMap::addInstanceToPool($obj, $key);
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
            $key = SalesOrderDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SalesOrderDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SalesOrderDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesOrderDetailTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_SESSIONID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_RECNO);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_DATE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_TIME);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_TYPE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_ORDERNO);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_LINENBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_SUBLINENBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_ITEMID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_CUSTID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_CUSTITEMID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_DESC1);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_DESC2);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_PRICE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_TOTALPRICE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QTY);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QTYSHIPPED);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QTYBACKORD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_RSHIPDATE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_HASDOCUMENTS);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QTYAVAIL);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_HASNOTES);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_COST);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_WHSE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_UOM);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_SPCORD);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_KITITEMFLAG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_PROMOCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_TAXCODE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_TAXCODEPERC);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_DISCPCT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_LISTPRICE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_UOMCONV);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_VENDORID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_VENDORITEMID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_MFGID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_MFGITEMID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_STATUS);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_LOSTREASON);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_LOSTDATE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_NOTES);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_LEADDAYS);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_ORDRTOTALCOST);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_COSTUOM);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_STANCOST);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QUOTIND);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QUOTQTY);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QUOTPRICE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QUOTCOST);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QUOTMKUPMARG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_QUOTDISCPCT);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_ERRORMSG);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_MINPRICE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_PONBR);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_POREF);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_NSITEMGROUP);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_SHIPFROMID);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_ITEMTYPE);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_CANBACKORDER);
            $criteria->addSelectColumn(SalesOrderDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.sessionid');
            $criteria->addSelectColumn($alias . '.recno');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.time');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.orderno');
            $criteria->addSelectColumn($alias . '.linenbr');
            $criteria->addSelectColumn($alias . '.sublinenbr');
            $criteria->addSelectColumn($alias . '.itemid');
            $criteria->addSelectColumn($alias . '.custid');
            $criteria->addSelectColumn($alias . '.custitemid');
            $criteria->addSelectColumn($alias . '.desc1');
            $criteria->addSelectColumn($alias . '.desc2');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.totalprice');
            $criteria->addSelectColumn($alias . '.qty');
            $criteria->addSelectColumn($alias . '.qtyshipped');
            $criteria->addSelectColumn($alias . '.qtybackord');
            $criteria->addSelectColumn($alias . '.rshipdate');
            $criteria->addSelectColumn($alias . '.hasdocuments');
            $criteria->addSelectColumn($alias . '.qtyavail');
            $criteria->addSelectColumn($alias . '.hasnotes');
            $criteria->addSelectColumn($alias . '.cost');
            $criteria->addSelectColumn($alias . '.whse');
            $criteria->addSelectColumn($alias . '.uom');
            $criteria->addSelectColumn($alias . '.spcord');
            $criteria->addSelectColumn($alias . '.kititemflag');
            $criteria->addSelectColumn($alias . '.promocode');
            $criteria->addSelectColumn($alias . '.taxcode');
            $criteria->addSelectColumn($alias . '.taxcodeperc');
            $criteria->addSelectColumn($alias . '.discpct');
            $criteria->addSelectColumn($alias . '.listprice');
            $criteria->addSelectColumn($alias . '.uomconv');
            $criteria->addSelectColumn($alias . '.vendorid');
            $criteria->addSelectColumn($alias . '.vendoritemid');
            $criteria->addSelectColumn($alias . '.mfgid');
            $criteria->addSelectColumn($alias . '.mfgitemid');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.lostreason');
            $criteria->addSelectColumn($alias . '.lostdate');
            $criteria->addSelectColumn($alias . '.notes');
            $criteria->addSelectColumn($alias . '.leaddays');
            $criteria->addSelectColumn($alias . '.ordrtotalcost');
            $criteria->addSelectColumn($alias . '.costuom');
            $criteria->addSelectColumn($alias . '.stancost');
            $criteria->addSelectColumn($alias . '.quotind');
            $criteria->addSelectColumn($alias . '.quotqty');
            $criteria->addSelectColumn($alias . '.quotprice');
            $criteria->addSelectColumn($alias . '.quotcost');
            $criteria->addSelectColumn($alias . '.quotmkupmarg');
            $criteria->addSelectColumn($alias . '.quotdiscpct');
            $criteria->addSelectColumn($alias . '.errormsg');
            $criteria->addSelectColumn($alias . '.minprice');
            $criteria->addSelectColumn($alias . '.ponbr');
            $criteria->addSelectColumn($alias . '.poref');
            $criteria->addSelectColumn($alias . '.nsitemgroup');
            $criteria->addSelectColumn($alias . '.shipfromid');
            $criteria->addSelectColumn($alias . '.itemtype');
            $criteria->addSelectColumn($alias . '.canbackorder');
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
        return Propel::getServiceContainer()->getDatabaseMap(SalesOrderDetailTableMap::DATABASE_NAME)->getTable(SalesOrderDetailTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SalesOrderDetailTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SalesOrderDetailTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SalesOrderDetailTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesOrderDetail or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SalesOrderDetail object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \SalesOrderDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesOrderDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SalesOrderDetailTableMap::COL_SESSIONID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderDetailTableMap::COL_RECNO, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SalesOrderDetailTableMap::COL_ORDERNO, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        $query = SalesOrderDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SalesOrderDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SalesOrderDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ordrdet table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SalesOrderDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SalesOrderDetail or Criteria object.
     *
     * @param mixed               $criteria Criteria or SalesOrderDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SalesOrderDetail object
        }


        // Set the correct dbName
        $query = SalesOrderDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SalesOrderDetailTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SalesOrderDetailTableMap::buildTableMap();
