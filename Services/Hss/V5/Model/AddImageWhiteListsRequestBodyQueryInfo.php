<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddImageWhiteListsRequestBodyQueryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddImageWhiteListsRequestBody_query_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageType' => null
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
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageType' => 'image_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'imageType' => 'setImageType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'imageType' => 'getImageType'
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
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && !preg_match("/^private_image|shared_image|instance_image|harbor|jfrog$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^private_image|shared_image|instance_image|harbor|jfrog$/.";
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
    * Gets imageType
    *  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
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
    * @param string|null $imageType **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
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

