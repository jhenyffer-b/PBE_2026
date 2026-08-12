<?php

$funcionarios = [
    ["nome" => "Jhenyffer", "cargo" => "Programador", "salario" => 500 ],
    ["nome" => "Isabela", "cargo" => "Designer", "salario" => 3500 ],
    ["nome" => "Stefany", "cargo" => "Analista", "salario" => 3000 ],
    ["nome" => "Rafael", "cargo" => "Gerente", "salario" => 1500 ],
    ["nome" => "Pedro", "cargo" => "Suporte", "salario" => 1000 ],
    ["nome" => "Davi", "cargo" => "Estagíaria", "salario" => 2000 ]
];
$total_funcionario = count($funcionarios);
foreach ($funcionarios as $funcionario) {
    echo "Nome: {$funcionario["nome"]}<br>";
    echo "Cargo: {$funcionario["cargo"]}<br>";
    echo "Salário: {$funcionario["salario"]}<br>";
    echo str_repeat("-", 50)."<br>";


}
?>
