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

class StarsListGetResponse200ItemsItemItem2
{
    /**
     * @var ObjsComment|null
     */
    protected $comment;
    /**
     * @var int|null
     */
    protected $dateCreate;
    /**
     * @var ObjsFile|null
     */
    protected $file;
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

    public function getDateCreate(): ?int
    {
        return $this->dateCreate;
    }

    public function setDateCreate(?int $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

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
