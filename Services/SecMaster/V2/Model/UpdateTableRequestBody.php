<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTableRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTableRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableAlias' => 'string',
            'tableAliasEn' => 'string',
            'tableAliasFr' => 'string',
            'description' => 'string',
            'descriptionEn' => 'string',
            'descriptionFr' => 'string',
            'directory' => 'string',
            'directoryEn' => 'string',
            'directoryFr' => 'string',
            'storageSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableStorageSettingDto',
            'displaySetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableDisplaySettingDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableAlias' => null,
        'tableAliasEn' => null,
        'tableAliasFr' => null,
        'description' => null,
        'descriptionEn' => null,
        'descriptionFr' => null,
        'directory' => null,
        'directoryEn' => null,
        'directoryFr' => null,
        'storageSetting' => null,
        'displaySetting' => null
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
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableAlias' => 'table_alias',
            'tableAliasEn' => 'table_alias_en',
            'tableAliasFr' => 'table_alias_fr',
            'description' => 'description',
            'descriptionEn' => 'description_en',
            'descriptionFr' => 'description_fr',
            'directory' => 'directory',
            'directoryEn' => 'directory_en',
            'directoryFr' => 'directory_fr',
            'storageSetting' => 'storage_setting',
            'displaySetting' => 'display_setting'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $setters = [
            'tableAlias' => 'setTableAlias',
            'tableAliasEn' => 'setTableAliasEn',
            'tableAliasFr' => 'setTableAliasFr',
            'description' => 'setDescription',
            'descriptionEn' => 'setDescriptionEn',
            'descriptionFr' => 'setDescriptionFr',
            'directory' => 'setDirectory',
            'directoryEn' => 'setDirectoryEn',
            'directoryFr' => 'setDirectoryFr',
            'storageSetting' => 'setStorageSetting',
            'displaySetting' => 'setDisplaySetting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $getters = [
            'tableAlias' => 'getTableAlias',
            'tableAliasEn' => 'getTableAliasEn',
            'tableAliasFr' => 'getTableAliasFr',
            'description' => 'getDescription',
            'descriptionEn' => 'getDescriptionEn',
            'descriptionFr' => 'getDescriptionFr',
            'directory' => 'getDirectory',
            'directoryEn' => 'getDirectoryEn',
            'directoryFr' => 'getDirectoryFr',
            'storageSetting' => 'getStorageSetting',
            'displaySetting' => 'getDisplaySetting'
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
        $this->container['tableAlias'] = isset($data['tableAlias']) ? $data['tableAlias'] : null;
        $this->container['tableAliasEn'] = isset($data['tableAliasEn']) ? $data['tableAliasEn'] : null;
        $this->container['tableAliasFr'] = isset($data['tableAliasFr']) ? $data['tableAliasFr'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['descriptionEn'] = isset($data['descriptionEn']) ? $data['descriptionEn'] : null;
        $this->container['descriptionFr'] = isset($data['descriptionFr']) ? $data['descriptionFr'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['directoryEn'] = isset($data['directoryEn']) ? $data['directoryEn'] : null;
        $this->container['directoryFr'] = isset($data['directoryFr']) ? $data['directoryFr'] : null;
        $this->container['storageSetting'] = isset($data['storageSetting']) ? $data['storageSetting'] : null;
        $this->container['displaySetting'] = isset($data['displaySetting']) ? $data['displaySetting'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tableAlias']) && (mb_strlen($this->container['tableAlias']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableAlias', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tableAlias']) && (mb_strlen($this->container['tableAlias']) < 5)) {
                $invalidProperties[] = "invalid value for 'tableAlias', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['tableAliasEn']) && (mb_strlen($this->container['tableAliasEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableAliasEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tableAliasEn']) && (mb_strlen($this->container['tableAliasEn']) < 5)) {
                $invalidProperties[] = "invalid value for 'tableAliasEn', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['tableAliasFr']) && (mb_strlen($this->container['tableAliasFr']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableAliasFr', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tableAliasFr']) && (mb_strlen($this->container['tableAliasFr']) < 5)) {
                $invalidProperties[] = "invalid value for 'tableAliasFr', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['descriptionFr']) && (mb_strlen($this->container['descriptionFr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'descriptionFr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['descriptionFr']) && (mb_strlen($this->container['descriptionFr']) < 0)) {
                $invalidProperties[] = "invalid value for 'descriptionFr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directoryEn']) && (mb_strlen($this->container['directoryEn']) > 256)) {
                $invalidProperties[] = "invalid value for 'directoryEn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directoryEn']) && (mb_strlen($this->container['directoryEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'directoryEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directoryFr']) && (mb_strlen($this->container['directoryFr']) > 256)) {
                $invalidProperties[] = "invalid value for 'directoryFr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directoryFr']) && (mb_strlen($this->container['directoryFr']) < 1)) {
                $invalidProperties[] = "invalid value for 'directoryFr', the character length must be bigger than or equal to 1.";
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
    * Gets tableAlias
    *  表别名
    *
    * @return string|null
    */
    public function getTableAlias()
    {
        return $this->container['tableAlias'];
    }

    /**
    * Sets tableAlias
    *
    * @param string|null $tableAlias 表别名
    *
    * @return $this
    */
    public function setTableAlias($tableAlias)
    {
        $this->container['tableAlias'] = $tableAlias;
        return $this;
    }

    /**
    * Gets tableAliasEn
    *  表别名
    *
    * @return string|null
    */
    public function getTableAliasEn()
    {
        return $this->container['tableAliasEn'];
    }

    /**
    * Sets tableAliasEn
    *
    * @param string|null $tableAliasEn 表别名
    *
    * @return $this
    */
    public function setTableAliasEn($tableAliasEn)
    {
        $this->container['tableAliasEn'] = $tableAliasEn;
        return $this;
    }

    /**
    * Gets tableAliasFr
    *  表别名
    *
    * @return string|null
    */
    public function getTableAliasFr()
    {
        return $this->container['tableAliasFr'];
    }

    /**
    * Sets tableAliasFr
    *
    * @param string|null $tableAliasFr 表别名
    *
    * @return $this
    */
    public function setTableAliasFr($tableAliasFr)
    {
        $this->container['tableAliasFr'] = $tableAliasFr;
        return $this;
    }

    /**
    * Gets description
    *  表相关描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 表相关描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets descriptionEn
    *  表相关描述
    *
    * @return string|null
    */
    public function getDescriptionEn()
    {
        return $this->container['descriptionEn'];
    }

    /**
    * Sets descriptionEn
    *
    * @param string|null $descriptionEn 表相关描述
    *
    * @return $this
    */
    public function setDescriptionEn($descriptionEn)
    {
        $this->container['descriptionEn'] = $descriptionEn;
        return $this;
    }

    /**
    * Gets descriptionFr
    *  表相关描述
    *
    * @return string|null
    */
    public function getDescriptionFr()
    {
        return $this->container['descriptionFr'];
    }

    /**
    * Sets descriptionFr
    *
    * @param string|null $descriptionFr 表相关描述
    *
    * @return $this
    */
    public function setDescriptionFr($descriptionFr)
    {
        $this->container['descriptionFr'] = $descriptionFr;
        return $this;
    }

    /**
    * Gets directory
    *  目录分组
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory 目录分组
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets directoryEn
    *  目录分组
    *
    * @return string|null
    */
    public function getDirectoryEn()
    {
        return $this->container['directoryEn'];
    }

    /**
    * Sets directoryEn
    *
    * @param string|null $directoryEn 目录分组
    *
    * @return $this
    */
    public function setDirectoryEn($directoryEn)
    {
        $this->container['directoryEn'] = $directoryEn;
        return $this;
    }

    /**
    * Gets directoryFr
    *  目录分组
    *
    * @return string|null
    */
    public function getDirectoryFr()
    {
        return $this->container['directoryFr'];
    }

    /**
    * Sets directoryFr
    *
    * @param string|null $directoryFr 目录分组
    *
    * @return $this
    */
    public function setDirectoryFr($directoryFr)
    {
        $this->container['directoryFr'] = $directoryFr;
        return $this;
    }

    /**
    * Gets storageSetting
    *  storageSetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableStorageSettingDto|null
    */
    public function getStorageSetting()
    {
        return $this->container['storageSetting'];
    }

    /**
    * Sets storageSetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableStorageSettingDto|null $storageSetting storageSetting
    *
    * @return $this
    */
    public function setStorageSetting($storageSetting)
    {
        $this->container['storageSetting'] = $storageSetting;
        return $this;
    }

    /**
    * Gets displaySetting
    *  displaySetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableDisplaySettingDto|null
    */
    public function getDisplaySetting()
    {
        return $this->container['displaySetting'];
    }

    /**
    * Sets displaySetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableDisplaySettingDto|null $displaySetting displaySetting
    *
    * @return $this
    */
    public function setDisplaySetting($displaySetting)
    {
        $this->container['displaySetting'] = $displaySetting;
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

