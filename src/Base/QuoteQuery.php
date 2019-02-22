<?php

namespace Base;

use \Quote as ChildQuote;
use \QuoteQuery as ChildQuoteQuery;
use \Exception;
use \PDO;
use Map\QuoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'quothed' table.
 *
 *
 *
 * @method     ChildQuoteQuery orderBySessionid($order = Criteria::ASC) Order by the sessionid column
 * @method     ChildQuoteQuery orderByRecno($order = Criteria::ASC) Order by the recno column
 * @method     ChildQuoteQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildQuoteQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildQuoteQuery orderByQuotnbr($order = Criteria::ASC) Order by the quotnbr column
 * @method     ChildQuoteQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildQuoteQuery orderByCustid($order = Criteria::ASC) Order by the custid column
 * @method     ChildQuoteQuery orderByBillname($order = Criteria::ASC) Order by the billname column
 * @method     ChildQuoteQuery orderByBilladdress($order = Criteria::ASC) Order by the billaddress column
 * @method     ChildQuoteQuery orderByBilladdress2($order = Criteria::ASC) Order by the billaddress2 column
 * @method     ChildQuoteQuery orderByBilladdress3($order = Criteria::ASC) Order by the billaddress3 column
 * @method     ChildQuoteQuery orderByBillcountry($order = Criteria::ASC) Order by the billcountry column
 * @method     ChildQuoteQuery orderByBillcity($order = Criteria::ASC) Order by the billcity column
 * @method     ChildQuoteQuery orderByBillstate($order = Criteria::ASC) Order by the billstate column
 * @method     ChildQuoteQuery orderByBillzip($order = Criteria::ASC) Order by the billzip column
 * @method     ChildQuoteQuery orderByShiptoid($order = Criteria::ASC) Order by the shiptoid column
 * @method     ChildQuoteQuery orderByShipname($order = Criteria::ASC) Order by the shipname column
 * @method     ChildQuoteQuery orderByShipaddress($order = Criteria::ASC) Order by the shipaddress column
 * @method     ChildQuoteQuery orderByShipaddress2($order = Criteria::ASC) Order by the shipaddress2 column
 * @method     ChildQuoteQuery orderByShipaddress3($order = Criteria::ASC) Order by the shipaddress3 column
 * @method     ChildQuoteQuery orderByShipcountry($order = Criteria::ASC) Order by the shipcountry column
 * @method     ChildQuoteQuery orderByShipcity($order = Criteria::ASC) Order by the shipcity column
 * @method     ChildQuoteQuery orderByShipstate($order = Criteria::ASC) Order by the shipstate column
 * @method     ChildQuoteQuery orderByShipzip($order = Criteria::ASC) Order by the shipzip column
 * @method     ChildQuoteQuery orderByContact($order = Criteria::ASC) Order by the contact column
 * @method     ChildQuoteQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ChildQuoteQuery orderByFaxnbr($order = Criteria::ASC) Order by the faxnbr column
 * @method     ChildQuoteQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildQuoteQuery orderByCareof($order = Criteria::ASC) Order by the careof column
 * @method     ChildQuoteQuery orderByQuotdate($order = Criteria::ASC) Order by the quotdate column
 * @method     ChildQuoteQuery orderByRevdate($order = Criteria::ASC) Order by the revdate column
 * @method     ChildQuoteQuery orderByExpdate($order = Criteria::ASC) Order by the expdate column
 * @method     ChildQuoteQuery orderByPricecode($order = Criteria::ASC) Order by the pricecode column
 * @method     ChildQuoteQuery orderByPricecodedesc($order = Criteria::ASC) Order by the pricecodedesc column
 * @method     ChildQuoteQuery orderByTaxcode($order = Criteria::ASC) Order by the taxcode column
 * @method     ChildQuoteQuery orderByTaxcodedesc($order = Criteria::ASC) Order by the taxcodedesc column
 * @method     ChildQuoteQuery orderByTermcode($order = Criteria::ASC) Order by the termcode column
 * @method     ChildQuoteQuery orderByTermcodedesc($order = Criteria::ASC) Order by the termcodedesc column
 * @method     ChildQuoteQuery orderByShipviacd($order = Criteria::ASC) Order by the shipviacd column
 * @method     ChildQuoteQuery orderByShipviadesc($order = Criteria::ASC) Order by the shipviadesc column
 * @method     ChildQuoteQuery orderBySp1($order = Criteria::ASC) Order by the sp1 column
 * @method     ChildQuoteQuery orderBySp1pct($order = Criteria::ASC) Order by the sp1pct column
 * @method     ChildQuoteQuery orderBySp1name($order = Criteria::ASC) Order by the sp1name column
 * @method     ChildQuoteQuery orderBySp2($order = Criteria::ASC) Order by the sp2 column
 * @method     ChildQuoteQuery orderBySp2pct($order = Criteria::ASC) Order by the sp2pct column
 * @method     ChildQuoteQuery orderBySp2name($order = Criteria::ASC) Order by the sp2name column
 * @method     ChildQuoteQuery orderBySp3($order = Criteria::ASC) Order by the sp3 column
 * @method     ChildQuoteQuery orderBySp3pct($order = Criteria::ASC) Order by the sp3pct column
 * @method     ChildQuoteQuery orderBySp3name($order = Criteria::ASC) Order by the sp3name column
 * @method     ChildQuoteQuery orderByFob($order = Criteria::ASC) Order by the fob column
 * @method     ChildQuoteQuery orderByDeliverydesc($order = Criteria::ASC) Order by the deliverydesc column
 * @method     ChildQuoteQuery orderByWhse($order = Criteria::ASC) Order by the whse column
 * @method     ChildQuoteQuery orderByCustpo($order = Criteria::ASC) Order by the custpo column
 * @method     ChildQuoteQuery orderByCustref($order = Criteria::ASC) Order by the custref column
 * @method     ChildQuoteQuery orderByHasnotes($order = Criteria::ASC) Order by the hasnotes column
 * @method     ChildQuoteQuery orderByError($order = Criteria::ASC) Order by the error column
 * @method     ChildQuoteQuery orderByErrormsg($order = Criteria::ASC) Order by the errormsg column
 * @method     ChildQuoteQuery orderBySubtotal($order = Criteria::ASC) Order by the subtotal column
 * @method     ChildQuoteQuery orderBySalestax($order = Criteria::ASC) Order by the salestax column
 * @method     ChildQuoteQuery orderByFreight($order = Criteria::ASC) Order by the freight column
 * @method     ChildQuoteQuery orderByMisccost($order = Criteria::ASC) Order by the misccost column
 * @method     ChildQuoteQuery orderByOrdertotal($order = Criteria::ASC) Order by the ordertotal column
 * @method     ChildQuoteQuery orderByCostTotal($order = Criteria::ASC) Order by the cost_total column
 * @method     ChildQuoteQuery orderByMarginAmt($order = Criteria::ASC) Order by the margin_amt column
 * @method     ChildQuoteQuery orderByMarginPct($order = Criteria::ASC) Order by the margin_pct column
 * @method     ChildQuoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildQuoteQuery groupBySessionid() Group by the sessionid column
 * @method     ChildQuoteQuery groupByRecno() Group by the recno column
 * @method     ChildQuoteQuery groupByDate() Group by the date column
 * @method     ChildQuoteQuery groupByTime() Group by the time column
 * @method     ChildQuoteQuery groupByQuotnbr() Group by the quotnbr column
 * @method     ChildQuoteQuery groupByStatus() Group by the status column
 * @method     ChildQuoteQuery groupByCustid() Group by the custid column
 * @method     ChildQuoteQuery groupByBillname() Group by the billname column
 * @method     ChildQuoteQuery groupByBilladdress() Group by the billaddress column
 * @method     ChildQuoteQuery groupByBilladdress2() Group by the billaddress2 column
 * @method     ChildQuoteQuery groupByBilladdress3() Group by the billaddress3 column
 * @method     ChildQuoteQuery groupByBillcountry() Group by the billcountry column
 * @method     ChildQuoteQuery groupByBillcity() Group by the billcity column
 * @method     ChildQuoteQuery groupByBillstate() Group by the billstate column
 * @method     ChildQuoteQuery groupByBillzip() Group by the billzip column
 * @method     ChildQuoteQuery groupByShiptoid() Group by the shiptoid column
 * @method     ChildQuoteQuery groupByShipname() Group by the shipname column
 * @method     ChildQuoteQuery groupByShipaddress() Group by the shipaddress column
 * @method     ChildQuoteQuery groupByShipaddress2() Group by the shipaddress2 column
 * @method     ChildQuoteQuery groupByShipaddress3() Group by the shipaddress3 column
 * @method     ChildQuoteQuery groupByShipcountry() Group by the shipcountry column
 * @method     ChildQuoteQuery groupByShipcity() Group by the shipcity column
 * @method     ChildQuoteQuery groupByShipstate() Group by the shipstate column
 * @method     ChildQuoteQuery groupByShipzip() Group by the shipzip column
 * @method     ChildQuoteQuery groupByContact() Group by the contact column
 * @method     ChildQuoteQuery groupByPhone() Group by the phone column
 * @method     ChildQuoteQuery groupByFaxnbr() Group by the faxnbr column
 * @method     ChildQuoteQuery groupByEmail() Group by the email column
 * @method     ChildQuoteQuery groupByCareof() Group by the careof column
 * @method     ChildQuoteQuery groupByQuotdate() Group by the quotdate column
 * @method     ChildQuoteQuery groupByRevdate() Group by the revdate column
 * @method     ChildQuoteQuery groupByExpdate() Group by the expdate column
 * @method     ChildQuoteQuery groupByPricecode() Group by the pricecode column
 * @method     ChildQuoteQuery groupByPricecodedesc() Group by the pricecodedesc column
 * @method     ChildQuoteQuery groupByTaxcode() Group by the taxcode column
 * @method     ChildQuoteQuery groupByTaxcodedesc() Group by the taxcodedesc column
 * @method     ChildQuoteQuery groupByTermcode() Group by the termcode column
 * @method     ChildQuoteQuery groupByTermcodedesc() Group by the termcodedesc column
 * @method     ChildQuoteQuery groupByShipviacd() Group by the shipviacd column
 * @method     ChildQuoteQuery groupByShipviadesc() Group by the shipviadesc column
 * @method     ChildQuoteQuery groupBySp1() Group by the sp1 column
 * @method     ChildQuoteQuery groupBySp1pct() Group by the sp1pct column
 * @method     ChildQuoteQuery groupBySp1name() Group by the sp1name column
 * @method     ChildQuoteQuery groupBySp2() Group by the sp2 column
 * @method     ChildQuoteQuery groupBySp2pct() Group by the sp2pct column
 * @method     ChildQuoteQuery groupBySp2name() Group by the sp2name column
 * @method     ChildQuoteQuery groupBySp3() Group by the sp3 column
 * @method     ChildQuoteQuery groupBySp3pct() Group by the sp3pct column
 * @method     ChildQuoteQuery groupBySp3name() Group by the sp3name column
 * @method     ChildQuoteQuery groupByFob() Group by the fob column
 * @method     ChildQuoteQuery groupByDeliverydesc() Group by the deliverydesc column
 * @method     ChildQuoteQuery groupByWhse() Group by the whse column
 * @method     ChildQuoteQuery groupByCustpo() Group by the custpo column
 * @method     ChildQuoteQuery groupByCustref() Group by the custref column
 * @method     ChildQuoteQuery groupByHasnotes() Group by the hasnotes column
 * @method     ChildQuoteQuery groupByError() Group by the error column
 * @method     ChildQuoteQuery groupByErrormsg() Group by the errormsg column
 * @method     ChildQuoteQuery groupBySubtotal() Group by the subtotal column
 * @method     ChildQuoteQuery groupBySalestax() Group by the salestax column
 * @method     ChildQuoteQuery groupByFreight() Group by the freight column
 * @method     ChildQuoteQuery groupByMisccost() Group by the misccost column
 * @method     ChildQuoteQuery groupByOrdertotal() Group by the ordertotal column
 * @method     ChildQuoteQuery groupByCostTotal() Group by the cost_total column
 * @method     ChildQuoteQuery groupByMarginAmt() Group by the margin_amt column
 * @method     ChildQuoteQuery groupByMarginPct() Group by the margin_pct column
 * @method     ChildQuoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildQuoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildQuoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildQuoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildQuoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildQuoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildQuoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildQuote findOne(ConnectionInterface $con = null) Return the first ChildQuote matching the query
 * @method     ChildQuote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildQuote matching the query, or a new ChildQuote object populated from the query conditions when no match is found
 *
 * @method     ChildQuote findOneBySessionid(string $sessionid) Return the first ChildQuote filtered by the sessionid column
 * @method     ChildQuote findOneByRecno(int $recno) Return the first ChildQuote filtered by the recno column
 * @method     ChildQuote findOneByDate(int $date) Return the first ChildQuote filtered by the date column
 * @method     ChildQuote findOneByTime(int $time) Return the first ChildQuote filtered by the time column
 * @method     ChildQuote findOneByQuotnbr(string $quotnbr) Return the first ChildQuote filtered by the quotnbr column
 * @method     ChildQuote findOneByStatus(string $status) Return the first ChildQuote filtered by the status column
 * @method     ChildQuote findOneByCustid(string $custid) Return the first ChildQuote filtered by the custid column
 * @method     ChildQuote findOneByBillname(string $billname) Return the first ChildQuote filtered by the billname column
 * @method     ChildQuote findOneByBilladdress(string $billaddress) Return the first ChildQuote filtered by the billaddress column
 * @method     ChildQuote findOneByBilladdress2(string $billaddress2) Return the first ChildQuote filtered by the billaddress2 column
 * @method     ChildQuote findOneByBilladdress3(string $billaddress3) Return the first ChildQuote filtered by the billaddress3 column
 * @method     ChildQuote findOneByBillcountry(string $billcountry) Return the first ChildQuote filtered by the billcountry column
 * @method     ChildQuote findOneByBillcity(string $billcity) Return the first ChildQuote filtered by the billcity column
 * @method     ChildQuote findOneByBillstate(string $billstate) Return the first ChildQuote filtered by the billstate column
 * @method     ChildQuote findOneByBillzip(string $billzip) Return the first ChildQuote filtered by the billzip column
 * @method     ChildQuote findOneByShiptoid(string $shiptoid) Return the first ChildQuote filtered by the shiptoid column
 * @method     ChildQuote findOneByShipname(string $shipname) Return the first ChildQuote filtered by the shipname column
 * @method     ChildQuote findOneByShipaddress(string $shipaddress) Return the first ChildQuote filtered by the shipaddress column
 * @method     ChildQuote findOneByShipaddress2(string $shipaddress2) Return the first ChildQuote filtered by the shipaddress2 column
 * @method     ChildQuote findOneByShipaddress3(string $shipaddress3) Return the first ChildQuote filtered by the shipaddress3 column
 * @method     ChildQuote findOneByShipcountry(string $shipcountry) Return the first ChildQuote filtered by the shipcountry column
 * @method     ChildQuote findOneByShipcity(string $shipcity) Return the first ChildQuote filtered by the shipcity column
 * @method     ChildQuote findOneByShipstate(string $shipstate) Return the first ChildQuote filtered by the shipstate column
 * @method     ChildQuote findOneByShipzip(string $shipzip) Return the first ChildQuote filtered by the shipzip column
 * @method     ChildQuote findOneByContact(string $contact) Return the first ChildQuote filtered by the contact column
 * @method     ChildQuote findOneByPhone(string $phone) Return the first ChildQuote filtered by the phone column
 * @method     ChildQuote findOneByFaxnbr(string $faxnbr) Return the first ChildQuote filtered by the faxnbr column
 * @method     ChildQuote findOneByEmail(string $email) Return the first ChildQuote filtered by the email column
 * @method     ChildQuote findOneByCareof(string $careof) Return the first ChildQuote filtered by the careof column
 * @method     ChildQuote findOneByQuotdate(string $quotdate) Return the first ChildQuote filtered by the quotdate column
 * @method     ChildQuote findOneByRevdate(string $revdate) Return the first ChildQuote filtered by the revdate column
 * @method     ChildQuote findOneByExpdate(string $expdate) Return the first ChildQuote filtered by the expdate column
 * @method     ChildQuote findOneByPricecode(string $pricecode) Return the first ChildQuote filtered by the pricecode column
 * @method     ChildQuote findOneByPricecodedesc(string $pricecodedesc) Return the first ChildQuote filtered by the pricecodedesc column
 * @method     ChildQuote findOneByTaxcode(string $taxcode) Return the first ChildQuote filtered by the taxcode column
 * @method     ChildQuote findOneByTaxcodedesc(string $taxcodedesc) Return the first ChildQuote filtered by the taxcodedesc column
 * @method     ChildQuote findOneByTermcode(string $termcode) Return the first ChildQuote filtered by the termcode column
 * @method     ChildQuote findOneByTermcodedesc(string $termcodedesc) Return the first ChildQuote filtered by the termcodedesc column
 * @method     ChildQuote findOneByShipviacd(string $shipviacd) Return the first ChildQuote filtered by the shipviacd column
 * @method     ChildQuote findOneByShipviadesc(string $shipviadesc) Return the first ChildQuote filtered by the shipviadesc column
 * @method     ChildQuote findOneBySp1(string $sp1) Return the first ChildQuote filtered by the sp1 column
 * @method     ChildQuote findOneBySp1pct(string $sp1pct) Return the first ChildQuote filtered by the sp1pct column
 * @method     ChildQuote findOneBySp1name(string $sp1name) Return the first ChildQuote filtered by the sp1name column
 * @method     ChildQuote findOneBySp2(string $sp2) Return the first ChildQuote filtered by the sp2 column
 * @method     ChildQuote findOneBySp2pct(string $sp2pct) Return the first ChildQuote filtered by the sp2pct column
 * @method     ChildQuote findOneBySp2name(string $sp2name) Return the first ChildQuote filtered by the sp2name column
 * @method     ChildQuote findOneBySp3(string $sp3) Return the first ChildQuote filtered by the sp3 column
 * @method     ChildQuote findOneBySp3pct(string $sp3pct) Return the first ChildQuote filtered by the sp3pct column
 * @method     ChildQuote findOneBySp3name(string $sp3name) Return the first ChildQuote filtered by the sp3name column
 * @method     ChildQuote findOneByFob(string $fob) Return the first ChildQuote filtered by the fob column
 * @method     ChildQuote findOneByDeliverydesc(string $deliverydesc) Return the first ChildQuote filtered by the deliverydesc column
 * @method     ChildQuote findOneByWhse(string $whse) Return the first ChildQuote filtered by the whse column
 * @method     ChildQuote findOneByCustpo(string $custpo) Return the first ChildQuote filtered by the custpo column
 * @method     ChildQuote findOneByCustref(string $custref) Return the first ChildQuote filtered by the custref column
 * @method     ChildQuote findOneByHasnotes(string $hasnotes) Return the first ChildQuote filtered by the hasnotes column
 * @method     ChildQuote findOneByError(string $error) Return the first ChildQuote filtered by the error column
 * @method     ChildQuote findOneByErrormsg(string $errormsg) Return the first ChildQuote filtered by the errormsg column
 * @method     ChildQuote findOneBySubtotal(string $subtotal) Return the first ChildQuote filtered by the subtotal column
 * @method     ChildQuote findOneBySalestax(string $salestax) Return the first ChildQuote filtered by the salestax column
 * @method     ChildQuote findOneByFreight(string $freight) Return the first ChildQuote filtered by the freight column
 * @method     ChildQuote findOneByMisccost(string $misccost) Return the first ChildQuote filtered by the misccost column
 * @method     ChildQuote findOneByOrdertotal(string $ordertotal) Return the first ChildQuote filtered by the ordertotal column
 * @method     ChildQuote findOneByCostTotal(string $cost_total) Return the first ChildQuote filtered by the cost_total column
 * @method     ChildQuote findOneByMarginAmt(string $margin_amt) Return the first ChildQuote filtered by the margin_amt column
 * @method     ChildQuote findOneByMarginPct(string $margin_pct) Return the first ChildQuote filtered by the margin_pct column
 * @method     ChildQuote findOneByDummy(string $dummy) Return the first ChildQuote filtered by the dummy column *

 * @method     ChildQuote requirePk($key, ConnectionInterface $con = null) Return the ChildQuote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOne(ConnectionInterface $con = null) Return the first ChildQuote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuote requireOneBySessionid(string $sessionid) Return the first ChildQuote filtered by the sessionid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByRecno(int $recno) Return the first ChildQuote filtered by the recno column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByDate(int $date) Return the first ChildQuote filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByTime(int $time) Return the first ChildQuote filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQuotnbr(string $quotnbr) Return the first ChildQuote filtered by the quotnbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByStatus(string $status) Return the first ChildQuote filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByCustid(string $custid) Return the first ChildQuote filtered by the custid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByBillname(string $billname) Return the first ChildQuote filtered by the billname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByBilladdress(string $billaddress) Return the first ChildQuote filtered by the billaddress column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByBilladdress2(string $billaddress2) Return the first ChildQuote filtered by the billaddress2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByBilladdress3(string $billaddress3) Return the first ChildQuote filtered by the billaddress3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByBillcountry(string $billcountry) Return the first ChildQuote filtered by the billcountry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByBillcity(string $billcity) Return the first ChildQuote filtered by the billcity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByBillstate(string $billstate) Return the first ChildQuote filtered by the billstate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByBillzip(string $billzip) Return the first ChildQuote filtered by the billzip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShiptoid(string $shiptoid) Return the first ChildQuote filtered by the shiptoid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipname(string $shipname) Return the first ChildQuote filtered by the shipname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipaddress(string $shipaddress) Return the first ChildQuote filtered by the shipaddress column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipaddress2(string $shipaddress2) Return the first ChildQuote filtered by the shipaddress2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipaddress3(string $shipaddress3) Return the first ChildQuote filtered by the shipaddress3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipcountry(string $shipcountry) Return the first ChildQuote filtered by the shipcountry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipcity(string $shipcity) Return the first ChildQuote filtered by the shipcity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipstate(string $shipstate) Return the first ChildQuote filtered by the shipstate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipzip(string $shipzip) Return the first ChildQuote filtered by the shipzip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByContact(string $contact) Return the first ChildQuote filtered by the contact column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByPhone(string $phone) Return the first ChildQuote filtered by the phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByFaxnbr(string $faxnbr) Return the first ChildQuote filtered by the faxnbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByEmail(string $email) Return the first ChildQuote filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByCareof(string $careof) Return the first ChildQuote filtered by the careof column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQuotdate(string $quotdate) Return the first ChildQuote filtered by the quotdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByRevdate(string $revdate) Return the first ChildQuote filtered by the revdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByExpdate(string $expdate) Return the first ChildQuote filtered by the expdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByPricecode(string $pricecode) Return the first ChildQuote filtered by the pricecode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByPricecodedesc(string $pricecodedesc) Return the first ChildQuote filtered by the pricecodedesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByTaxcode(string $taxcode) Return the first ChildQuote filtered by the taxcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByTaxcodedesc(string $taxcodedesc) Return the first ChildQuote filtered by the taxcodedesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByTermcode(string $termcode) Return the first ChildQuote filtered by the termcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByTermcodedesc(string $termcodedesc) Return the first ChildQuote filtered by the termcodedesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipviacd(string $shipviacd) Return the first ChildQuote filtered by the shipviacd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByShipviadesc(string $shipviadesc) Return the first ChildQuote filtered by the shipviadesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp1(string $sp1) Return the first ChildQuote filtered by the sp1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp1pct(string $sp1pct) Return the first ChildQuote filtered by the sp1pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp1name(string $sp1name) Return the first ChildQuote filtered by the sp1name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp2(string $sp2) Return the first ChildQuote filtered by the sp2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp2pct(string $sp2pct) Return the first ChildQuote filtered by the sp2pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp2name(string $sp2name) Return the first ChildQuote filtered by the sp2name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp3(string $sp3) Return the first ChildQuote filtered by the sp3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp3pct(string $sp3pct) Return the first ChildQuote filtered by the sp3pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySp3name(string $sp3name) Return the first ChildQuote filtered by the sp3name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByFob(string $fob) Return the first ChildQuote filtered by the fob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByDeliverydesc(string $deliverydesc) Return the first ChildQuote filtered by the deliverydesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByWhse(string $whse) Return the first ChildQuote filtered by the whse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByCustpo(string $custpo) Return the first ChildQuote filtered by the custpo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByCustref(string $custref) Return the first ChildQuote filtered by the custref column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByHasnotes(string $hasnotes) Return the first ChildQuote filtered by the hasnotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByError(string $error) Return the first ChildQuote filtered by the error column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByErrormsg(string $errormsg) Return the first ChildQuote filtered by the errormsg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySubtotal(string $subtotal) Return the first ChildQuote filtered by the subtotal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneBySalestax(string $salestax) Return the first ChildQuote filtered by the salestax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByFreight(string $freight) Return the first ChildQuote filtered by the freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByMisccost(string $misccost) Return the first ChildQuote filtered by the misccost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByOrdertotal(string $ordertotal) Return the first ChildQuote filtered by the ordertotal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByCostTotal(string $cost_total) Return the first ChildQuote filtered by the cost_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByMarginAmt(string $margin_amt) Return the first ChildQuote filtered by the margin_amt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByMarginPct(string $margin_pct) Return the first ChildQuote filtered by the margin_pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByDummy(string $dummy) Return the first ChildQuote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildQuote objects based on current ModelCriteria
 * @method     ChildQuote[]|ObjectCollection findBySessionid(string $sessionid) Return ChildQuote objects filtered by the sessionid column
 * @method     ChildQuote[]|ObjectCollection findByRecno(int $recno) Return ChildQuote objects filtered by the recno column
 * @method     ChildQuote[]|ObjectCollection findByDate(int $date) Return ChildQuote objects filtered by the date column
 * @method     ChildQuote[]|ObjectCollection findByTime(int $time) Return ChildQuote objects filtered by the time column
 * @method     ChildQuote[]|ObjectCollection findByQuotnbr(string $quotnbr) Return ChildQuote objects filtered by the quotnbr column
 * @method     ChildQuote[]|ObjectCollection findByStatus(string $status) Return ChildQuote objects filtered by the status column
 * @method     ChildQuote[]|ObjectCollection findByCustid(string $custid) Return ChildQuote objects filtered by the custid column
 * @method     ChildQuote[]|ObjectCollection findByBillname(string $billname) Return ChildQuote objects filtered by the billname column
 * @method     ChildQuote[]|ObjectCollection findByBilladdress(string $billaddress) Return ChildQuote objects filtered by the billaddress column
 * @method     ChildQuote[]|ObjectCollection findByBilladdress2(string $billaddress2) Return ChildQuote objects filtered by the billaddress2 column
 * @method     ChildQuote[]|ObjectCollection findByBilladdress3(string $billaddress3) Return ChildQuote objects filtered by the billaddress3 column
 * @method     ChildQuote[]|ObjectCollection findByBillcountry(string $billcountry) Return ChildQuote objects filtered by the billcountry column
 * @method     ChildQuote[]|ObjectCollection findByBillcity(string $billcity) Return ChildQuote objects filtered by the billcity column
 * @method     ChildQuote[]|ObjectCollection findByBillstate(string $billstate) Return ChildQuote objects filtered by the billstate column
 * @method     ChildQuote[]|ObjectCollection findByBillzip(string $billzip) Return ChildQuote objects filtered by the billzip column
 * @method     ChildQuote[]|ObjectCollection findByShiptoid(string $shiptoid) Return ChildQuote objects filtered by the shiptoid column
 * @method     ChildQuote[]|ObjectCollection findByShipname(string $shipname) Return ChildQuote objects filtered by the shipname column
 * @method     ChildQuote[]|ObjectCollection findByShipaddress(string $shipaddress) Return ChildQuote objects filtered by the shipaddress column
 * @method     ChildQuote[]|ObjectCollection findByShipaddress2(string $shipaddress2) Return ChildQuote objects filtered by the shipaddress2 column
 * @method     ChildQuote[]|ObjectCollection findByShipaddress3(string $shipaddress3) Return ChildQuote objects filtered by the shipaddress3 column
 * @method     ChildQuote[]|ObjectCollection findByShipcountry(string $shipcountry) Return ChildQuote objects filtered by the shipcountry column
 * @method     ChildQuote[]|ObjectCollection findByShipcity(string $shipcity) Return ChildQuote objects filtered by the shipcity column
 * @method     ChildQuote[]|ObjectCollection findByShipstate(string $shipstate) Return ChildQuote objects filtered by the shipstate column
 * @method     ChildQuote[]|ObjectCollection findByShipzip(string $shipzip) Return ChildQuote objects filtered by the shipzip column
 * @method     ChildQuote[]|ObjectCollection findByContact(string $contact) Return ChildQuote objects filtered by the contact column
 * @method     ChildQuote[]|ObjectCollection findByPhone(string $phone) Return ChildQuote objects filtered by the phone column
 * @method     ChildQuote[]|ObjectCollection findByFaxnbr(string $faxnbr) Return ChildQuote objects filtered by the faxnbr column
 * @method     ChildQuote[]|ObjectCollection findByEmail(string $email) Return ChildQuote objects filtered by the email column
 * @method     ChildQuote[]|ObjectCollection findByCareof(string $careof) Return ChildQuote objects filtered by the careof column
 * @method     ChildQuote[]|ObjectCollection findByQuotdate(string $quotdate) Return ChildQuote objects filtered by the quotdate column
 * @method     ChildQuote[]|ObjectCollection findByRevdate(string $revdate) Return ChildQuote objects filtered by the revdate column
 * @method     ChildQuote[]|ObjectCollection findByExpdate(string $expdate) Return ChildQuote objects filtered by the expdate column
 * @method     ChildQuote[]|ObjectCollection findByPricecode(string $pricecode) Return ChildQuote objects filtered by the pricecode column
 * @method     ChildQuote[]|ObjectCollection findByPricecodedesc(string $pricecodedesc) Return ChildQuote objects filtered by the pricecodedesc column
 * @method     ChildQuote[]|ObjectCollection findByTaxcode(string $taxcode) Return ChildQuote objects filtered by the taxcode column
 * @method     ChildQuote[]|ObjectCollection findByTaxcodedesc(string $taxcodedesc) Return ChildQuote objects filtered by the taxcodedesc column
 * @method     ChildQuote[]|ObjectCollection findByTermcode(string $termcode) Return ChildQuote objects filtered by the termcode column
 * @method     ChildQuote[]|ObjectCollection findByTermcodedesc(string $termcodedesc) Return ChildQuote objects filtered by the termcodedesc column
 * @method     ChildQuote[]|ObjectCollection findByShipviacd(string $shipviacd) Return ChildQuote objects filtered by the shipviacd column
 * @method     ChildQuote[]|ObjectCollection findByShipviadesc(string $shipviadesc) Return ChildQuote objects filtered by the shipviadesc column
 * @method     ChildQuote[]|ObjectCollection findBySp1(string $sp1) Return ChildQuote objects filtered by the sp1 column
 * @method     ChildQuote[]|ObjectCollection findBySp1pct(string $sp1pct) Return ChildQuote objects filtered by the sp1pct column
 * @method     ChildQuote[]|ObjectCollection findBySp1name(string $sp1name) Return ChildQuote objects filtered by the sp1name column
 * @method     ChildQuote[]|ObjectCollection findBySp2(string $sp2) Return ChildQuote objects filtered by the sp2 column
 * @method     ChildQuote[]|ObjectCollection findBySp2pct(string $sp2pct) Return ChildQuote objects filtered by the sp2pct column
 * @method     ChildQuote[]|ObjectCollection findBySp2name(string $sp2name) Return ChildQuote objects filtered by the sp2name column
 * @method     ChildQuote[]|ObjectCollection findBySp3(string $sp3) Return ChildQuote objects filtered by the sp3 column
 * @method     ChildQuote[]|ObjectCollection findBySp3pct(string $sp3pct) Return ChildQuote objects filtered by the sp3pct column
 * @method     ChildQuote[]|ObjectCollection findBySp3name(string $sp3name) Return ChildQuote objects filtered by the sp3name column
 * @method     ChildQuote[]|ObjectCollection findByFob(string $fob) Return ChildQuote objects filtered by the fob column
 * @method     ChildQuote[]|ObjectCollection findByDeliverydesc(string $deliverydesc) Return ChildQuote objects filtered by the deliverydesc column
 * @method     ChildQuote[]|ObjectCollection findByWhse(string $whse) Return ChildQuote objects filtered by the whse column
 * @method     ChildQuote[]|ObjectCollection findByCustpo(string $custpo) Return ChildQuote objects filtered by the custpo column
 * @method     ChildQuote[]|ObjectCollection findByCustref(string $custref) Return ChildQuote objects filtered by the custref column
 * @method     ChildQuote[]|ObjectCollection findByHasnotes(string $hasnotes) Return ChildQuote objects filtered by the hasnotes column
 * @method     ChildQuote[]|ObjectCollection findByError(string $error) Return ChildQuote objects filtered by the error column
 * @method     ChildQuote[]|ObjectCollection findByErrormsg(string $errormsg) Return ChildQuote objects filtered by the errormsg column
 * @method     ChildQuote[]|ObjectCollection findBySubtotal(string $subtotal) Return ChildQuote objects filtered by the subtotal column
 * @method     ChildQuote[]|ObjectCollection findBySalestax(string $salestax) Return ChildQuote objects filtered by the salestax column
 * @method     ChildQuote[]|ObjectCollection findByFreight(string $freight) Return ChildQuote objects filtered by the freight column
 * @method     ChildQuote[]|ObjectCollection findByMisccost(string $misccost) Return ChildQuote objects filtered by the misccost column
 * @method     ChildQuote[]|ObjectCollection findByOrdertotal(string $ordertotal) Return ChildQuote objects filtered by the ordertotal column
 * @method     ChildQuote[]|ObjectCollection findByCostTotal(string $cost_total) Return ChildQuote objects filtered by the cost_total column
 * @method     ChildQuote[]|ObjectCollection findByMarginAmt(string $margin_amt) Return ChildQuote objects filtered by the margin_amt column
 * @method     ChildQuote[]|ObjectCollection findByMarginPct(string $margin_pct) Return ChildQuote objects filtered by the margin_pct column
 * @method     ChildQuote[]|ObjectCollection findByDummy(string $dummy) Return ChildQuote objects filtered by the dummy column
 * @method     ChildQuote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class QuoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\QuoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Quote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildQuoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildQuoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildQuoteQuery) {
            return $criteria;
        }
        $query = new ChildQuoteQuery();
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
     * @return ChildQuote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(QuoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = QuoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildQuote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT sessionid, recno, date, time, quotnbr, status, custid, billname, billaddress, billaddress2, billaddress3, billcountry, billcity, billstate, billzip, shiptoid, shipname, shipaddress, shipaddress2, shipaddress3, shipcountry, shipcity, shipstate, shipzip, contact, phone, faxnbr, email, careof, quotdate, revdate, expdate, pricecode, pricecodedesc, taxcode, taxcodedesc, termcode, termcodedesc, shipviacd, shipviadesc, sp1, sp1pct, sp1name, sp2, sp2pct, sp2name, sp3, sp3pct, sp3name, fob, deliverydesc, whse, custpo, custref, hasnotes, error, errormsg, subtotal, salestax, freight, misccost, ordertotal, cost_total, margin_amt, margin_pct, dummy FROM quothed WHERE sessionid = :p0 AND recno = :p1';
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
            /** @var ChildQuote $obj */
            $obj = new ChildQuote();
            $obj->hydrate($row);
            QuoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildQuote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(QuoteTableMap::COL_SESSIONID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(QuoteTableMap::COL_RECNO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(QuoteTableMap::COL_SESSIONID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(QuoteTableMap::COL_RECNO, $key[1], Criteria::EQUAL);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySessionid($sessionid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SESSIONID, $sessionid, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByRecno($recno = null, $comparison = null)
    {
        if (is_array($recno)) {
            $useMinMax = false;
            if (isset($recno['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_RECNO, $recno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recno['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_RECNO, $recno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_RECNO, $recno, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_TIME, $time, $comparison);
    }

    /**
     * Filter the query on the quotnbr column
     *
     * Example usage:
     * <code>
     * $query->filterByQuotnbr('fooValue');   // WHERE quotnbr = 'fooValue'
     * $query->filterByQuotnbr('%fooValue%', Criteria::LIKE); // WHERE quotnbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quotnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQuotnbr($quotnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quotnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QUOTNBR, $quotnbr, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_STATUS, $status, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByCustid($custid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_CUSTID, $custid, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByBillname($billname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_BILLNAME, $billname, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByBilladdress($billaddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billaddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_BILLADDRESS, $billaddress, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByBilladdress2($billaddress2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billaddress2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_BILLADDRESS2, $billaddress2, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByBilladdress3($billaddress3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billaddress3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_BILLADDRESS3, $billaddress3, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByBillcountry($billcountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billcountry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_BILLCOUNTRY, $billcountry, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByBillcity($billcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_BILLCITY, $billcity, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByBillstate($billstate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billstate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_BILLSTATE, $billstate, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByBillzip($billzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billzip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_BILLZIP, $billzip, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShiptoid($shiptoid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPTOID, $shiptoid, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipname($shipname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPNAME, $shipname, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipaddress($shipaddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipaddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPADDRESS, $shipaddress, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipaddress2($shipaddress2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipaddress2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPADDRESS2, $shipaddress2, $comparison);
    }

    /**
     * Filter the query on the shipaddress3 column
     *
     * Example usage:
     * <code>
     * $query->filterByShipaddress3('fooValue');   // WHERE shipaddress3 = 'fooValue'
     * $query->filterByShipaddress3('%fooValue%', Criteria::LIKE); // WHERE shipaddress3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipaddress3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipaddress3($shipaddress3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipaddress3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPADDRESS3, $shipaddress3, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipcountry($shipcountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcountry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPCOUNTRY, $shipcountry, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipcity($shipcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPCITY, $shipcity, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipstate($shipstate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipstate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPSTATE, $shipstate, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipzip($shipzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipzip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPZIP, $shipzip, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByContact($contact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contact)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_CONTACT, $contact, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_PHONE, $phone, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByFaxnbr($faxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_FAXNBR, $faxnbr, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_EMAIL, $email, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByCareof($careof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($careof)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_CAREOF, $careof, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQuotdate($quotdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quotdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QUOTDATE, $quotdate, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByRevdate($revdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($revdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_REVDATE, $revdate, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByExpdate($expdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_EXPDATE, $expdate, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByPricecode($pricecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pricecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_PRICECODE, $pricecode, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByPricecodedesc($pricecodedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pricecodedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_PRICECODEDESC, $pricecodedesc, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByTaxcode($taxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_TAXCODE, $taxcode, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByTaxcodedesc($taxcodedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taxcodedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_TAXCODEDESC, $taxcodedesc, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByTermcode($termcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_TERMCODE, $termcode, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByTermcodedesc($termcodedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termcodedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_TERMCODEDESC, $termcodedesc, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipviacd($shipviacd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipviacd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPVIACD, $shipviacd, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByShipviadesc($shipviadesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipviadesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SHIPVIADESC, $shipviadesc, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp1($sp1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP1, $sp1, $comparison);
    }

    /**
     * Filter the query on the sp1pct column
     *
     * Example usage:
     * <code>
     * $query->filterBySp1pct('fooValue');   // WHERE sp1pct = 'fooValue'
     * $query->filterBySp1pct('%fooValue%', Criteria::LIKE); // WHERE sp1pct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp1pct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp1pct($sp1pct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp1pct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP1PCT, $sp1pct, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp1name($sp1name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp1name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP1NAME, $sp1name, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp2($sp2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP2, $sp2, $comparison);
    }

    /**
     * Filter the query on the sp2pct column
     *
     * Example usage:
     * <code>
     * $query->filterBySp2pct('fooValue');   // WHERE sp2pct = 'fooValue'
     * $query->filterBySp2pct('%fooValue%', Criteria::LIKE); // WHERE sp2pct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp2pct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp2pct($sp2pct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2pct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP2PCT, $sp2pct, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp2name($sp2name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP2NAME, $sp2name, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp3($sp3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP3, $sp3, $comparison);
    }

    /**
     * Filter the query on the sp3pct column
     *
     * Example usage:
     * <code>
     * $query->filterBySp3pct('fooValue');   // WHERE sp3pct = 'fooValue'
     * $query->filterBySp3pct('%fooValue%', Criteria::LIKE); // WHERE sp3pct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp3pct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp3pct($sp3pct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp3pct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP3PCT, $sp3pct, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySp3name($sp3name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp3name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SP3NAME, $sp3name, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByFob($fob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_FOB, $fob, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByDeliverydesc($deliverydesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deliverydesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_DELIVERYDESC, $deliverydesc, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByWhse($whse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_WHSE, $whse, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByCustpo($custpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_CUSTPO, $custpo, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByCustref($custref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_CUSTREF, $custref, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByHasnotes($hasnotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasnotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_HASNOTES, $hasnotes, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByError($error = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($error)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ERROR, $error, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByErrormsg($errormsg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($errormsg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ERRORMSG, $errormsg, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySubtotal($subtotal = null, $comparison = null)
    {
        if (is_array($subtotal)) {
            $useMinMax = false;
            if (isset($subtotal['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_SUBTOTAL, $subtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotal['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_SUBTOTAL, $subtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SUBTOTAL, $subtotal, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterBySalestax($salestax = null, $comparison = null)
    {
        if (is_array($salestax)) {
            $useMinMax = false;
            if (isset($salestax['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_SALESTAX, $salestax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salestax['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_SALESTAX, $salestax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_SALESTAX, $salestax, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByFreight($freight = null, $comparison = null)
    {
        if (is_array($freight)) {
            $useMinMax = false;
            if (isset($freight['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_FREIGHT, $freight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freight['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_FREIGHT, $freight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_FREIGHT, $freight, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByMisccost($misccost = null, $comparison = null)
    {
        if (is_array($misccost)) {
            $useMinMax = false;
            if (isset($misccost['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_MISCCOST, $misccost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($misccost['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_MISCCOST, $misccost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_MISCCOST, $misccost, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByOrdertotal($ordertotal = null, $comparison = null)
    {
        if (is_array($ordertotal)) {
            $useMinMax = false;
            if (isset($ordertotal['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_ORDERTOTAL, $ordertotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordertotal['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_ORDERTOTAL, $ordertotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ORDERTOTAL, $ordertotal, $comparison);
    }

    /**
     * Filter the query on the cost_total column
     *
     * Example usage:
     * <code>
     * $query->filterByCostTotal(1234); // WHERE cost_total = 1234
     * $query->filterByCostTotal(array(12, 34)); // WHERE cost_total IN (12, 34)
     * $query->filterByCostTotal(array('min' => 12)); // WHERE cost_total > 12
     * </code>
     *
     * @param     mixed $costTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByCostTotal($costTotal = null, $comparison = null)
    {
        if (is_array($costTotal)) {
            $useMinMax = false;
            if (isset($costTotal['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_COST_TOTAL, $costTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($costTotal['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_COST_TOTAL, $costTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_COST_TOTAL, $costTotal, $comparison);
    }

    /**
     * Filter the query on the margin_amt column
     *
     * Example usage:
     * <code>
     * $query->filterByMarginAmt('fooValue');   // WHERE margin_amt = 'fooValue'
     * $query->filterByMarginAmt('%fooValue%', Criteria::LIKE); // WHERE margin_amt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $marginAmt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByMarginAmt($marginAmt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($marginAmt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_MARGIN_AMT, $marginAmt, $comparison);
    }

    /**
     * Filter the query on the margin_pct column
     *
     * Example usage:
     * <code>
     * $query->filterByMarginPct('fooValue');   // WHERE margin_pct = 'fooValue'
     * $query->filterByMarginPct('%fooValue%', Criteria::LIKE); // WHERE margin_pct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $marginPct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByMarginPct($marginPct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($marginPct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_MARGIN_PCT, $marginPct, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildQuote $quote Object to remove from the list of results
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function prune($quote = null)
    {
        if ($quote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(QuoteTableMap::COL_SESSIONID), $quote->getSessionid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(QuoteTableMap::COL_RECNO), $quote->getRecno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the quothed table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QuoteTableMap::clearInstancePool();
            QuoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(QuoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            QuoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            QuoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // QuoteQuery
