<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * guid  guid
    * typeName  资产类型
    * modelId  modelId
    * propertyName  propertyName
    * propertyValue  propertyValue
    * query  搜索框输入
    * filter  filter
    * guidList  guidList
    * traceId  traceId
    * sourceTraceId  sourceTraceId
    * metadataTypeName  metadataTypeName
    * superTypeNames  superTypeNames
    * workspaceIds  workspaceIds
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'guid' => 'string',
            'typeName' => 'string',
            'modelId' => 'string',
            'propertyName' => 'string',
            'propertyValue' => 'string',
            'query' => 'string',
            'filter' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria',
            'guidList' => 'string[]',
            'traceId' => 'string',
            'sourceTraceId' => 'string',
            'metadataTypeName' => 'string',
            'superTypeNames' => 'string',
            'workspaceIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * guid  guid
    * typeName  资产类型
    * modelId  modelId
    * propertyName  propertyName
    * propertyValue  propertyValue
    * query  搜索框输入
    * filter  filter
    * guidList  guidList
    * traceId  traceId
    * sourceTraceId  sourceTraceId
    * metadataTypeName  metadataTypeName
    * superTypeNames  superTypeNames
    * workspaceIds  workspaceIds
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'guid' => null,
        'typeName' => null,
        'modelId' => null,
        'propertyName' => null,
        'propertyValue' => null,
        'query' => null,
        'filter' => null,
        'guidList' => null,
        'traceId' => null,
        'sourceTraceId' => null,
        'metadataTypeName' => null,
        'superTypeNames' => null,
        'workspaceIds' => null
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
    * guid  guid
    * typeName  资产类型
    * modelId  modelId
    * propertyName  propertyName
    * propertyValue  propertyValue
    * query  搜索框输入
    * filter  filter
    * guidList  guidList
    * traceId  traceId
    * sourceTraceId  sourceTraceId
    * metadataTypeName  metadataTypeName
    * superTypeNames  superTypeNames
    * workspaceIds  workspaceIds
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'guid' => 'guid',
            'typeName' => 'type_name',
            'modelId' => 'model_id',
            'propertyName' => 'property_name',
            'propertyValue' => 'property_value',
            'query' => 'query',
            'filter' => 'filter',
            'guidList' => 'guid_list',
            'traceId' => 'trace_id',
            'sourceTraceId' => 'source_trace_id',
            'metadataTypeName' => 'metadata_type_name',
            'superTypeNames' => 'super_type_names',
            'workspaceIds' => 'workspace_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * guid  guid
    * typeName  资产类型
    * modelId  modelId
    * propertyName  propertyName
    * propertyValue  propertyValue
    * query  搜索框输入
    * filter  filter
    * guidList  guidList
    * traceId  traceId
    * sourceTraceId  sourceTraceId
    * metadataTypeName  metadataTypeName
    * superTypeNames  superTypeNames
    * workspaceIds  workspaceIds
    *
    * @var string[]
    */
    protected static $setters = [
            'guid' => 'setGuid',
            'typeName' => 'setTypeName',
            'modelId' => 'setModelId',
            'propertyName' => 'setPropertyName',
            'propertyValue' => 'setPropertyValue',
            'query' => 'setQuery',
            'filter' => 'setFilter',
            'guidList' => 'setGuidList',
            'traceId' => 'setTraceId',
            'sourceTraceId' => 'setSourceTraceId',
            'metadataTypeName' => 'setMetadataTypeName',
            'superTypeNames' => 'setSuperTypeNames',
            'workspaceIds' => 'setWorkspaceIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * guid  guid
    * typeName  资产类型
    * modelId  modelId
    * propertyName  propertyName
    * propertyValue  propertyValue
    * query  搜索框输入
    * filter  filter
    * guidList  guidList
    * traceId  traceId
    * sourceTraceId  sourceTraceId
    * metadataTypeName  metadataTypeName
    * superTypeNames  superTypeNames
    * workspaceIds  workspaceIds
    *
    * @var string[]
    */
    protected static $getters = [
            'guid' => 'getGuid',
            'typeName' => 'getTypeName',
            'modelId' => 'getModelId',
            'propertyName' => 'getPropertyName',
            'propertyValue' => 'getPropertyValue',
            'query' => 'getQuery',
            'filter' => 'getFilter',
            'guidList' => 'getGuidList',
            'traceId' => 'getTraceId',
            'sourceTraceId' => 'getSourceTraceId',
            'metadataTypeName' => 'getMetadataTypeName',
            'superTypeNames' => 'getSuperTypeNames',
            'workspaceIds' => 'getWorkspaceIds'
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
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
        $this->container['propertyName'] = isset($data['propertyName']) ? $data['propertyName'] : null;
        $this->container['propertyValue'] = isset($data['propertyValue']) ? $data['propertyValue'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['guidList'] = isset($data['guidList']) ? $data['guidList'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['sourceTraceId'] = isset($data['sourceTraceId']) ? $data['sourceTraceId'] : null;
        $this->container['metadataTypeName'] = isset($data['metadataTypeName']) ? $data['metadataTypeName'] : null;
        $this->container['superTypeNames'] = isset($data['superTypeNames']) ? $data['superTypeNames'] : null;
        $this->container['workspaceIds'] = isset($data['workspaceIds']) ? $data['workspaceIds'] : null;
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
    * Gets guid
    *  guid
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets typeName
    *  资产类型
    *
    * @return string|null
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string|null $typeName 资产类型
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets modelId
    *  modelId
    *
    * @return string|null
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string|null $modelId modelId
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
        return $this;
    }

    /**
    * Gets propertyName
    *  propertyName
    *
    * @return string|null
    */
    public function getPropertyName()
    {
        return $this->container['propertyName'];
    }

    /**
    * Sets propertyName
    *
    * @param string|null $propertyName propertyName
    *
    * @return $this
    */
    public function setPropertyName($propertyName)
    {
        $this->container['propertyName'] = $propertyName;
        return $this;
    }

    /**
    * Gets propertyValue
    *  propertyValue
    *
    * @return string|null
    */
    public function getPropertyValue()
    {
        return $this->container['propertyValue'];
    }

    /**
    * Sets propertyValue
    *
    * @param string|null $propertyValue propertyValue
    *
    * @return $this
    */
    public function setPropertyValue($propertyValue)
    {
        $this->container['propertyValue'] = $propertyValue;
        return $this;
    }

    /**
    * Gets query
    *  搜索框输入
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 搜索框输入
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets guidList
    *  guidList
    *
    * @return string[]|null
    */
    public function getGuidList()
    {
        return $this->container['guidList'];
    }

    /**
    * Sets guidList
    *
    * @param string[]|null $guidList guidList
    *
    * @return $this
    */
    public function setGuidList($guidList)
    {
        $this->container['guidList'] = $guidList;
        return $this;
    }

    /**
    * Gets traceId
    *  traceId
    *
    * @return string|null
    */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
    * Sets traceId
    *
    * @param string|null $traceId traceId
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets sourceTraceId
    *  sourceTraceId
    *
    * @return string|null
    */
    public function getSourceTraceId()
    {
        return $this->container['sourceTraceId'];
    }

    /**
    * Sets sourceTraceId
    *
    * @param string|null $sourceTraceId sourceTraceId
    *
    * @return $this
    */
    public function setSourceTraceId($sourceTraceId)
    {
        $this->container['sourceTraceId'] = $sourceTraceId;
        return $this;
    }

    /**
    * Gets metadataTypeName
    *  metadataTypeName
    *
    * @return string|null
    */
    public function getMetadataTypeName()
    {
        return $this->container['metadataTypeName'];
    }

    /**
    * Sets metadataTypeName
    *
    * @param string|null $metadataTypeName metadataTypeName
    *
    * @return $this
    */
    public function setMetadataTypeName($metadataTypeName)
    {
        $this->container['metadataTypeName'] = $metadataTypeName;
        return $this;
    }

    /**
    * Gets superTypeNames
    *  superTypeNames
    *
    * @return string|null
    */
    public function getSuperTypeNames()
    {
        return $this->container['superTypeNames'];
    }

    /**
    * Sets superTypeNames
    *
    * @param string|null $superTypeNames superTypeNames
    *
    * @return $this
    */
    public function setSuperTypeNames($superTypeNames)
    {
        $this->container['superTypeNames'] = $superTypeNames;
        return $this;
    }

    /**
    * Gets workspaceIds
    *  workspaceIds
    *
    * @return string[]|null
    */
    public function getWorkspaceIds()
    {
        return $this->container['workspaceIds'];
    }

    /**
    * Sets workspaceIds
    *
    * @param string[]|null $workspaceIds workspaceIds
    *
    * @return $this
    */
    public function setWorkspaceIds($workspaceIds)
    {
        $this->container['workspaceIds'] = $workspaceIds;
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

