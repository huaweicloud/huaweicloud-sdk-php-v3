<?php

namespace HuaweiCloud\SDK\Cc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceByFilterTagRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceByFilterTagRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  动作。|- filter：过滤。 count：查询总条数。
    * limit  查询结果数量限制
    * offset  查询结果偏移
    * tags  是否包含以下tag（多个key取\"与\"关系，多个value取\"或\"关系）
    * matches  是否匹配以下tag，key必须为\"resource_name\"，value如果有值则模糊匹配，如果为空字符串则精确匹配
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'tags' => '\HuaweiCloud\SDK\Cc\V2\Model\AggTag[]',
            'matches' => '\HuaweiCloud\SDK\Cc\V2\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  动作。|- filter：过滤。 count：查询总条数。
    * limit  查询结果数量限制
    * offset  查询结果偏移
    * tags  是否包含以下tag（多个key取\"与\"关系，多个value取\"或\"关系）
    * matches  是否匹配以下tag，key必须为\"resource_name\"，value如果有值则模糊匹配，如果为空字符串则精确匹配
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'tags' => null,
        'matches' => null
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
    * action  动作。|- filter：过滤。 count：查询总条数。
    * limit  查询结果数量限制
    * offset  查询结果偏移
    * tags  是否包含以下tag（多个key取\"与\"关系，多个value取\"或\"关系）
    * matches  是否匹配以下tag，key必须为\"resource_name\"，value如果有值则模糊匹配，如果为空字符串则精确匹配
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'limit' => 'limit',
            'offset' => 'offset',
            'tags' => 'tags',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  动作。|- filter：过滤。 count：查询总条数。
    * limit  查询结果数量限制
    * offset  查询结果偏移
    * tags  是否包含以下tag（多个key取\"与\"关系，多个value取\"或\"关系）
    * matches  是否匹配以下tag，key必须为\"resource_name\"，value如果有值则模糊匹配，如果为空字符串则精确匹配
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'tags' => 'setTags',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  动作。|- filter：过滤。 count：查询总条数。
    * limit  查询结果数量限制
    * offset  查询结果偏移
    * tags  是否包含以下tag（多个key取\"与\"关系，多个value取\"或\"关系）
    * matches  是否匹配以下tag，key必须为\"resource_name\"，value如果有值则模糊匹配，如果为空字符串则精确匹配
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'tags' => 'getTags',
            'matches' => 'getMatches'
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
    const ACTION_FILTER = 'filter';
    const ACTION_COUNT = 'count';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_FILTER,
            self::ACTION_COUNT,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets action
    *  动作。|- filter：过滤。 count：查询总条数。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 动作。|- filter：过滤。 count：查询总条数。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets limit
    *  查询结果数量限制
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询结果数量限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  查询结果偏移
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询结果偏移
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets tags
    *  是否包含以下tag（多个key取\"与\"关系，多个value取\"或\"关系）
    *
    * @return \HuaweiCloud\SDK\Cc\V2\Model\AggTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cc\V2\Model\AggTag[]|null $tags 是否包含以下tag（多个key取\"与\"关系，多个value取\"或\"关系）
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets matches
    *  是否匹配以下tag，key必须为\"resource_name\"，value如果有值则模糊匹配，如果为空字符串则精确匹配
    *
    * @return \HuaweiCloud\SDK\Cc\V2\Model\Tag[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Cc\V2\Model\Tag[]|null $matches 是否匹配以下tag，key必须为\"resource_name\"，value如果有值则模糊匹配，如果为空字符串则精确匹配
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
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

