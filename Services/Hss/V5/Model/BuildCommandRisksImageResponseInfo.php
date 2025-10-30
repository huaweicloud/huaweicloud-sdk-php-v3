<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildCommandRisksImageResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BuildCommandRisksImageResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型  **取值范围**:   - private_image：私有镜像   - shared_image：共享镜像   - instance_image：企业镜像   - harbor：Harbor镜像   - jfrog：Jfrog镜像   - cicd：cicd镜像
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-9223372036854775807
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * riskDetailInfo  riskDetailInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'imageDigest' => 'string',
            'imageId' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'imageSize' => 'int',
            'latestScanTime' => 'int',
            'riskDetailInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\BuildCommandRiskDetailListResponseInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型  **取值范围**:   - private_image：私有镜像   - shared_image：共享镜像   - instance_image：企业镜像   - harbor：Harbor镜像   - jfrog：Jfrog镜像   - cicd：cicd镜像
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-9223372036854775807
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * riskDetailInfo  riskDetailInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'imageDigest' => null,
        'imageId' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'imageSize' => 'int64',
        'latestScanTime' => 'int64',
        'riskDetailInfo' => null
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
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型  **取值范围**:   - private_image：私有镜像   - shared_image：共享镜像   - instance_image：企业镜像   - harbor：Harbor镜像   - jfrog：Jfrog镜像   - cicd：cicd镜像
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-9223372036854775807
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * riskDetailInfo  riskDetailInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'imageDigest' => 'image_digest',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'imageSize' => 'image_size',
            'latestScanTime' => 'latest_scan_time',
            'riskDetailInfo' => 'risk_detail_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型  **取值范围**:   - private_image：私有镜像   - shared_image：共享镜像   - instance_image：企业镜像   - harbor：Harbor镜像   - jfrog：Jfrog镜像   - cicd：cicd镜像
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-9223372036854775807
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * riskDetailInfo  riskDetailInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'imageDigest' => 'setImageDigest',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'imageSize' => 'setImageSize',
            'latestScanTime' => 'setLatestScanTime',
            'riskDetailInfo' => 'setRiskDetailInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    * imageDigest  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-128
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
    * imageType  **参数解释**: 镜像类型  **取值范围**:   - private_image：私有镜像   - shared_image：共享镜像   - instance_image：企业镜像   - harbor：Harbor镜像   - jfrog：Jfrog镜像   - cicd：cicd镜像
    * imageSize  **参数解释**: 版本大小 **取值范围**: 大小0-9223372036854775807
    * latestScanTime  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    * riskDetailInfo  riskDetailInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'imageDigest' => 'getImageDigest',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'imageSize' => 'getImageSize',
            'latestScanTime' => 'getLatestScanTime',
            'riskDetailInfo' => 'getRiskDetailInfo'
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
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['riskDetailInfo'] = isset($data['riskDetailInfo']) ? $data['riskDetailInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 128.";
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
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
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
    *  **参数解释**: 组织名称 **取值范围**: 字符长度0-64
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
    * @param string|null $namespace **参数解释**: 组织名称 **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageDigest
    *  **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getImageDigest()
    {
        return $this->container['imageDigest'];
    }

    /**
    * Sets imageDigest
    *
    * @param string|null $imageDigest **参数解释**: 镜像digest **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setImageDigest($imageDigest)
    {
        $this->container['imageDigest'] = $imageDigest;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**: 镜像id **取值范围**: 字符长度0-128
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
    * @param string|null $imageId **参数解释**: 镜像id **取值范围**: 字符长度0-128
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
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-128
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
    *  **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
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
    * @param string|null $imageVersion **参数解释**: 镜像版本 **取值范围**: 字符长度0-128
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
    *  **参数解释**: 镜像类型  **取值范围**:   - private_image：私有镜像   - shared_image：共享镜像   - instance_image：企业镜像   - harbor：Harbor镜像   - jfrog：Jfrog镜像   - cicd：cicd镜像
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
    * @param string|null $imageType **参数解释**: 镜像类型  **取值范围**:   - private_image：私有镜像   - shared_image：共享镜像   - instance_image：企业镜像   - harbor：Harbor镜像   - jfrog：Jfrog镜像   - cicd：cicd镜像
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets imageSize
    *  **参数解释**: 版本大小 **取值范围**: 大小0-9223372036854775807
    *
    * @return int|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param int|null $imageSize **参数解释**: 版本大小 **取值范围**: 大小0-9223372036854775807
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
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
    * @param int|null $latestScanTime **参数解释**: 最后一次检测时间，时间单位 毫秒（ms） **取值范围**: 大小0-9223372036854775807
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets riskDetailInfo
    *  riskDetailInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BuildCommandRiskDetailListResponseInfo|null
    */
    public function getRiskDetailInfo()
    {
        return $this->container['riskDetailInfo'];
    }

    /**
    * Sets riskDetailInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BuildCommandRiskDetailListResponseInfo|null $riskDetailInfo riskDetailInfo
    *
    * @return $this
    */
    public function setRiskDetailInfo($riskDetailInfo)
    {
        $this->container['riskDetailInfo'] = $riskDetailInfo;
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

