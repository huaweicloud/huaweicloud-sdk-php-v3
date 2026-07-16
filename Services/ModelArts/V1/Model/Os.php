<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Os implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Os';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：操作系统名称和版本，如EulorOS 2.5。指定私有镜像时可不指定。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id。 **取值范围**：不涉及。
    * imageType  **参数解释**：操作系统镜像类型。设置私有镜像时必须指定。默认为预置镜像，无需指定该字段。 **取值范围**：可选值如下： - private：私有镜像 - \"\"：不指定类型即预置镜像。
    * autoMatch  **参数解释**：操作系统镜像自动匹配配置。当配置该参数时将会自动选择最优镜像，同时该参数会自动清空。 **取值范围**：操作系统名称和版本，如EulorOS 2.5。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'imageId' => 'string',
            'imageType' => 'string',
            'autoMatch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：操作系统名称和版本，如EulorOS 2.5。指定私有镜像时可不指定。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id。 **取值范围**：不涉及。
    * imageType  **参数解释**：操作系统镜像类型。设置私有镜像时必须指定。默认为预置镜像，无需指定该字段。 **取值范围**：可选值如下： - private：私有镜像 - \"\"：不指定类型即预置镜像。
    * autoMatch  **参数解释**：操作系统镜像自动匹配配置。当配置该参数时将会自动选择最优镜像，同时该参数会自动清空。 **取值范围**：操作系统名称和版本，如EulorOS 2.5。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'imageId' => null,
        'imageType' => null,
        'autoMatch' => null
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
    * name  **参数解释**：操作系统名称和版本，如EulorOS 2.5。指定私有镜像时可不指定。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id。 **取值范围**：不涉及。
    * imageType  **参数解释**：操作系统镜像类型。设置私有镜像时必须指定。默认为预置镜像，无需指定该字段。 **取值范围**：可选值如下： - private：私有镜像 - \"\"：不指定类型即预置镜像。
    * autoMatch  **参数解释**：操作系统镜像自动匹配配置。当配置该参数时将会自动选择最优镜像，同时该参数会自动清空。 **取值范围**：操作系统名称和版本，如EulorOS 2.5。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'imageId' => 'imageId',
            'imageType' => 'imageType',
            'autoMatch' => 'autoMatch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：操作系统名称和版本，如EulorOS 2.5。指定私有镜像时可不指定。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id。 **取值范围**：不涉及。
    * imageType  **参数解释**：操作系统镜像类型。设置私有镜像时必须指定。默认为预置镜像，无需指定该字段。 **取值范围**：可选值如下： - private：私有镜像 - \"\"：不指定类型即预置镜像。
    * autoMatch  **参数解释**：操作系统镜像自动匹配配置。当配置该参数时将会自动选择最优镜像，同时该参数会自动清空。 **取值范围**：操作系统名称和版本，如EulorOS 2.5。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'imageId' => 'setImageId',
            'imageType' => 'setImageType',
            'autoMatch' => 'setAutoMatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：操作系统名称和版本，如EulorOS 2.5。指定私有镜像时可不指定。 **取值范围**：不涉及。
    * imageId  **参数解释**：操作系统镜像id。 **取值范围**：不涉及。
    * imageType  **参数解释**：操作系统镜像类型。设置私有镜像时必须指定。默认为预置镜像，无需指定该字段。 **取值范围**：可选值如下： - private：私有镜像 - \"\"：不指定类型即预置镜像。
    * autoMatch  **参数解释**：操作系统镜像自动匹配配置。当配置该参数时将会自动选择最优镜像，同时该参数会自动清空。 **取值范围**：操作系统名称和版本，如EulorOS 2.5。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'imageId' => 'getImageId',
            'imageType' => 'getImageType',
            'autoMatch' => 'getAutoMatch'
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
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['autoMatch'] = isset($data['autoMatch']) ? $data['autoMatch'] : null;
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
    * Gets name
    *  **参数解释**：操作系统名称和版本，如EulorOS 2.5。指定私有镜像时可不指定。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：操作系统名称和版本，如EulorOS 2.5。指定私有镜像时可不指定。 **取值范围**：不涉及。
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
    *  **参数解释**：操作系统镜像id。 **取值范围**：不涉及。
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
    * @param string|null $imageId **参数解释**：操作系统镜像id。 **取值范围**：不涉及。
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
    *  **参数解释**：操作系统镜像类型。设置私有镜像时必须指定。默认为预置镜像，无需指定该字段。 **取值范围**：可选值如下： - private：私有镜像 - \"\"：不指定类型即预置镜像。
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
    * @param string|null $imageType **参数解释**：操作系统镜像类型。设置私有镜像时必须指定。默认为预置镜像，无需指定该字段。 **取值范围**：可选值如下： - private：私有镜像 - \"\"：不指定类型即预置镜像。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets autoMatch
    *  **参数解释**：操作系统镜像自动匹配配置。当配置该参数时将会自动选择最优镜像，同时该参数会自动清空。 **取值范围**：操作系统名称和版本，如EulorOS 2.5。
    *
    * @return string|null
    */
    public function getAutoMatch()
    {
        return $this->container['autoMatch'];
    }

    /**
    * Sets autoMatch
    *
    * @param string|null $autoMatch **参数解释**：操作系统镜像自动匹配配置。当配置该参数时将会自动选择最优镜像，同时该参数会自动清空。 **取值范围**：操作系统名称和版本，如EulorOS 2.5。
    *
    * @return $this
    */
    public function setAutoMatch($autoMatch)
    {
        $this->container['autoMatch'] = $autoMatch;
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

