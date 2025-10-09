<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackageOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PackageOptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 参数名称 **取值范围**： 不涉及
    * default  **参数解释**： 参数默认值，不指定时按默认值生效, 参数类型以实际返回为准，可能为integer,string或者boolean **取值范围**： 不涉及
    * validAt  **参数解释**： 参数生效方式 **取值范围**： - static：集群、节点池创建时生效，后续不可修改 - immediately：集群、节点池运行中时可以修改，修改后生效
    * empty  **参数解释**： 配置项是否可以为空 **取值范围**： - true：配置项为空时，不使用默认值，为空值 - false：配置项为空时，使用默认值
    * schema  **参数解释**： 参数分类 **取值范围**： 不涉及
    * type  **参数解释**： 参数类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'default' => 'object',
            'validAt' => 'string',
            'empty' => 'bool',
            'schema' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 参数名称 **取值范围**： 不涉及
    * default  **参数解释**： 参数默认值，不指定时按默认值生效, 参数类型以实际返回为准，可能为integer,string或者boolean **取值范围**： 不涉及
    * validAt  **参数解释**： 参数生效方式 **取值范围**： - static：集群、节点池创建时生效，后续不可修改 - immediately：集群、节点池运行中时可以修改，修改后生效
    * empty  **参数解释**： 配置项是否可以为空 **取值范围**： - true：配置项为空时，不使用默认值，为空值 - false：配置项为空时，使用默认值
    * schema  **参数解释**： 参数分类 **取值范围**： 不涉及
    * type  **参数解释**： 参数类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'default' => null,
        'validAt' => null,
        'empty' => null,
        'schema' => null,
        'type' => null
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
    * name  **参数解释**： 参数名称 **取值范围**： 不涉及
    * default  **参数解释**： 参数默认值，不指定时按默认值生效, 参数类型以实际返回为准，可能为integer,string或者boolean **取值范围**： 不涉及
    * validAt  **参数解释**： 参数生效方式 **取值范围**： - static：集群、节点池创建时生效，后续不可修改 - immediately：集群、节点池运行中时可以修改，修改后生效
    * empty  **参数解释**： 配置项是否可以为空 **取值范围**： - true：配置项为空时，不使用默认值，为空值 - false：配置项为空时，使用默认值
    * schema  **参数解释**： 参数分类 **取值范围**： 不涉及
    * type  **参数解释**： 参数类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'default' => 'default',
            'validAt' => 'validAt',
            'empty' => 'empty',
            'schema' => 'schema',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 参数名称 **取值范围**： 不涉及
    * default  **参数解释**： 参数默认值，不指定时按默认值生效, 参数类型以实际返回为准，可能为integer,string或者boolean **取值范围**： 不涉及
    * validAt  **参数解释**： 参数生效方式 **取值范围**： - static：集群、节点池创建时生效，后续不可修改 - immediately：集群、节点池运行中时可以修改，修改后生效
    * empty  **参数解释**： 配置项是否可以为空 **取值范围**： - true：配置项为空时，不使用默认值，为空值 - false：配置项为空时，使用默认值
    * schema  **参数解释**： 参数分类 **取值范围**： 不涉及
    * type  **参数解释**： 参数类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'default' => 'setDefault',
            'validAt' => 'setValidAt',
            'empty' => 'setEmpty',
            'schema' => 'setSchema',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 参数名称 **取值范围**： 不涉及
    * default  **参数解释**： 参数默认值，不指定时按默认值生效, 参数类型以实际返回为准，可能为integer,string或者boolean **取值范围**： 不涉及
    * validAt  **参数解释**： 参数生效方式 **取值范围**： - static：集群、节点池创建时生效，后续不可修改 - immediately：集群、节点池运行中时可以修改，修改后生效
    * empty  **参数解释**： 配置项是否可以为空 **取值范围**： - true：配置项为空时，不使用默认值，为空值 - false：配置项为空时，使用默认值
    * schema  **参数解释**： 参数分类 **取值范围**： 不涉及
    * type  **参数解释**： 参数类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'default' => 'getDefault',
            'validAt' => 'getValidAt',
            'empty' => 'getEmpty',
            'schema' => 'getSchema',
            'type' => 'getType'
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
    const VALID_AT__STATIC = 'static';
    const VALID_AT_IMMEDIATELY = 'immediately';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getValidAtAllowableValues()
    {
        return [
            self::VALID_AT__STATIC,
            self::VALID_AT_IMMEDIATELY,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['validAt'] = isset($data['validAt']) ? $data['validAt'] : null;
        $this->container['empty'] = isset($data['empty']) ? $data['empty'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['default'] === null) {
            $invalidProperties[] = "'default' can't be null";
        }
        if ($this->container['validAt'] === null) {
            $invalidProperties[] = "'validAt' can't be null";
        }
            $allowedValues = $this->getValidAtAllowableValues();
                if (!is_null($this->container['validAt']) && !in_array($this->container['validAt'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'validAt', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['empty'] === null) {
            $invalidProperties[] = "'empty' can't be null";
        }
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    *  **参数解释**： 参数名称 **取值范围**： 不涉及
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
    * @param string $name **参数解释**： 参数名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets default
    *  **参数解释**： 参数默认值，不指定时按默认值生效, 参数类型以实际返回为准，可能为integer,string或者boolean **取值范围**： 不涉及
    *
    * @return object
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param object $default **参数解释**： 参数默认值，不指定时按默认值生效, 参数类型以实际返回为准，可能为integer,string或者boolean **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets validAt
    *  **参数解释**： 参数生效方式 **取值范围**： - static：集群、节点池创建时生效，后续不可修改 - immediately：集群、节点池运行中时可以修改，修改后生效
    *
    * @return string
    */
    public function getValidAt()
    {
        return $this->container['validAt'];
    }

    /**
    * Sets validAt
    *
    * @param string $validAt **参数解释**： 参数生效方式 **取值范围**： - static：集群、节点池创建时生效，后续不可修改 - immediately：集群、节点池运行中时可以修改，修改后生效
    *
    * @return $this
    */
    public function setValidAt($validAt)
    {
        $this->container['validAt'] = $validAt;
        return $this;
    }

    /**
    * Gets empty
    *  **参数解释**： 配置项是否可以为空 **取值范围**： - true：配置项为空时，不使用默认值，为空值 - false：配置项为空时，使用默认值
    *
    * @return bool
    */
    public function getEmpty()
    {
        return $this->container['empty'];
    }

    /**
    * Sets empty
    *
    * @param bool $empty **参数解释**： 配置项是否可以为空 **取值范围**： - true：配置项为空时，不使用默认值，为空值 - false：配置项为空时，使用默认值
    *
    * @return $this
    */
    public function setEmpty($empty)
    {
        $this->container['empty'] = $empty;
        return $this;
    }

    /**
    * Gets schema
    *  **参数解释**： 参数分类 **取值范围**： 不涉及
    *
    * @return string
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string $schema **参数解释**： 参数分类 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 参数类型 **取值范围**： 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： 参数类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

