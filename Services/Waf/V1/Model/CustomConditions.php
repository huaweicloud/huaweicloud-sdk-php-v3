<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomConditions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomConditions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、request
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、request时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件列表匹配逻辑。   -  如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal或者len_not_equal   - 如果字段类型category是ip, 匹配逻辑可以为： equal、not_equal、equal_any或者not_equal_all   - 如果字段类型category是method, 匹配逻辑可以为： equal或者not_equal n - 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal   - 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal、len_not_equal、、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、request
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、request时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件列表匹配逻辑。   -  如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal或者len_not_equal   - 如果字段类型category是ip, 匹配逻辑可以为： equal、not_equal、equal_any或者not_equal_all   - 如果字段类型category是method, 匹配逻辑可以为： equal或者not_equal n - 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal   - 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal、len_not_equal、、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、request
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、request时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件列表匹配逻辑。   -  如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal或者len_not_equal   - 如果字段类型category是ip, 匹配逻辑可以为： equal、not_equal、equal_any或者not_equal_all   - 如果字段类型category是method, 匹配逻辑可以为： equal或者not_equal n - 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal   - 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal、len_not_equal、、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、request
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、request时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件列表匹配逻辑。   -  如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal或者len_not_equal   - 如果字段类型category是ip, 匹配逻辑可以为： equal、not_equal、equal_any或者not_equal_all   - 如果字段类型category是method, 匹配逻辑可以为： equal或者not_equal n - 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal   - 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal、len_not_equal、、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * category  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、request
    * index  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、request时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
    * logicOperation  条件列表匹配逻辑。   -  如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal或者len_not_equal   - 如果字段类型category是ip, 匹配逻辑可以为： equal、not_equal、equal_any或者not_equal_all   - 如果字段类型category是method, 匹配逻辑可以为： equal或者not_equal n - 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal   - 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal、len_not_equal、、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
    * valueListId  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    const CATEGORY_URL = 'url';
    const CATEGORY_USER_AGENT = 'user-agent';
    const CATEGORY_REFERER = 'referer';
    const CATEGORY_IP = 'ip';
    const CATEGORY_METHOD = 'method';
    const CATEGORY_REQUEST_LINE = 'request_line';
    const CATEGORY_REQUEST = 'request';
    const CATEGORY_PARAMS = 'params';
    const CATEGORY_COOKIE = 'cookie';
    const CATEGORY_HEADER = 'header';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_URL,
            self::CATEGORY_USER_AGENT,
            self::CATEGORY_REFERER,
            self::CATEGORY_IP,
            self::CATEGORY_METHOD,
            self::CATEGORY_REQUEST_LINE,
            self::CATEGORY_REQUEST,
            self::CATEGORY_PARAMS,
            self::CATEGORY_COOKIE,
            self::CATEGORY_HEADER,
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
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
    * Gets category
    *  字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、request
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
    * @param string|null $category 字段类型。可选值为：url、user-agent、ip、params、cookie、referer、header、request_line、method、request
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
    *  子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、request时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
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
    * @param string|null $index 子字段：  - 字段类型为url、user-agent、ip、refer、request_line、method、request时，不需要传index参数    - 字段类型为params、header、cookie并且子字段为自定义时，index的值为自定义子字段
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
    *  条件列表匹配逻辑。   -  如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal或者len_not_equal   - 如果字段类型category是ip, 匹配逻辑可以为： equal、not_equal、equal_any或者not_equal_all   - 如果字段类型category是method, 匹配逻辑可以为： equal或者not_equal n - 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal   - 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal、len_not_equal、、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
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
    * @param string|null $logicOperation 条件列表匹配逻辑。   -  如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal或者len_not_equal   - 如果字段类型category是ip, 匹配逻辑可以为： equal、not_equal、equal_any或者not_equal_all   - 如果字段类型category是method, 匹配逻辑可以为： equal或者not_equal n - 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal   - 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 contain_any、 not_contain_all、 equal_any、 not_equal_all、 equal_any、 not_equal_all、 prefix_any、 not_prefix_all、 suffix_any、 not_suffix_all、 len_greater、 len_less、len_equal、len_not_equal、、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
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
    *  条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
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
    * @param string[]|null $contents 条件列表逻辑匹配内容。当logic_operation参数不以any或者all结尾时，需要传该参数。
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
    *  引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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
    * @param string|null $valueListId 引用表id。当logic_operation参数以any或者all结尾时，需要传该参数。此外，引用表类型要与category类型保持一致。
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

