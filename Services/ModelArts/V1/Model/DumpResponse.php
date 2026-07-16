<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DumpResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DumpResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  **参数解释：** 用户转储来源类别。 **取值范围：** - [OBS：对象存储服务。](tag:hws,hws_hk) - OBSFS：OBS的文件系统接口。
    * address  **参数解释：** 用户转储来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径，要求以/开头，后面可包含中划线，反斜杠，下划线，点号，字母，数字。 **取值范围：** 不涉及。
    * type  **参数解释：** 转储类型。 **取值范围：** - DUMP：用户自定义转储。 - DUMP_SYS：系统转储。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'address' => 'string',
            'mountPath' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  **参数解释：** 用户转储来源类别。 **取值范围：** - [OBS：对象存储服务。](tag:hws,hws_hk) - OBSFS：OBS的文件系统接口。
    * address  **参数解释：** 用户转储来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径，要求以/开头，后面可包含中划线，反斜杠，下划线，点号，字母，数字。 **取值范围：** 不涉及。
    * type  **参数解释：** 转储类型。 **取值范围：** - DUMP：用户自定义转储。 - DUMP_SYS：系统转储。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'address' => null,
        'mountPath' => null,
        'type' => null
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
    * source  **参数解释：** 用户转储来源类别。 **取值范围：** - [OBS：对象存储服务。](tag:hws,hws_hk) - OBSFS：OBS的文件系统接口。
    * address  **参数解释：** 用户转储来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径，要求以/开头，后面可包含中划线，反斜杠，下划线，点号，字母，数字。 **取值范围：** 不涉及。
    * type  **参数解释：** 转储类型。 **取值范围：** - DUMP：用户自定义转储。 - DUMP_SYS：系统转储。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'address' => 'address',
            'mountPath' => 'mount_path',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  **参数解释：** 用户转储来源类别。 **取值范围：** - [OBS：对象存储服务。](tag:hws,hws_hk) - OBSFS：OBS的文件系统接口。
    * address  **参数解释：** 用户转储来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径，要求以/开头，后面可包含中划线，反斜杠，下划线，点号，字母，数字。 **取值范围：** 不涉及。
    * type  **参数解释：** 转储类型。 **取值范围：** - DUMP：用户自定义转储。 - DUMP_SYS：系统转储。
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'address' => 'setAddress',
            'mountPath' => 'setMountPath',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  **参数解释：** 用户转储来源类别。 **取值范围：** - [OBS：对象存储服务。](tag:hws,hws_hk) - OBSFS：OBS的文件系统接口。
    * address  **参数解释：** 用户转储来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
    * mountPath  **参数解释：** 挂载到容器内的路径，要求以/开头，后面可包含中划线，反斜杠，下划线，点号，字母，数字。 **取值范围：** 不涉及。
    * type  **参数解释：** 转储类型。 **取值范围：** - DUMP：用户自定义转储。 - DUMP_SYS：系统转储。
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'address' => 'getAddress',
            'mountPath' => 'getMountPath',
            'type' => 'getType'
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
    const SOURCE_OBS = 'OBS';
    const SOURCE_OBSFS = 'OBSFS';
    const TYPE_DUMP = 'DUMP';
    const TYPE_DUMP_SYS = 'DUMP_SYS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_OBS,
            self::SOURCE_OBSFS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DUMP,
            self::TYPE_DUMP_SYS,
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
            $allowedValues = $this->getSourceAllowableValues();
                if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['address']) && !preg_match("/^https:\/\/([\\w._-]+)\\.obs[\\w]*\\.[\\w.-]+\\.(com|cn)((?!.*_\/\\.*_\/)(?!.*[*?])\/[\\w\\s\\u4e00-\\u9fff\/.-]*)\/$ | ^(obs:\/)?(?!.*[*?])(?!.*_\/\\.*_\/)\/([\\w\\s\\u4e00-\\u9fff.-]+)(\/[\\w\\s\\u4e00-\\u9fff\/.-]*)?\/$/", $this->container['address'])) {
                $invalidProperties[] = "invalid value for 'address', must be conform to the pattern /^https:\/\/([\\w._-]+)\\.obs[\\w]*\\.[\\w.-]+\\.(com|cn)((?!.*_\/\\.*_\/)(?!.*[*?])\/[\\w\\s\\u4e00-\\u9fff\/.-]*)\/$ | ^(obs:\/)?(?!.*[*?])(?!.*_\/\\.*_\/)\/([\\w\\s\\u4e00-\\u9fff.-]+)(\/[\\w\\s\\u4e00-\\u9fff\/.-]*)?\/$/.";
            }
        if ($this->container['mountPath'] === null) {
            $invalidProperties[] = "'mountPath' can't be null";
        }
            if (!preg_match("/^[\/][\\w+\/-]{0,4096}$/", $this->container['mountPath'])) {
                $invalidProperties[] = "invalid value for 'mountPath', must be conform to the pattern /^[\/][\\w+\/-]{0,4096}$/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets source
    *  **参数解释：** 用户转储来源类别。 **取值范围：** - [OBS：对象存储服务。](tag:hws,hws_hk) - OBSFS：OBS的文件系统接口。
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
    * @param string $source **参数解释：** 用户转储来源类别。 **取值范围：** - [OBS：对象存储服务。](tag:hws,hws_hk) - OBSFS：OBS的文件系统接口。
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
    *  **参数解释：** 用户转储来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
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
    * @param string|null $address **参数解释：** 用户转储来源地址，格式遵循不同存储系统。 **取值范围：** 不涉及。
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
    *  **参数解释：** 挂载到容器内的路径，要求以/开头，后面可包含中划线，反斜杠，下划线，点号，字母，数字。 **取值范围：** 不涉及。
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
    * @param string $mountPath **参数解释：** 挂载到容器内的路径，要求以/开头，后面可包含中划线，反斜杠，下划线，点号，字母，数字。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 转储类型。 **取值范围：** - DUMP：用户自定义转储。 - DUMP_SYS：系统转储。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 转储类型。 **取值范围：** - DUMP：用户自定义转储。 - DUMP_SYS：系统转储。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

