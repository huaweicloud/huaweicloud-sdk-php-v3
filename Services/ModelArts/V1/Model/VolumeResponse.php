<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**：notebook返回的扩展存储类型 **参数约束**：不涉及 - OBS：对象存储服务 - OBSFS：并行文件存储 - EFS：弹性文件服务
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录 **参数约束**：不涉及
    * url  **参数解释**：当category为OBS、OBSFS时，挂载存储源路径。 **参数约束**：不涉及
    * status  **参数解释**：存储状态 - MOUNTING: 正在挂载中； - MOUNTED: 已挂载成功； - UNMOUNTING: 正在卸载中； - UNMOUNTED: 已卸载完成； - MOUNT_FAILED: 挂载失败 - UNMOUNT_FAILED：卸载失败； **参数约束**：不涉及
    * mountType  **参数解释**：存储挂载类型，枚举类。 **约束限制**：无限制。 - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'mountPath' => 'string',
            'url' => 'string',
            'status' => 'string',
            'mountType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**：notebook返回的扩展存储类型 **参数约束**：不涉及 - OBS：对象存储服务 - OBSFS：并行文件存储 - EFS：弹性文件服务
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录 **参数约束**：不涉及
    * url  **参数解释**：当category为OBS、OBSFS时，挂载存储源路径。 **参数约束**：不涉及
    * status  **参数解释**：存储状态 - MOUNTING: 正在挂载中； - MOUNTED: 已挂载成功； - UNMOUNTING: 正在卸载中； - UNMOUNTED: 已卸载完成； - MOUNT_FAILED: 挂载失败 - UNMOUNT_FAILED：卸载失败； **参数约束**：不涉及
    * mountType  **参数解释**：存储挂载类型，枚举类。 **约束限制**：无限制。 - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'mountPath' => null,
        'url' => null,
        'status' => null,
        'mountType' => null
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
    * category  **参数解释**：notebook返回的扩展存储类型 **参数约束**：不涉及 - OBS：对象存储服务 - OBSFS：并行文件存储 - EFS：弹性文件服务
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录 **参数约束**：不涉及
    * url  **参数解释**：当category为OBS、OBSFS时，挂载存储源路径。 **参数约束**：不涉及
    * status  **参数解释**：存储状态 - MOUNTING: 正在挂载中； - MOUNTED: 已挂载成功； - UNMOUNTING: 正在卸载中； - UNMOUNTED: 已卸载完成； - MOUNT_FAILED: 挂载失败 - UNMOUNT_FAILED：卸载失败； **参数约束**：不涉及
    * mountType  **参数解释**：存储挂载类型，枚举类。 **约束限制**：无限制。 - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'mountPath' => 'mount_path',
            'url' => 'url',
            'status' => 'status',
            'mountType' => 'mount_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**：notebook返回的扩展存储类型 **参数约束**：不涉及 - OBS：对象存储服务 - OBSFS：并行文件存储 - EFS：弹性文件服务
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录 **参数约束**：不涉及
    * url  **参数解释**：当category为OBS、OBSFS时，挂载存储源路径。 **参数约束**：不涉及
    * status  **参数解释**：存储状态 - MOUNTING: 正在挂载中； - MOUNTED: 已挂载成功； - UNMOUNTING: 正在卸载中； - UNMOUNTED: 已卸载完成； - MOUNT_FAILED: 挂载失败 - UNMOUNT_FAILED：卸载失败； **参数约束**：不涉及
    * mountType  **参数解释**：存储挂载类型，枚举类。 **约束限制**：无限制。 - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'mountPath' => 'setMountPath',
            'url' => 'setUrl',
            'status' => 'setStatus',
            'mountType' => 'setMountType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**：notebook返回的扩展存储类型 **参数约束**：不涉及 - OBS：对象存储服务 - OBSFS：并行文件存储 - EFS：弹性文件服务
    * mountPath  **参数解释**：存储挂载至Notebook实例的目录 **参数约束**：不涉及
    * url  **参数解释**：当category为OBS、OBSFS时，挂载存储源路径。 **参数约束**：不涉及
    * status  **参数解释**：存储状态 - MOUNTING: 正在挂载中； - MOUNTED: 已挂载成功； - UNMOUNTING: 正在卸载中； - UNMOUNTED: 已卸载完成； - MOUNT_FAILED: 挂载失败 - UNMOUNT_FAILED：卸载失败； **参数约束**：不涉及
    * mountType  **参数解释**：存储挂载类型，枚举类。 **约束限制**：无限制。 - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'mountPath' => 'getMountPath',
            'url' => 'getUrl',
            'status' => 'getStatus',
            'mountType' => 'getMountType'
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
    const CATEGORY_OBS = 'OBS';
    const CATEGORY_OBSFS = 'OBSFS';
    const CATEGORY_EFS = 'EFS';
    const STATUS_MOUNTING = 'MOUNTING';
    const STATUS_MOUNTED = 'MOUNTED';
    const STATUS_UNMOUNTING = 'UNMOUNTING';
    const STATUS_UNMOUNTED = 'UNMOUNTED';
    const STATUS_MOUNT_FAILED = 'MOUNT_FAILED';
    const STATUS_UNMOUNT_FAILED = 'UNMOUNT_FAILED';
    const MOUNT_TYPE__STATIC = 'STATIC';
    const MOUNT_TYPE_DYNAMIC = 'DYNAMIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_OBS,
            self::CATEGORY_OBSFS,
            self::CATEGORY_EFS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_MOUNTING,
            self::STATUS_MOUNTED,
            self::STATUS_UNMOUNTING,
            self::STATUS_UNMOUNTED,
            self::STATUS_MOUNT_FAILED,
            self::STATUS_UNMOUNT_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMountTypeAllowableValues()
    {
        return [
            self::MOUNT_TYPE__STATIC,
            self::MOUNT_TYPE_DYNAMIC,
        ];
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['mountType'] = isset($data['mountType']) ? $data['mountType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['mountPath']) && (mb_strlen($this->container['mountPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'mountPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['mountPath']) && (mb_strlen($this->container['mountPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'mountPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 256)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMountTypeAllowableValues();
                if (!is_null($this->container['mountType']) && !in_array($this->container['mountType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mountType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets category
    *  **参数解释**：notebook返回的扩展存储类型 **参数约束**：不涉及 - OBS：对象存储服务 - OBSFS：并行文件存储 - EFS：弹性文件服务
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**：notebook返回的扩展存储类型 **参数约束**：不涉及 - OBS：对象存储服务 - OBSFS：并行文件存储 - EFS：弹性文件服务
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets mountPath
    *  **参数解释**：存储挂载至Notebook实例的目录 **参数约束**：不涉及
    *
    * @return string|null
    */
    public function getMountPath()
    {
        return $this->container['mountPath'];
    }

    /**
    * Sets mountPath
    *
    * @param string|null $mountPath **参数解释**：存储挂载至Notebook实例的目录 **参数约束**：不涉及
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释**：当category为OBS、OBSFS时，挂载存储源路径。 **参数约束**：不涉及
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释**：当category为OBS、OBSFS时，挂载存储源路径。 **参数约束**：不涉及
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：存储状态 - MOUNTING: 正在挂载中； - MOUNTED: 已挂载成功； - UNMOUNTING: 正在卸载中； - UNMOUNTED: 已卸载完成； - MOUNT_FAILED: 挂载失败 - UNMOUNT_FAILED：卸载失败； **参数约束**：不涉及
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：存储状态 - MOUNTING: 正在挂载中； - MOUNTED: 已挂载成功； - UNMOUNTING: 正在卸载中； - UNMOUNTED: 已卸载完成； - MOUNT_FAILED: 挂载失败 - UNMOUNT_FAILED：卸载失败； **参数约束**：不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets mountType
    *  **参数解释**：存储挂载类型，枚举类。 **约束限制**：无限制。 - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @return string|null
    */
    public function getMountType()
    {
        return $this->container['mountType'];
    }

    /**
    * Sets mountType
    *
    * @param string|null $mountType **参数解释**：存储挂载类型，枚举类。 **约束限制**：无限制。 - STATIC:不支持在实例运行期间挂载以及卸载的存储 - DYNAMIC:支持在实例运行期间挂载以及卸载的存储
    *
    * @return $this
    */
    public function setMountType($mountType)
    {
        $this->container['mountType'] = $mountType;
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

