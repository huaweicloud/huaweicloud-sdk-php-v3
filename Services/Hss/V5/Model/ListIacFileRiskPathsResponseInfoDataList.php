<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIacFileRiskPathsResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIacFileRiskPathsResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceName  资源名称
    * resourceType  资源类型
    * namespace  资源所属的命名空间
    * hitRule  风险命中的规则
    * hitPath  存在风险的路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceName' => 'string',
            'resourceType' => 'string',
            'namespace' => 'string',
            'hitRule' => 'string',
            'hitPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceName  资源名称
    * resourceType  资源类型
    * namespace  资源所属的命名空间
    * hitRule  风险命中的规则
    * hitPath  存在风险的路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceName' => null,
        'resourceType' => null,
        'namespace' => null,
        'hitRule' => null,
        'hitPath' => null
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
    * resourceName  资源名称
    * resourceType  资源类型
    * namespace  资源所属的命名空间
    * hitRule  风险命中的规则
    * hitPath  存在风险的路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'namespace' => 'namespace',
            'hitRule' => 'hit_rule',
            'hitPath' => 'hit_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceName  资源名称
    * resourceType  资源类型
    * namespace  资源所属的命名空间
    * hitRule  风险命中的规则
    * hitPath  存在风险的路径
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'namespace' => 'setNamespace',
            'hitRule' => 'setHitRule',
            'hitPath' => 'setHitPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceName  资源名称
    * resourceType  资源类型
    * namespace  资源所属的命名空间
    * hitRule  风险命中的规则
    * hitPath  存在风险的路径
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'namespace' => 'getNamespace',
            'hitRule' => 'getHitRule',
            'hitPath' => 'getHitPath'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['hitRule'] = isset($data['hitRule']) ? $data['hitRule'] : null;
        $this->container['hitPath'] = isset($data['hitPath']) ? $data['hitPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 512)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hitRule']) && (mb_strlen($this->container['hitRule']) > 512)) {
                $invalidProperties[] = "invalid value for 'hitRule', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['hitRule']) && (mb_strlen($this->container['hitRule']) < 1)) {
                $invalidProperties[] = "invalid value for 'hitRule', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hitPath']) && (mb_strlen($this->container['hitPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'hitPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hitPath']) && (mb_strlen($this->container['hitPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'hitPath', the character length must be bigger than or equal to 1.";
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
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets namespace
    *  资源所属的命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 资源所属的命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets hitRule
    *  风险命中的规则
    *
    * @return string|null
    */
    public function getHitRule()
    {
        return $this->container['hitRule'];
    }

    /**
    * Sets hitRule
    *
    * @param string|null $hitRule 风险命中的规则
    *
    * @return $this
    */
    public function setHitRule($hitRule)
    {
        $this->container['hitRule'] = $hitRule;
        return $this;
    }

    /**
    * Gets hitPath
    *  存在风险的路径
    *
    * @return string|null
    */
    public function getHitPath()
    {
        return $this->container['hitPath'];
    }

    /**
    * Sets hitPath
    *
    * @param string|null $hitPath 存在风险的路径
    *
    * @return $this
    */
    public function setHitPath($hitPath)
    {
        $this->container['hitPath'] = $hitPath;
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

