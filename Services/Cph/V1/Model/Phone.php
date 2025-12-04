<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Phone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Phone';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phoneName  云手机的名称，不超过65个字符。
    * serverId  云手机所在的服务器ID，不超过32个字节。
    * phoneId  云手机的唯一标识，不超过32个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * imageVersion  镜像版本。
    * vncEnable  云手机是否开启VNC服务。 - true：开启 - false：不开启
    * status  云手机状态。 - 1：创建中 - 2：运行中 - 3：重置中 - 4：重启中 - 6：冻结 - 7：正在关机 - 8：已关机 - -5：重置失败 - -6：重启失败 - -7：手机异常 - -8：创建失败 - -9：关机失败
    * type  云手机类型。 - 0：普通云手机 - 1：试玩云手机
    * imei  imei码。
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * metadata  metadata
    * hasEncrypt  当前手机是否开启文件级加密
    * createTime  创建时间， 时间格式为UTC。
    * updateTime  更新时间， 时间格式为UTC。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phoneName' => 'string',
            'serverId' => 'string',
            'phoneId' => 'string',
            'phoneModelName' => 'string',
            'imageId' => 'string',
            'imageVersion' => 'string',
            'vncEnable' => 'string',
            'status' => 'int',
            'type' => 'int',
            'imei' => 'string',
            'trafficType' => 'string',
            'volumeMode' => 'int',
            'availabilityZone' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Cph\V1\Model\PhoneMetadata',
            'hasEncrypt' => 'bool',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phoneName  云手机的名称，不超过65个字符。
    * serverId  云手机所在的服务器ID，不超过32个字节。
    * phoneId  云手机的唯一标识，不超过32个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * imageVersion  镜像版本。
    * vncEnable  云手机是否开启VNC服务。 - true：开启 - false：不开启
    * status  云手机状态。 - 1：创建中 - 2：运行中 - 3：重置中 - 4：重启中 - 6：冻结 - 7：正在关机 - 8：已关机 - -5：重置失败 - -6：重启失败 - -7：手机异常 - -8：创建失败 - -9：关机失败
    * type  云手机类型。 - 0：普通云手机 - 1：试玩云手机
    * imei  imei码。
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * metadata  metadata
    * hasEncrypt  当前手机是否开启文件级加密
    * createTime  创建时间， 时间格式为UTC。
    * updateTime  更新时间， 时间格式为UTC。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phoneName' => null,
        'serverId' => null,
        'phoneId' => null,
        'phoneModelName' => null,
        'imageId' => null,
        'imageVersion' => null,
        'vncEnable' => null,
        'status' => 'int32',
        'type' => 'int32',
        'imei' => null,
        'trafficType' => null,
        'volumeMode' => 'int32',
        'availabilityZone' => null,
        'metadata' => null,
        'hasEncrypt' => null,
        'createTime' => null,
        'updateTime' => null
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
    * phoneName  云手机的名称，不超过65个字符。
    * serverId  云手机所在的服务器ID，不超过32个字节。
    * phoneId  云手机的唯一标识，不超过32个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * imageVersion  镜像版本。
    * vncEnable  云手机是否开启VNC服务。 - true：开启 - false：不开启
    * status  云手机状态。 - 1：创建中 - 2：运行中 - 3：重置中 - 4：重启中 - 6：冻结 - 7：正在关机 - 8：已关机 - -5：重置失败 - -6：重启失败 - -7：手机异常 - -8：创建失败 - -9：关机失败
    * type  云手机类型。 - 0：普通云手机 - 1：试玩云手机
    * imei  imei码。
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * metadata  metadata
    * hasEncrypt  当前手机是否开启文件级加密
    * createTime  创建时间， 时间格式为UTC。
    * updateTime  更新时间， 时间格式为UTC。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phoneName' => 'phone_name',
            'serverId' => 'server_id',
            'phoneId' => 'phone_id',
            'phoneModelName' => 'phone_model_name',
            'imageId' => 'image_id',
            'imageVersion' => 'image_version',
            'vncEnable' => 'vnc_enable',
            'status' => 'status',
            'type' => 'type',
            'imei' => 'imei',
            'trafficType' => 'traffic_type',
            'volumeMode' => 'volume_mode',
            'availabilityZone' => 'availability_zone',
            'metadata' => 'metadata',
            'hasEncrypt' => 'has_encrypt',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phoneName  云手机的名称，不超过65个字符。
    * serverId  云手机所在的服务器ID，不超过32个字节。
    * phoneId  云手机的唯一标识，不超过32个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * imageVersion  镜像版本。
    * vncEnable  云手机是否开启VNC服务。 - true：开启 - false：不开启
    * status  云手机状态。 - 1：创建中 - 2：运行中 - 3：重置中 - 4：重启中 - 6：冻结 - 7：正在关机 - 8：已关机 - -5：重置失败 - -6：重启失败 - -7：手机异常 - -8：创建失败 - -9：关机失败
    * type  云手机类型。 - 0：普通云手机 - 1：试玩云手机
    * imei  imei码。
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * metadata  metadata
    * hasEncrypt  当前手机是否开启文件级加密
    * createTime  创建时间， 时间格式为UTC。
    * updateTime  更新时间， 时间格式为UTC。
    *
    * @var string[]
    */
    protected static $setters = [
            'phoneName' => 'setPhoneName',
            'serverId' => 'setServerId',
            'phoneId' => 'setPhoneId',
            'phoneModelName' => 'setPhoneModelName',
            'imageId' => 'setImageId',
            'imageVersion' => 'setImageVersion',
            'vncEnable' => 'setVncEnable',
            'status' => 'setStatus',
            'type' => 'setType',
            'imei' => 'setImei',
            'trafficType' => 'setTrafficType',
            'volumeMode' => 'setVolumeMode',
            'availabilityZone' => 'setAvailabilityZone',
            'metadata' => 'setMetadata',
            'hasEncrypt' => 'setHasEncrypt',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phoneName  云手机的名称，不超过65个字符。
    * serverId  云手机所在的服务器ID，不超过32个字节。
    * phoneId  云手机的唯一标识，不超过32个字节。
    * phoneModelName  云手机规格名称，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * imageVersion  镜像版本。
    * vncEnable  云手机是否开启VNC服务。 - true：开启 - false：不开启
    * status  云手机状态。 - 1：创建中 - 2：运行中 - 3：重置中 - 4：重启中 - 6：冻结 - 7：正在关机 - 8：已关机 - -5：重置失败 - -6：重启失败 - -7：手机异常 - -8：创建失败 - -9：关机失败
    * type  云手机类型。 - 0：普通云手机 - 1：试玩云手机
    * imei  imei码。
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * availabilityZone  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * metadata  metadata
    * hasEncrypt  当前手机是否开启文件级加密
    * createTime  创建时间， 时间格式为UTC。
    * updateTime  更新时间， 时间格式为UTC。
    *
    * @var string[]
    */
    protected static $getters = [
            'phoneName' => 'getPhoneName',
            'serverId' => 'getServerId',
            'phoneId' => 'getPhoneId',
            'phoneModelName' => 'getPhoneModelName',
            'imageId' => 'getImageId',
            'imageVersion' => 'getImageVersion',
            'vncEnable' => 'getVncEnable',
            'status' => 'getStatus',
            'type' => 'getType',
            'imei' => 'getImei',
            'trafficType' => 'getTrafficType',
            'volumeMode' => 'getVolumeMode',
            'availabilityZone' => 'getAvailabilityZone',
            'metadata' => 'getMetadata',
            'hasEncrypt' => 'getHasEncrypt',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['phoneName'] = isset($data['phoneName']) ? $data['phoneName'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['phoneId'] = isset($data['phoneId']) ? $data['phoneId'] : null;
        $this->container['phoneModelName'] = isset($data['phoneModelName']) ? $data['phoneModelName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['vncEnable'] = isset($data['vncEnable']) ? $data['vncEnable'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['imei'] = isset($data['imei']) ? $data['imei'] : null;
        $this->container['trafficType'] = isset($data['trafficType']) ? $data['trafficType'] : null;
        $this->container['volumeMode'] = isset($data['volumeMode']) ? $data['volumeMode'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['hasEncrypt'] = isset($data['hasEncrypt']) ? $data['hasEncrypt'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['phoneName']) && (mb_strlen($this->container['phoneName']) > 65)) {
                $invalidProperties[] = "invalid value for 'phoneName', the character length must be smaller than or equal to 65.";
            }
            if (!is_null($this->container['phoneName']) && (mb_strlen($this->container['phoneName']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['phoneId']) && (mb_strlen($this->container['phoneId']) > 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['phoneId']) && (mb_strlen($this->container['phoneId']) < 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['phoneModelName']) && (mb_strlen($this->container['phoneModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['phoneModelName']) && (mb_strlen($this->container['phoneModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vncEnable']) && (mb_strlen($this->container['vncEnable']) > 5)) {
                $invalidProperties[] = "invalid value for 'vncEnable', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['vncEnable']) && (mb_strlen($this->container['vncEnable']) < 5)) {
                $invalidProperties[] = "invalid value for 'vncEnable', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 128)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < -128)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 128)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < -128)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['imei']) && (mb_strlen($this->container['imei']) > 64)) {
                $invalidProperties[] = "invalid value for 'imei', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imei']) && (mb_strlen($this->container['imei']) < 0)) {
                $invalidProperties[] = "invalid value for 'imei', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trafficType']) && (mb_strlen($this->container['trafficType']) > 64)) {
                $invalidProperties[] = "invalid value for 'trafficType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['trafficType']) && (mb_strlen($this->container['trafficType']) < 0)) {
                $invalidProperties[] = "invalid value for 'trafficType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeMode']) && ($this->container['volumeMode'] > 100)) {
                $invalidProperties[] = "invalid value for 'volumeMode', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['volumeMode']) && ($this->container['volumeMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'volumeMode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) > 1024)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    * Gets phoneName
    *  云手机的名称，不超过65个字符。
    *
    * @return string|null
    */
    public function getPhoneName()
    {
        return $this->container['phoneName'];
    }

    /**
    * Sets phoneName
    *
    * @param string|null $phoneName 云手机的名称，不超过65个字符。
    *
    * @return $this
    */
    public function setPhoneName($phoneName)
    {
        $this->container['phoneName'] = $phoneName;
        return $this;
    }

    /**
    * Gets serverId
    *  云手机所在的服务器ID，不超过32个字节。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云手机所在的服务器ID，不超过32个字节。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets phoneId
    *  云手机的唯一标识，不超过32个字节。
    *
    * @return string|null
    */
    public function getPhoneId()
    {
        return $this->container['phoneId'];
    }

    /**
    * Sets phoneId
    *
    * @param string|null $phoneId 云手机的唯一标识，不超过32个字节。
    *
    * @return $this
    */
    public function setPhoneId($phoneId)
    {
        $this->container['phoneId'] = $phoneId;
        return $this;
    }

    /**
    * Gets phoneModelName
    *  云手机规格名称，不超过64个字节。
    *
    * @return string|null
    */
    public function getPhoneModelName()
    {
        return $this->container['phoneModelName'];
    }

    /**
    * Sets phoneModelName
    *
    * @param string|null $phoneModelName 云手机规格名称，不超过64个字节。
    *
    * @return $this
    */
    public function setPhoneModelName($phoneModelName)
    {
        $this->container['phoneModelName'] = $phoneModelName;
        return $this;
    }

    /**
    * Gets imageId
    *  云手机镜像ID，不超过32个字节。
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
    * @param string|null $imageId 云手机镜像ID，不超过32个字节。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageVersion
    *  镜像版本。
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
    * @param string|null $imageVersion 镜像版本。
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets vncEnable
    *  云手机是否开启VNC服务。 - true：开启 - false：不开启
    *
    * @return string|null
    */
    public function getVncEnable()
    {
        return $this->container['vncEnable'];
    }

    /**
    * Sets vncEnable
    *
    * @param string|null $vncEnable 云手机是否开启VNC服务。 - true：开启 - false：不开启
    *
    * @return $this
    */
    public function setVncEnable($vncEnable)
    {
        $this->container['vncEnable'] = $vncEnable;
        return $this;
    }

    /**
    * Gets status
    *  云手机状态。 - 1：创建中 - 2：运行中 - 3：重置中 - 4：重启中 - 6：冻结 - 7：正在关机 - 8：已关机 - -5：重置失败 - -6：重启失败 - -7：手机异常 - -8：创建失败 - -9：关机失败
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 云手机状态。 - 1：创建中 - 2：运行中 - 3：重置中 - 4：重启中 - 6：冻结 - 7：正在关机 - 8：已关机 - -5：重置失败 - -6：重启失败 - -7：手机异常 - -8：创建失败 - -9：关机失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  云手机类型。 - 0：普通云手机 - 1：试玩云手机
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 云手机类型。 - 0：普通云手机 - 1：试玩云手机
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets imei
    *  imei码。
    *
    * @return string|null
    */
    public function getImei()
    {
        return $this->container['imei'];
    }

    /**
    * Sets imei
    *
    * @param string|null $imei imei码。
    *
    * @return $this
    */
    public function setImei($imei)
    {
        $this->container['imei'] = $imei;
        return $this;
    }

    /**
    * Gets trafficType
    *  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    *
    * @return string|null
    */
    public function getTrafficType()
    {
        return $this->container['trafficType'];
    }

    /**
    * Sets trafficType
    *
    * @param string|null $trafficType 手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    *
    * @return $this
    */
    public function setTrafficType($trafficType)
    {
        $this->container['trafficType'] = $trafficType;
        return $this;
    }

    /**
    * Gets volumeMode
    *  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    *
    * @return int|null
    */
    public function getVolumeMode()
    {
        return $this->container['volumeMode'];
    }

    /**
    * Sets volumeMode
    *
    * @param int|null $volumeMode 手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    *
    * @return $this
    */
    public function setVolumeMode($volumeMode)
    {
        $this->container['volumeMode'] = $volumeMode;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 云手机服务器所在的可用区。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\PhoneMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\PhoneMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets hasEncrypt
    *  当前手机是否开启文件级加密
    *
    * @return bool|null
    */
    public function getHasEncrypt()
    {
        return $this->container['hasEncrypt'];
    }

    /**
    * Sets hasEncrypt
    *
    * @param bool|null $hasEncrypt 当前手机是否开启文件级加密
    *
    * @return $this
    */
    public function setHasEncrypt($hasEncrypt)
    {
        $this->container['hasEncrypt'] = $hasEncrypt;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间， 时间格式为UTC。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间， 时间格式为UTC。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间， 时间格式为UTC。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间， 时间格式为UTC。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

