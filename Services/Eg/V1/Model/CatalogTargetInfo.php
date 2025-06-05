<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogTargetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogTargetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件目标分类ID
    * name  事件目标分类名称
    * label  事件目标分类名称展示说明
    * description  事件目标分类描述
    * providerType  提供方类型，OFFICIAL：官方云服务事件目标；CUSTOM：第三方事件目标
    * parameters  parameters
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'label' => 'string',
            'description' => 'string',
            'providerType' => 'string',
            'parameters' => 'object[]',
            'createdTime' => 'string',
            'updatedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件目标分类ID
    * name  事件目标分类名称
    * label  事件目标分类名称展示说明
    * description  事件目标分类描述
    * providerType  提供方类型，OFFICIAL：官方云服务事件目标；CUSTOM：第三方事件目标
    * parameters  parameters
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'label' => null,
        'description' => null,
        'providerType' => null,
        'parameters' => null,
        'createdTime' => null,
        'updatedTime' => null
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
    * id  事件目标分类ID
    * name  事件目标分类名称
    * label  事件目标分类名称展示说明
    * description  事件目标分类描述
    * providerType  提供方类型，OFFICIAL：官方云服务事件目标；CUSTOM：第三方事件目标
    * parameters  parameters
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'label' => 'label',
            'description' => 'description',
            'providerType' => 'provider_type',
            'parameters' => 'parameters',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件目标分类ID
    * name  事件目标分类名称
    * label  事件目标分类名称展示说明
    * description  事件目标分类描述
    * providerType  提供方类型，OFFICIAL：官方云服务事件目标；CUSTOM：第三方事件目标
    * parameters  parameters
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'label' => 'setLabel',
            'description' => 'setDescription',
            'providerType' => 'setProviderType',
            'parameters' => 'setParameters',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件目标分类ID
    * name  事件目标分类名称
    * label  事件目标分类名称展示说明
    * description  事件目标分类描述
    * providerType  提供方类型，OFFICIAL：官方云服务事件目标；CUSTOM：第三方事件目标
    * parameters  parameters
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'label' => 'getLabel',
            'description' => 'getDescription',
            'providerType' => 'getProviderType',
            'parameters' => 'getParameters',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime'
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
    const PROVIDER_TYPE_OFFICIAL = 'OFFICIAL';
    const PROVIDER_TYPE_CUSTOM = 'CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderTypeAllowableValues()
    {
        return [
            self::PROVIDER_TYPE_OFFICIAL,
            self::PROVIDER_TYPE_CUSTOM,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 255)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            $allowedValues = $this->getProviderTypeAllowableValues();
                if (!is_null($this->container['providerType']) && !in_array($this->container['providerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerType', must be one of '%s'",
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
    * Gets id
    *  事件目标分类ID
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
    * @param string|null $id 事件目标分类ID
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
    *  事件目标分类名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 事件目标分类名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets label
    *  事件目标分类名称展示说明
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 事件目标分类名称展示说明
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets description
    *  事件目标分类描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 事件目标分类描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets providerType
    *  提供方类型，OFFICIAL：官方云服务事件目标；CUSTOM：第三方事件目标
    *
    * @return string|null
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param string|null $providerType 提供方类型，OFFICIAL：官方云服务事件目标；CUSTOM：第三方事件目标
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets parameters
    *  parameters
    *
    * @return object[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param object[]|null $parameters parameters
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建UTC时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建UTC时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新UTC时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 更新UTC时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
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

