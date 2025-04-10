<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisasterFailoverReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisasterFailoverReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSupportRestore  是否支持容灾回切(仅支持数据库版本大于等于3.100)   - true支持   - false不支持(默认false)
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSupportRestore' => 'bool',
            'disasterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSupportRestore  是否支持容灾回切(仅支持数据库版本大于等于3.100)   - true支持   - false不支持(默认false)
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSupportRestore' => null,
        'disasterType' => null
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
    * isSupportRestore  是否支持容灾回切(仅支持数据库版本大于等于3.100)   - true支持   - false不支持(默认false)
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSupportRestore' => 'is_support_restore',
            'disasterType' => 'disaster_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSupportRestore  是否支持容灾回切(仅支持数据库版本大于等于3.100)   - true支持   - false不支持(默认false)
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSupportRestore' => 'setIsSupportRestore',
            'disasterType' => 'setDisasterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSupportRestore  是否支持容灾回切(仅支持数据库版本大于等于3.100)   - true支持   - false不支持(默认false)
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSupportRestore' => 'getIsSupportRestore',
            'disasterType' => 'getDisasterType'
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
    const DISASTER_TYPE_STREAM = 'stream';
    const DISASTER_TYPE_DORADO = 'dorado';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDisasterTypeAllowableValues()
    {
        return [
            self::DISASTER_TYPE_STREAM,
            self::DISASTER_TYPE_DORADO,
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
        $this->container['isSupportRestore'] = isset($data['isSupportRestore']) ? $data['isSupportRestore'] : null;
        $this->container['disasterType'] = isset($data['disasterType']) ? $data['disasterType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['disasterType'] === null) {
            $invalidProperties[] = "'disasterType' can't be null";
        }
            $allowedValues = $this->getDisasterTypeAllowableValues();
                if (!is_null($this->container['disasterType']) && !in_array($this->container['disasterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'disasterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets isSupportRestore
    *  是否支持容灾回切(仅支持数据库版本大于等于3.100)   - true支持   - false不支持(默认false)
    *
    * @return bool|null
    */
    public function getIsSupportRestore()
    {
        return $this->container['isSupportRestore'];
    }

    /**
    * Sets isSupportRestore
    *
    * @param bool|null $isSupportRestore 是否支持容灾回切(仅支持数据库版本大于等于3.100)   - true支持   - false不支持(默认false)
    *
    * @return $this
    */
    public function setIsSupportRestore($isSupportRestore)
    {
        $this->container['isSupportRestore'] = $isSupportRestore;
        return $this;
    }

    /**
    * Gets disasterType
    *  容灾类型。
    *
    * @return string
    */
    public function getDisasterType()
    {
        return $this->container['disasterType'];
    }

    /**
    * Sets disasterType
    *
    * @param string $disasterType 容灾类型。
    *
    * @return $this
    */
    public function setDisasterType($disasterType)
    {
        $this->container['disasterType'] = $disasterType;
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

