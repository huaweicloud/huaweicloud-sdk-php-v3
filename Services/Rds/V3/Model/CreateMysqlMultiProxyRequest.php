<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMysqlMultiProxyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMysqlMultiProxyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  数据库代理规格码。      - 当局点支持主备模式数据库代理时，该字段不生效。     - 当局点支持集群模式数据库代理时，该字段请参考查询数据库代理规格信息接口返回体中，[规格信息]中的code字段。
    * nodeNum  数据库代理节点数量。      - 当局点支持主备模式数据库代理时，请设置该字段为固定值2。     - 当局点支持集群模式数据库代理时，该字段最小值为2，最大值请参考查询数据库代理信息列表接口返回体中，[数据库代理信息列表]中的max_proxy_node_num字段值。
    * proxyName  数据库代理名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小长度为4个字符，最大不超过64个字节，以字母或中文字符开头，只能包含字母、数字、中划线、下划线、英文句号和中文。  当不选择该参数或局点仅支持主备模式数据库代理时，将随机生成名称。
    * proxyMode  数据库代理读写模式。 取值范围:     readwrite：读写模式。     readonly：只读模式。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主节点不接受读请求）。     2：表示负载均衡模式（数据库主节点接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    * nodesReadWeight  数据库节点的读权重设置。      - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）或者在route_mode（路由模式）>0时，只能为只读节点选择权重。     - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）时，需要至少为一个只读实例配置权重。     - 在route_mode（路由模式）>0时，为主实例配置的权重将不生效。     - 该列表可以为空列表。
    * subnetId  数据库VPC下的子网ID。 取值范围为该实例所在VPC下的所有子网ID。      - 如需使用该参数，请联系客服申请。     - 获取子网ID请参考[创建VPC和子网](https://support.huaweicloud.com/api-cce/cce_02_0100.html)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'nodeNum' => 'int',
            'proxyName' => 'string',
            'proxyMode' => 'string',
            'routeMode' => 'int',
            'nodesReadWeight' => '\HuaweiCloud\SDK\Rds\V3\Model\InstancesWeight[]',
            'subnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  数据库代理规格码。      - 当局点支持主备模式数据库代理时，该字段不生效。     - 当局点支持集群模式数据库代理时，该字段请参考查询数据库代理规格信息接口返回体中，[规格信息]中的code字段。
    * nodeNum  数据库代理节点数量。      - 当局点支持主备模式数据库代理时，请设置该字段为固定值2。     - 当局点支持集群模式数据库代理时，该字段最小值为2，最大值请参考查询数据库代理信息列表接口返回体中，[数据库代理信息列表]中的max_proxy_node_num字段值。
    * proxyName  数据库代理名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小长度为4个字符，最大不超过64个字节，以字母或中文字符开头，只能包含字母、数字、中划线、下划线、英文句号和中文。  当不选择该参数或局点仅支持主备模式数据库代理时，将随机生成名称。
    * proxyMode  数据库代理读写模式。 取值范围:     readwrite：读写模式。     readonly：只读模式。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主节点不接受读请求）。     2：表示负载均衡模式（数据库主节点接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    * nodesReadWeight  数据库节点的读权重设置。      - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）或者在route_mode（路由模式）>0时，只能为只读节点选择权重。     - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）时，需要至少为一个只读实例配置权重。     - 在route_mode（路由模式）>0时，为主实例配置的权重将不生效。     - 该列表可以为空列表。
    * subnetId  数据库VPC下的子网ID。 取值范围为该实例所在VPC下的所有子网ID。      - 如需使用该参数，请联系客服申请。     - 获取子网ID请参考[创建VPC和子网](https://support.huaweicloud.com/api-cce/cce_02_0100.html)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'nodeNum' => 'int32',
        'proxyName' => null,
        'proxyMode' => null,
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
    * flavorRef  数据库代理规格码。      - 当局点支持主备模式数据库代理时，该字段不生效。     - 当局点支持集群模式数据库代理时，该字段请参考查询数据库代理规格信息接口返回体中，[规格信息]中的code字段。
    * nodeNum  数据库代理节点数量。      - 当局点支持主备模式数据库代理时，请设置该字段为固定值2。     - 当局点支持集群模式数据库代理时，该字段最小值为2，最大值请参考查询数据库代理信息列表接口返回体中，[数据库代理信息列表]中的max_proxy_node_num字段值。
    * proxyName  数据库代理名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小长度为4个字符，最大不超过64个字节，以字母或中文字符开头，只能包含字母、数字、中划线、下划线、英文句号和中文。  当不选择该参数或局点仅支持主备模式数据库代理时，将随机生成名称。
    * proxyMode  数据库代理读写模式。 取值范围:     readwrite：读写模式。     readonly：只读模式。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主节点不接受读请求）。     2：表示负载均衡模式（数据库主节点接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    * nodesReadWeight  数据库节点的读权重设置。      - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）或者在route_mode（路由模式）>0时，只能为只读节点选择权重。     - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）时，需要至少为一个只读实例配置权重。     - 在route_mode（路由模式）>0时，为主实例配置的权重将不生效。     - 该列表可以为空列表。
    * subnetId  数据库VPC下的子网ID。 取值范围为该实例所在VPC下的所有子网ID。      - 如需使用该参数，请联系客服申请。     - 获取子网ID请参考[创建VPC和子网](https://support.huaweicloud.com/api-cce/cce_02_0100.html)
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
    * flavorRef  数据库代理规格码。      - 当局点支持主备模式数据库代理时，该字段不生效。     - 当局点支持集群模式数据库代理时，该字段请参考查询数据库代理规格信息接口返回体中，[规格信息]中的code字段。
    * nodeNum  数据库代理节点数量。      - 当局点支持主备模式数据库代理时，请设置该字段为固定值2。     - 当局点支持集群模式数据库代理时，该字段最小值为2，最大值请参考查询数据库代理信息列表接口返回体中，[数据库代理信息列表]中的max_proxy_node_num字段值。
    * proxyName  数据库代理名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小长度为4个字符，最大不超过64个字节，以字母或中文字符开头，只能包含字母、数字、中划线、下划线、英文句号和中文。  当不选择该参数或局点仅支持主备模式数据库代理时，将随机生成名称。
    * proxyMode  数据库代理读写模式。 取值范围:     readwrite：读写模式。     readonly：只读模式。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主节点不接受读请求）。     2：表示负载均衡模式（数据库主节点接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    * nodesReadWeight  数据库节点的读权重设置。      - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）或者在route_mode（路由模式）>0时，只能为只读节点选择权重。     - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）时，需要至少为一个只读实例配置权重。     - 在route_mode（路由模式）>0时，为主实例配置的权重将不生效。     - 该列表可以为空列表。
    * subnetId  数据库VPC下的子网ID。 取值范围为该实例所在VPC下的所有子网ID。      - 如需使用该参数，请联系客服申请。     - 获取子网ID请参考[创建VPC和子网](https://support.huaweicloud.com/api-cce/cce_02_0100.html)
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
    * flavorRef  数据库代理规格码。      - 当局点支持主备模式数据库代理时，该字段不生效。     - 当局点支持集群模式数据库代理时，该字段请参考查询数据库代理规格信息接口返回体中，[规格信息]中的code字段。
    * nodeNum  数据库代理节点数量。      - 当局点支持主备模式数据库代理时，请设置该字段为固定值2。     - 当局点支持集群模式数据库代理时，该字段最小值为2，最大值请参考查询数据库代理信息列表接口返回体中，[数据库代理信息列表]中的max_proxy_node_num字段值。
    * proxyName  数据库代理名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小长度为4个字符，最大不超过64个字节，以字母或中文字符开头，只能包含字母、数字、中划线、下划线、英文句号和中文。  当不选择该参数或局点仅支持主备模式数据库代理时，将随机生成名称。
    * proxyMode  数据库代理读写模式。 取值范围:     readwrite：读写模式。     readonly：只读模式。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主节点不接受读请求）。     2：表示负载均衡模式（数据库主节点接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    * nodesReadWeight  数据库节点的读权重设置。      - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）或者在route_mode（路由模式）>0时，只能为只读节点选择权重。     - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）时，需要至少为一个只读实例配置权重。     - 在route_mode（路由模式）>0时，为主实例配置的权重将不生效。     - 该列表可以为空列表。
    * subnetId  数据库VPC下的子网ID。 取值范围为该实例所在VPC下的所有子网ID。      - 如需使用该参数，请联系客服申请。     - 获取子网ID请参考[创建VPC和子网](https://support.huaweicloud.com/api-cce/cce_02_0100.html)
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
        if ($this->container['nodesReadWeight'] === null) {
            $invalidProperties[] = "'nodesReadWeight' can't be null";
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
    *  数据库代理规格码。      - 当局点支持主备模式数据库代理时，该字段不生效。     - 当局点支持集群模式数据库代理时，该字段请参考查询数据库代理规格信息接口返回体中，[规格信息]中的code字段。
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
    * @param string $flavorRef 数据库代理规格码。      - 当局点支持主备模式数据库代理时，该字段不生效。     - 当局点支持集群模式数据库代理时，该字段请参考查询数据库代理规格信息接口返回体中，[规格信息]中的code字段。
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
    *  数据库代理节点数量。      - 当局点支持主备模式数据库代理时，请设置该字段为固定值2。     - 当局点支持集群模式数据库代理时，该字段最小值为2，最大值请参考查询数据库代理信息列表接口返回体中，[数据库代理信息列表]中的max_proxy_node_num字段值。
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
    * @param int $nodeNum 数据库代理节点数量。      - 当局点支持主备模式数据库代理时，请设置该字段为固定值2。     - 当局点支持集群模式数据库代理时，该字段最小值为2，最大值请参考查询数据库代理信息列表接口返回体中，[数据库代理信息列表]中的max_proxy_node_num字段值。
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
    *  数据库代理名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小长度为4个字符，最大不超过64个字节，以字母或中文字符开头，只能包含字母、数字、中划线、下划线、英文句号和中文。  当不选择该参数或局点仅支持主备模式数据库代理时，将随机生成名称。
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
    * @param string|null $proxyName 数据库代理名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：最小长度为4个字符，最大不超过64个字节，以字母或中文字符开头，只能包含字母、数字、中划线、下划线、英文句号和中文。  当不选择该参数或局点仅支持主备模式数据库代理时，将随机生成名称。
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
    *  数据库代理读写模式。 取值范围:     readwrite：读写模式。     readonly：只读模式。
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
    * @param string|null $proxyMode 数据库代理读写模式。 取值范围:     readwrite：读写模式。     readonly：只读模式。
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
    *  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主节点不接受读请求）。     2：表示负载均衡模式（数据库主节点接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
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
    * @param int|null $routeMode 数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主节点不接受读请求）。     2：表示负载均衡模式（数据库主节点接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
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
    *  数据库节点的读权重设置。      - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）或者在route_mode（路由模式）>0时，只能为只读节点选择权重。     - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）时，需要至少为一个只读实例配置权重。     - 在route_mode（路由模式）>0时，为主实例配置的权重将不生效。     - 该列表可以为空列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\InstancesWeight[]
    */
    public function getNodesReadWeight()
    {
        return $this->container['nodesReadWeight'];
    }

    /**
    * Sets nodesReadWeight
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\InstancesWeight[] $nodesReadWeight 数据库节点的读权重设置。      - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）或者在route_mode（路由模式）>0时，只能为只读节点选择权重。     - 在proxy_mode（数据库代理读写模式）为readonly（只读模式）时，需要至少为一个只读实例配置权重。     - 在route_mode（路由模式）>0时，为主实例配置的权重将不生效。     - 该列表可以为空列表。
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
    *  数据库VPC下的子网ID。 取值范围为该实例所在VPC下的所有子网ID。      - 如需使用该参数，请联系客服申请。     - 获取子网ID请参考[创建VPC和子网](https://support.huaweicloud.com/api-cce/cce_02_0100.html)
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
    * @param string|null $subnetId 数据库VPC下的子网ID。 取值范围为该实例所在VPC下的所有子网ID。      - 如需使用该参数，请联系客服申请。     - 获取子网ID请参考[创建VPC和子网](https://support.huaweicloud.com/api-cce/cce_02_0100.html)
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

