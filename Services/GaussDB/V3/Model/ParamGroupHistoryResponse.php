<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParamGroupHistoryResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParamGroupHistoryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parameterName  参数名称。
    * oldValue  修改前参数值。
    * newValue  修改后参数值。
    * updateResult  更新结果。
    * isApplied  是否应用。 - true：是。 - false：否。
    * updated  修改时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * applied  应用时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parameterName' => 'string',
            'oldValue' => 'string',
            'newValue' => 'string',
            'updateResult' => 'string',
            'isApplied' => 'bool',
            'updated' => 'string',
            'applied' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parameterName  参数名称。
    * oldValue  修改前参数值。
    * newValue  修改后参数值。
    * updateResult  更新结果。
    * isApplied  是否应用。 - true：是。 - false：否。
    * updated  修改时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * applied  应用时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parameterName' => null,
        'oldValue' => null,
        'newValue' => null,
        'updateResult' => null,
        'isApplied' => null,
        'updated' => null,
        'applied' => null
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
    * parameterName  参数名称。
    * oldValue  修改前参数值。
    * newValue  修改后参数值。
    * updateResult  更新结果。
    * isApplied  是否应用。 - true：是。 - false：否。
    * updated  修改时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * applied  应用时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parameterName' => 'parameter_name',
            'oldValue' => 'old_value',
            'newValue' => 'new_value',
            'updateResult' => 'update_result',
            'isApplied' => 'is_applied',
            'updated' => 'updated',
            'applied' => 'applied'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parameterName  参数名称。
    * oldValue  修改前参数值。
    * newValue  修改后参数值。
    * updateResult  更新结果。
    * isApplied  是否应用。 - true：是。 - false：否。
    * updated  修改时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * applied  应用时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $setters = [
            'parameterName' => 'setParameterName',
            'oldValue' => 'setOldValue',
            'newValue' => 'setNewValue',
            'updateResult' => 'setUpdateResult',
            'isApplied' => 'setIsApplied',
            'updated' => 'setUpdated',
            'applied' => 'setApplied'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parameterName  参数名称。
    * oldValue  修改前参数值。
    * newValue  修改后参数值。
    * updateResult  更新结果。
    * isApplied  是否应用。 - true：是。 - false：否。
    * updated  修改时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * applied  应用时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $getters = [
            'parameterName' => 'getParameterName',
            'oldValue' => 'getOldValue',
            'newValue' => 'getNewValue',
            'updateResult' => 'getUpdateResult',
            'isApplied' => 'getIsApplied',
            'updated' => 'getUpdated',
            'applied' => 'getApplied'
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
        $this->container['isApplied'] = isset($data['isApplied']) ? $data['isApplied'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['applied'] = isset($data['applied']) ? $data['applied'] : null;
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
    *  参数名称。
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
    * @param string|null $parameterName 参数名称。
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
    *  修改前参数值。
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
    * @param string|null $oldValue 修改前参数值。
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
    *  修改后参数值。
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
    * @param string|null $newValue 修改后参数值。
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
    *  更新结果。
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
    * @param string|null $updateResult 更新结果。
    *
    * @return $this
    */
    public function setUpdateResult($updateResult)
    {
        $this->container['updateResult'] = $updateResult;
        return $this;
    }

    /**
    * Gets isApplied
    *  是否应用。 - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getIsApplied()
    {
        return $this->container['isApplied'];
    }

    /**
    * Sets isApplied
    *
    * @param bool|null $isApplied 是否应用。 - true：是。 - false：否。
    *
    * @return $this
    */
    public function setIsApplied($isApplied)
    {
        $this->container['isApplied'] = $isApplied;
        return $this;
    }

    /**
    * Gets updated
    *  修改时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 修改时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets applied
    *  应用时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string|null
    */
    public function getApplied()
    {
        return $this->container['applied'];
    }

    /**
    * Sets applied
    *
    * @param string|null $applied 应用时间。格式为“yyyy-mm-ddThh:mm:ssZ”。其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setApplied($applied)
    {
        $this->container['applied'] = $applied;
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

