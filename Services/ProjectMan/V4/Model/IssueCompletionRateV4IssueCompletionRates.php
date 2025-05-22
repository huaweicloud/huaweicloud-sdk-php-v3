<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueCompletionRateV4IssueCompletionRates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueCompletionRateV4_issue_completion_rates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issueStatus  issueStatus
    * trackerId  工作项类型id,1需求,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issueStatus' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueCompletionRateV4IssueStatus',
            'trackerId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issueStatus  issueStatus
    * trackerId  工作项类型id,1需求,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issueStatus' => null,
        'trackerId' => null
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
    * issueStatus  issueStatus
    * trackerId  工作项类型id,1需求,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issueStatus' => 'issue_status',
            'trackerId' => 'tracker_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issueStatus  issueStatus
    * trackerId  工作项类型id,1需求,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @var string[]
    */
    protected static $setters = [
            'issueStatus' => 'setIssueStatus',
            'trackerId' => 'setTrackerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issueStatus  issueStatus
    * trackerId  工作项类型id,1需求,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @var string[]
    */
    protected static $getters = [
            'issueStatus' => 'getIssueStatus',
            'trackerId' => 'getTrackerId'
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
        $this->container['issueStatus'] = isset($data['issueStatus']) ? $data['issueStatus'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
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
    * Gets issueStatus
    *  issueStatus
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueCompletionRateV4IssueStatus|null
    */
    public function getIssueStatus()
    {
        return $this->container['issueStatus'];
    }

    /**
    * Sets issueStatus
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueCompletionRateV4IssueStatus|null $issueStatus issueStatus
    *
    * @return $this
    */
    public function setIssueStatus($issueStatus)
    {
        $this->container['issueStatus'] = $issueStatus;
        return $this;
    }

    /**
    * Gets trackerId
    *  工作项类型id,1需求,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @return int|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param int|null $trackerId 工作项类型id,1需求,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
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

