<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationHistoryRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationHistoryRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parameterName  **参数解释：** 参数名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * oldValue  **参数解释：** 参数旧值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newValue  **参数解释：** 参数新值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * updateResult  **参数解释：** 更新结果。 **约束限制：** 不涉及。 **取值范围：** - SUCCESS：成功。 - FAILED：失败。 **默认取值：** 不涉及。
    * applied  **参数解释：** 是否生效。 **约束限制：** 不涉及。 **取值范围：** - true:已生效。 - false:未生效。 **默认取值：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    * appliedAt  **参数解释：** 生效时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parameterName' => 'string',
            'oldValue' => 'string',
            'newValue' => 'string',
            'updateResult' => 'string',
            'applied' => 'bool',
            'updatedAt' => 'string',
            'appliedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parameterName  **参数解释：** 参数名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * oldValue  **参数解释：** 参数旧值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newValue  **参数解释：** 参数新值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * updateResult  **参数解释：** 更新结果。 **约束限制：** 不涉及。 **取值范围：** - SUCCESS：成功。 - FAILED：失败。 **默认取值：** 不涉及。
    * applied  **参数解释：** 是否生效。 **约束限制：** 不涉及。 **取值范围：** - true:已生效。 - false:未生效。 **默认取值：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    * appliedAt  **参数解释：** 生效时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parameterName' => null,
        'oldValue' => null,
        'newValue' => null,
        'updateResult' => null,
        'applied' => null,
        'updatedAt' => null,
        'appliedAt' => null
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
    * parameterName  **参数解释：** 参数名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * oldValue  **参数解释：** 参数旧值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newValue  **参数解释：** 参数新值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * updateResult  **参数解释：** 更新结果。 **约束限制：** 不涉及。 **取值范围：** - SUCCESS：成功。 - FAILED：失败。 **默认取值：** 不涉及。
    * applied  **参数解释：** 是否生效。 **约束限制：** 不涉及。 **取值范围：** - true:已生效。 - false:未生效。 **默认取值：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    * appliedAt  **参数解释：** 生效时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parameterName' => 'parameter_name',
            'oldValue' => 'old_value',
            'newValue' => 'new_value',
            'updateResult' => 'update_result',
            'applied' => 'applied',
            'updatedAt' => 'updated_at',
            'appliedAt' => 'applied_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parameterName  **参数解释：** 参数名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * oldValue  **参数解释：** 参数旧值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newValue  **参数解释：** 参数新值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * updateResult  **参数解释：** 更新结果。 **约束限制：** 不涉及。 **取值范围：** - SUCCESS：成功。 - FAILED：失败。 **默认取值：** 不涉及。
    * applied  **参数解释：** 是否生效。 **约束限制：** 不涉及。 **取值范围：** - true:已生效。 - false:未生效。 **默认取值：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    * appliedAt  **参数解释：** 生效时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'parameterName' => 'setParameterName',
            'oldValue' => 'setOldValue',
            'newValue' => 'setNewValue',
            'updateResult' => 'setUpdateResult',
            'applied' => 'setApplied',
            'updatedAt' => 'setUpdatedAt',
            'appliedAt' => 'setAppliedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parameterName  **参数解释：** 参数名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * oldValue  **参数解释：** 参数旧值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newValue  **参数解释：** 参数新值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * updateResult  **参数解释：** 更新结果。 **约束限制：** 不涉及。 **取值范围：** - SUCCESS：成功。 - FAILED：失败。 **默认取值：** 不涉及。
    * applied  **参数解释：** 是否生效。 **约束限制：** 不涉及。 **取值范围：** - true:已生效。 - false:未生效。 **默认取值：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    * appliedAt  **参数解释：** 生效时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'parameterName' => 'getParameterName',
            'oldValue' => 'getOldValue',
            'newValue' => 'getNewValue',
            'updateResult' => 'getUpdateResult',
            'applied' => 'getApplied',
            'updatedAt' => 'getUpdatedAt',
            'appliedAt' => 'getAppliedAt'
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
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['appliedAt'] = isset($data['appliedAt']) ? $data['appliedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parameterName'] === null) {
            $invalidProperties[] = "'parameterName' can't be null";
        }
        if ($this->container['oldValue'] === null) {
            $invalidProperties[] = "'oldValue' can't be null";
        }
        if ($this->container['newValue'] === null) {
            $invalidProperties[] = "'newValue' can't be null";
        }
        if ($this->container['updateResult'] === null) {
            $invalidProperties[] = "'updateResult' can't be null";
        }
        if ($this->container['applied'] === null) {
            $invalidProperties[] = "'applied' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['appliedAt'] === null) {
            $invalidProperties[] = "'appliedAt' can't be null";
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
    * Gets parameterName
    *  **参数解释：** 参数名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getParameterName()
    {
        return $this->container['parameterName'];
    }

    /**
    * Sets parameterName
    *
    * @param string $parameterName **参数解释：** 参数名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 参数旧值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $oldValue **参数解释：** 参数旧值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 参数新值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $newValue **参数解释：** 参数新值。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 更新结果。 **约束限制：** 不涉及。 **取值范围：** - SUCCESS：成功。 - FAILED：失败。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getUpdateResult()
    {
        return $this->container['updateResult'];
    }

    /**
    * Sets updateResult
    *
    * @param string $updateResult **参数解释：** 更新结果。 **约束限制：** 不涉及。 **取值范围：** - SUCCESS：成功。 - FAILED：失败。 **默认取值：** 不涉及。
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
    *  **参数解释：** 是否生效。 **约束限制：** 不涉及。 **取值范围：** - true:已生效。 - false:未生效。 **默认取值：** 不涉及。
    *
    * @return bool
    */
    public function getApplied()
    {
        return $this->container['applied'];
    }

    /**
    * Sets applied
    *
    * @param bool $applied **参数解释：** 是否生效。 **约束限制：** 不涉及。 **取值范围：** - true:已生效。 - false:未生效。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setApplied($applied)
    {
        $this->container['applied'] = $applied;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt **参数解释：** 更新时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets appliedAt
    *  **参数解释：** 生效时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getAppliedAt()
    {
        return $this->container['appliedAt'];
    }

    /**
    * Sets appliedAt
    *
    * @param string $appliedAt **参数解释：** 生效时间。 **约束限制：** 不涉及。 **取值范围：** 格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAppliedAt($appliedAt)
    {
        $this->container['appliedAt'] = $appliedAt;
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

