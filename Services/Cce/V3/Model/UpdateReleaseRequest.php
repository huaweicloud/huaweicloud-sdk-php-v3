<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateReleaseRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateReleaseRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * showResources  **参数解释：** 是否展示模板实例的资源信息。 **约束限制：** 不涉及 **取值范围：** 指定为“true”时展示模板实例的资源信息，不指定该参数时默认不展示。 **默认取值：** 无
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'namespace' => 'string',
            'showResources' => 'string',
            'clusterId' => 'string',
            'body' => '\HuaweiCloud\SDK\Cce\V3\Model\UpdateReleaseReqBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * showResources  **参数解释：** 是否展示模板实例的资源信息。 **约束限制：** 不涉及 **取值范围：** 指定为“true”时展示模板实例的资源信息，不指定该参数时默认不展示。 **默认取值：** 无
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'namespace' => null,
        'showResources' => null,
        'clusterId' => null,
        'body' => null
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
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * showResources  **参数解释：** 是否展示模板实例的资源信息。 **约束限制：** 不涉及 **取值范围：** 指定为“true”时展示模板实例的资源信息，不指定该参数时默认不展示。 **默认取值：** 无
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'namespace' => 'namespace',
            'showResources' => 'show_resources',
            'clusterId' => 'cluster_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * showResources  **参数解释：** 是否展示模板实例的资源信息。 **约束限制：** 不涉及 **取值范围：** 指定为“true”时展示模板实例的资源信息，不指定该参数时默认不展示。 **默认取值：** 无
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'showResources' => 'setShowResources',
            'clusterId' => 'setClusterId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * showResources  **参数解释：** 是否展示模板实例的资源信息。 **约束限制：** 不涉及 **取值范围：** 指定为“true”时展示模板实例的资源信息，不指定该参数时默认不展示。 **默认取值：** 无
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'showResources' => 'getShowResources',
            'clusterId' => 'getClusterId',
            'body' => 'getBody'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['showResources'] = isset($data['showResources']) ? $data['showResources'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
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
    * Gets name
    *  模板实例名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 模板实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  模板实例所在的命名空间
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 模板实例所在的命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets showResources
    *  **参数解释：** 是否展示模板实例的资源信息。 **约束限制：** 不涉及 **取值范围：** 指定为“true”时展示模板实例的资源信息，不指定该参数时默认不展示。 **默认取值：** 无
    *
    * @return string|null
    */
    public function getShowResources()
    {
        return $this->container['showResources'];
    }

    /**
    * Sets showResources
    *
    * @param string|null $showResources **参数解释：** 是否展示模板实例的资源信息。 **约束限制：** 不涉及 **取值范围：** 指定为“true”时展示模板实例的资源信息，不指定该参数时默认不展示。 **默认取值：** 无
    *
    * @return $this
    */
    public function setShowResources($showResources)
    {
        $this->container['showResources'] = $showResources;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpdateReleaseReqBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpdateReleaseReqBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

