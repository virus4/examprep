<?php
class database
{
	private $server;
	private $username;
	private $database;
	private $password;
//constructor
   public function __construct(){
	    $this->server='localhost';
		$this->username='root';
		$this->password='';
		$this->database='exam';
	}
   //server function connection
	public function connect(){
		$con=mysqli_connect($this->server,$this->username,$this->password,$this->database);
	    return $con;
	}
	//insert data  in database table
	public function saveData($con,$data){
		extract($data);
		$q=implode(',', $qua);
		$query="Insert into prep(Name,Address,Qualification)
		VALUES('$name','$address','$q')";
        $result=mysqli_query($con,$query);
		return $result;
		}
	//read data from database
	public function readdata($con)
	{
		$query="Select * from prep";
		$result=mysqli_query($con,$query);
		$no=mysqli_num_rows($result);
		if($no==0)
			return false;
		while ($row=mysqli_fetch_array($result)) {
			$allRow[]=$row;
          } 
		 return $allRow;

	}
	 //delete record from Users
	public function deleteData($con,$ID)
	{
		$query="DELETE FROM prep WHERE ID='$ID'";
		$result=mysqli_query($con,$query);
		return $result;


	}
	public function viewData($con,$ID)
	{
		$query="SELECT * FROM prep WHERE ID='$ID'";
		$result=mysqli_query($con,$query);
		return $result;
	}
}
?>
		