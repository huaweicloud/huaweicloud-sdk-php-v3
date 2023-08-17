<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * required  是否必须
    * visible  是否可见
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramtype  流水线参数类型
    * displayType  流水线参数展示类型
    * displayName  流水线参数展示名字
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    * limits  array类型数据
    * constraints  array类型数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'required' => 'string',
            'visible' => 'string',
            'name' => 'string',
            'value' => 'string',
            'description' => 'string',
            'paramtype' => 'string',
            'displayType' => 'string',
            'displayName' => 'string',
            'isStatic' => 'bool',
            'isDefault' => 'bool',
            'limits' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\ParamTypeLimits[]',
            'constraints' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\Constraint[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * required  是否必须
    * visible  是否可见
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramtype  流水线参数类型
    * displayType  流水线参数展示类型
    * displayName  流水线参数展示名字
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    * limits  array类型数据
    * constraints  array类型数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'required' => null,
        'visible' => null,
        'name' => null,
        'value' => null,
        'description' => null,
        'paramtype' => null,
        'displayType' => null,
        'displayName' => null,
        'isStatic' => null,
        'isDefault' => null,
        'limits' => null,
        'constraints' => null
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
    * required  是否必须
    * visible  是否可见
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramtype  流水线参数类型
    * displayType  流水线参数展示类型
    * displayName  流水线参数展示名字
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    * limits  array类型数据
    * constraints  array类型数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'required' => 'required',
            'visible' => 'visible',
            'name' => 'name',
            'value' => 'value',
            'description' => 'description',
            'paramtype' => 'paramtype',
            'displayType' => 'display_type',
            'displayName' => 'display_name',
            'isStatic' => 'is_static',
            'isDefault' => 'is_default',
            'limits' => 'limits',
            'constraints' => 'constraints'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * required  是否必须
    * visible  是否可见
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramtype  流水线参数类型
    * displayType  流水线参数展示类型
    * displayName  流水线参数展示名字
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    * limits  array类型数据
    * constraints  array类型数据
    *
    * @var string[]
    */
    protected static $setters = [
            'required' => 'setRequired',
            'visible' => 'setVisible',
            'name' => 'setName',
            'value' => 'setValue',
            'description' => 'setDescription',
            'paramtype' => 'setParamtype',
            'displayType' => 'setDisplayType',
            'displayName' => 'setDisplayName',
            'isStatic' => 'setIsStatic',
            'isDefault' => 'setIsDefault',
            'limits' => 'setLimits',
            'constraints' => 'setConstraints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * required  是否必须
    * visible  是否可见
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramtype  流水线参数类型
    * displayType  流水线参数展示类型
    * displayName  流水线参数展示名字
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    * limits  array类型数据
    * constraints  array类型数据
    *
    * @var string[]
    */
    protected static $getters = [
            'required' => 'getRequired',
            'visible' => 'getVisible',
            'name' => 'getName',
            'value' => 'getValue',
            'description' => 'getDescription',
            'paramtype' => 'getParamtype',
            'displayType' => 'getDisplayType',
            'displayName' => 'getDisplayName',
            'isStatic' => 'getIsStatic',
            'isDefault' => 'getIsDefault',
            'limits' => 'getLimits',
            'constraints' => 'getConstraints'
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
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['paramtype'] = isset($data['paramtype']) ? $data['paramtype'] : null;
        $this->container['displayType'] = isset($data['displayType']) ? $data['displayType'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['isStatic'] = isset($data['isStatic']) ? $data['isStatic'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['required'] === null) {
            $invalidProperties[] = "'required' can't be null";
        }
        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['paramtype'] === null) {
            $invalidProperties[] = "'paramtype' can't be null";
        }
        if ($this->container['displayType'] === null) {
            $invalidProperties[] = "'displayType' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['isStatic'] === null) {
            $invalidProperties[] = "'isStatic' can't be null";
        }
        if ($this->container['isDefault'] === null) {
            $invalidProperties[] = "'isDefault' can't be null";
        }
        if ($this->container['limits'] === null) {
            $invalidProperties[] = "'limits' can't be null";
        }
        if ($this->container['constraints'] === null) {
            $invalidProperties[] = "'constraints' can't be null";
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
    * Gets required
    *  是否必须
    *
    * @return string
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param string $required 是否必须
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets visible
    *  是否可见
    *
    * @return string
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param string $visible 是否可见
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
        return $this;
    }

    /**
    * Gets name
    *  流水线参数名字
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
    * @param string $name 流水线参数名字
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
    *  流水线参数值
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
    * @param string $value 流水线参数值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets description
    *  流水线参数描述
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
    * @param string $description 流水线参数描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets paramtype
    *  流水线参数类型
    *
    * @return string
    */
    public function getParamtype()
    {
        return $this->container['paramtype'];
    }

    /**
    * Sets paramtype
    *
    * @param string $paramtype 流水线参数类型
    *
    * @return $this
    */
    public function setParamtype($paramtype)
    {
        $this->container['paramtype'] = $paramtype;
        return $this;
    }

    /**
    * Gets displayType
    *  流水线参数展示类型
    *
    * @return string
    */
    public function getDisplayType()
    {
        return $this->container['displayType'];
    }

    /**
    * Sets displayType
    *
    * @param string $displayType 流水线参数展示类型
    *
    * @return $this
    */
    public function setDisplayType($displayType)
    {
        $this->container['displayType'] = $displayType;
        return $this;
    }

    /**
    * Gets displayName
    *  流水线参数展示名字
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 流水线参数展示名字
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets isStatic
    *  是否静态参数
    *
    * @return bool
    */
    public function getIsStatic()
    {
        return $this->container['isStatic'];
    }

    /**
    * Sets isStatic
    *
    * @param bool $isStatic 是否静态参数
    *
    * @return $this
    */
    public function setIsStatic($isStatic)
    {
        $this->container['isStatic'] = $isStatic;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否默认参数
    *
    * @return bool
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool $isDefault 是否默认参数
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets limits
    *  array类型数据
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\ParamTypeLimits[]
    */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
    * Sets limits
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\ParamTypeLimits[] $limits array类型数据
    *
    * @return $this
    */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;
        return $this;
    }

    /**
    * Gets constraints
    *  array类型数据
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\Constraint[]
    */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
    * Sets constraints
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\Constraint[] $constraints array类型数据
    *
    * @return $this
    */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;
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

