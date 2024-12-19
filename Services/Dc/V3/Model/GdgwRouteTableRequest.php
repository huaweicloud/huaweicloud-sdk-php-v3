<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GdgwRouteTableRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GdgwRouteTableRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addRoutes  需要添加的路由
    * delRoutes  需要删除的路由
    * updateRoutes  需要更新的路 **仅更新该条路由的附加信息，不执行交换机的路由更新操作。当前支持更新：路由描述-description信息**
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addRoutes' => '\HuaweiCloud\SDK\Dc\V3\Model\AddGdgwRouteAction[]',
            'delRoutes' => '\HuaweiCloud\SDK\Dc\V3\Model\DeleteGdgwRouteAction[]',
            'updateRoutes' => '\HuaweiCloud\SDK\Dc\V3\Model\UpdateRouteAction[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addRoutes  需要添加的路由
    * delRoutes  需要删除的路由
    * updateRoutes  需要更新的路 **仅更新该条路由的附加信息，不执行交换机的路由更新操作。当前支持更新：路由描述-description信息**
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addRoutes' => null,
        'delRoutes' => null,
        'updateRoutes' => null
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
    * addRoutes  需要添加的路由
    * delRoutes  需要删除的路由
    * updateRoutes  需要更新的路 **仅更新该条路由的附加信息，不执行交换机的路由更新操作。当前支持更新：路由描述-description信息**
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addRoutes' => 'add_routes',
            'delRoutes' => 'del_routes',
            'updateRoutes' => 'update_routes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addRoutes  需要添加的路由
    * delRoutes  需要删除的路由
    * updateRoutes  需要更新的路 **仅更新该条路由的附加信息，不执行交换机的路由更新操作。当前支持更新：路由描述-description信息**
    *
    * @var string[]
    */
    protected static $setters = [
            'addRoutes' => 'setAddRoutes',
            'delRoutes' => 'setDelRoutes',
            'updateRoutes' => 'setUpdateRoutes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addRoutes  需要添加的路由
    * delRoutes  需要删除的路由
    * updateRoutes  需要更新的路 **仅更新该条路由的附加信息，不执行交换机的路由更新操作。当前支持更新：路由描述-description信息**
    *
    * @var string[]
    */
    protected static $getters = [
            'addRoutes' => 'getAddRoutes',
            'delRoutes' => 'getDelRoutes',
            'updateRoutes' => 'getUpdateRoutes'
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
        $this->container['addRoutes'] = isset($data['addRoutes']) ? $data['addRoutes'] : null;
        $this->container['delRoutes'] = isset($data['delRoutes']) ? $data['delRoutes'] : null;
        $this->container['updateRoutes'] = isset($data['updateRoutes']) ? $data['updateRoutes'] : null;
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
    * Gets addRoutes
    *  需要添加的路由
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\AddGdgwRouteAction[]|null
    */
    public function getAddRoutes()
    {
        return $this->container['addRoutes'];
    }

    /**
    * Sets addRoutes
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\AddGdgwRouteAction[]|null $addRoutes 需要添加的路由
    *
    * @return $this
    */
    public function setAddRoutes($addRoutes)
    {
        $this->container['addRoutes'] = $addRoutes;
        return $this;
    }

    /**
    * Gets delRoutes
    *  需要删除的路由
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\DeleteGdgwRouteAction[]|null
    */
    public function getDelRoutes()
    {
        return $this->container['delRoutes'];
    }

    /**
    * Sets delRoutes
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\DeleteGdgwRouteAction[]|null $delRoutes 需要删除的路由
    *
    * @return $this
    */
    public function setDelRoutes($delRoutes)
    {
        $this->container['delRoutes'] = $delRoutes;
        return $this;
    }

    /**
    * Gets updateRoutes
    *  需要更新的路 **仅更新该条路由的附加信息，不执行交换机的路由更新操作。当前支持更新：路由描述-description信息**
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\UpdateRouteAction[]|null
    */
    public function getUpdateRoutes()
    {
        return $this->container['updateRoutes'];
    }

    /**
    * Sets updateRoutes
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\UpdateRouteAction[]|null $updateRoutes 需要更新的路 **仅更新该条路由的附加信息，不执行交换机的路由更新操作。当前支持更新：路由描述-description信息**
    *
    * @return $this
    */
    public function setUpdateRoutes($updateRoutes)
    {
        $this->container['updateRoutes'] = $updateRoutes;
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

