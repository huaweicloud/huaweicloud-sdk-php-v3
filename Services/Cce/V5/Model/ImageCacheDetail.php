<?php

namespace HuaweiCloud\SDK\Cce\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageCacheDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageCacheDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  镜像缓存名称。
    * id  镜像缓存ID。
    * createdAt  镜像缓存创建时间戳。
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  镜像缓存后端对应的存储盘大小，单位GiB。
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    * status  **参数解释：** 镜像缓存的状态。 **约束限制：** 不涉及 **取值范围：** - Available： 可用状态，表示当前镜像缓存正常可用。 - Unavailable：不可用，表示镜像缓存状态异常或过期，不可使用。 - Creating：创建中，表示镜像缓存正在创建中。 - Deleting：删除中，表示镜像缓存正在删除中。 - Failed：创建失败，表示镜像缓存创建失败。 **默认取值：** 不涉及
    * message  镜像缓存创建失败或异常的错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'createdAt' => '\DateTime',
            'images' => 'string[]',
            'imageCacheSize' => 'int',
            'retentionDays' => 'int',
            'buildingConfig' => '\HuaweiCloud\SDK\Cce\V5\Model\ImageCacheBuildingConfig',
            'status' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  镜像缓存名称。
    * id  镜像缓存ID。
    * createdAt  镜像缓存创建时间戳。
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  镜像缓存后端对应的存储盘大小，单位GiB。
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    * status  **参数解释：** 镜像缓存的状态。 **约束限制：** 不涉及 **取值范围：** - Available： 可用状态，表示当前镜像缓存正常可用。 - Unavailable：不可用，表示镜像缓存状态异常或过期，不可使用。 - Creating：创建中，表示镜像缓存正在创建中。 - Deleting：删除中，表示镜像缓存正在删除中。 - Failed：创建失败，表示镜像缓存创建失败。 **默认取值：** 不涉及
    * message  镜像缓存创建失败或异常的错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'createdAt' => 'date',
        'images' => null,
        'imageCacheSize' => 'int32',
        'retentionDays' => 'int32',
        'buildingConfig' => null,
        'status' => null,
        'message' => null
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
    * name  镜像缓存名称。
    * id  镜像缓存ID。
    * createdAt  镜像缓存创建时间戳。
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  镜像缓存后端对应的存储盘大小，单位GiB。
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    * status  **参数解释：** 镜像缓存的状态。 **约束限制：** 不涉及 **取值范围：** - Available： 可用状态，表示当前镜像缓存正常可用。 - Unavailable：不可用，表示镜像缓存状态异常或过期，不可使用。 - Creating：创建中，表示镜像缓存正在创建中。 - Deleting：删除中，表示镜像缓存正在删除中。 - Failed：创建失败，表示镜像缓存创建失败。 **默认取值：** 不涉及
    * message  镜像缓存创建失败或异常的错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'createdAt' => 'created_at',
            'images' => 'images',
            'imageCacheSize' => 'image_cache_size',
            'retentionDays' => 'retention_days',
            'buildingConfig' => 'building_config',
            'status' => 'status',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  镜像缓存名称。
    * id  镜像缓存ID。
    * createdAt  镜像缓存创建时间戳。
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  镜像缓存后端对应的存储盘大小，单位GiB。
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    * status  **参数解释：** 镜像缓存的状态。 **约束限制：** 不涉及 **取值范围：** - Available： 可用状态，表示当前镜像缓存正常可用。 - Unavailable：不可用，表示镜像缓存状态异常或过期，不可使用。 - Creating：创建中，表示镜像缓存正在创建中。 - Deleting：删除中，表示镜像缓存正在删除中。 - Failed：创建失败，表示镜像缓存创建失败。 **默认取值：** 不涉及
    * message  镜像缓存创建失败或异常的错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'createdAt' => 'setCreatedAt',
            'images' => 'setImages',
            'imageCacheSize' => 'setImageCacheSize',
            'retentionDays' => 'setRetentionDays',
            'buildingConfig' => 'setBuildingConfig',
            'status' => 'setStatus',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  镜像缓存名称。
    * id  镜像缓存ID。
    * createdAt  镜像缓存创建时间戳。
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  镜像缓存后端对应的存储盘大小，单位GiB。
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    * status  **参数解释：** 镜像缓存的状态。 **约束限制：** 不涉及 **取值范围：** - Available： 可用状态，表示当前镜像缓存正常可用。 - Unavailable：不可用，表示镜像缓存状态异常或过期，不可使用。 - Creating：创建中，表示镜像缓存正在创建中。 - Deleting：删除中，表示镜像缓存正在删除中。 - Failed：创建失败，表示镜像缓存创建失败。 **默认取值：** 不涉及
    * message  镜像缓存创建失败或异常的错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'createdAt' => 'getCreatedAt',
            'images' => 'getImages',
            'imageCacheSize' => 'getImageCacheSize',
            'retentionDays' => 'getRetentionDays',
            'buildingConfig' => 'getBuildingConfig',
            'status' => 'getStatus',
            'message' => 'getMessage'
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
    const STATUS_AVAILABLE = 'Available';
    const STATUS_UNAVAILABLE = 'Unavailable';
    const STATUS_CREATING = 'Creating';
    const STATUS_DELETING = 'Deleting';
    const STATUS_FAILED = 'Failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AVAILABLE,
            self::STATUS_UNAVAILABLE,
            self::STATUS_CREATING,
            self::STATUS_DELETING,
            self::STATUS_FAILED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['imageCacheSize'] = isset($data['imageCacheSize']) ? $data['imageCacheSize'] : null;
        $this->container['retentionDays'] = isset($data['retentionDays']) ? $data['retentionDays'] : null;
        $this->container['buildingConfig'] = isset($data['buildingConfig']) ? $data['buildingConfig'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-z]([a-z0-9-]*[a-z0-9])?$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z]([a-z0-9-]*[a-z0-9])?$/.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['images'] === null) {
            $invalidProperties[] = "'images' can't be null";
        }
        if ($this->container['imageCacheSize'] === null) {
            $invalidProperties[] = "'imageCacheSize' can't be null";
        }
            if (($this->container['imageCacheSize'] > 400)) {
                $invalidProperties[] = "invalid value for 'imageCacheSize', must be smaller than or equal to 400.";
            }
            if (($this->container['imageCacheSize'] < 20)) {
                $invalidProperties[] = "invalid value for 'imageCacheSize', must be bigger than or equal to 20.";
            }
        if ($this->container['retentionDays'] === null) {
            $invalidProperties[] = "'retentionDays' can't be null";
        }
            if (($this->container['retentionDays'] > 10000)) {
                $invalidProperties[] = "invalid value for 'retentionDays', must be smaller than or equal to 10000.";
            }
            if (($this->container['retentionDays'] < 0)) {
                $invalidProperties[] = "invalid value for 'retentionDays', must be bigger than or equal to 0.";
            }
        if ($this->container['buildingConfig'] === null) {
            $invalidProperties[] = "'buildingConfig' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 10240)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
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
    *  镜像缓存名称。
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
    * @param string $name 镜像缓存名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  镜像缓存ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 镜像缓存ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createdAt
    *  镜像缓存创建时间戳。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 镜像缓存创建时间戳。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets images
    *  镜像缓存中的容器镜像列表。
    *
    * @return string[]
    */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
    * Sets images
    *
    * @param string[] $images 镜像缓存中的容器镜像列表。
    *
    * @return $this
    */
    public function setImages($images)
    {
        $this->container['images'] = $images;
        return $this;
    }

    /**
    * Gets imageCacheSize
    *  镜像缓存后端对应的存储盘大小，单位GiB。
    *
    * @return int
    */
    public function getImageCacheSize()
    {
        return $this->container['imageCacheSize'];
    }

    /**
    * Sets imageCacheSize
    *
    * @param int $imageCacheSize 镜像缓存后端对应的存储盘大小，单位GiB。
    *
    * @return $this
    */
    public function setImageCacheSize($imageCacheSize)
    {
        $this->container['imageCacheSize'] = $imageCacheSize;
        return $this;
    }

    /**
    * Gets retentionDays
    *  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    *
    * @return int
    */
    public function getRetentionDays()
    {
        return $this->container['retentionDays'];
    }

    /**
    * Sets retentionDays
    *
    * @param int $retentionDays **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    *
    * @return $this
    */
    public function setRetentionDays($retentionDays)
    {
        $this->container['retentionDays'] = $retentionDays;
        return $this;
    }

    /**
    * Gets buildingConfig
    *  buildingConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V5\Model\ImageCacheBuildingConfig
    */
    public function getBuildingConfig()
    {
        return $this->container['buildingConfig'];
    }

    /**
    * Sets buildingConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V5\Model\ImageCacheBuildingConfig $buildingConfig buildingConfig
    *
    * @return $this
    */
    public function setBuildingConfig($buildingConfig)
    {
        $this->container['buildingConfig'] = $buildingConfig;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 镜像缓存的状态。 **约束限制：** 不涉及 **取值范围：** - Available： 可用状态，表示当前镜像缓存正常可用。 - Unavailable：不可用，表示镜像缓存状态异常或过期，不可使用。 - Creating：创建中，表示镜像缓存正在创建中。 - Deleting：删除中，表示镜像缓存正在删除中。 - Failed：创建失败，表示镜像缓存创建失败。 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释：** 镜像缓存的状态。 **约束限制：** 不涉及 **取值范围：** - Available： 可用状态，表示当前镜像缓存正常可用。 - Unavailable：不可用，表示镜像缓存状态异常或过期，不可使用。 - Creating：创建中，表示镜像缓存正在创建中。 - Deleting：删除中，表示镜像缓存正在删除中。 - Failed：创建失败，表示镜像缓存创建失败。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  镜像缓存创建失败或异常的错误信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 镜像缓存创建失败或异常的错误信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

