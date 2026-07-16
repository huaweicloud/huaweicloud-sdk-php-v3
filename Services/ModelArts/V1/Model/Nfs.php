<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Nfs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Nfs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nfsServerPath  nfs服务端路径，如：“10.10.10.10:/example/path”。
    * localPath  挂载到训练容器中的路径，如：“/example/path”。
    * readOnly  nfs挂载卷在容器中是否只读。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nfsServerPath' => 'string',
            'localPath' => 'string',
            'readOnly' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nfsServerPath  nfs服务端路径，如：“10.10.10.10:/example/path”。
    * localPath  挂载到训练容器中的路径，如：“/example/path”。
    * readOnly  nfs挂载卷在容器中是否只读。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nfsServerPath' => null,
        'localPath' => null,
        'readOnly' => null
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
    * nfsServerPath  nfs服务端路径，如：“10.10.10.10:/example/path”。
    * localPath  挂载到训练容器中的路径，如：“/example/path”。
    * readOnly  nfs挂载卷在容器中是否只读。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nfsServerPath' => 'nfs_server_path',
            'localPath' => 'local_path',
            'readOnly' => 'read_only'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nfsServerPath  nfs服务端路径，如：“10.10.10.10:/example/path”。
    * localPath  挂载到训练容器中的路径，如：“/example/path”。
    * readOnly  nfs挂载卷在容器中是否只读。
    *
    * @var string[]
    */
    protected static $setters = [
            'nfsServerPath' => 'setNfsServerPath',
            'localPath' => 'setLocalPath',
            'readOnly' => 'setReadOnly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nfsServerPath  nfs服务端路径，如：“10.10.10.10:/example/path”。
    * localPath  挂载到训练容器中的路径，如：“/example/path”。
    * readOnly  nfs挂载卷在容器中是否只读。
    *
    * @var string[]
    */
    protected static $getters = [
            'nfsServerPath' => 'getNfsServerPath',
            'localPath' => 'getLocalPath',
            'readOnly' => 'getReadOnly'
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
        $this->container['nfsServerPath'] = isset($data['nfsServerPath']) ? $data['nfsServerPath'] : null;
        $this->container['localPath'] = isset($data['localPath']) ? $data['localPath'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
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
    * Gets nfsServerPath
    *  nfs服务端路径，如：“10.10.10.10:/example/path”。
    *
    * @return string|null
    */
    public function getNfsServerPath()
    {
        return $this->container['nfsServerPath'];
    }

    /**
    * Sets nfsServerPath
    *
    * @param string|null $nfsServerPath nfs服务端路径，如：“10.10.10.10:/example/path”。
    *
    * @return $this
    */
    public function setNfsServerPath($nfsServerPath)
    {
        $this->container['nfsServerPath'] = $nfsServerPath;
        return $this;
    }

    /**
    * Gets localPath
    *  挂载到训练容器中的路径，如：“/example/path”。
    *
    * @return string|null
    */
    public function getLocalPath()
    {
        return $this->container['localPath'];
    }

    /**
    * Sets localPath
    *
    * @param string|null $localPath 挂载到训练容器中的路径，如：“/example/path”。
    *
    * @return $this
    */
    public function setLocalPath($localPath)
    {
        $this->container['localPath'] = $localPath;
        return $this;
    }

    /**
    * Gets readOnly
    *  nfs挂载卷在容器中是否只读。
    *
    * @return bool|null
    */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
    * Sets readOnly
    *
    * @param bool|null $readOnly nfs挂载卷在容器中是否只读。
    *
    * @return $this
    */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;
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

