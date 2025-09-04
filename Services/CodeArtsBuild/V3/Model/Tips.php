<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Tips implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Tips';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  状态
    * nextAction  下一个活动日
    * nextActionRemainDay  下一个活动日剩余时间
    * nextActionUrl  名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'int',
            'nextAction' => 'int',
            'nextActionRemainDay' => 'int',
            'nextActionUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  状态
    * nextAction  下一个活动日
    * nextActionRemainDay  下一个活动日剩余时间
    * nextActionUrl  名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'nextAction' => null,
        'nextActionRemainDay' => null,
        'nextActionUrl' => null
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
    * status  状态
    * nextAction  下一个活动日
    * nextActionRemainDay  下一个活动日剩余时间
    * nextActionUrl  名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'nextAction' => 'next_action',
            'nextActionRemainDay' => 'next_action_remain_day',
            'nextActionUrl' => 'next_action_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  状态
    * nextAction  下一个活动日
    * nextActionRemainDay  下一个活动日剩余时间
    * nextActionUrl  名称
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'nextAction' => 'setNextAction',
            'nextActionRemainDay' => 'setNextActionRemainDay',
            'nextActionUrl' => 'setNextActionUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  状态
    * nextAction  下一个活动日
    * nextActionRemainDay  下一个活动日剩余时间
    * nextActionUrl  名称
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'nextAction' => 'getNextAction',
            'nextActionRemainDay' => 'getNextActionRemainDay',
            'nextActionUrl' => 'getNextActionUrl'
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
        $this->container['nextAction'] = isset($data['nextAction']) ? $data['nextAction'] : null;
        $this->container['nextActionRemainDay'] = isset($data['nextActionRemainDay']) ? $data['nextActionRemainDay'] : null;
        $this->container['nextActionUrl'] = isset($data['nextActionUrl']) ? $data['nextActionUrl'] : null;
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
    *  状态
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets nextAction
    *  下一个活动日
    *
    * @return int|null
    */
    public function getNextAction()
    {
        return $this->container['nextAction'];
    }

    /**
    * Sets nextAction
    *
    * @param int|null $nextAction 下一个活动日
    *
    * @return $this
    */
    public function setNextAction($nextAction)
    {
        $this->container['nextAction'] = $nextAction;
        return $this;
    }

    /**
    * Gets nextActionRemainDay
    *  下一个活动日剩余时间
    *
    * @return int|null
    */
    public function getNextActionRemainDay()
    {
        return $this->container['nextActionRemainDay'];
    }

    /**
    * Sets nextActionRemainDay
    *
    * @param int|null $nextActionRemainDay 下一个活动日剩余时间
    *
    * @return $this
    */
    public function setNextActionRemainDay($nextActionRemainDay)
    {
        $this->container['nextActionRemainDay'] = $nextActionRemainDay;
        return $this;
    }

    /**
    * Gets nextActionUrl
    *  名称
    *
    * @return string|null
    */
    public function getNextActionUrl()
    {
        return $this->container['nextActionUrl'];
    }

    /**
    * Sets nextActionUrl
    *
    * @param string|null $nextActionUrl 名称
    *
    * @return $this
    */
    public function setNextActionUrl($nextActionUrl)
    {
        $this->container['nextActionUrl'] = $nextActionUrl;
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

