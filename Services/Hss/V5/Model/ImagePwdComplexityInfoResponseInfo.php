<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImagePwdComplexityInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImagePwdComplexityInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  **参数解释**: 镜像ID **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-256位
    * imageType  **参数解释**: 仓库镜像类型 **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * minLength  **参数解释**： 口令最小长度 **取值范围**： - true：是。 - false：否。
    * uppercaseLetter  **参数解释**： 大写字母 **取值范围**： - true：是。 - false：否。
    * lowercaseLetter  **参数解释**： 小写字母 **取值范围**： - true：是。 - false：否。
    * number  **参数解释**： 数字 **取值范围**： - true：是。 - false：否。
    * specialCharacter  **参数解释**： 特殊字符 **取值范围**： - true：是。 - false：否。
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'latestScanTime' => 'int',
            'minLength' => 'bool',
            'uppercaseLetter' => 'bool',
            'lowercaseLetter' => 'bool',
            'number' => 'bool',
            'specialCharacter' => 'bool',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  **参数解释**: 镜像ID **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-256位
    * imageType  **参数解释**: 仓库镜像类型 **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * minLength  **参数解释**： 口令最小长度 **取值范围**： - true：是。 - false：否。
    * uppercaseLetter  **参数解释**： 大写字母 **取值范围**： - true：是。 - false：否。
    * lowercaseLetter  **参数解释**： 小写字母 **取值范围**： - true：是。 - false：否。
    * number  **参数解释**： 数字 **取值范围**： - true：是。 - false：否。
    * specialCharacter  **参数解释**： 特殊字符 **取值范围**： - true：是。 - false：否。
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'latestScanTime' => 'int64',
        'minLength' => null,
        'uppercaseLetter' => null,
        'lowercaseLetter' => null,
        'number' => null,
        'specialCharacter' => null,
        'suggestion' => null
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
    * imageId  **参数解释**: 镜像ID **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-256位
    * imageType  **参数解释**: 仓库镜像类型 **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * minLength  **参数解释**： 口令最小长度 **取值范围**： - true：是。 - false：否。
    * uppercaseLetter  **参数解释**： 大写字母 **取值范围**： - true：是。 - false：否。
    * lowercaseLetter  **参数解释**： 小写字母 **取值范围**： - true：是。 - false：否。
    * number  **参数解释**： 数字 **取值范围**： - true：是。 - false：否。
    * specialCharacter  **参数解释**： 特殊字符 **取值范围**： - true：是。 - false：否。
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'latestScanTime' => 'latest_scan_time',
            'minLength' => 'min_length',
            'uppercaseLetter' => 'uppercase_letter',
            'lowercaseLetter' => 'lowercase_letter',
            'number' => 'number',
            'specialCharacter' => 'special_character',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  **参数解释**: 镜像ID **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-256位
    * imageType  **参数解释**: 仓库镜像类型 **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * minLength  **参数解释**： 口令最小长度 **取值范围**： - true：是。 - false：否。
    * uppercaseLetter  **参数解释**： 大写字母 **取值范围**： - true：是。 - false：否。
    * lowercaseLetter  **参数解释**： 小写字母 **取值范围**： - true：是。 - false：否。
    * number  **参数解释**： 数字 **取值范围**： - true：是。 - false：否。
    * specialCharacter  **参数解释**： 特殊字符 **取值范围**： - true：是。 - false：否。
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'latestScanTime' => 'setLatestScanTime',
            'minLength' => 'setMinLength',
            'uppercaseLetter' => 'setUppercaseLetter',
            'lowercaseLetter' => 'setLowercaseLetter',
            'number' => 'setNumber',
            'specialCharacter' => 'setSpecialCharacter',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  **参数解释**: 镜像ID **取值范围**: 字符长度0-128位
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-256位
    * imageType  **参数解释**: 仓库镜像类型 **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * minLength  **参数解释**： 口令最小长度 **取值范围**： - true：是。 - false：否。
    * uppercaseLetter  **参数解释**： 大写字母 **取值范围**： - true：是。 - false：否。
    * lowercaseLetter  **参数解释**： 小写字母 **取值范围**： - true：是。 - false：否。
    * number  **参数解释**： 数字 **取值范围**： - true：是。 - false：否。
    * specialCharacter  **参数解释**： 特殊字符 **取值范围**： - true：是。 - false：否。
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'latestScanTime' => 'getLatestScanTime',
            'minLength' => 'getMinLength',
            'uppercaseLetter' => 'getUppercaseLetter',
            'lowercaseLetter' => 'getLowercaseLetter',
            'number' => 'getNumber',
            'specialCharacter' => 'getSpecialCharacter',
            'suggestion' => 'getSuggestion'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['uppercaseLetter'] = isset($data['uppercaseLetter']) ? $data['uppercaseLetter'] : null;
        $this->container['lowercaseLetter'] = isset($data['lowercaseLetter']) ? $data['lowercaseLetter'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['specialCharacter'] = isset($data['specialCharacter']) ? $data['specialCharacter'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && !preg_match("/^.*$/", $this->container['imageId'])) {
                $invalidProperties[] = "invalid value for 'imageId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 65535)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) > 65534)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) < 0)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be bigger than or equal to 0.";
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
    * Gets imageId
    *  **参数解释**: 镜像ID **取值范围**: 字符长度0-128位
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
    * @param string|null $imageId **参数解释**: 镜像ID **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
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
    *  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-256位
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
    * @param string|null $imageVersion **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-256位
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
    *  **参数解释**: 仓库镜像类型 **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
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
    * @param string|null $imageType **参数解释**: 仓库镜像类型 **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getLatestScanTime()
    {
        return $this->container['latestScanTime'];
    }

    /**
    * Sets latestScanTime
    *
    * @param int|null $latestScanTime **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets minLength
    *  **参数解释**： 口令最小长度 **取值范围**： - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
    * Sets minLength
    *
    * @param bool|null $minLength **参数解释**： 口令最小长度 **取值范围**： - true：是。 - false：否。
    *
    * @return $this
    */
    public function setMinLength($minLength)
    {
        $this->container['minLength'] = $minLength;
        return $this;
    }

    /**
    * Gets uppercaseLetter
    *  **参数解释**： 大写字母 **取值范围**： - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getUppercaseLetter()
    {
        return $this->container['uppercaseLetter'];
    }

    /**
    * Sets uppercaseLetter
    *
    * @param bool|null $uppercaseLetter **参数解释**： 大写字母 **取值范围**： - true：是。 - false：否。
    *
    * @return $this
    */
    public function setUppercaseLetter($uppercaseLetter)
    {
        $this->container['uppercaseLetter'] = $uppercaseLetter;
        return $this;
    }

    /**
    * Gets lowercaseLetter
    *  **参数解释**： 小写字母 **取值范围**： - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getLowercaseLetter()
    {
        return $this->container['lowercaseLetter'];
    }

    /**
    * Sets lowercaseLetter
    *
    * @param bool|null $lowercaseLetter **参数解释**： 小写字母 **取值范围**： - true：是。 - false：否。
    *
    * @return $this
    */
    public function setLowercaseLetter($lowercaseLetter)
    {
        $this->container['lowercaseLetter'] = $lowercaseLetter;
        return $this;
    }

    /**
    * Gets number
    *  **参数解释**： 数字 **取值范围**： - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param bool|null $number **参数解释**： 数字 **取值范围**： - true：是。 - false：否。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets specialCharacter
    *  **参数解释**： 特殊字符 **取值范围**： - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getSpecialCharacter()
    {
        return $this->container['specialCharacter'];
    }

    /**
    * Sets specialCharacter
    *
    * @param bool|null $specialCharacter **参数解释**： 特殊字符 **取值范围**： - true：是。 - false：否。
    *
    * @return $this
    */
    public function setSpecialCharacter($specialCharacter)
    {
        $this->container['specialCharacter'] = $specialCharacter;
        return $this;
    }

    /**
    * Gets suggestion
    *  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

