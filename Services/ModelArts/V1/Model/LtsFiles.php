<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsFiles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsFiles';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logPath  **参数解释：** 日志文件路径。 **约束限制：** 1.路径必须以 / 开头，且第一级目录不能使用通配符，只能包含大写字母，小写字母，数字或特殊符号-_/_*?，长度不能超过 512 个字符。 2.最多允许三级目录使用通配符进行匹配。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    * filePattern  **参数解释：** 日志文件名称。 **约束限制：** 只能包含大写字母，小写字母，数字或特殊字符-_*?，不支持.gz .tar .zip后缀类型，长度不能超过 255 个字符。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logPath' => 'string',
            'filePattern' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logPath  **参数解释：** 日志文件路径。 **约束限制：** 1.路径必须以 / 开头，且第一级目录不能使用通配符，只能包含大写字母，小写字母，数字或特殊符号-_/_*?，长度不能超过 512 个字符。 2.最多允许三级目录使用通配符进行匹配。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    * filePattern  **参数解释：** 日志文件名称。 **约束限制：** 只能包含大写字母，小写字母，数字或特殊字符-_*?，不支持.gz .tar .zip后缀类型，长度不能超过 255 个字符。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logPath' => null,
        'filePattern' => null
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
    * logPath  **参数解释：** 日志文件路径。 **约束限制：** 1.路径必须以 / 开头，且第一级目录不能使用通配符，只能包含大写字母，小写字母，数字或特殊符号-_/_*?，长度不能超过 512 个字符。 2.最多允许三级目录使用通配符进行匹配。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    * filePattern  **参数解释：** 日志文件名称。 **约束限制：** 只能包含大写字母，小写字母，数字或特殊字符-_*?，不支持.gz .tar .zip后缀类型，长度不能超过 255 个字符。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logPath' => 'log_path',
            'filePattern' => 'file_pattern'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logPath  **参数解释：** 日志文件路径。 **约束限制：** 1.路径必须以 / 开头，且第一级目录不能使用通配符，只能包含大写字母，小写字母，数字或特殊符号-_/_*?，长度不能超过 512 个字符。 2.最多允许三级目录使用通配符进行匹配。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    * filePattern  **参数解释：** 日志文件名称。 **约束限制：** 只能包含大写字母，小写字母，数字或特殊字符-_*?，不支持.gz .tar .zip后缀类型，长度不能超过 255 个字符。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'logPath' => 'setLogPath',
            'filePattern' => 'setFilePattern'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logPath  **参数解释：** 日志文件路径。 **约束限制：** 1.路径必须以 / 开头，且第一级目录不能使用通配符，只能包含大写字母，小写字母，数字或特殊符号-_/_*?，长度不能超过 512 个字符。 2.最多允许三级目录使用通配符进行匹配。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    * filePattern  **参数解释：** 日志文件名称。 **约束限制：** 只能包含大写字母，小写字母，数字或特殊字符-_*?，不支持.gz .tar .zip后缀类型，长度不能超过 255 个字符。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'logPath' => 'getLogPath',
            'filePattern' => 'getFilePattern'
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
        $this->container['logPath'] = isset($data['logPath']) ? $data['logPath'] : null;
        $this->container['filePattern'] = isset($data['filePattern']) ? $data['filePattern'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logPath'] === null) {
            $invalidProperties[] = "'logPath' can't be null";
        }
        if ($this->container['filePattern'] === null) {
            $invalidProperties[] = "'filePattern' can't be null";
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
    * Gets logPath
    *  **参数解释：** 日志文件路径。 **约束限制：** 1.路径必须以 / 开头，且第一级目录不能使用通配符，只能包含大写字母，小写字母，数字或特殊符号-_/_*?，长度不能超过 512 个字符。 2.最多允许三级目录使用通配符进行匹配。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getLogPath()
    {
        return $this->container['logPath'];
    }

    /**
    * Sets logPath
    *
    * @param string $logPath **参数解释：** 日志文件路径。 **约束限制：** 1.路径必须以 / 开头，且第一级目录不能使用通配符，只能包含大写字母，小写字母，数字或特殊符号-_/_*?，长度不能超过 512 个字符。 2.最多允许三级目录使用通配符进行匹配。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLogPath($logPath)
    {
        $this->container['logPath'] = $logPath;
        return $this;
    }

    /**
    * Gets filePattern
    *  **参数解释：** 日志文件名称。 **约束限制：** 只能包含大写字母，小写字母，数字或特殊字符-_*?，不支持.gz .tar .zip后缀类型，长度不能超过 255 个字符。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getFilePattern()
    {
        return $this->container['filePattern'];
    }

    /**
    * Sets filePattern
    *
    * @param string $filePattern **参数解释：** 日志文件名称。 **约束限制：** 只能包含大写字母，小写字母，数字或特殊字符-_*?，不支持.gz .tar .zip后缀类型，长度不能超过 255 个字符。 **取值范围：** 不涉及 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFilePattern($filePattern)
    {
        $this->container['filePattern'] = $filePattern;
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

