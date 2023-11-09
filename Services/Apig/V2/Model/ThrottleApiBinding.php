<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThrottleApiBinding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThrottleApiBinding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishId  API的发布记录编号
    * scope  策略作用域，取值如下： - 1：整个API - 2： 单个用户 - 3：单个APP  目前只支持1
    * strategyId  流控策略的ID
    * applyTime  绑定时间
    * id  绑定关系的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishId' => 'string',
            'scope' => 'int',
            'strategyId' => 'string',
            'applyTime' => '\DateTime',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishId  API的发布记录编号
    * scope  策略作用域，取值如下： - 1：整个API - 2： 单个用户 - 3：单个APP  目前只支持1
    * strategyId  流控策略的ID
    * applyTime  绑定时间
    * id  绑定关系的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishId' => null,
        'scope' => 'int32',
        'strategyId' => null,
        'applyTime' => 'date-time',
        'id' => null
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
    * publishId  API的发布记录编号
    * scope  策略作用域，取值如下： - 1：整个API - 2： 单个用户 - 3：单个APP  目前只支持1
    * strategyId  流控策略的ID
    * applyTime  绑定时间
    * id  绑定关系的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishId' => 'publish_id',
            'scope' => 'scope',
            'strategyId' => 'strategy_id',
            'applyTime' => 'apply_time',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishId  API的发布记录编号
    * scope  策略作用域，取值如下： - 1：整个API - 2： 单个用户 - 3：单个APP  目前只支持1
    * strategyId  流控策略的ID
    * applyTime  绑定时间
    * id  绑定关系的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'publishId' => 'setPublishId',
            'scope' => 'setScope',
            'strategyId' => 'setStrategyId',
            'applyTime' => 'setApplyTime',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishId  API的发布记录编号
    * scope  策略作用域，取值如下： - 1：整个API - 2： 单个用户 - 3：单个APP  目前只支持1
    * strategyId  流控策略的ID
    * applyTime  绑定时间
    * id  绑定关系的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'publishId' => 'getPublishId',
            'scope' => 'getScope',
            'strategyId' => 'getStrategyId',
            'applyTime' => 'getApplyTime',
            'id' => 'getId'
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
    const SCOPE_1 = 1;
    const SCOPE_2 = 2;
    const SCOPE_3 = 3;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_1,
            self::SCOPE_2,
            self::SCOPE_3,
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
        $this->container['publishId'] = isset($data['publishId']) ? $data['publishId'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['strategyId'] = isset($data['strategyId']) ? $data['strategyId'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getScopeAllowableValues();
                if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
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
    * Gets publishId
    *  API的发布记录编号
    *
    * @return string|null
    */
    public function getPublishId()
    {
        return $this->container['publishId'];
    }

    /**
    * Sets publishId
    *
    * @param string|null $publishId API的发布记录编号
    *
    * @return $this
    */
    public function setPublishId($publishId)
    {
        $this->container['publishId'] = $publishId;
        return $this;
    }

    /**
    * Gets scope
    *  策略作用域，取值如下： - 1：整个API - 2： 单个用户 - 3：单个APP  目前只支持1
    *
    * @return int|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param int|null $scope 策略作用域，取值如下： - 1：整个API - 2： 单个用户 - 3：单个APP  目前只支持1
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets strategyId
    *  流控策略的ID
    *
    * @return string|null
    */
    public function getStrategyId()
    {
        return $this->container['strategyId'];
    }

    /**
    * Sets strategyId
    *
    * @param string|null $strategyId 流控策略的ID
    *
    * @return $this
    */
    public function setStrategyId($strategyId)
    {
        $this->container['strategyId'] = $strategyId;
        return $this;
    }

    /**
    * Gets applyTime
    *  绑定时间
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
    * @param \DateTime|null $applyTime 绑定时间
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets id
    *  绑定关系的ID
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
    * @param string|null $id 绑定关系的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

