<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectImageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectImageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageName  **参数解释**： 镜像名称 **约束限制**: 不涉及 **取值范围**： 字符长度1-256位 **默认取值**: 不涉及
    * imageVersion  **参数解释**： 镜像版本 **约束限制**: 不涉及 **取值范围**： 字符长度0-64位 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像  **默认取值**: custom
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **约束限制**: 不涉及 **取值范围**： 最少1条，最多50条 **默认取值**: 不涉及
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **约束限制**: 不涉及 **取值范围**： 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'protectDirectoryInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectDirectoryInfo[]',
            'excludeFileTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageName  **参数解释**： 镜像名称 **约束限制**: 不涉及 **取值范围**： 字符长度1-256位 **默认取值**: 不涉及
    * imageVersion  **参数解释**： 镜像版本 **约束限制**: 不涉及 **取值范围**： 字符长度0-64位 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像  **默认取值**: custom
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **约束限制**: 不涉及 **取值范围**： 最少1条，最多50条 **默认取值**: 不涉及
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **约束限制**: 不涉及 **取值范围**： 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'protectDirectoryInfoList' => null,
        'excludeFileTypes' => null
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
    * imageName  **参数解释**： 镜像名称 **约束限制**: 不涉及 **取值范围**： 字符长度1-256位 **默认取值**: 不涉及
    * imageVersion  **参数解释**： 镜像版本 **约束限制**: 不涉及 **取值范围**： 字符长度0-64位 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像  **默认取值**: custom
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **约束限制**: 不涉及 **取值范围**： 最少1条，最多50条 **默认取值**: 不涉及
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **约束限制**: 不涉及 **取值范围**： 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'protectDirectoryInfoList' => 'protect_directory_info_list',
            'excludeFileTypes' => 'exclude_file_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageName  **参数解释**： 镜像名称 **约束限制**: 不涉及 **取值范围**： 字符长度1-256位 **默认取值**: 不涉及
    * imageVersion  **参数解释**： 镜像版本 **约束限制**: 不涉及 **取值范围**： 字符长度0-64位 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像  **默认取值**: custom
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **约束限制**: 不涉及 **取值范围**： 最少1条，最多50条 **默认取值**: 不涉及
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **约束限制**: 不涉及 **取值范围**： 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'protectDirectoryInfoList' => 'setProtectDirectoryInfoList',
            'excludeFileTypes' => 'setExcludeFileTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageName  **参数解释**： 镜像名称 **约束限制**: 不涉及 **取值范围**： 字符长度1-256位 **默认取值**: 不涉及
    * imageVersion  **参数解释**： 镜像版本 **约束限制**: 不涉及 **取值范围**： 字符长度0-64位 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像  **默认取值**: custom
    * protectDirectoryInfoList  **参数解释**： 防护目录信息 **约束限制**: 不涉及 **取值范围**： 最少1条，最多50条 **默认取值**: 不涉及
    * excludeFileTypes  **参数解释**： 防护排除的文件类型列表 **约束限制**: 不涉及 **取值范围**： 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'protectDirectoryInfoList' => 'getProtectDirectoryInfoList',
            'excludeFileTypes' => 'getExcludeFileTypes'
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['protectDirectoryInfoList'] = isset($data['protectDirectoryInfoList']) ? $data['protectDirectoryInfoList'] : null;
        $this->container['excludeFileTypes'] = isset($data['excludeFileTypes']) ? $data['excludeFileTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageName'] === null) {
            $invalidProperties[] = "'imageName' can't be null";
        }
            if ((mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && !preg_match("/^registry|local|custom$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^registry|local|custom$/.";
            }
        if ($this->container['protectDirectoryInfoList'] === null) {
            $invalidProperties[] = "'protectDirectoryInfoList' can't be null";
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
    * Gets imageName
    *  **参数解释**： 镜像名称 **约束限制**: 不涉及 **取值范围**： 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string $imageName **参数解释**： 镜像名称 **约束限制**: 不涉及 **取值范围**： 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释**： 镜像版本 **约束限制**: 不涉及 **取值范围**： 字符长度0-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion **参数解释**： 镜像版本 **约束限制**: 不涉及 **取值范围**： 字符长度0-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像  **默认取值**: custom
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
    * @param string|null $imageType **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - registry 仓库镜像 - local 本地镜像 - custom 自定义镜像  **默认取值**: custom
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets protectDirectoryInfoList
    *  **参数解释**： 防护目录信息 **约束限制**: 不涉及 **取值范围**： 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectDirectoryInfo[]
    */
    public function getProtectDirectoryInfoList()
    {
        return $this->container['protectDirectoryInfoList'];
    }

    /**
    * Sets protectDirectoryInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectDirectoryInfo[] $protectDirectoryInfoList **参数解释**： 防护目录信息 **约束限制**: 不涉及 **取值范围**： 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectDirectoryInfoList($protectDirectoryInfoList)
    {
        $this->container['protectDirectoryInfoList'] = $protectDirectoryInfoList;
        return $this;
    }

    /**
    * Gets excludeFileTypes
    *  **参数解释**： 防护排除的文件类型列表 **约束限制**: 不涉及 **取值范围**： 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getExcludeFileTypes()
    {
        return $this->container['excludeFileTypes'];
    }

    /**
    * Sets excludeFileTypes
    *
    * @param string[]|null $excludeFileTypes **参数解释**： 防护排除的文件类型列表 **约束限制**: 不涉及 **取值范围**： 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExcludeFileTypes($excludeFileTypes)
    {
        $this->container['excludeFileTypes'] = $excludeFileTypes;
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

