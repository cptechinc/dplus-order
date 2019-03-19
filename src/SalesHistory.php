<?php

use Base\SalesHistory as BaseSalesHistory;

/**
 * Skeleton subclass for representing a row from the 'saleshist' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesHistory extends BaseSalesHistory
{
    use Dplus\Base\ThrowErrorTraits;
    use Dplus\Base\MagicMethodTraits;

    /**
     * Returns if SalesOrderis editable
     * @return bool
     * @uses SalesOrder
     */
    public function can_edit($userID = '') {
        return false;
    }

    /**
     * Status Descriptions for the Status Codes
     *
     * @var array
     */
    static protected $statusdescriptions = array(
        'N' => 'new',
        'P' => 'picked',
        'V' => 'verified',
        'I' => 'Invoiced'
    );

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
     * @param  string $userID User ID to compare $this->lockedby field against
     * @return bool
     */
    public function is_lockedbyuser($userID = '') {
        return ($userID == $this->lockedby) ? true : false;
    }

    /**
     * Return Order Status Description
     * @return string
     */
    public function get_statusdescription() {
        return ucfirst(self::$statusdescriptions[$this->status]);
    }	
}
