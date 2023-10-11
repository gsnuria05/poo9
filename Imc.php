<?php

class Calculadora
{
	private $numero1;
    private $numero2;

    //Funciones

    public function suma($num1,$num2)
    {
        $resultado=$num1+$num2;
        return $num1." + ".$num2." = ".$resultado;
    }
	public function resta($num1,$num2)
    {
        $resultado=$num1-$num2;
        return $num1." - ".$num2." = ".$resultado;
    }
    public function multiplicacion($num1,$num2)
    {
        $resultado=$num1*$num2;
        return $num1." x ".$num2." = ".$resultado;
    }    
    public function division($num1,$num2)
    {
        $resultado=$num1/$num2;
        return $num1." / ".$num2." = ".$resultado;
    }


	/**
	 * Get the value of numero1
	 */
	public function getNumero1()
	{
		return $this->numero1;
	}

	/**
	 * Set the value of numero1
	 */
	public function setNumero1($numero1): self
	{
		$this->numero1 = $numero1;

		return $this;
	}

    /**
     * Get the value of numero2
     */
    public function getNumero2()
    {
        return $this->numero2;
    }

    /**
     * Set the value of numero2
     */
    public function setNumero2($numero2): self
    {
        $this->numero2 = $numero2;

        return $this;
    }
}

?>