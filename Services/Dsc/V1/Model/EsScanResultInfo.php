<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EsScanResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EsScanResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * indexName  索引名
    * typeId  类型ID
    * typeName  类型名
    * riskLevel  风险等级
    * sensitiveDataType  敏感数据类型
    * matchInfo  规则匹配具体信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'indexName' => 'string',
            'typeId' => 'string',
            'typeName' => 'string',
            'riskLevel' => 'int',
            'sensitiveDataType' => 'string[]',
            'matchInfo' => '\HuaweiCloud\SDK\Dsc\V1\Model\EsMatchInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * indexName  索引名
    * typeId  类型ID
    * typeName  类型名
    * riskLevel  风险等级
    * sensitiveDataType  敏感数据类型
    * matchInfo  规则匹配具体信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'indexName' => null,
        'typeId' => null,
        'typeName' => null,
        'riskLevel' => 'int32',
        'sensitiveDataType' => null,
        'matchInfo' => null
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
    * taskId  任务ID
    * indexName  索引名
    * typeId  类型ID
    * typeName  类型名
    * riskLevel  风险等级
    * sensitiveDataType  敏感数据类型
    * matchInfo  规则匹配具体信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'indexName' => 'index_name',
            'typeId' => 'type_id',
            'typeName' => 'type_name',
            'riskLevel' => 'risk_level',
            'sensitiveDataType' => 'sensitive_data_type',
            'matchInfo' => 'match_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * indexName  索引名
    * typeId  类型ID
    * typeName  类型名
    * riskLevel  风险等级
    * sensitiveDataType  敏感数据类型
    * matchInfo  规则匹配具体信息
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'indexName' => 'setIndexName',
            'typeId' => 'setTypeId',
            'typeName' => 'setTypeName',
            'riskLevel' => 'setRiskLevel',
            'sensitiveDataType' => 'setSensitiveDataType',
            'matchInfo' => 'setMatchInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * indexName  索引名
    * typeId  类型ID
    * typeName  类型名
    * riskLevel  风险等级
    * sensitiveDataType  敏感数据类型
    * matchInfo  规则匹配具体信息
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'indexName' => 'getIndexName',
            'typeId' => 'getTypeId',
            'typeName' => 'getTypeName',
            'riskLevel' => 'getRiskLevel',
            'sensitiveDataType' => 'getSensitiveDataType',
            'matchInfo' => 'getMatchInfo'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['indexName'] = isset($data['indexName']) ? $data['indexName'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['sensitiveDataType'] = isset($data['sensitiveDataType']) ? $data['sensitiveDataType'] : null;
        $this->container['matchInfo'] = isset($data['matchInfo']) ? $data['matchInfo'] : null;
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
    * Gets taskId
    *  任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets indexName
    *  索引名
    *
    * @return string|null
    */
    public function getIndexName()
    {
        return $this->container['indexName'];
    }

    /**
    * Sets indexName
    *
    * @param string|null $indexName 索引名
    *
    * @return $this
    */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;
        return $this;
    }

    /**
    * Gets typeId
    *  类型ID
    *
    * @return string|null
    */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
    * Sets typeId
    *
    * @param string|null $typeId 类型ID
    *
    * @return $this
    */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;
        return $this;
    }

    /**
    * Gets typeName
    *  类型名
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
    * @param string|null $typeName 类型名
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险等级
    *
    * @return int|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param int|null $riskLevel 风险等级
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets sensitiveDataType
    *  敏感数据类型
    *
    * @return string[]|null
    */
    public function getSensitiveDataType()
    {
        return $this->container['sensitiveDataType'];
    }

    /**
    * Sets sensitiveDataType
    *
    * @param string[]|null $sensitiveDataType 敏感数据类型
    *
    * @return $this
    */
    public function setSensitiveDataType($sensitiveDataType)
    {
        $this->container['sensitiveDataType'] = $sensitiveDataType;
        return $this;
    }

    /**
    * Gets matchInfo
    *  规则匹配具体信息
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\EsMatchInfo[]|null
    */
    public function getMatchInfo()
    {
        return $this->container['matchInfo'];
    }

    /**
    * Sets matchInfo
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\EsMatchInfo[]|null $matchInfo 规则匹配具体信息
    *
    * @return $this
    */
    public function setMatchInfo($matchInfo)
    {
        $this->container['matchInfo'] = $matchInfo;
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

