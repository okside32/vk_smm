<?php

namespace VK\BotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test3
 *
 * @ORM\Table(name="test_3")
 * @ORM\Entity
 */
class Test3
{
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
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
