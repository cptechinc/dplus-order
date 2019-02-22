<?php

namespace Base;

use \SalesOrderEdit as ChildSalesOrderEdit;
use \SalesOrderEditQuery as ChildSalesOrderEditQuery;
use \Exception;
use \PDO;
use Map\SalesOrderEditTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ordrhed' table.
 *
 *
 *
 * @method     ChildSalesOrderEditQuery orderBySessionid($order = Criteria::ASC) Order by the sessionid column
 * @method     ChildSalesOrderEditQuery orderByRecno($order = Criteria::ASC) Order by the recno column
 * @method     ChildSalesOrderEditQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildSalesOrderEditQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildSalesOrderEditQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChildSalesOrderEditQuery orderByCustid($order = Criteria::ASC) Order by the custid column
 * @method     ChildSalesOrderEditQuery orderByShiptoid($order = Criteria::ASC) Order by the shiptoid column
 * @method     ChildSalesOrderEditQuery orderByCustname($order = Criteria::ASC) Order by the custname column
 * @method     ChildSalesOrderEditQuery orderByOrderno($order = Criteria::ASC) Order by the orderno column
 * @method     ChildSalesOrderEditQuery orderByCustpo($order = Criteria::ASC) Order by the custpo column
 * @method     ChildSalesOrderEditQuery orderByCustref($order = Criteria::ASC) Order by the custref column
 * @method     ChildSalesOrderEditQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildSalesOrderEditQuery orderByOrderdate($order = Criteria::ASC) Order by the orderdate column
 * @method     ChildSalesOrderEditQuery orderByCareof($order = Criteria::ASC) Order by the careof column
 * @method     ChildSalesOrderEditQuery orderByQuotdate($order = Criteria::ASC) Order by the quotdate column
 * @method     ChildSalesOrderEditQuery orderByInvdate($order = Criteria::ASC) Order by the invdate column
 * @method     ChildSalesOrderEditQuery orderByShipdate($order = Criteria::ASC) Order by the shipdate column
 * @method     ChildSalesOrderEditQuery orderByRevdate($order = Criteria::ASC) Order by the revdate column
 * @method     ChildSalesOrderEditQuery orderByExpdate($order = Criteria::ASC) Order by the expdate column
 * @method     ChildSalesOrderEditQuery orderByHasdocuments($order = Criteria::ASC) Order by the hasdocuments column
 * @method     ChildSalesOrderEditQuery orderByHastracking($order = Criteria::ASC) Order by the hastracking column
 * @method     ChildSalesOrderEditQuery orderBySubtotal($order = Criteria::ASC) Order by the subtotal column
 * @method     ChildSalesOrderEditQuery orderBySalestax($order = Criteria::ASC) Order by the salestax column
 * @method     ChildSalesOrderEditQuery orderByFreight($order = Criteria::ASC) Order by the freight column
 * @method     ChildSalesOrderEditQuery orderByMisccost($order = Criteria::ASC) Order by the misccost column
 * @method     ChildSalesOrderEditQuery orderByOrdertotal($order = Criteria::ASC) Order by the ordertotal column
 * @method     ChildSalesOrderEditQuery orderByHasnotes($order = Criteria::ASC) Order by the hasnotes column
 * @method     ChildSalesOrderEditQuery orderByEditord($order = Criteria::ASC) Order by the editord column
 * @method     ChildSalesOrderEditQuery orderByError($order = Criteria::ASC) Order by the error column
 * @method     ChildSalesOrderEditQuery orderByErrormsg($order = Criteria::ASC) Order by the errormsg column
 * @method     ChildSalesOrderEditQuery orderBySconame($order = Criteria::ASC) Order by the sconame column
 * @method     ChildSalesOrderEditQuery orderByShipname($order = Criteria::ASC) Order by the shipname column
 * @method     ChildSalesOrderEditQuery orderByShipaddress($order = Criteria::ASC) Order by the shipaddress column
 * @method     ChildSalesOrderEditQuery orderByShipaddress2($order = Criteria::ASC) Order by the shipaddress2 column
 * @method     ChildSalesOrderEditQuery orderByShipcity($order = Criteria::ASC) Order by the shipcity column
 * @method     ChildSalesOrderEditQuery orderByShipstate($order = Criteria::ASC) Order by the shipstate column
 * @method     ChildSalesOrderEditQuery orderByShipzip($order = Criteria::ASC) Order by the shipzip column
 * @method     ChildSalesOrderEditQuery orderByShipcountry($order = Criteria::ASC) Order by the shipcountry column
 * @method     ChildSalesOrderEditQuery orderByContact($order = Criteria::ASC) Order by the contact column
 * @method     ChildSalesOrderEditQuery orderByPhintl($order = Criteria::ASC) Order by the phintl column
 * @method     ChildSalesOrderEditQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ChildSalesOrderEditQuery orderByExtension($order = Criteria::ASC) Order by the extension column
 * @method     ChildSalesOrderEditQuery orderByFaxnbr($order = Criteria::ASC) Order by the faxnbr column
 * @method     ChildSalesOrderEditQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildSalesOrderEditQuery orderByReleasenbr($order = Criteria::ASC) Order by the releasenbr column
 * @method     ChildSalesOrderEditQuery orderByShipviacd($order = Criteria::ASC) Order by the shipviacd column
 * @method     ChildSalesOrderEditQuery orderByShipviadesc($order = Criteria::ASC) Order by the shipviadesc column
 * @method     ChildSalesOrderEditQuery orderByPricecode($order = Criteria::ASC) Order by the pricecode column
 * @method     ChildSalesOrderEditQuery orderByPricecodedesc($order = Criteria::ASC) Order by the pricecodedesc column
 * @method     ChildSalesOrderEditQuery orderByPricedisp($order = Criteria::ASC) Order by the pricedisp column
 * @method     ChildSalesOrderEditQuery orderByTaxcode($order = Criteria::ASC) Order by the taxcode column
 * @method     ChildSalesOrderEditQuery orderByTaxcodedesc($order = Criteria::ASC) Order by the taxcodedesc column
 * @method     ChildSalesOrderEditQuery orderByTaxcodedisp($order = Criteria::ASC) Order by the taxcodedisp column
 * @method     ChildSalesOrderEditQuery orderByTermcode($order = Criteria::ASC) Order by the termcode column
 * @method     ChildSalesOrderEditQuery orderByTermtype($order = Criteria::ASC) Order by the termtype column
 * @method     ChildSalesOrderEditQuery orderByTermcodedesc($order = Criteria::ASC) Order by the termcodedesc column
 * @method     ChildSalesOrderEditQuery orderByRqstdate($order = Criteria::ASC) Order by the rqstdate column
 * @method     ChildSalesOrderEditQuery orderByShipcom($order = Criteria::ASC) Order by the shipcom column
 * @method     ChildSalesOrderEditQuery orderBySp1($order = Criteria::ASC) Order by the sp1 column
 * @method     ChildSalesOrderEditQuery orderBySp1name($order = Criteria::ASC) Order by the sp1name column
 * @method     ChildSalesOrderEditQuery orderBySp2($order = Criteria::ASC) Order by the sp2 column
 * @method     ChildSalesOrderEditQuery orderBySp2name($order = Criteria::ASC) Order by the sp2name column
 * @method     ChildSalesOrderEditQuery orderBySp2disp($order = Criteria::ASC) Order by the sp2disp column
 * @method     ChildSalesOrderEditQuery orderBySp3($order = Criteria::ASC) Order by the sp3 column
 * @method     ChildSalesOrderEditQuery orderBySp3name($order = Criteria::ASC) Order by the sp3name column
 * @method     ChildSalesOrderEditQuery orderBySp3disp($order = Criteria::ASC) Order by the sp3disp column
 * @method     ChildSalesOrderEditQuery orderByFob($order = Criteria::ASC) Order by the fob column
 * @method     ChildSalesOrderEditQuery orderByDeliverydesc($order = Criteria::ASC) Order by the deliverydesc column
 * @method     ChildSalesOrderEditQuery orderByWhse($order = Criteria::ASC) Order by the whse column
 * @method     ChildSalesOrderEditQuery orderByCardnumber($order = Criteria::ASC) Order by the cardnumber column
 * @method     ChildSalesOrderEditQuery orderByCardexpire($order = Criteria::ASC) Order by the cardexpire column
 * @method     ChildSalesOrderEditQuery orderByCardcode($order = Criteria::ASC) Order by the cardcode column
 * @method     ChildSalesOrderEditQuery orderByCardapproval($order = Criteria::ASC) Order by the cardapproval column
 * @method     ChildSalesOrderEditQuery orderByTotalcost($order = Criteria::ASC) Order by the totalcost column
 * @method     ChildSalesOrderEditQuery orderByTotaldiscount($order = Criteria::ASC) Order by the totaldiscount column
 * @method     ChildSalesOrderEditQuery orderByPaymenttype($order = Criteria::ASC) Order by the paymenttype column
 * @method     ChildSalesOrderEditQuery orderBySrcdatefrom($order = Criteria::ASC) Order by the srcdatefrom column
 * @method     ChildSalesOrderEditQuery orderBySrcdatethru($order = Criteria::ASC) Order by the srcdatethru column
 * @method     ChildSalesOrderEditQuery orderByBillname($order = Criteria::ASC) Order by the billname column
 * @method     ChildSalesOrderEditQuery orderByBilladdress($order = Criteria::ASC) Order by the billaddress column
 * @method     ChildSalesOrderEditQuery orderByBilladdress2($order = Criteria::ASC) Order by the billaddress2 column
 * @method     ChildSalesOrderEditQuery orderByBilladdress3($order = Criteria::ASC) Order by the billaddress3 column
 * @method     ChildSalesOrderEditQuery orderByBillcountry($order = Criteria::ASC) Order by the billcountry column
 * @method     ChildSalesOrderEditQuery orderByBillcity($order = Criteria::ASC) Order by the billcity column
 * @method     ChildSalesOrderEditQuery orderByBillstate($order = Criteria::ASC) Order by the billstate column
 * @method     ChildSalesOrderEditQuery orderByBillzip($order = Criteria::ASC) Order by the billzip column
 * @method     ChildSalesOrderEditQuery orderByPrntfmt($order = Criteria::ASC) Order by the prntfmt column
 * @method     ChildSalesOrderEditQuery orderByPrntfmtdisp($order = Criteria::ASC) Order by the prntfmtdisp column
 * @method     ChildSalesOrderEditQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesOrderEditQuery groupBySessionid() Group by the sessionid column
 * @method     ChildSalesOrderEditQuery groupByRecno() Group by the recno column
 * @method     ChildSalesOrderEditQuery groupByDate() Group by the date column
 * @method     ChildSalesOrderEditQuery groupByTime() Group by the time column
 * @method     ChildSalesOrderEditQuery groupByType() Group by the type column
 * @method     ChildSalesOrderEditQuery groupByCustid() Group by the custid column
 * @method     ChildSalesOrderEditQuery groupByShiptoid() Group by the shiptoid column
 * @method     ChildSalesOrderEditQuery groupByCustname() Group by the custname column
 * @method     ChildSalesOrderEditQuery groupByOrderno() Group by the orderno column
 * @method     ChildSalesOrderEditQuery groupByCustpo() Group by the custpo column
 * @method     ChildSalesOrderEditQuery groupByCustref() Group by the custref column
 * @method     ChildSalesOrderEditQuery groupByStatus() Group by the status column
 * @method     ChildSalesOrderEditQuery groupByOrderdate() Group by the orderdate column
 * @method     ChildSalesOrderEditQuery groupByCareof() Group by the careof column
 * @method     ChildSalesOrderEditQuery groupByQuotdate() Group by the quotdate column
 * @method     ChildSalesOrderEditQuery groupByInvdate() Group by the invdate column
 * @method     ChildSalesOrderEditQuery groupByShipdate() Group by the shipdate column
 * @method     ChildSalesOrderEditQuery groupByRevdate() Group by the revdate column
 * @method     ChildSalesOrderEditQuery groupByExpdate() Group by the expdate column
 * @method     ChildSalesOrderEditQuery groupByHasdocuments() Group by the hasdocuments column
 * @method     ChildSalesOrderEditQuery groupByHastracking() Group by the hastracking column
 * @method     ChildSalesOrderEditQuery groupBySubtotal() Group by the subtotal column
 * @method     ChildSalesOrderEditQuery groupBySalestax() Group by the salestax column
 * @method     ChildSalesOrderEditQuery groupByFreight() Group by the freight column
 * @method     ChildSalesOrderEditQuery groupByMisccost() Group by the misccost column
 * @method     ChildSalesOrderEditQuery groupByOrdertotal() Group by the ordertotal column
 * @method     ChildSalesOrderEditQuery groupByHasnotes() Group by the hasnotes column
 * @method     ChildSalesOrderEditQuery groupByEditord() Group by the editord column
 * @method     ChildSalesOrderEditQuery groupByError() Group by the error column
 * @method     ChildSalesOrderEditQuery groupByErrormsg() Group by the errormsg column
 * @method     ChildSalesOrderEditQuery groupBySconame() Group by the sconame column
 * @method     ChildSalesOrderEditQuery groupByShipname() Group by the shipname column
 * @method     ChildSalesOrderEditQuery groupByShipaddress() Group by the shipaddress column
 * @method     ChildSalesOrderEditQuery groupByShipaddress2() Group by the shipaddress2 column
 * @method     ChildSalesOrderEditQuery groupByShipcity() Group by the shipcity column
 * @method     ChildSalesOrderEditQuery groupByShipstate() Group by the shipstate column
 * @method     ChildSalesOrderEditQuery groupByShipzip() Group by the shipzip column
 * @method     ChildSalesOrderEditQuery groupByShipcountry() Group by the shipcountry column
 * @method     ChildSalesOrderEditQuery groupByContact() Group by the contact column
 * @method     ChildSalesOrderEditQuery groupByPhintl() Group by the phintl column
 * @method     ChildSalesOrderEditQuery groupByPhone() Group by the phone column
 * @method     ChildSalesOrderEditQuery groupByExtension() Group by the extension column
 * @method     ChildSalesOrderEditQuery groupByFaxnbr() Group by the faxnbr column
 * @method     ChildSalesOrderEditQuery groupByEmail() Group by the email column
 * @method     ChildSalesOrderEditQuery groupByReleasenbr() Group by the releasenbr column
 * @method     ChildSalesOrderEditQuery groupByShipviacd() Group by the shipviacd column
 * @method     ChildSalesOrderEditQuery groupByShipviadesc() Group by the shipviadesc column
 * @method     ChildSalesOrderEditQuery groupByPricecode() Group by the pricecode column
 * @method     ChildSalesOrderEditQuery groupByPricecodedesc() Group by the pricecodedesc column
 * @method     ChildSalesOrderEditQuery groupByPricedisp() Group by the pricedisp column
 * @method     ChildSalesOrderEditQuery groupByTaxcode() Group by the taxcode column
 * @method     ChildSalesOrderEditQuery groupByTaxcodedesc() Group by the taxcodedesc column
 * @method     ChildSalesOrderEditQuery groupByTaxcodedisp() Group by the taxcodedisp column
 * @method     ChildSalesOrderEditQuery groupByTermcode() Group by the termcode column
 * @method     ChildSalesOrderEditQuery groupByTermtype() Group by the termtype column
 * @method     ChildSalesOrderEditQuery groupByTermcodedesc() Group by the termcodedesc column
 * @method     ChildSalesOrderEditQuery groupByRqstdate() Group by the rqstdate column
 * @method     ChildSalesOrderEditQuery groupByShipcom() Group by the shipcom column
 * @method     ChildSalesOrderEditQuery groupBySp1() Group by the sp1 column
 * @method     ChildSalesOrderEditQuery groupBySp1name() Group by the sp1name column
 * @method     ChildSalesOrderEditQuery groupBySp2() Group by the sp2 column
 * @method     ChildSalesOrderEditQuery groupBySp2name() Group by the sp2name column
 * @method     ChildSalesOrderEditQuery groupBySp2disp() Group by the sp2disp column
 * @method     ChildSalesOrderEditQuery groupBySp3() Group by the sp3 column
 * @method     ChildSalesOrderEditQuery groupBySp3name() Group by the sp3name column
 * @method     ChildSalesOrderEditQuery groupBySp3disp() Group by the sp3disp column
 * @method     ChildSalesOrderEditQuery groupByFob() Group by the fob column
 * @method     ChildSalesOrderEditQuery groupByDeliverydesc() Group by the deliverydesc column
 * @method     ChildSalesOrderEditQuery groupByWhse() Group by the whse column
 * @method     ChildSalesOrderEditQuery groupByCardnumber() Group by the cardnumber column
 * @method     ChildSalesOrderEditQuery groupByCardexpire() Group by the cardexpire column
 * @method     ChildSalesOrderEditQuery groupByCardcode() Group by the cardcode column
 * @method     ChildSalesOrderEditQuery groupByCardapproval() Group by the cardapproval column
 * @method     ChildSalesOrderEditQuery groupByTotalcost() Group by the totalcost column
 * @method     ChildSalesOrderEditQuery groupByTotaldiscount() Group by the totaldiscount column
 * @method     ChildSalesOrderEditQuery groupByPaymenttype() Group by the paymenttype column
 * @method     ChildSalesOrderEditQuery groupBySrcdatefrom() Group by the srcdatefrom column
 * @method     ChildSalesOrderEditQuery groupBySrcdatethru() Group by the srcdatethru column
 * @method     ChildSalesOrderEditQuery groupByBillname() Group by the billname column
 * @method     ChildSalesOrderEditQuery groupByBilladdress() Group by the billaddress column
 * @method     ChildSalesOrderEditQuery groupByBilladdress2() Group by the billaddress2 column
 * @method     ChildSalesOrderEditQuery groupByBilladdress3() Group by the billaddress3 column
 * @method     ChildSalesOrderEditQuery groupByBillcountry() Group by the billcountry column
 * @method     ChildSalesOrderEditQuery groupByBillcity() Group by the billcity column
 * @method     ChildSalesOrderEditQuery groupByBillstate() Group by the billstate column
 * @method     ChildSalesOrderEditQuery groupByBillzip() Group by the billzip column
 * @method     ChildSalesOrderEditQuery groupByPrntfmt() Group by the prntfmt column
 * @method     ChildSalesOrderEditQuery groupByPrntfmtdisp() Group by the prntfmtdisp column
 * @method     ChildSalesOrderEditQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesOrderEditQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesOrderEditQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesOrderEditQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesOrderEditQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesOrderEditQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesOrderEditQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesOrderEdit findOne(ConnectionInterface $con = null) Return the first ChildSalesOrderEdit matching the query
 * @method     ChildSalesOrderEdit findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesOrderEdit matching the query, or a new ChildSalesOrderEdit object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrderEdit findOneBySessionid(string $sessionid) Return the first ChildSalesOrderEdit filtered by the sessionid column
 * @method     ChildSalesOrderEdit findOneByRecno(int $recno) Return the first ChildSalesOrderEdit filtered by the recno column
 * @method     ChildSalesOrderEdit findOneByDate(int $date) Return the first ChildSalesOrderEdit filtered by the date column
 * @method     ChildSalesOrderEdit findOneByTime(int $time) Return the first ChildSalesOrderEdit filtered by the time column
 * @method     ChildSalesOrderEdit findOneByType(string $type) Return the first ChildSalesOrderEdit filtered by the type column
 * @method     ChildSalesOrderEdit findOneByCustid(string $custid) Return the first ChildSalesOrderEdit filtered by the custid column
 * @method     ChildSalesOrderEdit findOneByShiptoid(string $shiptoid) Return the first ChildSalesOrderEdit filtered by the shiptoid column
 * @method     ChildSalesOrderEdit findOneByCustname(string $custname) Return the first ChildSalesOrderEdit filtered by the custname column
 * @method     ChildSalesOrderEdit findOneByOrderno(string $orderno) Return the first ChildSalesOrderEdit filtered by the orderno column
 * @method     ChildSalesOrderEdit findOneByCustpo(string $custpo) Return the first ChildSalesOrderEdit filtered by the custpo column
 * @method     ChildSalesOrderEdit findOneByCustref(string $custref) Return the first ChildSalesOrderEdit filtered by the custref column
 * @method     ChildSalesOrderEdit findOneByStatus(string $status) Return the first ChildSalesOrderEdit filtered by the status column
 * @method     ChildSalesOrderEdit findOneByOrderdate(string $orderdate) Return the first ChildSalesOrderEdit filtered by the orderdate column
 * @method     ChildSalesOrderEdit findOneByCareof(string $careof) Return the first ChildSalesOrderEdit filtered by the careof column
 * @method     ChildSalesOrderEdit findOneByQuotdate(string $quotdate) Return the first ChildSalesOrderEdit filtered by the quotdate column
 * @method     ChildSalesOrderEdit findOneByInvdate(string $invdate) Return the first ChildSalesOrderEdit filtered by the invdate column
 * @method     ChildSalesOrderEdit findOneByShipdate(string $shipdate) Return the first ChildSalesOrderEdit filtered by the shipdate column
 * @method     ChildSalesOrderEdit findOneByRevdate(string $revdate) Return the first ChildSalesOrderEdit filtered by the revdate column
 * @method     ChildSalesOrderEdit findOneByExpdate(string $expdate) Return the first ChildSalesOrderEdit filtered by the expdate column
 * @method     ChildSalesOrderEdit findOneByHasdocuments(string $hasdocuments) Return the first ChildSalesOrderEdit filtered by the hasdocuments column
 * @method     ChildSalesOrderEdit findOneByHastracking(string $hastracking) Return the first ChildSalesOrderEdit filtered by the hastracking column
 * @method     ChildSalesOrderEdit findOneBySubtotal(string $subtotal) Return the first ChildSalesOrderEdit filtered by the subtotal column
 * @method     ChildSalesOrderEdit findOneBySalestax(string $salestax) Return the first ChildSalesOrderEdit filtered by the salestax column
 * @method     ChildSalesOrderEdit findOneByFreight(string $freight) Return the first ChildSalesOrderEdit filtered by the freight column
 * @method     ChildSalesOrderEdit findOneByMisccost(string $misccost) Return the first ChildSalesOrderEdit filtered by the misccost column
 * @method     ChildSalesOrderEdit findOneByOrdertotal(string $ordertotal) Return the first ChildSalesOrderEdit filtered by the ordertotal column
 * @method     ChildSalesOrderEdit findOneByHasnotes(string $hasnotes) Return the first ChildSalesOrderEdit filtered by the hasnotes column
 * @method     ChildSalesOrderEdit findOneByEditord(string $editord) Return the first ChildSalesOrderEdit filtered by the editord column
 * @method     ChildSalesOrderEdit findOneByError(string $error) Return the first ChildSalesOrderEdit filtered by the error column
 * @method     ChildSalesOrderEdit findOneByErrormsg(string $errormsg) Return the first ChildSalesOrderEdit filtered by the errormsg column
 * @method     ChildSalesOrderEdit findOneBySconame(string $sconame) Return the first ChildSalesOrderEdit filtered by the sconame column
 * @method     ChildSalesOrderEdit findOneByShipname(string $shipname) Return the first ChildSalesOrderEdit filtered by the shipname column
 * @method     ChildSalesOrderEdit findOneByShipaddress(string $shipaddress) Return the first ChildSalesOrderEdit filtered by the shipaddress column
 * @method     ChildSalesOrderEdit findOneByShipaddress2(string $shipaddress2) Return the first ChildSalesOrderEdit filtered by the shipaddress2 column
 * @method     ChildSalesOrderEdit findOneByShipcity(string $shipcity) Return the first ChildSalesOrderEdit filtered by the shipcity column
 * @method     ChildSalesOrderEdit findOneByShipstate(string $shipstate) Return the first ChildSalesOrderEdit filtered by the shipstate column
 * @method     ChildSalesOrderEdit findOneByShipzip(string $shipzip) Return the first ChildSalesOrderEdit filtered by the shipzip column
 * @method     ChildSalesOrderEdit findOneByShipcountry(string $shipcountry) Return the first ChildSalesOrderEdit filtered by the shipcountry column
 * @method     ChildSalesOrderEdit findOneByContact(string $contact) Return the first ChildSalesOrderEdit filtered by the contact column
 * @method     ChildSalesOrderEdit findOneByPhintl(string $phintl) Return the first ChildSalesOrderEdit filtered by the phintl column
 * @method     ChildSalesOrderEdit findOneByPhone(string $phone) Return the first ChildSalesOrderEdit filtered by the phone column
 * @method     ChildSalesOrderEdit findOneByExtension(string $extension) Return the first ChildSalesOrderEdit filtered by the extension column
 * @method     ChildSalesOrderEdit findOneByFaxnbr(string $faxnbr) Return the first ChildSalesOrderEdit filtered by the faxnbr column
 * @method     ChildSalesOrderEdit findOneByEmail(string $email) Return the first ChildSalesOrderEdit filtered by the email column
 * @method     ChildSalesOrderEdit findOneByReleasenbr(string $releasenbr) Return the first ChildSalesOrderEdit filtered by the releasenbr column
 * @method     ChildSalesOrderEdit findOneByShipviacd(string $shipviacd) Return the first ChildSalesOrderEdit filtered by the shipviacd column
 * @method     ChildSalesOrderEdit findOneByShipviadesc(string $shipviadesc) Return the first ChildSalesOrderEdit filtered by the shipviadesc column
 * @method     ChildSalesOrderEdit findOneByPricecode(string $pricecode) Return the first ChildSalesOrderEdit filtered by the pricecode column
 * @method     ChildSalesOrderEdit findOneByPricecodedesc(string $pricecodedesc) Return the first ChildSalesOrderEdit filtered by the pricecodedesc column
 * @method     ChildSalesOrderEdit findOneByPricedisp(string $pricedisp) Return the first ChildSalesOrderEdit filtered by the pricedisp column
 * @method     ChildSalesOrderEdit findOneByTaxcode(string $taxcode) Return the first ChildSalesOrderEdit filtered by the taxcode column
 * @method     ChildSalesOrderEdit findOneByTaxcodedesc(string $taxcodedesc) Return the first ChildSalesOrderEdit filtered by the taxcodedesc column
 * @method     ChildSalesOrderEdit findOneByTaxcodedisp(string $taxcodedisp) Return the first ChildSalesOrderEdit filtered by the taxcodedisp column
 * @method     ChildSalesOrderEdit findOneByTermcode(string $termcode) Return the first ChildSalesOrderEdit filtered by the termcode column
 * @method     ChildSalesOrderEdit findOneByTermtype(string $termtype) Return the first ChildSalesOrderEdit filtered by the termtype column
 * @method     ChildSalesOrderEdit findOneByTermcodedesc(string $termcodedesc) Return the first ChildSalesOrderEdit filtered by the termcodedesc column
 * @method     ChildSalesOrderEdit findOneByRqstdate(string $rqstdate) Return the first ChildSalesOrderEdit filtered by the rqstdate column
 * @method     ChildSalesOrderEdit findOneByShipcom(string $shipcom) Return the first ChildSalesOrderEdit filtered by the shipcom column
 * @method     ChildSalesOrderEdit findOneBySp1(string $sp1) Return the first ChildSalesOrderEdit filtered by the sp1 column
 * @method     ChildSalesOrderEdit findOneBySp1name(string $sp1name) Return the first ChildSalesOrderEdit filtered by the sp1name column
 * @method     ChildSalesOrderEdit findOneBySp2(string $sp2) Return the first ChildSalesOrderEdit filtered by the sp2 column
 * @method     ChildSalesOrderEdit findOneBySp2name(string $sp2name) Return the first ChildSalesOrderEdit filtered by the sp2name column
 * @method     ChildSalesOrderEdit findOneBySp2disp(string $sp2disp) Return the first ChildSalesOrderEdit filtered by the sp2disp column
 * @method     ChildSalesOrderEdit findOneBySp3(string $sp3) Return the first ChildSalesOrderEdit filtered by the sp3 column
 * @method     ChildSalesOrderEdit findOneBySp3name(string $sp3name) Return the first ChildSalesOrderEdit filtered by the sp3name column
 * @method     ChildSalesOrderEdit findOneBySp3disp(string $sp3disp) Return the first ChildSalesOrderEdit filtered by the sp3disp column
 * @method     ChildSalesOrderEdit findOneByFob(string $fob) Return the first ChildSalesOrderEdit filtered by the fob column
 * @method     ChildSalesOrderEdit findOneByDeliverydesc(string $deliverydesc) Return the first ChildSalesOrderEdit filtered by the deliverydesc column
 * @method     ChildSalesOrderEdit findOneByWhse(string $whse) Return the first ChildSalesOrderEdit filtered by the whse column
 * @method     ChildSalesOrderEdit findOneByCardnumber(string $cardnumber) Return the first ChildSalesOrderEdit filtered by the cardnumber column
 * @method     ChildSalesOrderEdit findOneByCardexpire(string $cardexpire) Return the first ChildSalesOrderEdit filtered by the cardexpire column
 * @method     ChildSalesOrderEdit findOneByCardcode(string $cardcode) Return the first ChildSalesOrderEdit filtered by the cardcode column
 * @method     ChildSalesOrderEdit findOneByCardapproval(string $cardapproval) Return the first ChildSalesOrderEdit filtered by the cardapproval column
 * @method     ChildSalesOrderEdit findOneByTotalcost(string $totalcost) Return the first ChildSalesOrderEdit filtered by the totalcost column
 * @method     ChildSalesOrderEdit findOneByTotaldiscount(string $totaldiscount) Return the first ChildSalesOrderEdit filtered by the totaldiscount column
 * @method     ChildSalesOrderEdit findOneByPaymenttype(string $paymenttype) Return the first ChildSalesOrderEdit filtered by the paymenttype column
 * @method     ChildSalesOrderEdit findOneBySrcdatefrom(string $srcdatefrom) Return the first ChildSalesOrderEdit filtered by the srcdatefrom column
 * @method     ChildSalesOrderEdit findOneBySrcdatethru(string $srcdatethru) Return the first ChildSalesOrderEdit filtered by the srcdatethru column
 * @method     ChildSalesOrderEdit findOneByBillname(string $billname) Return the first ChildSalesOrderEdit filtered by the billname column
 * @method     ChildSalesOrderEdit findOneByBilladdress(string $billaddress) Return the first ChildSalesOrderEdit filtered by the billaddress column
 * @method     ChildSalesOrderEdit findOneByBilladdress2(string $billaddress2) Return the first ChildSalesOrderEdit filtered by the billaddress2 column
 * @method     ChildSalesOrderEdit findOneByBilladdress3(string $billaddress3) Return the first ChildSalesOrderEdit filtered by the billaddress3 column
 * @method     ChildSalesOrderEdit findOneByBillcountry(string $billcountry) Return the first ChildSalesOrderEdit filtered by the billcountry column
 * @method     ChildSalesOrderEdit findOneByBillcity(string $billcity) Return the first ChildSalesOrderEdit filtered by the billcity column
 * @method     ChildSalesOrderEdit findOneByBillstate(string $billstate) Return the first ChildSalesOrderEdit filtered by the billstate column
 * @method     ChildSalesOrderEdit findOneByBillzip(string $billzip) Return the first ChildSalesOrderEdit filtered by the billzip column
 * @method     ChildSalesOrderEdit findOneByPrntfmt(string $prntfmt) Return the first ChildSalesOrderEdit filtered by the prntfmt column
 * @method     ChildSalesOrderEdit findOneByPrntfmtdisp(string $prntfmtdisp) Return the first ChildSalesOrderEdit filtered by the prntfmtdisp column
 * @method     ChildSalesOrderEdit findOneByDummy(string $dummy) Return the first ChildSalesOrderEdit filtered by the dummy column *

 * @method     ChildSalesOrderEdit requirePk($key, ConnectionInterface $con = null) Return the ChildSalesOrderEdit by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOne(ConnectionInterface $con = null) Return the first ChildSalesOrderEdit matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderEdit requireOneBySessionid(string $sessionid) Return the first ChildSalesOrderEdit filtered by the sessionid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByRecno(int $recno) Return the first ChildSalesOrderEdit filtered by the recno column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByDate(int $date) Return the first ChildSalesOrderEdit filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTime(int $time) Return the first ChildSalesOrderEdit filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByType(string $type) Return the first ChildSalesOrderEdit filtered by the type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCustid(string $custid) Return the first ChildSalesOrderEdit filtered by the custid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShiptoid(string $shiptoid) Return the first ChildSalesOrderEdit filtered by the shiptoid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCustname(string $custname) Return the first ChildSalesOrderEdit filtered by the custname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByOrderno(string $orderno) Return the first ChildSalesOrderEdit filtered by the orderno column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCustpo(string $custpo) Return the first ChildSalesOrderEdit filtered by the custpo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCustref(string $custref) Return the first ChildSalesOrderEdit filtered by the custref column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByStatus(string $status) Return the first ChildSalesOrderEdit filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByOrderdate(string $orderdate) Return the first ChildSalesOrderEdit filtered by the orderdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCareof(string $careof) Return the first ChildSalesOrderEdit filtered by the careof column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByQuotdate(string $quotdate) Return the first ChildSalesOrderEdit filtered by the quotdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByInvdate(string $invdate) Return the first ChildSalesOrderEdit filtered by the invdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipdate(string $shipdate) Return the first ChildSalesOrderEdit filtered by the shipdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByRevdate(string $revdate) Return the first ChildSalesOrderEdit filtered by the revdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByExpdate(string $expdate) Return the first ChildSalesOrderEdit filtered by the expdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByHasdocuments(string $hasdocuments) Return the first ChildSalesOrderEdit filtered by the hasdocuments column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByHastracking(string $hastracking) Return the first ChildSalesOrderEdit filtered by the hastracking column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySubtotal(string $subtotal) Return the first ChildSalesOrderEdit filtered by the subtotal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySalestax(string $salestax) Return the first ChildSalesOrderEdit filtered by the salestax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByFreight(string $freight) Return the first ChildSalesOrderEdit filtered by the freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByMisccost(string $misccost) Return the first ChildSalesOrderEdit filtered by the misccost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByOrdertotal(string $ordertotal) Return the first ChildSalesOrderEdit filtered by the ordertotal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByHasnotes(string $hasnotes) Return the first ChildSalesOrderEdit filtered by the hasnotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByEditord(string $editord) Return the first ChildSalesOrderEdit filtered by the editord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByError(string $error) Return the first ChildSalesOrderEdit filtered by the error column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByErrormsg(string $errormsg) Return the first ChildSalesOrderEdit filtered by the errormsg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySconame(string $sconame) Return the first ChildSalesOrderEdit filtered by the sconame column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipname(string $shipname) Return the first ChildSalesOrderEdit filtered by the shipname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipaddress(string $shipaddress) Return the first ChildSalesOrderEdit filtered by the shipaddress column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipaddress2(string $shipaddress2) Return the first ChildSalesOrderEdit filtered by the shipaddress2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipcity(string $shipcity) Return the first ChildSalesOrderEdit filtered by the shipcity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipstate(string $shipstate) Return the first ChildSalesOrderEdit filtered by the shipstate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipzip(string $shipzip) Return the first ChildSalesOrderEdit filtered by the shipzip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipcountry(string $shipcountry) Return the first ChildSalesOrderEdit filtered by the shipcountry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByContact(string $contact) Return the first ChildSalesOrderEdit filtered by the contact column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByPhintl(string $phintl) Return the first ChildSalesOrderEdit filtered by the phintl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByPhone(string $phone) Return the first ChildSalesOrderEdit filtered by the phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByExtension(string $extension) Return the first ChildSalesOrderEdit filtered by the extension column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByFaxnbr(string $faxnbr) Return the first ChildSalesOrderEdit filtered by the faxnbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByEmail(string $email) Return the first ChildSalesOrderEdit filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByReleasenbr(string $releasenbr) Return the first ChildSalesOrderEdit filtered by the releasenbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipviacd(string $shipviacd) Return the first ChildSalesOrderEdit filtered by the shipviacd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipviadesc(string $shipviadesc) Return the first ChildSalesOrderEdit filtered by the shipviadesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByPricecode(string $pricecode) Return the first ChildSalesOrderEdit filtered by the pricecode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByPricecodedesc(string $pricecodedesc) Return the first ChildSalesOrderEdit filtered by the pricecodedesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByPricedisp(string $pricedisp) Return the first ChildSalesOrderEdit filtered by the pricedisp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTaxcode(string $taxcode) Return the first ChildSalesOrderEdit filtered by the taxcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTaxcodedesc(string $taxcodedesc) Return the first ChildSalesOrderEdit filtered by the taxcodedesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTaxcodedisp(string $taxcodedisp) Return the first ChildSalesOrderEdit filtered by the taxcodedisp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTermcode(string $termcode) Return the first ChildSalesOrderEdit filtered by the termcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTermtype(string $termtype) Return the first ChildSalesOrderEdit filtered by the termtype column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTermcodedesc(string $termcodedesc) Return the first ChildSalesOrderEdit filtered by the termcodedesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByRqstdate(string $rqstdate) Return the first ChildSalesOrderEdit filtered by the rqstdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByShipcom(string $shipcom) Return the first ChildSalesOrderEdit filtered by the shipcom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySp1(string $sp1) Return the first ChildSalesOrderEdit filtered by the sp1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySp1name(string $sp1name) Return the first ChildSalesOrderEdit filtered by the sp1name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySp2(string $sp2) Return the first ChildSalesOrderEdit filtered by the sp2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySp2name(string $sp2name) Return the first ChildSalesOrderEdit filtered by the sp2name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySp2disp(string $sp2disp) Return the first ChildSalesOrderEdit filtered by the sp2disp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySp3(string $sp3) Return the first ChildSalesOrderEdit filtered by the sp3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySp3name(string $sp3name) Return the first ChildSalesOrderEdit filtered by the sp3name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySp3disp(string $sp3disp) Return the first ChildSalesOrderEdit filtered by the sp3disp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByFob(string $fob) Return the first ChildSalesOrderEdit filtered by the fob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByDeliverydesc(string $deliverydesc) Return the first ChildSalesOrderEdit filtered by the deliverydesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByWhse(string $whse) Return the first ChildSalesOrderEdit filtered by the whse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCardnumber(string $cardnumber) Return the first ChildSalesOrderEdit filtered by the cardnumber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCardexpire(string $cardexpire) Return the first ChildSalesOrderEdit filtered by the cardexpire column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCardcode(string $cardcode) Return the first ChildSalesOrderEdit filtered by the cardcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByCardapproval(string $cardapproval) Return the first ChildSalesOrderEdit filtered by the cardapproval column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTotalcost(string $totalcost) Return the first ChildSalesOrderEdit filtered by the totalcost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByTotaldiscount(string $totaldiscount) Return the first ChildSalesOrderEdit filtered by the totaldiscount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByPaymenttype(string $paymenttype) Return the first ChildSalesOrderEdit filtered by the paymenttype column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySrcdatefrom(string $srcdatefrom) Return the first ChildSalesOrderEdit filtered by the srcdatefrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneBySrcdatethru(string $srcdatethru) Return the first ChildSalesOrderEdit filtered by the srcdatethru column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByBillname(string $billname) Return the first ChildSalesOrderEdit filtered by the billname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByBilladdress(string $billaddress) Return the first ChildSalesOrderEdit filtered by the billaddress column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByBilladdress2(string $billaddress2) Return the first ChildSalesOrderEdit filtered by the billaddress2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByBilladdress3(string $billaddress3) Return the first ChildSalesOrderEdit filtered by the billaddress3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByBillcountry(string $billcountry) Return the first ChildSalesOrderEdit filtered by the billcountry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByBillcity(string $billcity) Return the first ChildSalesOrderEdit filtered by the billcity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByBillstate(string $billstate) Return the first ChildSalesOrderEdit filtered by the billstate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByBillzip(string $billzip) Return the first ChildSalesOrderEdit filtered by the billzip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByPrntfmt(string $prntfmt) Return the first ChildSalesOrderEdit filtered by the prntfmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByPrntfmtdisp(string $prntfmtdisp) Return the first ChildSalesOrderEdit filtered by the prntfmtdisp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderEdit requireOneByDummy(string $dummy) Return the first ChildSalesOrderEdit filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderEdit[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesOrderEdit objects based on current ModelCriteria
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySessionid(string $sessionid) Return ChildSalesOrderEdit objects filtered by the sessionid column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByRecno(int $recno) Return ChildSalesOrderEdit objects filtered by the recno column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByDate(int $date) Return ChildSalesOrderEdit objects filtered by the date column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTime(int $time) Return ChildSalesOrderEdit objects filtered by the time column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByType(string $type) Return ChildSalesOrderEdit objects filtered by the type column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCustid(string $custid) Return ChildSalesOrderEdit objects filtered by the custid column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShiptoid(string $shiptoid) Return ChildSalesOrderEdit objects filtered by the shiptoid column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCustname(string $custname) Return ChildSalesOrderEdit objects filtered by the custname column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByOrderno(string $orderno) Return ChildSalesOrderEdit objects filtered by the orderno column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCustpo(string $custpo) Return ChildSalesOrderEdit objects filtered by the custpo column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCustref(string $custref) Return ChildSalesOrderEdit objects filtered by the custref column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByStatus(string $status) Return ChildSalesOrderEdit objects filtered by the status column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByOrderdate(string $orderdate) Return ChildSalesOrderEdit objects filtered by the orderdate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCareof(string $careof) Return ChildSalesOrderEdit objects filtered by the careof column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByQuotdate(string $quotdate) Return ChildSalesOrderEdit objects filtered by the quotdate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByInvdate(string $invdate) Return ChildSalesOrderEdit objects filtered by the invdate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipdate(string $shipdate) Return ChildSalesOrderEdit objects filtered by the shipdate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByRevdate(string $revdate) Return ChildSalesOrderEdit objects filtered by the revdate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByExpdate(string $expdate) Return ChildSalesOrderEdit objects filtered by the expdate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByHasdocuments(string $hasdocuments) Return ChildSalesOrderEdit objects filtered by the hasdocuments column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByHastracking(string $hastracking) Return ChildSalesOrderEdit objects filtered by the hastracking column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySubtotal(string $subtotal) Return ChildSalesOrderEdit objects filtered by the subtotal column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySalestax(string $salestax) Return ChildSalesOrderEdit objects filtered by the salestax column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByFreight(string $freight) Return ChildSalesOrderEdit objects filtered by the freight column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByMisccost(string $misccost) Return ChildSalesOrderEdit objects filtered by the misccost column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByOrdertotal(string $ordertotal) Return ChildSalesOrderEdit objects filtered by the ordertotal column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByHasnotes(string $hasnotes) Return ChildSalesOrderEdit objects filtered by the hasnotes column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByEditord(string $editord) Return ChildSalesOrderEdit objects filtered by the editord column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByError(string $error) Return ChildSalesOrderEdit objects filtered by the error column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByErrormsg(string $errormsg) Return ChildSalesOrderEdit objects filtered by the errormsg column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySconame(string $sconame) Return ChildSalesOrderEdit objects filtered by the sconame column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipname(string $shipname) Return ChildSalesOrderEdit objects filtered by the shipname column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipaddress(string $shipaddress) Return ChildSalesOrderEdit objects filtered by the shipaddress column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipaddress2(string $shipaddress2) Return ChildSalesOrderEdit objects filtered by the shipaddress2 column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipcity(string $shipcity) Return ChildSalesOrderEdit objects filtered by the shipcity column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipstate(string $shipstate) Return ChildSalesOrderEdit objects filtered by the shipstate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipzip(string $shipzip) Return ChildSalesOrderEdit objects filtered by the shipzip column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipcountry(string $shipcountry) Return ChildSalesOrderEdit objects filtered by the shipcountry column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByContact(string $contact) Return ChildSalesOrderEdit objects filtered by the contact column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByPhintl(string $phintl) Return ChildSalesOrderEdit objects filtered by the phintl column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByPhone(string $phone) Return ChildSalesOrderEdit objects filtered by the phone column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByExtension(string $extension) Return ChildSalesOrderEdit objects filtered by the extension column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByFaxnbr(string $faxnbr) Return ChildSalesOrderEdit objects filtered by the faxnbr column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByEmail(string $email) Return ChildSalesOrderEdit objects filtered by the email column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByReleasenbr(string $releasenbr) Return ChildSalesOrderEdit objects filtered by the releasenbr column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipviacd(string $shipviacd) Return ChildSalesOrderEdit objects filtered by the shipviacd column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipviadesc(string $shipviadesc) Return ChildSalesOrderEdit objects filtered by the shipviadesc column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByPricecode(string $pricecode) Return ChildSalesOrderEdit objects filtered by the pricecode column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByPricecodedesc(string $pricecodedesc) Return ChildSalesOrderEdit objects filtered by the pricecodedesc column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByPricedisp(string $pricedisp) Return ChildSalesOrderEdit objects filtered by the pricedisp column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTaxcode(string $taxcode) Return ChildSalesOrderEdit objects filtered by the taxcode column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTaxcodedesc(string $taxcodedesc) Return ChildSalesOrderEdit objects filtered by the taxcodedesc column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTaxcodedisp(string $taxcodedisp) Return ChildSalesOrderEdit objects filtered by the taxcodedisp column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTermcode(string $termcode) Return ChildSalesOrderEdit objects filtered by the termcode column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTermtype(string $termtype) Return ChildSalesOrderEdit objects filtered by the termtype column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTermcodedesc(string $termcodedesc) Return ChildSalesOrderEdit objects filtered by the termcodedesc column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByRqstdate(string $rqstdate) Return ChildSalesOrderEdit objects filtered by the rqstdate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByShipcom(string $shipcom) Return ChildSalesOrderEdit objects filtered by the shipcom column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySp1(string $sp1) Return ChildSalesOrderEdit objects filtered by the sp1 column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySp1name(string $sp1name) Return ChildSalesOrderEdit objects filtered by the sp1name column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySp2(string $sp2) Return ChildSalesOrderEdit objects filtered by the sp2 column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySp2name(string $sp2name) Return ChildSalesOrderEdit objects filtered by the sp2name column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySp2disp(string $sp2disp) Return ChildSalesOrderEdit objects filtered by the sp2disp column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySp3(string $sp3) Return ChildSalesOrderEdit objects filtered by the sp3 column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySp3name(string $sp3name) Return ChildSalesOrderEdit objects filtered by the sp3name column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySp3disp(string $sp3disp) Return ChildSalesOrderEdit objects filtered by the sp3disp column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByFob(string $fob) Return ChildSalesOrderEdit objects filtered by the fob column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByDeliverydesc(string $deliverydesc) Return ChildSalesOrderEdit objects filtered by the deliverydesc column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByWhse(string $whse) Return ChildSalesOrderEdit objects filtered by the whse column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCardnumber(string $cardnumber) Return ChildSalesOrderEdit objects filtered by the cardnumber column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCardexpire(string $cardexpire) Return ChildSalesOrderEdit objects filtered by the cardexpire column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCardcode(string $cardcode) Return ChildSalesOrderEdit objects filtered by the cardcode column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByCardapproval(string $cardapproval) Return ChildSalesOrderEdit objects filtered by the cardapproval column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTotalcost(string $totalcost) Return ChildSalesOrderEdit objects filtered by the totalcost column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByTotaldiscount(string $totaldiscount) Return ChildSalesOrderEdit objects filtered by the totaldiscount column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByPaymenttype(string $paymenttype) Return ChildSalesOrderEdit objects filtered by the paymenttype column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySrcdatefrom(string $srcdatefrom) Return ChildSalesOrderEdit objects filtered by the srcdatefrom column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findBySrcdatethru(string $srcdatethru) Return ChildSalesOrderEdit objects filtered by the srcdatethru column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByBillname(string $billname) Return ChildSalesOrderEdit objects filtered by the billname column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByBilladdress(string $billaddress) Return ChildSalesOrderEdit objects filtered by the billaddress column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByBilladdress2(string $billaddress2) Return ChildSalesOrderEdit objects filtered by the billaddress2 column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByBilladdress3(string $billaddress3) Return ChildSalesOrderEdit objects filtered by the billaddress3 column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByBillcountry(string $billcountry) Return ChildSalesOrderEdit objects filtered by the billcountry column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByBillcity(string $billcity) Return ChildSalesOrderEdit objects filtered by the billcity column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByBillstate(string $billstate) Return ChildSalesOrderEdit objects filtered by the billstate column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByBillzip(string $billzip) Return ChildSalesOrderEdit objects filtered by the billzip column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByPrntfmt(string $prntfmt) Return ChildSalesOrderEdit objects filtered by the prntfmt column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByPrntfmtdisp(string $prntfmtdisp) Return ChildSalesOrderEdit objects filtered by the prntfmtdisp column
 * @method     ChildSalesOrderEdit[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesOrderEdit objects filtered by the dummy column
 * @method     ChildSalesOrderEdit[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesOrderEditQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderEditQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrderEdit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderEditQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderEditQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalesOrderEditQuery) {
            return $criteria;
        }
        $query = new ChildSalesOrderEditQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$sessionid, $recno, $orderno] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesOrderEdit|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderEditTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesOrderEditTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildSalesOrderEdit A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT sessionid, recno, date, time, type, custid, shiptoid, custname, orderno, custpo, custref, status, orderdate, careof, quotdate, invdate, shipdate, revdate, expdate, hasdocuments, hastracking, subtotal, salestax, freight, misccost, ordertotal, hasnotes, editord, error, errormsg, sconame, shipname, shipaddress, shipaddress2, shipcity, shipstate, shipzip, shipcountry, contact, phintl, phone, extension, faxnbr, email, releasenbr, shipviacd, shipviadesc, pricecode, pricecodedesc, pricedisp, taxcode, taxcodedesc, taxcodedisp, termcode, termtype, termcodedesc, rqstdate, shipcom, sp1, sp1name, sp2, sp2name, sp2disp, sp3, sp3name, sp3disp, fob, deliverydesc, whse, cardnumber, cardexpire, cardcode, cardapproval, totalcost, totaldiscount, paymenttype, srcdatefrom, srcdatethru, billname, billaddress, billaddress2, billaddress3, billcountry, billcity, billstate, billzip, prntfmt, prntfmtdisp, dummy FROM ordrhed WHERE sessionid = :p0 AND recno = :p1 AND orderno = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSalesOrderEdit $obj */
            $obj = new ChildSalesOrderEdit();
            $obj->hydrate($row);
            SalesOrderEditTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildSalesOrderEdit|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SalesOrderEditTableMap::COL_SESSIONID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderEditTableMap::COL_RECNO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderEditTableMap::COL_ORDERNO, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SalesOrderEditTableMap::COL_SESSIONID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SalesOrderEditTableMap::COL_RECNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SalesOrderEditTableMap::COL_ORDERNO, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySessionid($sessionid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SESSIONID, $sessionid, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByRecno($recno = null, $comparison = null)
    {
        if (is_array($recno)) {
            $useMinMax = false;
            if (isset($recno['min'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_RECNO, $recno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recno['max'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_RECNO, $recno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_RECNO, $recno, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TIME, $time, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%', Criteria::LIKE); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TYPE, $type, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCustid($custid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CUSTID, $custid, $comparison);
    }

    /**
     * Filter the query on the shiptoid column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoid('fooValue');   // WHERE shiptoid = 'fooValue'
     * $query->filterByShiptoid('%fooValue%', Criteria::LIKE); // WHERE shiptoid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShiptoid($shiptoid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPTOID, $shiptoid, $comparison);
    }

    /**
     * Filter the query on the custname column
     *
     * Example usage:
     * <code>
     * $query->filterByCustname('fooValue');   // WHERE custname = 'fooValue'
     * $query->filterByCustname('%fooValue%', Criteria::LIKE); // WHERE custname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $custname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCustname($custname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CUSTNAME, $custname, $comparison);
    }

    /**
     * Filter the query on the orderno column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderno('fooValue');   // WHERE orderno = 'fooValue'
     * $query->filterByOrderno('%fooValue%', Criteria::LIKE); // WHERE orderno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orderno The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByOrderno($orderno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orderno)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_ORDERNO, $orderno, $comparison);
    }

    /**
     * Filter the query on the custpo column
     *
     * Example usage:
     * <code>
     * $query->filterByCustpo('fooValue');   // WHERE custpo = 'fooValue'
     * $query->filterByCustpo('%fooValue%', Criteria::LIKE); // WHERE custpo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $custpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCustpo($custpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CUSTPO, $custpo, $comparison);
    }

    /**
     * Filter the query on the custref column
     *
     * Example usage:
     * <code>
     * $query->filterByCustref('fooValue');   // WHERE custref = 'fooValue'
     * $query->filterByCustref('%fooValue%', Criteria::LIKE); // WHERE custref LIKE '%fooValue%'
     * </code>
     *
     * @param     string $custref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCustref($custref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CUSTREF, $custref, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the orderdate column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderdate('fooValue');   // WHERE orderdate = 'fooValue'
     * $query->filterByOrderdate('%fooValue%', Criteria::LIKE); // WHERE orderdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orderdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByOrderdate($orderdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orderdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_ORDERDATE, $orderdate, $comparison);
    }

    /**
     * Filter the query on the careof column
     *
     * Example usage:
     * <code>
     * $query->filterByCareof('fooValue');   // WHERE careof = 'fooValue'
     * $query->filterByCareof('%fooValue%', Criteria::LIKE); // WHERE careof LIKE '%fooValue%'
     * </code>
     *
     * @param     string $careof The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCareof($careof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($careof)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CAREOF, $careof, $comparison);
    }

    /**
     * Filter the query on the quotdate column
     *
     * Example usage:
     * <code>
     * $query->filterByQuotdate('fooValue');   // WHERE quotdate = 'fooValue'
     * $query->filterByQuotdate('%fooValue%', Criteria::LIKE); // WHERE quotdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quotdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByQuotdate($quotdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quotdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_QUOTDATE, $quotdate, $comparison);
    }

    /**
     * Filter the query on the invdate column
     *
     * Example usage:
     * <code>
     * $query->filterByInvdate('fooValue');   // WHERE invdate = 'fooValue'
     * $query->filterByInvdate('%fooValue%', Criteria::LIKE); // WHERE invdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $invdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByInvdate($invdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($invdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_INVDATE, $invdate, $comparison);
    }

    /**
     * Filter the query on the shipdate column
     *
     * Example usage:
     * <code>
     * $query->filterByShipdate('fooValue');   // WHERE shipdate = 'fooValue'
     * $query->filterByShipdate('%fooValue%', Criteria::LIKE); // WHERE shipdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipdate($shipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPDATE, $shipdate, $comparison);
    }

    /**
     * Filter the query on the revdate column
     *
     * Example usage:
     * <code>
     * $query->filterByRevdate('fooValue');   // WHERE revdate = 'fooValue'
     * $query->filterByRevdate('%fooValue%', Criteria::LIKE); // WHERE revdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $revdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByRevdate($revdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($revdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_REVDATE, $revdate, $comparison);
    }

    /**
     * Filter the query on the expdate column
     *
     * Example usage:
     * <code>
     * $query->filterByExpdate('fooValue');   // WHERE expdate = 'fooValue'
     * $query->filterByExpdate('%fooValue%', Criteria::LIKE); // WHERE expdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByExpdate($expdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_EXPDATE, $expdate, $comparison);
    }

    /**
     * Filter the query on the hasdocuments column
     *
     * Example usage:
     * <code>
     * $query->filterByHasdocuments('fooValue');   // WHERE hasdocuments = 'fooValue'
     * $query->filterByHasdocuments('%fooValue%', Criteria::LIKE); // WHERE hasdocuments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hasdocuments The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByHasdocuments($hasdocuments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasdocuments)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_HASDOCUMENTS, $hasdocuments, $comparison);
    }

    /**
     * Filter the query on the hastracking column
     *
     * Example usage:
     * <code>
     * $query->filterByHastracking('fooValue');   // WHERE hastracking = 'fooValue'
     * $query->filterByHastracking('%fooValue%', Criteria::LIKE); // WHERE hastracking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hastracking The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByHastracking($hastracking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hastracking)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_HASTRACKING, $hastracking, $comparison);
    }

    /**
     * Filter the query on the subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotal(1234); // WHERE subtotal = 1234
     * $query->filterBySubtotal(array(12, 34)); // WHERE subtotal IN (12, 34)
     * $query->filterBySubtotal(array('min' => 12)); // WHERE subtotal > 12
     * </code>
     *
     * @param     mixed $subtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySubtotal($subtotal = null, $comparison = null)
    {
        if (is_array($subtotal)) {
            $useMinMax = false;
            if (isset($subtotal['min'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_SUBTOTAL, $subtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotal['max'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_SUBTOTAL, $subtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SUBTOTAL, $subtotal, $comparison);
    }

    /**
     * Filter the query on the salestax column
     *
     * Example usage:
     * <code>
     * $query->filterBySalestax(1234); // WHERE salestax = 1234
     * $query->filterBySalestax(array(12, 34)); // WHERE salestax IN (12, 34)
     * $query->filterBySalestax(array('min' => 12)); // WHERE salestax > 12
     * </code>
     *
     * @param     mixed $salestax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySalestax($salestax = null, $comparison = null)
    {
        if (is_array($salestax)) {
            $useMinMax = false;
            if (isset($salestax['min'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_SALESTAX, $salestax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salestax['max'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_SALESTAX, $salestax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SALESTAX, $salestax, $comparison);
    }

    /**
     * Filter the query on the freight column
     *
     * Example usage:
     * <code>
     * $query->filterByFreight(1234); // WHERE freight = 1234
     * $query->filterByFreight(array(12, 34)); // WHERE freight IN (12, 34)
     * $query->filterByFreight(array('min' => 12)); // WHERE freight > 12
     * </code>
     *
     * @param     mixed $freight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByFreight($freight = null, $comparison = null)
    {
        if (is_array($freight)) {
            $useMinMax = false;
            if (isset($freight['min'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_FREIGHT, $freight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freight['max'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_FREIGHT, $freight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_FREIGHT, $freight, $comparison);
    }

    /**
     * Filter the query on the misccost column
     *
     * Example usage:
     * <code>
     * $query->filterByMisccost(1234); // WHERE misccost = 1234
     * $query->filterByMisccost(array(12, 34)); // WHERE misccost IN (12, 34)
     * $query->filterByMisccost(array('min' => 12)); // WHERE misccost > 12
     * </code>
     *
     * @param     mixed $misccost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByMisccost($misccost = null, $comparison = null)
    {
        if (is_array($misccost)) {
            $useMinMax = false;
            if (isset($misccost['min'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_MISCCOST, $misccost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($misccost['max'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_MISCCOST, $misccost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_MISCCOST, $misccost, $comparison);
    }

    /**
     * Filter the query on the ordertotal column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdertotal(1234); // WHERE ordertotal = 1234
     * $query->filterByOrdertotal(array(12, 34)); // WHERE ordertotal IN (12, 34)
     * $query->filterByOrdertotal(array('min' => 12)); // WHERE ordertotal > 12
     * </code>
     *
     * @param     mixed $ordertotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByOrdertotal($ordertotal = null, $comparison = null)
    {
        if (is_array($ordertotal)) {
            $useMinMax = false;
            if (isset($ordertotal['min'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_ORDERTOTAL, $ordertotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordertotal['max'])) {
                $this->addUsingAlias(SalesOrderEditTableMap::COL_ORDERTOTAL, $ordertotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_ORDERTOTAL, $ordertotal, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByHasnotes($hasnotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasnotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_HASNOTES, $hasnotes, $comparison);
    }

    /**
     * Filter the query on the editord column
     *
     * Example usage:
     * <code>
     * $query->filterByEditord('fooValue');   // WHERE editord = 'fooValue'
     * $query->filterByEditord('%fooValue%', Criteria::LIKE); // WHERE editord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByEditord($editord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_EDITORD, $editord, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByError($error = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($error)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_ERROR, $error, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByErrormsg($errormsg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($errormsg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_ERRORMSG, $errormsg, $comparison);
    }

    /**
     * Filter the query on the sconame column
     *
     * Example usage:
     * <code>
     * $query->filterBySconame('fooValue');   // WHERE sconame = 'fooValue'
     * $query->filterBySconame('%fooValue%', Criteria::LIKE); // WHERE sconame LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sconame The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySconame($sconame = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sconame)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SCONAME, $sconame, $comparison);
    }

    /**
     * Filter the query on the shipname column
     *
     * Example usage:
     * <code>
     * $query->filterByShipname('fooValue');   // WHERE shipname = 'fooValue'
     * $query->filterByShipname('%fooValue%', Criteria::LIKE); // WHERE shipname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipname($shipname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPNAME, $shipname, $comparison);
    }

    /**
     * Filter the query on the shipaddress column
     *
     * Example usage:
     * <code>
     * $query->filterByShipaddress('fooValue');   // WHERE shipaddress = 'fooValue'
     * $query->filterByShipaddress('%fooValue%', Criteria::LIKE); // WHERE shipaddress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipaddress The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipaddress($shipaddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipaddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPADDRESS, $shipaddress, $comparison);
    }

    /**
     * Filter the query on the shipaddress2 column
     *
     * Example usage:
     * <code>
     * $query->filterByShipaddress2('fooValue');   // WHERE shipaddress2 = 'fooValue'
     * $query->filterByShipaddress2('%fooValue%', Criteria::LIKE); // WHERE shipaddress2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipaddress2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipaddress2($shipaddress2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipaddress2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPADDRESS2, $shipaddress2, $comparison);
    }

    /**
     * Filter the query on the shipcity column
     *
     * Example usage:
     * <code>
     * $query->filterByShipcity('fooValue');   // WHERE shipcity = 'fooValue'
     * $query->filterByShipcity('%fooValue%', Criteria::LIKE); // WHERE shipcity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipcity($shipcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPCITY, $shipcity, $comparison);
    }

    /**
     * Filter the query on the shipstate column
     *
     * Example usage:
     * <code>
     * $query->filterByShipstate('fooValue');   // WHERE shipstate = 'fooValue'
     * $query->filterByShipstate('%fooValue%', Criteria::LIKE); // WHERE shipstate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipstate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipstate($shipstate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipstate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPSTATE, $shipstate, $comparison);
    }

    /**
     * Filter the query on the shipzip column
     *
     * Example usage:
     * <code>
     * $query->filterByShipzip('fooValue');   // WHERE shipzip = 'fooValue'
     * $query->filterByShipzip('%fooValue%', Criteria::LIKE); // WHERE shipzip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipzip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipzip($shipzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipzip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPZIP, $shipzip, $comparison);
    }

    /**
     * Filter the query on the shipcountry column
     *
     * Example usage:
     * <code>
     * $query->filterByShipcountry('fooValue');   // WHERE shipcountry = 'fooValue'
     * $query->filterByShipcountry('%fooValue%', Criteria::LIKE); // WHERE shipcountry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipcountry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipcountry($shipcountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcountry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPCOUNTRY, $shipcountry, $comparison);
    }

    /**
     * Filter the query on the contact column
     *
     * Example usage:
     * <code>
     * $query->filterByContact('fooValue');   // WHERE contact = 'fooValue'
     * $query->filterByContact('%fooValue%', Criteria::LIKE); // WHERE contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contact The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByContact($contact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contact)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CONTACT, $contact, $comparison);
    }

    /**
     * Filter the query on the phintl column
     *
     * Example usage:
     * <code>
     * $query->filterByPhintl('fooValue');   // WHERE phintl = 'fooValue'
     * $query->filterByPhintl('%fooValue%', Criteria::LIKE); // WHERE phintl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPhintl($phintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_PHINTL, $phintl, $comparison);
    }

    /**
     * Filter the query on the phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
     * $query->filterByPhone('%fooValue%', Criteria::LIKE); // WHERE phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the extension column
     *
     * Example usage:
     * <code>
     * $query->filterByExtension('fooValue');   // WHERE extension = 'fooValue'
     * $query->filterByExtension('%fooValue%', Criteria::LIKE); // WHERE extension LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extension The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByExtension($extension = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extension)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_EXTENSION, $extension, $comparison);
    }

    /**
     * Filter the query on the faxnbr column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxnbr('fooValue');   // WHERE faxnbr = 'fooValue'
     * $query->filterByFaxnbr('%fooValue%', Criteria::LIKE); // WHERE faxnbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByFaxnbr($faxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_FAXNBR, $faxnbr, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the releasenbr column
     *
     * Example usage:
     * <code>
     * $query->filterByReleasenbr('fooValue');   // WHERE releasenbr = 'fooValue'
     * $query->filterByReleasenbr('%fooValue%', Criteria::LIKE); // WHERE releasenbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $releasenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByReleasenbr($releasenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($releasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_RELEASENBR, $releasenbr, $comparison);
    }

    /**
     * Filter the query on the shipviacd column
     *
     * Example usage:
     * <code>
     * $query->filterByShipviacd('fooValue');   // WHERE shipviacd = 'fooValue'
     * $query->filterByShipviacd('%fooValue%', Criteria::LIKE); // WHERE shipviacd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipviacd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipviacd($shipviacd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipviacd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPVIACD, $shipviacd, $comparison);
    }

    /**
     * Filter the query on the shipviadesc column
     *
     * Example usage:
     * <code>
     * $query->filterByShipviadesc('fooValue');   // WHERE shipviadesc = 'fooValue'
     * $query->filterByShipviadesc('%fooValue%', Criteria::LIKE); // WHERE shipviadesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipviadesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipviadesc($shipviadesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipviadesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPVIADESC, $shipviadesc, $comparison);
    }

    /**
     * Filter the query on the pricecode column
     *
     * Example usage:
     * <code>
     * $query->filterByPricecode('fooValue');   // WHERE pricecode = 'fooValue'
     * $query->filterByPricecode('%fooValue%', Criteria::LIKE); // WHERE pricecode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pricecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPricecode($pricecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pricecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_PRICECODE, $pricecode, $comparison);
    }

    /**
     * Filter the query on the pricecodedesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPricecodedesc('fooValue');   // WHERE pricecodedesc = 'fooValue'
     * $query->filterByPricecodedesc('%fooValue%', Criteria::LIKE); // WHERE pricecodedesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pricecodedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPricecodedesc($pricecodedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pricecodedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_PRICECODEDESC, $pricecodedesc, $comparison);
    }

    /**
     * Filter the query on the pricedisp column
     *
     * Example usage:
     * <code>
     * $query->filterByPricedisp('fooValue');   // WHERE pricedisp = 'fooValue'
     * $query->filterByPricedisp('%fooValue%', Criteria::LIKE); // WHERE pricedisp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pricedisp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPricedisp($pricedisp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pricedisp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_PRICEDISP, $pricedisp, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTaxcode($taxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TAXCODE, $taxcode, $comparison);
    }

    /**
     * Filter the query on the taxcodedesc column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxcodedesc('fooValue');   // WHERE taxcodedesc = 'fooValue'
     * $query->filterByTaxcodedesc('%fooValue%', Criteria::LIKE); // WHERE taxcodedesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taxcodedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTaxcodedesc($taxcodedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxcodedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TAXCODEDESC, $taxcodedesc, $comparison);
    }

    /**
     * Filter the query on the taxcodedisp column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxcodedisp('fooValue');   // WHERE taxcodedisp = 'fooValue'
     * $query->filterByTaxcodedisp('%fooValue%', Criteria::LIKE); // WHERE taxcodedisp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taxcodedisp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTaxcodedisp($taxcodedisp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxcodedisp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TAXCODEDISP, $taxcodedisp, $comparison);
    }

    /**
     * Filter the query on the termcode column
     *
     * Example usage:
     * <code>
     * $query->filterByTermcode('fooValue');   // WHERE termcode = 'fooValue'
     * $query->filterByTermcode('%fooValue%', Criteria::LIKE); // WHERE termcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTermcode($termcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TERMCODE, $termcode, $comparison);
    }

    /**
     * Filter the query on the termtype column
     *
     * Example usage:
     * <code>
     * $query->filterByTermtype('fooValue');   // WHERE termtype = 'fooValue'
     * $query->filterByTermtype('%fooValue%', Criteria::LIKE); // WHERE termtype LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTermtype($termtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TERMTYPE, $termtype, $comparison);
    }

    /**
     * Filter the query on the termcodedesc column
     *
     * Example usage:
     * <code>
     * $query->filterByTermcodedesc('fooValue');   // WHERE termcodedesc = 'fooValue'
     * $query->filterByTermcodedesc('%fooValue%', Criteria::LIKE); // WHERE termcodedesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termcodedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTermcodedesc($termcodedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termcodedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TERMCODEDESC, $termcodedesc, $comparison);
    }

    /**
     * Filter the query on the rqstdate column
     *
     * Example usage:
     * <code>
     * $query->filterByRqstdate('fooValue');   // WHERE rqstdate = 'fooValue'
     * $query->filterByRqstdate('%fooValue%', Criteria::LIKE); // WHERE rqstdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByRqstdate($rqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_RQSTDATE, $rqstdate, $comparison);
    }

    /**
     * Filter the query on the shipcom column
     *
     * Example usage:
     * <code>
     * $query->filterByShipcom('fooValue');   // WHERE shipcom = 'fooValue'
     * $query->filterByShipcom('%fooValue%', Criteria::LIKE); // WHERE shipcom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipcom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByShipcom($shipcom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SHIPCOM, $shipcom, $comparison);
    }

    /**
     * Filter the query on the sp1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySp1('fooValue');   // WHERE sp1 = 'fooValue'
     * $query->filterBySp1('%fooValue%', Criteria::LIKE); // WHERE sp1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySp1($sp1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SP1, $sp1, $comparison);
    }

    /**
     * Filter the query on the sp1name column
     *
     * Example usage:
     * <code>
     * $query->filterBySp1name('fooValue');   // WHERE sp1name = 'fooValue'
     * $query->filterBySp1name('%fooValue%', Criteria::LIKE); // WHERE sp1name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp1name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySp1name($sp1name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp1name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SP1NAME, $sp1name, $comparison);
    }

    /**
     * Filter the query on the sp2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySp2('fooValue');   // WHERE sp2 = 'fooValue'
     * $query->filterBySp2('%fooValue%', Criteria::LIKE); // WHERE sp2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySp2($sp2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SP2, $sp2, $comparison);
    }

    /**
     * Filter the query on the sp2name column
     *
     * Example usage:
     * <code>
     * $query->filterBySp2name('fooValue');   // WHERE sp2name = 'fooValue'
     * $query->filterBySp2name('%fooValue%', Criteria::LIKE); // WHERE sp2name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp2name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySp2name($sp2name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SP2NAME, $sp2name, $comparison);
    }

    /**
     * Filter the query on the sp2disp column
     *
     * Example usage:
     * <code>
     * $query->filterBySp2disp('fooValue');   // WHERE sp2disp = 'fooValue'
     * $query->filterBySp2disp('%fooValue%', Criteria::LIKE); // WHERE sp2disp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp2disp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySp2disp($sp2disp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2disp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SP2DISP, $sp2disp, $comparison);
    }

    /**
     * Filter the query on the sp3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySp3('fooValue');   // WHERE sp3 = 'fooValue'
     * $query->filterBySp3('%fooValue%', Criteria::LIKE); // WHERE sp3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySp3($sp3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SP3, $sp3, $comparison);
    }

    /**
     * Filter the query on the sp3name column
     *
     * Example usage:
     * <code>
     * $query->filterBySp3name('fooValue');   // WHERE sp3name = 'fooValue'
     * $query->filterBySp3name('%fooValue%', Criteria::LIKE); // WHERE sp3name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp3name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySp3name($sp3name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp3name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SP3NAME, $sp3name, $comparison);
    }

    /**
     * Filter the query on the sp3disp column
     *
     * Example usage:
     * <code>
     * $query->filterBySp3disp('fooValue');   // WHERE sp3disp = 'fooValue'
     * $query->filterBySp3disp('%fooValue%', Criteria::LIKE); // WHERE sp3disp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp3disp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySp3disp($sp3disp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp3disp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SP3DISP, $sp3disp, $comparison);
    }

    /**
     * Filter the query on the fob column
     *
     * Example usage:
     * <code>
     * $query->filterByFob('fooValue');   // WHERE fob = 'fooValue'
     * $query->filterByFob('%fooValue%', Criteria::LIKE); // WHERE fob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByFob($fob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_FOB, $fob, $comparison);
    }

    /**
     * Filter the query on the deliverydesc column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliverydesc('fooValue');   // WHERE deliverydesc = 'fooValue'
     * $query->filterByDeliverydesc('%fooValue%', Criteria::LIKE); // WHERE deliverydesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deliverydesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByDeliverydesc($deliverydesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deliverydesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_DELIVERYDESC, $deliverydesc, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByWhse($whse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_WHSE, $whse, $comparison);
    }

    /**
     * Filter the query on the cardnumber column
     *
     * Example usage:
     * <code>
     * $query->filterByCardnumber('fooValue');   // WHERE cardnumber = 'fooValue'
     * $query->filterByCardnumber('%fooValue%', Criteria::LIKE); // WHERE cardnumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cardnumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCardnumber($cardnumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardnumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CARDNUMBER, $cardnumber, $comparison);
    }

    /**
     * Filter the query on the cardexpire column
     *
     * Example usage:
     * <code>
     * $query->filterByCardexpire('fooValue');   // WHERE cardexpire = 'fooValue'
     * $query->filterByCardexpire('%fooValue%', Criteria::LIKE); // WHERE cardexpire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cardexpire The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCardexpire($cardexpire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardexpire)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CARDEXPIRE, $cardexpire, $comparison);
    }

    /**
     * Filter the query on the cardcode column
     *
     * Example usage:
     * <code>
     * $query->filterByCardcode('fooValue');   // WHERE cardcode = 'fooValue'
     * $query->filterByCardcode('%fooValue%', Criteria::LIKE); // WHERE cardcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cardcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCardcode($cardcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CARDCODE, $cardcode, $comparison);
    }

    /**
     * Filter the query on the cardapproval column
     *
     * Example usage:
     * <code>
     * $query->filterByCardapproval('fooValue');   // WHERE cardapproval = 'fooValue'
     * $query->filterByCardapproval('%fooValue%', Criteria::LIKE); // WHERE cardapproval LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cardapproval The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByCardapproval($cardapproval = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardapproval)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_CARDAPPROVAL, $cardapproval, $comparison);
    }

    /**
     * Filter the query on the totalcost column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalcost('fooValue');   // WHERE totalcost = 'fooValue'
     * $query->filterByTotalcost('%fooValue%', Criteria::LIKE); // WHERE totalcost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $totalcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTotalcost($totalcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totalcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TOTALCOST, $totalcost, $comparison);
    }

    /**
     * Filter the query on the totaldiscount column
     *
     * Example usage:
     * <code>
     * $query->filterByTotaldiscount('fooValue');   // WHERE totaldiscount = 'fooValue'
     * $query->filterByTotaldiscount('%fooValue%', Criteria::LIKE); // WHERE totaldiscount LIKE '%fooValue%'
     * </code>
     *
     * @param     string $totaldiscount The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByTotaldiscount($totaldiscount = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totaldiscount)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_TOTALDISCOUNT, $totaldiscount, $comparison);
    }

    /**
     * Filter the query on the paymenttype column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymenttype('fooValue');   // WHERE paymenttype = 'fooValue'
     * $query->filterByPaymenttype('%fooValue%', Criteria::LIKE); // WHERE paymenttype LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paymenttype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPaymenttype($paymenttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paymenttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_PAYMENTTYPE, $paymenttype, $comparison);
    }

    /**
     * Filter the query on the srcdatefrom column
     *
     * Example usage:
     * <code>
     * $query->filterBySrcdatefrom('fooValue');   // WHERE srcdatefrom = 'fooValue'
     * $query->filterBySrcdatefrom('%fooValue%', Criteria::LIKE); // WHERE srcdatefrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $srcdatefrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySrcdatefrom($srcdatefrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($srcdatefrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SRCDATEFROM, $srcdatefrom, $comparison);
    }

    /**
     * Filter the query on the srcdatethru column
     *
     * Example usage:
     * <code>
     * $query->filterBySrcdatethru('fooValue');   // WHERE srcdatethru = 'fooValue'
     * $query->filterBySrcdatethru('%fooValue%', Criteria::LIKE); // WHERE srcdatethru LIKE '%fooValue%'
     * </code>
     *
     * @param     string $srcdatethru The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterBySrcdatethru($srcdatethru = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($srcdatethru)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_SRCDATETHRU, $srcdatethru, $comparison);
    }

    /**
     * Filter the query on the billname column
     *
     * Example usage:
     * <code>
     * $query->filterByBillname('fooValue');   // WHERE billname = 'fooValue'
     * $query->filterByBillname('%fooValue%', Criteria::LIKE); // WHERE billname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByBillname($billname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_BILLNAME, $billname, $comparison);
    }

    /**
     * Filter the query on the billaddress column
     *
     * Example usage:
     * <code>
     * $query->filterByBilladdress('fooValue');   // WHERE billaddress = 'fooValue'
     * $query->filterByBilladdress('%fooValue%', Criteria::LIKE); // WHERE billaddress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billaddress The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByBilladdress($billaddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billaddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_BILLADDRESS, $billaddress, $comparison);
    }

    /**
     * Filter the query on the billaddress2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBilladdress2('fooValue');   // WHERE billaddress2 = 'fooValue'
     * $query->filterByBilladdress2('%fooValue%', Criteria::LIKE); // WHERE billaddress2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billaddress2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByBilladdress2($billaddress2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billaddress2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_BILLADDRESS2, $billaddress2, $comparison);
    }

    /**
     * Filter the query on the billaddress3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBilladdress3('fooValue');   // WHERE billaddress3 = 'fooValue'
     * $query->filterByBilladdress3('%fooValue%', Criteria::LIKE); // WHERE billaddress3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billaddress3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByBilladdress3($billaddress3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billaddress3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_BILLADDRESS3, $billaddress3, $comparison);
    }

    /**
     * Filter the query on the billcountry column
     *
     * Example usage:
     * <code>
     * $query->filterByBillcountry('fooValue');   // WHERE billcountry = 'fooValue'
     * $query->filterByBillcountry('%fooValue%', Criteria::LIKE); // WHERE billcountry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billcountry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByBillcountry($billcountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billcountry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_BILLCOUNTRY, $billcountry, $comparison);
    }

    /**
     * Filter the query on the billcity column
     *
     * Example usage:
     * <code>
     * $query->filterByBillcity('fooValue');   // WHERE billcity = 'fooValue'
     * $query->filterByBillcity('%fooValue%', Criteria::LIKE); // WHERE billcity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByBillcity($billcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_BILLCITY, $billcity, $comparison);
    }

    /**
     * Filter the query on the billstate column
     *
     * Example usage:
     * <code>
     * $query->filterByBillstate('fooValue');   // WHERE billstate = 'fooValue'
     * $query->filterByBillstate('%fooValue%', Criteria::LIKE); // WHERE billstate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billstate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByBillstate($billstate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billstate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_BILLSTATE, $billstate, $comparison);
    }

    /**
     * Filter the query on the billzip column
     *
     * Example usage:
     * <code>
     * $query->filterByBillzip('fooValue');   // WHERE billzip = 'fooValue'
     * $query->filterByBillzip('%fooValue%', Criteria::LIKE); // WHERE billzip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billzip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByBillzip($billzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billzip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_BILLZIP, $billzip, $comparison);
    }

    /**
     * Filter the query on the prntfmt column
     *
     * Example usage:
     * <code>
     * $query->filterByPrntfmt('fooValue');   // WHERE prntfmt = 'fooValue'
     * $query->filterByPrntfmt('%fooValue%', Criteria::LIKE); // WHERE prntfmt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prntfmt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPrntfmt($prntfmt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prntfmt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_PRNTFMT, $prntfmt, $comparison);
    }

    /**
     * Filter the query on the prntfmtdisp column
     *
     * Example usage:
     * <code>
     * $query->filterByPrntfmtdisp('fooValue');   // WHERE prntfmtdisp = 'fooValue'
     * $query->filterByPrntfmtdisp('%fooValue%', Criteria::LIKE); // WHERE prntfmtdisp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prntfmtdisp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByPrntfmtdisp($prntfmtdisp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prntfmtdisp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_PRNTFMTDISP, $prntfmtdisp, $comparison);
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
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderEditTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalesOrderEdit $salesOrderEdit Object to remove from the list of results
     *
     * @return $this|ChildSalesOrderEditQuery The current query, for fluid interface
     */
    public function prune($salesOrderEdit = null)
    {
        if ($salesOrderEdit) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SalesOrderEditTableMap::COL_SESSIONID), $salesOrderEdit->getSessionid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SalesOrderEditTableMap::COL_RECNO), $salesOrderEdit->getRecno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SalesOrderEditTableMap::COL_ORDERNO), $salesOrderEdit->getOrderno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ordrhed table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderEditTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesOrderEditTableMap::clearInstancePool();
            SalesOrderEditTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderEditTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesOrderEditTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesOrderEditTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesOrderEditTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalesOrderEditQuery
