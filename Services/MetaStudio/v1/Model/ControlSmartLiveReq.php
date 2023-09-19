<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ControlSmartLiveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ControlSmartLiveReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scence_scripts - INSERT_PLAY_ADUIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo
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
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scence_scripts - INSERT_PLAY_ADUIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo
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
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scence_scripts - INSERT_PLAY_ADUIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo
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
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scence_scripts - INSERT_PLAY_ADUIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo
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
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scence_scripts - INSERT_PLAY_ADUIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo
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
    const COMMAND_INSERT_PLAY_SCRIPT = 'INSERT_PLAY_SCRIPT';
    const COMMAND_REWRITE_PLAY_SCRIPT = 'REWRITE_PLAY_SCRIPT';
    const COMMAND_INSERT_PLAY_AUDIO = 'INSERT_PLAY_AUDIO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommandAllowableValues()
    {
        return [
            self::COMMAND_INSERT_PLAY_SCRIPT,
            self::COMMAND_REWRITE_PLAY_SCRIPT,
            self::COMMAND_INSERT_PLAY_AUDIO,
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
    *  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scence_scripts - INSERT_PLAY_ADUIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo
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
    * @param string $command 命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scence_scripts - INSERT_PLAY_ADUIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo
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

