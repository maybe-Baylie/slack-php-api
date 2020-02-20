<?php

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Model;

class TeamInfoGetResponse200
{
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var ObjsTeam|null
     */
    protected $team;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getTeam(): ?ObjsTeam
    {
        return $this->team;
    }

    public function setTeam(?ObjsTeam $team): self
    {
        $this->team = $team;

        return $this;
    }
}
