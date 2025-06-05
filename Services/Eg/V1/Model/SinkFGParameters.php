<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SinkFGParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SinkFGParameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * invokeType  函数执行方式,同步/异步
    * urn  函数链接
    * agency  租户委托
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'invokeType' => 'string',
            'urn' => 'string',
            'agency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * invokeType  函数执行方式,同步/异步
    * urn  函数链接
    * agency  租户委托
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'invokeType' => null,
        'urn' => null,
        'agency' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * invokeType  函数执行方式,同步/异步
    * urn  函数链接
    * agency  租户委托
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'invokeType' => 'invoke_type',
            'urn' => 'urn',
            'agency' => 'agency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * invokeType  函数执行方式,同步/异步
    * urn  函数链接
    * agency  租户委托
    *
    * @var string[]
    */
    protected static $setters = [
            'invokeType' => 'setInvokeType',
            'urn' => 'setUrn',
            'agency' => 'setAgency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * invokeType  函数执行方式,同步/异步
    * urn  函数链接
    * agency  租户委托
    *
    * @var string[]
    */
    protected static $getters = [
            'invokeType' => 'getInvokeType',
            'urn' => 'getUrn',
            'agency' => 'getAgency'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const INVOKE_TYPE_SYNCASYNC = 'SYNC，ASYNC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvokeTypeAllowableValues()
    {
        return [
            self::INVOKE_TYPE_SYNCASYNC,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['invokeType'] = isset($data['invokeType']) ? $data['invokeType'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getInvokeTypeAllowableValues();
                if (!is_null($this->container['invokeType']) && !in_array($this->container['invokeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invokeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) > 512)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets invokeType
    *  函数执行方式,同步/异步
    *
    * @return string|null
    */
    public function getInvokeType()
    {
        return $this->container['invokeType'];
    }

    /**
    * Sets invokeType
    *
    * @param string|null $invokeType 函数执行方式,同步/异步
    *
    * @return $this
    */
    public function setInvokeType($invokeType)
    {
        $this->container['invokeType'] = $invokeType;
        return $this;
    }

    /**
    * Gets urn
    *  函数链接
    *
    * @return string|null
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string|null $urn 函数链接
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets agency
    *  租户委托
    *
    * @return string|null
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string|null $agency 租户委托
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

