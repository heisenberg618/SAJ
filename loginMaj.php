
<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "juridique";

// Db connection
  $conn = mysqli_connect($host,$user,$pass,$db);
  if(!$conn){
echo "there are some probleme while connection the data"; 
  }

session_start(); 
if (isset($_POST['CINLogin']) && isset($_POST['pass'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname =htmlspecialchars(trim(strtolower($_POST['CINLogin'])));
    $pass = md5($_POST['pass']);

    if (empty($uname)) {
        header("Location: loginindex.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: passindex.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM login WHERE CINL='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['CINL'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['CINL'] = $row['CINL'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: accueil.php");
                exit();

            }else{

                header("Location: loginindex.php?error=Incorect User ID or password");

                exit();

            }

        }else{

            header("Location: loginindex.php?error=Incorect User ID or password");

            exit();

        }

    }

}else{

    header("Location: loginindex.php");

    exit();

}
?>