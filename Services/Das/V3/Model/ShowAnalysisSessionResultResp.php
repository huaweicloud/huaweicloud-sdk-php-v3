<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAnalysisSessionResultResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAnalysisSessionResultResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  分析的会话总数
    * topStateDuration  状态持续时间长TOP会话列表
    * topTransactionDuration  事务持续时间长TOP会话列表
    * sqlTemplates  SQL模板列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'topStateDuration' => '\HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[]',
            'topTransactionDuration' => '\HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopTransactionDuration[]',
            'sqlTemplates' => '\HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespSqlTemplates[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  分析的会话总数
    * topStateDuration  状态持续时间长TOP会话列表
    * topTransactionDuration  事务持续时间长TOP会话列表
    * sqlTemplates  SQL模板列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int64',
        'topStateDuration' => null,
        'topTransactionDuration' => null,
        'sqlTemplates' => null
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
    * totalCount  分析的会话总数
    * topStateDuration  状态持续时间长TOP会话列表
    * topTransactionDuration  事务持续时间长TOP会话列表
    * sqlTemplates  SQL模板列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'topStateDuration' => 'top_state_duration',
            'topTransactionDuration' => 'top_transaction_duration',
            'sqlTemplates' => 'sql_templates'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  分析的会话总数
    * topStateDuration  状态持续时间长TOP会话列表
    * topTransactionDuration  事务持续时间长TOP会话列表
    * sqlTemplates  SQL模板列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'topStateDuration' => 'setTopStateDuration',
            'topTransactionDuration' => 'setTopTransactionDuration',
            'sqlTemplates' => 'setSqlTemplates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  分析的会话总数
    * topStateDuration  状态持续时间长TOP会话列表
    * topTransactionDuration  事务持续时间长TOP会话列表
    * sqlTemplates  SQL模板列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'topStateDuration' => 'getTopStateDuration',
            'topTransactionDuration' => 'getTopTransactionDuration',
            'sqlTemplates' => 'getSqlTemplates'
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
        $this->container['topStateDuration'] = isset($data['topStateDuration']) ? $data['topStateDuration'] : null;
        $this->container['topTransactionDuration'] = isset($data['topTransactionDuration']) ? $data['topTransactionDuration'] : null;
        $this->container['sqlTemplates'] = isset($data['sqlTemplates']) ? $data['sqlTemplates'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['totalCount'] === null) {
            $invalidProperties[] = "'totalCount' can't be null";
        }
        if ($this->container['topStateDuration'] === null) {
            $invalidProperties[] = "'topStateDuration' can't be null";
        }
        if ($this->container['topTransactionDuration'] === null) {
            $invalidProperties[] = "'topTransactionDuration' can't be null";
        }
        if ($this->container['sqlTemplates'] === null) {
            $invalidProperties[] = "'sqlTemplates' can't be null";
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
    * Gets totalCount
    *  分析的会话总数
    *
    * @return int
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int $totalCount 分析的会话总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets topStateDuration
    *  状态持续时间长TOP会话列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[]
    */
    public function getTopStateDuration()
    {
        return $this->container['topStateDuration'];
    }

    /**
    * Sets topStateDuration
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[] $topStateDuration 状态持续时间长TOP会话列表
    *
    * @return $this
    */
    public function setTopStateDuration($topStateDuration)
    {
        $this->container['topStateDuration'] = $topStateDuration;
        return $this;
    }

    /**
    * Gets topTransactionDuration
    *  事务持续时间长TOP会话列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopTransactionDuration[]
    */
    public function getTopTransactionDuration()
    {
        return $this->container['topTransactionDuration'];
    }

    /**
    * Sets topTransactionDuration
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopTransactionDuration[] $topTransactionDuration 事务持续时间长TOP会话列表
    *
    * @return $this
    */
    public function setTopTransactionDuration($topTransactionDuration)
    {
        $this->container['topTransactionDuration'] = $topTransactionDuration;
        return $this;
    }

    /**
    * Gets sqlTemplates
    *  SQL模板列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespSqlTemplates[]
    */
    public function getSqlTemplates()
    {
        return $this->container['sqlTemplates'];
    }

    /**
    * Sets sqlTemplates
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespSqlTemplates[] $sqlTemplates SQL模板列表
    *
    * @return $this
    */
    public function setSqlTemplates($sqlTemplates)
    {
        $this->container['sqlTemplates'] = $sqlTemplates;
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

