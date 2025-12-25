<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePipeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePipeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipeName' => 'string',
            'pipeAlias' => 'string',
            'category' => '\HuaweiCloud\SDK\SecMaster\V2\Model\PipeCategory',
            'directory' => 'string',
            'description' => 'string',
            'schema' => '\HuaweiCloud\SDK\SecMaster\V2\Model\PipeSchema',
            'storageSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\PipeStorageSetting',
            'displaySetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableDisplaySetting'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipeName' => null,
        'pipeAlias' => null,
        'category' => null,
        'directory' => null,
        'description' => null,
        'schema' => null,
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
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipeName' => 'pipe_name',
            'pipeAlias' => 'pipe_alias',
            'category' => 'category',
            'directory' => 'directory',
            'description' => 'description',
            'schema' => 'schema',
            'storageSetting' => 'storage_setting',
            'displaySetting' => 'display_setting'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $setters = [
            'pipeName' => 'setPipeName',
            'pipeAlias' => 'setPipeAlias',
            'category' => 'setCategory',
            'directory' => 'setDirectory',
            'description' => 'setDescription',
            'schema' => 'setSchema',
            'storageSetting' => 'setStorageSetting',
            'displaySetting' => 'setDisplaySetting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipeName  管道名称
    * pipeAlias  管道别名
    * category  category
    * directory  directory 目录分组
    * description  管道描述
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    *
    * @var string[]
    */
    protected static $getters = [
            'pipeName' => 'getPipeName',
            'pipeAlias' => 'getPipeAlias',
            'category' => 'getCategory',
            'directory' => 'getDirectory',
            'description' => 'getDescription',
            'schema' => 'getSchema',
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
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['pipeAlias'] = isset($data['pipeAlias']) ? $data['pipeAlias'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
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
        if ($this->container['pipeName'] === null) {
            $invalidProperties[] = "'pipeName' can't be null";
        }
            if ((mb_strlen($this->container['pipeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pipeAlias'] === null) {
            $invalidProperties[] = "'pipeAlias' can't be null";
        }
            if ((mb_strlen($this->container['pipeAlias']) > 256)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['pipeAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeAlias', the character length must be bigger than or equal to 1.";
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
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['storageSetting'] === null) {
            $invalidProperties[] = "'storageSetting' can't be null";
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
    * Gets pipeName
    *  管道名称
    *
    * @return string
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string $pipeName 管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets pipeAlias
    *  管道别名
    *
    * @return string
    */
    public function getPipeAlias()
    {
        return $this->container['pipeAlias'];
    }

    /**
    * Sets pipeAlias
    *
    * @param string $pipeAlias 管道别名
    *
    * @return $this
    */
    public function setPipeAlias($pipeAlias)
    {
        $this->container['pipeAlias'] = $pipeAlias;
        return $this;
    }

    /**
    * Gets category
    *  category
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\PipeCategory
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\PipeCategory $category category
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
    *  directory 目录分组
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
    * @param string|null $directory directory 目录分组
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
    *  管道描述
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
    * @param string|null $description 管道描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets schema
    *  schema
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\PipeSchema
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\PipeSchema $schema schema
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets storageSetting
    *  storageSetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\PipeStorageSetting
    */
    public function getStorageSetting()
    {
        return $this->container['storageSetting'];
    }

    /**
    * Sets storageSetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\PipeStorageSetting $storageSetting storageSetting
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
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableDisplaySetting|null
    */
    public function getDisplaySetting()
    {
        return $this->container['displaySetting'];
    }

    /**
    * Sets displaySetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableDisplaySetting|null $displaySetting displaySetting
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

