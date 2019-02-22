<?php

namespace Base;

use \SalesHistory as ChildSalesHistory;
use \SalesHistoryQuery as ChildSalesHistoryQuery;
use \Exception;
use \PDO;
use Map\SalesHistoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'saleshist' table.
 *
 *
 *
 * @method     ChildSalesHistoryQuery orderByOrdernumber($order = Criteria::ASC) Order by the ordernumber column
 * @method     ChildSalesHistoryQuery orderByCustid($order = Criteria::ASC) Order by the custid column
 * @method     ChildSalesHistoryQuery orderByShiptoid($order = Criteria::ASC) Order by the shiptoid column
 * @method     ChildSalesHistoryQuery orderByCustname($order = Criteria::ASC) Order by the custname column
 * @method     ChildSalesHistoryQuery orderByCustpo($order = Criteria::ASC) Order by the custpo column
 * @method     ChildSalesHistoryQuery orderByOrderDate($order = Criteria::ASC) Order by the order_date column
 * @method     ChildSalesHistoryQuery orderByInvoiceDate($order = Criteria::ASC) Order by the invoice_date column
 * @method     ChildSalesHistoryQuery orderBySalesperson1($order = Criteria::ASC) Order by the salesperson_1 column
 * @method     ChildSalesHistoryQuery orderBySp1login($order = Criteria::ASC) Order by the sp1login column
 * @method     ChildSalesHistoryQuery orderByHasTracking($order = Criteria::ASC) Order by the has_tracking column
 * @method     ChildSalesHistoryQuery orderBySubtotalNontax($order = Criteria::ASC) Order by the subtotal_nontax column
 * @method     ChildSalesHistoryQuery orderByTotalTax($order = Criteria::ASC) Order by the total_tax column
 * @method     ChildSalesHistoryQuery orderByTotalFreight($order = Criteria::ASC) Order by the total_freight column
 * @method     ChildSalesHistoryQuery orderByTotalMisc($order = Criteria::ASC) Order by the total_misc column
 * @method     ChildSalesHistoryQuery orderByTotalOrder($order = Criteria::ASC) Order by the total_order column
 * @method     ChildSalesHistoryQuery orderByHasDocuments($order = Criteria::ASC) Order by the has_documents column
 * @method     ChildSalesHistoryQuery orderByHasNotes($order = Criteria::ASC) Order by the has_notes column
 * @method     ChildSalesHistoryQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildSalesHistoryQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildSalesHistoryQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesHistoryQuery groupByOrdernumber() Group by the ordernumber column
 * @method     ChildSalesHistoryQuery groupByCustid() Group by the custid column
 * @method     ChildSalesHistoryQuery groupByShiptoid() Group by the shiptoid column
 * @method     ChildSalesHistoryQuery groupByCustname() Group by the custname column
 * @method     ChildSalesHistoryQuery groupByCustpo() Group by the custpo column
 * @method     ChildSalesHistoryQuery groupByOrderDate() Group by the order_date column
 * @method     ChildSalesHistoryQuery groupByInvoiceDate() Group by the invoice_date column
 * @method     ChildSalesHistoryQuery groupBySalesperson1() Group by the salesperson_1 column
 * @method     ChildSalesHistoryQuery groupBySp1login() Group by the sp1login column
 * @method     ChildSalesHistoryQuery groupByHasTracking() Group by the has_tracking column
 * @method     ChildSalesHistoryQuery groupBySubtotalNontax() Group by the subtotal_nontax column
 * @method     ChildSalesHistoryQuery groupByTotalTax() Group by the total_tax column
 * @method     ChildSalesHistoryQuery groupByTotalFreight() Group by the total_freight column
 * @method     ChildSalesHistoryQuery groupByTotalMisc() Group by the total_misc column
 * @method     ChildSalesHistoryQuery groupByTotalOrder() Group by the total_order column
 * @method     ChildSalesHistoryQuery groupByHasDocuments() Group by the has_documents column
 * @method     ChildSalesHistoryQuery groupByHasNotes() Group by the has_notes column
 * @method     ChildSalesHistoryQuery groupByDate() Group by the date column
 * @method     ChildSalesHistoryQuery groupByTime() Group by the time column
 * @method     ChildSalesHistoryQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesHistoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesHistoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesHistoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesHistory findOne(ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query
 * @method     ChildSalesHistory findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query, or a new ChildSalesHistory object populated from the query conditions when no match is found
 *
 * @method     ChildSalesHistory findOneByOrdernumber(string $ordernumber) Return the first ChildSalesHistory filtered by the ordernumber column
 * @method     ChildSalesHistory findOneByCustid(string $custid) Return the first ChildSalesHistory filtered by the custid column
 * @method     ChildSalesHistory findOneByShiptoid(string $shiptoid) Return the first ChildSalesHistory filtered by the shiptoid column
 * @method     ChildSalesHistory findOneByCustname(string $custname) Return the first ChildSalesHistory filtered by the custname column
 * @method     ChildSalesHistory findOneByCustpo(string $custpo) Return the first ChildSalesHistory filtered by the custpo column
 * @method     ChildSalesHistory findOneByOrderDate(int $order_date) Return the first ChildSalesHistory filtered by the order_date column
 * @method     ChildSalesHistory findOneByInvoiceDate(int $invoice_date) Return the first ChildSalesHistory filtered by the invoice_date column
 * @method     ChildSalesHistory findOneBySalesperson1(string $salesperson_1) Return the first ChildSalesHistory filtered by the salesperson_1 column
 * @method     ChildSalesHistory findOneBySp1login(string $sp1login) Return the first ChildSalesHistory filtered by the sp1login column
 * @method     ChildSalesHistory findOneByHasTracking(string $has_tracking) Return the first ChildSalesHistory filtered by the has_tracking column
 * @method     ChildSalesHistory findOneBySubtotalNontax(string $subtotal_nontax) Return the first ChildSalesHistory filtered by the subtotal_nontax column
 * @method     ChildSalesHistory findOneByTotalTax(string $total_tax) Return the first ChildSalesHistory filtered by the total_tax column
 * @method     ChildSalesHistory findOneByTotalFreight(string $total_freight) Return the first ChildSalesHistory filtered by the total_freight column
 * @method     ChildSalesHistory findOneByTotalMisc(string $total_misc) Return the first ChildSalesHistory filtered by the total_misc column
 * @method     ChildSalesHistory findOneByTotalOrder(string $total_order) Return the first ChildSalesHistory filtered by the total_order column
 * @method     ChildSalesHistory findOneByHasDocuments(string $has_documents) Return the first ChildSalesHistory filtered by the has_documents column
 * @method     ChildSalesHistory findOneByHasNotes(string $has_notes) Return the first ChildSalesHistory filtered by the has_notes column
 * @method     ChildSalesHistory findOneByDate(int $date) Return the first ChildSalesHistory filtered by the date column
 * @method     ChildSalesHistory findOneByTime(int $time) Return the first ChildSalesHistory filtered by the time column
 * @method     ChildSalesHistory findOneByDummy(string $dummy) Return the first ChildSalesHistory filtered by the dummy column *

 * @method     ChildSalesHistory requirePk($key, ConnectionInterface $con = null) Return the ChildSalesHistory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOne(ConnectionInterface $con = null) Return the first ChildSalesHistory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistory requireOneByOrdernumber(string $ordernumber) Return the first ChildSalesHistory filtered by the ordernumber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByCustid(string $custid) Return the first ChildSalesHistory filtered by the custid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByShiptoid(string $shiptoid) Return the first ChildSalesHistory filtered by the shiptoid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByCustname(string $custname) Return the first ChildSalesHistory filtered by the custname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByCustpo(string $custpo) Return the first ChildSalesHistory filtered by the custpo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByOrderDate(int $order_date) Return the first ChildSalesHistory filtered by the order_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByInvoiceDate(int $invoice_date) Return the first ChildSalesHistory filtered by the invoice_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneBySalesperson1(string $salesperson_1) Return the first ChildSalesHistory filtered by the salesperson_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneBySp1login(string $sp1login) Return the first ChildSalesHistory filtered by the sp1login column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByHasTracking(string $has_tracking) Return the first ChildSalesHistory filtered by the has_tracking column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneBySubtotalNontax(string $subtotal_nontax) Return the first ChildSalesHistory filtered by the subtotal_nontax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByTotalTax(string $total_tax) Return the first ChildSalesHistory filtered by the total_tax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByTotalFreight(string $total_freight) Return the first ChildSalesHistory filtered by the total_freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByTotalMisc(string $total_misc) Return the first ChildSalesHistory filtered by the total_misc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByTotalOrder(string $total_order) Return the first ChildSalesHistory filtered by the total_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByHasDocuments(string $has_documents) Return the first ChildSalesHistory filtered by the has_documents column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByHasNotes(string $has_notes) Return the first ChildSalesHistory filtered by the has_notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByDate(int $date) Return the first ChildSalesHistory filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByTime(int $time) Return the first ChildSalesHistory filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistory requireOneByDummy(string $dummy) Return the first ChildSalesHistory filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistory[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesHistory objects based on current ModelCriteria
 * @method     ChildSalesHistory[]|ObjectCollection findByOrdernumber(string $ordernumber) Return ChildSalesHistory objects filtered by the ordernumber column
 * @method     ChildSalesHistory[]|ObjectCollection findByCustid(string $custid) Return ChildSalesHistory objects filtered by the custid column
 * @method     ChildSalesHistory[]|ObjectCollection findByShiptoid(string $shiptoid) Return ChildSalesHistory objects filtered by the shiptoid column
 * @method     ChildSalesHistory[]|ObjectCollection findByCustname(string $custname) Return ChildSalesHistory objects filtered by the custname column
 * @method     ChildSalesHistory[]|ObjectCollection findByCustpo(string $custpo) Return ChildSalesHistory objects filtered by the custpo column
 * @method     ChildSalesHistory[]|ObjectCollection findByOrderDate(int $order_date) Return ChildSalesHistory objects filtered by the order_date column
 * @method     ChildSalesHistory[]|ObjectCollection findByInvoiceDate(int $invoice_date) Return ChildSalesHistory objects filtered by the invoice_date column
 * @method     ChildSalesHistory[]|ObjectCollection findBySalesperson1(string $salesperson_1) Return ChildSalesHistory objects filtered by the salesperson_1 column
 * @method     ChildSalesHistory[]|ObjectCollection findBySp1login(string $sp1login) Return ChildSalesHistory objects filtered by the sp1login column
 * @method     ChildSalesHistory[]|ObjectCollection findByHasTracking(string $has_tracking) Return ChildSalesHistory objects filtered by the has_tracking column
 * @method     ChildSalesHistory[]|ObjectCollection findBySubtotalNontax(string $subtotal_nontax) Return ChildSalesHistory objects filtered by the subtotal_nontax column
 * @method     ChildSalesHistory[]|ObjectCollection findByTotalTax(string $total_tax) Return ChildSalesHistory objects filtered by the total_tax column
 * @method     ChildSalesHistory[]|ObjectCollection findByTotalFreight(string $total_freight) Return ChildSalesHistory objects filtered by the total_freight column
 * @method     ChildSalesHistory[]|ObjectCollection findByTotalMisc(string $total_misc) Return ChildSalesHistory objects filtered by the total_misc column
 * @method     ChildSalesHistory[]|ObjectCollection findByTotalOrder(string $total_order) Return ChildSalesHistory objects filtered by the total_order column
 * @method     ChildSalesHistory[]|ObjectCollection findByHasDocuments(string $has_documents) Return ChildSalesHistory objects filtered by the has_documents column
 * @method     ChildSalesHistory[]|ObjectCollection findByHasNotes(string $has_notes) Return ChildSalesHistory objects filtered by the has_notes column
 * @method     ChildSalesHistory[]|ObjectCollection findByDate(int $date) Return ChildSalesHistory objects filtered by the date column
 * @method     ChildSalesHistory[]|ObjectCollection findByTime(int $time) Return ChildSalesHistory objects filtered by the time column
 * @method     ChildSalesHistory[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesHistory objects filtered by the dummy column
 * @method     ChildSalesHistory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesHistoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesHistoryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesHistory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesHistoryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalesHistoryQuery) {
            return $criteria;
        }
        $query = new ChildSalesHistoryQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesHistory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesHistoryTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSalesHistory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ordernumber, custid, shiptoid, custname, custpo, order_date, invoice_date, salesperson_1, sp1login, has_tracking, subtotal_nontax, total_tax, total_freight, total_misc, total_order, has_documents, has_notes, date, time, dummy FROM saleshist WHERE ordernumber = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSalesHistory $obj */
            $obj = new ChildSalesHistory();
            $obj->hydrate($row);
            SalesHistoryTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSalesHistory|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ORDERNUMBER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ORDERNUMBER, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ordernumber column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdernumber('fooValue');   // WHERE ordernumber = 'fooValue'
     * $query->filterByOrdernumber('%fooValue%', Criteria::LIKE); // WHERE ordernumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordernumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOrdernumber($ordernumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordernumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ORDERNUMBER, $ordernumber, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByCustid($custid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_CUSTID, $custid, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByShiptoid($shiptoid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_SHIPTOID, $shiptoid, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByCustname($custname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_CUSTNAME, $custname, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByCustpo($custpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_CUSTPO, $custpo, $comparison);
    }

    /**
     * Filter the query on the order_date column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderDate(1234); // WHERE order_date = 1234
     * $query->filterByOrderDate(array(12, 34)); // WHERE order_date IN (12, 34)
     * $query->filterByOrderDate(array('min' => 12)); // WHERE order_date > 12
     * </code>
     *
     * @param     mixed $orderDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByOrderDate($orderDate = null, $comparison = null)
    {
        if (is_array($orderDate)) {
            $useMinMax = false;
            if (isset($orderDate['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_ORDER_DATE, $orderDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderDate['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_ORDER_DATE, $orderDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_ORDER_DATE, $orderDate, $comparison);
    }

    /**
     * Filter the query on the invoice_date column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoiceDate(1234); // WHERE invoice_date = 1234
     * $query->filterByInvoiceDate(array(12, 34)); // WHERE invoice_date IN (12, 34)
     * $query->filterByInvoiceDate(array('min' => 12)); // WHERE invoice_date > 12
     * </code>
     *
     * @param     mixed $invoiceDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByInvoiceDate($invoiceDate = null, $comparison = null)
    {
        if (is_array($invoiceDate)) {
            $useMinMax = false;
            if (isset($invoiceDate['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_INVOICE_DATE, $invoiceDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoiceDate['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_INVOICE_DATE, $invoiceDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_INVOICE_DATE, $invoiceDate, $comparison);
    }

    /**
     * Filter the query on the salesperson_1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySalesperson1('fooValue');   // WHERE salesperson_1 = 'fooValue'
     * $query->filterBySalesperson1('%fooValue%', Criteria::LIKE); // WHERE salesperson_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salesperson1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterBySalesperson1($salesperson1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salesperson1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_SALESPERSON_1, $salesperson1, $comparison);
    }

    /**
     * Filter the query on the sp1login column
     *
     * Example usage:
     * <code>
     * $query->filterBySp1login('fooValue');   // WHERE sp1login = 'fooValue'
     * $query->filterBySp1login('%fooValue%', Criteria::LIKE); // WHERE sp1login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp1login The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterBySp1login($sp1login = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp1login)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_SP1LOGIN, $sp1login, $comparison);
    }

    /**
     * Filter the query on the has_tracking column
     *
     * Example usage:
     * <code>
     * $query->filterByHasTracking('fooValue');   // WHERE has_tracking = 'fooValue'
     * $query->filterByHasTracking('%fooValue%', Criteria::LIKE); // WHERE has_tracking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hasTracking The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByHasTracking($hasTracking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasTracking)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_HAS_TRACKING, $hasTracking, $comparison);
    }

    /**
     * Filter the query on the subtotal_nontax column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotalNontax(1234); // WHERE subtotal_nontax = 1234
     * $query->filterBySubtotalNontax(array(12, 34)); // WHERE subtotal_nontax IN (12, 34)
     * $query->filterBySubtotalNontax(array('min' => 12)); // WHERE subtotal_nontax > 12
     * </code>
     *
     * @param     mixed $subtotalNontax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterBySubtotalNontax($subtotalNontax = null, $comparison = null)
    {
        if (is_array($subtotalNontax)) {
            $useMinMax = false;
            if (isset($subtotalNontax['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_SUBTOTAL_NONTAX, $subtotalNontax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotalNontax['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_SUBTOTAL_NONTAX, $subtotalNontax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_SUBTOTAL_NONTAX, $subtotalNontax, $comparison);
    }

    /**
     * Filter the query on the total_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalTax(1234); // WHERE total_tax = 1234
     * $query->filterByTotalTax(array(12, 34)); // WHERE total_tax IN (12, 34)
     * $query->filterByTotalTax(array('min' => 12)); // WHERE total_tax > 12
     * </code>
     *
     * @param     mixed $totalTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByTotalTax($totalTax = null, $comparison = null)
    {
        if (is_array($totalTax)) {
            $useMinMax = false;
            if (isset($totalTax['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_TAX, $totalTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalTax['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_TAX, $totalTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_TAX, $totalTax, $comparison);
    }

    /**
     * Filter the query on the total_freight column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalFreight(1234); // WHERE total_freight = 1234
     * $query->filterByTotalFreight(array(12, 34)); // WHERE total_freight IN (12, 34)
     * $query->filterByTotalFreight(array('min' => 12)); // WHERE total_freight > 12
     * </code>
     *
     * @param     mixed $totalFreight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByTotalFreight($totalFreight = null, $comparison = null)
    {
        if (is_array($totalFreight)) {
            $useMinMax = false;
            if (isset($totalFreight['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_FREIGHT, $totalFreight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalFreight['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_FREIGHT, $totalFreight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_FREIGHT, $totalFreight, $comparison);
    }

    /**
     * Filter the query on the total_misc column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalMisc(1234); // WHERE total_misc = 1234
     * $query->filterByTotalMisc(array(12, 34)); // WHERE total_misc IN (12, 34)
     * $query->filterByTotalMisc(array('min' => 12)); // WHERE total_misc > 12
     * </code>
     *
     * @param     mixed $totalMisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByTotalMisc($totalMisc = null, $comparison = null)
    {
        if (is_array($totalMisc)) {
            $useMinMax = false;
            if (isset($totalMisc['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_MISC, $totalMisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalMisc['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_MISC, $totalMisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_MISC, $totalMisc, $comparison);
    }

    /**
     * Filter the query on the total_order column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalOrder(1234); // WHERE total_order = 1234
     * $query->filterByTotalOrder(array(12, 34)); // WHERE total_order IN (12, 34)
     * $query->filterByTotalOrder(array('min' => 12)); // WHERE total_order > 12
     * </code>
     *
     * @param     mixed $totalOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByTotalOrder($totalOrder = null, $comparison = null)
    {
        if (is_array($totalOrder)) {
            $useMinMax = false;
            if (isset($totalOrder['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_ORDER, $totalOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalOrder['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_ORDER, $totalOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_TOTAL_ORDER, $totalOrder, $comparison);
    }

    /**
     * Filter the query on the has_documents column
     *
     * Example usage:
     * <code>
     * $query->filterByHasDocuments('fooValue');   // WHERE has_documents = 'fooValue'
     * $query->filterByHasDocuments('%fooValue%', Criteria::LIKE); // WHERE has_documents LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hasDocuments The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByHasDocuments($hasDocuments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasDocuments)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_HAS_DOCUMENTS, $hasDocuments, $comparison);
    }

    /**
     * Filter the query on the has_notes column
     *
     * Example usage:
     * <code>
     * $query->filterByHasNotes('fooValue');   // WHERE has_notes = 'fooValue'
     * $query->filterByHasNotes('%fooValue%', Criteria::LIKE); // WHERE has_notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hasNotes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByHasNotes($hasNotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasNotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_HAS_NOTES, $hasNotes, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(SalesHistoryTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_TIME, $time, $comparison);
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
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesHistoryTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalesHistory $salesHistory Object to remove from the list of results
     *
     * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
     */
    public function prune($salesHistory = null)
    {
        if ($salesHistory) {
            $this->addUsingAlias(SalesHistoryTableMap::COL_ORDERNUMBER, $salesHistory->getOrdernumber(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the saleshist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesHistoryTableMap::clearInstancePool();
            SalesHistoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesHistoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesHistoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesHistoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalesHistoryQuery
