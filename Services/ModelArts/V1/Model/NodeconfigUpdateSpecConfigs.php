<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeconfigUpdateSpecConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeconfigUpdate_spec_configs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageWarmUp  **参数解释**：镜像预热配置。用于创建或删除镜像预热任务，镜像会被提前拉取到资源池节点，缩短训练任务启动时间。 **约束限制**：镜像预热任务数量上限为10；同一请求内任务名称不可重复、镜像地址不可重复；仅标准池支持，Lite资源池不支持该配置。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpuManager  cpuManager
    * dropCache  dropCache
    * transparentHugepage  transparentHugepage
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageWarmUp' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsImageWarmUp[]',
            'cpuManager' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsCpuManager',
            'dropCache' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsDropCache',
            'transparentHugepage' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsTransparentHugepage'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageWarmUp  **参数解释**：镜像预热配置。用于创建或删除镜像预热任务，镜像会被提前拉取到资源池节点，缩短训练任务启动时间。 **约束限制**：镜像预热任务数量上限为10；同一请求内任务名称不可重复、镜像地址不可重复；仅标准池支持，Lite资源池不支持该配置。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpuManager  cpuManager
    * dropCache  dropCache
    * transparentHugepage  transparentHugepage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageWarmUp' => null,
        'cpuManager' => null,
        'dropCache' => null,
        'transparentHugepage' => null
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
    * imageWarmUp  **参数解释**：镜像预热配置。用于创建或删除镜像预热任务，镜像会被提前拉取到资源池节点，缩短训练任务启动时间。 **约束限制**：镜像预热任务数量上限为10；同一请求内任务名称不可重复、镜像地址不可重复；仅标准池支持，Lite资源池不支持该配置。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpuManager  cpuManager
    * dropCache  dropCache
    * transparentHugepage  transparentHugepage
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageWarmUp' => 'image_warm_up',
            'cpuManager' => 'cpu_manager',
            'dropCache' => 'drop_cache',
            'transparentHugepage' => 'transparent_hugepage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageWarmUp  **参数解释**：镜像预热配置。用于创建或删除镜像预热任务，镜像会被提前拉取到资源池节点，缩短训练任务启动时间。 **约束限制**：镜像预热任务数量上限为10；同一请求内任务名称不可重复、镜像地址不可重复；仅标准池支持，Lite资源池不支持该配置。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpuManager  cpuManager
    * dropCache  dropCache
    * transparentHugepage  transparentHugepage
    *
    * @var string[]
    */
    protected static $setters = [
            'imageWarmUp' => 'setImageWarmUp',
            'cpuManager' => 'setCpuManager',
            'dropCache' => 'setDropCache',
            'transparentHugepage' => 'setTransparentHugepage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageWarmUp  **参数解释**：镜像预热配置。用于创建或删除镜像预热任务，镜像会被提前拉取到资源池节点，缩短训练任务启动时间。 **约束限制**：镜像预热任务数量上限为10；同一请求内任务名称不可重复、镜像地址不可重复；仅标准池支持，Lite资源池不支持该配置。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * cpuManager  cpuManager
    * dropCache  dropCache
    * transparentHugepage  transparentHugepage
    *
    * @var string[]
    */
    protected static $getters = [
            'imageWarmUp' => 'getImageWarmUp',
            'cpuManager' => 'getCpuManager',
            'dropCache' => 'getDropCache',
            'transparentHugepage' => 'getTransparentHugepage'
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
        $this->container['imageWarmUp'] = isset($data['imageWarmUp']) ? $data['imageWarmUp'] : null;
        $this->container['cpuManager'] = isset($data['cpuManager']) ? $data['cpuManager'] : null;
        $this->container['dropCache'] = isset($data['dropCache']) ? $data['dropCache'] : null;
        $this->container['transparentHugepage'] = isset($data['transparentHugepage']) ? $data['transparentHugepage'] : null;
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
    * Gets imageWarmUp
    *  **参数解释**：镜像预热配置。用于创建或删除镜像预热任务，镜像会被提前拉取到资源池节点，缩短训练任务启动时间。 **约束限制**：镜像预热任务数量上限为10；同一请求内任务名称不可重复、镜像地址不可重复；仅标准池支持，Lite资源池不支持该配置。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsImageWarmUp[]|null
    */
    public function getImageWarmUp()
    {
        return $this->container['imageWarmUp'];
    }

    /**
    * Sets imageWarmUp
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsImageWarmUp[]|null $imageWarmUp **参数解释**：镜像预热配置。用于创建或删除镜像预热任务，镜像会被提前拉取到资源池节点，缩短训练任务启动时间。 **约束限制**：镜像预热任务数量上限为10；同一请求内任务名称不可重复、镜像地址不可重复；仅标准池支持，Lite资源池不支持该配置。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setImageWarmUp($imageWarmUp)
    {
        $this->container['imageWarmUp'] = $imageWarmUp;
        return $this;
    }

    /**
    * Gets cpuManager
    *  cpuManager
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsCpuManager|null
    */
    public function getCpuManager()
    {
        return $this->container['cpuManager'];
    }

    /**
    * Sets cpuManager
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsCpuManager|null $cpuManager cpuManager
    *
    * @return $this
    */
    public function setCpuManager($cpuManager)
    {
        $this->container['cpuManager'] = $cpuManager;
        return $this;
    }

    /**
    * Gets dropCache
    *  dropCache
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsDropCache|null
    */
    public function getDropCache()
    {
        return $this->container['dropCache'];
    }

    /**
    * Sets dropCache
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsDropCache|null $dropCache dropCache
    *
    * @return $this
    */
    public function setDropCache($dropCache)
    {
        $this->container['dropCache'] = $dropCache;
        return $this;
    }

    /**
    * Gets transparentHugepage
    *  transparentHugepage
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsTransparentHugepage|null
    */
    public function getTransparentHugepage()
    {
        return $this->container['transparentHugepage'];
    }

    /**
    * Sets transparentHugepage
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeconfigUpdateSpecConfigsTransparentHugepage|null $transparentHugepage transparentHugepage
    *
    * @return $this
    */
    public function setTransparentHugepage($transparentHugepage)
    {
        $this->container['transparentHugepage'] = $transparentHugepage;
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

