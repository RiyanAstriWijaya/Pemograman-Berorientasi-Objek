<?php 

class Nilai{
    private int $tugas1;
    private int $tugas2;
    private int $tugas3;
    private int $tugas4;
    private int $tugas5;
    private int $uts;
    private int $uas;

    public function __construct($tugas1, $tugas2, $tugas3, $tugas4, $tugas5, $uts, $uas){
        $this -> tugas1 = $tugas1;
        $this -> tugas2 = $tugas2;
        $this -> tugas3 = $tugas3;
        $this -> tugas4 = $tugas4;
        $this -> tugas5 = $tugas5;
        $this -> uts = $uts;
        $this -> uas = $uas;
    }

    public function getTugas(){
        return ($this -> tugas1 + $this -> tugas2 + $this -> tugas3 + $this -> tugas4 + $this -> tugas5)*0.25/5;
    }  

    public function getUts(){
        return $this -> uts * 0.35;
    }

    public function getUas(){
        return $this -> uas * 0.4;
    }

    public function getPenilaian(){
        $hasil = $this -> getTugas() + $this -> getUts() + $this -> getUas();
        if ($hasil >= 90){
            echo "Nilai Anda A" . PHP_EOL;
        }else if ($hasil >= 75){
            echo "Nilai Anda B" . PHP_EOL;
        }else if ($hasil >= 60){
            echo "Nilai Anda C" . PHP_EOL;
        }else if ($hasil >= 40){
            echo "Nilai Anda D" . PHP_EOL;
        }else if ($hasil <40){
            echo "Nilai Anda E" . PHP_EOL;
        }
       return $hasil;
       
    }

   
}

$andi = new Nilai (45, 66, 59, 60, 78, 80, 75);
echo $andi->getPenilaian();

