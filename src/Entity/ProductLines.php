<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productlines
 *
 * @ORM\Table(name="productlines")
 * @ORM\Entity
 */
class ProductLines
{
    /**
     * @var string
     *
     * @ORM\Column(name="productLine", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productline;

    /**
     * @var string|null
     *
     * @ORM\Column(name="textDescription", type="string", length=4000, nullable=true, options={"default"="NULL"})
     */
    private $textdescription = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="htmlDescription", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $htmldescription = 'NULL';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="image", type="binary", nullable=true, options={"default"="NULL"})
     */
    private $image = 'NULL';

    public function getProductline(): ?string
    {
        return $this->productline;
    }

    public function getTextdescription(): ?string
    {
        return $this->textdescription;
    }

    public function setTextdescription(?string $textdescription): self
    {
        $this->textdescription = $textdescription;

        return $this;
    }

    public function getHtmldescription(): ?string
    {
        return $this->htmldescription;
    }

    public function setHtmldescription(?string $htmldescription): self
    {
        $this->htmldescription = $htmldescription;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }


}
