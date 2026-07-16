<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Code implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Code';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  **参数解释：** 代码来源类别。 **约束限制：** 不涉及。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 **默认取值：** 不涉及。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sourceId  **参数解释：** 代码来源ID，与address二选一，当且仅当source为EFS时，可以传入sfs turbo的ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * efsSubPath  **参数解释：** EFS子路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置, 是否只读。 **约束限制：** 不涉及。 **取值范围：** - true：只读。 - false：非只读。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'address' => 'string',
            'sourceId' => 'string',
            'mountPath' => 'string',
            'efsSubPath' => 'string',
            'readOnly' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  **参数解释：** 代码来源类别。 **约束限制：** 不涉及。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 **默认取值：** 不涉及。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sourceId  **参数解释：** 代码来源ID，与address二选一，当且仅当source为EFS时，可以传入sfs turbo的ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * efsSubPath  **参数解释：** EFS子路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置, 是否只读。 **约束限制：** 不涉及。 **取值范围：** - true：只读。 - false：非只读。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'address' => null,
        'sourceId' => null,
        'mountPath' => null,
        'efsSubPath' => null,
        'readOnly' => null
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
    * source  **参数解释：** 代码来源类别。 **约束限制：** 不涉及。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 **默认取值：** 不涉及。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sourceId  **参数解释：** 代码来源ID，与address二选一，当且仅当source为EFS时，可以传入sfs turbo的ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * efsSubPath  **参数解释：** EFS子路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置, 是否只读。 **约束限制：** 不涉及。 **取值范围：** - true：只读。 - false：非只读。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'address' => 'address',
            'sourceId' => 'source_id',
            'mountPath' => 'mount_path',
            'efsSubPath' => 'efs_sub_path',
            'readOnly' => 'read_only'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  **参数解释：** 代码来源类别。 **约束限制：** 不涉及。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 **默认取值：** 不涉及。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sourceId  **参数解释：** 代码来源ID，与address二选一，当且仅当source为EFS时，可以传入sfs turbo的ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * efsSubPath  **参数解释：** EFS子路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置, 是否只读。 **约束限制：** 不涉及。 **取值范围：** - true：只读。 - false：非只读。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'address' => 'setAddress',
            'sourceId' => 'setSourceId',
            'mountPath' => 'setMountPath',
            'efsSubPath' => 'setEfsSubPath',
            'readOnly' => 'setReadOnly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  **参数解释：** 代码来源类别。 **约束限制：** 不涉及。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 **默认取值：** 不涉及。
    * address  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sourceId  **参数解释：** 代码来源ID，与address二选一，当且仅当source为EFS时，可以传入sfs turbo的ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径。 **约束限制：** 不涉及。 **取值范围：** 以(/)开头和结尾，可包含字母、数字、中划线、下划线，整个挂载路径长度不能超过255位。 **默认取值：** 不涉及。
    * efsSubPath  **参数解释：** EFS子路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * readOnly  **参数解释：** 挂载权限设置, 是否只读。 **约束限制：** 不涉及。 **取值范围：** - true：只读。 - false：非只读。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'address' => 'getAddress',
            'sourceId' => 'getSourceId',
            'mountPath' => 'getMountPath',
            'efsSubPath' => 'getEfsSubPath',
            'readOnly' => 'getReadOnly'
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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['efsSubPath'] = isset($data['efsSubPath']) ? $data['efsSubPath'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
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
    *  **参数解释：** 代码来源类别。 **约束限制：** 不涉及。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 **默认取值：** 不涉及。
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
    * @param string $source **参数解释：** 代码来源类别。 **约束限制：** 不涉及。 **取值范围：** - OBS：对象存储服务。 - OBSFS：OBS的文件系统接口。 - EFS：弹性文件服务。 **默认取值：** 不涉及。
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
    *  **参数解释：** 代码来源地址，格式遵循不同存储系统。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $address **参数解释：** 代码来源地址，格式遵循不同存储系统。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets sourceId
    *  **参数解释：** 代码来源ID，与address二选一，当且仅当source为EFS时，可以传入sfs turbo的ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId **参数解释：** 代码来源ID，与address二选一，当且仅当source为EFS时，可以传入sfs turbo的ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
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
    * Gets efsSubPath
    *  **参数解释：** EFS子路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $efsSubPath **参数解释：** EFS子路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 挂载权限设置, 是否只读。 **约束限制：** 不涉及。 **取值范围：** - true：只读。 - false：非只读。 **默认取值：** 不涉及。
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
    * @param bool|null $readOnly **参数解释：** 挂载权限设置, 是否只读。 **约束限制：** 不涉及。 **取值范围：** - true：只读。 - false：非只读。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;
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

