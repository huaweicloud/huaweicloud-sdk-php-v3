<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Path implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Path';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  路径ID
    * status  路径状态，有available和remove两种状态
    * agentId  该路径所属于的客户端ID
    * dirPath  路径详情
    * excludePaths  排除目录列表，多个路径之间以英文逗号分隔 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'agentId' => 'string',
            'dirPath' => 'string',
            'excludePaths' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  路径ID
    * status  路径状态，有available和remove两种状态
    * agentId  该路径所属于的客户端ID
    * dirPath  路径详情
    * excludePaths  排除目录列表，多个路径之间以英文逗号分隔 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'agentId' => null,
        'dirPath' => null,
        'excludePaths' => null
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
    * id  路径ID
    * status  路径状态，有available和remove两种状态
    * agentId  该路径所属于的客户端ID
    * dirPath  路径详情
    * excludePaths  排除目录列表，多个路径之间以英文逗号分隔 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'agentId' => 'agent_id',
            'dirPath' => 'dir_path',
            'excludePaths' => 'exclude_paths'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  路径ID
    * status  路径状态，有available和remove两种状态
    * agentId  该路径所属于的客户端ID
    * dirPath  路径详情
    * excludePaths  排除目录列表，多个路径之间以英文逗号分隔 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'agentId' => 'setAgentId',
            'dirPath' => 'setDirPath',
            'excludePaths' => 'setExcludePaths'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  路径ID
    * status  路径状态，有available和remove两种状态
    * agentId  该路径所属于的客户端ID
    * dirPath  路径详情
    * excludePaths  排除目录列表，多个路径之间以英文逗号分隔 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'agentId' => 'getAgentId',
            'dirPath' => 'getDirPath',
            'excludePaths' => 'getExcludePaths'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['dirPath'] = isset($data['dirPath']) ? $data['dirPath'] : null;
        $this->container['excludePaths'] = isset($data['excludePaths']) ? $data['excludePaths'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  路径ID
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
    * @param string|null $id 路径ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  路径状态，有available和remove两种状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 路径状态，有available和remove两种状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets agentId
    *  该路径所属于的客户端ID
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId 该路径所属于的客户端ID
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets dirPath
    *  路径详情
    *
    * @return string|null
    */
    public function getDirPath()
    {
        return $this->container['dirPath'];
    }

    /**
    * Sets dirPath
    *
    * @param string|null $dirPath 路径详情
    *
    * @return $this
    */
    public function setDirPath($dirPath)
    {
        $this->container['dirPath'] = $dirPath;
        return $this;
    }

    /**
    * Gets excludePaths
    *  排除目录列表，多个路径之间以英文逗号分隔 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @return string|null
    */
    public function getExcludePaths()
    {
        return $this->container['excludePaths'];
    }

    /**
    * Sets excludePaths
    *
    * @param string|null $excludePaths 排除目录列表，多个路径之间以英文逗号分隔 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @return $this
    */
    public function setExcludePaths($excludePaths)
    {
        $this->container['excludePaths'] = $excludePaths;
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

