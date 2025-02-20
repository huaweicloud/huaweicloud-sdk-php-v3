<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMultiCloudResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMultiCloudResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vendor  云厂商
    * type  资源类型
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * nameList  资源名称
    * regionIdList  region id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vendor' => 'string',
            'type' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'resourceIdList' => 'string[]',
            'nameList' => 'string[]',
            'regionIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vendor  云厂商
    * type  资源类型
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * nameList  资源名称
    * regionIdList  region id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vendor' => null,
        'type' => null,
        'limit' => null,
        'marker' => null,
        'resourceIdList' => null,
        'nameList' => null,
        'regionIdList' => null
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
    * vendor  云厂商
    * type  资源类型
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * nameList  资源名称
    * regionIdList  region id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vendor' => 'vendor',
            'type' => 'type',
            'limit' => 'limit',
            'marker' => 'marker',
            'resourceIdList' => 'resource_id_list',
            'nameList' => 'name_list',
            'regionIdList' => 'region_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vendor  云厂商
    * type  资源类型
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * nameList  资源名称
    * regionIdList  region id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'vendor' => 'setVendor',
            'type' => 'setType',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'resourceIdList' => 'setResourceIdList',
            'nameList' => 'setNameList',
            'regionIdList' => 'setRegionIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vendor  云厂商
    * type  资源类型
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * nameList  资源名称
    * regionIdList  region id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'vendor' => 'getVendor',
            'type' => 'getType',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'resourceIdList' => 'getResourceIdList',
            'nameList' => 'getNameList',
            'regionIdList' => 'getRegionIdList'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['resourceIdList'] = isset($data['resourceIdList']) ? $data['resourceIdList'] : null;
        $this->container['nameList'] = isset($data['nameList']) ? $data['nameList'] : null;
        $this->container['regionIdList'] = isset($data['regionIdList']) ? $data['regionIdList'] : null;
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
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
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
    *  云厂商
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
    * @param string $vendor 云厂商
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets type
    *  资源类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 资源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  最大的返回数量
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 最大的返回数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets resourceIdList
    *  资源id列表
    *
    * @return string[]|null
    */
    public function getResourceIdList()
    {
        return $this->container['resourceIdList'];
    }

    /**
    * Sets resourceIdList
    *
    * @param string[]|null $resourceIdList 资源id列表
    *
    * @return $this
    */
    public function setResourceIdList($resourceIdList)
    {
        $this->container['resourceIdList'] = $resourceIdList;
        return $this;
    }

    /**
    * Gets nameList
    *  资源名称
    *
    * @return string[]|null
    */
    public function getNameList()
    {
        return $this->container['nameList'];
    }

    /**
    * Sets nameList
    *
    * @param string[]|null $nameList 资源名称
    *
    * @return $this
    */
    public function setNameList($nameList)
    {
        $this->container['nameList'] = $nameList;
        return $this;
    }

    /**
    * Gets regionIdList
    *  region id列表
    *
    * @return string[]|null
    */
    public function getRegionIdList()
    {
        return $this->container['regionIdList'];
    }

    /**
    * Sets regionIdList
    *
    * @param string[]|null $regionIdList region id列表
    *
    * @return $this
    */
    public function setRegionIdList($regionIdList)
    {
        $this->container['regionIdList'] = $regionIdList;
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

