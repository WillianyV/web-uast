<?php


namespace ProjetoSGES\src\controller;


interface InterfacesController
{
    function index(); //tela de listar
    function view(); //tela de exibir usuario
    function create(); //tela de criar
    function edit(); // tela de visualizar para editar

    function store(); //Salvar
    function update(); //Editar
    function delete(); //Deletar
}