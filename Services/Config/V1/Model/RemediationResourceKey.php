<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemediationResourceKey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemediationResourceKey';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源ID。
    * resourceProvider  云服务名称，为兼容部分合规结果中云服务名称为空的场景，可为空字符串。
    * resourceType  资源类型，为兼容部分合规结果中资源类型为空的场景，可为空字符串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'resourceProvider' => 'string',
            'resourceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源ID。
    * resourceProvider  云服务名称，为兼容部分合规结果中云服务名称为空的场景，可为空字符串。
    * resourceType  资源类型，为兼容部分合规结果中资源类型为空的场景，可为空字符串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'resourceProvider' => null,
        'resourceType' => null
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
    * resourceId  资源ID。
    * resourceProvider  云服务名称，为兼容部分合规结果中云服务名称为空的场景，可为空字符串。
    * resourceType  资源类型，为兼容部分合规结果中资源类型为空的场景，可为空字符串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'resourceProvider' => 'resource_provider',
            'resourceType' => 'resource_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源ID。
    * resourceProvider  云服务名称，为兼容部分合规结果中云服务名称为空的场景，可为空字符串。
    * resourceType  资源类型，为兼容部分合规结果中资源类型为空的场景，可为空字符串。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'resourceProvider' => 'setResourceProvider',
            'resourceType' => 'setResourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源ID。
    * resourceProvider  云服务名称，为兼容部分合规结果中云服务名称为空的场景，可为空字符串。
    * resourceType  资源类型，为兼容部分合规结果中资源类型为空的场景，可为空字符串。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'resourceProvider' => 'getResourceProvider',
            'resourceType' => 'getResourceType'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceProvider'] = isset($data['resourceProvider']) ? $data['resourceProvider'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 512)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[_.:\\w-]+/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[_.:\\w-]+/.";
            }
        if ($this->container['resourceProvider'] === null) {
            $invalidProperties[] = "'resourceProvider' can't be null";
        }
            if ((mb_strlen($this->container['resourceProvider']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceProvider']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/[\\w]*/", $this->container['resourceProvider'])) {
                $invalidProperties[] = "invalid value for 'resourceProvider', must be conform to the pattern /[\\w]*/.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/[\\w-]*/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /[\\w-]*/.";
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
    * Gets resourceId
    *  资源ID。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceProvider
    *  云服务名称，为兼容部分合规结果中云服务名称为空的场景，可为空字符串。
    *
    * @return string
    */
    public function getResourceProvider()
    {
        return $this->container['resourceProvider'];
    }

    /**
    * Sets resourceProvider
    *
    * @param string $resourceProvider 云服务名称，为兼容部分合规结果中云服务名称为空的场景，可为空字符串。
    *
    * @return $this
    */
    public function setResourceProvider($resourceProvider)
    {
        $this->container['resourceProvider'] = $resourceProvider;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型，为兼容部分合规结果中资源类型为空的场景，可为空字符串。
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
    * @param string $resourceType 资源类型，为兼容部分合规结果中资源类型为空的场景，可为空字符串。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
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

