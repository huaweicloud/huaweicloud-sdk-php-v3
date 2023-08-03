<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FuncMount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FuncMount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mountType  挂载类型(sfs/sfsTurbo/ecs)，func_mounts非空时必选。
    * mountResource  挂载资源ID（对应云服务ID），func_mounts非空时必选。
    * mountSharePath  远端挂载路径（例如192.168.0.12:/data），如果mount_type为ecs，必选。
    * localMountPath  函数访问路径，func_mounts非空时必选。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mountType' => 'string',
            'mountResource' => 'string',
            'mountSharePath' => 'string',
            'localMountPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mountType  挂载类型(sfs/sfsTurbo/ecs)，func_mounts非空时必选。
    * mountResource  挂载资源ID（对应云服务ID），func_mounts非空时必选。
    * mountSharePath  远端挂载路径（例如192.168.0.12:/data），如果mount_type为ecs，必选。
    * localMountPath  函数访问路径，func_mounts非空时必选。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mountType' => null,
        'mountResource' => null,
        'mountSharePath' => null,
        'localMountPath' => null
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
    * mountType  挂载类型(sfs/sfsTurbo/ecs)，func_mounts非空时必选。
    * mountResource  挂载资源ID（对应云服务ID），func_mounts非空时必选。
    * mountSharePath  远端挂载路径（例如192.168.0.12:/data），如果mount_type为ecs，必选。
    * localMountPath  函数访问路径，func_mounts非空时必选。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mountType' => 'mount_type',
            'mountResource' => 'mount_resource',
            'mountSharePath' => 'mount_share_path',
            'localMountPath' => 'local_mount_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mountType  挂载类型(sfs/sfsTurbo/ecs)，func_mounts非空时必选。
    * mountResource  挂载资源ID（对应云服务ID），func_mounts非空时必选。
    * mountSharePath  远端挂载路径（例如192.168.0.12:/data），如果mount_type为ecs，必选。
    * localMountPath  函数访问路径，func_mounts非空时必选。
    *
    * @var string[]
    */
    protected static $setters = [
            'mountType' => 'setMountType',
            'mountResource' => 'setMountResource',
            'mountSharePath' => 'setMountSharePath',
            'localMountPath' => 'setLocalMountPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mountType  挂载类型(sfs/sfsTurbo/ecs)，func_mounts非空时必选。
    * mountResource  挂载资源ID（对应云服务ID），func_mounts非空时必选。
    * mountSharePath  远端挂载路径（例如192.168.0.12:/data），如果mount_type为ecs，必选。
    * localMountPath  函数访问路径，func_mounts非空时必选。
    *
    * @var string[]
    */
    protected static $getters = [
            'mountType' => 'getMountType',
            'mountResource' => 'getMountResource',
            'mountSharePath' => 'getMountSharePath',
            'localMountPath' => 'getLocalMountPath'
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
        $this->container['mountType'] = isset($data['mountType']) ? $data['mountType'] : null;
        $this->container['mountResource'] = isset($data['mountResource']) ? $data['mountResource'] : null;
        $this->container['mountSharePath'] = isset($data['mountSharePath']) ? $data['mountSharePath'] : null;
        $this->container['localMountPath'] = isset($data['localMountPath']) ? $data['localMountPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mountType'] === null) {
            $invalidProperties[] = "'mountType' can't be null";
        }
        if ($this->container['mountResource'] === null) {
            $invalidProperties[] = "'mountResource' can't be null";
        }
        if ($this->container['localMountPath'] === null) {
            $invalidProperties[] = "'localMountPath' can't be null";
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
    * Gets mountType
    *  挂载类型(sfs/sfsTurbo/ecs)，func_mounts非空时必选。
    *
    * @return string
    */
    public function getMountType()
    {
        return $this->container['mountType'];
    }

    /**
    * Sets mountType
    *
    * @param string $mountType 挂载类型(sfs/sfsTurbo/ecs)，func_mounts非空时必选。
    *
    * @return $this
    */
    public function setMountType($mountType)
    {
        $this->container['mountType'] = $mountType;
        return $this;
    }

    /**
    * Gets mountResource
    *  挂载资源ID（对应云服务ID），func_mounts非空时必选。
    *
    * @return string
    */
    public function getMountResource()
    {
        return $this->container['mountResource'];
    }

    /**
    * Sets mountResource
    *
    * @param string $mountResource 挂载资源ID（对应云服务ID），func_mounts非空时必选。
    *
    * @return $this
    */
    public function setMountResource($mountResource)
    {
        $this->container['mountResource'] = $mountResource;
        return $this;
    }

    /**
    * Gets mountSharePath
    *  远端挂载路径（例如192.168.0.12:/data），如果mount_type为ecs，必选。
    *
    * @return string|null
    */
    public function getMountSharePath()
    {
        return $this->container['mountSharePath'];
    }

    /**
    * Sets mountSharePath
    *
    * @param string|null $mountSharePath 远端挂载路径（例如192.168.0.12:/data），如果mount_type为ecs，必选。
    *
    * @return $this
    */
    public function setMountSharePath($mountSharePath)
    {
        $this->container['mountSharePath'] = $mountSharePath;
        return $this;
    }

    /**
    * Gets localMountPath
    *  函数访问路径，func_mounts非空时必选。
    *
    * @return string
    */
    public function getLocalMountPath()
    {
        return $this->container['localMountPath'];
    }

    /**
    * Sets localMountPath
    *
    * @param string $localMountPath 函数访问路径，func_mounts非空时必选。
    *
    * @return $this
    */
    public function setLocalMountPath($localMountPath)
    {
        $this->container['localMountPath'] = $localMountPath;
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

