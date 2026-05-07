<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateClusterResourceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateClusterResourceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateAll  **参数解释**: 是否全量处理所有集群，false的时候cluster_ids有值 **约束限制**: 必填 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * clusterIds  **参数解释**: 批量修改的集群id列表。operate_all参数为false时,需要填写此批量查询条件,operate_all参数为ture时不处理cluster_ids参数 **约束限制**： 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**： 不涉及
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **约束限制**： 不涉及 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。  **默认取值**： 不涉及
    * cpuLimit  **参数解释**: cpu最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * memLimit  **参数解释**: 内存最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateAll' => 'bool',
            'clusterIds' => 'string[]',
            'mode' => 'string',
            'cpuLimit' => 'string',
            'memLimit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateAll  **参数解释**: 是否全量处理所有集群，false的时候cluster_ids有值 **约束限制**: 必填 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * clusterIds  **参数解释**: 批量修改的集群id列表。operate_all参数为false时,需要填写此批量查询条件,operate_all参数为ture时不处理cluster_ids参数 **约束限制**： 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**： 不涉及
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **约束限制**： 不涉及 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。  **默认取值**： 不涉及
    * cpuLimit  **参数解释**: cpu最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * memLimit  **参数解释**: 内存最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateAll' => null,
        'clusterIds' => null,
        'mode' => null,
        'cpuLimit' => null,
        'memLimit' => null
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
    * operateAll  **参数解释**: 是否全量处理所有集群，false的时候cluster_ids有值 **约束限制**: 必填 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * clusterIds  **参数解释**: 批量修改的集群id列表。operate_all参数为false时,需要填写此批量查询条件,operate_all参数为ture时不处理cluster_ids参数 **约束限制**： 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**： 不涉及
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **约束限制**： 不涉及 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。  **默认取值**： 不涉及
    * cpuLimit  **参数解释**: cpu最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * memLimit  **参数解释**: 内存最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateAll' => 'operate_all',
            'clusterIds' => 'cluster_ids',
            'mode' => 'mode',
            'cpuLimit' => 'cpu_limit',
            'memLimit' => 'mem_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateAll  **参数解释**: 是否全量处理所有集群，false的时候cluster_ids有值 **约束限制**: 必填 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * clusterIds  **参数解释**: 批量修改的集群id列表。operate_all参数为false时,需要填写此批量查询条件,operate_all参数为ture时不处理cluster_ids参数 **约束限制**： 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**： 不涉及
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **约束限制**： 不涉及 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。  **默认取值**： 不涉及
    * cpuLimit  **参数解释**: cpu最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * memLimit  **参数解释**: 内存最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'operateAll' => 'setOperateAll',
            'clusterIds' => 'setClusterIds',
            'mode' => 'setMode',
            'cpuLimit' => 'setCpuLimit',
            'memLimit' => 'setMemLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateAll  **参数解释**: 是否全量处理所有集群，false的时候cluster_ids有值 **约束限制**: 必填 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    * clusterIds  **参数解释**: 批量修改的集群id列表。operate_all参数为false时,需要填写此批量查询条件,operate_all参数为ture时不处理cluster_ids参数 **约束限制**： 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**： 不涉及
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **约束限制**： 不涉及 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。  **默认取值**： 不涉及
    * cpuLimit  **参数解释**: cpu最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    * memLimit  **参数解释**: 内存最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'operateAll' => 'getOperateAll',
            'clusterIds' => 'getClusterIds',
            'mode' => 'getMode',
            'cpuLimit' => 'getCpuLimit',
            'memLimit' => 'getMemLimit'
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
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['clusterIds'] = isset($data['clusterIds']) ? $data['clusterIds'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['memLimit'] = isset($data['memLimit']) ? $data['memLimit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operateAll'] === null) {
            $invalidProperties[] = "'operateAll' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
            if ((mb_strlen($this->container['mode']) > 32)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['mode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(default|customized|adaptive)$/", $this->container['mode'])) {
                $invalidProperties[] = "invalid value for 'mode', must be conform to the pattern /^(default|customized|adaptive)$/.";
            }
        if ($this->container['cpuLimit'] === null) {
            $invalidProperties[] = "'cpuLimit' can't be null";
        }
            if ((mb_strlen($this->container['cpuLimit']) > 32)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['cpuLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['memLimit'] === null) {
            $invalidProperties[] = "'memLimit' can't be null";
        }
            if ((mb_strlen($this->container['memLimit']) > 32)) {
                $invalidProperties[] = "invalid value for 'memLimit', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['memLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'memLimit', the character length must be bigger than or equal to 0.";
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
    * Gets operateAll
    *  **参数解释**: 是否全量处理所有集群，false的时候cluster_ids有值 **约束限制**: 必填 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return bool
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool $operateAll **参数解释**: 是否全量处理所有集群，false的时候cluster_ids有值 **约束限制**: 必填 **取值范围**: - true：是。 - false：否。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets clusterIds
    *  **参数解释**: 批量修改的集群id列表。operate_all参数为false时,需要填写此批量查询条件,operate_all参数为ture时不处理cluster_ids参数 **约束限制**： 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getClusterIds()
    {
        return $this->container['clusterIds'];
    }

    /**
    * Sets clusterIds
    *
    * @param string[]|null $clusterIds **参数解释**: 批量修改的集群id列表。operate_all参数为false时,需要填写此批量查询条件,operate_all参数为ture时不处理cluster_ids参数 **约束限制**： 不涉及 **取值范围**: 最小值0，最大值200 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterIds($clusterIds)
    {
        $this->container['clusterIds'] = $clusterIds;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **约束限制**： 不涉及 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode **参数解释**： 资源限制类型：默认规则or自定义or自适应 **约束限制**： 不涉及 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets cpuLimit
    *  **参数解释**: cpu最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getCpuLimit()
    {
        return $this->container['cpuLimit'];
    }

    /**
    * Sets cpuLimit
    *
    * @param string $cpuLimit **参数解释**: cpu最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;
        return $this;
    }

    /**
    * Gets memLimit
    *  **参数解释**: 内存最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getMemLimit()
    {
        return $this->container['memLimit'];
    }

    /**
    * Sets memLimit
    *
    * @param string $memLimit **参数解释**: 内存最大值 **约束限制**: 不涉及 **取值范围**: 字符长度0-32位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setMemLimit($memLimit)
    {
        $this->container['memLimit'] = $memLimit;
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

