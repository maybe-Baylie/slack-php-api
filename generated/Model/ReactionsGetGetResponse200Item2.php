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

class ReactionsGetGetResponse200Item2
{
    /**
     * @var ObjsComment|null
     */
    protected $comment;
    /**
     * @var ObjsFile|null
     */
    protected $file;
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var string|null
     */
    protected $type;

    public function getComment(): ?ObjsComment
    {
        return $this->comment;
    }

    public function setComment(?ObjsComment $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getFile(): ?ObjsFile
    {
        return $this->file;
    }

    public function setFile(?ObjsFile $file): self
    {
        $this->file = $file;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
