<?php
error_reporting(0);
require 'Views/ViewStudent.php';
require 'Models/ModelStudent.php';
require 'lib/Error.php';
require 'lib/Success.php';

Class Student
{
	private $numRecordsOnPage = 5;

	public function listStudent(){
		session_start();
		$numRecords = ModelStudent::getInstance()->numRecords();
		$totalPage = ceil($numRecords/ $this->numRecordsOnPage);
		
        if(isset($_GET['page'])){
            $currentPage = $_GET['page'];
			$_SESSION['page'] = $_GET['page'];
        }else{
            $currentPage = 1;
			$_SESSION['page'] = 1;
        }

        if ($currentPage > $totalPage ) {
            $currentPage = $totalPage;
        }else if($currentPage < 1){
            $currentPage = 1;
        }
        $start = ($currentPage - 1) * $this->numRecordsOnPage;
		$_SESSION['stt'] = $start;
		$student = ModelStudent::getInstance()->getAllStudent($start, $this->numRecordsOnPage);
		ViewStudent::getInstance()->showListStudent($student, $totalPage);
	}
	public function pageAddStudent(){
		ViewStudent::getInstance()->showPageAddStudent();
	}
	public function addStudent(){
		$location = "public/hinhanh/";
		
		if(isset($_POST['add'])){
			$nameStudent = trim(ucwords($_POST['nameStudent']));
			$birthDate = $_POST['birthDate'];
			$emailStudent = trim($_POST['emailStudent']);
			$phoneNumber = $_POST['phoneNumber'];
			$pictureProfile = $_FILES['pictureProfile']['name'];
			
			echo $nameStudent;


			
			if(empty($nameStudent) || empty($birthDate) || empty($emailStudent) || empty($phoneNumber) || empty($pictureProfile)){
				Error::getInstance()->error("Vui lòng nhập đủ thông tin", "Student", "pageAddStudent");
			}else{
				move_uploaded_file($_FILES["pictureProfile"]["tmp_name"], $location.$_FILES['pictureProfile']['name']);
				$add = ModelStudent::getInstance()->addStudent($nameStudent, $birthDate, $emailStudent, $phoneNumber, $pictureProfile);
				if($add){
					Success::getInstance()->success("Thêm thành công", "Student", "listStudent");
				}else{
					Error::getInstance()->error("Có lỗi xảy ra vui lòng thử lại", "Student", "pageAddStudent");
				}
			}
		}else{
			ViewStudent::getInstance()->showPageFailure("Có lỗi xảy ra vui lòng thử lại sau", "Student", "listStudent");
		}
	}

	private function sortByName($a, $b) {
        // Sắp xếp theo alphabeta (theo họ)
        return strcmp($a['nameStudent'], $b['nameStudent']);
    }
    private function sortByDob($a, $b) {
        // Sắp xếp theo ngày cũ thì lên trước
        return (strtotime($a['birthDate']) > strtotime($b['birthDate']));
    }

	public function sortStudent(){
		session_start();
		if($_POST['sort']){
		$option = $_POST['option'];
			if($option == "name"){
				$numRecords = ModelStudent::getInstance()->numRecords();
				$totalPage = ceil($numRecords/ $this->numRecordsOnPage);
				$start = ($_SESSION['page'] - 1) * $this->numRecordsOnPage;
				$student = ModelStudent::getInstance()->getAllStudent($start, $this->numRecordsOnPage);
				usort($student, [$this, 'sortByName']);
				ViewStudent::getInstance()->showListStudent($student, $totalPage);
			}else if($option == "date" ){
				$numRecords = ModelStudent::getInstance()->numRecords();
				$totalPage = ceil($numRecords/ $this->numRecordsOnPage);
				$start = ($_SESSION['page'] - 1) * $this->numRecordsOnPage;
				$student = ModelStudent::getInstance()->getAllStudent($start, $this->numRecordsOnPage);
				usort($student, [$this, 'sortByDob']);
				ViewStudent::getInstance()->showListStudent($student, $totalPage);
			}
		}
	}
}