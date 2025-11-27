<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerMountInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerMountInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostPath  主机路径
    * mountPath  挂载路径
    * mountPropagation  挂载传播方式
    * readOnly  是否只读
    * mountName  卷名称
    * subPath  子路径
    * subPathExpr  子路径表达式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostPath' => 'string',
            'mountPath' => 'string',
            'mountPropagation' => 'string',
            'readOnly' => 'bool',
            'mountName' => 'string',
            'subPath' => 'string',
            'subPathExpr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostPath  主机路径
    * mountPath  挂载路径
    * mountPropagation  挂载传播方式
    * readOnly  是否只读
    * mountName  卷名称
    * subPath  子路径
    * subPathExpr  子路径表达式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostPath' => null,
        'mountPath' => null,
        'mountPropagation' => null,
        'readOnly' => null,
        'mountName' => null,
        'subPath' => null,
        'subPathExpr' => null
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
    * hostPath  主机路径
    * mountPath  挂载路径
    * mountPropagation  挂载传播方式
    * readOnly  是否只读
    * mountName  卷名称
    * subPath  子路径
    * subPathExpr  子路径表达式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostPath' => 'host_path',
            'mountPath' => 'mount_path',
            'mountPropagation' => 'mount_propagation',
            'readOnly' => 'read_only',
            'mountName' => 'mount_name',
            'subPath' => 'sub_path',
            'subPathExpr' => 'sub_path_expr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostPath  主机路径
    * mountPath  挂载路径
    * mountPropagation  挂载传播方式
    * readOnly  是否只读
    * mountName  卷名称
    * subPath  子路径
    * subPathExpr  子路径表达式
    *
    * @var string[]
    */
    protected static $setters = [
            'hostPath' => 'setHostPath',
            'mountPath' => 'setMountPath',
            'mountPropagation' => 'setMountPropagation',
            'readOnly' => 'setReadOnly',
            'mountName' => 'setMountName',
            'subPath' => 'setSubPath',
            'subPathExpr' => 'setSubPathExpr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostPath  主机路径
    * mountPath  挂载路径
    * mountPropagation  挂载传播方式
    * readOnly  是否只读
    * mountName  卷名称
    * subPath  子路径
    * subPathExpr  子路径表达式
    *
    * @var string[]
    */
    protected static $getters = [
            'hostPath' => 'getHostPath',
            'mountPath' => 'getMountPath',
            'mountPropagation' => 'getMountPropagation',
            'readOnly' => 'getReadOnly',
            'mountName' => 'getMountName',
            'subPath' => 'getSubPath',
            'subPathExpr' => 'getSubPathExpr'
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
        $this->container['hostPath'] = isset($data['hostPath']) ? $data['hostPath'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['mountPropagation'] = isset($data['mountPropagation']) ? $data['mountPropagation'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['mountName'] = isset($data['mountName']) ? $data['mountName'] : null;
        $this->container['subPath'] = isset($data['subPath']) ? $data['subPath'] : null;
        $this->container['subPathExpr'] = isset($data['subPathExpr']) ? $data['subPathExpr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostPath']) && (mb_strlen($this->container['hostPath']) > 65535)) {
                $invalidProperties[] = "invalid value for 'hostPath', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['hostPath']) && (mb_strlen($this->container['hostPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mountPath']) && (mb_strlen($this->container['mountPath']) > 65535)) {
                $invalidProperties[] = "invalid value for 'mountPath', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['mountPath']) && (mb_strlen($this->container['mountPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'mountPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mountPropagation']) && (mb_strlen($this->container['mountPropagation']) > 65535)) {
                $invalidProperties[] = "invalid value for 'mountPropagation', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['mountPropagation']) && (mb_strlen($this->container['mountPropagation']) < 0)) {
                $invalidProperties[] = "invalid value for 'mountPropagation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mountName']) && (mb_strlen($this->container['mountName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'mountName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['mountName']) && (mb_strlen($this->container['mountName']) < 0)) {
                $invalidProperties[] = "invalid value for 'mountName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subPath']) && (mb_strlen($this->container['subPath']) > 65535)) {
                $invalidProperties[] = "invalid value for 'subPath', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['subPath']) && (mb_strlen($this->container['subPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'subPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subPathExpr']) && (mb_strlen($this->container['subPathExpr']) > 65535)) {
                $invalidProperties[] = "invalid value for 'subPathExpr', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['subPathExpr']) && (mb_strlen($this->container['subPathExpr']) < 0)) {
                $invalidProperties[] = "invalid value for 'subPathExpr', the character length must be bigger than or equal to 0.";
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
    * Gets hostPath
    *  主机路径
    *
    * @return string|null
    */
    public function getHostPath()
    {
        return $this->container['hostPath'];
    }

    /**
    * Sets hostPath
    *
    * @param string|null $hostPath 主机路径
    *
    * @return $this
    */
    public function setHostPath($hostPath)
    {
        $this->container['hostPath'] = $hostPath;
        return $this;
    }

    /**
    * Gets mountPath
    *  挂载路径
    *
    * @return string|null
    */
    public function getMountPath()
    {
        return $this->container['mountPath'];
    }

    /**
    * Sets mountPath
    *
    * @param string|null $mountPath 挂载路径
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
        return $this;
    }

    /**
    * Gets mountPropagation
    *  挂载传播方式
    *
    * @return string|null
    */
    public function getMountPropagation()
    {
        return $this->container['mountPropagation'];
    }

    /**
    * Sets mountPropagation
    *
    * @param string|null $mountPropagation 挂载传播方式
    *
    * @return $this
    */
    public function setMountPropagation($mountPropagation)
    {
        $this->container['mountPropagation'] = $mountPropagation;
        return $this;
    }

    /**
    * Gets readOnly
    *  是否只读
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
    * @param bool|null $readOnly 是否只读
    *
    * @return $this
    */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;
        return $this;
    }

    /**
    * Gets mountName
    *  卷名称
    *
    * @return string|null
    */
    public function getMountName()
    {
        return $this->container['mountName'];
    }

    /**
    * Sets mountName
    *
    * @param string|null $mountName 卷名称
    *
    * @return $this
    */
    public function setMountName($mountName)
    {
        $this->container['mountName'] = $mountName;
        return $this;
    }

    /**
    * Gets subPath
    *  子路径
    *
    * @return string|null
    */
    public function getSubPath()
    {
        return $this->container['subPath'];
    }

    /**
    * Sets subPath
    *
    * @param string|null $subPath 子路径
    *
    * @return $this
    */
    public function setSubPath($subPath)
    {
        $this->container['subPath'] = $subPath;
        return $this;
    }

    /**
    * Gets subPathExpr
    *  子路径表达式
    *
    * @return string|null
    */
    public function getSubPathExpr()
    {
        return $this->container['subPathExpr'];
    }

    /**
    * Sets subPathExpr
    *
    * @param string|null $subPathExpr 子路径表达式
    *
    * @return $this
    */
    public function setSubPathExpr($subPathExpr)
    {
        $this->container['subPathExpr'] = $subPathExpr;
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

