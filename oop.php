<?php 
	//oop面向对象Object Oriented Programming
	#创建一个类
	//protected外部不可以访问，子类可以访问，本类可以访问 
	class Person{
		protected $name;
		private $email; 
		private static $age = 40;
		public static function getAge(){
			return Person::$age;

		}

		public function setName($sbqname){
			//这个name就是上面的$name,不加$
			$this->name = $sbqname;

		}
		public function getName(){
			return $this->name;
		}
		public function setEmail($sbqemail){
			$this->email = $sbqemail;

		}
		public function getEmail(){
			return $this->email;

		}

		#构造函数（对象一旦被初始化了自动调用）__construct固定的
		public function __construct($name = "fdfsd",$email = "2125"){
			
			$this->name = $name;
			$this->email = $email;
			// echo "Person 对象已被创建！";
			//神奇变量
			echo __CLASS__."对象已被创建！";
		}
		#析构函数
		// (对象消失之前调用)
		public function __destruct(){
			echo __CLASS__."对象已被销毁!";
		}

	}
	#创建一个对象 // new的时候开辟一个空间
	// $person1 = new Person;
	// $person1->name = "Gaochao";
	// echo $person1->name;//Gaochao
	// $person1->setName("小陈");
	// echo $person1->getName();//小陈


	// $person1->setEmail("1242178302@qq.con");
	// echo $person1->getEmail();
	// $person1 = new Person("买奥杰","546841@as.com");
	// echo $person1->getName();

	#继承
	// 父亲私有的子类不能继承
	class Customas extends Person{
		private $salary;
		public function setSalary($salary){
			$this->salary = $salary;
		}
		public function getSalary(){
			return $this->salary;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function __construct($name,$email,$salary){
			//调父级里方法
			parent::__construct($name,$email);
			$this->salary = $salary;
		}


	}
	$custmas = new Customas("BUckry","548648@qq.com",3000);
	// $custmas->setSalary(3000);
	echo $custmas->getName();
	echo $custmas->getEmail();
	echo $custmas->getSalary()."<hr>";
	#调用静态变量
	// echo Person::$age;
	echo Person::getAge();
	$custmas->setName("niuniu");
	echo $custmas->getName();




	




 ?>