<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AffinityOS implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AffinityOS';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：操作系统名称。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id, 裸金属规格该字段不为空。 **取值范围**：不涉及。
    * preferred  **参数解释**：是否优选。 **取值范围**：不涉及。
    * eos  **参数解释**：操作系统是否即将停止服务, end of service。 **取值范围**：不涉及。
    * offline  **参数解释**：操作系统是否下线。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'imageId' => 'string',
            'preferred' => 'bool',
            'eos' => 'bool',
            'offline' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：操作系统名称。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id, 裸金属规格该字段不为空。 **取值范围**：不涉及。
    * preferred  **参数解释**：是否优选。 **取值范围**：不涉及。
    * eos  **参数解释**：操作系统是否即将停止服务, end of service。 **取值范围**：不涉及。
    * offline  **参数解释**：操作系统是否下线。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'imageId' => null,
        'preferred' => null,
        'eos' => null,
        'offline' => null
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
    * name  **参数解释**：操作系统名称。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id, 裸金属规格该字段不为空。 **取值范围**：不涉及。
    * preferred  **参数解释**：是否优选。 **取值范围**：不涉及。
    * eos  **参数解释**：操作系统是否即将停止服务, end of service。 **取值范围**：不涉及。
    * offline  **参数解释**：操作系统是否下线。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'imageId' => 'imageId',
            'preferred' => 'preferred',
            'eos' => 'eos',
            'offline' => 'offline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：操作系统名称。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id, 裸金属规格该字段不为空。 **取值范围**：不涉及。
    * preferred  **参数解释**：是否优选。 **取值范围**：不涉及。
    * eos  **参数解释**：操作系统是否即将停止服务, end of service。 **取值范围**：不涉及。
    * offline  **参数解释**：操作系统是否下线。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'imageId' => 'setImageId',
            'preferred' => 'setPreferred',
            'eos' => 'setEos',
            'offline' => 'setOffline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：操作系统名称。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id, 裸金属规格该字段不为空。 **取值范围**：不涉及。
    * preferred  **参数解释**：是否优选。 **取值范围**：不涉及。
    * eos  **参数解释**：操作系统是否即将停止服务, end of service。 **取值范围**：不涉及。
    * offline  **参数解释**：操作系统是否下线。 **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'imageId' => 'getImageId',
            'preferred' => 'getPreferred',
            'eos' => 'getEos',
            'offline' => 'getOffline'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['preferred'] = isset($data['preferred']) ? $data['preferred'] : null;
        $this->container['eos'] = isset($data['eos']) ? $data['eos'] : null;
        $this->container['offline'] = isset($data['offline']) ? $data['offline'] : null;
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
    *  **参数解释**：操作系统名称。 **取值范围**：不涉及。
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
    * @param string $name **参数解释**：操作系统名称。 **取值范围**：不涉及。
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
    *  **参数解释**：操作系统镜像id, 裸金属规格该字段不为空。 **取值范围**：不涉及。
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
    * @param string|null $imageId **参数解释**：操作系统镜像id, 裸金属规格该字段不为空。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets preferred
    *  **参数解释**：是否优选。 **取值范围**：不涉及。
    *
    * @return bool|null
    */
    public function getPreferred()
    {
        return $this->container['preferred'];
    }

    /**
    * Sets preferred
    *
    * @param bool|null $preferred **参数解释**：是否优选。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPreferred($preferred)
    {
        $this->container['preferred'] = $preferred;
        return $this;
    }

    /**
    * Gets eos
    *  **参数解释**：操作系统是否即将停止服务, end of service。 **取值范围**：不涉及。
    *
    * @return bool|null
    */
    public function getEos()
    {
        return $this->container['eos'];
    }

    /**
    * Sets eos
    *
    * @param bool|null $eos **参数解释**：操作系统是否即将停止服务, end of service。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEos($eos)
    {
        $this->container['eos'] = $eos;
        return $this;
    }

    /**
    * Gets offline
    *  **参数解释**：操作系统是否下线。 **取值范围**：不涉及
    *
    * @return bool|null
    */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
    * Sets offline
    *
    * @param bool|null $offline **参数解释**：操作系统是否下线。 **取值范围**：不涉及
    *
    * @return $this
    */
    public function setOffline($offline)
    {
        $this->container['offline'] = $offline;
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

