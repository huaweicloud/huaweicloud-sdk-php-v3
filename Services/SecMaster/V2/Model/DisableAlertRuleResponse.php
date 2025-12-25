<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisableAlertRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisableAlertRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertRuleId  UUID
    * status  status
    * processStatus  processStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertRuleId' => 'string',
            'status' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus',
            'processStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertRuleId  UUID
    * status  status
    * processStatus  processStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertRuleId' => null,
        'status' => null,
        'processStatus' => null
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
    * alertRuleId  UUID
    * status  status
    * processStatus  processStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertRuleId' => 'alert_rule_id',
            'status' => 'status',
            'processStatus' => 'process_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertRuleId  UUID
    * status  status
    * processStatus  processStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'alertRuleId' => 'setAlertRuleId',
            'status' => 'setStatus',
            'processStatus' => 'setProcessStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertRuleId  UUID
    * status  status
    * processStatus  processStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'alertRuleId' => 'getAlertRuleId',
            'status' => 'getStatus',
            'processStatus' => 'getProcessStatus'
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
        $this->container['alertRuleId'] = isset($data['alertRuleId']) ? $data['alertRuleId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alertRuleId']) && (mb_strlen($this->container['alertRuleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'alertRuleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['alertRuleId']) && (mb_strlen($this->container['alertRuleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'alertRuleId', the character length must be bigger than or equal to 36.";
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
    * Gets alertRuleId
    *  UUID
    *
    * @return string|null
    */
    public function getAlertRuleId()
    {
        return $this->container['alertRuleId'];
    }

    /**
    * Sets alertRuleId
    *
    * @param string|null $alertRuleId UUID
    *
    * @return $this
    */
    public function setAlertRuleId($alertRuleId)
    {
        $this->container['alertRuleId'] = $alertRuleId;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets processStatus
    *  processStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus|null $processStatus processStatus
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
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

