
<?php

class Charge
{

    public $amount; //Integer
    public $authorization; //Object
    public $conciliated; //Boolean
    public $creationDate; //String
    public $currency; //String
    public $customer; //Customer
    public $description; //String
    public $dueDate; //String
    public $errorMessage; //Object
    public $id; //String
    public $method; //String
    public $operationDate; //String
    public $operationType; //String
    public $orderId; //Object
    public $paymentMethod; //PaymentMethod
    public $status; //String
    public $transactionType; //String
    
    public function getAmount() { 
         return $this->amount; 
    }
    public function setAmount($amount) { 
         $this->amount = $amount; 
    }    
    public function getAuthorization() { 
         return $this->authorization; 
    }
    public function setAuthorization($authorization) { 
         $this->authorization = $authorization; 
    }    
    public function getConciliated() { 
         return $this->conciliated; 
    }
    public function setConciliated($conciliated) { 
         $this->conciliated = $conciliated; 
    }    
    public function getCreation_date() { 
         return $this->creationDate; 
    }
    public function setCreation_date($creationDate) { 
         $this->creationDate = $creationDate; 
    }    
    public function getCurrency() { 
         return $this->currency; 
    }
    public function setCurrency($currency) { 
         $this->currency = $currency; 
    }    
    public function getCustomer() { 
         return $this->customer; 
    }
    public function setCustomer($customer) { 
         $this->customer = $customer; 
    }    
    public function getDescription() { 
         return $this->description; 
    }
    public function setDescription($description) { 
         $this->description = $description; 
    }    
    public function getDue_date() { 
         return $this->dueDate; 
    }
    public function setDue_date($dueDate) { 
         $this->dueDate = $dueDate; 
    }    
    public function getError_message() { 
         return $this->errorMessage; 
    }
    public function setError_message($errorMessage) { 
         $this->errorMessage = $errorMessage; 
    }    
    public function getId() { 
         return $this->id; 
    }
    public function setId($id) { 
         $this->id = $id; 
    }    
    public function getMethod() { 
         return $this->method; 
    }
    public function setMethod($method) { 
         $this->method = $method; 
    }    
    public function getOperation_date() { 
         return $this->operationDate; 
    }
    public function setOperation_date($operationDate) { 
         $this->operationDate = $operationDate; 
    }    
    public function getOperation_type() { 
         return $this->operationType; 
    }
    public function setOperation_type($operationType) { 
         $this->operationType = $operationType; 
    }    
    public function getOrder_id() { 
         return $this->orderId; 
    }
    public function setOrder_id($orderId) { 
         $this->orderId = $orderId; 
    }    
    public function getPayment_method() { 
         return $this->paymentMethod; 
    }
    public function setPayment_method($paymentMethod) { 
         $this->paymentMethod = $paymentMethod; 
    }    
    public function getStatus() { 
         return $this->status; 
    }
    public function setStatus($status) { 
         $this->status = $status; 
    }    
    public function getTransaction_type() { 
         return $this->transactionType; 
    }
    public function setTransaction_type($transactionType) { 
         $this->transactionType = $transactionType; 
    }    

}

?>