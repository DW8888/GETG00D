
<?php
class Stock
{
    private $rank;
    private $symbol;
    private $companyName;
    private $quant;
    private $saAuthors;
    private $wallStreet;
    private $marketCap;
    private $marketCapInBillions;

    public function __construct($rank, $symbol, $companyName, $quant, $saAuthors, $wallStreet, $marketCap, $marketCapInBillions)
    {
        $this->rank = $rank;
        $this->symbol = $symbol;
        $this->companyName = $companyName;
        $this->quant = $quant;
        $this->saAuthors = $saAuthors;
        $this->wallStreet = $wallStreet;
        $this->marketCap = $marketCap;
        $this->marketCapInBillions = $marketCapInBillions;
    }

    // Getter methods
    function get_rank()
    {
        return $this->rank;
    }
    function get_symbol()
    {
        return $this->symbol;
    }
    function get_companyName()
    {
        return $this->companyName;
    }
    function get_quant()
    {
        return $this->quant;
    }
    function get_saAuthors()
    {
        return $this->saAuthors;
    }
    function get_wallstreet()
    {
        return $this->wallStreet;
    }
    function get_marketCap()
    {
        return $this->marketCap;
    }
    function get_marketCapInBillions()
    {
        return $this->marketCapInBillions;
    }

    // Setter methods
    function set_rank($rank)
    {
        $this->rank = $rank;
    }
    function set_symbol($symbol)
    {
        $this->symbol = $symbol;
    }
    function set_companyName($companyName)
    {
        $this->companyName = $companyName;
    }
    function set_quant($quant)
    {
        $this->quant = $quant;
    }
    function set_saAuthors($saAuthors)
    {
        $this->saAuthors = $saAuthors;
    }
    function set_wallstreet($wallStreet)
    {
        $this->wallStreet = $wallStreet;
    }
    function set_marketCap($marketCap)
    {
        $this->marketCap = $marketCap;
    }
    function set_marketCapInBillions($marketCapInBillions)
    {
        $this->marketCapInBillions = $marketCapInBillions;
    }
}

?>