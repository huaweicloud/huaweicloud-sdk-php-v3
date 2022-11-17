<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ItemsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ItemsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  执行计划中的资源类型，如：huaweicloud_evs_volume
    * resourceName  执行计划中的用户定义的资源的名字，如：my_volume
    * index  使用count构建的资源时资源对应的index
    * supported  执行计划中的资源是否支持询价
    * resourcePrice  执行计划中的每个资源部署后的总的询价信息，如果该资源询价结果包含不同的period_type，则询价结果根据period_type类型展示总价。 包周期计费和按需计费返回，免费和不支持询价的资源不返回
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceName' => 'string',
            'index' => 'string',
            'supported' => 'bool',
            'resourcePrice' => '\HuaweiCloud\SDK\Aos\V1\Model\ResourcePriceResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  执行计划中的资源类型，如：huaweicloud_evs_volume
    * resourceName  执行计划中的用户定义的资源的名字，如：my_volume
    * index  使用count构建的资源时资源对应的index
    * supported  执行计划中的资源是否支持询价
    * resourcePrice  执行计划中的每个资源部署后的总的询价信息，如果该资源询价结果包含不同的period_type，则询价结果根据period_type类型展示总价。 包周期计费和按需计费返回，免费和不支持询价的资源不返回
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceName' => null,
        'index' => null,
        'supported' => null,
        'resourcePrice' => null
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
    * resourceType  执行计划中的资源类型，如：huaweicloud_evs_volume
    * resourceName  执行计划中的用户定义的资源的名字，如：my_volume
    * index  使用count构建的资源时资源对应的index
    * supported  执行计划中的资源是否支持询价
    * resourcePrice  执行计划中的每个资源部署后的总的询价信息，如果该资源询价结果包含不同的period_type，则询价结果根据period_type类型展示总价。 包周期计费和按需计费返回，免费和不支持询价的资源不返回
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name',
            'index' => 'index',
            'supported' => 'supported',
            'resourcePrice' => 'resource_price'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  执行计划中的资源类型，如：huaweicloud_evs_volume
    * resourceName  执行计划中的用户定义的资源的名字，如：my_volume
    * index  使用count构建的资源时资源对应的index
    * supported  执行计划中的资源是否支持询价
    * resourcePrice  执行计划中的每个资源部署后的总的询价信息，如果该资源询价结果包含不同的period_type，则询价结果根据period_type类型展示总价。 包周期计费和按需计费返回，免费和不支持询价的资源不返回
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName',
            'index' => 'setIndex',
            'supported' => 'setSupported',
            'resourcePrice' => 'setResourcePrice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  执行计划中的资源类型，如：huaweicloud_evs_volume
    * resourceName  执行计划中的用户定义的资源的名字，如：my_volume
    * index  使用count构建的资源时资源对应的index
    * supported  执行计划中的资源是否支持询价
    * resourcePrice  执行计划中的每个资源部署后的总的询价信息，如果该资源询价结果包含不同的period_type，则询价结果根据period_type类型展示总价。 包周期计费和按需计费返回，免费和不支持询价的资源不返回
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName',
            'index' => 'getIndex',
            'supported' => 'getSupported',
            'resourcePrice' => 'getResourcePrice'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['supported'] = isset($data['supported']) ? $data['supported'] : null;
        $this->container['resourcePrice'] = isset($data['resourcePrice']) ? $data['resourcePrice'] : null;
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
    * Gets resourceType
    *  执行计划中的资源类型，如：huaweicloud_evs_volume
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 执行计划中的资源类型，如：huaweicloud_evs_volume
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
    *  执行计划中的用户定义的资源的名字，如：my_volume
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 执行计划中的用户定义的资源的名字，如：my_volume
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets index
    *  使用count构建的资源时资源对应的index
    *
    * @return string|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param string|null $index 使用count构建的资源时资源对应的index
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets supported
    *  执行计划中的资源是否支持询价
    *
    * @return bool|null
    */
    public function getSupported()
    {
        return $this->container['supported'];
    }

    /**
    * Sets supported
    *
    * @param bool|null $supported 执行计划中的资源是否支持询价
    *
    * @return $this
    */
    public function setSupported($supported)
    {
        $this->container['supported'] = $supported;
        return $this;
    }

    /**
    * Gets resourcePrice
    *  执行计划中的每个资源部署后的总的询价信息，如果该资源询价结果包含不同的period_type，则询价结果根据period_type类型展示总价。 包周期计费和按需计费返回，免费和不支持询价的资源不返回
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\ResourcePriceResponse[]|null
    */
    public function getResourcePrice()
    {
        return $this->container['resourcePrice'];
    }

    /**
    * Sets resourcePrice
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\ResourcePriceResponse[]|null $resourcePrice 执行计划中的每个资源部署后的总的询价信息，如果该资源询价结果包含不同的period_type，则询价结果根据period_type类型展示总价。 包周期计费和按需计费返回，免费和不支持询价的资源不返回
    *
    * @return $this
    */
    public function setResourcePrice($resourcePrice)
    {
        $this->container['resourcePrice'] = $resourcePrice;
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

