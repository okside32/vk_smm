<?php

namespace VK\BotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proxy
 *
 * @ORM\Table(name="proxy", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_addr", columns={"ip", "port"})})
 * @ORM\Entity
 */
class Proxy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=25, nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="port", type="string", length=5, nullable=true)
     */
    private $port;

    /**
     * @var boolean
     *
     * @ORM\Column(name="availability", type="boolean", nullable=true)
     */
    private $availability;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="checkingDate", type="datetime", nullable=false)
     */
    private $checkingdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
