$conn = mysqli_connect("localhost", "root", "", "chatbox", 3306);

$sql = "INSERT INTO chatbox
        SET
        messages = '" . $_POST['messages'] . "'

     
        ";

//executing a query in database
$query = mysqli_query($conn, $sql);

if ($query) {
    //success
    echo "Data Inserted Successfully.";
} else {
    echo mysqli_error($conn);
}
