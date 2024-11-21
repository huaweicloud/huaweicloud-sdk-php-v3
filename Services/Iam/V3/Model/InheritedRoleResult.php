<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InheritedRoleResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InheritedRoleResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * descriptionCn  权限的中文描述信息。
    * catalog  权限所在目录。
    * name  权限名。携带在用户的token中，云服务根据该名称来判断用户是否有权限访问。
    * description  权限描述信息。
    * links  links
    * id  权限ID。
    * displayName  权限展示名。
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * policy  policy
    * updatedTime  权限更新时间。
    * createdTime  权限创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flag' => 'string',
            'descriptionCn' => 'string',
            'catalog' => 'string',
            'name' => 'string',
            'description' => 'string',
            'links' => '\HuaweiCloud\SDK\Iam\V3\Model\Links',
            'id' => 'string',
            'displayName' => 'string',
            'type' => 'string',
            'policy' => '\HuaweiCloud\SDK\Iam\V3\Model\RolePolicy',
            'updatedTime' => 'string',
            'createdTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * descriptionCn  权限的中文描述信息。
    * catalog  权限所在目录。
    * name  权限名。携带在用户的token中，云服务根据该名称来判断用户是否有权限访问。
    * description  权限描述信息。
    * links  links
    * id  权限ID。
    * displayName  权限展示名。
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * policy  policy
    * updatedTime  权限更新时间。
    * createdTime  权限创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flag' => null,
        'descriptionCn' => null,
        'catalog' => null,
        'name' => null,
        'description' => null,
        'links' => null,
        'id' => null,
        'displayName' => null,
        'type' => null,
        'policy' => null,
        'updatedTime' => null,
        'createdTime' => null
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
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * descriptionCn  权限的中文描述信息。
    * catalog  权限所在目录。
    * name  权限名。携带在用户的token中，云服务根据该名称来判断用户是否有权限访问。
    * description  权限描述信息。
    * links  links
    * id  权限ID。
    * displayName  权限展示名。
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * policy  policy
    * updatedTime  权限更新时间。
    * createdTime  权限创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flag' => 'flag',
            'descriptionCn' => 'description_cn',
            'catalog' => 'catalog',
            'name' => 'name',
            'description' => 'description',
            'links' => 'links',
            'id' => 'id',
            'displayName' => 'display_name',
            'type' => 'type',
            'policy' => 'policy',
            'updatedTime' => 'updated_time',
            'createdTime' => 'created_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * descriptionCn  权限的中文描述信息。
    * catalog  权限所在目录。
    * name  权限名。携带在用户的token中，云服务根据该名称来判断用户是否有权限访问。
    * description  权限描述信息。
    * links  links
    * id  权限ID。
    * displayName  权限展示名。
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * policy  policy
    * updatedTime  权限更新时间。
    * createdTime  权限创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'flag' => 'setFlag',
            'descriptionCn' => 'setDescriptionCn',
            'catalog' => 'setCatalog',
            'name' => 'setName',
            'description' => 'setDescription',
            'links' => 'setLinks',
            'id' => 'setId',
            'displayName' => 'setDisplayName',
            'type' => 'setType',
            'policy' => 'setPolicy',
            'updatedTime' => 'setUpdatedTime',
            'createdTime' => 'setCreatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * descriptionCn  权限的中文描述信息。
    * catalog  权限所在目录。
    * name  权限名。携带在用户的token中，云服务根据该名称来判断用户是否有权限访问。
    * description  权限描述信息。
    * links  links
    * id  权限ID。
    * displayName  权限展示名。
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * policy  policy
    * updatedTime  权限更新时间。
    * createdTime  权限创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'flag' => 'getFlag',
            'descriptionCn' => 'getDescriptionCn',
            'catalog' => 'getCatalog',
            'name' => 'getName',
            'description' => 'getDescription',
            'links' => 'getLinks',
            'id' => 'getId',
            'displayName' => 'getDisplayName',
            'type' => 'getType',
            'policy' => 'getPolicy',
            'updatedTime' => 'getUpdatedTime',
            'createdTime' => 'getCreatedTime'
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
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['descriptionCn'] = isset($data['descriptionCn']) ? $data['descriptionCn'] : null;
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
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
    * Gets flag
    *  该参数值为fine_grained时，标识此权限为系统内置的策略。
    *
    * @return string|null
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param string|null $flag 该参数值为fine_grained时，标识此权限为系统内置的策略。
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
        return $this;
    }

    /**
    * Gets descriptionCn
    *  权限的中文描述信息。
    *
    * @return string|null
    */
    public function getDescriptionCn()
    {
        return $this->container['descriptionCn'];
    }

    /**
    * Sets descriptionCn
    *
    * @param string|null $descriptionCn 权限的中文描述信息。
    *
    * @return $this
    */
    public function setDescriptionCn($descriptionCn)
    {
        $this->container['descriptionCn'] = $descriptionCn;
        return $this;
    }

    /**
    * Gets catalog
    *  权限所在目录。
    *
    * @return string|null
    */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
    * Sets catalog
    *
    * @param string|null $catalog 权限所在目录。
    *
    * @return $this
    */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;
        return $this;
    }

    /**
    * Gets name
    *  权限名。携带在用户的token中，云服务根据该名称来判断用户是否有权限访问。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 权限名。携带在用户的token中，云服务根据该名称来判断用户是否有权限访问。
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
    *  权限描述信息。
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
    * @param string|null $description 权限描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\Links|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\Links|null $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets id
    *  权限ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 权限ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets displayName
    *  权限展示名。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 权限展示名。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets type
    *  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RolePolicy
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RolePolicy $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets updatedTime
    *  权限更新时间。
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 权限更新时间。
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets createdTime
    *  权限创建时间。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 权限创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
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

