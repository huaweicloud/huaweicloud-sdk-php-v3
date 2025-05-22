<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterShrinkReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterShrinkReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shrinkNumber  **参数解释**：  缩容节点个数。  **约束限制**：  该值不能为空。  **取值范围**：  大于0的整数。  **默认取值**：  不涉及。
    * online  **参数解释**：  是否是在线缩容。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * retry  **参数解释**：  是否是缩容失败后重试。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * needAgency  **参数解释**：  是否需要委托。  **约束限制**：  不涉及。  **取值范围**：  false或true。  **默认取值**：  false。
    * parallelJobs  **参数解释**：  重分布并发配置数。  **约束限制**：  不涉及。  **取值范围**：  1~200。  **默认取值**：  4。
    * type  **参数解释**：  类型字段，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * forceBackup  **参数解释**：  操作前是否执行备份，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shrinkNumber' => 'int',
            'online' => 'bool',
            'retry' => 'bool',
            'needAgency' => 'bool',
            'parallelJobs' => 'int',
            'type' => 'string',
            'forceBackup' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shrinkNumber  **参数解释**：  缩容节点个数。  **约束限制**：  该值不能为空。  **取值范围**：  大于0的整数。  **默认取值**：  不涉及。
    * online  **参数解释**：  是否是在线缩容。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * retry  **参数解释**：  是否是缩容失败后重试。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * needAgency  **参数解释**：  是否需要委托。  **约束限制**：  不涉及。  **取值范围**：  false或true。  **默认取值**：  false。
    * parallelJobs  **参数解释**：  重分布并发配置数。  **约束限制**：  不涉及。  **取值范围**：  1~200。  **默认取值**：  4。
    * type  **参数解释**：  类型字段，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * forceBackup  **参数解释**：  操作前是否执行备份，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shrinkNumber' => null,
        'online' => null,
        'retry' => null,
        'needAgency' => null,
        'parallelJobs' => 'int32',
        'type' => null,
        'forceBackup' => null
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
    * shrinkNumber  **参数解释**：  缩容节点个数。  **约束限制**：  该值不能为空。  **取值范围**：  大于0的整数。  **默认取值**：  不涉及。
    * online  **参数解释**：  是否是在线缩容。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * retry  **参数解释**：  是否是缩容失败后重试。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * needAgency  **参数解释**：  是否需要委托。  **约束限制**：  不涉及。  **取值范围**：  false或true。  **默认取值**：  false。
    * parallelJobs  **参数解释**：  重分布并发配置数。  **约束限制**：  不涉及。  **取值范围**：  1~200。  **默认取值**：  4。
    * type  **参数解释**：  类型字段，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * forceBackup  **参数解释**：  操作前是否执行备份，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shrinkNumber' => 'shrink_number',
            'online' => 'online',
            'retry' => 'retry',
            'needAgency' => 'need_agency',
            'parallelJobs' => 'parallel_jobs',
            'type' => 'type',
            'forceBackup' => 'force_backup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shrinkNumber  **参数解释**：  缩容节点个数。  **约束限制**：  该值不能为空。  **取值范围**：  大于0的整数。  **默认取值**：  不涉及。
    * online  **参数解释**：  是否是在线缩容。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * retry  **参数解释**：  是否是缩容失败后重试。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * needAgency  **参数解释**：  是否需要委托。  **约束限制**：  不涉及。  **取值范围**：  false或true。  **默认取值**：  false。
    * parallelJobs  **参数解释**：  重分布并发配置数。  **约束限制**：  不涉及。  **取值范围**：  1~200。  **默认取值**：  4。
    * type  **参数解释**：  类型字段，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * forceBackup  **参数解释**：  操作前是否执行备份，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'shrinkNumber' => 'setShrinkNumber',
            'online' => 'setOnline',
            'retry' => 'setRetry',
            'needAgency' => 'setNeedAgency',
            'parallelJobs' => 'setParallelJobs',
            'type' => 'setType',
            'forceBackup' => 'setForceBackup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shrinkNumber  **参数解释**：  缩容节点个数。  **约束限制**：  该值不能为空。  **取值范围**：  大于0的整数。  **默认取值**：  不涉及。
    * online  **参数解释**：  是否是在线缩容。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * retry  **参数解释**：  是否是缩容失败后重试。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    * needAgency  **参数解释**：  是否需要委托。  **约束限制**：  不涉及。  **取值范围**：  false或true。  **默认取值**：  false。
    * parallelJobs  **参数解释**：  重分布并发配置数。  **约束限制**：  不涉及。  **取值范围**：  1~200。  **默认取值**：  4。
    * type  **参数解释**：  类型字段，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * forceBackup  **参数解释**：  操作前是否执行备份，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'shrinkNumber' => 'getShrinkNumber',
            'online' => 'getOnline',
            'retry' => 'getRetry',
            'needAgency' => 'getNeedAgency',
            'parallelJobs' => 'getParallelJobs',
            'type' => 'getType',
            'forceBackup' => 'getForceBackup'
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
        $this->container['shrinkNumber'] = isset($data['shrinkNumber']) ? $data['shrinkNumber'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['needAgency'] = isset($data['needAgency']) ? $data['needAgency'] : null;
        $this->container['parallelJobs'] = isset($data['parallelJobs']) ? $data['parallelJobs'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['forceBackup'] = isset($data['forceBackup']) ? $data['forceBackup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets shrinkNumber
    *  **参数解释**：  缩容节点个数。  **约束限制**：  该值不能为空。  **取值范围**：  大于0的整数。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getShrinkNumber()
    {
        return $this->container['shrinkNumber'];
    }

    /**
    * Sets shrinkNumber
    *
    * @param int|null $shrinkNumber **参数解释**：  缩容节点个数。  **约束限制**：  该值不能为空。  **取值范围**：  大于0的整数。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setShrinkNumber($shrinkNumber)
    {
        $this->container['shrinkNumber'] = $shrinkNumber;
        return $this;
    }

    /**
    * Gets online
    *  **参数解释**：  是否是在线缩容。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    *
    * @return bool|null
    */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
    * Sets online
    *
    * @param bool|null $online **参数解释**：  是否是在线缩容。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setOnline($online)
    {
        $this->container['online'] = $online;
        return $this;
    }

    /**
    * Gets retry
    *  **参数解释**：  是否是缩容失败后重试。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    *
    * @return bool|null
    */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
    * Sets retry
    *
    * @param bool|null $retry **参数解释**：  是否是缩容失败后重试。  **约束限制**：  不涉及。  **取值范围**：  false|true。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;
        return $this;
    }

    /**
    * Gets needAgency
    *  **参数解释**：  是否需要委托。  **约束限制**：  不涉及。  **取值范围**：  false或true。  **默认取值**：  false。
    *
    * @return bool|null
    */
    public function getNeedAgency()
    {
        return $this->container['needAgency'];
    }

    /**
    * Sets needAgency
    *
    * @param bool|null $needAgency **参数解释**：  是否需要委托。  **约束限制**：  不涉及。  **取值范围**：  false或true。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setNeedAgency($needAgency)
    {
        $this->container['needAgency'] = $needAgency;
        return $this;
    }

    /**
    * Gets parallelJobs
    *  **参数解释**：  重分布并发配置数。  **约束限制**：  不涉及。  **取值范围**：  1~200。  **默认取值**：  4。
    *
    * @return int|null
    */
    public function getParallelJobs()
    {
        return $this->container['parallelJobs'];
    }

    /**
    * Sets parallelJobs
    *
    * @param int|null $parallelJobs **参数解释**：  重分布并发配置数。  **约束限制**：  不涉及。  **取值范围**：  1~200。  **默认取值**：  4。
    *
    * @return $this
    */
    public function setParallelJobs($parallelJobs)
    {
        $this->container['parallelJobs'] = $parallelJobs;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：  类型字段，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：  类型字段，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets forceBackup
    *  **参数解释**：  操作前是否执行备份，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param bool|null $forceBackup **参数解释**：  操作前是否执行备份，字段已废弃不再生效。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setForceBackup($forceBackup)
    {
        $this->container['forceBackup'] = $forceBackup;
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

