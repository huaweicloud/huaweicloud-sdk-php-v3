<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OwnerReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OwnerReference';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiVersion  标识引用对象的API版本
    * kind  引用对象的类型
    * name  引用对象的名称
    * uid  引用对象的uid
    * controller  如果为true，表示该引用指向管理该资源的控制器
    * blockOwnerDeletion  当为true且拥有者有名为\"foregroundDeletion\"的finalizer 时，会阻止拥有者被删除，直到这个引用被移除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiVersion' => 'string',
            'kind' => 'string',
            'name' => 'string',
            'uid' => 'string',
            'controller' => 'bool',
            'blockOwnerDeletion' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiVersion  标识引用对象的API版本
    * kind  引用对象的类型
    * name  引用对象的名称
    * uid  引用对象的uid
    * controller  如果为true，表示该引用指向管理该资源的控制器
    * blockOwnerDeletion  当为true且拥有者有名为\"foregroundDeletion\"的finalizer 时，会阻止拥有者被删除，直到这个引用被移除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiVersion' => null,
        'kind' => null,
        'name' => null,
        'uid' => null,
        'controller' => null,
        'blockOwnerDeletion' => null
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
    * apiVersion  标识引用对象的API版本
    * kind  引用对象的类型
    * name  引用对象的名称
    * uid  引用对象的uid
    * controller  如果为true，表示该引用指向管理该资源的控制器
    * blockOwnerDeletion  当为true且拥有者有名为\"foregroundDeletion\"的finalizer 时，会阻止拥有者被删除，直到这个引用被移除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiVersion' => 'apiVersion',
            'kind' => 'kind',
            'name' => 'name',
            'uid' => 'uid',
            'controller' => 'controller',
            'blockOwnerDeletion' => 'blockOwnerDeletion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiVersion  标识引用对象的API版本
    * kind  引用对象的类型
    * name  引用对象的名称
    * uid  引用对象的uid
    * controller  如果为true，表示该引用指向管理该资源的控制器
    * blockOwnerDeletion  当为true且拥有者有名为\"foregroundDeletion\"的finalizer 时，会阻止拥有者被删除，直到这个引用被移除
    *
    * @var string[]
    */
    protected static $setters = [
            'apiVersion' => 'setApiVersion',
            'kind' => 'setKind',
            'name' => 'setName',
            'uid' => 'setUid',
            'controller' => 'setController',
            'blockOwnerDeletion' => 'setBlockOwnerDeletion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiVersion  标识引用对象的API版本
    * kind  引用对象的类型
    * name  引用对象的名称
    * uid  引用对象的uid
    * controller  如果为true，表示该引用指向管理该资源的控制器
    * blockOwnerDeletion  当为true且拥有者有名为\"foregroundDeletion\"的finalizer 时，会阻止拥有者被删除，直到这个引用被移除
    *
    * @var string[]
    */
    protected static $getters = [
            'apiVersion' => 'getApiVersion',
            'kind' => 'getKind',
            'name' => 'getName',
            'uid' => 'getUid',
            'controller' => 'getController',
            'blockOwnerDeletion' => 'getBlockOwnerDeletion'
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
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['controller'] = isset($data['controller']) ? $data['controller'] : null;
        $this->container['blockOwnerDeletion'] = isset($data['blockOwnerDeletion']) ? $data['blockOwnerDeletion'] : null;
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
    * Gets apiVersion
    *  标识引用对象的API版本
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion 标识引用对象的API版本
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets kind
    *  引用对象的类型
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind 引用对象的类型
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets name
    *  引用对象的名称
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
    * @param string|null $name 引用对象的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uid
    *  引用对象的uid
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
    * @param string|null $uid 引用对象的uid
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets controller
    *  如果为true，表示该引用指向管理该资源的控制器
    *
    * @return bool|null
    */
    public function getController()
    {
        return $this->container['controller'];
    }

    /**
    * Sets controller
    *
    * @param bool|null $controller 如果为true，表示该引用指向管理该资源的控制器
    *
    * @return $this
    */
    public function setController($controller)
    {
        $this->container['controller'] = $controller;
        return $this;
    }

    /**
    * Gets blockOwnerDeletion
    *  当为true且拥有者有名为\"foregroundDeletion\"的finalizer 时，会阻止拥有者被删除，直到这个引用被移除
    *
    * @return bool|null
    */
    public function getBlockOwnerDeletion()
    {
        return $this->container['blockOwnerDeletion'];
    }

    /**
    * Sets blockOwnerDeletion
    *
    * @param bool|null $blockOwnerDeletion 当为true且拥有者有名为\"foregroundDeletion\"的finalizer 时，会阻止拥有者被删除，直到这个引用被移除
    *
    * @return $this
    */
    public function setBlockOwnerDeletion($blockOwnerDeletion)
    {
        $this->container['blockOwnerDeletion'] = $blockOwnerDeletion;
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

