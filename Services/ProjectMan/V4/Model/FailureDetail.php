<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FailureDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FailureDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * snapshotId  快照ID。
    * snapshotTitle  快照标题。
    * failureReason  失败原因。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'snapshotId' => 'string',
            'snapshotTitle' => 'string',
            'failureReason' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * snapshotId  快照ID。
    * snapshotTitle  快照标题。
    * failureReason  失败原因。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'snapshotId' => null,
        'snapshotTitle' => null,
        'failureReason' => null,
        'errorCode' => null
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
    * snapshotId  快照ID。
    * snapshotTitle  快照标题。
    * failureReason  失败原因。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'snapshotId' => 'snapshot_id',
            'snapshotTitle' => 'snapshot_title',
            'failureReason' => 'failure_reason',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * snapshotId  快照ID。
    * snapshotTitle  快照标题。
    * failureReason  失败原因。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $setters = [
            'snapshotId' => 'setSnapshotId',
            'snapshotTitle' => 'setSnapshotTitle',
            'failureReason' => 'setFailureReason',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * snapshotId  快照ID。
    * snapshotTitle  快照标题。
    * failureReason  失败原因。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $getters = [
            'snapshotId' => 'getSnapshotId',
            'snapshotTitle' => 'getSnapshotTitle',
            'failureReason' => 'getFailureReason',
            'errorCode' => 'getErrorCode'
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
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['snapshotTitle'] = isset($data['snapshotTitle']) ? $data['snapshotTitle'] : null;
        $this->container['failureReason'] = isset($data['failureReason']) ? $data['failureReason'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
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
    * Gets snapshotId
    *  快照ID。
    *
    * @return string|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string|null $snapshotId 快照ID。
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets snapshotTitle
    *  快照标题。
    *
    * @return string|null
    */
    public function getSnapshotTitle()
    {
        return $this->container['snapshotTitle'];
    }

    /**
    * Sets snapshotTitle
    *
    * @param string|null $snapshotTitle 快照标题。
    *
    * @return $this
    */
    public function setSnapshotTitle($snapshotTitle)
    {
        $this->container['snapshotTitle'] = $snapshotTitle;
        return $this;
    }

    /**
    * Gets failureReason
    *  失败原因。
    *
    * @return string|null
    */
    public function getFailureReason()
    {
        return $this->container['failureReason'];
    }

    /**
    * Sets failureReason
    *
    * @param string|null $failureReason 失败原因。
    *
    * @return $this
    */
    public function setFailureReason($failureReason)
    {
        $this->container['failureReason'] = $failureReason;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

