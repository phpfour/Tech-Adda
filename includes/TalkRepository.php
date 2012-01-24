<?php

class TalkRepository
{
    /**
     * @var Sparrow
     */
    protected $db;

    public function __construct(Sparrow $db)
    {
        $this->db = $db;
    }

    public function getTalksByEvent($eventId)
    {
        return $this->db->from('talks')
                    ->where('event_id = ', $eventId)
                    ->many();
    }

    public function getTalkById($talkId)
    {
        return $this->db->from('talks')
                    ->where('talk_id = ', $talkId)
                    ->one();
    }
}