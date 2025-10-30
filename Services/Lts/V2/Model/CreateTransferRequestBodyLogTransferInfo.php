<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTransferRequestBodyLogTransferInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTransferRequestBody_log_transfer_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logTransferMode  日志转储方式。cycle是指周期性转储，realTime是指实时转储。OBS转储只支持\"cycle\"，DIS转储和DMS转储只支持\"realTime\"。
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，只支持\"ENABLE\",\"DISABLE\",\"EXCEPTION\"。ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logAgencyTransfer  logAgencyTransfer
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logTransferType' => 'string',
            'logTransferMode' => 'string',
            'logStorageFormat' => 'string',
            'logTransferStatus' => 'string',
            'logAgencyTransfer' => '\HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogTransferInfoLogAgencyTransfer',
            'logTransferDetail' => '\HuaweiCloud\SDK\Lts\V2\Model\LogTransferDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logTransferMode  日志转储方式。cycle是指周期性转储，realTime是指实时转储。OBS转储只支持\"cycle\"，DIS转储和DMS转储只支持\"realTime\"。
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，只支持\"ENABLE\",\"DISABLE\",\"EXCEPTION\"。ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logAgencyTransfer  logAgencyTransfer
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logTransferType' => null,
        'logTransferMode' => null,
        'logStorageFormat' => null,
        'logTransferStatus' => null,
        'logAgencyTransfer' => null,
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
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logTransferMode  日志转储方式。cycle是指周期性转储，realTime是指实时转储。OBS转储只支持\"cycle\"，DIS转储和DMS转储只支持\"realTime\"。
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，只支持\"ENABLE\",\"DISABLE\",\"EXCEPTION\"。ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logAgencyTransfer  logAgencyTransfer
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logTransferType' => 'log_transfer_type',
            'logTransferMode' => 'log_transfer_mode',
            'logStorageFormat' => 'log_storage_format',
            'logTransferStatus' => 'log_transfer_status',
            'logAgencyTransfer' => 'log_agency_transfer',
            'logTransferDetail' => 'log_transfer_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logTransferMode  日志转储方式。cycle是指周期性转储，realTime是指实时转储。OBS转储只支持\"cycle\"，DIS转储和DMS转储只支持\"realTime\"。
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，只支持\"ENABLE\",\"DISABLE\",\"EXCEPTION\"。ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logAgencyTransfer  logAgencyTransfer
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'logTransferType' => 'setLogTransferType',
            'logTransferMode' => 'setLogTransferMode',
            'logStorageFormat' => 'setLogStorageFormat',
            'logTransferStatus' => 'setLogTransferStatus',
            'logAgencyTransfer' => 'setLogAgencyTransfer',
            'logTransferDetail' => 'setLogTransferDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logTransferMode  日志转储方式。cycle是指周期性转储，realTime是指实时转储。OBS转储只支持\"cycle\"，DIS转储和DMS转储只支持\"realTime\"。
    * logStorageFormat  日志转储格式。只支持\"RAW\", \"JSON\"。RAW是指原始日志格式，JSON是指JSON日志格式。OBS转储和DIS转储支持JSON和RAW，DMS转储仅支持RAW
    * logTransferStatus  日志转储状态，只支持\"ENABLE\",\"DISABLE\",\"EXCEPTION\"。ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    * logAgencyTransfer  logAgencyTransfer
    * logTransferDetail  logTransferDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'logTransferType' => 'getLogTransferType',
            'logTransferMode' => 'getLogTransferMode',
            'logStorageFormat' => 'getLogStorageFormat',
            'logTransferStatus' => 'getLogTransferStatus',
            'logAgencyTransfer' => 'getLogAgencyTransfer',
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
    const LOG_TRANSFER_MODE_CYCLE = 'cycle';
    const LOG_TRANSFER_MODE_REAL_TIME = 'realTime';
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
    public function getLogTransferModeAllowableValues()
    {
        return [
            self::LOG_TRANSFER_MODE_CYCLE,
            self::LOG_TRANSFER_MODE_REAL_TIME,
        ];
    }

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
        $this->container['logTransferType'] = isset($data['logTransferType']) ? $data['logTransferType'] : null;
        $this->container['logTransferMode'] = isset($data['logTransferMode']) ? $data['logTransferMode'] : null;
        $this->container['logStorageFormat'] = isset($data['logStorageFormat']) ? $data['logStorageFormat'] : null;
        $this->container['logTransferStatus'] = isset($data['logTransferStatus']) ? $data['logTransferStatus'] : null;
        $this->container['logAgencyTransfer'] = isset($data['logAgencyTransfer']) ? $data['logAgencyTransfer'] : null;
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
        if ($this->container['logTransferType'] === null) {
            $invalidProperties[] = "'logTransferType' can't be null";
        }
        if ($this->container['logTransferMode'] === null) {
            $invalidProperties[] = "'logTransferMode' can't be null";
        }
            $allowedValues = $this->getLogTransferModeAllowableValues();
                if (!is_null($this->container['logTransferMode']) && !in_array($this->container['logTransferMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logTransferMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets logTransferType
    *  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    *
    * @return string
    */
    public function getLogTransferType()
    {
        return $this->container['logTransferType'];
    }

    /**
    * Sets logTransferType
    *
    * @param string $logTransferType 日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    *
    * @return $this
    */
    public function setLogTransferType($logTransferType)
    {
        $this->container['logTransferType'] = $logTransferType;
        return $this;
    }

    /**
    * Gets logTransferMode
    *  日志转储方式。cycle是指周期性转储，realTime是指实时转储。OBS转储只支持\"cycle\"，DIS转储和DMS转储只支持\"realTime\"。
    *
    * @return string
    */
    public function getLogTransferMode()
    {
        return $this->container['logTransferMode'];
    }

    /**
    * Sets logTransferMode
    *
    * @param string $logTransferMode 日志转储方式。cycle是指周期性转储，realTime是指实时转储。OBS转储只支持\"cycle\"，DIS转储和DMS转储只支持\"realTime\"。
    *
    * @return $this
    */
    public function setLogTransferMode($logTransferMode)
    {
        $this->container['logTransferMode'] = $logTransferMode;
        return $this;
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
    *  日志转储状态，只支持\"ENABLE\",\"DISABLE\",\"EXCEPTION\"。ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
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
    * @param string $logTransferStatus 日志转储状态，只支持\"ENABLE\",\"DISABLE\",\"EXCEPTION\"。ENABLE是指日志转储开启状态，DISABLE是指日志转储关闭状态，EXCEPTION是指日志转储异常状态
    *
    * @return $this
    */
    public function setLogTransferStatus($logTransferStatus)
    {
        $this->container['logTransferStatus'] = $logTransferStatus;
        return $this;
    }

    /**
    * Gets logAgencyTransfer
    *  logAgencyTransfer
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogTransferInfoLogAgencyTransfer|null
    */
    public function getLogAgencyTransfer()
    {
        return $this->container['logAgencyTransfer'];
    }

    /**
    * Sets logAgencyTransfer
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogTransferInfoLogAgencyTransfer|null $logAgencyTransfer logAgencyTransfer
    *
    * @return $this
    */
    public function setLogAgencyTransfer($logAgencyTransfer)
    {
        $this->container['logAgencyTransfer'] = $logAgencyTransfer;
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

