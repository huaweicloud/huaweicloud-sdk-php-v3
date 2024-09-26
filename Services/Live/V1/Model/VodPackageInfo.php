<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VodPackageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VodPackageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packagingGroupId  VOD 打包信息，转封装模板ID，模板ID通过VOD查询
    * resourceId  DRM resourceID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packagingGroupId' => 'string',
            'resourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packagingGroupId  VOD 打包信息，转封装模板ID，模板ID通过VOD查询
    * resourceId  DRM resourceID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packagingGroupId' => null,
        'resourceId' => null
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
    * packagingGroupId  VOD 打包信息，转封装模板ID，模板ID通过VOD查询
    * resourceId  DRM resourceID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packagingGroupId' => 'packaging_group_id',
            'resourceId' => 'resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packagingGroupId  VOD 打包信息，转封装模板ID，模板ID通过VOD查询
    * resourceId  DRM resourceID
    *
    * @var string[]
    */
    protected static $setters = [
            'packagingGroupId' => 'setPackagingGroupId',
            'resourceId' => 'setResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packagingGroupId  VOD 打包信息，转封装模板ID，模板ID通过VOD查询
    * resourceId  DRM resourceID
    *
    * @var string[]
    */
    protected static $getters = [
            'packagingGroupId' => 'getPackagingGroupId',
            'resourceId' => 'getResourceId'
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
        $this->container['packagingGroupId'] = isset($data['packagingGroupId']) ? $data['packagingGroupId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['packagingGroupId']) && (mb_strlen($this->container['packagingGroupId']) > 255)) {
                $invalidProperties[] = "invalid value for 'packagingGroupId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['packagingGroupId']) && (mb_strlen($this->container['packagingGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'packagingGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
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
    * Gets packagingGroupId
    *  VOD 打包信息，转封装模板ID，模板ID通过VOD查询
    *
    * @return string|null
    */
    public function getPackagingGroupId()
    {
        return $this->container['packagingGroupId'];
    }

    /**
    * Sets packagingGroupId
    *
    * @param string|null $packagingGroupId VOD 打包信息，转封装模板ID，模板ID通过VOD查询
    *
    * @return $this
    */
    public function setPackagingGroupId($packagingGroupId)
    {
        $this->container['packagingGroupId'] = $packagingGroupId;
        return $this;
    }

    /**
    * Gets resourceId
    *  DRM resourceID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId DRM resourceID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
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

