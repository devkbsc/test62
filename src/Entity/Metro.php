<?php

namespace App\Entity;

use App\Repository\MetroRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MetroRepository::class)]
class Metro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $geoPoint = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $geoShape = null;

    #[ORM\Column(nullable: true)]
    private ?int $objetId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $idRefZdl = null;

    #[ORM\Column(nullable: true)]
    private ?int $gareId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomGare = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomLong = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomIv = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomMod = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fer = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $train = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $rer = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $metro = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tramway = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $navette = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $val = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $terfer = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tertrain = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $terrer = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $termetro = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tertram = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ternavette = null;

    #[ORM\Column(length: 255)]
    private ?string $terval = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $idrefliga = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $idrefligc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ligne = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codeLignf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ligneCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $indiceLig = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reseau = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $resCom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codResf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $resStif = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $exploitant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numPsr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $idf = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $principal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $x = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $y = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeoPoint(): ?string
    {
        return $this->geoPoint;
    }

    public function setGeoPoint(?string $geoPoint): self
    {
        $this->geoPoint = $geoPoint;

        return $this;
    }

    public function getGeoShape(): ?string
    {
        return $this->geoShape;
    }

    public function setGeoShape(?string $geoShape): self
    {
        $this->geoShape = $geoShape;

        return $this;
    }

    public function getObjetId(): ?int
    {
        return $this->objetId;
    }

    public function setObjetId(?int $objetId): self
    {
        $this->objetId = $objetId;

        return $this;
    }

    public function getIdRefZdl(): ?string
    {
        return $this->idRefZdl;
    }

    public function setIdRefZdl(?string $idRefZdl): self
    {
        $this->idRefZdl = $idRefZdl;

        return $this;
    }

    public function getGareId(): ?int
    {
        return $this->gareId;
    }

    public function setGareId(?int $gareId): self
    {
        $this->gareId = $gareId;

        return $this;
    }

    public function getNomGare(): ?string
    {
        return $this->nomGare;
    }

    public function setNomGare(?string $nomGare): self
    {
        $this->nomGare = $nomGare;

        return $this;
    }

    public function getNomLong(): ?string
    {
        return $this->nomLong;
    }

    public function setNomLong(?string $nomLong): self
    {
        $this->nomLong = $nomLong;

        return $this;
    }

    public function getNomIv(): ?string
    {
        return $this->nomIv;
    }

    public function setNomIv(?string $nomIv): self
    {
        $this->nomIv = $nomIv;

        return $this;
    }

    public function getNomMod(): ?string
    {
        return $this->nomMod;
    }

    public function setNomMod(?string $nomMod): self
    {
        $this->nomMod = $nomMod;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getFer(): ?string
    {
        return $this->fer;
    }

    public function setFer(?string $fer): self
    {
        $this->fer = $fer;

        return $this;
    }

    public function getTrain(): ?string
    {
        return $this->train;
    }

    public function setTrain(?string $train): self
    {
        $this->train = $train;

        return $this;
    }

    public function getRer(): ?string
    {
        return $this->rer;
    }

    public function setRer(?string $rer): self
    {
        $this->rer = $rer;

        return $this;
    }

    public function getMetro(): ?string
    {
        return $this->metro;
    }

    public function setMetro(?string $metro): self
    {
        $this->metro = $metro;

        return $this;
    }

    public function getTramway(): ?string
    {
        return $this->tramway;
    }

    public function setTramway(?string $tramway): self
    {
        $this->tramway = $tramway;

        return $this;
    }

    public function getNavette(): ?string
    {
        return $this->navette;
    }

    public function setNavette(?string $navette): self
    {
        $this->navette = $navette;

        return $this;
    }

    public function getVal(): ?string
    {
        return $this->val;
    }

    public function setVal(?string $val): self
    {
        $this->val = $val;

        return $this;
    }

    public function getTerfer(): ?string
    {
        return $this->terfer;
    }

    public function setTerfer(?string $terfer): self
    {
        $this->terfer = $terfer;

        return $this;
    }

    public function getTertrain(): ?string
    {
        return $this->tertrain;
    }

    public function setTertrain(?string $tertrain): self
    {
        $this->tertrain = $tertrain;

        return $this;
    }

    public function getTerrer(): ?string
    {
        return $this->terrer;
    }

    public function setTerrer(?string $terrer): self
    {
        $this->terrer = $terrer;

        return $this;
    }

    public function getTermetro(): ?string
    {
        return $this->termetro;
    }

    public function setTermetro(?string $termetro): self
    {
        $this->termetro = $termetro;

        return $this;
    }

    public function getTertram(): ?string
    {
        return $this->tertram;
    }

    public function setTertram(?string $tertram): self
    {
        $this->tertram = $tertram;

        return $this;
    }

    public function getTernavette(): ?string
    {
        return $this->ternavette;
    }

    public function setTernavette(?string $ternavette): self
    {
        $this->ternavette = $ternavette;

        return $this;
    }

    public function getTerval(): ?string
    {
        return $this->terval;
    }

    public function setTerval(string $terval): self
    {
        $this->terval = $terval;

        return $this;
    }

    public function getIdrefliga(): ?string
    {
        return $this->idrefliga;
    }

    public function setIdrefliga(?string $idrefliga): self
    {
        $this->idrefliga = $idrefliga;

        return $this;
    }

    public function getIdrefligc(): ?string
    {
        return $this->idrefligc;
    }

    public function setIdrefligc(?string $idrefligc): self
    {
        $this->idrefligc = $idrefligc;

        return $this;
    }

    public function getLigne(): ?string
    {
        return $this->ligne;
    }

    public function setLigne(?string $ligne): self
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getCodeLignf(): ?string
    {
        return $this->codeLignf;
    }

    public function setCodeLignf(?string $codeLignf): self
    {
        $this->codeLignf = $codeLignf;

        return $this;
    }

    public function getLigneCode(): ?string
    {
        return $this->ligneCode;
    }

    public function setLigneCode(?string $ligneCode): self
    {
        $this->ligneCode = $ligneCode;

        return $this;
    }

    public function getIndiceLig(): ?string
    {
        return $this->indiceLig;
    }

    public function setIndiceLig(?string $indiceLig): self
    {
        $this->indiceLig = $indiceLig;

        return $this;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(?string $reseau): self
    {
        $this->reseau = $reseau;

        return $this;
    }

    public function getResCom(): ?string
    {
        return $this->resCom;
    }

    public function setResCom(?string $resCom): self
    {
        $this->resCom = $resCom;

        return $this;
    }

    public function getCodResf(): ?string
    {
        return $this->codResf;
    }

    public function setCodResf(?string $codResf): self
    {
        $this->codResf = $codResf;

        return $this;
    }

    public function getResStif(): ?string
    {
        return $this->resStif;
    }

    public function setResStif(?string $resStif): self
    {
        $this->resStif = $resStif;

        return $this;
    }

    public function getExploitant(): ?string
    {
        return $this->exploitant;
    }

    public function setExploitant(?string $exploitant): self
    {
        $this->exploitant = $exploitant;

        return $this;
    }

    public function getNumPsr(): ?string
    {
        return $this->numPsr;
    }

    public function setNumPsr(?string $numPsr): self
    {
        $this->numPsr = $numPsr;

        return $this;
    }

    public function getIdf(): ?string
    {
        return $this->idf;
    }

    public function setIdf(?string $idf): self
    {
        $this->idf = $idf;

        return $this;
    }

    public function getPrincipal(): ?string
    {
        return $this->principal;
    }

    public function setPrincipal(?string $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getX(): ?string
    {
        return $this->x;
    }

    public function setX(?string $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?string
    {
        return $this->y;
    }

    public function setY(?string $y): self
    {
        $this->y = $y;

        return $this;
    }
}
