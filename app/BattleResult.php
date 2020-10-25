<?php
namespace App;

class BattleResult
{
    /**
     * @var String
     */
    protected $winner;

    /**
     * BattleResult constructor.
     * @param String $winner
     */
    public function __construct(String $winner)
    {
        $this->winner = $winner;
    }

    public function getWinner()
    {
        return $this->winner;
    }
}
