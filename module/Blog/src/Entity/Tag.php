<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity
 */
class Tag {
    /**
     * @var int
     *
     * @ORM\Column(name="id_tag", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nome", type="string", length=128, nullable=true)
     */
    private $nome;

    /**
     * @return int
     */
    public function getIdTag(){
        return $this->idTag;
    }

    /**
     * @param int $idTag
     */
    public function setIdTag($idTag){
        $this->idTag = $idTag;
    }

    /**
     * @return null|string
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * @param null|string $nome
     */
    public function setNome($nome){
        $this->nome = $nome;
    }


}
