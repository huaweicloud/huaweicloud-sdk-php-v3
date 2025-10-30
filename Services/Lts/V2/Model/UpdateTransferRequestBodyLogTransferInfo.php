<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTransferRequestBodyLogTransferInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTransferRequestBody_log_transfer_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logStorageFormat' => 'string',
            'logTransferStatus' => 'string',
            'logTransferDetail' => '\HuaweiCloud\SDK\Lts\V2\Model\LogTransferDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logStorageFormat' => null,
        'logTransferStatus' => null,
        'logTransferDetail' => null
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
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logStorageFormat' => 'log_storage_format',
            'logTransferStatus' => 'log_transfer_status',
            'logTransferDetail' => 'log_transfer_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'logStorageFormat' => 'setLogStorageFormat',
            'logTransferStatus' => 'setLogTransferStatus',
            'logTransferDetail' => 'setLogTransferDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'logStorageFormat' => 'getLogStorageFormat',
            'logTransferStatus' => 'getLogTransferStatus',
            'logTransferDetail' => 'getLogTransferDetail'
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
    const LOG_STORAGE_FORMAT_JSON = 'JSON';
    const LOG_STORAGE_FORMAT_RAW = 'RAW';
    const LOG_TRANSFER_STATUS_ENABLE = 'ENABLE';
    const LOG_TRANSFER_STATUS_DISABLE = 'DISABLE';
    const LOG_TRANSFER_STATUS_EXCEPTION = 'EXCEPTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogStorageFormatAllowableValues()
    {
        return [
            self::LOG_STORAGE_FORMAT_JSON,
            self::LOG_STORAGE_FORMAT_RAW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogTransferStatusAllowableValues()
    {
        return [
            self::LOG_TRANSFER_STATUS_ENABLE,
            self::LOG_TRANSFER_STATUS_DISABLE,
            self::LOG_TRANSFER_STATUS_EXCEPTION,
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
        $this->container['logStorageFormat'] = isset($data['logStorageFormat']) ? $data['logStorageFormat'] : null;
        $this->container['logTransferStatus'] = isset($data['logTransferStatus']) ? $data['logTransferStatus'] : null;
        $this->container['logTransferDetail'] = isset($data['logTransferDetail']) ? $data['logTransferDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logStorageFormat'] === null) {
            $invalidProperties[] = "'logStorageFormat' can't be null";
        }
            $allowedValues = $this->getLogStorageFormatAllowableValues();
                if (!is_null($this->container['logStorageFormat']) && !in_array($this->container['logStorageFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logStorageFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['logTransferStatus'] === null) {
            $invalidProperties[] = "'logTransferStatus' can't be null";
        }
            $allowedValues = $this->getLogTransferStatusAllowableValues();
                if (!is_null($this->container['logTransferStatus']) && !in_array($this->container['logTransferStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logTransferStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['logTransferDetail'] === null) {
            $invalidProperties[] = "'logTransferDetail' can't be null";
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
    * Gets logStorageFormat
    *  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    *
    * @return string
    */
    public function getLogStorageFormat()
    {
        return $this->container['logStorageFormat'];
    }

    /**
    * Sets logStorageFormat
    *
    * @param string $logStorageFormat 日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    *
    * @return $this
    */
    public function setLogStorageFormat($logStorageFormat)
    {
        $this->container['logStorageFormat'] = $logStorageFormat;
        return $this;
    }

    /**
    * Gets logTransferStatus
    *  日志转储状态，ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    *
    * @return string
    */
    public function getLogTransferStatus()
    {
        return $this->container['logTransferStatus'];
    }

    /**
    * Sets logTransferStatus
    *
    * @param string $logTransferStatus 日志转储状态，ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    *
    * @return $this
    */
    public function setLogTransferStatus($logTransferStatus)
    {
        $this->container['logTransferStatus'] = $logTransferStatus;
        return $this;
    }

    /**
    * Gets logTransferDetail
    *  logTransferDetail
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LogTransferDetail
    */
    public function getLogTransferDetail()
    {
        return $this->container['logTransferDetail'];
    }

    /**
    * Sets logTransferDetail
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LogTransferDetail $logTransferDetail logTransferDetail
    *
    * @return $this
    */
    public function setLogTransferDetail($logTransferDetail)
    {
        $this->container['logTransferDetail'] = $logTransferDetail;
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

