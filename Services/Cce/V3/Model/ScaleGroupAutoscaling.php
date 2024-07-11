<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScaleGroupAutoscaling implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScaleGroupAutoscaling';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  伸缩组弹性扩缩容启用开关，默认不开启
    * extensionPriority  伸缩组优先级，未设置则默认为0，数值越大优先级越高
    * minNodeCount  弹性伸缩时，伸缩组最少应保持的节点数量，必须大于0
    * maxNodeCount  弹性伸缩时，伸缩组最多可保持的节点数量，应大于等于 **minNodeCount**, 不可大于集群规格所允许的节点上限，不可大于节点池节点数量上限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'extensionPriority' => 'int',
            'minNodeCount' => 'int',
            'maxNodeCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  伸缩组弹性扩缩容启用开关，默认不开启
    * extensionPriority  伸缩组优先级，未设置则默认为0，数值越大优先级越高
    * minNodeCount  弹性伸缩时，伸缩组最少应保持的节点数量，必须大于0
    * maxNodeCount  弹性伸缩时，伸缩组最多可保持的节点数量，应大于等于 **minNodeCount**, 不可大于集群规格所允许的节点上限，不可大于节点池节点数量上限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'extensionPriority' => null,
        'minNodeCount' => null,
        'maxNodeCount' => null
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
    * enable  伸缩组弹性扩缩容启用开关，默认不开启
    * extensionPriority  伸缩组优先级，未设置则默认为0，数值越大优先级越高
    * minNodeCount  弹性伸缩时，伸缩组最少应保持的节点数量，必须大于0
    * maxNodeCount  弹性伸缩时，伸缩组最多可保持的节点数量，应大于等于 **minNodeCount**, 不可大于集群规格所允许的节点上限，不可大于节点池节点数量上限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'extensionPriority' => 'extensionPriority',
            'minNodeCount' => 'minNodeCount',
            'maxNodeCount' => 'maxNodeCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  伸缩组弹性扩缩容启用开关，默认不开启
    * extensionPriority  伸缩组优先级，未设置则默认为0，数值越大优先级越高
    * minNodeCount  弹性伸缩时，伸缩组最少应保持的节点数量，必须大于0
    * maxNodeCount  弹性伸缩时，伸缩组最多可保持的节点数量，应大于等于 **minNodeCount**, 不可大于集群规格所允许的节点上限，不可大于节点池节点数量上限
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'extensionPriority' => 'setExtensionPriority',
            'minNodeCount' => 'setMinNodeCount',
            'maxNodeCount' => 'setMaxNodeCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  伸缩组弹性扩缩容启用开关，默认不开启
    * extensionPriority  伸缩组优先级，未设置则默认为0，数值越大优先级越高
    * minNodeCount  弹性伸缩时，伸缩组最少应保持的节点数量，必须大于0
    * maxNodeCount  弹性伸缩时，伸缩组最多可保持的节点数量，应大于等于 **minNodeCount**, 不可大于集群规格所允许的节点上限，不可大于节点池节点数量上限
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'extensionPriority' => 'getExtensionPriority',
            'minNodeCount' => 'getMinNodeCount',
            'maxNodeCount' => 'getMaxNodeCount'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['extensionPriority'] = isset($data['extensionPriority']) ? $data['extensionPriority'] : null;
        $this->container['minNodeCount'] = isset($data['minNodeCount']) ? $data['minNodeCount'] : null;
        $this->container['maxNodeCount'] = isset($data['maxNodeCount']) ? $data['maxNodeCount'] : null;
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
    * Gets enable
    *  伸缩组弹性扩缩容启用开关，默认不开启
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 伸缩组弹性扩缩容启用开关，默认不开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets extensionPriority
    *  伸缩组优先级，未设置则默认为0，数值越大优先级越高
    *
    * @return int|null
    */
    public function getExtensionPriority()
    {
        return $this->container['extensionPriority'];
    }

    /**
    * Sets extensionPriority
    *
    * @param int|null $extensionPriority 伸缩组优先级，未设置则默认为0，数值越大优先级越高
    *
    * @return $this
    */
    public function setExtensionPriority($extensionPriority)
    {
        $this->container['extensionPriority'] = $extensionPriority;
        return $this;
    }

    /**
    * Gets minNodeCount
    *  弹性伸缩时，伸缩组最少应保持的节点数量，必须大于0
    *
    * @return int|null
    */
    public function getMinNodeCount()
    {
        return $this->container['minNodeCount'];
    }

    /**
    * Sets minNodeCount
    *
    * @param int|null $minNodeCount 弹性伸缩时，伸缩组最少应保持的节点数量，必须大于0
    *
    * @return $this
    */
    public function setMinNodeCount($minNodeCount)
    {
        $this->container['minNodeCount'] = $minNodeCount;
        return $this;
    }

    /**
    * Gets maxNodeCount
    *  弹性伸缩时，伸缩组最多可保持的节点数量，应大于等于 **minNodeCount**, 不可大于集群规格所允许的节点上限，不可大于节点池节点数量上限
    *
    * @return int|null
    */
    public function getMaxNodeCount()
    {
        return $this->container['maxNodeCount'];
    }

    /**
    * Sets maxNodeCount
    *
    * @param int|null $maxNodeCount 弹性伸缩时，伸缩组最多可保持的节点数量，应大于等于 **minNodeCount**, 不可大于集群规格所允许的节点上限，不可大于节点池节点数量上限
    *
    * @return $this
    */
    public function setMaxNodeCount($maxNodeCount)
    {
        $this->container['maxNodeCount'] = $maxNodeCount;
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

