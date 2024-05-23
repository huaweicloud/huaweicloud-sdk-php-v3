<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOrganizationalUnitReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOrganizationalUnitReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  要分配给新组织单元的名称。
    * parentId  要在其中创建新组织单元的根或组织单元的唯一标识符。
    * tags  要附加到新创建的组织单元的标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'parentId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  要分配给新组织单元的名称。
    * parentId  要在其中创建新组织单元的根或组织单元的唯一标识符。
    * tags  要附加到新创建的组织单元的标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'parentId' => null,
        'tags' => null
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
    * name  要分配给新组织单元的名称。
    * parentId  要在其中创建新组织单元的根或组织单元的唯一标识符。
    * tags  要附加到新创建的组织单元的标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'parentId' => 'parent_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  要分配给新组织单元的名称。
    * parentId  要在其中创建新组织单元的根或组织单元的唯一标识符。
    * tags  要附加到新创建的组织单元的标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'parentId' => 'setParentId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  要分配给新组织单元的名称。
    * parentId  要在其中创建新组织单元的根或组织单元的唯一标识符。
    * tags  要附加到新创建的组织单元的标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'parentId' => 'getParentId',
            'tags' => 'getTags'
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
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/.";
            }
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
            if ((mb_strlen($this->container['parentId']) > 100)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 100.";
            }
            if (!preg_match("/^(?:r-[0-9a-z]{4,32}|ou-[0-9a-z]{8,32})$/", $this->container['parentId'])) {
                $invalidProperties[] = "invalid value for 'parentId', must be conform to the pattern /^(?:r-[0-9a-z]{4,32}|ou-[0-9a-z]{8,32})$/.";
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
    *  要分配给新组织单元的名称。
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
    * @param string $name 要分配给新组织单元的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentId
    *  要在其中创建新组织单元的根或组织单元的唯一标识符。
    *
    * @return string
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string $parentId 要在其中创建新组织单元的根或组织单元的唯一标识符。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets tags
    *  要附加到新创建的组织单元的标签列表。
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]|null $tags 要附加到新创建的组织单元的标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

