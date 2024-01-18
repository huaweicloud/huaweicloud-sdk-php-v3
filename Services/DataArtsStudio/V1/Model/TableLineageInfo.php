<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableLineageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableLineageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceGuid  上游血缘资产guid
    * sourceQualifiedName  上游血缘资产Qname
    * sourceType  上游血缘资产类型
    * sourceDb  上游血缘资产数据库
    * sourceSchema  上游血缘资产逻辑库
    * sourceTable  上游血缘资产表
    * targetGuid  下游血缘资产guid
    * targetQualifiedName  下游血缘资产Qname
    * targetType  下游血缘资产类型
    * targetDb  下游血缘资产数据库
    * targetSchema  下游血缘资产逻辑库
    * targetTable  下游血缘资产表
    * nodeGuid  作业算子guid
    * nodeName  作业算子名称
    * nodeType  作业算子类型
    * nodeQualifiedName  作业算子Qname
    * workspaceId  作业算子类型所属空间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceGuid' => 'string',
            'sourceQualifiedName' => 'string',
            'sourceType' => 'string',
            'sourceDb' => 'string',
            'sourceSchema' => 'string',
            'sourceTable' => 'string',
            'targetGuid' => 'string',
            'targetQualifiedName' => 'string',
            'targetType' => 'string',
            'targetDb' => 'string',
            'targetSchema' => 'string',
            'targetTable' => 'string',
            'nodeGuid' => 'string',
            'nodeName' => 'string',
            'nodeType' => 'string',
            'nodeQualifiedName' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceGuid  上游血缘资产guid
    * sourceQualifiedName  上游血缘资产Qname
    * sourceType  上游血缘资产类型
    * sourceDb  上游血缘资产数据库
    * sourceSchema  上游血缘资产逻辑库
    * sourceTable  上游血缘资产表
    * targetGuid  下游血缘资产guid
    * targetQualifiedName  下游血缘资产Qname
    * targetType  下游血缘资产类型
    * targetDb  下游血缘资产数据库
    * targetSchema  下游血缘资产逻辑库
    * targetTable  下游血缘资产表
    * nodeGuid  作业算子guid
    * nodeName  作业算子名称
    * nodeType  作业算子类型
    * nodeQualifiedName  作业算子Qname
    * workspaceId  作业算子类型所属空间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceGuid' => null,
        'sourceQualifiedName' => null,
        'sourceType' => null,
        'sourceDb' => null,
        'sourceSchema' => null,
        'sourceTable' => null,
        'targetGuid' => null,
        'targetQualifiedName' => null,
        'targetType' => null,
        'targetDb' => null,
        'targetSchema' => null,
        'targetTable' => null,
        'nodeGuid' => null,
        'nodeName' => null,
        'nodeType' => null,
        'nodeQualifiedName' => null,
        'workspaceId' => null
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
    * sourceGuid  上游血缘资产guid
    * sourceQualifiedName  上游血缘资产Qname
    * sourceType  上游血缘资产类型
    * sourceDb  上游血缘资产数据库
    * sourceSchema  上游血缘资产逻辑库
    * sourceTable  上游血缘资产表
    * targetGuid  下游血缘资产guid
    * targetQualifiedName  下游血缘资产Qname
    * targetType  下游血缘资产类型
    * targetDb  下游血缘资产数据库
    * targetSchema  下游血缘资产逻辑库
    * targetTable  下游血缘资产表
    * nodeGuid  作业算子guid
    * nodeName  作业算子名称
    * nodeType  作业算子类型
    * nodeQualifiedName  作业算子Qname
    * workspaceId  作业算子类型所属空间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceGuid' => 'source_guid',
            'sourceQualifiedName' => 'source_qualified_name',
            'sourceType' => 'source_type',
            'sourceDb' => 'source_db',
            'sourceSchema' => 'source_schema',
            'sourceTable' => 'source_table',
            'targetGuid' => 'target_guid',
            'targetQualifiedName' => 'target_qualified_name',
            'targetType' => 'target_type',
            'targetDb' => 'target_db',
            'targetSchema' => 'target_schema',
            'targetTable' => 'target_table',
            'nodeGuid' => 'node_guid',
            'nodeName' => 'node_name',
            'nodeType' => 'node_type',
            'nodeQualifiedName' => 'node_qualified_name',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceGuid  上游血缘资产guid
    * sourceQualifiedName  上游血缘资产Qname
    * sourceType  上游血缘资产类型
    * sourceDb  上游血缘资产数据库
    * sourceSchema  上游血缘资产逻辑库
    * sourceTable  上游血缘资产表
    * targetGuid  下游血缘资产guid
    * targetQualifiedName  下游血缘资产Qname
    * targetType  下游血缘资产类型
    * targetDb  下游血缘资产数据库
    * targetSchema  下游血缘资产逻辑库
    * targetTable  下游血缘资产表
    * nodeGuid  作业算子guid
    * nodeName  作业算子名称
    * nodeType  作业算子类型
    * nodeQualifiedName  作业算子Qname
    * workspaceId  作业算子类型所属空间
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceGuid' => 'setSourceGuid',
            'sourceQualifiedName' => 'setSourceQualifiedName',
            'sourceType' => 'setSourceType',
            'sourceDb' => 'setSourceDb',
            'sourceSchema' => 'setSourceSchema',
            'sourceTable' => 'setSourceTable',
            'targetGuid' => 'setTargetGuid',
            'targetQualifiedName' => 'setTargetQualifiedName',
            'targetType' => 'setTargetType',
            'targetDb' => 'setTargetDb',
            'targetSchema' => 'setTargetSchema',
            'targetTable' => 'setTargetTable',
            'nodeGuid' => 'setNodeGuid',
            'nodeName' => 'setNodeName',
            'nodeType' => 'setNodeType',
            'nodeQualifiedName' => 'setNodeQualifiedName',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceGuid  上游血缘资产guid
    * sourceQualifiedName  上游血缘资产Qname
    * sourceType  上游血缘资产类型
    * sourceDb  上游血缘资产数据库
    * sourceSchema  上游血缘资产逻辑库
    * sourceTable  上游血缘资产表
    * targetGuid  下游血缘资产guid
    * targetQualifiedName  下游血缘资产Qname
    * targetType  下游血缘资产类型
    * targetDb  下游血缘资产数据库
    * targetSchema  下游血缘资产逻辑库
    * targetTable  下游血缘资产表
    * nodeGuid  作业算子guid
    * nodeName  作业算子名称
    * nodeType  作业算子类型
    * nodeQualifiedName  作业算子Qname
    * workspaceId  作业算子类型所属空间
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceGuid' => 'getSourceGuid',
            'sourceQualifiedName' => 'getSourceQualifiedName',
            'sourceType' => 'getSourceType',
            'sourceDb' => 'getSourceDb',
            'sourceSchema' => 'getSourceSchema',
            'sourceTable' => 'getSourceTable',
            'targetGuid' => 'getTargetGuid',
            'targetQualifiedName' => 'getTargetQualifiedName',
            'targetType' => 'getTargetType',
            'targetDb' => 'getTargetDb',
            'targetSchema' => 'getTargetSchema',
            'targetTable' => 'getTargetTable',
            'nodeGuid' => 'getNodeGuid',
            'nodeName' => 'getNodeName',
            'nodeType' => 'getNodeType',
            'nodeQualifiedName' => 'getNodeQualifiedName',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['sourceGuid'] = isset($data['sourceGuid']) ? $data['sourceGuid'] : null;
        $this->container['sourceQualifiedName'] = isset($data['sourceQualifiedName']) ? $data['sourceQualifiedName'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceDb'] = isset($data['sourceDb']) ? $data['sourceDb'] : null;
        $this->container['sourceSchema'] = isset($data['sourceSchema']) ? $data['sourceSchema'] : null;
        $this->container['sourceTable'] = isset($data['sourceTable']) ? $data['sourceTable'] : null;
        $this->container['targetGuid'] = isset($data['targetGuid']) ? $data['targetGuid'] : null;
        $this->container['targetQualifiedName'] = isset($data['targetQualifiedName']) ? $data['targetQualifiedName'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['targetDb'] = isset($data['targetDb']) ? $data['targetDb'] : null;
        $this->container['targetSchema'] = isset($data['targetSchema']) ? $data['targetSchema'] : null;
        $this->container['targetTable'] = isset($data['targetTable']) ? $data['targetTable'] : null;
        $this->container['nodeGuid'] = isset($data['nodeGuid']) ? $data['nodeGuid'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['nodeQualifiedName'] = isset($data['nodeQualifiedName']) ? $data['nodeQualifiedName'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
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
    * Gets sourceGuid
    *  上游血缘资产guid
    *
    * @return string|null
    */
    public function getSourceGuid()
    {
        return $this->container['sourceGuid'];
    }

    /**
    * Sets sourceGuid
    *
    * @param string|null $sourceGuid 上游血缘资产guid
    *
    * @return $this
    */
    public function setSourceGuid($sourceGuid)
    {
        $this->container['sourceGuid'] = $sourceGuid;
        return $this;
    }

    /**
    * Gets sourceQualifiedName
    *  上游血缘资产Qname
    *
    * @return string|null
    */
    public function getSourceQualifiedName()
    {
        return $this->container['sourceQualifiedName'];
    }

    /**
    * Sets sourceQualifiedName
    *
    * @param string|null $sourceQualifiedName 上游血缘资产Qname
    *
    * @return $this
    */
    public function setSourceQualifiedName($sourceQualifiedName)
    {
        $this->container['sourceQualifiedName'] = $sourceQualifiedName;
        return $this;
    }

    /**
    * Gets sourceType
    *  上游血缘资产类型
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 上游血缘资产类型
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceDb
    *  上游血缘资产数据库
    *
    * @return string|null
    */
    public function getSourceDb()
    {
        return $this->container['sourceDb'];
    }

    /**
    * Sets sourceDb
    *
    * @param string|null $sourceDb 上游血缘资产数据库
    *
    * @return $this
    */
    public function setSourceDb($sourceDb)
    {
        $this->container['sourceDb'] = $sourceDb;
        return $this;
    }

    /**
    * Gets sourceSchema
    *  上游血缘资产逻辑库
    *
    * @return string|null
    */
    public function getSourceSchema()
    {
        return $this->container['sourceSchema'];
    }

    /**
    * Sets sourceSchema
    *
    * @param string|null $sourceSchema 上游血缘资产逻辑库
    *
    * @return $this
    */
    public function setSourceSchema($sourceSchema)
    {
        $this->container['sourceSchema'] = $sourceSchema;
        return $this;
    }

    /**
    * Gets sourceTable
    *  上游血缘资产表
    *
    * @return string|null
    */
    public function getSourceTable()
    {
        return $this->container['sourceTable'];
    }

    /**
    * Sets sourceTable
    *
    * @param string|null $sourceTable 上游血缘资产表
    *
    * @return $this
    */
    public function setSourceTable($sourceTable)
    {
        $this->container['sourceTable'] = $sourceTable;
        return $this;
    }

    /**
    * Gets targetGuid
    *  下游血缘资产guid
    *
    * @return string|null
    */
    public function getTargetGuid()
    {
        return $this->container['targetGuid'];
    }

    /**
    * Sets targetGuid
    *
    * @param string|null $targetGuid 下游血缘资产guid
    *
    * @return $this
    */
    public function setTargetGuid($targetGuid)
    {
        $this->container['targetGuid'] = $targetGuid;
        return $this;
    }

    /**
    * Gets targetQualifiedName
    *  下游血缘资产Qname
    *
    * @return string|null
    */
    public function getTargetQualifiedName()
    {
        return $this->container['targetQualifiedName'];
    }

    /**
    * Sets targetQualifiedName
    *
    * @param string|null $targetQualifiedName 下游血缘资产Qname
    *
    * @return $this
    */
    public function setTargetQualifiedName($targetQualifiedName)
    {
        $this->container['targetQualifiedName'] = $targetQualifiedName;
        return $this;
    }

    /**
    * Gets targetType
    *  下游血缘资产类型
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 下游血缘资产类型
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets targetDb
    *  下游血缘资产数据库
    *
    * @return string|null
    */
    public function getTargetDb()
    {
        return $this->container['targetDb'];
    }

    /**
    * Sets targetDb
    *
    * @param string|null $targetDb 下游血缘资产数据库
    *
    * @return $this
    */
    public function setTargetDb($targetDb)
    {
        $this->container['targetDb'] = $targetDb;
        return $this;
    }

    /**
    * Gets targetSchema
    *  下游血缘资产逻辑库
    *
    * @return string|null
    */
    public function getTargetSchema()
    {
        return $this->container['targetSchema'];
    }

    /**
    * Sets targetSchema
    *
    * @param string|null $targetSchema 下游血缘资产逻辑库
    *
    * @return $this
    */
    public function setTargetSchema($targetSchema)
    {
        $this->container['targetSchema'] = $targetSchema;
        return $this;
    }

    /**
    * Gets targetTable
    *  下游血缘资产表
    *
    * @return string|null
    */
    public function getTargetTable()
    {
        return $this->container['targetTable'];
    }

    /**
    * Sets targetTable
    *
    * @param string|null $targetTable 下游血缘资产表
    *
    * @return $this
    */
    public function setTargetTable($targetTable)
    {
        $this->container['targetTable'] = $targetTable;
        return $this;
    }

    /**
    * Gets nodeGuid
    *  作业算子guid
    *
    * @return string|null
    */
    public function getNodeGuid()
    {
        return $this->container['nodeGuid'];
    }

    /**
    * Sets nodeGuid
    *
    * @param string|null $nodeGuid 作业算子guid
    *
    * @return $this
    */
    public function setNodeGuid($nodeGuid)
    {
        $this->container['nodeGuid'] = $nodeGuid;
        return $this;
    }

    /**
    * Gets nodeName
    *  作业算子名称
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
    * @param string|null $nodeName 作业算子名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets nodeType
    *  作业算子类型
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
    * @param string|null $nodeType 作业算子类型
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets nodeQualifiedName
    *  作业算子Qname
    *
    * @return string|null
    */
    public function getNodeQualifiedName()
    {
        return $this->container['nodeQualifiedName'];
    }

    /**
    * Sets nodeQualifiedName
    *
    * @param string|null $nodeQualifiedName 作业算子Qname
    *
    * @return $this
    */
    public function setNodeQualifiedName($nodeQualifiedName)
    {
        $this->container['nodeQualifiedName'] = $nodeQualifiedName;
        return $this;
    }

    /**
    * Gets workspaceId
    *  作业算子类型所属空间
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
    * @param string|null $workspaceId 作业算子类型所属空间
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

