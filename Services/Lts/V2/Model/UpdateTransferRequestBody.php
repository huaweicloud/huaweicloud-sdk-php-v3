<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTransferRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTransferRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logTransferId  日志转储ID
    * logGroupId  日志组ID
    * logTransferInfo  logTransferInfo
    * logStreams  日志流信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logTransferId' => 'string',
            'logGroupId' => 'string',
            'logTransferInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\UpdateTransferRequestBodyLogTransferInfo',
            'logStreams' => '\HuaweiCloud\SDK\Lts\V2\Model\LogStreams[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logTransferId  日志转储ID
    * logGroupId  日志组ID
    * logTransferInfo  logTransferInfo
    * logStreams  日志流信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logTransferId' => null,
        'logGroupId' => null,
        'logTransferInfo' => null,
        'logStreams' => null
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
    * logTransferId  日志转储ID
    * logGroupId  日志组ID
    * logTransferInfo  logTransferInfo
    * logStreams  日志流信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logTransferId' => 'log_transfer_id',
            'logGroupId' => 'log_group_id',
            'logTransferInfo' => 'log_transfer_info',
            'logStreams' => 'log_streams'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logTransferId  日志转储ID
    * logGroupId  日志组ID
    * logTransferInfo  logTransferInfo
    * logStreams  日志流信息
    *
    * @var string[]
    */
    protected static $setters = [
            'logTransferId' => 'setLogTransferId',
            'logGroupId' => 'setLogGroupId',
            'logTransferInfo' => 'setLogTransferInfo',
            'logStreams' => 'setLogStreams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logTransferId  日志转储ID
    * logGroupId  日志组ID
    * logTransferInfo  logTransferInfo
    * logStreams  日志流信息
    *
    * @var string[]
    */
    protected static $getters = [
            'logTransferId' => 'getLogTransferId',
            'logGroupId' => 'getLogGroupId',
            'logTransferInfo' => 'getLogTransferInfo',
            'logStreams' => 'getLogStreams'
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
        $this->container['logTransferId'] = isset($data['logTransferId']) ? $data['logTransferId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTransferInfo'] = isset($data['logTransferInfo']) ? $data['logTransferInfo'] : null;
        $this->container['logStreams'] = isset($data['logStreams']) ? $data['logStreams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logTransferId'] === null) {
            $invalidProperties[] = "'logTransferId' can't be null";
        }
            if ((mb_strlen($this->container['logTransferId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logTransferId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logTransferId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logTransferId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['logTransferInfo'] === null) {
            $invalidProperties[] = "'logTransferInfo' can't be null";
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
    * Gets logTransferId
    *  日志转储ID
    *
    * @return string
    */
    public function getLogTransferId()
    {
        return $this->container['logTransferId'];
    }

    /**
    * Sets logTransferId
    *
    * @param string $logTransferId 日志转储ID
    *
    * @return $this
    */
    public function setLogTransferId($logTransferId)
    {
        $this->container['logTransferId'] = $logTransferId;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组ID
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logTransferInfo
    *  logTransferInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\UpdateTransferRequestBodyLogTransferInfo
    */
    public function getLogTransferInfo()
    {
        return $this->container['logTransferInfo'];
    }

    /**
    * Sets logTransferInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\UpdateTransferRequestBodyLogTransferInfo $logTransferInfo logTransferInfo
    *
    * @return $this
    */
    public function setLogTransferInfo($logTransferInfo)
    {
        $this->container['logTransferInfo'] = $logTransferInfo;
        return $this;
    }

    /**
    * Gets logStreams
    *  日志流信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LogStreams[]|null
    */
    public function getLogStreams()
    {
        return $this->container['logStreams'];
    }

    /**
    * Sets logStreams
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LogStreams[]|null $logStreams 日志流信息
    *
    * @return $this
    */
    public function setLogStreams($logStreams)
    {
        $this->container['logStreams'] = $logStreams;
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

