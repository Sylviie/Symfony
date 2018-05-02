<?php

namespace EmploiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * shs_category
 *
 * @ORM\Table(name="shs_category")
 * @ORM\Entity(repositoryClass="EmploiBundle\Repository\shs_categoryRepository")
 */
class shs_category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Category", type="string", length=255)
     *@ORM\OneToMany(targetEntity="EmploiBundle\Entity\shs_emploi")
     * @ORM\JoinColumn(name="category", referencedColumnName="category")
     */
    private $category;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return shs_category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}

