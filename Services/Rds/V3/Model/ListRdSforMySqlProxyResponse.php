<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRdSforMySqlProxyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRdSforMySqlProxyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxyQueryInfoList  数据库实例下的数据库代理信息列表。
    * maxProxyNum  支持同时开启的数据库代理的最大数量。
    * maxProxyNodeNum  单个数据库代理支持选择的代理节点的最大数量。
    * supportBalanceRouteModeForFavoredVersion  是否支持创建数据库代理时设置负载均衡路由模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxyQueryInfoList' => '\HuaweiCloud\SDK\Rds\V3\Model\QueryProxyResponseV3[]',
            'maxProxyNum' => 'int',
            'maxProxyNodeNum' => 'int',
            'supportBalanceRouteModeForFavoredVersion' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxyQueryInfoList  数据库实例下的数据库代理信息列表。
    * maxProxyNum  支持同时开启的数据库代理的最大数量。
    * maxProxyNodeNum  单个数据库代理支持选择的代理节点的最大数量。
    * supportBalanceRouteModeForFavoredVersion  是否支持创建数据库代理时设置负载均衡路由模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxyQueryInfoList' => null,
        'maxProxyNum' => 'int32',
        'maxProxyNodeNum' => 'int32',
        'supportBalanceRouteModeForFavoredVersion' => null
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
    * proxyQueryInfoList  数据库实例下的数据库代理信息列表。
    * maxProxyNum  支持同时开启的数据库代理的最大数量。
    * maxProxyNodeNum  单个数据库代理支持选择的代理节点的最大数量。
    * supportBalanceRouteModeForFavoredVersion  是否支持创建数据库代理时设置负载均衡路由模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxyQueryInfoList' => 'proxy_query_info_list',
            'maxProxyNum' => 'max_proxy_num',
            'maxProxyNodeNum' => 'max_proxy_node_num',
            'supportBalanceRouteModeForFavoredVersion' => 'support_balance_route_mode_for_favored_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxyQueryInfoList  数据库实例下的数据库代理信息列表。
    * maxProxyNum  支持同时开启的数据库代理的最大数量。
    * maxProxyNodeNum  单个数据库代理支持选择的代理节点的最大数量。
    * supportBalanceRouteModeForFavoredVersion  是否支持创建数据库代理时设置负载均衡路由模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'proxyQueryInfoList' => 'setProxyQueryInfoList',
            'maxProxyNum' => 'setMaxProxyNum',
            'maxProxyNodeNum' => 'setMaxProxyNodeNum',
            'supportBalanceRouteModeForFavoredVersion' => 'setSupportBalanceRouteModeForFavoredVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxyQueryInfoList  数据库实例下的数据库代理信息列表。
    * maxProxyNum  支持同时开启的数据库代理的最大数量。
    * maxProxyNodeNum  单个数据库代理支持选择的代理节点的最大数量。
    * supportBalanceRouteModeForFavoredVersion  是否支持创建数据库代理时设置负载均衡路由模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'proxyQueryInfoList' => 'getProxyQueryInfoList',
            'maxProxyNum' => 'getMaxProxyNum',
            'maxProxyNodeNum' => 'getMaxProxyNodeNum',
            'supportBalanceRouteModeForFavoredVersion' => 'getSupportBalanceRouteModeForFavoredVersion'
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
        $this->container['proxyQueryInfoList'] = isset($data['proxyQueryInfoList']) ? $data['proxyQueryInfoList'] : null;
        $this->container['maxProxyNum'] = isset($data['maxProxyNum']) ? $data['maxProxyNum'] : null;
        $this->container['maxProxyNodeNum'] = isset($data['maxProxyNodeNum']) ? $data['maxProxyNodeNum'] : null;
        $this->container['supportBalanceRouteModeForFavoredVersion'] = isset($data['supportBalanceRouteModeForFavoredVersion']) ? $data['supportBalanceRouteModeForFavoredVersion'] : null;
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
    * Gets proxyQueryInfoList
    *  数据库实例下的数据库代理信息列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\QueryProxyResponseV3[]|null
    */
    public function getProxyQueryInfoList()
    {
        return $this->container['proxyQueryInfoList'];
    }

    /**
    * Sets proxyQueryInfoList
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\QueryProxyResponseV3[]|null $proxyQueryInfoList 数据库实例下的数据库代理信息列表。
    *
    * @return $this
    */
    public function setProxyQueryInfoList($proxyQueryInfoList)
    {
        $this->container['proxyQueryInfoList'] = $proxyQueryInfoList;
        return $this;
    }

    /**
    * Gets maxProxyNum
    *  支持同时开启的数据库代理的最大数量。
    *
    * @return int|null
    */
    public function getMaxProxyNum()
    {
        return $this->container['maxProxyNum'];
    }

    /**
    * Sets maxProxyNum
    *
    * @param int|null $maxProxyNum 支持同时开启的数据库代理的最大数量。
    *
    * @return $this
    */
    public function setMaxProxyNum($maxProxyNum)
    {
        $this->container['maxProxyNum'] = $maxProxyNum;
        return $this;
    }

    /**
    * Gets maxProxyNodeNum
    *  单个数据库代理支持选择的代理节点的最大数量。
    *
    * @return int|null
    */
    public function getMaxProxyNodeNum()
    {
        return $this->container['maxProxyNodeNum'];
    }

    /**
    * Sets maxProxyNodeNum
    *
    * @param int|null $maxProxyNodeNum 单个数据库代理支持选择的代理节点的最大数量。
    *
    * @return $this
    */
    public function setMaxProxyNodeNum($maxProxyNodeNum)
    {
        $this->container['maxProxyNodeNum'] = $maxProxyNodeNum;
        return $this;
    }

    /**
    * Gets supportBalanceRouteModeForFavoredVersion
    *  是否支持创建数据库代理时设置负载均衡路由模式。
    *
    * @return bool|null
    */
    public function getSupportBalanceRouteModeForFavoredVersion()
    {
        return $this->container['supportBalanceRouteModeForFavoredVersion'];
    }

    /**
    * Sets supportBalanceRouteModeForFavoredVersion
    *
    * @param bool|null $supportBalanceRouteModeForFavoredVersion 是否支持创建数据库代理时设置负载均衡路由模式。
    *
    * @return $this
    */
    public function setSupportBalanceRouteModeForFavoredVersion($supportBalanceRouteModeForFavoredVersion)
    {
        $this->container['supportBalanceRouteModeForFavoredVersion'] = $supportBalanceRouteModeForFavoredVersion;
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

