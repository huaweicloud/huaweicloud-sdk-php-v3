<?php

namespace HuaweiCloud\SDK\Cce\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateImageCacheRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateImageCacheRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 镜像缓存名称。 **约束限制：** 不涉及 **取值范围：** 以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-128位，且不能以中划线(-)结尾。镜像缓存名称不可重复。 **默认取值：** 不涉及
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  **参数解释：** 镜像缓存后端对应的存储盘大小，单位GiB。缓存对象为解压后的镜像文件，建议镜像缓存大小不低于该缓存中所有容器镜像大小总和的3倍。 **约束限制：** 不涉及 **取值范围：** [20-400] **默认取值：** 20
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'images' => 'string[]',
            'imageCacheSize' => 'int',
            'retentionDays' => 'int',
            'buildingConfig' => '\HuaweiCloud\SDK\Cce\V5\Model\ImageCacheBuildingConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 镜像缓存名称。 **约束限制：** 不涉及 **取值范围：** 以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-128位，且不能以中划线(-)结尾。镜像缓存名称不可重复。 **默认取值：** 不涉及
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  **参数解释：** 镜像缓存后端对应的存储盘大小，单位GiB。缓存对象为解压后的镜像文件，建议镜像缓存大小不低于该缓存中所有容器镜像大小总和的3倍。 **约束限制：** 不涉及 **取值范围：** [20-400] **默认取值：** 20
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'images' => null,
        'imageCacheSize' => 'int32',
        'retentionDays' => 'int32',
        'buildingConfig' => null
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
    * name  **参数解释：** 镜像缓存名称。 **约束限制：** 不涉及 **取值范围：** 以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-128位，且不能以中划线(-)结尾。镜像缓存名称不可重复。 **默认取值：** 不涉及
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  **参数解释：** 镜像缓存后端对应的存储盘大小，单位GiB。缓存对象为解压后的镜像文件，建议镜像缓存大小不低于该缓存中所有容器镜像大小总和的3倍。 **约束限制：** 不涉及 **取值范围：** [20-400] **默认取值：** 20
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'images' => 'images',
            'imageCacheSize' => 'image_cache_size',
            'retentionDays' => 'retention_days',
            'buildingConfig' => 'building_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 镜像缓存名称。 **约束限制：** 不涉及 **取值范围：** 以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-128位，且不能以中划线(-)结尾。镜像缓存名称不可重复。 **默认取值：** 不涉及
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  **参数解释：** 镜像缓存后端对应的存储盘大小，单位GiB。缓存对象为解压后的镜像文件，建议镜像缓存大小不低于该缓存中所有容器镜像大小总和的3倍。 **约束限制：** 不涉及 **取值范围：** [20-400] **默认取值：** 20
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'images' => 'setImages',
            'imageCacheSize' => 'setImageCacheSize',
            'retentionDays' => 'setRetentionDays',
            'buildingConfig' => 'setBuildingConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 镜像缓存名称。 **约束限制：** 不涉及 **取值范围：** 以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-128位，且不能以中划线(-)结尾。镜像缓存名称不可重复。 **默认取值：** 不涉及
    * images  镜像缓存中的容器镜像列表。
    * imageCacheSize  **参数解释：** 镜像缓存后端对应的存储盘大小，单位GiB。缓存对象为解压后的镜像文件，建议镜像缓存大小不低于该缓存中所有容器镜像大小总和的3倍。 **约束限制：** 不涉及 **取值范围：** [20-400] **默认取值：** 20
    * retentionDays  **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
    * buildingConfig  buildingConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'images' => 'getImages',
            'imageCacheSize' => 'getImageCacheSize',
            'retentionDays' => 'getRetentionDays',
            'buildingConfig' => 'getBuildingConfig'
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
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['imageCacheSize'] = isset($data['imageCacheSize']) ? $data['imageCacheSize'] : null;
        $this->container['retentionDays'] = isset($data['retentionDays']) ? $data['retentionDays'] : null;
        $this->container['buildingConfig'] = isset($data['buildingConfig']) ? $data['buildingConfig'] : null;
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
        if ($this->container['images'] === null) {
            $invalidProperties[] = "'images' can't be null";
        }
            if (!is_null($this->container['imageCacheSize']) && ($this->container['imageCacheSize'] > 400)) {
                $invalidProperties[] = "invalid value for 'imageCacheSize', must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['imageCacheSize']) && ($this->container['imageCacheSize'] < 20)) {
                $invalidProperties[] = "invalid value for 'imageCacheSize', must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['retentionDays']) && ($this->container['retentionDays'] > 10000)) {
                $invalidProperties[] = "invalid value for 'retentionDays', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['retentionDays']) && ($this->container['retentionDays'] < 0)) {
                $invalidProperties[] = "invalid value for 'retentionDays', must be bigger than or equal to 0.";
            }
        if ($this->container['buildingConfig'] === null) {
            $invalidProperties[] = "'buildingConfig' can't be null";
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
    *  **参数解释：** 镜像缓存名称。 **约束限制：** 不涉及 **取值范围：** 以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-128位，且不能以中划线(-)结尾。镜像缓存名称不可重复。 **默认取值：** 不涉及
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
    * @param string $name **参数解释：** 镜像缓存名称。 **约束限制：** 不涉及 **取值范围：** 以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围1-128位，且不能以中划线(-)结尾。镜像缓存名称不可重复。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    *  **参数解释：** 镜像缓存后端对应的存储盘大小，单位GiB。缓存对象为解压后的镜像文件，建议镜像缓存大小不低于该缓存中所有容器镜像大小总和的3倍。 **约束限制：** 不涉及 **取值范围：** [20-400] **默认取值：** 20
    *
    * @return int|null
    */
    public function getImageCacheSize()
    {
        return $this->container['imageCacheSize'];
    }

    /**
    * Sets imageCacheSize
    *
    * @param int|null $imageCacheSize **参数解释：** 镜像缓存后端对应的存储盘大小，单位GiB。缓存对象为解压后的镜像文件，建议镜像缓存大小不低于该缓存中所有容器镜像大小总和的3倍。 **约束限制：** 不涉及 **取值范围：** [20-400] **默认取值：** 20
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
    * @return int|null
    */
    public function getRetentionDays()
    {
        return $this->container['retentionDays'];
    }

    /**
    * Sets retentionDays
    *
    * @param int|null $retentionDays **参数解释：** 镜像缓存有效的天数,不设置或值为0表示永久有效。镜像缓存到达有效期后自动过期并删除。 **约束限制：** 不涉及 **取值范围：** [0-10000] **默认取值：** 0
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

