<?php

    abstract class OperationsConnectDB {
        // Connection with databse arguments
        protected $hostDB;
        protected $nameDB;
        protected $userDB;
        protected $passDB;

         //Getters and Setters for hostDB argument
         public function getHostDB(){
            return $this->hostDB;

        }

        public function setHostDB($hostDB) {
            $this->hostDB = $hostDB;

        }


        // Getters and Setters for nameDB argument
        public function getNameDB() {
            return $this->nameDB;

        }

        public function setNameDB($nameDB) {
            $this->nameDB = $nameDB;

        }


        // Getters and Setters for userDB argument 
        public function getUserDB() {
            return $this->userDB;

        }

        public function setUserDB($userDB) {
            $this->userDB = $userDB;

        }


        // Getters and Setters for passDB argument
        public function getPassDB() {
            return $this->passDB;

        }

        public function setPassDB($passDB) {
            $this->passDB = $passDB;

        }


        abstract public function connect();        // Connection method to stabilish connection with the database and generate PDO object

    }

    abstract class OperationsInsertDelete {
        
        // Insert item in database arguments 
        protected $pdo;
        protected $sku;
        protected $name;
        protected $price;
        protected $fk_type;
        protected $valueOfType;

        // Delete item in database arguments 
        protected $id_item;


        // Getters and Setters for manipulate PDO
        public function getPdo() {
            return $this->pdo;

        }

        public function setPdo($pdo) {
            $this->pdo = $pdo;

        }


        // Getters and Setters for SKU arguments 
        public function getSKU() {
            return $this->sku;

        }

        public function setSKU($sku) {
            $this->sku = $sku;

        }


        // Getters and Setters for Name arguments 
        public function getName() {
            return $this->name;

        }

        public function setName($name) {
            $this->name = $name;

        }


        // Getters and Setters for Price arguments 
        public function getPrice() {
            return $this->price;

        }

        public function setPrice($price) {
            $this->price = $price;

        }


        // Getters and Setters for foreing key arguments
        public function getFkType() {
            return $this->fk_type;

        }

        public function setFkType($fk_type) {
            $this->fk_type = $fk_type;

        }


        // Getters and Setters for value of type selected in the options 
        public function getValueOfType() {
            return $this->valueOfType;

        }

        public function setValueOfType($valueOfType) {
            $this->valueOfType = $valueOfType;

        }



        // Getters and Setter for id item in database  
        public function getIdItem() {
            return $this->id_item;

        }
        
        public function setIdItem($id_item) {
            $this->id_item = $id_item;

        }

        
        abstract public function insertItems();    // Insert Items in database method 
        abstract public function deleteItems();    // Delete Items in database method 

    }

?>