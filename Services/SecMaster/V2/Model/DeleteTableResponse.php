<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteTableResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteTableResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableId  表ID
    * processStatus  processStatus
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableId' => 'string',
            'processStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableProcessStatus',
            'deleteTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableId  表ID
    * processStatus  processStatus
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableId' => null,
        'processStatus' => null,
        'deleteTime' => 'int64'
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
    * tableId  表ID
    * processStatus  processStatus
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableId' => 'table_id',
            'processStatus' => 'process_status',
            'deleteTime' => 'delete_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableId  表ID
    * processStatus  processStatus
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'tableId' => 'setTableId',
            'processStatus' => 'setProcessStatus',
            'deleteTime' => 'setDeleteTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableId  表ID
    * processStatus  processStatus
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'tableId' => 'getTableId',
            'processStatus' => 'getProcessStatus',
            'deleteTime' => 'getDeleteTime'
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
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be bigger than or equal to 0.";
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
    * Gets tableId
    *  表ID
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表ID
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets processStatus
    *  processStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableProcessStatus|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableProcessStatus|null $processStatus processStatus
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets deleteTime
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param int|null $deleteTime 毫秒时间戳
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
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

