<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddAppWhitelistPolicyProcessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddAppWhitelistPolicyProcessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processName' => 'string',
            'processPath' => 'string',
            'processHash' => 'string',
            'containerId' => 'string',
            'cmdline' => 'string',
            'fileSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processName' => null,
        'processPath' => null,
        'processHash' => null,
        'containerId' => null,
        'cmdline' => null,
        'fileSize' => 'int64'
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
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processName' => 'process_name',
            'processPath' => 'process_path',
            'processHash' => 'process_hash',
            'containerId' => 'container_id',
            'cmdline' => 'cmdline',
            'fileSize' => 'file_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'processName' => 'setProcessName',
            'processPath' => 'setProcessPath',
            'processHash' => 'setProcessHash',
            'containerId' => 'setContainerId',
            'cmdline' => 'setCmdline',
            'fileSize' => 'setFileSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processName  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    * processPath  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    * processHash  进程hash
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * cmdline  **参数解释**： 进程命令行 **约束限制**： 不涉及
    * fileSize  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'processName' => 'getProcessName',
            'processPath' => 'getProcessPath',
            'processHash' => 'getProcessHash',
            'containerId' => 'getContainerId',
            'cmdline' => 'getCmdline',
            'fileSize' => 'getFileSize'
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
        $this->container['processName'] = isset($data['processName']) ? $data['processName'] : null;
        $this->container['processPath'] = isset($data['processPath']) ? $data['processPath'] : null;
        $this->container['processHash'] = isset($data['processHash']) ? $data['processHash'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['cmdline'] = isset($data['cmdline']) ? $data['cmdline'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) > 128)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) < 1)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processName']) && !preg_match("/^.*$/", $this->container['processName'])) {
                $invalidProperties[] = "invalid value for 'processName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processHash']) && (mb_strlen($this->container['processHash']) > 128)) {
                $invalidProperties[] = "invalid value for 'processHash', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processHash']) && (mb_strlen($this->container['processHash']) < 1)) {
                $invalidProperties[] = "invalid value for 'processHash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cmdline']) && !preg_match("/^.*$/", $this->container['cmdline'])) {
                $invalidProperties[] = "invalid value for 'cmdline', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 0.";
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
    * Gets processName
    *  **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getProcessName()
    {
        return $this->container['processName'];
    }

    /**
    * Sets processName
    *
    * @param string|null $processName **参数解释**： 进程名称 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setProcessName($processName)
    {
        $this->container['processName'] = $processName;
        return $this;
    }

    /**
    * Gets processPath
    *  **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProcessPath()
    {
        return $this->container['processPath'];
    }

    /**
    * Sets processPath
    *
    * @param string|null $processPath **参数解释**： 进程路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProcessPath($processPath)
    {
        $this->container['processPath'] = $processPath;
        return $this;
    }

    /**
    * Gets processHash
    *  进程hash
    *
    * @return string|null
    */
    public function getProcessHash()
    {
        return $this->container['processHash'];
    }

    /**
    * Sets processHash
    *
    * @param string|null $processHash 进程hash
    *
    * @return $this
    */
    public function setProcessHash($processHash)
    {
        $this->container['processHash'] = $processHash;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets cmdline
    *  **参数解释**： 进程命令行 **约束限制**： 不涉及
    *
    * @return string|null
    */
    public function getCmdline()
    {
        return $this->container['cmdline'];
    }

    /**
    * Sets cmdline
    *
    * @param string|null $cmdline **参数解释**： 进程命令行 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setCmdline($cmdline)
    {
        $this->container['cmdline'] = $cmdline;
        return $this;
    }

    /**
    * Gets fileSize
    *  **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize **参数解释**: 文件大小 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值9223372036854775807 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
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

