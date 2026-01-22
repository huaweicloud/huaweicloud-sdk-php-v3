<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetStatsConfigBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetStatsConfigBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configType  配置类别.0：热点统计类
    * resourceType  资源类型。domain:resource_name为域名，account:resource_name为账号
    * resourceName  资源名称为账号或域名。多个域名以英文逗号分隔
    * configInfo  配置信息.top指标仅支持ua、refer、url、origin url
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configType' => 'int',
            'resourceType' => 'string',
            'resourceName' => 'string',
            'configInfo' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configType  配置类别.0：热点统计类
    * resourceType  资源类型。domain:resource_name为域名，account:resource_name为账号
    * resourceName  资源名称为账号或域名。多个域名以英文逗号分隔
    * configInfo  配置信息.top指标仅支持ua、refer、url、origin url
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configType' => null,
        'resourceType' => null,
        'resourceName' => null,
        'configInfo' => null
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
    * configType  配置类别.0：热点统计类
    * resourceType  资源类型。domain:resource_name为域名，account:resource_name为账号
    * resourceName  资源名称为账号或域名。多个域名以英文逗号分隔
    * configInfo  配置信息.top指标仅支持ua、refer、url、origin url
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configType' => 'config_type',
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name',
            'configInfo' => 'config_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configType  配置类别.0：热点统计类
    * resourceType  资源类型。domain:resource_name为域名，account:resource_name为账号
    * resourceName  资源名称为账号或域名。多个域名以英文逗号分隔
    * configInfo  配置信息.top指标仅支持ua、refer、url、origin url
    *
    * @var string[]
    */
    protected static $setters = [
            'configType' => 'setConfigType',
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName',
            'configInfo' => 'setConfigInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configType  配置类别.0：热点统计类
    * resourceType  资源类型。domain:resource_name为域名，account:resource_name为账号
    * resourceName  资源名称为账号或域名。多个域名以英文逗号分隔
    * configInfo  配置信息.top指标仅支持ua、refer、url、origin url
    *
    * @var string[]
    */
    protected static $getters = [
            'configType' => 'getConfigType',
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName',
            'configInfo' => 'getConfigInfo'
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
        $this->container['configType'] = isset($data['configType']) ? $data['configType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['configInfo'] = isset($data['configInfo']) ? $data['configInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configType']) && ($this->container['configType'] > 9)) {
                $invalidProperties[] = "invalid value for 'configType', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['configType']) && ($this->container['configType'] < 0)) {
                $invalidProperties[] = "invalid value for 'configType', must be bigger than or equal to 0.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 65536)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 65536.";
            }
            if ((mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
            if ((mb_strlen($this->container['resourceName']) > 65536)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 65536.";
            }
            if ((mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['configInfo'] === null) {
            $invalidProperties[] = "'configInfo' can't be null";
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
    * Gets configType
    *  配置类别.0：热点统计类
    *
    * @return int|null
    */
    public function getConfigType()
    {
        return $this->container['configType'];
    }

    /**
    * Sets configType
    *
    * @param int|null $configType 配置类别.0：热点统计类
    *
    * @return $this
    */
    public function setConfigType($configType)
    {
        $this->container['configType'] = $configType;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型。domain:resource_name为域名，account:resource_name为账号
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
    * @param string $resourceType 资源类型。domain:resource_name为域名，account:resource_name为账号
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称为账号或域名。多个域名以英文逗号分隔
    *
    * @return string
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string $resourceName 资源名称为账号或域名。多个域名以英文逗号分隔
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets configInfo
    *  配置信息.top指标仅支持ua、refer、url、origin url
    *
    * @return object
    */
    public function getConfigInfo()
    {
        return $this->container['configInfo'];
    }

    /**
    * Sets configInfo
    *
    * @param object $configInfo 配置信息.top指标仅支持ua、refer、url、origin url
    *
    * @return $this
    */
    public function setConfigInfo($configInfo)
    {
        $this->container['configInfo'] = $configInfo;
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

