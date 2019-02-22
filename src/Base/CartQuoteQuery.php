<?php

namespace Base;

use \CartQuote as ChildCartQuote;
use \CartQuoteQuery as ChildCartQuoteQuery;
use \Exception;
use \PDO;
use Map\CartQuoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'carthed' table.
 *
 *
 *
 * @method     ChildCartQuoteQuery orderBySessionid($order = Criteria::ASC) Order by the sessionid column
 * @method     ChildCartQuoteQuery orderByRecno($order = Criteria::ASC) Order by the recno column
 * @method     ChildCartQuoteQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildCartQuoteQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildCartQuoteQuery orderByCustid($order = Criteria::ASC) Order by the custid column
 * @method     ChildCartQuoteQuery orderByShiptoid($order = Criteria::ASC) Order by the shiptoid column
 * @method     ChildCartQuoteQuery orderByCustname($order = Criteria::ASC) Order by the custname column
 * @method     ChildCartQuoteQuery orderByOrderno($order = Criteria::ASC) Order by the orderno column
 * @method     ChildCartQuoteQuery orderByCustpo($order = Criteria::ASC) Order by the custpo column
 * @method     ChildCartQuoteQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildCartQuoteQuery orderByOrderdate($order = Criteria::ASC) Order by the orderdate column
 * @method     ChildCartQuoteQuery orderByInvdate($order = Criteria::ASC) Order by the invdate column
 * @method     ChildCartQuoteQuery orderByShipdate($order = Criteria::ASC) Order by the shipdate column
 * @method     ChildCartQuoteQuery orderByHasdocuments($order = Criteria::ASC) Order by the hasdocuments column
 * @method     ChildCartQuoteQuery orderByHastracking($order = Criteria::ASC) Order by the hastracking column
 * @method     ChildCartQuoteQuery orderBySubtotal($order = Criteria::ASC) Order by the subtotal column
 * @method     ChildCartQuoteQuery orderBySalestax($order = Criteria::ASC) Order by the salestax column
 * @method     ChildCartQuoteQuery orderByFreight($order = Criteria::ASC) Order by the freight column
 * @method     ChildCartQuoteQuery orderByMisccost($order = Criteria::ASC) Order by the misccost column
 * @method     ChildCartQuoteQuery orderByOrdertotal($order = Criteria::ASC) Order by the ordertotal column
 * @method     ChildCartQuoteQuery orderByHasnotes($order = Criteria::ASC) Order by the hasnotes column
 * @method     ChildCartQuoteQuery orderByEditord($order = Criteria::ASC) Order by the editord column
 * @method     ChildCartQuoteQuery orderByError($order = Criteria::ASC) Order by the error column
 * @method     ChildCartQuoteQuery orderByErrormsg($order = Criteria::ASC) Order by the errormsg column
 * @method     ChildCartQuoteQuery orderBySconame($order = Criteria::ASC) Order by the sconame column
 * @method     ChildCartQuoteQuery orderByShipname($order = Criteria::ASC) Order by the shipname column
 * @method     ChildCartQuoteQuery orderByShipaddress($order = Criteria::ASC) Order by the shipaddress column
 * @method     ChildCartQuoteQuery orderByShipaddress2($order = Criteria::ASC) Order by the shipaddress2 column
 * @method     ChildCartQuoteQuery orderByShipcity($order = Criteria::ASC) Order by the shipcity column
 * @method     ChildCartQuoteQuery orderByShipstate($order = Criteria::ASC) Order by the shipstate column
 * @method     ChildCartQuoteQuery orderByShipzip($order = Criteria::ASC) Order by the shipzip column
 * @method     ChildCartQuoteQuery orderByShipcountry($order = Criteria::ASC) Order by the shipcountry column
 * @method     ChildCartQuoteQuery orderByContact($order = Criteria::ASC) Order by the contact column
 * @method     ChildCartQuoteQuery orderByPhintl($order = Criteria::ASC) Order by the phintl column
 * @method     ChildCartQuoteQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ChildCartQuoteQuery orderByExtension($order = Criteria::ASC) Order by the extension column
 * @method     ChildCartQuoteQuery orderByFaxnbr($order = Criteria::ASC) Order by the faxnbr column
 * @method     ChildCartQuoteQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildCartQuoteQuery orderByReleasenbr($order = Criteria::ASC) Order by the releasenbr column
 * @method     ChildCartQuoteQuery orderByShipviacd($order = Criteria::ASC) Order by the shipviacd column
 * @method     ChildCartQuoteQuery orderByShipviadesc($order = Criteria::ASC) Order by the shipviadesc column
 * @method     ChildCartQuoteQuery orderByTermcode($order = Criteria::ASC) Order by the termcode column
 * @method     ChildCartQuoteQuery orderByTermtype($order = Criteria::ASC) Order by the termtype column
 * @method     ChildCartQuoteQuery orderByTermdesc($order = Criteria::ASC) Order by the termdesc column
 * @method     ChildCartQuoteQuery orderByRqstdate($order = Criteria::ASC) Order by the rqstdate column
 * @method     ChildCartQuoteQuery orderByShipcom($order = Criteria::ASC) Order by the shipcom column
 * @method     ChildCartQuoteQuery orderBySp1($order = Criteria::ASC) Order by the sp1 column
 * @method     ChildCartQuoteQuery orderBySp1name($order = Criteria::ASC) Order by the sp1name column
 * @method     ChildCartQuoteQuery orderByCardnumber($order = Criteria::ASC) Order by the cardnumber column
 * @method     ChildCartQuoteQuery orderByCardexpire($order = Criteria::ASC) Order by the cardexpire column
 * @method     ChildCartQuoteQuery orderByCardcode($order = Criteria::ASC) Order by the cardcode column
 * @method     ChildCartQuoteQuery orderByCardapproval($order = Criteria::ASC) Order by the cardapproval column
 * @method     ChildCartQuoteQuery orderByTotalcost($order = Criteria::ASC) Order by the totalcost column
 * @method     ChildCartQuoteQuery orderByTotaldiscount($order = Criteria::ASC) Order by the totaldiscount column
 * @method     ChildCartQuoteQuery orderByPaymenttype($order = Criteria::ASC) Order by the paymenttype column
 * @method     ChildCartQuoteQuery orderBySrcdatefrom($order = Criteria::ASC) Order by the srcdatefrom column
 * @method     ChildCartQuoteQuery orderBySrcdatethru($order = Criteria::ASC) Order by the srcdatethru column
 * @method     ChildCartQuoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCartQuoteQuery groupBySessionid() Group by the sessionid column
 * @method     ChildCartQuoteQuery groupByRecno() Group by the recno column
 * @method     ChildCartQuoteQuery groupByDate() Group by the date column
 * @method     ChildCartQuoteQuery groupByTime() Group by the time column
 * @method     ChildCartQuoteQuery groupByCustid() Group by the custid column
 * @method     ChildCartQuoteQuery groupByShiptoid() Group by the shiptoid column
 * @method     ChildCartQuoteQuery groupByCustname() Group by the custname column
 * @method     ChildCartQuoteQuery groupByOrderno() Group by the orderno column
 * @method     ChildCartQuoteQuery groupByCustpo() Group by the custpo column
 * @method     ChildCartQuoteQuery groupByStatus() Group by the status column
 * @method     ChildCartQuoteQuery groupByOrderdate() Group by the orderdate column
 * @method     ChildCartQuoteQuery groupByInvdate() Group by the invdate column
 * @method     ChildCartQuoteQuery groupByShipdate() Group by the shipdate column
 * @method     ChildCartQuoteQuery groupByHasdocuments() Group by the hasdocuments column
 * @method     ChildCartQuoteQuery groupByHastracking() Group by the hastracking column
 * @method     ChildCartQuoteQuery groupBySubtotal() Group by the subtotal column
 * @method     ChildCartQuoteQuery groupBySalestax() Group by the salestax column
 * @method     ChildCartQuoteQuery groupByFreight() Group by the freight column
 * @method     ChildCartQuoteQuery groupByMisccost() Group by the misccost column
 * @method     ChildCartQuoteQuery groupByOrdertotal() Group by the ordertotal column
 * @method     ChildCartQuoteQuery groupByHasnotes() Group by the hasnotes column
 * @method     ChildCartQuoteQuery groupByEditord() Group by the editord column
 * @method     ChildCartQuoteQuery groupByError() Group by the error column
 * @method     ChildCartQuoteQuery groupByErrormsg() Group by the errormsg column
 * @method     ChildCartQuoteQuery groupBySconame() Group by the sconame column
 * @method     ChildCartQuoteQuery groupByShipname() Group by the shipname column
 * @method     ChildCartQuoteQuery groupByShipaddress() Group by the shipaddress column
 * @method     ChildCartQuoteQuery groupByShipaddress2() Group by the shipaddress2 column
 * @method     ChildCartQuoteQuery groupByShipcity() Group by the shipcity column
 * @method     ChildCartQuoteQuery groupByShipstate() Group by the shipstate column
 * @method     ChildCartQuoteQuery groupByShipzip() Group by the shipzip column
 * @method     ChildCartQuoteQuery groupByShipcountry() Group by the shipcountry column
 * @method     ChildCartQuoteQuery groupByContact() Group by the contact column
 * @method     ChildCartQuoteQuery groupByPhintl() Group by the phintl column
 * @method     ChildCartQuoteQuery groupByPhone() Group by the phone column
 * @method     ChildCartQuoteQuery groupByExtension() Group by the extension column
 * @method     ChildCartQuoteQuery groupByFaxnbr() Group by the faxnbr column
 * @method     ChildCartQuoteQuery groupByEmail() Group by the email column
 * @method     ChildCartQuoteQuery groupByReleasenbr() Group by the releasenbr column
 * @method     ChildCartQuoteQuery groupByShipviacd() Group by the shipviacd column
 * @method     ChildCartQuoteQuery groupByShipviadesc() Group by the shipviadesc column
 * @method     ChildCartQuoteQuery groupByTermcode() Group by the termcode column
 * @method     ChildCartQuoteQuery groupByTermtype() Group by the termtype column
 * @method     ChildCartQuoteQuery groupByTermdesc() Group by the termdesc column
 * @method     ChildCartQuoteQuery groupByRqstdate() Group by the rqstdate column
 * @method     ChildCartQuoteQuery groupByShipcom() Group by the shipcom column
 * @method     ChildCartQuoteQuery groupBySp1() Group by the sp1 column
 * @method     ChildCartQuoteQuery groupBySp1name() Group by the sp1name column
 * @method     ChildCartQuoteQuery groupByCardnumber() Group by the cardnumber column
 * @method     ChildCartQuoteQuery groupByCardexpire() Group by the cardexpire column
 * @method     ChildCartQuoteQuery groupByCardcode() Group by the cardcode column
 * @method     ChildCartQuoteQuery groupByCardapproval() Group by the cardapproval column
 * @method     ChildCartQuoteQuery groupByTotalcost() Group by the totalcost column
 * @method     ChildCartQuoteQuery groupByTotaldiscount() Group by the totaldiscount column
 * @method     ChildCartQuoteQuery groupByPaymenttype() Group by the paymenttype column
 * @method     ChildCartQuoteQuery groupBySrcdatefrom() Group by the srcdatefrom column
 * @method     ChildCartQuoteQuery groupBySrcdatethru() Group by the srcdatethru column
 * @method     ChildCartQuoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCartQuoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCartQuoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCartQuoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCartQuoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCartQuoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCartQuoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCartQuote findOne(ConnectionInterface $con = null) Return the first ChildCartQuote matching the query
 * @method     ChildCartQuote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCartQuote matching the query, or a new ChildCartQuote object populated from the query conditions when no match is found
 *
 * @method     ChildCartQuote findOneBySessionid(string $sessionid) Return the first ChildCartQuote filtered by the sessionid column
 * @method     ChildCartQuote findOneByRecno(int $recno) Return the first ChildCartQuote filtered by the recno column
 * @method     ChildCartQuote findOneByDate(int $date) Return the first ChildCartQuote filtered by the date column
 * @method     ChildCartQuote findOneByTime(int $time) Return the first ChildCartQuote filtered by the time column
 * @method     ChildCartQuote findOneByCustid(string $custid) Return the first ChildCartQuote filtered by the custid column
 * @method     ChildCartQuote findOneByShiptoid(string $shiptoid) Return the first ChildCartQuote filtered by the shiptoid column
 * @method     ChildCartQuote findOneByCustname(string $custname) Return the first ChildCartQuote filtered by the custname column
 * @method     ChildCartQuote findOneByOrderno(string $orderno) Return the first ChildCartQuote filtered by the orderno column
 * @method     ChildCartQuote findOneByCustpo(string $custpo) Return the first ChildCartQuote filtered by the custpo column
 * @method     ChildCartQuote findOneByStatus(string $status) Return the first ChildCartQuote filtered by the status column
 * @method     ChildCartQuote findOneByOrderdate(string $orderdate) Return the first ChildCartQuote filtered by the orderdate column
 * @method     ChildCartQuote findOneByInvdate(string $invdate) Return the first ChildCartQuote filtered by the invdate column
 * @method     ChildCartQuote findOneByShipdate(string $shipdate) Return the first ChildCartQuote filtered by the shipdate column
 * @method     ChildCartQuote findOneByHasdocuments(string $hasdocuments) Return the first ChildCartQuote filtered by the hasdocuments column
 * @method     ChildCartQuote findOneByHastracking(string $hastracking) Return the first ChildCartQuote filtered by the hastracking column
 * @method     ChildCartQuote findOneBySubtotal(string $subtotal) Return the first ChildCartQuote filtered by the subtotal column
 * @method     ChildCartQuote findOneBySalestax(string $salestax) Return the first ChildCartQuote filtered by the salestax column
 * @method     ChildCartQuote findOneByFreight(string $freight) Return the first ChildCartQuote filtered by the freight column
 * @method     ChildCartQuote findOneByMisccost(string $misccost) Return the first ChildCartQuote filtered by the misccost column
 * @method     ChildCartQuote findOneByOrdertotal(string $ordertotal) Return the first ChildCartQuote filtered by the ordertotal column
 * @method     ChildCartQuote findOneByHasnotes(string $hasnotes) Return the first ChildCartQuote filtered by the hasnotes column
 * @method     ChildCartQuote findOneByEditord(string $editord) Return the first ChildCartQuote filtered by the editord column
 * @method     ChildCartQuote findOneByError(string $error) Return the first ChildCartQuote filtered by the error column
 * @method     ChildCartQuote findOneByErrormsg(string $errormsg) Return the first ChildCartQuote filtered by the errormsg column
 * @method     ChildCartQuote findOneBySconame(string $sconame) Return the first ChildCartQuote filtered by the sconame column
 * @method     ChildCartQuote findOneByShipname(string $shipname) Return the first ChildCartQuote filtered by the shipname column
 * @method     ChildCartQuote findOneByShipaddress(string $shipaddress) Return the first ChildCartQuote filtered by the shipaddress column
 * @method     ChildCartQuote findOneByShipaddress2(string $shipaddress2) Return the first ChildCartQuote filtered by the shipaddress2 column
 * @method     ChildCartQuote findOneByShipcity(string $shipcity) Return the first ChildCartQuote filtered by the shipcity column
 * @method     ChildCartQuote findOneByShipstate(string $shipstate) Return the first ChildCartQuote filtered by the shipstate column
 * @method     ChildCartQuote findOneByShipzip(string $shipzip) Return the first ChildCartQuote filtered by the shipzip column
 * @method     ChildCartQuote findOneByShipcountry(string $shipcountry) Return the first ChildCartQuote filtered by the shipcountry column
 * @method     ChildCartQuote findOneByContact(string $contact) Return the first ChildCartQuote filtered by the contact column
 * @method     ChildCartQuote findOneByPhintl(string $phintl) Return the first ChildCartQuote filtered by the phintl column
 * @method     ChildCartQuote findOneByPhone(string $phone) Return the first ChildCartQuote filtered by the phone column
 * @method     ChildCartQuote findOneByExtension(string $extension) Return the first ChildCartQuote filtered by the extension column
 * @method     ChildCartQuote findOneByFaxnbr(string $faxnbr) Return the first ChildCartQuote filtered by the faxnbr column
 * @method     ChildCartQuote findOneByEmail(string $email) Return the first ChildCartQuote filtered by the email column
 * @method     ChildCartQuote findOneByReleasenbr(string $releasenbr) Return the first ChildCartQuote filtered by the releasenbr column
 * @method     ChildCartQuote findOneByShipviacd(string $shipviacd) Return the first ChildCartQuote filtered by the shipviacd column
 * @method     ChildCartQuote findOneByShipviadesc(string $shipviadesc) Return the first ChildCartQuote filtered by the shipviadesc column
 * @method     ChildCartQuote findOneByTermcode(string $termcode) Return the first ChildCartQuote filtered by the termcode column
 * @method     ChildCartQuote findOneByTermtype(string $termtype) Return the first ChildCartQuote filtered by the termtype column
 * @method     ChildCartQuote findOneByTermdesc(string $termdesc) Return the first ChildCartQuote filtered by the termdesc column
 * @method     ChildCartQuote findOneByRqstdate(string $rqstdate) Return the first ChildCartQuote filtered by the rqstdate column
 * @method     ChildCartQuote findOneByShipcom(string $shipcom) Return the first ChildCartQuote filtered by the shipcom column
 * @method     ChildCartQuote findOneBySp1(string $sp1) Return the first ChildCartQuote filtered by the sp1 column
 * @method     ChildCartQuote findOneBySp1name(string $sp1name) Return the first ChildCartQuote filtered by the sp1name column
 * @method     ChildCartQuote findOneByCardnumber(string $cardnumber) Return the first ChildCartQuote filtered by the cardnumber column
 * @method     ChildCartQuote findOneByCardexpire(string $cardexpire) Return the first ChildCartQuote filtered by the cardexpire column
 * @method     ChildCartQuote findOneByCardcode(string $cardcode) Return the first ChildCartQuote filtered by the cardcode column
 * @method     ChildCartQuote findOneByCardapproval(string $cardapproval) Return the first ChildCartQuote filtered by the cardapproval column
 * @method     ChildCartQuote findOneByTotalcost(string $totalcost) Return the first ChildCartQuote filtered by the totalcost column
 * @method     ChildCartQuote findOneByTotaldiscount(string $totaldiscount) Return the first ChildCartQuote filtered by the totaldiscount column
 * @method     ChildCartQuote findOneByPaymenttype(string $paymenttype) Return the first ChildCartQuote filtered by the paymenttype column
 * @method     ChildCartQuote findOneBySrcdatefrom(string $srcdatefrom) Return the first ChildCartQuote filtered by the srcdatefrom column
 * @method     ChildCartQuote findOneBySrcdatethru(string $srcdatethru) Return the first ChildCartQuote filtered by the srcdatethru column
 * @method     ChildCartQuote findOneByDummy(string $dummy) Return the first ChildCartQuote filtered by the dummy column *

 * @method     ChildCartQuote requirePk($key, ConnectionInterface $con = null) Return the ChildCartQuote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOne(ConnectionInterface $con = null) Return the first ChildCartQuote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCartQuote requireOneBySessionid(string $sessionid) Return the first ChildCartQuote filtered by the sessionid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByRecno(int $recno) Return the first ChildCartQuote filtered by the recno column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByDate(int $date) Return the first ChildCartQuote filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByTime(int $time) Return the first ChildCartQuote filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByCustid(string $custid) Return the first ChildCartQuote filtered by the custid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShiptoid(string $shiptoid) Return the first ChildCartQuote filtered by the shiptoid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByCustname(string $custname) Return the first ChildCartQuote filtered by the custname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByOrderno(string $orderno) Return the first ChildCartQuote filtered by the orderno column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByCustpo(string $custpo) Return the first ChildCartQuote filtered by the custpo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByStatus(string $status) Return the first ChildCartQuote filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByOrderdate(string $orderdate) Return the first ChildCartQuote filtered by the orderdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByInvdate(string $invdate) Return the first ChildCartQuote filtered by the invdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipdate(string $shipdate) Return the first ChildCartQuote filtered by the shipdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByHasdocuments(string $hasdocuments) Return the first ChildCartQuote filtered by the hasdocuments column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByHastracking(string $hastracking) Return the first ChildCartQuote filtered by the hastracking column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneBySubtotal(string $subtotal) Return the first ChildCartQuote filtered by the subtotal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneBySalestax(string $salestax) Return the first ChildCartQuote filtered by the salestax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByFreight(string $freight) Return the first ChildCartQuote filtered by the freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByMisccost(string $misccost) Return the first ChildCartQuote filtered by the misccost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByOrdertotal(string $ordertotal) Return the first ChildCartQuote filtered by the ordertotal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByHasnotes(string $hasnotes) Return the first ChildCartQuote filtered by the hasnotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByEditord(string $editord) Return the first ChildCartQuote filtered by the editord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByError(string $error) Return the first ChildCartQuote filtered by the error column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByErrormsg(string $errormsg) Return the first ChildCartQuote filtered by the errormsg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneBySconame(string $sconame) Return the first ChildCartQuote filtered by the sconame column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipname(string $shipname) Return the first ChildCartQuote filtered by the shipname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipaddress(string $shipaddress) Return the first ChildCartQuote filtered by the shipaddress column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipaddress2(string $shipaddress2) Return the first ChildCartQuote filtered by the shipaddress2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipcity(string $shipcity) Return the first ChildCartQuote filtered by the shipcity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipstate(string $shipstate) Return the first ChildCartQuote filtered by the shipstate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipzip(string $shipzip) Return the first ChildCartQuote filtered by the shipzip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipcountry(string $shipcountry) Return the first ChildCartQuote filtered by the shipcountry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByContact(string $contact) Return the first ChildCartQuote filtered by the contact column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByPhintl(string $phintl) Return the first ChildCartQuote filtered by the phintl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByPhone(string $phone) Return the first ChildCartQuote filtered by the phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByExtension(string $extension) Return the first ChildCartQuote filtered by the extension column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByFaxnbr(string $faxnbr) Return the first ChildCartQuote filtered by the faxnbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByEmail(string $email) Return the first ChildCartQuote filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByReleasenbr(string $releasenbr) Return the first ChildCartQuote filtered by the releasenbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipviacd(string $shipviacd) Return the first ChildCartQuote filtered by the shipviacd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipviadesc(string $shipviadesc) Return the first ChildCartQuote filtered by the shipviadesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByTermcode(string $termcode) Return the first ChildCartQuote filtered by the termcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByTermtype(string $termtype) Return the first ChildCartQuote filtered by the termtype column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByTermdesc(string $termdesc) Return the first ChildCartQuote filtered by the termdesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByRqstdate(string $rqstdate) Return the first ChildCartQuote filtered by the rqstdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByShipcom(string $shipcom) Return the first ChildCartQuote filtered by the shipcom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneBySp1(string $sp1) Return the first ChildCartQuote filtered by the sp1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneBySp1name(string $sp1name) Return the first ChildCartQuote filtered by the sp1name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByCardnumber(string $cardnumber) Return the first ChildCartQuote filtered by the cardnumber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByCardexpire(string $cardexpire) Return the first ChildCartQuote filtered by the cardexpire column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByCardcode(string $cardcode) Return the first ChildCartQuote filtered by the cardcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByCardapproval(string $cardapproval) Return the first ChildCartQuote filtered by the cardapproval column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByTotalcost(string $totalcost) Return the first ChildCartQuote filtered by the totalcost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByTotaldiscount(string $totaldiscount) Return the first ChildCartQuote filtered by the totaldiscount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByPaymenttype(string $paymenttype) Return the first ChildCartQuote filtered by the paymenttype column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneBySrcdatefrom(string $srcdatefrom) Return the first ChildCartQuote filtered by the srcdatefrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneBySrcdatethru(string $srcdatethru) Return the first ChildCartQuote filtered by the srcdatethru column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCartQuote requireOneByDummy(string $dummy) Return the first ChildCartQuote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCartQuote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCartQuote objects based on current ModelCriteria
 * @method     ChildCartQuote[]|ObjectCollection findBySessionid(string $sessionid) Return ChildCartQuote objects filtered by the sessionid column
 * @method     ChildCartQuote[]|ObjectCollection findByRecno(int $recno) Return ChildCartQuote objects filtered by the recno column
 * @method     ChildCartQuote[]|ObjectCollection findByDate(int $date) Return ChildCartQuote objects filtered by the date column
 * @method     ChildCartQuote[]|ObjectCollection findByTime(int $time) Return ChildCartQuote objects filtered by the time column
 * @method     ChildCartQuote[]|ObjectCollection findByCustid(string $custid) Return ChildCartQuote objects filtered by the custid column
 * @method     ChildCartQuote[]|ObjectCollection findByShiptoid(string $shiptoid) Return ChildCartQuote objects filtered by the shiptoid column
 * @method     ChildCartQuote[]|ObjectCollection findByCustname(string $custname) Return ChildCartQuote objects filtered by the custname column
 * @method     ChildCartQuote[]|ObjectCollection findByOrderno(string $orderno) Return ChildCartQuote objects filtered by the orderno column
 * @method     ChildCartQuote[]|ObjectCollection findByCustpo(string $custpo) Return ChildCartQuote objects filtered by the custpo column
 * @method     ChildCartQuote[]|ObjectCollection findByStatus(string $status) Return ChildCartQuote objects filtered by the status column
 * @method     ChildCartQuote[]|ObjectCollection findByOrderdate(string $orderdate) Return ChildCartQuote objects filtered by the orderdate column
 * @method     ChildCartQuote[]|ObjectCollection findByInvdate(string $invdate) Return ChildCartQuote objects filtered by the invdate column
 * @method     ChildCartQuote[]|ObjectCollection findByShipdate(string $shipdate) Return ChildCartQuote objects filtered by the shipdate column
 * @method     ChildCartQuote[]|ObjectCollection findByHasdocuments(string $hasdocuments) Return ChildCartQuote objects filtered by the hasdocuments column
 * @method     ChildCartQuote[]|ObjectCollection findByHastracking(string $hastracking) Return ChildCartQuote objects filtered by the hastracking column
 * @method     ChildCartQuote[]|ObjectCollection findBySubtotal(string $subtotal) Return ChildCartQuote objects filtered by the subtotal column
 * @method     ChildCartQuote[]|ObjectCollection findBySalestax(string $salestax) Return ChildCartQuote objects filtered by the salestax column
 * @method     ChildCartQuote[]|ObjectCollection findByFreight(string $freight) Return ChildCartQuote objects filtered by the freight column
 * @method     ChildCartQuote[]|ObjectCollection findByMisccost(string $misccost) Return ChildCartQuote objects filtered by the misccost column
 * @method     ChildCartQuote[]|ObjectCollection findByOrdertotal(string $ordertotal) Return ChildCartQuote objects filtered by the ordertotal column
 * @method     ChildCartQuote[]|ObjectCollection findByHasnotes(string $hasnotes) Return ChildCartQuote objects filtered by the hasnotes column
 * @method     ChildCartQuote[]|ObjectCollection findByEditord(string $editord) Return ChildCartQuote objects filtered by the editord column
 * @method     ChildCartQuote[]|ObjectCollection findByError(string $error) Return ChildCartQuote objects filtered by the error column
 * @method     ChildCartQuote[]|ObjectCollection findByErrormsg(string $errormsg) Return ChildCartQuote objects filtered by the errormsg column
 * @method     ChildCartQuote[]|ObjectCollection findBySconame(string $sconame) Return ChildCartQuote objects filtered by the sconame column
 * @method     ChildCartQuote[]|ObjectCollection findByShipname(string $shipname) Return ChildCartQuote objects filtered by the shipname column
 * @method     ChildCartQuote[]|ObjectCollection findByShipaddress(string $shipaddress) Return ChildCartQuote objects filtered by the shipaddress column
 * @method     ChildCartQuote[]|ObjectCollection findByShipaddress2(string $shipaddress2) Return ChildCartQuote objects filtered by the shipaddress2 column
 * @method     ChildCartQuote[]|ObjectCollection findByShipcity(string $shipcity) Return ChildCartQuote objects filtered by the shipcity column
 * @method     ChildCartQuote[]|ObjectCollection findByShipstate(string $shipstate) Return ChildCartQuote objects filtered by the shipstate column
 * @method     ChildCartQuote[]|ObjectCollection findByShipzip(string $shipzip) Return ChildCartQuote objects filtered by the shipzip column
 * @method     ChildCartQuote[]|ObjectCollection findByShipcountry(string $shipcountry) Return ChildCartQuote objects filtered by the shipcountry column
 * @method     ChildCartQuote[]|ObjectCollection findByContact(string $contact) Return ChildCartQuote objects filtered by the contact column
 * @method     ChildCartQuote[]|ObjectCollection findByPhintl(string $phintl) Return ChildCartQuote objects filtered by the phintl column
 * @method     ChildCartQuote[]|ObjectCollection findByPhone(string $phone) Return ChildCartQuote objects filtered by the phone column
 * @method     ChildCartQuote[]|ObjectCollection findByExtension(string $extension) Return ChildCartQuote objects filtered by the extension column
 * @method     ChildCartQuote[]|ObjectCollection findByFaxnbr(string $faxnbr) Return ChildCartQuote objects filtered by the faxnbr column
 * @method     ChildCartQuote[]|ObjectCollection findByEmail(string $email) Return ChildCartQuote objects filtered by the email column
 * @method     ChildCartQuote[]|ObjectCollection findByReleasenbr(string $releasenbr) Return ChildCartQuote objects filtered by the releasenbr column
 * @method     ChildCartQuote[]|ObjectCollection findByShipviacd(string $shipviacd) Return ChildCartQuote objects filtered by the shipviacd column
 * @method     ChildCartQuote[]|ObjectCollection findByShipviadesc(string $shipviadesc) Return ChildCartQuote objects filtered by the shipviadesc column
 * @method     ChildCartQuote[]|ObjectCollection findByTermcode(string $termcode) Return ChildCartQuote objects filtered by the termcode column
 * @method     ChildCartQuote[]|ObjectCollection findByTermtype(string $termtype) Return ChildCartQuote objects filtered by the termtype column
 * @method     ChildCartQuote[]|ObjectCollection findByTermdesc(string $termdesc) Return ChildCartQuote objects filtered by the termdesc column
 * @method     ChildCartQuote[]|ObjectCollection findByRqstdate(string $rqstdate) Return ChildCartQuote objects filtered by the rqstdate column
 * @method     ChildCartQuote[]|ObjectCollection findByShipcom(string $shipcom) Return ChildCartQuote objects filtered by the shipcom column
 * @method     ChildCartQuote[]|ObjectCollection findBySp1(string $sp1) Return ChildCartQuote objects filtered by the sp1 column
 * @method     ChildCartQuote[]|ObjectCollection findBySp1name(string $sp1name) Return ChildCartQuote objects filtered by the sp1name column
 * @method     ChildCartQuote[]|ObjectCollection findByCardnumber(string $cardnumber) Return ChildCartQuote objects filtered by the cardnumber column
 * @method     ChildCartQuote[]|ObjectCollection findByCardexpire(string $cardexpire) Return ChildCartQuote objects filtered by the cardexpire column
 * @method     ChildCartQuote[]|ObjectCollection findByCardcode(string $cardcode) Return ChildCartQuote objects filtered by the cardcode column
 * @method     ChildCartQuote[]|ObjectCollection findByCardapproval(string $cardapproval) Return ChildCartQuote objects filtered by the cardapproval column
 * @method     ChildCartQuote[]|ObjectCollection findByTotalcost(string $totalcost) Return ChildCartQuote objects filtered by the totalcost column
 * @method     ChildCartQuote[]|ObjectCollection findByTotaldiscount(string $totaldiscount) Return ChildCartQuote objects filtered by the totaldiscount column
 * @method     ChildCartQuote[]|ObjectCollection findByPaymenttype(string $paymenttype) Return ChildCartQuote objects filtered by the paymenttype column
 * @method     ChildCartQuote[]|ObjectCollection findBySrcdatefrom(string $srcdatefrom) Return ChildCartQuote objects filtered by the srcdatefrom column
 * @method     ChildCartQuote[]|ObjectCollection findBySrcdatethru(string $srcdatethru) Return ChildCartQuote objects filtered by the srcdatethru column
 * @method     ChildCartQuote[]|ObjectCollection findByDummy(string $dummy) Return ChildCartQuote objects filtered by the dummy column
 * @method     ChildCartQuote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CartQuoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CartQuoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CartQuote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCartQuoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCartQuoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCartQuoteQuery) {
            return $criteria;
        }
        $query = new ChildCartQuoteQuery();
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
     * @return ChildCartQuote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CartQuoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CartQuoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCartQuote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT sessionid, recno, date, time, custid, shiptoid, custname, orderno, custpo, status, orderdate, invdate, shipdate, hasdocuments, hastracking, subtotal, salestax, freight, misccost, ordertotal, hasnotes, editord, error, errormsg, sconame, shipname, shipaddress, shipaddress2, shipcity, shipstate, shipzip, shipcountry, contact, phintl, phone, extension, faxnbr, email, releasenbr, shipviacd, shipviadesc, termcode, termtype, termdesc, rqstdate, shipcom, sp1, sp1name, cardnumber, cardexpire, cardcode, cardapproval, totalcost, totaldiscount, paymenttype, srcdatefrom, srcdatethru, dummy FROM carthed WHERE sessionid = :p0 AND recno = :p1';
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
            /** @var ChildCartQuote $obj */
            $obj = new ChildCartQuote();
            $obj->hydrate($row);
            CartQuoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCartQuote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CartQuoteTableMap::COL_SESSIONID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CartQuoteTableMap::COL_RECNO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CartQuoteTableMap::COL_SESSIONID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CartQuoteTableMap::COL_RECNO, $key[1], Criteria::EQUAL);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterBySessionid($sessionid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SESSIONID, $sessionid, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByRecno($recno = null, $comparison = null)
    {
        if (is_array($recno)) {
            $useMinMax = false;
            if (isset($recno['min'])) {
                $this->addUsingAlias(CartQuoteTableMap::COL_RECNO, $recno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recno['max'])) {
                $this->addUsingAlias(CartQuoteTableMap::COL_RECNO, $recno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_RECNO, $recno, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CartQuoteTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CartQuoteTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(CartQuoteTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(CartQuoteTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_TIME, $time, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByCustid($custid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_CUSTID, $custid, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShiptoid($shiptoid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPTOID, $shiptoid, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByCustname($custname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_CUSTNAME, $custname, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByOrderno($orderno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orderno)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_ORDERNO, $orderno, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByCustpo($custpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_CUSTPO, $custpo, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByOrderdate($orderdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orderdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_ORDERDATE, $orderdate, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByInvdate($invdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($invdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_INVDATE, $invdate, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipdate($shipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPDATE, $shipdate, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByHasdocuments($hasdocuments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasdocuments)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_HASDOCUMENTS, $hasdocuments, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByHastracking($hastracking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hastracking)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_HASTRACKING, $hastracking, $comparison);
    }

    /**
     * Filter the query on the subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotal('fooValue');   // WHERE subtotal = 'fooValue'
     * $query->filterBySubtotal('%fooValue%', Criteria::LIKE); // WHERE subtotal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subtotal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterBySubtotal($subtotal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subtotal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SUBTOTAL, $subtotal, $comparison);
    }

    /**
     * Filter the query on the salestax column
     *
     * Example usage:
     * <code>
     * $query->filterBySalestax('fooValue');   // WHERE salestax = 'fooValue'
     * $query->filterBySalestax('%fooValue%', Criteria::LIKE); // WHERE salestax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salestax The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterBySalestax($salestax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salestax)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SALESTAX, $salestax, $comparison);
    }

    /**
     * Filter the query on the freight column
     *
     * Example usage:
     * <code>
     * $query->filterByFreight('fooValue');   // WHERE freight = 'fooValue'
     * $query->filterByFreight('%fooValue%', Criteria::LIKE); // WHERE freight LIKE '%fooValue%'
     * </code>
     *
     * @param     string $freight The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByFreight($freight = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($freight)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_FREIGHT, $freight, $comparison);
    }

    /**
     * Filter the query on the misccost column
     *
     * Example usage:
     * <code>
     * $query->filterByMisccost('fooValue');   // WHERE misccost = 'fooValue'
     * $query->filterByMisccost('%fooValue%', Criteria::LIKE); // WHERE misccost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $misccost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByMisccost($misccost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($misccost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_MISCCOST, $misccost, $comparison);
    }

    /**
     * Filter the query on the ordertotal column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdertotal('fooValue');   // WHERE ordertotal = 'fooValue'
     * $query->filterByOrdertotal('%fooValue%', Criteria::LIKE); // WHERE ordertotal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordertotal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByOrdertotal($ordertotal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordertotal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_ORDERTOTAL, $ordertotal, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByHasnotes($hasnotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasnotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_HASNOTES, $hasnotes, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByEditord($editord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_EDITORD, $editord, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByError($error = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($error)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_ERROR, $error, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByErrormsg($errormsg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($errormsg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_ERRORMSG, $errormsg, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterBySconame($sconame = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sconame)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SCONAME, $sconame, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipname($shipname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPNAME, $shipname, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipaddress($shipaddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipaddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPADDRESS, $shipaddress, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipaddress2($shipaddress2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipaddress2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPADDRESS2, $shipaddress2, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipcity($shipcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPCITY, $shipcity, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipstate($shipstate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipstate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPSTATE, $shipstate, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipzip($shipzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipzip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPZIP, $shipzip, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipcountry($shipcountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcountry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPCOUNTRY, $shipcountry, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByContact($contact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contact)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_CONTACT, $contact, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByPhintl($phintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_PHINTL, $phintl, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_PHONE, $phone, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByExtension($extension = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extension)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_EXTENSION, $extension, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByFaxnbr($faxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_FAXNBR, $faxnbr, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_EMAIL, $email, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByReleasenbr($releasenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($releasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_RELEASENBR, $releasenbr, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipviacd($shipviacd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipviacd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPVIACD, $shipviacd, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipviadesc($shipviadesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipviadesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPVIADESC, $shipviadesc, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByTermcode($termcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_TERMCODE, $termcode, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByTermtype($termtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_TERMTYPE, $termtype, $comparison);
    }

    /**
     * Filter the query on the termdesc column
     *
     * Example usage:
     * <code>
     * $query->filterByTermdesc('fooValue');   // WHERE termdesc = 'fooValue'
     * $query->filterByTermdesc('%fooValue%', Criteria::LIKE); // WHERE termdesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByTermdesc($termdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_TERMDESC, $termdesc, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByRqstdate($rqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_RQSTDATE, $rqstdate, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByShipcom($shipcom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SHIPCOM, $shipcom, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterBySp1($sp1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SP1, $sp1, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterBySp1name($sp1name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp1name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SP1NAME, $sp1name, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByCardnumber($cardnumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardnumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_CARDNUMBER, $cardnumber, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByCardexpire($cardexpire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardexpire)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_CARDEXPIRE, $cardexpire, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByCardcode($cardcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_CARDCODE, $cardcode, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByCardapproval($cardapproval = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardapproval)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_CARDAPPROVAL, $cardapproval, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByTotalcost($totalcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totalcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_TOTALCOST, $totalcost, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByTotaldiscount($totaldiscount = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totaldiscount)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_TOTALDISCOUNT, $totaldiscount, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByPaymenttype($paymenttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paymenttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_PAYMENTTYPE, $paymenttype, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterBySrcdatefrom($srcdatefrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($srcdatefrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SRCDATEFROM, $srcdatefrom, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterBySrcdatethru($srcdatethru = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($srcdatethru)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_SRCDATETHRU, $srcdatethru, $comparison);
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
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CartQuoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCartQuote $cartQuote Object to remove from the list of results
     *
     * @return $this|ChildCartQuoteQuery The current query, for fluid interface
     */
    public function prune($cartQuote = null)
    {
        if ($cartQuote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CartQuoteTableMap::COL_SESSIONID), $cartQuote->getSessionid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CartQuoteTableMap::COL_RECNO), $cartQuote->getRecno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the carthed table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CartQuoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CartQuoteTableMap::clearInstancePool();
            CartQuoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CartQuoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CartQuoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CartQuoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CartQuoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CartQuoteQuery
