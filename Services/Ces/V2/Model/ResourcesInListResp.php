<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourcesInListResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourcesInListResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceGroupId  资源分组ID，监控范围为资源分组时存在该值
    * resourceGroupName  资源分组名称，监控范围为资源分组时存在该值
    * dimensions  维度信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceGroupId' => 'string',
            'resourceGroupName' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Ces\V2\Model\MetricDimension[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceGroupId  资源分组ID，监控范围为资源分组时存在该值
    * resourceGroupName  资源分组名称，监控范围为资源分组时存在该值
    * dimensions  维度信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceGroupId' => null,
        'resourceGroupName' => null,
        'dimensions' => null
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
    * resourceGroupId  资源分组ID，监控范围为资源分组时存在该值
    * resourceGroupName  资源分组名称，监控范围为资源分组时存在该值
    * dimensions  维度信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceGroupId' => 'resource_group_id',
            'resourceGroupName' => 'resource_group_name',
            'dimensions' => 'dimensions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceGroupId  资源分组ID，监控范围为资源分组时存在该值
    * resourceGroupName  资源分组名称，监控范围为资源分组时存在该值
    * dimensions  维度信息
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceGroupId' => 'setResourceGroupId',
            'resourceGroupName' => 'setResourceGroupName',
            'dimensions' => 'setDimensions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceGroupId  资源分组ID，监控范围为资源分组时存在该值
    * resourceGroupName  资源分组名称，监控范围为资源分组时存在该值
    * dimensions  维度信息
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceGroupId' => 'getResourceGroupId',
            'resourceGroupName' => 'getResourceGroupName',
            'dimensions' => 'getDimensions'
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
        $this->container['resourceGroupId'] = isset($data['resourceGroupId']) ? $data['resourceGroupId'] : null;
        $this->container['resourceGroupName'] = isset($data['resourceGroupName']) ? $data['resourceGroupName'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceGroupId']) && !preg_match("/^rg([a-z]|[A-Z]|[0-9]){22}$/", $this->container['resourceGroupId'])) {
                $invalidProperties[] = "invalid value for 'resourceGroupId', must be conform to the pattern /^rg([a-z]|[A-Z]|[0-9]){22}$/.";
            }
            if (!is_null($this->container['resourceGroupName']) && (mb_strlen($this->container['resourceGroupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceGroupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceGroupName']) && (mb_strlen($this->container['resourceGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceGroupName', the character length must be bigger than or equal to 1.";
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
    * Gets resourceGroupId
    *  资源分组ID，监控范围为资源分组时存在该值
    *
    * @return string|null
    */
    public function getResourceGroupId()
    {
        return $this->container['resourceGroupId'];
    }

    /**
    * Sets resourceGroupId
    *
    * @param string|null $resourceGroupId 资源分组ID，监控范围为资源分组时存在该值
    *
    * @return $this
    */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->container['resourceGroupId'] = $resourceGroupId;
        return $this;
    }

    /**
    * Gets resourceGroupName
    *  资源分组名称，监控范围为资源分组时存在该值
    *
    * @return string|null
    */
    public function getResourceGroupName()
    {
        return $this->container['resourceGroupName'];
    }

    /**
    * Sets resourceGroupName
    *
    * @param string|null $resourceGroupName 资源分组名称，监控范围为资源分组时存在该值
    *
    * @return $this
    */
    public function setResourceGroupName($resourceGroupName)
    {
        $this->container['resourceGroupName'] = $resourceGroupName;
        return $this;
    }

    /**
    * Gets dimensions
    *  维度信息
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\MetricDimension[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\MetricDimension[]|null $dimensions 维度信息
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
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

