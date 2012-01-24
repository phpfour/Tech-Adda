<?php

class CommentRepository
{
    /**
     * @var Sparrow
     */
    protected $db;

    public function __construct(Sparrow $db)
    {
        $this->db = $db;
    }

    public function getCommentsByTalk($talkId)
    {
        return $this->db->from('comments')
                    ->join('users', array('comments.user_id' => 'users.user_id'))
                    ->where('talk_id = ', $talkId)
                    ->many();
    }

    public function create($data)
    {
        $data['user_id'] = $_SESSION['user']['user_id'];

        return $this->db->from('comments')
                    ->insert($data)
                    ->execute();
    }
}