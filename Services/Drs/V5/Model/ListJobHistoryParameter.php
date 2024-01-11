<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobHistoryParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobHistoryParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名称。
    * oldValue  旧参数值。
    * newValue  新参数值。
    * isUpdateSuccess  更新结果。true：成功，false：失败
    * isApplied  是否已应用。true：已应用，false：未应用
    * updateTime  参数修改时间。
    * applyTime  参数应用时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'oldValue' => 'string',
            'newValue' => 'string',
            'isUpdateSuccess' => 'bool',
            'isApplied' => 'bool',
            'updateTime' => 'string',
            'applyTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名称。
    * oldValue  旧参数值。
    * newValue  新参数值。
    * isUpdateSuccess  更新结果。true：成功，false：失败
    * isApplied  是否已应用。true：已应用，false：未应用
    * updateTime  参数修改时间。
    * applyTime  参数应用时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'oldValue' => null,
        'newValue' => null,
        'isUpdateSuccess' => null,
        'isApplied' => null,
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
    * name  参数名称。
    * oldValue  旧参数值。
    * newValue  新参数值。
    * isUpdateSuccess  更新结果。true：成功，false：失败
    * isApplied  是否已应用。true：已应用，false：未应用
    * updateTime  参数修改时间。
    * applyTime  参数应用时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'oldValue' => 'old_value',
            'newValue' => 'new_value',
            'isUpdateSuccess' => 'is_update_success',
            'isApplied' => 'is_applied',
            'updateTime' => 'update_time',
            'applyTime' => 'apply_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名称。
    * oldValue  旧参数值。
    * newValue  新参数值。
    * isUpdateSuccess  更新结果。true：成功，false：失败
    * isApplied  是否已应用。true：已应用，false：未应用
    * updateTime  参数修改时间。
    * applyTime  参数应用时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'oldValue' => 'setOldValue',
            'newValue' => 'setNewValue',
            'isUpdateSuccess' => 'setIsUpdateSuccess',
            'isApplied' => 'setIsApplied',
            'updateTime' => 'setUpdateTime',
            'applyTime' => 'setApplyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名称。
    * oldValue  旧参数值。
    * newValue  新参数值。
    * isUpdateSuccess  更新结果。true：成功，false：失败
    * isApplied  是否已应用。true：已应用，false：未应用
    * updateTime  参数修改时间。
    * applyTime  参数应用时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'oldValue' => 'getOldValue',
            'newValue' => 'getNewValue',
            'isUpdateSuccess' => 'getIsUpdateSuccess',
            'isApplied' => 'getIsApplied',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['oldValue'] = isset($data['oldValue']) ? $data['oldValue'] : null;
        $this->container['newValue'] = isset($data['newValue']) ? $data['newValue'] : null;
        $this->container['isUpdateSuccess'] = isset($data['isUpdateSuccess']) ? $data['isUpdateSuccess'] : null;
        $this->container['isApplied'] = isset($data['isApplied']) ? $data['isApplied'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['oldValue'] === null) {
            $invalidProperties[] = "'oldValue' can't be null";
        }
        if ($this->container['newValue'] === null) {
            $invalidProperties[] = "'newValue' can't be null";
        }
        if ($this->container['isUpdateSuccess'] === null) {
            $invalidProperties[] = "'isUpdateSuccess' can't be null";
        }
        if ($this->container['isApplied'] === null) {
            $invalidProperties[] = "'isApplied' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
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
    * Gets name
    *  参数名称。
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
    * @param string $name 参数名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets oldValue
    *  旧参数值。
    *
    * @return string
    */
    public function getOldValue()
    {
        return $this->container['oldValue'];
    }

    /**
    * Sets oldValue
    *
    * @param string $oldValue 旧参数值。
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
    *  新参数值。
    *
    * @return string
    */
    public function getNewValue()
    {
        return $this->container['newValue'];
    }

    /**
    * Sets newValue
    *
    * @param string $newValue 新参数值。
    *
    * @return $this
    */
    public function setNewValue($newValue)
    {
        $this->container['newValue'] = $newValue;
        return $this;
    }

    /**
    * Gets isUpdateSuccess
    *  更新结果。true：成功，false：失败
    *
    * @return bool
    */
    public function getIsUpdateSuccess()
    {
        return $this->container['isUpdateSuccess'];
    }

    /**
    * Sets isUpdateSuccess
    *
    * @param bool $isUpdateSuccess 更新结果。true：成功，false：失败
    *
    * @return $this
    */
    public function setIsUpdateSuccess($isUpdateSuccess)
    {
        $this->container['isUpdateSuccess'] = $isUpdateSuccess;
        return $this;
    }

    /**
    * Gets isApplied
    *  是否已应用。true：已应用，false：未应用
    *
    * @return bool
    */
    public function getIsApplied()
    {
        return $this->container['isApplied'];
    }

    /**
    * Sets isApplied
    *
    * @param bool $isApplied 是否已应用。true：已应用，false：未应用
    *
    * @return $this
    */
    public function setIsApplied($isApplied)
    {
        $this->container['isApplied'] = $isApplied;
        return $this;
    }

    /**
    * Gets updateTime
    *  参数修改时间。
    *
    * @return string
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string $updateTime 参数修改时间。
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
    *  参数应用时间。
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
    * @param string|null $applyTime 参数应用时间。
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

