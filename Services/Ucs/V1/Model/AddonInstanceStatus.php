<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddonInstanceStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddonInstanceStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  状态信息
    * reason  变化原因信息
    * message  变化详细信息
    * targetVersions  目标版本信息
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'reason' => 'string',
            'message' => 'string',
            'targetVersions' => 'string[]',
            'currentVersion' => '\HuaweiCloud\SDK\Ucs\V1\Model\AddonVersion'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  状态信息
    * reason  变化原因信息
    * message  变化详细信息
    * targetVersions  目标版本信息
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'reason' => null,
        'message' => null,
        'targetVersions' => null,
        'currentVersion' => null
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
    * status  状态信息
    * reason  变化原因信息
    * message  变化详细信息
    * targetVersions  目标版本信息
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'reason' => 'Reason',
            'message' => 'message',
            'targetVersions' => 'targetVersions',
            'currentVersion' => 'currentVersion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  状态信息
    * reason  变化原因信息
    * message  变化详细信息
    * targetVersions  目标版本信息
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'reason' => 'setReason',
            'message' => 'setMessage',
            'targetVersions' => 'setTargetVersions',
            'currentVersion' => 'setCurrentVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  状态信息
    * reason  变化原因信息
    * message  变化详细信息
    * targetVersions  目标版本信息
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'reason' => 'getReason',
            'message' => 'getMessage',
            'targetVersions' => 'getTargetVersions',
            'currentVersion' => 'getCurrentVersion'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['targetVersions'] = isset($data['targetVersions']) ? $data['targetVersions'] : null;
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
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
    * Gets status
    *  状态信息
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
    * @param string|null $status 状态信息
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets reason
    *  变化原因信息
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 变化原因信息
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets message
    *  变化详细信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 变化详细信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets targetVersions
    *  目标版本信息
    *
    * @return string[]|null
    */
    public function getTargetVersions()
    {
        return $this->container['targetVersions'];
    }

    /**
    * Sets targetVersions
    *
    * @param string[]|null $targetVersions 目标版本信息
    *
    * @return $this
    */
    public function setTargetVersions($targetVersions)
    {
        $this->container['targetVersions'] = $targetVersions;
        return $this;
    }

    /**
    * Gets currentVersion
    *  currentVersion
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\AddonVersion|null
    */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
    * Sets currentVersion
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\AddonVersion|null $currentVersion currentVersion
    *
    * @return $this
    */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;
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

