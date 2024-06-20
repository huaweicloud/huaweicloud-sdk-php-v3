<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteBasicPluginRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteBasicPluginRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  租户ID
    * pluginName  需要删除的插件名
    * type  删除类型，all 代表删除整个插件，single代表删除单个插件版本
    * version  需要删除的插件版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'pluginName' => 'string',
            'type' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  租户ID
    * pluginName  需要删除的插件名
    * type  删除类型，all 代表删除整个插件，single代表删除单个插件版本
    * version  需要删除的插件版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'pluginName' => null,
        'type' => null,
        'version' => null
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
    * domainId  租户ID
    * pluginName  需要删除的插件名
    * type  删除类型，all 代表删除整个插件，single代表删除单个插件版本
    * version  需要删除的插件版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'pluginName' => 'plugin_name',
            'type' => 'type',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  租户ID
    * pluginName  需要删除的插件名
    * type  删除类型，all 代表删除整个插件，single代表删除单个插件版本
    * version  需要删除的插件版本
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'pluginName' => 'setPluginName',
            'type' => 'setType',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  租户ID
    * pluginName  需要删除的插件名
    * type  删除类型，all 代表删除整个插件，single代表删除单个插件版本
    * version  需要删除的插件版本
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'pluginName' => 'getPluginName',
            'type' => 'getType',
            'version' => 'getVersion'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['pluginName'] === null) {
            $invalidProperties[] = "'pluginName' can't be null";
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
    * Gets domainId
    *  租户ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets pluginName
    *  需要删除的插件名
    *
    * @return string
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string $pluginName 需要删除的插件名
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets type
    *  删除类型，all 代表删除整个插件，single代表删除单个插件版本
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
    * @param string $type 删除类型，all 代表删除整个插件，single代表删除单个插件版本
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
    *  需要删除的插件版本
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
    * @param string|null $version 需要删除的插件版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

