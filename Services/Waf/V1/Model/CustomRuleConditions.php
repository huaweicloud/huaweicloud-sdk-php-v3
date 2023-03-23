<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomRuleConditions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomRule_conditions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、reqeust
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、reqeust时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件匹配逻辑。
    * contents  条件匹配的内容
    * valueListId  引用表id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'index' => 'string',
            'logicOperation' => 'string',
            'contents' => 'string[]',
            'valueListId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、reqeust
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、reqeust时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件匹配逻辑。
    * contents  条件匹配的内容
    * valueListId  引用表id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'index' => null,
        'logicOperation' => null,
        'contents' => null,
        'valueListId' => null
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
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、reqeust
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、reqeust时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件匹配逻辑。
    * contents  条件匹配的内容
    * valueListId  引用表id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'index' => 'index',
            'logicOperation' => 'logic_operation',
            'contents' => 'contents',
            'valueListId' => 'value_list_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、reqeust
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、reqeust时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件匹配逻辑。
    * contents  条件匹配的内容
    * valueListId  引用表id。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'index' => 'setIndex',
            'logicOperation' => 'setLogicOperation',
            'contents' => 'setContents',
            'valueListId' => 'setValueListId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、reqeust
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、reqeust时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件匹配逻辑。
    * contents  条件匹配的内容
    * valueListId  引用表id。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'index' => 'getIndex',
            'logicOperation' => 'getLogicOperation',
            'contents' => 'getContents',
            'valueListId' => 'getValueListId'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['logicOperation'] = isset($data['logicOperation']) ? $data['logicOperation'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['valueListId'] = isset($data['valueListId']) ? $data['valueListId'] : null;
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
    * Gets category
    *  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、reqeust
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、reqeust
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets index
    *  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、reqeust时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @return string|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param string|null $index 子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、reqeust时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets logicOperation
    *  条件匹配逻辑。
    *
    * @return string|null
    */
    public function getLogicOperation()
    {
        return $this->container['logicOperation'];
    }

    /**
    * Sets logicOperation
    *
    * @param string|null $logicOperation 条件匹配逻辑。
    *
    * @return $this
    */
    public function setLogicOperation($logicOperation)
    {
        $this->container['logicOperation'] = $logicOperation;
        return $this;
    }

    /**
    * Gets contents
    *  条件匹配的内容
    *
    * @return string[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param string[]|null $contents 条件匹配的内容
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets valueListId
    *  引用表id。
    *
    * @return string|null
    */
    public function getValueListId()
    {
        return $this->container['valueListId'];
    }

    /**
    * Sets valueListId
    *
    * @param string|null $valueListId 引用表id。
    *
    * @return $this
    */
    public function setValueListId($valueListId)
    {
        $this->container['valueListId'] = $valueListId;
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

