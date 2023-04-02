    <?php
//    var_dump($_GET);
//    print_r($_GET);
    if (!empty($_GET["userIdDelete"])){
        require_once "./connect.php";
//        $sql = "DELETE FROM users WHERE `users`.`id` = 1";
//        $sql = "DELETE FROM 'users' WHERE `users`.`firstName` = 'Janusz'";
        $sql = "DELETE FROM users WHERE `users`.`id` = $_GET[userIdDelete]";

        $conn->query($sql);
//        echo $conn->affected_rows;

        if ($conn->affected_rows == 0){
            header(header:"location:../3_db/4_db_table_delete_add.php?deleteUser=0");
        }else{
//            echo "ok";
            header(header:"location:../3_db/4_db_table_delete_add.php?deleteUser=$_GET[userIdDelete]");
        }
    }