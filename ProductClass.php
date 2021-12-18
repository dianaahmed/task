<?php
    class Product{
        // fields, attributes
        var $code;
        var $name;
        var $price;
        var $image_name;
        
        // constructor
        function __construct($defaultCode, $defaultName,$defaultPrice,$defaultImage_name)
        {
            $this->code = $defaultCode;
            $this->name= $defaultName;
            $this->price= $defaultPrice;
            $this->image_name= $defaultImage_name;

        }
        // methods, functions
        public function getCode()
        {
            return $this->code;
        }

        public function getName()
        {
            return $this->name;
        
        }
        
        public function getPrice()
        {
            return $this->price;
        }
        
        public function getImage_name()
        {
            return $this->image_name;

        }
    }
   

 ?>




