<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoAutoLaunchForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_auto_launch_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * event  **参数解释**： 事件 **取值范围**： 不涉及
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * owner  **参数解释**： 用户 **取值范围**： 不涉及
    * name  **参数解释**： 命令 **取值范围**： 不涉及
    * runInterval  **参数解释**： 运行间隔 **取值范围**： 不涉及
    * hash  **参数解释**： hash **取值范围**： 不涉及
    * mtime  **参数解释**： hash **取值范围**： 不涉及
    * description  **参数解释**： 自启动项信息 **取值范围**： 不涉及
    * path  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'event' => 'int',
            'type' => 'int',
            'owner' => 'string',
            'name' => 'string',
            'runInterval' => 'string',
            'hash' => 'string',
            'mtime' => 'string',
            'description' => 'string',
            'path' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * event  **参数解释**： 事件 **取值范围**： 不涉及
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * owner  **参数解释**： 用户 **取值范围**： 不涉及
    * name  **参数解释**： 命令 **取值范围**： 不涉及
    * runInterval  **参数解释**： 运行间隔 **取值范围**： 不涉及
    * hash  **参数解释**： hash **取值范围**： 不涉及
    * mtime  **参数解释**： hash **取值范围**： 不涉及
    * description  **参数解释**： 自启动项信息 **取值范围**： 不涉及
    * path  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'event' => null,
        'type' => null,
        'owner' => null,
        'name' => null,
        'runInterval' => null,
        'hash' => null,
        'mtime' => null,
        'description' => null,
        'path' => null
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
    * event  **参数解释**： 事件 **取值范围**： 不涉及
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * owner  **参数解释**： 用户 **取值范围**： 不涉及
    * name  **参数解释**： 命令 **取值范围**： 不涉及
    * runInterval  **参数解释**： 运行间隔 **取值范围**： 不涉及
    * hash  **参数解释**： hash **取值范围**： 不涉及
    * mtime  **参数解释**： hash **取值范围**： 不涉及
    * description  **参数解释**： 自启动项信息 **取值范围**： 不涉及
    * path  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'event' => 'event',
            'type' => 'type',
            'owner' => 'owner',
            'name' => 'name',
            'runInterval' => 'run_interval',
            'hash' => 'hash',
            'mtime' => 'mtime',
            'description' => 'description',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * event  **参数解释**： 事件 **取值范围**： 不涉及
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * owner  **参数解释**： 用户 **取值范围**： 不涉及
    * name  **参数解释**： 命令 **取值范围**： 不涉及
    * runInterval  **参数解释**： 运行间隔 **取值范围**： 不涉及
    * hash  **参数解释**： hash **取值范围**： 不涉及
    * mtime  **参数解释**： hash **取值范围**： 不涉及
    * description  **参数解释**： 自启动项信息 **取值范围**： 不涉及
    * path  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'event' => 'setEvent',
            'type' => 'setType',
            'owner' => 'setOwner',
            'name' => 'setName',
            'runInterval' => 'setRunInterval',
            'hash' => 'setHash',
            'mtime' => 'setMtime',
            'description' => 'setDescription',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * event  **参数解释**： 事件 **取值范围**： 不涉及
    * type  **参数解释**： 类型 **取值范围**： 不涉及
    * owner  **参数解释**： 用户 **取值范围**： 不涉及
    * name  **参数解释**： 命令 **取值范围**： 不涉及
    * runInterval  **参数解释**： 运行间隔 **取值范围**： 不涉及
    * hash  **参数解释**： hash **取值范围**： 不涉及
    * mtime  **参数解释**： hash **取值范围**： 不涉及
    * description  **参数解释**： 自启动项信息 **取值范围**： 不涉及
    * path  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'event' => 'getEvent',
            'type' => 'getType',
            'owner' => 'getOwner',
            'name' => 'getName',
            'runInterval' => 'getRunInterval',
            'hash' => 'getHash',
            'mtime' => 'getMtime',
            'description' => 'getDescription',
            'path' => 'getPath'
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
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['runInterval'] = isset($data['runInterval']) ? $data['runInterval'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['mtime'] = isset($data['mtime']) ? $data['mtime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['owner']) && !preg_match("/^.*$/", $this->container['owner'])) {
                $invalidProperties[] = "invalid value for 'owner', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^.*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^.*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['path']) && !preg_match("/^.*$/", $this->container['path'])) {
                $invalidProperties[] = "invalid value for 'path', must be conform to the pattern /^.*$/.";
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
    * Gets event
    *  **参数解释**： 事件 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
    * Sets event
    *
    * @param int|null $event **参数解释**： 事件 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEvent($event)
    {
        $this->container['event'] = $event;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 类型 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type **参数解释**： 类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets owner
    *  **参数解释**： 用户 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner **参数解释**： 用户 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 命令 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 命令 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets runInterval
    *  **参数解释**： 运行间隔 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRunInterval()
    {
        return $this->container['runInterval'];
    }

    /**
    * Sets runInterval
    *
    * @param string|null $runInterval **参数解释**： 运行间隔 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRunInterval($runInterval)
    {
        $this->container['runInterval'] = $runInterval;
        return $this;
    }

    /**
    * Gets hash
    *  **参数解释**： hash **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
    * Sets hash
    *
    * @param string|null $hash **参数解释**： hash **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets mtime
    *  **参数解释**： hash **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getMtime()
    {
        return $this->container['mtime'];
    }

    /**
    * Sets mtime
    *
    * @param string|null $mtime **参数解释**： hash **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setMtime($mtime)
    {
        $this->container['mtime'] = $mtime;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 自启动项信息 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 自启动项信息 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**： 进程文件命令行 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

