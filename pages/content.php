<?php
declare(strict_types = 1);

require_once(__DIR__ . "/../app/Database.php");
use App\Database;

$tblName = "projects";
$db = new Database("localhost", "root", "", "todo_list_db");
$db->connect();
// $db->insert($tblName, "Project #3");
$res = $db->select($tblName);
?>

<body>
    <div>
        <h1 class="red">To-do list</h1>
    </div>
</body>
