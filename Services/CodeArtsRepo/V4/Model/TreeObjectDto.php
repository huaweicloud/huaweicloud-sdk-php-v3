<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TreeObjectDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TreeObjectDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  文件唯一标识
    * name  文件名称
    * type  对象类型
    * path  文件路径
    * mode  模式结构
    * submoduleLink  子模块链接
    * submoduleBranch  子模块分支
    * md5  md5值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'path' => 'string',
            'mode' => 'string',
            'submoduleLink' => 'string',
            'submoduleBranch' => 'string',
            'md5' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  文件唯一标识
    * name  文件名称
    * type  对象类型
    * path  文件路径
    * mode  模式结构
    * submoduleLink  子模块链接
    * submoduleBranch  子模块分支
    * md5  md5值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'path' => null,
        'mode' => null,
        'submoduleLink' => null,
        'submoduleBranch' => null,
        'md5' => null
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
    * id  文件唯一标识
    * name  文件名称
    * type  对象类型
    * path  文件路径
    * mode  模式结构
    * submoduleLink  子模块链接
    * submoduleBranch  子模块分支
    * md5  md5值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'path' => 'path',
            'mode' => 'mode',
            'submoduleLink' => 'submodule_link',
            'submoduleBranch' => 'submodule_branch',
            'md5' => 'md5'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  文件唯一标识
    * name  文件名称
    * type  对象类型
    * path  文件路径
    * mode  模式结构
    * submoduleLink  子模块链接
    * submoduleBranch  子模块分支
    * md5  md5值
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'path' => 'setPath',
            'mode' => 'setMode',
            'submoduleLink' => 'setSubmoduleLink',
            'submoduleBranch' => 'setSubmoduleBranch',
            'md5' => 'setMd5'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  文件唯一标识
    * name  文件名称
    * type  对象类型
    * path  文件路径
    * mode  模式结构
    * submoduleLink  子模块链接
    * submoduleBranch  子模块分支
    * md5  md5值
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'path' => 'getPath',
            'mode' => 'getMode',
            'submoduleLink' => 'getSubmoduleLink',
            'submoduleBranch' => 'getSubmoduleBranch',
            'md5' => 'getMd5'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['submoduleLink'] = isset($data['submoduleLink']) ? $data['submoduleLink'] : null;
        $this->container['submoduleBranch'] = isset($data['submoduleBranch']) ? $data['submoduleBranch'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 40)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 40)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 10000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 10000)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  文件唯一标识
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 文件唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  文件名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 文件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  对象类型
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
    * @param string|null $type 对象类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets path
    *  文件路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 文件路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets mode
    *  模式结构
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 模式结构
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets submoduleLink
    *  子模块链接
    *
    * @return string|null
    */
    public function getSubmoduleLink()
    {
        return $this->container['submoduleLink'];
    }

    /**
    * Sets submoduleLink
    *
    * @param string|null $submoduleLink 子模块链接
    *
    * @return $this
    */
    public function setSubmoduleLink($submoduleLink)
    {
        $this->container['submoduleLink'] = $submoduleLink;
        return $this;
    }

    /**
    * Gets submoduleBranch
    *  子模块分支
    *
    * @return string|null
    */
    public function getSubmoduleBranch()
    {
        return $this->container['submoduleBranch'];
    }

    /**
    * Sets submoduleBranch
    *
    * @param string|null $submoduleBranch 子模块分支
    *
    * @return $this
    */
    public function setSubmoduleBranch($submoduleBranch)
    {
        $this->container['submoduleBranch'] = $submoduleBranch;
        return $this;
    }

    /**
    * Gets md5
    *  md5值
    *
    * @return string|null
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string|null $md5 md5值
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
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

