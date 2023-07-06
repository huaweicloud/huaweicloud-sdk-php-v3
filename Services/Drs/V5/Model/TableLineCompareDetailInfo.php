<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableLineCompareDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableLineCompareDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceTableName  源库表名称。
    * sourceRowNum  源库表行数。
    * targetTableName  目标库表名称。
    * targetRowNum  目标库表行数。
    * differenceRowNum  差异值。
    * status  对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    * message  信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceTableName' => 'string',
            'sourceRowNum' => 'string',
            'targetTableName' => 'string',
            'targetRowNum' => 'string',
            'differenceRowNum' => 'string',
            'status' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceTableName  源库表名称。
    * sourceRowNum  源库表行数。
    * targetTableName  目标库表名称。
    * targetRowNum  目标库表行数。
    * differenceRowNum  差异值。
    * status  对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    * message  信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceTableName' => null,
        'sourceRowNum' => null,
        'targetTableName' => null,
        'targetRowNum' => null,
        'differenceRowNum' => null,
        'status' => null,
        'message' => null
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
    * sourceTableName  源库表名称。
    * sourceRowNum  源库表行数。
    * targetTableName  目标库表名称。
    * targetRowNum  目标库表行数。
    * differenceRowNum  差异值。
    * status  对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    * message  信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceTableName' => 'source_table_name',
            'sourceRowNum' => 'source_row_num',
            'targetTableName' => 'target_table_name',
            'targetRowNum' => 'target_row_num',
            'differenceRowNum' => 'difference_row_num',
            'status' => 'status',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceTableName  源库表名称。
    * sourceRowNum  源库表行数。
    * targetTableName  目标库表名称。
    * targetRowNum  目标库表行数。
    * differenceRowNum  差异值。
    * status  对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    * message  信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceTableName' => 'setSourceTableName',
            'sourceRowNum' => 'setSourceRowNum',
            'targetTableName' => 'setTargetTableName',
            'targetRowNum' => 'setTargetRowNum',
            'differenceRowNum' => 'setDifferenceRowNum',
            'status' => 'setStatus',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceTableName  源库表名称。
    * sourceRowNum  源库表行数。
    * targetTableName  目标库表名称。
    * targetRowNum  目标库表行数。
    * differenceRowNum  差异值。
    * status  对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    * message  信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceTableName' => 'getSourceTableName',
            'sourceRowNum' => 'getSourceRowNum',
            'targetTableName' => 'getTargetTableName',
            'targetRowNum' => 'getTargetRowNum',
            'differenceRowNum' => 'getDifferenceRowNum',
            'status' => 'getStatus',
            'message' => 'getMessage'
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
    const STATUS_CONSISTENT = 'CONSISTENT';
    const STATUS_INCONSISTENT = 'INCONSISTENT';
    const STATUS_COMPARING = 'COMPARING';
    const STATUS_WAITING_FOR_COMPARISON = 'WAITING_FOR_COMPARISON';
    const STATUS_FAILED_TO_COMPARE = 'FAILED_TO_COMPARE';
    const STATUS_TARGET_DB_NOT_EXIST = 'TARGET_DB_NOT_EXIST';
    const STATUS_CAN_NOT_COMPARE = 'CAN_NOT_COMPARE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CONSISTENT,
            self::STATUS_INCONSISTENT,
            self::STATUS_COMPARING,
            self::STATUS_WAITING_FOR_COMPARISON,
            self::STATUS_FAILED_TO_COMPARE,
            self::STATUS_TARGET_DB_NOT_EXIST,
            self::STATUS_CAN_NOT_COMPARE,
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
        $this->container['sourceTableName'] = isset($data['sourceTableName']) ? $data['sourceTableName'] : null;
        $this->container['sourceRowNum'] = isset($data['sourceRowNum']) ? $data['sourceRowNum'] : null;
        $this->container['targetTableName'] = isset($data['targetTableName']) ? $data['targetTableName'] : null;
        $this->container['targetRowNum'] = isset($data['targetRowNum']) ? $data['targetRowNum'] : null;
        $this->container['differenceRowNum'] = isset($data['differenceRowNum']) ? $data['differenceRowNum'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets sourceTableName
    *  源库表名称。
    *
    * @return string|null
    */
    public function getSourceTableName()
    {
        return $this->container['sourceTableName'];
    }

    /**
    * Sets sourceTableName
    *
    * @param string|null $sourceTableName 源库表名称。
    *
    * @return $this
    */
    public function setSourceTableName($sourceTableName)
    {
        $this->container['sourceTableName'] = $sourceTableName;
        return $this;
    }

    /**
    * Gets sourceRowNum
    *  源库表行数。
    *
    * @return string|null
    */
    public function getSourceRowNum()
    {
        return $this->container['sourceRowNum'];
    }

    /**
    * Sets sourceRowNum
    *
    * @param string|null $sourceRowNum 源库表行数。
    *
    * @return $this
    */
    public function setSourceRowNum($sourceRowNum)
    {
        $this->container['sourceRowNum'] = $sourceRowNum;
        return $this;
    }

    /**
    * Gets targetTableName
    *  目标库表名称。
    *
    * @return string|null
    */
    public function getTargetTableName()
    {
        return $this->container['targetTableName'];
    }

    /**
    * Sets targetTableName
    *
    * @param string|null $targetTableName 目标库表名称。
    *
    * @return $this
    */
    public function setTargetTableName($targetTableName)
    {
        $this->container['targetTableName'] = $targetTableName;
        return $this;
    }

    /**
    * Gets targetRowNum
    *  目标库表行数。
    *
    * @return string|null
    */
    public function getTargetRowNum()
    {
        return $this->container['targetRowNum'];
    }

    /**
    * Sets targetRowNum
    *
    * @param string|null $targetRowNum 目标库表行数。
    *
    * @return $this
    */
    public function setTargetRowNum($targetRowNum)
    {
        $this->container['targetRowNum'] = $targetRowNum;
        return $this;
    }

    /**
    * Gets differenceRowNum
    *  差异值。
    *
    * @return string|null
    */
    public function getDifferenceRowNum()
    {
        return $this->container['differenceRowNum'];
    }

    /**
    * Sets differenceRowNum
    *
    * @param string|null $differenceRowNum 差异值。
    *
    * @return $this
    */
    public function setDifferenceRowNum($differenceRowNum)
    {
        $this->container['differenceRowNum'] = $differenceRowNum;
        return $this;
    }

    /**
    * Gets status
    *  对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  信息。
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
    * @param string|null $message 信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

