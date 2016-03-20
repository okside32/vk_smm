<?php

namespace VK\BotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DotabuffLog
 *
 * @ORM\Table(name="dotabuff_log")
 * @ORM\Entity
 */
class DotabuffLog
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rising_date", type="datetime", nullable=false)
     */
    private $risingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=false)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="log_type", type="string", length=20, nullable=true)
     */
    private $logType;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=50, nullable=true)
     */
    private $source;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
