<?php

namespace VK\BotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VkUsers
 *
 * @ORM\Table(name="vk_users")
 * @ORM\Entity
 */
class VkUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=150, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=150, nullable=true)
     */
    private $firstName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sex", type="boolean", nullable=true)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="birthday", type="string", length=50, nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=50, nullable=true)
     */
    private $age;

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_photo", type="boolean", nullable=true)
     */
    private $havePhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=150, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=150, nullable=true)
     */
    private $city;

    /**
     * @var boolean
     *
     * @ORM\Column(name="platform", type="boolean", nullable=true)
     */
    private $platform;

    /**
     * @var string
     *
     * @ORM\Column(name="life_main", type="string", length=150, nullable=true)
     */
    private $lifeMain;

    /**
     * @var string
     *
     * @ORM\Column(name="interests", type="string", length=450, nullable=true)
     */
    private $interests;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="last_seen_date", type="string", length=50, nullable=true)
     */
    private $lastSeenDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_pm", type="boolean", nullable=true)
     */
    private $canPm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_send_friend_request", type="boolean", nullable=true)
     */
    private $canSendFriendRequest;

    /**
     * @var boolean
     *
     * @ORM\Column(name="friend_status", type="boolean", nullable=true)
     */
    private $friendStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="blacklisted", type="boolean", nullable=true)
     */
    private $blacklisted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_insert", type="datetime", nullable=false)
     */
    private $dateInsert;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=150)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}
