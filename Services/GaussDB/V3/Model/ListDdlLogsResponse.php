<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDdlLogsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDdlLogsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ddlLogs  **参数解释**：  DDL下载日志列表。  **取值范围**：  不涉及。
    * totalCount  **参数解释**：  总条数。  **取值范围**：  不涉及。
    * keepDays  **参数解释**：  日志保留天数。  **取值范围**：  不涉及。
    * switchStatus  **参数解释**：  DDL日志下载开关状态。  **取值范围**：  - ON，开启。 - OFF，关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ddlLogs' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DdlLogInfo[]',
            'totalCount' => 'int',
            'keepDays' => 'int',
            'switchStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ddlLogs  **参数解释**：  DDL下载日志列表。  **取值范围**：  不涉及。
    * totalCount  **参数解释**：  总条数。  **取值范围**：  不涉及。
    * keepDays  **参数解释**：  日志保留天数。  **取值范围**：  不涉及。
    * switchStatus  **参数解释**：  DDL日志下载开关状态。  **取值范围**：  - ON，开启。 - OFF，关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ddlLogs' => null,
        'totalCount' => null,
        'keepDays' => null,
        'switchStatus' => null
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
    * ddlLogs  **参数解释**：  DDL下载日志列表。  **取值范围**：  不涉及。
    * totalCount  **参数解释**：  总条数。  **取值范围**：  不涉及。
    * keepDays  **参数解释**：  日志保留天数。  **取值范围**：  不涉及。
    * switchStatus  **参数解释**：  DDL日志下载开关状态。  **取值范围**：  - ON，开启。 - OFF，关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ddlLogs' => 'ddl_logs',
            'totalCount' => 'total_count',
            'keepDays' => 'keep_days',
            'switchStatus' => 'switch_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ddlLogs  **参数解释**：  DDL下载日志列表。  **取值范围**：  不涉及。
    * totalCount  **参数解释**：  总条数。  **取值范围**：  不涉及。
    * keepDays  **参数解释**：  日志保留天数。  **取值范围**：  不涉及。
    * switchStatus  **参数解释**：  DDL日志下载开关状态。  **取值范围**：  - ON，开启。 - OFF，关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'ddlLogs' => 'setDdlLogs',
            'totalCount' => 'setTotalCount',
            'keepDays' => 'setKeepDays',
            'switchStatus' => 'setSwitchStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ddlLogs  **参数解释**：  DDL下载日志列表。  **取值范围**：  不涉及。
    * totalCount  **参数解释**：  总条数。  **取值范围**：  不涉及。
    * keepDays  **参数解释**：  日志保留天数。  **取值范围**：  不涉及。
    * switchStatus  **参数解释**：  DDL日志下载开关状态。  **取值范围**：  - ON，开启。 - OFF，关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'ddlLogs' => 'getDdlLogs',
            'totalCount' => 'getTotalCount',
            'keepDays' => 'getKeepDays',
            'switchStatus' => 'getSwitchStatus'
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
        $this->container['ddlLogs'] = isset($data['ddlLogs']) ? $data['ddlLogs'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['switchStatus'] = isset($data['switchStatus']) ? $data['switchStatus'] : null;
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
    * Gets ddlLogs
    *  **参数解释**：  DDL下载日志列表。  **取值范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\DdlLogInfo[]|null
    */
    public function getDdlLogs()
    {
        return $this->container['ddlLogs'];
    }

    /**
    * Sets ddlLogs
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DdlLogInfo[]|null $ddlLogs **参数解释**：  DDL下载日志列表。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDdlLogs($ddlLogs)
    {
        $this->container['ddlLogs'] = $ddlLogs;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释**：  总条数。  **取值范围**：  不涉及。
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
    * @param int|null $totalCount **参数解释**：  总条数。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets keepDays
    *  **参数解释**：  日志保留天数。  **取值范围**：  不涉及。
    *
    * @return int|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int|null $keepDays **参数解释**：  日志保留天数。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets switchStatus
    *  **参数解释**：  DDL日志下载开关状态。  **取值范围**：  - ON，开启。 - OFF，关闭。
    *
    * @return string|null
    */
    public function getSwitchStatus()
    {
        return $this->container['switchStatus'];
    }

    /**
    * Sets switchStatus
    *
    * @param string|null $switchStatus **参数解释**：  DDL日志下载开关状态。  **取值范围**：  - ON，开启。 - OFF，关闭。
    *
    * @return $this
    */
    public function setSwitchStatus($switchStatus)
    {
        $this->container['switchStatus'] = $switchStatus;
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

