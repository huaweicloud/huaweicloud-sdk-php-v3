<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbObjectFilteringResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbObjectFilteringResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  数据库库名。
    * schemaName  数据库Schema名称。
    * tableName  数据库表名称。
    * isSuccess  数据过滤校验结果。
    * message  当数据过滤校验结果是false，返回校验失败的原因。
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    * targetResult  校验目标库比对条件过滤的结果
    * sourceResult  校验源库比对条件过滤的结果
    * targetMessage  校验目标库比对条件过滤的失败原因
    * sourceMessage  校验源库比对条件过滤的失败原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'isSuccess' => 'bool',
            'message' => 'string',
            'source' => 'string',
            'targetResult' => 'string',
            'sourceResult' => 'string',
            'targetMessage' => 'string',
            'sourceMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  数据库库名。
    * schemaName  数据库Schema名称。
    * tableName  数据库表名称。
    * isSuccess  数据过滤校验结果。
    * message  当数据过滤校验结果是false，返回校验失败的原因。
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    * targetResult  校验目标库比对条件过滤的结果
    * sourceResult  校验源库比对条件过滤的结果
    * targetMessage  校验目标库比对条件过滤的失败原因
    * sourceMessage  校验源库比对条件过滤的失败原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'schemaName' => null,
        'tableName' => null,
        'isSuccess' => null,
        'message' => null,
        'source' => null,
        'targetResult' => null,
        'sourceResult' => null,
        'targetMessage' => null,
        'sourceMessage' => null
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
    * dbName  数据库库名。
    * schemaName  数据库Schema名称。
    * tableName  数据库表名称。
    * isSuccess  数据过滤校验结果。
    * message  当数据过滤校验结果是false，返回校验失败的原因。
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    * targetResult  校验目标库比对条件过滤的结果
    * sourceResult  校验源库比对条件过滤的结果
    * targetMessage  校验目标库比对条件过滤的失败原因
    * sourceMessage  校验源库比对条件过滤的失败原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'isSuccess' => 'is_success',
            'message' => 'message',
            'source' => 'source',
            'targetResult' => 'target_result',
            'sourceResult' => 'source_result',
            'targetMessage' => 'target_message',
            'sourceMessage' => 'source_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  数据库库名。
    * schemaName  数据库Schema名称。
    * tableName  数据库表名称。
    * isSuccess  数据过滤校验结果。
    * message  当数据过滤校验结果是false，返回校验失败的原因。
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    * targetResult  校验目标库比对条件过滤的结果
    * sourceResult  校验源库比对条件过滤的结果
    * targetMessage  校验目标库比对条件过滤的失败原因
    * sourceMessage  校验源库比对条件过滤的失败原因
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'source' => 'setSource',
            'targetResult' => 'setTargetResult',
            'sourceResult' => 'setSourceResult',
            'targetMessage' => 'setTargetMessage',
            'sourceMessage' => 'setSourceMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  数据库库名。
    * schemaName  数据库Schema名称。
    * tableName  数据库表名称。
    * isSuccess  数据过滤校验结果。
    * message  当数据过滤校验结果是false，返回校验失败的原因。
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    * targetResult  校验目标库比对条件过滤的结果
    * sourceResult  校验源库比对条件过滤的结果
    * targetMessage  校验目标库比对条件过滤的失败原因
    * sourceMessage  校验源库比对条件过滤的失败原因
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'source' => 'getSource',
            'targetResult' => 'getTargetResult',
            'sourceResult' => 'getSourceResult',
            'targetMessage' => 'getTargetMessage',
            'sourceMessage' => 'getSourceMessage'
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
    const SOURCE_JOB = 'job';
    const SOURCE_COMPARE = 'compare';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_JOB,
            self::SOURCE_COMPARE,
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
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['targetResult'] = isset($data['targetResult']) ? $data['targetResult'] : null;
        $this->container['sourceResult'] = isset($data['sourceResult']) ? $data['sourceResult'] : null;
        $this->container['targetMessage'] = isset($data['targetMessage']) ? $data['targetMessage'] : null;
        $this->container['sourceMessage'] = isset($data['sourceMessage']) ? $data['sourceMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSourceAllowableValues();
                if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets dbName
    *  数据库库名。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库库名。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets schemaName
    *  数据库Schema名称。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName 数据库Schema名称。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets tableName
    *  数据库表名称。
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 数据库表名称。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets isSuccess
    *  数据过滤校验结果。
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 数据过滤校验结果。
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  当数据过滤校验结果是false，返回校验失败的原因。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 当数据过滤校验结果是false，返回校验失败的原因。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets source
    *  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets targetResult
    *  校验目标库比对条件过滤的结果
    *
    * @return string|null
    */
    public function getTargetResult()
    {
        return $this->container['targetResult'];
    }

    /**
    * Sets targetResult
    *
    * @param string|null $targetResult 校验目标库比对条件过滤的结果
    *
    * @return $this
    */
    public function setTargetResult($targetResult)
    {
        $this->container['targetResult'] = $targetResult;
        return $this;
    }

    /**
    * Gets sourceResult
    *  校验源库比对条件过滤的结果
    *
    * @return string|null
    */
    public function getSourceResult()
    {
        return $this->container['sourceResult'];
    }

    /**
    * Sets sourceResult
    *
    * @param string|null $sourceResult 校验源库比对条件过滤的结果
    *
    * @return $this
    */
    public function setSourceResult($sourceResult)
    {
        $this->container['sourceResult'] = $sourceResult;
        return $this;
    }

    /**
    * Gets targetMessage
    *  校验目标库比对条件过滤的失败原因
    *
    * @return string|null
    */
    public function getTargetMessage()
    {
        return $this->container['targetMessage'];
    }

    /**
    * Sets targetMessage
    *
    * @param string|null $targetMessage 校验目标库比对条件过滤的失败原因
    *
    * @return $this
    */
    public function setTargetMessage($targetMessage)
    {
        $this->container['targetMessage'] = $targetMessage;
        return $this;
    }

    /**
    * Gets sourceMessage
    *  校验源库比对条件过滤的失败原因
    *
    * @return string|null
    */
    public function getSourceMessage()
    {
        return $this->container['sourceMessage'];
    }

    /**
    * Sets sourceMessage
    *
    * @param string|null $sourceMessage 校验源库比对条件过滤的失败原因
    *
    * @return $this
    */
    public function setSourceMessage($sourceMessage)
    {
        $this->container['sourceMessage'] = $sourceMessage;
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

