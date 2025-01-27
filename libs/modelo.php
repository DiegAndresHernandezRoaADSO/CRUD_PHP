<?php

    class modelo{
        protected $id;
        protected $table;
        protected $db;

        public function __construct(
            $id,
            $table,
            PDO $connection
        )
        {
            $this->id = $id;
            $this->table = $table;
            $this->db = $connection;
        }

        public function getAll(){
            $stm = $this->db->prepare("SELECT * from {$this->table}");
            $stm->execute();
            return $stm->fetchAll();
        }

        public function getById($id){
            $stm = $this->db->prepare("SELECT * from {$this->table} WHERE id = {$id}");
            $stm->execute();
            return $stm->fetch();
        }


        public function store($data){
            $sql = "INSERT INTO users (";
            foreach($data as $key => $a){
                if ($a == "") continue;             
                $sql .= "{$key},";
            }
    
    
            $sql = trim($sql, ', ');
            $sql .= ") VALUES (";
    
            foreach($data as $key => $value){
                if ($value == "") continue;
                $sql .=":{$key},";
            }
            
            $sql = trim ($sql, ', ');
            $sql .= ")";
    
            $stm = $this->db->prepare($sql);
    
            foreach($data as $key => $value){
                if ($value == "") continue;
                $stm->bindValue(":{$key}", $value);
            }
            $stm->execute();
        }

        public function update($id ,$data)
        {

            $sql = "UPDATE users set ";

            foreach ($data as $key => $value) {

                $sql = "{$key} = :{$key}, ";
            }

            $sql = trim($sql, ', ');
            $sql .= " WHERE id = :id";
            $sql = $this-> db->prepare($sql);
            foreach ($data as $key => $value) {
                $stm->bindValue(":{$key}", $value);
            }

            $stm->bindValue(":id", $id);
            $stm->execute();

        }
        
        public function delete(){
            $sql = "delete from users where id = :id";

            $stm = $this-> db->prpare($sql);
            $stm->bindValue("id",$id);
            $stm->execute();
        }
    }
?>