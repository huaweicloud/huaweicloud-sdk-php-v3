<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterScalingParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterScalingParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  扩容/缩容时系统获取的订单号，用户不需要配置。
    * scaleType  - scale_in：缩容 - scale_out：扩容
    * nodeId  扩容/缩容时新增或者减少节点的ID标识,参数值固定为node_orderadd。
    * nodeGroup  扩容或缩容的节点组。 - 如果node_group为core_node_default_group，表示Core节点组。 - 如果node_group为task_node_default_group，表示Task节点组。  该字段可以为空，为空时，系统默认值为core_node_default_group。
    * skipBootstrapScripts  是否跳过引导操作，默认为false，即执行引导操作。 仅在创建集群时配置了引导操作且扩容时有意义，表示扩容时是否在新增节点上执行创建集群时指定的引导操作。
    * scaleWithoutStart  扩容后是否启动扩容节点上的组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    * serverIds  缩容Task节点时指定待删除Task节点的ID列表。  - 当scale_type为扩容时，该参数不生效。 - 当scale_type为缩容且该参数不为空时，删除指定的Task节点。 - 当scale_type为缩容且server_ids为空时，按照系统规则自动选择删除Task节点。
    * instances  扩容或缩容的节点数。  - 扩容时的最大节点数为（500 - 集群Core/Task节点数）。例如，当前集群Core节点数为3，此处扩容的节点数必须小于等于497。     Core和Task节点总数最大值为500，如果用户需要的Core/Task节点数大于500，可以联系技术支持人员或者调用后台接口修改数据库。   - 缩容时Core节点数大于3或者Task节点数大于0可以进行节点删除。例如，当前集群Core节点和Task节点数均为5，Core节点可缩容的节点数为2（5减去3），Task节点可缩容节点数为小于等于5。
    * taskNodeInfo  taskNodeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'scaleType' => 'string',
            'nodeId' => 'string',
            'nodeGroup' => 'string',
            'skipBootstrapScripts' => 'string',
            'scaleWithoutStart' => 'bool',
            'serverIds' => 'string[]',
            'instances' => 'int',
            'taskNodeInfo' => '\HuaweiCloud\SDK\Mrs\V1\Model\TaskNodeInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  扩容/缩容时系统获取的订单号，用户不需要配置。
    * scaleType  - scale_in：缩容 - scale_out：扩容
    * nodeId  扩容/缩容时新增或者减少节点的ID标识,参数值固定为node_orderadd。
    * nodeGroup  扩容或缩容的节点组。 - 如果node_group为core_node_default_group，表示Core节点组。 - 如果node_group为task_node_default_group，表示Task节点组。  该字段可以为空，为空时，系统默认值为core_node_default_group。
    * skipBootstrapScripts  是否跳过引导操作，默认为false，即执行引导操作。 仅在创建集群时配置了引导操作且扩容时有意义，表示扩容时是否在新增节点上执行创建集群时指定的引导操作。
    * scaleWithoutStart  扩容后是否启动扩容节点上的组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    * serverIds  缩容Task节点时指定待删除Task节点的ID列表。  - 当scale_type为扩容时，该参数不生效。 - 当scale_type为缩容且该参数不为空时，删除指定的Task节点。 - 当scale_type为缩容且server_ids为空时，按照系统规则自动选择删除Task节点。
    * instances  扩容或缩容的节点数。  - 扩容时的最大节点数为（500 - 集群Core/Task节点数）。例如，当前集群Core节点数为3，此处扩容的节点数必须小于等于497。     Core和Task节点总数最大值为500，如果用户需要的Core/Task节点数大于500，可以联系技术支持人员或者调用后台接口修改数据库。   - 缩容时Core节点数大于3或者Task节点数大于0可以进行节点删除。例如，当前集群Core节点和Task节点数均为5，Core节点可缩容的节点数为2（5减去3），Task节点可缩容节点数为小于等于5。
    * taskNodeInfo  taskNodeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'scaleType' => null,
        'nodeId' => null,
        'nodeGroup' => null,
        'skipBootstrapScripts' => null,
        'scaleWithoutStart' => null,
        'serverIds' => null,
        'instances' => 'int32',
        'taskNodeInfo' => null
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
    * orderId  扩容/缩容时系统获取的订单号，用户不需要配置。
    * scaleType  - scale_in：缩容 - scale_out：扩容
    * nodeId  扩容/缩容时新增或者减少节点的ID标识,参数值固定为node_orderadd。
    * nodeGroup  扩容或缩容的节点组。 - 如果node_group为core_node_default_group，表示Core节点组。 - 如果node_group为task_node_default_group，表示Task节点组。  该字段可以为空，为空时，系统默认值为core_node_default_group。
    * skipBootstrapScripts  是否跳过引导操作，默认为false，即执行引导操作。 仅在创建集群时配置了引导操作且扩容时有意义，表示扩容时是否在新增节点上执行创建集群时指定的引导操作。
    * scaleWithoutStart  扩容后是否启动扩容节点上的组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    * serverIds  缩容Task节点时指定待删除Task节点的ID列表。  - 当scale_type为扩容时，该参数不生效。 - 当scale_type为缩容且该参数不为空时，删除指定的Task节点。 - 当scale_type为缩容且server_ids为空时，按照系统规则自动选择删除Task节点。
    * instances  扩容或缩容的节点数。  - 扩容时的最大节点数为（500 - 集群Core/Task节点数）。例如，当前集群Core节点数为3，此处扩容的节点数必须小于等于497。     Core和Task节点总数最大值为500，如果用户需要的Core/Task节点数大于500，可以联系技术支持人员或者调用后台接口修改数据库。   - 缩容时Core节点数大于3或者Task节点数大于0可以进行节点删除。例如，当前集群Core节点和Task节点数均为5，Core节点可缩容的节点数为2（5减去3），Task节点可缩容节点数为小于等于5。
    * taskNodeInfo  taskNodeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'scaleType' => 'scale_type',
            'nodeId' => 'node_id',
            'nodeGroup' => 'node_group',
            'skipBootstrapScripts' => 'skip_bootstrap_scripts',
            'scaleWithoutStart' => 'scale_without_start',
            'serverIds' => 'server_ids',
            'instances' => 'instances',
            'taskNodeInfo' => 'task_node_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  扩容/缩容时系统获取的订单号，用户不需要配置。
    * scaleType  - scale_in：缩容 - scale_out：扩容
    * nodeId  扩容/缩容时新增或者减少节点的ID标识,参数值固定为node_orderadd。
    * nodeGroup  扩容或缩容的节点组。 - 如果node_group为core_node_default_group，表示Core节点组。 - 如果node_group为task_node_default_group，表示Task节点组。  该字段可以为空，为空时，系统默认值为core_node_default_group。
    * skipBootstrapScripts  是否跳过引导操作，默认为false，即执行引导操作。 仅在创建集群时配置了引导操作且扩容时有意义，表示扩容时是否在新增节点上执行创建集群时指定的引导操作。
    * scaleWithoutStart  扩容后是否启动扩容节点上的组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    * serverIds  缩容Task节点时指定待删除Task节点的ID列表。  - 当scale_type为扩容时，该参数不生效。 - 当scale_type为缩容且该参数不为空时，删除指定的Task节点。 - 当scale_type为缩容且server_ids为空时，按照系统规则自动选择删除Task节点。
    * instances  扩容或缩容的节点数。  - 扩容时的最大节点数为（500 - 集群Core/Task节点数）。例如，当前集群Core节点数为3，此处扩容的节点数必须小于等于497。     Core和Task节点总数最大值为500，如果用户需要的Core/Task节点数大于500，可以联系技术支持人员或者调用后台接口修改数据库。   - 缩容时Core节点数大于3或者Task节点数大于0可以进行节点删除。例如，当前集群Core节点和Task节点数均为5，Core节点可缩容的节点数为2（5减去3），Task节点可缩容节点数为小于等于5。
    * taskNodeInfo  taskNodeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'scaleType' => 'setScaleType',
            'nodeId' => 'setNodeId',
            'nodeGroup' => 'setNodeGroup',
            'skipBootstrapScripts' => 'setSkipBootstrapScripts',
            'scaleWithoutStart' => 'setScaleWithoutStart',
            'serverIds' => 'setServerIds',
            'instances' => 'setInstances',
            'taskNodeInfo' => 'setTaskNodeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  扩容/缩容时系统获取的订单号，用户不需要配置。
    * scaleType  - scale_in：缩容 - scale_out：扩容
    * nodeId  扩容/缩容时新增或者减少节点的ID标识,参数值固定为node_orderadd。
    * nodeGroup  扩容或缩容的节点组。 - 如果node_group为core_node_default_group，表示Core节点组。 - 如果node_group为task_node_default_group，表示Task节点组。  该字段可以为空，为空时，系统默认值为core_node_default_group。
    * skipBootstrapScripts  是否跳过引导操作，默认为false，即执行引导操作。 仅在创建集群时配置了引导操作且扩容时有意义，表示扩容时是否在新增节点上执行创建集群时指定的引导操作。
    * scaleWithoutStart  扩容后是否启动扩容节点上的组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    * serverIds  缩容Task节点时指定待删除Task节点的ID列表。  - 当scale_type为扩容时，该参数不生效。 - 当scale_type为缩容且该参数不为空时，删除指定的Task节点。 - 当scale_type为缩容且server_ids为空时，按照系统规则自动选择删除Task节点。
    * instances  扩容或缩容的节点数。  - 扩容时的最大节点数为（500 - 集群Core/Task节点数）。例如，当前集群Core节点数为3，此处扩容的节点数必须小于等于497。     Core和Task节点总数最大值为500，如果用户需要的Core/Task节点数大于500，可以联系技术支持人员或者调用后台接口修改数据库。   - 缩容时Core节点数大于3或者Task节点数大于0可以进行节点删除。例如，当前集群Core节点和Task节点数均为5，Core节点可缩容的节点数为2（5减去3），Task节点可缩容节点数为小于等于5。
    * taskNodeInfo  taskNodeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'scaleType' => 'getScaleType',
            'nodeId' => 'getNodeId',
            'nodeGroup' => 'getNodeGroup',
            'skipBootstrapScripts' => 'getSkipBootstrapScripts',
            'scaleWithoutStart' => 'getScaleWithoutStart',
            'serverIds' => 'getServerIds',
            'instances' => 'getInstances',
            'taskNodeInfo' => 'getTaskNodeInfo'
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
    const SCALE_TYPE_SCALE_IN = 'scale_in';
    const SCALE_TYPE_SCALE_OUT = 'scale_out';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScaleTypeAllowableValues()
    {
        return [
            self::SCALE_TYPE_SCALE_IN,
            self::SCALE_TYPE_SCALE_OUT,
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['scaleType'] = isset($data['scaleType']) ? $data['scaleType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeGroup'] = isset($data['nodeGroup']) ? $data['nodeGroup'] : null;
        $this->container['skipBootstrapScripts'] = isset($data['skipBootstrapScripts']) ? $data['skipBootstrapScripts'] : null;
        $this->container['scaleWithoutStart'] = isset($data['scaleWithoutStart']) ? $data['scaleWithoutStart'] : null;
        $this->container['serverIds'] = isset($data['serverIds']) ? $data['serverIds'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['taskNodeInfo'] = isset($data['taskNodeInfo']) ? $data['taskNodeInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scaleType'] === null) {
            $invalidProperties[] = "'scaleType' can't be null";
        }
            $allowedValues = $this->getScaleTypeAllowableValues();
                if (!is_null($this->container['scaleType']) && !in_array($this->container['scaleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scaleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['instances'] === null) {
            $invalidProperties[] = "'instances' can't be null";
        }
            if (($this->container['instances'] < 1)) {
                $invalidProperties[] = "invalid value for 'instances', must be bigger than or equal to 1.";
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
    * Gets orderId
    *  扩容/缩容时系统获取的订单号，用户不需要配置。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 扩容/缩容时系统获取的订单号，用户不需要配置。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets scaleType
    *  - scale_in：缩容 - scale_out：扩容
    *
    * @return string
    */
    public function getScaleType()
    {
        return $this->container['scaleType'];
    }

    /**
    * Sets scaleType
    *
    * @param string $scaleType - scale_in：缩容 - scale_out：扩容
    *
    * @return $this
    */
    public function setScaleType($scaleType)
    {
        $this->container['scaleType'] = $scaleType;
        return $this;
    }

    /**
    * Gets nodeId
    *  扩容/缩容时新增或者减少节点的ID标识,参数值固定为node_orderadd。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 扩容/缩容时新增或者减少节点的ID标识,参数值固定为node_orderadd。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeGroup
    *  扩容或缩容的节点组。 - 如果node_group为core_node_default_group，表示Core节点组。 - 如果node_group为task_node_default_group，表示Task节点组。  该字段可以为空，为空时，系统默认值为core_node_default_group。
    *
    * @return string|null
    */
    public function getNodeGroup()
    {
        return $this->container['nodeGroup'];
    }

    /**
    * Sets nodeGroup
    *
    * @param string|null $nodeGroup 扩容或缩容的节点组。 - 如果node_group为core_node_default_group，表示Core节点组。 - 如果node_group为task_node_default_group，表示Task节点组。  该字段可以为空，为空时，系统默认值为core_node_default_group。
    *
    * @return $this
    */
    public function setNodeGroup($nodeGroup)
    {
        $this->container['nodeGroup'] = $nodeGroup;
        return $this;
    }

    /**
    * Gets skipBootstrapScripts
    *  是否跳过引导操作，默认为false，即执行引导操作。 仅在创建集群时配置了引导操作且扩容时有意义，表示扩容时是否在新增节点上执行创建集群时指定的引导操作。
    *
    * @return string|null
    */
    public function getSkipBootstrapScripts()
    {
        return $this->container['skipBootstrapScripts'];
    }

    /**
    * Sets skipBootstrapScripts
    *
    * @param string|null $skipBootstrapScripts 是否跳过引导操作，默认为false，即执行引导操作。 仅在创建集群时配置了引导操作且扩容时有意义，表示扩容时是否在新增节点上执行创建集群时指定的引导操作。
    *
    * @return $this
    */
    public function setSkipBootstrapScripts($skipBootstrapScripts)
    {
        $this->container['skipBootstrapScripts'] = $skipBootstrapScripts;
        return $this;
    }

    /**
    * Gets scaleWithoutStart
    *  扩容后是否启动扩容节点上的组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @return bool|null
    */
    public function getScaleWithoutStart()
    {
        return $this->container['scaleWithoutStart'];
    }

    /**
    * Sets scaleWithoutStart
    *
    * @param bool|null $scaleWithoutStart 扩容后是否启动扩容节点上的组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @return $this
    */
    public function setScaleWithoutStart($scaleWithoutStart)
    {
        $this->container['scaleWithoutStart'] = $scaleWithoutStart;
        return $this;
    }

    /**
    * Gets serverIds
    *  缩容Task节点时指定待删除Task节点的ID列表。  - 当scale_type为扩容时，该参数不生效。 - 当scale_type为缩容且该参数不为空时，删除指定的Task节点。 - 当scale_type为缩容且server_ids为空时，按照系统规则自动选择删除Task节点。
    *
    * @return string[]|null
    */
    public function getServerIds()
    {
        return $this->container['serverIds'];
    }

    /**
    * Sets serverIds
    *
    * @param string[]|null $serverIds 缩容Task节点时指定待删除Task节点的ID列表。  - 当scale_type为扩容时，该参数不生效。 - 当scale_type为缩容且该参数不为空时，删除指定的Task节点。 - 当scale_type为缩容且server_ids为空时，按照系统规则自动选择删除Task节点。
    *
    * @return $this
    */
    public function setServerIds($serverIds)
    {
        $this->container['serverIds'] = $serverIds;
        return $this;
    }

    /**
    * Gets instances
    *  扩容或缩容的节点数。  - 扩容时的最大节点数为（500 - 集群Core/Task节点数）。例如，当前集群Core节点数为3，此处扩容的节点数必须小于等于497。     Core和Task节点总数最大值为500，如果用户需要的Core/Task节点数大于500，可以联系技术支持人员或者调用后台接口修改数据库。   - 缩容时Core节点数大于3或者Task节点数大于0可以进行节点删除。例如，当前集群Core节点和Task节点数均为5，Core节点可缩容的节点数为2（5减去3），Task节点可缩容节点数为小于等于5。
    *
    * @return int
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param int $instances 扩容或缩容的节点数。  - 扩容时的最大节点数为（500 - 集群Core/Task节点数）。例如，当前集群Core节点数为3，此处扩容的节点数必须小于等于497。     Core和Task节点总数最大值为500，如果用户需要的Core/Task节点数大于500，可以联系技术支持人员或者调用后台接口修改数据库。   - 缩容时Core节点数大于3或者Task节点数大于0可以进行节点删除。例如，当前集群Core节点和Task节点数均为5，Core节点可缩容的节点数为2（5减去3），Task节点可缩容节点数为小于等于5。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets taskNodeInfo
    *  taskNodeInfo
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\TaskNodeInfo|null
    */
    public function getTaskNodeInfo()
    {
        return $this->container['taskNodeInfo'];
    }

    /**
    * Sets taskNodeInfo
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\TaskNodeInfo|null $taskNodeInfo taskNodeInfo
    *
    * @return $this
    */
    public function setTaskNodeInfo($taskNodeInfo)
    {
        $this->container['taskNodeInfo'] = $taskNodeInfo;
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

