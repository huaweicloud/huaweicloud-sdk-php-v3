<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAnalysisSessionResultRespSqlTemplates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAnalysisSessionResultResp_sql_templates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlTemplate  SQL模板
    * databaseName  数据库名
    * totalCount  总执行次数
    * topStateDurationList  当前模板下状态持续时间长TOP会话列表
    * topTransactionDurationList  当前模板下事务持续时间长TOP会话列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlTemplate' => 'string',
            'databaseName' => 'string',
            'totalCount' => 'int',
            'topStateDurationList' => '\HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[]',
            'topTransactionDurationList' => '\HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlTemplate  SQL模板
    * databaseName  数据库名
    * totalCount  总执行次数
    * topStateDurationList  当前模板下状态持续时间长TOP会话列表
    * topTransactionDurationList  当前模板下事务持续时间长TOP会话列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlTemplate' => null,
        'databaseName' => null,
        'totalCount' => 'int64',
        'topStateDurationList' => null,
        'topTransactionDurationList' => null
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
    * sqlTemplate  SQL模板
    * databaseName  数据库名
    * totalCount  总执行次数
    * topStateDurationList  当前模板下状态持续时间长TOP会话列表
    * topTransactionDurationList  当前模板下事务持续时间长TOP会话列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlTemplate' => 'sql_template',
            'databaseName' => 'database_name',
            'totalCount' => 'total_count',
            'topStateDurationList' => 'top_state_duration_list',
            'topTransactionDurationList' => 'top_transaction_duration_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlTemplate  SQL模板
    * databaseName  数据库名
    * totalCount  总执行次数
    * topStateDurationList  当前模板下状态持续时间长TOP会话列表
    * topTransactionDurationList  当前模板下事务持续时间长TOP会话列表
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlTemplate' => 'setSqlTemplate',
            'databaseName' => 'setDatabaseName',
            'totalCount' => 'setTotalCount',
            'topStateDurationList' => 'setTopStateDurationList',
            'topTransactionDurationList' => 'setTopTransactionDurationList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlTemplate  SQL模板
    * databaseName  数据库名
    * totalCount  总执行次数
    * topStateDurationList  当前模板下状态持续时间长TOP会话列表
    * topTransactionDurationList  当前模板下事务持续时间长TOP会话列表
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlTemplate' => 'getSqlTemplate',
            'databaseName' => 'getDatabaseName',
            'totalCount' => 'getTotalCount',
            'topStateDurationList' => 'getTopStateDurationList',
            'topTransactionDurationList' => 'getTopTransactionDurationList'
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
        $this->container['sqlTemplate'] = isset($data['sqlTemplate']) ? $data['sqlTemplate'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['topStateDurationList'] = isset($data['topStateDurationList']) ? $data['topStateDurationList'] : null;
        $this->container['topTransactionDurationList'] = isset($data['topTransactionDurationList']) ? $data['topTransactionDurationList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sqlTemplate'] === null) {
            $invalidProperties[] = "'sqlTemplate' can't be null";
        }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['totalCount'] === null) {
            $invalidProperties[] = "'totalCount' can't be null";
        }
        if ($this->container['topStateDurationList'] === null) {
            $invalidProperties[] = "'topStateDurationList' can't be null";
        }
        if ($this->container['topTransactionDurationList'] === null) {
            $invalidProperties[] = "'topTransactionDurationList' can't be null";
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
    * Gets sqlTemplate
    *  SQL模板
    *
    * @return string
    */
    public function getSqlTemplate()
    {
        return $this->container['sqlTemplate'];
    }

    /**
    * Sets sqlTemplate
    *
    * @param string $sqlTemplate SQL模板
    *
    * @return $this
    */
    public function setSqlTemplate($sqlTemplate)
    {
        $this->container['sqlTemplate'] = $sqlTemplate;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets totalCount
    *  总执行次数
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
    * @param int $totalCount 总执行次数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets topStateDurationList
    *  当前模板下状态持续时间长TOP会话列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[]
    */
    public function getTopStateDurationList()
    {
        return $this->container['topStateDurationList'];
    }

    /**
    * Sets topStateDurationList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[] $topStateDurationList 当前模板下状态持续时间长TOP会话列表
    *
    * @return $this
    */
    public function setTopStateDurationList($topStateDurationList)
    {
        $this->container['topStateDurationList'] = $topStateDurationList;
        return $this;
    }

    /**
    * Gets topTransactionDurationList
    *  当前模板下事务持续时间长TOP会话列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[]
    */
    public function getTopTransactionDurationList()
    {
        return $this->container['topTransactionDurationList'];
    }

    /**
    * Sets topTransactionDurationList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowAnalysisSessionResultRespTopStateDuration[] $topTransactionDurationList 当前模板下事务持续时间长TOP会话列表
    *
    * @return $this
    */
    public function setTopTransactionDurationList($topTransactionDurationList)
    {
        $this->container['topTransactionDurationList'] = $topTransactionDurationList;
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

