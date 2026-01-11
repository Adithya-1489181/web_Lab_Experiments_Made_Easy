<!DOCTYPE html>
<html>
<head>
<title>Student Records</title>
<style>
body{font-family:Arial;background:#f4f4f4;padding:20px;text-align:center}
table{margin:auto;border-collapse:collapse;width:70%}
th,td{border:1px solid #ccc;padding:8px}th{background:#eee}
</style>
</head>
<body>
<h1>Student Records</h1>
<?php
try{
    $p = new PDO("mysql:host=localhost;dbname=student_records","root","sorryNopasswords😅");
    $s = $p->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
    for($i=0;$i<count($s)-1 ;$i++){
        $idx = $i;
        for($j=$i+1;$j<count($s);$j++){
            if($s[$j]['gpa']<$s[$idx]['gpa'])
                $idx=$j;
        }
        $temp=$s[$i];
        $s[$i]=$s[$idx];
        $s[$idx]=$temp;
    }
    echo "<table><tr><th>ID</th><th>Name</th><th>GPA</th></tr>";
    foreach($s as $x)
        echo "<tr><td>{$x['id']}</td><td>{$x['name']}</td><td>{$x['gpa']}</td></tr>";
    echo "</table>";
}catch(Exception $e){
    echo "DB Error";
}
?>
</body>
</html>

<!---mysql - u root -p--->