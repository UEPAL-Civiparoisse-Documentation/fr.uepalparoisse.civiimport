<?php

namespace Uepal\CiviImport;

use DateTime;

/**
 * ParsedContact : just get the fields from a single row
 */
class ParsedContact
{
  /**
   * @var ?int
   */
  protected ?int $_rowIndex = -1;
  /**
   *
   */
  protected array $_errors = [];
  /**
   * @var ?string
   */
  protected ?string $_civilite = null;
  /**
   * @var ?string
   */
  protected ?string $_nom = null;
  /**
   * @var ?string
   */
  protected ?string $_nomNaissance = null;
  /**
   * @var ?string
   */
  protected ?string $_prenom = null;
  /**
   * @var ?DateTime
   */
  protected ?DateTime $_dateNaissance = null;
  /**
   * @var ?string
   */
  protected ?string $_lieuNaissance = null;
  /**
   * @var ?string
   */
  protected ?string $_adresseLigne1 = null;
  /**
   * @var ?string
   */
  protected ?string $_adresseLigne2 = null;
  /**
   * @var ?string
   */
  protected ?string $_adresseLigne3 = null;
  /**
   * @var ?string
   */
  protected ?string $_codePostal = null;
  /**
   * @var ?string
   */
  protected ?string $_ville = null;
  /**
   * @var ?string
   */
  protected ?string $_pays = null;
  /**
   * @var ?string
   */
  protected ?string $_telephoneFixe = null;
  /**
   * @var ?string
   */
  protected ?string $_telephonePortable = null;
  /**
   * @var ?string
   */
  protected ?string $_telephoneAutre = null;
  /**
   * @var ?string
   */
  protected ?string $_emailPrive = null;
  /**
   * @var ?string
   */
  protected ?string $_emailAutre = null;
  /**
   * @var ?string
   */
  protected ?string $_foyerAppartenance = null;
  /**
   * @var ?bool
   */
  protected ?bool $_adulte = null;
  /**
   * @var ?bool
   */
  protected ?bool $_enfant = null;
  /**
   * @var ?string
   */
  protected ?string $_nomParents = null;
  /**
   * @var ?string
   */
  protected ?string $_nomConjoint = null;
  /**
   * @var ?bool
   */
  protected ?bool $_electeur = null;
  /**
   * @var ?string
   */
  protected ?string $_divers = null;

  /**
   * @return string|null
   */
  public function getCivilite(): ?string
  {
    return $this->_civilite;
  }

  /**
   * @param string|null $civilite
   */
  public function setCivilite(?string $civilite): void
  {
    $this->_civilite = $civilite;
  }

  /**
   * @return string|null
   */
  public function getNom(): ?string
  {
    return $this->_nom;
  }

  /**
   * @param string|null $nom
   */
  public function setNom(?string $nom): void
  {
    $this->_nom = $nom;
  }

  /**
   * @return string|null
   */
  public function getNomNaissance(): ?string
  {
    return $this->_nomNaissance;
  }

  /**
   * @param string|null $nomNaissance
   */
  public function setNomNaissance(?string $nomNaissance): void
  {
    $this->_nomNaissance = $nomNaissance;
  }

  /**
   * @return string|null
   */
  public function getPrenom(): ?string
  {
    return $this->_prenom;
  }

  /**
   * @param string|null $prenom
   */
  public function setPrenom(?string $prenom): void
  {
    $this->_prenom = $prenom;
  }

  /**
   * @return DateTime|null
   */
  public function getDateNaissance(): ?DateTime
  {
    return $this->_dateNaissance;
  }

  /**
   * @param DateTime|null $dateNaissance
   */
  public function setDateNaissance(?DateTime $dateNaissance): void
  {
    $this->_dateNaissance = $dateNaissance;
  }

  /**
   * @return string|null
   */
  public function getLieuNaissance(): ?string
  {
    return $this->_lieuNaissance;
  }

  /**
   * @param string|null $lieuNaissance
   */
  public function setLieuNaissance(?string $lieuNaissance): void
  {
    $this->_lieuNaissance = $lieuNaissance;
  }

  /**
   * @return string|null
   */
  public function getAdresseLigne1(): ?string
  {
    return $this->_adresseLigne1;
  }

  /**
   * @param string|null $adresseLigne1
   */
  public function setAdresseLigne1(?string $adresseLigne1): void
  {
    $this->_adresseLigne1 = $adresseLigne1;
  }

  /**
   * @return string|null
   */
  public function getAdresseLigne2(): ?string
  {
    return $this->_adresseLigne2;
  }

  /**
   * @param string|null $adresseLigne2
   */
  public function setAdresseLigne2(?string $adresseLigne2): void
  {
    $this->_adresseLigne2 = $adresseLigne2;
  }

  /**
   * @return string|null
   */
  public function getAdresseLigne3(): ?string
  {
    return $this->_adresseLigne3;
  }

  /**
   * @param string|null $adresseLigne3
   */
  public function setAdresseLigne3(?string $adresseLigne3): void
  {
    $this->_adresseLigne3 = $adresseLigne3;
  }

