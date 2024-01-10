<?php

$host = 'localhost';
$id = 'WP_GISOOKEE'; 
$pass = '1234';
$db = 'GISOOKEE'; 
$port = 3307;

$conn = mysqli_connect($host, $id, $pass, $db, $port);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 입력된 정보를 보안을 위해 이스케이프 처리
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $stuId = mysqli_real_escape_string($conn, $_POST["stuId"]);
    $roomNum = mysqli_real_escape_string($conn, $_POST["roomNum"]);

    // 데이터베이스에서 사용자 정보 확인을 위한 쿼리
    $query = "SELECT * FROM ds_info WHERE name = '$name' AND stuId = '$stuId' AND roomNum = '$roomNum'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // 데이터베이스에서 일치하는 정보가 있는 경우
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('로그인 되었습니다.');</script>";
        } else {
            echo "<script>alert('로그인이 불가합니다.');</script>";
        }
    } else {
        // 데이터베이스 오류가 발생한 경우
        echo "<script>alert('데이터베이스 오류가 발생했습니다.');</script>";
        // 에러 로그 출력
        error_log("Error: " . $query . "\n" . mysqli_error($conn), 0);
    }

    // 데이터베이스 연결 종료
    mysqli_close($conn);
}

?>
