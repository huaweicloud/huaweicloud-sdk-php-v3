<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebTamperProtectHostDirRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebTamperProtectHostDirRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectDir  **参数解释**: 防护目录 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位。Linux服务器，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。Windows服务器，目录名不能包含;/_*?\"<>|，不能以空格开头，不能以\\结尾。 **默认取值**: 不涉及
    * excludeChildDir  **参数解释**: 排除子目录 **约束限制**: 不涉及 **取值范围**: 子目录名必须是防护目录的有效相对路径，目录名最大长度不能超过256个字符，最多可添加10个子目录，多个子目录用;隔开。Linux服务器的子目录名不能以/开头或结尾，Windows服务器的子目录名不能以\\开头或结尾。 **默认取值**: 不涉及
    * excludeFilePath  **参数解释**: 排除文件路径 **约束限制**: 仅Linux服务器支持填写排除文件路径，Windows服务器不可填写该字段。 **取值范围**: 排除文件路径必须是防护目录的有效相对路径，不能以/开头或结尾，文件路径最大长度不能超过256个字符；最多可添加50个文件路径，多个文件路径用;隔开。 **默认取值**: 不涉及
    * localBackupDir  **参数解释**: 本地备份路径，Linux服务器必须填写该字段。 **约束限制**: 仅Linux服务器需要填写本地备份路径，Windows服务器不可填写该字段。 **取值范围**: 本地备份路径不能包含;字符，不能以空格开头，不能以/结尾，本地备份路径长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectDir' => 'string',
            'excludeChildDir' => 'string',
            'excludeFilePath' => 'string',
            'localBackupDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectDir  **参数解释**: 防护目录 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位。Linux服务器，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。Windows服务器，目录名不能包含;/_*?\"<>|，不能以空格开头，不能以\\结尾。 **默认取值**: 不涉及
    * excludeChildDir  **参数解释**: 排除子目录 **约束限制**: 不涉及 **取值范围**: 子目录名必须是防护目录的有效相对路径，目录名最大长度不能超过256个字符，最多可添加10个子目录，多个子目录用;隔开。Linux服务器的子目录名不能以/开头或结尾，Windows服务器的子目录名不能以\\开头或结尾。 **默认取值**: 不涉及
    * excludeFilePath  **参数解释**: 排除文件路径 **约束限制**: 仅Linux服务器支持填写排除文件路径，Windows服务器不可填写该字段。 **取值范围**: 排除文件路径必须是防护目录的有效相对路径，不能以/开头或结尾，文件路径最大长度不能超过256个字符；最多可添加50个文件路径，多个文件路径用;隔开。 **默认取值**: 不涉及
    * localBackupDir  **参数解释**: 本地备份路径，Linux服务器必须填写该字段。 **约束限制**: 仅Linux服务器需要填写本地备份路径，Windows服务器不可填写该字段。 **取值范围**: 本地备份路径不能包含;字符，不能以空格开头，不能以/结尾，本地备份路径长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectDir' => null,
        'excludeChildDir' => null,
        'excludeFilePath' => null,
        'localBackupDir' => null
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
    * protectDir  **参数解释**: 防护目录 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位。Linux服务器，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。Windows服务器，目录名不能包含;/_*?\"<>|，不能以空格开头，不能以\\结尾。 **默认取值**: 不涉及
    * excludeChildDir  **参数解释**: 排除子目录 **约束限制**: 不涉及 **取值范围**: 子目录名必须是防护目录的有效相对路径，目录名最大长度不能超过256个字符，最多可添加10个子目录，多个子目录用;隔开。Linux服务器的子目录名不能以/开头或结尾，Windows服务器的子目录名不能以\\开头或结尾。 **默认取值**: 不涉及
    * excludeFilePath  **参数解释**: 排除文件路径 **约束限制**: 仅Linux服务器支持填写排除文件路径，Windows服务器不可填写该字段。 **取值范围**: 排除文件路径必须是防护目录的有效相对路径，不能以/开头或结尾，文件路径最大长度不能超过256个字符；最多可添加50个文件路径，多个文件路径用;隔开。 **默认取值**: 不涉及
    * localBackupDir  **参数解释**: 本地备份路径，Linux服务器必须填写该字段。 **约束限制**: 仅Linux服务器需要填写本地备份路径，Windows服务器不可填写该字段。 **取值范围**: 本地备份路径不能包含;字符，不能以空格开头，不能以/结尾，本地备份路径长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectDir' => 'protect_dir',
            'excludeChildDir' => 'exclude_child_dir',
            'excludeFilePath' => 'exclude_file_path',
            'localBackupDir' => 'local_backup_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectDir  **参数解释**: 防护目录 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位。Linux服务器，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。Windows服务器，目录名不能包含;/_*?\"<>|，不能以空格开头，不能以\\结尾。 **默认取值**: 不涉及
    * excludeChildDir  **参数解释**: 排除子目录 **约束限制**: 不涉及 **取值范围**: 子目录名必须是防护目录的有效相对路径，目录名最大长度不能超过256个字符，最多可添加10个子目录，多个子目录用;隔开。Linux服务器的子目录名不能以/开头或结尾，Windows服务器的子目录名不能以\\开头或结尾。 **默认取值**: 不涉及
    * excludeFilePath  **参数解释**: 排除文件路径 **约束限制**: 仅Linux服务器支持填写排除文件路径，Windows服务器不可填写该字段。 **取值范围**: 排除文件路径必须是防护目录的有效相对路径，不能以/开头或结尾，文件路径最大长度不能超过256个字符；最多可添加50个文件路径，多个文件路径用;隔开。 **默认取值**: 不涉及
    * localBackupDir  **参数解释**: 本地备份路径，Linux服务器必须填写该字段。 **约束限制**: 仅Linux服务器需要填写本地备份路径，Windows服务器不可填写该字段。 **取值范围**: 本地备份路径不能包含;字符，不能以空格开头，不能以/结尾，本地备份路径长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'protectDir' => 'setProtectDir',
            'excludeChildDir' => 'setExcludeChildDir',
            'excludeFilePath' => 'setExcludeFilePath',
            'localBackupDir' => 'setLocalBackupDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectDir  **参数解释**: 防护目录 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位。Linux服务器，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。Windows服务器，目录名不能包含;/_*?\"<>|，不能以空格开头，不能以\\结尾。 **默认取值**: 不涉及
    * excludeChildDir  **参数解释**: 排除子目录 **约束限制**: 不涉及 **取值范围**: 子目录名必须是防护目录的有效相对路径，目录名最大长度不能超过256个字符，最多可添加10个子目录，多个子目录用;隔开。Linux服务器的子目录名不能以/开头或结尾，Windows服务器的子目录名不能以\\开头或结尾。 **默认取值**: 不涉及
    * excludeFilePath  **参数解释**: 排除文件路径 **约束限制**: 仅Linux服务器支持填写排除文件路径，Windows服务器不可填写该字段。 **取值范围**: 排除文件路径必须是防护目录的有效相对路径，不能以/开头或结尾，文件路径最大长度不能超过256个字符；最多可添加50个文件路径，多个文件路径用;隔开。 **默认取值**: 不涉及
    * localBackupDir  **参数解释**: 本地备份路径，Linux服务器必须填写该字段。 **约束限制**: 仅Linux服务器需要填写本地备份路径，Windows服务器不可填写该字段。 **取值范围**: 本地备份路径不能包含;字符，不能以空格开头，不能以/结尾，本地备份路径长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'protectDir' => 'getProtectDir',
            'excludeChildDir' => 'getExcludeChildDir',
            'excludeFilePath' => 'getExcludeFilePath',
            'localBackupDir' => 'getLocalBackupDir'
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
        $this->container['protectDir'] = isset($data['protectDir']) ? $data['protectDir'] : null;
        $this->container['excludeChildDir'] = isset($data['excludeChildDir']) ? $data['excludeChildDir'] : null;
        $this->container['excludeFilePath'] = isset($data['excludeFilePath']) ? $data['excludeFilePath'] : null;
        $this->container['localBackupDir'] = isset($data['localBackupDir']) ? $data['localBackupDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protectDir'] === null) {
            $invalidProperties[] = "'protectDir' can't be null";
        }
            if ((mb_strlen($this->container['protectDir']) > 256)) {
                $invalidProperties[] = "invalid value for 'protectDir', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['protectDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectDir', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.*$/", $this->container['protectDir'])) {
                $invalidProperties[] = "invalid value for 'protectDir', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['excludeChildDir']) && (mb_strlen($this->container['excludeChildDir']) > 2600)) {
                $invalidProperties[] = "invalid value for 'excludeChildDir', the character length must be smaller than or equal to 2600.";
            }
            if (!is_null($this->container['excludeChildDir']) && (mb_strlen($this->container['excludeChildDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'excludeChildDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeChildDir']) && !preg_match("/^.*$/", $this->container['excludeChildDir'])) {
                $invalidProperties[] = "invalid value for 'excludeChildDir', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['excludeFilePath']) && (mb_strlen($this->container['excludeFilePath']) > 3289600)) {
                $invalidProperties[] = "invalid value for 'excludeFilePath', the character length must be smaller than or equal to 3289600.";
            }
            if (!is_null($this->container['excludeFilePath']) && (mb_strlen($this->container['excludeFilePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'excludeFilePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeFilePath']) && !preg_match("/^.*$/", $this->container['excludeFilePath'])) {
                $invalidProperties[] = "invalid value for 'excludeFilePath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['localBackupDir']) && (mb_strlen($this->container['localBackupDir']) > 256)) {
                $invalidProperties[] = "invalid value for 'localBackupDir', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['localBackupDir']) && (mb_strlen($this->container['localBackupDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'localBackupDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['localBackupDir']) && !preg_match("/^.*$/", $this->container['localBackupDir'])) {
                $invalidProperties[] = "invalid value for 'localBackupDir', must be conform to the pattern /^.*$/.";
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
    * Gets protectDir
    *  **参数解释**: 防护目录 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位。Linux服务器，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。Windows服务器，目录名不能包含;/_*?\"<>|，不能以空格开头，不能以\\结尾。 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getProtectDir()
    {
        return $this->container['protectDir'];
    }

    /**
    * Sets protectDir
    *
    * @param string $protectDir **参数解释**: 防护目录 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位。Linux服务器，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。Windows服务器，目录名不能包含;/_*?\"<>|，不能以空格开头，不能以\\结尾。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectDir($protectDir)
    {
        $this->container['protectDir'] = $protectDir;
        return $this;
    }

    /**
    * Gets excludeChildDir
    *  **参数解释**: 排除子目录 **约束限制**: 不涉及 **取值范围**: 子目录名必须是防护目录的有效相对路径，目录名最大长度不能超过256个字符，最多可添加10个子目录，多个子目录用;隔开。Linux服务器的子目录名不能以/开头或结尾，Windows服务器的子目录名不能以\\开头或结尾。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getExcludeChildDir()
    {
        return $this->container['excludeChildDir'];
    }

    /**
    * Sets excludeChildDir
    *
    * @param string|null $excludeChildDir **参数解释**: 排除子目录 **约束限制**: 不涉及 **取值范围**: 子目录名必须是防护目录的有效相对路径，目录名最大长度不能超过256个字符，最多可添加10个子目录，多个子目录用;隔开。Linux服务器的子目录名不能以/开头或结尾，Windows服务器的子目录名不能以\\开头或结尾。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExcludeChildDir($excludeChildDir)
    {
        $this->container['excludeChildDir'] = $excludeChildDir;
        return $this;
    }

    /**
    * Gets excludeFilePath
    *  **参数解释**: 排除文件路径 **约束限制**: 仅Linux服务器支持填写排除文件路径，Windows服务器不可填写该字段。 **取值范围**: 排除文件路径必须是防护目录的有效相对路径，不能以/开头或结尾，文件路径最大长度不能超过256个字符；最多可添加50个文件路径，多个文件路径用;隔开。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getExcludeFilePath()
    {
        return $this->container['excludeFilePath'];
    }

    /**
    * Sets excludeFilePath
    *
    * @param string|null $excludeFilePath **参数解释**: 排除文件路径 **约束限制**: 仅Linux服务器支持填写排除文件路径，Windows服务器不可填写该字段。 **取值范围**: 排除文件路径必须是防护目录的有效相对路径，不能以/开头或结尾，文件路径最大长度不能超过256个字符；最多可添加50个文件路径，多个文件路径用;隔开。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExcludeFilePath($excludeFilePath)
    {
        $this->container['excludeFilePath'] = $excludeFilePath;
        return $this;
    }

    /**
    * Gets localBackupDir
    *  **参数解释**: 本地备份路径，Linux服务器必须填写该字段。 **约束限制**: 仅Linux服务器需要填写本地备份路径，Windows服务器不可填写该字段。 **取值范围**: 本地备份路径不能包含;字符，不能以空格开头，不能以/结尾，本地备份路径长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLocalBackupDir()
    {
        return $this->container['localBackupDir'];
    }

    /**
    * Sets localBackupDir
    *
    * @param string|null $localBackupDir **参数解释**: 本地备份路径，Linux服务器必须填写该字段。 **约束限制**: 仅Linux服务器需要填写本地备份路径，Windows服务器不可填写该字段。 **取值范围**: 本地备份路径不能包含;字符，不能以空格开头，不能以/结尾，本地备份路径长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLocalBackupDir($localBackupDir)
    {
        $this->container['localBackupDir'] = $localBackupDir;
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

