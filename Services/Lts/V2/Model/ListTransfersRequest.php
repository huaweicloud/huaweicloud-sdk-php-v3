<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTransfersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTransfersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logGroupName  日志组名称
    * logStreamName  日志流名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logTransferType' => 'string',
            'logGroupName' => 'string',
            'logStreamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logGroupName  日志组名称
    * logStreamName  日志流名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logTransferType' => null,
        'logGroupName' => null,
        'logStreamName' => null
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
    * logGroupName  日志组名称
    * logStreamName  日志流名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logTransferType' => 'log_transfer_type',
            'logGroupName' => 'log_group_name',
            'logStreamName' => 'log_stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logGroupName  日志组名称
    * logStreamName  日志流名称
    *
    * @var string[]
    */
    protected static $setters = [
            'logTransferType' => 'setLogTransferType',
            'logGroupName' => 'setLogGroupName',
            'logStreamName' => 'setLogStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logTransferType  日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    * logGroupName  日志组名称
    * logStreamName  日志流名称
    *
    * @var string[]
    */
    protected static $getters = [
            'logTransferType' => 'getLogTransferType',
            'logGroupName' => 'getLogGroupName',
            'logStreamName' => 'getLogStreamName'
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
    const LOG_TRANSFER_TYPE_OBS = 'OBS';
    const LOG_TRANSFER_TYPE_DIS = 'DIS';
    const LOG_TRANSFER_TYPE_DMS = 'DMS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogTransferTypeAllowableValues()
    {
        return [
            self::LOG_TRANSFER_TYPE_OBS,
            self::LOG_TRANSFER_TYPE_DIS,
            self::LOG_TRANSFER_TYPE_DMS,
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
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLogTransferTypeAllowableValues();
                if (!is_null($this->container['logTransferType']) && !in_array($this->container['logTransferType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logTransferType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be bigger than or equal to 1.";
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
    * @return string|null
    */
    public function getLogTransferType()
    {
        return $this->container['logTransferType'];
    }

    /**
    * Sets logTransferType
    *
    * @param string|null $logTransferType 日志转储类型。OBS指OBS日志转储，DIS指DIS日志转储，DMS指DMS日志转储
    *
    * @return $this
    */
    public function setLogTransferType($logTransferType)
    {
        $this->container['logTransferType'] = $logTransferType;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组名称
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 日志组名称
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
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

