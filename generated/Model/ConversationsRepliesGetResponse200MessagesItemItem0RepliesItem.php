<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ConversationsRepliesGetResponse200MessagesItemItem0RepliesItem extends \ArrayObject
{
    /**
     * @var float|string
     */
    protected $ts;
    /**
     * @var string
     */
    protected $user;

    /**
     * @return float|string
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @param float|string $ts
     *
     * @return self
     */
    public function setTs($ts): self
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}