  /**
   * @return string|null
   */
  public function getCodePostal(): ?string
  {
    return $this->_codePostal;
  }

  /**
   * @param string|null $codePostal
   */
  public function setCodePostal(?string $codePostal): void
  {
    $this->_codePostal = $codePostal;
  }

  /**
   * @return string|null
   */
  public function getVille(): ?string
  {
    return $this->_ville;
  }

  /**
   * @param string|null $ville
   */
  public function setVille(?string $ville): void
  {
    $this->_ville = $ville;
  }

  /**
   * @return string|null
   */
  public function getPays(): ?string
  {
    return $this->_pays;
  }

  /**
   * @param string|null $pays
   */
  public function setPays(?string $pays): void
  {
    $this->_pays = $pays;
  }

  /**
   * @return string|null
   */
  public function getTelephoneFixe(): ?string
  {
    return $this->_telephoneFixe;
  }

  /**
   * @param string|null $telephoneFixe
   */
  public function setTelephoneFixe(?string $telephoneFixe): void
  {
    $this->_telephoneFixe = $telephoneFixe;
  }

  /**
   * @return string|null
   */
  public function getTelephonePortable(): ?string
  {
    return $this->_telephonePortable;
  }

  /**
   * @param string|null $telephonePortable
   */
  public function setTelephonePortable(?string $telephonePortable): void
  {
    $this->_telephonePortable = $telephonePortable;
  }

  /**
   * @return string|null
   */
  public function getTelephoneAutre(): ?string
  {
    return $this->_telephoneAutre;
  }

  /**
   * @param string|null $telephoneAutre
   */
  public function setTelephoneAutre(?string $telephoneAutre): void
  {
    $this->_telephoneAutre = $telephoneAutre;
  }

  /**
   * @return string|null
   */
  public function getEmailPrive(): ?string
  {
    return $this->_emailPrive;
  }

  /**
   * @param string|null $emailPrive
   */
  public function setEmailPrive(?string $emailPrive): void
  {
    $this->_emailPrive = $emailPrive;
  }

  /**
   * @return string|null
   */
  public function getEmailAutre(): ?string
  {
    return $this->_emailAutre;
  }

  /**
   * @param string|null $emailAutre
   */
  public function setEmailAutre(?string $emailAutre): void
  {
    $this->_emailAutre = $emailAutre;
  }

  /**
   * @return string|null
   */
  public function getFoyerAppartenance(): ?string
  {
    return $this->_foyerAppartenance;
  }

  /**
   * @param string|null $foyerAppartenance
   */
  public function setFoyerAppartenance(?string $foyerAppartenance): void
  {
    $this->_foyerAppartenance = $foyerAppartenance;
  }

  /**
   * @return bool|null
   */
  public function getAdulte(): ?bool
  {
    return $this->_adulte;
  }

  /**
   * @param bool|null $adulte
   */
  public function setAdulte(?bool $adulte): void
  {
    $this->_adulte = $adulte;
  }

  /**
   * @return bool|null
   */
  public function getEnfant(): ?bool
  {
    return $this->_enfant;
  }

  /**
   * @param bool|null $enfant
   */
  public function setEnfant(?bool $enfant): void
  {
    $this->_enfant = $enfant;
  }

  /**
   * @return string|null
   */
  public function getNomParents(): ?string
  {
    return $this->_nomParents;
  }

  /**
   * @param string|null $nomParents
   */
  public function setNomParents(?string $nomParents): void
  {
    $this->_nomParents = $nomParents;
  }

  /**
   * @return string|null
   */
  public function getNomConjoint(): ?string
  {
    return $this->_nomConjoint;
  }

  /**
   * @param string|null $nomConjoint
   */
  public function setNomConjoint(?string $nomConjoint): void
  {
    $this->_nomConjoint = $nomConjoint;
  }

  /**
   * @return bool|null
   */
  public function getElecteur(): ?bool
  {
    return $this->_electeur;
  }

  /**
   * @param bool|null $electeur
   */
  public function setElecteur(?bool $electeur): void
  {
    $this->_electeur = $electeur;
  }

  /**
   * @return string|null
   */
  public function getDivers(): ?string
  {
    return $this->_divers;
  }

  /**
   * @param string|null $divers
   */
  public function setDivers(?string $divers): void
  {
    $this->_divers = $divers;
  }

  /**
   * @return int|null
   */
  public function getRowIndex(): ?int
  {
    return $this->_rowIndex;
  }

  /**
   * @param int|null $rowIndex
   */
  public function setRowIndex(?int $rowIndex): void
  {
    $this->_rowIndex = $rowIndex;
  }

  /**
   * @return array
   */
  public function getErrors(): array
  {
    return $this->_errors;
  }

  /**
   * add an error to the errors list
   * @param mixed $error
   */
  public function appendToErrors($error): void
  {
    $this->_errors[] = $error;
  }

  /**
   * check whether any error has been logged or not
   * @return bool
   */
  public function hasError(): bool
  {
    return !empty($this->_errors);
  }
}
