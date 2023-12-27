<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LTSFullTextIndexInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LTSFullTextIndexInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  是否开启全文索引
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  自定义分词符
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'caseSensitive' => 'bool',
            'includeChinese' => 'bool',
            'tokenizer' => 'string',
            'ascii' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  是否开启全文索引
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  自定义分词符
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'caseSensitive' => null,
        'includeChinese' => null,
        'tokenizer' => null,
        'ascii' => null
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
    * enable  是否开启全文索引
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  自定义分词符
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'caseSensitive' => 'caseSensitive',
            'includeChinese' => 'includeChinese',
            'tokenizer' => 'tokenizer',
            'ascii' => 'ascii'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  是否开启全文索引
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  自定义分词符
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'caseSensitive' => 'setCaseSensitive',
            'includeChinese' => 'setIncludeChinese',
            'tokenizer' => 'setTokenizer',
            'ascii' => 'setAscii'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  是否开启全文索引
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  自定义分词符
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'caseSensitive' => 'getCaseSensitive',
            'includeChinese' => 'getIncludeChinese',
            'tokenizer' => 'getTokenizer',
            'ascii' => 'getAscii'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['caseSensitive'] = isset($data['caseSensitive']) ? $data['caseSensitive'] : null;
        $this->container['includeChinese'] = isset($data['includeChinese']) ? $data['includeChinese'] : null;
        $this->container['tokenizer'] = isset($data['tokenizer']) ? $data['tokenizer'] : null;
        $this->container['ascii'] = isset($data['ascii']) ? $data['ascii'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
        if ($this->container['caseSensitive'] === null) {
            $invalidProperties[] = "'caseSensitive' can't be null";
        }
        if ($this->container['includeChinese'] === null) {
            $invalidProperties[] = "'includeChinese' can't be null";
        }
        if ($this->container['tokenizer'] === null) {
            $invalidProperties[] = "'tokenizer' can't be null";
        }
            if ((mb_strlen($this->container['tokenizer']) > 128)) {
                $invalidProperties[] = "invalid value for 'tokenizer', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['tokenizer']) < 0)) {
                $invalidProperties[] = "invalid value for 'tokenizer', the character length must be bigger than or equal to 0.";
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
    * Gets enable
    *  是否开启全文索引
    *
    * @return bool
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool $enable 是否开启全文索引
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets caseSensitive
    *  是否大小写敏感
    *
    * @return bool
    */
    public function getCaseSensitive()
    {
        return $this->container['caseSensitive'];
    }

    /**
    * Sets caseSensitive
    *
    * @param bool $caseSensitive 是否大小写敏感
    *
    * @return $this
    */
    public function setCaseSensitive($caseSensitive)
    {
        $this->container['caseSensitive'] = $caseSensitive;
        return $this;
    }

    /**
    * Gets includeChinese
    *  是否包含中文
    *
    * @return bool
    */
    public function getIncludeChinese()
    {
        return $this->container['includeChinese'];
    }

    /**
    * Sets includeChinese
    *
    * @param bool $includeChinese 是否包含中文
    *
    * @return $this
    */
    public function setIncludeChinese($includeChinese)
    {
        $this->container['includeChinese'] = $includeChinese;
        return $this;
    }

    /**
    * Gets tokenizer
    *  自定义分词符
    *
    * @return string
    */
    public function getTokenizer()
    {
        return $this->container['tokenizer'];
    }

    /**
    * Sets tokenizer
    *
    * @param string $tokenizer 自定义分词符
    *
    * @return $this
    */
    public function setTokenizer($tokenizer)
    {
        $this->container['tokenizer'] = $tokenizer;
        return $this;
    }

    /**
    * Gets ascii
    *  特殊分词符
    *
    * @return string[]|null
    */
    public function getAscii()
    {
        return $this->container['ascii'];
    }

    /**
    * Sets ascii
    *
    * @param string[]|null $ascii 特殊分词符
    *
    * @return $this
    */
    public function setAscii($ascii)
    {
        $this->container['ascii'] = $ascii;
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

