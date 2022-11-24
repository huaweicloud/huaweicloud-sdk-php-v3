<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsSwitchDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsSwitchDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  防护对象id
    * ipsType  补丁类型，1-基础补丁 2=虚拟补丁
    * status  ips特性开关状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'ipsType' => 'int',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  防护对象id
    * ipsType  补丁类型，1-基础补丁 2=虚拟补丁
    * status  ips特性开关状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'ipsType' => 'int32',
        'status' => null
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
    * objectId  防护对象id
    * ipsType  补丁类型，1-基础补丁 2=虚拟补丁
    * status  ips特性开关状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'ipsType' => 'ips_type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  防护对象id
    * ipsType  补丁类型，1-基础补丁 2=虚拟补丁
    * status  ips特性开关状态
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'ipsType' => 'setIpsType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  防护对象id
    * ipsType  补丁类型，1-基础补丁 2=虚拟补丁
    * status  ips特性开关状态
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'ipsType' => 'getIpsType',
            'status' => 'getStatus'
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
    const IPS_TYPE_1 = 1;
    const IPS_TYPE_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpsTypeAllowableValues()
    {
        return [
            self::IPS_TYPE_1,
            self::IPS_TYPE_2,
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['ipsType'] = isset($data['ipsType']) ? $data['ipsType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['objectId'])) {
                $invalidProperties[] = "invalid value for 'objectId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            $allowedValues = $this->getIpsTypeAllowableValues();
                if (!is_null($this->container['ipsType']) && !in_array($this->container['ipsType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipsType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets objectId
    *  防护对象id
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 防护对象id
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets ipsType
    *  补丁类型，1-基础补丁 2=虚拟补丁
    *
    * @return int|null
    */
    public function getIpsType()
    {
        return $this->container['ipsType'];
    }

    /**
    * Sets ipsType
    *
    * @param int|null $ipsType 补丁类型，1-基础补丁 2=虚拟补丁
    *
    * @return $this
    */
    public function setIpsType($ipsType)
    {
        $this->container['ipsType'] = $ipsType;
        return $this;
    }

    /**
    * Gets status
    *  ips特性开关状态
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status ips特性开关状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

