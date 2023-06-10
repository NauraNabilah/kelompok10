<?php

class Functions {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insertData($nama, $nis, $pel1, $pel2, $pel3, $pel4, $pel5, $pel6) {
        $sql = "INSERT INTO profile (nama, nis, pipas, pjok, inggris, indo, mtk, paibp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssiiiiis", $nama, $nis, $pel1, $pel2, $pel3, $pel4, $pel5, $pel6);
        $stmt->execute();
        $stmt->close();
    }

    public function Total($pel1, $pel2, $pel3, $pel4, $pel5, $pel6) {
        $total = $pel1 + $pel2 + $pel3 + $pel4 + $pel5 + $pel6;
        return $total;
    }

    public function Rata($total) {
        $rata = $total / 6;
        return $rata;
    }

    public function cariMax($pel1, $pel2, $pel3, $pel4, $pel5, $pel6) {
        $max = max($pel1, $pel2, $pel3, $pel4, $pel5, $pel6);
        return $max;
    }

    public function cariMin($pel1, $pel2, $pel3, $pel4, $pel5, $pel6) {
        $min = min($pel1, $pel2, $pel3, $pel4, $pel5, $pel6);
        return $min;
    }

    public function cariGrade($rata) {
        if ($rata > 90) {
            return "A";
        } elseif ($rata > 80) {
            return "B";
        } elseif ($rata > 70) {
            return "C";
        } elseif ($rata > 60) {
            return "D";
        } else {
            return "E";
        }
    }
}

?>
