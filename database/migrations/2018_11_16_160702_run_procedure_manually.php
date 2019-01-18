<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



$pdo = DB::getPdo();
$p1 = 8;

$stmt = $pdo->prepare("begin myproc(:p1, :p2); end;");
$stmt->bindParam(':p1', $p1, PDO::PARAM_INT);
$stmt->bindParam(':p2', $p2, PDO::PARAM_INT);
$stmt->execute();

return $p2; // prints 16



$procedureName = 'youpackagename.yourprocedurename';

$bindings = [
    'user_id'  => $id,
];

$result = DB::executeProcedure($procedureName, $bindings);

dd($result);