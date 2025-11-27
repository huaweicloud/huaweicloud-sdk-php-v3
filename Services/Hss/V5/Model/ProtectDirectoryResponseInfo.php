<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectDirectoryResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectDirectoryResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectDirectory  **参数解释**： 防护目录 **取值范围**： 字符长度1-256位
    * excludeChildDirectoryList  **参数解释**： 需要排除的子目录列表 **取值范围**： 最少0条，最多10条
    * excludeFileList  **参数解释**： 需要排除的子文件列表 **取值范围**： 最少0条，最多10条
    * backupDirectory  **参数解释**： 备份目录 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectDirectory' => 'string',
            'excludeChildDirectoryList' => 'string[]',
            'excludeFileList' => 'string[]',
            'backupDirectory' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectDirectory  **参数解释**： 防护目录 **取值范围**： 字符长度1-256位
    * excludeChildDirectoryList  **参数解释**： 需要排除的子目录列表 **取值范围**： 最少0条，最多10条
    * excludeFileList  **参数解释**： 需要排除的子文件列表 **取值范围**： 最少0条，最多10条
    * backupDirectory  **参数解释**： 备份目录 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectDirectory' => null,
        'excludeChildDirectoryList' => null,
        'excludeFileList' => null,
        'backupDirectory' => null
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
    * protectDirectory  **参数解释**： 防护目录 **取值范围**： 字符长度1-256位
    * excludeChildDirectoryList  **参数解释**： 需要排除的子目录列表 **取值范围**： 最少0条，最多10条
    * excludeFileList  **参数解释**： 需要排除的子文件列表 **取值范围**： 最少0条，最多10条
    * backupDirectory  **参数解释**： 备份目录 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectDirectory' => 'protect_directory',
            'excludeChildDirectoryList' => 'exclude_child_directory_list',
            'excludeFileList' => 'exclude_file_list',
            'backupDirectory' => 'backup_directory'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectDirectory  **参数解释**： 防护目录 **取值范围**： 字符长度1-256位
    * excludeChildDirectoryList  **参数解释**： 需要排除的子目录列表 **取值范围**： 最少0条，最多10条
    * excludeFileList  **参数解释**： 需要排除的子文件列表 **取值范围**： 最少0条，最多10条
    * backupDirectory  **参数解释**： 备份目录 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'protectDirectory' => 'setProtectDirectory',
            'excludeChildDirectoryList' => 'setExcludeChildDirectoryList',
            'excludeFileList' => 'setExcludeFileList',
            'backupDirectory' => 'setBackupDirectory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectDirectory  **参数解释**： 防护目录 **取值范围**： 字符长度1-256位
    * excludeChildDirectoryList  **参数解释**： 需要排除的子目录列表 **取值范围**： 最少0条，最多10条
    * excludeFileList  **参数解释**： 需要排除的子文件列表 **取值范围**： 最少0条，最多10条
    * backupDirectory  **参数解释**： 备份目录 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'protectDirectory' => 'getProtectDirectory',
            'excludeChildDirectoryList' => 'getExcludeChildDirectoryList',
            'excludeFileList' => 'getExcludeFileList',
            'backupDirectory' => 'getBackupDirectory'
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
        $this->container['protectDirectory'] = isset($data['protectDirectory']) ? $data['protectDirectory'] : null;
        $this->container['excludeChildDirectoryList'] = isset($data['excludeChildDirectoryList']) ? $data['excludeChildDirectoryList'] : null;
        $this->container['excludeFileList'] = isset($data['excludeFileList']) ? $data['excludeFileList'] : null;
        $this->container['backupDirectory'] = isset($data['backupDirectory']) ? $data['backupDirectory'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protectDirectory']) && (mb_strlen($this->container['protectDirectory']) > 256)) {
                $invalidProperties[] = "invalid value for 'protectDirectory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['protectDirectory']) && (mb_strlen($this->container['protectDirectory']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectDirectory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupDirectory']) && (mb_strlen($this->container['backupDirectory']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupDirectory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backupDirectory']) && (mb_strlen($this->container['backupDirectory']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupDirectory', the character length must be bigger than or equal to 1.";
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
    * Gets protectDirectory
    *  **参数解释**： 防护目录 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getProtectDirectory()
    {
        return $this->container['protectDirectory'];
    }

    /**
    * Sets protectDirectory
    *
    * @param string|null $protectDirectory **参数解释**： 防护目录 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setProtectDirectory($protectDirectory)
    {
        $this->container['protectDirectory'] = $protectDirectory;
        return $this;
    }

    /**
    * Gets excludeChildDirectoryList
    *  **参数解释**： 需要排除的子目录列表 **取值范围**： 最少0条，最多10条
    *
    * @return string[]|null
    */
    public function getExcludeChildDirectoryList()
    {
        return $this->container['excludeChildDirectoryList'];
    }

    /**
    * Sets excludeChildDirectoryList
    *
    * @param string[]|null $excludeChildDirectoryList **参数解释**： 需要排除的子目录列表 **取值范围**： 最少0条，最多10条
    *
    * @return $this
    */
    public function setExcludeChildDirectoryList($excludeChildDirectoryList)
    {
        $this->container['excludeChildDirectoryList'] = $excludeChildDirectoryList;
        return $this;
    }

    /**
    * Gets excludeFileList
    *  **参数解释**： 需要排除的子文件列表 **取值范围**： 最少0条，最多10条
    *
    * @return string[]|null
    */
    public function getExcludeFileList()
    {
        return $this->container['excludeFileList'];
    }

    /**
    * Sets excludeFileList
    *
    * @param string[]|null $excludeFileList **参数解释**： 需要排除的子文件列表 **取值范围**： 最少0条，最多10条
    *
    * @return $this
    */
    public function setExcludeFileList($excludeFileList)
    {
        $this->container['excludeFileList'] = $excludeFileList;
        return $this;
    }

    /**
    * Gets backupDirectory
    *  **参数解释**： 备份目录 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getBackupDirectory()
    {
        return $this->container['backupDirectory'];
    }

    /**
    * Sets backupDirectory
    *
    * @param string|null $backupDirectory **参数解释**： 备份目录 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setBackupDirectory($backupDirectory)
    {
        $this->container['backupDirectory'] = $backupDirectory;
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

