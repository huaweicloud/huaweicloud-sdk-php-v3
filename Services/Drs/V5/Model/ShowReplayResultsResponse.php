<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReplayResultsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReplayResultsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  数据总量
    * shardStatics  回放基于时间统计详细信息列表，在type为shard_statistics时返回
    * slowSqls  慢SQL信息列表，在type为slow_sql时返回
    * slowSqlTemplates  慢SQL统计信息列表，在type为slow_sql_template时返回
    * errorSqls  异常SQL信息列表，在type为error_sql时返回
    * errorSqlTemplates  异常SQL统计信息列表，在type为error_sql_template时返回
    * replayingSqls  正在回放SQL信息列表，在type为replaying_sql时返回
    * errorClassifications  回放异常SQL分类信息，在type为error_classification时返回
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'shardStatics' => '\HuaweiCloud\SDK\Drs\V5\Model\ReplayShardStaticsResp[]',
            'slowSqls' => '\HuaweiCloud\SDK\Drs\V5\Model\ReplaySlowSqlResp[]',
            'slowSqlTemplates' => '\HuaweiCloud\SDK\Drs\V5\Model\ReplaySlowSqlTemplateResp[]',
            'errorSqls' => '\HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorSqlResp[]',
            'errorSqlTemplates' => '\HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorSqlTemplateResp[]',
            'replayingSqls' => '\HuaweiCloud\SDK\Drs\V5\Model\ReplayingSqlResp[]',
            'errorClassifications' => '\HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorClassification[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  数据总量
    * shardStatics  回放基于时间统计详细信息列表，在type为shard_statistics时返回
    * slowSqls  慢SQL信息列表，在type为slow_sql时返回
    * slowSqlTemplates  慢SQL统计信息列表，在type为slow_sql_template时返回
    * errorSqls  异常SQL信息列表，在type为error_sql时返回
    * errorSqlTemplates  异常SQL统计信息列表，在type为error_sql_template时返回
    * replayingSqls  正在回放SQL信息列表，在type为replaying_sql时返回
    * errorClassifications  回放异常SQL分类信息，在type为error_classification时返回
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int64',
        'shardStatics' => null,
        'slowSqls' => null,
        'slowSqlTemplates' => null,
        'errorSqls' => null,
        'errorSqlTemplates' => null,
        'replayingSqls' => null,
        'errorClassifications' => null
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
    * totalCount  数据总量
    * shardStatics  回放基于时间统计详细信息列表，在type为shard_statistics时返回
    * slowSqls  慢SQL信息列表，在type为slow_sql时返回
    * slowSqlTemplates  慢SQL统计信息列表，在type为slow_sql_template时返回
    * errorSqls  异常SQL信息列表，在type为error_sql时返回
    * errorSqlTemplates  异常SQL统计信息列表，在type为error_sql_template时返回
    * replayingSqls  正在回放SQL信息列表，在type为replaying_sql时返回
    * errorClassifications  回放异常SQL分类信息，在type为error_classification时返回
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'shardStatics' => 'shard_statics',
            'slowSqls' => 'slow_sqls',
            'slowSqlTemplates' => 'slow_sql_templates',
            'errorSqls' => 'error_sqls',
            'errorSqlTemplates' => 'error_sql_templates',
            'replayingSqls' => 'replaying_sqls',
            'errorClassifications' => 'error_classifications'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  数据总量
    * shardStatics  回放基于时间统计详细信息列表，在type为shard_statistics时返回
    * slowSqls  慢SQL信息列表，在type为slow_sql时返回
    * slowSqlTemplates  慢SQL统计信息列表，在type为slow_sql_template时返回
    * errorSqls  异常SQL信息列表，在type为error_sql时返回
    * errorSqlTemplates  异常SQL统计信息列表，在type为error_sql_template时返回
    * replayingSqls  正在回放SQL信息列表，在type为replaying_sql时返回
    * errorClassifications  回放异常SQL分类信息，在type为error_classification时返回
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'shardStatics' => 'setShardStatics',
            'slowSqls' => 'setSlowSqls',
            'slowSqlTemplates' => 'setSlowSqlTemplates',
            'errorSqls' => 'setErrorSqls',
            'errorSqlTemplates' => 'setErrorSqlTemplates',
            'replayingSqls' => 'setReplayingSqls',
            'errorClassifications' => 'setErrorClassifications'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  数据总量
    * shardStatics  回放基于时间统计详细信息列表，在type为shard_statistics时返回
    * slowSqls  慢SQL信息列表，在type为slow_sql时返回
    * slowSqlTemplates  慢SQL统计信息列表，在type为slow_sql_template时返回
    * errorSqls  异常SQL信息列表，在type为error_sql时返回
    * errorSqlTemplates  异常SQL统计信息列表，在type为error_sql_template时返回
    * replayingSqls  正在回放SQL信息列表，在type为replaying_sql时返回
    * errorClassifications  回放异常SQL分类信息，在type为error_classification时返回
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'shardStatics' => 'getShardStatics',
            'slowSqls' => 'getSlowSqls',
            'slowSqlTemplates' => 'getSlowSqlTemplates',
            'errorSqls' => 'getErrorSqls',
            'errorSqlTemplates' => 'getErrorSqlTemplates',
            'replayingSqls' => 'getReplayingSqls',
            'errorClassifications' => 'getErrorClassifications'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['shardStatics'] = isset($data['shardStatics']) ? $data['shardStatics'] : null;
        $this->container['slowSqls'] = isset($data['slowSqls']) ? $data['slowSqls'] : null;
        $this->container['slowSqlTemplates'] = isset($data['slowSqlTemplates']) ? $data['slowSqlTemplates'] : null;
        $this->container['errorSqls'] = isset($data['errorSqls']) ? $data['errorSqls'] : null;
        $this->container['errorSqlTemplates'] = isset($data['errorSqlTemplates']) ? $data['errorSqlTemplates'] : null;
        $this->container['replayingSqls'] = isset($data['replayingSqls']) ? $data['replayingSqls'] : null;
        $this->container['errorClassifications'] = isset($data['errorClassifications']) ? $data['errorClassifications'] : null;
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
    * Gets totalCount
    *  数据总量
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 数据总量
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets shardStatics
    *  回放基于时间统计详细信息列表，在type为shard_statistics时返回
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ReplayShardStaticsResp[]|null
    */
    public function getShardStatics()
    {
        return $this->container['shardStatics'];
    }

    /**
    * Sets shardStatics
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ReplayShardStaticsResp[]|null $shardStatics 回放基于时间统计详细信息列表，在type为shard_statistics时返回
    *
    * @return $this
    */
    public function setShardStatics($shardStatics)
    {
        $this->container['shardStatics'] = $shardStatics;
        return $this;
    }

    /**
    * Gets slowSqls
    *  慢SQL信息列表，在type为slow_sql时返回
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ReplaySlowSqlResp[]|null
    */
    public function getSlowSqls()
    {
        return $this->container['slowSqls'];
    }

    /**
    * Sets slowSqls
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ReplaySlowSqlResp[]|null $slowSqls 慢SQL信息列表，在type为slow_sql时返回
    *
    * @return $this
    */
    public function setSlowSqls($slowSqls)
    {
        $this->container['slowSqls'] = $slowSqls;
        return $this;
    }

    /**
    * Gets slowSqlTemplates
    *  慢SQL统计信息列表，在type为slow_sql_template时返回
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ReplaySlowSqlTemplateResp[]|null
    */
    public function getSlowSqlTemplates()
    {
        return $this->container['slowSqlTemplates'];
    }

    /**
    * Sets slowSqlTemplates
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ReplaySlowSqlTemplateResp[]|null $slowSqlTemplates 慢SQL统计信息列表，在type为slow_sql_template时返回
    *
    * @return $this
    */
    public function setSlowSqlTemplates($slowSqlTemplates)
    {
        $this->container['slowSqlTemplates'] = $slowSqlTemplates;
        return $this;
    }

    /**
    * Gets errorSqls
    *  异常SQL信息列表，在type为error_sql时返回
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorSqlResp[]|null
    */
    public function getErrorSqls()
    {
        return $this->container['errorSqls'];
    }

    /**
    * Sets errorSqls
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorSqlResp[]|null $errorSqls 异常SQL信息列表，在type为error_sql时返回
    *
    * @return $this
    */
    public function setErrorSqls($errorSqls)
    {
        $this->container['errorSqls'] = $errorSqls;
        return $this;
    }

    /**
    * Gets errorSqlTemplates
    *  异常SQL统计信息列表，在type为error_sql_template时返回
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorSqlTemplateResp[]|null
    */
    public function getErrorSqlTemplates()
    {
        return $this->container['errorSqlTemplates'];
    }

    /**
    * Sets errorSqlTemplates
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorSqlTemplateResp[]|null $errorSqlTemplates 异常SQL统计信息列表，在type为error_sql_template时返回
    *
    * @return $this
    */
    public function setErrorSqlTemplates($errorSqlTemplates)
    {
        $this->container['errorSqlTemplates'] = $errorSqlTemplates;
        return $this;
    }

    /**
    * Gets replayingSqls
    *  正在回放SQL信息列表，在type为replaying_sql时返回
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ReplayingSqlResp[]|null
    */
    public function getReplayingSqls()
    {
        return $this->container['replayingSqls'];
    }

    /**
    * Sets replayingSqls
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ReplayingSqlResp[]|null $replayingSqls 正在回放SQL信息列表，在type为replaying_sql时返回
    *
    * @return $this
    */
    public function setReplayingSqls($replayingSqls)
    {
        $this->container['replayingSqls'] = $replayingSqls;
        return $this;
    }

    /**
    * Gets errorClassifications
    *  回放异常SQL分类信息，在type为error_classification时返回
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorClassification[]|null
    */
    public function getErrorClassifications()
    {
        return $this->container['errorClassifications'];
    }

    /**
    * Sets errorClassifications
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ReplayErrorClassification[]|null $errorClassifications 回放异常SQL分类信息，在type为error_classification时返回
    *
    * @return $this
    */
    public function setErrorClassifications($errorClassifications)
    {
        $this->container['errorClassifications'] = $errorClassifications;
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

