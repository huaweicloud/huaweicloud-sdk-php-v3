<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LocalImageBatchScanRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LocalImageBatchScanRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateAll  是否扫描全部本地镜像，true扫描所有，非true则不是
    * imageInfoList  需要扫描的本地镜像列表
    * imageName  镜像名称
    * imageVersion  镜像版本
    * localImageType  镜像类型，包含如下:   - other_image : 其他镜像   - swr_image : swr镜像仓
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位：毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位：毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位：毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位：毫秒（ms）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateAll' => 'bool',
            'imageInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\LocalImageInfo[]',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'localImageType' => 'string',
            'scanStatus' => 'string',
            'imageSize' => 'int',
            'startLatestUpdateTime' => 'int',
            'endLatestUpdateTime' => 'int',
            'startLatestScanTime' => 'int',
            'endLatestScanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateAll  是否扫描全部本地镜像，true扫描所有，非true则不是
    * imageInfoList  需要扫描的本地镜像列表
    * imageName  镜像名称
    * imageVersion  镜像版本
    * localImageType  镜像类型，包含如下:   - other_image : 其他镜像   - swr_image : swr镜像仓
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位：毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位：毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位：毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位：毫秒（ms）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateAll' => null,
        'imageInfoList' => null,
        'imageName' => null,
        'imageVersion' => null,
        'localImageType' => null,
        'scanStatus' => null,
        'imageSize' => 'int64',
        'startLatestUpdateTime' => 'int64',
        'endLatestUpdateTime' => 'int64',
        'startLatestScanTime' => 'int64',
        'endLatestScanTime' => 'int64'
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
    * operateAll  是否扫描全部本地镜像，true扫描所有，非true则不是
    * imageInfoList  需要扫描的本地镜像列表
    * imageName  镜像名称
    * imageVersion  镜像版本
    * localImageType  镜像类型，包含如下:   - other_image : 其他镜像   - swr_image : swr镜像仓
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位：毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位：毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位：毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位：毫秒（ms）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateAll' => 'operate_all',
            'imageInfoList' => 'image_info_list',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'localImageType' => 'local_image_type',
            'scanStatus' => 'scan_status',
            'imageSize' => 'image_size',
            'startLatestUpdateTime' => 'start_latest_update_time',
            'endLatestUpdateTime' => 'end_latest_update_time',
            'startLatestScanTime' => 'start_latest_scan_time',
            'endLatestScanTime' => 'end_latest_scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateAll  是否扫描全部本地镜像，true扫描所有，非true则不是
    * imageInfoList  需要扫描的本地镜像列表
    * imageName  镜像名称
    * imageVersion  镜像版本
    * localImageType  镜像类型，包含如下:   - other_image : 其他镜像   - swr_image : swr镜像仓
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位：毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位：毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位：毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位：毫秒（ms）
    *
    * @var string[]
    */
    protected static $setters = [
            'operateAll' => 'setOperateAll',
            'imageInfoList' => 'setImageInfoList',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'localImageType' => 'setLocalImageType',
            'scanStatus' => 'setScanStatus',
            'imageSize' => 'setImageSize',
            'startLatestUpdateTime' => 'setStartLatestUpdateTime',
            'endLatestUpdateTime' => 'setEndLatestUpdateTime',
            'startLatestScanTime' => 'setStartLatestScanTime',
            'endLatestScanTime' => 'setEndLatestScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateAll  是否扫描全部本地镜像，true扫描所有，非true则不是
    * imageInfoList  需要扫描的本地镜像列表
    * imageName  镜像名称
    * imageVersion  镜像版本
    * localImageType  镜像类型，包含如下:   - other_image : 其他镜像   - swr_image : swr镜像仓
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * imageSize  镜像大小
    * startLatestUpdateTime  创建时间开始日期，时间单位：毫秒（ms）
    * endLatestUpdateTime  创建时间结束日期，时间单位：毫秒（ms）
    * startLatestScanTime  最近一次扫描完成时间开始日期，时间单位：毫秒（ms）
    * endLatestScanTime  最近一次扫描完成时间结束日期，时间单位：毫秒（ms）
    *
    * @var string[]
    */
    protected static $getters = [
            'operateAll' => 'getOperateAll',
            'imageInfoList' => 'getImageInfoList',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'localImageType' => 'getLocalImageType',
            'scanStatus' => 'getScanStatus',
            'imageSize' => 'getImageSize',
            'startLatestUpdateTime' => 'getStartLatestUpdateTime',
            'endLatestUpdateTime' => 'getEndLatestUpdateTime',
            'startLatestScanTime' => 'getStartLatestScanTime',
            'endLatestScanTime' => 'getEndLatestScanTime'
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
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['imageInfoList'] = isset($data['imageInfoList']) ? $data['imageInfoList'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['localImageType'] = isset($data['localImageType']) ? $data['localImageType'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['startLatestUpdateTime'] = isset($data['startLatestUpdateTime']) ? $data['startLatestUpdateTime'] : null;
        $this->container['endLatestUpdateTime'] = isset($data['endLatestUpdateTime']) ? $data['endLatestUpdateTime'] : null;
        $this->container['startLatestScanTime'] = isset($data['startLatestScanTime']) ? $data['startLatestScanTime'] : null;
        $this->container['endLatestScanTime'] = isset($data['endLatestScanTime']) ? $data['endLatestScanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageVersion']) && !preg_match("/^.*$/", $this->container['imageVersion'])) {
                $invalidProperties[] = "invalid value for 'imageVersion', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['localImageType']) && (mb_strlen($this->container['localImageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'localImageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageSize']) && ($this->container['imageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['startLatestUpdateTime']) && ($this->container['startLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['endLatestUpdateTime']) && ($this->container['endLatestUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['startLatestScanTime']) && ($this->container['startLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startLatestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['endLatestScanTime']) && ($this->container['endLatestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endLatestScanTime', must be bigger than or equal to 0.";
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
    * Gets operateAll
    *  是否扫描全部本地镜像，true扫描所有，非true则不是
    *
    * @return bool|null
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool|null $operateAll 是否扫描全部本地镜像，true扫描所有，非true则不是
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets imageInfoList
    *  需要扫描的本地镜像列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\LocalImageInfo[]|null
    */
    public function getImageInfoList()
    {
        return $this->container['imageInfoList'];
    }

    /**
    * Sets imageInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\LocalImageInfo[]|null $imageInfoList 需要扫描的本地镜像列表
    *
    * @return $this
    */
    public function setImageInfoList($imageInfoList)
    {
        $this->container['imageInfoList'] = $imageInfoList;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
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
    * @param string|null $imageName 镜像名称
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
    *  镜像版本
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
    * @param string|null $imageVersion 镜像版本
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets localImageType
    *  镜像类型，包含如下:   - other_image : 其他镜像   - swr_image : swr镜像仓
    *
    * @return string|null
    */
    public function getLocalImageType()
    {
        return $this->container['localImageType'];
    }

    /**
    * Sets localImageType
    *
    * @param string|null $localImageType 镜像类型，包含如下:   - other_image : 其他镜像   - swr_image : swr镜像仓
    *
    * @return $this
    */
    public function setLocalImageType($localImageType)
    {
        $this->container['localImageType'] = $localImageType;
        return $this;
    }

    /**
    * Gets scanStatus
    *  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus 扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets imageSize
    *  镜像大小
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
    * @param int|null $imageSize 镜像大小
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets startLatestUpdateTime
    *  创建时间开始日期，时间单位：毫秒（ms）
    *
    * @return int|null
    */
    public function getStartLatestUpdateTime()
    {
        return $this->container['startLatestUpdateTime'];
    }

    /**
    * Sets startLatestUpdateTime
    *
    * @param int|null $startLatestUpdateTime 创建时间开始日期，时间单位：毫秒（ms）
    *
    * @return $this
    */
    public function setStartLatestUpdateTime($startLatestUpdateTime)
    {
        $this->container['startLatestUpdateTime'] = $startLatestUpdateTime;
        return $this;
    }

    /**
    * Gets endLatestUpdateTime
    *  创建时间结束日期，时间单位：毫秒（ms）
    *
    * @return int|null
    */
    public function getEndLatestUpdateTime()
    {
        return $this->container['endLatestUpdateTime'];
    }

    /**
    * Sets endLatestUpdateTime
    *
    * @param int|null $endLatestUpdateTime 创建时间结束日期，时间单位：毫秒（ms）
    *
    * @return $this
    */
    public function setEndLatestUpdateTime($endLatestUpdateTime)
    {
        $this->container['endLatestUpdateTime'] = $endLatestUpdateTime;
        return $this;
    }

    /**
    * Gets startLatestScanTime
    *  最近一次扫描完成时间开始日期，时间单位：毫秒（ms）
    *
    * @return int|null
    */
    public function getStartLatestScanTime()
    {
        return $this->container['startLatestScanTime'];
    }

    /**
    * Sets startLatestScanTime
    *
    * @param int|null $startLatestScanTime 最近一次扫描完成时间开始日期，时间单位：毫秒（ms）
    *
    * @return $this
    */
    public function setStartLatestScanTime($startLatestScanTime)
    {
        $this->container['startLatestScanTime'] = $startLatestScanTime;
        return $this;
    }

    /**
    * Gets endLatestScanTime
    *  最近一次扫描完成时间结束日期，时间单位：毫秒（ms）
    *
    * @return int|null
    */
    public function getEndLatestScanTime()
    {
        return $this->container['endLatestScanTime'];
    }

    /**
    * Sets endLatestScanTime
    *
    * @param int|null $endLatestScanTime 最近一次扫描完成时间结束日期，时间单位：毫秒（ms）
    *
    * @return $this
    */
    public function setEndLatestScanTime($endLatestScanTime)
    {
        $this->container['endLatestScanTime'] = $endLatestScanTime;
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

