<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryRepairDetailRespRepairDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryRepairDetailResp_repair_details';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceMeta  源表标志列值。
    * targetMeta  目标表标志列值。
    * repairSqlState  修复SQL状态。
    * repairSqlInfo  修复SQL。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceMeta' => 'string',
            'targetMeta' => 'string',
            'repairSqlState' => 'int',
            'repairSqlInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceMeta  源表标志列值。
    * targetMeta  目标表标志列值。
    * repairSqlState  修复SQL状态。
    * repairSqlInfo  修复SQL。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceMeta' => null,
        'targetMeta' => null,
        'repairSqlState' => 'int32',
        'repairSqlInfo' => null
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
    * sourceMeta  源表标志列值。
    * targetMeta  目标表标志列值。
    * repairSqlState  修复SQL状态。
    * repairSqlInfo  修复SQL。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceMeta' => 'source_meta',
            'targetMeta' => 'target_meta',
            'repairSqlState' => 'repair_sql_state',
            'repairSqlInfo' => 'repair_sql_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceMeta  源表标志列值。
    * targetMeta  目标表标志列值。
    * repairSqlState  修复SQL状态。
    * repairSqlInfo  修复SQL。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceMeta' => 'setSourceMeta',
            'targetMeta' => 'setTargetMeta',
            'repairSqlState' => 'setRepairSqlState',
            'repairSqlInfo' => 'setRepairSqlInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceMeta  源表标志列值。
    * targetMeta  目标表标志列值。
    * repairSqlState  修复SQL状态。
    * repairSqlInfo  修复SQL。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceMeta' => 'getSourceMeta',
            'targetMeta' => 'getTargetMeta',
            'repairSqlState' => 'getRepairSqlState',
            'repairSqlInfo' => 'getRepairSqlInfo'
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
        $this->container['sourceMeta'] = isset($data['sourceMeta']) ? $data['sourceMeta'] : null;
        $this->container['targetMeta'] = isset($data['targetMeta']) ? $data['targetMeta'] : null;
        $this->container['repairSqlState'] = isset($data['repairSqlState']) ? $data['repairSqlState'] : null;
        $this->container['repairSqlInfo'] = isset($data['repairSqlInfo']) ? $data['repairSqlInfo'] : null;
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
    * Gets sourceMeta
    *  源表标志列值。
    *
    * @return string|null
    */
    public function getSourceMeta()
    {
        return $this->container['sourceMeta'];
    }

    /**
    * Sets sourceMeta
    *
    * @param string|null $sourceMeta 源表标志列值。
    *
    * @return $this
    */
    public function setSourceMeta($sourceMeta)
    {
        $this->container['sourceMeta'] = $sourceMeta;
        return $this;
    }

    /**
    * Gets targetMeta
    *  目标表标志列值。
    *
    * @return string|null
    */
    public function getTargetMeta()
    {
        return $this->container['targetMeta'];
    }

    /**
    * Sets targetMeta
    *
    * @param string|null $targetMeta 目标表标志列值。
    *
    * @return $this
    */
    public function setTargetMeta($targetMeta)
    {
        $this->container['targetMeta'] = $targetMeta;
        return $this;
    }

    /**
    * Gets repairSqlState
    *  修复SQL状态。
    *
    * @return int|null
    */
    public function getRepairSqlState()
    {
        return $this->container['repairSqlState'];
    }

    /**
    * Sets repairSqlState
    *
    * @param int|null $repairSqlState 修复SQL状态。
    *
    * @return $this
    */
    public function setRepairSqlState($repairSqlState)
    {
        $this->container['repairSqlState'] = $repairSqlState;
        return $this;
    }

    /**
    * Gets repairSqlInfo
    *  修复SQL。
    *
    * @return string|null
    */
    public function getRepairSqlInfo()
    {
        return $this->container['repairSqlInfo'];
    }

    /**
    * Sets repairSqlInfo
    *
    * @param string|null $repairSqlInfo 修复SQL。
    *
    * @return $this
    */
    public function setRepairSqlInfo($repairSqlInfo)
    {
        $this->container['repairSqlInfo'] = $repairSqlInfo;
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

