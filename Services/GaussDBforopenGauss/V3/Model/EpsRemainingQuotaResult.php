<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EpsRemainingQuotaResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EpsRemainingQuotaResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * epsTag  **参数解释**: 企业项目ID。 **取值范围**: 不涉及。
    * instanceEpsQuota  **参数解释**: 实例配额。 **取值范围**: 不涉及。
    * cpuEpsQuota  **参数解释**: CPU配额。 **取值范围**: 不涉及。
    * memEpsQuota  **参数解释**: 内存配额。 **取值范围**: 不涉及。
    * volumeEpsQuota  **参数解释**: 存储空间配额。 **取值范围**: 不涉及。
    * instanceEpsRemainingQuota  **参数解释**: 实例剩余配额。 **取值范围**: 不涉及。
    * cpuEpsRemainingQuota  **参数解释**: CPU剩余配额。 **取值范围**: 不涉及。
    * memEpsRemainingQuota  **参数解释**: 内存剩余配额。 **取值范围**: 不涉及。
    * volumeEpsRemainingQuota  **参数解释**: 存储空间剩余配额。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'epsTag' => 'string',
            'instanceEpsQuota' => 'int',
            'cpuEpsQuota' => 'int',
            'memEpsQuota' => 'int',
            'volumeEpsQuota' => 'int',
            'instanceEpsRemainingQuota' => 'int',
            'cpuEpsRemainingQuota' => 'int',
            'memEpsRemainingQuota' => 'int',
            'volumeEpsRemainingQuota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * epsTag  **参数解释**: 企业项目ID。 **取值范围**: 不涉及。
    * instanceEpsQuota  **参数解释**: 实例配额。 **取值范围**: 不涉及。
    * cpuEpsQuota  **参数解释**: CPU配额。 **取值范围**: 不涉及。
    * memEpsQuota  **参数解释**: 内存配额。 **取值范围**: 不涉及。
    * volumeEpsQuota  **参数解释**: 存储空间配额。 **取值范围**: 不涉及。
    * instanceEpsRemainingQuota  **参数解释**: 实例剩余配额。 **取值范围**: 不涉及。
    * cpuEpsRemainingQuota  **参数解释**: CPU剩余配额。 **取值范围**: 不涉及。
    * memEpsRemainingQuota  **参数解释**: 内存剩余配额。 **取值范围**: 不涉及。
    * volumeEpsRemainingQuota  **参数解释**: 存储空间剩余配额。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'epsTag' => null,
        'instanceEpsQuota' => null,
        'cpuEpsQuota' => null,
        'memEpsQuota' => null,
        'volumeEpsQuota' => null,
        'instanceEpsRemainingQuota' => null,
        'cpuEpsRemainingQuota' => null,
        'memEpsRemainingQuota' => null,
        'volumeEpsRemainingQuota' => null
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
    * epsTag  **参数解释**: 企业项目ID。 **取值范围**: 不涉及。
    * instanceEpsQuota  **参数解释**: 实例配额。 **取值范围**: 不涉及。
    * cpuEpsQuota  **参数解释**: CPU配额。 **取值范围**: 不涉及。
    * memEpsQuota  **参数解释**: 内存配额。 **取值范围**: 不涉及。
    * volumeEpsQuota  **参数解释**: 存储空间配额。 **取值范围**: 不涉及。
    * instanceEpsRemainingQuota  **参数解释**: 实例剩余配额。 **取值范围**: 不涉及。
    * cpuEpsRemainingQuota  **参数解释**: CPU剩余配额。 **取值范围**: 不涉及。
    * memEpsRemainingQuota  **参数解释**: 内存剩余配额。 **取值范围**: 不涉及。
    * volumeEpsRemainingQuota  **参数解释**: 存储空间剩余配额。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'epsTag' => 'eps_tag',
            'instanceEpsQuota' => 'instance_eps_quota',
            'cpuEpsQuota' => 'cpu_eps_quota',
            'memEpsQuota' => 'mem_eps_quota',
            'volumeEpsQuota' => 'volume_eps_quota',
            'instanceEpsRemainingQuota' => 'instance_eps_remaining_quota',
            'cpuEpsRemainingQuota' => 'cpu_eps_remaining_quota',
            'memEpsRemainingQuota' => 'mem_eps_remaining_quota',
            'volumeEpsRemainingQuota' => 'volume_eps_remaining_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * epsTag  **参数解释**: 企业项目ID。 **取值范围**: 不涉及。
    * instanceEpsQuota  **参数解释**: 实例配额。 **取值范围**: 不涉及。
    * cpuEpsQuota  **参数解释**: CPU配额。 **取值范围**: 不涉及。
    * memEpsQuota  **参数解释**: 内存配额。 **取值范围**: 不涉及。
    * volumeEpsQuota  **参数解释**: 存储空间配额。 **取值范围**: 不涉及。
    * instanceEpsRemainingQuota  **参数解释**: 实例剩余配额。 **取值范围**: 不涉及。
    * cpuEpsRemainingQuota  **参数解释**: CPU剩余配额。 **取值范围**: 不涉及。
    * memEpsRemainingQuota  **参数解释**: 内存剩余配额。 **取值范围**: 不涉及。
    * volumeEpsRemainingQuota  **参数解释**: 存储空间剩余配额。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'epsTag' => 'setEpsTag',
            'instanceEpsQuota' => 'setInstanceEpsQuota',
            'cpuEpsQuota' => 'setCpuEpsQuota',
            'memEpsQuota' => 'setMemEpsQuota',
            'volumeEpsQuota' => 'setVolumeEpsQuota',
            'instanceEpsRemainingQuota' => 'setInstanceEpsRemainingQuota',
            'cpuEpsRemainingQuota' => 'setCpuEpsRemainingQuota',
            'memEpsRemainingQuota' => 'setMemEpsRemainingQuota',
            'volumeEpsRemainingQuota' => 'setVolumeEpsRemainingQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * epsTag  **参数解释**: 企业项目ID。 **取值范围**: 不涉及。
    * instanceEpsQuota  **参数解释**: 实例配额。 **取值范围**: 不涉及。
    * cpuEpsQuota  **参数解释**: CPU配额。 **取值范围**: 不涉及。
    * memEpsQuota  **参数解释**: 内存配额。 **取值范围**: 不涉及。
    * volumeEpsQuota  **参数解释**: 存储空间配额。 **取值范围**: 不涉及。
    * instanceEpsRemainingQuota  **参数解释**: 实例剩余配额。 **取值范围**: 不涉及。
    * cpuEpsRemainingQuota  **参数解释**: CPU剩余配额。 **取值范围**: 不涉及。
    * memEpsRemainingQuota  **参数解释**: 内存剩余配额。 **取值范围**: 不涉及。
    * volumeEpsRemainingQuota  **参数解释**: 存储空间剩余配额。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'epsTag' => 'getEpsTag',
            'instanceEpsQuota' => 'getInstanceEpsQuota',
            'cpuEpsQuota' => 'getCpuEpsQuota',
            'memEpsQuota' => 'getMemEpsQuota',
            'volumeEpsQuota' => 'getVolumeEpsQuota',
            'instanceEpsRemainingQuota' => 'getInstanceEpsRemainingQuota',
            'cpuEpsRemainingQuota' => 'getCpuEpsRemainingQuota',
            'memEpsRemainingQuota' => 'getMemEpsRemainingQuota',
            'volumeEpsRemainingQuota' => 'getVolumeEpsRemainingQuota'
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
        $this->container['epsTag'] = isset($data['epsTag']) ? $data['epsTag'] : null;
        $this->container['instanceEpsQuota'] = isset($data['instanceEpsQuota']) ? $data['instanceEpsQuota'] : null;
        $this->container['cpuEpsQuota'] = isset($data['cpuEpsQuota']) ? $data['cpuEpsQuota'] : null;
        $this->container['memEpsQuota'] = isset($data['memEpsQuota']) ? $data['memEpsQuota'] : null;
        $this->container['volumeEpsQuota'] = isset($data['volumeEpsQuota']) ? $data['volumeEpsQuota'] : null;
        $this->container['instanceEpsRemainingQuota'] = isset($data['instanceEpsRemainingQuota']) ? $data['instanceEpsRemainingQuota'] : null;
        $this->container['cpuEpsRemainingQuota'] = isset($data['cpuEpsRemainingQuota']) ? $data['cpuEpsRemainingQuota'] : null;
        $this->container['memEpsRemainingQuota'] = isset($data['memEpsRemainingQuota']) ? $data['memEpsRemainingQuota'] : null;
        $this->container['volumeEpsRemainingQuota'] = isset($data['volumeEpsRemainingQuota']) ? $data['volumeEpsRemainingQuota'] : null;
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
    * Gets epsTag
    *  **参数解释**: 企业项目ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getEpsTag()
    {
        return $this->container['epsTag'];
    }

    /**
    * Sets epsTag
    *
    * @param string|null $epsTag **参数解释**: 企业项目ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEpsTag($epsTag)
    {
        $this->container['epsTag'] = $epsTag;
        return $this;
    }

    /**
    * Gets instanceEpsQuota
    *  **参数解释**: 实例配额。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getInstanceEpsQuota()
    {
        return $this->container['instanceEpsQuota'];
    }

    /**
    * Sets instanceEpsQuota
    *
    * @param int|null $instanceEpsQuota **参数解释**: 实例配额。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceEpsQuota($instanceEpsQuota)
    {
        $this->container['instanceEpsQuota'] = $instanceEpsQuota;
        return $this;
    }

    /**
    * Gets cpuEpsQuota
    *  **参数解释**: CPU配额。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getCpuEpsQuota()
    {
        return $this->container['cpuEpsQuota'];
    }

    /**
    * Sets cpuEpsQuota
    *
    * @param int|null $cpuEpsQuota **参数解释**: CPU配额。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCpuEpsQuota($cpuEpsQuota)
    {
        $this->container['cpuEpsQuota'] = $cpuEpsQuota;
        return $this;
    }

    /**
    * Gets memEpsQuota
    *  **参数解释**: 内存配额。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getMemEpsQuota()
    {
        return $this->container['memEpsQuota'];
    }

    /**
    * Sets memEpsQuota
    *
    * @param int|null $memEpsQuota **参数解释**: 内存配额。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMemEpsQuota($memEpsQuota)
    {
        $this->container['memEpsQuota'] = $memEpsQuota;
        return $this;
    }

    /**
    * Gets volumeEpsQuota
    *  **参数解释**: 存储空间配额。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getVolumeEpsQuota()
    {
        return $this->container['volumeEpsQuota'];
    }

    /**
    * Sets volumeEpsQuota
    *
    * @param int|null $volumeEpsQuota **参数解释**: 存储空间配额。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setVolumeEpsQuota($volumeEpsQuota)
    {
        $this->container['volumeEpsQuota'] = $volumeEpsQuota;
        return $this;
    }

    /**
    * Gets instanceEpsRemainingQuota
    *  **参数解释**: 实例剩余配额。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getInstanceEpsRemainingQuota()
    {
        return $this->container['instanceEpsRemainingQuota'];
    }

    /**
    * Sets instanceEpsRemainingQuota
    *
    * @param int|null $instanceEpsRemainingQuota **参数解释**: 实例剩余配额。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceEpsRemainingQuota($instanceEpsRemainingQuota)
    {
        $this->container['instanceEpsRemainingQuota'] = $instanceEpsRemainingQuota;
        return $this;
    }

    /**
    * Gets cpuEpsRemainingQuota
    *  **参数解释**: CPU剩余配额。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getCpuEpsRemainingQuota()
    {
        return $this->container['cpuEpsRemainingQuota'];
    }

    /**
    * Sets cpuEpsRemainingQuota
    *
    * @param int|null $cpuEpsRemainingQuota **参数解释**: CPU剩余配额。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCpuEpsRemainingQuota($cpuEpsRemainingQuota)
    {
        $this->container['cpuEpsRemainingQuota'] = $cpuEpsRemainingQuota;
        return $this;
    }

    /**
    * Gets memEpsRemainingQuota
    *  **参数解释**: 内存剩余配额。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getMemEpsRemainingQuota()
    {
        return $this->container['memEpsRemainingQuota'];
    }

    /**
    * Sets memEpsRemainingQuota
    *
    * @param int|null $memEpsRemainingQuota **参数解释**: 内存剩余配额。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMemEpsRemainingQuota($memEpsRemainingQuota)
    {
        $this->container['memEpsRemainingQuota'] = $memEpsRemainingQuota;
        return $this;
    }

    /**
    * Gets volumeEpsRemainingQuota
    *  **参数解释**: 存储空间剩余配额。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getVolumeEpsRemainingQuota()
    {
        return $this->container['volumeEpsRemainingQuota'];
    }

    /**
    * Sets volumeEpsRemainingQuota
    *
    * @param int|null $volumeEpsRemainingQuota **参数解释**: 存储空间剩余配额。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setVolumeEpsRemainingQuota($volumeEpsRemainingQuota)
    {
        $this->container['volumeEpsRemainingQuota'] = $volumeEpsRemainingQuota;
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

