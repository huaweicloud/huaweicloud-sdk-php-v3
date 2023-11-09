<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSpecialThrottlingConfigurationV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSpecialThrottlingConfigurationV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  特殊配置的编号
    * callLimits  特殊对象在流控时间内能够访问API的最大次数限制
    * applyTime  设置时间
    * appName  作用的APP名称
    * appId  作用的APP编号
    * objectId  特殊对象的身份标识
    * objectType  特殊对象类型：APP、USER
    * objectName  作用的APP或租户的名称
    * throttleId  流控策略编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'callLimits' => 'int',
            'applyTime' => '\DateTime',
            'appName' => 'string',
            'appId' => 'string',
            'objectId' => 'string',
            'objectType' => 'string',
            'objectName' => 'string',
            'throttleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  特殊配置的编号
    * callLimits  特殊对象在流控时间内能够访问API的最大次数限制
    * applyTime  设置时间
    * appName  作用的APP名称
    * appId  作用的APP编号
    * objectId  特殊对象的身份标识
    * objectType  特殊对象类型：APP、USER
    * objectName  作用的APP或租户的名称
    * throttleId  流控策略编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'callLimits' => 'int32',
        'applyTime' => 'date-time',
        'appName' => null,
        'appId' => null,
        'objectId' => null,
        'objectType' => null,
        'objectName' => null,
        'throttleId' => null
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
    * id  特殊配置的编号
    * callLimits  特殊对象在流控时间内能够访问API的最大次数限制
    * applyTime  设置时间
    * appName  作用的APP名称
    * appId  作用的APP编号
    * objectId  特殊对象的身份标识
    * objectType  特殊对象类型：APP、USER
    * objectName  作用的APP或租户的名称
    * throttleId  流控策略编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'callLimits' => 'call_limits',
            'applyTime' => 'apply_time',
            'appName' => 'app_name',
            'appId' => 'app_id',
            'objectId' => 'object_id',
            'objectType' => 'object_type',
            'objectName' => 'object_name',
            'throttleId' => 'throttle_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  特殊配置的编号
    * callLimits  特殊对象在流控时间内能够访问API的最大次数限制
    * applyTime  设置时间
    * appName  作用的APP名称
    * appId  作用的APP编号
    * objectId  特殊对象的身份标识
    * objectType  特殊对象类型：APP、USER
    * objectName  作用的APP或租户的名称
    * throttleId  流控策略编号
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'callLimits' => 'setCallLimits',
            'applyTime' => 'setApplyTime',
            'appName' => 'setAppName',
            'appId' => 'setAppId',
            'objectId' => 'setObjectId',
            'objectType' => 'setObjectType',
            'objectName' => 'setObjectName',
            'throttleId' => 'setThrottleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  特殊配置的编号
    * callLimits  特殊对象在流控时间内能够访问API的最大次数限制
    * applyTime  设置时间
    * appName  作用的APP名称
    * appId  作用的APP编号
    * objectId  特殊对象的身份标识
    * objectType  特殊对象类型：APP、USER
    * objectName  作用的APP或租户的名称
    * throttleId  流控策略编号
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'callLimits' => 'getCallLimits',
            'applyTime' => 'getApplyTime',
            'appName' => 'getAppName',
            'appId' => 'getAppId',
            'objectId' => 'getObjectId',
            'objectType' => 'getObjectType',
            'objectName' => 'getObjectName',
            'throttleId' => 'getThrottleId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['callLimits'] = isset($data['callLimits']) ? $data['callLimits'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['throttleId'] = isset($data['throttleId']) ? $data['throttleId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets id
    *  特殊配置的编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 特殊配置的编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets callLimits
    *  特殊对象在流控时间内能够访问API的最大次数限制
    *
    * @return int|null
    */
    public function getCallLimits()
    {
        return $this->container['callLimits'];
    }

    /**
    * Sets callLimits
    *
    * @param int|null $callLimits 特殊对象在流控时间内能够访问API的最大次数限制
    *
    * @return $this
    */
    public function setCallLimits($callLimits)
    {
        $this->container['callLimits'] = $callLimits;
        return $this;
    }

    /**
    * Gets applyTime
    *  设置时间
    *
    * @return \DateTime|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param \DateTime|null $applyTime 设置时间
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets appName
    *  作用的APP名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 作用的APP名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appId
    *  作用的APP编号
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 作用的APP编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets objectId
    *  特殊对象的身份标识
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 特殊对象的身份标识
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets objectType
    *  特殊对象类型：APP、USER
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 特殊对象类型：APP、USER
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets objectName
    *  作用的APP或租户的名称
    *
    * @return string|null
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string|null $objectName 作用的APP或租户的名称
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets throttleId
    *  流控策略编号
    *
    * @return string|null
    */
    public function getThrottleId()
    {
        return $this->container['throttleId'];
    }

    /**
    * Sets throttleId
    *
    * @param string|null $throttleId 流控策略编号
    *
    * @return $this
    */
    public function setThrottleId($throttleId)
    {
        $this->container['throttleId'] = $throttleId;
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

