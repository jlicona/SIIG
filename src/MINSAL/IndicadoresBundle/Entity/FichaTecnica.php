<?php

namespace MINSAL\IndicadoresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MINSAL\IndicadoresBundle\Entity\FichaTecnica
 *
 * @ORM\Table(name="ficha_tecnica")
 * @ORM\Entity
 */
class FichaTecnica
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ficha_tecnica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var string $tema
     *
     * @ORM\Column(name="tema", type="text", nullable=true)
     */
    private $tema;

    /**
     * @var string $concepto
     *
     * @ORM\Column(name="concepto", type="text", nullable=true)
     */
    private $concepto;

    /**
     * @var string $objetivo
     *
     * @ORM\Column(name="objetivo", type="text", nullable=true)
     */
    private $objetivo;

    /**
     * @var string $uso
     *
     * @ORM\Column(name="uso", type="text", nullable=true)
     */
    private $uso;

    /**
     * @var string $definicionOperativa
     *
     * @ORM\Column(name="definicion_operativa", type="text", nullable=true)
     */
    private $definicionOperativa;

    /**
     * @var string $unidadMedida
     *
     * @ORM\Column(name="unidad_medida", type="string", length=50, nullable=false)
     */
    private $unidadMedida;

    /**
     * @var string $formula
     *
     * @ORM\Column(name="formula", type="string", length=300, nullable=false)
     */
    private $formula;

    /**
     * @var string $observacion
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var integer $confiabilidad
     *
     * @ORM\Column(name="confiabilidad", type="integer", nullable=false)
     */
    private $confiabilidad;

    /**
     * @var float $estandar
     *
     * @ORM\Column(name="estandar", type="decimal", nullable=true)
     */
    private $estandar;

    /**
     * @var ClasificacionNivel
     *
     * @ORM\ManyToOne(targetEntity="ClasificacionNivel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clasificacion_nivel", referencedColumnName="id")
     * })
     */
    private $idClasificacionNivel;

    /**
     * @var ClasificacionPrivacidad
     *
     * @ORM\ManyToOne(targetEntity="ClasificacionPrivacidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clasificacion_privacidad", referencedColumnName="id")
     * })
     */
    private $idClasificacionPrivacidad;

    /**
     * @var ClasificacionTecnica
     *
     * @ORM\ManyToOne(targetEntity="ClasificacionTecnica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clasificacion_tecnica", referencedColumnName="id")
     * })
     */
    private $idClasificacionTecnica;

    /**
     * @var ClasificacionUso
     *
     * @ORM\ManyToOne(targetEntity="ClasificacionUso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clasificacion_uso", referencedColumnName="id")
     * })
     */
    private $idClasificacionUso;

    /**
     * @var ResponsableIndicador
     *
     * @ORM\ManyToOne(targetEntity="ResponsableIndicador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_responsable_indicador", referencedColumnName="id")
     * })
     */
    private $idResponsableIndicador;



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
     * Set nombre
     *
     * @param string $nombre
     * @return FichaTecnica
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tema
     *
     * @param string $tema
     * @return FichaTecnica
     */
    public function setTema($tema)
    {
        $this->tema = $tema;
    
        return $this;
    }

    /**
     * Get tema
     *
     * @return string 
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     * @return FichaTecnica
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;
    
        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set objetivo
     *
     * @param string $objetivo
     * @return FichaTecnica
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;
    
        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string 
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Set uso
     *
     * @param string $uso
     * @return FichaTecnica
     */
    public function setUso($uso)
    {
        $this->uso = $uso;
    
        return $this;
    }

    /**
     * Get uso
     *
     * @return string 
     */
    public function getUso()
    {
        return $this->uso;
    }

    /**
     * Set definicionOperativa
     *
     * @param string $definicionOperativa
     * @return FichaTecnica
     */
    public function setDefinicionOperativa($definicionOperativa)
    {
        $this->definicionOperativa = $definicionOperativa;
    
        return $this;
    }

    /**
     * Get definicionOperativa
     *
     * @return string 
     */
    public function getDefinicionOperativa()
    {
        return $this->definicionOperativa;
    }

    /**
     * Set unidadMedida
     *
     * @param string $unidadMedida
     * @return FichaTecnica
     */
    public function setUnidadMedida($unidadMedida)
    {
        $this->unidadMedida = $unidadMedida;
    
        return $this;
    }

    /**
     * Get unidadMedida
     *
     * @return string 
     */
    public function getUnidadMedida()
    {
        return $this->unidadMedida;
    }

    /**
     * Set formula
     *
     * @param string $formula
     * @return FichaTecnica
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;
    
        return $this;
    }

    /**
     * Get formula
     *
     * @return string 
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return FichaTecnica
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set confiabilidad
     *
     * @param integer $confiabilidad
     * @return FichaTecnica
     */
    public function setConfiabilidad($confiabilidad)
    {
        $this->confiabilidad = $confiabilidad;
    
        return $this;
    }

    /**
     * Get confiabilidad
     *
     * @return integer 
     */
    public function getConfiabilidad()
    {
        return $this->confiabilidad;
    }

    /**
     * Set estandar
     *
     * @param float $estandar
     * @return FichaTecnica
     */
    public function setEstandar($estandar)
    {
        $this->estandar = $estandar;
    
        return $this;
    }

    /**
     * Get estandar
     *
     * @return float 
     */
    public function getEstandar()
    {
        return $this->estandar;
    }

    /**
     * Set idClasificacionNivel
     *
     * @param MINSAL\IndicadoresBundle\Entity\ClasificacionNivel $idClasificacionNivel
     * @return FichaTecnica
     */
    public function setIdClasificacionNivel(\MINSAL\IndicadoresBundle\Entity\ClasificacionNivel $idClasificacionNivel = null)
    {
        $this->idClasificacionNivel = $idClasificacionNivel;
    
        return $this;
    }

    /**
     * Get idClasificacionNivel
     *
     * @return MINSAL\IndicadoresBundle\Entity\ClasificacionNivel 
     */
    public function getIdClasificacionNivel()
    {
        return $this->idClasificacionNivel;
    }

    /**
     * Set idClasificacionPrivacidad
     *
     * @param MINSAL\IndicadoresBundle\Entity\ClasificacionPrivacidad $idClasificacionPrivacidad
     * @return FichaTecnica
     */
    public function setIdClasificacionPrivacidad(\MINSAL\IndicadoresBundle\Entity\ClasificacionPrivacidad $idClasificacionPrivacidad = null)
    {
        $this->idClasificacionPrivacidad = $idClasificacionPrivacidad;
    
        return $this;
    }

    /**
     * Get idClasificacionPrivacidad
     *
     * @return MINSAL\IndicadoresBundle\Entity\ClasificacionPrivacidad 
     */
    public function getIdClasificacionPrivacidad()
    {
        return $this->idClasificacionPrivacidad;
    }

    /**
     * Set idClasificacionTecnica
     *
     * @param MINSAL\IndicadoresBundle\Entity\ClasificacionTecnica $idClasificacionTecnica
     * @return FichaTecnica
     */
    public function setIdClasificacionTecnica(\MINSAL\IndicadoresBundle\Entity\ClasificacionTecnica $idClasificacionTecnica = null)
    {
        $this->idClasificacionTecnica = $idClasificacionTecnica;
    
        return $this;
    }

    /**
     * Get idClasificacionTecnica
     *
     * @return MINSAL\IndicadoresBundle\Entity\ClasificacionTecnica 
     */
    public function getIdClasificacionTecnica()
    {
        return $this->idClasificacionTecnica;
    }

    /**
     * Set idClasificacionUso
     *
     * @param MINSAL\IndicadoresBundle\Entity\ClasificacionUso $idClasificacionUso
     * @return FichaTecnica
     */
    public function setIdClasificacionUso(\MINSAL\IndicadoresBundle\Entity\ClasificacionUso $idClasificacionUso = null)
    {
        $this->idClasificacionUso = $idClasificacionUso;
    
        return $this;
    }

    /**
     * Get idClasificacionUso
     *
     * @return MINSAL\IndicadoresBundle\Entity\ClasificacionUso 
     */
    public function getIdClasificacionUso()
    {
        return $this->idClasificacionUso;
    }

    /**
     * Set idResponsableIndicador
     *
     * @param MINSAL\IndicadoresBundle\Entity\ResponsableIndicador $idResponsableIndicador
     * @return FichaTecnica
     */
    public function setIdResponsableIndicador(\MINSAL\IndicadoresBundle\Entity\ResponsableIndicador $idResponsableIndicador = null)
    {
        $this->idResponsableIndicador = $idResponsableIndicador;
    
        return $this;
    }

    /**
     * Get idResponsableIndicador
     *
     * @return MINSAL\IndicadoresBundle\Entity\ResponsableIndicador 
     */
    public function getIdResponsableIndicador()
    {
        return $this->idResponsableIndicador;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="FichaTecnicaVariableDato", mappedBy="idFichaTecnica")
     **/
    private $variables;
    
    /**
     * @ORM\ManyToMany(targetEntity="Periodos")
     * @ORM\JoinTable(name="ficha_tecnica_periodicidad",
     *      joinColumns={@ORM\JoinColumn(name="id_ficha_tecnica", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_periodicidad", referencedColumnName="id")}
     *      )
     * @ORM\OrderBy({"descripcion" = "ASC"})
     **/
    private $periodos;
    
    /**
     * @ORM\ManyToMany(targetEntity="Presentacion")
     * @ORM\JoinTable(name="ficha_tecnica_presentacion",
     *      joinColumns={@ORM\JoinColumn(name="id_ficha_tecnica", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_presentacion", referencedColumnName="id")}
     *      )
     **/
    private $presentaciones;
        
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->periodos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->presentaciones = new \Doctrine\Common\Collections\ArrayCollection();        
    }
    
    /**
     * Add periodos
     *
     * @param MINSAL\IndicadoresBundle\Entity\Periodos $periodos
     * @return FichaTecnica
     */
    public function addPeriodo(\MINSAL\IndicadoresBundle\Entity\Periodos $periodos)
    {
        $this->periodos[] = $periodos;
    
        return $this;
    }

    /**
     * Remove periodos
     *
     * @param MINSAL\IndicadoresBundle\Entity\Periodos $periodos
     */
    public function removePeriodo(\MINSAL\IndicadoresBundle\Entity\Periodos $periodos)
    {
        $this->periodos->removeElement($periodos);
    }

    /**
     * Get periodos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPeriodos()
    {
        return $this->periodos;
    }

    /**
     * Add presentaciones
     *
     * @param MINSAL\IndicadoresBundle\Entity\Presentacion $presentaciones
     * @return FichaTecnica
     */
    public function addPresentacione(\MINSAL\IndicadoresBundle\Entity\Presentacion $presentaciones)
    {
        $this->presentaciones[] = $presentaciones;
    
        return $this;
    }

    /**
     * Remove presentaciones
     *
     * @param MINSAL\IndicadoresBundle\Entity\Presentacion $presentaciones
     */
    public function removePresentacione(\MINSAL\IndicadoresBundle\Entity\Presentacion $presentaciones)
    {
        $this->presentaciones->removeElement($presentaciones);
    }

    /**
     * Get presentaciones
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPresentaciones()
    {
        return $this->presentaciones;
    }

    

    /**
     * Add variables
     *
     * @param MINSAL\IndicadoresBundle\Entity\FichaTecnicaVariableDato $variables
     * @return FichaTecnica
     */
    public function addVariable(\MINSAL\IndicadoresBundle\Entity\FichaTecnicaVariableDato $variables)
    {
        $this->variables[] = $variables;
    
        return $this;
    }

    /**
     * Remove variables
     *
     * @param MINSAL\IndicadoresBundle\Entity\FichaTecnicaVariableDato $variables
     */
    public function removeVariable(\MINSAL\IndicadoresBundle\Entity\FichaTecnicaVariableDato $variables)
    {
        $this->variables->removeElement($variables);
    }

    /**
     * Get variables
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getVariables()
    {
        return $this->variables;
    }
}