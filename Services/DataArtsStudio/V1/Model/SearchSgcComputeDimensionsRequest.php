<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchSgcComputeDimensionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchSgcComputeDimensionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * offset  偏移量
    * limit  返回数据条数，表示页大小
    * name  节点实例名称或脚本名称
    * nodeCreatorName  节点实例创建者name
    * type  类型，0表示节点实例,1表示脚本,2表示节点的测试运行,成本管理页面对于0和2的情况均展示为节点实例
    * nodeType  节点类型，HIVE SQL, SparkSQL, Spark, Flink SQL, MRS Flink Job, DWS SQL为支持的枚举节点类型
    * orderBy  排序规则，示例priority ASC表示按照优先级升序排序,priority DESC表示按照优先级降序排序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'workspaceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'nodeCreatorName' => 'string',
            'type' => 'int',
            'nodeType' => 'string',
            'orderBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * offset  偏移量
    * limit  返回数据条数，表示页大小
    * name  节点实例名称或脚本名称
    * nodeCreatorName  节点实例创建者name
    * type  类型，0表示节点实例,1表示脚本,2表示节点的测试运行,成本管理页面对于0和2的情况均展示为节点实例
    * nodeType  节点类型，HIVE SQL, SparkSQL, Spark, Flink SQL, MRS Flink Job, DWS SQL为支持的枚举节点类型
    * orderBy  排序规则，示例priority ASC表示按照优先级升序排序,priority DESC表示按照优先级降序排序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'workspaceId' => null,
        'offset' => null,
        'limit' => null,
        'name' => null,
        'nodeCreatorName' => null,
        'type' => null,
        'nodeType' => null,
        'orderBy' => null
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
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * offset  偏移量
    * limit  返回数据条数，表示页大小
    * name  节点实例名称或脚本名称
    * nodeCreatorName  节点实例创建者name
    * type  类型，0表示节点实例,1表示脚本,2表示节点的测试运行,成本管理页面对于0和2的情况均展示为节点实例
    * nodeType  节点类型，HIVE SQL, SparkSQL, Spark, Flink SQL, MRS Flink Job, DWS SQL为支持的枚举节点类型
    * orderBy  排序规则，示例priority ASC表示按照优先级升序排序,priority DESC表示按照优先级降序排序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'workspaceId' => 'workspace_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'nodeCreatorName' => 'node_creator_name',
            'type' => 'type',
            'nodeType' => 'node_type',
            'orderBy' => 'order_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * offset  偏移量
    * limit  返回数据条数，表示页大小
    * name  节点实例名称或脚本名称
    * nodeCreatorName  节点实例创建者name
    * type  类型，0表示节点实例,1表示脚本,2表示节点的测试运行,成本管理页面对于0和2的情况均展示为节点实例
    * nodeType  节点类型，HIVE SQL, SparkSQL, Spark, Flink SQL, MRS Flink Job, DWS SQL为支持的枚举节点类型
    * orderBy  排序规则，示例priority ASC表示按照优先级升序排序,priority DESC表示按照优先级降序排序
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'workspaceId' => 'setWorkspaceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'nodeCreatorName' => 'setNodeCreatorName',
            'type' => 'setType',
            'nodeType' => 'setNodeType',
            'orderBy' => 'setOrderBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * offset  偏移量
    * limit  返回数据条数，表示页大小
    * name  节点实例名称或脚本名称
    * nodeCreatorName  节点实例创建者name
    * type  类型，0表示节点实例,1表示脚本,2表示节点的测试运行,成本管理页面对于0和2的情况均展示为节点实例
    * nodeType  节点类型，HIVE SQL, SparkSQL, Spark, Flink SQL, MRS Flink Job, DWS SQL为支持的枚举节点类型
    * orderBy  排序规则，示例priority ASC表示按照优先级升序排序,priority DESC表示按照优先级降序排序
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'workspaceId' => 'getWorkspaceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'nodeCreatorName' => 'getNodeCreatorName',
            'type' => 'getType',
            'nodeType' => 'getNodeType',
            'orderBy' => 'getOrderBy'
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
    const TYPE_0 = 0;
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const NODE_TYPE_HIVE_SQL = 'HIVE SQL';
    const NODE_TYPE_SPARK_SQL = 'SparkSQL';
    const NODE_TYPE_SPARK = 'Spark';
    const NODE_TYPE_FLINK_SQL = 'Flink SQL';
    const NODE_TYPE_MRS_FLINK_JOB = 'MRS Flink Job';
    const NODE_TYPE_DWS_SQL = 'DWS SQL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_0,
            self::TYPE_1,
            self::TYPE_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE_HIVE_SQL,
            self::NODE_TYPE_SPARK_SQL,
            self::NODE_TYPE_SPARK,
            self::NODE_TYPE_FLINK_SQL,
            self::NODE_TYPE_MRS_FLINK_JOB,
            self::NODE_TYPE_DWS_SQL,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeCreatorName'] = isset($data['nodeCreatorName']) ? $data['nodeCreatorName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceId']) < 3)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeCreatorName']) && (mb_strlen($this->container['nodeCreatorName']) > 128)) {
                $invalidProperties[] = "invalid value for 'nodeCreatorName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['nodeCreatorName']) && (mb_strlen($this->container['nodeCreatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeCreatorName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNodeTypeAllowableValues();
                if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['nodeType']) && (mb_strlen($this->container['nodeType']) > 128)) {
                $invalidProperties[] = "invalid value for 'nodeType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['nodeType']) && (mb_strlen($this->container['nodeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) > 256)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  DataArts Studio实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId DataArts Studio实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
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
    * @param int|null $offset 偏移量
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
    *  返回数据条数，表示页大小
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
    * @param int|null $limit 返回数据条数，表示页大小
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  节点实例名称或脚本名称
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
    * @param string|null $name 节点实例名称或脚本名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nodeCreatorName
    *  节点实例创建者name
    *
    * @return string|null
    */
    public function getNodeCreatorName()
    {
        return $this->container['nodeCreatorName'];
    }

    /**
    * Sets nodeCreatorName
    *
    * @param string|null $nodeCreatorName 节点实例创建者name
    *
    * @return $this
    */
    public function setNodeCreatorName($nodeCreatorName)
    {
        $this->container['nodeCreatorName'] = $nodeCreatorName;
        return $this;
    }

    /**
    * Gets type
    *  类型，0表示节点实例,1表示脚本,2表示节点的测试运行,成本管理页面对于0和2的情况均展示为节点实例
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 类型，0表示节点实例,1表示脚本,2表示节点的测试运行,成本管理页面对于0和2的情况均展示为节点实例
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型，HIVE SQL, SparkSQL, Spark, Flink SQL, MRS Flink Job, DWS SQL为支持的枚举节点类型
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
    * @param string|null $nodeType 节点类型，HIVE SQL, SparkSQL, Spark, Flink SQL, MRS Flink Job, DWS SQL为支持的枚举节点类型
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序规则，示例priority ASC表示按照优先级升序排序,priority DESC表示按照优先级降序排序
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序规则，示例priority ASC表示按照优先级升序排序,priority DESC表示按照优先级降序排序
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
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

