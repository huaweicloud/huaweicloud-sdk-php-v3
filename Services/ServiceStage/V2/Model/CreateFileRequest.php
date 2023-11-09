<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFileRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFileRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xRepoAuth  授权名称。
    * namespace  命名空间ID或者URL编码名称。
    * project  仓库项目ID，如果含有“/”，需要将“/”替换为“:”。
    * path  文件路径，需要将“/”替换为“:”。
    * ref  分支名称或者tag标签名称或者commit sha。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xRepoAuth' => 'string',
            'namespace' => 'string',
            'project' => 'string',
            'path' => 'string',
            'ref' => 'string',
            'body' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\FileCreate'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xRepoAuth  授权名称。
    * namespace  命名空间ID或者URL编码名称。
    * project  仓库项目ID，如果含有“/”，需要将“/”替换为“:”。
    * path  文件路径，需要将“/”替换为“:”。
    * ref  分支名称或者tag标签名称或者commit sha。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xRepoAuth' => null,
        'namespace' => null,
        'project' => null,
        'path' => null,
        'ref' => null,
        'body' => null
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
    * xRepoAuth  授权名称。
    * namespace  命名空间ID或者URL编码名称。
    * project  仓库项目ID，如果含有“/”，需要将“/”替换为“:”。
    * path  文件路径，需要将“/”替换为“:”。
    * ref  分支名称或者tag标签名称或者commit sha。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xRepoAuth' => 'X-Repo-Auth',
            'namespace' => 'namespace',
            'project' => 'project',
            'path' => 'path',
            'ref' => 'ref',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xRepoAuth  授权名称。
    * namespace  命名空间ID或者URL编码名称。
    * project  仓库项目ID，如果含有“/”，需要将“/”替换为“:”。
    * path  文件路径，需要将“/”替换为“:”。
    * ref  分支名称或者tag标签名称或者commit sha。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'xRepoAuth' => 'setXRepoAuth',
            'namespace' => 'setNamespace',
            'project' => 'setProject',
            'path' => 'setPath',
            'ref' => 'setRef',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xRepoAuth  授权名称。
    * namespace  命名空间ID或者URL编码名称。
    * project  仓库项目ID，如果含有“/”，需要将“/”替换为“:”。
    * path  文件路径，需要将“/”替换为“:”。
    * ref  分支名称或者tag标签名称或者commit sha。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'xRepoAuth' => 'getXRepoAuth',
            'namespace' => 'getNamespace',
            'project' => 'getProject',
            'path' => 'getPath',
            'ref' => 'getRef',
            'body' => 'getBody'
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
        $this->container['xRepoAuth'] = isset($data['xRepoAuth']) ? $data['xRepoAuth'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xRepoAuth'] === null) {
            $invalidProperties[] = "'xRepoAuth' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['project'] === null) {
            $invalidProperties[] = "'project' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['ref'] === null) {
            $invalidProperties[] = "'ref' can't be null";
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
    * Gets xRepoAuth
    *  授权名称。
    *
    * @return string
    */
    public function getXRepoAuth()
    {
        return $this->container['xRepoAuth'];
    }

    /**
    * Sets xRepoAuth
    *
    * @param string $xRepoAuth 授权名称。
    *
    * @return $this
    */
    public function setXRepoAuth($xRepoAuth)
    {
        $this->container['xRepoAuth'] = $xRepoAuth;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间ID或者URL编码名称。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 命名空间ID或者URL编码名称。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets project
    *  仓库项目ID，如果含有“/”，需要将“/”替换为“:”。
    *
    * @return string
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param string $project 仓库项目ID，如果含有“/”，需要将“/”替换为“:”。
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets path
    *  文件路径，需要将“/”替换为“:”。
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 文件路径，需要将“/”替换为“:”。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets ref
    *  分支名称或者tag标签名称或者commit sha。
    *
    * @return string
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string $ref 分支名称或者tag标签名称或者commit sha。
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\FileCreate|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\FileCreate|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

