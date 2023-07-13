<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RouteTableRouteAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RouteTableRouteAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * add  新增路由条目，type，destination，nexthop必选
    * mod  修改路由条目，type，destination，nexthop必选
    * del  删除路由条目，destination必选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'add' => '\HuaweiCloud\SDK\Vpc\V2\Model\AddRouteTableRoute[]',
            'mod' => '\HuaweiCloud\SDK\Vpc\V2\Model\ModRouteTableRoute[]',
            'del' => '\HuaweiCloud\SDK\Vpc\V2\Model\DelRouteTableRoute[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * add  新增路由条目，type，destination，nexthop必选
    * mod  修改路由条目，type，destination，nexthop必选
    * del  删除路由条目，destination必选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'add' => null,
        'mod' => null,
        'del' => null
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
    * add  新增路由条目，type，destination，nexthop必选
    * mod  修改路由条目，type，destination，nexthop必选
    * del  删除路由条目，destination必选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'add' => 'add',
            'mod' => 'mod',
            'del' => 'del'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * add  新增路由条目，type，destination，nexthop必选
    * mod  修改路由条目，type，destination，nexthop必选
    * del  删除路由条目，destination必选
    *
    * @var string[]
    */
    protected static $setters = [
            'add' => 'setAdd',
            'mod' => 'setMod',
            'del' => 'setDel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * add  新增路由条目，type，destination，nexthop必选
    * mod  修改路由条目，type，destination，nexthop必选
    * del  删除路由条目，destination必选
    *
    * @var string[]
    */
    protected static $getters = [
            'add' => 'getAdd',
            'mod' => 'getMod',
            'del' => 'getDel'
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
        $this->container['add'] = isset($data['add']) ? $data['add'] : null;
        $this->container['mod'] = isset($data['mod']) ? $data['mod'] : null;
        $this->container['del'] = isset($data['del']) ? $data['del'] : null;
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
    * Gets add
    *  新增路由条目，type，destination，nexthop必选
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\AddRouteTableRoute[]|null
    */
    public function getAdd()
    {
        return $this->container['add'];
    }

    /**
    * Sets add
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\AddRouteTableRoute[]|null $add 新增路由条目，type，destination，nexthop必选
    *
    * @return $this
    */
    public function setAdd($add)
    {
        $this->container['add'] = $add;
        return $this;
    }

    /**
    * Gets mod
    *  修改路由条目，type，destination，nexthop必选
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\ModRouteTableRoute[]|null
    */
    public function getMod()
    {
        return $this->container['mod'];
    }

    /**
    * Sets mod
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ModRouteTableRoute[]|null $mod 修改路由条目，type，destination，nexthop必选
    *
    * @return $this
    */
    public function setMod($mod)
    {
        $this->container['mod'] = $mod;
        return $this;
    }

    /**
    * Gets del
    *  删除路由条目，destination必选
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\DelRouteTableRoute[]|null
    */
    public function getDel()
    {
        return $this->container['del'];
    }

    /**
    * Sets del
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\DelRouteTableRoute[]|null $del 删除路由条目，destination必选
    *
    * @return $this
    */
    public function setDel($del)
    {
        $this->container['del'] = $del;
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

