<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeClusterWithExistedNodesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeClusterWithExistedNodesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scaleOut  scaleOut
    * forceBackup  **参数解释**： 是否强制备份。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mode  **参数解释**： 扩容模式，不传默认离线read-only。 **约束限制**： 在线模式在大部分低版本集群不支持，请在联系运维人员确认后方才可用。 **取值范围**： read-only：离线模式 insert：在线模式 **默认取值**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 非逻辑集群模式下该字段不填，逻辑集群模式下不传默认elastic_group。 **默认取值**： elastic_group
    * expandWithExistedNode  **参数解释**： 是否是使用已添加的空闲节点进行扩容。 **约束限制**： 不涉及。 **取值范围**： true：使用空闲节点扩容 false：不使用空闲节点扩容 **默认取值**： false
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认true。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： true
    * redisConf  redisConf
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scaleOut' => '\HuaweiCloud\SDK\Dws\V2\Model\ScaleOut',
            'forceBackup' => 'bool',
            'mode' => 'string',
            'logicalClusterName' => 'string',
            'expandWithExistedNode' => 'bool',
            'autoRedistribute' => 'bool',
            'redisConf' => '\HuaweiCloud\SDK\Dws\V2\Model\RedisConfReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scaleOut  scaleOut
    * forceBackup  **参数解释**： 是否强制备份。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mode  **参数解释**： 扩容模式，不传默认离线read-only。 **约束限制**： 在线模式在大部分低版本集群不支持，请在联系运维人员确认后方才可用。 **取值范围**： read-only：离线模式 insert：在线模式 **默认取值**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 非逻辑集群模式下该字段不填，逻辑集群模式下不传默认elastic_group。 **默认取值**： elastic_group
    * expandWithExistedNode  **参数解释**： 是否是使用已添加的空闲节点进行扩容。 **约束限制**： 不涉及。 **取值范围**： true：使用空闲节点扩容 false：不使用空闲节点扩容 **默认取值**： false
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认true。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： true
    * redisConf  redisConf
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scaleOut' => null,
        'forceBackup' => null,
        'mode' => null,
        'logicalClusterName' => null,
        'expandWithExistedNode' => null,
        'autoRedistribute' => null,
        'redisConf' => null
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
    * scaleOut  scaleOut
    * forceBackup  **参数解释**： 是否强制备份。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mode  **参数解释**： 扩容模式，不传默认离线read-only。 **约束限制**： 在线模式在大部分低版本集群不支持，请在联系运维人员确认后方才可用。 **取值范围**： read-only：离线模式 insert：在线模式 **默认取值**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 非逻辑集群模式下该字段不填，逻辑集群模式下不传默认elastic_group。 **默认取值**： elastic_group
    * expandWithExistedNode  **参数解释**： 是否是使用已添加的空闲节点进行扩容。 **约束限制**： 不涉及。 **取值范围**： true：使用空闲节点扩容 false：不使用空闲节点扩容 **默认取值**： false
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认true。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： true
    * redisConf  redisConf
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scaleOut' => 'scale_out',
            'forceBackup' => 'force_backup',
            'mode' => 'mode',
            'logicalClusterName' => 'logical_cluster_name',
            'expandWithExistedNode' => 'expand_with_existed_node',
            'autoRedistribute' => 'auto_redistribute',
            'redisConf' => 'redis_conf'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scaleOut  scaleOut
    * forceBackup  **参数解释**： 是否强制备份。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mode  **参数解释**： 扩容模式，不传默认离线read-only。 **约束限制**： 在线模式在大部分低版本集群不支持，请在联系运维人员确认后方才可用。 **取值范围**： read-only：离线模式 insert：在线模式 **默认取值**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 非逻辑集群模式下该字段不填，逻辑集群模式下不传默认elastic_group。 **默认取值**： elastic_group
    * expandWithExistedNode  **参数解释**： 是否是使用已添加的空闲节点进行扩容。 **约束限制**： 不涉及。 **取值范围**： true：使用空闲节点扩容 false：不使用空闲节点扩容 **默认取值**： false
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认true。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： true
    * redisConf  redisConf
    *
    * @var string[]
    */
    protected static $setters = [
            'scaleOut' => 'setScaleOut',
            'forceBackup' => 'setForceBackup',
            'mode' => 'setMode',
            'logicalClusterName' => 'setLogicalClusterName',
            'expandWithExistedNode' => 'setExpandWithExistedNode',
            'autoRedistribute' => 'setAutoRedistribute',
            'redisConf' => 'setRedisConf'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scaleOut  scaleOut
    * forceBackup  **参数解释**： 是否强制备份。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mode  **参数解释**： 扩容模式，不传默认离线read-only。 **约束限制**： 在线模式在大部分低版本集群不支持，请在联系运维人员确认后方才可用。 **取值范围**： read-only：离线模式 insert：在线模式 **默认取值**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 非逻辑集群模式下该字段不填，逻辑集群模式下不传默认elastic_group。 **默认取值**： elastic_group
    * expandWithExistedNode  **参数解释**： 是否是使用已添加的空闲节点进行扩容。 **约束限制**： 不涉及。 **取值范围**： true：使用空闲节点扩容 false：不使用空闲节点扩容 **默认取值**： false
    * autoRedistribute  **参数解释**： 扩容完成后是否自动启动重分布，默认true。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： true
    * redisConf  redisConf
    *
    * @var string[]
    */
    protected static $getters = [
            'scaleOut' => 'getScaleOut',
            'forceBackup' => 'getForceBackup',
            'mode' => 'getMode',
            'logicalClusterName' => 'getLogicalClusterName',
            'expandWithExistedNode' => 'getExpandWithExistedNode',
            'autoRedistribute' => 'getAutoRedistribute',
            'redisConf' => 'getRedisConf'
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
        $this->container['scaleOut'] = isset($data['scaleOut']) ? $data['scaleOut'] : null;
        $this->container['forceBackup'] = isset($data['forceBackup']) ? $data['forceBackup'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['expandWithExistedNode'] = isset($data['expandWithExistedNode']) ? $data['expandWithExistedNode'] : null;
        $this->container['autoRedistribute'] = isset($data['autoRedistribute']) ? $data['autoRedistribute'] : null;
        $this->container['redisConf'] = isset($data['redisConf']) ? $data['redisConf'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scaleOut'] === null) {
            $invalidProperties[] = "'scaleOut' can't be null";
        }
        if ($this->container['expandWithExistedNode'] === null) {
            $invalidProperties[] = "'expandWithExistedNode' can't be null";
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
    * Gets scaleOut
    *  scaleOut
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ScaleOut
    */
    public function getScaleOut()
    {
        return $this->container['scaleOut'];
    }

    /**
    * Sets scaleOut
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ScaleOut $scaleOut scaleOut
    *
    * @return $this
    */
    public function setScaleOut($scaleOut)
    {
        $this->container['scaleOut'] = $scaleOut;
        return $this;
    }

    /**
    * Gets forceBackup
    *  **参数解释**： 是否强制备份。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getForceBackup()
    {
        return $this->container['forceBackup'];
    }

    /**
    * Sets forceBackup
    *
    * @param bool|null $forceBackup **参数解释**： 是否强制备份。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setForceBackup($forceBackup)
    {
        $this->container['forceBackup'] = $forceBackup;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**： 扩容模式，不传默认离线read-only。 **约束限制**： 在线模式在大部分低版本集群不支持，请在联系运维人员确认后方才可用。 **取值范围**： read-only：离线模式 insert：在线模式 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**： 扩容模式，不传默认离线read-only。 **约束限制**： 在线模式在大部分低版本集群不支持，请在联系运维人员确认后方才可用。 **取值范围**： read-only：离线模式 insert：在线模式 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  **参数解释**： 逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 非逻辑集群模式下该字段不填，逻辑集群模式下不传默认elastic_group。 **默认取值**： elastic_group
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName **参数解释**： 逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 非逻辑集群模式下该字段不填，逻辑集群模式下不传默认elastic_group。 **默认取值**： elastic_group
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets expandWithExistedNode
    *  **参数解释**： 是否是使用已添加的空闲节点进行扩容。 **约束限制**： 不涉及。 **取值范围**： true：使用空闲节点扩容 false：不使用空闲节点扩容 **默认取值**： false
    *
    * @return bool
    */
    public function getExpandWithExistedNode()
    {
        return $this->container['expandWithExistedNode'];
    }

    /**
    * Sets expandWithExistedNode
    *
    * @param bool $expandWithExistedNode **参数解释**： 是否是使用已添加的空闲节点进行扩容。 **约束限制**： 不涉及。 **取值范围**： true：使用空闲节点扩容 false：不使用空闲节点扩容 **默认取值**： false
    *
    * @return $this
    */
    public function setExpandWithExistedNode($expandWithExistedNode)
    {
        $this->container['expandWithExistedNode'] = $expandWithExistedNode;
        return $this;
    }

    /**
    * Gets autoRedistribute
    *  **参数解释**： 扩容完成后是否自动启动重分布，默认true。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： true
    *
    * @return bool|null
    */
    public function getAutoRedistribute()
    {
        return $this->container['autoRedistribute'];
    }

    /**
    * Sets autoRedistribute
    *
    * @param bool|null $autoRedistribute **参数解释**： 扩容完成后是否自动启动重分布，默认true。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： true
    *
    * @return $this
    */
    public function setAutoRedistribute($autoRedistribute)
    {
        $this->container['autoRedistribute'] = $autoRedistribute;
        return $this;
    }

    /**
    * Gets redisConf
    *  redisConf
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\RedisConfReq|null
    */
    public function getRedisConf()
    {
        return $this->container['redisConf'];
    }

    /**
    * Sets redisConf
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\RedisConfReq|null $redisConf redisConf
    *
    * @return $this
    */
    public function setRedisConf($redisConf)
    {
        $this->container['redisConf'] = $redisConf;
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

