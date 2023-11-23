<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StackResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StackResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * physicalResourceId  物理资源id
    * physicalResourceName  物理资源名称
    * logicalResourceName  逻辑资源名称
    * logicalResourceType  逻辑资源类型
    * resourceStatus  资源状态
    * statusMessage  状态信息
    * href  超链接地址
    * displayName  云服务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'physicalResourceId' => 'string',
            'physicalResourceName' => 'string',
            'logicalResourceName' => 'string',
            'logicalResourceType' => 'string',
            'resourceStatus' => 'string',
            'statusMessage' => 'string',
            'href' => 'string',
            'displayName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * physicalResourceId  物理资源id
    * physicalResourceName  物理资源名称
    * logicalResourceName  逻辑资源名称
    * logicalResourceType  逻辑资源类型
    * resourceStatus  资源状态
    * statusMessage  状态信息
    * href  超链接地址
    * displayName  云服务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'physicalResourceId' => null,
        'physicalResourceName' => null,
        'logicalResourceName' => null,
        'logicalResourceType' => null,
        'resourceStatus' => null,
        'statusMessage' => null,
        'href' => null,
        'displayName' => null
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
    * physicalResourceId  物理资源id
    * physicalResourceName  物理资源名称
    * logicalResourceName  逻辑资源名称
    * logicalResourceType  逻辑资源类型
    * resourceStatus  资源状态
    * statusMessage  状态信息
    * href  超链接地址
    * displayName  云服务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'physicalResourceId' => 'physical_resource_id',
            'physicalResourceName' => 'physical_resource_name',
            'logicalResourceName' => 'logical_resource_name',
            'logicalResourceType' => 'logical_resource_type',
            'resourceStatus' => 'resource_status',
            'statusMessage' => 'status_message',
            'href' => 'href',
            'displayName' => 'display_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * physicalResourceId  物理资源id
    * physicalResourceName  物理资源名称
    * logicalResourceName  逻辑资源名称
    * logicalResourceType  逻辑资源类型
    * resourceStatus  资源状态
    * statusMessage  状态信息
    * href  超链接地址
    * displayName  云服务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'physicalResourceId' => 'setPhysicalResourceId',
            'physicalResourceName' => 'setPhysicalResourceName',
            'logicalResourceName' => 'setLogicalResourceName',
            'logicalResourceType' => 'setLogicalResourceType',
            'resourceStatus' => 'setResourceStatus',
            'statusMessage' => 'setStatusMessage',
            'href' => 'setHref',
            'displayName' => 'setDisplayName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * physicalResourceId  物理资源id
    * physicalResourceName  物理资源名称
    * logicalResourceName  逻辑资源名称
    * logicalResourceType  逻辑资源类型
    * resourceStatus  资源状态
    * statusMessage  状态信息
    * href  超链接地址
    * displayName  云服务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'physicalResourceId' => 'getPhysicalResourceId',
            'physicalResourceName' => 'getPhysicalResourceName',
            'logicalResourceName' => 'getLogicalResourceName',
            'logicalResourceType' => 'getLogicalResourceType',
            'resourceStatus' => 'getResourceStatus',
            'statusMessage' => 'getStatusMessage',
            'href' => 'getHref',
            'displayName' => 'getDisplayName'
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
        $this->container['physicalResourceId'] = isset($data['physicalResourceId']) ? $data['physicalResourceId'] : null;
        $this->container['physicalResourceName'] = isset($data['physicalResourceName']) ? $data['physicalResourceName'] : null;
        $this->container['logicalResourceName'] = isset($data['logicalResourceName']) ? $data['logicalResourceName'] : null;
        $this->container['logicalResourceType'] = isset($data['logicalResourceType']) ? $data['logicalResourceType'] : null;
        $this->container['resourceStatus'] = isset($data['resourceStatus']) ? $data['resourceStatus'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets physicalResourceId
    *  物理资源id
    *
    * @return string|null
    */
    public function getPhysicalResourceId()
    {
        return $this->container['physicalResourceId'];
    }

    /**
    * Sets physicalResourceId
    *
    * @param string|null $physicalResourceId 物理资源id
    *
    * @return $this
    */
    public function setPhysicalResourceId($physicalResourceId)
    {
        $this->container['physicalResourceId'] = $physicalResourceId;
        return $this;
    }

    /**
    * Gets physicalResourceName
    *  物理资源名称
    *
    * @return string|null
    */
    public function getPhysicalResourceName()
    {
        return $this->container['physicalResourceName'];
    }

    /**
    * Sets physicalResourceName
    *
    * @param string|null $physicalResourceName 物理资源名称
    *
    * @return $this
    */
    public function setPhysicalResourceName($physicalResourceName)
    {
        $this->container['physicalResourceName'] = $physicalResourceName;
        return $this;
    }

    /**
    * Gets logicalResourceName
    *  逻辑资源名称
    *
    * @return string|null
    */
    public function getLogicalResourceName()
    {
        return $this->container['logicalResourceName'];
    }

    /**
    * Sets logicalResourceName
    *
    * @param string|null $logicalResourceName 逻辑资源名称
    *
    * @return $this
    */
    public function setLogicalResourceName($logicalResourceName)
    {
        $this->container['logicalResourceName'] = $logicalResourceName;
        return $this;
    }

    /**
    * Gets logicalResourceType
    *  逻辑资源类型
    *
    * @return string|null
    */
    public function getLogicalResourceType()
    {
        return $this->container['logicalResourceType'];
    }

    /**
    * Sets logicalResourceType
    *
    * @param string|null $logicalResourceType 逻辑资源类型
    *
    * @return $this
    */
    public function setLogicalResourceType($logicalResourceType)
    {
        $this->container['logicalResourceType'] = $logicalResourceType;
        return $this;
    }

    /**
    * Gets resourceStatus
    *  资源状态
    *
    * @return string|null
    */
    public function getResourceStatus()
    {
        return $this->container['resourceStatus'];
    }

    /**
    * Sets resourceStatus
    *
    * @param string|null $resourceStatus 资源状态
    *
    * @return $this
    */
    public function setResourceStatus($resourceStatus)
    {
        $this->container['resourceStatus'] = $resourceStatus;
        return $this;
    }

    /**
    * Gets statusMessage
    *  状态信息
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 状态信息
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
        return $this;
    }

    /**
    * Gets href
    *  超链接地址
    *
    * @return string|null
    */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
    * Sets href
    *
    * @param string|null $href 超链接地址
    *
    * @return $this
    */
    public function setHref($href)
    {
        $this->container['href'] = $href;
        return $this;
    }

    /**
    * Gets displayName
    *  云服务名称
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 云服务名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
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

