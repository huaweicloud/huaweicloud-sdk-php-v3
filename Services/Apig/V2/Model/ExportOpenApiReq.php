<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportOpenApiReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportOpenApiReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * envId  API分组发布的环境ID
    * groupId  API分组ID
    * define  导出API的定义范围： - spec：基础定义，只包括api前端定义 - proxy：全量定义，包括api前后端定义 - all：扩展定义，包括api前后端定义以及流控、访问控制、自定义认证等扩展定义 - dev：开发定义，包括未发布的api的前后端定义
    * type  导出的API定义的格式
    * version  导出的API定义版本，默认为当前时间
    * apis  导出的API ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'envId' => 'string',
            'groupId' => 'string',
            'define' => 'string',
            'type' => 'string',
            'version' => 'string',
            'apis' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * envId  API分组发布的环境ID
    * groupId  API分组ID
    * define  导出API的定义范围： - spec：基础定义，只包括api前端定义 - proxy：全量定义，包括api前后端定义 - all：扩展定义，包括api前后端定义以及流控、访问控制、自定义认证等扩展定义 - dev：开发定义，包括未发布的api的前后端定义
    * type  导出的API定义的格式
    * version  导出的API定义版本，默认为当前时间
    * apis  导出的API ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'envId' => null,
        'groupId' => null,
        'define' => null,
        'type' => null,
        'version' => null,
        'apis' => null
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
    * envId  API分组发布的环境ID
    * groupId  API分组ID
    * define  导出API的定义范围： - spec：基础定义，只包括api前端定义 - proxy：全量定义，包括api前后端定义 - all：扩展定义，包括api前后端定义以及流控、访问控制、自定义认证等扩展定义 - dev：开发定义，包括未发布的api的前后端定义
    * type  导出的API定义的格式
    * version  导出的API定义版本，默认为当前时间
    * apis  导出的API ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'envId' => 'env_id',
            'groupId' => 'group_id',
            'define' => 'define',
            'type' => 'type',
            'version' => 'version',
            'apis' => 'apis'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * envId  API分组发布的环境ID
    * groupId  API分组ID
    * define  导出API的定义范围： - spec：基础定义，只包括api前端定义 - proxy：全量定义，包括api前后端定义 - all：扩展定义，包括api前后端定义以及流控、访问控制、自定义认证等扩展定义 - dev：开发定义，包括未发布的api的前后端定义
    * type  导出的API定义的格式
    * version  导出的API定义版本，默认为当前时间
    * apis  导出的API ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'envId' => 'setEnvId',
            'groupId' => 'setGroupId',
            'define' => 'setDefine',
            'type' => 'setType',
            'version' => 'setVersion',
            'apis' => 'setApis'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * envId  API分组发布的环境ID
    * groupId  API分组ID
    * define  导出API的定义范围： - spec：基础定义，只包括api前端定义 - proxy：全量定义，包括api前后端定义 - all：扩展定义，包括api前后端定义以及流控、访问控制、自定义认证等扩展定义 - dev：开发定义，包括未发布的api的前后端定义
    * type  导出的API定义的格式
    * version  导出的API定义版本，默认为当前时间
    * apis  导出的API ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'envId' => 'getEnvId',
            'groupId' => 'getGroupId',
            'define' => 'getDefine',
            'type' => 'getType',
            'version' => 'getVersion',
            'apis' => 'getApis'
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
    const DEFINE_SPEC = 'spec';
    const DEFINE_PROXY = 'proxy';
    const DEFINE_ALL = 'all';
    const DEFINE_DEV = 'dev';
    const TYPE_JSON = 'json';
    const TYPE_YAML = 'yaml';
    const TYPE_YML = 'yml';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDefineAllowableValues()
    {
        return [
            self::DEFINE_SPEC,
            self::DEFINE_PROXY,
            self::DEFINE_ALL,
            self::DEFINE_DEV,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_JSON,
            self::TYPE_YAML,
            self::TYPE_YML,
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
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['define'] = isset($data['define']) ? $data['define'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['apis'] = isset($data['apis']) ? $data['apis'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            $allowedValues = $this->getDefineAllowableValues();
                if (!is_null($this->container['define']) && !in_array($this->container['define'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'define', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets envId
    *  API分组发布的环境ID
    *
    * @return string
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string $envId API分组发布的环境ID
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets groupId
    *  API分组ID
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId API分组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets define
    *  导出API的定义范围： - spec：基础定义，只包括api前端定义 - proxy：全量定义，包括api前后端定义 - all：扩展定义，包括api前后端定义以及流控、访问控制、自定义认证等扩展定义 - dev：开发定义，包括未发布的api的前后端定义
    *
    * @return string|null
    */
    public function getDefine()
    {
        return $this->container['define'];
    }

    /**
    * Sets define
    *
    * @param string|null $define 导出API的定义范围： - spec：基础定义，只包括api前端定义 - proxy：全量定义，包括api前后端定义 - all：扩展定义，包括api前后端定义以及流控、访问控制、自定义认证等扩展定义 - dev：开发定义，包括未发布的api的前后端定义
    *
    * @return $this
    */
    public function setDefine($define)
    {
        $this->container['define'] = $define;
        return $this;
    }

    /**
    * Gets type
    *  导出的API定义的格式
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 导出的API定义的格式
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  导出的API定义版本，默认为当前时间
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 导出的API定义版本，默认为当前时间
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets apis
    *  导出的API ID列表
    *
    * @return string[]|null
    */
    public function getApis()
    {
        return $this->container['apis'];
    }

    /**
    * Sets apis
    *
    * @param string[]|null $apis 导出的API ID列表
    *
    * @return $this
    */
    public function setApis($apis)
    {
        $this->container['apis'] = $apis;
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

