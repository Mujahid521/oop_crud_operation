<?php
class db {
    public $hostname;
    public $username;
    public $password;
    public $db_name;
    public $connection;

    public function __construct($hostname, $username, $password, $db_name){
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;

        $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name = $db_name);
        if(!$this->connection){
            echo "Conection Failed!";
        }else{
            echo "Conection Successful"; 
        }

        
    }
        // Insert start here
            public function insert($name, $phone, $code){
                $sql = "INSERT INTO data (name, phone, code) VALUES('$name', '$phone', '$code')";

                $sql = mysqli_query($this->connection, $sql);
                if(!($sql)){
                    echo "Insert Failed";
                }else{
                    echo "Insert Successful"; 
                }
            }
        // Insert end here


        // Update start here
        public function update($name, $phone, $code){
            $update_sql = "UPDATE data 
             SET name='$name', phone='$phone', code='$code' 
             WHERE id='5' ";

            $update_query = mysqli_query($this->connection, $update_sql);

                if(!($update_query)){
                    echo "Insert Failed";
                }else{
                    echo "Update Successful";
                }
        }
        // Update end here

        // Select start here
            public function select(){
                $select = "SELECT * FROM data";

                $select_query = mysqli_query($this->connection, $select);

                while($select_array = mysqli_fetch_array($select_query)){
                                $id = $select_array['id'];
                                $name = $select_array['name'];
                                $phone = $select_array['phone'];
                                $code = $select_array['code'];
                 echo   $id.' '.$name.' '.$phone.' '.$code.'<br>' ;           
                }
            }
        // Select end here
}
// $Database_connection = new db('localhost', 'root', '', '00p_crud');
// $Database_connection->insert('Rakib', '030303030' ,'3020');
// $Database_connection->update('Rofique', '04040404040', '4040');
// $Database_connection->select();


?>