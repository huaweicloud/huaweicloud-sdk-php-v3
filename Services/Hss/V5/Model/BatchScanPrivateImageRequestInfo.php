<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchScanPrivateImageRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchScanPrivateImageRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoType  仓库类型，现阶段接入了swr镜像仓库，包含如下:   - SWR : SWR镜像仓库
    * imageInfoList  要扫描的镜像信息列表，operate_all参数为false时为必填
    * operateAll  若为true全量查询，可筛选条件全部查询，若image_info_list为空，则必填
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * latestVersion  仅关注最新版本镜像
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoType' => 'string',
            'imageInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\BatchScanSwrImageInfo[]',
            'operateAll' => 'bool',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageType' => 'string',
            'scanStatus' => 'string',
            'latestVersion' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoType  仓库类型，现阶段接入了swr镜像仓库，包含如下:   - SWR : SWR镜像仓库
    * imageInfoList  要扫描的镜像信息列表，operate_all参数为false时为必填
    * operateAll  若为true全量查询，可筛选条件全部查询，若image_info_list为空，则必填
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * latestVersion  仅关注最新版本镜像
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoType' => null,
        'imageInfoList' => null,
        'operateAll' => null,
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageType' => null,
        'scanStatus' => null,
        'latestVersion' => null
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
    * repoType  仓库类型，现阶段接入了swr镜像仓库，包含如下:   - SWR : SWR镜像仓库
    * imageInfoList  要扫描的镜像信息列表，operate_all参数为false时为必填
    * operateAll  若为true全量查询，可筛选条件全部查询，若image_info_list为空，则必填
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * latestVersion  仅关注最新版本镜像
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoType' => 'repo_type',
            'imageInfoList' => 'image_info_list',
            'operateAll' => 'operate_all',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageType' => 'image_type',
            'scanStatus' => 'scan_status',
            'latestVersion' => 'latest_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoType  仓库类型，现阶段接入了swr镜像仓库，包含如下:   - SWR : SWR镜像仓库
    * imageInfoList  要扫描的镜像信息列表，operate_all参数为false时为必填
    * operateAll  若为true全量查询，可筛选条件全部查询，若image_info_list为空，则必填
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * latestVersion  仅关注最新版本镜像
    *
    * @var string[]
    */
    protected static $setters = [
            'repoType' => 'setRepoType',
            'imageInfoList' => 'setImageInfoList',
            'operateAll' => 'setOperateAll',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageType' => 'setImageType',
            'scanStatus' => 'setScanStatus',
            'latestVersion' => 'setLatestVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoType  仓库类型，现阶段接入了swr镜像仓库，包含如下:   - SWR : SWR镜像仓库
    * imageInfoList  要扫描的镜像信息列表，operate_all参数为false时为必填
    * operateAll  若为true全量查询，可筛选条件全部查询，若image_info_list为空，则必填
    * namespace  组织名称
    * imageName  镜像名称
    * imageVersion  镜像版本
    * imageType  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    * scanStatus  扫描状态，包含如下:   - unscan : 未扫描   - success : 扫描完成   - scanning : 扫描中   - failed : 扫描失败   - download_failed : 下载失败   - image_oversized : 镜像超大
    * latestVersion  仅关注最新版本镜像
    *
    * @var string[]
    */
    protected static $getters = [
            'repoType' => 'getRepoType',
            'imageInfoList' => 'getImageInfoList',
            'operateAll' => 'getOperateAll',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageType' => 'getImageType',
            'scanStatus' => 'getScanStatus',
            'latestVersion' => 'getLatestVersion'
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
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['imageInfoList'] = isset($data['imageInfoList']) ? $data['imageInfoList'] : null;
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repoType']) && (mb_strlen($this->container['repoType']) > 32)) {
                $invalidProperties[] = "invalid value for 'repoType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['repoType']) && (mb_strlen($this->container['repoType']) < 1)) {
                $invalidProperties[] = "invalid value for 'repoType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
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
        if ($this->container['imageType'] === null) {
            $invalidProperties[] = "'imageType' can't be null";
        }
            if ((mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 1.";
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
    * Gets repoType
    *  仓库类型，现阶段接入了swr镜像仓库，包含如下:   - SWR : SWR镜像仓库
    *
    * @return string|null
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param string|null $repoType 仓库类型，现阶段接入了swr镜像仓库，包含如下:   - SWR : SWR镜像仓库
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
        return $this;
    }

    /**
    * Gets imageInfoList
    *  要扫描的镜像信息列表，operate_all参数为false时为必填
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BatchScanSwrImageInfo[]|null
    */
    public function getImageInfoList()
    {
        return $this->container['imageInfoList'];
    }

    /**
    * Sets imageInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BatchScanSwrImageInfo[]|null $imageInfoList 要扫描的镜像信息列表，operate_all参数为false时为必填
    *
    * @return $this
    */
    public function setImageInfoList($imageInfoList)
    {
        $this->container['imageInfoList'] = $imageInfoList;
        return $this;
    }

    /**
    * Gets operateAll
    *  若为true全量查询，可筛选条件全部查询，若image_info_list为空，则必填
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
    * @param bool|null $operateAll 若为true全量查询，可筛选条件全部查询，若image_info_list为空，则必填
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets namespace
    *  组织名称
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
    * @param string|null $namespace 组织名称
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
    * Gets imageType
    *  镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    *
    * @return string
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string $imageType 镜像类型，包含如下:   - private_image : 私有镜像仓库   - shared_image : 共享镜像仓库
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
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
    * Gets latestVersion
    *  仅关注最新版本镜像
    *
    * @return bool|null
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param bool|null $latestVersion 仅关注最新版本镜像
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
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

