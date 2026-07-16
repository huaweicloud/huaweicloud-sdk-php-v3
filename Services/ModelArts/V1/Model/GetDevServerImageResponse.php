<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDevServerImageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDevServerImageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arch  **参数解释**：服务器镜像架构类型。 **取值范围**： - ARM - X86
    * imageId  **参数解释**：服务器镜像ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * name  **参数解释**：服务器镜像名称。表示服务器镜像的名称。 **约束限制**：不涉及。 **取值范围**：1 - 256字符 **默认取值**：不涉及。
    * serverType  **参数解释**：服务器类型。 **取值范围**： - BMS：裸金属服务器 - ECS：弹性云服务器 - HPS：超节点服务器
    * status  **参数解释**：服务器镜像状态。 **取值范围**： - ACTIVE - INACTIVE
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'imageId' => 'string',
            'name' => 'string',
            'serverType' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  **参数解释**：服务器镜像架构类型。 **取值范围**： - ARM - X86
    * imageId  **参数解释**：服务器镜像ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * name  **参数解释**：服务器镜像名称。表示服务器镜像的名称。 **约束限制**：不涉及。 **取值范围**：1 - 256字符 **默认取值**：不涉及。
    * serverType  **参数解释**：服务器类型。 **取值范围**： - BMS：裸金属服务器 - ECS：弹性云服务器 - HPS：超节点服务器
    * status  **参数解释**：服务器镜像状态。 **取值范围**： - ACTIVE - INACTIVE
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => null,
        'imageId' => null,
        'name' => null,
        'serverType' => null,
        'status' => null
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
    * arch  **参数解释**：服务器镜像架构类型。 **取值范围**： - ARM - X86
    * imageId  **参数解释**：服务器镜像ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * name  **参数解释**：服务器镜像名称。表示服务器镜像的名称。 **约束限制**：不涉及。 **取值范围**：1 - 256字符 **默认取值**：不涉及。
    * serverType  **参数解释**：服务器类型。 **取值范围**： - BMS：裸金属服务器 - ECS：弹性云服务器 - HPS：超节点服务器
    * status  **参数解释**：服务器镜像状态。 **取值范围**： - ACTIVE - INACTIVE
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'imageId' => 'image_id',
            'name' => 'name',
            'serverType' => 'server_type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  **参数解释**：服务器镜像架构类型。 **取值范围**： - ARM - X86
    * imageId  **参数解释**：服务器镜像ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * name  **参数解释**：服务器镜像名称。表示服务器镜像的名称。 **约束限制**：不涉及。 **取值范围**：1 - 256字符 **默认取值**：不涉及。
    * serverType  **参数解释**：服务器类型。 **取值范围**： - BMS：裸金属服务器 - ECS：弹性云服务器 - HPS：超节点服务器
    * status  **参数解释**：服务器镜像状态。 **取值范围**： - ACTIVE - INACTIVE
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'imageId' => 'setImageId',
            'name' => 'setName',
            'serverType' => 'setServerType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  **参数解释**：服务器镜像架构类型。 **取值范围**： - ARM - X86
    * imageId  **参数解释**：服务器镜像ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * name  **参数解释**：服务器镜像名称。表示服务器镜像的名称。 **约束限制**：不涉及。 **取值范围**：1 - 256字符 **默认取值**：不涉及。
    * serverType  **参数解释**：服务器类型。 **取值范围**： - BMS：裸金属服务器 - ECS：弹性云服务器 - HPS：超节点服务器
    * status  **参数解释**：服务器镜像状态。 **取值范围**： - ACTIVE - INACTIVE
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'imageId' => 'getImageId',
            'name' => 'getName',
            'serverType' => 'getServerType',
            'status' => 'getStatus'
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
    const ARCH_ARM = 'ARM';
    const ARCH_X86 = 'X86';
    const SERVER_TYPE_BMS = 'BMS';
    const SERVER_TYPE_ECS = 'ECS';
    const SERVER_TYPE_HPS = 'HPS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getArchAllowableValues()
    {
        return [
            self::ARCH_ARM,
            self::ARCH_X86,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServerTypeAllowableValues()
    {
        return [
            self::SERVER_TYPE_BMS,
            self::SERVER_TYPE_ECS,
            self::SERVER_TYPE_HPS,
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
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getArchAllowableValues();
                if (!is_null($this->container['arch']) && !in_array($this->container['arch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'arch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getServerTypeAllowableValues();
                if (!is_null($this->container['serverType']) && !in_array($this->container['serverType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serverType', must be one of '%s'",
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
    * Gets arch
    *  **参数解释**：服务器镜像架构类型。 **取值范围**： - ARM - X86
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释**：服务器镜像架构类型。 **取值范围**： - ARM - X86
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**：服务器镜像ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
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
    * @param string|null $imageId **参数解释**：服务器镜像ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：服务器镜像名称。表示服务器镜像的名称。 **约束限制**：不涉及。 **取值范围**：1 - 256字符 **默认取值**：不涉及。
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
    * @param string|null $name **参数解释**：服务器镜像名称。表示服务器镜像的名称。 **约束限制**：不涉及。 **取值范围**：1 - 256字符 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets serverType
    *  **参数解释**：服务器类型。 **取值范围**： - BMS：裸金属服务器 - ECS：弹性云服务器 - HPS：超节点服务器
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType **参数解释**：服务器类型。 **取值范围**： - BMS：裸金属服务器 - ECS：弹性云服务器 - HPS：超节点服务器
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：服务器镜像状态。 **取值范围**： - ACTIVE - INACTIVE
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：服务器镜像状态。 **取值范围**： - ACTIVE - INACTIVE
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

