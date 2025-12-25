<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCheckitemDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCheckitemDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  检查项的id
    * aggregationHandleStatus  检查项结果聚合状态
    * auditProcedure  检查项的检查过程
    * impact  检查项的影响
    * cloudServer  检查项所属云服务
    * description  对检查项的描述
    * level  表示该检查项的严重程度 informational：提示 low: 低危 medium：中危 high: 高危 fatal：致命
    * method  表示该检查项的检查方式 0：自动项 3: 剧本流程/logic app
    * name  检查项的名称
    * source  表示该检查项的来源 0：默认/default 2: 剧本流程/playbook
    * workflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * specCheckitemList  检查项所属遵从包的信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'aggregationHandleStatus' => 'string',
            'auditProcedure' => 'string',
            'impact' => 'string',
            'cloudServer' => 'string',
            'description' => 'string',
            'level' => 'string',
            'method' => 'int',
            'name' => 'string',
            'source' => 'int',
            'workflowId' => 'string',
            'specCheckitemList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\SpecCheckitemModel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  检查项的id
    * aggregationHandleStatus  检查项结果聚合状态
    * auditProcedure  检查项的检查过程
    * impact  检查项的影响
    * cloudServer  检查项所属云服务
    * description  对检查项的描述
    * level  表示该检查项的严重程度 informational：提示 low: 低危 medium：中危 high: 高危 fatal：致命
    * method  表示该检查项的检查方式 0：自动项 3: 剧本流程/logic app
    * name  检查项的名称
    * source  表示该检查项的来源 0：默认/default 2: 剧本流程/playbook
    * workflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * specCheckitemList  检查项所属遵从包的信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'aggregationHandleStatus' => null,
        'auditProcedure' => null,
        'impact' => null,
        'cloudServer' => null,
        'description' => null,
        'level' => null,
        'method' => null,
        'name' => null,
        'source' => null,
        'workflowId' => null,
        'specCheckitemList' => null
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
    * uuid  检查项的id
    * aggregationHandleStatus  检查项结果聚合状态
    * auditProcedure  检查项的检查过程
    * impact  检查项的影响
    * cloudServer  检查项所属云服务
    * description  对检查项的描述
    * level  表示该检查项的严重程度 informational：提示 low: 低危 medium：中危 high: 高危 fatal：致命
    * method  表示该检查项的检查方式 0：自动项 3: 剧本流程/logic app
    * name  检查项的名称
    * source  表示该检查项的来源 0：默认/default 2: 剧本流程/playbook
    * workflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * specCheckitemList  检查项所属遵从包的信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'aggregationHandleStatus' => 'aggregation_handle_status',
            'auditProcedure' => 'audit_procedure',
            'impact' => 'impact',
            'cloudServer' => 'cloud_server',
            'description' => 'description',
            'level' => 'level',
            'method' => 'method',
            'name' => 'name',
            'source' => 'source',
            'workflowId' => 'workflow_id',
            'specCheckitemList' => 'spec_checkitem_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  检查项的id
    * aggregationHandleStatus  检查项结果聚合状态
    * auditProcedure  检查项的检查过程
    * impact  检查项的影响
    * cloudServer  检查项所属云服务
    * description  对检查项的描述
    * level  表示该检查项的严重程度 informational：提示 low: 低危 medium：中危 high: 高危 fatal：致命
    * method  表示该检查项的检查方式 0：自动项 3: 剧本流程/logic app
    * name  检查项的名称
    * source  表示该检查项的来源 0：默认/default 2: 剧本流程/playbook
    * workflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * specCheckitemList  检查项所属遵从包的信息
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'aggregationHandleStatus' => 'setAggregationHandleStatus',
            'auditProcedure' => 'setAuditProcedure',
            'impact' => 'setImpact',
            'cloudServer' => 'setCloudServer',
            'description' => 'setDescription',
            'level' => 'setLevel',
            'method' => 'setMethod',
            'name' => 'setName',
            'source' => 'setSource',
            'workflowId' => 'setWorkflowId',
            'specCheckitemList' => 'setSpecCheckitemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  检查项的id
    * aggregationHandleStatus  检查项结果聚合状态
    * auditProcedure  检查项的检查过程
    * impact  检查项的影响
    * cloudServer  检查项所属云服务
    * description  对检查项的描述
    * level  表示该检查项的严重程度 informational：提示 low: 低危 medium：中危 high: 高危 fatal：致命
    * method  表示该检查项的检查方式 0：自动项 3: 剧本流程/logic app
    * name  检查项的名称
    * source  表示该检查项的来源 0：默认/default 2: 剧本流程/playbook
    * workflowId  **参数解释**: 流程ID **约束限制**: 不涉及
    * specCheckitemList  检查项所属遵从包的信息
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'aggregationHandleStatus' => 'getAggregationHandleStatus',
            'auditProcedure' => 'getAuditProcedure',
            'impact' => 'getImpact',
            'cloudServer' => 'getCloudServer',
            'description' => 'getDescription',
            'level' => 'getLevel',
            'method' => 'getMethod',
            'name' => 'getName',
            'source' => 'getSource',
            'workflowId' => 'getWorkflowId',
            'specCheckitemList' => 'getSpecCheckitemList'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['aggregationHandleStatus'] = isset($data['aggregationHandleStatus']) ? $data['aggregationHandleStatus'] : null;
        $this->container['auditProcedure'] = isset($data['auditProcedure']) ? $data['auditProcedure'] : null;
        $this->container['impact'] = isset($data['impact']) ? $data['impact'] : null;
        $this->container['cloudServer'] = isset($data['cloudServer']) ? $data['cloudServer'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['specCheckitemList'] = isset($data['specCheckitemList']) ? $data['specCheckitemList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 64)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aggregationHandleStatus']) && (mb_strlen($this->container['aggregationHandleStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'aggregationHandleStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aggregationHandleStatus']) && (mb_strlen($this->container['aggregationHandleStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'aggregationHandleStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['auditProcedure']) && (mb_strlen($this->container['auditProcedure']) > 64)) {
                $invalidProperties[] = "invalid value for 'auditProcedure', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['auditProcedure']) && (mb_strlen($this->container['auditProcedure']) < 0)) {
                $invalidProperties[] = "invalid value for 'auditProcedure', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['impact']) && (mb_strlen($this->container['impact']) > 64)) {
                $invalidProperties[] = "invalid value for 'impact', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['impact']) && (mb_strlen($this->container['impact']) < 0)) {
                $invalidProperties[] = "invalid value for 'impact', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudServer']) && (mb_strlen($this->container['cloudServer']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServer', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudServer']) && (mb_strlen($this->container['cloudServer']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServer', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 64)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['method']) && ($this->container['method'] > 99)) {
                $invalidProperties[] = "invalid value for 'method', must be smaller than or equal to 99.";
            }
            if (!is_null($this->container['method']) && ($this->container['method'] < 0)) {
                $invalidProperties[] = "invalid value for 'method', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['source']) && ($this->container['source'] > 99)) {
                $invalidProperties[] = "invalid value for 'source', must be smaller than or equal to 99.";
            }
            if (!is_null($this->container['source']) && ($this->container['source'] < 0)) {
                $invalidProperties[] = "invalid value for 'source', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be bigger than or equal to 32.";
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
    * Gets uuid
    *  检查项的id
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 检查项的id
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets aggregationHandleStatus
    *  检查项结果聚合状态
    *
    * @return string|null
    */
    public function getAggregationHandleStatus()
    {
        return $this->container['aggregationHandleStatus'];
    }

    /**
    * Sets aggregationHandleStatus
    *
    * @param string|null $aggregationHandleStatus 检查项结果聚合状态
    *
    * @return $this
    */
    public function setAggregationHandleStatus($aggregationHandleStatus)
    {
        $this->container['aggregationHandleStatus'] = $aggregationHandleStatus;
        return $this;
    }

    /**
    * Gets auditProcedure
    *  检查项的检查过程
    *
    * @return string|null
    */
    public function getAuditProcedure()
    {
        return $this->container['auditProcedure'];
    }

    /**
    * Sets auditProcedure
    *
    * @param string|null $auditProcedure 检查项的检查过程
    *
    * @return $this
    */
    public function setAuditProcedure($auditProcedure)
    {
        $this->container['auditProcedure'] = $auditProcedure;
        return $this;
    }

    /**
    * Gets impact
    *  检查项的影响
    *
    * @return string|null
    */
    public function getImpact()
    {
        return $this->container['impact'];
    }

    /**
    * Sets impact
    *
    * @param string|null $impact 检查项的影响
    *
    * @return $this
    */
    public function setImpact($impact)
    {
        $this->container['impact'] = $impact;
        return $this;
    }

    /**
    * Gets cloudServer
    *  检查项所属云服务
    *
    * @return string|null
    */
    public function getCloudServer()
    {
        return $this->container['cloudServer'];
    }

    /**
    * Sets cloudServer
    *
    * @param string|null $cloudServer 检查项所属云服务
    *
    * @return $this
    */
    public function setCloudServer($cloudServer)
    {
        $this->container['cloudServer'] = $cloudServer;
        return $this;
    }

    /**
    * Gets description
    *  对检查项的描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 对检查项的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets level
    *  表示该检查项的严重程度 informational：提示 low: 低危 medium：中危 high: 高危 fatal：致命
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 表示该检查项的严重程度 informational：提示 low: 低危 medium：中危 high: 高危 fatal：致命
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets method
    *  表示该检查项的检查方式 0：自动项 3: 剧本流程/logic app
    *
    * @return int|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param int|null $method 表示该检查项的检查方式 0：自动项 3: 剧本流程/logic app
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets name
    *  检查项的名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 检查项的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets source
    *  表示该检查项的来源 0：默认/default 2: 剧本流程/playbook
    *
    * @return int|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param int|null $source 表示该检查项的来源 0：默认/default 2: 剧本流程/playbook
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets workflowId
    *  **参数解释**: 流程ID **约束限制**: 不涉及
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId **参数解释**: 流程ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets specCheckitemList
    *  检查项所属遵从包的信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\SpecCheckitemModel[]|null
    */
    public function getSpecCheckitemList()
    {
        return $this->container['specCheckitemList'];
    }

    /**
    * Sets specCheckitemList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\SpecCheckitemModel[]|null $specCheckitemList 检查项所属遵从包的信息
    *
    * @return $this
    */
    public function setSpecCheckitemList($specCheckitemList)
    {
        $this->container['specCheckitemList'] = $specCheckitemList;
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

