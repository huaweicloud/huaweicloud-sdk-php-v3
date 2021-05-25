<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgencyPolicyRoleResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgencyPolicyRoleResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * catalog  自定义策略所在目录。
    * displayName  自定义策略展示名。
    * description  自定义策略的描述信息。
    * links  links
    * policy  policy
    * descriptionCn  自定义策略的中文描述信息。
    * domainId  自定义策略所属账号ID。
    * type  自定义策略的显示模式。   > - AX表示在domain层显示。   > - XA表示在project层显示。   > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * id  自定义策略ID。
    * name  自定义策略名。
    * updatedTime  自定义策略更新时间。
    * createdTime  自定义策略创建时间。
    * references  自定义策略的引用次数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'catalog' => 'string',
            'displayName' => 'string',
            'description' => 'string',
            'links' => '\HuaweiCloud\SDK\Iam\V3\Model\LinksSelf',
            'policy' => '\HuaweiCloud\SDK\Iam\V3\Model\AgencyPolicy',
            'descriptionCn' => 'string',
            'domainId' => 'string',
            'type' => 'string',
            'id' => 'string',
            'name' => 'string',
            'updatedTime' => 'string',
            'createdTime' => 'string',
            'references' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * catalog  自定义策略所在目录。
    * displayName  自定义策略展示名。
    * description  自定义策略的描述信息。
    * links  links
    * policy  policy
    * descriptionCn  自定义策略的中文描述信息。
    * domainId  自定义策略所属账号ID。
    * type  自定义策略的显示模式。   > - AX表示在domain层显示。   > - XA表示在project层显示。   > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * id  自定义策略ID。
    * name  自定义策略名。
    * updatedTime  自定义策略更新时间。
    * createdTime  自定义策略创建时间。
    * references  自定义策略的引用次数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'catalog' => null,
        'displayName' => null,
        'description' => null,
        'links' => null,
        'policy' => null,
        'descriptionCn' => null,
        'domainId' => null,
        'type' => null,
        'id' => null,
        'name' => null,
        'updatedTime' => null,
        'createdTime' => null,
        'references' => null
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
    * catalog  自定义策略所在目录。
    * displayName  自定义策略展示名。
    * description  自定义策略的描述信息。
    * links  links
    * policy  policy
    * descriptionCn  自定义策略的中文描述信息。
    * domainId  自定义策略所属账号ID。
    * type  自定义策略的显示模式。   > - AX表示在domain层显示。   > - XA表示在project层显示。   > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * id  自定义策略ID。
    * name  自定义策略名。
    * updatedTime  自定义策略更新时间。
    * createdTime  自定义策略创建时间。
    * references  自定义策略的引用次数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'catalog' => 'catalog',
            'displayName' => 'display_name',
            'description' => 'description',
            'links' => 'links',
            'policy' => 'policy',
            'descriptionCn' => 'description_cn',
            'domainId' => 'domain_id',
            'type' => 'type',
            'id' => 'id',
            'name' => 'name',
            'updatedTime' => 'updated_time',
            'createdTime' => 'created_time',
            'references' => 'references'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * catalog  自定义策略所在目录。
    * displayName  自定义策略展示名。
    * description  自定义策略的描述信息。
    * links  links
    * policy  policy
    * descriptionCn  自定义策略的中文描述信息。
    * domainId  自定义策略所属账号ID。
    * type  自定义策略的显示模式。   > - AX表示在domain层显示。   > - XA表示在project层显示。   > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * id  自定义策略ID。
    * name  自定义策略名。
    * updatedTime  自定义策略更新时间。
    * createdTime  自定义策略创建时间。
    * references  自定义策略的引用次数。
    *
    * @var string[]
    */
    protected static $setters = [
            'catalog' => 'setCatalog',
            'displayName' => 'setDisplayName',
            'description' => 'setDescription',
            'links' => 'setLinks',
            'policy' => 'setPolicy',
            'descriptionCn' => 'setDescriptionCn',
            'domainId' => 'setDomainId',
            'type' => 'setType',
            'id' => 'setId',
            'name' => 'setName',
            'updatedTime' => 'setUpdatedTime',
            'createdTime' => 'setCreatedTime',
            'references' => 'setReferences'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * catalog  自定义策略所在目录。
    * displayName  自定义策略展示名。
    * description  自定义策略的描述信息。
    * links  links
    * policy  policy
    * descriptionCn  自定义策略的中文描述信息。
    * domainId  自定义策略所属账号ID。
    * type  自定义策略的显示模式。   > - AX表示在domain层显示。   > - XA表示在project层显示。   > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    * id  自定义策略ID。
    * name  自定义策略名。
    * updatedTime  自定义策略更新时间。
    * createdTime  自定义策略创建时间。
    * references  自定义策略的引用次数。
    *
    * @var string[]
    */
    protected static $getters = [
            'catalog' => 'getCatalog',
            'displayName' => 'getDisplayName',
            'description' => 'getDescription',
            'links' => 'getLinks',
            'policy' => 'getPolicy',
            'descriptionCn' => 'getDescriptionCn',
            'domainId' => 'getDomainId',
            'type' => 'getType',
            'id' => 'getId',
            'name' => 'getName',
            'updatedTime' => 'getUpdatedTime',
            'createdTime' => 'getCreatedTime',
            'references' => 'getReferences'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['descriptionCn'] = isset($data['descriptionCn']) ? $data['descriptionCn'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['references'] = isset($data['references']) ? $data['references'] : null;
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
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    *  自定义策略所在目录。
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
    * @param string $catalog 自定义策略所在目录。
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
    *  自定义策略展示名。
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
    * @param string $displayName 自定义策略展示名。
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
    *  自定义策略的描述信息。
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
    * @param string $description 自定义策略的描述信息。
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
    * @return \HuaweiCloud\SDK\Iam\V3\Model\LinksSelf
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\LinksSelf $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AgencyPolicy
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AgencyPolicy $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets descriptionCn
    *  自定义策略的中文描述信息。
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
    * @param string|null $descriptionCn 自定义策略的中文描述信息。
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
    *  自定义策略所属账号ID。
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
    * @param string $domainId 自定义策略所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets type
    *  自定义策略的显示模式。   > - AX表示在domain层显示。   > - XA表示在project层显示。   > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
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
    * @param string $type 自定义策略的显示模式。   > - AX表示在domain层显示。   > - XA表示在project层显示。   > - 自定义策略的显示模式只能为AX或者XA，不能在domain层和project层都显示（AA），或者在domain层和project层都不显示（XX）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  自定义策略ID。
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
    * @param string $id 自定义策略ID。
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
    *  自定义策略名。
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
    * @param string $name 自定义策略名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets updatedTime
    *  自定义策略更新时间。
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
    * @param string|null $updatedTime 自定义策略更新时间。
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
    *  自定义策略创建时间。
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
    * @param string|null $createdTime 自定义策略创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets references
    *  自定义策略的引用次数。
    *
    * @return string|null
    */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
    * Sets references
    *
    * @param string|null $references 自定义策略的引用次数。
    *
    * @return $this
    */
    public function setReferences($references)
    {
        $this->container['references'] = $references;
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

