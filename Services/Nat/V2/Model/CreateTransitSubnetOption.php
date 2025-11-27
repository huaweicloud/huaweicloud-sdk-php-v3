<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTransitSubnetOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTransitSubnetOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  中转子网的名字。仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  中转子网的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * virsubnetId  中转子网的子网ID。
    * virsubnetProjectId  中转子网的子网所属的项目ID。仅支持数字和小写字母。
    * tags  tag标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'virsubnetId' => 'string',
            'virsubnetProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Nat\V2\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  中转子网的名字。仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  中转子网的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * virsubnetId  中转子网的子网ID。
    * virsubnetProjectId  中转子网的子网所属的项目ID。仅支持数字和小写字母。
    * tags  tag标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'virsubnetId' => null,
        'virsubnetProjectId' => null,
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
    * name  中转子网的名字。仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  中转子网的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * virsubnetId  中转子网的子网ID。
    * virsubnetProjectId  中转子网的子网所属的项目ID。仅支持数字和小写字母。
    * tags  tag标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'virsubnetId' => 'virsubnet_id',
            'virsubnetProjectId' => 'virsubnet_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  中转子网的名字。仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  中转子网的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * virsubnetId  中转子网的子网ID。
    * virsubnetProjectId  中转子网的子网所属的项目ID。仅支持数字和小写字母。
    * tags  tag标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'virsubnetId' => 'setVirsubnetId',
            'virsubnetProjectId' => 'setVirsubnetProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  中转子网的名字。仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  中转子网的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * virsubnetId  中转子网的子网ID。
    * virsubnetProjectId  中转子网的子网所属的项目ID。仅支持数字和小写字母。
    * tags  tag标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'virsubnetId' => 'getVirsubnetId',
            'virsubnetProjectId' => 'getVirsubnetProjectId',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['virsubnetProjectId'] = isset($data['virsubnetProjectId']) ? $data['virsubnetProjectId'] : null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
            if ((mb_strlen($this->container['virsubnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['virsubnetId']) < 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['virsubnetProjectId'] === null) {
            $invalidProperties[] = "'virsubnetProjectId' can't be null";
        }
            if ((mb_strlen($this->container['virsubnetProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'virsubnetProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['virsubnetProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'virsubnetProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-z0-9]{32}/", $this->container['virsubnetProjectId'])) {
                $invalidProperties[] = "invalid value for 'virsubnetProjectId', must be conform to the pattern /[a-z0-9]{32}/.";
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
    *  中转子网的名字。仅支持数字、字母、_（下划线）、-（中划线）、中文。
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
    * @param string $name 中转子网的名字。仅支持数字、字母、_（下划线）、-（中划线）、中文。
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
    *  中转子网的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string|null $description 中转子网的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  中转子网的子网ID。
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId 中转子网的子网ID。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets virsubnetProjectId
    *  中转子网的子网所属的项目ID。仅支持数字和小写字母。
    *
    * @return string
    */
    public function getVirsubnetProjectId()
    {
        return $this->container['virsubnetProjectId'];
    }

    /**
    * Sets virsubnetProjectId
    *
    * @param string $virsubnetProjectId 中转子网的子网所属的项目ID。仅支持数字和小写字母。
    *
    * @return $this
    */
    public function setVirsubnetProjectId($virsubnetProjectId)
    {
        $this->container['virsubnetProjectId'] = $virsubnetProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  tag标签。
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\Tag[]|null $tags tag标签。
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

