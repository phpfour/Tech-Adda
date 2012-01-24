<?php

class CategoryRepository
{
    /**
     * @var Sparrow
     */
    protected $db;

    public function __construct(Sparrow $db)
    {
        $this->db = $db;
    }

    public function getAllCategories()
    {
        return $this->db->from('categories')
                    ->many();
    }

    public function getCategoryById($categoryId)
    {
        return $this->db->from('categories')
                    ->where('category_id = ', $categoryId)
                    ->one();
    }
}