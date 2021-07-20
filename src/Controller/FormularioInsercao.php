<?php


namespace Alura\Cursos\Controller;


class FormularioInsercao implements InterfaceControladorRequisicao
{
    public function processaRequisicao()
    {
        $titulo = "Novo Curso";
        include __DIR__ .'/../../view/cursos/formulario.phtml';
    }
}