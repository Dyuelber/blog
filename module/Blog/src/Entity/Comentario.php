<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table(name="comentario", indexes={@ORM\Index(name="id_post", columns={"id_post"})})
 * @ORM\Entity
 */
class Comentario {

    /**
     * @var int
     *
     * @ORM\Column(name="id_comentario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=false)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=256, nullable=false)
     */
    private $autor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="date", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id_post")
     * })
     */
    private $idPost;

    /**
     * @return int
     */
    public function getIdComentario(){
        return $this->idComentario;
    }

    /**
     * @param int $idComentario
     */
    public function setIdComentario($idComentario){
        $this->idComentario = $idComentario;
    }

    /**
     * @return string
     */
    public function getComentario(){
        return $this->comentario;
    }

    /**
     * @param string $comentario
     */
    public function setComentario($comentario){
        $this->comentario = $comentario;
    }

    /**
     * @return string
     */
    public function getAutor(){
        return $this->autor;
    }

    /**
     * @param string $autor
     */
    public function setAutor($autor){
        $this->autor = $autor;
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

    /**
     * @return Post
     */
    public function getIdPost(){
        return $this->idPost;
    }

    /**
     * @param Post $idPost
     */
    public function setIdPost($idPost){
        $this->idPost = $idPost;
    }



}
