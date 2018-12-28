<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post {
    /**
     * @var int
     *
     * @ORM\Column(name="id_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPost;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=256, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudo", type="text", length=65535, nullable=false)
     */
    private $conteudo;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="date", nullable=false)
     */
    private $dataCriacao;

    /**
     * @return int
     */
    public function getIdPost(){
        return $this->idPost;
    }

    /**
     * @param int $idPost
     */
    public function setIdPost($idPost){
        $this->idPost = $idPost;
    }

    /**
     * @return string
     */
    public function getTitulo(){
        return $this->titulo;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
    public function getConteudo(){
        return $this->conteudo;
    }

    /**
     * @param string $conteudo
     */
    public function setConteudo($conteudo){
        $this->conteudo = $conteudo;
    }

    /**
     * @return int
     */
    public function getStatus(){
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status){
        $this->status = $status;
    }

    /**
     * @return DateTime
     */
    public function getDataCriacao(){
        return $this->dataCriacao;
    }

    /**
     * @param DateTime $dataCriacao
     */
    public function setDataCriacao($dataCriacao){
        $this->dataCriacao = $dataCriacao;
    }

    public function toArray(){
        return [
            'idPost' => $this->getIdPost(),
            'titulo' => $this->getTitulo(),
            'conteudo' => $this->getConteudo(),
            'status' => $this->getDataCriacao(),
            'dataCriacao' => $this->getDataCriacao(),
        ];
    }

}
