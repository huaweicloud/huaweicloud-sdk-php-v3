<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述 - INSTANCE_NUM_LIMIT：租户可以创建的实例个数限制
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configId' => 'string',
            'configName' => 'string',
            'configValue' => 'string',
            'configTime' => '\DateTime',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述 - INSTANCE_NUM_LIMIT：租户可以创建的实例个数限制
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configId' => null,
        'configName' => null,
        'configValue' => null,
        'configTime' => 'date-time',
        'remark' => null
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
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述 - INSTANCE_NUM_LIMIT：租户可以创建的实例个数限制
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configId' => 'config_id',
            'configName' => 'config_name',
            'configValue' => 'config_value',
            'configTime' => 'config_time',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述 - INSTANCE_NUM_LIMIT：租户可以创建的实例个数限制
    *
    * @var string[]
    */
    protected static $setters = [
            'configId' => 'setConfigId',
            'configName' => 'setConfigName',
            'configValue' => 'setConfigValue',
            'configTime' => 'setConfigTime',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configId  配额编号
    * configName  配额名称
    * configValue  配额值  当前实例所在租户该配额对应的数量
    * configTime  配额创建时间
    * remark  配额描述 - INSTANCE_NUM_LIMIT：租户可以创建的实例个数限制
    *
    * @var string[]
    */
    protected static $getters = [
            'configId' => 'getConfigId',
            'configName' => 'getConfigName',
            'configValue' => 'getConfigValue',
            'configTime' => 'getConfigTime',
            'remark' => 'getRemark'
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
    const CONFIG_NAME_INSTANCE_NUM_LIMIT = 'INSTANCE_NUM_LIMIT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigNameAllowableValues()
    {
        return [
            self::CONFIG_NAME_INSTANCE_NUM_LIMIT,
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
        $this->container['configId'] = isset($data['configId']) ? $data['configId'] : null;
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
        $this->container['configTime'] = isset($data['configTime']) ? $data['configTime'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getConfigNameAllowableValues();
                if (!is_null($this->container['configName']) && !in_array($this->container['configName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configName', must be one of '%s'",
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
    * Gets configId
    *  配额编号
    *
    * @return string|null
    */
    public function getConfigId()
    {
        return $this->container['configId'];
    }

    /**
    * Sets configId
    *
    * @param string|null $configId 配额编号
    *
    * @return $this
    */
    public function setConfigId($configId)
    {
        $this->container['configId'] = $configId;
        return $this;
    }

    /**
    * Gets configName
    *  配额名称
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName 配额名称
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets configValue
    *  配额值  当前实例所在租户该配额对应的数量
    *
    * @return string|null
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param string|null $configValue 配额值  当前实例所在租户该配额对应的数量
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
        return $this;
    }

    /**
    * Gets configTime
    *  配额创建时间
    *
    * @return \DateTime|null
    */
    public function getConfigTime()
    {
        return $this->container['configTime'];
    }

    /**
    * Sets configTime
    *
    * @param \DateTime|null $configTime 配额创建时间
    *
    * @return $this
    */
    public function setConfigTime($configTime)
    {
        $this->container['configTime'] = $configTime;
        return $this;
    }

    /**
    * Gets remark
    *  配额描述 - INSTANCE_NUM_LIMIT：租户可以创建的实例个数限制
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 配额描述 - INSTANCE_NUM_LIMIT：租户可以创建的实例个数限制
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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

