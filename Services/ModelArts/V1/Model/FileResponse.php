<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  **参数解释：** 代码来源类别。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 - LOCAL：挂载宿主机本地存储目录。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * hostCache  **参数解释：** 是否支持模型本地缓存，默认是不支持。 **取值范围：** - true：支持。 - false：不支持。
    * efsSubPath  **参数解释：** 当存储类别为EFS时，支持配置子目录。 **取值范围：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置，是否只读。 **取值范围：** - true：只读。 - false：非只读。
    * osWarmUp  **参数解释：** OS预热。 **取值范围：** - true：预热。 - false：不预热。
    * sourceName  **参数解释：** 预热名称。 **约束限制：** os_warm_up为true时必填。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'address' => 'string',
            'mountPath' => 'string',
            'hostCache' => 'bool',
            'efsSubPath' => 'string',
            'readOnly' => 'bool',
            'osWarmUp' => 'bool',
            'sourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  **参数解释：** 代码来源类别。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 - LOCAL：挂载宿主机本地存储目录。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * hostCache  **参数解释：** 是否支持模型本地缓存，默认是不支持。 **取值范围：** - true：支持。 - false：不支持。
    * efsSubPath  **参数解释：** 当存储类别为EFS时，支持配置子目录。 **取值范围：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置，是否只读。 **取值范围：** - true：只读。 - false：非只读。
    * osWarmUp  **参数解释：** OS预热。 **取值范围：** - true：预热。 - false：不预热。
    * sourceName  **参数解释：** 预热名称。 **约束限制：** os_warm_up为true时必填。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'address' => null,
        'mountPath' => null,
        'hostCache' => null,
        'efsSubPath' => null,
        'readOnly' => null,
        'osWarmUp' => null,
        'sourceName' => null
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
    * source  **参数解释：** 代码来源类别。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 - LOCAL：挂载宿主机本地存储目录。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * hostCache  **参数解释：** 是否支持模型本地缓存，默认是不支持。 **取值范围：** - true：支持。 - false：不支持。
    * efsSubPath  **参数解释：** 当存储类别为EFS时，支持配置子目录。 **取值范围：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置，是否只读。 **取值范围：** - true：只读。 - false：非只读。
    * osWarmUp  **参数解释：** OS预热。 **取值范围：** - true：预热。 - false：不预热。
    * sourceName  **参数解释：** 预热名称。 **约束限制：** os_warm_up为true时必填。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'address' => 'address',
            'mountPath' => 'mount_path',
            'hostCache' => 'host_cache',
            'efsSubPath' => 'efs_sub_path',
            'readOnly' => 'read_only',
            'osWarmUp' => 'os_warm_up',
            'sourceName' => 'source_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  **参数解释：** 代码来源类别。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 - LOCAL：挂载宿主机本地存储目录。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * hostCache  **参数解释：** 是否支持模型本地缓存，默认是不支持。 **取值范围：** - true：支持。 - false：不支持。
    * efsSubPath  **参数解释：** 当存储类别为EFS时，支持配置子目录。 **取值范围：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置，是否只读。 **取值范围：** - true：只读。 - false：非只读。
    * osWarmUp  **参数解释：** OS预热。 **取值范围：** - true：预热。 - false：不预热。
    * sourceName  **参数解释：** 预热名称。 **约束限制：** os_warm_up为true时必填。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'address' => 'setAddress',
            'mountPath' => 'setMountPath',
            'hostCache' => 'setHostCache',
            'efsSubPath' => 'setEfsSubPath',
            'readOnly' => 'setReadOnly',
            'osWarmUp' => 'setOsWarmUp',
            'sourceName' => 'setSourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  **参数解释：** 代码来源类别。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 - LOCAL：挂载宿主机本地存储目录。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * hostCache  **参数解释：** 是否支持模型本地缓存，默认是不支持。 **取值范围：** - true：支持。 - false：不支持。
    * efsSubPath  **参数解释：** 当存储类别为EFS时，支持配置子目录。 **取值范围：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置，是否只读。 **取值范围：** - true：只读。 - false：非只读。
    * osWarmUp  **参数解释：** OS预热。 **取值范围：** - true：预热。 - false：不预热。
    * sourceName  **参数解释：** 预热名称。 **约束限制：** os_warm_up为true时必填。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'address' => 'getAddress',
            'mountPath' => 'getMountPath',
            'hostCache' => 'getHostCache',
            'efsSubPath' => 'getEfsSubPath',
            'readOnly' => 'getReadOnly',
            'osWarmUp' => 'getOsWarmUp',
            'sourceName' => 'getSourceName'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['hostCache'] = isset($data['hostCache']) ? $data['hostCache'] : null;
        $this->container['efsSubPath'] = isset($data['efsSubPath']) ? $data['efsSubPath'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['osWarmUp'] = isset($data['osWarmUp']) ? $data['osWarmUp'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['mountPath'] === null) {
            $invalidProperties[] = "'mountPath' can't be null";
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
    * Gets source
    *  **参数解释：** 代码来源类别。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 - LOCAL：挂载宿主机本地存储目录。
    *
    * @return string
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string $source **参数解释：** 代码来源类别。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 - LOCAL：挂载宿主机本地存储目录。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets address
    *  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address **参数解释：** 代码来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets mountPath
    *  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getMountPath()
    {
        return $this->container['mountPath'];
    }

    /**
    * Sets mountPath
    *
    * @param string $mountPath **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
        return $this;
    }

    /**
    * Gets hostCache
    *  **参数解释：** 是否支持模型本地缓存，默认是不支持。 **取值范围：** - true：支持。 - false：不支持。
    *
    * @return bool|null
    */
    public function getHostCache()
    {
        return $this->container['hostCache'];
    }

    /**
    * Sets hostCache
    *
    * @param bool|null $hostCache **参数解释：** 是否支持模型本地缓存，默认是不支持。 **取值范围：** - true：支持。 - false：不支持。
    *
    * @return $this
    */
    public function setHostCache($hostCache)
    {
        $this->container['hostCache'] = $hostCache;
        return $this;
    }

    /**
    * Gets efsSubPath
    *  **参数解释：** 当存储类别为EFS时，支持配置子目录。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getEfsSubPath()
    {
        return $this->container['efsSubPath'];
    }

    /**
    * Sets efsSubPath
    *
    * @param string|null $efsSubPath **参数解释：** 当存储类别为EFS时，支持配置子目录。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEfsSubPath($efsSubPath)
    {
        $this->container['efsSubPath'] = $efsSubPath;
        return $this;
    }

    /**
    * Gets readOnly
    *  **参数解释：** 挂载权限设置，是否只读。 **取值范围：** - true：只读。 - false：非只读。
    *
    * @return bool|null
    */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
    * Sets readOnly
    *
    * @param bool|null $readOnly **参数解释：** 挂载权限设置，是否只读。 **取值范围：** - true：只读。 - false：非只读。
    *
    * @return $this
    */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;
        return $this;
    }

    /**
    * Gets osWarmUp
    *  **参数解释：** OS预热。 **取值范围：** - true：预热。 - false：不预热。
    *
    * @return bool|null
    */
    public function getOsWarmUp()
    {
        return $this->container['osWarmUp'];
    }

    /**
    * Sets osWarmUp
    *
    * @param bool|null $osWarmUp **参数解释：** OS预热。 **取值范围：** - true：预热。 - false：不预热。
    *
    * @return $this
    */
    public function setOsWarmUp($osWarmUp)
    {
        $this->container['osWarmUp'] = $osWarmUp;
        return $this;
    }

    /**
    * Gets sourceName
    *  **参数解释：** 预热名称。 **约束限制：** os_warm_up为true时必填。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName **参数解释：** 预热名称。 **约束限制：** os_warm_up为true时必填。 **取值范围：** 支持1-64位字符，可包含字母、中文、数字、中划线、下划线。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
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

