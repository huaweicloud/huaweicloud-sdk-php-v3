<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LTSFieldsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LTSFieldsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldType  字段类型
    * fieldName  字段名称
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  分词符
    * quickAnalysis  是否快速分析
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldType' => 'string',
            'fieldName' => 'string',
            'caseSensitive' => 'bool',
            'includeChinese' => 'bool',
            'tokenizer' => 'string',
            'quickAnalysis' => 'bool',
            'ascii' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldType  字段类型
    * fieldName  字段名称
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  分词符
    * quickAnalysis  是否快速分析
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldType' => null,
        'fieldName' => null,
        'caseSensitive' => null,
        'includeChinese' => null,
        'tokenizer' => null,
        'quickAnalysis' => null,
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
    * fieldType  字段类型
    * fieldName  字段名称
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  分词符
    * quickAnalysis  是否快速分析
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldType' => 'fieldType',
            'fieldName' => 'fieldName',
            'caseSensitive' => 'caseSensitive',
            'includeChinese' => 'includeChinese',
            'tokenizer' => 'tokenizer',
            'quickAnalysis' => 'quickAnalysis',
            'ascii' => 'ascii'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldType  字段类型
    * fieldName  字段名称
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  分词符
    * quickAnalysis  是否快速分析
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldType' => 'setFieldType',
            'fieldName' => 'setFieldName',
            'caseSensitive' => 'setCaseSensitive',
            'includeChinese' => 'setIncludeChinese',
            'tokenizer' => 'setTokenizer',
            'quickAnalysis' => 'setQuickAnalysis',
            'ascii' => 'setAscii'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldType  字段类型
    * fieldName  字段名称
    * caseSensitive  是否大小写敏感
    * includeChinese  是否包含中文
    * tokenizer  分词符
    * quickAnalysis  是否快速分析
    * ascii  特殊分词符
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldType' => 'getFieldType',
            'fieldName' => 'getFieldName',
            'caseSensitive' => 'getCaseSensitive',
            'includeChinese' => 'getIncludeChinese',
            'tokenizer' => 'getTokenizer',
            'quickAnalysis' => 'getQuickAnalysis',
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
    const FIELD_TYPE_STRING = 'string';
    const FIELD_TYPE_LONG = 'long';
    const FIELD_TYPE_FLOAT = 'float';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_STRING,
            self::FIELD_TYPE_LONG,
            self::FIELD_TYPE_FLOAT,
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
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['caseSensitive'] = isset($data['caseSensitive']) ? $data['caseSensitive'] : null;
        $this->container['includeChinese'] = isset($data['includeChinese']) ? $data['includeChinese'] : null;
        $this->container['tokenizer'] = isset($data['tokenizer']) ? $data['tokenizer'] : null;
        $this->container['quickAnalysis'] = isset($data['quickAnalysis']) ? $data['quickAnalysis'] : null;
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
        if ($this->container['fieldType'] === null) {
            $invalidProperties[] = "'fieldType' can't be null";
        }
            $allowedValues = $this->getFieldTypeAllowableValues();
                if (!is_null($this->container['fieldType']) && !in_array($this->container['fieldType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fieldType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['fieldName'] === null) {
            $invalidProperties[] = "'fieldName' can't be null";
        }
            if ((mb_strlen($this->container['fieldName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['fieldName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be bigger than or equal to 1.";
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
    * Gets fieldType
    *  字段类型
    *
    * @return string
    */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
    * Sets fieldType
    *
    * @param string $fieldType 字段类型
    *
    * @return $this
    */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;
        return $this;
    }

    /**
    * Gets fieldName
    *  字段名称
    *
    * @return string
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string $fieldName 字段名称
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets caseSensitive
    *  是否大小写敏感
    *
    * @return bool|null
    */
    public function getCaseSensitive()
    {
        return $this->container['caseSensitive'];
    }

    /**
    * Sets caseSensitive
    *
    * @param bool|null $caseSensitive 是否大小写敏感
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
    * @return bool|null
    */
    public function getIncludeChinese()
    {
        return $this->container['includeChinese'];
    }

    /**
    * Sets includeChinese
    *
    * @param bool|null $includeChinese 是否包含中文
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
    *  分词符
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
    * @param string $tokenizer 分词符
    *
    * @return $this
    */
    public function setTokenizer($tokenizer)
    {
        $this->container['tokenizer'] = $tokenizer;
        return $this;
    }

    /**
    * Gets quickAnalysis
    *  是否快速分析
    *
    * @return bool|null
    */
    public function getQuickAnalysis()
    {
        return $this->container['quickAnalysis'];
    }

    /**
    * Sets quickAnalysis
    *
    * @param bool|null $quickAnalysis 是否快速分析
    *
    * @return $this
    */
    public function setQuickAnalysis($quickAnalysis)
    {
        $this->container['quickAnalysis'] = $quickAnalysis;
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

