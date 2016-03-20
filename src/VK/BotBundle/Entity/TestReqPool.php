<?php

namespace VK\BotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestReqPool
 *
 * @ORM\Table(name="test_req_pool")
 * @ORM\Entity
 */
class TestReqPool
{
    /**
     * @var string
     *
     * @ORM\Column(name="load_mod", type="string", length=10, nullable=false)
     */
    private $loadMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="pool_size", type="integer", nullable=false)
     */
    private $poolSize;

    /**
     * @var float
     *
     * @ORM\Column(name="min_req_time", type="float", precision=10, scale=0, nullable=false)
     */
    private $minReqTime;

    /**
     * @var float
     *
     * @ORM\Column(name="max_req_time", type="float", precision=10, scale=0, nullable=false)
     */
    private $maxReqTime;

    /**
     * @var float
     *
     * @ORM\Column(name="sum_time", type="float", precision=10, scale=0, nullable=false)
     */
    private $sumTime;

    /**
     * @var float
     *
     * @ORM\Column(name="avg_time", type="float", precision=10, scale=0, nullable=false)
     */
    private $avgTime;

    /**
     * @var float
     *
     * @ORM\Column(name="median_time", type="float", precision=10, scale=0, nullable=false)
     */
    private $medianTime;

    /**
     * @var float
     *
     * @ORM\Column(name="bad_req_count", type="float", precision=10, scale=0, nullable=false)
     */
    private $badReqCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
