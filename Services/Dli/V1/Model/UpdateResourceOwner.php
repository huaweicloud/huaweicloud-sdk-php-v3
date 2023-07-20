<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateResourceOwner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateResourceOwner';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newOwner  新用户名,只能包含数字、英文字母、下划线和中划线且不能以数字开头,长度在5-32字符之间
    * groupName  组名,名称只能包含数字、英文字母、点、下划线和中划线,长度不能超过64字符
    * resourceName  包名,包名,长度（包含文件后缀）不能超过128个字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newOwner' => 'string',
            'groupName' => 'string',
            'resourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newOwner  新用户名,只能包含数字、英文字母、下划线和中划线且不能以数字开头,长度在5-32字符之间
    * groupName  组名,名称只能包含数字、英文字母、点、下划线和中划线,长度不能超过64字符
    * resourceName  包名,包名,长度（包含文件后缀）不能超过128个字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newOwner' => null,
        'groupName' => null,
        'resourceName' => null
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
    * newOwner  新用户名,只能包含数字、英文字母、下划线和中划线且不能以数字开头,长度在5-32字符之间
    * groupName  组名,名称只能包含数字、英文字母、点、下划线和中划线,长度不能超过64字符
    * resourceName  包名,包名,长度（包含文件后缀）不能超过128个字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newOwner' => 'new_owner',
            'groupName' => 'group_name',
            'resourceName' => 'resource_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newOwner  新用户名,只能包含数字、英文字母、下划线和中划线且不能以数字开头,长度在5-32字符之间
    * groupName  组名,名称只能包含数字、英文字母、点、下划线和中划线,长度不能超过64字符
    * resourceName  包名,包名,长度（包含文件后缀）不能超过128个字符
    *
    * @var string[]
    */
    protected static $setters = [
            'newOwner' => 'setNewOwner',
            'groupName' => 'setGroupName',
            'resourceName' => 'setResourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newOwner  新用户名,只能包含数字、英文字母、下划线和中划线且不能以数字开头,长度在5-32字符之间
    * groupName  组名,名称只能包含数字、英文字母、点、下划线和中划线,长度不能超过64字符
    * resourceName  包名,包名,长度（包含文件后缀）不能超过128个字符
    *
    * @var string[]
    */
    protected static $getters = [
            'newOwner' => 'getNewOwner',
            'groupName' => 'getGroupName',
            'resourceName' => 'getResourceName'
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
        $this->container['newOwner'] = isset($data['newOwner']) ? $data['newOwner'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['newOwner'] === null) {
            $invalidProperties[] = "'newOwner' can't be null";
        }
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
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
    * Gets newOwner
    *  新用户名,只能包含数字、英文字母、下划线和中划线且不能以数字开头,长度在5-32字符之间
    *
    * @return string
    */
    public function getNewOwner()
    {
        return $this->container['newOwner'];
    }

    /**
    * Sets newOwner
    *
    * @param string $newOwner 新用户名,只能包含数字、英文字母、下划线和中划线且不能以数字开头,长度在5-32字符之间
    *
    * @return $this
    */
    public function setNewOwner($newOwner)
    {
        $this->container['newOwner'] = $newOwner;
        return $this;
    }

    /**
    * Gets groupName
    *  组名,名称只能包含数字、英文字母、点、下划线和中划线,长度不能超过64字符
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 组名,名称只能包含数字、英文字母、点、下划线和中划线,长度不能超过64字符
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets resourceName
    *  包名,包名,长度（包含文件后缀）不能超过128个字符
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
    * @param string|null $resourceName 包名,包名,长度（包含文件后缀）不能超过128个字符
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
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

