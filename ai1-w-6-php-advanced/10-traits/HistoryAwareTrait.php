<?php

trait HistoryAwareTrait
{
    /** @var  \DateTime */
    protected $createdAt;
    /** @var  string */
    protected $createdBy;
    /** @var  \DateTime */
    protected $modifiedAt;
    /** @var  string */
    protected $modifiedBy;

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return HistoryAwareTrait
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return HistoryAwareTrait
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param DateTime $modifiedAt
     * @return HistoryAwareTrait
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return HistoryAwareTrait
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
    }

}
