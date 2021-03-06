﻿<!doctype html>
<html>
<head>
    <base href="<?php echo __dir(); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livraria Virtual</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
<header>
    <div id="logo">
        <a href="./">
            <img src="public/img/logo.png" alt="Logo da empresa" title="Logo da empresa"/>
        </a>
    </div>

    <section id="search">
        <form method="post" action="search">
            <select name="tipo">
                <option value="livro">Livro</option>
                <option value="autor">Autor</option>
                <option value="editora">Editora</option>
            </select>
            <input type="text" name="search" placeholder="Digite aqui o termo da pesquisa">
            <input type="submit" name="submit" value="Pesquisar">
        </form>
    </section>

    <div id="carrinho">
        <a href="carrinho">
            <img src="public/img/carrinho.png">
        </a>
    </div>
</header>

<nav>
    <ul class="menu">
        <li><a href="./"> Home </a></li>
        <li><a href="livros/vendidos"> Mais Vendidos </a></li>
        <li><a href="carrinho">Meu Carrinho</a></li>
        <li><a href="atendimento">Atendimento</a></li>
        <?php if($this->usuario): ?>
            <li><a href="conta">Minha Conta</a></li>
            <li><a href="conta/pedidos">Meus Pedidos</a></li>
            <?php if($this->usuario->getRole() == "admin"): ?>
                <li><a href="admin">Admin</a></li>
            <?php endif; ?>
            <li><a href="auth/logout">Logout</a></li>
        <?php else: ?>
            <li><a href="auth">Entrar/Cadastrar</a></li>
        <?php endif; ?>
    </ul>
</nav>

<section id="conteudo">
