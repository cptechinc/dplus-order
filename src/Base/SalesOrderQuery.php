<?php

namespace Base;

use \SalesOrder as ChildSalesOrder;
use \SalesOrderQuery as ChildSalesOrderQuery;
use \Exception;
use \PDO;
use Map\SalesOrderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'oe_head' table.
 *
 *
 *
 * @method     ChildSalesOrderQuery orderByOrdernumber($order = Criteria::ASC) Order by the ordernumber column
 * @method     ChildSalesOrderQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildSalesOrderQuery orderByHoldstatus($order = Criteria::ASC) Order by the holdstatus column
 * @method     ChildSalesOrderQuery orderByCustid($order = Criteria::ASC) Order by the custid column
 * @method     ChildSalesOrderQuery orderByShiptoid($order = Criteria::ASC) Order by the shiptoid column
 * @method     ChildSalesOrderQuery orderByShiptoName($order = Criteria::ASC) Order by the shipto_name column
 * @method     ChildSalesOrderQuery orderByShiptoAddress1($order = Criteria::ASC) Order by the shipto_address1 column
 * @method     ChildSalesOrderQuery orderByShiptoAddress2($order = Criteria::ASC) Order by the shipto_address2 column
 * @method     ChildSalesOrderQuery orderByShiptoAddress3($order = Criteria::ASC) Order by the shipto_address3 column
 * @method     ChildSalesOrderQuery orderByShiptoAddress4($order = Criteria::ASC) Order by the shipto_address4 column
 * @method     ChildSalesOrderQuery orderByShiptoCity($order = Criteria::ASC) Order by the shipto_city column
 * @method     ChildSalesOrderQuery orderByShiptoState($order = Criteria::ASC) Order by the shipto_state column
 * @method     ChildSalesOrderQuery orderByShiptoZip($order = Criteria::ASC) Order by the shipto_zip column
 * @method     ChildSalesOrderQuery orderByCustpo($order = Criteria::ASC) Order by the custpo column
 * @method     ChildSalesOrderQuery orderByOrderDate($order = Criteria::ASC) Order by the order_date column
 * @method     ChildSalesOrderQuery orderByTermcode($order = Criteria::ASC) Order by the termcode column
 * @method     ChildSalesOrderQuery orderByShipviacode($order = Criteria::ASC) Order by the shipviacode column
 * @method     ChildSalesOrderQuery orderByInvoiceNumber($order = Criteria::ASC) Order by the invoice_number column
 * @method     ChildSalesOrderQuery orderByInvoiceDate($order = Criteria::ASC) Order by the invoice_date column
 * @method     ChildSalesOrderQuery orderByGenledgerPeriod($order = Criteria::ASC) Order by the genledger_period column
 * @method     ChildSalesOrderQuery orderBySalesperson1($order = Criteria::ASC) Order by the salesperson_1 column
 * @method     ChildSalesOrderQuery orderBySalesperson1pct($order = Criteria::ASC) Order by the salesperson_1pct column
 * @method     ChildSalesOrderQuery orderBySalesperson2($order = Criteria::ASC) Order by the salesperson_2 column
 * @method     ChildSalesOrderQuery orderBySalesperson2pct($order = Criteria::ASC) Order by the salesperson_2pct column
 * @method     ChildSalesOrderQuery orderBySalesperson3($order = Criteria::ASC) Order by the salesperson_3 column
 * @method     ChildSalesOrderQuery orderBySalesperson3pct($order = Criteria::ASC) Order by the salesperson_3pct column
 * @method     ChildSalesOrderQuery orderByContractNbr($order = Criteria::ASC) Order by the contract_nbr column
 * @method     ChildSalesOrderQuery orderByBatchNbr($order = Criteria::ASC) Order by the batch_nbr column
 * @method     ChildSalesOrderQuery orderByDropreleasehold($order = Criteria::ASC) Order by the dropreleasehold column
 * @method     ChildSalesOrderQuery orderBySubtotalNontax($order = Criteria::ASC) Order by the subtotal_nontax column
 * @method     ChildSalesOrderQuery orderBySubtotalTax($order = Criteria::ASC) Order by the subtotal_tax column
 * @method     ChildSalesOrderQuery orderByTotalTax($order = Criteria::ASC) Order by the total_tax column
 * @method     ChildSalesOrderQuery orderByTotalFreight($order = Criteria::ASC) Order by the total_freight column
 * @method     ChildSalesOrderQuery orderByTotalMisc($order = Criteria::ASC) Order by the total_misc column
 * @method     ChildSalesOrderQuery orderByTotalOrder($order = Criteria::ASC) Order by the total_order column
 * @method     ChildSalesOrderQuery orderByTotalCost($order = Criteria::ASC) Order by the total_cost column
 * @method     ChildSalesOrderQuery orderByLock($order = Criteria::ASC) Order by the lock column
 * @method     ChildSalesOrderQuery orderByTakenDate($order = Criteria::ASC) Order by the taken_date column
 * @method     ChildSalesOrderQuery orderByTakenTime($order = Criteria::ASC) Order by the taken_time column
 * @method     ChildSalesOrderQuery orderByPickDate($order = Criteria::ASC) Order by the pick_date column
 * @method     ChildSalesOrderQuery orderByPickTime($order = Criteria::ASC) Order by the pick_time column
 * @method     ChildSalesOrderQuery orderByPackDate($order = Criteria::ASC) Order by the pack_date column
 * @method     ChildSalesOrderQuery orderByPackTime($order = Criteria::ASC) Order by the pack_time column
 * @method     ChildSalesOrderQuery orderByVerifyDate($order = Criteria::ASC) Order by the verify_date column
 * @method     ChildSalesOrderQuery orderByVerifyTime($order = Criteria::ASC) Order by the verify_time column
 * @method     ChildSalesOrderQuery orderByCreditmemo($order = Criteria::ASC) Order by the creditmemo column
 * @method     ChildSalesOrderQuery orderByBooked($order = Criteria::ASC) Order by the booked column
 * @method     ChildSalesOrderQuery orderByOriginalWhse($order = Criteria::ASC) Order by the original_whse column
 * @method     ChildSalesOrderQuery orderByBilltoState($order = Criteria::ASC) Order by the billto_state column
 * @method     ChildSalesOrderQuery orderByShipcomplete($order = Criteria::ASC) Order by the shipcomplete column
 * @method     ChildSalesOrderQuery orderByCwoFlag($order = Criteria::ASC) Order by the cwo_flag column
 * @method     ChildSalesOrderQuery orderByDivision($order = Criteria::ASC) Order by the division column
 * @method     ChildSalesOrderQuery orderByTakenCode($order = Criteria::ASC) Order by the taken_code column
 * @method     ChildSalesOrderQuery orderByPackCode($order = Criteria::ASC) Order by the pack_code column
 * @method     ChildSalesOrderQuery orderByPickCode($order = Criteria::ASC) Order by the pick_code column
 * @method     ChildSalesOrderQuery orderByVerifyCode($order = Criteria::ASC) Order by the verify_code column
 * @method     ChildSalesOrderQuery orderByTotalDiscount($order = Criteria::ASC) Order by the total_discount column
 * @method     ChildSalesOrderQuery orderByEdiRefererencenbr($order = Criteria::ASC) Order by the edi_refererencenbr column
 * @method     ChildSalesOrderQuery orderByUserCode1($order = Criteria::ASC) Order by the user_code1 column
 * @method     ChildSalesOrderQuery orderByUserCode2($order = Criteria::ASC) Order by the user_code2 column
 * @method     ChildSalesOrderQuery orderByUserCode3($order = Criteria::ASC) Order by the user_code3 column
 * @method     ChildSalesOrderQuery orderByUserCode4($order = Criteria::ASC) Order by the user_code4 column
 * @method     ChildSalesOrderQuery orderByExchangeCountry($order = Criteria::ASC) Order by the exchange_country column
 * @method     ChildSalesOrderQuery orderByExchangeRate($order = Criteria::ASC) Order by the exchange_rate column
 * @method     ChildSalesOrderQuery orderByWeightTotal($order = Criteria::ASC) Order by the weight_total column
 * @method     ChildSalesOrderQuery orderByWeightOverride($order = Criteria::ASC) Order by the weight_override column
 * @method     ChildSalesOrderQuery orderByBoxCount($order = Criteria::ASC) Order by the box_count column
 * @method     ChildSalesOrderQuery orderByRequestDate($order = Criteria::ASC) Order by the request_date column
 * @method     ChildSalesOrderQuery orderByCancelDate($order = Criteria::ASC) Order by the cancel_date column
 * @method     ChildSalesOrderQuery orderByLockedby($order = Criteria::ASC) Order by the lockedby column
 * @method     ChildSalesOrderQuery orderByReleaseNumber($order = Criteria::ASC) Order by the release_number column
 * @method     ChildSalesOrderQuery orderByWhse($order = Criteria::ASC) Order by the whse column
 * @method     ChildSalesOrderQuery orderByBackorderDate($order = Criteria::ASC) Order by the backorder_date column
 * @method     ChildSalesOrderQuery orderByDeptcode($order = Criteria::ASC) Order by the deptcode column
 * @method     ChildSalesOrderQuery orderByFreightInEntered($order = Criteria::ASC) Order by the freight_in_entered column
 * @method     ChildSalesOrderQuery orderByDropshipEntered($order = Criteria::ASC) Order by the dropship_entered column
 * @method     ChildSalesOrderQuery orderByErFlag($order = Criteria::ASC) Order by the er_flag column
 * @method     ChildSalesOrderQuery orderByFreightIn($order = Criteria::ASC) Order by the freight_in column
 * @method     ChildSalesOrderQuery orderByDropship($order = Criteria::ASC) Order by the dropship column
 * @method     ChildSalesOrderQuery orderByMinorder($order = Criteria::ASC) Order by the minorder column
 * @method     ChildSalesOrderQuery orderByContractTerms($order = Criteria::ASC) Order by the contract_terms column
 * @method     ChildSalesOrderQuery orderByDropshipBilled($order = Criteria::ASC) Order by the dropship_billed column
 * @method     ChildSalesOrderQuery orderByOrderType($order = Criteria::ASC) Order by the order_type column
 * @method     ChildSalesOrderQuery orderByTrackingEdinumber($order = Criteria::ASC) Order by the tracking_edinumber column
 * @method     ChildSalesOrderQuery orderBySource($order = Criteria::ASC) Order by the source column
 * @method     ChildSalesOrderQuery orderByPickFormat($order = Criteria::ASC) Order by the pick_format column
 * @method     ChildSalesOrderQuery orderByInvoiceFormat($order = Criteria::ASC) Order by the invoice_format column
 * @method     ChildSalesOrderQuery orderByCashAmount($order = Criteria::ASC) Order by the cash_amount column
 * @method     ChildSalesOrderQuery orderByCheckAmount($order = Criteria::ASC) Order by the check_amount column
 * @method     ChildSalesOrderQuery orderByCheckNumber($order = Criteria::ASC) Order by the check_number column
 * @method     ChildSalesOrderQuery orderByDepositAmount($order = Criteria::ASC) Order by the deposit_amount column
 * @method     ChildSalesOrderQuery orderByDepositNumber($order = Criteria::ASC) Order by the deposit_number column
 * @method     ChildSalesOrderQuery orderByOriginalSubtotalTax($order = Criteria::ASC) Order by the original_subtotal_tax column
 * @method     ChildSalesOrderQuery orderByOriginalSubtotalNontax($order = Criteria::ASC) Order by the original_subtotal_nontax column
 * @method     ChildSalesOrderQuery orderByOriginalTotalTax($order = Criteria::ASC) Order by the original_total_tax column
 * @method     ChildSalesOrderQuery orderByOriginalTotal($order = Criteria::ASC) Order by the original_total column
 * @method     ChildSalesOrderQuery orderByPickPrintdate($order = Criteria::ASC) Order by the pick_printdate column
 * @method     ChildSalesOrderQuery orderByPickPrinttime($order = Criteria::ASC) Order by the pick_printtime column
 * @method     ChildSalesOrderQuery orderByContact($order = Criteria::ASC) Order by the contact column
 * @method     ChildSalesOrderQuery orderByPhoneIntl($order = Criteria::ASC) Order by the phone_intl column
 * @method     ChildSalesOrderQuery orderByPhoneAccesscode($order = Criteria::ASC) Order by the phone_accesscode column
 * @method     ChildSalesOrderQuery orderByPhoneCountrycode($order = Criteria::ASC) Order by the phone_countrycode column
 * @method     ChildSalesOrderQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ChildSalesOrderQuery orderByPhoneExt($order = Criteria::ASC) Order by the phone_ext column
 * @method     ChildSalesOrderQuery orderByFaxIntl($order = Criteria::ASC) Order by the fax_intl column
 * @method     ChildSalesOrderQuery orderByFaxAccesscode($order = Criteria::ASC) Order by the fax_accesscode column
 * @method     ChildSalesOrderQuery orderByFaxCountrycode($order = Criteria::ASC) Order by the fax_countrycode column
 * @method     ChildSalesOrderQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     ChildSalesOrderQuery orderByShipAccount($order = Criteria::ASC) Order by the ship_account column
 * @method     ChildSalesOrderQuery orderByChangeDue($order = Criteria::ASC) Order by the change_due column
 * @method     ChildSalesOrderQuery orderByDiscountAdditional($order = Criteria::ASC) Order by the discount_additional column
 * @method     ChildSalesOrderQuery orderByAllShip($order = Criteria::ASC) Order by the all_ship column
 * @method     ChildSalesOrderQuery orderByCreditApplied($order = Criteria::ASC) Order by the credit_applied column
 * @method     ChildSalesOrderQuery orderByInvoicePrintdate($order = Criteria::ASC) Order by the invoice_printdate column
 * @method     ChildSalesOrderQuery orderByInvoicePrinttime($order = Criteria::ASC) Order by the invoice_printtime column
 * @method     ChildSalesOrderQuery orderByDiscountFreight($order = Criteria::ASC) Order by the discount_freight column
 * @method     ChildSalesOrderQuery orderByShipCompleteoverride($order = Criteria::ASC) Order by the ship_completeoverride column
 * @method     ChildSalesOrderQuery orderByContactEmail($order = Criteria::ASC) Order by the contact_email column
 * @method     ChildSalesOrderQuery orderByManualFreight($order = Criteria::ASC) Order by the manual_freight column
 * @method     ChildSalesOrderQuery orderByInternalFreight($order = Criteria::ASC) Order by the internal_freight column
 * @method     ChildSalesOrderQuery orderByCostFreight($order = Criteria::ASC) Order by the cost_freight column
 * @method     ChildSalesOrderQuery orderByRoute($order = Criteria::ASC) Order by the route column
 * @method     ChildSalesOrderQuery orderByRouteSeq($order = Criteria::ASC) Order by the route_seq column
 * @method     ChildSalesOrderQuery orderByEdi855sent($order = Criteria::ASC) Order by the edi_855sent column
 * @method     ChildSalesOrderQuery orderByFreight3rdparty($order = Criteria::ASC) Order by the freight_3rdparty column
 * @method     ChildSalesOrderQuery orderByFob($order = Criteria::ASC) Order by the fob column
 * @method     ChildSalesOrderQuery orderByConfirmImage($order = Criteria::ASC) Order by the confirm_image column
 * @method     ChildSalesOrderQuery orderByCstkConsign($order = Criteria::ASC) Order by the cstk_consign column
 * @method     ChildSalesOrderQuery orderByManufacturer($order = Criteria::ASC) Order by the manufacturer column
 * @method     ChildSalesOrderQuery orderByPickQueue($order = Criteria::ASC) Order by the pick_queue column
 * @method     ChildSalesOrderQuery orderByArriveDate($order = Criteria::ASC) Order by the arrive_date column
 * @method     ChildSalesOrderQuery orderBySurchargeStatus($order = Criteria::ASC) Order by the surcharge_status column
 * @method     ChildSalesOrderQuery orderByFreightGroup($order = Criteria::ASC) Order by the freight_group column
 * @method     ChildSalesOrderQuery orderByCommOverride($order = Criteria::ASC) Order by the comm_override column
 * @method     ChildSalesOrderQuery orderByChargeSplit($order = Criteria::ASC) Order by the charge_split column
 * @method     ChildSalesOrderQuery orderByCreditcartApproved($order = Criteria::ASC) Order by the creditcart_approved column
 * @method     ChildSalesOrderQuery orderByOriginalOrdernumber($order = Criteria::ASC) Order by the original_ordernumber column
 * @method     ChildSalesOrderQuery orderByHasNotes($order = Criteria::ASC) Order by the has_notes column
 * @method     ChildSalesOrderQuery orderByHasDocuments($order = Criteria::ASC) Order by the has_documents column
 * @method     ChildSalesOrderQuery orderByHasTracking($order = Criteria::ASC) Order by the has_tracking column
 * @method     ChildSalesOrderQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildSalesOrderQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     ChildSalesOrderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesOrderQuery groupByOrdernumber() Group by the ordernumber column
 * @method     ChildSalesOrderQuery groupByStatus() Group by the status column
 * @method     ChildSalesOrderQuery groupByHoldstatus() Group by the holdstatus column
 * @method     ChildSalesOrderQuery groupByCustid() Group by the custid column
 * @method     ChildSalesOrderQuery groupByShiptoid() Group by the shiptoid column
 * @method     ChildSalesOrderQuery groupByShiptoName() Group by the shipto_name column
 * @method     ChildSalesOrderQuery groupByShiptoAddress1() Group by the shipto_address1 column
 * @method     ChildSalesOrderQuery groupByShiptoAddress2() Group by the shipto_address2 column
 * @method     ChildSalesOrderQuery groupByShiptoAddress3() Group by the shipto_address3 column
 * @method     ChildSalesOrderQuery groupByShiptoAddress4() Group by the shipto_address4 column
 * @method     ChildSalesOrderQuery groupByShiptoCity() Group by the shipto_city column
 * @method     ChildSalesOrderQuery groupByShiptoState() Group by the shipto_state column
 * @method     ChildSalesOrderQuery groupByShiptoZip() Group by the shipto_zip column
 * @method     ChildSalesOrderQuery groupByCustpo() Group by the custpo column
 * @method     ChildSalesOrderQuery groupByOrderDate() Group by the order_date column
 * @method     ChildSalesOrderQuery groupByTermcode() Group by the termcode column
 * @method     ChildSalesOrderQuery groupByShipviacode() Group by the shipviacode column
 * @method     ChildSalesOrderQuery groupByInvoiceNumber() Group by the invoice_number column
 * @method     ChildSalesOrderQuery groupByInvoiceDate() Group by the invoice_date column
 * @method     ChildSalesOrderQuery groupByGenledgerPeriod() Group by the genledger_period column
 * @method     ChildSalesOrderQuery groupBySalesperson1() Group by the salesperson_1 column
 * @method     ChildSalesOrderQuery groupBySalesperson1pct() Group by the salesperson_1pct column
 * @method     ChildSalesOrderQuery groupBySalesperson2() Group by the salesperson_2 column
 * @method     ChildSalesOrderQuery groupBySalesperson2pct() Group by the salesperson_2pct column
 * @method     ChildSalesOrderQuery groupBySalesperson3() Group by the salesperson_3 column
 * @method     ChildSalesOrderQuery groupBySalesperson3pct() Group by the salesperson_3pct column
 * @method     ChildSalesOrderQuery groupByContractNbr() Group by the contract_nbr column
 * @method     ChildSalesOrderQuery groupByBatchNbr() Group by the batch_nbr column
 * @method     ChildSalesOrderQuery groupByDropreleasehold() Group by the dropreleasehold column
 * @method     ChildSalesOrderQuery groupBySubtotalNontax() Group by the subtotal_nontax column
 * @method     ChildSalesOrderQuery groupBySubtotalTax() Group by the subtotal_tax column
 * @method     ChildSalesOrderQuery groupByTotalTax() Group by the total_tax column
 * @method     ChildSalesOrderQuery groupByTotalFreight() Group by the total_freight column
 * @method     ChildSalesOrderQuery groupByTotalMisc() Group by the total_misc column
 * @method     ChildSalesOrderQuery groupByTotalOrder() Group by the total_order column
 * @method     ChildSalesOrderQuery groupByTotalCost() Group by the total_cost column
 * @method     ChildSalesOrderQuery groupByLock() Group by the lock column
 * @method     ChildSalesOrderQuery groupByTakenDate() Group by the taken_date column
 * @method     ChildSalesOrderQuery groupByTakenTime() Group by the taken_time column
 * @method     ChildSalesOrderQuery groupByPickDate() Group by the pick_date column
 * @method     ChildSalesOrderQuery groupByPickTime() Group by the pick_time column
 * @method     ChildSalesOrderQuery groupByPackDate() Group by the pack_date column
 * @method     ChildSalesOrderQuery groupByPackTime() Group by the pack_time column
 * @method     ChildSalesOrderQuery groupByVerifyDate() Group by the verify_date column
 * @method     ChildSalesOrderQuery groupByVerifyTime() Group by the verify_time column
 * @method     ChildSalesOrderQuery groupByCreditmemo() Group by the creditmemo column
 * @method     ChildSalesOrderQuery groupByBooked() Group by the booked column
 * @method     ChildSalesOrderQuery groupByOriginalWhse() Group by the original_whse column
 * @method     ChildSalesOrderQuery groupByBilltoState() Group by the billto_state column
 * @method     ChildSalesOrderQuery groupByShipcomplete() Group by the shipcomplete column
 * @method     ChildSalesOrderQuery groupByCwoFlag() Group by the cwo_flag column
 * @method     ChildSalesOrderQuery groupByDivision() Group by the division column
 * @method     ChildSalesOrderQuery groupByTakenCode() Group by the taken_code column
 * @method     ChildSalesOrderQuery groupByPackCode() Group by the pack_code column
 * @method     ChildSalesOrderQuery groupByPickCode() Group by the pick_code column
 * @method     ChildSalesOrderQuery groupByVerifyCode() Group by the verify_code column
 * @method     ChildSalesOrderQuery groupByTotalDiscount() Group by the total_discount column
 * @method     ChildSalesOrderQuery groupByEdiRefererencenbr() Group by the edi_refererencenbr column
 * @method     ChildSalesOrderQuery groupByUserCode1() Group by the user_code1 column
 * @method     ChildSalesOrderQuery groupByUserCode2() Group by the user_code2 column
 * @method     ChildSalesOrderQuery groupByUserCode3() Group by the user_code3 column
 * @method     ChildSalesOrderQuery groupByUserCode4() Group by the user_code4 column
 * @method     ChildSalesOrderQuery groupByExchangeCountry() Group by the exchange_country column
 * @method     ChildSalesOrderQuery groupByExchangeRate() Group by the exchange_rate column
 * @method     ChildSalesOrderQuery groupByWeightTotal() Group by the weight_total column
 * @method     ChildSalesOrderQuery groupByWeightOverride() Group by the weight_override column
 * @method     ChildSalesOrderQuery groupByBoxCount() Group by the box_count column
 * @method     ChildSalesOrderQuery groupByRequestDate() Group by the request_date column
 * @method     ChildSalesOrderQuery groupByCancelDate() Group by the cancel_date column
 * @method     ChildSalesOrderQuery groupByLockedby() Group by the lockedby column
 * @method     ChildSalesOrderQuery groupByReleaseNumber() Group by the release_number column
 * @method     ChildSalesOrderQuery groupByWhse() Group by the whse column
 * @method     ChildSalesOrderQuery groupByBackorderDate() Group by the backorder_date column
 * @method     ChildSalesOrderQuery groupByDeptcode() Group by the deptcode column
 * @method     ChildSalesOrderQuery groupByFreightInEntered() Group by the freight_in_entered column
 * @method     ChildSalesOrderQuery groupByDropshipEntered() Group by the dropship_entered column
 * @method     ChildSalesOrderQuery groupByErFlag() Group by the er_flag column
 * @method     ChildSalesOrderQuery groupByFreightIn() Group by the freight_in column
 * @method     ChildSalesOrderQuery groupByDropship() Group by the dropship column
 * @method     ChildSalesOrderQuery groupByMinorder() Group by the minorder column
 * @method     ChildSalesOrderQuery groupByContractTerms() Group by the contract_terms column
 * @method     ChildSalesOrderQuery groupByDropshipBilled() Group by the dropship_billed column
 * @method     ChildSalesOrderQuery groupByOrderType() Group by the order_type column
 * @method     ChildSalesOrderQuery groupByTrackingEdinumber() Group by the tracking_edinumber column
 * @method     ChildSalesOrderQuery groupBySource() Group by the source column
 * @method     ChildSalesOrderQuery groupByPickFormat() Group by the pick_format column
 * @method     ChildSalesOrderQuery groupByInvoiceFormat() Group by the invoice_format column
 * @method     ChildSalesOrderQuery groupByCashAmount() Group by the cash_amount column
 * @method     ChildSalesOrderQuery groupByCheckAmount() Group by the check_amount column
 * @method     ChildSalesOrderQuery groupByCheckNumber() Group by the check_number column
 * @method     ChildSalesOrderQuery groupByDepositAmount() Group by the deposit_amount column
 * @method     ChildSalesOrderQuery groupByDepositNumber() Group by the deposit_number column
 * @method     ChildSalesOrderQuery groupByOriginalSubtotalTax() Group by the original_subtotal_tax column
 * @method     ChildSalesOrderQuery groupByOriginalSubtotalNontax() Group by the original_subtotal_nontax column
 * @method     ChildSalesOrderQuery groupByOriginalTotalTax() Group by the original_total_tax column
 * @method     ChildSalesOrderQuery groupByOriginalTotal() Group by the original_total column
 * @method     ChildSalesOrderQuery groupByPickPrintdate() Group by the pick_printdate column
 * @method     ChildSalesOrderQuery groupByPickPrinttime() Group by the pick_printtime column
 * @method     ChildSalesOrderQuery groupByContact() Group by the contact column
 * @method     ChildSalesOrderQuery groupByPhoneIntl() Group by the phone_intl column
 * @method     ChildSalesOrderQuery groupByPhoneAccesscode() Group by the phone_accesscode column
 * @method     ChildSalesOrderQuery groupByPhoneCountrycode() Group by the phone_countrycode column
 * @method     ChildSalesOrderQuery groupByPhone() Group by the phone column
 * @method     ChildSalesOrderQuery groupByPhoneExt() Group by the phone_ext column
 * @method     ChildSalesOrderQuery groupByFaxIntl() Group by the fax_intl column
 * @method     ChildSalesOrderQuery groupByFaxAccesscode() Group by the fax_accesscode column
 * @method     ChildSalesOrderQuery groupByFaxCountrycode() Group by the fax_countrycode column
 * @method     ChildSalesOrderQuery groupByFax() Group by the fax column
 * @method     ChildSalesOrderQuery groupByShipAccount() Group by the ship_account column
 * @method     ChildSalesOrderQuery groupByChangeDue() Group by the change_due column
 * @method     ChildSalesOrderQuery groupByDiscountAdditional() Group by the discount_additional column
 * @method     ChildSalesOrderQuery groupByAllShip() Group by the all_ship column
 * @method     ChildSalesOrderQuery groupByCreditApplied() Group by the credit_applied column
 * @method     ChildSalesOrderQuery groupByInvoicePrintdate() Group by the invoice_printdate column
 * @method     ChildSalesOrderQuery groupByInvoicePrinttime() Group by the invoice_printtime column
 * @method     ChildSalesOrderQuery groupByDiscountFreight() Group by the discount_freight column
 * @method     ChildSalesOrderQuery groupByShipCompleteoverride() Group by the ship_completeoverride column
 * @method     ChildSalesOrderQuery groupByContactEmail() Group by the contact_email column
 * @method     ChildSalesOrderQuery groupByManualFreight() Group by the manual_freight column
 * @method     ChildSalesOrderQuery groupByInternalFreight() Group by the internal_freight column
 * @method     ChildSalesOrderQuery groupByCostFreight() Group by the cost_freight column
 * @method     ChildSalesOrderQuery groupByRoute() Group by the route column
 * @method     ChildSalesOrderQuery groupByRouteSeq() Group by the route_seq column
 * @method     ChildSalesOrderQuery groupByEdi855sent() Group by the edi_855sent column
 * @method     ChildSalesOrderQuery groupByFreight3rdparty() Group by the freight_3rdparty column
 * @method     ChildSalesOrderQuery groupByFob() Group by the fob column
 * @method     ChildSalesOrderQuery groupByConfirmImage() Group by the confirm_image column
 * @method     ChildSalesOrderQuery groupByCstkConsign() Group by the cstk_consign column
 * @method     ChildSalesOrderQuery groupByManufacturer() Group by the manufacturer column
 * @method     ChildSalesOrderQuery groupByPickQueue() Group by the pick_queue column
 * @method     ChildSalesOrderQuery groupByArriveDate() Group by the arrive_date column
 * @method     ChildSalesOrderQuery groupBySurchargeStatus() Group by the surcharge_status column
 * @method     ChildSalesOrderQuery groupByFreightGroup() Group by the freight_group column
 * @method     ChildSalesOrderQuery groupByCommOverride() Group by the comm_override column
 * @method     ChildSalesOrderQuery groupByChargeSplit() Group by the charge_split column
 * @method     ChildSalesOrderQuery groupByCreditcartApproved() Group by the creditcart_approved column
 * @method     ChildSalesOrderQuery groupByOriginalOrdernumber() Group by the original_ordernumber column
 * @method     ChildSalesOrderQuery groupByHasNotes() Group by the has_notes column
 * @method     ChildSalesOrderQuery groupByHasDocuments() Group by the has_documents column
 * @method     ChildSalesOrderQuery groupByHasTracking() Group by the has_tracking column
 * @method     ChildSalesOrderQuery groupByDate() Group by the date column
 * @method     ChildSalesOrderQuery groupByTime() Group by the time column
 * @method     ChildSalesOrderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesOrderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesOrderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesOrderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesOrder findOne(ConnectionInterface $con = null) Return the first ChildSalesOrder matching the query
 * @method     ChildSalesOrder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesOrder matching the query, or a new ChildSalesOrder object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrder findOneByOrdernumber(string $ordernumber) Return the first ChildSalesOrder filtered by the ordernumber column
 * @method     ChildSalesOrder findOneByStatus(string $status) Return the first ChildSalesOrder filtered by the status column
 * @method     ChildSalesOrder findOneByHoldstatus(string $holdstatus) Return the first ChildSalesOrder filtered by the holdstatus column
 * @method     ChildSalesOrder findOneByCustid(string $custid) Return the first ChildSalesOrder filtered by the custid column
 * @method     ChildSalesOrder findOneByShiptoid(string $shiptoid) Return the first ChildSalesOrder filtered by the shiptoid column
 * @method     ChildSalesOrder findOneByShiptoName(string $shipto_name) Return the first ChildSalesOrder filtered by the shipto_name column
 * @method     ChildSalesOrder findOneByShiptoAddress1(string $shipto_address1) Return the first ChildSalesOrder filtered by the shipto_address1 column
 * @method     ChildSalesOrder findOneByShiptoAddress2(string $shipto_address2) Return the first ChildSalesOrder filtered by the shipto_address2 column
 * @method     ChildSalesOrder findOneByShiptoAddress3(string $shipto_address3) Return the first ChildSalesOrder filtered by the shipto_address3 column
 * @method     ChildSalesOrder findOneByShiptoAddress4(string $shipto_address4) Return the first ChildSalesOrder filtered by the shipto_address4 column
 * @method     ChildSalesOrder findOneByShiptoCity(string $shipto_city) Return the first ChildSalesOrder filtered by the shipto_city column
 * @method     ChildSalesOrder findOneByShiptoState(string $shipto_state) Return the first ChildSalesOrder filtered by the shipto_state column
 * @method     ChildSalesOrder findOneByShiptoZip(string $shipto_zip) Return the first ChildSalesOrder filtered by the shipto_zip column
 * @method     ChildSalesOrder findOneByCustpo(string $custpo) Return the first ChildSalesOrder filtered by the custpo column
 * @method     ChildSalesOrder findOneByOrderDate(int $order_date) Return the first ChildSalesOrder filtered by the order_date column
 * @method     ChildSalesOrder findOneByTermcode(string $termcode) Return the first ChildSalesOrder filtered by the termcode column
 * @method     ChildSalesOrder findOneByShipviacode(string $shipviacode) Return the first ChildSalesOrder filtered by the shipviacode column
 * @method     ChildSalesOrder findOneByInvoiceNumber(int $invoice_number) Return the first ChildSalesOrder filtered by the invoice_number column
 * @method     ChildSalesOrder findOneByInvoiceDate(int $invoice_date) Return the first ChildSalesOrder filtered by the invoice_date column
 * @method     ChildSalesOrder findOneByGenledgerPeriod(int $genledger_period) Return the first ChildSalesOrder filtered by the genledger_period column
 * @method     ChildSalesOrder findOneBySalesperson1(string $salesperson_1) Return the first ChildSalesOrder filtered by the salesperson_1 column
 * @method     ChildSalesOrder findOneBySalesperson1pct(string $salesperson_1pct) Return the first ChildSalesOrder filtered by the salesperson_1pct column
 * @method     ChildSalesOrder findOneBySalesperson2(string $salesperson_2) Return the first ChildSalesOrder filtered by the salesperson_2 column
 * @method     ChildSalesOrder findOneBySalesperson2pct(string $salesperson_2pct) Return the first ChildSalesOrder filtered by the salesperson_2pct column
 * @method     ChildSalesOrder findOneBySalesperson3(string $salesperson_3) Return the first ChildSalesOrder filtered by the salesperson_3 column
 * @method     ChildSalesOrder findOneBySalesperson3pct(string $salesperson_3pct) Return the first ChildSalesOrder filtered by the salesperson_3pct column
 * @method     ChildSalesOrder findOneByContractNbr(int $contract_nbr) Return the first ChildSalesOrder filtered by the contract_nbr column
 * @method     ChildSalesOrder findOneByBatchNbr(int $batch_nbr) Return the first ChildSalesOrder filtered by the batch_nbr column
 * @method     ChildSalesOrder findOneByDropreleasehold(string $dropreleasehold) Return the first ChildSalesOrder filtered by the dropreleasehold column
 * @method     ChildSalesOrder findOneBySubtotalNontax(string $subtotal_nontax) Return the first ChildSalesOrder filtered by the subtotal_nontax column
 * @method     ChildSalesOrder findOneBySubtotalTax(string $subtotal_tax) Return the first ChildSalesOrder filtered by the subtotal_tax column
 * @method     ChildSalesOrder findOneByTotalTax(string $total_tax) Return the first ChildSalesOrder filtered by the total_tax column
 * @method     ChildSalesOrder findOneByTotalFreight(string $total_freight) Return the first ChildSalesOrder filtered by the total_freight column
 * @method     ChildSalesOrder findOneByTotalMisc(string $total_misc) Return the first ChildSalesOrder filtered by the total_misc column
 * @method     ChildSalesOrder findOneByTotalOrder(string $total_order) Return the first ChildSalesOrder filtered by the total_order column
 * @method     ChildSalesOrder findOneByTotalCost(string $total_cost) Return the first ChildSalesOrder filtered by the total_cost column
 * @method     ChildSalesOrder findOneByLock(string $lock) Return the first ChildSalesOrder filtered by the lock column
 * @method     ChildSalesOrder findOneByTakenDate(int $taken_date) Return the first ChildSalesOrder filtered by the taken_date column
 * @method     ChildSalesOrder findOneByTakenTime(int $taken_time) Return the first ChildSalesOrder filtered by the taken_time column
 * @method     ChildSalesOrder findOneByPickDate(int $pick_date) Return the first ChildSalesOrder filtered by the pick_date column
 * @method     ChildSalesOrder findOneByPickTime(int $pick_time) Return the first ChildSalesOrder filtered by the pick_time column
 * @method     ChildSalesOrder findOneByPackDate(int $pack_date) Return the first ChildSalesOrder filtered by the pack_date column
 * @method     ChildSalesOrder findOneByPackTime(int $pack_time) Return the first ChildSalesOrder filtered by the pack_time column
 * @method     ChildSalesOrder findOneByVerifyDate(int $verify_date) Return the first ChildSalesOrder filtered by the verify_date column
 * @method     ChildSalesOrder findOneByVerifyTime(int $verify_time) Return the first ChildSalesOrder filtered by the verify_time column
 * @method     ChildSalesOrder findOneByCreditmemo(string $creditmemo) Return the first ChildSalesOrder filtered by the creditmemo column
 * @method     ChildSalesOrder findOneByBooked(string $booked) Return the first ChildSalesOrder filtered by the booked column
 * @method     ChildSalesOrder findOneByOriginalWhse(string $original_whse) Return the first ChildSalesOrder filtered by the original_whse column
 * @method     ChildSalesOrder findOneByBilltoState(string $billto_state) Return the first ChildSalesOrder filtered by the billto_state column
 * @method     ChildSalesOrder findOneByShipcomplete(string $shipcomplete) Return the first ChildSalesOrder filtered by the shipcomplete column
 * @method     ChildSalesOrder findOneByCwoFlag(string $cwo_flag) Return the first ChildSalesOrder filtered by the cwo_flag column
 * @method     ChildSalesOrder findOneByDivision(string $division) Return the first ChildSalesOrder filtered by the division column
 * @method     ChildSalesOrder findOneByTakenCode(string $taken_code) Return the first ChildSalesOrder filtered by the taken_code column
 * @method     ChildSalesOrder findOneByPackCode(string $pack_code) Return the first ChildSalesOrder filtered by the pack_code column
 * @method     ChildSalesOrder findOneByPickCode(string $pick_code) Return the first ChildSalesOrder filtered by the pick_code column
 * @method     ChildSalesOrder findOneByVerifyCode(string $verify_code) Return the first ChildSalesOrder filtered by the verify_code column
 * @method     ChildSalesOrder findOneByTotalDiscount(string $total_discount) Return the first ChildSalesOrder filtered by the total_discount column
 * @method     ChildSalesOrder findOneByEdiRefererencenbr(string $edi_refererencenbr) Return the first ChildSalesOrder filtered by the edi_refererencenbr column
 * @method     ChildSalesOrder findOneByUserCode1(string $user_code1) Return the first ChildSalesOrder filtered by the user_code1 column
 * @method     ChildSalesOrder findOneByUserCode2(string $user_code2) Return the first ChildSalesOrder filtered by the user_code2 column
 * @method     ChildSalesOrder findOneByUserCode3(string $user_code3) Return the first ChildSalesOrder filtered by the user_code3 column
 * @method     ChildSalesOrder findOneByUserCode4(string $user_code4) Return the first ChildSalesOrder filtered by the user_code4 column
 * @method     ChildSalesOrder findOneByExchangeCountry(string $exchange_country) Return the first ChildSalesOrder filtered by the exchange_country column
 * @method     ChildSalesOrder findOneByExchangeRate(string $exchange_rate) Return the first ChildSalesOrder filtered by the exchange_rate column
 * @method     ChildSalesOrder findOneByWeightTotal(string $weight_total) Return the first ChildSalesOrder filtered by the weight_total column
 * @method     ChildSalesOrder findOneByWeightOverride(string $weight_override) Return the first ChildSalesOrder filtered by the weight_override column
 * @method     ChildSalesOrder findOneByBoxCount(int $box_count) Return the first ChildSalesOrder filtered by the box_count column
 * @method     ChildSalesOrder findOneByRequestDate(int $request_date) Return the first ChildSalesOrder filtered by the request_date column
 * @method     ChildSalesOrder findOneByCancelDate(int $cancel_date) Return the first ChildSalesOrder filtered by the cancel_date column
 * @method     ChildSalesOrder findOneByLockedby(string $lockedby) Return the first ChildSalesOrder filtered by the lockedby column
 * @method     ChildSalesOrder findOneByReleaseNumber(string $release_number) Return the first ChildSalesOrder filtered by the release_number column
 * @method     ChildSalesOrder findOneByWhse(string $whse) Return the first ChildSalesOrder filtered by the whse column
 * @method     ChildSalesOrder findOneByBackorderDate(int $backorder_date) Return the first ChildSalesOrder filtered by the backorder_date column
 * @method     ChildSalesOrder findOneByDeptcode(string $deptcode) Return the first ChildSalesOrder filtered by the deptcode column
 * @method     ChildSalesOrder findOneByFreightInEntered(string $freight_in_entered) Return the first ChildSalesOrder filtered by the freight_in_entered column
 * @method     ChildSalesOrder findOneByDropshipEntered(string $dropship_entered) Return the first ChildSalesOrder filtered by the dropship_entered column
 * @method     ChildSalesOrder findOneByErFlag(string $er_flag) Return the first ChildSalesOrder filtered by the er_flag column
 * @method     ChildSalesOrder findOneByFreightIn(string $freight_in) Return the first ChildSalesOrder filtered by the freight_in column
 * @method     ChildSalesOrder findOneByDropship(string $dropship) Return the first ChildSalesOrder filtered by the dropship column
 * @method     ChildSalesOrder findOneByMinorder(string $minorder) Return the first ChildSalesOrder filtered by the minorder column
 * @method     ChildSalesOrder findOneByContractTerms(string $contract_terms) Return the first ChildSalesOrder filtered by the contract_terms column
 * @method     ChildSalesOrder findOneByDropshipBilled(string $dropship_billed) Return the first ChildSalesOrder filtered by the dropship_billed column
 * @method     ChildSalesOrder findOneByOrderType(string $order_type) Return the first ChildSalesOrder filtered by the order_type column
 * @method     ChildSalesOrder findOneByTrackingEdinumber(string $tracking_edinumber) Return the first ChildSalesOrder filtered by the tracking_edinumber column
 * @method     ChildSalesOrder findOneBySource(string $source) Return the first ChildSalesOrder filtered by the source column
 * @method     ChildSalesOrder findOneByPickFormat(string $pick_format) Return the first ChildSalesOrder filtered by the pick_format column
 * @method     ChildSalesOrder findOneByInvoiceFormat(string $invoice_format) Return the first ChildSalesOrder filtered by the invoice_format column
 * @method     ChildSalesOrder findOneByCashAmount(string $cash_amount) Return the first ChildSalesOrder filtered by the cash_amount column
 * @method     ChildSalesOrder findOneByCheckAmount(string $check_amount) Return the first ChildSalesOrder filtered by the check_amount column
 * @method     ChildSalesOrder findOneByCheckNumber(string $check_number) Return the first ChildSalesOrder filtered by the check_number column
 * @method     ChildSalesOrder findOneByDepositAmount(string $deposit_amount) Return the first ChildSalesOrder filtered by the deposit_amount column
 * @method     ChildSalesOrder findOneByDepositNumber(string $deposit_number) Return the first ChildSalesOrder filtered by the deposit_number column
 * @method     ChildSalesOrder findOneByOriginalSubtotalTax(string $original_subtotal_tax) Return the first ChildSalesOrder filtered by the original_subtotal_tax column
 * @method     ChildSalesOrder findOneByOriginalSubtotalNontax(string $original_subtotal_nontax) Return the first ChildSalesOrder filtered by the original_subtotal_nontax column
 * @method     ChildSalesOrder findOneByOriginalTotalTax(string $original_total_tax) Return the first ChildSalesOrder filtered by the original_total_tax column
 * @method     ChildSalesOrder findOneByOriginalTotal(string $original_total) Return the first ChildSalesOrder filtered by the original_total column
 * @method     ChildSalesOrder findOneByPickPrintdate(int $pick_printdate) Return the first ChildSalesOrder filtered by the pick_printdate column
 * @method     ChildSalesOrder findOneByPickPrinttime(int $pick_printtime) Return the first ChildSalesOrder filtered by the pick_printtime column
 * @method     ChildSalesOrder findOneByContact(string $contact) Return the first ChildSalesOrder filtered by the contact column
 * @method     ChildSalesOrder findOneByPhoneIntl(string $phone_intl) Return the first ChildSalesOrder filtered by the phone_intl column
 * @method     ChildSalesOrder findOneByPhoneAccesscode(string $phone_accesscode) Return the first ChildSalesOrder filtered by the phone_accesscode column
 * @method     ChildSalesOrder findOneByPhoneCountrycode(string $phone_countrycode) Return the first ChildSalesOrder filtered by the phone_countrycode column
 * @method     ChildSalesOrder findOneByPhone(string $phone) Return the first ChildSalesOrder filtered by the phone column
 * @method     ChildSalesOrder findOneByPhoneExt(string $phone_ext) Return the first ChildSalesOrder filtered by the phone_ext column
 * @method     ChildSalesOrder findOneByFaxIntl(string $fax_intl) Return the first ChildSalesOrder filtered by the fax_intl column
 * @method     ChildSalesOrder findOneByFaxAccesscode(string $fax_accesscode) Return the first ChildSalesOrder filtered by the fax_accesscode column
 * @method     ChildSalesOrder findOneByFaxCountrycode(string $fax_countrycode) Return the first ChildSalesOrder filtered by the fax_countrycode column
 * @method     ChildSalesOrder findOneByFax(string $fax) Return the first ChildSalesOrder filtered by the fax column
 * @method     ChildSalesOrder findOneByShipAccount(string $ship_account) Return the first ChildSalesOrder filtered by the ship_account column
 * @method     ChildSalesOrder findOneByChangeDue(string $change_due) Return the first ChildSalesOrder filtered by the change_due column
 * @method     ChildSalesOrder findOneByDiscountAdditional(string $discount_additional) Return the first ChildSalesOrder filtered by the discount_additional column
 * @method     ChildSalesOrder findOneByAllShip(string $all_ship) Return the first ChildSalesOrder filtered by the all_ship column
 * @method     ChildSalesOrder findOneByCreditApplied(string $credit_applied) Return the first ChildSalesOrder filtered by the credit_applied column
 * @method     ChildSalesOrder findOneByInvoicePrintdate(int $invoice_printdate) Return the first ChildSalesOrder filtered by the invoice_printdate column
 * @method     ChildSalesOrder findOneByInvoicePrinttime(int $invoice_printtime) Return the first ChildSalesOrder filtered by the invoice_printtime column
 * @method     ChildSalesOrder findOneByDiscountFreight(string $discount_freight) Return the first ChildSalesOrder filtered by the discount_freight column
 * @method     ChildSalesOrder findOneByShipCompleteoverride(string $ship_completeoverride) Return the first ChildSalesOrder filtered by the ship_completeoverride column
 * @method     ChildSalesOrder findOneByContactEmail(string $contact_email) Return the first ChildSalesOrder filtered by the contact_email column
 * @method     ChildSalesOrder findOneByManualFreight(string $manual_freight) Return the first ChildSalesOrder filtered by the manual_freight column
 * @method     ChildSalesOrder findOneByInternalFreight(string $internal_freight) Return the first ChildSalesOrder filtered by the internal_freight column
 * @method     ChildSalesOrder findOneByCostFreight(string $cost_freight) Return the first ChildSalesOrder filtered by the cost_freight column
 * @method     ChildSalesOrder findOneByRoute(string $route) Return the first ChildSalesOrder filtered by the route column
 * @method     ChildSalesOrder findOneByRouteSeq(int $route_seq) Return the first ChildSalesOrder filtered by the route_seq column
 * @method     ChildSalesOrder findOneByEdi855sent(string $edi_855sent) Return the first ChildSalesOrder filtered by the edi_855sent column
 * @method     ChildSalesOrder findOneByFreight3rdparty(string $freight_3rdparty) Return the first ChildSalesOrder filtered by the freight_3rdparty column
 * @method     ChildSalesOrder findOneByFob(string $fob) Return the first ChildSalesOrder filtered by the fob column
 * @method     ChildSalesOrder findOneByConfirmImage(string $confirm_image) Return the first ChildSalesOrder filtered by the confirm_image column
 * @method     ChildSalesOrder findOneByCstkConsign(string $cstk_consign) Return the first ChildSalesOrder filtered by the cstk_consign column
 * @method     ChildSalesOrder findOneByManufacturer(string $manufacturer) Return the first ChildSalesOrder filtered by the manufacturer column
 * @method     ChildSalesOrder findOneByPickQueue(string $pick_queue) Return the first ChildSalesOrder filtered by the pick_queue column
 * @method     ChildSalesOrder findOneByArriveDate(int $arrive_date) Return the first ChildSalesOrder filtered by the arrive_date column
 * @method     ChildSalesOrder findOneBySurchargeStatus(string $surcharge_status) Return the first ChildSalesOrder filtered by the surcharge_status column
 * @method     ChildSalesOrder findOneByFreightGroup(string $freight_group) Return the first ChildSalesOrder filtered by the freight_group column
 * @method     ChildSalesOrder findOneByCommOverride(string $comm_override) Return the first ChildSalesOrder filtered by the comm_override column
 * @method     ChildSalesOrder findOneByChargeSplit(string $charge_split) Return the first ChildSalesOrder filtered by the charge_split column
 * @method     ChildSalesOrder findOneByCreditcartApproved(string $creditcart_approved) Return the first ChildSalesOrder filtered by the creditcart_approved column
 * @method     ChildSalesOrder findOneByOriginalOrdernumber(string $original_ordernumber) Return the first ChildSalesOrder filtered by the original_ordernumber column
 * @method     ChildSalesOrder findOneByHasNotes(string $has_notes) Return the first ChildSalesOrder filtered by the has_notes column
 * @method     ChildSalesOrder findOneByHasDocuments(string $has_documents) Return the first ChildSalesOrder filtered by the has_documents column
 * @method     ChildSalesOrder findOneByHasTracking(string $has_tracking) Return the first ChildSalesOrder filtered by the has_tracking column
 * @method     ChildSalesOrder findOneByDate(int $date) Return the first ChildSalesOrder filtered by the date column
 * @method     ChildSalesOrder findOneByTime(int $time) Return the first ChildSalesOrder filtered by the time column
 * @method     ChildSalesOrder findOneByDummy(string $dummy) Return the first ChildSalesOrder filtered by the dummy column *

 * @method     ChildSalesOrder requirePk($key, ConnectionInterface $con = null) Return the ChildSalesOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOne(ConnectionInterface $con = null) Return the first ChildSalesOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrder requireOneByOrdernumber(string $ordernumber) Return the first ChildSalesOrder filtered by the ordernumber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByStatus(string $status) Return the first ChildSalesOrder filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByHoldstatus(string $holdstatus) Return the first ChildSalesOrder filtered by the holdstatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCustid(string $custid) Return the first ChildSalesOrder filtered by the custid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoid(string $shiptoid) Return the first ChildSalesOrder filtered by the shiptoid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoName(string $shipto_name) Return the first ChildSalesOrder filtered by the shipto_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoAddress1(string $shipto_address1) Return the first ChildSalesOrder filtered by the shipto_address1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoAddress2(string $shipto_address2) Return the first ChildSalesOrder filtered by the shipto_address2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoAddress3(string $shipto_address3) Return the first ChildSalesOrder filtered by the shipto_address3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoAddress4(string $shipto_address4) Return the first ChildSalesOrder filtered by the shipto_address4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoCity(string $shipto_city) Return the first ChildSalesOrder filtered by the shipto_city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoState(string $shipto_state) Return the first ChildSalesOrder filtered by the shipto_state column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShiptoZip(string $shipto_zip) Return the first ChildSalesOrder filtered by the shipto_zip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCustpo(string $custpo) Return the first ChildSalesOrder filtered by the custpo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOrderDate(int $order_date) Return the first ChildSalesOrder filtered by the order_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTermcode(string $termcode) Return the first ChildSalesOrder filtered by the termcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShipviacode(string $shipviacode) Return the first ChildSalesOrder filtered by the shipviacode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByInvoiceNumber(int $invoice_number) Return the first ChildSalesOrder filtered by the invoice_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByInvoiceDate(int $invoice_date) Return the first ChildSalesOrder filtered by the invoice_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByGenledgerPeriod(int $genledger_period) Return the first ChildSalesOrder filtered by the genledger_period column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySalesperson1(string $salesperson_1) Return the first ChildSalesOrder filtered by the salesperson_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySalesperson1pct(string $salesperson_1pct) Return the first ChildSalesOrder filtered by the salesperson_1pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySalesperson2(string $salesperson_2) Return the first ChildSalesOrder filtered by the salesperson_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySalesperson2pct(string $salesperson_2pct) Return the first ChildSalesOrder filtered by the salesperson_2pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySalesperson3(string $salesperson_3) Return the first ChildSalesOrder filtered by the salesperson_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySalesperson3pct(string $salesperson_3pct) Return the first ChildSalesOrder filtered by the salesperson_3pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByContractNbr(int $contract_nbr) Return the first ChildSalesOrder filtered by the contract_nbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByBatchNbr(int $batch_nbr) Return the first ChildSalesOrder filtered by the batch_nbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDropreleasehold(string $dropreleasehold) Return the first ChildSalesOrder filtered by the dropreleasehold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySubtotalNontax(string $subtotal_nontax) Return the first ChildSalesOrder filtered by the subtotal_nontax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySubtotalTax(string $subtotal_tax) Return the first ChildSalesOrder filtered by the subtotal_tax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTotalTax(string $total_tax) Return the first ChildSalesOrder filtered by the total_tax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTotalFreight(string $total_freight) Return the first ChildSalesOrder filtered by the total_freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTotalMisc(string $total_misc) Return the first ChildSalesOrder filtered by the total_misc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTotalOrder(string $total_order) Return the first ChildSalesOrder filtered by the total_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTotalCost(string $total_cost) Return the first ChildSalesOrder filtered by the total_cost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByLock(string $lock) Return the first ChildSalesOrder filtered by the lock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTakenDate(int $taken_date) Return the first ChildSalesOrder filtered by the taken_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTakenTime(int $taken_time) Return the first ChildSalesOrder filtered by the taken_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPickDate(int $pick_date) Return the first ChildSalesOrder filtered by the pick_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPickTime(int $pick_time) Return the first ChildSalesOrder filtered by the pick_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPackDate(int $pack_date) Return the first ChildSalesOrder filtered by the pack_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPackTime(int $pack_time) Return the first ChildSalesOrder filtered by the pack_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByVerifyDate(int $verify_date) Return the first ChildSalesOrder filtered by the verify_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByVerifyTime(int $verify_time) Return the first ChildSalesOrder filtered by the verify_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCreditmemo(string $creditmemo) Return the first ChildSalesOrder filtered by the creditmemo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByBooked(string $booked) Return the first ChildSalesOrder filtered by the booked column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOriginalWhse(string $original_whse) Return the first ChildSalesOrder filtered by the original_whse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByBilltoState(string $billto_state) Return the first ChildSalesOrder filtered by the billto_state column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShipcomplete(string $shipcomplete) Return the first ChildSalesOrder filtered by the shipcomplete column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCwoFlag(string $cwo_flag) Return the first ChildSalesOrder filtered by the cwo_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDivision(string $division) Return the first ChildSalesOrder filtered by the division column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTakenCode(string $taken_code) Return the first ChildSalesOrder filtered by the taken_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPackCode(string $pack_code) Return the first ChildSalesOrder filtered by the pack_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPickCode(string $pick_code) Return the first ChildSalesOrder filtered by the pick_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByVerifyCode(string $verify_code) Return the first ChildSalesOrder filtered by the verify_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTotalDiscount(string $total_discount) Return the first ChildSalesOrder filtered by the total_discount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByEdiRefererencenbr(string $edi_refererencenbr) Return the first ChildSalesOrder filtered by the edi_refererencenbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByUserCode1(string $user_code1) Return the first ChildSalesOrder filtered by the user_code1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByUserCode2(string $user_code2) Return the first ChildSalesOrder filtered by the user_code2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByUserCode3(string $user_code3) Return the first ChildSalesOrder filtered by the user_code3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByUserCode4(string $user_code4) Return the first ChildSalesOrder filtered by the user_code4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByExchangeCountry(string $exchange_country) Return the first ChildSalesOrder filtered by the exchange_country column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByExchangeRate(string $exchange_rate) Return the first ChildSalesOrder filtered by the exchange_rate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByWeightTotal(string $weight_total) Return the first ChildSalesOrder filtered by the weight_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByWeightOverride(string $weight_override) Return the first ChildSalesOrder filtered by the weight_override column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByBoxCount(int $box_count) Return the first ChildSalesOrder filtered by the box_count column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByRequestDate(int $request_date) Return the first ChildSalesOrder filtered by the request_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCancelDate(int $cancel_date) Return the first ChildSalesOrder filtered by the cancel_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByLockedby(string $lockedby) Return the first ChildSalesOrder filtered by the lockedby column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByReleaseNumber(string $release_number) Return the first ChildSalesOrder filtered by the release_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByWhse(string $whse) Return the first ChildSalesOrder filtered by the whse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByBackorderDate(int $backorder_date) Return the first ChildSalesOrder filtered by the backorder_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDeptcode(string $deptcode) Return the first ChildSalesOrder filtered by the deptcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFreightInEntered(string $freight_in_entered) Return the first ChildSalesOrder filtered by the freight_in_entered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDropshipEntered(string $dropship_entered) Return the first ChildSalesOrder filtered by the dropship_entered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByErFlag(string $er_flag) Return the first ChildSalesOrder filtered by the er_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFreightIn(string $freight_in) Return the first ChildSalesOrder filtered by the freight_in column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDropship(string $dropship) Return the first ChildSalesOrder filtered by the dropship column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByMinorder(string $minorder) Return the first ChildSalesOrder filtered by the minorder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByContractTerms(string $contract_terms) Return the first ChildSalesOrder filtered by the contract_terms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDropshipBilled(string $dropship_billed) Return the first ChildSalesOrder filtered by the dropship_billed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOrderType(string $order_type) Return the first ChildSalesOrder filtered by the order_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTrackingEdinumber(string $tracking_edinumber) Return the first ChildSalesOrder filtered by the tracking_edinumber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySource(string $source) Return the first ChildSalesOrder filtered by the source column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPickFormat(string $pick_format) Return the first ChildSalesOrder filtered by the pick_format column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByInvoiceFormat(string $invoice_format) Return the first ChildSalesOrder filtered by the invoice_format column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCashAmount(string $cash_amount) Return the first ChildSalesOrder filtered by the cash_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCheckAmount(string $check_amount) Return the first ChildSalesOrder filtered by the check_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCheckNumber(string $check_number) Return the first ChildSalesOrder filtered by the check_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDepositAmount(string $deposit_amount) Return the first ChildSalesOrder filtered by the deposit_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDepositNumber(string $deposit_number) Return the first ChildSalesOrder filtered by the deposit_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOriginalSubtotalTax(string $original_subtotal_tax) Return the first ChildSalesOrder filtered by the original_subtotal_tax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOriginalSubtotalNontax(string $original_subtotal_nontax) Return the first ChildSalesOrder filtered by the original_subtotal_nontax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOriginalTotalTax(string $original_total_tax) Return the first ChildSalesOrder filtered by the original_total_tax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOriginalTotal(string $original_total) Return the first ChildSalesOrder filtered by the original_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPickPrintdate(int $pick_printdate) Return the first ChildSalesOrder filtered by the pick_printdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPickPrinttime(int $pick_printtime) Return the first ChildSalesOrder filtered by the pick_printtime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByContact(string $contact) Return the first ChildSalesOrder filtered by the contact column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPhoneIntl(string $phone_intl) Return the first ChildSalesOrder filtered by the phone_intl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPhoneAccesscode(string $phone_accesscode) Return the first ChildSalesOrder filtered by the phone_accesscode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPhoneCountrycode(string $phone_countrycode) Return the first ChildSalesOrder filtered by the phone_countrycode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPhone(string $phone) Return the first ChildSalesOrder filtered by the phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPhoneExt(string $phone_ext) Return the first ChildSalesOrder filtered by the phone_ext column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFaxIntl(string $fax_intl) Return the first ChildSalesOrder filtered by the fax_intl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFaxAccesscode(string $fax_accesscode) Return the first ChildSalesOrder filtered by the fax_accesscode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFaxCountrycode(string $fax_countrycode) Return the first ChildSalesOrder filtered by the fax_countrycode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFax(string $fax) Return the first ChildSalesOrder filtered by the fax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShipAccount(string $ship_account) Return the first ChildSalesOrder filtered by the ship_account column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByChangeDue(string $change_due) Return the first ChildSalesOrder filtered by the change_due column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDiscountAdditional(string $discount_additional) Return the first ChildSalesOrder filtered by the discount_additional column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByAllShip(string $all_ship) Return the first ChildSalesOrder filtered by the all_ship column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCreditApplied(string $credit_applied) Return the first ChildSalesOrder filtered by the credit_applied column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByInvoicePrintdate(int $invoice_printdate) Return the first ChildSalesOrder filtered by the invoice_printdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByInvoicePrinttime(int $invoice_printtime) Return the first ChildSalesOrder filtered by the invoice_printtime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDiscountFreight(string $discount_freight) Return the first ChildSalesOrder filtered by the discount_freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByShipCompleteoverride(string $ship_completeoverride) Return the first ChildSalesOrder filtered by the ship_completeoverride column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByContactEmail(string $contact_email) Return the first ChildSalesOrder filtered by the contact_email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByManualFreight(string $manual_freight) Return the first ChildSalesOrder filtered by the manual_freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByInternalFreight(string $internal_freight) Return the first ChildSalesOrder filtered by the internal_freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCostFreight(string $cost_freight) Return the first ChildSalesOrder filtered by the cost_freight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByRoute(string $route) Return the first ChildSalesOrder filtered by the route column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByRouteSeq(int $route_seq) Return the first ChildSalesOrder filtered by the route_seq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByEdi855sent(string $edi_855sent) Return the first ChildSalesOrder filtered by the edi_855sent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFreight3rdparty(string $freight_3rdparty) Return the first ChildSalesOrder filtered by the freight_3rdparty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFob(string $fob) Return the first ChildSalesOrder filtered by the fob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByConfirmImage(string $confirm_image) Return the first ChildSalesOrder filtered by the confirm_image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCstkConsign(string $cstk_consign) Return the first ChildSalesOrder filtered by the cstk_consign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByManufacturer(string $manufacturer) Return the first ChildSalesOrder filtered by the manufacturer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByPickQueue(string $pick_queue) Return the first ChildSalesOrder filtered by the pick_queue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByArriveDate(int $arrive_date) Return the first ChildSalesOrder filtered by the arrive_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneBySurchargeStatus(string $surcharge_status) Return the first ChildSalesOrder filtered by the surcharge_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByFreightGroup(string $freight_group) Return the first ChildSalesOrder filtered by the freight_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCommOverride(string $comm_override) Return the first ChildSalesOrder filtered by the comm_override column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByChargeSplit(string $charge_split) Return the first ChildSalesOrder filtered by the charge_split column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByCreditcartApproved(string $creditcart_approved) Return the first ChildSalesOrder filtered by the creditcart_approved column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByOriginalOrdernumber(string $original_ordernumber) Return the first ChildSalesOrder filtered by the original_ordernumber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByHasNotes(string $has_notes) Return the first ChildSalesOrder filtered by the has_notes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByHasDocuments(string $has_documents) Return the first ChildSalesOrder filtered by the has_documents column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByHasTracking(string $has_tracking) Return the first ChildSalesOrder filtered by the has_tracking column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDate(int $date) Return the first ChildSalesOrder filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByTime(int $time) Return the first ChildSalesOrder filtered by the time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrder requireOneByDummy(string $dummy) Return the first ChildSalesOrder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesOrder objects based on current ModelCriteria
 * @method     ChildSalesOrder[]|ObjectCollection findByOrdernumber(string $ordernumber) Return ChildSalesOrder objects filtered by the ordernumber column
 * @method     ChildSalesOrder[]|ObjectCollection findByStatus(string $status) Return ChildSalesOrder objects filtered by the status column
 * @method     ChildSalesOrder[]|ObjectCollection findByHoldstatus(string $holdstatus) Return ChildSalesOrder objects filtered by the holdstatus column
 * @method     ChildSalesOrder[]|ObjectCollection findByCustid(string $custid) Return ChildSalesOrder objects filtered by the custid column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoid(string $shiptoid) Return ChildSalesOrder objects filtered by the shiptoid column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoName(string $shipto_name) Return ChildSalesOrder objects filtered by the shipto_name column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoAddress1(string $shipto_address1) Return ChildSalesOrder objects filtered by the shipto_address1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoAddress2(string $shipto_address2) Return ChildSalesOrder objects filtered by the shipto_address2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoAddress3(string $shipto_address3) Return ChildSalesOrder objects filtered by the shipto_address3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoAddress4(string $shipto_address4) Return ChildSalesOrder objects filtered by the shipto_address4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoCity(string $shipto_city) Return ChildSalesOrder objects filtered by the shipto_city column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoState(string $shipto_state) Return ChildSalesOrder objects filtered by the shipto_state column
 * @method     ChildSalesOrder[]|ObjectCollection findByShiptoZip(string $shipto_zip) Return ChildSalesOrder objects filtered by the shipto_zip column
 * @method     ChildSalesOrder[]|ObjectCollection findByCustpo(string $custpo) Return ChildSalesOrder objects filtered by the custpo column
 * @method     ChildSalesOrder[]|ObjectCollection findByOrderDate(int $order_date) Return ChildSalesOrder objects filtered by the order_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByTermcode(string $termcode) Return ChildSalesOrder objects filtered by the termcode column
 * @method     ChildSalesOrder[]|ObjectCollection findByShipviacode(string $shipviacode) Return ChildSalesOrder objects filtered by the shipviacode column
 * @method     ChildSalesOrder[]|ObjectCollection findByInvoiceNumber(int $invoice_number) Return ChildSalesOrder objects filtered by the invoice_number column
 * @method     ChildSalesOrder[]|ObjectCollection findByInvoiceDate(int $invoice_date) Return ChildSalesOrder objects filtered by the invoice_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByGenledgerPeriod(int $genledger_period) Return ChildSalesOrder objects filtered by the genledger_period column
 * @method     ChildSalesOrder[]|ObjectCollection findBySalesperson1(string $salesperson_1) Return ChildSalesOrder objects filtered by the salesperson_1 column
 * @method     ChildSalesOrder[]|ObjectCollection findBySalesperson1pct(string $salesperson_1pct) Return ChildSalesOrder objects filtered by the salesperson_1pct column
 * @method     ChildSalesOrder[]|ObjectCollection findBySalesperson2(string $salesperson_2) Return ChildSalesOrder objects filtered by the salesperson_2 column
 * @method     ChildSalesOrder[]|ObjectCollection findBySalesperson2pct(string $salesperson_2pct) Return ChildSalesOrder objects filtered by the salesperson_2pct column
 * @method     ChildSalesOrder[]|ObjectCollection findBySalesperson3(string $salesperson_3) Return ChildSalesOrder objects filtered by the salesperson_3 column
 * @method     ChildSalesOrder[]|ObjectCollection findBySalesperson3pct(string $salesperson_3pct) Return ChildSalesOrder objects filtered by the salesperson_3pct column
 * @method     ChildSalesOrder[]|ObjectCollection findByContractNbr(int $contract_nbr) Return ChildSalesOrder objects filtered by the contract_nbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByBatchNbr(int $batch_nbr) Return ChildSalesOrder objects filtered by the batch_nbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByDropreleasehold(string $dropreleasehold) Return ChildSalesOrder objects filtered by the dropreleasehold column
 * @method     ChildSalesOrder[]|ObjectCollection findBySubtotalNontax(string $subtotal_nontax) Return ChildSalesOrder objects filtered by the subtotal_nontax column
 * @method     ChildSalesOrder[]|ObjectCollection findBySubtotalTax(string $subtotal_tax) Return ChildSalesOrder objects filtered by the subtotal_tax column
 * @method     ChildSalesOrder[]|ObjectCollection findByTotalTax(string $total_tax) Return ChildSalesOrder objects filtered by the total_tax column
 * @method     ChildSalesOrder[]|ObjectCollection findByTotalFreight(string $total_freight) Return ChildSalesOrder objects filtered by the total_freight column
 * @method     ChildSalesOrder[]|ObjectCollection findByTotalMisc(string $total_misc) Return ChildSalesOrder objects filtered by the total_misc column
 * @method     ChildSalesOrder[]|ObjectCollection findByTotalOrder(string $total_order) Return ChildSalesOrder objects filtered by the total_order column
 * @method     ChildSalesOrder[]|ObjectCollection findByTotalCost(string $total_cost) Return ChildSalesOrder objects filtered by the total_cost column
 * @method     ChildSalesOrder[]|ObjectCollection findByLock(string $lock) Return ChildSalesOrder objects filtered by the lock column
 * @method     ChildSalesOrder[]|ObjectCollection findByTakenDate(int $taken_date) Return ChildSalesOrder objects filtered by the taken_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByTakenTime(int $taken_time) Return ChildSalesOrder objects filtered by the taken_time column
 * @method     ChildSalesOrder[]|ObjectCollection findByPickDate(int $pick_date) Return ChildSalesOrder objects filtered by the pick_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByPickTime(int $pick_time) Return ChildSalesOrder objects filtered by the pick_time column
 * @method     ChildSalesOrder[]|ObjectCollection findByPackDate(int $pack_date) Return ChildSalesOrder objects filtered by the pack_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByPackTime(int $pack_time) Return ChildSalesOrder objects filtered by the pack_time column
 * @method     ChildSalesOrder[]|ObjectCollection findByVerifyDate(int $verify_date) Return ChildSalesOrder objects filtered by the verify_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByVerifyTime(int $verify_time) Return ChildSalesOrder objects filtered by the verify_time column
 * @method     ChildSalesOrder[]|ObjectCollection findByCreditmemo(string $creditmemo) Return ChildSalesOrder objects filtered by the creditmemo column
 * @method     ChildSalesOrder[]|ObjectCollection findByBooked(string $booked) Return ChildSalesOrder objects filtered by the booked column
 * @method     ChildSalesOrder[]|ObjectCollection findByOriginalWhse(string $original_whse) Return ChildSalesOrder objects filtered by the original_whse column
 * @method     ChildSalesOrder[]|ObjectCollection findByBilltoState(string $billto_state) Return ChildSalesOrder objects filtered by the billto_state column
 * @method     ChildSalesOrder[]|ObjectCollection findByShipcomplete(string $shipcomplete) Return ChildSalesOrder objects filtered by the shipcomplete column
 * @method     ChildSalesOrder[]|ObjectCollection findByCwoFlag(string $cwo_flag) Return ChildSalesOrder objects filtered by the cwo_flag column
 * @method     ChildSalesOrder[]|ObjectCollection findByDivision(string $division) Return ChildSalesOrder objects filtered by the division column
 * @method     ChildSalesOrder[]|ObjectCollection findByTakenCode(string $taken_code) Return ChildSalesOrder objects filtered by the taken_code column
 * @method     ChildSalesOrder[]|ObjectCollection findByPackCode(string $pack_code) Return ChildSalesOrder objects filtered by the pack_code column
 * @method     ChildSalesOrder[]|ObjectCollection findByPickCode(string $pick_code) Return ChildSalesOrder objects filtered by the pick_code column
 * @method     ChildSalesOrder[]|ObjectCollection findByVerifyCode(string $verify_code) Return ChildSalesOrder objects filtered by the verify_code column
 * @method     ChildSalesOrder[]|ObjectCollection findByTotalDiscount(string $total_discount) Return ChildSalesOrder objects filtered by the total_discount column
 * @method     ChildSalesOrder[]|ObjectCollection findByEdiRefererencenbr(string $edi_refererencenbr) Return ChildSalesOrder objects filtered by the edi_refererencenbr column
 * @method     ChildSalesOrder[]|ObjectCollection findByUserCode1(string $user_code1) Return ChildSalesOrder objects filtered by the user_code1 column
 * @method     ChildSalesOrder[]|ObjectCollection findByUserCode2(string $user_code2) Return ChildSalesOrder objects filtered by the user_code2 column
 * @method     ChildSalesOrder[]|ObjectCollection findByUserCode3(string $user_code3) Return ChildSalesOrder objects filtered by the user_code3 column
 * @method     ChildSalesOrder[]|ObjectCollection findByUserCode4(string $user_code4) Return ChildSalesOrder objects filtered by the user_code4 column
 * @method     ChildSalesOrder[]|ObjectCollection findByExchangeCountry(string $exchange_country) Return ChildSalesOrder objects filtered by the exchange_country column
 * @method     ChildSalesOrder[]|ObjectCollection findByExchangeRate(string $exchange_rate) Return ChildSalesOrder objects filtered by the exchange_rate column
 * @method     ChildSalesOrder[]|ObjectCollection findByWeightTotal(string $weight_total) Return ChildSalesOrder objects filtered by the weight_total column
 * @method     ChildSalesOrder[]|ObjectCollection findByWeightOverride(string $weight_override) Return ChildSalesOrder objects filtered by the weight_override column
 * @method     ChildSalesOrder[]|ObjectCollection findByBoxCount(int $box_count) Return ChildSalesOrder objects filtered by the box_count column
 * @method     ChildSalesOrder[]|ObjectCollection findByRequestDate(int $request_date) Return ChildSalesOrder objects filtered by the request_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByCancelDate(int $cancel_date) Return ChildSalesOrder objects filtered by the cancel_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByLockedby(string $lockedby) Return ChildSalesOrder objects filtered by the lockedby column
 * @method     ChildSalesOrder[]|ObjectCollection findByReleaseNumber(string $release_number) Return ChildSalesOrder objects filtered by the release_number column
 * @method     ChildSalesOrder[]|ObjectCollection findByWhse(string $whse) Return ChildSalesOrder objects filtered by the whse column
 * @method     ChildSalesOrder[]|ObjectCollection findByBackorderDate(int $backorder_date) Return ChildSalesOrder objects filtered by the backorder_date column
 * @method     ChildSalesOrder[]|ObjectCollection findByDeptcode(string $deptcode) Return ChildSalesOrder objects filtered by the deptcode column
 * @method     ChildSalesOrder[]|ObjectCollection findByFreightInEntered(string $freight_in_entered) Return ChildSalesOrder objects filtered by the freight_in_entered column
 * @method     ChildSalesOrder[]|ObjectCollection findByDropshipEntered(string $dropship_entered) Return ChildSalesOrder objects filtered by the dropship_entered column
 * @method     ChildSalesOrder[]|ObjectCollection findByErFlag(string $er_flag) Return ChildSalesOrder objects filtered by the er_flag column
 * @method     ChildSalesOrder[]|ObjectCollection findByFreightIn(string $freight_in) Return ChildSalesOrder objects filtered by the freight_in column
 * @method     ChildSalesOrder[]|ObjectCollection findByDropship(string $dropship) Return ChildSalesOrder objects filtered by the dropship column
 * @method     ChildSalesOrder[]|ObjectCollection findByMinorder(string $minorder) Return ChildSalesOrder objects filtered by the minorder column
 * @method     ChildSalesOrder[]|ObjectCollection findByContractTerms(string $contract_terms) Return ChildSalesOrder objects filtered by the contract_terms column
 * @method     ChildSalesOrder[]|ObjectCollection findByDropshipBilled(string $dropship_billed) Return ChildSalesOrder objects filtered by the dropship_billed column
 * @method     ChildSalesOrder[]|ObjectCollection findByOrderType(string $order_type) Return ChildSalesOrder objects filtered by the order_type column
 * @method     ChildSalesOrder[]|ObjectCollection findByTrackingEdinumber(string $tracking_edinumber) Return ChildSalesOrder objects filtered by the tracking_edinumber column
 * @method     ChildSalesOrder[]|ObjectCollection findBySource(string $source) Return ChildSalesOrder objects filtered by the source column
 * @method     ChildSalesOrder[]|ObjectCollection findByPickFormat(string $pick_format) Return ChildSalesOrder objects filtered by the pick_format column
 * @method     ChildSalesOrder[]|ObjectCollection findByInvoiceFormat(string $invoice_format) Return ChildSalesOrder objects filtered by the invoice_format column
 * @method     ChildSalesOrder[]|ObjectCollection findByCashAmount(string $cash_amount) Return ChildSalesOrder objects filtered by the cash_amount column
 * @method     ChildSalesOrder[]|ObjectCollection findByCheckAmount(string $check_amount) Return ChildSalesOrder objects filtered by the check_amount column
 * @method     ChildSalesOrder[]|ObjectCollection findByCheckNumber(string $check_number) Return ChildSalesOrder objects filtered by the check_number column
 * @method     ChildSalesOrder[]|ObjectCollection findByDepositAmount(string $deposit_amount) Return ChildSalesOrder objects filtered by the deposit_amount column
 * @method     ChildSalesOrder[]|ObjectCollection findByDepositNumber(string $deposit_number) Return ChildSalesOrder objects filtered by the deposit_number column
 * @method     ChildSalesOrder[]|ObjectCollection findByOriginalSubtotalTax(string $original_subtotal_tax) Return ChildSalesOrder objects filtered by the original_subtotal_tax column
 * @method     ChildSalesOrder[]|ObjectCollection findByOriginalSubtotalNontax(string $original_subtotal_nontax) Return ChildSalesOrder objects filtered by the original_subtotal_nontax column
 * @method     ChildSalesOrder[]|ObjectCollection findByOriginalTotalTax(string $original_total_tax) Return ChildSalesOrder objects filtered by the original_total_tax column
 * @method     ChildSalesOrder[]|ObjectCollection findByOriginalTotal(string $original_total) Return ChildSalesOrder objects filtered by the original_total column
 * @method     ChildSalesOrder[]|ObjectCollection findByPickPrintdate(int $pick_printdate) Return ChildSalesOrder objects filtered by the pick_printdate column
 * @method     ChildSalesOrder[]|ObjectCollection findByPickPrinttime(int $pick_printtime) Return ChildSalesOrder objects filtered by the pick_printtime column
 * @method     ChildSalesOrder[]|ObjectCollection findByContact(string $contact) Return ChildSalesOrder objects filtered by the contact column
 * @method     ChildSalesOrder[]|ObjectCollection findByPhoneIntl(string $phone_intl) Return ChildSalesOrder objects filtered by the phone_intl column
 * @method     ChildSalesOrder[]|ObjectCollection findByPhoneAccesscode(string $phone_accesscode) Return ChildSalesOrder objects filtered by the phone_accesscode column
 * @method     ChildSalesOrder[]|ObjectCollection findByPhoneCountrycode(string $phone_countrycode) Return ChildSalesOrder objects filtered by the phone_countrycode column
 * @method     ChildSalesOrder[]|ObjectCollection findByPhone(string $phone) Return ChildSalesOrder objects filtered by the phone column
 * @method     ChildSalesOrder[]|ObjectCollection findByPhoneExt(string $phone_ext) Return ChildSalesOrder objects filtered by the phone_ext column
 * @method     ChildSalesOrder[]|ObjectCollection findByFaxIntl(string $fax_intl) Return ChildSalesOrder objects filtered by the fax_intl column
 * @method     ChildSalesOrder[]|ObjectCollection findByFaxAccesscode(string $fax_accesscode) Return ChildSalesOrder objects filtered by the fax_accesscode column
 * @method     ChildSalesOrder[]|ObjectCollection findByFaxCountrycode(string $fax_countrycode) Return ChildSalesOrder objects filtered by the fax_countrycode column
 * @method     ChildSalesOrder[]|ObjectCollection findByFax(string $fax) Return ChildSalesOrder objects filtered by the fax column
 * @method     ChildSalesOrder[]|ObjectCollection findByShipAccount(string $ship_account) Return ChildSalesOrder objects filtered by the ship_account column
 * @method     ChildSalesOrder[]|ObjectCollection findByChangeDue(string $change_due) Return ChildSalesOrder objects filtered by the change_due column
 * @method     ChildSalesOrder[]|ObjectCollection findByDiscountAdditional(string $discount_additional) Return ChildSalesOrder objects filtered by the discount_additional column
 * @method     ChildSalesOrder[]|ObjectCollection findByAllShip(string $all_ship) Return ChildSalesOrder objects filtered by the all_ship column
 * @method     ChildSalesOrder[]|ObjectCollection findByCreditApplied(string $credit_applied) Return ChildSalesOrder objects filtered by the credit_applied column
 * @method     ChildSalesOrder[]|ObjectCollection findByInvoicePrintdate(int $invoice_printdate) Return ChildSalesOrder objects filtered by the invoice_printdate column
 * @method     ChildSalesOrder[]|ObjectCollection findByInvoicePrinttime(int $invoice_printtime) Return ChildSalesOrder objects filtered by the invoice_printtime column
 * @method     ChildSalesOrder[]|ObjectCollection findByDiscountFreight(string $discount_freight) Return ChildSalesOrder objects filtered by the discount_freight column
 * @method     ChildSalesOrder[]|ObjectCollection findByShipCompleteoverride(string $ship_completeoverride) Return ChildSalesOrder objects filtered by the ship_completeoverride column
 * @method     ChildSalesOrder[]|ObjectCollection findByContactEmail(string $contact_email) Return ChildSalesOrder objects filtered by the contact_email column
 * @method     ChildSalesOrder[]|ObjectCollection findByManualFreight(string $manual_freight) Return ChildSalesOrder objects filtered by the manual_freight column
 * @method     ChildSalesOrder[]|ObjectCollection findByInternalFreight(string $internal_freight) Return ChildSalesOrder objects filtered by the internal_freight column
 * @method     ChildSalesOrder[]|ObjectCollection findByCostFreight(string $cost_freight) Return ChildSalesOrder objects filtered by the cost_freight column
 * @method     ChildSalesOrder[]|ObjectCollection findByRoute(string $route) Return ChildSalesOrder objects filtered by the route column
 * @method     ChildSalesOrder[]|ObjectCollection findByRouteSeq(int $route_seq) Return ChildSalesOrder objects filtered by the route_seq column
 * @method     ChildSalesOrder[]|ObjectCollection findByEdi855sent(string $edi_855sent) Return ChildSalesOrder objects filtered by the edi_855sent column
 * @method     ChildSalesOrder[]|ObjectCollection findByFreight3rdparty(string $freight_3rdparty) Return ChildSalesOrder objects filtered by the freight_3rdparty column
 * @method     ChildSalesOrder[]|ObjectCollection findByFob(string $fob) Return ChildSalesOrder objects filtered by the fob column
 * @method     ChildSalesOrder[]|ObjectCollection findByConfirmImage(string $confirm_image) Return ChildSalesOrder objects filtered by the confirm_image column
 * @method     ChildSalesOrder[]|ObjectCollection findByCstkConsign(string $cstk_consign) Return ChildSalesOrder objects filtered by the cstk_consign column
 * @method     ChildSalesOrder[]|ObjectCollection findByManufacturer(string $manufacturer) Return ChildSalesOrder objects filtered by the manufacturer column
 * @method     ChildSalesOrder[]|ObjectCollection findByPickQueue(string $pick_queue) Return ChildSalesOrder objects filtered by the pick_queue column
 * @method     ChildSalesOrder[]|ObjectCollection findByArriveDate(int $arrive_date) Return ChildSalesOrder objects filtered by the arrive_date column
 * @method     ChildSalesOrder[]|ObjectCollection findBySurchargeStatus(string $surcharge_status) Return ChildSalesOrder objects filtered by the surcharge_status column
 * @method     ChildSalesOrder[]|ObjectCollection findByFreightGroup(string $freight_group) Return ChildSalesOrder objects filtered by the freight_group column
 * @method     ChildSalesOrder[]|ObjectCollection findByCommOverride(string $comm_override) Return ChildSalesOrder objects filtered by the comm_override column
 * @method     ChildSalesOrder[]|ObjectCollection findByChargeSplit(string $charge_split) Return ChildSalesOrder objects filtered by the charge_split column
 * @method     ChildSalesOrder[]|ObjectCollection findByCreditcartApproved(string $creditcart_approved) Return ChildSalesOrder objects filtered by the creditcart_approved column
 * @method     ChildSalesOrder[]|ObjectCollection findByOriginalOrdernumber(string $original_ordernumber) Return ChildSalesOrder objects filtered by the original_ordernumber column
 * @method     ChildSalesOrder[]|ObjectCollection findByHasNotes(string $has_notes) Return ChildSalesOrder objects filtered by the has_notes column
 * @method     ChildSalesOrder[]|ObjectCollection findByHasDocuments(string $has_documents) Return ChildSalesOrder objects filtered by the has_documents column
 * @method     ChildSalesOrder[]|ObjectCollection findByHasTracking(string $has_tracking) Return ChildSalesOrder objects filtered by the has_tracking column
 * @method     ChildSalesOrder[]|ObjectCollection findByDate(int $date) Return ChildSalesOrder objects filtered by the date column
 * @method     ChildSalesOrder[]|ObjectCollection findByTime(int $time) Return ChildSalesOrder objects filtered by the time column
 * @method     ChildSalesOrder[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesOrder objects filtered by the dummy column
 * @method     ChildSalesOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalesOrderQuery) {
            return $criteria;
        }
        $query = new ChildSalesOrderQuery();
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
     * @return ChildSalesOrder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesOrderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSalesOrder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ordernumber, status, holdstatus, custid, shiptoid, shipto_name, shipto_address1, shipto_address2, shipto_address3, shipto_address4, shipto_city, shipto_state, shipto_zip, custpo, order_date, termcode, shipviacode, invoice_number, invoice_date, genledger_period, salesperson_1, salesperson_1pct, salesperson_2, salesperson_2pct, salesperson_3, salesperson_3pct, contract_nbr, batch_nbr, dropreleasehold, subtotal_nontax, subtotal_tax, total_tax, total_freight, total_misc, total_order, total_cost, lock, taken_date, taken_time, pick_date, pick_time, pack_date, pack_time, verify_date, verify_time, creditmemo, booked, original_whse, billto_state, shipcomplete, cwo_flag, division, taken_code, pack_code, pick_code, verify_code, total_discount, edi_refererencenbr, user_code1, user_code2, user_code3, user_code4, exchange_country, exchange_rate, weight_total, weight_override, box_count, request_date, cancel_date, lockedby, release_number, whse, backorder_date, deptcode, freight_in_entered, dropship_entered, er_flag, freight_in, dropship, minorder, contract_terms, dropship_billed, order_type, tracking_edinumber, source, pick_format, invoice_format, cash_amount, check_amount, check_number, deposit_amount, deposit_number, original_subtotal_tax, original_subtotal_nontax, original_total_tax, original_total, pick_printdate, pick_printtime, contact, phone_intl, phone_accesscode, phone_countrycode, phone, phone_ext, fax_intl, fax_accesscode, fax_countrycode, fax, ship_account, change_due, discount_additional, all_ship, credit_applied, invoice_printdate, invoice_printtime, discount_freight, ship_completeoverride, contact_email, manual_freight, internal_freight, cost_freight, route, route_seq, edi_855sent, freight_3rdparty, fob, confirm_image, cstk_consign, manufacturer, pick_queue, arrive_date, surcharge_status, freight_group, comm_override, charge_split, creditcart_approved, original_ordernumber, has_notes, has_documents, has_tracking, date, time, dummy FROM oe_head WHERE ordernumber = :p0';
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
            /** @var ChildSalesOrder $obj */
            $obj = new ChildSalesOrder();
            $obj->hydrate($row);
            SalesOrderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSalesOrder|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORDERNUMBER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORDERNUMBER, $keys, Criteria::IN);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOrdernumber($ordernumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordernumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORDERNUMBER, $ordernumber, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the holdstatus column
     *
     * Example usage:
     * <code>
     * $query->filterByHoldstatus('fooValue');   // WHERE holdstatus = 'fooValue'
     * $query->filterByHoldstatus('%fooValue%', Criteria::LIKE); // WHERE holdstatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $holdstatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByHoldstatus($holdstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($holdstatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_HOLDSTATUS, $holdstatus, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCustid($custid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CUSTID, $custid, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoid($shiptoid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTOID, $shiptoid, $comparison);
    }

    /**
     * Filter the query on the shipto_name column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoName('fooValue');   // WHERE shipto_name = 'fooValue'
     * $query->filterByShiptoName('%fooValue%', Criteria::LIKE); // WHERE shipto_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoName($shiptoName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTO_NAME, $shiptoName, $comparison);
    }

    /**
     * Filter the query on the shipto_address1 column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoAddress1('fooValue');   // WHERE shipto_address1 = 'fooValue'
     * $query->filterByShiptoAddress1('%fooValue%', Criteria::LIKE); // WHERE shipto_address1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoAddress1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoAddress1($shiptoAddress1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoAddress1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTO_ADDRESS1, $shiptoAddress1, $comparison);
    }

    /**
     * Filter the query on the shipto_address2 column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoAddress2('fooValue');   // WHERE shipto_address2 = 'fooValue'
     * $query->filterByShiptoAddress2('%fooValue%', Criteria::LIKE); // WHERE shipto_address2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoAddress2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoAddress2($shiptoAddress2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoAddress2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTO_ADDRESS2, $shiptoAddress2, $comparison);
    }

    /**
     * Filter the query on the shipto_address3 column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoAddress3('fooValue');   // WHERE shipto_address3 = 'fooValue'
     * $query->filterByShiptoAddress3('%fooValue%', Criteria::LIKE); // WHERE shipto_address3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoAddress3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoAddress3($shiptoAddress3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoAddress3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTO_ADDRESS3, $shiptoAddress3, $comparison);
    }

    /**
     * Filter the query on the shipto_address4 column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoAddress4('fooValue');   // WHERE shipto_address4 = 'fooValue'
     * $query->filterByShiptoAddress4('%fooValue%', Criteria::LIKE); // WHERE shipto_address4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoAddress4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoAddress4($shiptoAddress4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoAddress4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTO_ADDRESS4, $shiptoAddress4, $comparison);
    }

    /**
     * Filter the query on the shipto_city column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoCity('fooValue');   // WHERE shipto_city = 'fooValue'
     * $query->filterByShiptoCity('%fooValue%', Criteria::LIKE); // WHERE shipto_city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoCity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoCity($shiptoCity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoCity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTO_CITY, $shiptoCity, $comparison);
    }

    /**
     * Filter the query on the shipto_state column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoState('fooValue');   // WHERE shipto_state = 'fooValue'
     * $query->filterByShiptoState('%fooValue%', Criteria::LIKE); // WHERE shipto_state LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoState The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoState($shiptoState = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoState)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTO_STATE, $shiptoState, $comparison);
    }

    /**
     * Filter the query on the shipto_zip column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoZip('fooValue');   // WHERE shipto_zip = 'fooValue'
     * $query->filterByShiptoZip('%fooValue%', Criteria::LIKE); // WHERE shipto_zip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shiptoZip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShiptoZip($shiptoZip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shiptoZip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPTO_ZIP, $shiptoZip, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCustpo($custpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($custpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CUSTPO, $custpo, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOrderDate($orderDate = null, $comparison = null)
    {
        if (is_array($orderDate)) {
            $useMinMax = false;
            if (isset($orderDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORDER_DATE, $orderDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORDER_DATE, $orderDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORDER_DATE, $orderDate, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTermcode($termcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TERMCODE, $termcode, $comparison);
    }

    /**
     * Filter the query on the shipviacode column
     *
     * Example usage:
     * <code>
     * $query->filterByShipviacode('fooValue');   // WHERE shipviacode = 'fooValue'
     * $query->filterByShipviacode('%fooValue%', Criteria::LIKE); // WHERE shipviacode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipviacode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShipviacode($shipviacode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipviacode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPVIACODE, $shipviacode, $comparison);
    }

    /**
     * Filter the query on the invoice_number column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoiceNumber(1234); // WHERE invoice_number = 1234
     * $query->filterByInvoiceNumber(array(12, 34)); // WHERE invoice_number IN (12, 34)
     * $query->filterByInvoiceNumber(array('min' => 12)); // WHERE invoice_number > 12
     * </code>
     *
     * @param     mixed $invoiceNumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByInvoiceNumber($invoiceNumber = null, $comparison = null)
    {
        if (is_array($invoiceNumber)) {
            $useMinMax = false;
            if (isset($invoiceNumber['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_NUMBER, $invoiceNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoiceNumber['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_NUMBER, $invoiceNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_NUMBER, $invoiceNumber, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByInvoiceDate($invoiceDate = null, $comparison = null)
    {
        if (is_array($invoiceDate)) {
            $useMinMax = false;
            if (isset($invoiceDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_DATE, $invoiceDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoiceDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_DATE, $invoiceDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_DATE, $invoiceDate, $comparison);
    }

    /**
     * Filter the query on the genledger_period column
     *
     * Example usage:
     * <code>
     * $query->filterByGenledgerPeriod(1234); // WHERE genledger_period = 1234
     * $query->filterByGenledgerPeriod(array(12, 34)); // WHERE genledger_period IN (12, 34)
     * $query->filterByGenledgerPeriod(array('min' => 12)); // WHERE genledger_period > 12
     * </code>
     *
     * @param     mixed $genledgerPeriod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByGenledgerPeriod($genledgerPeriod = null, $comparison = null)
    {
        if (is_array($genledgerPeriod)) {
            $useMinMax = false;
            if (isset($genledgerPeriod['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_GENLEDGER_PERIOD, $genledgerPeriod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genledgerPeriod['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_GENLEDGER_PERIOD, $genledgerPeriod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_GENLEDGER_PERIOD, $genledgerPeriod, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesperson1($salesperson1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salesperson1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_1, $salesperson1, $comparison);
    }

    /**
     * Filter the query on the salesperson_1pct column
     *
     * Example usage:
     * <code>
     * $query->filterBySalesperson1pct(1234); // WHERE salesperson_1pct = 1234
     * $query->filterBySalesperson1pct(array(12, 34)); // WHERE salesperson_1pct IN (12, 34)
     * $query->filterBySalesperson1pct(array('min' => 12)); // WHERE salesperson_1pct > 12
     * </code>
     *
     * @param     mixed $salesperson1pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesperson1pct($salesperson1pct = null, $comparison = null)
    {
        if (is_array($salesperson1pct)) {
            $useMinMax = false;
            if (isset($salesperson1pct['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_1PCT, $salesperson1pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salesperson1pct['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_1PCT, $salesperson1pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_1PCT, $salesperson1pct, $comparison);
    }

    /**
     * Filter the query on the salesperson_2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySalesperson2('fooValue');   // WHERE salesperson_2 = 'fooValue'
     * $query->filterBySalesperson2('%fooValue%', Criteria::LIKE); // WHERE salesperson_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salesperson2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesperson2($salesperson2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salesperson2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_2, $salesperson2, $comparison);
    }

    /**
     * Filter the query on the salesperson_2pct column
     *
     * Example usage:
     * <code>
     * $query->filterBySalesperson2pct(1234); // WHERE salesperson_2pct = 1234
     * $query->filterBySalesperson2pct(array(12, 34)); // WHERE salesperson_2pct IN (12, 34)
     * $query->filterBySalesperson2pct(array('min' => 12)); // WHERE salesperson_2pct > 12
     * </code>
     *
     * @param     mixed $salesperson2pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesperson2pct($salesperson2pct = null, $comparison = null)
    {
        if (is_array($salesperson2pct)) {
            $useMinMax = false;
            if (isset($salesperson2pct['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_2PCT, $salesperson2pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salesperson2pct['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_2PCT, $salesperson2pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_2PCT, $salesperson2pct, $comparison);
    }

    /**
     * Filter the query on the salesperson_3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySalesperson3('fooValue');   // WHERE salesperson_3 = 'fooValue'
     * $query->filterBySalesperson3('%fooValue%', Criteria::LIKE); // WHERE salesperson_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salesperson3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesperson3($salesperson3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salesperson3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_3, $salesperson3, $comparison);
    }

    /**
     * Filter the query on the salesperson_3pct column
     *
     * Example usage:
     * <code>
     * $query->filterBySalesperson3pct(1234); // WHERE salesperson_3pct = 1234
     * $query->filterBySalesperson3pct(array(12, 34)); // WHERE salesperson_3pct IN (12, 34)
     * $query->filterBySalesperson3pct(array('min' => 12)); // WHERE salesperson_3pct > 12
     * </code>
     *
     * @param     mixed $salesperson3pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySalesperson3pct($salesperson3pct = null, $comparison = null)
    {
        if (is_array($salesperson3pct)) {
            $useMinMax = false;
            if (isset($salesperson3pct['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_3PCT, $salesperson3pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salesperson3pct['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_3PCT, $salesperson3pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SALESPERSON_3PCT, $salesperson3pct, $comparison);
    }

    /**
     * Filter the query on the contract_nbr column
     *
     * Example usage:
     * <code>
     * $query->filterByContractNbr(1234); // WHERE contract_nbr = 1234
     * $query->filterByContractNbr(array(12, 34)); // WHERE contract_nbr IN (12, 34)
     * $query->filterByContractNbr(array('min' => 12)); // WHERE contract_nbr > 12
     * </code>
     *
     * @param     mixed $contractNbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByContractNbr($contractNbr = null, $comparison = null)
    {
        if (is_array($contractNbr)) {
            $useMinMax = false;
            if (isset($contractNbr['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CONTRACT_NBR, $contractNbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contractNbr['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CONTRACT_NBR, $contractNbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CONTRACT_NBR, $contractNbr, $comparison);
    }

    /**
     * Filter the query on the batch_nbr column
     *
     * Example usage:
     * <code>
     * $query->filterByBatchNbr(1234); // WHERE batch_nbr = 1234
     * $query->filterByBatchNbr(array(12, 34)); // WHERE batch_nbr IN (12, 34)
     * $query->filterByBatchNbr(array('min' => 12)); // WHERE batch_nbr > 12
     * </code>
     *
     * @param     mixed $batchNbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByBatchNbr($batchNbr = null, $comparison = null)
    {
        if (is_array($batchNbr)) {
            $useMinMax = false;
            if (isset($batchNbr['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_BATCH_NBR, $batchNbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchNbr['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_BATCH_NBR, $batchNbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_BATCH_NBR, $batchNbr, $comparison);
    }

    /**
     * Filter the query on the dropreleasehold column
     *
     * Example usage:
     * <code>
     * $query->filterByDropreleasehold('fooValue');   // WHERE dropreleasehold = 'fooValue'
     * $query->filterByDropreleasehold('%fooValue%', Criteria::LIKE); // WHERE dropreleasehold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dropreleasehold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDropreleasehold($dropreleasehold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dropreleasehold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DROPRELEASEHOLD, $dropreleasehold, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySubtotalNontax($subtotalNontax = null, $comparison = null)
    {
        if (is_array($subtotalNontax)) {
            $useMinMax = false;
            if (isset($subtotalNontax['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SUBTOTAL_NONTAX, $subtotalNontax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotalNontax['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SUBTOTAL_NONTAX, $subtotalNontax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SUBTOTAL_NONTAX, $subtotalNontax, $comparison);
    }

    /**
     * Filter the query on the subtotal_tax column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotalTax(1234); // WHERE subtotal_tax = 1234
     * $query->filterBySubtotalTax(array(12, 34)); // WHERE subtotal_tax IN (12, 34)
     * $query->filterBySubtotalTax(array('min' => 12)); // WHERE subtotal_tax > 12
     * </code>
     *
     * @param     mixed $subtotalTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySubtotalTax($subtotalTax = null, $comparison = null)
    {
        if (is_array($subtotalTax)) {
            $useMinMax = false;
            if (isset($subtotalTax['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SUBTOTAL_TAX, $subtotalTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotalTax['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_SUBTOTAL_TAX, $subtotalTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SUBTOTAL_TAX, $subtotalTax, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTotalTax($totalTax = null, $comparison = null)
    {
        if (is_array($totalTax)) {
            $useMinMax = false;
            if (isset($totalTax['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_TAX, $totalTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalTax['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_TAX, $totalTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_TAX, $totalTax, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTotalFreight($totalFreight = null, $comparison = null)
    {
        if (is_array($totalFreight)) {
            $useMinMax = false;
            if (isset($totalFreight['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_FREIGHT, $totalFreight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalFreight['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_FREIGHT, $totalFreight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_FREIGHT, $totalFreight, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTotalMisc($totalMisc = null, $comparison = null)
    {
        if (is_array($totalMisc)) {
            $useMinMax = false;
            if (isset($totalMisc['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_MISC, $totalMisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalMisc['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_MISC, $totalMisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_MISC, $totalMisc, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTotalOrder($totalOrder = null, $comparison = null)
    {
        if (is_array($totalOrder)) {
            $useMinMax = false;
            if (isset($totalOrder['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_ORDER, $totalOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalOrder['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_ORDER, $totalOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_ORDER, $totalOrder, $comparison);
    }

    /**
     * Filter the query on the total_cost column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalCost(1234); // WHERE total_cost = 1234
     * $query->filterByTotalCost(array(12, 34)); // WHERE total_cost IN (12, 34)
     * $query->filterByTotalCost(array('min' => 12)); // WHERE total_cost > 12
     * </code>
     *
     * @param     mixed $totalCost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTotalCost($totalCost = null, $comparison = null)
    {
        if (is_array($totalCost)) {
            $useMinMax = false;
            if (isset($totalCost['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_COST, $totalCost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalCost['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_COST, $totalCost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_COST, $totalCost, $comparison);
    }

    /**
     * Filter the query on the lock column
     *
     * Example usage:
     * <code>
     * $query->filterByLock('fooValue');   // WHERE lock = 'fooValue'
     * $query->filterByLock('%fooValue%', Criteria::LIKE); // WHERE lock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByLock($lock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_LOCK, $lock, $comparison);
    }

    /**
     * Filter the query on the taken_date column
     *
     * Example usage:
     * <code>
     * $query->filterByTakenDate(1234); // WHERE taken_date = 1234
     * $query->filterByTakenDate(array(12, 34)); // WHERE taken_date IN (12, 34)
     * $query->filterByTakenDate(array('min' => 12)); // WHERE taken_date > 12
     * </code>
     *
     * @param     mixed $takenDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTakenDate($takenDate = null, $comparison = null)
    {
        if (is_array($takenDate)) {
            $useMinMax = false;
            if (isset($takenDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TAKEN_DATE, $takenDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($takenDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TAKEN_DATE, $takenDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TAKEN_DATE, $takenDate, $comparison);
    }

    /**
     * Filter the query on the taken_time column
     *
     * Example usage:
     * <code>
     * $query->filterByTakenTime(1234); // WHERE taken_time = 1234
     * $query->filterByTakenTime(array(12, 34)); // WHERE taken_time IN (12, 34)
     * $query->filterByTakenTime(array('min' => 12)); // WHERE taken_time > 12
     * </code>
     *
     * @param     mixed $takenTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTakenTime($takenTime = null, $comparison = null)
    {
        if (is_array($takenTime)) {
            $useMinMax = false;
            if (isset($takenTime['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TAKEN_TIME, $takenTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($takenTime['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TAKEN_TIME, $takenTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TAKEN_TIME, $takenTime, $comparison);
    }

    /**
     * Filter the query on the pick_date column
     *
     * Example usage:
     * <code>
     * $query->filterByPickDate(1234); // WHERE pick_date = 1234
     * $query->filterByPickDate(array(12, 34)); // WHERE pick_date IN (12, 34)
     * $query->filterByPickDate(array('min' => 12)); // WHERE pick_date > 12
     * </code>
     *
     * @param     mixed $pickDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPickDate($pickDate = null, $comparison = null)
    {
        if (is_array($pickDate)) {
            $useMinMax = false;
            if (isset($pickDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PICK_DATE, $pickDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pickDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PICK_DATE, $pickDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PICK_DATE, $pickDate, $comparison);
    }

    /**
     * Filter the query on the pick_time column
     *
     * Example usage:
     * <code>
     * $query->filterByPickTime(1234); // WHERE pick_time = 1234
     * $query->filterByPickTime(array(12, 34)); // WHERE pick_time IN (12, 34)
     * $query->filterByPickTime(array('min' => 12)); // WHERE pick_time > 12
     * </code>
     *
     * @param     mixed $pickTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPickTime($pickTime = null, $comparison = null)
    {
        if (is_array($pickTime)) {
            $useMinMax = false;
            if (isset($pickTime['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PICK_TIME, $pickTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pickTime['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PICK_TIME, $pickTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PICK_TIME, $pickTime, $comparison);
    }

    /**
     * Filter the query on the pack_date column
     *
     * Example usage:
     * <code>
     * $query->filterByPackDate(1234); // WHERE pack_date = 1234
     * $query->filterByPackDate(array(12, 34)); // WHERE pack_date IN (12, 34)
     * $query->filterByPackDate(array('min' => 12)); // WHERE pack_date > 12
     * </code>
     *
     * @param     mixed $packDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPackDate($packDate = null, $comparison = null)
    {
        if (is_array($packDate)) {
            $useMinMax = false;
            if (isset($packDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PACK_DATE, $packDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($packDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PACK_DATE, $packDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PACK_DATE, $packDate, $comparison);
    }

    /**
     * Filter the query on the pack_time column
     *
     * Example usage:
     * <code>
     * $query->filterByPackTime(1234); // WHERE pack_time = 1234
     * $query->filterByPackTime(array(12, 34)); // WHERE pack_time IN (12, 34)
     * $query->filterByPackTime(array('min' => 12)); // WHERE pack_time > 12
     * </code>
     *
     * @param     mixed $packTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPackTime($packTime = null, $comparison = null)
    {
        if (is_array($packTime)) {
            $useMinMax = false;
            if (isset($packTime['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PACK_TIME, $packTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($packTime['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PACK_TIME, $packTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PACK_TIME, $packTime, $comparison);
    }

    /**
     * Filter the query on the verify_date column
     *
     * Example usage:
     * <code>
     * $query->filterByVerifyDate(1234); // WHERE verify_date = 1234
     * $query->filterByVerifyDate(array(12, 34)); // WHERE verify_date IN (12, 34)
     * $query->filterByVerifyDate(array('min' => 12)); // WHERE verify_date > 12
     * </code>
     *
     * @param     mixed $verifyDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByVerifyDate($verifyDate = null, $comparison = null)
    {
        if (is_array($verifyDate)) {
            $useMinMax = false;
            if (isset($verifyDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_VERIFY_DATE, $verifyDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verifyDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_VERIFY_DATE, $verifyDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_VERIFY_DATE, $verifyDate, $comparison);
    }

    /**
     * Filter the query on the verify_time column
     *
     * Example usage:
     * <code>
     * $query->filterByVerifyTime(1234); // WHERE verify_time = 1234
     * $query->filterByVerifyTime(array(12, 34)); // WHERE verify_time IN (12, 34)
     * $query->filterByVerifyTime(array('min' => 12)); // WHERE verify_time > 12
     * </code>
     *
     * @param     mixed $verifyTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByVerifyTime($verifyTime = null, $comparison = null)
    {
        if (is_array($verifyTime)) {
            $useMinMax = false;
            if (isset($verifyTime['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_VERIFY_TIME, $verifyTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verifyTime['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_VERIFY_TIME, $verifyTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_VERIFY_TIME, $verifyTime, $comparison);
    }

    /**
     * Filter the query on the creditmemo column
     *
     * Example usage:
     * <code>
     * $query->filterByCreditmemo('fooValue');   // WHERE creditmemo = 'fooValue'
     * $query->filterByCreditmemo('%fooValue%', Criteria::LIKE); // WHERE creditmemo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creditmemo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCreditmemo($creditmemo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creditmemo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CREDITMEMO, $creditmemo, $comparison);
    }

    /**
     * Filter the query on the booked column
     *
     * Example usage:
     * <code>
     * $query->filterByBooked('fooValue');   // WHERE booked = 'fooValue'
     * $query->filterByBooked('%fooValue%', Criteria::LIKE); // WHERE booked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $booked The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByBooked($booked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($booked)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_BOOKED, $booked, $comparison);
    }

    /**
     * Filter the query on the original_whse column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalWhse('fooValue');   // WHERE original_whse = 'fooValue'
     * $query->filterByOriginalWhse('%fooValue%', Criteria::LIKE); // WHERE original_whse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalWhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOriginalWhse($originalWhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalWhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_WHSE, $originalWhse, $comparison);
    }

    /**
     * Filter the query on the billto_state column
     *
     * Example usage:
     * <code>
     * $query->filterByBilltoState('fooValue');   // WHERE billto_state = 'fooValue'
     * $query->filterByBilltoState('%fooValue%', Criteria::LIKE); // WHERE billto_state LIKE '%fooValue%'
     * </code>
     *
     * @param     string $billtoState The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByBilltoState($billtoState = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($billtoState)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_BILLTO_STATE, $billtoState, $comparison);
    }

    /**
     * Filter the query on the shipcomplete column
     *
     * Example usage:
     * <code>
     * $query->filterByShipcomplete('fooValue');   // WHERE shipcomplete = 'fooValue'
     * $query->filterByShipcomplete('%fooValue%', Criteria::LIKE); // WHERE shipcomplete LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipcomplete The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShipcomplete($shipcomplete = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipcomplete)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIPCOMPLETE, $shipcomplete, $comparison);
    }

    /**
     * Filter the query on the cwo_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByCwoFlag('fooValue');   // WHERE cwo_flag = 'fooValue'
     * $query->filterByCwoFlag('%fooValue%', Criteria::LIKE); // WHERE cwo_flag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cwoFlag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCwoFlag($cwoFlag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cwoFlag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CWO_FLAG, $cwoFlag, $comparison);
    }

    /**
     * Filter the query on the division column
     *
     * Example usage:
     * <code>
     * $query->filterByDivision('fooValue');   // WHERE division = 'fooValue'
     * $query->filterByDivision('%fooValue%', Criteria::LIKE); // WHERE division LIKE '%fooValue%'
     * </code>
     *
     * @param     string $division The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDivision($division = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($division)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DIVISION, $division, $comparison);
    }

    /**
     * Filter the query on the taken_code column
     *
     * Example usage:
     * <code>
     * $query->filterByTakenCode('fooValue');   // WHERE taken_code = 'fooValue'
     * $query->filterByTakenCode('%fooValue%', Criteria::LIKE); // WHERE taken_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $takenCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTakenCode($takenCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($takenCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TAKEN_CODE, $takenCode, $comparison);
    }

    /**
     * Filter the query on the pack_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPackCode('fooValue');   // WHERE pack_code = 'fooValue'
     * $query->filterByPackCode('%fooValue%', Criteria::LIKE); // WHERE pack_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $packCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPackCode($packCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($packCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PACK_CODE, $packCode, $comparison);
    }

    /**
     * Filter the query on the pick_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPickCode('fooValue');   // WHERE pick_code = 'fooValue'
     * $query->filterByPickCode('%fooValue%', Criteria::LIKE); // WHERE pick_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pickCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPickCode($pickCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pickCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PICK_CODE, $pickCode, $comparison);
    }

    /**
     * Filter the query on the verify_code column
     *
     * Example usage:
     * <code>
     * $query->filterByVerifyCode('fooValue');   // WHERE verify_code = 'fooValue'
     * $query->filterByVerifyCode('%fooValue%', Criteria::LIKE); // WHERE verify_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verifyCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByVerifyCode($verifyCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verifyCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_VERIFY_CODE, $verifyCode, $comparison);
    }

    /**
     * Filter the query on the total_discount column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalDiscount(1234); // WHERE total_discount = 1234
     * $query->filterByTotalDiscount(array(12, 34)); // WHERE total_discount IN (12, 34)
     * $query->filterByTotalDiscount(array('min' => 12)); // WHERE total_discount > 12
     * </code>
     *
     * @param     mixed $totalDiscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTotalDiscount($totalDiscount = null, $comparison = null)
    {
        if (is_array($totalDiscount)) {
            $useMinMax = false;
            if (isset($totalDiscount['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_DISCOUNT, $totalDiscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalDiscount['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_DISCOUNT, $totalDiscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TOTAL_DISCOUNT, $totalDiscount, $comparison);
    }

    /**
     * Filter the query on the edi_refererencenbr column
     *
     * Example usage:
     * <code>
     * $query->filterByEdiRefererencenbr('fooValue');   // WHERE edi_refererencenbr = 'fooValue'
     * $query->filterByEdiRefererencenbr('%fooValue%', Criteria::LIKE); // WHERE edi_refererencenbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ediRefererencenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByEdiRefererencenbr($ediRefererencenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ediRefererencenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_EDI_REFERERENCENBR, $ediRefererencenbr, $comparison);
    }

    /**
     * Filter the query on the user_code1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUserCode1('fooValue');   // WHERE user_code1 = 'fooValue'
     * $query->filterByUserCode1('%fooValue%', Criteria::LIKE); // WHERE user_code1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userCode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByUserCode1($userCode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userCode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_USER_CODE1, $userCode1, $comparison);
    }

    /**
     * Filter the query on the user_code2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUserCode2('fooValue');   // WHERE user_code2 = 'fooValue'
     * $query->filterByUserCode2('%fooValue%', Criteria::LIKE); // WHERE user_code2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userCode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByUserCode2($userCode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userCode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_USER_CODE2, $userCode2, $comparison);
    }

    /**
     * Filter the query on the user_code3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUserCode3('fooValue');   // WHERE user_code3 = 'fooValue'
     * $query->filterByUserCode3('%fooValue%', Criteria::LIKE); // WHERE user_code3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userCode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByUserCode3($userCode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userCode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_USER_CODE3, $userCode3, $comparison);
    }

    /**
     * Filter the query on the user_code4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUserCode4('fooValue');   // WHERE user_code4 = 'fooValue'
     * $query->filterByUserCode4('%fooValue%', Criteria::LIKE); // WHERE user_code4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userCode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByUserCode4($userCode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userCode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_USER_CODE4, $userCode4, $comparison);
    }

    /**
     * Filter the query on the exchange_country column
     *
     * Example usage:
     * <code>
     * $query->filterByExchangeCountry('fooValue');   // WHERE exchange_country = 'fooValue'
     * $query->filterByExchangeCountry('%fooValue%', Criteria::LIKE); // WHERE exchange_country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $exchangeCountry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByExchangeCountry($exchangeCountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($exchangeCountry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_EXCHANGE_COUNTRY, $exchangeCountry, $comparison);
    }

    /**
     * Filter the query on the exchange_rate column
     *
     * Example usage:
     * <code>
     * $query->filterByExchangeRate(1234); // WHERE exchange_rate = 1234
     * $query->filterByExchangeRate(array(12, 34)); // WHERE exchange_rate IN (12, 34)
     * $query->filterByExchangeRate(array('min' => 12)); // WHERE exchange_rate > 12
     * </code>
     *
     * @param     mixed $exchangeRate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByExchangeRate($exchangeRate = null, $comparison = null)
    {
        if (is_array($exchangeRate)) {
            $useMinMax = false;
            if (isset($exchangeRate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_EXCHANGE_RATE, $exchangeRate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($exchangeRate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_EXCHANGE_RATE, $exchangeRate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_EXCHANGE_RATE, $exchangeRate, $comparison);
    }

    /**
     * Filter the query on the weight_total column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightTotal(1234); // WHERE weight_total = 1234
     * $query->filterByWeightTotal(array(12, 34)); // WHERE weight_total IN (12, 34)
     * $query->filterByWeightTotal(array('min' => 12)); // WHERE weight_total > 12
     * </code>
     *
     * @param     mixed $weightTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByWeightTotal($weightTotal = null, $comparison = null)
    {
        if (is_array($weightTotal)) {
            $useMinMax = false;
            if (isset($weightTotal['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_WEIGHT_TOTAL, $weightTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightTotal['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_WEIGHT_TOTAL, $weightTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_WEIGHT_TOTAL, $weightTotal, $comparison);
    }

    /**
     * Filter the query on the weight_override column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightOverride('fooValue');   // WHERE weight_override = 'fooValue'
     * $query->filterByWeightOverride('%fooValue%', Criteria::LIKE); // WHERE weight_override LIKE '%fooValue%'
     * </code>
     *
     * @param     string $weightOverride The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByWeightOverride($weightOverride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($weightOverride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_WEIGHT_OVERRIDE, $weightOverride, $comparison);
    }

    /**
     * Filter the query on the box_count column
     *
     * Example usage:
     * <code>
     * $query->filterByBoxCount(1234); // WHERE box_count = 1234
     * $query->filterByBoxCount(array(12, 34)); // WHERE box_count IN (12, 34)
     * $query->filterByBoxCount(array('min' => 12)); // WHERE box_count > 12
     * </code>
     *
     * @param     mixed $boxCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByBoxCount($boxCount = null, $comparison = null)
    {
        if (is_array($boxCount)) {
            $useMinMax = false;
            if (isset($boxCount['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_BOX_COUNT, $boxCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boxCount['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_BOX_COUNT, $boxCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_BOX_COUNT, $boxCount, $comparison);
    }

    /**
     * Filter the query on the request_date column
     *
     * Example usage:
     * <code>
     * $query->filterByRequestDate(1234); // WHERE request_date = 1234
     * $query->filterByRequestDate(array(12, 34)); // WHERE request_date IN (12, 34)
     * $query->filterByRequestDate(array('min' => 12)); // WHERE request_date > 12
     * </code>
     *
     * @param     mixed $requestDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByRequestDate($requestDate = null, $comparison = null)
    {
        if (is_array($requestDate)) {
            $useMinMax = false;
            if (isset($requestDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_REQUEST_DATE, $requestDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requestDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_REQUEST_DATE, $requestDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_REQUEST_DATE, $requestDate, $comparison);
    }

    /**
     * Filter the query on the cancel_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCancelDate(1234); // WHERE cancel_date = 1234
     * $query->filterByCancelDate(array(12, 34)); // WHERE cancel_date IN (12, 34)
     * $query->filterByCancelDate(array('min' => 12)); // WHERE cancel_date > 12
     * </code>
     *
     * @param     mixed $cancelDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCancelDate($cancelDate = null, $comparison = null)
    {
        if (is_array($cancelDate)) {
            $useMinMax = false;
            if (isset($cancelDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CANCEL_DATE, $cancelDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cancelDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CANCEL_DATE, $cancelDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CANCEL_DATE, $cancelDate, $comparison);
    }

    /**
     * Filter the query on the lockedby column
     *
     * Example usage:
     * <code>
     * $query->filterByLockedby('fooValue');   // WHERE lockedby = 'fooValue'
     * $query->filterByLockedby('%fooValue%', Criteria::LIKE); // WHERE lockedby LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lockedby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByLockedby($lockedby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lockedby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_LOCKEDBY, $lockedby, $comparison);
    }

    /**
     * Filter the query on the release_number column
     *
     * Example usage:
     * <code>
     * $query->filterByReleaseNumber('fooValue');   // WHERE release_number = 'fooValue'
     * $query->filterByReleaseNumber('%fooValue%', Criteria::LIKE); // WHERE release_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $releaseNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByReleaseNumber($releaseNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($releaseNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_RELEASE_NUMBER, $releaseNumber, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByWhse($whse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_WHSE, $whse, $comparison);
    }

    /**
     * Filter the query on the backorder_date column
     *
     * Example usage:
     * <code>
     * $query->filterByBackorderDate(1234); // WHERE backorder_date = 1234
     * $query->filterByBackorderDate(array(12, 34)); // WHERE backorder_date IN (12, 34)
     * $query->filterByBackorderDate(array('min' => 12)); // WHERE backorder_date > 12
     * </code>
     *
     * @param     mixed $backorderDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByBackorderDate($backorderDate = null, $comparison = null)
    {
        if (is_array($backorderDate)) {
            $useMinMax = false;
            if (isset($backorderDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_BACKORDER_DATE, $backorderDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($backorderDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_BACKORDER_DATE, $backorderDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_BACKORDER_DATE, $backorderDate, $comparison);
    }

    /**
     * Filter the query on the deptcode column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptcode('fooValue');   // WHERE deptcode = 'fooValue'
     * $query->filterByDeptcode('%fooValue%', Criteria::LIKE); // WHERE deptcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deptcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDeptcode($deptcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deptcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DEPTCODE, $deptcode, $comparison);
    }

    /**
     * Filter the query on the freight_in_entered column
     *
     * Example usage:
     * <code>
     * $query->filterByFreightInEntered('fooValue');   // WHERE freight_in_entered = 'fooValue'
     * $query->filterByFreightInEntered('%fooValue%', Criteria::LIKE); // WHERE freight_in_entered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $freightInEntered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFreightInEntered($freightInEntered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($freightInEntered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FREIGHT_IN_ENTERED, $freightInEntered, $comparison);
    }

    /**
     * Filter the query on the dropship_entered column
     *
     * Example usage:
     * <code>
     * $query->filterByDropshipEntered('fooValue');   // WHERE dropship_entered = 'fooValue'
     * $query->filterByDropshipEntered('%fooValue%', Criteria::LIKE); // WHERE dropship_entered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dropshipEntered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDropshipEntered($dropshipEntered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dropshipEntered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DROPSHIP_ENTERED, $dropshipEntered, $comparison);
    }

    /**
     * Filter the query on the er_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByErFlag('fooValue');   // WHERE er_flag = 'fooValue'
     * $query->filterByErFlag('%fooValue%', Criteria::LIKE); // WHERE er_flag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $erFlag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByErFlag($erFlag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($erFlag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ER_FLAG, $erFlag, $comparison);
    }

    /**
     * Filter the query on the freight_in column
     *
     * Example usage:
     * <code>
     * $query->filterByFreightIn(1234); // WHERE freight_in = 1234
     * $query->filterByFreightIn(array(12, 34)); // WHERE freight_in IN (12, 34)
     * $query->filterByFreightIn(array('min' => 12)); // WHERE freight_in > 12
     * </code>
     *
     * @param     mixed $freightIn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFreightIn($freightIn = null, $comparison = null)
    {
        if (is_array($freightIn)) {
            $useMinMax = false;
            if (isset($freightIn['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_FREIGHT_IN, $freightIn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freightIn['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_FREIGHT_IN, $freightIn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FREIGHT_IN, $freightIn, $comparison);
    }

    /**
     * Filter the query on the dropship column
     *
     * Example usage:
     * <code>
     * $query->filterByDropship(1234); // WHERE dropship = 1234
     * $query->filterByDropship(array(12, 34)); // WHERE dropship IN (12, 34)
     * $query->filterByDropship(array('min' => 12)); // WHERE dropship > 12
     * </code>
     *
     * @param     mixed $dropship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDropship($dropship = null, $comparison = null)
    {
        if (is_array($dropship)) {
            $useMinMax = false;
            if (isset($dropship['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DROPSHIP, $dropship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dropship['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DROPSHIP, $dropship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DROPSHIP, $dropship, $comparison);
    }

    /**
     * Filter the query on the minorder column
     *
     * Example usage:
     * <code>
     * $query->filterByMinorder(1234); // WHERE minorder = 1234
     * $query->filterByMinorder(array(12, 34)); // WHERE minorder IN (12, 34)
     * $query->filterByMinorder(array('min' => 12)); // WHERE minorder > 12
     * </code>
     *
     * @param     mixed $minorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByMinorder($minorder = null, $comparison = null)
    {
        if (is_array($minorder)) {
            $useMinMax = false;
            if (isset($minorder['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_MINORDER, $minorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minorder['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_MINORDER, $minorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_MINORDER, $minorder, $comparison);
    }

    /**
     * Filter the query on the contract_terms column
     *
     * Example usage:
     * <code>
     * $query->filterByContractTerms('fooValue');   // WHERE contract_terms = 'fooValue'
     * $query->filterByContractTerms('%fooValue%', Criteria::LIKE); // WHERE contract_terms LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contractTerms The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByContractTerms($contractTerms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contractTerms)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CONTRACT_TERMS, $contractTerms, $comparison);
    }

    /**
     * Filter the query on the dropship_billed column
     *
     * Example usage:
     * <code>
     * $query->filterByDropshipBilled('fooValue');   // WHERE dropship_billed = 'fooValue'
     * $query->filterByDropshipBilled('%fooValue%', Criteria::LIKE); // WHERE dropship_billed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dropshipBilled The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDropshipBilled($dropshipBilled = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dropshipBilled)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DROPSHIP_BILLED, $dropshipBilled, $comparison);
    }

    /**
     * Filter the query on the order_type column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderType('fooValue');   // WHERE order_type = 'fooValue'
     * $query->filterByOrderType('%fooValue%', Criteria::LIKE); // WHERE order_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orderType The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOrderType($orderType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orderType)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORDER_TYPE, $orderType, $comparison);
    }

    /**
     * Filter the query on the tracking_edinumber column
     *
     * Example usage:
     * <code>
     * $query->filterByTrackingEdinumber('fooValue');   // WHERE tracking_edinumber = 'fooValue'
     * $query->filterByTrackingEdinumber('%fooValue%', Criteria::LIKE); // WHERE tracking_edinumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trackingEdinumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTrackingEdinumber($trackingEdinumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trackingEdinumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TRACKING_EDINUMBER, $trackingEdinumber, $comparison);
    }

    /**
     * Filter the query on the source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE source = 'fooValue'
     * $query->filterBySource('%fooValue%', Criteria::LIKE); // WHERE source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the pick_format column
     *
     * Example usage:
     * <code>
     * $query->filterByPickFormat('fooValue');   // WHERE pick_format = 'fooValue'
     * $query->filterByPickFormat('%fooValue%', Criteria::LIKE); // WHERE pick_format LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pickFormat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPickFormat($pickFormat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pickFormat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PICK_FORMAT, $pickFormat, $comparison);
    }

    /**
     * Filter the query on the invoice_format column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoiceFormat('fooValue');   // WHERE invoice_format = 'fooValue'
     * $query->filterByInvoiceFormat('%fooValue%', Criteria::LIKE); // WHERE invoice_format LIKE '%fooValue%'
     * </code>
     *
     * @param     string $invoiceFormat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByInvoiceFormat($invoiceFormat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($invoiceFormat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_FORMAT, $invoiceFormat, $comparison);
    }

    /**
     * Filter the query on the cash_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByCashAmount(1234); // WHERE cash_amount = 1234
     * $query->filterByCashAmount(array(12, 34)); // WHERE cash_amount IN (12, 34)
     * $query->filterByCashAmount(array('min' => 12)); // WHERE cash_amount > 12
     * </code>
     *
     * @param     mixed $cashAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCashAmount($cashAmount = null, $comparison = null)
    {
        if (is_array($cashAmount)) {
            $useMinMax = false;
            if (isset($cashAmount['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CASH_AMOUNT, $cashAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cashAmount['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CASH_AMOUNT, $cashAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CASH_AMOUNT, $cashAmount, $comparison);
    }

    /**
     * Filter the query on the check_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByCheckAmount(1234); // WHERE check_amount = 1234
     * $query->filterByCheckAmount(array(12, 34)); // WHERE check_amount IN (12, 34)
     * $query->filterByCheckAmount(array('min' => 12)); // WHERE check_amount > 12
     * </code>
     *
     * @param     mixed $checkAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCheckAmount($checkAmount = null, $comparison = null)
    {
        if (is_array($checkAmount)) {
            $useMinMax = false;
            if (isset($checkAmount['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CHECK_AMOUNT, $checkAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checkAmount['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CHECK_AMOUNT, $checkAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CHECK_AMOUNT, $checkAmount, $comparison);
    }

    /**
     * Filter the query on the check_number column
     *
     * Example usage:
     * <code>
     * $query->filterByCheckNumber('fooValue');   // WHERE check_number = 'fooValue'
     * $query->filterByCheckNumber('%fooValue%', Criteria::LIKE); // WHERE check_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $checkNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCheckNumber($checkNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($checkNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CHECK_NUMBER, $checkNumber, $comparison);
    }

    /**
     * Filter the query on the deposit_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByDepositAmount(1234); // WHERE deposit_amount = 1234
     * $query->filterByDepositAmount(array(12, 34)); // WHERE deposit_amount IN (12, 34)
     * $query->filterByDepositAmount(array('min' => 12)); // WHERE deposit_amount > 12
     * </code>
     *
     * @param     mixed $depositAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDepositAmount($depositAmount = null, $comparison = null)
    {
        if (is_array($depositAmount)) {
            $useMinMax = false;
            if (isset($depositAmount['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DEPOSIT_AMOUNT, $depositAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depositAmount['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DEPOSIT_AMOUNT, $depositAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DEPOSIT_AMOUNT, $depositAmount, $comparison);
    }

    /**
     * Filter the query on the deposit_number column
     *
     * Example usage:
     * <code>
     * $query->filterByDepositNumber('fooValue');   // WHERE deposit_number = 'fooValue'
     * $query->filterByDepositNumber('%fooValue%', Criteria::LIKE); // WHERE deposit_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depositNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDepositNumber($depositNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depositNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DEPOSIT_NUMBER, $depositNumber, $comparison);
    }

    /**
     * Filter the query on the original_subtotal_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalSubtotalTax(1234); // WHERE original_subtotal_tax = 1234
     * $query->filterByOriginalSubtotalTax(array(12, 34)); // WHERE original_subtotal_tax IN (12, 34)
     * $query->filterByOriginalSubtotalTax(array('min' => 12)); // WHERE original_subtotal_tax > 12
     * </code>
     *
     * @param     mixed $originalSubtotalTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOriginalSubtotalTax($originalSubtotalTax = null, $comparison = null)
    {
        if (is_array($originalSubtotalTax)) {
            $useMinMax = false;
            if (isset($originalSubtotalTax['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_SUBTOTAL_TAX, $originalSubtotalTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originalSubtotalTax['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_SUBTOTAL_TAX, $originalSubtotalTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_SUBTOTAL_TAX, $originalSubtotalTax, $comparison);
    }

    /**
     * Filter the query on the original_subtotal_nontax column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalSubtotalNontax(1234); // WHERE original_subtotal_nontax = 1234
     * $query->filterByOriginalSubtotalNontax(array(12, 34)); // WHERE original_subtotal_nontax IN (12, 34)
     * $query->filterByOriginalSubtotalNontax(array('min' => 12)); // WHERE original_subtotal_nontax > 12
     * </code>
     *
     * @param     mixed $originalSubtotalNontax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOriginalSubtotalNontax($originalSubtotalNontax = null, $comparison = null)
    {
        if (is_array($originalSubtotalNontax)) {
            $useMinMax = false;
            if (isset($originalSubtotalNontax['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_SUBTOTAL_NONTAX, $originalSubtotalNontax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originalSubtotalNontax['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_SUBTOTAL_NONTAX, $originalSubtotalNontax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_SUBTOTAL_NONTAX, $originalSubtotalNontax, $comparison);
    }

    /**
     * Filter the query on the original_total_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalTotalTax(1234); // WHERE original_total_tax = 1234
     * $query->filterByOriginalTotalTax(array(12, 34)); // WHERE original_total_tax IN (12, 34)
     * $query->filterByOriginalTotalTax(array('min' => 12)); // WHERE original_total_tax > 12
     * </code>
     *
     * @param     mixed $originalTotalTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOriginalTotalTax($originalTotalTax = null, $comparison = null)
    {
        if (is_array($originalTotalTax)) {
            $useMinMax = false;
            if (isset($originalTotalTax['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_TOTAL_TAX, $originalTotalTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originalTotalTax['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_TOTAL_TAX, $originalTotalTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_TOTAL_TAX, $originalTotalTax, $comparison);
    }

    /**
     * Filter the query on the original_total column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalTotal(1234); // WHERE original_total = 1234
     * $query->filterByOriginalTotal(array(12, 34)); // WHERE original_total IN (12, 34)
     * $query->filterByOriginalTotal(array('min' => 12)); // WHERE original_total > 12
     * </code>
     *
     * @param     mixed $originalTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOriginalTotal($originalTotal = null, $comparison = null)
    {
        if (is_array($originalTotal)) {
            $useMinMax = false;
            if (isset($originalTotal['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_TOTAL, $originalTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originalTotal['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_TOTAL, $originalTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_TOTAL, $originalTotal, $comparison);
    }

    /**
     * Filter the query on the pick_printdate column
     *
     * Example usage:
     * <code>
     * $query->filterByPickPrintdate(1234); // WHERE pick_printdate = 1234
     * $query->filterByPickPrintdate(array(12, 34)); // WHERE pick_printdate IN (12, 34)
     * $query->filterByPickPrintdate(array('min' => 12)); // WHERE pick_printdate > 12
     * </code>
     *
     * @param     mixed $pickPrintdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPickPrintdate($pickPrintdate = null, $comparison = null)
    {
        if (is_array($pickPrintdate)) {
            $useMinMax = false;
            if (isset($pickPrintdate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PICK_PRINTDATE, $pickPrintdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pickPrintdate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PICK_PRINTDATE, $pickPrintdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PICK_PRINTDATE, $pickPrintdate, $comparison);
    }

    /**
     * Filter the query on the pick_printtime column
     *
     * Example usage:
     * <code>
     * $query->filterByPickPrinttime(1234); // WHERE pick_printtime = 1234
     * $query->filterByPickPrinttime(array(12, 34)); // WHERE pick_printtime IN (12, 34)
     * $query->filterByPickPrinttime(array('min' => 12)); // WHERE pick_printtime > 12
     * </code>
     *
     * @param     mixed $pickPrinttime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPickPrinttime($pickPrinttime = null, $comparison = null)
    {
        if (is_array($pickPrinttime)) {
            $useMinMax = false;
            if (isset($pickPrinttime['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PICK_PRINTTIME, $pickPrinttime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pickPrinttime['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_PICK_PRINTTIME, $pickPrinttime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PICK_PRINTTIME, $pickPrinttime, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByContact($contact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contact)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CONTACT, $contact, $comparison);
    }

    /**
     * Filter the query on the phone_intl column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneIntl('fooValue');   // WHERE phone_intl = 'fooValue'
     * $query->filterByPhoneIntl('%fooValue%', Criteria::LIKE); // WHERE phone_intl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneIntl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPhoneIntl($phoneIntl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneIntl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PHONE_INTL, $phoneIntl, $comparison);
    }

    /**
     * Filter the query on the phone_accesscode column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneAccesscode('fooValue');   // WHERE phone_accesscode = 'fooValue'
     * $query->filterByPhoneAccesscode('%fooValue%', Criteria::LIKE); // WHERE phone_accesscode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneAccesscode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPhoneAccesscode($phoneAccesscode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneAccesscode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PHONE_ACCESSCODE, $phoneAccesscode, $comparison);
    }

    /**
     * Filter the query on the phone_countrycode column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneCountrycode('fooValue');   // WHERE phone_countrycode = 'fooValue'
     * $query->filterByPhoneCountrycode('%fooValue%', Criteria::LIKE); // WHERE phone_countrycode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneCountrycode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPhoneCountrycode($phoneCountrycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneCountrycode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PHONE_COUNTRYCODE, $phoneCountrycode, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the phone_ext column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneExt('fooValue');   // WHERE phone_ext = 'fooValue'
     * $query->filterByPhoneExt('%fooValue%', Criteria::LIKE); // WHERE phone_ext LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneExt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPhoneExt($phoneExt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneExt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PHONE_EXT, $phoneExt, $comparison);
    }

    /**
     * Filter the query on the fax_intl column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxIntl('fooValue');   // WHERE fax_intl = 'fooValue'
     * $query->filterByFaxIntl('%fooValue%', Criteria::LIKE); // WHERE fax_intl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxIntl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFaxIntl($faxIntl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxIntl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FAX_INTL, $faxIntl, $comparison);
    }

    /**
     * Filter the query on the fax_accesscode column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxAccesscode('fooValue');   // WHERE fax_accesscode = 'fooValue'
     * $query->filterByFaxAccesscode('%fooValue%', Criteria::LIKE); // WHERE fax_accesscode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxAccesscode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFaxAccesscode($faxAccesscode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxAccesscode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FAX_ACCESSCODE, $faxAccesscode, $comparison);
    }

    /**
     * Filter the query on the fax_countrycode column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxCountrycode('fooValue');   // WHERE fax_countrycode = 'fooValue'
     * $query->filterByFaxCountrycode('%fooValue%', Criteria::LIKE); // WHERE fax_countrycode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxCountrycode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFaxCountrycode($faxCountrycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxCountrycode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FAX_COUNTRYCODE, $faxCountrycode, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%', Criteria::LIKE); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the ship_account column
     *
     * Example usage:
     * <code>
     * $query->filterByShipAccount('fooValue');   // WHERE ship_account = 'fooValue'
     * $query->filterByShipAccount('%fooValue%', Criteria::LIKE); // WHERE ship_account LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipAccount The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShipAccount($shipAccount = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipAccount)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIP_ACCOUNT, $shipAccount, $comparison);
    }

    /**
     * Filter the query on the change_due column
     *
     * Example usage:
     * <code>
     * $query->filterByChangeDue(1234); // WHERE change_due = 1234
     * $query->filterByChangeDue(array(12, 34)); // WHERE change_due IN (12, 34)
     * $query->filterByChangeDue(array('min' => 12)); // WHERE change_due > 12
     * </code>
     *
     * @param     mixed $changeDue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByChangeDue($changeDue = null, $comparison = null)
    {
        if (is_array($changeDue)) {
            $useMinMax = false;
            if (isset($changeDue['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CHANGE_DUE, $changeDue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($changeDue['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CHANGE_DUE, $changeDue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CHANGE_DUE, $changeDue, $comparison);
    }

    /**
     * Filter the query on the discount_additional column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountAdditional(1234); // WHERE discount_additional = 1234
     * $query->filterByDiscountAdditional(array(12, 34)); // WHERE discount_additional IN (12, 34)
     * $query->filterByDiscountAdditional(array('min' => 12)); // WHERE discount_additional > 12
     * </code>
     *
     * @param     mixed $discountAdditional The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDiscountAdditional($discountAdditional = null, $comparison = null)
    {
        if (is_array($discountAdditional)) {
            $useMinMax = false;
            if (isset($discountAdditional['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DISCOUNT_ADDITIONAL, $discountAdditional['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountAdditional['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DISCOUNT_ADDITIONAL, $discountAdditional['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DISCOUNT_ADDITIONAL, $discountAdditional, $comparison);
    }

    /**
     * Filter the query on the all_ship column
     *
     * Example usage:
     * <code>
     * $query->filterByAllShip('fooValue');   // WHERE all_ship = 'fooValue'
     * $query->filterByAllShip('%fooValue%', Criteria::LIKE); // WHERE all_ship LIKE '%fooValue%'
     * </code>
     *
     * @param     string $allShip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByAllShip($allShip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($allShip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ALL_SHIP, $allShip, $comparison);
    }

    /**
     * Filter the query on the credit_applied column
     *
     * Example usage:
     * <code>
     * $query->filterByCreditApplied(1234); // WHERE credit_applied = 1234
     * $query->filterByCreditApplied(array(12, 34)); // WHERE credit_applied IN (12, 34)
     * $query->filterByCreditApplied(array('min' => 12)); // WHERE credit_applied > 12
     * </code>
     *
     * @param     mixed $creditApplied The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCreditApplied($creditApplied = null, $comparison = null)
    {
        if (is_array($creditApplied)) {
            $useMinMax = false;
            if (isset($creditApplied['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CREDIT_APPLIED, $creditApplied['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($creditApplied['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_CREDIT_APPLIED, $creditApplied['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CREDIT_APPLIED, $creditApplied, $comparison);
    }

    /**
     * Filter the query on the invoice_printdate column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoicePrintdate(1234); // WHERE invoice_printdate = 1234
     * $query->filterByInvoicePrintdate(array(12, 34)); // WHERE invoice_printdate IN (12, 34)
     * $query->filterByInvoicePrintdate(array('min' => 12)); // WHERE invoice_printdate > 12
     * </code>
     *
     * @param     mixed $invoicePrintdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByInvoicePrintdate($invoicePrintdate = null, $comparison = null)
    {
        if (is_array($invoicePrintdate)) {
            $useMinMax = false;
            if (isset($invoicePrintdate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_PRINTDATE, $invoicePrintdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoicePrintdate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_PRINTDATE, $invoicePrintdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_PRINTDATE, $invoicePrintdate, $comparison);
    }

    /**
     * Filter the query on the invoice_printtime column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoicePrinttime(1234); // WHERE invoice_printtime = 1234
     * $query->filterByInvoicePrinttime(array(12, 34)); // WHERE invoice_printtime IN (12, 34)
     * $query->filterByInvoicePrinttime(array('min' => 12)); // WHERE invoice_printtime > 12
     * </code>
     *
     * @param     mixed $invoicePrinttime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByInvoicePrinttime($invoicePrinttime = null, $comparison = null)
    {
        if (is_array($invoicePrinttime)) {
            $useMinMax = false;
            if (isset($invoicePrinttime['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_PRINTTIME, $invoicePrinttime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoicePrinttime['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_PRINTTIME, $invoicePrinttime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_INVOICE_PRINTTIME, $invoicePrinttime, $comparison);
    }

    /**
     * Filter the query on the discount_freight column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountFreight(1234); // WHERE discount_freight = 1234
     * $query->filterByDiscountFreight(array(12, 34)); // WHERE discount_freight IN (12, 34)
     * $query->filterByDiscountFreight(array('min' => 12)); // WHERE discount_freight > 12
     * </code>
     *
     * @param     mixed $discountFreight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDiscountFreight($discountFreight = null, $comparison = null)
    {
        if (is_array($discountFreight)) {
            $useMinMax = false;
            if (isset($discountFreight['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DISCOUNT_FREIGHT, $discountFreight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountFreight['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DISCOUNT_FREIGHT, $discountFreight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DISCOUNT_FREIGHT, $discountFreight, $comparison);
    }

    /**
     * Filter the query on the ship_completeoverride column
     *
     * Example usage:
     * <code>
     * $query->filterByShipCompleteoverride('fooValue');   // WHERE ship_completeoverride = 'fooValue'
     * $query->filterByShipCompleteoverride('%fooValue%', Criteria::LIKE); // WHERE ship_completeoverride LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shipCompleteoverride The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByShipCompleteoverride($shipCompleteoverride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shipCompleteoverride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SHIP_COMPLETEOVERRIDE, $shipCompleteoverride, $comparison);
    }

    /**
     * Filter the query on the contact_email column
     *
     * Example usage:
     * <code>
     * $query->filterByContactEmail('fooValue');   // WHERE contact_email = 'fooValue'
     * $query->filterByContactEmail('%fooValue%', Criteria::LIKE); // WHERE contact_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactEmail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByContactEmail($contactEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactEmail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CONTACT_EMAIL, $contactEmail, $comparison);
    }

    /**
     * Filter the query on the manual_freight column
     *
     * Example usage:
     * <code>
     * $query->filterByManualFreight('fooValue');   // WHERE manual_freight = 'fooValue'
     * $query->filterByManualFreight('%fooValue%', Criteria::LIKE); // WHERE manual_freight LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manualFreight The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByManualFreight($manualFreight = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manualFreight)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_MANUAL_FREIGHT, $manualFreight, $comparison);
    }

    /**
     * Filter the query on the internal_freight column
     *
     * Example usage:
     * <code>
     * $query->filterByInternalFreight('fooValue');   // WHERE internal_freight = 'fooValue'
     * $query->filterByInternalFreight('%fooValue%', Criteria::LIKE); // WHERE internal_freight LIKE '%fooValue%'
     * </code>
     *
     * @param     string $internalFreight The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByInternalFreight($internalFreight = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($internalFreight)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_INTERNAL_FREIGHT, $internalFreight, $comparison);
    }

    /**
     * Filter the query on the cost_freight column
     *
     * Example usage:
     * <code>
     * $query->filterByCostFreight(1234); // WHERE cost_freight = 1234
     * $query->filterByCostFreight(array(12, 34)); // WHERE cost_freight IN (12, 34)
     * $query->filterByCostFreight(array('min' => 12)); // WHERE cost_freight > 12
     * </code>
     *
     * @param     mixed $costFreight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCostFreight($costFreight = null, $comparison = null)
    {
        if (is_array($costFreight)) {
            $useMinMax = false;
            if (isset($costFreight['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_COST_FREIGHT, $costFreight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($costFreight['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_COST_FREIGHT, $costFreight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_COST_FREIGHT, $costFreight, $comparison);
    }

    /**
     * Filter the query on the route column
     *
     * Example usage:
     * <code>
     * $query->filterByRoute('fooValue');   // WHERE route = 'fooValue'
     * $query->filterByRoute('%fooValue%', Criteria::LIKE); // WHERE route LIKE '%fooValue%'
     * </code>
     *
     * @param     string $route The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByRoute($route = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($route)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ROUTE, $route, $comparison);
    }

    /**
     * Filter the query on the route_seq column
     *
     * Example usage:
     * <code>
     * $query->filterByRouteSeq(1234); // WHERE route_seq = 1234
     * $query->filterByRouteSeq(array(12, 34)); // WHERE route_seq IN (12, 34)
     * $query->filterByRouteSeq(array('min' => 12)); // WHERE route_seq > 12
     * </code>
     *
     * @param     mixed $routeSeq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByRouteSeq($routeSeq = null, $comparison = null)
    {
        if (is_array($routeSeq)) {
            $useMinMax = false;
            if (isset($routeSeq['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ROUTE_SEQ, $routeSeq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($routeSeq['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ROUTE_SEQ, $routeSeq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ROUTE_SEQ, $routeSeq, $comparison);
    }

    /**
     * Filter the query on the edi_855sent column
     *
     * Example usage:
     * <code>
     * $query->filterByEdi855sent('fooValue');   // WHERE edi_855sent = 'fooValue'
     * $query->filterByEdi855sent('%fooValue%', Criteria::LIKE); // WHERE edi_855sent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $edi855sent The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByEdi855sent($edi855sent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($edi855sent)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_EDI_855SENT, $edi855sent, $comparison);
    }

    /**
     * Filter the query on the freight_3rdparty column
     *
     * Example usage:
     * <code>
     * $query->filterByFreight3rdparty(1234); // WHERE freight_3rdparty = 1234
     * $query->filterByFreight3rdparty(array(12, 34)); // WHERE freight_3rdparty IN (12, 34)
     * $query->filterByFreight3rdparty(array('min' => 12)); // WHERE freight_3rdparty > 12
     * </code>
     *
     * @param     mixed $freight3rdparty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFreight3rdparty($freight3rdparty = null, $comparison = null)
    {
        if (is_array($freight3rdparty)) {
            $useMinMax = false;
            if (isset($freight3rdparty['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_FREIGHT_3RDPARTY, $freight3rdparty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freight3rdparty['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_FREIGHT_3RDPARTY, $freight3rdparty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FREIGHT_3RDPARTY, $freight3rdparty, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFob($fob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FOB, $fob, $comparison);
    }

    /**
     * Filter the query on the confirm_image column
     *
     * Example usage:
     * <code>
     * $query->filterByConfirmImage('fooValue');   // WHERE confirm_image = 'fooValue'
     * $query->filterByConfirmImage('%fooValue%', Criteria::LIKE); // WHERE confirm_image LIKE '%fooValue%'
     * </code>
     *
     * @param     string $confirmImage The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByConfirmImage($confirmImage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($confirmImage)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CONFIRM_IMAGE, $confirmImage, $comparison);
    }

    /**
     * Filter the query on the cstk_consign column
     *
     * Example usage:
     * <code>
     * $query->filterByCstkConsign('fooValue');   // WHERE cstk_consign = 'fooValue'
     * $query->filterByCstkConsign('%fooValue%', Criteria::LIKE); // WHERE cstk_consign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cstkConsign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCstkConsign($cstkConsign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cstkConsign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CSTK_CONSIGN, $cstkConsign, $comparison);
    }

    /**
     * Filter the query on the manufacturer column
     *
     * Example usage:
     * <code>
     * $query->filterByManufacturer('fooValue');   // WHERE manufacturer = 'fooValue'
     * $query->filterByManufacturer('%fooValue%', Criteria::LIKE); // WHERE manufacturer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manufacturer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByManufacturer($manufacturer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manufacturer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_MANUFACTURER, $manufacturer, $comparison);
    }

    /**
     * Filter the query on the pick_queue column
     *
     * Example usage:
     * <code>
     * $query->filterByPickQueue('fooValue');   // WHERE pick_queue = 'fooValue'
     * $query->filterByPickQueue('%fooValue%', Criteria::LIKE); // WHERE pick_queue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pickQueue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPickQueue($pickQueue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pickQueue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_PICK_QUEUE, $pickQueue, $comparison);
    }

    /**
     * Filter the query on the arrive_date column
     *
     * Example usage:
     * <code>
     * $query->filterByArriveDate(1234); // WHERE arrive_date = 1234
     * $query->filterByArriveDate(array(12, 34)); // WHERE arrive_date IN (12, 34)
     * $query->filterByArriveDate(array('min' => 12)); // WHERE arrive_date > 12
     * </code>
     *
     * @param     mixed $arriveDate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByArriveDate($arriveDate = null, $comparison = null)
    {
        if (is_array($arriveDate)) {
            $useMinMax = false;
            if (isset($arriveDate['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ARRIVE_DATE, $arriveDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arriveDate['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_ARRIVE_DATE, $arriveDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ARRIVE_DATE, $arriveDate, $comparison);
    }

    /**
     * Filter the query on the surcharge_status column
     *
     * Example usage:
     * <code>
     * $query->filterBySurchargeStatus('fooValue');   // WHERE surcharge_status = 'fooValue'
     * $query->filterBySurchargeStatus('%fooValue%', Criteria::LIKE); // WHERE surcharge_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surchargeStatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterBySurchargeStatus($surchargeStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surchargeStatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_SURCHARGE_STATUS, $surchargeStatus, $comparison);
    }

    /**
     * Filter the query on the freight_group column
     *
     * Example usage:
     * <code>
     * $query->filterByFreightGroup('fooValue');   // WHERE freight_group = 'fooValue'
     * $query->filterByFreightGroup('%fooValue%', Criteria::LIKE); // WHERE freight_group LIKE '%fooValue%'
     * </code>
     *
     * @param     string $freightGroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByFreightGroup($freightGroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($freightGroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_FREIGHT_GROUP, $freightGroup, $comparison);
    }

    /**
     * Filter the query on the comm_override column
     *
     * Example usage:
     * <code>
     * $query->filterByCommOverride('fooValue');   // WHERE comm_override = 'fooValue'
     * $query->filterByCommOverride('%fooValue%', Criteria::LIKE); // WHERE comm_override LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commOverride The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCommOverride($commOverride = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commOverride)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_COMM_OVERRIDE, $commOverride, $comparison);
    }

    /**
     * Filter the query on the charge_split column
     *
     * Example usage:
     * <code>
     * $query->filterByChargeSplit('fooValue');   // WHERE charge_split = 'fooValue'
     * $query->filterByChargeSplit('%fooValue%', Criteria::LIKE); // WHERE charge_split LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chargeSplit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByChargeSplit($chargeSplit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chargeSplit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CHARGE_SPLIT, $chargeSplit, $comparison);
    }

    /**
     * Filter the query on the creditcart_approved column
     *
     * Example usage:
     * <code>
     * $query->filterByCreditcartApproved('fooValue');   // WHERE creditcart_approved = 'fooValue'
     * $query->filterByCreditcartApproved('%fooValue%', Criteria::LIKE); // WHERE creditcart_approved LIKE '%fooValue%'
     * </code>
     *
     * @param     string $creditcartApproved The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByCreditcartApproved($creditcartApproved = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($creditcartApproved)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_CREDITCART_APPROVED, $creditcartApproved, $comparison);
    }

    /**
     * Filter the query on the original_ordernumber column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalOrdernumber('fooValue');   // WHERE original_ordernumber = 'fooValue'
     * $query->filterByOriginalOrdernumber('%fooValue%', Criteria::LIKE); // WHERE original_ordernumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalOrdernumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOriginalOrdernumber($originalOrdernumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalOrdernumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_ORIGINAL_ORDERNUMBER, $originalOrdernumber, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByHasNotes($hasNotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasNotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_HAS_NOTES, $hasNotes, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByHasDocuments($hasDocuments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasDocuments)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_HAS_DOCUMENTS, $hasDocuments, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByHasTracking($hasTracking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hasTracking)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_HAS_TRACKING, $hasTracking, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DATE, $date, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (is_array($time)) {
            $useMinMax = false;
            if (isset($time['min'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TIME, $time['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($time['max'])) {
                $this->addUsingAlias(SalesOrderTableMap::COL_TIME, $time['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_TIME, $time, $comparison);
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
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalesOrder $salesOrder Object to remove from the list of results
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
    public function prune($salesOrder = null)
    {
        if ($salesOrder) {
            $this->addUsingAlias(SalesOrderTableMap::COL_ORDERNUMBER, $salesOrder->getOrdernumber(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the oe_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesOrderTableMap::clearInstancePool();
            SalesOrderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesOrderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesOrderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesOrderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalesOrderQuery
