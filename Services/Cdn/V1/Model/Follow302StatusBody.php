<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Follow302StatusBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Follow302StatusBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  加速域名id。获取方法请参见查询加速域名。
    * followStatus  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'followStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  加速域名id。获取方法请参见查询加速域名。
    * followStatus  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'followStatus' => null
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
    * domainId  加速域名id。获取方法请参见查询加速域名。
    * followStatus  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'followStatus' => 'follow_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  加速域名id。获取方法请参见查询加速域名。
    * followStatus  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'followStatus' => 'setFollowStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  加速域名id。获取方法请参见查询加速域名。
    * followStatus  follow302状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'followStatus' => 'getFollowStatus'
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
    const FOLLOW_STATUS_OFF = 'off';
    const FOLLOW_STATUS_ON = 'on';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFollowStatusAllowableValues()
    {
        return [
            self::FOLLOW_STATUS_OFF,
            self::FOLLOW_STATUS_ON,
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['followStatus'] = isset($data['followStatus']) ? $data['followStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFollowStatusAllowableValues();
                if (!is_null($this->container['followStatus']) && !in_array($this->container['followStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'followStatus', must be one of '%s'",
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
    * Gets domainId
    *  加速域名id。获取方法请参见查询加速域名。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 加速域名id。获取方法请参见查询加速域名。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets followStatus
    *  follow302状态（\"off\"/\"on\"）
    *
    * @return string|null
    */
    public function getFollowStatus()
    {
        return $this->container['followStatus'];
    }

    /**
    * Sets followStatus
    *
    * @param string|null $followStatus follow302状态（\"off\"/\"on\"）
    *
    * @return $this
    */
    public function setFollowStatus($followStatus)
    {
        $this->container['followStatus'] = $followStatus;
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

