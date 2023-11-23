<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesSessionStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesSessionStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalConnectionCount  总客户端连接数。
    * activeConnectionCount  active_connection_count
    * topSourceIps  节点连接的各个客户端连接数汇总，从大到小取前十个，最多十个，展示客户端的ip地址和连接总数。
    * topDbs  节点各数据库连接的客户端的ip和该ip连接节点的连接数，按连接数从高到低取前十个，最多十个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalConnectionCount' => 'int',
            'activeConnectionCount' => 'int',
            'topSourceIps' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesSessionStatisticsRespondBodyTopSourceIps[]',
            'topDbs' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalConnectionCount  总客户端连接数。
    * activeConnectionCount  active_connection_count
    * topSourceIps  节点连接的各个客户端连接数汇总，从大到小取前十个，最多十个，展示客户端的ip地址和连接总数。
    * topDbs  节点各数据库连接的客户端的ip和该ip连接节点的连接数，按连接数从高到低取前十个，最多十个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalConnectionCount' => null,
        'activeConnectionCount' => null,
        'topSourceIps' => null,
        'topDbs' => null
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
    * totalConnectionCount  总客户端连接数。
    * activeConnectionCount  active_connection_count
    * topSourceIps  节点连接的各个客户端连接数汇总，从大到小取前十个，最多十个，展示客户端的ip地址和连接总数。
    * topDbs  节点各数据库连接的客户端的ip和该ip连接节点的连接数，按连接数从高到低取前十个，最多十个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalConnectionCount' => 'total_connection_count',
            'activeConnectionCount' => 'active_connection_count',
            'topSourceIps' => 'top_source_ips',
            'topDbs' => 'top_dbs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalConnectionCount  总客户端连接数。
    * activeConnectionCount  active_connection_count
    * topSourceIps  节点连接的各个客户端连接数汇总，从大到小取前十个，最多十个，展示客户端的ip地址和连接总数。
    * topDbs  节点各数据库连接的客户端的ip和该ip连接节点的连接数，按连接数从高到低取前十个，最多十个。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalConnectionCount' => 'setTotalConnectionCount',
            'activeConnectionCount' => 'setActiveConnectionCount',
            'topSourceIps' => 'setTopSourceIps',
            'topDbs' => 'setTopDbs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalConnectionCount  总客户端连接数。
    * activeConnectionCount  active_connection_count
    * topSourceIps  节点连接的各个客户端连接数汇总，从大到小取前十个，最多十个，展示客户端的ip地址和连接总数。
    * topDbs  节点各数据库连接的客户端的ip和该ip连接节点的连接数，按连接数从高到低取前十个，最多十个。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalConnectionCount' => 'getTotalConnectionCount',
            'activeConnectionCount' => 'getActiveConnectionCount',
            'topSourceIps' => 'getTopSourceIps',
            'topDbs' => 'getTopDbs'
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
        $this->container['totalConnectionCount'] = isset($data['totalConnectionCount']) ? $data['totalConnectionCount'] : null;
        $this->container['activeConnectionCount'] = isset($data['activeConnectionCount']) ? $data['activeConnectionCount'] : null;
        $this->container['topSourceIps'] = isset($data['topSourceIps']) ? $data['topSourceIps'] : null;
        $this->container['topDbs'] = isset($data['topDbs']) ? $data['topDbs'] : null;
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
    * Gets totalConnectionCount
    *  总客户端连接数。
    *
    * @return int|null
    */
    public function getTotalConnectionCount()
    {
        return $this->container['totalConnectionCount'];
    }

    /**
    * Sets totalConnectionCount
    *
    * @param int|null $totalConnectionCount 总客户端连接数。
    *
    * @return $this
    */
    public function setTotalConnectionCount($totalConnectionCount)
    {
        $this->container['totalConnectionCount'] = $totalConnectionCount;
        return $this;
    }

    /**
    * Gets activeConnectionCount
    *  active_connection_count
    *
    * @return int|null
    */
    public function getActiveConnectionCount()
    {
        return $this->container['activeConnectionCount'];
    }

    /**
    * Sets activeConnectionCount
    *
    * @param int|null $activeConnectionCount active_connection_count
    *
    * @return $this
    */
    public function setActiveConnectionCount($activeConnectionCount)
    {
        $this->container['activeConnectionCount'] = $activeConnectionCount;
        return $this;
    }

    /**
    * Gets topSourceIps
    *  节点连接的各个客户端连接数汇总，从大到小取前十个，最多十个，展示客户端的ip地址和连接总数。
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesSessionStatisticsRespondBodyTopSourceIps[]|null
    */
    public function getTopSourceIps()
    {
        return $this->container['topSourceIps'];
    }

    /**
    * Sets topSourceIps
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesSessionStatisticsRespondBodyTopSourceIps[]|null $topSourceIps 节点连接的各个客户端连接数汇总，从大到小取前十个，最多十个，展示客户端的ip地址和连接总数。
    *
    * @return $this
    */
    public function setTopSourceIps($topSourceIps)
    {
        $this->container['topSourceIps'] = $topSourceIps;
        return $this;
    }

    /**
    * Gets topDbs
    *  节点各数据库连接的客户端的ip和该ip连接节点的连接数，按连接数从高到低取前十个，最多十个。
    *
    * @return object|null
    */
    public function getTopDbs()
    {
        return $this->container['topDbs'];
    }

    /**
    * Sets topDbs
    *
    * @param object|null $topDbs 节点各数据库连接的客户端的ip和该ip连接节点的连接数，按连接数从高到低取前十个，最多十个。
    *
    * @return $this
    */
    public function setTopDbs($topDbs)
    {
        $this->container['topDbs'] = $topDbs;
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

