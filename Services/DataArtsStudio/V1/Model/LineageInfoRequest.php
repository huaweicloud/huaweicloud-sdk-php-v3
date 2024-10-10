<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineageInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineageInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * dataSourceType  数据连接类型
    * connectionId  数据连接id
    * connectionName  数据连接名称
    * workspaceId  工作空间id
    * jobId  作业id
    * nodeName  算子名称
    * tableLineage  tableLineage
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'dataSourceType' => 'string',
            'connectionId' => 'string',
            'connectionName' => 'string',
            'workspaceId' => 'string',
            'jobId' => 'string',
            'nodeName' => 'string',
            'tableLineage' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableLineageV2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * dataSourceType  数据连接类型
    * connectionId  数据连接id
    * connectionName  数据连接名称
    * workspaceId  工作空间id
    * jobId  作业id
    * nodeName  算子名称
    * tableLineage  tableLineage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'dataSourceType' => null,
        'connectionId' => null,
        'connectionName' => null,
        'workspaceId' => null,
        'jobId' => null,
        'nodeName' => null,
        'tableLineage' => null
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
    * clusterId  集群id
    * dataSourceType  数据连接类型
    * connectionId  数据连接id
    * connectionName  数据连接名称
    * workspaceId  工作空间id
    * jobId  作业id
    * nodeName  算子名称
    * tableLineage  tableLineage
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'dataSourceType' => 'data_source_type',
            'connectionId' => 'connection_id',
            'connectionName' => 'connection_name',
            'workspaceId' => 'workspace_id',
            'jobId' => 'job_id',
            'nodeName' => 'node_name',
            'tableLineage' => 'table_lineage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * dataSourceType  数据连接类型
    * connectionId  数据连接id
    * connectionName  数据连接名称
    * workspaceId  工作空间id
    * jobId  作业id
    * nodeName  算子名称
    * tableLineage  tableLineage
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'dataSourceType' => 'setDataSourceType',
            'connectionId' => 'setConnectionId',
            'connectionName' => 'setConnectionName',
            'workspaceId' => 'setWorkspaceId',
            'jobId' => 'setJobId',
            'nodeName' => 'setNodeName',
            'tableLineage' => 'setTableLineage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * dataSourceType  数据连接类型
    * connectionId  数据连接id
    * connectionName  数据连接名称
    * workspaceId  工作空间id
    * jobId  作业id
    * nodeName  算子名称
    * tableLineage  tableLineage
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'dataSourceType' => 'getDataSourceType',
            'connectionId' => 'getConnectionId',
            'connectionName' => 'getConnectionName',
            'workspaceId' => 'getWorkspaceId',
            'jobId' => 'getJobId',
            'nodeName' => 'getNodeName',
            'tableLineage' => 'getTableLineage'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['dataSourceType'] = isset($data['dataSourceType']) ? $data['dataSourceType'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['connectionName'] = isset($data['connectionName']) ? $data['connectionName'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['tableLineage'] = isset($data['tableLineage']) ? $data['tableLineage'] : null;
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
    * Gets clusterId
    *  集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets dataSourceType
    *  数据连接类型
    *
    * @return string|null
    */
    public function getDataSourceType()
    {
        return $this->container['dataSourceType'];
    }

    /**
    * Sets dataSourceType
    *
    * @param string|null $dataSourceType 数据连接类型
    *
    * @return $this
    */
    public function setDataSourceType($dataSourceType)
    {
        $this->container['dataSourceType'] = $dataSourceType;
        return $this;
    }

    /**
    * Gets connectionId
    *  数据连接id
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 数据连接id
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets connectionName
    *  数据连接名称
    *
    * @return string|null
    */
    public function getConnectionName()
    {
        return $this->container['connectionName'];
    }

    /**
    * Sets connectionName
    *
    * @param string|null $connectionName 数据连接名称
    *
    * @return $this
    */
    public function setConnectionName($connectionName)
    {
        $this->container['connectionName'] = $connectionName;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间id
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
    * @param string|null $workspaceId 工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets jobId
    *  作业id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 作业id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets nodeName
    *  算子名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 算子名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets tableLineage
    *  tableLineage
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableLineageV2|null
    */
    public function getTableLineage()
    {
        return $this->container['tableLineage'];
    }

    /**
    * Sets tableLineage
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableLineageV2|null $tableLineage tableLineage
    *
    * @return $this
    */
    public function setTableLineage($tableLineage)
    {
        $this->container['tableLineage'] = $tableLineage;
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

