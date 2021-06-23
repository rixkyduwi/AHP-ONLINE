<?php
	// connection
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'ahp';

	$koneksi = mysqli_connect($host,$username,$password);

	if (!$koneksi)
	{
		echo "Tidak dapat terkoneksi dengan server";
		exit();
	}

	if(!mysqli_select_db($koneksi, $database))
	{
		echo "Tidak dapat menemukan database";
		exit();
	}
	?>
	<?php
	class Config {
  private $host = "localhost";
  private $db_name = "ahp";
  private $username = "root";
  private $password = "";
  public $conn;

  public function getConnection() {
    $this->conn = null;
    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    } catch (PDOException $exception) {
      echo "Connection error: " . $exception->getMessage();
    }
    return $this->conn;
  }
}
	?>