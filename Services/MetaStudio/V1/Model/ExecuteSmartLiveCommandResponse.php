<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteSmartLiveCommandResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteSmartLiveCommandResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scene_scripts - INSERT_PLAY_AUDIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo - GET_CURRENT_PLAYING_SCRIPTS: 查询本轮剧本列表。响应为LivePlayingScriptList结构
    * result  命令执行结果
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'command' => 'string',
            'result' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scene_scripts - INSERT_PLAY_AUDIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo - GET_CURRENT_PLAYING_SCRIPTS: 查询本轮剧本列表。响应为LivePlayingScriptList结构
    * result  命令执行结果
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'command' => null,
        'result' => null,
        'xRequestId' => null
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
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scene_scripts - INSERT_PLAY_AUDIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo - GET_CURRENT_PLAYING_SCRIPTS: 查询本轮剧本列表。响应为LivePlayingScriptList结构
    * result  命令执行结果
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'command' => 'command',
            'result' => 'result',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scene_scripts - INSERT_PLAY_AUDIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo - GET_CURRENT_PLAYING_SCRIPTS: 查询本轮剧本列表。响应为LivePlayingScriptList结构
    * result  命令执行结果
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'command' => 'setCommand',
            'result' => 'setResult',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * command  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scene_scripts - INSERT_PLAY_AUDIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo - GET_CURRENT_PLAYING_SCRIPTS: 查询本轮剧本列表。响应为LivePlayingScriptList结构
    * result  命令执行结果
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'command' => 'getCommand',
            'result' => 'getResult',
            'xRequestId' => 'getXRequestId'
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
    const COMMAND_GET_CURRENT_PLAYING_SCRIPTS = 'GET_CURRENT_PLAYING_SCRIPTS';
    

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
            self::COMMAND_GET_CURRENT_PLAYING_SCRIPTS,
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCommandAllowableValues();
                if (!is_null($this->container['command']) && !in_array($this->container['command'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'command', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['command']) && (mb_strlen($this->container['command']) > 64)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['command']) && (mb_strlen($this->container['command']) < 1)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['result']) && (mb_strlen($this->container['result']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['result']) && (mb_strlen($this->container['result']) < 0)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be bigger than or equal to 0.";
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
    *  命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scene_scripts - INSERT_PLAY_AUDIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo - GET_CURRENT_PLAYING_SCRIPTS: 查询本轮剧本列表。响应为LivePlayingScriptList结构
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command 命令名称。 - INSERT_PLAY_SCRIPT: 插入表演脚本。用于互动回复。数字人不变，背景不变。params结构定义：ShootScript - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。params结构定义：scene_scripts - INSERT_PLAY_AUDIO: 插入驱动音频。用于音频直接驱动。数字人不变，背景不变。params结构定义：PlayAudioInfo - GET_CURRENT_PLAYING_SCRIPTS: 查询本轮剧本列表。响应为LivePlayingScriptList结构
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets result
    *  命令执行结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 命令执行结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

