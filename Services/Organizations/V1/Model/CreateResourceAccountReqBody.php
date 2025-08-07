<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResourceAccountReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResourceAccountReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  帐号名称。
    * agencyName  委托名称
    * description  描述信息。
    * tags  要绑定到新创建的帐号的标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'agencyName' => 'string',
            'description' => 'string',
            'tags' => '\HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  帐号名称。
    * agencyName  委托名称
    * description  描述信息。
    * tags  要绑定到新创建的帐号的标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'agencyName' => null,
        'description' => null,
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
    * name  帐号名称。
    * agencyName  委托名称
    * description  描述信息。
    * tags  要绑定到新创建的帐号的标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'agencyName' => 'agency_name',
            'description' => 'description',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  帐号名称。
    * agencyName  委托名称
    * description  描述信息。
    * tags  要绑定到新创建的帐号的标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'agencyName' => 'setAgencyName',
            'description' => 'setDescription',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  帐号名称。
    * agencyName  委托名称
    * description  描述信息。
    * tags  要绑定到新创建的帐号的标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'agencyName' => 'getAgencyName',
            'description' => 'getDescription',
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
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 6)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 6.";
            }
            if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z][0-9a-zA-Z_-]+$/.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) > 32)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agencyName']) && !preg_match("/^[\\w-]+$/", $this->container['agencyName'])) {
                $invalidProperties[] = "invalid value for 'agencyName', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
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
    *  帐号名称。
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
    * @param string $name 帐号名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets description
    *  描述信息。
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
    * @param string|null $description 描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  要绑定到新创建的帐号的标签列表。
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
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]|null $tags 要绑定到新创建的帐号的标签列表。
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

