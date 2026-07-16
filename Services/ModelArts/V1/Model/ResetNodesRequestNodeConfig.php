<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetNodesRequestNodeConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetNodesRequest_nodeConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * os  **参数解释**：节点的镜像名称，如果不设置则取name字段的值 **约束限制**：不涉及。
    * name  **参数解释**：节点的镜像名称，如果os字段不设置才取此字段的值。 **约束限制**：不涉及。
    * imageId  **参数解释**：节点的镜像ID。 **约束限制**：不涉及。
    * imageType  **参数解释**：节点的镜像类型。 **约束限制**：不涉及。
    * runtime  **参数解释**：节点的容器运行时。 **约束限制**：不涉及。 **取值范围**：只能是[docker, containerd]其中一个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'os' => 'string',
            'name' => 'string',
            'imageId' => 'string',
            'imageType' => 'string',
            'runtime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * os  **参数解释**：节点的镜像名称，如果不设置则取name字段的值 **约束限制**：不涉及。
    * name  **参数解释**：节点的镜像名称，如果os字段不设置才取此字段的值。 **约束限制**：不涉及。
    * imageId  **参数解释**：节点的镜像ID。 **约束限制**：不涉及。
    * imageType  **参数解释**：节点的镜像类型。 **约束限制**：不涉及。
    * runtime  **参数解释**：节点的容器运行时。 **约束限制**：不涉及。 **取值范围**：只能是[docker, containerd]其中一个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'os' => null,
        'name' => null,
        'imageId' => null,
        'imageType' => null,
        'runtime' => null
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
    * os  **参数解释**：节点的镜像名称，如果不设置则取name字段的值 **约束限制**：不涉及。
    * name  **参数解释**：节点的镜像名称，如果os字段不设置才取此字段的值。 **约束限制**：不涉及。
    * imageId  **参数解释**：节点的镜像ID。 **约束限制**：不涉及。
    * imageType  **参数解释**：节点的镜像类型。 **约束限制**：不涉及。
    * runtime  **参数解释**：节点的容器运行时。 **约束限制**：不涉及。 **取值范围**：只能是[docker, containerd]其中一个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'os' => 'os',
            'name' => 'name',
            'imageId' => 'imageId',
            'imageType' => 'imageType',
            'runtime' => 'runtime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * os  **参数解释**：节点的镜像名称，如果不设置则取name字段的值 **约束限制**：不涉及。
    * name  **参数解释**：节点的镜像名称，如果os字段不设置才取此字段的值。 **约束限制**：不涉及。
    * imageId  **参数解释**：节点的镜像ID。 **约束限制**：不涉及。
    * imageType  **参数解释**：节点的镜像类型。 **约束限制**：不涉及。
    * runtime  **参数解释**：节点的容器运行时。 **约束限制**：不涉及。 **取值范围**：只能是[docker, containerd]其中一个。
    *
    * @var string[]
    */
    protected static $setters = [
            'os' => 'setOs',
            'name' => 'setName',
            'imageId' => 'setImageId',
            'imageType' => 'setImageType',
            'runtime' => 'setRuntime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * os  **参数解释**：节点的镜像名称，如果不设置则取name字段的值 **约束限制**：不涉及。
    * name  **参数解释**：节点的镜像名称，如果os字段不设置才取此字段的值。 **约束限制**：不涉及。
    * imageId  **参数解释**：节点的镜像ID。 **约束限制**：不涉及。
    * imageType  **参数解释**：节点的镜像类型。 **约束限制**：不涉及。
    * runtime  **参数解释**：节点的容器运行时。 **约束限制**：不涉及。 **取值范围**：只能是[docker, containerd]其中一个。
    *
    * @var string[]
    */
    protected static $getters = [
            'os' => 'getOs',
            'name' => 'getName',
            'imageId' => 'getImageId',
            'imageType' => 'getImageType',
            'runtime' => 'getRuntime'
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
    const RUNTIME_DOCKER = 'docker';
    const RUNTIME_CONTAINERD = 'containerd';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuntimeAllowableValues()
    {
        return [
            self::RUNTIME_DOCKER,
            self::RUNTIME_CONTAINERD,
        ];
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
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRuntimeAllowableValues();
                if (!is_null($this->container['runtime']) && !in_array($this->container['runtime'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runtime', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets os
    *  **参数解释**：节点的镜像名称，如果不设置则取name字段的值 **约束限制**：不涉及。
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os **参数解释**：节点的镜像名称，如果不设置则取name字段的值 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：节点的镜像名称，如果os字段不设置才取此字段的值。 **约束限制**：不涉及。
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
    * @param string|null $name **参数解释**：节点的镜像名称，如果os字段不设置才取此字段的值。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**：节点的镜像ID。 **约束限制**：不涉及。
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释**：节点的镜像ID。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**：节点的镜像类型。 **约束限制**：不涉及。
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释**：节点的镜像类型。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets runtime
    *  **参数解释**：节点的容器运行时。 **约束限制**：不涉及。 **取值范围**：只能是[docker, containerd]其中一个。
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime **参数解释**：节点的容器运行时。 **约束限制**：不涉及。 **取值范围**：只能是[docker, containerd]其中一个。
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
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

