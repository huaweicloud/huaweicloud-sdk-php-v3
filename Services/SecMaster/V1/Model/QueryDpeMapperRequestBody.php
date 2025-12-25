<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDpeMapperRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDpeMapperRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mappingId  映射id
    * workspaceId  映射id
    * projectId  映射id
    * dataclassId  映射id
    * datasourceInstanceId  映射id
    * status  状态(enabled，disabled)
    * name  名称
    * hasPreprocessRule  是否配置预处理规则
    * startTime  开始时间
    * endTime  结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mappingId' => 'string',
            'workspaceId' => 'string',
            'projectId' => 'string',
            'dataclassId' => 'string',
            'datasourceInstanceId' => 'string',
            'status' => 'string',
            'name' => 'string',
            'hasPreprocessRule' => 'bool',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mappingId  映射id
    * workspaceId  映射id
    * projectId  映射id
    * dataclassId  映射id
    * datasourceInstanceId  映射id
    * status  状态(enabled，disabled)
    * name  名称
    * hasPreprocessRule  是否配置预处理规则
    * startTime  开始时间
    * endTime  结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mappingId' => null,
        'workspaceId' => null,
        'projectId' => null,
        'dataclassId' => null,
        'datasourceInstanceId' => null,
        'status' => null,
        'name' => null,
        'hasPreprocessRule' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'offset' => 'int32',
        'limit' => 'int32'
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
    * mappingId  映射id
    * workspaceId  映射id
    * projectId  映射id
    * dataclassId  映射id
    * datasourceInstanceId  映射id
    * status  状态(enabled，disabled)
    * name  名称
    * hasPreprocessRule  是否配置预处理规则
    * startTime  开始时间
    * endTime  结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mappingId' => 'mapping_id',
            'workspaceId' => 'workspace_id',
            'projectId' => 'project_id',
            'dataclassId' => 'dataclass_id',
            'datasourceInstanceId' => 'datasource_instance_id',
            'status' => 'status',
            'name' => 'name',
            'hasPreprocessRule' => 'has_preprocess_rule',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mappingId  映射id
    * workspaceId  映射id
    * projectId  映射id
    * dataclassId  映射id
    * datasourceInstanceId  映射id
    * status  状态(enabled，disabled)
    * name  名称
    * hasPreprocessRule  是否配置预处理规则
    * startTime  开始时间
    * endTime  结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'mappingId' => 'setMappingId',
            'workspaceId' => 'setWorkspaceId',
            'projectId' => 'setProjectId',
            'dataclassId' => 'setDataclassId',
            'datasourceInstanceId' => 'setDatasourceInstanceId',
            'status' => 'setStatus',
            'name' => 'setName',
            'hasPreprocessRule' => 'setHasPreprocessRule',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mappingId  映射id
    * workspaceId  映射id
    * projectId  映射id
    * dataclassId  映射id
    * datasourceInstanceId  映射id
    * status  状态(enabled，disabled)
    * name  名称
    * hasPreprocessRule  是否配置预处理规则
    * startTime  开始时间
    * endTime  结束时间
    * offset  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    * limit  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'mappingId' => 'getMappingId',
            'workspaceId' => 'getWorkspaceId',
            'projectId' => 'getProjectId',
            'dataclassId' => 'getDataclassId',
            'datasourceInstanceId' => 'getDatasourceInstanceId',
            'status' => 'getStatus',
            'name' => 'getName',
            'hasPreprocessRule' => 'getHasPreprocessRule',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['mappingId'] = isset($data['mappingId']) ? $data['mappingId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['datasourceInstanceId'] = isset($data['datasourceInstanceId']) ? $data['datasourceInstanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['hasPreprocessRule'] = isset($data['hasPreprocessRule']) ? $data['hasPreprocessRule'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mappingId'] === null) {
            $invalidProperties[] = "'mappingId' can't be null";
        }
            if ((mb_strlen($this->container['mappingId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['mappingId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['datasourceInstanceId']) && (mb_strlen($this->container['datasourceInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'datasourceInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['datasourceInstanceId']) && (mb_strlen($this->container['datasourceInstanceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'datasourceInstanceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 2)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 999999)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets mappingId
    *  映射id
    *
    * @return string
    */
    public function getMappingId()
    {
        return $this->container['mappingId'];
    }

    /**
    * Sets mappingId
    *
    * @param string $mappingId 映射id
    *
    * @return $this
    */
    public function setMappingId($mappingId)
    {
        $this->container['mappingId'] = $mappingId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  映射id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 映射id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets projectId
    *  映射id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 映射id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets dataclassId
    *  映射id
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 映射id
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets datasourceInstanceId
    *  映射id
    *
    * @return string|null
    */
    public function getDatasourceInstanceId()
    {
        return $this->container['datasourceInstanceId'];
    }

    /**
    * Sets datasourceInstanceId
    *
    * @param string|null $datasourceInstanceId 映射id
    *
    * @return $this
    */
    public function setDatasourceInstanceId($datasourceInstanceId)
    {
        $this->container['datasourceInstanceId'] = $datasourceInstanceId;
        return $this;
    }

    /**
    * Gets status
    *  状态(enabled，disabled)
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
    * @param string|null $status 状态(enabled，disabled)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets hasPreprocessRule
    *  是否配置预处理规则
    *
    * @return bool|null
    */
    public function getHasPreprocessRule()
    {
        return $this->container['hasPreprocessRule'];
    }

    /**
    * Sets hasPreprocessRule
    *
    * @param bool|null $hasPreprocessRule 是否配置预处理规则
    *
    * @return $this
    */
    public function setHasPreprocessRule($hasPreprocessRule)
    {
        $this->container['hasPreprocessRule'] = $hasPreprocessRule;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量 **约束限制：** 0-10000 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 当前页码 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

