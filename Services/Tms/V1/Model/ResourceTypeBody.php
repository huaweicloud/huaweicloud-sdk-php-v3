<?php

namespace HuaweiCloud\SDK\Tms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceTypeBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceTypeBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源类型
    * resourceTypeI18nDisplayName  资源类型显示名称，可以通过参数中“locale”设置语言。
    * regions  支持的region列表
    * global  是否是全局类型的资源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceTypeI18nDisplayName' => 'string',
            'regions' => 'string[]',
            'global' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源类型
    * resourceTypeI18nDisplayName  资源类型显示名称，可以通过参数中“locale”设置语言。
    * regions  支持的region列表
    * global  是否是全局类型的资源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceTypeI18nDisplayName' => null,
        'regions' => null,
        'global' => 'int32'
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
    * resourceType  资源类型
    * resourceTypeI18nDisplayName  资源类型显示名称，可以通过参数中“locale”设置语言。
    * regions  支持的region列表
    * global  是否是全局类型的资源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceTypeI18nDisplayName' => 'resource_type_i18n_display_name',
            'regions' => 'regions',
            'global' => 'global'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源类型
    * resourceTypeI18nDisplayName  资源类型显示名称，可以通过参数中“locale”设置语言。
    * regions  支持的region列表
    * global  是否是全局类型的资源
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceTypeI18nDisplayName' => 'setResourceTypeI18nDisplayName',
            'regions' => 'setRegions',
            'global' => 'setGlobal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源类型
    * resourceTypeI18nDisplayName  资源类型显示名称，可以通过参数中“locale”设置语言。
    * regions  支持的region列表
    * global  是否是全局类型的资源
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceTypeI18nDisplayName' => 'getResourceTypeI18nDisplayName',
            'regions' => 'getRegions',
            'global' => 'getGlobal'
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceTypeI18nDisplayName'] = isset($data['resourceTypeI18nDisplayName']) ? $data['resourceTypeI18nDisplayName'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['global'] = isset($data['global']) ? $data['global'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['resourceTypeI18nDisplayName'] === null) {
            $invalidProperties[] = "'resourceTypeI18nDisplayName' can't be null";
        }
        if ($this->container['regions'] === null) {
            $invalidProperties[] = "'regions' can't be null";
        }
        if ($this->container['global'] === null) {
            $invalidProperties[] = "'global' can't be null";
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
    * Gets resourceType
    *  资源类型
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceTypeI18nDisplayName
    *  资源类型显示名称，可以通过参数中“locale”设置语言。
    *
    * @return string
    */
    public function getResourceTypeI18nDisplayName()
    {
        return $this->container['resourceTypeI18nDisplayName'];
    }

    /**
    * Sets resourceTypeI18nDisplayName
    *
    * @param string $resourceTypeI18nDisplayName 资源类型显示名称，可以通过参数中“locale”设置语言。
    *
    * @return $this
    */
    public function setResourceTypeI18nDisplayName($resourceTypeI18nDisplayName)
    {
        $this->container['resourceTypeI18nDisplayName'] = $resourceTypeI18nDisplayName;
        return $this;
    }

    /**
    * Gets regions
    *  支持的region列表
    *
    * @return string[]
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param string[] $regions 支持的region列表
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets global
    *  是否是全局类型的资源
    *
    * @return bool
    */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
    * Sets global
    *
    * @param bool $global 是否是全局类型的资源
    *
    * @return $this
    */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;
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

