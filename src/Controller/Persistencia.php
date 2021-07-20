<?php


namespace Alura\Cursos\Controller;


use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
    /**
     * @var EntityManagerCreator
     */
    protected $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
            ->getEntityManager();
    }


    public function processaRequisicao()
    {
        $params = filter_input(
            INPUT_POST,
            'descricao',
            FILTER_SANITIZE_STRING
        );
        $curso = new Curso();
        $curso->setDescricao($params);
        $this->entityManager->persist($curso);
        $this->entityManager->flush();
        header('Location: /listar-cursos', false, 302);
    }
}