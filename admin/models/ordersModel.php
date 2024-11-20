<?php

class ordersModel {
    public $conn;
    function __construct() {
        $this->conn = connectDB();
    }

    function getAll() {
        $sql = "SELECT * FROM orders";
        return $this->conn->query($sql);
    }

    function delete($id) {
        $sql = "DELETE FROM orders WHERE order_id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM orders WHERE order_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    public function edit($id, $data)
    {
        unset($data['status']);
        $sql = "UPDATE orders SET created_at=:created_at,phone=:phone,name=:name,address=:address,variant_id=:variant_id,account_id=:account_id
        WHERE order_id = :id";
        $data['id'] = $id;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return $stmt->rowCount();
    }
   
   
}
?>