<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParameterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParameterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数ID
    * name  配置名称
    * defaultValue  默认值
    * valueType  配置值类型
    * runningValue  集群当前运行的配置值
    * unit  单位
    * reboot  是否需要重启生效
    * valueRange  配置值取值范围
    * description  配置描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'defaultValue' => 'string',
            'valueType' => 'string',
            'runningValue' => 'string',
            'unit' => 'string',
            'reboot' => 'bool',
            'valueRange' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数ID
    * name  配置名称
    * defaultValue  默认值
    * valueType  配置值类型
    * runningValue  集群当前运行的配置值
    * unit  单位
    * reboot  是否需要重启生效
    * valueRange  配置值取值范围
    * description  配置描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'defaultValue' => null,
        'valueType' => null,
        'runningValue' => null,
        'unit' => null,
        'reboot' => null,
        'valueRange' => null,
        'description' => null
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
    * id  参数ID
    * name  配置名称
    * defaultValue  默认值
    * valueType  配置值类型
    * runningValue  集群当前运行的配置值
    * unit  单位
    * reboot  是否需要重启生效
    * valueRange  配置值取值范围
    * description  配置描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'defaultValue' => 'default_value',
            'valueType' => 'value_type',
            'runningValue' => 'running_value',
            'unit' => 'unit',
            'reboot' => 'reboot',
            'valueRange' => 'value_range',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数ID
    * name  配置名称
    * defaultValue  默认值
    * valueType  配置值类型
    * runningValue  集群当前运行的配置值
    * unit  单位
    * reboot  是否需要重启生效
    * valueRange  配置值取值范围
    * description  配置描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'defaultValue' => 'setDefaultValue',
            'valueType' => 'setValueType',
            'runningValue' => 'setRunningValue',
            'unit' => 'setUnit',
            'reboot' => 'setReboot',
            'valueRange' => 'setValueRange',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数ID
    * name  配置名称
    * defaultValue  默认值
    * valueType  配置值类型
    * runningValue  集群当前运行的配置值
    * unit  单位
    * reboot  是否需要重启生效
    * valueRange  配置值取值范围
    * description  配置描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'defaultValue' => 'getDefaultValue',
            'valueType' => 'getValueType',
            'runningValue' => 'getRunningValue',
            'unit' => 'getUnit',
            'reboot' => 'getReboot',
            'valueRange' => 'getValueRange',
            'description' => 'getDescription'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['runningValue'] = isset($data['runningValue']) ? $data['runningValue'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['reboot'] = isset($data['reboot']) ? $data['reboot'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
        if ($this->container['defaultValue'] === null) {
            $invalidProperties[] = "'defaultValue' can't be null";
        }
        if ($this->container['valueType'] === null) {
            $invalidProperties[] = "'valueType' can't be null";
        }
        if ($this->container['runningValue'] === null) {
            $invalidProperties[] = "'runningValue' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['reboot'] === null) {
            $invalidProperties[] = "'reboot' can't be null";
        }
        if ($this->container['valueRange'] === null) {
            $invalidProperties[] = "'valueRange' can't be null";
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
    * Gets id
    *  参数ID
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
    * @param string|null $id 参数ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  配置名称
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
    * @param string $name 配置名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets defaultValue
    *  默认值
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
    * @param string $defaultValue 默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets valueType
    *  配置值类型
    *
    * @return string
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string $valueType 配置值类型
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets runningValue
    *  集群当前运行的配置值
    *
    * @return string
    */
    public function getRunningValue()
    {
        return $this->container['runningValue'];
    }

    /**
    * Sets runningValue
    *
    * @param string $runningValue 集群当前运行的配置值
    *
    * @return $this
    */
    public function setRunningValue($runningValue)
    {
        $this->container['runningValue'] = $runningValue;
        return $this;
    }

    /**
    * Gets unit
    *  单位
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit 单位
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets reboot
    *  是否需要重启生效
    *
    * @return bool
    */
    public function getReboot()
    {
        return $this->container['reboot'];
    }

    /**
    * Sets reboot
    *
    * @param bool $reboot 是否需要重启生效
    *
    * @return $this
    */
    public function setReboot($reboot)
    {
        $this->container['reboot'] = $reboot;
        return $this;
    }

    /**
    * Gets valueRange
    *  配置值取值范围
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
    * @param string $valueRange 配置值取值范围
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets description
    *  配置描述信息
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
    * @param string $description 配置描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

