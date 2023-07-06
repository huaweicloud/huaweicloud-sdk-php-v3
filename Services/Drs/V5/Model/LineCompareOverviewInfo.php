<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineCompareOverviewInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineCompareOverviewInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDbName  源库库名。
    * targetDbName  目标库库名。
    * status  行对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDbName' => 'string',
            'targetDbName' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDbName  源库库名。
    * targetDbName  目标库库名。
    * status  行对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDbName' => null,
        'targetDbName' => null,
        'status' => null
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
    * sourceDbName  源库库名。
    * targetDbName  目标库库名。
    * status  行对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDbName' => 'source_db_name',
            'targetDbName' => 'target_db_name',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDbName  源库库名。
    * targetDbName  目标库库名。
    * status  行对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDbName' => 'setSourceDbName',
            'targetDbName' => 'setTargetDbName',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDbName  源库库名。
    * targetDbName  目标库库名。
    * status  行对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDbName' => 'getSourceDbName',
            'targetDbName' => 'getTargetDbName',
            'status' => 'getStatus'
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
        $this->container['sourceDbName'] = isset($data['sourceDbName']) ? $data['sourceDbName'] : null;
        $this->container['targetDbName'] = isset($data['targetDbName']) ? $data['targetDbName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets sourceDbName
    *  源库库名。
    *
    * @return string|null
    */
    public function getSourceDbName()
    {
        return $this->container['sourceDbName'];
    }

    /**
    * Sets sourceDbName
    *
    * @param string|null $sourceDbName 源库库名。
    *
    * @return $this
    */
    public function setSourceDbName($sourceDbName)
    {
        $this->container['sourceDbName'] = $sourceDbName;
        return $this;
    }

    /**
    * Gets targetDbName
    *  目标库库名。
    *
    * @return string|null
    */
    public function getTargetDbName()
    {
        return $this->container['targetDbName'];
    }

    /**
    * Sets targetDbName
    *
    * @param string|null $targetDbName 目标库库名。
    *
    * @return $this
    */
    public function setTargetDbName($targetDbName)
    {
        $this->container['targetDbName'] = $targetDbName;
        return $this;
    }

    /**
    * Gets status
    *  行对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
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
    * @param string|null $status 行对比结果。取值： - CONSISTENT：一致。 - INCONSISTENT：不一致。 - COMPARING：正在对比。 - WAITING_FOR_COMPARISON：等待对比。 - FAILED_TO_COMPARE：对比失败。 - TARGET_DB_NOT_EXIST：目标库不存在。 - CAN_NOT_COMPARE：无法对比。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

