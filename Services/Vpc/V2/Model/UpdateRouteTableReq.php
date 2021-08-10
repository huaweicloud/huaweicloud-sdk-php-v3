<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRouteTableReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRouteTableReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * routes  功能说明：路由对象  取值范围：参见route字段说明。更新存在三种动作：     1）add：新增路由条目，type，destination，nexthop必选。     2）mod：修改路由信息，type，destination，nexthop必选。     3）del：删除路由条目，destination必选  约束：     每个路由表最大关联200条路由。     不支持直接修改destination，如需修改，只能使用del先删除对应路由，然后使用add新增路由。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'routes' => 'map[string,\HuaweiCloud\SDK\Vpc\V2\Model\Route[]]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * routes  功能说明：路由对象  取值范围：参见route字段说明。更新存在三种动作：     1）add：新增路由条目，type，destination，nexthop必选。     2）mod：修改路由信息，type，destination，nexthop必选。     3）del：删除路由条目，destination必选  约束：     每个路由表最大关联200条路由。     不支持直接修改destination，如需修改，只能使用del先删除对应路由，然后使用add新增路由。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'routes' => null
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
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * routes  功能说明：路由对象  取值范围：参见route字段说明。更新存在三种动作：     1）add：新增路由条目，type，destination，nexthop必选。     2）mod：修改路由信息，type，destination，nexthop必选。     3）del：删除路由条目，destination必选  约束：     每个路由表最大关联200条路由。     不支持直接修改destination，如需修改，只能使用del先删除对应路由，然后使用add新增路由。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'routes' => 'routes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * routes  功能说明：路由对象  取值范围：参见route字段说明。更新存在三种动作：     1）add：新增路由条目，type，destination，nexthop必选。     2）mod：修改路由信息，type，destination，nexthop必选。     3）del：删除路由条目，destination必选  约束：     每个路由表最大关联200条路由。     不支持直接修改destination，如需修改，只能使用del先删除对应路由，然后使用add新增路由。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'routes' => 'setRoutes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * routes  功能说明：路由对象  取值范围：参见route字段说明。更新存在三种动作：     1）add：新增路由条目，type，destination，nexthop必选。     2）mod：修改路由信息，type，destination，nexthop必选。     3）del：删除路由条目，destination必选  约束：     每个路由表最大关联200条路由。     不支持直接修改destination，如需修改，只能使用del先删除对应路由，然后使用add新增路由。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'routes' => 'getRoutes'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['routes'] = isset($data['routes']) ? $data['routes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string|null $name 功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets routes
    *  功能说明：路由对象  取值范围：参见route字段说明。更新存在三种动作：     1）add：新增路由条目，type，destination，nexthop必选。     2）mod：修改路由信息，type，destination，nexthop必选。     3）del：删除路由条目，destination必选  约束：     每个路由表最大关联200条路由。     不支持直接修改destination，如需修改，只能使用del先删除对应路由，然后使用add新增路由。
    *
    * @return map[string,\HuaweiCloud\SDK\Vpc\V2\Model\Route[]]|null
    */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
    * Sets routes
    *
    * @param map[string,\HuaweiCloud\SDK\Vpc\V2\Model\Route[]]|null $routes 功能说明：路由对象  取值范围：参见route字段说明。更新存在三种动作：     1）add：新增路由条目，type，destination，nexthop必选。     2）mod：修改路由信息，type，destination，nexthop必选。     3）del：删除路由条目，destination必选  约束：     每个路由表最大关联200条路由。     不支持直接修改destination，如需修改，只能使用del先删除对应路由，然后使用add新增路由。
    *
    * @return $this
    */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;
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

