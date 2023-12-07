<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ControlDigitalHumanLiveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ControlDigitalHumanLiveReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * command  命令名称。 - BODY_POS_RESET：视觉驱动复位 - HIPS_POS_ADJUST：模型位移调整 - EYE_POS：眼神锁定/解锁 - SKELETON_ROTATION_ADJUST：骨骼旋转 - LOCK_SKELETONS：骨骼锁定 - UNLOCK_SKELETONS：骨骼解锁
    * params  命令参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'command' => 'string',
            'params' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * command  命令名称。 - BODY_POS_RESET：视觉驱动复位 - HIPS_POS_ADJUST：模型位移调整 - EYE_POS：眼神锁定/解锁 - SKELETON_ROTATION_ADJUST：骨骼旋转 - LOCK_SKELETONS：骨骼锁定 - UNLOCK_SKELETONS：骨骼解锁
    * params  命令参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'command' => null,
        'params' => null
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
    * command  命令名称。 - BODY_POS_RESET：视觉驱动复位 - HIPS_POS_ADJUST：模型位移调整 - EYE_POS：眼神锁定/解锁 - SKELETON_ROTATION_ADJUST：骨骼旋转 - LOCK_SKELETONS：骨骼锁定 - UNLOCK_SKELETONS：骨骼解锁
    * params  命令参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'command' => 'command',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * command  命令名称。 - BODY_POS_RESET：视觉驱动复位 - HIPS_POS_ADJUST：模型位移调整 - EYE_POS：眼神锁定/解锁 - SKELETON_ROTATION_ADJUST：骨骼旋转 - LOCK_SKELETONS：骨骼锁定 - UNLOCK_SKELETONS：骨骼解锁
    * params  命令参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'command' => 'setCommand',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * command  命令名称。 - BODY_POS_RESET：视觉驱动复位 - HIPS_POS_ADJUST：模型位移调整 - EYE_POS：眼神锁定/解锁 - SKELETON_ROTATION_ADJUST：骨骼旋转 - LOCK_SKELETONS：骨骼锁定 - UNLOCK_SKELETONS：骨骼解锁
    * params  命令参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'command' => 'getCommand',
            'params' => 'getParams'
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
    const COMMAND_BODY_POS_RESET = 'BODY_POS_RESET';
    const COMMAND_HIPS_POS_ADJUST = 'HIPS_POS_ADJUST';
    const COMMAND_EYE_POS = 'EYE_POS';
    const COMMAND_SKELETON_ROTATION_ADJUST = 'SKELETON_ROTATION_ADJUST';
    const COMMAND_LOCK_SKELETONS = 'LOCK_SKELETONS';
    const COMMAND_UNLOCK_SKELETONS = 'UNLOCK_SKELETONS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommandAllowableValues()
    {
        return [
            self::COMMAND_BODY_POS_RESET,
            self::COMMAND_HIPS_POS_ADJUST,
            self::COMMAND_EYE_POS,
            self::COMMAND_SKELETON_ROTATION_ADJUST,
            self::COMMAND_LOCK_SKELETONS,
            self::COMMAND_UNLOCK_SKELETONS,
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
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['command'] === null) {
            $invalidProperties[] = "'command' can't be null";
        }
            $allowedValues = $this->getCommandAllowableValues();
                if (!is_null($this->container['command']) && !in_array($this->container['command'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'command', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['command']) > 64)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['command']) < 1)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be bigger than or equal to 1.";
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
    * Gets command
    *  命令名称。 - BODY_POS_RESET：视觉驱动复位 - HIPS_POS_ADJUST：模型位移调整 - EYE_POS：眼神锁定/解锁 - SKELETON_ROTATION_ADJUST：骨骼旋转 - LOCK_SKELETONS：骨骼锁定 - UNLOCK_SKELETONS：骨骼解锁
    *
    * @return string
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string $command 命令名称。 - BODY_POS_RESET：视觉驱动复位 - HIPS_POS_ADJUST：模型位移调整 - EYE_POS：眼神锁定/解锁 - SKELETON_ROTATION_ADJUST：骨骼旋转 - LOCK_SKELETONS：骨骼锁定 - UNLOCK_SKELETONS：骨骼解锁
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets params
    *  命令参数。
    *
    * @return object|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param object|null $params 命令参数。
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

