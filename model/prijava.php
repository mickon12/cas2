<?php 
    class Prijava {
        public $id;
        public $predmet;
        public $katedra;
        public $sala;
        public $datum;

        public function __construct($id = null,$predmet = null, $katedra = null, $sala = null, $datum = null)
        {
            $this->id = $id;
            $this->predmet = $predmet;
            $this->katedra = $katedra;
            $this->sala = $sala;
            $this->datum = $datum;

        }

        public static function getAll(mysqli $conn){
            $query = "SELECT * FROM prijave";
            return $conn->query($query);
        }

        public static function getbyId($id, mysqli $conn){
            $query = "SELECT * FROM prijav WHERE id=$id";
            $myarray = array();
            $rezultat = $conn->query($query);
            if ($rezultat){
                while($red = $rezultat->fetch_array()){
                    $myarray[] = $red;
                }
            }
            return $myarray;
        } 

        public function deleteById(mysqli $conn){
            $query = "DELETE FROM prijava WHERE id=$this->id";
            return $conn->query($query);
        }

        public function add(Prijava $prijava, mysqli $conn){
            $query = "INSERT INTO prijav(predmet, katedra, sala, datum) VALUES('$prijava->predmet', '$prijava->katedra', '$prijava->sala', '$prijava->datum')";
            return $conn->query($query);
        }

        public function update( mysqli $conn){
            $query = "UPDATE prijava set predmet='$this->predmet', katedra='$this->katedra', sala='$this->sala', datum'$this->datum'";
            return $conn->query($query);    
        }

    }
?>