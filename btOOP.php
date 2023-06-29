<?php 
	$hoTen = isset($_POST['hoTen']) ? $_POST['hoTen'] : '';
	$ngaySinh = isset($_POST['ngaySinh']) ? $_POST['ngaySinh'] : '';
	$Sdt = isset($_POST['Sdt']) ? $_POST['Sdt'] : '';
	$personsTemp = [];
	$p = new Person($hoTen,$ngaySinh,$Sdt);
	array_push($personsTemp, $p);
	echo '<br>'.$hoTen.' , '.$ngaySinh.' , '.$Sdt;

	echo '<pre>';
	var_dump($personsTemp);
	echo '</pre>';
	
	$persons=isset($_POST['persons']) ? $_POST['persons'] : '';
	
	class Person{
	    var $hoTen;
	    var $namSinh;
	    var $Sdt;
	    function __construct($hoTen,$ngaySinh,$Sdt)
	    {
	    	$this->hoTen=$hoTen;
	    	$this->ngaySinh=$ngaySinh;
	    	$this->Sdt=$Sdt;
	    }

	    public function setHoTen($hoTen)
	    {
	        $this->hoTen = $hoTen;
	        return $this;
	    }
	    public function getHoTen()
	    {
	        return $this->hoTen;
	    }
	    
	    public function setNamSinh($ngaySinh)
	    {
	        $this->ngaySinh = $ngaySinh;
	        return $this;
	    }
	    public function getNgaySinh()
	    {
	        return $this->ngaySinh;
	    } 
	    public function setSdt($Sdt)
	    {
	        $this->Sdt = $Sdt;
	        return $this;
	    }
	    public function getSdt()
	    {
	        return $this->Sdt;
	    }

	}
 ?>