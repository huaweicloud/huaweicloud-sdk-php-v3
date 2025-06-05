<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  订阅源ID，需保证全局唯一。指定ID的订阅源存在时则进行更新，否则进行创建；未指定时由系统自动生成。由小写字母、数字、中划线组成，必须字母或数字开头。
    * name  订阅的事件源名称
    * providerType  订阅的事件源的提供方类型
    * detail  订阅的事件源参数列表, 该字段序列化后总长度不超过1024字节
    * filter  订阅事件源的匹配过滤规则, 该字段序列化后总长度不超过2048字节
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'providerType' => 'string',
            'detail' => 'object',
            'filter' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  订阅源ID，需保证全局唯一。指定ID的订阅源存在时则进行更新，否则进行创建；未指定时由系统自动生成。由小写字母、数字、中划线组成，必须字母或数字开头。
    * name  订阅的事件源名称
    * providerType  订阅的事件源的提供方类型
    * detail  订阅的事件源参数列表, 该字段序列化后总长度不超过1024字节
    * filter  订阅事件源的匹配过滤规则, 该字段序列化后总长度不超过2048字节
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'providerType' => null,
        'detail' => null,
        'filter' => null
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
    * id  订阅源ID，需保证全局唯一。指定ID的订阅源存在时则进行更新，否则进行创建；未指定时由系统自动生成。由小写字母、数字、中划线组成，必须字母或数字开头。
    * name  订阅的事件源名称
    * providerType  订阅的事件源的提供方类型
    * detail  订阅的事件源参数列表, 该字段序列化后总长度不超过1024字节
    * filter  订阅事件源的匹配过滤规则, 该字段序列化后总长度不超过2048字节
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'providerType' => 'provider_type',
            'detail' => 'detail',
            'filter' => 'filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  订阅源ID，需保证全局唯一。指定ID的订阅源存在时则进行更新，否则进行创建；未指定时由系统自动生成。由小写字母、数字、中划线组成，必须字母或数字开头。
    * name  订阅的事件源名称
    * providerType  订阅的事件源的提供方类型
    * detail  订阅的事件源参数列表, 该字段序列化后总长度不超过1024字节
    * filter  订阅事件源的匹配过滤规则, 该字段序列化后总长度不超过2048字节
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'providerType' => 'setProviderType',
            'detail' => 'setDetail',
            'filter' => 'setFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  订阅源ID，需保证全局唯一。指定ID的订阅源存在时则进行更新，否则进行创建；未指定时由系统自动生成。由小写字母、数字、中划线组成，必须字母或数字开头。
    * name  订阅的事件源名称
    * providerType  订阅的事件源的提供方类型
    * detail  订阅的事件源参数列表, 该字段序列化后总长度不超过1024字节
    * filter  订阅事件源的匹配过滤规则, 该字段序列化后总长度不超过2048字节
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'providerType' => 'getProviderType',
            'detail' => 'getDetail',
            'filter' => 'getFilter'
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
    const PROVIDER_TYPE_CUSTOM = 'CUSTOM';
    const PROVIDER_TYPE_OFFICIAL = 'OFFICIAL';
    const PROVIDER_TYPE_PARTNER = 'PARTNER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderTypeAllowableValues()
    {
        return [
            self::PROVIDER_TYPE_CUSTOM,
            self::PROVIDER_TYPE_OFFICIAL,
            self::PROVIDER_TYPE_PARTNER,
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
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['providerType'] === null) {
            $invalidProperties[] = "'providerType' can't be null";
        }
            $allowedValues = $this->getProviderTypeAllowableValues();
                if (!is_null($this->container['providerType']) && !in_array($this->container['providerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
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
    *  订阅源ID，需保证全局唯一。指定ID的订阅源存在时则进行更新，否则进行创建；未指定时由系统自动生成。由小写字母、数字、中划线组成，必须字母或数字开头。
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
    * @param string|null $id 订阅源ID，需保证全局唯一。指定ID的订阅源存在时则进行更新，否则进行创建；未指定时由系统自动生成。由小写字母、数字、中划线组成，必须字母或数字开头。
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
    *  订阅的事件源名称
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
    * @param string $name 订阅的事件源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets providerType
    *  订阅的事件源的提供方类型
    *
    * @return string
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param string $providerType 订阅的事件源的提供方类型
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets detail
    *  订阅的事件源参数列表, 该字段序列化后总长度不超过1024字节
    *
    * @return object|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param object|null $detail 订阅的事件源参数列表, 该字段序列化后总长度不超过1024字节
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets filter
    *  订阅事件源的匹配过滤规则, 该字段序列化后总长度不超过2048字节
    *
    * @return object
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param object $filter 订阅事件源的匹配过滤规则, 该字段序列化后总长度不超过2048字节
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
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

