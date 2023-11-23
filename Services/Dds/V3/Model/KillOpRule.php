<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KillOpRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KillOpRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  killOp规则ID。
    * operationTypes  Sql语句操作类型。 最多支持同时选择6种语句类型。同时选择多种类型时，匹配任意一种类型时规则生效。 - insert，表示插入语句。  - update，表示更新语句。  - query，表示查询语句。  - command，表示命令语句。  - remove，表示删除语句。  - getmore，表示获取更多数据语句。
    * status  killOp规则状态。  - ENABLED，规则生效中。 - DISABLED，规则禁用中。
    * namespaces  表命名空间。取值格式：库名.表名。同时配置多组信息时，匹配任意一组信息时规则生效 - 目前仅支持配置一组信息 - 可为空，表示不做限制。 - 单独库名，表示对某个库下的所有集合生效。 - 库名.表名，表示对具体库下的具体的集合生效。
    * clientIps  客户端连接IP。只支持IPV4。可为空，表示不做限制。最多支持配置5个IP。同时配置多个IP时，匹配任意一个IP时规则生效。
    * planSummary  执行计划。 默认值空，表示不做限制。  - COLLSCAN。 - SORT_KEY_GENERATOR。 - SKIP。 - LIMIT。 - GEO_NEAR_2DSPHERE。 - GEO_NEAR_2D。 - AGGREGATE。 - OR。
    * maxConcurrency  最大并发数。 取值： 不能为负数，可为空，默认为0，表示不做限制， 最小值为1， 最大值为100000。secs_running和max_concurrency不可同时为0。
    * secsRunning  单条操作最大运行时长。取值： 不能为负数，可为空，默认为0，表示不做限制。单位：s。最小值为2， 最大值为86400。secs_running和max_concurrency不可同时为0。
    * nodeType  节点类型。  - mongos_shard，表示同时在mongos和shard节点生效。 - mongos，表示只在集群mongos节点生效。 - shard，表示只在集群shard节点生效。 - replica，表示只在副本集节点生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'operationTypes' => 'string',
            'status' => 'string',
            'namespaces' => 'string',
            'clientIps' => 'string',
            'planSummary' => 'string',
            'maxConcurrency' => 'int',
            'secsRunning' => 'int',
            'nodeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  killOp规则ID。
    * operationTypes  Sql语句操作类型。 最多支持同时选择6种语句类型。同时选择多种类型时，匹配任意一种类型时规则生效。 - insert，表示插入语句。  - update，表示更新语句。  - query，表示查询语句。  - command，表示命令语句。  - remove，表示删除语句。  - getmore，表示获取更多数据语句。
    * status  killOp规则状态。  - ENABLED，规则生效中。 - DISABLED，规则禁用中。
    * namespaces  表命名空间。取值格式：库名.表名。同时配置多组信息时，匹配任意一组信息时规则生效 - 目前仅支持配置一组信息 - 可为空，表示不做限制。 - 单独库名，表示对某个库下的所有集合生效。 - 库名.表名，表示对具体库下的具体的集合生效。
    * clientIps  客户端连接IP。只支持IPV4。可为空，表示不做限制。最多支持配置5个IP。同时配置多个IP时，匹配任意一个IP时规则生效。
    * planSummary  执行计划。 默认值空，表示不做限制。  - COLLSCAN。 - SORT_KEY_GENERATOR。 - SKIP。 - LIMIT。 - GEO_NEAR_2DSPHERE。 - GEO_NEAR_2D。 - AGGREGATE。 - OR。
    * maxConcurrency  最大并发数。 取值： 不能为负数，可为空，默认为0，表示不做限制， 最小值为1， 最大值为100000。secs_running和max_concurrency不可同时为0。
    * secsRunning  单条操作最大运行时长。取值： 不能为负数，可为空，默认为0，表示不做限制。单位：s。最小值为2， 最大值为86400。secs_running和max_concurrency不可同时为0。
    * nodeType  节点类型。  - mongos_shard，表示同时在mongos和shard节点生效。 - mongos，表示只在集群mongos节点生效。 - shard，表示只在集群shard节点生效。 - replica，表示只在副本集节点生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'operationTypes' => null,
        'status' => null,
        'namespaces' => null,
        'clientIps' => null,
        'planSummary' => null,
        'maxConcurrency' => 'int32',
        'secsRunning' => 'int32',
        'nodeType' => null
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
    * id  killOp规则ID。
    * operationTypes  Sql语句操作类型。 最多支持同时选择6种语句类型。同时选择多种类型时，匹配任意一种类型时规则生效。 - insert，表示插入语句。  - update，表示更新语句。  - query，表示查询语句。  - command，表示命令语句。  - remove，表示删除语句。  - getmore，表示获取更多数据语句。
    * status  killOp规则状态。  - ENABLED，规则生效中。 - DISABLED，规则禁用中。
    * namespaces  表命名空间。取值格式：库名.表名。同时配置多组信息时，匹配任意一组信息时规则生效 - 目前仅支持配置一组信息 - 可为空，表示不做限制。 - 单独库名，表示对某个库下的所有集合生效。 - 库名.表名，表示对具体库下的具体的集合生效。
    * clientIps  客户端连接IP。只支持IPV4。可为空，表示不做限制。最多支持配置5个IP。同时配置多个IP时，匹配任意一个IP时规则生效。
    * planSummary  执行计划。 默认值空，表示不做限制。  - COLLSCAN。 - SORT_KEY_GENERATOR。 - SKIP。 - LIMIT。 - GEO_NEAR_2DSPHERE。 - GEO_NEAR_2D。 - AGGREGATE。 - OR。
    * maxConcurrency  最大并发数。 取值： 不能为负数，可为空，默认为0，表示不做限制， 最小值为1， 最大值为100000。secs_running和max_concurrency不可同时为0。
    * secsRunning  单条操作最大运行时长。取值： 不能为负数，可为空，默认为0，表示不做限制。单位：s。最小值为2， 最大值为86400。secs_running和max_concurrency不可同时为0。
    * nodeType  节点类型。  - mongos_shard，表示同时在mongos和shard节点生效。 - mongos，表示只在集群mongos节点生效。 - shard，表示只在集群shard节点生效。 - replica，表示只在副本集节点生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'operationTypes' => 'operation_types',
            'status' => 'status',
            'namespaces' => 'namespaces',
            'clientIps' => 'client_ips',
            'planSummary' => 'plan_summary',
            'maxConcurrency' => 'max_concurrency',
            'secsRunning' => 'secs_running',
            'nodeType' => 'node_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  killOp规则ID。
    * operationTypes  Sql语句操作类型。 最多支持同时选择6种语句类型。同时选择多种类型时，匹配任意一种类型时规则生效。 - insert，表示插入语句。  - update，表示更新语句。  - query，表示查询语句。  - command，表示命令语句。  - remove，表示删除语句。  - getmore，表示获取更多数据语句。
    * status  killOp规则状态。  - ENABLED，规则生效中。 - DISABLED，规则禁用中。
    * namespaces  表命名空间。取值格式：库名.表名。同时配置多组信息时，匹配任意一组信息时规则生效 - 目前仅支持配置一组信息 - 可为空，表示不做限制。 - 单独库名，表示对某个库下的所有集合生效。 - 库名.表名，表示对具体库下的具体的集合生效。
    * clientIps  客户端连接IP。只支持IPV4。可为空，表示不做限制。最多支持配置5个IP。同时配置多个IP时，匹配任意一个IP时规则生效。
    * planSummary  执行计划。 默认值空，表示不做限制。  - COLLSCAN。 - SORT_KEY_GENERATOR。 - SKIP。 - LIMIT。 - GEO_NEAR_2DSPHERE。 - GEO_NEAR_2D。 - AGGREGATE。 - OR。
    * maxConcurrency  最大并发数。 取值： 不能为负数，可为空，默认为0，表示不做限制， 最小值为1， 最大值为100000。secs_running和max_concurrency不可同时为0。
    * secsRunning  单条操作最大运行时长。取值： 不能为负数，可为空，默认为0，表示不做限制。单位：s。最小值为2， 最大值为86400。secs_running和max_concurrency不可同时为0。
    * nodeType  节点类型。  - mongos_shard，表示同时在mongos和shard节点生效。 - mongos，表示只在集群mongos节点生效。 - shard，表示只在集群shard节点生效。 - replica，表示只在副本集节点生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'operationTypes' => 'setOperationTypes',
            'status' => 'setStatus',
            'namespaces' => 'setNamespaces',
            'clientIps' => 'setClientIps',
            'planSummary' => 'setPlanSummary',
            'maxConcurrency' => 'setMaxConcurrency',
            'secsRunning' => 'setSecsRunning',
            'nodeType' => 'setNodeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  killOp规则ID。
    * operationTypes  Sql语句操作类型。 最多支持同时选择6种语句类型。同时选择多种类型时，匹配任意一种类型时规则生效。 - insert，表示插入语句。  - update，表示更新语句。  - query，表示查询语句。  - command，表示命令语句。  - remove，表示删除语句。  - getmore，表示获取更多数据语句。
    * status  killOp规则状态。  - ENABLED，规则生效中。 - DISABLED，规则禁用中。
    * namespaces  表命名空间。取值格式：库名.表名。同时配置多组信息时，匹配任意一组信息时规则生效 - 目前仅支持配置一组信息 - 可为空，表示不做限制。 - 单独库名，表示对某个库下的所有集合生效。 - 库名.表名，表示对具体库下的具体的集合生效。
    * clientIps  客户端连接IP。只支持IPV4。可为空，表示不做限制。最多支持配置5个IP。同时配置多个IP时，匹配任意一个IP时规则生效。
    * planSummary  执行计划。 默认值空，表示不做限制。  - COLLSCAN。 - SORT_KEY_GENERATOR。 - SKIP。 - LIMIT。 - GEO_NEAR_2DSPHERE。 - GEO_NEAR_2D。 - AGGREGATE。 - OR。
    * maxConcurrency  最大并发数。 取值： 不能为负数，可为空，默认为0，表示不做限制， 最小值为1， 最大值为100000。secs_running和max_concurrency不可同时为0。
    * secsRunning  单条操作最大运行时长。取值： 不能为负数，可为空，默认为0，表示不做限制。单位：s。最小值为2， 最大值为86400。secs_running和max_concurrency不可同时为0。
    * nodeType  节点类型。  - mongos_shard，表示同时在mongos和shard节点生效。 - mongos，表示只在集群mongos节点生效。 - shard，表示只在集群shard节点生效。 - replica，表示只在副本集节点生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'operationTypes' => 'getOperationTypes',
            'status' => 'getStatus',
            'namespaces' => 'getNamespaces',
            'clientIps' => 'getClientIps',
            'planSummary' => 'getPlanSummary',
            'maxConcurrency' => 'getMaxConcurrency',
            'secsRunning' => 'getSecsRunning',
            'nodeType' => 'getNodeType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['operationTypes'] = isset($data['operationTypes']) ? $data['operationTypes'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
        $this->container['clientIps'] = isset($data['clientIps']) ? $data['clientIps'] : null;
        $this->container['planSummary'] = isset($data['planSummary']) ? $data['planSummary'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['secsRunning'] = isset($data['secsRunning']) ? $data['secsRunning'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
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
    * Gets id
    *  killOp规则ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id killOp规则ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operationTypes
    *  Sql语句操作类型。 最多支持同时选择6种语句类型。同时选择多种类型时，匹配任意一种类型时规则生效。 - insert，表示插入语句。  - update，表示更新语句。  - query，表示查询语句。  - command，表示命令语句。  - remove，表示删除语句。  - getmore，表示获取更多数据语句。
    *
    * @return string|null
    */
    public function getOperationTypes()
    {
        return $this->container['operationTypes'];
    }

    /**
    * Sets operationTypes
    *
    * @param string|null $operationTypes Sql语句操作类型。 最多支持同时选择6种语句类型。同时选择多种类型时，匹配任意一种类型时规则生效。 - insert，表示插入语句。  - update，表示更新语句。  - query，表示查询语句。  - command，表示命令语句。  - remove，表示删除语句。  - getmore，表示获取更多数据语句。
    *
    * @return $this
    */
    public function setOperationTypes($operationTypes)
    {
        $this->container['operationTypes'] = $operationTypes;
        return $this;
    }

    /**
    * Gets status
    *  killOp规则状态。  - ENABLED，规则生效中。 - DISABLED，规则禁用中。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status killOp规则状态。  - ENABLED，规则生效中。 - DISABLED，规则禁用中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets namespaces
    *  表命名空间。取值格式：库名.表名。同时配置多组信息时，匹配任意一组信息时规则生效 - 目前仅支持配置一组信息 - 可为空，表示不做限制。 - 单独库名，表示对某个库下的所有集合生效。 - 库名.表名，表示对具体库下的具体的集合生效。
    *
    * @return string|null
    */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
    * Sets namespaces
    *
    * @param string|null $namespaces 表命名空间。取值格式：库名.表名。同时配置多组信息时，匹配任意一组信息时规则生效 - 目前仅支持配置一组信息 - 可为空，表示不做限制。 - 单独库名，表示对某个库下的所有集合生效。 - 库名.表名，表示对具体库下的具体的集合生效。
    *
    * @return $this
    */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;
        return $this;
    }

    /**
    * Gets clientIps
    *  客户端连接IP。只支持IPV4。可为空，表示不做限制。最多支持配置5个IP。同时配置多个IP时，匹配任意一个IP时规则生效。
    *
    * @return string|null
    */
    public function getClientIps()
    {
        return $this->container['clientIps'];
    }

    /**
    * Sets clientIps
    *
    * @param string|null $clientIps 客户端连接IP。只支持IPV4。可为空，表示不做限制。最多支持配置5个IP。同时配置多个IP时，匹配任意一个IP时规则生效。
    *
    * @return $this
    */
    public function setClientIps($clientIps)
    {
        $this->container['clientIps'] = $clientIps;
        return $this;
    }

    /**
    * Gets planSummary
    *  执行计划。 默认值空，表示不做限制。  - COLLSCAN。 - SORT_KEY_GENERATOR。 - SKIP。 - LIMIT。 - GEO_NEAR_2DSPHERE。 - GEO_NEAR_2D。 - AGGREGATE。 - OR。
    *
    * @return string|null
    */
    public function getPlanSummary()
    {
        return $this->container['planSummary'];
    }

    /**
    * Sets planSummary
    *
    * @param string|null $planSummary 执行计划。 默认值空，表示不做限制。  - COLLSCAN。 - SORT_KEY_GENERATOR。 - SKIP。 - LIMIT。 - GEO_NEAR_2DSPHERE。 - GEO_NEAR_2D。 - AGGREGATE。 - OR。
    *
    * @return $this
    */
    public function setPlanSummary($planSummary)
    {
        $this->container['planSummary'] = $planSummary;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  最大并发数。 取值： 不能为负数，可为空，默认为0，表示不做限制， 最小值为1， 最大值为100000。secs_running和max_concurrency不可同时为0。
    *
    * @return int|null
    */
    public function getMaxConcurrency()
    {
        return $this->container['maxConcurrency'];
    }

    /**
    * Sets maxConcurrency
    *
    * @param int|null $maxConcurrency 最大并发数。 取值： 不能为负数，可为空，默认为0，表示不做限制， 最小值为1， 最大值为100000。secs_running和max_concurrency不可同时为0。
    *
    * @return $this
    */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;
        return $this;
    }

    /**
    * Gets secsRunning
    *  单条操作最大运行时长。取值： 不能为负数，可为空，默认为0，表示不做限制。单位：s。最小值为2， 最大值为86400。secs_running和max_concurrency不可同时为0。
    *
    * @return int|null
    */
    public function getSecsRunning()
    {
        return $this->container['secsRunning'];
    }

    /**
    * Sets secsRunning
    *
    * @param int|null $secsRunning 单条操作最大运行时长。取值： 不能为负数，可为空，默认为0，表示不做限制。单位：s。最小值为2， 最大值为86400。secs_running和max_concurrency不可同时为0。
    *
    * @return $this
    */
    public function setSecsRunning($secsRunning)
    {
        $this->container['secsRunning'] = $secsRunning;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型。  - mongos_shard，表示同时在mongos和shard节点生效。 - mongos，表示只在集群mongos节点生效。 - shard，表示只在集群shard节点生效。 - replica，表示只在副本集节点生效。
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型。  - mongos_shard，表示同时在mongos和shard节点生效。 - mongos，表示只在集群mongos节点生效。 - shard，表示只在集群shard节点生效。 - replica，表示只在副本集节点生效。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
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

