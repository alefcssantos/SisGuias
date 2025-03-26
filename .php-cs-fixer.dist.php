<?php

// .php-cs-fixer.dist.php
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__) // Aplica a busca a partir da raiz do projeto
    ->name('*.php') // Aplica apenas nos arquivos .php
    ->exclude('vendor') // Exclui a pasta 'vendor'
    ->exclude('system'); // Exclui a pasta 'system' (se necessário)

$config = new Config();
$config->setRules([
    '@PSR2' => true, // Usar as regras PSR-2
    'braces_position' => [
        'classes_opening_brace' => 'same_line', // Controle da posição de chaves para classes
        'functions_opening_brace' => 'same_line', // Controle da posição de chaves para funções
        'control_structures_opening_brace' => 'same_line', // Controle da posição de chaves para estruturas de controle
    ],
]);
$config->setRiskyAllowed(true);
$config->setIndent("    "); // Definir indentação (caso necessário)
$config->setFinder($finder); // Adicionar o finder com o diretório

return $config;
