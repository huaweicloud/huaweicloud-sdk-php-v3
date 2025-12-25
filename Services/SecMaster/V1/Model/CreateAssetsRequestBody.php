<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAssetsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAssetsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  操作连接的名称
    * description  操作连接的描述信息
    * componentId  操作连接所属的插件id
    * componentVersionId  操作连接所属的插件版本id
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'componentId' => 'string',
            'componentVersionId' => 'string',
            'config' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  操作连接的名称
    * description  操作连接的描述信息
    * componentId  操作连接所属的插件id
    * componentVersionId  操作连接所属的插件版本id
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'componentId' => null,
        'componentVersionId' => null,
        'config' => null
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
    * name  操作连接的名称
    * description  操作连接的描述信息
    * componentId  操作连接所属的插件id
    * componentVersionId  操作连接所属的插件版本id
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'componentId' => 'component_id',
            'componentVersionId' => 'component_version_id',
            'config' => 'config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  操作连接的名称
    * description  操作连接的描述信息
    * componentId  操作连接所属的插件id
    * componentVersionId  操作连接所属的插件版本id
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'componentId' => 'setComponentId',
            'componentVersionId' => 'setComponentVersionId',
            'config' => 'setConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  操作连接的名称
    * description  操作连接的描述信息
    * componentId  操作连接所属的插件id
    * componentVersionId  操作连接所属的插件版本id
    * config  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'componentId' => 'getComponentId',
            'componentVersionId' => 'getComponentVersionId',
            'config' => 'getConfig'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['componentVersionId'] = isset($data['componentVersionId']) ? $data['componentVersionId'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
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
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['componentId'] === null) {
            $invalidProperties[] = "'componentId' can't be null";
        }
            if ((mb_strlen($this->container['componentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['componentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['componentVersionId'] === null) {
            $invalidProperties[] = "'componentVersionId' can't be null";
        }
            if ((mb_strlen($this->container['componentVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'componentVersionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['componentVersionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentVersionId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
            if ((mb_strlen($this->container['config']) > 1024)) {
                $invalidProperties[] = "invalid value for 'config', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['config']) < 0)) {
                $invalidProperties[] = "invalid value for 'config', the character length must be bigger than or equal to 0.";
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
    *  操作连接的名称
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
    * @param string $name 操作连接的名称
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
    *  操作连接的描述信息
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
    * @param string|null $description 操作连接的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets componentId
    *  操作连接所属的插件id
    *
    * @return string
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string $componentId 操作连接所属的插件id
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets componentVersionId
    *  操作连接所属的插件版本id
    *
    * @return string
    */
    public function getComponentVersionId()
    {
        return $this->container['componentVersionId'];
    }

    /**
    * Sets componentVersionId
    *
    * @param string $componentVersionId 操作连接所属的插件版本id
    *
    * @return $this
    */
    public function setComponentVersionId($componentVersionId)
    {
        $this->container['componentVersionId'] = $componentVersionId;
        return $this;
    }

    /**
    * Gets config
    *  具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @return string
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param string $config 具体的操作连接配置字符串，根据插件的操作连接schema配置对应字段值
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
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

