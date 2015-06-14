<?php

namespace PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//sirve para extender de friendofsymfony
use FOS\UserBundle\Entity\User as BaseUser;
//sirve para validar los campos del formulario
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 * @ORM\Table("Usuarios")
 */
class Usuario extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

     /**
     * @ORM\Column(name = "nombreCompleto",type="string",length = 255)
     * @Assert\NotBlank(message="Porfavor ingrese su nombre.")
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="El nombre es muy corto.",
     *     maxMessage="El nombre es muy largo.",
     *     
     * )
     * @var string
     * 
     */
    protected $nombreCompleto;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get nombreCompleto
    * @return string
    */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
    * @param string $nombreCompleto
    */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;
        return $this;
    }
}
