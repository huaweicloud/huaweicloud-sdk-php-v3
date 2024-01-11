<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParameterConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParameterConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名称
    * value  参数值
    * defaultValue  参数默认值
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * isNeedRestart  是否需要重启。默认为true, “false”表示否。“true”表示是。
    * description  参数描述。
    * createdAt  创建时间，例如：2023-01-20T07:18:26Z
    * updatedAt  更新时间，例如：2023-03-01T09:42:02Z
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'defaultValue' => 'string',
            'valueRange' => 'string',
            'isNeedRestart' => 'bool',
            'description' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名称
    * value  参数值
    * defaultValue  参数默认值
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * isNeedRestart  是否需要重启。默认为true, “false”表示否。“true”表示是。
    * description  参数描述。
    * createdAt  创建时间，例如：2023-01-20T07:18:26Z
    * updatedAt  更新时间，例如：2023-03-01T09:42:02Z
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'defaultValue' => null,
        'valueRange' => null,
        'isNeedRestart' => null,
        'description' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * name  参数名称
    * value  参数值
    * defaultValue  参数默认值
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * isNeedRestart  是否需要重启。默认为true, “false”表示否。“true”表示是。
    * description  参数描述。
    * createdAt  创建时间，例如：2023-01-20T07:18:26Z
    * updatedAt  更新时间，例如：2023-03-01T09:42:02Z
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'defaultValue' => 'default_value',
            'valueRange' => 'value_range',
            'isNeedRestart' => 'is_need_restart',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名称
    * value  参数值
    * defaultValue  参数默认值
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * isNeedRestart  是否需要重启。默认为true, “false”表示否。“true”表示是。
    * description  参数描述。
    * createdAt  创建时间，例如：2023-01-20T07:18:26Z
    * updatedAt  更新时间，例如：2023-03-01T09:42:02Z
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'defaultValue' => 'setDefaultValue',
            'valueRange' => 'setValueRange',
            'isNeedRestart' => 'setIsNeedRestart',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名称
    * value  参数值
    * defaultValue  参数默认值
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * isNeedRestart  是否需要重启。默认为true, “false”表示否。“true”表示是。
    * description  参数描述。
    * createdAt  创建时间，例如：2023-01-20T07:18:26Z
    * updatedAt  更新时间，例如：2023-03-01T09:42:02Z
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'defaultValue' => 'getDefaultValue',
            'valueRange' => 'getValueRange',
            'isNeedRestart' => 'getIsNeedRestart',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['isNeedRestart'] = isset($data['isNeedRestart']) ? $data['isNeedRestart'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['defaultValue'] === null) {
            $invalidProperties[] = "'defaultValue' can't be null";
        }
        if ($this->container['valueRange'] === null) {
            $invalidProperties[] = "'valueRange' can't be null";
        }
        if ($this->container['isNeedRestart'] === null) {
            $invalidProperties[] = "'isNeedRestart' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
    *  参数名称
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
    * @param string $name 参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  参数值
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 参数值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets defaultValue
    *  参数默认值
    *
    * @return string
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string $defaultValue 参数默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets valueRange
    *  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    *
    * @return string
    */
    public function getValueRange()
    {
        return $this->container['valueRange'];
    }

    /**
    * Sets valueRange
    *
    * @param string $valueRange 参数值范围，如Integer取值0-1、Boolean取值true|false等。
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets isNeedRestart
    *  是否需要重启。默认为true, “false”表示否。“true”表示是。
    *
    * @return bool
    */
    public function getIsNeedRestart()
    {
        return $this->container['isNeedRestart'];
    }

    /**
    * Sets isNeedRestart
    *
    * @param bool $isNeedRestart 是否需要重启。默认为true, “false”表示否。“true”表示是。
    *
    * @return $this
    */
    public function setIsNeedRestart($isNeedRestart)
    {
        $this->container['isNeedRestart'] = $isNeedRestart;
        return $this;
    }

    /**
    * Gets description
    *  参数描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 参数描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间，例如：2023-01-20T07:18:26Z
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间，例如：2023-01-20T07:18:26Z
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间，例如：2023-03-01T09:42:02Z
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间，例如：2023-03-01T09:42:02Z
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

