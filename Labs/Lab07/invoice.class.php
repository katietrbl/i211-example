<?php
/**
 *Author: Katie Stinson
 *Date: 3/2/23
 *File: invoice.class.php
 *Description: implement payable interface
 * contains static attribute and method that keep track of number of invoice objs created
 */

class Invoice implements Payable{
    //attributes
    private string $part_number;
    private string $part_description;
    private int $quantity;
    private float $price_per_item;
    private int $payment_amount;

    //Static attribute
    private static int $invoice_count = 0;

    public function __construct(string $part_number, string $part_description, int $quantity, float $price_per_item, $payment_amount, $invoice_count)
    {
        self::$invoice_count++;
        //$this->invoice_count = $invoice_count;
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        $this->payment_amount = $payment_amount;
    }

    //get part num
    public function getPartNumber(): string
    {
        return $this->part_number;
    }

    //get description of part
    public function getPartDescription(): string
    {
        return $this->part_description;
    }

    //get quantity
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    //get price per item
    public function getPricePerItem(): float
    {
        return $this->price_per_item;
    }

    //payment amt for employees
    public function getPaymentAmount(): float
    {
        return $this->getQuantity() * $this->getPricePerItem();
    }



    //get num of invoices
    public static function getInvoiceCount(): int
    {
        return self::$invoice_count;
    }


    public function toString(): void {
        echo "<br><b>Part Number</b>:</b> ", $this->getPartNumber();
        echo "<br><b>Part Description</b>: ", $this->getPartDescription();
        echo "<br><b>Quantity: </b> ", $this->getQuantity();
        echo "<br><b>Price Per Item: </b> $", $this->getPricePerItem();
        echo "<br><b>Payment: </b> $", $this->getPaymentAmount();
    }
}


