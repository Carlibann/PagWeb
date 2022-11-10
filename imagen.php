$dir="imgw/";
 
$nombre_archivo=($_FILES['imagen']['name']);
 
copy($_FILES['imagen']['tmp_name'], 'imgw/'.$_FILES['imagen']['name']);

$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
 
if($f2=mysqli_fetch_assoc($sql2)){
 
    if($pass==$f2['pasadmin']){
 
        $_SESSION['id']=$f2['id'];
 
        $_SESSION['user']=$f2['user'];
 
        $_SESSION['cedula']=$f2['cedula'];
 
        $_SESSION['email']=$f2['email'];
 
        $_SESSION['password']=$f2['password'];
 
 
        $_SESSION['imagen']=$f2['imagen'];
 
 
        echo '<script>alert("BIENVENIDO ADMINISTRADOR  ")</script> ';
 
        echo "<script>location.href='admin.php'</script>";
 
    }