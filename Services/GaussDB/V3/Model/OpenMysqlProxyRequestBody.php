<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenMysqlProxyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenMysqlProxyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  代理规格码。
    * nodeNum  代理实例节点数，取值整数2-32。
    * proxyName  代理实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节（注意：一个中文字符占用3个字节），必须以字母或中文开头，区分大小写，可以包含字母、数字、中划线、下划线或中文，不能包含其他特殊字符。
    * proxyMode  代理实例类型。默认类型为readwrite。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * nodesReadWeight  数据库节点的读权重设置。  在proxy_mode为readonly时，只能为只读节点选择权重。
    * subnetId  数据库VPC下的子网ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'nodeNum' => 'int',
            'proxyName' => 'string',
            'proxyMode' => 'string',
            'routeMode' => 'int',
            'nodesReadWeight' => '\HuaweiCloud\SDK\GaussDB\V3\Model\NodesWeight[]',
            'subnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  代理规格码。
    * nodeNum  代理实例节点数，取值整数2-32。
    * proxyName  代理实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节（注意：一个中文字符占用3个字节），必须以字母或中文开头，区分大小写，可以包含字母、数字、中划线、下划线或中文，不能包含其他特殊字符。
    * proxyMode  代理实例类型。默认类型为readwrite。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * nodesReadWeight  数据库节点的读权重设置。  在proxy_mode为readonly时，只能为只读节点选择权重。
    * subnetId  数据库VPC下的子网ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'nodeNum' => 'int32',
        'proxyName' => 'int32',
        'proxyMode' => 'int32',
        'routeMode' => 'int32',
        'nodesReadWeight' => null,
        'subnetId' => null
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
    * flavorRef  代理规格码。
    * nodeNum  代理实例节点数，取值整数2-32。
    * proxyName  代理实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节（注意：一个中文字符占用3个字节），必须以字母或中文开头，区分大小写，可以包含字母、数字、中划线、下划线或中文，不能包含其他特殊字符。
    * proxyMode  代理实例类型。默认类型为readwrite。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * nodesReadWeight  数据库节点的读权重设置。  在proxy_mode为readonly时，只能为只读节点选择权重。
    * subnetId  数据库VPC下的子网ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorRef' => 'flavor_ref',
            'nodeNum' => 'node_num',
            'proxyName' => 'proxy_name',
            'proxyMode' => 'proxy_mode',
            'routeMode' => 'route_mode',
            'nodesReadWeight' => 'nodes_read_weight',
            'subnetId' => 'subnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorRef  代理规格码。
    * nodeNum  代理实例节点数，取值整数2-32。
    * proxyName  代理实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节（注意：一个中文字符占用3个字节），必须以字母或中文开头，区分大小写，可以包含字母、数字、中划线、下划线或中文，不能包含其他特殊字符。
    * proxyMode  代理实例类型。默认类型为readwrite。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * nodesReadWeight  数据库节点的读权重设置。  在proxy_mode为readonly时，只能为只读节点选择权重。
    * subnetId  数据库VPC下的子网ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorRef' => 'setFlavorRef',
            'nodeNum' => 'setNodeNum',
            'proxyName' => 'setProxyName',
            'proxyMode' => 'setProxyMode',
            'routeMode' => 'setRouteMode',
            'nodesReadWeight' => 'setNodesReadWeight',
            'subnetId' => 'setSubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorRef  代理规格码。
    * nodeNum  代理实例节点数，取值整数2-32。
    * proxyName  代理实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节（注意：一个中文字符占用3个字节），必须以字母或中文开头，区分大小写，可以包含字母、数字、中划线、下划线或中文，不能包含其他特殊字符。
    * proxyMode  代理实例类型。默认类型为readwrite。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * nodesReadWeight  数据库节点的读权重设置。  在proxy_mode为readonly时，只能为只读节点选择权重。
    * subnetId  数据库VPC下的子网ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorRef' => 'getFlavorRef',
            'nodeNum' => 'getNodeNum',
            'proxyName' => 'getProxyName',
            'proxyMode' => 'getProxyMode',
            'routeMode' => 'getRouteMode',
            'nodesReadWeight' => 'getNodesReadWeight',
            'subnetId' => 'getSubnetId'
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
    const PROXY_MODE_READWRITE = 'readwrite';
    const PROXY_MODE_READONLY = 'readonly';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProxyModeAllowableValues()
    {
        return [
            self::PROXY_MODE_READWRITE,
            self::PROXY_MODE_READONLY,
        ];
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['proxyName'] = isset($data['proxyName']) ? $data['proxyName'] : null;
        $this->container['proxyMode'] = isset($data['proxyMode']) ? $data['proxyMode'] : null;
        $this->container['routeMode'] = isset($data['routeMode']) ? $data['routeMode'] : null;
        $this->container['nodesReadWeight'] = isset($data['nodesReadWeight']) ? $data['nodesReadWeight'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['nodeNum'] === null) {
            $invalidProperties[] = "'nodeNum' can't be null";
        }
            $allowedValues = $this->getProxyModeAllowableValues();
                if (!is_null($this->container['proxyMode']) && !in_array($this->container['proxyMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'proxyMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets flavorRef
    *  代理规格码。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 代理规格码。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets nodeNum
    *  代理实例节点数，取值整数2-32。
    *
    * @return int
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int $nodeNum 代理实例节点数，取值整数2-32。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets proxyName
    *  代理实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节（注意：一个中文字符占用3个字节），必须以字母或中文开头，区分大小写，可以包含字母、数字、中划线、下划线或中文，不能包含其他特殊字符。
    *
    * @return string|null
    */
    public function getProxyName()
    {
        return $this->container['proxyName'];
    }

    /**
    * Sets proxyName
    *
    * @param string|null $proxyName 代理实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小为4个字符，最大为64个字符且不超过64个字节（注意：一个中文字符占用3个字节），必须以字母或中文开头，区分大小写，可以包含字母、数字、中划线、下划线或中文，不能包含其他特殊字符。
    *
    * @return $this
    */
    public function setProxyName($proxyName)
    {
        $this->container['proxyName'] = $proxyName;
        return $this;
    }

    /**
    * Gets proxyMode
    *  代理实例类型。默认类型为readwrite。
    *
    * @return string|null
    */
    public function getProxyMode()
    {
        return $this->container['proxyMode'];
    }

    /**
    * Sets proxyMode
    *
    * @param string|null $proxyMode 代理实例类型。默认类型为readwrite。
    *
    * @return $this
    */
    public function setProxyMode($proxyMode)
    {
        $this->container['proxyMode'] = $proxyMode;
        return $this;
    }

    /**
    * Gets routeMode
    *  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    *
    * @return int|null
    */
    public function getRouteMode()
    {
        return $this->container['routeMode'];
    }

    /**
    * Sets routeMode
    *
    * @param int|null $routeMode 数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    *
    * @return $this
    */
    public function setRouteMode($routeMode)
    {
        $this->container['routeMode'] = $routeMode;
        return $this;
    }

    /**
    * Gets nodesReadWeight
    *  数据库节点的读权重设置。  在proxy_mode为readonly时，只能为只读节点选择权重。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\NodesWeight[]|null
    */
    public function getNodesReadWeight()
    {
        return $this->container['nodesReadWeight'];
    }

    /**
    * Sets nodesReadWeight
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\NodesWeight[]|null $nodesReadWeight 数据库节点的读权重设置。  在proxy_mode为readonly时，只能为只读节点选择权重。
    *
    * @return $this
    */
    public function setNodesReadWeight($nodesReadWeight)
    {
        $this->container['nodesReadWeight'] = $nodesReadWeight;
        return $this;
    }

    /**
    * Gets subnetId
    *  数据库VPC下的子网ID。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 数据库VPC下的子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
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

