<?php

namespace Application\Models;

abstract class Post
{
    protected $id;
    protected $author;
    protected $date;
    protected $content;
    protected $title;
    protected $status;
    protected $name;
    protected $category;

    function __construct($values) {
        $this->id = isset($values['id']) ? $values['id']:null;
        $this->author = isset($values['post_author']) ? $values['post_author']:null;
        $this->date = isset($values['post_date']) ? $values['post_date']:null;
        $this->title = isset($values['post_title']) ? $values['post_title']:null;
        $this->content = isset($values['post_content']) ? $values['post_content']:null;
        $this->status = isset($values['post_status']) ? $values['post_status']:null;
        $this->name = isset($values['post_name']) ? $values['post_name']:null;
        $this->category = isset($values['post_category']) ? $values['post_category']:null;
    }

    //Getter & Setters
    function id() {
        return $this->id;
    }
    function author() {
        return $this->author;
    }
    function date() {
        return date("d F Y à H:i", strtotime($this->date));
    }
    
    function content() {
        return $this->content;
    }
    
    function title() {
        return $this->title;
    }

    function status() {
        return $this->status;
    }
    
    function name() {
        return $this->name;
    }
    
    function category() {
        return $this->category;
    }
    
}
