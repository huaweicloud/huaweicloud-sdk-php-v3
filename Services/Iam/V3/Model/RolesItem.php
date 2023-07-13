<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RolesItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RolesItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * catalog  权限所在目录。
    * displayName  权限展示名称。
    * description  权限的英文描述。
    * descriptionCn  权限的中文描述信息。
    * domainId  权限所属账号ID。
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * id  权限Id。
    * name  权限名称。
    * policy  policy
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'catalog' => 'string',
            'displayName' => 'string',
            'description' => 'string',
            'descriptionCn' => 'string',
            'domainId' => 'string',
            'flag' => 'string',
            'id' => 'string',
            'name' => 'string',
            'policy' => '\HuaweiCloud\SDK\Iam\V3\Model\RolePolicy',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * catalog  权限所在目录。
    * displayName  权限展示名称。
    * description  权限的英文描述。
    * descriptionCn  权限的中文描述信息。
    * domainId  权限所属账号ID。
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * id  权限Id。
    * name  权限名称。
    * policy  policy
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'catalog' => null,
        'displayName' => null,
        'description' => null,
        'descriptionCn' => null,
        'domainId' => null,
        'flag' => null,
        'id' => null,
        'name' => null,
        'policy' => null,
        'type' => null
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
    * catalog  权限所在目录。
    * displayName  权限展示名称。
    * description  权限的英文描述。
    * descriptionCn  权限的中文描述信息。
    * domainId  权限所属账号ID。
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * id  权限Id。
    * name  权限名称。
    * policy  policy
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'catalog' => 'catalog',
            'displayName' => 'display_name',
            'description' => 'description',
            'descriptionCn' => 'description_cn',
            'domainId' => 'domain_id',
            'flag' => 'flag',
            'id' => 'id',
            'name' => 'name',
            'policy' => 'policy',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * catalog  权限所在目录。
    * displayName  权限展示名称。
    * description  权限的英文描述。
    * descriptionCn  权限的中文描述信息。
    * domainId  权限所属账号ID。
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * id  权限Id。
    * name  权限名称。
    * policy  policy
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @var string[]
    */
    protected static $setters = [
            'catalog' => 'setCatalog',
            'displayName' => 'setDisplayName',
            'description' => 'setDescription',
            'descriptionCn' => 'setDescriptionCn',
            'domainId' => 'setDomainId',
            'flag' => 'setFlag',
            'id' => 'setId',
            'name' => 'setName',
            'policy' => 'setPolicy',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * catalog  权限所在目录。
    * displayName  权限展示名称。
    * description  权限的英文描述。
    * descriptionCn  权限的中文描述信息。
    * domainId  权限所属账号ID。
    * flag  该参数值为fine_grained时，标识此权限为系统内置的策略。
    * id  权限Id。
    * name  权限名称。
    * policy  policy
    * type  权限的显示模式。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。 > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @var string[]
    */
    protected static $getters = [
            'catalog' => 'getCatalog',
            'displayName' => 'getDisplayName',
            'description' => 'getDescription',
            'descriptionCn' => 'getDescriptionCn',
            'domainId' => 'getDomainId',
            'flag' => 'getFlag',
            'id' => 'getId',
            'name' => 'getName',
            'policy' => 'getPolicy',
            'type' => 'getType'
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
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['descriptionCn'] = isset($data['descriptionCn']) ? $data['descriptionCn'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['catalog'] === null) {
            $invalidProperties[] = "'catalog' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['descriptionCn'] === null) {
            $invalidProperties[] = "'descriptionCn' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['flag'] === null) {
            $invalidProperties[] = "'flag' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets catalog
    *  权限所在目录。
    *
    * @return string
    */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
    * Sets catalog
    *
    * @param string $catalog 权限所在目录。
    *
    * @return $this
    */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;
        return $this;
    }

    /**
    * Gets displayName
    *  权限展示名称。
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 权限展示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets description
    *  权限的英文描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 权限的英文描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets descriptionCn
    *  权限的中文描述信息。
    *
    * @return string
    */
    public function getDescriptionCn()
    {
        return $this->container['descriptionCn'];
    }

    /**
    * Sets descriptionCn
    *
    * @param string $descriptionCn 权限的中文描述信息。
    *
    * @return $this
    */
    public function setDescriptionCn($descriptionCn)
    {
        $this->container['descriptionCn'] = $descriptionCn;
        return $this;
    }

    /**
    * Gets domainId
    *  权限所属账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 权限所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets flag
    *  该参数值为fine_grained时，标识此权限为系统内置的策略。
    *
    * @return string
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param string $flag 该参数值为fine_grained时，标识此权限为系统内置的策略。
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
        return $this;
    }

    /**
    * Gets id
    *  权限Id。
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
    * @param string $id 权限Id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  权限名称。
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
    * @param string $name 权限名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

