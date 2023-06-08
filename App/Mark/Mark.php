<?php 

namespace App\Mark;

use Exception;

class Mark 
{
    /**
     * @var int
     */
    private ?int $id = null;

    /**
     * @var string 
     */
    private ?string $name;

    /**
     * @var string
     */
    private ?string $date_modif = null;

    /**
     * Constructeur de la classe
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->hydrate($data);
        }
        $this->date_modif = date('d-m-Y H:i:s');
    }

    /**
     * Hydrate l'objet
     *
     * @param array $data
     * @return self
     */
    public function hydrate(array $data) : self
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key); 
            if (method_exists($this, $method)) {
                $this->$method($value);
            }else{
                throw new Exception("La méthode $method n'existe pas");
            }
        }
        return $this;
    }

    /**
     * Retourne true si la marque est nouvelle
     *
     * @return bool
     */
    public function isNew(): bool
    {
        return empty($this->id);
    }

    /**
     * Getter pour l'id de la marque
     *
     * @return  int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Setter pour l'id de la marque
     *
     * @param  int  $id  Setter pour l'id de la marque
     *
     * @return  self
     */
    public function setId(int $id): Mark
    {
        if ($id < 0) {
           throw new Exception("L'id doit être un entier positif");
        }
        $this->id = $id;
        return $this;
    }

    /**
     * Getter pour le nom de la marque
     *
     * @return  string
     */
    public function getName(): ?string
    {
        return htmlentities($this->name);
    }

    /**
     * Setter pour le nom de la marque
     *
     * @param  string  $name  Setter pour le nom de la marque
     *
     * @return  self
     */
    public function setMarque(string $name): Mark
{
    
    $this->name = $name;
    return $this;
}


    /**
     * Getter pour la date de modification
     *
     * @return  string
     */
    public function setDate_modif(string $date)
    {
        $this->date_modif = $date;
        return $this;
    }

    /**
     * Setter pour la date de modification
     *
     * @param  string  $date_modif  Getter pour la date de modification
     *
     * @return  self
     */
    public function getDate_modif(): ?string
    {
        return $this->date_modif;
    }

}