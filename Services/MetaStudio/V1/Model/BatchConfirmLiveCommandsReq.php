<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchConfirmLiveCommandsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchConfirmLiveCommandsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * command  命令名称。 - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。 - REWRITE_INTERACTION_RULES: 动态修改互动规则。
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * commandIds  命令ID列表。不填则为全部未播放的插入命令均清理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'command' => 'string',
            'action' => 'string',
            'commandIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * command  命令名称。 - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。 - REWRITE_INTERACTION_RULES: 动态修改互动规则。
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * commandIds  命令ID列表。不填则为全部未播放的插入命令均清理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'command' => null,
        'action' => null,
        'commandIds' => null
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
    * command  命令名称。 - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。 - REWRITE_INTERACTION_RULES: 动态修改互动规则。
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * commandIds  命令ID列表。不填则为全部未播放的插入命令均清理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'command' => 'command',
            'action' => 'action',
            'commandIds' => 'command_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * command  命令名称。 - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。 - REWRITE_INTERACTION_RULES: 动态修改互动规则。
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * commandIds  命令ID列表。不填则为全部未播放的插入命令均清理。
    *
    * @var string[]
    */
    protected static $setters = [
            'command' => 'setCommand',
            'action' => 'setAction',
            'commandIds' => 'setCommandIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * command  命令名称。 - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。 - REWRITE_INTERACTION_RULES: 动态修改互动规则。
    * action  确认操作。 * confirm: 确认。 * reject: 拒绝。
    * commandIds  命令ID列表。不填则为全部未播放的插入命令均清理。
    *
    * @var string[]
    */
    protected static $getters = [
            'command' => 'getCommand',
            'action' => 'getAction',
            'commandIds' => 'getCommandIds'
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
    const COMMAND_REWRITE_PLAY_SCRIPT = 'REWRITE_PLAY_SCRIPT';
    const COMMAND_REWRITE_INTERACTION_RULES = 'REWRITE_INTERACTION_RULES';
    const ACTION_CONFIRM = 'confirm';
    const ACTION_REJECT = 'reject';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommandAllowableValues()
    {
        return [
            self::COMMAND_REWRITE_PLAY_SCRIPT,
            self::COMMAND_REWRITE_INTERACTION_RULES,
        ];
    }

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
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['commandIds'] = isset($data['commandIds']) ? $data['commandIds'] : null;
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
    *  命令名称。 - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。 - REWRITE_INTERACTION_RULES: 动态修改互动规则。
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
    * @param string|null $command 命令名称。 - REWRITE_PLAY_SCRIPT: 动态编辑未播放剧本。 - REWRITE_INTERACTION_RULES: 动态修改互动规则。
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
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
    * Gets commandIds
    *  命令ID列表。不填则为全部未播放的插入命令均清理。
    *
    * @return string[]|null
    */
    public function getCommandIds()
    {
        return $this->container['commandIds'];
    }

    /**
    * Sets commandIds
    *
    * @param string[]|null $commandIds 命令ID列表。不填则为全部未播放的插入命令均清理。
    *
    * @return $this
    */
    public function setCommandIds($commandIds)
    {
        $this->container['commandIds'] = $commandIds;
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

