<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobResourcesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobResourcesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resources  已上传的用户资源名列表。
    * modules  系统内置资源模块列表
    * groups  已上传的用户分组资源。
    * total  资源包返回总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resources' => '\HuaweiCloud\SDK\Dli\V1\Model\PackageResource[]',
            'modules' => '\HuaweiCloud\SDK\Dli\V1\Model\PackageResourceMoudle[]',
            'groups' => 'object[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resources  已上传的用户资源名列表。
    * modules  系统内置资源模块列表
    * groups  已上传的用户分组资源。
    * total  资源包返回总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resources' => null,
        'modules' => null,
        'groups' => null,
        'total' => 'int32'
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
    * resources  已上传的用户资源名列表。
    * modules  系统内置资源模块列表
    * groups  已上传的用户分组资源。
    * total  资源包返回总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resources' => 'resources',
            'modules' => 'modules',
            'groups' => 'groups',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resources  已上传的用户资源名列表。
    * modules  系统内置资源模块列表
    * groups  已上传的用户分组资源。
    * total  资源包返回总数
    *
    * @var string[]
    */
    protected static $setters = [
            'resources' => 'setResources',
            'modules' => 'setModules',
            'groups' => 'setGroups',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resources  已上传的用户资源名列表。
    * modules  系统内置资源模块列表
    * groups  已上传的用户分组资源。
    * total  资源包返回总数
    *
    * @var string[]
    */
    protected static $getters = [
            'resources' => 'getResources',
            'modules' => 'getModules',
            'groups' => 'getGroups',
            'total' => 'getTotal'
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
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets resources
    *  已上传的用户资源名列表。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\PackageResource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\PackageResource[]|null $resources 已上传的用户资源名列表。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets modules
    *  系统内置资源模块列表
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\PackageResourceMoudle[]|null
    */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
    * Sets modules
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\PackageResourceMoudle[]|null $modules 系统内置资源模块列表
    *
    * @return $this
    */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;
        return $this;
    }

    /**
    * Gets groups
    *  已上传的用户分组资源。
    *
    * @return object[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param object[]|null $groups 已上传的用户分组资源。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets total
    *  资源包返回总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 资源包返回总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

