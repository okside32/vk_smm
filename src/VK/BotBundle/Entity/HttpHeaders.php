<?php

namespace VK\BotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HttpHeaders
 *
 * @ORM\Table(name="http_headers", indexes={@ORM\Index(name="headers__UserAgentindex", columns={"user_agent"}), @ORM\Index(name="headers__Langue_index", columns={"language"})})
 * @ORM\Entity
 */
class HttpHeaders
{
    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=100, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=200, nullable=true)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="referer", type="string", length=200, nullable=true)
     */
    private $referer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dnt", type="boolean", nullable=true)
     */
    private $dnt;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=300, nullable=true)
     */
    private $userAgent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
