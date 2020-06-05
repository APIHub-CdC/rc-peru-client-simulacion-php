<?php

namespace rc\simulacion\pe\Client\Model;

use \ArrayAccess;
use \rc\simulacion\pe\Client\ObjectSerializer;

class ComportamientoRCCMFNZ implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'ComportamientoRCC_MFNZ';
    
    protected static $rc_peTypes = [
        'castigos' => '\rc\simulacion\pe\Client\Model\Castigos[]',
        'endeudamiento_producto_entidad' => '\rc\simulacion\pe\Client\Model\EndeudamientoProductoEntidad[]',
        'comportamiento_pago' => '\rc\simulacion\pe\Client\Model\ComportamientoPago[]',
        'comportamiento_uso_tarjeta' => '\rc\simulacion\pe\Client\Model\ComportamientoUsoTarjeta[]'
    ];
    
    protected static $rc_peFormats = [
        'castigos' => null,
        'endeudamiento_producto_entidad' => null,
        'comportamiento_pago' => null,
        'comportamiento_uso_tarjeta' => null
    ];
    
    public static function rc_peTypes()
    {
        return self::$rc_peTypes;
    }
    
    public static function rc_peFormats()
    {
        return self::$rc_peFormats;
    }
    
    protected static $attributeMap = [
        'castigos' => 'castigos',
        'endeudamiento_producto_entidad' => 'endeudamientoProductoEntidad',
        'comportamiento_pago' => 'comportamientoPago',
        'comportamiento_uso_tarjeta' => 'comportamientoUsoTarjeta'
    ];
    
    protected static $setters = [
        'castigos' => 'setCastigos',
        'endeudamiento_producto_entidad' => 'setEndeudamientoProductoEntidad',
        'comportamiento_pago' => 'setComportamientoPago',
        'comportamiento_uso_tarjeta' => 'setComportamientoUsoTarjeta'
    ];
    
    protected static $getters = [
        'castigos' => 'getCastigos',
        'endeudamiento_producto_entidad' => 'getEndeudamientoProductoEntidad',
        'comportamiento_pago' => 'getComportamientoPago',
        'comportamiento_uso_tarjeta' => 'getComportamientoUsoTarjeta'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$rc_peModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['castigos'] = isset($data['castigos']) ? $data['castigos'] : null;
        $this->container['endeudamiento_producto_entidad'] = isset($data['endeudamiento_producto_entidad']) ? $data['endeudamiento_producto_entidad'] : null;
        $this->container['comportamiento_pago'] = isset($data['comportamiento_pago']) ? $data['comportamiento_pago'] : null;
        $this->container['comportamiento_uso_tarjeta'] = isset($data['comportamiento_uso_tarjeta']) ? $data['comportamiento_uso_tarjeta'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCastigos()
    {
        return $this->container['castigos'];
    }
    
    public function setCastigos($castigos)
    {
        $this->container['castigos'] = $castigos;
        return $this;
    }
    
    public function getEndeudamientoProductoEntidad()
    {
        return $this->container['endeudamiento_producto_entidad'];
    }
    
    public function setEndeudamientoProductoEntidad($endeudamiento_producto_entidad)
    {
        $this->container['endeudamiento_producto_entidad'] = $endeudamiento_producto_entidad;
        return $this;
    }
    
    public function getComportamientoPago()
    {
        return $this->container['comportamiento_pago'];
    }
    
    public function setComportamientoPago($comportamiento_pago)
    {
        $this->container['comportamiento_pago'] = $comportamiento_pago;
        return $this;
    }
    
    public function getComportamientoUsoTarjeta()
    {
        return $this->container['comportamiento_uso_tarjeta'];
    }
    
    public function setComportamientoUsoTarjeta($comportamiento_uso_tarjeta)
    {
        $this->container['comportamiento_uso_tarjeta'] = $comportamiento_uso_tarjeta;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
