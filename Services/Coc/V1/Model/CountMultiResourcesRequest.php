<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountMultiResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountMultiResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vendor  厂商来源（默认RMS，可填RMS/ALI/AWS）
    * viewId  视图 id，视图模式下必填
    * isResource  是否为资源模块
    * regionId  区域 id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vendor' => 'string',
            'viewId' => 'string',
            'isResource' => 'bool',
            'regionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vendor  厂商来源（默认RMS，可填RMS/ALI/AWS）
    * viewId  视图 id，视图模式下必填
    * isResource  是否为资源模块
    * regionId  区域 id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vendor' => null,
        'viewId' => null,
        'isResource' => null,
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
    * vendor  厂商来源（默认RMS，可填RMS/ALI/AWS）
    * viewId  视图 id，视图模式下必填
    * isResource  是否为资源模块
    * regionId  区域 id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vendor' => 'vendor',
            'viewId' => 'view_id',
            'isResource' => 'is_resource',
            'regionId' => 'region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vendor  厂商来源（默认RMS，可填RMS/ALI/AWS）
    * viewId  视图 id，视图模式下必填
    * isResource  是否为资源模块
    * regionId  区域 id
    *
    * @var string[]
    */
    protected static $setters = [
            'vendor' => 'setVendor',
            'viewId' => 'setViewId',
            'isResource' => 'setIsResource',
            'regionId' => 'setRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vendor  厂商来源（默认RMS，可填RMS/ALI/AWS）
    * viewId  视图 id，视图模式下必填
    * isResource  是否为资源模块
    * regionId  区域 id
    *
    * @var string[]
    */
    protected static $getters = [
            'vendor' => 'getVendor',
            'viewId' => 'getViewId',
            'isResource' => 'getIsResource',
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
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['viewId'] = isset($data['viewId']) ? $data['viewId'] : null;
        $this->container['isResource'] = isset($data['isResource']) ? $data['isResource'] : null;
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
        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
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
    * Gets vendor
    *  厂商来源（默认RMS，可填RMS/ALI/AWS）
    *
    * @return string
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string $vendor 厂商来源（默认RMS，可填RMS/ALI/AWS）
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets viewId
    *  视图 id，视图模式下必填
    *
    * @return string|null
    */
    public function getViewId()
    {
        return $this->container['viewId'];
    }

    /**
    * Sets viewId
    *
    * @param string|null $viewId 视图 id，视图模式下必填
    *
    * @return $this
    */
    public function setViewId($viewId)
    {
        $this->container['viewId'] = $viewId;
        return $this;
    }

    /**
    * Gets isResource
    *  是否为资源模块
    *
    * @return bool|null
    */
    public function getIsResource()
    {
        return $this->container['isResource'];
    }

    /**
    * Sets isResource
    *
    * @param bool|null $isResource 是否为资源模块
    *
    * @return $this
    */
    public function setIsResource($isResource)
    {
        $this->container['isResource'] = $isResource;
        return $this;
    }

    /**
    * Gets regionId
    *  区域 id
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域 id
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

