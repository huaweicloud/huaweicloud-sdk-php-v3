<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTransferRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTransferRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupId  日志组ID
    * logStreams  日志流ID集合
    * logTransferInfo  logTransferInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupId' => 'string',
            'logStreams' => '\HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogStreams[]',
            'logTransferInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogTransferInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupId  日志组ID
    * logStreams  日志流ID集合
    * logTransferInfo  logTransferInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupId' => null,
        'logStreams' => null,
        'logTransferInfo' => null
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
    * logGroupId  日志组ID
    * logStreams  日志流ID集合
    * logTransferInfo  logTransferInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupId' => 'log_group_id',
            'logStreams' => 'log_streams',
            'logTransferInfo' => 'log_transfer_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupId  日志组ID
    * logStreams  日志流ID集合
    * logTransferInfo  logTransferInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupId' => 'setLogGroupId',
            'logStreams' => 'setLogStreams',
            'logTransferInfo' => 'setLogTransferInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupId  日志组ID
    * logStreams  日志流ID集合
    * logTransferInfo  logTransferInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupId' => 'getLogGroupId',
            'logStreams' => 'getLogStreams',
            'logTransferInfo' => 'getLogTransferInfo'
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
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreams'] = isset($data['logStreams']) ? $data['logStreams'] : null;
        $this->container['logTransferInfo'] = isset($data['logTransferInfo']) ? $data['logTransferInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
            if ((mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['logStreams'] === null) {
            $invalidProperties[] = "'logStreams' can't be null";
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
    * Gets logGroupId
    *  日志组ID
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组ID
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreams
    *  日志流ID集合
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogStreams[]
    */
    public function getLogStreams()
    {
        return $this->container['logStreams'];
    }

    /**
    * Sets logStreams
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogStreams[] $logStreams 日志流ID集合
    *
    * @return $this
    */
    public function setLogStreams($logStreams)
    {
        $this->container['logStreams'] = $logStreams;
        return $this;
    }

    /**
    * Gets logTransferInfo
    *  logTransferInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogTransferInfo
    */
    public function getLogTransferInfo()
    {
        return $this->container['logTransferInfo'];
    }

    /**
    * Sets logTransferInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\CreateTransferRequestBodyLogTransferInfo $logTransferInfo logTransferInfo
    *
    * @return $this
    */
    public function setLogTransferInfo($logTransferInfo)
    {
        $this->container['logTransferInfo'] = $logTransferInfo;
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

