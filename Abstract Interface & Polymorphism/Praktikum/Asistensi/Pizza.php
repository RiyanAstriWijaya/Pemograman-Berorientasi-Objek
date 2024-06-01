<?php
abstract class Pizza 
{
    protected string $nama;
    protected string $adonan;
    protected array $saus = [];
    protected array $topping = [];
    
    public function __construct($nama, $adonan) {
        $this->nama = $nama;
        $this->adonan = $adonan;
    }
   
    public function getNama () {
        return $this->nama;
    }

    public function getadonan () {
        return $this->adonan;
    }

    public function getsaus () {
        return $this->saus;
    }

    public function getTopping () {
        return $this->topping;
    }

    public function addTopping($topping): Pizza {
        $this->topping[] = $topping;
        return $this;
    }

    public function addSauce($saus): Pizza {
        $this->saus[] = $saus;
        return $this;
    }

    public function panggangPizza(): Pizza {
        // gunakan match
        $waktu = match($this->adonan) {
            'thin crust' => 10,
            'regular crust' => 15,
            'thick crust' => 20,
        };
        echo "Pizza {$this->nama} dipanggang dengan adonan {$this->adonan} selama {$waktu} menit" . PHP_EOL;
        return $this;
    }
    abstract public function hitungHarga(Pizza $pizza);
}