<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageWeakPwdListInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageWeakPwdListInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-128位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128位
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 字符长度0-32位
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统。
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 最小值0，最大值2147483647
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 字符长度0-128位
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageId' => 'string',
            'imageType' => 'string',
            'latestScanTime' => 'int',
            'userName' => 'string',
            'serviceType' => 'string',
            'duration' => 'int',
            'desensitizedWeakPasswords' => 'string',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-128位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128位
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 字符长度0-32位
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统。
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 最小值0，最大值2147483647
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 字符长度0-128位
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageId' => null,
        'imageType' => null,
        'latestScanTime' => 'int64',
        'userName' => null,
        'serviceType' => null,
        'duration' => 'int32',
        'desensitizedWeakPasswords' => null,
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
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-128位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128位
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 字符长度0-32位
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统。
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 最小值0，最大值2147483647
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 字符长度0-128位
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageId' => 'image_id',
            'imageType' => 'image_type',
            'latestScanTime' => 'latest_scan_time',
            'userName' => 'user_name',
            'serviceType' => 'service_type',
            'duration' => 'duration',
            'desensitizedWeakPasswords' => 'desensitized_weak_passwords',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-128位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128位
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 字符长度0-32位
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统。
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 最小值0，最大值2147483647
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 字符长度0-128位
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageId' => 'setImageId',
            'imageType' => 'setImageType',
            'latestScanTime' => 'setLatestScanTime',
            'userName' => 'setUserName',
            'serviceType' => 'setServiceType',
            'duration' => 'setDuration',
            'desensitizedWeakPasswords' => 'setDesensitizedWeakPasswords',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  **参数解释**: 组织名称（只有私有镜像和共享镜像有该字段，本地镜像没有） **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-128位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128位
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值2147483647
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 字符长度0-32位
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统。
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 最小值0，最大值2147483647
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 字符长度0-128位
    * suggestion  **参数解释**: 修改建议 **取值范围**: 字符长度0-65534位
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageId' => 'getImageId',
            'imageType' => 'getImageType',
            'latestScanTime' => 'getLatestScanTime',
            'userName' => 'getUserName',
            'serviceType' => 'getServiceType',
            'duration' => 'getDuration',
            'desensitizedWeakPasswords' => 'getDesensitizedWeakPasswords',
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['desensitizedWeakPasswords'] = isset($data['desensitizedWeakPasswords']) ? $data['desensitizedWeakPasswords'] : null;
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
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 32)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desensitizedWeakPasswords']) && (mb_strlen($this->container['desensitizedWeakPasswords']) > 128)) {
                $invalidProperties[] = "invalid value for 'desensitizedWeakPasswords', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['desensitizedWeakPasswords']) && (mb_strlen($this->container['desensitizedWeakPasswords']) < 0)) {
                $invalidProperties[] = "invalid value for 'desensitizedWeakPasswords', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-128位
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
    * @param string|null $imageVersion **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**: 镜像id **取值范围**: 字符长度0-128位
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
    * @param string|null $imageId **参数解释**: 镜像id **取值范围**: 字符长度0-128位
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
    *  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
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
    * @param string|null $imageType **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
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
    * Gets userName
    *  **参数解释**: 弱口令账号名称 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 弱口令账号名称 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释**: 账号类型 **取值范围**: - system : 系统。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType **参数解释**: 账号类型 **取值范围**: - system : 系统。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释**: 弱口令使用时长，单位天 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets desensitizedWeakPasswords
    *  **参数解释**: 脱敏弱口令 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getDesensitizedWeakPasswords()
    {
        return $this->container['desensitizedWeakPasswords'];
    }

    /**
    * Sets desensitizedWeakPasswords
    *
    * @param string|null $desensitizedWeakPasswords **参数解释**: 脱敏弱口令 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setDesensitizedWeakPasswords($desensitizedWeakPasswords)
    {
        $this->container['desensitizedWeakPasswords'] = $desensitizedWeakPasswords;
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

