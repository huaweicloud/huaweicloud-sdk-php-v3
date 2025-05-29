<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptExecuteParamReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptExecuteParamReference';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * referType  参数引用类型：PARAM_STORE
    * paramId  引用参数的唯一主键id
    * paramVersion  引用参数的版本号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'referType' => 'string',
            'paramId' => 'string',
            'paramVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * referType  参数引用类型：PARAM_STORE
    * paramId  引用参数的唯一主键id
    * paramVersion  引用参数的版本号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'referType' => null,
        'paramId' => null,
        'paramVersion' => null
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
    * referType  参数引用类型：PARAM_STORE
    * paramId  引用参数的唯一主键id
    * paramVersion  引用参数的版本号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'referType' => 'refer_type',
            'paramId' => 'param_id',
            'paramVersion' => 'param_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * referType  参数引用类型：PARAM_STORE
    * paramId  引用参数的唯一主键id
    * paramVersion  引用参数的版本号
    *
    * @var string[]
    */
    protected static $setters = [
            'referType' => 'setReferType',
            'paramId' => 'setParamId',
            'paramVersion' => 'setParamVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * referType  参数引用类型：PARAM_STORE
    * paramId  引用参数的唯一主键id
    * paramVersion  引用参数的版本号
    *
    * @var string[]
    */
    protected static $getters = [
            'referType' => 'getReferType',
            'paramId' => 'getParamId',
            'paramVersion' => 'getParamVersion'
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
    const PARAM_ID_LOW = 'LOW';
    const PARAM_ID_MEDIUM = 'MEDIUM';
    const PARAM_ID_HIGH = 'HIGH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getParamIdAllowableValues()
    {
        return [
            self::PARAM_ID_LOW,
            self::PARAM_ID_MEDIUM,
            self::PARAM_ID_HIGH,
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
        $this->container['referType'] = isset($data['referType']) ? $data['referType'] : null;
        $this->container['paramId'] = isset($data['paramId']) ? $data['paramId'] : null;
        $this->container['paramVersion'] = isset($data['paramVersion']) ? $data['paramVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['referType'] === null) {
            $invalidProperties[] = "'referType' can't be null";
        }
        if ($this->container['paramId'] === null) {
            $invalidProperties[] = "'paramId' can't be null";
        }
            $allowedValues = $this->getParamIdAllowableValues();
                if (!is_null($this->container['paramId']) && !in_array($this->container['paramId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'paramId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['paramVersion']) && (mb_strlen($this->container['paramVersion']) > 10)) {
                $invalidProperties[] = "invalid value for 'paramVersion', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['paramVersion']) && (mb_strlen($this->container['paramVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'paramVersion', the character length must be bigger than or equal to 1.";
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
    * Gets referType
    *  参数引用类型：PARAM_STORE
    *
    * @return string
    */
    public function getReferType()
    {
        return $this->container['referType'];
    }

    /**
    * Sets referType
    *
    * @param string $referType 参数引用类型：PARAM_STORE
    *
    * @return $this
    */
    public function setReferType($referType)
    {
        $this->container['referType'] = $referType;
        return $this;
    }

    /**
    * Gets paramId
    *  引用参数的唯一主键id
    *
    * @return string
    */
    public function getParamId()
    {
        return $this->container['paramId'];
    }

    /**
    * Sets paramId
    *
    * @param string $paramId 引用参数的唯一主键id
    *
    * @return $this
    */
    public function setParamId($paramId)
    {
        $this->container['paramId'] = $paramId;
        return $this;
    }

    /**
    * Gets paramVersion
    *  引用参数的版本号
    *
    * @return string|null
    */
    public function getParamVersion()
    {
        return $this->container['paramVersion'];
    }

    /**
    * Sets paramVersion
    *
    * @param string|null $paramVersion 引用参数的版本号
    *
    * @return $this
    */
    public function setParamVersion($paramVersion)
    {
        $this->container['paramVersion'] = $paramVersion;
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

