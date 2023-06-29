<?php 
	class KhachHang{
	    private $hoTen;
	    private $namSinh;
	    // public function __construct()
	    // {
	    // 	$this->hoTen="Trạch văn đoành";
	    // 	$this->namSinh="1960";
	    // }
	    function __construct($hoTen,$namSinh)
	    {
	    	$this->hoTen=$hoTen;
	    	$this->namSinh=$namSinh;
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
	    
	    public function setNamSinh($namSinh)
	    {
	        $this->namSinh = $namSinh;
	        return $this;
	    }
	    public function getNamSinh()
	    {
	        return $this->namSinh;
	    }
	}
	class KhachHangAudi extends KhachHang
	{
		var $sdt;
		var $email;
	    public function __construct($hoTen,$namSinh,$sdt,$email)
	    {
	    	parent::__construct($hoTen,$namSinh);
	        $this->sdt=$sdt;
	        $this->email=$email;
	    }
	    public function setSdt($sdt)
	    {
	        $this->sdt = $sdt;
	        return $this;
	    }
	    public function getSdt()
	    {
	        return $this->sdt;
	    }
	    
	    public function setEmail($email)
	    {
	        $this->email = $email;
	        return $this;
	    }
	    public function getEmail()
	    {
	        return $this->email;
	    }
	}
	// $kh = new KhachHang();
	// $kh->setHoTen("Nguyen Van A");
	// $kh->setNamSinh(2002);
	// $kh= new KhachHang("Tran van A",1976);
	$kh2= new KhachHangAudi("le van A",1976,"123321414","bcas@gmail.com");

	echo '<br> '.$kh2->getHoTen().', '.$kh2->getNamSinh();
	echo '<br> '.$kh2->getSdt().', '.$kh2->getEmail().'<br> ';
	// $arrayKhachHang = ['04'=>"Hà Nội",'19'=>"Hải Phòng"];
	// var_dump($arrayKhachHang);	

	// array_push($arrayKhachHang,"Hà Tây");	
	$khachHang=[];
	for ($i = 0; $i <10 ; $i++) {
		$kh=new KhachHang("tức anh ách".$i,$i);
		array_push($khachHang, $kh);
	}
	echo '<pre>';
	var_dump($khachHang);
	echo '</pre>';
	var_dump(count($khachHang));

	unset($khachHang[0]);

	echo '<pre>';
	var_dump($khachHang);
	echo '</pre>';
	var_dump(count($khachHang));
	
	foreach ($khachHang as $value) {
		echo '<br>'.$value->getHoTen();
	}
	foreach ($khachHang as $key => $value) {
		echo '<br>'.$value->getHoTen().', key '.$key;
		
	}
	// echo '<pre>';
	// var_dump($khachHang[3]->getHoTen());
	// echo '</pre>';
	

	// echo '<pre>';
	// var_dump($khachHang[0]->setHoTen("Nguyen Van B"));
	// echo '</pre>';
	
	// $khnew = new KhachHang("Nguyen Van Thay",1998);
	// $khachHang[0]=$khnew;

	// echo '<pre>';
	// var_dump($khachHang);
	// echo '</pre>';
	
 ?>