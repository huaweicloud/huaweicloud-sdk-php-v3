<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PhoneModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PhoneModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverModelName  云手机服务器的规格名称，不超过64个字节。
    * phoneModelName  云手机的规格名称，不超过64个字节。
    * status  规格状态。 - 1 表示正常使用状态 - 0 表示已下线状态 已下线的规格不可用来购买云手机服务器
    * cpu  CPU核数。
    * memory  内存大小，单位：MB。
    * disk  系统存储大小，单位：GiB。
    * resolution  分辨率，不超过16个字节。
    * extendSpec  扩展描述，不超过512个字节。
    * specCode  规格名称，不超过64个字节。
    * phoneCapacity  当前云手机规格包含的云手机个数。
    * imageLabel  镜像类型，只支持如下类型： - qemu_phone - cloud_phone - cloud_phone_1620 - cloud_game - cloud_game_1620
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * phoneModelVersion  规格版本： - 0：规格1.0 - 1：规格2.0
    * dpi  每英寸点数。
    * fps  渲染帧率。
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * renderFps  渲染帧率。
    * streamFps  出流帧率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverModelName' => 'string',
            'phoneModelName' => 'string',
            'status' => 'int',
            'cpu' => 'int',
            'memory' => 'int',
            'disk' => 'int',
            'resolution' => 'string',
            'extendSpec' => 'string',
            'specCode' => 'string',
            'phoneCapacity' => 'int',
            'imageLabel' => 'string',
            'productType' => 'int',
            'phoneModelVersion' => 'int',
            'dpi' => 'int',
            'fps' => 'string',
            'volumeMode' => 'int',
            'renderFps' => 'int',
            'streamFps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverModelName  云手机服务器的规格名称，不超过64个字节。
    * phoneModelName  云手机的规格名称，不超过64个字节。
    * status  规格状态。 - 1 表示正常使用状态 - 0 表示已下线状态 已下线的规格不可用来购买云手机服务器
    * cpu  CPU核数。
    * memory  内存大小，单位：MB。
    * disk  系统存储大小，单位：GiB。
    * resolution  分辨率，不超过16个字节。
    * extendSpec  扩展描述，不超过512个字节。
    * specCode  规格名称，不超过64个字节。
    * phoneCapacity  当前云手机规格包含的云手机个数。
    * imageLabel  镜像类型，只支持如下类型： - qemu_phone - cloud_phone - cloud_phone_1620 - cloud_game - cloud_game_1620
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * phoneModelVersion  规格版本： - 0：规格1.0 - 1：规格2.0
    * dpi  每英寸点数。
    * fps  渲染帧率。
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * renderFps  渲染帧率。
    * streamFps  出流帧率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverModelName' => null,
        'phoneModelName' => null,
        'status' => 'int32',
        'cpu' => 'int32',
        'memory' => 'int32',
        'disk' => 'int32',
        'resolution' => null,
        'extendSpec' => null,
        'specCode' => null,
        'phoneCapacity' => 'int32',
        'imageLabel' => null,
        'productType' => 'int32',
        'phoneModelVersion' => 'int32',
        'dpi' => 'int32',
        'fps' => null,
        'volumeMode' => 'int32',
        'renderFps' => 'int32',
        'streamFps' => 'int32'
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
    * serverModelName  云手机服务器的规格名称，不超过64个字节。
    * phoneModelName  云手机的规格名称，不超过64个字节。
    * status  规格状态。 - 1 表示正常使用状态 - 0 表示已下线状态 已下线的规格不可用来购买云手机服务器
    * cpu  CPU核数。
    * memory  内存大小，单位：MB。
    * disk  系统存储大小，单位：GiB。
    * resolution  分辨率，不超过16个字节。
    * extendSpec  扩展描述，不超过512个字节。
    * specCode  规格名称，不超过64个字节。
    * phoneCapacity  当前云手机规格包含的云手机个数。
    * imageLabel  镜像类型，只支持如下类型： - qemu_phone - cloud_phone - cloud_phone_1620 - cloud_game - cloud_game_1620
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * phoneModelVersion  规格版本： - 0：规格1.0 - 1：规格2.0
    * dpi  每英寸点数。
    * fps  渲染帧率。
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * renderFps  渲染帧率。
    * streamFps  出流帧率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverModelName' => 'server_model_name',
            'phoneModelName' => 'phone_model_name',
            'status' => 'status',
            'cpu' => 'cpu',
            'memory' => 'memory',
            'disk' => 'disk',
            'resolution' => 'resolution',
            'extendSpec' => 'extend_spec',
            'specCode' => 'spec_code',
            'phoneCapacity' => 'phone_capacity',
            'imageLabel' => 'image_label',
            'productType' => 'product_type',
            'phoneModelVersion' => 'phone_model_version',
            'dpi' => 'dpi',
            'fps' => 'fps',
            'volumeMode' => 'volume_mode',
            'renderFps' => 'render_fps',
            'streamFps' => 'stream_fps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverModelName  云手机服务器的规格名称，不超过64个字节。
    * phoneModelName  云手机的规格名称，不超过64个字节。
    * status  规格状态。 - 1 表示正常使用状态 - 0 表示已下线状态 已下线的规格不可用来购买云手机服务器
    * cpu  CPU核数。
    * memory  内存大小，单位：MB。
    * disk  系统存储大小，单位：GiB。
    * resolution  分辨率，不超过16个字节。
    * extendSpec  扩展描述，不超过512个字节。
    * specCode  规格名称，不超过64个字节。
    * phoneCapacity  当前云手机规格包含的云手机个数。
    * imageLabel  镜像类型，只支持如下类型： - qemu_phone - cloud_phone - cloud_phone_1620 - cloud_game - cloud_game_1620
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * phoneModelVersion  规格版本： - 0：规格1.0 - 1：规格2.0
    * dpi  每英寸点数。
    * fps  渲染帧率。
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * renderFps  渲染帧率。
    * streamFps  出流帧率。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverModelName' => 'setServerModelName',
            'phoneModelName' => 'setPhoneModelName',
            'status' => 'setStatus',
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'disk' => 'setDisk',
            'resolution' => 'setResolution',
            'extendSpec' => 'setExtendSpec',
            'specCode' => 'setSpecCode',
            'phoneCapacity' => 'setPhoneCapacity',
            'imageLabel' => 'setImageLabel',
            'productType' => 'setProductType',
            'phoneModelVersion' => 'setPhoneModelVersion',
            'dpi' => 'setDpi',
            'fps' => 'setFps',
            'volumeMode' => 'setVolumeMode',
            'renderFps' => 'setRenderFps',
            'streamFps' => 'setStreamFps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverModelName  云手机服务器的规格名称，不超过64个字节。
    * phoneModelName  云手机的规格名称，不超过64个字节。
    * status  规格状态。 - 1 表示正常使用状态 - 0 表示已下线状态 已下线的规格不可用来购买云手机服务器
    * cpu  CPU核数。
    * memory  内存大小，单位：MB。
    * disk  系统存储大小，单位：GiB。
    * resolution  分辨率，不超过16个字节。
    * extendSpec  扩展描述，不超过512个字节。
    * specCode  规格名称，不超过64个字节。
    * phoneCapacity  当前云手机规格包含的云手机个数。
    * imageLabel  镜像类型，只支持如下类型： - qemu_phone - cloud_phone - cloud_phone_1620 - cloud_game - cloud_game_1620
    * productType  产品类型。 - 0：云手机 - 1：云手游
    * phoneModelVersion  规格版本： - 0：规格1.0 - 1：规格2.0
    * dpi  每英寸点数。
    * fps  渲染帧率。
    * volumeMode  手机物理磁盘是否独立。 - 0：不独立 - 1：独立
    * renderFps  渲染帧率。
    * streamFps  出流帧率。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverModelName' => 'getServerModelName',
            'phoneModelName' => 'getPhoneModelName',
            'status' => 'getStatus',
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'disk' => 'getDisk',
            'resolution' => 'getResolution',
            'extendSpec' => 'getExtendSpec',
            'specCode' => 'getSpecCode',
            'phoneCapacity' => 'getPhoneCapacity',
            'imageLabel' => 'getImageLabel',
            'productType' => 'getProductType',
            'phoneModelVersion' => 'getPhoneModelVersion',
            'dpi' => 'getDpi',
            'fps' => 'getFps',
            'volumeMode' => 'getVolumeMode',
            'renderFps' => 'getRenderFps',
            'streamFps' => 'getStreamFps'
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
        $this->container['serverModelName'] = isset($data['serverModelName']) ? $data['serverModelName'] : null;
        $this->container['phoneModelName'] = isset($data['phoneModelName']) ? $data['phoneModelName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['extendSpec'] = isset($data['extendSpec']) ? $data['extendSpec'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['phoneCapacity'] = isset($data['phoneCapacity']) ? $data['phoneCapacity'] : null;
        $this->container['imageLabel'] = isset($data['imageLabel']) ? $data['imageLabel'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['phoneModelVersion'] = isset($data['phoneModelVersion']) ? $data['phoneModelVersion'] : null;
        $this->container['dpi'] = isset($data['dpi']) ? $data['dpi'] : null;
        $this->container['fps'] = isset($data['fps']) ? $data['fps'] : null;
        $this->container['volumeMode'] = isset($data['volumeMode']) ? $data['volumeMode'] : null;
        $this->container['renderFps'] = isset($data['renderFps']) ? $data['renderFps'] : null;
        $this->container['streamFps'] = isset($data['streamFps']) ? $data['streamFps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serverModelName']) && (mb_strlen($this->container['serverModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverModelName']) && (mb_strlen($this->container['serverModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phoneModelName']) && (mb_strlen($this->container['phoneModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['phoneModelName']) && (mb_strlen($this->container['phoneModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 128)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < -128)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] > 128)) {
                $invalidProperties[] = "invalid value for 'cpu', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] < -128)) {
                $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] > 8096)) {
                $invalidProperties[] = "invalid value for 'memory', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] < 0)) {
                $invalidProperties[] = "invalid value for 'memory', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['disk']) && ($this->container['disk'] > 8096)) {
                $invalidProperties[] = "invalid value for 'disk', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['disk']) && ($this->container['disk'] < 0)) {
                $invalidProperties[] = "invalid value for 'disk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resolution']) && (mb_strlen($this->container['resolution']) > 16)) {
                $invalidProperties[] = "invalid value for 'resolution', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['resolution']) && (mb_strlen($this->container['resolution']) < 0)) {
                $invalidProperties[] = "invalid value for 'resolution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['extendSpec']) && (mb_strlen($this->container['extendSpec']) > 512)) {
                $invalidProperties[] = "invalid value for 'extendSpec', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['extendSpec']) && (mb_strlen($this->container['extendSpec']) < 0)) {
                $invalidProperties[] = "invalid value for 'extendSpec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phoneCapacity']) && ($this->container['phoneCapacity'] > 1024)) {
                $invalidProperties[] = "invalid value for 'phoneCapacity', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['phoneCapacity']) && ($this->container['phoneCapacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'phoneCapacity', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageLabel']) && (mb_strlen($this->container['imageLabel']) > 1024)) {
                $invalidProperties[] = "invalid value for 'imageLabel', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['imageLabel']) && (mb_strlen($this->container['imageLabel']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageLabel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productType']) && ($this->container['productType'] > 1024)) {
                $invalidProperties[] = "invalid value for 'productType', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['productType']) && ($this->container['productType'] < 0)) {
                $invalidProperties[] = "invalid value for 'productType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phoneModelVersion']) && ($this->container['phoneModelVersion'] > 65535)) {
                $invalidProperties[] = "invalid value for 'phoneModelVersion', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['phoneModelVersion']) && ($this->container['phoneModelVersion'] < 0)) {
                $invalidProperties[] = "invalid value for 'phoneModelVersion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dpi']) && ($this->container['dpi'] > 65535)) {
                $invalidProperties[] = "invalid value for 'dpi', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['dpi']) && ($this->container['dpi'] < 0)) {
                $invalidProperties[] = "invalid value for 'dpi', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fps']) && (mb_strlen($this->container['fps']) > 32)) {
                $invalidProperties[] = "invalid value for 'fps', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['fps']) && (mb_strlen($this->container['fps']) < 0)) {
                $invalidProperties[] = "invalid value for 'fps', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeMode']) && ($this->container['volumeMode'] > 100)) {
                $invalidProperties[] = "invalid value for 'volumeMode', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['volumeMode']) && ($this->container['volumeMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'volumeMode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['renderFps']) && ($this->container['renderFps'] > 256)) {
                $invalidProperties[] = "invalid value for 'renderFps', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['renderFps']) && ($this->container['renderFps'] < 0)) {
                $invalidProperties[] = "invalid value for 'renderFps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['streamFps']) && ($this->container['streamFps'] > 256)) {
                $invalidProperties[] = "invalid value for 'streamFps', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['streamFps']) && ($this->container['streamFps'] < 0)) {
                $invalidProperties[] = "invalid value for 'streamFps', must be bigger than or equal to 0.";
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
    * Gets serverModelName
    *  云手机服务器的规格名称，不超过64个字节。
    *
    * @return string|null
    */
    public function getServerModelName()
    {
        return $this->container['serverModelName'];
    }

    /**
    * Sets serverModelName
    *
    * @param string|null $serverModelName 云手机服务器的规格名称，不超过64个字节。
    *
    * @return $this
    */
    public function setServerModelName($serverModelName)
    {
        $this->container['serverModelName'] = $serverModelName;
        return $this;
    }

    /**
    * Gets phoneModelName
    *  云手机的规格名称，不超过64个字节。
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
    * @param string|null $phoneModelName 云手机的规格名称，不超过64个字节。
    *
    * @return $this
    */
    public function setPhoneModelName($phoneModelName)
    {
        $this->container['phoneModelName'] = $phoneModelName;
        return $this;
    }

    /**
    * Gets status
    *  规格状态。 - 1 表示正常使用状态 - 0 表示已下线状态 已下线的规格不可用来购买云手机服务器
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
    * @param int|null $status 规格状态。 - 1 表示正常使用状态 - 0 表示已下线状态 已下线的规格不可用来购买云手机服务器
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU核数。
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu CPU核数。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets memory
    *  内存大小，单位：MB。
    *
    * @return int|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int|null $memory 内存大小，单位：MB。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets disk
    *  系统存储大小，单位：GiB。
    *
    * @return int|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param int|null $disk 系统存储大小，单位：GiB。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets resolution
    *  分辨率，不超过16个字节。
    *
    * @return string|null
    */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
    * Sets resolution
    *
    * @param string|null $resolution 分辨率，不超过16个字节。
    *
    * @return $this
    */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;
        return $this;
    }

    /**
    * Gets extendSpec
    *  扩展描述，不超过512个字节。
    *
    * @return string|null
    */
    public function getExtendSpec()
    {
        return $this->container['extendSpec'];
    }

    /**
    * Sets extendSpec
    *
    * @param string|null $extendSpec 扩展描述，不超过512个字节。
    *
    * @return $this
    */
    public function setExtendSpec($extendSpec)
    {
        $this->container['extendSpec'] = $extendSpec;
        return $this;
    }

    /**
    * Gets specCode
    *  规格名称，不超过64个字节。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 规格名称，不超过64个字节。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets phoneCapacity
    *  当前云手机规格包含的云手机个数。
    *
    * @return int|null
    */
    public function getPhoneCapacity()
    {
        return $this->container['phoneCapacity'];
    }

    /**
    * Sets phoneCapacity
    *
    * @param int|null $phoneCapacity 当前云手机规格包含的云手机个数。
    *
    * @return $this
    */
    public function setPhoneCapacity($phoneCapacity)
    {
        $this->container['phoneCapacity'] = $phoneCapacity;
        return $this;
    }

    /**
    * Gets imageLabel
    *  镜像类型，只支持如下类型： - qemu_phone - cloud_phone - cloud_phone_1620 - cloud_game - cloud_game_1620
    *
    * @return string|null
    */
    public function getImageLabel()
    {
        return $this->container['imageLabel'];
    }

    /**
    * Sets imageLabel
    *
    * @param string|null $imageLabel 镜像类型，只支持如下类型： - qemu_phone - cloud_phone - cloud_phone_1620 - cloud_game - cloud_game_1620
    *
    * @return $this
    */
    public function setImageLabel($imageLabel)
    {
        $this->container['imageLabel'] = $imageLabel;
        return $this;
    }

    /**
    * Gets productType
    *  产品类型。 - 0：云手机 - 1：云手游
    *
    * @return int|null
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param int|null $productType 产品类型。 - 0：云手机 - 1：云手游
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets phoneModelVersion
    *  规格版本： - 0：规格1.0 - 1：规格2.0
    *
    * @return int|null
    */
    public function getPhoneModelVersion()
    {
        return $this->container['phoneModelVersion'];
    }

    /**
    * Sets phoneModelVersion
    *
    * @param int|null $phoneModelVersion 规格版本： - 0：规格1.0 - 1：规格2.0
    *
    * @return $this
    */
    public function setPhoneModelVersion($phoneModelVersion)
    {
        $this->container['phoneModelVersion'] = $phoneModelVersion;
        return $this;
    }

    /**
    * Gets dpi
    *  每英寸点数。
    *
    * @return int|null
    */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /**
    * Sets dpi
    *
    * @param int|null $dpi 每英寸点数。
    *
    * @return $this
    */
    public function setDpi($dpi)
    {
        $this->container['dpi'] = $dpi;
        return $this;
    }

    /**
    * Gets fps
    *  渲染帧率。
    *
    * @return string|null
    */
    public function getFps()
    {
        return $this->container['fps'];
    }

    /**
    * Sets fps
    *
    * @param string|null $fps 渲染帧率。
    *
    * @return $this
    */
    public function setFps($fps)
    {
        $this->container['fps'] = $fps;
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
    * Gets renderFps
    *  渲染帧率。
    *
    * @return int|null
    */
    public function getRenderFps()
    {
        return $this->container['renderFps'];
    }

    /**
    * Sets renderFps
    *
    * @param int|null $renderFps 渲染帧率。
    *
    * @return $this
    */
    public function setRenderFps($renderFps)
    {
        $this->container['renderFps'] = $renderFps;
        return $this;
    }

    /**
    * Gets streamFps
    *  出流帧率。
    *
    * @return int|null
    */
    public function getStreamFps()
    {
        return $this->container['streamFps'];
    }

    /**
    * Sets streamFps
    *
    * @param int|null $streamFps 出流帧率。
    *
    * @return $this
    */
    public function setStreamFps($streamFps)
    {
        $this->container['streamFps'] = $streamFps;
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

