<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDataImageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDataImageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目；取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * imageUrl  OBS桶中外部镜像文件地址。格式为<OBS桶名>:<OBS镜像文件名称>。 此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小数据盘大小。取值范围40-2048GB。
    * name  镜像名称。
    * osType  操作系统类型。只能是Windows、Linux二者之一，默认Linux。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cmkId' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'imageTags' => '\HuaweiCloud\SDK\Ims\V2\Model\ImageTag[]',
            'imageUrl' => 'string',
            'minDisk' => 'int',
            'name' => 'string',
            'osType' => 'string',
            'tags' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目；取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * imageUrl  OBS桶中外部镜像文件地址。格式为<OBS桶名>:<OBS镜像文件名称>。 此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小数据盘大小。取值范围40-2048GB。
    * name  镜像名称。
    * osType  操作系统类型。只能是Windows、Linux二者之一，默认Linux。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cmkId' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'imageTags' => null,
        'imageUrl' => null,
        'minDisk' => 'int32',
        'name' => null,
        'osType' => null,
        'tags' => null
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
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目；取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * imageUrl  OBS桶中外部镜像文件地址。格式为<OBS桶名>:<OBS镜像文件名称>。 此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小数据盘大小。取值范围40-2048GB。
    * name  镜像名称。
    * osType  操作系统类型。只能是Windows、Linux二者之一，默认Linux。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cmkId' => 'cmk_id',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageTags' => 'image_tags',
            'imageUrl' => 'image_url',
            'minDisk' => 'min_disk',
            'name' => 'name',
            'osType' => 'os_type',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目；取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * imageUrl  OBS桶中外部镜像文件地址。格式为<OBS桶名>:<OBS镜像文件名称>。 此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小数据盘大小。取值范围40-2048GB。
    * name  镜像名称。
    * osType  操作系统类型。只能是Windows、Linux二者之一，默认Linux。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $setters = [
            'cmkId' => 'setCmkId',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageTags' => 'setImageTags',
            'imageUrl' => 'setImageUrl',
            'minDisk' => 'setMinDisk',
            'name' => 'setName',
            'osType' => 'setOsType',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目；取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * imageUrl  OBS桶中外部镜像文件地址。格式为<OBS桶名>:<OBS镜像文件名称>。 此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小数据盘大小。取值范围40-2048GB。
    * name  镜像名称。
    * osType  操作系统类型。只能是Windows、Linux二者之一，默认Linux。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $getters = [
            'cmkId' => 'getCmkId',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageTags' => 'getImageTags',
            'imageUrl' => 'getImageUrl',
            'minDisk' => 'getMinDisk',
            'name' => 'getName',
            'osType' => 'getOsType',
            'tags' => 'getTags'
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
    const OS_TYPE_WINDOWS = 'Windows';
    const OS_TYPE_LINUX = 'Linux';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_WINDOWS,
            self::OS_TYPE_LINUX,
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
        $this->container['cmkId'] = isset($data['cmkId']) ? $data['cmkId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : '0';
        $this->container['imageTags'] = isset($data['imageTags']) ? $data['imageTags'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['minDisk'] = isset($data['minDisk']) ? $data['minDisk'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['imageUrl'] === null) {
            $invalidProperties[] = "'imageUrl' can't be null";
        }
        if ($this->container['minDisk'] === null) {
            $invalidProperties[] = "'minDisk' can't be null";
        }
            if (($this->container['minDisk'] > 2048)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be smaller than or equal to 2048.";
            }
            if (($this->container['minDisk'] < 40)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be bigger than or equal to 40.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
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
    * Gets cmkId
    *  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    *
    * @return string|null
    */
    public function getCmkId()
    {
        return $this->container['cmkId'];
    }

    /**
    * Sets cmkId
    *
    * @param string|null $cmkId 创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    *
    * @return $this
    */
    public function setCmkId($cmkId)
    {
        $this->container['cmkId'] = $cmkId;
        return $this;
    }

    /**
    * Gets description
    *  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目；取值为UUID，表示属于该UUID对应的企业项目。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目；取值为UUID，表示属于该UUID对应的企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageTags
    *  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\ImageTag[]|null
    */
    public function getImageTags()
    {
        return $this->container['imageTags'];
    }

    /**
    * Sets imageTags
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\ImageTag[]|null $imageTags 新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @return $this
    */
    public function setImageTags($imageTags)
    {
        $this->container['imageTags'] = $imageTags;
        return $this;
    }

    /**
    * Gets imageUrl
    *  OBS桶中外部镜像文件地址。格式为<OBS桶名>:<OBS镜像文件名称>。 此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    *
    * @return string
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string $imageUrl OBS桶中外部镜像文件地址。格式为<OBS桶名>:<OBS镜像文件名称>。 此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets minDisk
    *  最小数据盘大小。取值范围40-2048GB。
    *
    * @return int
    */
    public function getMinDisk()
    {
        return $this->container['minDisk'];
    }

    /**
    * Sets minDisk
    *
    * @param int $minDisk 最小数据盘大小。取值范围40-2048GB。
    *
    * @return $this
    */
    public function setMinDisk($minDisk)
    {
        $this->container['minDisk'] = $minDisk;
        return $this;
    }

    /**
    * Gets name
    *  镜像名称。
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
    * @param string $name 镜像名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型。只能是Windows、Linux二者之一，默认Linux。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型。只能是Windows、Linux二者之一，默认Linux。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets tags
    *  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

