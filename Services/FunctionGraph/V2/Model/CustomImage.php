<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomImage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  是否启用
    * image  镜像地址
    * command  启动容器镜像的命令
    * args  启动容器镜像的命令行参数
    * workingDir  镜像容器工作目录
    * uid  镜像容器的用户id
    * gid  镜像容器的用户组id
    * isPublic  是否是公共镜像
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'image' => 'string',
            'command' => 'string',
            'args' => 'string',
            'workingDir' => 'string',
            'uid' => 'string',
            'gid' => 'string',
            'isPublic' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  是否启用
    * image  镜像地址
    * command  启动容器镜像的命令
    * args  启动容器镜像的命令行参数
    * workingDir  镜像容器工作目录
    * uid  镜像容器的用户id
    * gid  镜像容器的用户组id
    * isPublic  是否是公共镜像
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'image' => null,
        'command' => null,
        'args' => null,
        'workingDir' => null,
        'uid' => null,
        'gid' => null,
        'isPublic' => null
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
    * enabled  是否启用
    * image  镜像地址
    * command  启动容器镜像的命令
    * args  启动容器镜像的命令行参数
    * workingDir  镜像容器工作目录
    * uid  镜像容器的用户id
    * gid  镜像容器的用户组id
    * isPublic  是否是公共镜像
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'image' => 'image',
            'command' => 'command',
            'args' => 'args',
            'workingDir' => 'working_dir',
            'uid' => 'uid',
            'gid' => 'gid',
            'isPublic' => 'is_public'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  是否启用
    * image  镜像地址
    * command  启动容器镜像的命令
    * args  启动容器镜像的命令行参数
    * workingDir  镜像容器工作目录
    * uid  镜像容器的用户id
    * gid  镜像容器的用户组id
    * isPublic  是否是公共镜像
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'image' => 'setImage',
            'command' => 'setCommand',
            'args' => 'setArgs',
            'workingDir' => 'setWorkingDir',
            'uid' => 'setUid',
            'gid' => 'setGid',
            'isPublic' => 'setIsPublic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  是否启用
    * image  镜像地址
    * command  启动容器镜像的命令
    * args  启动容器镜像的命令行参数
    * workingDir  镜像容器工作目录
    * uid  镜像容器的用户id
    * gid  镜像容器的用户组id
    * isPublic  是否是公共镜像
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'image' => 'getImage',
            'command' => 'getCommand',
            'args' => 'getArgs',
            'workingDir' => 'getWorkingDir',
            'uid' => 'getUid',
            'gid' => 'getGid',
            'isPublic' => 'getIsPublic'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['workingDir'] = isset($data['workingDir']) ? $data['workingDir'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
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
    * Gets enabled
    *  是否启用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets image
    *  镜像地址
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 镜像地址
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets command
    *  启动容器镜像的命令
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command 启动容器镜像的命令
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets args
    *  启动容器镜像的命令行参数
    *
    * @return string|null
    */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
    * Sets args
    *
    * @param string|null $args 启动容器镜像的命令行参数
    *
    * @return $this
    */
    public function setArgs($args)
    {
        $this->container['args'] = $args;
        return $this;
    }

    /**
    * Gets workingDir
    *  镜像容器工作目录
    *
    * @return string|null
    */
    public function getWorkingDir()
    {
        return $this->container['workingDir'];
    }

    /**
    * Sets workingDir
    *
    * @param string|null $workingDir 镜像容器工作目录
    *
    * @return $this
    */
    public function setWorkingDir($workingDir)
    {
        $this->container['workingDir'] = $workingDir;
        return $this;
    }

    /**
    * Gets uid
    *  镜像容器的用户id
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 镜像容器的用户id
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets gid
    *  镜像容器的用户组id
    *
    * @return string|null
    */
    public function getGid()
    {
        return $this->container['gid'];
    }

    /**
    * Sets gid
    *
    * @param string|null $gid 镜像容器的用户组id
    *
    * @return $this
    */
    public function setGid($gid)
    {
        $this->container['gid'] = $gid;
        return $this;
    }

    /**
    * Gets isPublic
    *  是否是公共镜像
    *
    * @return bool|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool|null $isPublic 是否是公共镜像
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
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

