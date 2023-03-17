<?php
class book {
    public $isbn;
    public $title;
    public $pub;
    public $year;
    public $price;
  
    public function __construct($isbn, $title, $pub, $year, $price) {
      $this->isbn = $isbn;
      $this->title = $title;
      $this->pub = $pub;
      $this->year = $year;
      $this->price = $price;
    }
  
    public function displayBookInfo() {
      echo "ISBN: " . $this->isbn . "<br>";
      echo "Title: " . $this->title . "<br>";
      echo "Publisher: " . $this->pub . "<br>";
      echo "Year: " . $this->year . "<br>";
      echo "Price: $" . $this->price . "<br>";
    }
  }
  
  $book1 = new book("01", "Đắc nhân tâm", "Tâm lý", 1979, 12.99);
  $book1->displayBookInfo();

  class author {
    public $name;
    public $gender;
    public $birthday;
    public $address;
  
    public function __construct($name, $gender, $birthday, $address) {
      $this->name = $name;
      $this->gender = $gender;
      $this->birthday = $birthday;
      $this->address = $address;
    }
  
    public function displayAuthorInfo() {
      echo "Name: " . $this->name . "<br>";
      echo "Gender: " . $this->gender . "<br>";
      echo "Birthday: " . $this->birthday . "<br>";
      echo "Address: " . $this->address . "<br>";
    }
  }
  
  $author1 = new author("Jane Austen", "Female", "December 16, 1775", "Steventon Rectory, Hampshire, England");
  $author1->displayAuthorInfo();

  class category {
    public $id;
    public $name;
    public $gender;
    public $des;
  
    public function __construct($id, $name, $gender, $des) {
      $this->id = $id;
      $this->name = $name;
      $this->gender = $gender;
      $this->des = $des;
    }
  
    public function displayCategoryInfo() {
      echo "ID: " . $this->id . "<br>";
      echo "Name: " . $this->name . "<br>";
      echo "Gender: " . $this->gender . "<br>";
      echo "Description: " . $this->des . "<br>";
    }
  }
  
  $category1 = new category(1, "Fiction", "Both", "Works of the imagination, often involving supernatural or extraordinary events, people, or creatures.");
  $category1->displayCategoryInfo();
  
  class library_Book {
    public $isbn;
    public $title;
    public $pub;
    public $year;
    public $price;
    public $id;
    public $addr;
    public $date;
    private $sl;
  
    public function __construct($isbn, $title, $pub, $year, $price, $id, $addr, $date, $sl) {
      $this->isbn = $isbn;
      $this->title = $title;
      $this->pub = $pub;
      $this->year = $year;
      $this->price = $price;
      $this->id = $id;
      $this->addr = $addr;
      $this->date = $date;
      $this->sl = $sl;
    }
  
    public function getSoluong() {
      return $this->sl;
    }
  
    public function setSoluong($new_sl) {
      $this->sl = $new_sl;
    }
  
    public function displayLib_BookInfo() {
      echo "ISBN: " . $this->isbn . "<br>";
      echo "Title: " . $this->title . "<br>";
      echo "Publisher: " . $this->pub . "<br>";
      echo "Year: " . $this->year . "<br>";
      echo "Price: " . $this->price . "<br>";
      echo "ID: " . $this->id . "<br>";
      echo "Address: " . $this->addr . "<br>";
      echo "Date: " . $this->date . "<br>";
      echo "Quantity: " . $this->sl . "<br>";
    }
  }

  class library {
    public $id;
    public $addr;
    
    public function displayLibraryInfo() {
      echo "ID: " . $this->id . "<br>";
      echo "Address: " . $this->addr . "<br>";
    }
  }
  $myLibrary = new library();
  $myLibrary->id = 123;
  $myLibrary->addr = "123 Main St, Anytown USA";
  $myLibrary->displayLibraryInfo();

  
  class Loan {
    public $id;
    public $date;
    public $num;
    
    public function displayLoan_BookInfo() {
      echo "ID: " . $this->id . "<br>";
      echo "Date: " . $this->date . "<br>";
      echo "Number: " . $this->num . "<br>";
    }
  }
  $myLoan = new Loan();
  $myLoan->id = 123;
  $myLoan->date = "2023-03-17";
  $myLoan->num = 2;
  $myLoan->displayLoan_BookInfo();

  
  class Student {
    public $id;
    public $name;
    public $gender;
    public $class;
    public $khoa;
    
    public function displayStudentInfo() {
      echo "ID: " . $this->id . "<br>";
      echo "Name: " . $this->name . "<br>";
      echo "Gender: " . $this->gender . "<br>";
      echo "Class: " . $this->class . "<br>";
      echo "Khoa: " . $this->khoa . "<br>";
    }
  }
  $myStudent = new Student();
  $myStudent->id = 123;
  $myStudent->name = "vuong";
  $myStudent->gender = "Male";
  $myStudent->class = "PNV24A";
  $myStudent->khoa = "Khoa CNTT";
  $myStudent->displayStudentInfo();
    
?>
