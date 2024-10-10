<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WafCustomCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WafCustomCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  字段类型 枚举值： url：路径 ip：IPv4 user-agent: User Agent method: Method referer: Referer params：Params cookie：Cookie header：Header request_line: Request Line request: Request
    * index  子字段 - 当字段类型为url，user-agent、refer、request_line、method、request时，不需要传index参数 - 当字段类型为ip或ipv6时，index必填且必须为以下值：    client-ip：客户端IP    x-forwarded-for：X-Forwarded-For    TCP连接IP: $remote_addr - 当字段类型（category）选择“params”、“cookie”、“header”时，请根据实际需求配置子字段且该参数必填。 - 当匹配逻辑为num_greater、num_less、num_equal、num_not_equal时，子字段必须为空 - 当子字段不为空时，最大长度不超过2048
    * logicOperation  条件列表匹配逻辑。 如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal或者len_not_equal 如果字段类型category是ip、ipv6或method，匹配逻辑可以为： equal、not_equal 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal、len_not_equal、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。 - 当匹配逻辑为exist或not_exist时，contents必须为空，其他情况下contents必填且长度不超过2048 - 当匹配逻辑包含\"len\"时，contents必须为0~65535的整数；当匹配逻辑包含\"num\"时，contents必须为0~512的整数 - 当category为method时, contents必须是1-64位大写字母
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'index' => 'string',
            'logicOperation' => 'string',
            'contents' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  字段类型 枚举值： url：路径 ip：IPv4 user-agent: User Agent method: Method referer: Referer params：Params cookie：Cookie header：Header request_line: Request Line request: Request
    * index  子字段 - 当字段类型为url，user-agent、refer、request_line、method、request时，不需要传index参数 - 当字段类型为ip或ipv6时，index必填且必须为以下值：    client-ip：客户端IP    x-forwarded-for：X-Forwarded-For    TCP连接IP: $remote_addr - 当字段类型（category）选择“params”、“cookie”、“header”时，请根据实际需求配置子字段且该参数必填。 - 当匹配逻辑为num_greater、num_less、num_equal、num_not_equal时，子字段必须为空 - 当子字段不为空时，最大长度不超过2048
    * logicOperation  条件列表匹配逻辑。 如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal或者len_not_equal 如果字段类型category是ip、ipv6或method，匹配逻辑可以为： equal、not_equal 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal、len_not_equal、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。 - 当匹配逻辑为exist或not_exist时，contents必须为空，其他情况下contents必填且长度不超过2048 - 当匹配逻辑包含\"len\"时，contents必须为0~65535的整数；当匹配逻辑包含\"num\"时，contents必须为0~512的整数 - 当category为method时, contents必须是1-64位大写字母
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'index' => null,
        'logicOperation' => null,
        'contents' => null
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
    * category  字段类型 枚举值： url：路径 ip：IPv4 user-agent: User Agent method: Method referer: Referer params：Params cookie：Cookie header：Header request_line: Request Line request: Request
    * index  子字段 - 当字段类型为url，user-agent、refer、request_line、method、request时，不需要传index参数 - 当字段类型为ip或ipv6时，index必填且必须为以下值：    client-ip：客户端IP    x-forwarded-for：X-Forwarded-For    TCP连接IP: $remote_addr - 当字段类型（category）选择“params”、“cookie”、“header”时，请根据实际需求配置子字段且该参数必填。 - 当匹配逻辑为num_greater、num_less、num_equal、num_not_equal时，子字段必须为空 - 当子字段不为空时，最大长度不超过2048
    * logicOperation  条件列表匹配逻辑。 如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal或者len_not_equal 如果字段类型category是ip、ipv6或method，匹配逻辑可以为： equal、not_equal 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal、len_not_equal、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。 - 当匹配逻辑为exist或not_exist时，contents必须为空，其他情况下contents必填且长度不超过2048 - 当匹配逻辑包含\"len\"时，contents必须为0~65535的整数；当匹配逻辑包含\"num\"时，contents必须为0~512的整数 - 当category为method时, contents必须是1-64位大写字母
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'index' => 'index',
            'logicOperation' => 'logic_operation',
            'contents' => 'contents'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  字段类型 枚举值： url：路径 ip：IPv4 user-agent: User Agent method: Method referer: Referer params：Params cookie：Cookie header：Header request_line: Request Line request: Request
    * index  子字段 - 当字段类型为url，user-agent、refer、request_line、method、request时，不需要传index参数 - 当字段类型为ip或ipv6时，index必填且必须为以下值：    client-ip：客户端IP    x-forwarded-for：X-Forwarded-For    TCP连接IP: $remote_addr - 当字段类型（category）选择“params”、“cookie”、“header”时，请根据实际需求配置子字段且该参数必填。 - 当匹配逻辑为num_greater、num_less、num_equal、num_not_equal时，子字段必须为空 - 当子字段不为空时，最大长度不超过2048
    * logicOperation  条件列表匹配逻辑。 如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal或者len_not_equal 如果字段类型category是ip、ipv6或method，匹配逻辑可以为： equal、not_equal 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal、len_not_equal、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。 - 当匹配逻辑为exist或not_exist时，contents必须为空，其他情况下contents必填且长度不超过2048 - 当匹配逻辑包含\"len\"时，contents必须为0~65535的整数；当匹配逻辑包含\"num\"时，contents必须为0~512的整数 - 当category为method时, contents必须是1-64位大写字母
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'index' => 'setIndex',
            'logicOperation' => 'setLogicOperation',
            'contents' => 'setContents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  字段类型 枚举值： url：路径 ip：IPv4 user-agent: User Agent method: Method referer: Referer params：Params cookie：Cookie header：Header request_line: Request Line request: Request
    * index  子字段 - 当字段类型为url，user-agent、refer、request_line、method、request时，不需要传index参数 - 当字段类型为ip或ipv6时，index必填且必须为以下值：    client-ip：客户端IP    x-forwarded-for：X-Forwarded-For    TCP连接IP: $remote_addr - 当字段类型（category）选择“params”、“cookie”、“header”时，请根据实际需求配置子字段且该参数必填。 - 当匹配逻辑为num_greater、num_less、num_equal、num_not_equal时，子字段必须为空 - 当子字段不为空时，最大长度不超过2048
    * logicOperation  条件列表匹配逻辑。 如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal或者len_not_equal 如果字段类型category是ip、ipv6或method，匹配逻辑可以为： equal、not_equal 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal、len_not_equal、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    * contents  条件列表逻辑匹配内容。 - 当匹配逻辑为exist或not_exist时，contents必须为空，其他情况下contents必填且长度不超过2048 - 当匹配逻辑包含\"len\"时，contents必须为0~65535的整数；当匹配逻辑包含\"num\"时，contents必须为0~512的整数 - 当category为method时, contents必须是1-64位大写字母
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'index' => 'getIndex',
            'logicOperation' => 'getLogicOperation',
            'contents' => 'getContents'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['logicOperation'] === null) {
            $invalidProperties[] = "'logicOperation' can't be null";
        }
        if ($this->container['contents'] === null) {
            $invalidProperties[] = "'contents' can't be null";
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
    *  字段类型 枚举值： url：路径 ip：IPv4 user-agent: User Agent method: Method referer: Referer params：Params cookie：Cookie header：Header request_line: Request Line request: Request
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 字段类型 枚举值： url：路径 ip：IPv4 user-agent: User Agent method: Method referer: Referer params：Params cookie：Cookie header：Header request_line: Request Line request: Request
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
    *  子字段 - 当字段类型为url，user-agent、refer、request_line、method、request时，不需要传index参数 - 当字段类型为ip或ipv6时，index必填且必须为以下值：    client-ip：客户端IP    x-forwarded-for：X-Forwarded-For    TCP连接IP: $remote_addr - 当字段类型（category）选择“params”、“cookie”、“header”时，请根据实际需求配置子字段且该参数必填。 - 当匹配逻辑为num_greater、num_less、num_equal、num_not_equal时，子字段必须为空 - 当子字段不为空时，最大长度不超过2048
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
    * @param string|null $index 子字段 - 当字段类型为url，user-agent、refer、request_line、method、request时，不需要传index参数 - 当字段类型为ip或ipv6时，index必填且必须为以下值：    client-ip：客户端IP    x-forwarded-for：X-Forwarded-For    TCP连接IP: $remote_addr - 当字段类型（category）选择“params”、“cookie”、“header”时，请根据实际需求配置子字段且该参数必填。 - 当匹配逻辑为num_greater、num_less、num_equal、num_not_equal时，子字段必须为空 - 当子字段不为空时，最大长度不超过2048
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
    *  条件列表匹配逻辑。 如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal或者len_not_equal 如果字段类型category是ip、ipv6或method，匹配逻辑可以为： equal、not_equal 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal、len_not_equal、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
    *
    * @return string
    */
    public function getLogicOperation()
    {
        return $this->container['logicOperation'];
    }

    /**
    * Sets logicOperation
    *
    * @param string $logicOperation 条件列表匹配逻辑。 如果字段类型category是url、user-agent或者referer， 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal或者len_not_equal 如果字段类型category是ip、ipv6或method，匹配逻辑可以为： equal、not_equal 如果字段类型category是request_line或者request, 匹配逻辑可以为： len_greater、len_less、len_equal或者len_not_equal 如果字段类型category是params、cookie或者header, 匹配逻辑可以为：contain、 not_contain、 equal、 not_equal、 prefix、 not_prefix、 suffix、 not_suffix、 len_greater、 len_less、len_equal、len_not_equal、num_greater、num_less、num_equal、num_not_equal、exist或者not_exist
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
    *  条件列表逻辑匹配内容。 - 当匹配逻辑为exist或not_exist时，contents必须为空，其他情况下contents必填且长度不超过2048 - 当匹配逻辑包含\"len\"时，contents必须为0~65535的整数；当匹配逻辑包含\"num\"时，contents必须为0~512的整数 - 当category为method时, contents必须是1-64位大写字母
    *
    * @return string[]
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param string[] $contents 条件列表逻辑匹配内容。 - 当匹配逻辑为exist或not_exist时，contents必须为空，其他情况下contents必填且长度不超过2048 - 当匹配逻辑包含\"len\"时，contents必须为0~65535的整数；当匹配逻辑包含\"num\"时，contents必须为0~512的整数 - 当category为method时, contents必须是1-64位大写字母
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
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

