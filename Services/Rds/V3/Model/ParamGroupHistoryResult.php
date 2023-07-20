<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParamGroupHistoryResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParamGroupHistoryResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parameterName  参数名称
    * oldValue  旧值
    * newValue  新值
    * updateResult  更新结果 成功：SUCCESS 失败： FAILED
    * applied  是否已应用 true：已应用 false：未应用
    * updateTime  修改时间
    * applyTime  应用时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parameterName' => 'string',
            'oldValue' => 'string',
            'newValue' => 'string',
            'updateResult' => 'string',
            'applied' => 'bool',
            'updateTime' => 'string',
            'applyTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parameterName  参数名称
    * oldValue  旧值
    * newValue  新值
    * updateResult  更新结果 成功：SUCCESS 失败： FAILED
    * applied  是否已应用 true：已应用 false：未应用
    * updateTime  修改时间
    * applyTime  应用时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parameterName' => null,
        'oldValue' => null,
        'newValue' => null,
        'updateResult' => null,
        'applied' => null,
        'updateTime' => null,
        'applyTime' => null
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
    * parameterName  参数名称
    * oldValue  旧值
    * newValue  新值
    * updateResult  更新结果 成功：SUCCESS 失败： FAILED
    * applied  是否已应用 true：已应用 false：未应用
    * updateTime  修改时间
    * applyTime  应用时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parameterName' => 'parameter_name',
            'oldValue' => 'old_value',
            'newValue' => 'new_value',
            'updateResult' => 'update_result',
            'applied' => 'applied',
            'updateTime' => 'update_time',
            'applyTime' => 'apply_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parameterName  参数名称
    * oldValue  旧值
    * newValue  新值
    * updateResult  更新结果 成功：SUCCESS 失败： FAILED
    * applied  是否已应用 true：已应用 false：未应用
    * updateTime  修改时间
    * applyTime  应用时间
    *
    * @var string[]
    */
    protected static $setters = [
            'parameterName' => 'setParameterName',
            'oldValue' => 'setOldValue',
            'newValue' => 'setNewValue',
            'updateResult' => 'setUpdateResult',
            'applied' => 'setApplied',
            'updateTime' => 'setUpdateTime',
            'applyTime' => 'setApplyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parameterName  参数名称
    * oldValue  旧值
    * newValue  新值
    * updateResult  更新结果 成功：SUCCESS 失败： FAILED
    * applied  是否已应用 true：已应用 false：未应用
    * updateTime  修改时间
    * applyTime  应用时间
    *
    * @var string[]
    */
    protected static $getters = [
            'parameterName' => 'getParameterName',
            'oldValue' => 'getOldValue',
            'newValue' => 'getNewValue',
            'updateResult' => 'getUpdateResult',
            'applied' => 'getApplied',
            'updateTime' => 'getUpdateTime',
            'applyTime' => 'getApplyTime'
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
        $this->container['parameterName'] = isset($data['parameterName']) ? $data['parameterName'] : null;
        $this->container['oldValue'] = isset($data['oldValue']) ? $data['oldValue'] : null;
        $this->container['newValue'] = isset($data['newValue']) ? $data['newValue'] : null;
        $this->container['updateResult'] = isset($data['updateResult']) ? $data['updateResult'] : null;
        $this->container['applied'] = isset($data['applied']) ? $data['applied'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
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
    * Gets parameterName
    *  参数名称
    *
    * @return string|null
    */
    public function getParameterName()
    {
        return $this->container['parameterName'];
    }

    /**
    * Sets parameterName
    *
    * @param string|null $parameterName 参数名称
    *
    * @return $this
    */
    public function setParameterName($parameterName)
    {
        $this->container['parameterName'] = $parameterName;
        return $this;
    }

    /**
    * Gets oldValue
    *  旧值
    *
    * @return string|null
    */
    public function getOldValue()
    {
        return $this->container['oldValue'];
    }

    /**
    * Sets oldValue
    *
    * @param string|null $oldValue 旧值
    *
    * @return $this
    */
    public function setOldValue($oldValue)
    {
        $this->container['oldValue'] = $oldValue;
        return $this;
    }

    /**
    * Gets newValue
    *  新值
    *
    * @return string|null
    */
    public function getNewValue()
    {
        return $this->container['newValue'];
    }

    /**
    * Sets newValue
    *
    * @param string|null $newValue 新值
    *
    * @return $this
    */
    public function setNewValue($newValue)
    {
        $this->container['newValue'] = $newValue;
        return $this;
    }

    /**
    * Gets updateResult
    *  更新结果 成功：SUCCESS 失败： FAILED
    *
    * @return string|null
    */
    public function getUpdateResult()
    {
        return $this->container['updateResult'];
    }

    /**
    * Sets updateResult
    *
    * @param string|null $updateResult 更新结果 成功：SUCCESS 失败： FAILED
    *
    * @return $this
    */
    public function setUpdateResult($updateResult)
    {
        $this->container['updateResult'] = $updateResult;
        return $this;
    }

    /**
    * Gets applied
    *  是否已应用 true：已应用 false：未应用
    *
    * @return bool|null
    */
    public function getApplied()
    {
        return $this->container['applied'];
    }

    /**
    * Sets applied
    *
    * @param bool|null $applied 是否已应用 true：已应用 false：未应用
    *
    * @return $this
    */
    public function setApplied($applied)
    {
        $this->container['applied'] = $applied;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets applyTime
    *  应用时间
    *
    * @return string|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param string|null $applyTime 应用时间
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
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

