<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostTag
 *
 * @ORM\Table(name="post_tag", indexes={@ORM\Index(name="id_post", columns={"id_post"}), @ORM\Index(name="id_tag", columns={"id_tag"})})
 * @ORM\Entity
 */
class PostTag {
    /**
     * @var int
     *
     * @ORM\Column(name="id_post_tag", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPostTag;

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
     * @var \Tag
     *
     * @ORM\ManyToOne(targetEntity="Tag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tag", referencedColumnName="id_tag")
     * })
     */
    private $idTag;

    /**
     * @return int
     */
    public function getIdPostTag(){
        return $this->idPostTag;
    }

    /**
     * @param int $idPostTag
     */
    public function setIdPostTag($idPostTag){
        $this->idPostTag = $idPostTag;
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

    /**
     * @return Tag
     */
    public function getIdTag(){
        return $this->idTag;
    }

    /**
     * @param Tag $idTag
     */
    public function setIdTag($idTag){
        $this->idTag = $idTag;
    }


}
