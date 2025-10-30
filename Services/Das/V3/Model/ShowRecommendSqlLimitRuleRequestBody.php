<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRecommendSqlLimitRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRecommendSqlLimitRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  引擎类型，目前只支持mysql或者taurus
    * rdsRecommendationType  如果是rds类型， 那么可以选择'count', 'average_time', 'max_time', 'all'这几种类型
    * taurusRecommendationType  如果选择了taurus类型，那么可以选择'count', 'avg_time'
    * recommendCount  推荐数量
    * nodeId  如果选择了taurus， 那么需要制定node id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'rdsRecommendationType' => 'string',
            'taurusRecommendationType' => 'string',
            'recommendCount' => 'int',
            'nodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  引擎类型，目前只支持mysql或者taurus
    * rdsRecommendationType  如果是rds类型， 那么可以选择'count', 'average_time', 'max_time', 'all'这几种类型
    * taurusRecommendationType  如果选择了taurus类型，那么可以选择'count', 'avg_time'
    * recommendCount  推荐数量
    * nodeId  如果选择了taurus， 那么需要制定node id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'rdsRecommendationType' => null,
        'taurusRecommendationType' => null,
        'recommendCount' => 'int64',
        'nodeId' => null
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
    * engineType  引擎类型，目前只支持mysql或者taurus
    * rdsRecommendationType  如果是rds类型， 那么可以选择'count', 'average_time', 'max_time', 'all'这几种类型
    * taurusRecommendationType  如果选择了taurus类型，那么可以选择'count', 'avg_time'
    * recommendCount  推荐数量
    * nodeId  如果选择了taurus， 那么需要制定node id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'rdsRecommendationType' => 'rds_recommendation_type',
            'taurusRecommendationType' => 'taurus_recommendation_type',
            'recommendCount' => 'recommend_count',
            'nodeId' => 'node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  引擎类型，目前只支持mysql或者taurus
    * rdsRecommendationType  如果是rds类型， 那么可以选择'count', 'average_time', 'max_time', 'all'这几种类型
    * taurusRecommendationType  如果选择了taurus类型，那么可以选择'count', 'avg_time'
    * recommendCount  推荐数量
    * nodeId  如果选择了taurus， 那么需要制定node id
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'rdsRecommendationType' => 'setRdsRecommendationType',
            'taurusRecommendationType' => 'setTaurusRecommendationType',
            'recommendCount' => 'setRecommendCount',
            'nodeId' => 'setNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  引擎类型，目前只支持mysql或者taurus
    * rdsRecommendationType  如果是rds类型， 那么可以选择'count', 'average_time', 'max_time', 'all'这几种类型
    * taurusRecommendationType  如果选择了taurus类型，那么可以选择'count', 'avg_time'
    * recommendCount  推荐数量
    * nodeId  如果选择了taurus， 那么需要制定node id
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'rdsRecommendationType' => 'getRdsRecommendationType',
            'taurusRecommendationType' => 'getTaurusRecommendationType',
            'recommendCount' => 'getRecommendCount',
            'nodeId' => 'getNodeId'
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['rdsRecommendationType'] = isset($data['rdsRecommendationType']) ? $data['rdsRecommendationType'] : null;
        $this->container['taurusRecommendationType'] = isset($data['taurusRecommendationType']) ? $data['taurusRecommendationType'] : null;
        $this->container['recommendCount'] = isset($data['recommendCount']) ? $data['recommendCount'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
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
    * Gets engineType
    *  引擎类型，目前只支持mysql或者taurus
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型，目前只支持mysql或者taurus
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets rdsRecommendationType
    *  如果是rds类型， 那么可以选择'count', 'average_time', 'max_time', 'all'这几种类型
    *
    * @return string|null
    */
    public function getRdsRecommendationType()
    {
        return $this->container['rdsRecommendationType'];
    }

    /**
    * Sets rdsRecommendationType
    *
    * @param string|null $rdsRecommendationType 如果是rds类型， 那么可以选择'count', 'average_time', 'max_time', 'all'这几种类型
    *
    * @return $this
    */
    public function setRdsRecommendationType($rdsRecommendationType)
    {
        $this->container['rdsRecommendationType'] = $rdsRecommendationType;
        return $this;
    }

    /**
    * Gets taurusRecommendationType
    *  如果选择了taurus类型，那么可以选择'count', 'avg_time'
    *
    * @return string|null
    */
    public function getTaurusRecommendationType()
    {
        return $this->container['taurusRecommendationType'];
    }

    /**
    * Sets taurusRecommendationType
    *
    * @param string|null $taurusRecommendationType 如果选择了taurus类型，那么可以选择'count', 'avg_time'
    *
    * @return $this
    */
    public function setTaurusRecommendationType($taurusRecommendationType)
    {
        $this->container['taurusRecommendationType'] = $taurusRecommendationType;
        return $this;
    }

    /**
    * Gets recommendCount
    *  推荐数量
    *
    * @return int|null
    */
    public function getRecommendCount()
    {
        return $this->container['recommendCount'];
    }

    /**
    * Sets recommendCount
    *
    * @param int|null $recommendCount 推荐数量
    *
    * @return $this
    */
    public function setRecommendCount($recommendCount)
    {
        $this->container['recommendCount'] = $recommendCount;
        return $this;
    }

    /**
    * Gets nodeId
    *  如果选择了taurus， 那么需要制定node id
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 如果选择了taurus， 那么需要制定node id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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

