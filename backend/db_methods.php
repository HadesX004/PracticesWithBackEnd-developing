<?php
    
    require_once("classOperations.php");
    
    class dbOperations extends OperationsInsertDelete {
        // Method to insert data in the database
        public function insertItems() {
            // Size MB insert condition
            if($this->fk_type == 1){
                $queryOP = $this->pdo->prepare("SELECT * FROM tb_type WHERE id_type = ".$this->fk_type);
                $queryOP->execute();
                $fkType = $queryOP->fetch();

                $query = $this->pdo->prepare("INSERT INTO tb_items (SKU, name, price, fk_type, valueOfType) VALUES (?, ?, ?, ?, ?)");                  
                
                if($query->execute(array($this->sku, $this->name, "R$".$this->price, $this->fk_type, $fkType["typeName"]." ".$this->valueOfType))){
                    header("Location: http://127.0.0.1/18.Junior%20Developer%20Test%20Task/Projeto/index.php");

                }else {
                    echo("<script>alert('Can't insert the data in database, please try again latter.')</script>");

                }


            // Weight KG insert condition 
            }else if ($this->fk_type == 2) {
                $queryOP = $this->pdo->prepare("SELECT * FROM tb_type WHERE id_type = ".$this->fk_type);
                $queryOP->execute();
                $fkType = $queryOP->fetch();

                $query = $this->pdo->prepare("INSERT INTO tb_items (SKU, name, price, fk_type, valueOfType) VALUES (?, ?, ?, ?, ?)");                  
                
                if($query->execute(array($this->sku, $this->name, "R$".$this->price, $this->fk_type, $fkType["typeName"]." ".$this->valueOfType))){
                    header("Location: http://127.0.0.1/18.Junior%20Developer%20Test%20Task/Projeto/index.php");

                }else {
                    echo("<script>alert('Can't insert the data in database, please try again latter.')</script>");

                }

            // Dimensions insert conditions
            }else if ($this->fk_type == 3) {
                $queryOP = $this->pdo->prepare("SELECT * FROM tb_type WHERE id_type = ".$this->fk_type);
                $queryOP->execute();
                $fkType = $queryOP->fetch();

                $query = $this->pdo->prepare("INSERT INTO tb_items (SKU, name, price, fk_type, valueOfType) VALUES (?, ?, ?, ?, ?)");                  
                
                if($query->execute(array($this->sku, $this->name, "R$".$this->price, $this->fk_type, $fkType["typeName"]." ".$this->valueOfType))){
                    header("Location: http://127.0.0.1/18.Junior%20Developer%20Test%20Task/Projeto/index.php");

                }else {
                    echo("<script>alert('Can't insert the data in database, please try again latter.')</script>");

                }

            }
            
        }

        // Method to insert data in the database
        public function deleteItems() {
            $query = $this->pdo->prepare("DELETE FROM tb_items WHERE id_item = ?");

            if (!$query->execute(array($this->id_item))) {
                echo("<script>alert('Can't delete the item, please try again !')</script>");

            }

        }

    }


?>