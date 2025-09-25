<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddImageWhiteListsRequestBodyImageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddImageWhiteListsRequestBody_image_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 仓库镜像id **约束限制**： 不涉及 **取值范围**： 最小值1，最大值9223372036854775807 **默认取值**： 不涉及
    * imageId  **参数解释**： 本地镜像id **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * imageName  **参数解释**： 镜像名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像。 - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'imageId' => 'string',
            'imageName' => 'string',
            'imageType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 仓库镜像id **约束限制**： 不涉及 **取值范围**： 最小值1，最大值9223372036854775807 **默认取值**： 不涉及
    * imageId  **参数解释**： 本地镜像id **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * imageName  **参数解释**： 镜像名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像。 - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'imageId' => null,
        'imageName' => null,
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
    * id  **参数解释**： 仓库镜像id **约束限制**： 不涉及 **取值范围**： 最小值1，最大值9223372036854775807 **默认取值**： 不涉及
    * imageId  **参数解释**： 本地镜像id **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * imageName  **参数解释**： 镜像名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像。 - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'imageType' => 'image_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 仓库镜像id **约束限制**： 不涉及 **取值范围**： 最小值1，最大值9223372036854775807 **默认取值**： 不涉及
    * imageId  **参数解释**： 本地镜像id **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * imageName  **参数解释**： 镜像名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像。 - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'imageType' => 'setImageType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 仓库镜像id **约束限制**： 不涉及 **取值范围**： 最小值1，最大值9223372036854775807 **默认取值**： 不涉及
    * imageId  **参数解释**： 本地镜像id **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    * imageName  **参数解释**： 镜像名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像。 - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
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
            if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageType']) && !preg_match("/^local_image|private_image|shared_image|instance_image|harbor|jfrog$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^local_image|private_image|shared_image|instance_image|harbor|jfrog$/.";
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
    * Gets id
    *  **参数解释**： 仓库镜像id **约束限制**： 不涉及 **取值范围**： 最小值1，最大值9223372036854775807 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释**： 仓库镜像id **约束限制**： 不涉及 **取值范围**： 最小值1，最大值9223372036854775807 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**： 本地镜像id **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
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
    * @param string|null $imageId **参数解释**： 本地镜像id **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**： 镜像名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释**： 镜像名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像。 - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
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
    * @param string|null $imageType **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**: - local_image：本地镜像。 - private_image：私有镜像仓库。 - shared_image：共享镜像仓库。 - instance_image：企业仓库。 - harbor: harbor仓库。 - jfrog : jfrog仓库。  **默认取值**: 不涉及
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

