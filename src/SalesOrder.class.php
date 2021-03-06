<?php
	use Dplus\ProcessWire\DplusWire;
	
	/**
	 * Class for dealing with Sales Orders from the oe_head table
	 * // NOTE This class is for readonly viewing of the Sales Orders
	 * This class is not meant for Creating / Updating / Deleting Orders from the System
	 * The class for Editing Orders is the // TODO
	 */
	class SalesOrder extends Order {
		use Dplus\Base\ThrowErrorTrait;
		use Dplus\Base\MagicMethodTraits;
		use Dplus\Base\CreateFromObjectArrayTraits;
		use Dplus\Base\CreateClassArrayTraits;

		/**
		 * Sales Order Number
		 * @var string
		 */
		protected $ordernumber;

		/**
		 * Sales Order Status
		 * N = New | P = Picked | V = Verified | I = Invoiced
		 * @var string
		 */
		protected $status;

		/**
		 * Hold Status Code
		 * NOTE: The code is Case Sensitive
		 * A = Customer is on Credit Hold
		 * B = A detail line did not meet minimum margin requirements, Was an A, C, or H before
		 * C = Over Credit Limit
		 * H = This order is on Hold
		 * M = A detail line did not meet minimum margin requirements, line quantity, or order amount.
		 *     Same as B but was not on hold for other reasons
		 * N = Not on Hold
		 * R = Review by Sales Rep
		 * r = reviewed by Sales Rep
		 * n = Not on hold, released by user
		 * S = On hold, waiting for transfer
		 * T = On hold because of Terms or Rejected Credit Card
		 * W = On hold because this a a new Web Order
		 * @var string
		 */
		protected $holdstatus;

		/**
		 * Customer ID
		 * @var string
		 */
		protected $custid;

		/**
		 * Customer Shipto ID
		 * @var string
		 */
		protected $shiptoid;

		/**
		 * Shipto Name
		 * @var string
		 */
		protected $shipto_name;

		/**
		 * Shipto Address Line 1
		 * @var string
		 */
		protected $shipto_address1;

		/**
		 * Shipto Address Line 2
		 * @var string
		 */
		protected $shipto_address2;

		/**
		 * Shipto Address Line 3
		 * @var string
		 */
		protected $shipto_address3;

		/**
		 * Shipto Address Line 4
		 * @var string
		 */
		protected $shipto_address4;

		/**
		 * Shipto City
		 * @var string
		 */
		protected $shipto_city;

		/**
		 * Shipto State
		 * @var string
		 */
		protected $shipto_state;

		/**
		 * Shipto zip
		 * @var string
		 */
		protected $shipto_zip;

		/**
		 * Sales Order Customer PO Number
		 * @var string
		 */
		protected $custpo;

		/**
		 * Sales Order Date / Date Order was Taken
		 * // FORMAT YYYYMMDD
		 * @var int
		 */
		protected $orderdate;

		/**
		 * Customer Terms Code
		 * @var string
		 */
		protected $termcode;

		/**
		 * Code for the Ship Via used
		 * @var string
		 */
		protected $shipviacode;

		/**
		 * Invoice Number
		 * // NOTE It's usually the same as order number,
		 *    but does not have to be
		 * @var string
		 */
		protected $invoice_number;

		/**
		 * Date Order was Invoiced
		 * @var string
		 */
		protected $invoice_date;

		protected $genledger_period;

		/**
		 * Sales Person 1 ID
		 * @var string
		 */
		protected $salesperson_1;

		/**
		 * Sales Person 1 Commission Percent
		 * @var string
		 */
		protected $salesperson_1pct;

		/**
		 * Sales Person 2 ID
		 * @var string
		 */
		protected $salesperson_2;

		/**
		 * Sales Person 2 Commission Percent
		 * @var string
		 */
		protected $salesperson_2pct;

		/**
		 * Sales Person 3 ID
		 * @var string
		 */
		protected $salesperson_3;

		/**
		 * Sales Person 3 Commission Percent
		 * @var string
		 */
		protected $salesperson_3pct;


		protected $contract_nbr;
		protected $batch_nbr;
		protected $dropreleasehold;

		/**
		 * Sales Order Subtotal with Tax
		 * @var float
		 */
		protected $subtotal_tax;

		/**
		 * Sales Order Subtotal without Tax
		 * @var float
		 */
		protected $subtotal_nontax;

		/**
		 * Tax Collected on Sales Order
		 * @var string
		 */
		protected $total_tax;

		/**
		 * Total Freight Cost
		 * @var float
		 */
		protected $total_freight;

		/**
		 * Total Misc. charges
		 * @var string
		 */
		protected $total_misc;

		/**
		 * Order Total
		 * @var float
		 */
		protected $total_order;

		/**
		 * Total Cost for Sales Order
		 * @var float
		 */
		protected $total_cost;
		protected $lock;

		/**
		 * Order Taken Date
		 * // FORMAT YYYYMMDD
		 * @var int
		 */
		protected $taken_date;

		/**
		 * Order Taken Time
		 * // FORMAT HHMMSS
		 * @var int
		 */
		protected $taken_time;

		/**
		 * Order Picked Date
		 * // FORMAT YYYYMMDD
		 * @var int
		 */
		protected $pick_date;

		/**
		 * Order Picked Time
		 * // FORMAT HHMMSS
		 * @var int
		 */
		protected $pick_time;

		/**
		 * Order Packed Date
		 * // FORMAT YYYYMMDD
		 * @var int
		 */
		protected $pack_date;

		/**
		 * Order Packed Time
		 * // FORMAT HHMMSS
		 * @var int
		 */
		protected $pack_time;

		/**
		 * Order Verified Date
		 * // FORMAT YYYYMMDD
		 * @var int
		 */
		protected $verify_date;

		/**
		 * Order Verified Time
		 * // FORMAT HHMMSS
		 * @var int
		 */
		protected $verify_time;
		protected $creditmemo;
		protected $booked;
		protected $original_whse;

		/**
		 * Customer Billto State
		 * @var string
		 */
		protected $billto_state;

		/**
		 * Ship Complete ?
		 * Y = Yes | N = No
		 * @var string
		 */
		protected $shipcomplete;
		protected $cwo_flag;
		protected $division;
		protected $taken_code;
		protected $pack_code;
		protected $pick_code;
		protected $verify_code;

		/**
		 * Sum of all discounts applied to Sales Order
		 * @var float
		 */
		protected $total_discount;
		protected $edi_refererencenbr;
		protected $user_code1;
		protected $user_code2;
		protected $user_code3;
		protected $user_code4;
		protected $exchange_country;
		protected $exchange_rate;

		/**
		 * Total Weight for Sales Order
		 * @var float
		 */
		protected $weight_total;

		/**
		 * Override of Total Weight for Sales Order
		 * @var float
		 */
		protected $weight_override;
		protected $box_count;

		/**
		 * Requested Ship Date
		 * // FORMAT YYYYMMDD
		 * @var string
		 */
		protected $request_date;

		/**
		 * Date Canceled
		 * // FORMAT YYYYMMDD
		 * @var string
		 */
		protected $cancel_date;

		/**
		 * Who is currently locking the Sales Order
		 * @var string
		 */
		protected $lockedby;
		protected $release_number;

		/**
		 * Warehouse Code of Warehouse that will fufill Sales Order
		 * @var string
		 */
		protected $whse;

		/**
		 * Date Sales Order was backordered
		 * // FORMAT YYYYMMDD
		 * @var int
		 */
		protected $backorder_date;
		protected $deptcode;

		protected $freight_in_entered;
		protected $dropship_entered;
		protected $er_flag;
		protected $freight_in;
		protected $dropship;

		/**
		 * Minimum Order Amount
		 * @var float
		 */
		protected $minorder;
		protected $contract_terms;
		protected $dropship_billed;
		protected $order_type;

		/**
		 * EDI order Number
		 * @var string
		 */
		protected $tracking_edinumber;
		protected $source;
		protected $pick_format;
		protected $invoice_format;

		/**
		 * Amount of Cash Recieved
		 * @var string
		 */
		protected $cash_amount;

		/**
		 * Amount of Money by Check
		 * @var string
		 */
		protected $check_amount;

		/**
		 * Check ID Number
		 * @var string
		 */
		protected $check_number;

		/**
		 * Deposit Amount
		 * @var float
		 */
		protected $deposit_amount;
		protected $deposit_number;

		/**
		 * Subtotal with Tax of the Original Sales Order
		 * @var float
		 */
		protected $original_subtotal_tax;

		/**
		 * Subtotal of the non taxable of the Original Sales Order
		 * @var float
		 */
		protected $original_subtotal_nontax;

		/**
		 * Total with tax of the Original Order
		 * @var float
		 */
		protected $original_total_tax;

		/**
		 * Original Sales Order total
		 * @var float
		 */
		protected $original_total;

		/**
		 * Date the Pick Ticket was printed
		 * // FORMAT YYYYMMDD
		 * @var int
		 */
		protected $pick_printdate;

		/**
		 * Time the Pick Ticket was printed
		 * // FORMAT HHMMSS
		 * @var int
		 */
		protected $pick_printtime;
		protected $contact;

		/**
		 * is Phone International ?
		 * Y = Yes | N = No
		 * @var string
		 */
		protected $phone_intl;

		/**
		 * Access Code for Phone
		 * @var string
		 */
		protected $phone_accesscode;

		/**
		 * Country Phone Code
		 * @var string
		 */
		protected $phone_countrycode;

		/**
		 * Phone Number
		 * @var string
		 */
		protected $phone;

		/**
		 * Phone Extension
		 * @var string
		 */
		protected $phone_ext;

		/**
		 * is fax International ?
		 * Y = Yes | N = No
		 * @var string
		 */
		protected $fax_intl;

		/**
		 * Fax Number Access Code
		 * @var string
		 */
		protected $fax_accesscode;

		/**
		 * Fax Number Country Code
		 * @var string
		 */
		protected $fax_countrycode;

		/**
		 * Fax Number
		 * @var string
		 */
		protected $fax;

		protected $ship_account;

		/**
		 * Change due to the Customer
		 * @var float
		 */
		protected $change_due;
		protected $discount_additional;
		protected $all_ship;
		protected $credit_applied;

		/**
		 * Date Invoice was Printed
		 * // FORMAT YYYYMMDD
		 * @var string
		 */
		protected $invoice_printdate;

		/**
		 * Time Invoice was Printed
		 * // FORMAT HHMMSS
		 * @var string
		 */
		protected $invoice_printtime;

		/**
		 * Amount Discounted for freight
		 * @var float
		 */
		protected $discount_freight;
		protected $ship_completeoverride;

		/**
		 * Email for Contact
		 * @var string
		 */
		protected $contact_email;

		/**
		 * Freight Amount
		 * Entered Manually
		 * @var float
		 */
		protected $manual_freight;

		/**
		 * Internal Freight Costs
		 * @var float
		 */
		protected $internal_freight;

		/**
		 * Freight Cost
		 * @var float
		 */
		protected $cost_freight;
		protected $route;
		protected $route_seq;

		/**
		 * Was the 855 EDI document sent?
		 * @var string
		 */
		protected $edi_855sent;
		protected $freight_3rdparty;
		protected $fob;
		protected $confirm_image;
		protected $cstk_consign;
		protected $manufacturer;
		protected $pick_queue;

		/**
		 * Date Arrived
		 * YYYYMMDD Format
		 * @var int
		 */
		protected $arrive_date;
		protected $surcharge_status;
		protected $freight_group;
		protected $comm_override;
		protected $charge_split;
		protected $creditcart_approved;

		/**
		 * Original Order Number
		 * @var string
		 */
		protected $original_ordernumber;

		/**
		 * Does Sales Order Have Header Notes ?
		 * Y = Yes | N = No
		 * @var string
		 */
		protected $has_notes;

		/**
		 * Does Sales Order Have Documents?
		 * Y = Yes | N = No
		 * @var string
		 */
		protected $has_documents;

		/**
		 * Does Sales Order Have Tracking Numbers?
		 * Y = Yes | N = No
		 * @var string
		 */
		protected $has_tracking;
		/**
		 * Date Updated
		 * YYYYMMDD Format
		 * @var int
		 */
		protected $date;

		/**
		 * Time Updated
		 * HHMMSS Format
		 * @var int
		 */
		protected $time;
		
		protected $fieldaliases = array(
			'orderno' => 'ordernumber'
		);
		
		protected $statusdescriptions = array(
			'N' => 'new',
			'P' => 'picked',
			'V' => 'verified',
			'I' => 'Invoiced'
		);

		/* =============================================================
			GETTER FUNCTIONS
		============================================================ */
		/**
		 * Returns if Sales Order has Documents
		 * @return bool
		 */
		public function has_documents() {
			return $this->has_documents == 'Y' ? true : false;
		}

		/**
		 * Returns if Sales Order has tracking
		 * @return bool
		 */
		public function has_tracking() {
			return $this->has_tracking == 'Y' ? true : false;
		}

		/**
		 * Returns if Sales Order has header notes
		 * @return bool bool
		 */
		public function has_notes() {
			return $this->has_notes == 'Y' ? true : false;
		}

		/**
		 * Is the phone an International Phone Number
		 * @return bool Internation Phone Number?
		 */
		public function is_phoneintl() {
			return $this->phone_intl == 'Y' ? true : false;
		}

		/**
		 * Returns if the user can edit this order
		 * // TODO REMOVE ANYTHING THAT IS  DEALING WITH APPLICATION LOGIC, MOVE IT TO THE APPLICATION LOGIC CODE
		 * THIS SHOULD ONLY HANDLE IF A. THE SALES ORDER IS ABLE TO BE EDITED BECAUSE THE CURRENT USER IS LOCKING
		 * OR THE SALES ORDER ISN'T BEING LOCKED
		 * 
		 * 
		 * 
		 * // NOTE if $userID is not supplied it will validate against current User
		 * 1. Checks if the Sales Orders can be edited at all
		 * 2. Checks if the User has the permissions to edit orders
		 * 3. Checks if Sales Order is able to be edited
		 * 4. Checks if the Sales Order was just created, by this user session
		 * @param  string $userID User ID to validate if they can edit order
		 * @return bool           Can Order Be edited by user?
		 * @uses DplusWire::wire('session')->createdorder
		 */
		public function can_edit($userID = '') {
			$userID = !empty($userID) ? $userID : DplusWire::wire('user')->loginid;
			
			// 1. Checks if the Sales Orders can be edited at all
			$config = DplusWire::wire('pages')->get('/config/')->child("name=sales-orders");
			
			// 2. Checks if the User has the permissions to edit orders
			$user_permitted = has_dpluspermission($userID, 'eso');
			
			// 3. Checks if Sales Order is not locked, or the user is locking it
			$can_edit = (!$this->is_locked() || $this->is_lockedbyuser($userID)) ? true : false;
			
			// 4.Checks if the Sales Order was just created, by this user session
			$was_createdbyusersession = $this->ordernumber == DplusWire::wire('session')->get('createdorder');
			
			// Can edit Sales Orders Config
			if ($config->allow_edit) {
				return $user_permitted ? $can_edit : false;
			} elseif ($was_createdbyusersession) {
				return true;
			} else {
				return false;
			}
		}
		
		/**
		 * Returns if User can edit an order that may be on review
		 * 
		 * // TODO REMOVE ANYTHING THAT IS  DEALING WITH APPLICATION LOGIC, MOVE IT TO THE APPLICATION LOGIC CODE
		 * 
		 * 
		 * @param  string $userID  User ID to validate if they can edit order
		 * @return bool            Can Order Be edited by user?
		 */
		public function can_editapproved($userID = '') {
			$userID = !empty($userID) ? $userID : DplusWire::wire('user')->loginid;
			$user = LogmUser::load($userID);
			
			if ($this->is_approved()) {
				return !$user->is_salesrep() ? true : false;
			} else {
				return $this->can_edit($userID);
			}
		}

		/**
		 * Returns if Sales Order is being locked for editing
		 * @return bool
		 */
		public function is_locked() {
			return !empty($this->lockedby) ? true : false;
		}
		
		/**
		 * Return if Order Is on Review
		 * // NOTE $this->holdstatuscode = R
		 * 
		 * @return bool Is Order On Review?
		 */
		public function is_onreview() {
			return $this->holdstatus == 'R' ? true : false;
		}
		
		/**
		 * Returns if Order is approved
		 * // NOTE lower case n means order has been approved
		 * @return bool is order approved?
		 */
		public function is_approved() {
			return $this->holdstatus == 'n' ? true : false;
		}
		

		/**
		 * Is the Order locked by the Current User?
		 * // TODO REMOVE ANYTHING THAT IS  DEALING WITH APPLICATION LOGIC, MOVE IT TO THE APPLICATION LOGIC CODE
		 * 
		 * // NOTE Will default to current logged in User ID if user ID is not provided
		 * @param  string $userID User ID to compare $this->lockedby field against
		 * @return bool
		 */
		public function is_lockedbyuser($userID = '') {
			$userID = !empty($userID) ? $userID : DplusWire::wire('user')->loginid;
			return ($userID == $this->lockedby) ? true : false;
		}
		
		/**
		 * Return Order Status Description
		 * @return string
		 */
		public function get_statusdescription() {
			return ucfirst($this->statusdescriptions[$this->status]);
		}


		/* =============================================================
			CRUD FUNCTIONS
		============================================================ */
		/**
		 * Returns if Sales Order Exists
		 * @param  string  $ordn  Sales Order #
		 * @param  bool    $debug Run in debug? If so, will return SQL Query
		 * @return bool           Does Sales Order Exist?
		 */
		public static function exists($ordn, $debug = false) {
			return does_salesorderexist($ordn, $debug);
		}
		
		/**
		 * Returns SalesOrder from oe_head
		 * @param  string            $ordn      Sales Order #
		 * @param  bool              $debug     Run in debug? If so, will return SQL Query
		 * @return SalesOrder                   Sales Order
		 * @uses Read (CRUD)
		 */
		public static function load($ordn, $debug = false) {
			return get_salesorder($ordn, $debug);
		}
		
		/**
		 * Returns a Customer ID from a Sales Order or this order if applicable
		 * @param  string $ordn  Sales Order Number
		 * @param  bool   $debug Run in debug? If so will return SQL Query
		 * @return string        Customer ID
		 */
		public static function find_custid($ordn = '', $debug = false) {
			return get_custidfromsalesorder($ordn, $debug);
		}

		/**
		 * Returns a Customer Shipto ID from a Sales Order or this order if applicable
		 * @param  string $ordn  Sales Order Number
		 * @param  bool   $debug Run in debug? If so will return SQL Query
		 * @return string        Customer Shipto ID
		 */
		public static function find_shiptoid($ordn = '', $debug = false) {
			return get_shiptoidfromsalesorder($ordn, $debug);
		}
		
		public static function is_orderlocked($ordn, $debug = false) {
			return is_orderlocked($ordn, $debug);
		}
		
		public static function get_orderlockuser($ordn, $debug = false) {
			return get_orderlocklogin($ordn, $debug);
		}
	}
