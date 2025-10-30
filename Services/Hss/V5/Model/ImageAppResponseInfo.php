<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageAppResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageAppResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-128位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    * isCompliant  **参数解释**: 是否合规，false为不合规 **取值范围**: - true：是。 - false：否。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'appType' => 'string',
            'appVersion' => 'string',
            'vulNum' => 'int',
            'appPath' => 'string',
            'layerDigest' => 'string',
            'isCompliant' => 'bool',
            'latestScanTime' => 'int',
            'imageType' => 'string',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-128位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    * isCompliant  **参数解释**: 是否合规，false为不合规 **取值范围**: - true：是。 - false：否。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'appType' => null,
        'appVersion' => null,
        'vulNum' => 'int32',
        'appPath' => null,
        'layerDigest' => null,
        'isCompliant' => null,
        'latestScanTime' => 'int64',
        'imageType' => null,
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageId' => null
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
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-128位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    * isCompliant  **参数解释**: 是否合规，false为不合规 **取值范围**: - true：是。 - false：否。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'appType' => 'app_type',
            'appVersion' => 'app_version',
            'vulNum' => 'vul_num',
            'appPath' => 'app_path',
            'layerDigest' => 'layer_digest',
            'isCompliant' => 'is_compliant',
            'latestScanTime' => 'latest_scan_time',
            'imageType' => 'image_type',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageId' => 'image_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-128位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    * isCompliant  **参数解释**: 是否合规，false为不合规 **取值范围**: - true：是。 - false：否。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'appType' => 'setAppType',
            'appVersion' => 'setAppVersion',
            'vulNum' => 'setVulNum',
            'appPath' => 'setAppPath',
            'layerDigest' => 'setLayerDigest',
            'isCompliant' => 'setIsCompliant',
            'latestScanTime' => 'setLatestScanTime',
            'imageType' => 'setImageType',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageId' => 'setImageId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-128位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    * isCompliant  **参数解释**: 是否合规，false为不合规 **取值范围**: - true：是。 - false：否。
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    * imageType  **参数解释**: 仓库镜像类型，包含如下: **取值范围**: - SwrPrivate : swr私有镜像。 - SwrShared : swr共享。 - SwrEnterprise : swr企业。 - Harbor : harbor仓库。 - Jfrog : jfrog仓库。 - Other : 其他仓库。
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * imageVersion  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-65535位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'appType' => 'getAppType',
            'appVersion' => 'getAppVersion',
            'vulNum' => 'getVulNum',
            'appPath' => 'getAppPath',
            'layerDigest' => 'getLayerDigest',
            'isCompliant' => 'getIsCompliant',
            'latestScanTime' => 'getLatestScanTime',
            'imageType' => 'getImageType',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageId' => 'getImageId'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['layerDigest'] = isset($data['layerDigest']) ? $data['layerDigest'] : null;
        $this->container['isCompliant'] = isset($data['isCompliant']) ? $data['isCompliant'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) > 128)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) < 0)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 20000)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 128)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['layerDigest']) && (mb_strlen($this->container['layerDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'layerDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['layerDigest']) && (mb_strlen($this->container['layerDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'layerDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && !preg_match("/^.*$/", $this->container['imageId'])) {
                $invalidProperties[] = "invalid value for 'imageId', must be conform to the pattern /^.*$/.";
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
    * Gets appName
    *  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appType
    *  **参数解释**: 软件类型 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType **参数解释**: 软件类型 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets appVersion
    *  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets vulNum
    *  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @return int|null
    */
    public function getVulNum()
    {
        return $this->container['vulNum'];
    }

    /**
    * Sets vulNum
    *
    * @param int|null $vulNum **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @return $this
    */
    public function setVulNum($vulNum)
    {
        $this->container['vulNum'] = $vulNum;
        return $this;
    }

    /**
    * Gets appPath
    *  **参数解释**: 软件路径 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath **参数解释**: 软件路径 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets layerDigest
    *  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getLayerDigest()
    {
        return $this->container['layerDigest'];
    }

    /**
    * Sets layerDigest
    *
    * @param string|null $layerDigest **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setLayerDigest($layerDigest)
    {
        $this->container['layerDigest'] = $layerDigest;
        return $this;
    }

    /**
    * Gets isCompliant
    *  **参数解释**: 是否合规，false为不合规 **取值范围**: - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getIsCompliant()
    {
        return $this->container['isCompliant'];
    }

    /**
    * Sets isCompliant
    *
    * @param bool|null $isCompliant **参数解释**: 是否合规，false为不合规 **取值范围**: - true：是。 - false：否。
    *
    * @return $this
    */
    public function setIsCompliant($isCompliant)
    {
        $this->container['isCompliant'] = $isCompliant;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $latestScanTime **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
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
    * Gets namespace
    *  **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $namespace **参数解释**: 组织名称 **取值范围**: 字符长度0-65535位
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
    *  **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $imageVersion **参数解释**: 镜像版本名称 **取值范围**: 字符长度0-65535位
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
    *  **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
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
    * @param string|null $imageId **参数解释**: 镜像id **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
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

