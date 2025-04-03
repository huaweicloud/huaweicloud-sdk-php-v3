<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfirmSmarLiveRoomReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfirmSmarLiveRoomReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * scriptVersion  剧本版本。从查询直播间详情接口中获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'scriptVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * scriptVersion  剧本版本。从查询直播间详情接口中获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'scriptVersion' => null
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
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * scriptVersion  剧本版本。从查询直播间详情接口中获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'scriptVersion' => 'script_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * scriptVersion  剧本版本。从查询直播间详情接口中获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'scriptVersion' => 'setScriptVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * scriptVersion  剧本版本。从查询直播间详情接口中获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'scriptVersion' => 'getScriptVersion'
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
    const ACTION_CONFIRM = 'confirm';
    const ACTION_REJECT = 'reject';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CONFIRM,
            self::ACTION_REJECT,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['scriptVersion'] = isset($data['scriptVersion']) ? $data['scriptVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 64)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scriptVersion']) && (mb_strlen($this->container['scriptVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'scriptVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scriptVersion']) && (mb_strlen($this->container['scriptVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'scriptVersion', the character length must be bigger than or equal to 0.";
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
    * Gets action
    *  确认操作。 * confirm: 确认。 * reject: 拒绝。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 确认操作。 * confirm: 确认。 * reject: 拒绝。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets scriptVersion
    *  剧本版本。从查询直播间详情接口中获取。
    *
    * @return string|null
    */
    public function getScriptVersion()
    {
        return $this->container['scriptVersion'];
    }

    /**
    * Sets scriptVersion
    *
    * @param string|null $scriptVersion 剧本版本。从查询直播间详情接口中获取。
    *
    * @return $this
    */
    public function setScriptVersion($scriptVersion)
    {
        $this->container['scriptVersion'] = $scriptVersion;
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

