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

class ChatPostEphemeralPostResponse200
{
    /**
     * @var string|null
     */
    protected $messageTs;
    /**
     * @var bool|null
     */
    protected $ok;

    public function getMessageTs(): ?string
    {
        return $this->messageTs;
    }

    public function setMessageTs(?string $messageTs): self
    {
        $this->messageTs = $messageTs;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }
}
