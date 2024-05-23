<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePolicyReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePolicyReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  要添加到新策略的策略文本内容。
    * description  要分配给策略的可选说明。
    * name  要分配给策略的名称。
    * type  要创建的策略类型,service_control_policy服务控制策略；tag_policy：标签策略。
    * tags  要附加到新创建的策略的标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'string',
            'description' => 'string',
            'name' => 'string',
            'type' => 'string',
            'tags' => '\HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  要添加到新策略的策略文本内容。
    * description  要分配给策略的可选说明。
    * name  要分配给策略的名称。
    * type  要创建的策略类型,service_control_policy服务控制策略；tag_policy：标签策略。
    * tags  要附加到新创建的策略的标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'description' => null,
        'name' => null,
        'type' => null,
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
    * content  要添加到新策略的策略文本内容。
    * description  要分配给策略的可选说明。
    * name  要分配给策略的名称。
    * type  要创建的策略类型,service_control_policy服务控制策略；tag_policy：标签策略。
    * tags  要附加到新创建的策略的标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'description' => 'description',
            'name' => 'name',
            'type' => 'type',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  要添加到新策略的策略文本内容。
    * description  要分配给策略的可选说明。
    * name  要分配给策略的名称。
    * type  要创建的策略类型,service_control_policy服务控制策略；tag_policy：标签策略。
    * tags  要附加到新创建的策略的标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'description' => 'setDescription',
            'name' => 'setName',
            'type' => 'setType',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  要添加到新策略的策略文本内容。
    * description  要分配给策略的可选说明。
    * name  要分配给策略的名称。
    * type  要创建的策略类型,service_control_policy服务控制策略；tag_policy：标签策略。
    * tags  要附加到新创建的策略的标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'description' => 'getDescription',
            'name' => 'getName',
            'type' => 'getType',
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
    const TYPE_SERVICE_CONTROL_POLICY = 'service_control_policy';
    const TYPE_TAG_POLICY = 'tag_policy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVICE_CONTROL_POLICY,
            self::TYPE_TAG_POLICY,
        ];
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 20000)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 20000.";
            }
            if ((mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[\\s\\S]*$/", $this->container['content'])) {
                $invalidProperties[] = "invalid value for 'content', must be conform to the pattern /^[\\s\\S]*$/.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[\\s\\S]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s\\S]*$/.";
            }
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets content
    *  要添加到新策略的策略文本内容。
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 要添加到新策略的策略文本内容。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets description
    *  要分配给策略的可选说明。
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
    * @param string $description 要分配给策略的可选说明。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  要分配给策略的名称。
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
    * @param string $name 要分配给策略的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  要创建的策略类型,service_control_policy服务控制策略；tag_policy：标签策略。
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
    * @param string $type 要创建的策略类型,service_control_policy服务控制策略；tag_policy：标签策略。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tags
    *  要附加到新创建的策略的标签列表。
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
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]|null $tags 要附加到新创建的策略的标签列表。
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

