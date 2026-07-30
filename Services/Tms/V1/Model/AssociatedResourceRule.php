<?php

namespace HuaweiCloud\SDK\Tms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociatedResourceRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociatedResourceRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * settingName  规则的配置名称
    * tagKeys  规则作的用标签范围。如果为空则表示对全部标签生效。
    * existingResourceStatus  特性开关，规则是否在存量资源生效。
    * autoDeleteStatus  特性开关，主资源与子资源关系解除后是否自动删除子资源中与主资源标签键一致的标签。
    * status  规则状态
    * regionId  规则生效的区域Id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'settingName' => 'string',
            'tagKeys' => 'string[]',
            'existingResourceStatus' => 'string',
            'autoDeleteStatus' => 'string',
            'status' => 'string',
            'regionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * settingName  规则的配置名称
    * tagKeys  规则作的用标签范围。如果为空则表示对全部标签生效。
    * existingResourceStatus  特性开关，规则是否在存量资源生效。
    * autoDeleteStatus  特性开关，主资源与子资源关系解除后是否自动删除子资源中与主资源标签键一致的标签。
    * status  规则状态
    * regionId  规则生效的区域Id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'settingName' => null,
        'tagKeys' => null,
        'existingResourceStatus' => null,
        'autoDeleteStatus' => null,
        'status' => null,
        'regionId' => null
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
    * settingName  规则的配置名称
    * tagKeys  规则作的用标签范围。如果为空则表示对全部标签生效。
    * existingResourceStatus  特性开关，规则是否在存量资源生效。
    * autoDeleteStatus  特性开关，主资源与子资源关系解除后是否自动删除子资源中与主资源标签键一致的标签。
    * status  规则状态
    * regionId  规则生效的区域Id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'settingName' => 'setting_name',
            'tagKeys' => 'tag_keys',
            'existingResourceStatus' => 'existing_resource_status',
            'autoDeleteStatus' => 'auto_delete_status',
            'status' => 'status',
            'regionId' => 'region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * settingName  规则的配置名称
    * tagKeys  规则作的用标签范围。如果为空则表示对全部标签生效。
    * existingResourceStatus  特性开关，规则是否在存量资源生效。
    * autoDeleteStatus  特性开关，主资源与子资源关系解除后是否自动删除子资源中与主资源标签键一致的标签。
    * status  规则状态
    * regionId  规则生效的区域Id
    *
    * @var string[]
    */
    protected static $setters = [
            'settingName' => 'setSettingName',
            'tagKeys' => 'setTagKeys',
            'existingResourceStatus' => 'setExistingResourceStatus',
            'autoDeleteStatus' => 'setAutoDeleteStatus',
            'status' => 'setStatus',
            'regionId' => 'setRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * settingName  规则的配置名称
    * tagKeys  规则作的用标签范围。如果为空则表示对全部标签生效。
    * existingResourceStatus  特性开关，规则是否在存量资源生效。
    * autoDeleteStatus  特性开关，主资源与子资源关系解除后是否自动删除子资源中与主资源标签键一致的标签。
    * status  规则状态
    * regionId  规则生效的区域Id
    *
    * @var string[]
    */
    protected static $getters = [
            'settingName' => 'getSettingName',
            'tagKeys' => 'getTagKeys',
            'existingResourceStatus' => 'getExistingResourceStatus',
            'autoDeleteStatus' => 'getAutoDeleteStatus',
            'status' => 'getStatus',
            'regionId' => 'getRegionId'
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
        $this->container['settingName'] = isset($data['settingName']) ? $data['settingName'] : null;
        $this->container['tagKeys'] = isset($data['tagKeys']) ? $data['tagKeys'] : null;
        $this->container['existingResourceStatus'] = isset($data['existingResourceStatus']) ? $data['existingResourceStatus'] : null;
        $this->container['autoDeleteStatus'] = isset($data['autoDeleteStatus']) ? $data['autoDeleteStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['settingName'] === null) {
            $invalidProperties[] = "'settingName' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
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
    * Gets settingName
    *  规则的配置名称
    *
    * @return string
    */
    public function getSettingName()
    {
        return $this->container['settingName'];
    }

    /**
    * Sets settingName
    *
    * @param string $settingName 规则的配置名称
    *
    * @return $this
    */
    public function setSettingName($settingName)
    {
        $this->container['settingName'] = $settingName;
        return $this;
    }

    /**
    * Gets tagKeys
    *  规则作的用标签范围。如果为空则表示对全部标签生效。
    *
    * @return string[]|null
    */
    public function getTagKeys()
    {
        return $this->container['tagKeys'];
    }

    /**
    * Sets tagKeys
    *
    * @param string[]|null $tagKeys 规则作的用标签范围。如果为空则表示对全部标签生效。
    *
    * @return $this
    */
    public function setTagKeys($tagKeys)
    {
        $this->container['tagKeys'] = $tagKeys;
        return $this;
    }

    /**
    * Gets existingResourceStatus
    *  特性开关，规则是否在存量资源生效。
    *
    * @return string|null
    */
    public function getExistingResourceStatus()
    {
        return $this->container['existingResourceStatus'];
    }

    /**
    * Sets existingResourceStatus
    *
    * @param string|null $existingResourceStatus 特性开关，规则是否在存量资源生效。
    *
    * @return $this
    */
    public function setExistingResourceStatus($existingResourceStatus)
    {
        $this->container['existingResourceStatus'] = $existingResourceStatus;
        return $this;
    }

    /**
    * Gets autoDeleteStatus
    *  特性开关，主资源与子资源关系解除后是否自动删除子资源中与主资源标签键一致的标签。
    *
    * @return string|null
    */
    public function getAutoDeleteStatus()
    {
        return $this->container['autoDeleteStatus'];
    }

    /**
    * Sets autoDeleteStatus
    *
    * @param string|null $autoDeleteStatus 特性开关，主资源与子资源关系解除后是否自动删除子资源中与主资源标签键一致的标签。
    *
    * @return $this
    */
    public function setAutoDeleteStatus($autoDeleteStatus)
    {
        $this->container['autoDeleteStatus'] = $autoDeleteStatus;
        return $this;
    }

    /**
    * Gets status
    *  规则状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 规则状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets regionId
    *  规则生效的区域Id
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 规则生效的区域Id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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

