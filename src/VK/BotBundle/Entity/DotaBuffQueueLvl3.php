<?php

namespace VK\BotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DotaBuffQueueLvl3
 *
 * @ORM\Table(name="dota_buff_queue_lvl3")
 * @ORM\Entity
 */
class DotaBuffQueueLvl3
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_url", type="string", length=300, nullable=false)
     */
    private $parentUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="child_url", type="string", length=300, nullable=false)
     */
    private $childUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="path_on_disk", type="string", length=400, nullable=false)
     */
    private $pathOnDisk;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="worker_pid", type="smallint", nullable=true)
     */
    private $workerPid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="worker_start", type="datetime", nullable=true)
     */
    private $workerStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="worker_finish", type="datetime", nullable=true)
     */
    private $workerFinish;

    /**
     * @var string
     *
     * @ORM\Column(name="rank", type="string", nullable=true)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="ligue_name", type="string", length=200, nullable=true)
     */
    private $ligueName;

    /**
     * @var integer
     *
     * @ORM\Column(name="pk_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkId;


}
