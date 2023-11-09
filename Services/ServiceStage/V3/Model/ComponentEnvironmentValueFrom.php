<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentEnvironmentValueFrom implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentEnvironment_value_from';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * referenceType  referenceType
    * name  configmap或者secret的名字
    * key  configmap或者secret的key
    * optional  configmap或者secret或者他们的key是否必须存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'referenceType' => 'string',
            'name' => 'string',
            'key' => 'string',
            'optional' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * referenceType  referenceType
    * name  configmap或者secret的名字
    * key  configmap或者secret的key
    * optional  configmap或者secret或者他们的key是否必须存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'referenceType' => null,
        'name' => null,
        'key' => null,
        'optional' => null
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
    * referenceType  referenceType
    * name  configmap或者secret的名字
    * key  configmap或者secret的key
    * optional  configmap或者secret或者他们的key是否必须存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'referenceType' => 'reference_type',
            'name' => 'name',
            'key' => 'key',
            'optional' => 'optional'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * referenceType  referenceType
    * name  configmap或者secret的名字
    * key  configmap或者secret的key
    * optional  configmap或者secret或者他们的key是否必须存在
    *
    * @var string[]
    */
    protected static $setters = [
            'referenceType' => 'setReferenceType',
            'name' => 'setName',
            'key' => 'setKey',
            'optional' => 'setOptional'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * referenceType  referenceType
    * name  configmap或者secret的名字
    * key  configmap或者secret的key
    * optional  configmap或者secret或者他们的key是否必须存在
    *
    * @var string[]
    */
    protected static $getters = [
            'referenceType' => 'getReferenceType',
            'name' => 'getName',
            'key' => 'getKey',
            'optional' => 'getOptional'
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
    const REFERENCE_TYPE_CONFIG_MAP_KEY = 'configMapKey';
    const REFERENCE_TYPE_SECRET_KEY = 'secretKey';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReferenceTypeAllowableValues()
    {
        return [
            self::REFERENCE_TYPE_CONFIG_MAP_KEY,
            self::REFERENCE_TYPE_SECRET_KEY,
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
        $this->container['referenceType'] = isset($data['referenceType']) ? $data['referenceType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['referenceType'] === null) {
            $invalidProperties[] = "'referenceType' can't be null";
        }
            $allowedValues = $this->getReferenceTypeAllowableValues();
                if (!is_null($this->container['referenceType']) && !in_array($this->container['referenceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'referenceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets referenceType
    *  referenceType
    *
    * @return string
    */
    public function getReferenceType()
    {
        return $this->container['referenceType'];
    }

    /**
    * Sets referenceType
    *
    * @param string $referenceType referenceType
    *
    * @return $this
    */
    public function setReferenceType($referenceType)
    {
        $this->container['referenceType'] = $referenceType;
        return $this;
    }

    /**
    * Gets name
    *  configmap或者secret的名字
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name configmap或者secret的名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets key
    *  configmap或者secret的key
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key configmap或者secret的key
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets optional
    *  configmap或者secret或者他们的key是否必须存在
    *
    * @return bool|null
    */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
    * Sets optional
    *
    * @param bool|null $optional configmap或者secret或者他们的key是否必须存在
    *
    * @return $this
    */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;
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

