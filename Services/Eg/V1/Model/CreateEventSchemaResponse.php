<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEventSchemaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEventSchemaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件模型ID
    * name  事件模型名称，租户下唯一
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * providerType  提供方类型，OFFICIAL：官方事件源；CUSTOM：自定义事件源
    * format  事件模型格式
    * numberOfVersions  事件模型版本数
    * createdTime  创建时间
    * updatedTime  更新时间
    * version  事件模型当前版本号
    * definition  事件模型内容定义
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'compatibility' => 'string',
            'providerType' => 'string',
            'format' => 'string',
            'numberOfVersions' => 'int',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'version' => 'int',
            'definition' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件模型ID
    * name  事件模型名称，租户下唯一
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * providerType  提供方类型，OFFICIAL：官方事件源；CUSTOM：自定义事件源
    * format  事件模型格式
    * numberOfVersions  事件模型版本数
    * createdTime  创建时间
    * updatedTime  更新时间
    * version  事件模型当前版本号
    * definition  事件模型内容定义
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'compatibility' => null,
        'providerType' => null,
        'format' => null,
        'numberOfVersions' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'version' => null,
        'definition' => null,
        'xRequestId' => null
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
    * id  事件模型ID
    * name  事件模型名称，租户下唯一
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * providerType  提供方类型，OFFICIAL：官方事件源；CUSTOM：自定义事件源
    * format  事件模型格式
    * numberOfVersions  事件模型版本数
    * createdTime  创建时间
    * updatedTime  更新时间
    * version  事件模型当前版本号
    * definition  事件模型内容定义
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'compatibility' => 'compatibility',
            'providerType' => 'provider_type',
            'format' => 'format',
            'numberOfVersions' => 'number_of_versions',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'version' => 'version',
            'definition' => 'definition',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件模型ID
    * name  事件模型名称，租户下唯一
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * providerType  提供方类型，OFFICIAL：官方事件源；CUSTOM：自定义事件源
    * format  事件模型格式
    * numberOfVersions  事件模型版本数
    * createdTime  创建时间
    * updatedTime  更新时间
    * version  事件模型当前版本号
    * definition  事件模型内容定义
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'compatibility' => 'setCompatibility',
            'providerType' => 'setProviderType',
            'format' => 'setFormat',
            'numberOfVersions' => 'setNumberOfVersions',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'version' => 'setVersion',
            'definition' => 'setDefinition',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件模型ID
    * name  事件模型名称，租户下唯一
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * providerType  提供方类型，OFFICIAL：官方事件源；CUSTOM：自定义事件源
    * format  事件模型格式
    * numberOfVersions  事件模型版本数
    * createdTime  创建时间
    * updatedTime  更新时间
    * version  事件模型当前版本号
    * definition  事件模型内容定义
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'compatibility' => 'getCompatibility',
            'providerType' => 'getProviderType',
            'format' => 'getFormat',
            'numberOfVersions' => 'getNumberOfVersions',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'version' => 'getVersion',
            'definition' => 'getDefinition',
            'xRequestId' => 'getXRequestId'
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
    const COMPATIBILITY_NONE = 'NONE';
    const PROVIDER_TYPE_OFFICIAL = 'OFFICIAL';
    const PROVIDER_TYPE_CUSTOM = 'CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompatibilityAllowableValues()
    {
        return [
            self::COMPATIBILITY_NONE,
        ];
    }

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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['compatibility'] = isset($data['compatibility']) ? $data['compatibility'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['numberOfVersions'] = isset($data['numberOfVersions']) ? $data['numberOfVersions'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCompatibilityAllowableValues();
                if (!is_null($this->container['compatibility']) && !in_array($this->container['compatibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compatibility', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  事件模型ID
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
    * @param string|null $id 事件模型ID
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
    *  事件模型名称，租户下唯一
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
    * @param string|null $name 事件模型名称，租户下唯一
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  事件模型描述
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
    * @param string|null $description 事件模型描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets compatibility
    *  事件模型兼容性
    *
    * @return string|null
    */
    public function getCompatibility()
    {
        return $this->container['compatibility'];
    }

    /**
    * Sets compatibility
    *
    * @param string|null $compatibility 事件模型兼容性
    *
    * @return $this
    */
    public function setCompatibility($compatibility)
    {
        $this->container['compatibility'] = $compatibility;
        return $this;
    }

    /**
    * Gets providerType
    *  提供方类型，OFFICIAL：官方事件源；CUSTOM：自定义事件源
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
    * @param string|null $providerType 提供方类型，OFFICIAL：官方事件源；CUSTOM：自定义事件源
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets format
    *  事件模型格式
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 事件模型格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets numberOfVersions
    *  事件模型版本数
    *
    * @return int|null
    */
    public function getNumberOfVersions()
    {
        return $this->container['numberOfVersions'];
    }

    /**
    * Sets numberOfVersions
    *
    * @param int|null $numberOfVersions 事件模型版本数
    *
    * @return $this
    */
    public function setNumberOfVersions($numberOfVersions)
    {
        $this->container['numberOfVersions'] = $numberOfVersions;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
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
    * @param string|null $createdTime 创建时间
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
    *  更新时间
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
    * @param string|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets version
    *  事件模型当前版本号
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 事件模型当前版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets definition
    *  事件模型内容定义
    *
    * @return string|null
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string|null $definition 事件模型内容定义
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

