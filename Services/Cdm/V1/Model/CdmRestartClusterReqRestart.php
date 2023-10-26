<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmRestartClusterReqRestart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmRestartClusterReq_restart';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * restartDelayTime  重启时延，单位：秒
    * restartMode  重启类型： - IMMEDIATELY：立即重启。 - FORCELY：强制重启。 - SOFTLY：一般重启。  默认值为“IMMEDIATELY”。强制重启业务进程会中断，并重启集群的虚拟机。
    * restartLevel  重启级别： - SERVICE：重启服务。 - VM：重启虚拟机。  默认值为“SERVICE”。
    * type  集群节点类型，只支持“cdm”
    * instance  预留字段，“restartLevel” 为“SERVICE”时，“instance”必填，填空字串。
    * group  预留字段，“restartLevel” 为“SERVICE”时，“group”必填，填空字串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'restartDelayTime' => 'int',
            'restartMode' => 'string',
            'restartLevel' => 'string',
            'type' => 'string',
            'instance' => 'string',
            'group' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * restartDelayTime  重启时延，单位：秒
    * restartMode  重启类型： - IMMEDIATELY：立即重启。 - FORCELY：强制重启。 - SOFTLY：一般重启。  默认值为“IMMEDIATELY”。强制重启业务进程会中断，并重启集群的虚拟机。
    * restartLevel  重启级别： - SERVICE：重启服务。 - VM：重启虚拟机。  默认值为“SERVICE”。
    * type  集群节点类型，只支持“cdm”
    * instance  预留字段，“restartLevel” 为“SERVICE”时，“instance”必填，填空字串。
    * group  预留字段，“restartLevel” 为“SERVICE”时，“group”必填，填空字串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'restartDelayTime' => 'int32',
        'restartMode' => null,
        'restartLevel' => null,
        'type' => null,
        'instance' => null,
        'group' => null
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
    * restartDelayTime  重启时延，单位：秒
    * restartMode  重启类型： - IMMEDIATELY：立即重启。 - FORCELY：强制重启。 - SOFTLY：一般重启。  默认值为“IMMEDIATELY”。强制重启业务进程会中断，并重启集群的虚拟机。
    * restartLevel  重启级别： - SERVICE：重启服务。 - VM：重启虚拟机。  默认值为“SERVICE”。
    * type  集群节点类型，只支持“cdm”
    * instance  预留字段，“restartLevel” 为“SERVICE”时，“instance”必填，填空字串。
    * group  预留字段，“restartLevel” 为“SERVICE”时，“group”必填，填空字串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'restartDelayTime' => 'restartDelayTime',
            'restartMode' => 'restartMode',
            'restartLevel' => 'restartLevel',
            'type' => 'type',
            'instance' => 'instance',
            'group' => 'group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * restartDelayTime  重启时延，单位：秒
    * restartMode  重启类型： - IMMEDIATELY：立即重启。 - FORCELY：强制重启。 - SOFTLY：一般重启。  默认值为“IMMEDIATELY”。强制重启业务进程会中断，并重启集群的虚拟机。
    * restartLevel  重启级别： - SERVICE：重启服务。 - VM：重启虚拟机。  默认值为“SERVICE”。
    * type  集群节点类型，只支持“cdm”
    * instance  预留字段，“restartLevel” 为“SERVICE”时，“instance”必填，填空字串。
    * group  预留字段，“restartLevel” 为“SERVICE”时，“group”必填，填空字串。
    *
    * @var string[]
    */
    protected static $setters = [
            'restartDelayTime' => 'setRestartDelayTime',
            'restartMode' => 'setRestartMode',
            'restartLevel' => 'setRestartLevel',
            'type' => 'setType',
            'instance' => 'setInstance',
            'group' => 'setGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * restartDelayTime  重启时延，单位：秒
    * restartMode  重启类型： - IMMEDIATELY：立即重启。 - FORCELY：强制重启。 - SOFTLY：一般重启。  默认值为“IMMEDIATELY”。强制重启业务进程会中断，并重启集群的虚拟机。
    * restartLevel  重启级别： - SERVICE：重启服务。 - VM：重启虚拟机。  默认值为“SERVICE”。
    * type  集群节点类型，只支持“cdm”
    * instance  预留字段，“restartLevel” 为“SERVICE”时，“instance”必填，填空字串。
    * group  预留字段，“restartLevel” 为“SERVICE”时，“group”必填，填空字串。
    *
    * @var string[]
    */
    protected static $getters = [
            'restartDelayTime' => 'getRestartDelayTime',
            'restartMode' => 'getRestartMode',
            'restartLevel' => 'getRestartLevel',
            'type' => 'getType',
            'instance' => 'getInstance',
            'group' => 'getGroup'
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
        $this->container['restartDelayTime'] = isset($data['restartDelayTime']) ? $data['restartDelayTime'] : null;
        $this->container['restartMode'] = isset($data['restartMode']) ? $data['restartMode'] : null;
        $this->container['restartLevel'] = isset($data['restartLevel']) ? $data['restartLevel'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets restartDelayTime
    *  重启时延，单位：秒
    *
    * @return int|null
    */
    public function getRestartDelayTime()
    {
        return $this->container['restartDelayTime'];
    }

    /**
    * Sets restartDelayTime
    *
    * @param int|null $restartDelayTime 重启时延，单位：秒
    *
    * @return $this
    */
    public function setRestartDelayTime($restartDelayTime)
    {
        $this->container['restartDelayTime'] = $restartDelayTime;
        return $this;
    }

    /**
    * Gets restartMode
    *  重启类型： - IMMEDIATELY：立即重启。 - FORCELY：强制重启。 - SOFTLY：一般重启。  默认值为“IMMEDIATELY”。强制重启业务进程会中断，并重启集群的虚拟机。
    *
    * @return string|null
    */
    public function getRestartMode()
    {
        return $this->container['restartMode'];
    }

    /**
    * Sets restartMode
    *
    * @param string|null $restartMode 重启类型： - IMMEDIATELY：立即重启。 - FORCELY：强制重启。 - SOFTLY：一般重启。  默认值为“IMMEDIATELY”。强制重启业务进程会中断，并重启集群的虚拟机。
    *
    * @return $this
    */
    public function setRestartMode($restartMode)
    {
        $this->container['restartMode'] = $restartMode;
        return $this;
    }

    /**
    * Gets restartLevel
    *  重启级别： - SERVICE：重启服务。 - VM：重启虚拟机。  默认值为“SERVICE”。
    *
    * @return string|null
    */
    public function getRestartLevel()
    {
        return $this->container['restartLevel'];
    }

    /**
    * Sets restartLevel
    *
    * @param string|null $restartLevel 重启级别： - SERVICE：重启服务。 - VM：重启虚拟机。  默认值为“SERVICE”。
    *
    * @return $this
    */
    public function setRestartLevel($restartLevel)
    {
        $this->container['restartLevel'] = $restartLevel;
        return $this;
    }

    /**
    * Gets type
    *  集群节点类型，只支持“cdm”
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 集群节点类型，只支持“cdm”
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets instance
    *  预留字段，“restartLevel” 为“SERVICE”时，“instance”必填，填空字串。
    *
    * @return string|null
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param string|null $instance 预留字段，“restartLevel” 为“SERVICE”时，“instance”必填，填空字串。
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets group
    *  预留字段，“restartLevel” 为“SERVICE”时，“group”必填，填空字串。
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 预留字段，“restartLevel” 为“SERVICE”时，“group”必填，填空字串。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
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

