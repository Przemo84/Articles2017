<?php
/**
 * Created by PhpStorm.
 * User: Przemo
 * Date: 2017-03-09
 * Time: 00:24
 */

namespace AppBundle\Controller;


class MyArticle
{
    private $id;
    private $title;
    private $content;

    public function setId($id) {
        $this->id= $id;
    }
    public function setTitle($title) {
        $this->title= $title;
    }
    public function setContent($content) {
        $this->content= $content;
    }

    public function getId() {
        return $this->id;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getContent() {
        return $this->content;
    }
}