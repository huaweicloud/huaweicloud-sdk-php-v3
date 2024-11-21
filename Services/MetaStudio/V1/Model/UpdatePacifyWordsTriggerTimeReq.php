<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePacifyWordsTriggerTimeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePacifyWordsTriggerTimeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * robotId  应用ID。
    * language  language
    * triggerTime  安抚话术等待触发时长，单位毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'robotId' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'triggerTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * robotId  应用ID。
    * language  language
    * triggerTime  安抚话术等待触发时长，单位毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'robotId' => null,
        'language' => null,
        'triggerTime' => null
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
    * robotId  应用ID。
    * language  language
    * triggerTime  安抚话术等待触发时长，单位毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'robotId' => 'robot_id',
            'language' => 'language',
            'triggerTime' => 'trigger_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * robotId  应用ID。
    * language  language
    * triggerTime  安抚话术等待触发时长，单位毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'robotId' => 'setRobotId',
            'language' => 'setLanguage',
            'triggerTime' => 'setTriggerTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * robotId  应用ID。
    * language  language
    * triggerTime  安抚话术等待触发时长，单位毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'robotId' => 'getRobotId',
            'language' => 'getLanguage',
            'triggerTime' => 'getTriggerTime'
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
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['triggerTime'] = isset($data['triggerTime']) ? $data['triggerTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['robotId'] === null) {
            $invalidProperties[] = "'robotId' can't be null";
        }
            if ((mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['triggerTime'] === null) {
            $invalidProperties[] = "'triggerTime' can't be null";
        }
            if (($this->container['triggerTime'] > 3000)) {
                $invalidProperties[] = "invalid value for 'triggerTime', must be smaller than or equal to 3000.";
            }
            if (($this->container['triggerTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'triggerTime', must be bigger than or equal to 0.";
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
    * Gets robotId
    *  应用ID。
    *
    * @return string
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets triggerTime
    *  安抚话术等待触发时长，单位毫秒
    *
    * @return int
    */
    public function getTriggerTime()
    {
        return $this->container['triggerTime'];
    }

    /**
    * Sets triggerTime
    *
    * @param int $triggerTime 安抚话术等待触发时长，单位毫秒
    *
    * @return $this
    */
    public function setTriggerTime($triggerTime)
    {
        $this->container['triggerTime'] = $triggerTime;
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

