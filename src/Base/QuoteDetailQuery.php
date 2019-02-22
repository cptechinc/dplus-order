<?php

namespace Base;

use \QuoteDetail as ChildQuoteDetail;
use \QuoteDetailQuery as ChildQuoteDetailQuery;
use \Exception;
use \PDO;
use Map\QuoteDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'quotdet' table.
 *
 *
 *
 * @method     ChildQuoteDetailQuery orderBySessionid($order = Criteria::ASC) Order by the sessionid column
 * @method     ChildQuoteDetailQuery orderByRecno($order = Criteria::ASC) Order by the recno column
 * @method     ChildQuoteDetailQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildQuoteDetailQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildQuoteDetailQuery orderByQuotenbr($order = Criteria::ASC) Order by the quotenbr column
 * @method     ChildQuoteDetailQuery orderByCustid($order = Criteria::ASC) Order by the custid column
 * @method     ChildQuoteDetailQuery orderByLinenbr($order = Criteria::ASC) Order by the linenbr column
 * @method     ChildQuoteDetailQuery orderBySublinenbr($order = Criteria::ASC) Order by the sublinenbr column
 * @method     ChildQuoteDetailQuery orderByItemid($order = Criteria::ASC) Order by the itemid column
 * @method     ChildQuoteDetailQuery orderByDesc1($order = Criteria::ASC) Order by the desc1 column
 * @method     ChildQuoteDetailQuery orderByDesc2($order = Criteria::ASC) Order by the desc2 column
 * @method     ChildQuoteDetailQuery orderByCustitemid($order = Criteria::ASC) Order by the custitemid column
 * @method     ChildQuoteDetailQuery orderByVendorid($order = Criteria::ASC) Order by the vendorid column
 * @method     ChildQuoteDetailQuery orderByVendoritemid($order = Criteria::ASC) Order by the vendoritemid column
 * @method     ChildQuoteDetailQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildQuoteDetailQuery orderByLostreason($order = Criteria::ASC) Order by the lostreason column
 * @method     ChildQuoteDetailQuery orderByLostdate($order = Criteria::ASC) Order by the lostdate column
 * @method     ChildQuoteDetailQuery orderByKititemflag($order = Criteria::ASC) Order by the kititemflag column
 * @method     ChildQuoteDetailQuery orderByHasnotes($order = Criteria::ASC) Order by the hasnotes column
 * @method     ChildQuoteDetailQuery orderByVenddetail($order = Criteria::ASC) Order by the venddetail column
 * @method     ChildQuoteDetailQuery orderByRshipdate($order = Criteria::ASC) Order by the rshipdate column
 * @method     ChildQuoteDetailQuery orderByLeaddays($order = Criteria::ASC) Order by the leaddays column
 * @method     ChildQuoteDetailQuery orderByTaxcode($order = Criteria::ASC) Order by the taxcode column
 * @method     ChildQuoteDetailQuery orderByOrdrqty($order = Criteria::ASC) Order by the ordrqty column
 * @method     ChildQuoteDetailQuery orderByOrdrprice($order = Criteria::ASC) Order by the ordrprice column
 * @method     ChildQuoteDetailQuery orderByOrdrcost($order = Criteria::ASC) Order by the ordrcost column
 * @method     ChildQuoteDetailQuery orderByOrdrtotalprice($order = Criteria::ASC) Order by the ordrtotalprice column
 * @method     ChildQuoteDetailQuery orderByOrdrtotalcost($order = Criteria::ASC) Order by the ordrtotalcost column
 * @method     ChildQuoteDetailQuery orderByUom($order = Criteria::ASC) Order by the uom column
 * @method     ChildQuoteDetailQuery orderByCostuom($order = Criteria::ASC) Order by the costuom column
 * @method     ChildQuoteDetailQuery orderByWhse($order = Criteria::ASC) Order by the whse column
 * @method     ChildQuoteDetailQuery orderByListprice($order = Criteria::ASC) Order by the listprice column
 * @method     ChildQuoteDetailQuery orderByStancost($order = Criteria::ASC) Order by the stancost column
 * @method     ChildQuoteDetailQuery orderByQuotind($order = Criteria::ASC) Order by the quotind column
 * @method     ChildQuoteDetailQuery orderByQuotqty($order = Criteria::ASC) Order by the quotqty column
 * @method     ChildQuoteDetailQuery orderByQuotprice($order = Criteria::ASC) Order by the quotprice column
 * @method     ChildQuoteDetailQuery orderByQuotcost($order = Criteria::ASC) Order by the quotcost column
 * @method     ChildQuoteDetailQuery orderByQuotmkupmarg($order = Criteria::ASC) Order by the quotmkupmarg column
 * @method     ChildQuoteDetailQuery orderByDiscpct($order = Criteria::ASC) Order by the discpct column
 * @method     ChildQuoteDetailQuery orderBySpcord($order = Criteria::ASC) Order by the spcord column
 * @method     ChildQuoteDetailQuery orderByError($order = Criteria::ASC) Order by the error column
 * @method     ChildQuoteDetailQuery orderByErrormsg($order = Criteria::ASC) Order by the errormsg column
 * @method     ChildQuoteDetailQuery orderByMinprice($order = Criteria::ASC) Order by the minprice column
 * @method     ChildQuoteDetailQuery orderByNsitemgroup($order = Criteria::ASC) Order by the nsitemgroup column
 * @method     ChildQuoteDetailQuery orderByShipfromid($order = Criteria::ASC) Order by the shipfromid column
 * @method     ChildQuoteDetailQuery orderByItemtype($order = Criteria::ASC) Order by the itemtype column
 * @method     ChildQuoteDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildQuoteDetailQuery groupBySessionid() Group by the sessionid column
 * @method     ChildQuoteDetailQuery groupByRecno() Group by the recno column
 * @method     ChildQuoteDetailQuery groupByDate() Group by the date column
 * @method     ChildQuoteDetailQuery groupByTime() Group by the time column
 * @method     ChildQuoteDetailQuery groupByQuotenbr() Group by the quotenbr column
 * @method     ChildQuoteDetailQuery groupByCustid() Group by the custid column
 * @method     ChildQuoteDetailQuery groupByLinenbr() Group by the linenbr column
 * @method     ChildQuoteDetailQuery groupBySublinenbr() Group by the sublinenbr column
 * @method     ChildQuoteDetailQuery groupByItemid() Group by the itemid column
 * @method     ChildQuoteDetailQuery groupByDesc1() Group by the desc1 column
 * @method     ChildQuoteDetailQuery groupByDesc2() Group by the desc2 column
 * @method     ChildQuoteDetailQuery groupByCustitemid() Group by the custitemid column
 * @method     ChildQuoteDetailQuery groupByVendorid() Group by the vendorid column
 * @method     ChildQuoteDetailQuery groupByVendoritemid() Group by the vendoritemid column
 * @method     ChildQuoteDetailQuery groupByStatus() Group by the status column
 * @method     ChildQuoteDetailQuery groupByLostreason() Group by the lostreason column
 * @method     ChildQuoteDetailQuery groupByLostdate() Group by the lostdate column
 * @method     ChildQuoteDetailQuery groupByKititemflag() Group by the kititemflag column
 * @method     ChildQuoteDetailQuery groupByHasnotes() Group by the hasnotes column
 * @method     ChildQuoteDetailQuery groupByVenddetail() Group by the venddetail column
 * @method     ChildQuoteDetailQuery groupByRshipdate() Group by the rshipdate column
 * @method     ChildQuoteDetailQuery groupByLeaddays() Group by the leaddays column
 * @method     ChildQuoteDetailQuery groupByTaxcode() Group by the taxcode column
 * @method     ChildQuoteDetailQuery groupByOrdrqty() Group by the ordrqty column
 * @method     ChildQuoteDetailQuery groupByOrdrprice() Group by the ordrprice column
 * @method     ChildQuoteDetailQuery groupByOrdrcost() Group by the ordrcost column
 * @method     ChildQuoteDetailQuery groupByOrdrtotalprice() Group by the ordrtotalprice column
 * @method     ChildQuoteDetailQuery groupByOrdrtotalcost() Group by the ordrtotalcost column
 * @method     ChildQuoteDetailQuery groupByUom() Group by the uom column
 * @method     ChildQuoteDetailQuery groupByCostuom() Group by the costuom column
 * @method     ChildQuoteDetailQuery groupByWhse() Group by the whse column
 * @method     ChildQuoteDetailQuery groupByListprice() Group by the listprice column
 * @method     ChildQuoteDetailQuery groupByStancost() Group by the stancost column
 * @method     ChildQuoteDetailQuery groupByQuotind() Group by the quotind column
 * @method     ChildQuoteDetailQuery groupByQuotqty() Group by the quotqty column
 * @method     ChildQuoteDetailQuery groupByQuotprice() Group by the quotprice column
 * @method     ChildQuoteDetailQuery groupByQuotcost() Group by the quotcost column
 * @method     ChildQuoteDetailQuery groupByQuotmkupmarg() Group by the quotmkupmarg column
 * @method     ChildQuoteDetailQuery groupByDiscpct() Group by the discpct column
 * @method     ChildQuoteDetailQuery groupBySpcord() Group by the spcord column
 * @method     ChildQuoteDetailQuery groupByError() Group by the error column
 * @method     ChildQuoteDetailQuery groupByErrormsg() Group by the errormsg column
 * @method     ChildQuoteDetailQuery groupByMinprice() Group by the minprice column
 * @method     ChildQuoteDetailQuery groupByNsitemgroup() Group by the nsitemgroup column
 * @method     ChildQuoteDetailQuery groupByShipfromid() Group by the shipfromid column
 * @method     ChildQuoteDetailQuery groupByItemtype() Group by the itemtype column
 * @method     ChildQuoteDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildQuoteDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildQuoteDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildQuoteDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildQuoteDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildQuoteDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildQuoteDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildQuoteDetail findOne(ConnectionInterface $con = null) Return the first ChildQuoteDetail matching the query
 * @method     ChildQuoteDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildQuoteDetail matching the query, or a new ChildQuoteDetail object populated from the query conditions when no match is found
 *
 * @method     ChildQuoteDetail findOneBySessionid(string $sessionid) Return the first ChildQuoteDetail filtered by the sessionid column
 * @method     ChildQuoteDetail findOneByRecno(int $recno) Return the first ChildQuoteDetail filtered by the recno column
 * @method     ChildQuoteDetail findOneByDate(int $date) Return the first ChildQuoteDetail filtered by the date column
 * @method     ChildQuoteDetail findOneByTime(int $time) Return the first ChildQuoteDetail filtered by the time column
 * @method     ChildQuoteDetail findOneByQuotenbr(string $quotenbr) Return the first ChildQuoteDetail filtered by the quotenbr column
 * @method     ChildQuoteDetail findOneByCustid(string $custid) Return the first ChildQuoteDetail filtered by the custid column
 * @method     ChildQuoteDetail findOneByLinenbr(string $linenbr) Return the first ChildQuoteDetail filtered by the linenbr column
 * @method     ChildQuoteDetail findOneBySublinenbr(string $sublinenbr) Return the first ChildQuoteDetail filtered by the sublinenbr column
 * @method     ChildQuoteDetail findOneByItemid(string $itemid) Return the first ChildQuoteDetail filtered by the itemid column
 * @method     ChildQuoteDetail findOneByDesc1(string $desc1) Return the first ChildQuoteDetail filtered by the desc1 column
 * @method     ChildQuoteDetail findOneByDesc2(string $desc2) Return the first ChildQuoteDetail filtered by the desc2 column
 * @method     ChildQuoteDetail findOneByCustitemid(string $custitemid) Return the first ChildQuoteDetail filtered by the custitemid column
 * @method     ChildQuoteDetail findOneByVendorid(string $vendorid) Return the first ChildQuoteDetail filtered by the vendorid column
 * @method     ChildQuoteDetail findOneByVendoritemid(string $vendoritemid) Return the first ChildQuoteDetail filtered by the vendoritemid column
 * @method     ChildQuoteDetail findOneByStatus(string $status) Return the first ChildQuoteDetail filtered by the status column
 * @method     ChildQuoteDetail findOneByLostreason(string $lostreason) Return the first ChildQuoteDetail filtered by the lostreason column
 * @method     ChildQuoteDetail findOneByLostdate(string $lostdate) Return the first ChildQuoteDetail filtered by the lostdate column
 * @method     ChildQuoteDetail findOneByKititemflag(string $kititemflag) Return the first ChildQuoteDetail filtered by the kititemflag column
 * @method     ChildQuoteDetail findOneByHasnotes(string $hasnotes) Return the first ChildQuoteDetail filtered by the hasnotes column
 * @method     ChildQuoteDetail findOneByVenddetail(string $venddetail) Return the first ChildQuoteDetail filtered by the venddetail column
 * @method     ChildQuoteDetail findOneByRshipdate(string $rshipdate) Return the first ChildQuoteDetail filtered by the rshipdate column
 * @method     ChildQuoteDetail findOneByLeaddays(int $leaddays) Return the first ChildQuoteDetail filtered by the leaddays column
 * @method     ChildQuoteDetail findOneByTaxcode(string $taxcode) Return the first ChildQuoteDetail filtered by the taxcode column
 * @method     ChildQuoteDetail findOneByOrdrqty(string $ordrqty) Return the first ChildQuoteDetail filtered by the ordrqty column
 * @method     ChildQuoteDetail findOneByOrdrprice(string $ordrprice) Return the first ChildQuoteDetail filtered by the ordrprice column
 * @method     ChildQuoteDetail findOneByOrdrcost(string $ordrcost) Return the first ChildQuoteDetail filtered by the ordrcost column
 * @method     ChildQuoteDetail findOneByOrdrtotalprice(string $ordrtotalprice) Return the first ChildQuoteDetail filtered by the ordrtotalprice column
 * @method     ChildQuoteDetail findOneByOrdrtotalcost(string $ordrtotalcost) Return the first ChildQuoteDetail filtered by the ordrtotalcost column
 * @method     ChildQuoteDetail findOneByUom(string $uom) Return the first ChildQuoteDetail filtered by the uom column
 * @method     ChildQuoteDetail findOneByCostuom(string $costuom) Return the first ChildQuoteDetail filtered by the costuom column
 * @method     ChildQuoteDetail findOneByWhse(string $whse) Return the first ChildQuoteDetail filtered by the whse column
 * @method     ChildQuoteDetail findOneByListprice(string $listprice) Return the first ChildQuoteDetail filtered by the listprice column
 * @method     ChildQuoteDetail findOneByStancost(string $stancost) Return the first ChildQuoteDetail filtered by the stancost column
 * @method     ChildQuoteDetail findOneByQuotind(string $quotind) Return the first ChildQuoteDetail filtered by the quotind column
 * @method     ChildQuoteDetail findOneByQuotqty(int $quotqty) Return the first ChildQuoteDetail filtered by the quotqty column
 * @method     ChildQuoteDetail findOneByQuotprice(string $quotprice) Return the first ChildQuoteDetail filtered by the quotprice column
 * @method     ChildQuoteDetail findOneByQuotcost(string $quotcost) Return the first ChildQuoteDetail filtered by the quotcost column
 * @method     ChildQuoteDetail findOneByQuotmkupmarg(string $quotmkupmarg) Return the first ChildQuoteDetail filtered by the quotmkupmarg column
 * @method     ChildQuoteDetail findOneByDiscpct(string $discpct) Return the first ChildQuoteDetail filtered by the discpct column
 * @method     ChildQuoteDetail findOneBySpcord(string $spcord) Return the first ChildQuoteDetail filtered by the spcord column
 * @method     ChildQuoteDetail findOneByError(string $error) Return the first ChildQuoteDetail filtered by the error column
 * @method     ChildQuoteDetail findOneByErrormsg(string $errormsg) Return the first ChildQuoteDetail filtered by the errormsg column
 * @method     ChildQuoteDetail findOneByMinprice(string $minprice) Return the first ChildQuoteDetail filtered by the minprice column
 * @method     ChildQuoteDetail findOneByNsitemgroup(string $nsitemgroup) Return the first ChildQuoteDetail filtered by the nsitemgroup column
 * @method     ChildQuoteDetail findOneByShipfromid(string $shipfromid) Return the first ChildQuoteDetail filtered by the shipfromid column
 * @method     ChildQuoteDetail findOneByItemtype(string $itemtype) Return the first ChildQuoteDetail filtered by the itemtype column
 * @method     ChildQuoteDetail findOneByDummy(string $dummy) Return the first ChildQuoteDetail filtered by the dummy column *

 * @method     ChildQuoteDetail requirePk($key, ConnectionInterface $con = null) Return the ChildQuoteDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOne(ConnectionInterface $con = null) Return the first ChildQuoteDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuoteDetail requireOneBySessionid(string $sessionid) Return the first ChildQuoteDetail filtered by the sessionid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByRecno(int $recno) Return the first ChildQuoteDetail filtered by the recno column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByDate(int $date) Return the first ChildQuoteDetail filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByTime(int $time) Return the first ChildQuoteDetail filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQuotenbr(string $quotenbr) Return the first ChildQuoteDetail filtered by the quotenbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByCustid(string $custid) Return the first ChildQuoteDetail filtered by the custid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByLinenbr(string $linenbr) Return the first ChildQuoteDetail filtered by the linenbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneBySublinenbr(string $sublinenbr) Return the first ChildQuoteDetail filtered by the sublinenbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByItemid(string $itemid) Return the first ChildQuoteDetail filtered by the itemid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByDesc1(string $desc1) Return the first ChildQuoteDetail filtered by the desc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByDesc2(string $desc2) Return the first ChildQuoteDetail filtered by the desc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByCustitemid(string $custitemid) Return the first ChildQuoteDetail filtered by the custitemid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByVendorid(string $vendorid) Return the first ChildQuoteDetail filtered by the vendorid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByVendoritemid(string $vendoritemid) Return the first ChildQuoteDetail filtered by the vendoritemid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByStatus(string $status) Return the first ChildQuoteDetail filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByLostreason(string $lostreason) Return the first ChildQuoteDetail filtered by the lostreason column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByLostdate(string $lostdate) Return the first ChildQuoteDetail filtered by the lostdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByKititemflag(string $kititemflag) Return the first ChildQuoteDetail filtered by the kititemflag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByHasnotes(string $hasnotes) Return the first ChildQuoteDetail filtered by the hasnotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByVenddetail(string $venddetail) Return the first ChildQuoteDetail filtered by the venddetail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByRshipdate(string $rshipdate) Return the first ChildQuoteDetail filtered by the rshipdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByLeaddays(int $leaddays) Return the first ChildQuoteDetail filtered by the leaddays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByTaxcode(string $taxcode) Return the first ChildQuoteDetail filtered by the taxcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByOrdrqty(string $ordrqty) Return the first ChildQuoteDetail filtered by the ordrqty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByOrdrprice(string $ordrprice) Return the first ChildQuoteDetail filtered by the ordrprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByOrdrcost(string $ordrcost) Return the first ChildQuoteDetail filtered by the ordrcost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByOrdrtotalprice(string $ordrtotalprice) Return the first ChildQuoteDetail filtered by the ordrtotalprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByOrdrtotalcost(string $ordrtotalcost) Return the first ChildQuoteDetail filtered by the ordrtotalcost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByUom(string $uom) Return the first ChildQuoteDetail filtered by the uom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByCostuom(string $costuom) Return the first ChildQuoteDetail filtered by the costuom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByWhse(string $whse) Return the first ChildQuoteDetail filtered by the whse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByListprice(string $listprice) Return the first ChildQuoteDetail filtered by the listprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByStancost(string $stancost) Return the first ChildQuoteDetail filtered by the stancost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQuotind(string $quotind) Return the first ChildQuoteDetail filtered by the quotind column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQuotqty(int $quotqty) Return the first ChildQuoteDetail filtered by the quotqty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQuotprice(string $quotprice) Return the first ChildQuoteDetail filtered by the quotprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQuotcost(string $quotcost) Return the first ChildQuoteDetail filtered by the quotcost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByQuotmkupmarg(string $quotmkupmarg) Return the first ChildQuoteDetail filtered by the quotmkupmarg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByDiscpct(string $discpct) Return the first ChildQuoteDetail filtered by the discpct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneBySpcord(string $spcord) Return the first ChildQuoteDetail filtered by the spcord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByError(string $error) Return the first ChildQuoteDetail filtered by the error column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByErrormsg(string $errormsg) Return the first ChildQuoteDetail filtered by the errormsg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByMinprice(string $minprice) Return the first ChildQuoteDetail filtered by the minprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByNsitemgroup(string $nsitemgroup) Return the first ChildQuoteDetail filtered by the nsitemgroup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByShipfromid(string $shipfromid) Return the first ChildQuoteDetail filtered by the shipfromid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByItemtype(string $itemtype) Return the first ChildQuoteDetail filtered by the itemtype column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteDetail requireOneByDummy(string $dummy) Return the first ChildQuoteDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuoteDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildQuoteDetail objects based on current ModelCriteria
 * @method     ChildQuoteDetail[]|ObjectCollection findBySessionid(string $sessionid) Return ChildQuoteDetail objects filtered by the sessionid column
 * @method     ChildQuoteDetail[]|ObjectCollection findByRecno(int $recno) Return ChildQuoteDetail objects filtered by the recno column
 * @method     ChildQuoteDetail[]|ObjectCollection findByDate(int $date) Return ChildQuoteDetail objects filtered by the date column
 * @method     ChildQuoteDetail[]|ObjectCollection findByTime(int $time) Return ChildQuoteDetail objects filtered by the time column
 * @method     ChildQuoteDetail[]|ObjectCollection findByQuotenbr(string $quotenbr) Return ChildQuoteDetail objects filtered by the quotenbr column
 * @method     ChildQuoteDetail[]|ObjectCollection findByCustid(string $custid) Return ChildQuoteDetail objects filtered by the custid column
 * @method     ChildQuoteDetail[]|ObjectCollection findByLinenbr(string $linenbr) Return ChildQuoteDetail objects filtered by the linenbr column
 * @method     ChildQuoteDetail[]|ObjectCollection findBySublinenbr(string $sublinenbr) Return ChildQuoteDetail objects filtered by the sublinenbr column
 * @method     ChildQuoteDetail[]|ObjectCollection findByItemid(string $itemid) Return ChildQuoteDetail objects filtered by the itemid column
 * @method     ChildQuoteDetail[]|ObjectCollection findByDesc1(string $desc1) Return ChildQuoteDetail objects filtered by the desc1 column
 * @method     ChildQuoteDetail[]|ObjectCollection findByDesc2(string $desc2) Return ChildQuoteDetail objects filtered by the desc2 column
 * @method     ChildQuoteDetail[]|ObjectCollection findByCustitemid(string $custitemid) Return ChildQuoteDetail objects filtered by the custitemid column
 * @method     ChildQuoteDetail[]|ObjectCollection findByVendorid(string $vendorid) Return ChildQuoteDetail objects filtered by the vendorid column
 * @method     ChildQuoteDetail[]|ObjectCollection findByVendoritemid(string $vendoritemid) Return ChildQuoteDetail objects filtered by the vendoritemid column
 * @method     ChildQuoteDetail[]|ObjectCollection findByStatus(string $status) Return ChildQuoteDetail objects filtered by the status column
 * @method     ChildQuoteDetail[]|ObjectCollection findByLostreason(string $lostreason) Return ChildQuoteDetail objects filtered by the lostreason column
 * @method     ChildQuoteDetail[]|ObjectCollection findByLostdate(string $lostdate) Return ChildQuoteDetail objects filtered by the lostdate column
 * @method     ChildQuoteDetail[]|ObjectCollection findByKititemflag(string $kititemflag) Return ChildQuoteDetail objects filtered by the kititemflag column
 * @method     ChildQuoteDetail[]|ObjectCollection findByHasnotes(string $hasnotes) Return ChildQuoteDetail objects filtered by the hasnotes column
 * @method     ChildQuoteDetail[]|ObjectCollection findByVenddetail(string $venddetail) Return ChildQuoteDetail objects filtered by the venddetail column
 * @method     ChildQuoteDetail[]|ObjectCollection findByRshipdate(string $rshipdate) Return ChildQuoteDetail objects filtered by the rshipdate column
 * @method     ChildQuoteDetail[]|ObjectCollection findByLeaddays(int $leaddays) Return ChildQuoteDetail objects filtered by the leaddays column
 * @method     ChildQuoteDetail[]|ObjectCollection findByTaxcode(string $taxcode) Return ChildQuoteDetail objects filtered by the taxcode column
 * @method     ChildQuoteDetail[]|ObjectCollection findByOrdrqty(string $ordrqty) Return ChildQuoteDetail objects filtered by the ordrqty column
 * @method     ChildQuoteDetail[]|ObjectCollection findByOrdrprice(string $ordrprice) Return ChildQuoteDetail objects filtered by the ordrprice column
 * @method     ChildQuoteDetail[]|ObjectCollection findByOrdrcost(string $ordrcost) Return ChildQuoteDetail objects filtered by the ordrcost column
 * @method     ChildQuoteDetail[]|ObjectCollection findByOrdrtotalprice(string $ordrtotalprice) Return ChildQuoteDetail objects filtered by the ordrtotalprice column
 * @method     ChildQuoteDetail[]|ObjectCollection findByOrdrtotalcost(string $ordrtotalcost) Return ChildQuoteDetail objects filtered by the ordrtotalcost column
 * @method     ChildQuoteDetail[]|ObjectCollection findByUom(string $uom) Return ChildQuoteDetail objects filtered by the uom column
 * @method     ChildQuoteDetail[]|ObjectCollection findByCostuom(string $costuom) Return ChildQuoteDetail objects filtered by the costuom column
 * @method     ChildQuoteDetail[]|ObjectCollection findByWhse(string $whse) Return ChildQuoteDetail objects filtered by the whse column
 * @method     ChildQuoteDetail[]|ObjectCollection findByListprice(string $listprice) Return ChildQuoteDetail objects filtered by the listprice column
 * @method     ChildQuoteDetail[]|ObjectCollection findByStancost(string $stancost) Return ChildQuoteDetail objects filtered by the stancost column
 * @method     ChildQuoteDetail[]|ObjectCollection findByQuotind(string $quotind) Return ChildQuoteDetail objects filtered by the quotind column
 * @method     ChildQuoteDetail[]|ObjectCollection findByQuotqty(int $quotqty) Return ChildQuoteDetail objects filtered by the quotqty column
 * @method     ChildQuoteDetail[]|ObjectCollection findByQuotprice(string $quotprice) Return ChildQuoteDetail objects filtered by the quotprice column
 * @method     ChildQuoteDetail[]|ObjectCollection findByQuotcost(string $quotcost) Return ChildQuoteDetail objects filtered by the quotcost column
 * @method     ChildQuoteDetail[]|ObjectCollection findByQuotmkupmarg(string $quotmkupmarg) Return ChildQuoteDetail objects filtered by the quotmkupmarg column
 * @method     ChildQuoteDetail[]|ObjectCollection findByDiscpct(string $discpct) Return ChildQuoteDetail objects filtered by the discpct column
 * @method     ChildQuoteDetail[]|ObjectCollection findBySpcord(string $spcord) Return ChildQuoteDetail objects filtered by the spcord column
 * @method     ChildQuoteDetail[]|ObjectCollection findByError(string $error) Return ChildQuoteDetail objects filtered by the error column
 * @method     ChildQuoteDetail[]|ObjectCollection findByErrormsg(string $errormsg) Return ChildQuoteDetail objects filtered by the errormsg column
 * @method     ChildQuoteDetail[]|ObjectCollection findByMinprice(string $minprice) Return ChildQuoteDetail objects filtered by the minprice column
 * @method     ChildQuoteDetail[]|ObjectCollection findByNsitemgroup(string $nsitemgroup) Return ChildQuoteDetail objects filtered by the nsitemgroup column
 * @method     ChildQuoteDetail[]|ObjectCollection findByShipfromid(string $shipfromid) Return ChildQuoteDetail objects filtered by the shipfromid column
 * @method     ChildQuoteDetail[]|ObjectCollection findByItemtype(string $itemtype) Return ChildQuoteDetail objects filtered by the itemtype column
 * @method     ChildQuoteDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildQuoteDetail objects filtered by the dummy column
 * @method     ChildQuoteDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class QuoteDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\QuoteDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\QuoteDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildQuoteDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildQuoteDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildQuoteDetailQuery) {
            return $criteria;
        }
        $query = new ChildQuoteDetailQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$sessionid, $recno] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildQuoteDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = QuoteDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildQuoteDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT sessionid, recno, date, time, quotenbr, custid, linenbr, sublinenbr, itemid, desc1, desc2, custitemid, vendorid, vendoritemid, status, lostreason, lostdate, kititemflag, hasnotes, venddetail, rshipdate, leaddays, taxcode, ordrqty, ordrprice, ordrcost, ordrtotalprice, ordrtotalcost, uom, costuom, whse, listprice, stancost, quotind, quotqty, quotprice, quotcost, quotmkupmarg, discpct, spcord, error, errormsg, minprice, nsitemgroup, shipfromid, itemtype, dummy FROM quotdet WHERE sessionid = :p0 AND recno = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildQuoteDetail $obj */
            $obj = new ChildQuoteDetail();
            $obj->hydrate($row);
            QuoteDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildQuoteDetail|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(QuoteDetailTableMap::COL_SESSIONID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(QuoteDetailTableMap::COL_RECNO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(QuoteDetailTableMap::COL_SESSIONID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(QuoteDetailTableMap::COL_RECNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the sessionid column
     *
     * Example usage:
     * <code>
     * $query->filterBySessionid('fooValue');   // WHERE sessionid = 'fooValue'
     * $query->filterBySessionid('%fooValue%', Criteria::LIKE); // WHERE sessionid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sessionid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterBySessionid($sessionid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_SESSIONID, $sessionid, $comparison);
    }

    /**
     * Filter the query on the recno column
     *
     * Example usage:
     * <code>
     * $query->filterByRecno(1234); // WHERE recno = 1234
     * $query->filterByRecno(array(12, 34)); // WHERE recno IN (12, 34)
     * $query->filterByRecno(array('min' => 12)); // WHERE recno > 12
     * </code>
     *
     * @param     mixed $recno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByRecno($recno = null, $comparison = null)
    {
        if (is_array($recno)) {
            $useMinMax = false;
            if (isset($recno['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_RECNO, $recno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recno['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_RECNO, $recno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_RECNO, $recno, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate(1234); // WHERE date = 1234
     * $query->filterByDate(array(12, 34)); // WHERE date IN (12, 34)
     * $query->filterByDate(array('min' => 12)); // WHERE date > 12
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the time column
     *
     * Example usage:
     * <code>
     * $query->filterByTime(1234); // WHERE time = 1234
     * $query->filterByTime(array(12, 34)); // WHERE time IN (12, 34)
     * $query->filterByTime(array('min' => 12)); // WHERE time > 12
     * </code>
     *
     * @param     mixed $time The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_TIME, $time, $comparison);
    }

    /**
     * Filter the query on the quotenbr column
     *
     * Example usage:
     * <code>
     * $query->filterByQuotenbr('fooValue');   // WHERE quotenbr = 'fooValue'
     * $query->filterByQuotenbr('%fooValue%', Criteria::LIKE); // WHERE quotenbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quotenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByQuotenbr($quotenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quotenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_QUOTENBR, $quotenbr, $comparison);
    }

    /**
     * Filter the query on the custid column
     *
     * Example usage:
     * <code>
     * $query->filterByCustid('fooValue');   // WHERE custid = 'fooValue'
     * $query->filterByCustid('%fooValue%', Criteria::LIKE); // WHERE custid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $custid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByCustid($custid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_CUSTID, $custid, $comparison);
    }

    /**
     * Filter the query on the linenbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLinenbr('fooValue');   // WHERE linenbr = 'fooValue'
     * $query->filterByLinenbr('%fooValue%', Criteria::LIKE); // WHERE linenbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $linenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByLinenbr($linenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($linenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_LINENBR, $linenbr, $comparison);
    }

    /**
     * Filter the query on the sublinenbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySublinenbr('fooValue');   // WHERE sublinenbr = 'fooValue'
     * $query->filterBySublinenbr('%fooValue%', Criteria::LIKE); // WHERE sublinenbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sublinenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterBySublinenbr($sublinenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sublinenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_SUBLINENBR, $sublinenbr, $comparison);
    }

    /**
     * Filter the query on the itemid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemid('fooValue');   // WHERE itemid = 'fooValue'
     * $query->filterByItemid('%fooValue%', Criteria::LIKE); // WHERE itemid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByItemid($itemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ITEMID, $itemid, $comparison);
    }

    /**
     * Filter the query on the desc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDesc1('fooValue');   // WHERE desc1 = 'fooValue'
     * $query->filterByDesc1('%fooValue%', Criteria::LIKE); // WHERE desc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByDesc1($desc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_DESC1, $desc1, $comparison);
    }

    /**
     * Filter the query on the desc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDesc2('fooValue');   // WHERE desc2 = 'fooValue'
     * $query->filterByDesc2('%fooValue%', Criteria::LIKE); // WHERE desc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByDesc2($desc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_DESC2, $desc2, $comparison);
    }

    /**
     * Filter the query on the custitemid column
     *
     * Example usage:
     * <code>
     * $query->filterByCustitemid('fooValue');   // WHERE custitemid = 'fooValue'
     * $query->filterByCustitemid('%fooValue%', Criteria::LIKE); // WHERE custitemid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $custitemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByCustitemid($custitemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custitemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_CUSTITEMID, $custitemid, $comparison);
    }

    /**
     * Filter the query on the vendorid column
     *
     * Example usage:
     * <code>
     * $query->filterByVendorid('fooValue');   // WHERE vendorid = 'fooValue'
     * $query->filterByVendorid('%fooValue%', Criteria::LIKE); // WHERE vendorid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vendorid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByVendorid($vendorid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vendorid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_VENDORID, $vendorid, $comparison);
    }

    /**
     * Filter the query on the vendoritemid column
     *
     * Example usage:
     * <code>
     * $query->filterByVendoritemid('fooValue');   // WHERE vendoritemid = 'fooValue'
     * $query->filterByVendoritemid('%fooValue%', Criteria::LIKE); // WHERE vendoritemid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vendoritemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByVendoritemid($vendoritemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vendoritemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_VENDORITEMID, $vendoritemid, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%', Criteria::LIKE); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the lostreason column
     *
     * Example usage:
     * <code>
     * $query->filterByLostreason('fooValue');   // WHERE lostreason = 'fooValue'
     * $query->filterByLostreason('%fooValue%', Criteria::LIKE); // WHERE lostreason LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lostreason The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByLostreason($lostreason = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lostreason)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_LOSTREASON, $lostreason, $comparison);
    }

    /**
     * Filter the query on the lostdate column
     *
     * Example usage:
     * <code>
     * $query->filterByLostdate('fooValue');   // WHERE lostdate = 'fooValue'
     * $query->filterByLostdate('%fooValue%', Criteria::LIKE); // WHERE lostdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lostdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByLostdate($lostdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lostdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_LOSTDATE, $lostdate, $comparison);
    }

    /**
     * Filter the query on the kititemflag column
     *
     * Example usage:
     * <code>
     * $query->filterByKititemflag('fooValue');   // WHERE kititemflag = 'fooValue'
     * $query->filterByKititemflag('%fooValue%', Criteria::LIKE); // WHERE kititemflag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kititemflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByKititemflag($kititemflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kititemflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_KITITEMFLAG, $kititemflag, $comparison);
    }

    /**
     * Filter the query on the hasnotes column
     *
     * Example usage:
     * <code>
     * $query->filterByHasnotes('fooValue');   // WHERE hasnotes = 'fooValue'
     * $query->filterByHasnotes('%fooValue%', Criteria::LIKE); // WHERE hasnotes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hasnotes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByHasnotes($hasnotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasnotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_HASNOTES, $hasnotes, $comparison);
    }

    /**
     * Filter the query on the venddetail column
     *
     * Example usage:
     * <code>
     * $query->filterByVenddetail('fooValue');   // WHERE venddetail = 'fooValue'
     * $query->filterByVenddetail('%fooValue%', Criteria::LIKE); // WHERE venddetail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $venddetail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByVenddetail($venddetail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($venddetail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_VENDDETAIL, $venddetail, $comparison);
    }

    /**
     * Filter the query on the rshipdate column
     *
     * Example usage:
     * <code>
     * $query->filterByRshipdate('fooValue');   // WHERE rshipdate = 'fooValue'
     * $query->filterByRshipdate('%fooValue%', Criteria::LIKE); // WHERE rshipdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rshipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByRshipdate($rshipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_RSHIPDATE, $rshipdate, $comparison);
    }

    /**
     * Filter the query on the leaddays column
     *
     * Example usage:
     * <code>
     * $query->filterByLeaddays(1234); // WHERE leaddays = 1234
     * $query->filterByLeaddays(array(12, 34)); // WHERE leaddays IN (12, 34)
     * $query->filterByLeaddays(array('min' => 12)); // WHERE leaddays > 12
     * </code>
     *
     * @param     mixed $leaddays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByLeaddays($leaddays = null, $comparison = null)
    {
        if (is_array($leaddays)) {
            $useMinMax = false;
            if (isset($leaddays['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_LEADDAYS, $leaddays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($leaddays['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_LEADDAYS, $leaddays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_LEADDAYS, $leaddays, $comparison);
    }

    /**
     * Filter the query on the taxcode column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxcode('fooValue');   // WHERE taxcode = 'fooValue'
     * $query->filterByTaxcode('%fooValue%', Criteria::LIKE); // WHERE taxcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByTaxcode($taxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_TAXCODE, $taxcode, $comparison);
    }

    /**
     * Filter the query on the ordrqty column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdrqty('fooValue');   // WHERE ordrqty = 'fooValue'
     * $query->filterByOrdrqty('%fooValue%', Criteria::LIKE); // WHERE ordrqty LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordrqty The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByOrdrqty($ordrqty = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordrqty)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ORDRQTY, $ordrqty, $comparison);
    }

    /**
     * Filter the query on the ordrprice column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdrprice('fooValue');   // WHERE ordrprice = 'fooValue'
     * $query->filterByOrdrprice('%fooValue%', Criteria::LIKE); // WHERE ordrprice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordrprice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByOrdrprice($ordrprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordrprice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ORDRPRICE, $ordrprice, $comparison);
    }

    /**
     * Filter the query on the ordrcost column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdrcost('fooValue');   // WHERE ordrcost = 'fooValue'
     * $query->filterByOrdrcost('%fooValue%', Criteria::LIKE); // WHERE ordrcost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordrcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByOrdrcost($ordrcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordrcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ORDRCOST, $ordrcost, $comparison);
    }

    /**
     * Filter the query on the ordrtotalprice column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdrtotalprice('fooValue');   // WHERE ordrtotalprice = 'fooValue'
     * $query->filterByOrdrtotalprice('%fooValue%', Criteria::LIKE); // WHERE ordrtotalprice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordrtotalprice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByOrdrtotalprice($ordrtotalprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordrtotalprice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ORDRTOTALPRICE, $ordrtotalprice, $comparison);
    }

    /**
     * Filter the query on the ordrtotalcost column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdrtotalcost('fooValue');   // WHERE ordrtotalcost = 'fooValue'
     * $query->filterByOrdrtotalcost('%fooValue%', Criteria::LIKE); // WHERE ordrtotalcost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordrtotalcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByOrdrtotalcost($ordrtotalcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordrtotalcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ORDRTOTALCOST, $ordrtotalcost, $comparison);
    }

    /**
     * Filter the query on the uom column
     *
     * Example usage:
     * <code>
     * $query->filterByUom('fooValue');   // WHERE uom = 'fooValue'
     * $query->filterByUom('%fooValue%', Criteria::LIKE); // WHERE uom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByUom($uom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_UOM, $uom, $comparison);
    }

    /**
     * Filter the query on the costuom column
     *
     * Example usage:
     * <code>
     * $query->filterByCostuom('fooValue');   // WHERE costuom = 'fooValue'
     * $query->filterByCostuom('%fooValue%', Criteria::LIKE); // WHERE costuom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $costuom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByCostuom($costuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($costuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_COSTUOM, $costuom, $comparison);
    }

    /**
     * Filter the query on the whse column
     *
     * Example usage:
     * <code>
     * $query->filterByWhse('fooValue');   // WHERE whse = 'fooValue'
     * $query->filterByWhse('%fooValue%', Criteria::LIKE); // WHERE whse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $whse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByWhse($whse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_WHSE, $whse, $comparison);
    }

    /**
     * Filter the query on the listprice column
     *
     * Example usage:
     * <code>
     * $query->filterByListprice('fooValue');   // WHERE listprice = 'fooValue'
     * $query->filterByListprice('%fooValue%', Criteria::LIKE); // WHERE listprice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $listprice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByListprice($listprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($listprice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_LISTPRICE, $listprice, $comparison);
    }

    /**
     * Filter the query on the stancost column
     *
     * Example usage:
     * <code>
     * $query->filterByStancost('fooValue');   // WHERE stancost = 'fooValue'
     * $query->filterByStancost('%fooValue%', Criteria::LIKE); // WHERE stancost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stancost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByStancost($stancost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stancost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_STANCOST, $stancost, $comparison);
    }

    /**
     * Filter the query on the quotind column
     *
     * Example usage:
     * <code>
     * $query->filterByQuotind('fooValue');   // WHERE quotind = 'fooValue'
     * $query->filterByQuotind('%fooValue%', Criteria::LIKE); // WHERE quotind LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quotind The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByQuotind($quotind = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quotind)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_QUOTIND, $quotind, $comparison);
    }

    /**
     * Filter the query on the quotqty column
     *
     * Example usage:
     * <code>
     * $query->filterByQuotqty(1234); // WHERE quotqty = 1234
     * $query->filterByQuotqty(array(12, 34)); // WHERE quotqty IN (12, 34)
     * $query->filterByQuotqty(array('min' => 12)); // WHERE quotqty > 12
     * </code>
     *
     * @param     mixed $quotqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByQuotqty($quotqty = null, $comparison = null)
    {
        if (is_array($quotqty)) {
            $useMinMax = false;
            if (isset($quotqty['min'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QUOTQTY, $quotqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quotqty['max'])) {
                $this->addUsingAlias(QuoteDetailTableMap::COL_QUOTQTY, $quotqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_QUOTQTY, $quotqty, $comparison);
    }

    /**
     * Filter the query on the quotprice column
     *
     * Example usage:
     * <code>
     * $query->filterByQuotprice('fooValue');   // WHERE quotprice = 'fooValue'
     * $query->filterByQuotprice('%fooValue%', Criteria::LIKE); // WHERE quotprice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quotprice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByQuotprice($quotprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quotprice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_QUOTPRICE, $quotprice, $comparison);
    }

    /**
     * Filter the query on the quotcost column
     *
     * Example usage:
     * <code>
     * $query->filterByQuotcost('fooValue');   // WHERE quotcost = 'fooValue'
     * $query->filterByQuotcost('%fooValue%', Criteria::LIKE); // WHERE quotcost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quotcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByQuotcost($quotcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quotcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_QUOTCOST, $quotcost, $comparison);
    }

    /**
     * Filter the query on the quotmkupmarg column
     *
     * Example usage:
     * <code>
     * $query->filterByQuotmkupmarg('fooValue');   // WHERE quotmkupmarg = 'fooValue'
     * $query->filterByQuotmkupmarg('%fooValue%', Criteria::LIKE); // WHERE quotmkupmarg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quotmkupmarg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByQuotmkupmarg($quotmkupmarg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quotmkupmarg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_QUOTMKUPMARG, $quotmkupmarg, $comparison);
    }

    /**
     * Filter the query on the discpct column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscpct('fooValue');   // WHERE discpct = 'fooValue'
     * $query->filterByDiscpct('%fooValue%', Criteria::LIKE); // WHERE discpct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $discpct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByDiscpct($discpct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($discpct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_DISCPCT, $discpct, $comparison);
    }

    /**
     * Filter the query on the spcord column
     *
     * Example usage:
     * <code>
     * $query->filterBySpcord('fooValue');   // WHERE spcord = 'fooValue'
     * $query->filterBySpcord('%fooValue%', Criteria::LIKE); // WHERE spcord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spcord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterBySpcord($spcord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spcord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_SPCORD, $spcord, $comparison);
    }

    /**
     * Filter the query on the error column
     *
     * Example usage:
     * <code>
     * $query->filterByError('fooValue');   // WHERE error = 'fooValue'
     * $query->filterByError('%fooValue%', Criteria::LIKE); // WHERE error LIKE '%fooValue%'
     * </code>
     *
     * @param     string $error The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByError($error = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($error)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ERROR, $error, $comparison);
    }

    /**
     * Filter the query on the errormsg column
     *
     * Example usage:
     * <code>
     * $query->filterByErrormsg('fooValue');   // WHERE errormsg = 'fooValue'
     * $query->filterByErrormsg('%fooValue%', Criteria::LIKE); // WHERE errormsg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $errormsg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByErrormsg($errormsg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($errormsg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ERRORMSG, $errormsg, $comparison);
    }

    /**
     * Filter the query on the minprice column
     *
     * Example usage:
     * <code>
     * $query->filterByMinprice('fooValue');   // WHERE minprice = 'fooValue'
     * $query->filterByMinprice('%fooValue%', Criteria::LIKE); // WHERE minprice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $minprice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByMinprice($minprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($minprice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_MINPRICE, $minprice, $comparison);
    }

    /**
     * Filter the query on the nsitemgroup column
     *
     * Example usage:
     * <code>
     * $query->filterByNsitemgroup('fooValue');   // WHERE nsitemgroup = 'fooValue'
     * $query->filterByNsitemgroup('%fooValue%', Criteria::LIKE); // WHERE nsitemgroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nsitemgroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByNsitemgroup($nsitemgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nsitemgroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_NSITEMGROUP, $nsitemgroup, $comparison);
    }

    /**
     * Filter the query on the shipfromid column
     *
     * Example usage:
     * <code>
     * $query->filterByShipfromid('fooValue');   // WHERE shipfromid = 'fooValue'
     * $query->filterByShipfromid('%fooValue%', Criteria::LIKE); // WHERE shipfromid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipfromid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByShipfromid($shipfromid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipfromid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_SHIPFROMID, $shipfromid, $comparison);
    }

    /**
     * Filter the query on the itemtype column
     *
     * Example usage:
     * <code>
     * $query->filterByItemtype('fooValue');   // WHERE itemtype = 'fooValue'
     * $query->filterByItemtype('%fooValue%', Criteria::LIKE); // WHERE itemtype LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByItemtype($itemtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_ITEMTYPE, $itemtype, $comparison);
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dummy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildQuoteDetail $quoteDetail Object to remove from the list of results
     *
     * @return $this|ChildQuoteDetailQuery The current query, for fluid interface
     */
    public function prune($quoteDetail = null)
    {
        if ($quoteDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(QuoteDetailTableMap::COL_SESSIONID), $quoteDetail->getSessionid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(QuoteDetailTableMap::COL_RECNO), $quoteDetail->getRecno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the quotdet table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QuoteDetailTableMap::clearInstancePool();
            QuoteDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(QuoteDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            QuoteDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            QuoteDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // QuoteDetailQuery
