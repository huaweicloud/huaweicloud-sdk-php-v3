<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveJobLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveJobLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * interactionRecordsUrl  直播互动记录文件地址
    * jobConfigRecordsUrl  任务配置记录文件地址
    * scriptsRecordsUrl  剧本播放记录文件地址
    * commandRevicedRecordsUrl  命令接受记录文件地址
    * commandExecRecordsUrl  命令执行记录文件地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'interactionRecordsUrl' => 'string',
            'jobConfigRecordsUrl' => 'string',
            'scriptsRecordsUrl' => 'string',
            'commandRevicedRecordsUrl' => 'string',
            'commandExecRecordsUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * interactionRecordsUrl  直播互动记录文件地址
    * jobConfigRecordsUrl  任务配置记录文件地址
    * scriptsRecordsUrl  剧本播放记录文件地址
    * commandRevicedRecordsUrl  命令接受记录文件地址
    * commandExecRecordsUrl  命令执行记录文件地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'interactionRecordsUrl' => null,
        'jobConfigRecordsUrl' => null,
        'scriptsRecordsUrl' => null,
        'commandRevicedRecordsUrl' => null,
        'commandExecRecordsUrl' => null
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
    * interactionRecordsUrl  直播互动记录文件地址
    * jobConfigRecordsUrl  任务配置记录文件地址
    * scriptsRecordsUrl  剧本播放记录文件地址
    * commandRevicedRecordsUrl  命令接受记录文件地址
    * commandExecRecordsUrl  命令执行记录文件地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'interactionRecordsUrl' => 'interaction_records_url',
            'jobConfigRecordsUrl' => 'job_config_records_url',
            'scriptsRecordsUrl' => 'scripts_records_url',
            'commandRevicedRecordsUrl' => 'command_reviced_records_url',
            'commandExecRecordsUrl' => 'command_exec_records_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * interactionRecordsUrl  直播互动记录文件地址
    * jobConfigRecordsUrl  任务配置记录文件地址
    * scriptsRecordsUrl  剧本播放记录文件地址
    * commandRevicedRecordsUrl  命令接受记录文件地址
    * commandExecRecordsUrl  命令执行记录文件地址
    *
    * @var string[]
    */
    protected static $setters = [
            'interactionRecordsUrl' => 'setInteractionRecordsUrl',
            'jobConfigRecordsUrl' => 'setJobConfigRecordsUrl',
            'scriptsRecordsUrl' => 'setScriptsRecordsUrl',
            'commandRevicedRecordsUrl' => 'setCommandRevicedRecordsUrl',
            'commandExecRecordsUrl' => 'setCommandExecRecordsUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * interactionRecordsUrl  直播互动记录文件地址
    * jobConfigRecordsUrl  任务配置记录文件地址
    * scriptsRecordsUrl  剧本播放记录文件地址
    * commandRevicedRecordsUrl  命令接受记录文件地址
    * commandExecRecordsUrl  命令执行记录文件地址
    *
    * @var string[]
    */
    protected static $getters = [
            'interactionRecordsUrl' => 'getInteractionRecordsUrl',
            'jobConfigRecordsUrl' => 'getJobConfigRecordsUrl',
            'scriptsRecordsUrl' => 'getScriptsRecordsUrl',
            'commandRevicedRecordsUrl' => 'getCommandRevicedRecordsUrl',
            'commandExecRecordsUrl' => 'getCommandExecRecordsUrl'
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
        $this->container['interactionRecordsUrl'] = isset($data['interactionRecordsUrl']) ? $data['interactionRecordsUrl'] : null;
        $this->container['jobConfigRecordsUrl'] = isset($data['jobConfigRecordsUrl']) ? $data['jobConfigRecordsUrl'] : null;
        $this->container['scriptsRecordsUrl'] = isset($data['scriptsRecordsUrl']) ? $data['scriptsRecordsUrl'] : null;
        $this->container['commandRevicedRecordsUrl'] = isset($data['commandRevicedRecordsUrl']) ? $data['commandRevicedRecordsUrl'] : null;
        $this->container['commandExecRecordsUrl'] = isset($data['commandExecRecordsUrl']) ? $data['commandExecRecordsUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['interactionRecordsUrl']) && (mb_strlen($this->container['interactionRecordsUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'interactionRecordsUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['interactionRecordsUrl']) && (mb_strlen($this->container['interactionRecordsUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'interactionRecordsUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jobConfigRecordsUrl']) && (mb_strlen($this->container['jobConfigRecordsUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'jobConfigRecordsUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['jobConfigRecordsUrl']) && (mb_strlen($this->container['jobConfigRecordsUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobConfigRecordsUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scriptsRecordsUrl']) && (mb_strlen($this->container['scriptsRecordsUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'scriptsRecordsUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['scriptsRecordsUrl']) && (mb_strlen($this->container['scriptsRecordsUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'scriptsRecordsUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commandRevicedRecordsUrl']) && (mb_strlen($this->container['commandRevicedRecordsUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'commandRevicedRecordsUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['commandRevicedRecordsUrl']) && (mb_strlen($this->container['commandRevicedRecordsUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'commandRevicedRecordsUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commandExecRecordsUrl']) && (mb_strlen($this->container['commandExecRecordsUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'commandExecRecordsUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['commandExecRecordsUrl']) && (mb_strlen($this->container['commandExecRecordsUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'commandExecRecordsUrl', the character length must be bigger than or equal to 0.";
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
    * Gets interactionRecordsUrl
    *  直播互动记录文件地址
    *
    * @return string|null
    */
    public function getInteractionRecordsUrl()
    {
        return $this->container['interactionRecordsUrl'];
    }

    /**
    * Sets interactionRecordsUrl
    *
    * @param string|null $interactionRecordsUrl 直播互动记录文件地址
    *
    * @return $this
    */
    public function setInteractionRecordsUrl($interactionRecordsUrl)
    {
        $this->container['interactionRecordsUrl'] = $interactionRecordsUrl;
        return $this;
    }

    /**
    * Gets jobConfigRecordsUrl
    *  任务配置记录文件地址
    *
    * @return string|null
    */
    public function getJobConfigRecordsUrl()
    {
        return $this->container['jobConfigRecordsUrl'];
    }

    /**
    * Sets jobConfigRecordsUrl
    *
    * @param string|null $jobConfigRecordsUrl 任务配置记录文件地址
    *
    * @return $this
    */
    public function setJobConfigRecordsUrl($jobConfigRecordsUrl)
    {
        $this->container['jobConfigRecordsUrl'] = $jobConfigRecordsUrl;
        return $this;
    }

    /**
    * Gets scriptsRecordsUrl
    *  剧本播放记录文件地址
    *
    * @return string|null
    */
    public function getScriptsRecordsUrl()
    {
        return $this->container['scriptsRecordsUrl'];
    }

    /**
    * Sets scriptsRecordsUrl
    *
    * @param string|null $scriptsRecordsUrl 剧本播放记录文件地址
    *
    * @return $this
    */
    public function setScriptsRecordsUrl($scriptsRecordsUrl)
    {
        $this->container['scriptsRecordsUrl'] = $scriptsRecordsUrl;
        return $this;
    }

    /**
    * Gets commandRevicedRecordsUrl
    *  命令接受记录文件地址
    *
    * @return string|null
    */
    public function getCommandRevicedRecordsUrl()
    {
        return $this->container['commandRevicedRecordsUrl'];
    }

    /**
    * Sets commandRevicedRecordsUrl
    *
    * @param string|null $commandRevicedRecordsUrl 命令接受记录文件地址
    *
    * @return $this
    */
    public function setCommandRevicedRecordsUrl($commandRevicedRecordsUrl)
    {
        $this->container['commandRevicedRecordsUrl'] = $commandRevicedRecordsUrl;
        return $this;
    }

    /**
    * Gets commandExecRecordsUrl
    *  命令执行记录文件地址
    *
    * @return string|null
    */
    public function getCommandExecRecordsUrl()
    {
        return $this->container['commandExecRecordsUrl'];
    }

    /**
    * Sets commandExecRecordsUrl
    *
    * @param string|null $commandExecRecordsUrl 命令执行记录文件地址
    *
    * @return $this
    */
    public function setCommandExecRecordsUrl($commandExecRecordsUrl)
    {
        $this->container['commandExecRecordsUrl'] = $commandExecRecordsUrl;
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

