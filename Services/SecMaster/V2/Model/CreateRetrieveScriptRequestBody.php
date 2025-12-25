<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRetrieveScriptRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRetrieveScriptRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableId  UUID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * script  脚本内容，长度在1到10240个字符之间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableId' => 'string',
            'scriptName' => 'string',
            'category' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ScriptCategory',
            'directory' => 'string',
            'description' => 'string',
            'script' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableId  UUID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * script  脚本内容，长度在1到10240个字符之间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableId' => null,
        'scriptName' => null,
        'category' => null,
        'directory' => null,
        'description' => null,
        'script' => null
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
    * tableId  UUID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * script  脚本内容，长度在1到10240个字符之间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableId' => 'table_id',
            'scriptName' => 'script_name',
            'category' => 'category',
            'directory' => 'directory',
            'description' => 'description',
            'script' => 'script'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableId  UUID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * script  脚本内容，长度在1到10240个字符之间。
    *
    * @var string[]
    */
    protected static $setters = [
            'tableId' => 'setTableId',
            'scriptName' => 'setScriptName',
            'category' => 'setCategory',
            'directory' => 'setDirectory',
            'description' => 'setDescription',
            'script' => 'setScript'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableId  UUID
    * scriptName  脚本名称
    * category  category
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * script  脚本内容，长度在1到10240个字符之间。
    *
    * @var string[]
    */
    protected static $getters = [
            'tableId' => 'getTableId',
            'scriptName' => 'getScriptName',
            'category' => 'getCategory',
            'directory' => 'getDirectory',
            'description' => 'getDescription',
            'script' => 'getScript'
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
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tableId'] === null) {
            $invalidProperties[] = "'tableId' can't be null";
        }
            if ((mb_strlen($this->container['tableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['tableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['scriptName'] === null) {
            $invalidProperties[] = "'scriptName' can't be null";
        }
            if ((mb_strlen($this->container['scriptName']) > 256)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['scriptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['script'] === null) {
            $invalidProperties[] = "'script' can't be null";
        }
            if ((mb_strlen($this->container['script']) > 10240)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be smaller than or equal to 10240.";
            }
            if ((mb_strlen($this->container['script']) < 1)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be bigger than or equal to 1.";
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
    * Gets tableId
    *  UUID
    *
    * @return string
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string $tableId UUID
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets scriptName
    *  脚本名称
    *
    * @return string
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string $scriptName 脚本名称
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets category
    *  category
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ScriptCategory
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ScriptCategory $category category
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets directory
    *  脚本目录分组名称，长度在1到256个字符之间。
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
    * @param string|null $directory 脚本目录分组名称，长度在1到256个字符之间。
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets description
    *  脚本的相关描述信息，长度在1到1024个字符之间。
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
    * @param string|null $description 脚本的相关描述信息，长度在1到1024个字符之间。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets script
    *  脚本内容，长度在1到10240个字符之间。
    *
    * @return string
    */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
    * Sets script
    *
    * @param string $script 脚本内容，长度在1到10240个字符之间。
    *
    * @return $this
    */
    public function setScript($script)
    {
        $this->container['script'] = $script;
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

